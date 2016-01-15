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
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = 'Wejście';";
$trans["logout"]                   = "\$text = 'Koniec';";
$trans["help"]                     = "\$text = 'Pomoc';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = 'Biblioteka';";
$trans["homeLicenseLink"]          = "\$text = 'Licencja GPL';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = 'Administrator';";
$trans["adminStaff"]               = "\$text = 'Pracownicy';";
$trans["adminSettings"]            = "\$text = 'Biblioteka - Ustawienia';";
$trans["adminMaterialTypes"]       = "\$text = 'Material Types';";
$trans["adminCollections"]         = "\$text = 'Kolekcje';";
$trans["adminThemes"]              = "\$text = 'Wygląd';";
$trans["adminTranslation"]         = "\$text = 'Tłumaczenia';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = 'KATALOG';";
$trans["catalogSearch1"]           = "\$text = 'Wyszukiwanie Biblio 1';";
$trans["catalogSearch2"]           = "\$text = 'Wyszukiwanie Biblio 2';";
$trans["catalogResults"]           = "\$text = 'Rezultaty wyszukiwania';";
$trans["catalogBibInfo"]           = "\$text = 'Informacje';";
$trans["catalogBibEdit"]           = "\$text = 'Edycja podstawowa';";
$trans["catalogBibEditMarc"]       = "\$text = 'Edycja USMARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'Nowe pole USMARC';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'Nowe pole USMARC (short)';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Edit MARC Fld';";
$trans["catalogCopyNew"]           = "\$text = 'Nowy egzemplarz';";
$trans["catalogCopyEdit"]          = "\$text = 'Edytuj egzemplarz';";
$trans["catalogHolds"]             = "\$text = 'Zgłoszenia przechowania';";
$trans["catalogDelete"]            = "\$text = 'Kasuj';";
$trans["catalogBibNewLike"]        = "\$text = 'Na podstawie';";
$trans["catalogBibNew"]            = "\$text = 'Nowy opis Bibliograficzny';";
$trans["Upload Marc Data"]         = "\$text = 'Pobierz dane USMARC';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = 'RAPORTY';";
$trans["reportsReportListLink"]    = "\$text = 'Lista Raportów';";
$trans["reportsLabelsLink"]        = "\$text = 'Druk etykiet';";
$trans["reportsLettersLink"]        = "\$text = 'Print Letters';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Szukaj';";
$trans["catalogSearch2"]           = "\$text = 'Wyszukiwanie bibliograficzne';";
$trans["catalogResults"]           = "\$text = 'Rezultaty wyszukiwania';";
$trans["catalogBibInfo"]           = "\$text = 'Informacje bibliograficzne';";

#Added

$trans["memberInfo"]="\$text = 'Informacje o czytelniku';";
$trans["memberSearch"]="\$text = 'Wyszukiwanie czytelnika';";
$trans["editInfo"]="\$text = 'Edit Info';";
$trans["checkoutHistory"]= "\$text = 'Historia wypożyczeń';";
$trans["account"]="\$text = 'Konto';";
$trans["checkIn"]="\$text = 'Zwrot pozycji';";
$trans["memberSearch"]= "\$text = 'Wyszukiwanie';";
$trans["newMember"]= "\$text = 'Nowy czytelnik';";
//$trans["account"]        	= "\$text = 'Account';";
?>
