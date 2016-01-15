<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */


#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["opac_Header"]        = "\$text='Katalog wyszukiwania On-line (OPAC)';";
$trans["opac_WelcomeMsg"]    = "\$text=
  'Witamy w katalogu publicznym naszej biblioteki. Możesz swobodnie wyszukiwać informacje. <br>
   Prosimy pamiętać, że należy przestrzegać <a href=\"http://www.library.org\"> regulaminu naszej biblioteki </a>.<br>
   Biblioteka jest zlokalizowana w <b> budynku szkoły w sali 115</b>
';";
$trans["opac_SearchTitle"]   = "\$text='Wyszukiwanie w opisach bibliograficznych:';";
$trans["opac_Keyword"]       = "\$text='Słowo kluczowe';";
$trans["opac_Title"]         = "\$text='Tytuł';";
$trans["opac_Author"]        = "\$text='Autor';";
$trans["opac_Subject"]       = "\$text='Temat';";
$trans["opac_Callno"]        = "\$text='Numer';";
$trans["opac_Search"]        = "\$text='Szukaj';";

?>
