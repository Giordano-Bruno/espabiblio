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
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["adminSubmit"]		= "\$text = 'Inviare';";
$trans["adminCancel"]		= "\$text = 'Cancellare';";
$trans["adminDelete"]		= "\$text = 'Eliminare';";
$trans["adminUpdate"]		= "\$text = 'Aggiornare';";
$trans["adminFootnote"]		= "\$text = 'I campi marcati con %symbol% sono obbligatori.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]		= "\$text = 'Amministrazione';";
$trans["indexDesc"]		= "\$text = 'Utilizza le funzioni della zona a sinistra per amministrare i bibliotecari ed i dati amministrativi.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]	= "\$text = 'Tornare alla lista delle collezioni';";
$trans["adminCollections_delStart"]	= "\$text = 'Colezioni, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]	= "\$text = ', è stato eliminato.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]	= "\$text = 'Sei sicuro di voler eliminare la collezione di: ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]	= "\$text = ', è stata aggiornata.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]	= "\$text = 'Editare la collezione:';";
$trans["adminCollections_edit_formDescription"]		= "\$text = 'Descrizione:';";
$trans["adminCollections_edit_formDaysdueback"]		= "\$text = 'Giorni per la restituzione:';";
$trans["adminCollections_edit_formDailyLateFee"]	= "\$text = 'Multa giornaliera per il ritardo:';";
$trans["adminCollections_edit_formNote"]		= "\$text = '*Note:';";
$trans["adminCollections_edit_formNoteText"]		= "\$text = 'Mettendo i giorni di restituzione a 0, non potrà essere prestato alcun articolo di questa collezione.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]		= "\$text = 'Aggiungere nuova collezione';";
$trans["adminCollections_listCollections"]		= "\$text = 'Collezioni:';";
$trans["adminCollections_listFunction"]			= "\$text = 'Funzione';";
$trans["adminCollections_listDescription"]		= "\$text = 'Descrizione';";
$trans["adminCollections_listDaysdueback"]		= "\$text = 'Giorni<br>prestito';";
$trans["adminCollections_listDailylatefee"]		= "\$text = 'Multa giornaliera<br>per il ritardo';";
$trans["adminCollections_listBibliographycount"]	= "\$text = 'Numero<br>libri';";
$trans["adminCollections_listEdit"]			= "\$text = 'Modifica';";
$trans["adminCollections_listDel"]			= "\$text = 'eliminare';";
$trans["adminCollections_ListNote"]			= "\$text = '*Nota:';";
$trans["adminCollections_ListNoteText"]			= "\$text = 'La funzione di eliminazione è disponibile solo per collezioni vuote.<br>Dovendo eliminare una collezione con numero componenti maggiore di 0, prima bisogna cambiare il tipo di materiale delle bibliografie con un altro tipo di materiale.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]		= "\$text = ', è stata aggiunta.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]	= "\$text = 'Aggiungere nuova collezione:';";
$trans["adminCollections_new_formDescription"]		= "\$text = 'Descrizione:';";
$trans["adminCollections_new_formDaysdueback"]		= "\$text = 'Giorno della restituzione:';";
$trans["adminCollections_new_formDailylatefee"]		= "\$text = 'Multa giornaliera per ritardo:';";
$trans["adminCollections_new_formNote"]			= "\$text = '*Nota:';";
$trans["adminCollections_new_formNoteText"]		= "\$text = ' Mettendo a 0 la data di restituzione, la collezione sarà indisponibile per il prestito.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]	= "\$text = 'Tipo di materiale, ';";
$trans["admin_materials_delMaterialdeleted"]	= "\$text = ', è stato cancellato.';";
$trans["admin_materials_Return"]		= "\$text = 'tornale alla lista materiali';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]		= "\$text = 'Sei sicuro di voler eliminare questo tipo di materiale?, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]	= "\$text = 'Modifica tipo di materiale:';";
$trans["admin_materials_delDescription"]	= "\$text = 'Descrizione:';";
$trans["admin_materials_delunlimited"]	= "\$text = '(0 significa illimitato)';";
$trans["admin_materials_delImagefile"]	= "\$text = 'Archivio immagini:';";
$trans["admin_materials_delNote"]	= "\$text = '*Nota:';";
$trans["admin_materials_delNoteText"]	= "\$text = 'I file immagine devono stare nella cartella /images.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]	= "\$text = ', è stato aggiornato.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]	= "\$text = 'Aggiungere nuovo tipo di materiale';";
$trans["admin_materials_listMaterialtypes"]	= "\$text = 'Tipi di materiali:';";
$trans["admin_materials_listFunction"]		= "\$text = 'Funzione';";
$trans["admin_materials_listDescription"]	= "\$text = 'Descrizione';";
$trans["admin_materials_listLimits"]		= "\$text = 'Limiti';";
$trans["admin_materials_listCheckoutlimit"]	= "\$text = 'Limite del prestito';";
$trans["admin_materials_listRenewallimit"]	= "\$text = 'Rinnovo';";
$trans["admin_materials_listImageFile"]		= "\$text = 'File<br>Immagini';";
$trans["admin_materials_listBibcount"]		= "\$text = 'Numero<br>libri';";
$trans["admin_materials_listEdit"]		= "\$text = 'Modifica';";
$trans["admin_materials_listDel"]		= "\$text = 'Eliminare';";
$trans["admin_materials_listNote"]		= "\$text = '*Nota:';";
$trans["admin_materials_listNoteText"]		= "\$text = 'La funzione di eliminazione è disponibile solo per collezioni vuote.<br>Dovendo eliminare una collezione con numero componenti maggiore di 0, prima bisogna cambiare il tipo di materiale delle bibliografie con un altro tipo di materiale.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]		= "\$text = ', è stato aggiornato.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]	= "\$text = 'i file delle immagini devono stare nella cartella /images.';";

