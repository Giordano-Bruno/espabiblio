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
$trans["catalogSubmit"]		= "\$text = 'Inviare';";
$trans["catalogCancel"]		= "\$text = 'Cancellare';";
$trans["catalogRefresh"]	= "\$text = 'Aggiornare';";
$trans["catalogDelete"]		= "\$text = 'Eliminare';";
$trans["catalogFootnote"]	= "\$text = 'I campi marcati con %symbol% sono richiesti.';";
$trans["AnswerYes"]		= "\$text = 'Si';";
$trans["AnswerNo"]		= "\$text = 'No';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]		= "\$text = 'Catalogazione';";
$trans["indexBarcodeHdr"]	= "\$text = 'Cercare bibliografia per codice a barre';";
$trans["indexBarcodeField"]	= "\$text = 'Codicea barre';";
$trans["indexSearchHdr"]	= "\$text = 'Cercare bibliografia per parola chiave';";
$trans["indexKeyword"]		= "\$text = 'Parola chiave';";
$trans["indexTitle"]		= "\$text = 'Titolo';";
$trans["indexAuthor"]		= "\$text = 'Autore';";
$trans["indexSubject"]		= "\$text = 'Soggetto';";
$trans["indexButton"]		= "\$text = 'Ricerca';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["indexISBN"]		= "\$text = 'ISBN';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]		= "\$text = 'Bibliografia';";
$trans["biblioFieldsMaterialTyp"]	= "\$text = 'Tipo di materiale';";
$trans["biblioFieldsCollection"]	= "\$text = 'Collezione';";
$trans["biblioFieldsStatus"]		= "\$text = 'Stato del materiale';";
$trans["biblioFieldsCallNmbr"]		= "\$text = 'Riferimento';";
$trans["biblioFieldsUsmarcFields"]	= "\$text = 'Campi USMarc';";
$trans["biblioFieldsOpacFlg"]		= "\$text = 'Mostrare in OPAC';";

$trans["biblioFieldsPictureAutorUp"]		= "\$text = 'Selezionare il filea della foto dell\'autore da inviare ';";
$trans["biblioFieldsPictureDigiUp"]		= "\$text = 'Selezionare il file digitale da inviare ';";
 

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["biblioFieldFile"]		= "\$text = '
I file di immagine e documenti digitali possono essere inseriti in due modi localhost o cloud (utilizzato per prendere i file da altre biblioteche): </ br>
<Li> Modalità localhost: si trova sullo stesso server come i file php. E devono essere situati nella cartella / media e basta selezionare </ br>
il file con il tasto </ li>
<Li> Modalità cloud: è un server diverso che contiene il php. nel qual caso digitare il percorso completo e il nome del server per generare il collegamento. Esempio: </ li>
       www.server.com/scaricati/miolibro.jpg </ li>
      Dal momento che in questo caso non si può caricare. </ Li>
<Li> Per le immagini di autori e copertine si accettano solo i formati .jpg, .png, .gif </ li>
<Li> Il materiale digitale potrà essere in qualsiasi formato </ br> </ li>
<Li> È possibile rimuovere gli indici campi MARC commentando le linee 81 e 88 nel file /catalog/inputFuncs.php </ li>
<Li> Puoi modicare questa pagina, aggiungendo o rimuovendo campi frequentemente utilizzati nel file /catalog/biblio_fields.php </ li>
per stabilire quali campi vengono aggiunti o rimossi è necessario conoscere gli indici di descrittori MARC </ br>
 È possibile verificare la presenza di questo file: </ br>
/var/www/html/espa33/locale/es/sql/GB-0.33/MARC (per lo spagnolo, per una lingua diversa usare un'altra cartella all'interno di /locale).
<Li> Per i campi MARC meno utilizzati è possibile utilizzare il menu Modifica-MARC esclusivamente con l'uso di modifiche di base da questa pagina. </ Li>
<Li> anche se molti consigliano di utilizzare il menu Carica dati Marc.</br>
';";

