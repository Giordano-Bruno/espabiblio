<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
* MODIFICADO POR JOSE ANTONIO LARA joanlaga@hotmail.com
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
 *     $trans["homeWelcome"]  = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"] = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"] = 
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
$trans["adminSubmit"]		= "\$text = 'OK';";
$trans["adminCancel"]		= "\$text = 'Anuluj';";
$trans["adminDelete"]		= "\$text = 'Usuń';";
$trans["adminUpdate"]		= "\$text = 'Aktualizuj';";
$trans["adminFootnote"]            = "\$text = 'Pola oznaczone symbolem %symbol% są wymagane.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]		= "\$text = 'Administracja';";
$trans["indexDesc"]		= "\$text = 'Używaj funkcji umieszczonych po lewej stronie, aby zarządzać biblioteką.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]	= "\$text = 'Powrót do działów';";
$trans["adminCollections_delStart"]	= "\$text = 'Działy, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]	= "\$text = ',Usunięto.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]	= "\$text = 'Czy na pewno?: ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]	= "\$text = ', Zaktualizowano.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]	= "\$text = 'Edytuj:';";
$trans["adminCollections_edit_formDescription"]		= "\$text = 'Opis:';";
$trans["adminCollections_edit_formDaysdueback"]		= "\$text = 'Okres udostępniania:';";
$trans["adminCollections_edit_formDailyLateFee"]	= "\$text = 'Kara za dzień przetrzymania:';";
$trans["adminCollections_edit_formNote"]		= "\$text = '*Notas:';";
$trans["adminCollections_edit_formNoteText"]		= "\$text = 'Jeżeli ustawisz okres udostępniania na 0 żadna pozycja z działu nie będzie mogła być udostępniona.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]		= "\$text = 'Dodaj nowy Dział';";
$trans["adminCollections_listCollections"]		= "\$text = 'Dział:';";
$trans["adminCollections_listFunction"]			= "\$text = 'Funkcja';";
$trans["adminCollections_listDescription"]		= "\$text = 'Opis';";
$trans["adminCollections_listDaysdueback"]		= "\$text = 'Okres<br>udostępniania';";
$trans["adminCollections_listDailylatefee"]		= "\$text = 'Stawka<br>za dzień przetrzymania';";
$trans["adminCollections_listBibliographycount"]	= "\$text = 'liczba<br>elementów';";
$trans["adminCollections_listEdit"]			= "\$text = 'edytuj';";
$trans["adminCollections_listDel"]			= "\$text = 'usuń';";
$trans["adminCollections_ListNote"]			= "\$text = '*Nota:';";
$trans["adminCollections_ListNoteText"]                 = "\$text = 
'Kasowanie (del) kolekcji jest możliwe tylko jeśli nie ma opisów bibliograficznych<hr> 
The delete function is only available on collections that have a bibliography count of zero.<br>
If you wish to delete a collection with a bibliography count greater than zero you will first need 
to change the material type on those bibliographies to another material type.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]		= "\$text = ', Dodano.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]	= "\$text = 'Dodaj nowy Dział:';";
$trans["adminCollections_new_formDescription"]		= "\$text = 'Opis:';";
$trans["adminCollections_new_formDaysdueback"]		= "\$text = 'Okres udostępniania:';";
$trans["adminCollections_new_formDailylatefee"]		= "\$text = 'Kara za dzień przetrzymania:';";
$trans["adminCollections_new_formNote"]			= "\$text = '*Nota:';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = 'Ustawienie domyślnej długości wypożyczenia na 0 (zero) spowoduje niemożność wypożyczania całej kolekcji.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]	= "\$text = 'Typ zasobu, ';";
$trans["admin_materials_delMaterialdeleted"]	= "\$text = ', Usunięto.';";
$trans["admin_materials_Return"]		= "\$text = 'Powrót do typów zasobów';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]		= "\$text = 'Czy na pewno chcesz usunąć?, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]	= "\$text = 'Edytuj typ zasobu:';";
$trans["admin_materials_delDescription"]	= "\$text = 'Opis:';";
$trans["admin_materials_delunlimited"]	= "\$text = '(0 oznacza brak ograniczeń)';";
$trans["admin_materials_delImagefile"]	= "\$text = 'Ikona:';";
$trans["admin_materials_delNote"]	= "\$text = '*Nota:';";
$trans["admin_materials_delNoteText"]	= "\$text = 'Ikonki znajdują się /images.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]	= "\$text = ', Zmieniono.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]	= "\$text = 'Dodaj Nowy typ zasobów';";
$trans["admin_materials_listMaterialtypes"]	= "\$text = 'Typ zasobów:';";
$trans["admin_materials_listFunction"]		= "\$text = 'Funkcja';";
$trans["admin_materials_listDescription"]	= "\$text = 'Opis';";
$trans["admin_materials_listLimits"]		= "\$text = 'Limity';";
$trans["admin_materials_listCheckoutlimit"]	= "\$text = 'Udostępnianie';";
$trans["admin_materials_listRenewallimit"]	= "\$text = 'Prolongata';";
$trans["admin_materials_listImageFile"]		= "\$text = 'Źródło<br>ikony';";
$trans["admin_materials_listBibcount"]		= "\$text = 'Liczba<br>egzemplarzy';";
$trans["admin_materials_listEdit"]		= "\$text = 'Edytuj';";
$trans["admin_materials_listDel"]		= "\$text = 'Usuń';";
$trans["admin_materials_listNote"]		= "\$text = '*Nota:';";
$trans["admin_materials_listNoteText"]		= "\$text = 'The delete function is only available on material types that have a bibliography count of zero. </br>  If you wish to delete a material type with a bibliography count greater than zero you will first need to change the material type on those bibliographies to another material type.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]		= "\$text = ', Dodano.';";


