<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.


* jalg 2012  se agregaron variables para corregir traducción en la ficha de administración de biblioteca. días 
* jalg 2012 se agrego $trans["admin_settingsViewlist"] permite activar o desactivar la función del listado general de libros. 
#* MODIFICADO POR JOSE ANTONIO LARA joanlaga@hotmail.com PARA SOPORTE DE Z39.50 (2012)

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
$trans["circCancel"]              = "\$text = 'Cancellare';";
$trans["circDelete"]              = "\$text = 'Eliminare';";
$trans["circLogout"]              = "\$text = 'Uscire';";
$trans["circAdd"]                 = "\$text = 'Agiungere';";
$trans["mbrDupBarcode"]           = "\$text = 'Il codice a barre %barcode%, è già in uso.';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["circSuspend"]             = "\$text = 'sospensione';";
$trans["circPermanentlyDelete"]   = "\$text = 'Eliminare permanentemente';";
$trans["adminStaff_pass_user_reset_Passwordreset"]   = "\$text = 'Password cambiata correttamente';";
$trans["adminStaff_Return"]   = "\$text = 'Ritornare all\'amministrazione tesserati';";



#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='Prestito';";
$trans["indexCardHdr"]            = "\$text='Ricerca tesserato per numero di tessera:';";
$trans["indexCard"]               = "\$text='Numero di Tessera:';";
$trans["indexSearch"]             = "\$text='Ricerca';";
$trans["indexNameHdr"]            = "\$text='Ricerca tessrato per cognome:';";
$trans["indexName"]               = "\$text='Il cognome inizia per:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["MailingAddress:"] = "\$text='Indirizzo:';";
$trans["mbrNewForm"]              = "\$text='Aggiungi nuovo';";
$trans["mbrEditForm"]             = "\$text='Modifica';";
$trans["mbrFldsHeader"]           = "\$text='Tesserato:';";
$trans["mbrFldsCardNmbr"]         = "\$text='Numero di tessera:';";
$trans["mbrFldsLastName"]         = "\$text='Cognome:';";
$trans["mbrFldsFirstName"]        = "\$text='Nome:';";
$trans["mbrFldsAddr1"]            = "\$text='Indirizzo:';";
$trans["mbrFldsAddr2"]            = "\$text='Indirizzo 2:';";
$trans["mbrFldsCity"]             = "\$text='Città:';";
$trans["mbrFldsStateZip"]         = "\$text='Provincia, CAP:';";
$trans["mbrFldsHomePhone"]        = "\$text='Telefono:';";
$trans["mbrFldsWorkPhone"]        = "\$text='Telefono lavoro:';";
$trans["mbrFldsCel"]              = "\$text='Cell.:';";
$trans["mbrFldsEmail"]            = "\$text='Email:';";
$trans["mbrFldsPassUser"]         = "\$text='Password:';";
$trans["mbrFldsBornDt"]           = "\$text='Data di nascita </br> (aaaa-mm-gg):';";
$trans["mbrFldsOther"]            = "\$text='Osservazioni:';";
$trans["mbrFldsClassify"]         = "\$text='Classificazione:';";
$trans["mbrFldsGrade"]            = "\$text='Corso:';";
$trans["mbrFldsTeacher"]          = "\$text='Docente:';";
$trans["mbrFldsSubmit"]           = "\$text='Inviare';";
$trans["mbrFldsCancel"]           = "\$text='Cancellare';";
$trans["mbrsearchResult"]         = "\$text='Pagine dei Risultati: ';";
$trans["mbrsearchprev"]           = "\$text='Precedente';";
$trans["mbrsearchnext"]           = "\$text='Seguente';";
$trans["First"]                   = "\$text='Primo';";
$trans["Last"]                    = "\$text='Ultimo';";
$trans["mbrsearchNoResults"]      = "\$text='Nessun risultato.';";
$trans["mbrsearchFoundResults"]   = "\$text=' risultati trovati.';";
$trans["mbrsearchSearchResults"]  = "\$text='Risultati della ricerca:';";
$trans["mbrsearchCardNumber"]     = "\$text='Numero di Tessera:';";
$trans["mbrsearchClassification"] = "\$text='Classificazione:';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["mbrFldsStatus"]           = "\$text='stato:';";
$trans["mbrsearchStatus"]         = "\$text='Stato:';";
$trans["mbrActive"]               = "\$text='attivo';";
$trans["mbrInactive"]             = "\$text='inattivo';";
$trans["mbrAutoBarcode"]          = "\$text='usare codici a barre automatici';";
$trans["mbrLatestBarcode"]        = "\$text='Ultimo numero di codice a barre.';";
$trans["mbrViewLastActDate"]      = "\$text='ultima attività:';";
//$trans["mbrFormattedDate"]        = "\$text=date('D M A - H:m', strtotime('%date%'));";
$trans["mbrFormattedDate"]        = "\$text=date('d M Y - H:m', strtotime('%date%'));";
$trans["mbrFormattedDateOld"]     = "\$text=date('Y-M-d', strtotime('%date%'));";

