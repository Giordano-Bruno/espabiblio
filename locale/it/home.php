<?php
/* Este archivo es parte de un trabajo protegido por derechos de autor, Se distribuye SIN GARANTIA.
 * Vea el archivo COPYRIGHT.html para más detalles.
 * EspaBiblio Versión 2.0 Basado en OpenBiblio 0.6.0
 * Jorge Lara Cravero, Chile
#* MODIFICADO POR JOSE ANTONIO LARA joanlaga@hotmail.com (2013)
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
#*  Translation text for page index.php
#****************************************************************************

$trans["creditsHeading"]		= "\$text='Crediti del programma';";
$trans["homeChangeLogLink"]		= "\$text='Cambi di versione e problemi (bug) conosciuti.';";
$trans["indexAdmin"]			= "\$text='Amministrazione';";
$trans["indexAdminDesc1"]			= "\$text='Amministrazione dei bibliotecari e dei dati amministrativi.';";
$trans["indexAdminDesc10"]			= "\$text='Amministrazione delle collezioni';";
$trans["indexAdminDesc11"]			= "\$text='Gestione dei privilegi del prestito';";
$trans["indexAdminDesc12"]			= "\$text='Gestione ricerca copertine in linea (Amazon AWS) -Richiede registrazione';";
$trans["indexAdminDesc13"]			= "\$text='Opzioni per ricerca tramite protocollo Z39.50';";
$trans["indexAdminDesc14"]			= "\$text='Gestione dei server per ricerca Z39.50';";
$trans["indexAdminDesc15"]			= "\$text='Ricerca cumulativa dei dati via ISBN nai server Z39.50';";
$trans["indexAdminDesc16"]			= "\$text='Importare una lista utenti da un archivio CSV';";
$trans["indexAdminDesc17"]			= "\$text='Importare una lista bibliografica da un archivio CSV';";
$trans["indexAdminDesc18"]			= "\$text='Importare una lista bibliografica da un archivio MARC';";
$trans["indexAdminDesc19"]			= "\$text='Esportare tutti i dati della bibliotaca in un archivio CSV';";
$trans["indexAdminDesc2"]			= "\$text='Amministrazione dei bibliotecari (aggiungere, editare, cambiare contrassegni, eliminare)';";
$trans["indexAdminDesc20"]			= "\$text='Vedere la configurazione del server con phpinfo.php';";
$trans["indexAdminDesc21"]			= "\$text='Editor dei temi dell\'aspetto';";
$trans["indexAdminDesc22"]			= "\$text='Amministatore delle traduzioni';";
$trans["indexAdminDesc3"]			= "\$text='Configurazione generale della biblioteca';";
$trans["indexAdminDesc4"]			= "\$text='Lista dei tipi di materiali';";
$trans["indexAdminDesc5"]			= "\$text='Amministrazione dei gruppi utenti';";
$trans["indexAdminDesc6"]			= "\$text='Amministrazione dei gradi utenti';";
$trans["indexAdminDesc7"]			= "\$text='Personalizzazione dei campi dati per le copie bibliografiche';";
$trans["indexAdminDesc8"]			= "\$text='Amministrazione dei tipi di materiali';";
$trans["indexAdminDesc9"]			= "\$text='Amministrazione dello stato dei materiali';";
$trans["indexCat"]			= "\$text='Catalogazione';";
$trans["indexCatDesc1"]			= "\$text='Amministrazione dei dati bibliografici.';";
$trans["indexCatDesc10"]			= "\$text='Tabelle Classificazione Decimale Universale (CDU), basate sulle pubblicazioni di AENOR/Spagna';";
$trans["indexCatDesc11"]			= "\$text='Tabelle Clasificazione Decimale Dewey (CDD)';";
$trans["indexCatDesc12"]			= "\$text='Tabelle dell\'Industria Internazionale del Libro [International Book Industry Categories] (IBIC)';";
$trans["indexCatDesc2"]			= "\$text='Amministrazione bibliografica (nuovo, ricerca, editazione, eliminazione, controllo delle copie)';";
$trans["indexCatDesc3"]			= "\$text='Amministrazione bibliografica con possibilità di mostrare le foto di copertina ed autore';";
$trans["indexCatDesc4"]			= "\$text='Possibilità di scaricare i materiali digitali messi a disposizione';";
$trans["indexCatDesc5"]			= "\$text='Eliminazione delle bibliografie per blocchi';";
$trans["indexCatDesc6"]			= "\$text='Recupero delle informazioni bibliografiche da server che supporti il protocollo Z39.50 YAZ e SRU.';";
$trans["indexCatDesc7"]			= "\$text='Importare la bibliografía per blocchi da un archivo CSV.';";
$trans["indexCatDesc8"]			= "\$text='Importare dati Bibliografici USMarc da archivi';";
$trans["indexCatDesc9"]			= "\$text='Recupero delle informazioni bibliografiche dalla Biblioteca del Congresso USA utilizzando SRU [Search Retrival URL], (non richiede configurazione YAZ)';";
$trans["indexCirc"]			= "\$text='Prestito';";
$trans["indexCircDesc1"]			= "\$text='Utilizza questa pagina per amministrare i dati degli utenti e i movimenti di materiali.';";
$trans["indexCircDesc2"]			= "\$text='Amministrazione utenti (aggiungere, cercare, editare, eliminare, mettere foto, stampare tessera e storico)';";
$trans["indexCircDesc3"]			= "\$text='Prestito, prenotazioni, conto e storico degli utenti';";
$trans["indexCircDesc4"]			= "\$text='Registri delle bibliografie e del carrello di riposizionamento negli scaffali';";
$trans["indexCircDesc5"]			= "\$text='Pagamento multa per riconsegna in ritardo';";
$trans["indexCircDesc6"]			= "\$text='Importazione lista utenti da un archivio CSV.';";
$trans["indexCircDesc7"]			= "\$text='Aggiornamento movimento materiali fuori linea';";
$trans["indexDesc"]			= "\$text='Descrizione';";
$trans["indexGen"]			= "\$text='Altre funzioni di carattere generale';";
$trans["indexGenDesc1"]			= "\$text='Queste sono possibilità della versione -Giordano Bruno- che non sono propriamente del programma openbiblio.';";
$trans["indexGenDesc10"]			= "\$text='/tests selenium. Prova di efficienza di openiblio, ATTENZIONE che cancella le informazioni della biblioteca';";
$trans["indexGenDesc11"]			= "\$text='/tools. Strumenti per il controllo della versione di sviluppo basati sul bash di Linux';";
$trans["indexGenDesc12"]			= "\$text='Altri strumenti per OSE e robots';";
$trans["indexGenDesc13"]			= "\$text='Funzione circ2, che permette agli utenti di vedere il loro stato e di fare prenotazioni';";
$trans["indexGenDesc2"]			= "\$text='Indicizzazione per ricerche di google e google analycts.';";
$trans["indexGenDesc3"]			= "\$text='Strumenti CAPCHA';";
$trans["indexGenDesc4"]			= "\$text='3rdparty per drupal e wordpress. Fornisce API per lavorare con detti programmi';";
$trans["indexGenDesc5"]			= "\$text='/api. generica di openbiblio';";
$trans["indexGenDesc6"]			= "\$text='/cron. Funzioni di sincronizzazione';";
$trans["indexGenDesc7"]			= "\$text='/doc. In questa cartella ci sono manuali, presentazioni e libri riferiti a Openbiblio, Espabiblio, Biblioteche, Etc';";
$trans["indexGenDesc8"]			= "\$text='/front. In questa cartella c\'è un CMS basato su WordPres e adattato per Openbiblio.';";
$trans["indexGenDesc9"]			= "\$text='/phpthumb. Permette di lavorare con le immagini';";
$trans["indexHeading"]			= "\$text='Benvenuto al programma di gestione della Biblioteca e della Biblioteca Digitale.';";
$trans["indexIntro"]			= "\$text='Uso: Le etichette superiori servono ad accedere alle differenti zone di amministrazione ed il menù laterale è per le funzioni.';";
$trans["indexReports"]			= "\$text='Stampe e statistiche';";
$trans["indexReportsDesc1"]			= "\$text='In questa pagina potete estrarre informazioni a partire dai dati della biblioteca.';";
$trans["indexReportsDesc10"]			= "\$text='Lista degli utenti con articoli in attesa di restituzione.';";
$trans["indexReportsDesc11"]			= "\$text='Lista della bibliografía prestata.';";
$trans["indexReportsDesc12"]			= "\$text='richieste di prestito che contengono informazioni di contatto dell\'utente.';";
$trans["indexReportsDesc13"]			= "\$text='Statistiche delle letture più popolari.';";
$trans["indexReportsDesc14"]			= "\$text='Statistiche degli autori più popolari.';";
$trans["indexReportsDesc15"]			= "\$text='Sommario massivo [Bulk summary].';";
$trans["indexReportsDesc16"]			= "\$text='Importazioni fallite.';";
$trans["indexReportsDesc17"]			= "\$text='Articoli senza copertina.';";
$trans["indexReportsDesc2"]			= "\$text='Informazioni.';";
$trans["indexReportsDesc3"]			= "\$text='Etichette.';";
$trans["indexReportsDesc4"]			= "\$text='Catalogazione.';";
$trans["indexReportsDesc5"]			= "\$text='Acquisizione.';";
$trans["indexReportsDesc6"]			= "\$text='Ricerca della copia.';";
$trans["indexReportsDesc7"]			= "\$text='Lista dei titoli duplicati.';";
$trans["indexReportsDesc8"]			= "\$text='Storico degli articoli persi.';";
$trans["indexReportsDesc9"]			= "\$text='Lista degli articoli in attesa di restituzione.';";
$trans["indexTab"]			= "\$text='Sezione';";
$trans["licenseHeading"]			= "\$text='Licenza, inglese e spagnola';";
$trans["readmeHeading"]			= "\$text='Leggimi prima di usare o installare.';";
