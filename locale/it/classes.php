<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.

* jalg 2012  se agregaron variables para corregir traducirnos en la ficha de administración de biblioteca. días 
* jalg 2012 se agrego $trans["admin_settingsViewlist"] permite activar o desactivar la función del listado general de libros. 
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
#*  Translation text for class Biblio
#****************************************************************************
$trans["biblioError1"]            = "\$text = 'Numero di riferimento richiesto.';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = 'Campo richiesto.';";
$trans["biblioFieldError2"]       = "\$text = 'L\'etichetta deve essere numerica.';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["biblioFieldErrorPictureType"]             = "\$text = 'Tipo non supportato (formati supportati jpeg, gif, png).';";
$trans["biblioFieldErrorPictureLoadFailed"]   = "\$text = 'Non si può caricare l\'immagine.';";
$trans["biblioFieldErrorCoverLookupFailed"] = "\$text = 'Errore connettendosi al servizio in linea di ricerca della copertina.';";
$trans["biblioFieldErrorDuplicatedISBN"]       = "\$text = 'Questo ISBN è già in uso,';";
$trans["biblioFieldViewExistingISBN"]            = "\$text = 'Vedere elemento esistente.';";
$trans["biblioFieldErrorDuplicatedTitle"]       = "\$text = 'Questo titolo è già in uso,';";
$trans["biblioFieldViewExistingTitle"]            = "\$text = 'Vedere elemento esistente o specificare ISBN.';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = 'Errore accedendo alla bibliografia.';";
$trans["biblioQueryQueryErr2"]    = "\$text = 'Errore accedendo al campo della bibliografia.';";
$trans["biblioQueryInsertErr1"]   = "\$text = 'Errore inserendo una nuova bibliografia.';";
$trans["biblioQueryInsertErr2"]   = "\$text = 'Errore inserendo un nuovo campo bibliografico.';";
$trans["biblioQueryUpdateErr1"]   = "\$text = 'Errore aggiornamento informazione bibliografica.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = 'Errore pulizia del campo bibliografico per aggiornarlo.';";
$trans["biblioQueryDeleteErr"]    = "\$text = 'Errore eliminazione bibliografia.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = 'Errore conteggio risultati ricerca bibliografica.';";
$trans["biblioSearchQueryErr2"]   = "\$text = 'Errore ricerca bibliografia.';";
$trans["biblioSearchQueryErr3"]   = "\$text = 'Errore lettura bibliografia.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = 'Codice richiesto.';";
$trans["biblioCopyError2"]        = "\$text = 'Il codice deve essere totalmente alfabetico e/o numerico.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = 'Errore validazione codice a barre.';";
$trans["biblioCopyQueryErr2"]     = "\$text = 'Il codice a barre %barcodeNmbr% è già in uso.';";
$trans["biblioCopyQueryErr3"]     = "\$text = 'Errore inserendo la nuova copia.';";
$trans["biblioCopyQueryErr4"]     = "\$text = 'Errore di accesso alla copia.';";
$trans["biblioCopyQueryErr5"]     = "\$text = 'Errore di aggiornamento della copia.';";
$trans["biblioCopyQueryErr6"]     = "\$text = 'Errore di cancellazione della copia.';";
$trans["biblioCopyQueryErr7"]     = "\$text = 'Errore di accesso alla bibliografia per ottenere il codice collezione.';";
$trans["biblioCopyQueryErr8"]     = "\$text = 'Errore di accesso alla collezione per verificare la data di restituzione.';";
$trans["biblioCopyQueryErr9"]     = "\$text = 'Si è verificato un errore registrando le copie';";
$trans["biblioCopyQueryErr10"]    = "\$text = 'Si è verificato un errore verificando i limiti di prestito';";
$trans["biblioCopyQueryErr11"]    = "\$text = 'Errore ottenendo l\'identificazione della copia.';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = 'Errore leggendo un campo della bibliografia.';";
$trans["biblioFieldQueryErr2"]    = "\$text = 'Errore di letura dei campi dela bibliografia.';";
$trans["biblioFieldQueryInsertErr"] = "\$text = 'Errore inserimento nuovo campo bibliografico.';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = 'Errore aggiornamento campo.';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = 'Errore eliminazione campo.';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = 'Errore accedendo ai dati del blocco marc.';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = 'Errore accedendo all\'etichetta dei dati marc.';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = 'Errore accedendo al subcampo dei dati marc.';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = 'Errore accesso ai dati del prestito da parte della identificazione bibliografica.';";
$trans["biblioHoldQueryErr2"]     = "\$text = 'Errore accesso ai dati del prestito da parte del tesserato.';";
$trans["biblioHoldQueryErr3"]     = "\$text = 'Errore identificazione bibliografia e identificazione copia per realizzazione sollecito restituzione.';";
$trans["biblioHoldQueryErr4"]     = "\$text = 'Errore inserimento dati prestito.';";
$trans["biblioHoldQueryErr5"]     = "\$text = 'Errore cancellazione dati del prestito.';";
$trans["biblioHoldQueryErr6"]     = "\$text = 'Errore ottenimento tesserato che ha fatto la prenotazione.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = 'Impossibile eseguire la stampa.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = 'Un valore non numerico non è valido in una colonna numerica.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = 'Formato di data e ora non valido.';";
$trans["reportCriteriaDateErr"]   = "\$text = 'Formato di data non valido.';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = 'Tipo di font non valido  per xml.  I tipi validi sono Courier, Helvetica, e Times-Roman.';";
$trans["labelFormatFontSizeErr"]  = "\$text = 'Grandezza font non valida per xml.  La grandezza deve essere numerica.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Grandezza font non valida per xml.  La grandezza deve essere mggiore di zero.';";
$trans["labelFormatLMarginErr"]   = "\$text = 'Margine sinistro non valido per xml.  Il margine deve essere numerico.';";
$trans["labelFormatLMarginErr2"]  = "\$text = 'Margine sinistro non valido per xml.  Il margine deve essere maggiore di zero.';";
$trans["labelFormatRMarginErr"]   = "\$text = 'Margine destro non valido per xml.  Il margine deve essere numerico.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Margine destro non valido per xml.  Il margine deve essere maggiore di zero.';";
$trans["labelFormatTMarginErr"]   = "\$text = 'Margine superiore non valido per xml.  Il margine deve essere numerico.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Margine superiore non valido per xml.  Il margine deve essere maggiore di zero.';";
$trans["labelFormatBMarginErr"]   = "\$text = 'Margine inferiore non valido per xml.  Il margine deve essere numerico.';";
$trans["labelFormatBMarginErr2"]  = "\$text = 'Margine inferiore non valido per xml.  Il margine deve essere maggiore di zero.';";
$trans["labelFormatColErr"]       = "\$text = 'Colonne non valide per xml.  Le colonne devono essere numeriche.';";
$trans["labelFormatColErr2"]      = "\$text = 'Colonne non valide per xml.  Le colonne devono essere maggiori di zero.';";
$trans["labelFormatWidthErr"]     = "\$text = 'Larghezza pagina non valida per xml.  La larghezza deve essere numerica.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Larghezza pagina non valida per xml.  La larghezza deve essere maggiore di zero.';";
$trans["labelFormatHeightErr"]    = "\$text = 'Altezza pagina non valida per xml.  L\'altezza deve essere numerica.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Altezza pagina non valida per xml.  L\'altezzadeve essere maggiore di zero.';";
$trans["labelFormatNoLabelsErr"]  = "\$text = 'Líneas no válidas xml.';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = 'Errore ottenendo lo storico.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Errore ottenendo lo storico da parte del tesserato';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Errore inserimento storico';";
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Errore cancellazione storico';";
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Errore cancellazione storico da parte del tesserato';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = 'Quantità richiesta.';";
$trans["memberAccountTransError2"]  = "\$text = 'La quantità deve essere numerica.';";
$trans["memberAccountTransError3"]  = "\$text = 'La descrizione è richiesta.';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = 'Errore accesso al saldo contabile del tesserato.';";
$trans["memberAccountQueryErr2"]    = "\$text = 'Errore inserimento saldo contabile del tesserato.';";
$trans["memberAccountQueryErr3"]    = "\$text = 'Errore cancellazione saldo contabile del tesserato.';";



#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
#*  Translation text for class CSV error
#****************************************************************************
$trans["CSVErrorInvalidFile"]                   = "\$text = 'Caricamento file non valido.';";
$trans["CSVErrorInvalidFileFormat"]       = "\$text = 'formato archivio non valido.';";
$trans["CSVErrorOversized"]                   = "\$text = 'limite massimo di grandezza.';";
$trans["CSVErrorReadFile"]                      = "\$text = 'non posso aprire il file caricato.';";
$trans["CSVErrorMissingHeader"]           = "\$text = 'Mancanza intestazione (prima fila)';";
$trans["CSVErrorIncorrectHeader"]           = "\$text = 'Intestazione non corretta';";
$trans["CSVErrorInvalidData"]           = "\$text = 'Non è valido iniziare il formato CSV con la linea %line%';";
$trans["CSVErrorMissingRequireField"] = "\$text = 'Sono stati omessi i campi richiesti (ISBN, Autore, Titolo.) nella linea %line%';";