$trans["biblioFieldsNote1"]		= "\$text = 'Per la generazione automatica delle immagini<br/>di tutti i libri di uno stessa autore<br/> il file deve chiamarsi come l'autore';";
$trans["biblioFieldsNote2"]					= "\$text = 'Il file delle immagini del\'autore sono nella cartella ./media/autores/ ';";
$trans["biblioFieldsNote3"]			= "\$text = '
Il file di immagine della copertina può apparire senza definirlo in anticipo, essa è ricercata nei server esterni con ISBN (nel qual caso vi consigliamo di scaricare l'immagine e salvarla), </ br>
 essi possono essere ricercati anche in AMAZON ma richiede la registrazione, le immagini scaricate vengono memorizzate nell\'indirizzo indicato in modalità cloud o in una cartella';";
$trans["biblioFieldsNote4"]				= "\$text = ' Per lavorare nel modo LOCALHOST non spostarsi da qui, per il modo CLOUD inserire l\'indirizzo (link) server compreso.';";
$trans["biblioFieldsNote5"]				= "\$text = 'I file dei materiali digitali si guardano  nella cartella ';";
$trans["biblioFieldsNote6"]			= "\$text = 'Non modificare, è automatico.';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]	= "\$text = 'Aggiungi nuova';";
$trans["biblioNewSuccess"]		= "\$text = 'La seguente nuova bibliografia è stata creata. Per aggiungere una copia, selezionare \"Nuova copia\" a sinistra o \"aggiungere nuova copia\" in basso.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]	= "\$text = 'Modifica registrata correttamente.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]	= "\$text = 'Aggiungere nuova copia';";
$trans["biblioCopyNewBarcode"]		= "\$text = 'Codice a barre';";
$trans["biblioCopyNewDesc"]		= "\$text = 'Descrizione';";
$trans["biblioCopyNewAuto"]		= "\$text = 'Autogenerazione';";
$trans["biblioCopyNewValidBarco"]	= "\$text = 'Stampa di convalida';";
$trans["biblioCopyEditFormLabel"]	= "\$text = 'Modifica copia';";
$trans["biblioCopyEditFormStatus"]	= "\$text = 'Stato';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]		= "\$text = 'Copia creata correttamente.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"] = "\$text = 'Copia aggiornata correttamente.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"]	= "\$text = 'Non si può eliminare la copia. La copia deve essere registrata primadi poter essere eliminata.';";
$trans["biblioCopyDelConfirmMsg"]	= "\$text = 'Sei sicuro di voler eliminare la copia con il codice a barre %barcodeNmbr%? Ciò cancellerà anche i cambi di stato nello storico.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]		= "\$text = 'Copia con codice a barrae %barcode% eliminata correttamente.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"]		= "\$text = 'Aggiungere nuovo campo MARC';";
$trans["biblioMarcListHdr"]				= "\$text = 'Informazione del campo MARC';";
$trans["biblioMarcListTbleCol1"]		= "\$text = 'Funzione';";
$trans["biblioMarcListTbleCol2"]		= "\$text = 'Etichetta';";
$trans["biblioMarcListTbleCol3"]		= "\$text = 'Descrizione dell\'etichetta';";
$trans["biblioMarcListTbleCol4"]		= "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]		= "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]		= "\$text = 'Subcampo';";
$trans["biblioMarcListTbleCol7"]		= "\$text = 'Descrizione del subcampo';";
$trans["biblioMarcListTbleCol8"]		= "\$text = 'Dati del campo';";
$trans["biblioMarcListNoRows"]			= "\$text = 'Nessun campo MARC trovato.';";
$trans["biblioMarcListEdit"]			= "\$text = 'modifica';";
$trans["biblioMarcListDel"]				= "\$text = 'Eliminare';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]		= "\$text = 'Selettore dei campi MARC';";
$trans["usmarcSelectInst"]		= "\$text = 'Selezionare un tipo di campo';";
$trans["usmarcSelectNoTags"]	= "\$text = 'Nessuna etichetta trovata.';";
$trans["usmarcSelectUse"]		= "\$text = 'uso';";
$trans["usmarcCloseWindow"]		= "\$text = 'Chiudi finestra';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]		= "\$text = 'Aggiungere nuovo campo MARC';";
$trans["biblioMarcNewFormTag"]		= "\$text = 'Etichetta';";
$trans["biblioMarcNewFormSubfld"]	= "\$text = 'Subcampo';";
$trans["biblioMarcNewFormData"]		= "\$text = 'Dati del campo';";
$trans["biblioMarcNewFormInd1"]		= "\$text = 'Indicatore 1';";
$trans["biblioMarcNewFormInd2"]		= "\$text = 'Indicatore 2';";
$trans["biblioMarcNewFormSelect"]	= "\$text = 'Selezionare';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"] = "\$text = 'Campo MARC aggiunto correttamente.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"] = "\$text = 'Modificare campo MARC';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"] = "\$text = 'Campo MARC aggiornato correttamente.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"] = "\$text = 'Sei sicuro di voler eliminare il campo con etichetta %tag% ed il subcampo %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"] = "\$text = 'Campo MARC eliminato correttamente.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]		= "\$text = 'Questa bibliografia ha %copyCount% copie e %holdCount% prenotazioni. Eliminare relative copie e prenotazioni prima della bibliografia.';";
$trans["biblioDelConfirmReturn"]	= "\$text = 'Tornare alla bibliografia';";
$trans["biblioDelConfirmMsg"]		= "\$text = 'Sei sicuro di voler eliminare la bibliografia titolata %title%?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]		= "\$text = 'La bibliografia (Copia), %title%, è stata eliminata.';";
$trans["biblioDelReturn"]	= "\$text = 'tornare alla ricerca bibliografica';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]		= "\$text = 'Prenotazioni:';";
$trans["biblioHoldListNoHolds"]		= "\$text = 'Attualmente non ci sono prenotazioni.';";
$trans["biblioHoldListHdr1"]		= "\$text = 'Funzione';";
$trans["biblioHoldListHdr2"]		= "\$text = 'Copia';";
$trans["biblioHoldListHdr3"]		= "\$text = 'Prestato';";
$trans["biblioHoldListHdr4"]		= "\$text = 'Tesserato';";
$trans["biblioHoldListHdr5"]		= "\$text = 'Stato';";
$trans["biblioHoldListHdr6"]		= "\$text = 'Data di restituzione';";
$trans["biblioHoldListdel"]			= "\$text = 'Eliminare';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"] = "\$text = 'Non hai il permesso per catalogare';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]				= "\$text = 'Prova di importazione';";
$trans["MarcUploadTestTrue"]			= "\$text = 'Vero';";
$trans["MarcUploadTestFalse"]			= "\$text = 'Falso';";
$trans["MarcUploadTestFileUpload"]		= "\$text = 'Caricamento file USMarc';";
$trans["MarcUploadRecordsUploaded"]		= "\$text = 'Registri trasferiti';";
$trans["MarcUploadMarcRecord"]			= "\$text = 'Registri MARC';";
$trans["MarcUploadTag"]					= "\$text = 'Etichetta';";
$trans["MarcUploadSubfield"]			= "\$text = 'Sub';";
$trans["MarcUploadData"]				= "\$text = 'Dati';";
$trans["MarcUploadRawData"]				= "\$text = 'Dati grezzi:';";
$trans["UploadFile"]					= "\$text = 'Caricare file';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["MarcSizeLimitNotes"]			= "\$text = '<strong>Note:</strong> <li> Si raccomanda di usare file minori di 10 MB. Grandi file di registri MARC possono causare errori. </li><li> In caso di errori controllare se i numeri MARC sono nel database MySQL, altrimenti aggiungerli manualmente o modificare i numeri in archivio per numeri validi </ li> <li> si consiglia un successivo controllo dei dati </ li>';";
$trans["MarcUploadEncoding"]			= "\$text = 'codifica dei caratteri';";
$trans["MarcUploadNoRows"]				= "\$text = 'Nessuna riga da aggiungere';";
$trans["MarcUploadNoRowsDesc"]			= "\$text = 'Provare un'altra codifica dei caratteri durante il caricamento registrazioni MARC. <a href=\"./upload_usmarc_form.php\"> Riprova </a>.';";
$trans["MarcUpdateSample"]	= "\$text =  ' Selezionare il file MARC (Vedi <a href=\"sample_MARC.mrc\"> file modello </a>, per ulteriori informazioni, vedere <a href=\"javascript:popSecondary(\'../shared/help.php?page=MarcUpload\')\">Aiuto</a>):';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]		= "\$text = 'EspaBiblio, OpenBiblio 7.1';";
$trans["Copyright"]			= "\$text = 'Copyright &copy; 2005';";
$trans["underthe"]			= "\$text = 'by';";
$trans["GNU"]				= "\$text = 'Licenza Pubblica Generale (GNU)';";
$trans["catalogResults"]	= "\$text = 'Risultati della ricerca';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
 #* Translation text for Library of Congress SRU module
 #****************************************************************************
 $trans['locsru_Instructions']		= "\$text = 'Consulta i dati inserendo Titolo, Autore o ISBN';";
 $trans['locsru_detalle']			= "\$text = 'Permette di recuperare le informazioni dalla Biblioteca del Congresso utilizzando SRU (Search Retrival URL), che restituisce un modulo in XML.';";
 $trans['locsru_Search']			= "\$text = 'Ricerca nella Biblioteca del Congresso USA';";
 $trans['locsru_Title']				= "\$text = 'Titolo';";
 $trans['locsru_Author']			= "\$text = 'Autore;";
 $trans['locsru_ISBN']				= "\$text = 'ISBN';";
 $trans['locsru_Publication']		= "\$text = 'Pubblicazione';";
 $trans['locsru_Publisher']			= "\$text = 'Editore';";
 $trans['locsru_PublicationDate']	= "\$text = 'Data di pubblicazione';";
 $trans['locsru_UseThis']			= "\$text = 'Utilizzare';";
 $trans['Search']					= "\$text = 'Ricerca';";
 $trans['locsru_Maxlimit']					= "\$text = 'Numero massimo di risposte';"; 
 
