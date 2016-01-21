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
$trans["reportsCancel"] = "\$text = 'Anuluj';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]	= "\$text = 'Dane';";
$trans["indexDesc"]	= "\$text = 'Utilice el informe o lista de etiquetas situado en la zona de navegación izquierda para crear informes o etiquetas.';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]		= "\$text = 'Dostępne dane';";
$trans["reportListDesc"]	= "\$text = 'Elija uno de los siguientes enlaces para realizar un informe.';";
$trans["reportListXmlErr"]	= "\$text = 'Ocurrió un error al analizar un informe xml.';";
$trans["reportListCannotRead"]	= "\$text = 'No se puede leer la etiqueta de archivo: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]		= "\$text = 'Etykietki';";
$trans["labelListDesc"]		= "\$text = 'Elija uno de los siguientes enlaces para crear etiquetas en formato pdf.';";
$trans["displayLabelsXmlErr"]	= "\$text = 'Ocurrió un error al analizar un informe xml. Error = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]		= "\$text = 'Lista de cartas';";
$trans["letterListDesc"]	= "\$text = 'Elija uno de los siguientes enlaces para crear cartas en formato pdf.';";
$trans["displayLettersXmlErr"]	= "\$text = 'Ocurrió un error al analizar un informe xml. Error = ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]			= "\$text = 'Kryteria wyszukiwania (opcja)';";
$trans["reportCriteriaHead2"]			= "\$text = 'Rodzaj wyszukiwania (opcja)';";
$trans["reportCriteriaHead3"]			= "\$text = 'Informe Tipo de Salidas';";
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
$trans["reportCriteriaBT"]			= "\$text = 'entre';";
$trans["reportCriteriaAnd"]			= "\$text = 'y';";
$trans["reportCriteriaRunReport"]		= "\$text = 'realizar informe';";
$trans["reportCriteriaSortCrit1"]		= "\$text = 'Clase 1:';";
$trans["reportCriteriaSortCrit2"]		= "\$text = 'Clase 2:';";
$trans["reportCriteriaSortCrit3"]		= "\$text = 'Clase 3:';";
$trans["reportCriteriaAscending"]		= "\$text = 'ascendente';";
$trans["reportCriteriaDescending"]		= "\$text = 'descendiente';";
$trans["reportCriteriaStartOnLabel"]		= "\$text = 'Comenzar a imprimir en la etiqueta:';";
$trans["reportCriteriaOutput"]			= "\$text = 'Formato Tipo de Salida:';";
$trans["reportCriteriaOutputHTML"]		= "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]		= "\$text = 'CSV';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["HTML (page-by-page)"]			= "\$text = 'HTML (Página por página)';";
$trans["HTML (one big page)"]			= "\$text = 'HTML (una gran página)';";
$trans["CSV"]					= "\$text = 'CSV';";
$trans["Microsoft Excel"]			= "\$text = 'OpenOfice, Libre Ofice,  Microsoft Excel';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]		= "\$text = 'Kryteria raportu';";
$trans["runReportReturnLink2"]		= "\$text = 'Raport';";
$trans["runReportTotal"]				= "\$text = 'Pełny Raport:';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["Print list"]						= "\$text = 'Drukuj listę';";
$trans["Labels"]							= "\$text = 'Etykietki';";
$trans["reportsResultNotFound"]		= "\$text = 'Brak wyników.';";
$trans["reportsResultFound"]			= "\$text = '%results% wyniki.';";
$trans["Report Results:"]				= "\$text = 'Wyniki wyszukiwania:';";
$trans["No results found."]			= "\$text = 'Brak wyników.';";
$trans["&laquo;Prev"]              = "\$text = ' &laquo; Dalej'; ";
$trans["Next&raquo;"]              = "\$text = ' Siguiente &Wstecz; ';";
$trans["&laquo;First"]             = "\$text = ' &laquo; Pierwsze';";
$trans["Last&raquo;"]              = "\$text = ' Ostatnie&raquo; ';";



#****************************************************************************
#* Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"]	= "\$text = 'El campo debe ser numérico.';";
$trans["displayLabelsXmlErr"]		= "\$text = 'Se produjo un error de análisis de definición de informe XML. Error = ';";
$trans["displayLabelsCannotRead"]	= "\$text = 'No se puede leer la etiqueta de archivo: %fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]			= "\$text = 'Usted no está autorizado a utilizar la ficha de Informes.';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]				= "\$tex= 'Rezerwacje';";
$trans["reportCheckouts"]			= "\$text = 'Wypożyczenia';";
$trans["Over Due Letters"]			= "\$text = 'List z upomnieniem';";
$trans["reportLabels"]				= "\$text = 'Información sobre impresión de etiquetas';";
$trans["popularBiblios"]			= "\$text = 'Najpopularniejsze pozycje';";
$trans["overdueList"] 				= "\$text = 'Lista przetrzymań';";
$trans["balanceDueList"]			= "\$text = 'Zaległości (kara za przetrzymanie)';";
$trans["Circulation"]				= "\$text = 'Obsługa czytelnika';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["Cataloging"]						= "\$text = 'Katalogowanie';";
$trans["Acquisition"]					= "\$text = 'Nabytki';";
$trans["Statistics"]						= "\$text = 'Statystyka';";
$trans["Duplicate Titles"]				= "\$text = 'Duplikaty';";
$trans["Member Search"]					= "\$text = 'Przeszukuj czytelników';";
$trans["Copy Search"]					= "\$text = 'Przeszukuj egzemplarze';";
$trans["Most Popular Authors"]		= "\$text = 'Najpopularniejsi autorzy';";
$trans["Periodic Checkout Count"]	= "\$text = 'Statystyka wypożyczeń';";
$trans["Bulk summary"]					= "\$text = 'Resumen a granel [Bulk summary]';";
$trans["Item Checkout History"]		= "\$text = 'Historia wypożyczeń materiału';";