// usado para fotos de miembros.
$trans["mbrFldsFoto"]            = "\$text='Foto: </br> Se esiste in ../media/lectores';";
$trans["Seleccione_Foto"]        = "\$text='Selezione file della Foto: </br>*Sarà copiato automaticamente in ../media/lector';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='Tesserato aggiunto correttamente.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Dati aggiornati correttamente.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='Informaczioni dei tesserati:';";
$trans["mbrViewName"]             = "\$text='Nome:';";
$trans["mbrViewAddr"]             = "\$text='Indirizzo:';";
$trans["mbrViewCardNmbr"]         = "\$text='Numero di tessera:';";
$trans["mbrViewClassify"]         = "\$text='Classificazione:';";
$trans["mbrViewPhone"]            = "\$text='Telefono:';";
$trans["mbrViewPhoneHome"]        = "\$text='Casa:';";
$trans["mbrViewPhoneWork"]        = "\$text='Lavoro:';";
$trans["mbrViewCel"]        = "\$text='Cell.:';";
$trans["mbrViewEmail"]            = "\$text='Email:';";
$trans["mbrViewPassUser"]            = "\$text='Password:';";
$trans["mbrViewBornDt"]            = "\$text='Data di nascita:';";
$trans["mbrViewOther"]            = "\$text='Osservazioni:';";
$trans["mbrViewGrade"]            = "\$text='Corso:';";
$trans["mbrViewTeacher"]          = "\$text='Docente:';";
$trans["mbrViewHead2"]            = "\$text='Storico prestiti:';";
$trans["mbrViewStatColHdr1"]      = "\$text='Materiale';";
$trans["mbrViewStatColHdr2"]      = "\$text='Quantità';";
$trans["mbrViewStatColHdr3"]      = "\$text='Limite';";
$trans["mbrViewStatColHdr4"]      = "\$text='Quantità';";
$trans["mbrViewStatColHdr5"]      = "\$text='Limite';";
$trans["mbrViewHead3"]            = "\$text='Prestito:';";
$trans["mbrViewBarcode"]          = "\$text='Codice a barre:';";
$trans["mbrViewCheckOut"]         = "\$text='Prestare';";
$trans["mbrViewHead4"]            = "\$text='Materiale attualmente prestato:';";
$trans["mbrViewOutHdr1"]          = "\$text='Prestato';";
$trans["mbrViewOutHdr2"]          = "\$text='Materiale';";
$trans["mbrViewOutHdr3"]          = "\$text='Codice a barre';";
$trans["mbrViewOutHdr4"]          = "\$text='Titolo';";
$trans["mbrViewOutHdr5"]          = "\$text='Autore';";
$trans["mbrViewOutHdr6"]          = "\$text='Data di restituzione';";
$trans["mbrViewOutHdr7"]          = "\$text='Giorni di ritardo';";
$trans["mbrViewOutHdr8"]          = "\$text='Rinnovo';";
$trans["mbrViewOutHdr9"]          = "\$text='Ora/e';";
$trans["mbrViewOutHdr10"]         = "\$text='Registrazione';";
$trans["To Shelving Cart"]        = "\$text='Carrello per riposizionamento sugli scaffali';";
$trans["mbrViewNoCheckouts"]      = "\$text='Non ha materiale in prestito.';";
$trans["mbrViewHead5"]            = "\$text='Consultazione:';";
$trans["mbrViewHead6"]            = "\$text='Materiale attualmente prenotato:';";
$trans["mbrViewPlaceHold"]        = "\$text='Prenotare';";
$trans["mbrViewHoldHdr1"]         = "\$text='Funzione';";
$trans["mbrViewHoldHdr2"]         = "\$text='prenotato';";
$trans["mbrViewHoldHdr3"]         = "\$text='Materiale';";
$trans["mbrViewHoldHdr4"]         = "\$text='codice a barre';";
$trans["mbrViewHoldHdr5"]         = "\$text='Titolo';";
$trans["mbrViewHoldHdr6"]         = "\$text='Autore';";
$trans["mbrViewHoldHdr7"]         = "\$text='Stato';";
$trans["mbrViewHoldHdr8"]         = "\$text='Data di restituzione';";
$trans["mbrViewNoHolds"]          = "\$text='Nessuna bibliografia attualmente in attesa.';";
$trans["mbrViewBalMsg"]           = "\$text='Nota: Il tesserato ha una pendenza di %bal%.';";
$trans["mbrPrintCheckouts"]	    = "\$text='Stampa uscite';";
$trans["mbrViewDel"]              = "\$text='del';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["mbrPrintcarnet"]       = "\$text='Stampa tessera';";
$trans["mbrViewBalMsg2"]          = "\$text = 'Nota: questa bibliografia ha %fee% [multa] con maggiorazione per ritardato pagamento.';";
$trans["mbrViewStatColHdr4"]      = "\$text='Selezionare';";
$trans["mbrViewStatColHdr5"]      = "\$text='Rinnovo';";
$trans["mbrViewStatus"]           = "\$text='Stato:';";