#****************************************************************************
#* Translation text for page csv_import.php, csv_export.php
#****************************************************************************
$trans["CSVImportHeader"]		= "\$text = 'Importazione bibliografie da un file CSV.';";
$trans["CSVImport"]			= "\$text = 'Importa da un file CSV';";
$trans["CSVImportSuccess"]		= "\$text = 'tutte le righe sono state elaborate!';";
$trans["CSVImportStatus"]		= "\$text = 'fatti: %done%, copie: %copy%, errori: %failed%';";
$trans["CSVImportContinue"]		= "\$text = 'continuare le importazioni';";
$trans["CSVImportSizeLimitNotes"]	= "\$text = '<strong>Note:</strong>
<li> Si raccomanda di usare file minori di 10 MB. File più grandi possono essere divisi in varie parti prima dell\'importazione.</li>
<li> I campi seguenti sono gli unici permessi per questo modulo, di seguito i nomi mostrati da espabiblio e del campo e dei suoi rispettivi marc.</li>
<li>    isbn, autore, titolo, resto del titolo, dichiarazione di responsabilità, numero ingresso 1, numero ingresso 2, luogo pubblicazione, editore, data pubblicazione </li>
<li>    isbn, author, title, title_remainder, responsibility_stmt, call_nmbr1, call_nmbr2, publication_place, publisher_name, publication_date </li>
<li>    020a,   100a,   245a, 245b,             245c,               050a,       050b,              260a,          260b,              260c </li>
<li>    I campi ISBN, Autore e Titolo sono imprescindibili. </li>
<li>    Per i file CSV si raccomanda la codifica UTF-8  </li>  
<li>    I campi devono essere separati da tabulazioni e delimitati con \" (doppie virgolette)  </li>';";
$trans["CSVLabel"]			= "\$text = 'Selezionare il file CSV (usa <a href=\"csv_template.csv\">file di esempio</a>, Per maggiori informazioni vedere <a href=\"javascript:popSecondary(\'../shared/help.php?page=CsvImport\')\">Aiuto</a>):';";

