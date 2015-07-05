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
$trans["sharedCancel"]			= "\$text = 'Cancellare';";
$trans["sharedDelete"]			= "\$text = 'Eliminare';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["sharedComfirmDelete"]		= "\$text = 'Si, eliminare tutti gli articoli selezionati';";
$trans["sharedDeleteWarning"]		= "\$text = 'Questa azione non è annullabile, sei sicuro?';";
$trans["sharedRecordIsDelete"]		= "\$text = 'il dato è stato cancellato.';";
$trans["sharedRecordsAreDeleted"]	= "\$text = 'i dati sono stati cancellati.';";
$trans["sharedListOfDeletedItems"]	= "\$text = 'La lista degli articoli sará eliminata';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Informazione bibliografica';";
$trans["biblioViewMaterialType"]   = "\$text = 'Tipo di materiale';";
$trans["biblioViewCollection"]     = "\$text = 'Collezione';";
$trans["biblioViewCallNmbr"]       = "\$text = 'Localizzazione';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'Informazione della copia';";
$trans["biblioViewTble2Col1"]      = "\$text = 'Codice a barre #';";
$trans["biblioViewTble2Col2"]      = "\$text = 'Descrizione';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Stato';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Stato Dt';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Data di restituzione';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Funzione';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'Eliminare';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'modifica';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'Informazione bibliografica addizionale';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'Non esiste informazione addizionale.';";
$trans["biblioViewNoCopies"]       = "\$text = 'Non sono state create le copie.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Mostrare in OPAC';";
$trans["biblioViewNewCopy"]        = "\$text = 'Aggiungere nuova copia';";
$trans["biblioViewNeweCopy"]        = "\$text = 'Aggiungere nueva copia digitale';";
$trans["biblioViewYes"]            = "\$text = 'Si';";
$trans["biblioViewNo"]             = "\$text = 'No';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["biblioViewPictureHeader"]		= "\$text = 'Immagine della copertina';";
$trans["biblioViewPictureContra"]		= "\$text = 'Immagine della controcopertina';";
$trans["biblioViewDigitalHeader"]		= "\$text = 'Archivio digitale';";
$trans["biblioViewPictureAutor"]		= "\$text = 'Immagine dell\'Autore';";
$trans["biblioViewPictureAutorNote"]		= "\$text = '<br/>Per la generazione automatica delle immagini<br/>di tutti i libri di uno stessa autore<br/> il file deve chiamarsi come l'autore';";
$trans["biblioViewDigitalNote"]			= "\$text = 'Nota: guardare nella cartella locale /media/digitales. ';";
$trans["Are you sure to remove this picture?"]  = "\$text = 'Vuoi eliminare questa immagine?';";
$trans["Remove"]				= "\$text = 'Eliminare';";
$trans["biblioViewPictureHeaderIsbn"]				= "\$text = 'Immagine cercata con ISBN su un server esterno';";
$trans["biblioViewNoAddInfoIsbn"]				= "\$text = 'Trovata su server esterno con ISBN, in caso di visualizzazione si raccomanda di scaricare ed incosrporare l\'immagine';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************