#****** jalg,  Modificado para mostrar imagen de usuario
$trans["mbrViewHead8"]            = "\$text='Immagine del Lettore:';";
$trans["mbrViewFotHdr1"]          = "\$text='File della Foto';";
$trans["mbrViewHead_foto"]            = "\$text='Stampa tessera:';";//debug
#****** jalg,  Modificado para mostrar imagen de usuario

$trans["mbrViewHead9"]            = "\$text='Cambio password:';";


#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='I tesserati devono saldare le pendenze prima di poter prenotare del materiale.';";
$trans["checkoutErr1"]            = "\$text='Il numero del codice a barre deve essere completamente alfanumerico.';";
$trans["checkoutErr2"]            = "\$text='Nessuna bibliografia ha questo codice a barre.';";
$trans["checkoutErr3"]            = "\$text='La bibliografia col codice a barre %barcode% è stata prestata.';";
$trans["checkoutErr4"]            = "\$text='La bibliografia col codice a barre %barcode% non è disponibile per il prestito.';";
$trans["checkoutErr5"]            = "\$text='La bibliografia col codice a barre %barcode% è al momento in uso da un altro tesserato.';";
$trans["checkoutErr6"]            = "\$text='Il tesserato ha raggiunto il tempo limite di prestito per il tipo di materiale bibliografico specificato.';";
$trans["checkoutErr7"]            = "\$text='La registrazione col codice %barcode% ha raggiunto il limite di rinnovo.';";
$trans["checkoutErr8"]            = "\$text='E\' troppo tardi per rinnovare la registrazione %barcode%.';";
#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****** jalg,  Modificado para mostrar imagen de usuario
$trans["checkoutErr9"]            = "\$text='Questo tesserato è inattivo, non può vedere, rinnovare o tenere alcuna copia.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='Il numero del codice a barre deve essere completamente alfanumerico.';";
$trans["shelvingCartErr2"]        = "\$text='Nessuna bibliografia ha questo codice a barre.';";
$trans["shelvingCartTrans"]       = "\$text='Multa per ritardo nella restituzione (cod. a barre=%barcode%)';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****** jalg,  Modificado para mostrar imagen de usuario
$trans["shelvingCartErr3"]        = "\$text='Questa copia non è stata ancora attivata.';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='Restituzione:';";
$trans["checkinFormBarcode"]      = "\$text='Codice a barre:';";
$trans["checkinFormShelveButton"] = "\$text='Aggiungere al carrello del materiale da riposizionare sugli scaffali';";
$trans["checkinFormCheckinLink1"] = "\$text='Restituire il materiale selezionato';";
$trans["checkinFormCheckinLink2"] = "\$text='Restituire tutto';";
$trans["checkinFormHdr2"]         = "\$text='Lista attuale del carrello dei materiali da riporre sugli scaffali:';";
$trans["checkinFormColHdr1"]      = "\$text='Data di scansione';";
$trans["checkinFormColHdr2"]      = "\$text='Codice a barre';";
$trans["checkinFormColHdr3"]      = "\$text='Titolo';";
$trans["checkinFormColHdr4"]      = "\$text='Autore';";
$trans["checkinFormEmptyCart"]    = "\$text='Attualmente non ci sono materiali da riporre sugli scaffali.';";
#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****** jalg,  Modificado para mostrar imagen de usuario
$trans["checkinDone1"]                  = "\$text='Registrato in [Checked in] %barcode% da %fname% %lname%.';";
$trans["checkinDone2"]                  = "\$text='Registrato in [Checked in] %barcode%.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='Non è stato selezionato alcun articolo.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='La bibliografia è in prestito!';";
$trans["holdMessageMsg1"]         = "\$text='La bibliografia col codice a barre %barcode% ha una o più prenotazioni.  <b>Per favore, rimettila a posto sullo scaffale.</b>  Lo stato di questa bibliografia è rimasto erroneamente libero per l\'uso.';";
$trans["holdMessageMsg2"]         = "\$text='Tornare alla erstituzione del materiale.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='Il codice a barre deve essere numerico.';";
$trans["placeHoldErr2"]           = "\$text='Il Codice non esiste.';";
$trans["placeHoldErr3"]           = "\$text='Il tesserato ha cancellato la prenotazione.';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["placeHoldErrNotChkOut"]       = "\$text='Questo materiale non è disponibile.';";
$trans["placeHoldErrDup"]       = "\$text='Questo tesserato ha già prenotato questa copia.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'Il tesserato %name%, ha %checkoutCount% prestiti e %holdCount% prenotazioni. Tutti i materiali prestati devono essere restituiti e tutte le prenotazioni cancellate, prima di eliminarlo definitivamente.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'Tornare alle informazioni del tesserato';";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Sei sicuro di voler eliminare il tesserato %name%? Ciò cancellerà tutto lo storico dei suoi prestiti.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='Tesserato %name%, eliminato.';";
$trans["mbrDelReturn"]            = "\$text='Torna alla ricerca tesserati';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["mbrSuspendSuccess"]       = "\$text='Il tesserato %name%, è stato sospeso.';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='Storico dei prestiti:';";
$trans["mbrHistoryNoHist"]        = "\$text='Non è stato trovato alcuno storico.';";
$trans["mbrHistoryHdr1"]          = "\$text='Codice a barre';";
$trans["mbrHistoryHdr2"]          = "\$text='Titolo';";
$trans["mbrHistoryHdr3"]          = "\$text='Autore';";
$trans["mbrHistoryHdr4"]          = "\$text='Nuovo stato';";
$trans["mbrHistoryHdr5"]          = "\$text='Data di cambio di stato';";
$trans["mbrHistoryHdr6"]          = "\$text='Data di restituzione';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='Aggiungere una transazione:';";
$trans["mbrAccountTransTyp"]      = "\$text='Tipo di transazione:';";
$trans["mbrAccountAmount"]        = "\$text='Importo:';";
$trans["mbrAccountDesc"]          = "\$text='Descrizione:';";
$trans["mbrAccountHead1"]         = "\$text='Transazioni del tesserato con il saldo:';";
$trans["mbrAccountNoTrans"]       = "\$text='Non esistono transazioni.';";
$trans["mbrAccountOpenBal"]       = "\$text='Saldo iniziale';";
$trans["mbrAccountDel"]           = "\$text='Cancellare';";
$trans["mbrAccountHdr1"]          = "\$text='Funzione';";
$trans["mbrAccountHdr2"]          = "\$text='Data';";
$trans["mbrAccountHdr3"]          = "\$text='Tipo di transazione';";
$trans["mbrAccountHdr4"]          = "\$text='Descrizione';";
$trans["mbrAccountHdr5"]          = "\$text='importo';";
$trans["mbrAccountHdr6"]          = "\$text='Saldo';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='Transazione avvenuta correttamente.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Sei sicuro di voler eliminare questa transazione?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Transazione eliminata correttamente.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Prestito di %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Data:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Tesserato:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Num. tessera:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Classficazione:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Chiudi finestra';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
#*  Translation text for page csv_import.php
#****************************************************************************
$trans["CSVImportHeader"]     = "\$text='Importare lista tesserati da un file CSV.';";
$trans["mbrCannotOpenFile"]   = "\$text='Non si può aprire il file';";
$trans["mbrCannotUploadFile"] = "\$text='Non si può caricare il file';";
$trans["mbrImportCompleted"]  = "\$text='I tesserati sono stati importati';";

