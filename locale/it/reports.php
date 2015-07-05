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
#*  Translation text used on multiple pages
#****************************************************************************
$trans["reportsCancel"] = "\$text = 'Cancellare';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]	= "\$text = 'Stampe';";
$trans["indexDesc"]	= "\$text = 'Utilizza le stampe o la lista etichette situata a sinistra per creare stampe o etichette.';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]		= "\$text = 'Lista delle stampe';";
$trans["reportListDesc"]	= "\$text = 'Scegli uno dei seguenti collegamenti per realizzare una stampa.';";
$trans["reportListXmlErr"]	= "\$text = 'Si è verificato un errore analizzando una stampa xml.';";
$trans["reportListCannotRead"]	= "\$text = 'Non riesco a leggere il file: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]		= "\$text = 'Lista etichette';";
$trans["labelListDesc"]		= "\$text = 'Scegli uno dei seguenti collegamenti per realizzare una etichetta in formato pdf.';";
$trans["displayLabelsXmlErr"]	= "\$text = 'Si è verificato un errore mostrando l\'etichetta xml. Error = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]		= "\$text = 'Lista delle lettere';";
$trans["letterListDesc"]	= "\$text = 'Scegli uno dei seguenti collegamenti per realizzare una lettera in formato pdf.';";
$trans["displayLettersXmlErr"]	= "\$text = 'Si è verificato un errore mostrando la lettera xml. Error = ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]			= "\$text = 'Criteri di ricerca delle stampe (opzionale)';";
$trans["reportCriteriaHead2"]			= "\$text = 'Classificazione delle stampe (opzionale)';";
$trans["reportCriteriaHead3"]			= "\$text = 'Stampa tipo di stampe';";
$trans["reportCriteriaCrit1"]			= "\$text = 'Criterio 1:';";
$trans["reportCriteriaCrit2"]			= "\$text = 'Criterio 2:';";
$trans["reportCriteriaCrit3"]			= "\$text = 'Criterio 3:';";
$trans["reportCriteriaCrit4"]			= "\$text = 'Criterio 4:';";
$trans["reportCriteriaEQ"]			= "\$text = '=';";
$trans["reportCriteriaNE"]			= "\$text = 'no =';";
$trans["reportCriteriaLT"]			= "\$text = '&lt;';";
$trans["reportCriteriaGT"]			= "\$text = '&gt;';";
$trans["reportCriteriaLE"]			= "\$text = '&lt o =';";
$trans["reportCriteriaGE"]			= "\$text = '&gt o =';";
$trans["reportCriteriaBT"]			= "\$text = 'fra';";
$trans["reportCriteriaAnd"]			= "\$text = 'e';";
$trans["reportCriteriaRunReport"]		= "\$text = 'realizza stampa';";
$trans["reportCriteriaSortCrit1"]		= "\$text = 'Classe 1:';";
$trans["reportCriteriaSortCrit2"]		= "\$text = 'Classe 2:';";
$trans["reportCriteriaSortCrit3"]		= "\$text = 'Classe 3:';";
$trans["reportCriteriaAscending"]		= "\$text = 'ascendente';";
$trans["reportCriteriaDescending"]		= "\$text = 'discendente';";
$trans["reportCriteriaStartOnLabel"]		= "\$text = 'Comincia a stampare dall\'etichetta:';";
$trans["reportCriteriaOutput"]			= "\$text = 'Formato tipo di stampa:';";
$trans["reportCriteriaOutputHTML"]		= "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]		= "\$text = 'CSV';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["HTML (page-by-page)"]			= "\$text = 'HTML (Pagina per pagina)';";
$trans["HTML (one big page)"]			= "\$text = 'HTML (pagina unica)';";
$trans["CSV"]					= "\$text = 'CSV';";
$trans["Microsoft Excel"]			= "\$text = 'OpenOffice Calc, LibreOffice Calc,  Microsoft Excel';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]		= "\$text = 'criteri di selezione della stampa';";
$trans["runReportReturnLink2"]		= "\$text = 'stampa di lista';";
$trans["runReportTotal"]		= "\$text = 'file di totali:';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["Print list"]			= "\$text = 'Stampare la lista';";
$trans["Labels"]			= "\$text = 'etichette';";
$trans["reportsResultNotFound"]		= "\$text = 'Nessun risultato.';";
$trans["reportsResultFound"]		= "\$text = '%results% risultati trovati.';";
$trans["Report Results:"]		= "\$text = 'stampa dei risultati:';";