#****************************************************************************
#* Translation text for page Cover o portadas
#****************************************************************************
$trans["Defaults:"]					= "\$text = 'Predefinito:';";
$trans["Are you sure to remove this picture?"]		= "\$text = 'Sei sicuro di voler eliminare questa immagine?';";
$trans["Remove this picture"]				= "\$text = 'Elimina questa immagine';";
$trans["No bibliography picture?"]			= "\$text = 'Nessuna immagine della bibliografia?';";
$trans["search for this one"]				= "\$text = 'Ricerca questo';";
$trans["coverLookupWait"]				= "\$text = 'Sto cercando, attendere ...';";
$trans["coverLookupNotFound"]				= "\$text = 'Nessuanc copertina trovata!';";
$trans["coverLookupISBNInvalid"]			= "\$text = 'Il formato ISBN non è valido.';";
$trans["Found"]						= "\$text = 'Trovato';";
$trans["Save"]						= "\$text = 'Salvare';";
$trans["Cancel"]					= "\$text = 'Cancellare';";
$trans["coverLookupSelect"]				= "\$text = ' Usa questa immagine.';";
$trans["This biblio's cover image has been removed."]	= "\$text = 'Questa copertina è stata eliminata.';";


#****************************************************************************
#* Translation text for page lookup_form.php
#****************************************************************************
$trans["lookup_z3950Search"]		= "\$text = 'Ricerca via Z39.50';";
$trans["lookup_isbn"]			= "\$text = 'ISBN';";
$trans["lookup_issn"]			= "\$text = 'ISSN';";
$trans["lookup_lccn"]			= "\$text = 'LCCN';";
$trans["lookup_title"]			= "\$text = 'Titolo';";
$trans["lookup_author"]			= "\$text = 'Autore';";
$trans["lookup_keyword"]		= "\$text = 'Qualunque parola chiave';";
$trans["lookup_publisher"]		= "\$text = 'nome dell\'editore';";
$trans["lookup_pubLoc"]			= "\$text = 'luogo di pubblicazione';";
$trans["lookup_pubDate"]		= "\$text = 'data di pubblicazione';";
$trans["lookup_andOpt"]			= "\$text = 'e (opzionale)';";
$trans["lookup_search"]			= "\$text = 'Ricerca';";
$trans["lookup_repository"]		= "\$text = 'Deposito';";
$trans["lookup_yazSetupFailed"]		= "\$text = 'Settaggi YAZ sbagliati per il Server Z39.50 : !';";
$trans["lookup_badQuery"]		= "\$text = 'Errore di ricerca';";
$trans["lookup_patience"]		= "\$text = 'Attendere, può servire del tempo.';";
$trans["lookup_resetInstr"]		= "\$text = 'dopo 50 secondi premere F5, per riprovare o rivedere le impostazioni YAZ nella sezione leggimi della pagina iniziale.';";
$trans["lookup_goBack"]			= "\$text = 'indietro';";
$trans["lookup_abandon"]		= "\$text = 'abbandonare ricerca';";
$trans["lookup_yazError"]		= "\$text = 'errore ricerca YAZ: ';";
$trans["lookup_nothingFound"]		= "\$text = 'Nessun risultato trovato per ';";
$trans["lookup_tooManyHits"]		= "\$text = 'Troppi risultati da mostrare, ';";
$trans["lookup_refineSearch"]		= "\$text = 'specifica maggiormente e riprova.';";
$trans["lookup_noResponse"]		= "\$text = 'Nessuna risposta del server.';";
$trans["lookup_success"]		= "\$text = 'Trovato! ecco di seguito i dati!';";
$trans["lookup_hits"]			= "\$text = ' Selezionare un risultato.';";
$trans["lookup_callNmbrType"]		= "\$text = 'Il numero di ingresso (callNmbrType) non è valido!';";
$trans['lookup_useThis']		= "\$text = 'usa questo';";
$trans['lookup_searchError']		= "\$text = 'ERRORE ricerca: invia questo all'amministratore del sistema: ';";
$trans["lookup_EmptyKeyword"]		= "\$text = 'Nessuna parola chiave specificata.';";

