<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 * Creado por Fernando (Bruj0)
 */
/*********************************************************************************
 * Elimina acentos de una cadena y los espacios los cambia por un '_'
 * @param String $text text to check
 * @return String
 * @access public
 *********************************************************************************
 */

/*
function cleanString($string){
	echo $string;
	return strtr($string," àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ", "_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY");
}
*/

function cleanString($text)
	{                
		$text = htmlentities($text, ENT_QUOTES, 'UTF-8');
		$text = strtolower($text);
		$patron = array (
			/* Espacios, puntos y comas por guion
			'/[\., ]+/' => '_',*/
			// Espacios por guion
			'/[\ ]+/' => '_',
 
			// Vocales
			'/&agrave;/' => 'a',
			'/&egrave;/' => 'e',
			'/&igrave;/' => 'i',
			'/&ograve;/' => 'o',
			'/&ugrave;/' => 'u',
 
			'/&aacute;/' => 'a',
			'/&eacute;/' => 'e',
			'/&iacute;/' => 'i',
			'/&oacute;/' => 'o',
			'/&uacute;/' => 'u',
 
			'/&acirc;/' => 'a',
			'/&ecirc;/' => 'e',
			'/&icirc;/' => 'i',
			'/&ocirc;/' => 'o',
			'/&ucirc;/' => 'u',
 
			'/&atilde;/' => 'a',
			'/&etilde;/' => 'e',
			'/&itilde;/' => 'i',
			'/&otilde;/' => 'o',
			'/&utilde;/' => 'u',
 
			'/&auml;/' => 'a',
			'/&euml;/' => 'e',
			'/&iuml;/' => 'i',
			'/&ouml;/' => 'o',
			'/&uuml;/' => 'u',
 
			'/&auml;/' => 'a',
			'/&euml;/' => 'e',
			'/&iuml;/' => 'i',
			'/&ouml;/' => 'o',
			'/&uuml;/' => 'u',
 
			// Otras letras y caracteres especiales
			'/&aring;/' => 'a',
			'/&ntilde;/' => 'n',
 
			// Agregar aqui mas caracteres si es necesario
 
		);
 
		$text = preg_replace(array_keys($patron),array_values($patron),$text);
		return $text;
	}



function cleanSpace($text)
	{                
		$text = htmlentities($text, ENT_QUOTES, 'UTF-8');
		$text = strtolower($text);

		$patron = array (
		//	 Espacios, puntos y comas por guion
			'/[\., ]+/' => '_',
			// Espacios por guion
			'/[\ ]+/' => '_',
 
			// Vocales
			'/-/' => '',
			'/_/' => '',
			'/ /' => '', 
		);
 
		$text = preg_replace(array_keys($patron),array_values($patron),$text);
		return $text;
	}
