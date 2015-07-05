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
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = 'Entrata';";
$trans["logout"]                   = "\$text = 'Uscita';";
$trans["help"]                     = "\$text = 'Aiuto';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]		= "\$text = 'Inizio';";
$trans["homeLicenseLink"]	= "\$text = 'Licenza-Esp';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["homeLicenseLink1"]	= "\$text = 'Licenza-Originale';";
$trans['homeRadmeLink']		= "\$text = 'Leggimi prima di installare';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]		= "\$text = 'Amministrazione';";
$trans["adminStaff"]		= "\$text = 'Amministrazione dei bibliotecari';";
$trans["adminSettings"]		= "\$text = 'Configurazione della biblioteca';";
$trans["adminMaterialTypes"]	= "\$text = 'Tipi di materiale';";
$trans["adminCollections"]	= "\$text = 'Collezioni';";
$trans["adminThemes"]		= "\$text = 'Aspetto grafico';";
$trans["adminTranslation"]	= "\$text = 'Lingue';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["Checkout Privs"]	= "\$text = 'Gestione privilegi';";
$trans["adminCheckoutPriv"]	= "\$text = 'Gestione privilegi';";
$trans["Cover Lookup Options"]	= "\$text = 'Ricerca copertine';";
$trans["adminImportExport"]	= "\$text = 'Importare/Esportare';";
$trans["adminMaterialStatus"]	= "\$text = 'Stato dei Materiali';";
$trans["Member Types"]		= "\$text = 'Gruppi degli utenti';";
$trans["Member Fields"]		= "\$text = 'asegnazione grado utente';";
$trans["Member Fields dm"]		= "\$text = 'Gradi utente';";
$trans["Copy Fields"]		= "\$text = 'Personalizzazione dei campi dati per le copie';";


#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]				= "\$text = 'Sommario catalogazione';";
$trans["catalogSearch1"]				= "\$text = 'Ricerca del materiale';";
$trans["catalogSearch2"]				= "\$text = 'Ricerca bibliografica';";
$trans["catalogResults"]				= "\$text = 'Risultati della ricerca';";
$trans["catalogBibInfo"]				= "\$text = 'Informazione bibliografica';";
$trans["catalogBibEdit"]				= "\$text = 'Modifica dati basilari';";
$trans["catalogBibEditMarc"]			= "\$text = 'Modifica-MARC';";
$trans["catalogBibMarcNewFld"]		= "\$text = 'Nuovo campo MARC';";
$trans["catalogBibMarcNewFldShrt"]	= "\$text = 'Nuovo MARC';";
$trans["catalogBibMarcEditFld"]		= "\$text = 'Modifica campo MARC';";
$trans["catalogCopyNew"]				= "\$text = 'Nuova copia';";
$trans["catalogCopyEdit"]				= "\$text = 'Modifica Copia';";
$trans["catalogHolds"]					= "\$text = 'Prenotazioni';";
$trans["catalogDelete"]					= "\$text = 'Eliminare';";
$trans["catalogBibNewLike"]			= "\$text = 'Usare i dati per un nuovo inserimento?';";
$trans["catalogBibNew"]					= "\$text = 'Nuovo materiale';";
$trans["Upload Marc Data"]				= "\$text = 'Caricare dati Marc';";
#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["catalogBibBulkDelete"]		= "\$text = 'Eliminare Bibliografie a blocchi';";
$trans["CSVImport"]						= "\$text = 'Importare bibliografie da un archivio CSV';";
$trans["adminTranslate"]				= "\$text = 'Amministratore delle traduzioni';";
$trans["cdu"]								= "\$text = 'Tabelle CDU';";
$trans["cdd"]								= "\$text = 'Tabelle CDD';";
$trans["ibic"]								= "\$text = 'Tabelle IBIC';";
$trans["cutter"]							= "\$text = 'Tabelle Cutter';";
$trans["Upload CSV Data"]								= "\$text = 'Caricare copie da un archivio CSV';";
$trans["marc_list"]								= "\$text = 'Lista dei campi MARC';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]			= "\$text = 'Stampe';";
$trans["reportsReportListLink"]  = "\$text = 'Lista delle stampe';";
$trans["reportsLabelsLink"]      = "\$text = 'Stampare etichette';";
$trans["reportsLettersLink"]     = "\$text = 'Stampare lettere';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["reportsResult"]          = "\$text = 'Stampa dei risultati';";
$trans["reportsCriteria"]        = "\$text = 'Criteri di stampa';";
$trans["reportsFailedImport"]		= "\$text = 'Importazioni fallite';";
$trans["reportsNoCover"]         = "\$text = 'Articoli senza copertina';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Ricerca';";
$trans["catalogSearch2"]           = "\$text = 'Ricerca del materiale';";
$trans["catalogResults"]           = "\$text = 'Risultati della ricerca';";
$trans["catalogBibInfo"]           = "\$text = 'Informazione bibliografie';";

#Added
#****************************************************************************
#*  Translation text for page Added
#****************************************************************************
$trans["memberInfo"]				= "\$text = 'Informazioni dei tesserati';";
$trans["memberSearch"]			= "\$text = 'Ricerca tesserato';";
$trans["editInfo"]				= "\$text = 'Modifica dati';";
$trans["checkoutHistory"]		= "\$text = 'Storico del prestito';";
$trans["account"]					= "\$text = 'Saldo';";
$trans["checkIn"]					= "\$text = 'Restituzione';";
$trans["memberSearch"]			= "\$text = 'Ricerca tesserato';";
$trans["newMember"]				= "\$text = 'Nuovo tesserato';";
$trans["Offline Circulation"]	= "\$text = 'Prestito fuori linea';";
$trans["account"]       	 	= "\$text = 'Saldo';";
$trans["MemberCSVImport"]       	 	= "\$text = 'Importare tesserati da un archivio CSV';";


#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
#* Translation text for Library of Congress SRU module
#****************************************************************************
$trans["LOCsearch"]                 = "\$text = 'Consultare la Biblioteca del Congresso USA';";

#****************************************************************************
#*  Translation text for page lookup.php for lookup2
#****************************************************************************
$trans["lookup"]        = "\$text = 'Ricerca in linea Z39.50';";
$trans["lookup_opts"]	= "\$text = 'Opzioni Z39.50';";
$trans["lookup_hosts"]  = "\$text = 'Server Z39.50';";
$trans["lookup_bulk"]   = "\$text = 'Ricerca massiva di dati via ISBN';";

/*
$trans["lookup"]                = "\$text = 'On-line Search v2';";
$trans["lookup_opts"]       		= "\$text = 'Lookup Options';";
$trans["lookup_hosts"]       		= "\$text = 'Lookup Hosts';";
*/

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]          = "\$text = 'Principale';";
$trans["homeLicenseLink"]       = "\$text = 'Licenza';";
$trans["homeCreditsLink"]       = "\$text = 'Crediti';";
$trans["homeReadmeLink"]        = "\$text = 'Leggimi';";
$trans["homeChangLogLink"]      = "\$text = 'Storico delle versioni (ChangeLog)';";
$trans["homeUserStatusLink"]    = "\$text = 'Stato del tesserato e sezione dei materiali';";
$trans["homeUserOpac"]          = "\$text = 'Catalogo Pubblico in Linea';";