#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]                 = "\$text = 'Plik graficzny musi znajdować się w openbiblio/images directory.';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                 = "\$text = 'Nie masz uprawnień do korzystania z zakładki Administratora.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["If the month value for purging history is higher than zero, values in statistics reports shift over time.<br>Data from statistics reports should be saved outside OpenBiblio for future reference."]		= "\$text = 'Si el valor de mes para purgar la historia es mayor que cero,<br> los valores en los informes de estadísticas cambian con el tiempo.';";
$trans["admin_settingsUpdated"]                 = "\$text = 'Dane zostały zaktualizowane.';";
$trans["admin_settingsEditsettings"]                 = "\$text = 'Edit Library Settings:';";
$trans["admin_settingsLibName"]                 = "\$text = 'Library Name:';";
$trans["admin_settingsLibimageurl"]                 = "\$text = 'adres zdjęcia biblioteki:';";
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = 'Pokaż obraz w nagłówku:';";
$trans["admin_settingsLibhours"]                 = "\$text = 'Godziny otwarcia:';";
$trans["admin_settingsLibphone"]                 = "\$text = 'Telefon kontaktowy:';";
$trans["admin_settingsLibURL"]                 = "\$text = 'Adres WWW:';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'OPAC WWW:';";
$trans["admin_settingsSessionTimeout"]                 = "\$text = 'Sesja wygasa po:';";
$trans["admin_settingsMinutes"]                 = "\$text = 'minutach';";
$trans["admin_settingsSearchResults"]                 = "\$text = 'Wyniki wyszukiwania:';";
$trans["admin_settingsItemsperpage"]                 = "\$text = 'pozycja na stronie';";
$trans["admin_settingsPurgebibhistory"]                 = "\$text = 'Usuń historię wyporzyczeń po:';";
$trans["admin_settingsmonths"]                 = "\$text = 'miesiącu';";
$trans["admin_settingsBlockCheckouts"]                 = "\$text = 'Blokuj wypożyczenia po przekroczeniu limitu grzywny:';";
$trans["admin_settingsLocale"]                 = "\$text = 'Lokalizacja:';";
$trans["admin_settingsHTMLChar"]                 = "\$text = 'tablica znaków:';";
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Lang Attribute:';";