#****************************************************************************
#* Translation text for BulkLookup.php
#****************************************************************************
$trans["Import"]			= "\$text = 'Importare';";
$trans["lookup_bulkNotes"]		= "\$text = 'Selezionare il file che contiene la lista degli ISBN (uno per linea, in formato piano o txt, UTF.8), (è richiesto il supporto YAZ, vdere prerequisiti)';";
$trans["lookup_bulkQueue"]		= "\$text = 'Tutti gli articoli sono stati aggiunti!';";
$trans["lookup_bulkStatusHead"]		= "\$text = '<span>stato:</span> <span style=\"color:blue; padding: 3px 0\">Aggiornare ogni 10 secondi</span>';";
$trans["lookup_bulkProceed"]		= "\$text = 'Tutte le righe sono state elaborate!';";
$trans["lookup_bulkCont"]		= "\$text = 'continuare l\'importazione';";
$trans["lookup_bulkViewFailed"]		= "\$text = 'vedere gli errori';";
$trans["lookup_bulkStatusError"]	= "\$text = 'Si è verificato un errore, premi F5 per rinfrescare la pagina.';";
$trans["lookup_bulkStatus"]		= "\$text = 'Ultimo aggiornamento: %updated% (%estimate%)<br />
stato del cronometro: %cron_status%<br />
rimanente: %remain% (%trying% trying)<br />
Fatti: %done% (%covered% cperti), Copiati: %copied%<br />
Falliti: %failed%';";

