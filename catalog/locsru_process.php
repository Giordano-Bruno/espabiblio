<?php  function get_marc_fields($xml) {
   $marc = array();
   $recordposition = 0;
   $subcount = 0;
   $total_hits = 0;
   foreach($xml AS $record)   {
     switch($record['tag'])     {
     case 'ZS:NUMBEROFRECORDS':       // Represents total number of records that matched, not actual returned.
    $total_hits = $record['value'];
       break;
     case 'CONTROLFIELD':
       $attributes = $record['attributes'];
       $marc[$recordposition][$attributes['TAG']] = trim($record['value']);
       break;
     case 'DATAFIELD':
       if(isset($record['attributes']))
       {
         $attributes = $record['attributes'];
         $datafield = $attributes['TAG'];
       }
       break;
     case 'SUBFIELD':
       $attributes = $record['attributes'];
       $code = $attributes['CODE'];
       $value = $record['value'];
       $indicie = $datafield . $code;
       $extratrim = '';
       switch($indicie)
       {
       case MARC_ISBN:
         $value = substr($value, 0, 10);
         break;
       case MARC_TITLE:
       case MARC_PUBLICATION_PLACE:
         $extratrim = ':/';
         break;
       case MARC_SUBTITLE:
         $extratrim = '/';
         break;
       case MARC_PUBLISHER:
         $extratrim = ',';
         break;
       case MARC_PAGES:
         $value = (int)($value);
         break;
       }
       if($indicie != MARC_SUBJECT)
       {
         if(isset($marc[$recordposition][$indicie]) && !empty($marc[$recordposition][$indicie]))
         {
           $marc[$recordposition][$indicie] .= ', ' . trim($value, ' '.$extratrim);
         }
         else
         {
           $marc[$recordposition][$indicie] = trim($value, ' '.$extratrim);
         }
       }
       else
       {
         if($subcount == 0)
         {
           $marc[$recordposition][$indicie] = trim($value, ' '. $extratrim);
           $subcount++;
         }
         else
         {
           $marc[$recordposition][$indicie.$subcount] = trim($value, ' ' . $extratrim);
           $subcount++;
         }
       }
       break;
     case 'ZS:RECORDPOSITION':
       $recordposition++;
       $subcount = 0;
       break;
     }
   }
    /**    
* The ZS:RECORDPOSITION tag does not occur when only one record is returned.    
* Update recordposition to indicate 1 record.    
*/
   if($recordposition == 0 && $total_hits > 0)   {
     $recordposition = 1;
   }
    return array($recordposition, $marc);
 }
  list($num_records, $marc) = get_marc_fields($loc_records);
  if($num_records == 1) {   $postVars['values'] = $marc[0];
   $action = 'Edit';
 } else if($num_records < 1) {
   echo "No se Encontraron Resultados Para  " . $locVal . "\n <br>";
   echo "Talvez no ingreso un término a buscar \n";
   
   echo "<form name='form' action='". $_SERVER['PHP_SELF'] ."' method='POST'>\n";
   echo "  <input type='submit' name='action' value='Volver' class='button' />\n";
   echo "</form>\n";
 } 
else
 {
   $action = 'Multiple';
 }
