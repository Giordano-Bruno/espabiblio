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
$trans["adminSubmit"]              = "\$text = 'Potwierdź';";
$trans["adminCancel"]              = "\$text = 'Przerwij';";
$trans["adminDelete"]              = "\$text = 'Kasuj';";
$trans["adminUpdate"]              = "\$text = 'Aktualizuj';";
$trans["adminFootnote"]            = "\$text = 'Pola oznaczone symbolem %symbol% są wymagane.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Administrator';";
$trans["indexDesc"]                = "\$text = 'Użyj funkcji administracyjnych zlokalizowanych w lewej części ekranu.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = 'powrót do listy kolekcji';";
$trans["adminCollections_delStart"]                 = "\$text = 'Kolekcja, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = ', skasowano.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = 'Jesteś pewien, że chcesz skasować kolekcję, ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = ', zaktualizowano.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = 'Edycja kolekcji:';";
$trans["adminCollections_edit_formDescription"]                 = "\$text = 'Opis:';";
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = 'Domyślna długość wypożyczenia:';";
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = 'Opłata za dzień opóźnienia:';";
$trans["adminCollections_edit_formNote"]                 = "\$text = '*Nota:';";
$trans["adminCollections_edit_formNoteText"]                 = "\$text = 'Ustawienie domyślnej długości wypożyczenia na 0 (zero) spowoduje niemożność wypożyczania całej kolekcji.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = 'Dodaj nową kolekcję';";
$trans["adminCollections_listCollections"]                 = "\$text = 'Kolekcje:';";
$trans["adminCollections_listFunction"]                 = "\$text = 'Funkcje';";
$trans["adminCollections_listDescription"]                 = "\$text = 'Opis';";
$trans["adminCollections_listDaysdueback"]                 = "\$text = 'Domyślna długość<br>wypożyczenia';";
$trans["adminCollections_listDailylatefee"]                 = "\$text = 'Opłata<br>za dzień opóźnienia';";
$trans["adminCollections_listBibliographycount"]                 = "\$text = 'Liczba opisów<br>Bibliograficznych';";
$trans["adminCollections_listEdit"]                 = "\$text = 'Edycja';";
$trans["adminCollections_listDel"]                 = "\$text = 'Kasuj';";
$trans["adminCollections_ListNote"]                 = "\$text = '*Nota:';";
$trans["adminCollections_ListNoteText"]                 = "\$text = 
'Kasowanie (del) kolekcji jest możliwe tylko jeśli nie ma opisów bibliograficznych<hr> 
The delete function is only available on collections that have a bibliography count of zero.<br>
If you wish to delete a collection with a bibliography count greater than zero you will first need 
to change the material type on those bibliographies to another material type.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ', dodano.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = 'Dodaj nową kolekcję:';";
$trans["adminCollections_new_formDescription"]                 = "\$text = 'Opis:';";
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = 'Domyślna długość wypożyczenia:';";
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = 'Opłata za dzień opóźnienia:';";
$trans["adminCollections_new_formNote"]                 = "\$text = '*Nota:';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = 'Ustawienie domyślnej długości wypożyczenia na 0 (zero) spowoduje niemożność wypożyczania całej kolekcji.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = 'Rodzaj publikacji, ';";
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = ', został usunięty.';";
$trans["admin_materials_Return"]                 = "\$text = 'Przywróć listę rodzaju publikacji';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]                 = "\$text = 'Czy na pewno chcesz usunąć rodzaj publikacji, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]                 = "\$text = 'Edytuj rodzaj publikacji:';";
$trans["admin_materials_delDescription"]                 = "\$text = 'Opis:';";
$trans["admin_materials_delunlimited"]                 = "\$text = '(Wpisz 0 dla nieokreślonej)';";
$trans["admin_materials_delImagefile"]                 = "\$text = 'Plik graficzny:';";
$trans["admin_materials_delNote"]                 = "\$text = '*Uwagi:';";
$trans["admin_materials_delNoteText"]                 = "\$text = 'Plik graficzny musi znajdować się w openbiblio/images directory.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = ', Zostało uaktualnione.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = 'Dodaj nowy rodzaj publikacji';";
$trans["admin_materials_listMaterialtypes"]                 = "\$text = 'Rodzaj publikacji:';";
$trans["admin_materials_listFunction"]                 = "\$text = 'Funkcja';";
$trans["admin_materials_listDescription"]                 = "\$text = 'gatunek';";
$trans["admin_materials_listLimits"]                 = "\$text = 'Limit';";
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = 'Checkout';";
$trans["admin_materials_listRenewallimit"]                 = "\$text = 'Renewal';";
$trans["admin_materials_listImageFile"]                 = "\$text = 'Zdjęcie<br>Pliku';";
$trans["admin_materials_listBibcount"]                 = "\$text = 'Historia<br>konta';";
$trans["admin_materials_listEdit"]                 = "\$text = 'Edytuj';";
$trans["admin_materials_listDel"]                 = "\$text = 'Usuń';";
$trans["admin_materials_listNote"]                 = "\$text = '*Uwagi:';";
$trans["admin_materials_listNoteText"]                 = "\$text = 'The delete function is only available on material types that have a bibliography count of zero.  If you wish to delete a material type with a bibliography count greater than zero you will first need to change the material type on those bibliographies to another material type.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ', dodano.';";

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
$trans["adminStaff_editUpdated"]                 = "\$text = ', .';";

#****************************************************************************
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
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Powered by OpenBiblio';";
$trans["adminTheme_preview_Copyright"]     = "\$text = 'Copyright &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"]      = "\$text = 'under the';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************


#****************************************************************************
#*  Translation text for page mbr_classify_edit_form.php
#****************************************************************************
$trans["admEditClassificationType"]                 = "\$text = 'Edycja klasyfikacji';";
$trans[""]                 = "\$text = '';";
$trans[""]                 = "\$text = '';";
$trans[""]                 = "\$text = '';";
$trans[""]                 = "\$text = '';";
$trans[""]                 = "\$text = '';";


?>