#* No estan en Openbiblio 7.1 adecuacion por jalg
$trans["Checkout Privileges"]			= "\$text = 'przywileje pożyczkowe';";
$trans["function"]				= "\$text = 'Funkcja';";
$trans["Material Type"]				= "\$text = 'Rodzaj materiału';";
$trans["Member Classification"]			= "\$text = 'rangą członkowie';";
$trans["Checkout Limit"]			= "\$text = 'Limit kredytu';";
$trans["Renewal Limit"]				= "\$text = 'Odnowa Limi';";
$trans["Edit cover lookup options (Amazon AWS)"]= "\$text = 'Edytuj opcje wyszukiwania (pokrywy Amazon AWS)';";
$trans["Add new z39.50 server"]			= "\$text = 'Dodaj nowy serwer Z39.50';";
$trans["admin_materials_new_formNoteText"]                 = "\$text = 'Plik graficzny musi znajdować się w openbiblio/images directory.';";
$trans["admin_settingsHTMLTagLangAttr"]		= "\$text = 'Atrybuty tagów HTML:';";
$trans["days"]				= "\$text = 'dni';";
$trans["admin_settingsInactiveDays"]	= "\$text = 'Automatyczna aktualizacja nieaktywnych użytkowników:';";
$trans["admin_settingsFontNormal"]	= "\$text = 'typ czcionki:';";
$trans["admin_settingsFontSize"]	= "\$text = 'Rozmiar czcionki:';";
$trans["Max. hold length:"]		= "\$text = 'Maksymalna długość do utrzymania:';";
$trans["Add new member classificaiton"]	= "\$text = 'Dodaj nową grupę użytkowników';";
$trans["admin_settingsHoldMaxDays"]	= "\$text = 'Maksymalna dni:';"; //dudas en la traduccion jalg
$trans["admin_settingsViewlist"]	= "\$text = 'Pokaż ogólna lista (spowalnia serwer):';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = 'Użytkownik,';";
$trans["adminStaff_Return"]                 = "\$text = 'Przywróć użytkownika';";
$trans["adminStaff_Yes"]                 = "\$text = 'Tak';";
$trans["adminStaff_No"]                 = "\$text = 'Nie';";

#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', zostało usunięte.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = 'Czy chcesz usunąć użytkownika, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]	= "\$text = ', ha sido actualizado';";