//No hosts found, import always be in the failed list. agregar a locle en
$trans["lookup_HostFail"]		= "\$text = 'Nessun server selezionato';";

#****************************************************************************
#* Translation text for cdu.php
#****************************************************************************
$trans["cduitemSearchResults"]	= "\$text = 'Risultato';";
$trans["cduindexHeading"]			= "\$text = 'Ricerca chiavi Classificazione Decimale Universale o CDU (Ver 1.0) basato su AENOR/SPAGNA.';";
$trans["cduindexName"]				= "\$text = 'Ricerca per parola nel campo descizione';";
$trans["cduindexNameHdr"]			= "\$text = 'Classificazione Decimale Universale';";
$trans["cduindexSearch"]			= "\$text = 'Ricerca';";
$trans["cduindexnum"]			= "\$text = 'Ricerca per numero nel campo Numeri CDU';";
$trans["cduindexclv"]			= "\$text = 'Ricerca per chiave nel campo Chiave CDU';";
$trans["CduNum"]						= "\$text = 'Numero CDU';";
$trans["CduClv"]						= "\$text = 'Chiave CDU';";
$trans["cdusearchFoundResults"]	= "\$text = ' Risultati trovati';";
$trans["cdusearchprev"]				= "\$text = ' Precedente';";
$trans["cdusearchnext"]				= "\$text = ' Seguente';";
$trans["Cdu_Numero"]					= "\$text = 'Numero';";
$trans["Cdu_Descripcion"]			= "\$text = 'Descrizione';";
$trans["Cdu_Clave"]					= "\$text = 'Chiave';";
$trans["Cdu_Table"]					= "\$text = 'Sommario';";
$trans["cduBidSearchResults"]		= "\$text = 'Risultato';";

#****************************************************************************
#* Translation text for cdd.php
#****************************************************************************
$trans["cdditemSearchResults"]	= "\$text = 'Risultato';";
$trans["cduOtra"]						= "\$text = 'Nuova ricerca CDU';";
$trans["cddindexHeading"]			= "\$text = 'Ricerca chiavi Classificazione Decimale Dewey o CDD (Ver 1.0).';";
$trans["cddindexName"]				= "\$text = 'Ricerca per parola nel campo descizione';";
$trans["cddindexNameHdr"]			= "\$text = 'Classificazione Decimale Dewey';";

$trans["cddindexSearch"]			= "\$text = 'Ricerca';";
$trans["cddindexClave"]			= "\$text = 'Ricerca per chiave nel CDD';";
$trans["CddClave"]						= "\$text = 'Chiave CDD';";
$trans["cddindexNum"]			= "\$text = 'Ricerca per numero nel CDD';";
$trans["CddNum"]						= "\$text = 'Numero CDD';";
$trans["cddsearchFoundResults"]	= "\$text = ' Risultati trovati';";
$trans["cddsearchprev"]				= "\$text = ' Precedente';";
$trans["cddsearchnext"]				= "\$text = ' Seguente';";
$trans["Cdd_Numero"]					= "\$text = 'Numero';";
$trans["Cdd_Descripcion"]			= "\$text = 'Descrizione';";
$trans["Cdd_Clave"]					= "\$text = 'Chiave';";
$trans["Cdd_Table"]					= "\$text = 'Sommario';";
$trans["cddBidSearchResults"]		= "\$text = 'Risultato';";
$trans["cddOtra"]						= "\$text = 'Nuova ricerca CDD';";