#* No estan en Openbiblio 7.1 adecuacion por jalg
$trans["Checkout Privileges"]			= "\$text = 'Privilegi del prestito';";
$trans["function"]				= "\$text = 'Funzione';";
$trans["Material Type"]				= "\$text = 'Tipo di materiale';";
$trans["Member Classification"]			= "\$text = 'Classificazione membri';";
$trans["Checkout Limit"]			= "\$text = 'Limite del prestito';";
$trans["Renewal Limit"]				= "\$text = 'Límite del rinnovo';";
$trans["Edit cover lookup options (Amazon AWS)"]= "\$text = 'Modifica opzioni di ricerca copertine (Amazon AWS)';";
$trans["Add new z39.50 server"]			= "\$text = 'Aggiungere nuevo server z39.50';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]		= "\$text = 'Nn sei autorizzato ad usare le funzioni amministrative, contatta un amministratore.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]			= "\$text = 'i dati sono stati aggiornati.';";
$trans["admin_settingsEditsettings"]		= "\$text = 'Modifica le proprietà della biblioteca:';";
$trans["admin_settingsLibName"]			= "\$text = 'Nome dela biblioteca:';";
$trans["admin_settingsLibimageurl"]		= "\$text = 'URL del logo della biblioteca:';";
$trans["admin_settingsOnlyshowimginheader"]	= "\$text = 'Mostrare solo il logo nell\'intestazione:';";
$trans["admin_settingsLibaders"]		= "\$text = 'Indirizzo della biblioteca:';";
$trans["admin_settingsLibphone"]		= "\$text = 'Telefono della biblioteca:';";
$trans["admin_settingsLibhours"]		= "\$text = 'Orario della biblioteca:';";
$trans["admin_settingsLibURL"]			= "\$text = 'URL della biblioteca:';";
$trans["admin_settingsOPACURL"]			= "\$text = 'URL dell\'OPAC:';";
$trans["admin_settingsSessionTimeout"]		= "\$text = 'Durata della sessione:';";
$trans["admin_settingsMinutes"]			= "\$text = 'minuti';";
$trans["admin_settingsSearchResults"]		= "\$text = 'Risultati della ricerca:';";
$trans["admin_settingsItemsperpage"]		= "\$text = 'articoli per pagina';";
$trans["admin_settingsPurgebibhistory"]		= "\$text = 'Pulire lo storico della bibliografia:';";
$trans["admin_settingsmonths"]			= "\$text = 'mesi';";
$trans["admin_settingsBlockCheckouts"]		= "\$text = 'Bloccare il prestito se c\'è da pagare una multa:';";
$trans["admin_settingsLocale"]			= "\$text = 'Lingua:';";
$trans["admin_settingsHTMLChar"]		= "\$text = 'Set di caratteri HTML:';";
$trans["admin_settingsHTMLTagLangAttr"]		= "\$text = 'Attributi di etichetta HTML:';";

