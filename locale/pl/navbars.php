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
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = 'Zaloguj';";
$trans["logout"]                   = "\$text = 'Wyloguj';";
$trans["help"]                     = "\$text = 'Pomoc';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]		= "\$text = 'Inicio';";
$trans["homeLicenseLink"]	= "\$text = 'Licencia-Esp';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["homeLicenseLink1"]	= "\$text = 'Licencia-Original';";
$trans['homeRadmeLink']		= "\$text = 'Léame antes de instalar';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]		= "\$text = 'Zarządzanie';";
$trans["adminStaff"]		= "\$text = 'Pracownicy';";
$trans["adminSettings"]		= "\$text = 'Ustawienia Biblioteki';";
$trans["adminMaterialTypes"]	= "\$text = 'Typ zasobów';";
$trans["adminCollections"]	= "\$text = 'Działy';";
$trans["adminThemes"]		= "\$text = 'Motywy';";
$trans["adminTranslation"]	= "\$text = 'Język';";
$trans["Yaz test"]		= "\$text = 'Test YAZ';";


#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["Checkout Privs"]	= "\$text = 'Ustawienia wypożyczeń';";
$trans["adminCheckoutPriv"]	= "\$text = 'Ustawienia wypożyczeń';";
$trans["Cover Lookup Options"]	= "\$text = 'Wyszukiwanie okładek';";
$trans["adminImportExport"]	= "\$text = 'Import/eksport';";
$trans["adminMaterialStatus"]	= "\$text = 'Status materiałów';";
$trans["Member Types"]		= "\$text = 'Grupy czytelników';";
$trans["Member Fields"]		= "\$text = 'Logowanie czytelnika';";
$trans["Member Fields dm"]	= "\$text = 'Dodaj Pole';";
$trans["Copy Fields"]		= "\$text = 'Kopiuj pole';";// es esta traduccion ?? jalg


#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]		= "\$text = 'Opis funkcji katalogowania';";
$trans["catalogSearch1"]		= "\$text = 'Wyniki wyszukiwania materiałów';";
$trans["catalogSearch2"]		= "\$text = 'Wyniki wyszukiwania pozycji';";
$trans["catalogResults"]		= "\$text = 'Wyniki wyszukiwania';";
$trans["catalogBibInfo"]		= "\$text = 'Informacje o pozycji';";
$trans["catalogBibEdit"]		= "\$text = 'Edycja Podstawowa';";
$trans["catalogBibEditMarc"]		= "\$text = 'Edytuj-MARC';";
$trans["catalogBibMarcNewFld"]		= "\$text = 'Nowe pole MARC';";
$trans["catalogBibMarcNewFldShrt"]	= "\$text = 'Nowe MARC';";
$trans["catalogBibMarcEditFld"]		= "\$text = 'Edytuj pole MARC';";
$trans["catalogCopyNew"]		= "\$text = 'Dodaj egzemplarz';";
$trans["catalogCopyEdit"]		= "\$text = 'Edytuj egzemplarz';";
$trans["catalogHolds"]			= "\$text = 'Rezerwacje';";
$trans["catalogDelete"]			= "\$text = 'Usuń';";
$trans["catalogBibNewLike"]		= "\$text = '¿Usar datos para un nuevo registro?';";
$trans["catalogBibNew"]			= "\$text = 'Nowy materiał';";
$trans["Upload Marc Data"]		= "\$text = 'Dodaj dane Marc';";
#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["catalogBibBulkDelete"]		= "\$text = 'Usuń pozycję';";
$trans["CSVImport"]			= "\$text = 'Importuj dane bibliograficzne z CSV';";
$trans["adminTranslate"]		= "\$text = 'Tłumaczenie administratora';";
$trans["cdu"]				= "\$text = 'Tabela CDU';";
$trans["cdd"]				= "\$text = 'Tabela CDD';";
$trans["ibic"]				= "\$text = 'Tabela IBIC';";
$trans["Upload CSV Data"]		= "\$text = 'Dodaj kopie z pliku CSV';";
$trans["marc_list"]			= "\$text = 'lista pól MARC';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]	= "\$text = 'Informacje';";
$trans["reportsReportListLink"]  = "\$text = 'Dostępne raporty';";
$trans["reportsLabelsLink"]      = "\$text = 'Drukuj kody kreskowe';";
$trans["reportsLettersLink"]     = "\$text = 'Drukuj karty';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["reportsResult"]          = "\$text = 'Raport wyników';";
$trans["reportsCriteria"]        = "\$text = 'Kryteria';";
$trans["reportsFailedImport"]	= "\$text = 'Importuj plik z raportem';";
$trans["reportsNoCover"]         = "\$text = 'Pozycje bez okładek';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Szukaj';";
$trans["catalogSearch2"]           = "\$text = 'Szukaj';";
$trans["catalogResults"]           = "\$text = 'Wyniki wyszukiwania';";
$trans["catalogBibInfo"]           = "\$text = 'Logowanie czytelnika';";

#Added
#****************************************************************************
#*  Translation text for page Added
#****************************************************************************
$trans["memberInfo"]		= "\$text = 'Czytelnicy';";
$trans["memberSearch"]		= "\$text = 'Przeszukuj czytelników';";
$trans["editInfo"]		= "\$text = 'Edytuj';";
$trans["checkoutHistory"]	= "\$text = 'Historia wypożyczeń';";
$trans["account"]		= "\$text = 'Konto';";
$trans["checkIn"]		= "\$text = 'Zwroty';";
$trans["memberSearch"]		= "\$text = 'Szukaj czytelnika';";
$trans["newMember"]		= "\$text = 'Nowy czytelnik';";
$trans["Offline Circulation"]	= "\$text = 'Obsługa offline';";
$trans["account"]       	= "\$text = 'Konto';";
$trans["MemberCSVImport"]       = "\$text = 'Importuj czytelników z pliku CSV';";


#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
#* Translation text for Library of Congress SRU module
#****************************************************************************
$trans["LOCsearch"]                 = "\$text = 'Importuj dane z Biblioteki Kongresu USA';";

#****************************************************************************
#*  Translation text for page lookup.php for lookup2
#****************************************************************************
$trans["lookup"]        = "\$text = 'Przeszukuj Z39.50';";
$trans["lookup_opts"]	= "\$text = 'Opcje Z39.50';";
$trans["lookup_hosts"]  = "\$text = 'Serwer Z39.50';";
$trans["lookup_bulk"]   = "\$text = 'Przeszukuj dane według ISBN';";

/*
$trans["lookup"]                = "\$text = 'wyszukiwarka on-line v2';";
$trans["lookup_opts"]       		= "\$text = 'Lookup preferencje';";
$trans["lookup_hosts"]       		= "\$text = 'Lookup Hosts';";
*/

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]          = "\$text = 'Zasady';";
$trans["homeLicenseLink"]       = "\$text = 'Licencja';";
$trans["homeCreditsLink"]       = "\$text = 'Uprawnienia';";
$trans["homeReadmeLink"]        = "\$text = ' README';";
$trans["homeChangLogLink"]      = "\$text = 'Historia zmian';";
$trans["homeUserStatusLink"]    = "\$text = 'Logowanie czytelnika';";
$trans["homeUserOpac"]          = "\$text = 'Katalog';";