#************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = 'Edycja informacji o użytkowniku:';";
$trans["adminStaff_edit_formLastname"]                 = "\$text = 'Nazwisko:';";
$trans["adminStaff_edit_formFirstname"]                 = "\$text = 'Imię:';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = 'Nazwa użytkownika (LOGIN):';";
$trans["adminStaff_edit_formAuth"]                 = "\$text = 'Uprawnienia:';";
$trans["adminStaff_edit_formCirc"]                 = "\$text = 'WYPOŻYCZENIA';";
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = 'Akt. danych czytelnika';";
$trans["adminStaff_edit_formCatalog"]                 = "\$text = 'Katalogowanie';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = 'Admin';";
$trans["adminStaff_edit_formReports"]                 = "\$text = 'Raporty';";
$trans["adminStaff_edit_formSuspended"]                 = "\$text = 'Zawieszony:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = 'Dodaj użytkownika';";
$trans["adminStaff_list_Columnheader"]                 = "\$text = ' Użytkownik:';";
$trans["adminStaff_list_Function"]                 = "\$text = 'Funkcja';";
$trans["adminStaff_list_Edit"]                 = "\$text = 'edytuj profil';";
$trans["adminStaff_list_Pwd"]                 = "\$text = 'zmień hasło';";
$trans["adminStaff_list_Del"]                 = "\$text = 'usuń użytkownika';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ', zostało dodane.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = 'Dodaj nowego użytkownika:';";
$trans["adminStaff_new_form_Password"]          = "\$text = 'Hasło:';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = 'Podaj ponownie hasło:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = 'Hasło zostało zresetowane.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = 'Nowe hasło użytkownika:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = 'przywróć liste motywów';";
$trans["adminTheme_Theme"]                 = "\$text = 'Motyw, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ', zostało usunięte.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = 'Czy chcesz usunąć motyw, ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ', zostało zaktualizowane.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = 'Wyświetl zmieniony motyw';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = 'Zmień motyw:';";
$trans["adminTheme_Choosetheme"]                 = "\$text = 'Wybierz nowy motyw:';";
$trans["adminTheme_Addnew"]                 = "\$text = 'Dodaj nowy motyw';";
$trans["adminTheme_themes"]                 = "\$text = 'Motywy:';";
$trans["adminTheme_function"]                 = "\$text = 'Funkcje';";
$trans["adminTheme_Themename"]                 = "\$text = 'Nazwa motywu';";
$trans["adminTheme_Usage"]                 = "\$text = 'Zastosowano';";
$trans["adminTheme_Edit"]                 = "\$text = 'edytuj';";
$trans["adminTheme_Copy"]                 = "\$text = 'kopiuj';";
$trans["adminTheme_Del"]                 = "\$text = 'usuń';";
$trans["adminTheme_Inuse"]                 = "\$text = 'w użyciu';";
$trans["adminTheme_Note"]                 = "\$text = '*Uwagi:';";
$trans["adminTheme_Notetext"]                 = "\$text = 'Funkcja usuń jest niedostępna ponieważ motyw jest w użyciu';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = 'TematMotyw:';";
$trans["adminTheme_Tablebordercolor"]                 = "\$text = 'Kolor ramki tabeli:';";
$trans["adminTheme_Errorcolor"]                 = "\$text = 'Błędny kolor:';";
$trans["adminTheme_Tableborderwidth"]                 = "\$text = 'Szerokość ramki tabeli:';";
$trans["adminTheme_Tablecellpadding"]                 = "\$text = 'Wypełnienie komórek tabeli:';";
$trans["adminTheme_Title"]                 = "\$text = 'Nagłówek';";
$trans["adminTheme_Mainbody"]                 = "\$text = 'Główna sekcja??';";
$trans["adminTheme_Navigation"]                 = "\$text = 'Menu';";
$trans["adminTheme_Tabs"]                 = "\$text = 'Zakładki';";
$trans["adminTheme_Backgroundcolor"]                 = "\$text = 'Kolor Tła:';";
$trans["adminTheme_Fontface"]                 = "\$text = 'Czcionka:';";
$trans["adminTheme_Fontsize"]                 = "\$text = 'Rozmiar czcionki:';";
$trans["adminTheme_Bold"]                 = "\$text = 'pogrubienie';";
$trans["adminTheme_Fontcolor"]                 = "\$text = 'Kolor czcionki:';";
$trans["adminTheme_Linkcolor"]                 = "\$text = 'Kolor linku:';";
$trans["adminTheme_Align"]                 = "\$text = 'Wyrównaj:';";
$trans["adminTheme_Right"]                 = "\$text = 'Do prawej';";
$trans["adminTheme_Left"]                 = "\$text = 'Do lewej';";
$trans["adminTheme_Center"]                 = "\$text = 'Wyśrodkuj';";
$trans["adminTheme_HeaderWording"]                 = "\$text = 'Edytuj';";

#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = ', zostało dodane.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = 'Wyświetl temat';";
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = 'Library Title';";
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = 'Zamknij okno';";
$trans["adminTheme_preview_Home"]                 = "\$text = 'Główna strona';";
$trans["adminTheme_preview_Circulation"]   = "\$text = 'Obieg książki';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = 'Katalogowanie';";
$trans["adminTheme_preview_Admin"]         = "\$text = 'Panel administracyjny';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Przykładowy link';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = 'Podgląd ';";
$trans["adminTheme_preview_Thisend"]       = "\$text = 'motyw.';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = 'Przykładowa lista:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = 'Nagłówek tabeli';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = 'Przykładowy wiersz danych 1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = 'Przykładowy wiersz danych 2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = 'Przykładowy wiersz danych 3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'przykładowy link';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = 'przykładowy błąd ';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = 'Przykładowe wejście';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = 'Przykładowy przycisk';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Powered by OpenBiblio 7.1, ';";

$trans["adminTheme_preview_Copyright"]		= "\$text = 'Prawa autorskie & copy; Dave Stevens OpenBiblio 2002 - (EspaBiblio) Jorge Lara, tłumaczenie i inne korekty 7.1 José A. Lara joanlaga@hotmail.com (patrz rozdział i changelog.txt pożyczek Szczegółowe informacje';";//Copyright &copy; 2002 Dave Stevens OpenBiblio - (EspaBiblio) Jorge Lara , traducción de la 7.1 y otras adecuaciones  José A. Lara joanlaga@hotmail.com (ver sección de créditos y changelog.txt para mas detalles

