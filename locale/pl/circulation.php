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
$trans["circCancel"]              = "\$text = 'Przerwij';";
$trans["circDelete"]              = "\$text = 'Kasuj';";
$trans["circLogout"]              = "\$text = 'Koniec';";
$trans["circAdd"]                 = "\$text = 'Dodaj';";
$trans["mbrDupBarcode"]           = "\$text = 'Kod kreskowy %barcode%, jest już używany.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='WYPOŻYCZENIA';";
$trans["indexCardHdr"]            = "\$text='Wyszukiwanie wg numeru KARTY:';";
$trans["indexCard"]               = "\$text='Numer KARTY:';";
$trans["indexSearch"]             = "\$text='Szukaj';";
$trans["indexNameHdr"]            = "\$text='Wyszukiwanie wg Nazwiska:';";
$trans["indexName"]               = "\$text='Nazwisko zaczyna się:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='Adres korespondencyjny:';";
$trans["mbrNewForm"]              = "\$text='Dodaj nowego';";
$trans["mbrEditForm"]             = "\$text='Edycja';";
$trans["mbrFldsHeader"]           = "\$text='Czytelnik:';";
$trans["mbrFldsCardNmbr"]         = "\$text='Numer KARTY:';";
$trans["mbrFldsLastName"]         = "\$text='Nazwisko:';";
$trans["mbrFldsFirstName"]        = "\$text='Imię:';";
$trans["mbrFldsAddr1"]            = "\$text='Adres - Linia 1:';";
$trans["mbrFldsAddr2"]            = "\$text='Adres - Linia 2:';";
$trans["mbrFldsCity"]             = "\$text='Miasto:';";
$trans["mbrFldsStateZip"]         = "\$text='Kod Pocztowy:';";
$trans["mbrFldsHomePhone"]        = "\$text='Telefon:';";
$trans["mbrFldsWorkPhone"]        = "\$text='Telefon 2:';";
$trans["mbrFldsEmail"]            = "\$text='E-mail:';";
$trans["mbrFldsClassify"]         = "\$text='Klasyfikacja:';";
$trans["mbrFldsGrade"]            = "\$text='Klasa:';";
$trans["mbrFldsTeacher"]          = "\$text='Wychowawca:';";
$trans["mbrFldsSubmit"]           = "\$text='Potwierdź';";
$trans["mbrFldsCancel"]           = "\$text='Przerwij';";
$trans["mbrsearchResult"]         = "\$text='Wynik strony: ';";
$trans["mbrsearchprev"]           = "\$text='wstecz';";
$trans["mbrsearchnext"]           = "\$text='dalej';";
$trans["mbrsearchNoResults"]      = "\$text='Brak wyników wyszukiwania.';";
$trans["mbrsearchFoundResults"]   = "\$text=' wynik wyszukiwania.';";
$trans["mbrsearchSearchResults"]  = "\$text='Wyniki wyszukiwania:';";
$trans["mbrsearchCardNumber"]     = "\$text='Numer KARTY:';";
$trans["mbrsearchClassification"] = "\$text='Sortowanie?:';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='Czytelnik został dodany';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Dane czytelnika zostały zaktualizowane.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='Informacje o czytelniku:';";
$trans["mbrViewName"]             = "\$text='Imię i nazwisko:';";
$trans["mbrViewAddr"]             = "\$text='Adres:';";
$trans["mbrViewCardNmbr"]         = "\$text='Numer KARTY:';";
$trans["mbrViewClassify"]         = "\$text='Klasyfikacja:';";
$trans["mbrViewPhone"]            = "\$text='Telefon:';";
$trans["mbrViewPhoneHome"]        = "\$text='1:';";
$trans["mbrViewPhoneWork"]        = "\$text='2:';";
$trans["mbrViewEmail"]            = "\$text='Email Address:';";
$trans["mbrViewGrade"]            = "\$text='Klasa:';";
$trans["mbrViewTeacher"]          = "\$text='Wychowawca:';";
$trans["mbrViewHead2"]            = "\$text='Status aktualnych wypożyczeń:';";
$trans["mbrViewStatColHdr1"]      = "\$text='Materiał';";
$trans["mbrViewStatColHdr2"]      = "\$text='Ilość';";
$trans["mbrViewStatColHdr3"]      = "\$text='Limity';";
$trans["mbrViewStatColHdr4"]      = "\$text='Wypożyczeń';";
$trans["mbrViewStatColHdr5"]      = "\$text='Wznowień';";
$trans["mbrViewHead3"]            = "\$text='Szybkie WYPOŻYCZENIE:';";
$trans["mbrViewBarcode"]          = "\$text='Kod kreskowy (BARCODE):';";
$trans["mbrViewCheckOut"]         = "\$text='WYPOŻYCZ';";
$trans["mbrViewHead4"]            = "\$text='Pozycje aktualnie wypożyczone:';";
$trans["mbrViewOutHdr1"]          = "\$text='Data wypożyczenia';";
$trans["mbrViewOutHdr2"]          = "\$text='Materiał';";
$trans["mbrViewOutHdr3"]          = "\$text='Kod kreskowy';";
$trans["mbrViewOutHdr4"]          = "\$text='Tytuł';";
$trans["mbrViewOutHdr5"]          = "\$text='Autor';";
$trans["mbrViewOutHdr6"]          = "\$text='Data zwrotu';";
$trans["mbrViewOutHdr7"]          = "\$text='Przeterminowanie';";
$trans["mbrViewOutHdr8"]          = "\$text='Wznowienie';";
$trans["mbrViewOutHdr9"]          = "\$text='time/s';";
$trans["mbrViewNoCheckouts"]      = "\$text='Brak wypożyczonych pozycji.';";
$trans["mbrViewHead5"]            = "\$text='Złóż rezerwację:';";
$trans["mbrViewHead6"]            = "\$text='Pozycje aktualnie zarezerwowane:';";
$trans["mbrViewPlaceHold"]        = "\$text='Zatwierdź rezerwację';";
$trans["mbrViewHoldHdr1"]         = "\$text='Funkcje';";
$trans["mbrViewHoldHdr2"]         = "\$text='ZAREZERWOWANO';";
$trans["mbrViewHoldHdr3"]         = "\$text='Materiał';";
$trans["mbrViewHoldHdr4"]         = "\$text='Kod kreskowy (BARCODE)';";
$trans["mbrViewHoldHdr5"]         = "\$text='Tytuł';";
$trans["mbrViewHoldHdr6"]         = "\$text='Autor';";
$trans["mbrViewHoldHdr7"]         = "\$text='Status';";
$trans["mbrViewHoldHdr8"]         = "\$text='Data zwrotu';";
$trans["mbrViewNoHolds"]          = "\$text='Brak zarezerwowanych pozycji.';";
$trans["mbrViewBalMsg"]           = "\$text='Uwaga:Saldo użytkownika wynosi %bal%.';";
$trans["mbrPrintCheckouts"]	  = "\$text='Drukuj aktualne WYPOŻYCZENIA';";
$trans["mbrViewDel"]              = "\$text='usuń';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='Użytkownik musi zapłacić zaległość przed usunięciem konta.';";
$trans["checkoutErr1"]            = "\$text='Numer kodu kreskowego musi być alfanumeryczny.';";
$trans["checkoutErr2"]            = "\$text='Brak opisu bibliograficznego dla tego kodu kreskowego.';";
$trans["checkoutErr3"]            = "\$text='Pozycja z kodem %barcode% jest już zarezerwowana.';";
$trans["checkoutErr4"]            = "\$text='Książka mająca numer %barcode% nie jest dostępna.';";
$trans["checkoutErr5"]            = "\$text='Książka mająca numer %barcode% jest zarezerwowana.';";
$trans["checkoutErr6"]            = "\$text='Użytkownik osiągnął limit na dany rodzaj publikacji.';";
$trans["checkoutErr7"]            = "\$text='Bibliography with barcode number %barcode% has reached the member\'s renewal limit.';";
$trans["checkoutErr8"]            = "\$text='Bibliography with barcode number %barcode% can not be renew as it is already late.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='Numer kodu kreskowego musi być alfanumeryczny.';";
$trans["shelvingCartErr2"]        = "\$text='Brak wyników wyszukiwania dla podanego kodu kreskowego.';";
$trans["shelvingCartTrans"]       = "\$text='Opłata za opóźnienie (barcode=%barcode%)';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='Zwrot pozycji (szybka półka):';";
$trans["checkinFormBarcode"]      = "\$text='Podaj:';";
$trans["checkinFormShelveButton"] = "\$text='Dodaj do zwrotów';";
$trans["checkinFormCheckinLink1"] = "\$text='Zwróć zaznaczone pozycje';";
$trans["checkinFormCheckinLink2"] = "\$text='Zwróć wszystkie pozycje';";
$trans["checkinFormHdr2"]         = "\$text='Lista pozycji do zwrotu:';";
$trans["checkinFormColHdr1"]      = "\$text='Data Zwrotu';";
$trans["checkinFormColHdr2"]      = "\$text='KOD KRESKOWY';";
$trans["checkinFormColHdr3"]      = "\$text='TYTUŁ';";
$trans["checkinFormColHdr4"]      = "\$text='Autor pozycji';";
$trans["checkinFormEmptyCart"]    = "\$text='No bibliographies are currently in shelving cart status.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='Nie zostały wybrane pozycje.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='Książka jest na liście oczekujących!';";
$trans["holdMessageMsg1"]         = "\$text='The bibliography with barcode number %barcode% that you are attempting to check in has one or more hold requests placed on it.  <b>Please file this bibliography with your held items instead of placing it on your shelving cart.</b>  The status code for this bibliography has been set to hold.';";
$trans["holdMessageMsg2"]         = "\$text='Return to bibliography check in.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='Kod kreskowy musi być numeryczny.';";
$trans["placeHoldErr2"]           = "\$text='Kod kreskowy nie istnieje.';";
$trans["placeHoldErr3"]           = "\$text='This member already has that item checked out -- not placing hold.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'Member, %name%, has %checkoutCount% checkout(s) and %holdCount% hold request(s).  All checked out materials must be checked in and all hold requests deleted before deleting this member.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'Przywrucono informacje o użytkowniku';";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Czy na pewno chcesz skasować czyteelnika: %name%? To skasuje jego historie wypożyczeń.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='Member, %name%, has been deleted.';";
$trans["mbrDelReturn"]            = "\$text='return to Member Search';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='Historia wypożyczeń czytelnika:';";
$trans["mbrHistoryNoHist"]        = "\$text='Brak historii.';";
$trans["mbrHistoryHdr1"]          = "\$text='Barcode';";
$trans["mbrHistoryHdr2"]          = "\$text='TYTUŁ';";
$trans["mbrHistoryHdr3"]          = "\$text='Autor';";
$trans["mbrHistoryHdr4"]          = "\$text='Nowy Status';";
# *** oryginalnie data zmianyu statusu
$trans["mbrHistoryHdr5"]          = "\$text='Data wypożyczenia';";
# *****
$trans["mbrHistoryHdr6"]          = "\$text='Oczekiwany zwrot';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='Add a Transaction:';";
$trans["mbrAccountTransTyp"]      = "\$text='Transaction Type:';";
$trans["mbrAccountAmount"]        = "\$text='Amount:';";
$trans["mbrAccountDesc"]          = "\$text='Description:';";
$trans["mbrAccountHead1"]         = "\$text='Member Account Transactions:';";
$trans["mbrAccountNoTrans"]       = "\$text='No transactions found.';";
$trans["mbrAccountOpenBal"]       = "\$text='Opening Balance';";
$trans["mbrAccountDel"]           = "\$text='del';";
$trans["mbrAccountHdr1"]          = "\$text='Function';";
$trans["mbrAccountHdr2"]          = "\$text='Date';";
$trans["mbrAccountHdr3"]          = "\$text='Trans Type';";
$trans["mbrAccountHdr4"]          = "\$text='Description';";
$trans["mbrAccountHdr5"]          = "\$text='Amount';";
$trans["mbrAccountHdr6"]          = "\$text='Balance';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='Transaction successfully completed.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Are you sure you want to delete this transaction?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Transaction successfully deleted.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Checkouts for %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Current Date:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Member:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Card Number:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Classification:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Close Window';";

?>