#* No estan en Openbiblio 7.1 adecuacion por jalg
$trans["days"]				= "\$text = 'giorni';";
$trans["admin_settingsInactiveDays"]	= "\$text = 'Autoaggiornamento utenti inattivi in:';";
$trans["admin_settingsFontNormal"]	= "\$text = 'Tipo di font:';";
$trans["admin_settingsFontSize"]	= "\$text = 'Grandezza del font:';";
$trans["Max. hold length:"]		= "\$text = 'Durata massima prenotazione:';";
$trans["Add new member classificaiton"]	= "\$text = 'Aggiungere nuovo gruppo utenti';";
$trans["admin_settingsHoldMaxDays"]	= "\$text = 'Giorni massimi di durata:';"; //dudas en la traduccion jalg
$trans["admin_settingsViewlist"]	= "\$text = 'Mostrare listato generale (rallenta il server):';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]	= "\$text = 'Personale della Biblioteca,';";
$trans["adminStaff_Return"]		= "\$text = 'tornare alla lista bibliotecari';";
$trans["adminStaff_Yes"]		= "\$text = 'Sí';";
$trans["adminStaff_No"]			= "\$text = 'No';";

#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]		= "\$text = ', è stato eliminato.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]	= "\$text = 'sei sicuro di voler eliminare un membro del personale, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]	= "\$text = ', è stato aggiornato';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]		= "\$text = 'Modifica informazioni bibliotecario:';";
$trans["adminStaff_edit_formLastname"]		= "\$text = 'Cognome:';";
$trans["adminStaff_edit_formFirstname"]		= "\$text = 'Nome:';";
$trans["adminStaff_edit_formLogin"]		= "\$text = 'Nome utente:';";
$trans["adminStaff_edit_formAuth"]		= "\$text = 'Permessi:';";
$trans["adminStaff_edit_formCirc"]		= "\$text = 'Prestito';";
$trans["adminStaff_edit_formUpdatemember"]	= "\$text = 'Aggiornamento utente';";
$trans["adminStaff_edit_formCatalog"]		= "\$text = 'Catalogazione';";
$trans["adminStaff_edit_formAdmin"]		= "\$text = 'Amministrazione';";
$trans["adminStaff_edit_formReports"]		= "\$text = 'Stampe';";
$trans["adminStaff_edit_formSuspended"]		= "\$text = 'Sospeso:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]	= "\$text = 'Aggiungere nuovo bibliotecario';";
$trans["adminStaff_list_Columnheader"]	= "\$text = 'Lista dei bibliotecari:';";
$trans["adminStaff_list_Function"]	= "\$text = 'Funzioni';";
$trans["adminStaff_list_Edit"]		= "\$text = 'modifica';";
$trans["adminStaff_list_Pwd"]		= "\$text = 'password';";
$trans["adminStaff_list_Del"]		= "\$text = 'eliminare';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]		= "\$text = ', è stato agiunto.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]		= "\$text = 'Aggiungere nuovo membro al personale:';";
$trans["adminStaff_new_form_Password"]		= "\$text = 'Password:';";
$trans["adminStaff_new_form_Reenterpassword"]	= "\$text = 'Inserire di nuovo la password:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]	= "\$text = 'La password è stata cambiata correttamente.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]	= "\$text = 'Cambiare la password del bibliotecario:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]		= "\$text = 'tornare alla lista dei temi grafici';";
$trans["adminTheme_Theme"]		= "\$text = 'Tema grafico, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]		= "\$text = ', è stato eliminato.';";

#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]	= "\$text = 'Sei sicuro di voler eliminare questo tema grafico?, ';";

