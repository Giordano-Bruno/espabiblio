<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
* jalg 2012  se agregaron variables para corregir trauducion en la ficha de administracion de biblioteca. dias 
* jalg 2012 se agrego $trans["admin_settingsViewlist"] permite activar o desactivar la funcion del listado general de libros. 
#* MODIFICADO POR JOSE ANTONIO LARA joanlaga@hotmail.com PARA SOPORTE DE Z39.50 (2012)
#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
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
$trans["sharedCancel"]			= "\$text = 'Anuluj';";
$trans["sharedDelete"]			= "\$text = 'Usuń';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["sharedComfirmDelete"]		= "\$text = 'Tak, usuń wszystkie wybrane pozycje';";
$trans["sharedDeleteWarning"]		= "\$text = 'Tej akcji nie można cofnąć. Czy na pewno?;";
$trans["sharedRecordIsDelete"]		= "\$text = 'Wybrane przedmioty zostaną usunięte.';";
$trans["sharedRecordsAreDeleted"]	= "\$text = 'Rekord został usunięty.';";
$trans["sharedListOfDeletedItems"]	= "\$text = 'Lista zostanie usunięta';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Informacje o pozycji';";
$trans["biblioViewMaterialType"]   = "\$text = 'Typ';";
$trans["biblioViewCollection"]     = "\$text = 'Dział';";
$trans["biblioViewCallNmbr"]       = "\$text = 'Księgozbiór';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'Egzemplarze';";
$trans["biblioViewTble2Col1"]      = "\$text = 'Numer #';";
$trans["biblioViewTble2Col2"]      = "\$text = 'Opis';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Status';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Data włączenia';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Data zwrotu';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Funkcje';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'Usuń';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'Edytuj';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'Dodatkowe informacje';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'Brak informacji.';";
$trans["biblioViewNoCopies"]       = "\$text = 'Brak egzemplarzy.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Pokaż w OPAC';";
$trans["biblioViewNewCopy"]        = "\$text = 'Dodaj nowy egzemplarz';";
$trans["biblioViewNeweCopy"]        = "\$text = 'Nowy egzemplarz w wersji elektronicznej';";
$trans["biblioViewYes"]            = "\$text = 'Tak';";
$trans["biblioViewNo"]             = "\$text = 'Nie';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["biblioViewPictureHeader"]		= "\$text = 'Okładka';";
$trans["biblioViewPictureContra"]		= "\$text = 'Powrót';";
$trans["biblioViewDigitalHeader"]		= "\$text = 'Archiwizuj cyfrowo';";
$trans["biblioViewPictureAutor"]		= "\$text = 'Autor';";
$trans["biblioViewDigitalNote"]			= "\$text = 'Nota: Pliki są przechowywane w folderze local /media/digitales. ';";
$trans["Are you sure to remove this picture?"]  = "\$text = 'Czy na pewno chcesz usunąć obraz?';";
$trans["Remove"]				= "\$text = 'Usuń';";
$trans["biblioViewPictureHeaderIsbn"]				= "\$text = 'Imagen buscada por ISBN desde Servidor Externo';";
$trans["biblioViewNoAddInfoIsbn"]				= "\$text = 'Se requiere ISBN y es Buscada en servidor externo, se recomienda en caso de aparecer, descargar e incorporar archivo, es mas rapido así';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************