#****************************************************************************
#* Translation text for ibic.php
#****************************************************************************
$trans["ibicitemSearchResults"]	= "\$text = 'Risultato';";
$trans["ibicindexHeading"]			= "\$text = 'Ricerca chiavi Classificazione IBIC [International Book Industry Categories] (Ver 1.0).';";
$trans["ibicindexName"]				= "\$text = 'Ricerca per parola nel campo descizione';";
$trans["ibicindexNameHdr"]			= "\$text = 'IBIC [International Book Industry Categories]';";
$trans["ibicindexSearch"]			= "\$text = 'Ricerca';";
$trans["ibicindexCardHdr"]			= "\$text = 'Ricerca per numero nel campo numeri IBIC';";
$trans["IbicNum"]						= "\$text = 'Numero IBIC';";
$trans["ibicsearchFoundResults"]	= "\$text = ' Risultati trovati';";
$trans["ibicsearchprev"]			= "\$text = ' Precedente';";
$trans["ibicsearchnext"]			= "\$text = ' Seguente';";
$trans["Ibic_Numero"]				= "\$text = 'Numero';";
$trans["Ibic_Descripcion"]			= "\$text = 'Descrizione';";
$trans["Ibic_Clave"]					= "\$text = 'Chiave';";
$trans["Ibic_Table"]					= "\$text = 'Sommario';";
$trans["ibicBidSearchResults"]	= "\$text = 'Risultato';";
$trans["ibicOtra"]					= "\$text = 'Nuova ricerca IBIC';";

#****************************************************************************
#* Translation text for cutter
#****************************************************************************
$trans["cutterBidSearchResults"]	= "\$text = 'Risultato';";
$trans["cutterindexHeading"]		= "\$text = 'Ricerca classificazione Cutter-Sanborn 3 cifre (Ver 1.0)';";
$trans["cutterindexNameHdr"]		= "\$text = 'Ricerca classificazione Cutter';";
$trans["cutterindexName"]			= "\$text = 'Cutter-Sanborn 3 cifre';";
$trans["cutterindexSearch"]		= "\$text = 'Ricerca';";
$trans["cutterOtra"]					= "\$text = 'Nuova ricerca Cutter-Sanborn';";