$trans["CSVImportStatus"]		= "\$text = 'fatti: %done%, Copie: %copy%, errori: %failed%';";
$trans["CSVImportContinue"]		= "\$text = 'continuare le importazioni';";
$trans["CSVImportSizeLimitNotes"]	= "\$text = '<strong>Nota:</strong>  La grandezza dei file deve essere inferiore a (File grandi possono essere suddivisi in più parti prima di caricarli) ';";
$trans["CSVLabel"]			= "\$text = 'Selezionare il file CSV (usa <a href=\"csv_template_member.csv\">File di esempio</a>, Per maggiori informazioni vedere <a href=\"javascript:popSecondary(\'../shared/help.php?page=CsvImport\')\">Aiuto</a>):';";
$trans["UploadFile"]  = "\$text='Caricare';";


#****************************************************************************
#*  Translation text for Error message
#****************************************************************************
$trans["Card number is required."]  = "\$text = 'Il numero di tessera è necessario.';";
$trans["Card number must be all alphabetic and numeric characters."] = "\$text = 'Il numero di tessera deve avere tutti i caratteri alfabetici e numerici.';";
$trans["Last name is required."]       = "\$text = 'Il cognome è richiesto.';";
$trans["First name is required."]       = "\$text = 'Il nome è richiesto.';";
$trans["Status options is incorrect."] = "\$text = 'L'opzione di stato non è corretta.';";

