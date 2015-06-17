<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 // modificado para mostrar imagen portada joanlaga@hotmail.com
define("OBIB_TEXT_CNTRL", "0");
define("OBIB_TEXTAREA_CNTRL", "1");
define("OBIB_FILE_CNTRL", "2");
define("OBIB_FILE_CNTRLC", "3");
define("OBIB_FILE_CNTRLD", "4");
define("OBIB_FILE_CNTRLA", "5");
define("OBIB_FILE_CNTRLS", "6");
define("OBIB_FILE_CNTRLB", "7");
define("OBIB_FILE_CNTRLK", "8");

   // modificado para mostrar imagen portada
/*********************************************************************************
 * Draws input html tag of type text.
 * @param string $tag input field tag
 * @param string $subfieldCd input field subfield code
 * @param boolean $required true if field is required
 * @param array_reference &$fieldIds reference to array containing field ids if updating fields
 * @param array_reference &$postVars reference to array containing all input values
 * @param array_reference &$pageErrors reference to array containing all input errors
 * @param array_reference &$marcTags reference to array containing marc tag descriptions
 * @param array_reference &$marcSubflds reference to array containing marc subfield descriptions
 * @param boolean $showTagDesc set to true if the tag description should also show
 * @param string $cntrlType see defined constants OBIB_TEXT_CNTRL & OBIB_TEXTAREA_CNTRL above
 * @param int $occur input field occurance if field is being entered as repeatable
 * @return void
 * @access public
 *********************************************************************************
 */