$trans["&laquo;Prev"]              = "\$text = ' &laquo; Precedente'; ";
$trans["Next&raquo;"]              = "\$text = ' Seguente &raquo; ';";
$trans["&laquo;First"]             = "\$text = ' &laquo; Primo ';";
$trans["Last&raquo;"]              = "\$text = ' Ultimo &raquo; ';";



#****************************************************************************
#* Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"]	= "\$text = 'Il campo deve essere numerico.';";
$trans["displayLabelsXmlErr"]		= "\$text = 'Si è verificato un errore di analisi delle definizioni XML. Error = ';";
$trans["displayLabelsCannotRead"]	= "\$text = 'Non si può leggere l'etichetta del file: %fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]			= "\$text = 'Non sei autorizzato ad usare la sezione delle stampe.';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]				= "\$text = 'Mantenere le richieste di prestito che contengono le informazioni di contatto del tesserato';";
$trans["reportCheckouts"]			= "\$text = 'Lista delle bibliografie in prestito';";
$trans["Over Due Letters"]			= "\$text = 'Lettere arretrati';";
$trans["reportLabels"]				= "\$text = 'Stampa etichette';";
$trans["popularBiblios"]			= "\$text = 'Bibliografie più popolari';";
$trans["overdueList"] 				= "\$text = 'Lista dei tesserati con articoli in attesa di restituzione';";
$trans["balanceDueList"]			= "\$text = 'Lista degli articoli in attesa di restituzione dai tesserati';";
$trans["Circulation"]				= "\$text = 'Prestito ';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["Cataloging"]				= "\$text = 'Catalogazione';";
$trans["Acquisition"]				= "\$text = 'Acquisizione';";
$trans["Statistics"]				= "\$text = 'Statistiche';";
$trans["Duplicate Titles"]			= "\$text = 'Titoli duplicati';";
$trans["Member Search"]				= "\$text = 'Ricerca tesserati';";
$trans["Copy Search"]				= "\$text = 'Ricerca copia';";
$trans["Most Popular Authors"]			= "\$text = 'Autori più popolari';";
$trans["Periodic Checkout Count"]		= "\$text = 'Controllo periodico';";
$trans["Bulk summary"]				= "\$text = 'Sommario a lotti [Bulk summary]';";
$trans["Item Checkout History"]			= "\$text = 'Storico articoli persi';";