$trans["adminTheme_preview_underthe"]      = "\$text = 'under the';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

#* No estan en Openbiblio 7.1 adecuacion por jalg
#****************************************************************************
#* Translation text for page import_export.php
#****************************************************************************
$trans["adminImport"]			= "\$text = 'Importar';";
$trans["adminExport"]			= "\$text = 'Exportar';";
$trans["import_member_csv"]		= "\$text = 'Importar lista de usuarios desde un archivo CSV';";
$trans["import_bibliography_csv"]	= "\$text = 'Importar lista bibliográfica desde un archivo CSV';";
$trans["import_bibliography_marc"]	= "\$text = 'Importar lista bibliográfica desde un archivo MARC';";
$trans["export_library_data_csv"]	= "\$text = 'Exportar todos los datos de la biblioteca a un archivo CSV';";

#****************************************************************************
#* Translation text for page lookupOptsForm.php
#****************************************************************************
$trans["lookup_opts"] 			= "\$text = 'Opciones Z39.50.';";
$trans["lookup_optsUpdated"]		= "\$text = 'Las opciones de búsqueda han sido actualizadas.';";
$trans["lookup_optsSettings"]		= "\$text = 'Editar opciones de búsqueda:';";
$trans["lookup_optsProtocol"]		= "\$text = 'Protocolo:';";
$trans["lookup_optsMaxHits"]		= "\$text = 'Máximo número de hits:';";
$trans["lookup_optsKeepDashes"]		= "\$text = 'Mantener guiones:';";
$trans["lookup_optsCallNmbrType"]	= "\$text = 'Tipo de número de llamada:';";
$trans["lookup_optsAutoDewey"]		= "\$text = 'Usar Dewey por defecto:';";
$trans["lookup_optsDefaultDewey"]	= "\$text = 'Código Dewey por defecto:';";
$trans["lookup_optsAutoCutter"]		= "\$text = 'Generar Cutter-Sanborn si no hay:';";
$trans["lookup_optsCutterType"]		= "\$text = 'Tipo de Cutter-Sanborn para generar:';";
$trans["lookup_optsCutterWord"]		= "\$text = 'Numero de Palabras Dewey Cutter-Sanborn:';";
$trans["lookup_optsAutoCollection"]	= "\$text = 'Usar auto colecciona:';";
$trans["lookup_optsFictionName"]	= "\$text = 'Nombre de la colección Ficción:';";
$trans["lookup_optsFictionCode"]	= "\$text = 'Indice numero de Ficción de códigos de uso:';";
$trans["lookup_optsLocFictionCodes"]	= "\$text = 'LoC códigos de Ficción';";
$trans["lookup_optsDewFictionCodes"]	= "\$text = 'Dewey Ficticio códigos:';";
$trans["lookup_callNmbrType"]		= "\$text = 'Su numero de tipo de llamado no es valido!';";
$trans["lookup_optsUpdtBtn"]		= "\$text = 'Actualizar';";

#****************************************************************************
#* Translation text for page lookupHostsForm.php
#****************************************************************************
$trans["Add New Host"] 			= "\$text = 'Agregar nuevo Servidor Z39.50';";
$trans["lookup_hosts"] 			= "\$text = 'Servidores de Búsqueda Z39.50 .';";
$trans["lookup_rqdNote"] 		= "\$text = ' - Campos Obligatorios.';";
$trans["lookup_hostsUpdated"]		= "\$text = 'Configuración de búsqueda ha sido actualizada.';";
$trans["lookup_hostsConfirmDelete"]	= "\$text = '¿Está seguro que desea eliminar este Servidor Z39.50 ?';";
$trans["lookup_hostsListFunction"] 	= "\$text = 'Función:';";
$trans["lookup_hostsListHeader"]	= "\$text = 'Lista de servidores para búsquedas Z39.50 :';";
$trans["lookup_hostsEditHeader"]	= "\$text = 'Editar propiedades del servidor Z39.50 :';";
$trans["lookup_hostsNewHeader"]		= "\$text = 'Configurar propiedades del nuevo servidor Z39.50 :';";
$trans["lookup_hostsSeqNo"]		= "\$text = 'Orden:';";
$trans["lookup_hostsActive"]		= "\$text = 'Usar:';";
$trans["lookup_hostsHost"]		= "\$text = 'URL:puerto';";
$trans["lookup_hostsName"]		= "\$text = 'Nombre:';";
$trans["lookup_hostsDb"]		= "\$text = 'Base de Datos:';";
$trans["lookup_hostsContext"]		= "\$text = 'contexto:';";
$trans["lookup_hostsSchema"]		= "\$text = 'Esquema:';";
$trans["lookup_hostsUser"]		= "\$text = 'Numero de Usuario:';";
$trans["lookup_hostsPw"]		= "\$text = 'Contraseña';";
$trans["lookup_hostsUpdtBtn"]		= "\$text = 'Actualizar';";
$trans["lookup_hostsFunc"]		= "\$text = 'Funcion';";
$trans["lookup_hostsCharset"]		= "\$text = 'codificacion de caracteres';";
$trans["lookup_DefaultCharset"]		= "\$text = 'por defecto: dejar en blanco';";