#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]		= "\$text = ', è stato aggiornato.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]		= "\$text = 'Anteprima variazioni del tema grafico';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]	= "\$text = 'Cambiare il tema grafico attuale:';";
$trans["adminTheme_Choosetheme"]	= "\$text = 'Scegliere un nuovo tema grafico:';";
$trans["adminTheme_Addnew"]		= "\$text = 'Aggiungere nuovo tema grafico';";
$trans["adminTheme_themes"]		= "\$text = 'Temi grafici:';";
$trans["adminTheme_function"]		= "\$text = 'Funzione';";
$trans["adminTheme_Themename"]		= "\$text = 'Nome del tema grafico';";
$trans["adminTheme_Usage"]		= "\$text = 'Usare';";
$trans["adminTheme_Edit"]		= "\$text = 'modificare';";
$trans["adminTheme_Copy"]		= "\$text = 'copiare';";
$trans["adminTheme_Del"]		= "\$text = 'eliminare';";
$trans["adminTheme_Inuse"]		= "\$text = 'in uso';";
$trans["adminTheme_Note"]		= "\$text = '*Nota:';";
$trans["adminTheme_Notetext"]		= "\$text = 'la funzione di eliminazione non è disponibile per il tema grafico attualemte in uso.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]		= "\$text = 'Tema grafico:';";
$trans["adminTheme_Tablebordercolor"]	= "\$text = 'Color per il bordo della tabella:';";
$trans["adminTheme_Errorcolor"]		= "\$text = 'Colore per gli errori:';";
$trans["adminTheme_Tableborderwidth"]	= "\$text = 'Ampiezza bordo tabella:';";
$trans["adminTheme_Tablecellpadding"]	= "\$text = 'Ampiezza cella:';";
$trans["adminTheme_Title"]		= "\$text = 'Titolo';";
$trans["adminTheme_Mainbody"]		= "\$text = 'Corpo principale';";
$trans["adminTheme_Navigation"]		= "\$text = 'Barra di Navigazione';";
$trans["adminTheme_Tabs"]		= "\$text = 'Etichette';";
$trans["adminTheme_Backgroundcolor"]	= "\$text = 'Colore sfondo:';";
$trans["adminTheme_Fontface"]		= "\$text = 'Font:';";
$trans["adminTheme_Fontsize"]		= "\$text = 'Grandezza font:';";
$trans["adminTheme_Bold"]		= "\$text = 'grassetto';";
$trans["adminTheme_Fontcolor"]		= "\$text = 'Colore del font:';";
$trans["adminTheme_Linkcolor"]		= "\$text = 'Colore dei collegamenti (link):';";
$trans["adminTheme_Align"]		= "\$text = 'Allineamento:';";
$trans["adminTheme_Right"]		= "\$text = 'Destra';";
$trans["adminTheme_Left"]		= "\$text = 'Sinistra';";
$trans["adminTheme_Center"]		= "\$text = 'Centrato';";
$trans["adminTheme_HeaderWording"]	= "\$text = 'Modifica';";

#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]		= "\$text = ', è stata aggiornata.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]	= "\$text = 'Anteprima tema grafico';";
$trans["adminTheme_preview_Librarytitle"]	= "\$text = 'Nome della biblioteca';";
$trans["adminTheme_preview_CloseWindow"]	= "\$text = 'Chiudi finestra';";
$trans["adminTheme_preview_Home"]		= "\$text = 'Pagina principale';";
$trans["adminTheme_preview_Circulation"]	= "\$text = 'Prestito';";
$trans["adminTheme_preview_Cataloging"]		= "\$text = 'Catalogazione';";
$trans["adminTheme_preview_Admin"]		= "\$text = 'Amministrazione';";
$trans["adminTheme_preview_Samplelink"]		= "\$text = 'Esempio di collegamento';";
$trans["adminTheme_preview_Thisstart"]		= "\$text = 'Questa è una anteprima di ';";
$trans["adminTheme_preview_Thisend"]		= "\$text = 'Tema grafico.';";
$trans["adminTheme_preview_Samplelist"]		= "\$text = 'Esempio di Lista:';";
$trans["adminTheme_preview_Tableheading"]	= "\$text = 'Intestazione tabella';";
$trans["adminTheme_preview_Sampledatarow1"]	= "\$text = 'Dati di esempio fila 1';";
$trans["adminTheme_preview_Sampledatarow2"]	= "\$text = 'Dati di esempio fila 2';";
$trans["adminTheme_preview_Sampledatarow3"]	= "\$text = 'Dati di esempio fila 3';";
$trans["adminTheme_preview_Samplelink"]		= "\$text = 'Esempio di collegamento';";
$trans["adminTheme_preview_Sampleerror"]	= "\$text = 'Errore anteprima';";
$trans["adminTheme_preview_Sampleinput"]	= "\$text = 'Ingresso anteprima';";
$trans["adminTheme_preview_Samplebutton"]	= "\$text = 'Bottone anteprima';";
$trans["adminTheme_preview_Poweredby"]		= "\$text = 'Basato su Openbiblio 7.1, ';";
$trans["adminTheme_preview_Copyright"]		= "\$text = 'Copyright &copy; 2002 Dave Stevens OpenBiblio - (EspaBiblio) Jorge Lara , traduzione della 7.1 e altri adeguamenti José A. Lara joanlaga@hotmail.com (vedere sezione crediti e changelog.txt';";
$trans["adminTheme_preview_underthe"]		= "\$text = 'sotto la';";
$trans["adminTheme_preview_GNU"]		= "\$text = 'Licenza Pubblica Generale GNU';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