$trans["Group By"]				= "\$text = 'Raggruppare per';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]		= "\$text = 'Esempio di etichette multiple';";
$trans["labelsSimple"]		= "\$text = 'Esempio di etichette singole';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]				= "\$text = 'Identificazione della Biblioteca ID';";
$trans["biblio.create_dt"]			= "\$text = 'Data di creazione';";
$trans["biblio.last_change_dt"]			= "\$text = 'Data ultima modifica';";
$trans["biblio.material_cd"]			= "\$text = 'Materiale in Cd';";
$trans["biblio.collection_cd"]			= "\$text = 'Collezione';";
$trans["biblio.call_nmbr1"]			= "\$text = 'Ingresso 1';";
$trans["biblio.call_nmbr2"]			= "\$text = 'Ingresso 2';";
$trans["biblio.call_nmbr3"]			= "\$text = 'Ingresso 3';";
$trans["biblio.title_remainder"]		= "\$text = 'Resto dei titoli';";
$trans["Title Remainder"]			= "\$text = 'Resto del titolo';";
$trans["biblio.responsibility_stmt"]		= "\$text = 'Responsabilità';";
$trans["biblio.opac_flg"]			= "\$text = 'Flag OPAC';";
$trans["biblio_copy.barcode_nmbr"]		= "\$text = 'Codice a barre';";
$trans["biblio.title"]				= "\$text = 'Titolo';";
$trans["biblio.author"]				= "\$text = 'Autore';";
$trans["biblio_copy.status_begin_dt"]		= "\$text = 'Data inizio stato';";
$trans["biblio_copy.due_back_dt"]		= "\$text = 'Data di rstituzione';";
$trans["member.mbrid"]				= "\$text = 'Identificazione tesserato';";
$trans["member.barcode_nmbr"]			= "\$text = 'Codicea barre tesserato';";
$trans["member.last_name"]			= "\$text = 'Cognome';";
$trans["member.first_name"]			= "\$text = 'Nome';";
$trans["member.address"]			= "\$text = 'Indirizzo';";
$trans["biblio_hold.hold_begin_dt"]		= "\$text = 'Data del prestito';";
$trans["member.home_phone"]			= "\$text = 'Telefono casa';";
$trans["member.work_phone"]			= "\$text = 'Telefono lavoro';";
$trans["member.email"]				= "\$text = 'Email';";
$trans["biblio_status_dm.description"]		= "\$text = 'Stato';";
$trans["settings.library_name"]			= "\$text = 'Nombe della biblioteca';";
$trans["settings.library_hours"]		= "\$text = 'Orario della biblioteca ';";
$trans["settings.library_aders"]		= "\$text = 'Indirizzo della biblioteca';";
$trans["settings.library_phone"]		= "\$text = 'Telefono della biblioteca';"; //add jalg
$trans["days_late"]				= "\$text = 'Giorni di ritardo';";
$trans["title"]					= "\$text = 'Titolo';";

$trans["author"]				= "\$text = 'Autore';";
$trans["due_back_dt"]				= "\$text = 'Data di restituzione';";
$trans["checkoutCount"]				= "\$text = 'Conto del prestito';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["reportDateMonth01"]			= "\$text = 'Gennaio';";
$trans["reportDateMonth02"]			= "\$text = 'Febbraio';";
$trans["reportDateMonth03"] 			= "\$text = 'Marzo';";
$trans["reportDateMonth04"]			= "\$text = 'Aprile';";
$trans["reportDateMonth05"]			= "\$text = 'Maggio';";
$trans["reportDateMonth06"]			= "\$text = 'Giugnio';";
$trans["reportDateMonth07"]			= "\$text = 'Luglio';";
$trans["reportDateMonth08"]			= "\$text = 'Agosto';";
$trans["reportDateMonth09"]			= "\$text = 'Settembre';";
$trans["reportDateMonth10"]			= "\$text = 'Ottobre';";
$trans["reportDateMonth11"]			= "\$text = 'Novembre';";
$trans["reportDateMonth12"]			= "\$text = 'Dicembre';";
$trans["Barcode"]				= "\$text = 'Codice a barre';";
$trans["Barcode Starts With"]			= "\$text = 'Il codice a barre comincia con';";
$trans["List of Barcodes (spaced)"]		= "\$text = 'Lista dei codici a barre (spaziata)';";
$trans["Title"]					= "\$text = 'Titolo';";
$trans["# Checkouts, Author, Title"]		= "\$text = '# Prestito, Autore, Titolo';";
$trans["Most Checkouts, Author, Title"]		= "\$text = 'I più prestati, Autore, Titolo';";
$trans["Newer than (Date or today)"]		= "\$text = 'Più nuovo di (data o oggi)';";
$trans["Sort By"]				= "\$text = 'Ordinato per';";
$trans["Format"]				= "\$text = 'Formato';";
$trans["Minimum balance"]			= "\$text = 'Saldo minimo';";
$trans["Call Number"]				= "\$text = 'Numero riferimento';";
$trans["Placed before"]				= "\$text = 'Messo prima';";
$trans["Placed since"]				= "\$text = 'fino a ';";
$trans["As of"]					= "\$text = 'Come';";
$trans["Due before"]				= "\$text = 'prima di';";
$trans["Out since"]				= "\$text = 'Fuori fino a';";
$trans["Before"]				= "\$text = 'Prima di';";
$trans["After (Date or yesterday)"]		= "\$text = 'Dopo (data o ieri)';";