#****************************************************************************
#* Translation text for page lookupHostsForm.php
#****************************************************************************
$trans["Function"]			= "\$text = 'Función';";
$trans["edit"]				= "\$text = 'Editar';";
$trans["del"]				= "\$text = 'eliminar';";
$trans["Description"]			= "\$text = 'Descripción';";
$trans["Member Classifications List"]	= "\$text = 'Grupos de usuarios:';";
$trans["Members"]			= "\$text = 'Usuarios';";
$trans["Max. Fines"]			= "\$text = 'Máximo de multas';";
$trans["Custom Member Fields"]		= "\$text = 'Grados de usuario:';";
$trans["Add new custom field"]		= "\$text = 'Añadir nuevo grado de usuario';";
$trans["Character set"]			= "\$text = 'Juego de caracteres';";
$trans["adminFormNote"]			= "\$text = '*Nota:';";
$trans["adminAWSNote"]			= "\$text = 'Puedes crear tu cuenta AWS desde <a href=\"http://aws.amazon.com/\">Amazon</a> en \'Crear cuenta AWS\' menú.<br />
When registration done, you can find all options that is required in %cover_opt_menu% in Account > Security Credentials page';";
$trans["adminZ3950Note"]		= "\$text = '\'%fiction_code%\' opción siempre se utiliza en \'%lookup_bulk%\' página, como predeterminado para elementos nuevos.';";
$trans["adminMbrListNote"]		= "\$text = 'La función de eliminación sólo está disponible en las clasificaciones que tienen un recuento de los miembros de cero. Si desea eliminar una clasificación con un número de miembros superior a cero por primera vez tendrá que cambiar a los miembros de otra clasificación.';";
$trans["Import"]			= "\$text = 'Importar';";
$trans["Add new classification type"]	= "\$text = 'Agregar nuevo tipo de clasificación';";
$trans["Edit Classification Type"]	= "\$text = 'Editar tipo de clasificación';";
$trans["Description:"]			= "\$text = 'Descripción:';";
$trans["Max. Fines:"]			= "\$text = 'Max. multas:';";
$trans["Add custom member field"]	= "\$text = 'Añadir campo de miembro personalizados';";
$trans["Edit Member Field"]		= "\$text = 'Editar campo de miembro';";
$trans["Code"]				= "\$text = 'código';";
$trans["Code:"]				= "\$text ='Código:';";
$trans["memberFieldDelConfirm"]		= "\$text = '¿Está seguro que desea eliminar el campo \'%desc%\'?';";
$trans["MARC Fields"]			= "\$text = 'Campos MARC';";
$trans["materialAddCustomMarc"]		= "\$text = 'Agregar un campo MARC para este tipo de materiales';";
$trans["Field"]				= "\$text = 'Campo';";
$trans["Value"]				= "\$text = 'Valor';";
$trans["Tag"]				= "\$text = 'etiqueta [Tag]';";
$trans["Select"]			= "\$text = 'Seleccionar';";
$trans["Subfield Code"]			= "\$text = 'Código de subcampo';";
$trans["Required?"]			= "\$text = 'Requerido?';";
$trans["cntrltype"]			= "\$text = 'Tipo de control';";
$trans["TRUE"]				= "\$text = 'Verdadero';";
$trans["FALSE"]				= "\$text = 'FALSO';";
$trans["Text Field"]			= "\$text = 'Campo de texto';";
$trans["Text Area"]			= "\$text = 'Área de texto';";
$trans["New Field Added Successfully"]	= "\$text = 'Nuevo campo agregado con éxito';";
$trans["Field Successfully Deleted"]	= "\$text = 'Campo se ha eliminado correctamente';";
$trans["Edit Checkout Privileges"]	= "\$text = 'Campo sí ha eliminado correctamente';";
$trans["Material Type:"]		= "\$text = 'Tipo de material:';";
$trans["Member Classification:"]	= "\$text = 'Clasificación de miembro:';";