#* No estan en Openbiblio 7.1 adecuacion por jalg
#****************************************************************************
#* Translation text for page import_export.php
#****************************************************************************
$trans["adminImport"]			= "\$text = 'Importare';";
$trans["adminExport"]			= "\$text = 'Esportare';";
$trans["import_member_csv"]		= "\$text = 'Importare lista utenti da un file CSV';";
$trans["import_bibliography_csv"]	= "\$text = 'Importare lista bibliografica da un file CSV';";
$trans["import_bibliography_marc"]	= "\$text = 'Importare lista bibliografica da un file MARC';";
$trans["export_library_data_csv"]	= "\$text = 'Esportare tuttii dati della biblioteca in un file CSV';";

#****************************************************************************
#* Translation text for page lookupOptsForm.php
#****************************************************************************
$trans["lookup_opts"] 			= "\$text = 'Opzioni Z39.50.';";
$trans["lookup_optsUpdated"]		= "\$text = 'Le opzioni di ricerca sono state aggiornate.';";
$trans["lookup_optsSettings"]		= "\$text = 'Modifica opzioni di ricerca:';";
$trans["lookup_optsProtocol"]		= "\$text = 'Protocollo:';";
$trans["lookup_optsMaxHits"]		= "\$text = 'Massimo numero di hits:';";
$trans["lookup_optsKeepDashes"]		= "\$text = 'Mantenere i trattini:';";
$trans["lookup_optsCallNmbrType"]	= "\$text = 'Tipo del numero di chiamata:';";
$trans["lookup_optsAutoDewey"]		= "\$text = 'Usare Dewey per difetto:';";
$trans["lookup_optsDefaultDewey"]	= "\$text = 'Codice Dewey per difetto:';";
$trans["lookup_optsAutoCutter"]		= "\$text = 'Generare Cutter-Sanborn se non c\'è:';";
$trans["lookup_optsCutterType"]		= "\$text = 'Tipo di Cutter-Sanborn da generare:';";
$trans["lookup_optsCutterWord"]		= "\$text = 'Numero di Parole Dewey Cutter-Sanborn:';";
$trans["lookup_optsAutoCollection"]	= "\$text = 'Usare collezionamento automatico:';";
$trans["lookup_optsFictionName"]	= "\$text = 'Nome della collezione Fiction:';";
$trans["lookup_optsFictionCode"]	= "\$text = 'Numero di codice Fiction da usare:';";
$trans["lookup_optsLocFictionCodes"]	= "\$text = 'Codice LOC Fiction';";
$trans["lookup_optsDewFictionCodes"]	= "\$text = 'Codice Dewey Fiction:';";
$trans["lookup_callNmbrType"]		= "\$text = 'Il tipo del numero di chiamata non è valido!';";
$trans["lookup_optsUpdtBtn"]		= "\$text = 'Aggiornare';";