$trans["reportsReverse"]			= "\$text = '(Inverso)';";
$trans["Member Name"]				= "\$text = 'Nome del tesserato';";
$trans["Balance Due"]				= "\$text = 'Saldo';";
$trans["bulkReportBibID"]			= "\$text = 'Biblio ID';";
$trans["bulkReportBibName"]			= "\$text = 'Biblio Nome';";
$trans["bulkReportNoItem"]			= "\$text = 'Senza alcun risultato.';"; //lara revisar
$trans["bulkReportAllCovered"]			= "\$text = 'Tutti gli elementi hanno la copertina.';";
$trans["bulkReportConfirmPurge"]		= "\$text = 'Sicuro di voler cancellare la lista ISBN?';";
$trans["bulkReportPurgeDone"]			= "\$text = 'Tutti gli articoli sono stati cancellati.';";
$trans["bulkReportConfirmRemoveISBN"]		= "\$text = 'Sei sicuro di voler eliminare l\'ISBN: %isbn%?';";
$trans["bulkReportISBNRemoved"]			= "\$text = 'L\'ISBN %isbn% è stato eliminato dalla lista.';";
$trans["bulkReportZeroHits"]			= "\$text = 'Trovati %zero_hits% elementi nascosti (senza copie), <a href=\"bulk_report.php?type=manual&act=cleartemp\">Pulisci adesso.</a>';";
$trans["bulkReportZeroHitsClear"]		= "\$text = 'Gli elementi nascosti (senza copie) sono stati eliminati dalla lista.';";
$trans["function"]				= "\$text = 'Funzione';";
$trans["add"]					= "\$text = 'Aggiungi';";
$trans["edit"]					= "\$text = 'Modifica';";
$trans["remove"]				= "\$text = 'Rimuovi';";
$trans["Hits"]					= "\$text = 'Visite';";
$trans["Created"]				= "\$text = 'Data di creazione';";
$trans["Export to file"]			= "\$text = 'Esportare su file';";
$trans["Purge all items"]			= "\$text = 'Eliminare tutti gli elementi';";
$trans["Submit"]				= "\$text = 'Inviare';";
$trans["Call Num."]				= "\$text = 'Numero chiamata';";
$trans["Author"]				= "\$text = 'Autore';";
$trans["collection"]				= "\$text = 'Collezione';";
$trans["Checkout Date"]				= "\$text = 'Data di sollecito';";
$trans["Due Date"]				= "\$text = 'Data di scadenza';";
$trans["Hold Date"]				= "\$text = 'Validità';";
$trans["Member Barcode"]			= "\$text = 'Codice a barre tesserato';";
$trans['rptFormattedDate']			= "\$text = data('j M Y', strtotime('%date%'));";
$trans['rptFormattedShortDate']			= "\$text = date('j F Y', strtotime('%date%'));";
$trans['rptLetterDear']				= "\$text = 'Spettabile %lastName% %firstName%:';";
$trans['rptLetterDetails']			= "\$text = 'I nostri registri indicano che è scaduta la data di restituzione per le voci seguenti. Si prega di restituirli il più presto possibile e di pagare la multa per il ritardo dovuto.';";
$trans['rptLetterFooter']			= "\$text = 'Distinti saluti, <br />Bibliotecario ' . OBIB_LIBRARY_NAME;";

$trans["Bibliography"]				= "\$text = 'Bibliografia';";
$trans["Bibliography Copy"]				= "\$text = 'Copia Bibliografia';";