$trans["Group By"]				= "\$text = 'Sortuj według';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]		= "\$text = 'Ejemplo de etiquetas de múltiples';";
$trans["labelsSimple"]		= "\$text = 'Ejemplo de etiquetas de simples';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]				= "\$text = 'Identificación de la Biblioteca ID';";
$trans["biblio.create_dt"]			= "\$text = 'Włączenie do księgozbioru ';";
$trans["biblio.last_change_dt"]			= "\$text = 'Data modyfikacji';";
$trans["biblio.material_cd"]			= "\$text = 'Materiał na CD';";
$trans["biblio.collection_cd"]			= "\$text = 'Dział';";
$trans["biblio.call_nmbr1"]			= "\$text = 'Księgozbiór';";
$trans["biblio.call_nmbr2"]			= "\$text = 'Entrada 2';";
$trans["biblio.call_nmbr3"]			= "\$text = 'Entrada 3';";
$trans["biblio.title_remainder"]		= "\$text = 'Resto de títulos';";
$trans["Title Remainder"]			= "\$text = 'Resto del titulo';";
$trans["biblio.responsibility_stmt"]		= "\$text = 'Stmt of Resp';";
$trans["biblio.opac_flg"]			= "\$text = 'OPAC Flag';";
$trans["biblio_copy.barcode_nmbr"]		= "\$text = 'Kod';";
$trans["biblio.title"]				= "\$text = 'Tytuł';";
$trans["biblio.author"]				= "\$text = 'Kod';";
$trans["biblio_copy.status_begin_dt"]		= "\$text = 'Data skanowania';";
$trans["biblio_copy.due_back_dt"]		= "\$text = 'Data zwrotu';";
$trans["member.mbrid"]				= "\$text = 'Czytelnik';";
$trans["member.barcode_nmbr"]			= "\$text = 'Kod czytelnika';";
$trans["member.last_name"]			= "\$text = 'Nazwisko';";
$trans["member.first_name"]			= "\$text = 'Imię';";
$trans["member.address"]			= "\$text = 'Adres';";
$trans["biblio_hold.hold_begin_dt"]		= "\$text = 'Data wypożyczenia';";
$trans["member.home_phone"]			= "\$text = 'tel. domowy';";
$trans["member.work_phone"]			= "\$text = 'tel. do pracy';";
$trans["member.email"]				= "\$text = 'Email';";
$trans["biblio_status_dm.description"]		= "\$text = 'Status';";
$trans["settings.library_name"]			= "\$text = 'Nazwa biblioteki';";
$trans["settings.library_hours"]		= "\$text = 'Godziny pracy biblioteki ';";
$trans["settings.library_aders"]		= "\$text = 'Adres biblioteki';";
$trans["settings.library_phone"]		= "\$text = 'Teléfono de la biblioteca';"; //add jalg
$trans["days_late"]				= "\$text = 'Przetrzymanie';";
$trans["title"]					= "\$text = 'Tytuł';";

