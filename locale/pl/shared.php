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
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["sharedCancel"]             = "\$text = 'Porzuć';";
$trans["sharedDelete"]             = "\$text = 'Kasuj';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Rekord bibliograficzny';";
$trans["biblioViewMaterialType"]   = "\$text = 'Material Type';";
$trans["biblioViewCollection"]     = "\$text = 'Kolekcja';";
$trans["biblioViewCallNmbr"]       = "\$text = 'Numer KATALOGOWY';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'Informacje bibliograficzne egzemplarza';";
$trans["biblioViewTble2Col1"]      = "\$text = 'BARCODE #';";
$trans["biblioViewTble2Col2"]      = "\$text = 'Opis';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Status';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Status Dt';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Data zwrotu';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Funkcja';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'kasuj';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'edycja';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'Dodatkowe informacje bibliograficzne';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'No additional bibliographic information available.';";
$trans["biblioViewNoCopies"]       = "\$text = 'No copies have been created.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Dostępny w katalogu OPAC';";
$trans["biblioViewNewCopy"]        = "\$text = 'Dodaj nowy egzemplarz (BARCODE)';";
$trans["biblioViewNeweCopy"]       = "\$text = 'Dodaj nowy egzemplarz elektroniczny';";
$trans["biblioViewYes"]            = "\$text = 'tak';";
$trans["biblioViewNo"]             = "\$text = 'nie';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = 'Brak danych.';";
$trans["biblioSearchResults"]      = "\$text = 'Rezultaty wyszukiwania';";
$trans["biblioSearchResultPages"]  = "\$text = 'Strony rezultatów';";
$trans["biblioSearchPrev"]         = "\$text = 'poprz';";
$trans["biblioSearchNext"]         = "\$text = 'nast.';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = '%items% znaleziony';
                                      } else {
                                        \$text = '%items% znalezionych';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = ' sortowane wg autora';";
$trans["biblioSearchtitle"]        = "\$text = ' sortowane wg tytułu';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'sortuj wg autora';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'sortuj wg tytułu';";
$trans["biblioSearchTitle"]        = "\$text = 'TYTUŁ';";
$trans["biblioSearchAuthor"]       = "\$text = 'Autor';";
$trans["biblioSearchMaterial"]     = "\$text = 'Materiał';";
$trans["biblioSearchCollection"]   = "\$text = 'Kolekcja';";
$trans["biblioSearchCall"]         = "\$text = 'Numer KATALOGOWY';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Egzemplarz - BARCODE';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Status';";
$trans["biblioSearchNoCopies"]     = "\$text = 'Brak egzemplarzy.';";
$trans["biblioSearchHold"]         = "\$text = '_rezerwacja_';";
$trans["biblioSearchOutIn"]        = "\$text = '_wypożyczenia_';";
$trans["biblioSearchDetail"]       = "\$text = 'Pokaż dokładne dane bibliograficzne';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Barcode to Check Out or Check In Form';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Barcode to Hold Form';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Logowanie pracownika';";
$trans["loginFormUsername"]        = "\$text = 'Użytkownik';";
$trans["loginFormPassword"]        = "\$text = 'Hasło';";
$trans["loginFormLogin"]           = "\$text = 'Wejście';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Na pewno skasować rezerwację?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='Rezerwacja skasowana.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='OpenBiblio - Pomoc';";
$trans["helpHeaderCloseWin"]       = "\$text='Zamknij';";
$trans["helpHeaderContents"]       = "\$text='Zawartość';";
$trans["helpHeaderPrint"]          = "\$text='Druk';";

$trans["catalogResults"]           = "\$text='Rezultaty wyszukiwania';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='Aktualna data:';";
$trans["headerDateFormat"]         = "\$text='M d, Y';";
$trans["headerLibraryHours"]       = "\$text='Godziny otwarcia:';";
$trans["headerLibraryPhone"]       = "\$text='Telefon kontaktowy:';";
$trans["headerHome"]               = "\$text='Start';";
$trans["headerCirculation"]        = "\$text='WYPOŻYCZENIA';";
$trans["headerCataloging"]         = "\$text='Katalogowanie';";
$trans["headerAdmin"]              = "\$text='Administracja';";
$trans["headerReports"]            = "\$text='Raporty';";
$trans["headerInventory"]            = "\$text='Inwentaryzacja';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='BIBLIOTEKA';";
$trans["footerOPAC"]               = "\$text='OPAC';";
$trans["footerHelp"]               = "\$text='Pomoc';";
$trans["footerPoweredBy"]          = "\$text='Powered by OpenBiblio version';";
$trans["footerDatabaseVersion"]    = "\$text='database version';";
$trans["footerCopyright"]          = "\$text='Copyright';";
$trans["footerUnderThe"]           = "\$text='under the';";
$trans["footerGPL"]                = "\$text='GNU General Public License';";

#******** Dodane przez ABIX ****************
$trans["biblioCopyNewPrice"]        = "\$text = 'Cena';";

?>
