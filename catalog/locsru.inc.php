<?php

$host[0] 	 = 'z3950.loc.gov:7090';
$hostName[0] = 'U.S. Library of Congress';
$database[0] = 'voyager';
/*
$host[0] 	 = 'lx2.loc.gov:210';
$hostName[0] = 'U.S. Library of Congress';
$database[0] = 'LCDB';
*/

$maximumRecords = 25;// ya es pasado por get como locMaxlimit desde form

define('MARC_TITLE', '245a');
define('MARC_AUTHOR', '100a');
define('MARC_ISBN', '020a');
define('MARC_SUBTITLE', '245b');
define('MARC_PUBLICATION_PLACE', '260a');
define('MARC_PUBLISHER', '260b');
define('MARC_PUBLICATION_DATE', '260c');
define('MARC_PAGES', '300a');
define('MARC_SUBJECT', '650a');

function get_param($param)
{
  if(isset($_GET[$param]))
  {
    return $_GET[$param];
  }
  else if (isset($_POST[$param]))
  {
    return $_POST[$param];
  }
  return NULL;
}

function print_array($array)
{
  echo "<pre>";
  if(is_array($array))
  {
    print_r($array);
  }  else  {
    echo htmlentities($array, ENT_QUOTES);
  }
  echo "</pre><br />\n";
}