#****************************************************************************
#* Translation text for page lookupHostsForm.php
#****************************************************************************
$trans["Add New Host"] 			= "\$text = 'Aggiungere nuovo Server Z39.50';";
$trans["lookup_hosts"] 			= "\$text = 'Server di ricerca Z39.50 .';";
$trans["lookup_rqdNote"] 		= "\$text = ' - Campi Obligatori.';";
$trans["lookup_hostsUpdated"]		= "\$text = 'La configurazione della ricerca è stata aggiornata.';";
$trans["lookup_hostsConfirmDelete"]	= "\$text = 'Sei sicuro di voler eliminare questo server Z39.50 ?';";
$trans["lookup_hostsListFunction"] 	= "\$text = 'Funzione:';";
$trans["lookup_hostsListHeader"]	= "\$text = 'Lista dei server per la ricerca Z39.50 :';";
$trans["lookup_hostsEditHeader"]	= "\$text = 'Modifica proprietà del server Z39.50 :';";
$trans["lookup_hostsNewHeader"]		= "\$text = 'Configurazione proprietà del nuovo server Z39.50 :';";
$trans["lookup_hostsSeqNo"]		= "\$text = 'Ordine:';";
$trans["lookup_hostsActive"]		= "\$text = 'Usare:';";
$trans["lookup_hostsHost"]		= "\$text = 'URL:porta';";
$trans["lookup_hostsName"]		= "\$text = 'Nome:';";
$trans["lookup_hostsDb"]		= "\$text = 'Base dei dati:';";
$trans["lookup_hostsContext"]		= "\$text = 'contesto:';";
$trans["lookup_hostsSchema"]		= "\$text = 'Schema:';";
$trans["lookup_hostsUser"]		= "\$text = 'Nome utente:';";
$trans["lookup_hostsPw"]		= "\$text = 'Password';";
$trans["lookup_hostsUpdtBtn"]		= "\$text = 'Aggiornare';";
$trans["lookup_hostsFunc"]		= "\$text = 'Funzione';";
$trans["lookup_hostsCharset"]		= "\$text = 'codifica caratteri';";
$trans["lookup_DefaultCharset"]		= "\$text = 'per difetto: lasciare in bianco';";

#****************************************************************************
#* Translation text for page lookupHostsForm.php
#****************************************************************************
$trans["Function"]			= "\$text = 'Funzione';";
$trans["edit"]				= "\$text = 'Modifica';";
$trans["del"]				= "\$text = 'eliminare';";
$trans["Description"]			= "\$text = 'Descrizione';";
$trans["Member Classifications List"]	= "\$text = 'Gruppo di utenti:';";
$trans["Members"]			= "\$text = 'Utenti';";
$trans["Max. Fines"]			= "\$text = 'Massimo multe';";
$trans["Custom Member Fields"]		= "\$text = 'Grado utente:';";
$trans["Add new custom field"]		= "\$text = 'Aggiungi nuovo campo personalizzato';";
$trans["Character set"]			= "\$text = 'Set di caratteri';";
$trans["adminFormNote"]			= "\$text = '*Nota:';";
$trans["adminAWSNote"]			= "\$text = 'Puoi creare il tuo account AWS in <a href=\"http://aws.amazon.com/\">Amazon</a> nel menù \'Creare account AWS\'.<br />
Quando fatto, puoi trovare le opzioni richieste in %cover_opt_menu% in Account > Security Credentials page';";
$trans["adminZ3950Note"]		= "\$text = 'usare sempre \'%fiction_code%\' nella pagina \'%lookup_bulk%\' come predefinito per nuovi elementi.';";
$trans["adminMbrListNote"]		= "\$text = 'La funzione di eliminazione è disponibile solo per le classificazioni vuote. Se vuoi eliminare una classificazione contenente dei membri, spostare i membri ad una altra classificazione.';";
$trans["Import"]			= "\$text = 'Importare';";
$trans["Add new classification type"]	= "\$text = 'Agiungere nuovo tipo di classificazione';";
$trans["Edit Classification Type"]	= "\$text = 'Modifica tipo di classificazione';";
$trans["Description:"]			= "\$text = 'Descrizione:';";
$trans["Max. Fines:"]			= "\$text = 'Max. multe:';";
$trans["Add custom member field"]	= "\$text = 'Aggiungere campo membro personalizzato';";
$trans["Edit Member Field"]		= "\$text = 'Modifica campo  membro';";
$trans["Code"]				= "\$text = 'codice';";
$trans["Code:"]				= "\$text ='Codice:';";
$trans["memberFieldDelConfirm"]		= "\$text = 'Sei sicuro di voler eliminare il campo \'%desc%\'?';";
$trans["MARC Fields"]			= "\$text = 'Campi MARC';";
$trans["materialAddCustomMarc"]		= "\$text = 'Agiungere un campo MARC per questo tipo di materiali';";
$trans["Field"]				= "\$text = 'Campo';";
$trans["Value"]				= "\$text = 'Valore';";
$trans["Tag"]				= "\$text = 'etichetta [Tag]';";
$trans["Select"]			= "\$text = 'Selezionare';";
$trans["Subfield Code"]			= "\$text = 'Codice di subcampo';";
$trans["Required?"]			= "\$text = 'Richiesto?';";
$trans["cntrltype"]			= "\$text = 'Tipo di controllo';";
$trans["TRUE"]				= "\$text = 'VERO';";
$trans["FALSE"]				= "\$text = 'FALSO';";
$trans["Text Field"]			= "\$text = 'Campo di testo';";
$trans["Text Area"]			= "\$text = 'Área di testo';";
$trans["New Field Added Successfully"]	= "\$text = 'Nuovo campo aggiunto correttamente';";
$trans["Field Successfully Deleted"]	= "\$text = 'Il campo è stato eliminato correttamente';";
$trans["Edit Checkout Privileges"]	= "\$text = 'Modifica privilegi prestito';";
$trans["Material Type:"]		= "\$text = 'Tipo di materiale:';";
$trans["Member Classification:"]	= "\$text = 'Classificazione membro:';";