$trans["biblioSearchNoResults"]    = "\$text = 'Nessun risultato trovato.';";
$trans["biblioSearchResults"]      = "\$text = 'Risultati della ricerca';";
$trans["biblioSearchResultPages"]  = "\$text = 'Pagine dei risultati';";
$trans["biblioSearchPrev"]         = "\$text = ' Precedente ';";
$trans["biblioSearchNext"]         = "\$text = ' Successivo ';";
$trans["First"]         = "\$text = ' Primo ';";
$trans["Last"]         = "\$text = ' Ultimo ';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) { \$text = '%items% risultato trovato, '; } else { \$text = '%items% risultati trovati, '; }";
$trans["biblioSearchAuthor"]       = "\$text = 'Autore';";
$trans["biblioSearchTitle"]        = "\$text = 'Títolo';";
$trans["biblioSearchauthor"]       = "\$text = 'ordinati per autore ';"; // prova risoluzione bug titolo
$trans["biblioSearchtitle"]        = "\$text = 'ordinati per titolo ';"; // prova risoluzione bug titolo
$trans["biblioSearchTitleRemainder"] = "\$text = 'Sottotitolo';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'ordinati per autore';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'ordinati per titolo';";
$trans["biblioSearchMaterial"]     = "\$text = 'Materiale';";
$trans["biblioSearchCollection"]   = "\$text = 'Collezione';";
$trans["biblioSearchCall"]         = "\$text = 'Localizzazione';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Codice della copia';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Stato';";
$trans["biblioSearchNoCopies"]     = "\$text = 'Nessuna copia disponibile.';";
$trans["biblioSearchHold"]         = "\$text = 'prenotare';";
$trans["biblioSearchOutIn"]        = "\$text = 'Rivedere uscite/entrate';";
$trans["biblioSearchDetail"]       = "\$text = 'Mostrare informazione dettagliata della Bibliografia';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Codice a barre per la verifica';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Codice a barre per la prenotazione';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["PictDesc"]                 = "\$text = 'L\'immagine della copertina è nella cartella ..media/fotos/portadas.';";
$trans["biblioSearchFirst"]        = "\$text = 'prima';";
$trans["biblioSearchLast"]         = "\$text = 'ultima';";
$trans["biblioSearchDigitales"]       = "\$text = 'Scaricare Archivio';";//jalg para descarga de matrials digitals

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Entrata per gli amministratori';";
$trans["loginFormUsername"]        = "\$text = 'Nome utente';";
$trans["loginFormPassword"]        = "\$text = 'Password';";
$trans["loginFormLogin"]           = "\$text = 'Entrare';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Sei sicuro di voler eliminare questo sollecito?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='Il sollecito è stato eliminato correttamente.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Aiuto di ESPABIBLIO 3.3';";
$trans["helpHeaderCloseWin"]       = "\$text='Chiudi finestra';";
$trans["helpHeaderContents"]       = "\$text='Contenuti';";
$trans["helpHeaderPrint"]          = "\$text='Stampe';";
$trans["catalogResults"]           = "\$text='Risultati della ricerca';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='Data di oggi:';";
$trans["headerDateFormat"]         = "\$text='d M, Y';";
$trans["headerLibraryHours"]       = "\$text='orario di apertura:';";
$trans["headerLibraryAders"]       = "\$text='Indirizzo:';";//add jalg
$trans["headerLibraryPhone"]       = "\$text='Telefono:';";
$trans["headerHome"]               = "\$text='Inizio';";
$trans["headerCirculation"]        = "\$text='Prestito';";
$trans["headerCataloging"]         = "\$text='Catalogazione';";
$trans["headerAdmin"]              = "\$text='Amministrazione';";
$trans["headerReports"]            = "\$text='Stampe e statistiche';";
$trans["headerOpac"]            = "\$text='Catalogo Pubblico in Linea';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
//agregado jalg joanlaga@hotmail.com
$trans["headerEstat"]              = "\$text=' Statistiche ';";
$trans["headerList"]              = "\$text=' Listato Generale ';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]		= "\$text='Ingresso Biblioteca';";
$trans["footerOPAC"]			= "\$text='Catalogo Pubblico in Linea (OPAC)';";
$trans["footerHelp"]			= "\$text='Aiuto';";
$trans["Support"]			= "\$text='Supporto Tecnico e novità';";
$trans["footerPoweredBy"]		= "\$text='Con tecnologia di Openbiblio 7.1 Modifiche  EspaBiblio \"Giordano Bruno\" V 3.3';";
$trans["footerDatabaseVersion"]		= "\$text='Versione base dei dati';";
$trans["footerCodeVersion"]		= "\$text='Versione del Codice ';";
$trans["footerCopyright"]		= "\$text='Copyright';";
$trans["footerUnderThe"]		= "\$text='by';";
$trans["footerGPL"]			= "\$text='GNU General Public License';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
#*  Translation text for page advanced_search.php
#****************************************************************************
$trans["advsAdvancedSearch"]	= "\$text = 'Ricerca avanzata';";
$trans["advsMaterialType"]	= "\$text = 'Tipo di materiale';"; 
$trans["advsCollectionType"]	= "\$text = 'Tipo di collezione';";
$trans["advsSearch"]		= "\$text = 'Ricerca';";
$trans["advsClear"]		= "\$text = 'Pulizia';";
$trans["advsPublishedYear"]	= "\$text = 'Anno di pubblicazione';";
$trans["advsLanguage"]		= "\$text = 'Lingua';";
$trans["optThai"]		= "\$text = 'Thailandese';";
$trans["optEnglish"]		= "\$text = 'Inglese';";
$trans["optFrench"]		= "\$text = 'Francese';";
$trans["optEspa"]		= "\$text = 'Spagnolo';";
$trans["optIta"]		= "\$text = 'Italiano';";
$trans["cancel"]		= "\$text = 'Cancellare';";
$trans["or"]			= "\$text = 'o';";
$trans["any"]			= "\$text = 'Qualsiasi';";
