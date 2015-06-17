<?php
$displayXML = FALSE;

$process = array();
$subfields = array();
$subfieldcount = 0;

function ISBN($ISBN)
{
  if(substr($ISBN, 0, 3) == '978' && strlen($ISBN) > 12)
  {
    $ISBN = substr($ISBN, 3, 9);

    $checksum = 0;
    for ($i = 0; $i < 9; $i++)
    {
      $checksum += (10 - $i) * $ISBN{$i};
    }

    $checksum %= 11;
    $checksum = 11 - $checksum;

    if($checksum == 10)
    {
      $checksum = 'X';
    }
    else if($checksum == 11)
    {
      $checksum = 0;
    }

    $ISBN .= $checksum;
  }

  return $ISBN;
}

function startElement($parser, $name, $attribs)
{
  global $process, $subfields, $subfieldcount;

  echo "&lt;<font color=\"#0000cc\">$name</font>";
  if (count($attribs)) {
      foreach ($attribs as $k => $v) {
          echo " <font color=\"#009900\">$k</font>=\"<font color=\"#990000\">$v</font>\"";
      }
  }
  echo "&gt;";
}

function endElement($parser, $name)
{
   echo "&lt;/<font color=\"#0000cc\">$name</font>&gt;\r";
}

/**
 * Data between tags
 */
function characterData($parser, $data)
{
   global $process, $subfields, $subfieldcount;

   echo "<b>$data</b>";
   $process['data'] = $data;
}

function defaultHandler($parser, $data)
{
   if (substr($data, 0, 1) == "&" && substr($data, -1, 1) == ";") {
       printf('<font color="#aa00aa">%s</font>',
               htmlspecialchars($data));
   } else {
       printf('<font size="-1">%s</font>',
               htmlspecialchars($data));
   }
}

$locVal = get_param('locVal');//la cadena de busqueda

$locMaxlimit   = get_param('locMaxlimit');//JALG 3-215 permite pasar el limite de registros a buscar
	if  (get_param('locMaxlimit')==null){
		$locMaxlimit = $maximumRecords;
	}else {
		$locMaxlimit   = get_param('locMaxlimit');
	}

// Process ISBN - does nothing if not a valid ISBN.
$locVal = ISBN($locVal);

// Create query
$numHosts = count($host);
for($i = 0; $i < $numHosts; $i++)
{

  $req = "version=1.1&operation=searchRetrieve&query=\"" . $locVal . "\"&maximumRecords=" . $locMaxlimit . "&recordSchema=marcxml";
  $header = "POST " . $database[$i] . " HTTP/1.1\r\n";
  $header .= "HOST " . $host[$i] . "\r\n";
//  $header .= "Content-Type: application/x-www-form-urlencoded; charset=iso-8859-1\r\n";
  $header .= "Content-Type: application/x-www-form-urlencoded; charset=UTF-8\r\n";
  $header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
  @list($host, $port) = explode(':', $host[$i]);
  if(!isset($port) || empty($port))
  {
    $port = 7090;  // Dafault port
  }
  $fp = fsockopen($host, $port, $errno, $errstr, 30);
  // echo "http://" . $host .':' . $port . '/' . $req;

  if ($fp)
  {
    fputs($fp, $header . $req);

    // read the body data
    $res = '';
    $headerdone = false;
    while(!feof($fp))
    {
      $line = fgets($fp, 2048);
      if (strcmp($line, "\r\n") == 0)
      {
        // read the header
        $headerdone = true;
      }
      else if ($headerdone)
      {
        // header has been read. now read the contents
        $res .= $line;
      }
    }
  }
  else
  {
    trigger_error("Socket error " . $errstr . " (" . $errno . ")");
  }
}

if($displayXML === TRUE)
{
  # This spits out the XML returned - Use for debugging purposes

 $xml_parser = xml_parser_create();
  xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, 1);
  xml_set_element_handler($xml_parser, "startElement", "endElement");
  xml_set_character_data_handler($xml_parser, "characterData");
  xml_set_default_handler($xml_parser, "defaultHandler");

  echo "<pre>";
   if (!xml_parse($xml_parser, $res)) {
     die(sprintf("XML error: %s at line %d\n",
         xml_error_string(xml_get_error_code($xml_parser)),
        xml_get_current_line_number($xml_parser)));
   }
  echo "</pre>";
  xml_parser_free($xml_parser);
}

$values = array();
$xml_parser = xml_parser_create();
xml_parse_into_struct($xml_parser, $res, $loc_records);
xml_parser_free($xml_parser);
/*
 echo "<br />Values:<br /><pre>";
 print_r($values); 
 echo "</pre>\n";
*/
// Get total hits
foreach($values as $value)
{
  if($value['tag'] == 'ZS:NUMBEROFRECORDS')
  {
    $ttlHits = $value['value'];
    break;
  }
}