$trans["author"]				= "\$text = 'Autor';";
$trans["due_back_dt"]				= "\$text = 'Data zwrotu';";
$trans["checkoutCount"]				= "\$text = 'Zaległość';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["reportDateMonth01"]			= "\$text = 'Styczeń';";
$trans["reportDateMonth02"]			= "\$text = 'Luty';";
$trans["reportDateMonth03"] 			= "\$text = 'Marzec';";
$trans["reportDateMonth04"]			= "\$text = 'Kwiecień';";
$trans["reportDateMonth05"]			= "\$text = 'Maj';";
$trans["reportDateMonth06"]			= "\$text = 'Czerwiec';";
$trans["reportDateMonth07"]			= "\$text = 'Lipiec';";
$trans["reportDateMonth08"]			= "\$text = 'Sierpień';";
$trans["reportDateMonth09"]			= "\$text = 'Wrzesień';";
$trans["reportDateMonth10"]			= "\$text = 'Październik';";
$trans["reportDateMonth11"]			= "\$text = 'Listopad';";
$trans["reportDateMonth12"]			= "\$text = 'Grudzień';";
$trans["Barcode"]				= "\$text = 'Kod';";
$trans["Barcode Starts With"]			= "\$text = 'Kod zaczyna się od';";
$trans["List of Barcodes (spaced)"]		= "\$text = 'Lista de códigos de barras (espacio)';";
$trans["Title"]					= "\$text = 'Título';";
$trans["# Checkouts, Author, Title"]		= "\$text = '# Wypożyczenia, Autor, Tytuł';";
$trans["Most Checkouts, Author, Title"]		= "\$text = 'Najchętniej wypożyczane, Autor, Tytuł';";
$trans["Newer than (Date or today)"]		= "\$text = Nowsze niż (Data lub dziś)';";
$trans["Sort By"]				= "\$text = 'Sortuj według';";
$trans["Format"]				= "\$text = 'Format';";
$trans["Minimum balance"]			= "\$text = 'Minimalna należność';";
$trans["Call Number"]				= "\$text = 'Księgozbiór';";
$trans["Placed before"]				= "\$text = 'Puesto delante';";
$trans["Placed since"]				= "\$text = 'Od ';";
$trans["As of"]					= "\$text = 'jako';";
$trans["Due before"]				= "\$text = 'Przed;";
$trans["Out since"]				= "\$text = 'Poza';";
$trans["Before"]				= "\$text = 'Przed;";
$trans["After (Date or yesterday)"]		= "\$text = 'Po (data)';";

$trans["reportsReverse"]			= "\$text = '(Reverso)';";
$trans["Member Name"]				= "\$text = 'Mombre del usuario';";
$trans["Balance Due"]				= "\$text = 'Balance';";
$trans["bulkReportBibID"]			= "\$text = 'Kod';";
$trans["bulkReportBibName"]			= "\$text = 'Pozycja';";
$trans["bulkReportNoItem"]			= "\$text = 'Sin resultados de Elementos aún.';"; //lara revisar
$trans["bulkReportAllCovered"]			= "\$text = 'Todos los Elementos tienen su portada del libro.';";
$trans["bulkReportConfirmPurge"]		= "\$text = '¿Seguro para purgar el listado ISBN?';";
$trans["bulkReportPurgeDone"]			= "\$text = 'Todos los artículos se ha purgado de la lista no.';";
$trans["bulkReportConfirmRemoveISBN"]		= "\$text = '¿Estás seguro de eliminar el ISBN: %isbn%?';";
$trans["bulkReportISBNRemoved"]			= "\$text = 'ISBN %isbn% se ha eliminado de la lista fallado.';";
$trans["bulkReportZeroHits"]			= "\$text = 'Encontrados %zero_hits% elementos ocultos (copia de nada), <a href=\"bulk_report.php?type=manual&act=cleartemp\">Limpiar ahora.</a>';";
$trans["bulkReportZeroHitsClear"]		= "\$text = 'Los elementos ocultos (no copia) se ha eliminado de la lista.(Hidden items (no copy) has been removed from failed list.)';";
$trans["function"]				= "\$text = 'Funkcja';";
$trans["add"]					= "\$text = 'Dodaj';";
$trans["edit"]					= "\$text = 'Edytuj';";
$trans["remove"]				= "\$text = 'Usuń';";
$trans["Hits"]					= "\$text = 'Visitas';";
$trans["Created"]				= "\$text = 'Utworzono';";
$trans["Export to file"]			= "\$text = 'Eksportuj';";
$trans["Purge all items"]			= "\$text = 'Usuń zagubione elementy';";
$trans["Submit"]				= "\$text = 'OK';";
$trans["Call Num."]				= "\$text = 'Księgozbiór.';";
$trans["Author"]				= "\$text = 'Autor';";
$trans["collection"]				= "\$text = 'Dział';";
$trans["Checkout Date"]				= "\$text = 'Data wypożyczenia';";
$trans["Due Date"]				= "\$text = 'Ważne do';";
$trans["Hold Date"]				= "\$text = 'Data rezerwacji';";
$trans["Member Barcode"]			= "\$text = 'Kod czytelnika';";
$trans['rptFormattedDate']			= "\$text = Data('j M Y', strtotime('%date%'));";
$trans['rptFormattedShortDate']			= "\$text = date('j F Y', strtotime('%date%'));";
$trans['rptLetterDear']				= "\$text = 'Estimado %lastName% %firstName%:';";
$trans['rptLetterDetails']			= "\$text = 'Nuestros registros indican que los elementos de la biblioteca se verifica lo siguiente en el marco de su nombre y son vencidos. Por favor, devuelva a la mayor brevedad posible y pago de las tasas debidas finales.';";
$trans['rptLetterFooter']			= "\$text = 'Atentamente, <br />Bibliotecario ' . OBIB_LIBRARY_NAME;";

$trans["Bibliography"]				= "\$text = 'Pozycja';";
$trans["Bibliography Copy"]				= "\$text = 'Egzemplarze';";