function printUsmarcInputText($tag,$subfieldCd,$required,&$postVars,&$pageErrors,&$marcTags,&$marcSubflds,$showTagDesc,$cntrlType,$occur=""){

  require_once("../classes/Localize.php");
  $shareloc = new Localize(OBIB_LOCALE, "shared");

  $arrayIndex = sprintf("%03d",$tag).$subfieldCd;
  $formIndex = $arrayIndex.$occur;
  $size = 40;
  $maxLen = 300;
  $cols = 35;
  $rows = 4;

  if (!isset($postVars)) {
    $value = "";
  } elseif (!isset($postVars['values'][$formIndex])) {
      $value = "";
  } else {
      $value = $postVars['values'][$formIndex];
  }
  if (!isset($postVars['fieldIds'])) {
    $fieldId = "";
  } elseif (!isset($postVars['fieldIds'][$formIndex])) {
      $fieldId = "";
  } else {
      $fieldId = $postVars['fieldIds'][$formIndex];
  }
  if (!isset($pageErrors)) {
    $error = "";
  } elseif (!isset($pageErrors[$formIndex])) {
      $error = "";
  } else {
      $error = $pageErrors[$formIndex];
  }

  if ($required) {
    echo "<tr><td class=\"primary form-required\" valign=\"top\">\n";
    echo "<sup>*</sup> ";
  }
  else {
    echo "<tr><td class=\"primary form-optional\" valign=\"top\">\n";
  }
  if (($showTagDesc) 
    && (isset($marcTags[$tag]))
    && (isset($marcSubflds[$arrayIndex]))){
    $descr = $marcSubflds[$arrayIndex]->getDescription();
    $subfieldSet = explode(' ', $descr, 2);
    echo  $tag . $subfieldCd . ' ' ;//muestra los indices de campos MARC
//    echo $subfieldSet[0] . ' ' . H($marcTags[$tag]->getDescription());// muestra prefijo
    echo  ' ; ' . H($marcTags[$tag]->getDescription());
//    echo ' - ' . $subfieldSet[1];
//    echo " - " .  H($marcTags[$tag]->getDescription());//test
    echo " - (".H($marcSubflds[$arrayIndex]->getDescription()).")";//test
  } elseif (isset($marcSubflds[$arrayIndex])){
  echo  $tag . $subfieldCd . ' ' ;//muestra los indices de campos MARC
//    echo H($marcSubflds[$arrayIndex]->getDescription());
    echo  ' ; ' . H($marcTags[$tag]->getDescription());
    echo " - (".H($marcSubflds[$arrayIndex]->getDescription()).")";//test
  }
  if ($occur != "") {
    echo " ".H($occur+1);
  }
  echo ":\n</td>\n";
  echo "<td valign=\"top\" class=\"primary\">\n";
  
   switch ($cntrlType) {
  
  case OBIB_TEXTAREA_CNTRL:
    $attrs= array('cols'=>H($cols),'rows'=>H($rows));
    echo inputField('textarea', "values[".H($formIndex)."]", $value, $attrs);
        break;  

  case OBIB_TEXT_CNTRL:
    $attrs= array('size'=>H($size),'maxlength'=>H($maxLen));
    echo inputField('text', "values[".H($formIndex)."]", $value, $attrs);
    break;  

  case OBIB_FILE_CNTRLF:
    echo "<input type=\"text\"";
    echo " name=\"values[".H($formIndex)."]\" size=\"".H($size)."\" maxlength=\"".H($maxLen)."\" ";
    echo "value=\"".H($value)."\" >";    
    echo "<sup>(6)</sup>";
    break;  

  case OBIB_FILE_CNTRLD:
    echo "<input type=\"text\"";
    echo " name=\"values[".H($formIndex)."]\" size=\"".H($size)."\" maxlength=\"".H($maxLen)."\" ";
    echo " onChange=\"File_DigiReload()\" ";
    echo "value=\"".H($value)."\" >";    
    echo "<sup>(5)</sup>";
    break;  

  case OBIB_FILE_CNTRLA:
    echo "<input type=\"text\"";
    echo " name=\"values[".H($formIndex)."]\" size=\"".H($size)."\" maxlength=\"".H($maxLen)."\" ";
    echo " onChange=\"File_AutReload()\" ";
    echo "value=\"".H($value)."\" >";
    echo "<sup>(3)</sup>".H($value);  
    break;  

  case OBIB_FILE_CNTRLS:
    echo "<input type=\"text\"";
    echo " name=\"values[".H($formIndex)."]\" size=\"".H($size)."\" maxlength=\"".H($maxLen)."\" ";
    echo " onChange=\"File_CoverReload()\" ";
    echo "value=\"".H($value)."\" >";
    echo "<sup>(1)</sup>". $values[H($formIndex)];  
    break;  

  case OBIB_FILE_CNTRL:
    echo "<input type=\"file\"";
    echo " name=\"values[".H($formIndex)."]\" size=\"28\" />";
    echo "<input type=\"hidden\" name=\"old[".H($formIndex)."]\" value=\"$value\" />";
    if ($value) {
      $title = $postVars["values"]["245a"];
      $filepath = "../" . COVER_PATH . "/$value";
      $thumbpath = make_thumbnail($filepath, array('height' => 120));
      if (file_exists($thumbpath)) {
        echo "<br /><a href=\"$filepath\" title=\"$title\" target=\"_blank\"><img src=\"$thumbpath\" border=\"0\" title=\"$title\" alt=\"$title\" /></a>";
      } else {
        echo "<div class=\"error\">File does not exists.</div>";
      }
      echo " <a href=\"../catalog/biblio_cover_del.php?bibid=" . HURL($_REQUEST['bibid']) ."&redirect=edit\" onclick=\"javascript: return confirm('" . htmlspecialchars($shareloc->getText('Are you sure to remove this picture?'), ENT_QUOTES) . "');\">" . $shareloc->getText('Remove') . "</a>";
    }
    echo "<sup>(1)</sup>" ;  
    break;  

  case OBIB_FILE_CNTRLB:
    echo "<input type=\"file\"";
    echo " name=\"autor\"  ";
    echo " onChange=\"File_AutReload()\">\n";
    echo "<sup>(2)</sup>" ;  
    break;  

  case OBIB_FILE_CNTRLK:
    echo "<input type=\"file\"";
    echo " name=\"digital\"  ";
    echo " onChange=\"File_DigiReload()\" ";
    echo "<sup>(4)</sup>" ;  
    break;  

   default:
       break;
}

  if ($error != "") {
    echo "<br><font class=\"error\">";
    if ($formIndex == '020a' || $formIndex == '245a') // Enable suggestion link for existing ISBN check.
      echo $error."</font>";
    else 
      echo H($error)."</font>";
  }
  echo "<input type=\"hidden\" name=\"indexes[]\" value=\"".H($formIndex)."\" >\n";
  echo "<input type=\"hidden\" name=\"tags[".H($formIndex)."]\" value=\"".H($tag)."\" >\n";
  echo "<input type=\"hidden\" name=\"subfieldCds[".H($formIndex)."]\" value=\"".H($subfieldCd)."\" >\n";
  echo "<input type=\"hidden\" name=\"fieldIds[".H($formIndex)."]\" value=\"".H($fieldId)."\" >\n";
  echo "<input type=\"hidden\" name=\"requiredFlgs[".H($formIndex)."]\" value=\"".H($required)."\" >\n";
  echo "</td></tr>\n";
}