#****************************************************************************
#* Validation errors
#****************************************************************************
$trans["Session timeout must be numeric."]		= "\$text = 'Il tempo di attesa della sesione deve essere numerico [timeout].';";
$trans["Session timeout must be greater than 0."]	= "\$text = 'Il tempo di attesa della sesione deve essere maggiore di 0.';";
$trans["Items per page must be numeric."]		= "\$text = 'Articoli per pagina deve essere numerico.';";
$trans["Items per page must be greater than 0."]	= "\$text = 'Articoli per pagina deve essere maggiore di 0.';";
$trans["Months must be numeric."]			= "\$text = 'Mesi deve essere numerico.';";
$trans["Days must be numeric."]				= "\$text = 'Giorni deve essere numerico.';";

#****************************************************************************
#* Translation text for page staff_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialstate"]	= "\$text = 'Aggiungere uno stato dei materiali';";
$trans["Medienstatus"]				= "\$text = 'Stato dei Materiali';";
$trans["admin_materials_Comment_end"]		= "\$text = 'I materiali marcati con * non sono modificabili';";
$trans["admin_materials_listFunction"]		= "\$text = 'Funzione';";
$trans["admin_materials_listDescription"]	= "\$text = 'Descrizione';";
$trans["admin_materials_Abrev"]			= "\$text = 'Abbrev.';";
$trans["admin_materials_listMaterialstate"]	= "\$text = 'Stato dei Materiali';";
$trans["Note-1-admin"]				= "\$text = '
Se il valore del mese nello storico di eliminazione è maggiore di zero, i valori nelle statistiche di segnalazione cambiano nel tempo.
I dati dei rapporti delle statistiche dovrebbero essere tenuti fuori dalla Espabiblio per riferimento futuro.';";

#****************************************************************************
#* Translation text for page staff_list.php
#****************************************************************************
$trans["admin-Translate"]	= "\$text = 'Amministratore delle traduzioni';";
$trans["admin-transAdver"]	= "\$text = 'Eseguire il backup dei file nella cartella locale';";
$trans["admin-transPrev"]	= "\$text = 'Funzione di prova - si prega comunicare osservazioni o problemi a joanlanga@hotmail';";
$trans["Clave"]			= "\$text = 'Chiave';";
$trans["English"]		= "\$text = 'Inglese';";
$trans["lang"]			= "\$text = 'Italiano';";
$trans["admin-transDel"]	= "\$text = 'Eliminare';";
$trans["admin-transNewEntry"]	= "\$text = 'Aggiungere nuovo ingresso';";
$trans["admin-transSubmit"]	= "\$text = 'Inviare';";

#****************************************************************************
#* Translation text for page copy_fields_list.php Custom Copy Fields
#****************************************************************************
$trans["Custom Copy Fields"]	= "\$text = 'Personalizzazione dei campi della copia';";
$trans["Copy field, %desc%, has been added."]	= "\$text = 'Il campo %desc%, è stato aggiunto.';";
$trans["return to copy fields list"]	= "\$text = 'Ritornare alla lista dei campi delle copie.';";
$trans["Add new custom field list"]	= "\$text = 'Aggiungere nuova personalizzazione dei campi dati per le copie.';";
$trans["Add custom copy field"]	= "\$text = 'Aggiungere nuovo campo dati per le copie.';";
$trans["Are you sure you want to delete field %desc% ?"]	= "\$text = 'Sei sicuro di voler eliminare il campo %desc% ?.';";