#****************************************************************************
#* Validation errors
#****************************************************************************
$trans["Session timeout must be numeric."]		= "\$text = 'Tiempo de espera de sesión debe ser numérico [timeout].';";
$trans["Session timeout must be greater than 0."]	= "\$text = 'Tiempo de espera de sesión debe ser mayor que 0.';";
$trans["Items per page must be numeric."]		= "\$text = 'Artículos por página debe ser numérico.';";
$trans["Items per page must be greater than 0."]	= "\$text = 'Artículos por página debe ser mayor que 0.';";
$trans["Months must be numeric."]			= "\$text = 'Meses debe ser numérico.';";
$trans["Days must be numeric."]				= "\$text = 'Días debe ser numérico.';";

#****************************************************************************
#* Translation text for page staff_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialstate"]	= "\$text = 'Agregar un Estado de Materiales';";
$trans["Medienstatus"]				= "\$text = 'Estados de los Materiales';";
$trans["admin_materials_Comment_end"]		= "\$text = 'Los marcados con * no son modificables';";
$trans["admin_materials_listFunction"]		= "\$text = 'Función';";
$trans["admin_materials_listDescription"]	= "\$text = 'Descripción';";
$trans["admin_materials_Abrev"]			= "\$text = 'Abrev.';";
$trans["admin_materials_listMaterialstate"]	= "\$text = 'Estado de Materiales';";
$trans["Note-1-admin"]				= "\$text = '
Si el valor del mes de la historia de la purga es mayor que cero, los valores en las estadísticas de informes de cambio en el tiempo.
Los datos de los informes de las estadísticas deben ser guardados fuera de Espabiblio para referencia futura.';";

#****************************************************************************
#* Translation text for page staff_list.php
#****************************************************************************
$trans["admin-Translate"]	= "\$text = 'Administrador de Traducciones';";
$trans["admin-transAdver"]	= "\$text = 'Respalde sus archivos de la carpeta locale';";
$trans["admin-transPrev"]	= "\$text = 'Función de prueba observaciones o fallos favor de comunicar a joanlanga@hotmail';";
$trans["Clave"]			= "\$text = 'Clave';";
$trans["English"]		= "\$text = 'Ingles';";
$trans["lang"]			= "\$text = 'Español';";
$trans["admin-transDel"]	= "\$text = 'Eliminar';";
$trans["admin-transNewEntry"]	= "\$text = 'Agregar nueva entrada';";
$trans["admin-transSubmit"]	= "\$text = 'Enviar';";

#****************************************************************************
#* Translation text for page copy_fields_list.php Custom Copy Fields
#****************************************************************************
$trans["Custom Copy Fields"]	= "\$text = 'Personalizacion de campos de copias';";
$trans["Copy field, %desc%, has been added."]	= "\$text = 'El campo de para copia, %desc%, fue agregado.';";
$trans["return to copy fields list"]	= "\$text = 'Regresar a Personalización de Campos de datos para las copias.';";
$trans["Add new custom field list"]	= "\$text = 'Agregar nueva Personalización de Campos de datos para las copias.';";
$trans["Add custom copy field"]	= "\$text = 'Agregar nueva Personalización de Campos de datos para las copias.';";
$trans["Are you sure you want to delete field %desc% ?"]	= "\$text = 'Borrar Personalización de Campos de datos para las copias  %desc% ?.';";

#****************************************************************************
#*  Translation text for page mbr_classify_edit_form.php
#****************************************************************************
$trans["admEditClassificationType"]                 = "\$text = 'Edycja klasyfikacji';";