$trans["biblioSearchNoResults"]    = "\$text = 'Brak elementów do wyświetlenia.';";
$trans["biblioSearchResults"]      = "\$text = 'Wyniki wyszukiwania';";
$trans["biblioSearchResultPages"]  = "\$text = 'Wyników na stronie';";
$trans["biblioSearchPrev"]         = "\$text = 'Wstecz ';";
$trans["biblioSearchNext"]         = "\$text = ' Dalej';";
$trans["First"]         = "\$text = 'Pierwsza';";
$trans["Last"]         = "\$text = 'Ostatnia';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) { \$text = '%items% Wynik wyszukiwania.'; } else { \$text = '%items% wyniki wyszukiwania.'; }";
$trans["biblioSearchAuthor"]       = "\$text = 'Autor';";
$trans["biblioSearchTitle"]        = "\$text = 'Tytuł';";
$trans["biblioSearchTitleRemainder"] = "\$text = 'Podtytuł';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'Porządkuj według autora';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'Porządkuj według tytułu';";
$trans["biblioSearchMaterial"]     = "\$text = 'Materiał';";
$trans["biblioSearchCollection"]   = "\$text = 'Dział';";
$trans["biblioSearchCall"]         = "\$text = 'Księgozbiór';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Kod egzemplarza';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Status';";
$trans["biblioSearchNoCopies"]     = "\$text = 'Brak egzemplarzy.';";
$trans["biblioSearchHold"]         = "\$text = 'rezerwuj';";
$trans["biblioSearchOutIn"]        = "\$text = 'Wypożycz/zwróć';";
$trans["biblioSearchDetail"]       = "\$text = 'Pokaż szczegóły opisu pozycji';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Podaj kod kreskowy, aby wypożyczyć';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Podaj kod kreskowy, aby zarezerwować';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["PictDesc"]                 = "\$text = 'La imagen de la portada precisa estar localizada en la carpeta ..media/fotos/portadas.';";
$trans["biblioSearchFirst"]        = "\$text = 'Pierwszy';";
$trans["biblioSearchLast"]         = "\$text = 'Ostatni';";
$trans["biblioSearchDigitales"]       = "\$text = 'Descargar Archivo';";//jalg para descarga de matrials digitals

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Logowanie administratora';";
$trans["loginFormUsername"]        = "\$text = 'Nazwa';";
$trans["loginFormPassword"]        = "\$text = 'Hasło';";
$trans["loginFormLogin"]           = "\$text = 'OK';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Czy usunąć';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='Rezerwacja została usunięta.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Pomoc ESPABIBLIO 3.3';";
$trans["helpHeaderCloseWin"]       = "\$text='Zamknij okno';";
$trans["helpHeaderContents"]       = "\$text='Zawartość';";
$trans["helpHeaderPrint"]          = "\$text='Drukuj';";
$trans["catalogResults"]           = "\$text='Wyniki wyszukiwania';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='Dziś:';";
$trans["headerDateFormat"]         = "\$text='d M, Y';";
$trans["headerLibraryHours"]       = "\$text='Godziny pracy:';";
$trans["headerLibraryAders"]       = "\$text='Adres:';";//add jalg
$trans["headerLibraryPhone"]       = "\$text='Tele.:';";
$trans["headerHome"]               = "\$text='Informacje';";
$trans["headerCirculation"]        = "\$text='Obsługa czytelnika';";
$trans["headerCataloging"]         = "\$text='Katalogowanie';";
$trans["headerAdmin"]              = "\$text='Administracja';";
$trans["headerReports"]            = "\$text='Raporty';";
$trans["headerOpac"]            = "\$text='Katalog';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
//agregado jalg joanlaga@hotmail.com
$trans["headerEstat"]              = "\$text=' Statystyka ';";
$trans["headerList"]              = "\$text=' Lista główna ';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]		= "\$text='Strona główna';";
$trans["footerOPAC"]			= "\$text='Katalog (OPAC)';";
$trans["footerHelp"]			= "\$text='Pomoc';";
$trans["Support"]			= "\$text='Wsparcie i aktualizacje';";
$trans["footerPoweredBy"]		= "\$text=' Openbiblio 7.1 y EspaBiblio \"Giordano Bruno\" V 3.41';";
$trans["footerDatabaseVersion"]		= "\$text='Wersja Bazy danych';";
$trans["footerCodeVersion"]		= "\$text='Versión del Código ';";
$trans["footerCopyright"]		= "\$text='Copyright';";
$trans["footerUnderThe"]		= "\$text='bajo';";
$trans["footerGPL"]			= "\$text='GNU General Public License';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
#*  Translation text for page advanced_search.php
#****************************************************************************
$trans["advsAdvancedSearch"]	= "\$text = 'Wyszukiwanie zaawansowane';";
$trans["advsMaterialType"]	= "\$text = 'Typ';"; 
$trans["advsCollectionType"]	= "\$text = 'Dział';";
$trans["advsSearch"]		= "\$text = 'Szukaj';";
$trans["advsClear"]		= "\$text = 'Wyczyść';";
$trans["advsPublishedYear"]	= "\$text = 'Rok wydania';";
$trans["advsLanguage"]		= "\$text = 'Język';";
$trans["optThai"]		= "\$text = 'Thailandés';";
$trans["optEnglish"]		= "\$text = 'Inglés';";
$trans["optFrench"]		= "\$text = 'Francés';";
$trans["optEspa"]		= "\$text = 'Espanol';";
$trans["cancel"]		= "\$text = 'Anuluj';";
$trans["or"]			= "\$text = 'lub';";
$trans["any"]			= "\$text = 'Wszystko';";
