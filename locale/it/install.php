<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.

* jalg 2012  se agregaron variables para corregir trauducion en la ficha de administración de biblioteca. días 
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
#*  Common translation Form install
#****************************************************************************
$trans["form_Database_connection_good"]	= "\$text = 'La connessione con la base dati è BUONA';";
$trans["form_Bad_date.timezone"]	= "\$text = 'Non è definita nel php.ini la zona oraria \"date.timezone\" :';";
$trans["form_Licence"]			= "\$text = 'GNU GENERAL PUBLIC LICENSE (Versione 2, Giugno 1991)';";
$trans["form_Copring"]			= "\$text = 'Diritti d\'autore e proprietà';";
$trans["form_credits"]			= "\$text = 'Crediti';";
$trans["form_Changelog"]		= "\$text = 'Storico delle versioni (Changelog)';";
$trans["form_phpinfo"]			= "\$text = 'Riepilogo configurazioni del server';";
$trans["form_instructions"]		= "\$text = 'Instruccioni di installazione';";
$trans["form_WARNING_1"]		= "\$text = 'ATTENZIONE - Ricordarsi di eliminare la cartella /install con tutto il suo contenuto dal server dopo l\'installazione della base dati.';";
$trans["form_WARNING_3"]		= "\$text = 'Per sicurezza eliminare la cartella /install con tutto il suo contenuto dal server dopo l\'installazione della base dati.';";
$trans["form_New_Install"]		= "\$text = 'Nuova installazione';";
$trans["form_Language"]			= "\$text = 'Lingua del programma e della base dati';";
$trans["form_Test_data"]		= "\$text = 'Installare dati di esempio';";
$trans["form_CDU"]			= "\$text = 'Classificazione Decimale Universale o CDU';";
$trans["form_CDD"]			= "\$text = 'Classificazione Decimale Dewey o CDD';";
$trans["form_IBIC"]			= "\$text = 'Categorie dell\'industria internazionale del libro (IBIC) \"International Book Industry Categories\"';";
$trans["form_CUTTER"]			= "\$text = 'Codifica Cutter Sanborn';";
$trans["form_Mismatch_DATE"]		= "\$text = 'Discrepanze di data e ora nella configurazione.';";
// Mismatch in date and time configuration.
$trans["form_Warring_DATE"]		= "\$text = 'Si raccomanda la correzione prima di procedere con l\'installazione, altrimenti il server può sbagliare <br> la dfata e ora attuali.';";
//Recommended: correct before proceeding, else Check Out and Check In might fail temporarily.<br>
//    Current date and time 
$trans["form_Note_1"]			= "\$text = 'Per uso interno di Espabiblio.';";
$trans["form_Suggestion"]		= "\$text = 'Suggerimenti';";
$trans["form_GNU"]			= "\$text = 'Informazioni sui programmi con licenza GNU o \"Codice Libero\"!';";
$trans["form_GB"]			= "\$text = 'Sopra questo programma e il suo sviluppo \"Giordano Bruno\"!';";
//Suggestion
$trans["form_Database_connection_bad"]	= "\$text = 'La connessione con la base dati è fallita con il seguente errore.';";
//The connection to the database failed with the following error.
$trans["form_data_Note_1"]		= "\$text = 'Forse si deve modificare nel PHP.INI la variabile: ';";
$trans["form_data_Note_2"]		= "\$text = 'se si verifica un errore durante l'installazione per il superamento del tempo di caricamento dello script o la base dati è parzialmnete generata, è necessario eliminare tutte le tabelle e ripetere il processo, dal momento che il valore corrente è:  ';";
$trans["form_data_Bad_Note_1"]		= "\$text = 'Assicurarsi che il seguente è stato fatto prima di eseguire questo script di installazione (questa è solo una guida, si può fare altrimenti).';";
//Please make sure the following has been done before running this install script.
$trans["form_data_Bad_Note_2"]		= "\$text = 'Creare una base dati esclusiva per Espabiblio ';";
 //create OpenBiblio database