#****************************************************************************
#*  Translation text for page mbr_print_Carnet.php
#****************************************************************************
$trans["mbrPrintCarnetTitle"]  = "\$text='Tessera di %mbrName%';";
  $trans["Renew All"]  = "\$text='Rinnovare tutto';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["reportDateMonth01"]			= "\$text = 'Gennaio';";
$trans["reportDateMonth02"]			= "\$text = 'Febbraio';";
$trans["reportDateMonth03"] 			= "\$text = 'Marzo';";
$trans["reportDateMonth04"]			= "\$text = 'Aprile';";
$trans["reportDateMonth05"]			= "\$text = 'Maggi';";
$trans["reportDateMonth06"]			= "\$text = 'Giugno';";
$trans["reportDateMonth07"]			= "\$text = 'Luglio';";
$trans["reportDateMonth08"]			= "\$text = 'Agosto';";
$trans["reportDateMonth09"]			= "\$text = 'Settembre';";
$trans["reportDateMonth10"]			= "\$text = 'Ottobre';";
$trans["reportDateMonth11"]			= "\$text = 'Novembre';";
$trans["reportDateMonth12"]			= "\$text = 'Dicembre';";

$trans["Override Due Date"]			= "\$text = 'Annullare data di pagamento';";
$trans["Reset pass"]				= "\$text = 'Resettare la password ';";
$trans["member_list_Pwd"]			= "\$text = 'N. di tessera: ';";

#* user_pwd-reset 
$trans["adminStaff_pwd_reset_form_Resetheader"]			= "\$text = 'Cambiare la password';";
$trans["adminStaff_new_form_Reenterpassword"]			= "\$text = 'Confermare la password';";
$trans["adminStaff_new_form_Password"]			= "\$text = 'Nuova password';";
$trans["adminCancel"]			= "\$text = 'Cancellare';";
$trans["adminSubmit"]			= "\$text = 'Acctare';";
