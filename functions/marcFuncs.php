<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 

/*********************************************************************************
 * Draws input html tag of type text.
 * @param string $tag input field tag
 * @param int $occur input field occurance if field is being entered as repeatable
 * @return void
 * @access public
 *********************************************************************************
 */
# fix falta meter el gettex

function printUsmarcText($tab,$tag,$subfieldCd,&$marcTags,&$marcSubflds,$showTagDesc, $opac = TRUE){
//echo $tab;  
if ($tab !== "opac"){//02-2015 jalg agragado para mostras MARC solo en modo admin
      echo $tag .$subfieldCd . "- ";
  }

  $arrayIndex = sprintf("%03d",$tag).$subfieldCd;
  
  
if(!isset($marcSubflds[$arrayIndex])){//JALG 02-2015 modificado por que si no existe el campo MARC genera un error
# FIX Falta cambiar los textos a locale
	echo "</br> <font class=\"error\"> Falla en la definicion de campos MARC: </h> </br>" . " tag = ".  $tag .
	 "</br> subfield =" . $subfieldCd . 
	"</br> Favor darlo de alta en mysql o cambiar por un número valido MARC </font> </br>";
	} else {
  $descr = $marcSubflds[$arrayIndex]->getDescription();
  
  }
//print_r ($descr);
  //    if (explode(' ', $descr, 2 )){
//	  $subfieldSet = explode(' ', $descr, 2 );
 //     }else {
	print_r ($descr);
 // }
 // $subfieldSet = explode(' ', $descr,2 ); jalg no daba titulo por que no tiene espacios
  if (($showTagDesc) 
    && (isset($marcTags[$tag]))
    && (isset($marcSubflds[$arrayIndex]))){
    if (!$opac) {
      echo $subfieldSet[0] . ' ';
    }
    echo H($marcTags[$tag]->getDescription());
    echo '- ' . $subfieldSet[1];
    //echo H($marcTags[$tag]->getDescription());
    //echo " (".H($marcSubflds[$arrayIndex]->getDescription()).")";
  } elseif (isset($marcSubflds[$arrayIndex])){
    if (!$opac) {
      echo $subfieldSet[0] . ' ';
    }
    echo $subfieldSet[1];
  }
}