$trans["form_data_Bad_Note_3"]		= "\$text = 'seguire il \"link\" per vedere le istruzioni.';";
//of the install instructions
$trans["form_data_Bad_Note_4"]		= "\$text = 'Creare un utente con permessi adeguati per la base dati di Espabiblio.';";
//create OpenBiblio database user 
$trans["form_data_Bad_Note_5"]		= "\$text = 'delle istruzioni di installazione';";
//of the install instructions
$trans["form_data_Bad_Note_6"]		= "\$text = 'Modifica e guarda il file constants.php nella cartella radice di Espabiblio, con i dati utilizzati per: database, nome Mysql, username e password server, usare un editor di testo piano.';";
//update openbiblio/database_constants.php with your new database username and password
$trans["form_data_Bad_Note_7"]		= "\$text = 'Controlla i ';";
//see
$trans["form_data_Bad_Note_8"]		= "\$text = 'per maggiori dettagli';";
//for more details.
$trans["form_data_Bad_Note_step"]	= "\$text = ' passo ';";
$trans["form_Update_1"]			= "\$text = 'La base dati di Espabiblio è ora aggiornata e pronta all\'uso';";
//Your OpenBiblio Installation is up to date
$trans["form_No_action_required"]	= "\$text = 'Nessuna azione richiesta';";
//No action is required
$trans["form_start"]			= "\$text = 'Iniziare il programa Espabiblio';";
//start using OpenBiblio
$trans["form_Need_Update"]		= "\$text = 'Sembra sia necessario aggiornare la base dati';";
$trans["to_version"]		= "\$text = 'alla versione';";
//It looks like we need to update database version 
$trans["form_Install"]			= "\$text = 'Installare';";
$trans["install_head"]	= "\$text = 'Installazione dei Dati \"Giordano Bruno\" basat su Openbiblio 7.1 e Espabiblio  3.4';";
//OpenBiblio Installation 7.2:
$trans["form_media"]			= "\$text = ' Materiali Multimediali ';";
$trans["form_cover"]			= "\$text = ' Copertine ';";
$trans["form_tmp"]			= "\$text = ' Temporanei ';";
$trans["form_foto"]			= "\$text = ' Foto degli utenti ';";
$trans["form_autor"]			= "\$text = ' Foto degli autori ';";
$trans["form_digi"]			= "\$text = ' Materiali digitali ';";
$trans["form_timezone_1"]		= "\$text = ' Usare ';";
//Using 
$trans["form_timezone_2"]		= "\$text = 'Determina i valori configurati in php.ini';";
//determine the Loaded Configuration File
$trans["form_timezone_3"]		= "\$text = 'trova questo file e usa un editor piano per cambiare il valore ';";
//Find this file, use an editor (Notepad etc.) to change 
$trans["form_timezone_4"]		= "\$text = 'e guarda il file';";
//and saveand save
$trans["form_timezone_5"]		= "\$text = 'Riavvia il server apache e ritenta di nuevo la installazione';";
//Restart webserver and check install again
$trans["form_Ver_1"]			= "\$text = 'Espabiblio ';";
$trans["form_Ver_2"]			= "\$text = ' Installazione ';";
//Installation
$trans["form_mkdir_create"]		= "\$text = 'Creazione corretta della cartella per ';";
//Create book media directory successfully.
$trans["form_mkdir_create_bad"]		= "\$text = 'Non posso creare la cartella in ';";
//Could not create media directory! Please create new 
$trans["form_mkdir_Force"]		= "\$text = 'Sono stati cambiati gli attributi di lettura/scrittura alla cartella per ';";
//Book media directory is exists, force read/write access to exists one.
$trans["form_mkdir_bad"]		= "\$text = 'Esiste ma non posso cambiare i permessi nella cartella per ';";
//Could not change access to exist media directory! Please change. 
$trans["form_mkdir_bad_1"]		= "\$text = '  si prega di agire manualmente, assegnando i permessi completi di lettura e scrittura ';";
// directory permission (chmod) to full access (777) manually.
$trans["form_mkdir_Ok"]		= "\$text = 'Esiste e lavora correttamente la cartella per ';";
//Book media directory already exists & work properly.
$trans["form_mkdir_install_bad"]	= "\$text = 'L\'installazione è stata interrotta, correggi gli errori e riprova ';";
//Installation has been interrupted, please fix issues above then try to 
$trans["form_mkdir_install_run"]	= "\$text = 'Per eseguire l\'installazione nuovamente ';";
// run installation again
$trans["install_wait"]			= "\$text = 'Sto creando tabelle e dati, per favore attendere...';";
//Are you sure you want to delete all library data and create new OpenBiblio tables?
$trans["Are_you_sure_you"]			= "\$text = 'Sicuro di voler eliminare tutti i dati per crearne una nuova pulita?';";
//Building OpenBiblio tables, please wait...
$trans["install_Data_ok"]		= "\$text = 'Tabelle e dati creati correttamente';";
//OpenBiblio tables have been created successfully!
$trans["form_Install"]			= "\$text = 'Installare';";
$trans["install_Data_ok"]		= "\$text = 'Iniziare a gestire la biblioteca \"Giordano Bruno\"';";
//start using OpenBiblio
$trans["Update_successfully"]			= "\$text = 'Le basi dei dati sono state aggiornate correttamente';";
//OpenBiblio tables have been updated successfully!
$trans["Update_interrupted"]			= "\$text = 'L\'installazione è stata interrotta, cancella le tabelle, correggi gli errori e riprova';";
//Installation has been interrupted, please fix issues above then try to 
$trans["Update_wait"]			= "\$text = 'Aggiornamento delle basi dei dati, per favore attendere...';";
// Updating OpenBiblio tables, please wait...
$trans["Update_Failed"]			= "\$text = 'Aggiornamento fallito.';";
//Upgrade Failed
$trans["update_start"]			= "\$text = 'Aggiornamento della base dati.';";
//OpenBiblio Upgrade

$trans["footerDatabaseVersion"]			= "\$text = 'Versione della base dati';";
$trans["footerCodeVersion"]			= "\$text = 'Versione del Codice';";
$trans["footerPoweredBy"]			= "\$text = 'Con tecnologia di Openbiblio 7.1 Modifiche EspaBiblio Giordano Bruno V 3.3 ';";
$trans["footerCopyright"]			= "\$text = 'Diritti di Autore (Copyright)';";
$trans["footerUnderThe"]			= "\$text = 'by ';";
$trans["footerGPL"]			= "\$text = 'Licenza pubblica Generale (General Public License).';";
$trans["footerfooter"]			= "\$text = 'Supporto tecnico e novità.';";
