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
$trans["catalogSubmit"]            = "\$text = 'Potwierdź';";
$trans["catalogCancel"]            = "\$text = 'Porzuć';";
$trans["catalogRefresh"]           = "\$text = 'Odśwież';";
$trans["catalogDelete"]            = "\$text = 'Skasuj';";
$trans["catalogFootnote"]          = "\$text = 'Pola oznaczone %symbol% są wymagane.';";
$trans["AnswerYes"]                = "\$text = 'TAK';";
$trans["AnswerNo"]                 = "\$text = 'NIE';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'KATALOGOWANIE';";
$trans["indexBarcodeHdr"]          = "\$text = 'Szukaj w katalogu numeru inwentarzowego BARCODE';";
$trans["indexBarcodeField"]        = "\$text = 'Numer inwentarzowy (BARCODE)';";
$trans["indexSearchHdr"]           = "\$text = 'Szukaj w katalogu bIBLIOGRAFICZNYM';";
$trans["indexKeyword"]             = "\$text = 'Słowo Kluczowe';";
$trans["indexTitle"]               = "\$text = 'Tytuł';";
$trans["indexAuthor"]              = "\$text = 'Autor';";
$trans["indexSubject"]             = "\$text = 'Temat';";
$trans["indexButton"]              = "\$text = 'Szukaj';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = 'Opis bibliograficzny';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'Typ materiału (rodzaj)';";
$trans["biblioFieldsCollection"]   = "\$text = 'Kolekcja';";
$trans["biblioFieldsCallNmbr"]     = "\$text = 'Nr KATALOGOWY';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'Pola US-MARC';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'Pokazuj w OPAC';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = 'DODAJ NOWY';";
$trans["biblioNewSuccess"]         = "\$text = 'Nowy opis bibliograficzny został utworzony.Aby dodać egzemplarz, Wybierz \"New Copy\" z lewego menu lub \"Add New Copy\" poniżej.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = 'Opis został zaktualizowany.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = 'DODAJ nowy egzemplarz';";
$trans["biblioCopyNewBarcode"]     = "\$text = 'Numer inwentarzowy (BARCODE)';";
$trans["biblioCopyNewDesc"]        = "\$text = 'Opis egzemplarza';";
$trans["biblioCopyNewAuto"]        = "\$text = 'Auto BARCODE';";
$trans["biblioCopyNewValidBarco"]  = "\$text = 'Walidacja drukowania';";
$trans["biblioCopyEditFormLabel"]  = "\$text = 'Edycja egzemplarza';";
$trans["biblioCopyEditFormStatus"] = "\$text = 'Status';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = 'Egzemplarz dodany.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = 'Egzemplarz zaktualizowany.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'Nie można skasować egzemplarza.  Egzemplarz musi być najpierw zwrócony';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Na pewno skasować egzemplarz : %barcodeNmbr%?  To skasuje również status i historię egzemplarza.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = 'Pozycja o numrze inwentarzowym %barcode% została usunięta.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'Dodaj nowe pole USMARC';";
$trans["biblioMarcListHdr"]        = "\$text = 'Informacje o polu USMARC';";
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Funkcja';";
$trans["biblioMarcListTbleCol2"]   = "\$text = 'Tag';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Tag Description';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Subfld';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Subfield Description';";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Field Data';";
$trans["biblioMarcListNoRows"]     = "\$text = 'No MARC fields found.';";
$trans["biblioMarcListEdit"]       = "\$text = 'edytuj';";
$trans["biblioMarcListDel"]        = "\$text = 'kasuj';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'MARC Field Selector';";
$trans["usmarcSelectInst"]         = "\$text = 'Select a field type';";
$trans["usmarcSelectNoTags"]       = "\$text = 'No tags found.';";
$trans["usmarcSelectUse"]          = "\$text = 'use';";
$trans["usmarcCloseWindow"]        = "\$text = 'Close Window';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'Add New Marc Field';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'Tag';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Subfield';";
$trans["biblioMarcNewFormData"]    = "\$text = 'Field Data';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Indicator 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Indicator 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'Select';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Marc field successfully added.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Edit Marc Field';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Marc field successfully updated.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Are you sure you want to delete the field with tag %tag% and subfield %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Marc field successfully deleted.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = 'Ten opis bibliograficzny posiada %copyCount% egzemplarzy i %holdCount% zgloszeń rezerwacji.  Skasuj egzemplarze i/lub zgłoszeń rezerwacji przed skasowaniem opisu bibliograficznego.';";
$trans["biblioDelConfirmReturn"]   = "\$text = 'powrót do opisu bibliograficznego';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'Czy na pewno skasować opis bibliograficzny : %title%?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = 'Opis bibliograficzny %title%, został skasowany.';";
$trans["biblioDelReturn"]          = "\$text = 'powrót do wyszukiwania bibliograficznego';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = 'Zgłoszenia rezerwacji:';";
$trans["biblioHoldListNoHolds"]    = "\$text = 'Nie ma aktualnie żadnych rezerwacji.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Funkcja';";
$trans["biblioHoldListHdr2"]       = "\$text = 'Copy';";
$trans["biblioHoldListHdr3"]       = "\$text = 'Zarezerwowana';";
$trans["biblioHoldListHdr4"]       = "\$text = 'Czytelnik';";
$trans["biblioHoldListHdr5"]       = "\$text = 'Status';";
$trans["biblioHoldListHdr6"]       = "\$text = 'Data zwrotu';";
$trans["biblioHoldListdel"]        = "\$text = 'Kasuj';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'Brak uprawnień - skontaktuj się z Administratorem.';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'Testowanie poprawności';";
$trans["MarcUploadTestTrue"]        = "\$text = 'TAK';";
$trans["MarcUploadTestFalse"]       = "\$text = 'NIE - Załaduj opis bibliograficzny';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'Nazwa pliku USMARC';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Rekordy załadowane.';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'MARC Record';";
$trans["MarcUploadTag"]             = "\$text = 'Tag';";
$trans["MarcUploadSubfield"]        = "\$text = 'Sub';";
$trans["MarcUploadData"]            = "\$text = 'Dane';";
$trans["MarcUploadRawData"]         = "\$text = 'Dane Raw:';";
$trans["UploadFile"]                = "\$text = 'Wczytaj plik';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = 'Powered by OpenBiblio';";
$trans["Copyright"]                   = "\$text = 'Copyright &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = 'under the';";
$trans["GNU"]                 = "\$text = 'GNU General Public License';";

$trans["catalogResults"]                 = "\$text = 'Rezultaty wyszukiwania';";

#******** Dodane przez ABIX ****************
$trans["biblioCopyNewPrice"]        = "\$text = 'Cena';";

?>