#****************************************************************************
#*  Translation text for page upload_csv(_form).php
#****************************************************************************
$trans["CSVloadHeader"]            = "\$text = 'Importare copie bibliografiche da un file CSV';";
$trans["CSVloadTest"]            = "\$text = 'Provare il file?';";
$trans["CSVloadTestTrue"]        = "\$text = 'Si, prova solamente l\'importazione.';";
$trans["CSVloadTestFalse"]       = "\$text = 'No, carica i dati adesso';";
$trans["CSVloadTestFileUpload"]  = "\$text = 'File CSV';";
$trans["CSVloadRecordsUploaded"] = "\$text = 'I dati sono stati caricati';";
$trans["CSVloadMarcRecord"]      = "\$text = 'Record marc';";
$trans["CSVloadTag"]             = "\$text = 'Etichetta (Tag)';";
$trans["CSVloadSubfield"]        = "\$text = 'Subcampo';";
$trans["CSVloadData"]            = "\$text = 'Dati';";
$trans["CSVRecordsRead"]         = "\$text = ' %total% risultati letti';";
$trans["CSVHeadings"]            = "\$text = 'Riepilogo obiettivi identificati';";
$trans["CSVTargets"]             = "\$text = 'Destinazione';";
$trans["CSVComments"]            = "\$text = 'Comenti';";
$trans["CSVunknownIgnored"]      = "\$text = 'Sconosciuto (ignorato)';";
$trans["CSVMaterialUnknown"]     = "\$text = 'Materiale &quot;%mType%&quot; sconosciuto';";
$trans["CSVCollUnknown"]         = "\$text = 'Collezione &quot;%collType%&quot; sconosciuta';";
$trans["CSVadded"]               = "\$text = 'Aggiunto';";
$trans["CSVerrorAtRecord"]       = "\$text = 'Errore record';";
$trans["CSVerrors"]              = "\$text = 'Errori';";
$trans["CSVerror"]               = "\$text = 'ERRORE';";
$trans["CSVwarning"]             = "\$text = 'Attenzione!';";
$trans["UploadFile"]             = "\$text = 'Caricare file';";
$trans["Defaults"]               = "\$text = 'Valori predefiniti';";
$trans["CSVshowAllFiles"]        = "\$text = 'Mostrare tutti i risultati (disabilitare con file grandi)';";
$trans["CSVcopyDescription"]     = "\$text = 'Testo descrittivo per le copie';";
$trans["CSVinputDescr"]          = "\$text = '<strong>Note:</strong><br />
<li>Il file deve contenere del testo separato da tabulazioni <b>.CVS</b> e codificato in <b>UTF-8</b> </li>
<li>Senza indicatore di testo &quot;&quot; (doppie virgolette).</li>
<li>Nel caso ci siano campi con ritorno a capo o salto di linea, usare &lt;/br&gt;, che sono usati come separatori di campo nel sistema.</li>
<li>Dopo l\'importazione è possibile che ci siano dei campi <b>marc</b> marcati di rosso. Non sono campi validi in quanto non presenti nella base dati MYSQL.</li>
<li>Questa funzione crea le bibliografie e contemporaneamente le sue rispettive copie. </li>
<li>Si raccomanda di riguardare l'\archivio.</li> ';";
$trans["CSVimportAdvise"]        = "\$text = 'Si <b><u> raccomanda caldamente </u></b> per effettuare la prova, prima salvare e tenere una copia di sicurezza della base dei dati prima della importazione !';";
$trans["CSVimportMoreMARC"]      = "\$text = 'Tutti gli altri dati MARC si possono importare mediante l\'uso della etichetta MARC (es. 020\$a per ISBN).';";
$trans["CSVcolumnHeading"]       = "\$text = 'Intestazione colonna';";
$trans["CSVcolumnDescription"]   = "\$text = 'Descrizione';";
$trans["CSVcolumnComment"]       = "\$text = 'Commento';";
$trans["CSVbarCoDescription"]    = "\$text = 'Opzionale. Può essere utilizzato per una registrazione iniziale della copia in caso di migrazione.';";
$trans["CSVCallNumber"]          = "\$text = 'Numero di registrazione';";
$trans["CSVCallNrDescription"]   = "\$text = 'Obbligatorio. CALL2 e CALL3 sono opzionali.';";
$trans["CSVoptionalDefault"]     = "\$text = 'Opzionale. Sobvrascrive il valore predefinito che figura nel presente formulario.';";
$trans["CSVUpdateContinue"]	= "\$text =  ' Selezionare il file CSV (usa <a href=\"cvs_template_bib.csv\">file di esempio</a>, Per maggiori informazioni vedere <a href=\"javascript:popSecondary(\'../shared/help.php?page=CsvImport\')\">Aiuto</a>):';";
$trans["Mandatory"]              = "\$text = 'Obbligatorio';";

#****************************************************************************
 #*  Translation text for page Bul_deelte.php
 #****************************************************************************
$trans["Marcar/Desmarcar Todos los visibles"]              = "\$text = 'Marcare/smarcare tutti i checkbox visibili';";
$trans["biblioSearchNoResults"]              = "\$text = ' Nessun risultato trovato ';";

#****************************************************************************
 #*  Translation text for page usmarc_select.php
 #****************************************************************************
 $trans["PoweredByOB"]                 = "\$text = 'Powered by OpenBiblio & Espabiblio';";
  
#****************************************************************************
#* Translation text for page marc_list.php ,  marc_select.php, marc_add_form.php marc_add.php 
#****************************************************************************
$trans["usmarcSelectInst"]	= "\$text = 'Lista dei campi marc';";
