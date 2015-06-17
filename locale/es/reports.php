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
$trans["reportsCancel"] = "\$text = 'Cancelar';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]	= "\$text = 'Informes';";
$trans["indexDesc"]	= "\$text = 'Utilice el informe o lista de etiquetas situado en la zona de navegación izquierda para crear informes o etiquetas.';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]		= "\$text = 'Lista de informes';";
$trans["reportListDesc"]	= "\$text = 'Elija uno de los siguientes enlaces para realizar un informe.';";
$trans["reportListXmlErr"]	= "\$text = 'Ocurrió un error al analizar un informe xml.';";
$trans["reportListCannotRead"]	= "\$text = 'No se puede leer la etiqueta de archivo: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]		= "\$text = 'Lista de etiquetas';";
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
$trans["reportCriteriaHead1"]			= "\$text = 'Criterios de búsqueda de informes (opcional)';";
$trans["reportCriteriaHead2"]			= "\$text = 'Clasificación de informes (opcional)';";
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
$trans["runReportReturnLink1"]		= "\$text = 'criterios de selección de informe';";
$trans["runReportReturnLink2"]		= "\$text = 'informe de lista';";
$trans["runReportTotal"]		= "\$text = 'filas de totales:';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["Print list"]			= "\$text = 'Imprimir la lista';";
$trans["Labels"]			= "\$text = 'etiquetas';";
$trans["reportsResultNotFound"]		= "\$text = 'No se encontraron resultados.';";
$trans["reportsResultFound"]		= "\$text = '%results% resultados encontrados.';";
$trans["Report Results:"]		= "\$text = 'informe de resultados:';";


$trans["&laquo;Prev"]              = "\$text = ' &laquo; Previo'; ";
$trans["Next&raquo;"]              = "\$text = ' Siguiente &raquo; ';";
$trans["&laquo;First"]             = "\$text = ' &laquo; Primero ';";
$trans["Last&raquo;"]              = "\$text = ' Ultimo &raquo; ';";



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
$trans["reportHolds"]				= "\$text = 'Mantener las peticiones de préstamo que contienen información de contacto con el socio';";
$trans["reportCheckouts"]			= "\$text = 'Listado de bibliografía prestada';";
$trans["Over Due Letters"]			= "\$text = 'Cartas de atrasos';";
$trans["reportLabels"]				= "\$text = 'Información sobre impresión de etiquetas';";
$trans["popularBiblios"]			= "\$text = 'Bibliografías más populares';";
$trans["overdueList"] 				= "\$text = 'Lista de socios con artículos pendientes de devolución';";
$trans["balanceDueList"]			= "\$text = 'Lista de artículos pendientes de devolución por los socios';";
$trans["Circulation"]				= "\$text = 'circulación (préstamo)';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["Cataloging"]				= "\$text = 'Catalogación';";
$trans["Acquisition"]				= "\$text = 'Adquisición';";
$trans["Statistics"]				= "\$text = 'Estadísticas';";
$trans["Duplicate Titles"]			= "\$text = 'Títulos duplicados';";
$trans["Member Search"]				= "\$text = 'Búsqueda de Miembros';";
$trans["Copy Search"]				= "\$text = 'Búsqueda de copia';";
$trans["Most Popular Authors"]			= "\$text = 'Los autores más populares';";
$trans["Periodic Checkout Count"]		= "\$text = 'Período a mostrar';";
$trans["Bulk summary"]				= "\$text = 'Resumen a granel [Bulk summary]';";
$trans["Item Checkout History"]			= "\$text = 'Historial de Artículos Pedidos';";


$trans["Group By"]				= "\$text = 'Agrupar por';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]		= "\$text = 'Ejemplo de etiquetas de múltiples';";
$trans["labelsSimple"]		= "\$text = 'Ejemplo de etiquetas de simples';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]				= "\$text = 'Identificación de la Biblioteca ID';";
$trans["biblio.create_dt"]			= "\$text = 'Fecha de registro';";
$trans["biblio.last_change_dt"]			= "\$text = 'Modificado por última vez';";
$trans["biblio.material_cd"]			= "\$text = 'Material en Cd';";
$trans["biblio.collection_cd"]			= "\$text = 'Colección';";
$trans["biblio.call_nmbr1"]			= "\$text = 'Entrada 1';";
$trans["biblio.call_nmbr2"]			= "\$text = 'Entrada 2';";
$trans["biblio.call_nmbr3"]			= "\$text = 'Entrada 3';";
$trans["biblio.title_remainder"]		= "\$text = 'Resto de títulos';";
$trans["Title Remainder"]			= "\$text = 'Resto del titulo';";
$trans["biblio.responsibility_stmt"]		= "\$text = 'Stmt of Resp';";
$trans["biblio.opac_flg"]			= "\$text = 'OPAC Flag';";
$trans["biblio_copy.barcode_nmbr"]		= "\$text = 'Código de barras';";
$trans["biblio.title"]				= "\$text = 'Título';";
$trans["biblio.author"]				= "\$text = 'Autor';";
$trans["biblio_copy.status_begin_dt"]		= "\$text = 'Fecha de comienzo de estado';";
$trans["biblio_copy.due_back_dt"]		= "\$text = 'Fecha de devolución';";
$trans["member.mbrid"]				= "\$text = 'Identificación del socio';";
$trans["member.barcode_nmbr"]			= "\$text = 'Código de barras del socio';";
$trans["member.last_name"]			= "\$text = 'Apellido';";
$trans["member.first_name"]			= "\$text = 'Nombre';";
$trans["member.address"]			= "\$text = 'Dirección';";
$trans["biblio_hold.hold_begin_dt"]		= "\$text = 'Fecha de préstamo';";
$trans["member.home_phone"]			= "\$text = 'Teléfono de casa';";
$trans["member.work_phone"]			= "\$text = 'Teléfono del trabajo';";
$trans["member.email"]				= "\$text = 'Email';";
$trans["biblio_status_dm.description"]		= "\$text = 'Estado';";
$trans["settings.library_name"]			= "\$text = 'Nombre de la biblioteca';";
$trans["settings.library_hours"]		= "\$text = 'Horario de la biblioteca ';";
$trans["settings.library_aders"]		= "\$text = 'Dirección de la biblioteca';";
$trans["settings.library_phone"]		= "\$text = 'Teléfono de la biblioteca';"; //add jalg
$trans["days_late"]				= "\$text = 'Días de retraso';";
$trans["title"]					= "\$text = 'Título';";

$trans["author"]				= "\$text = 'Autor';";
$trans["due_back_dt"]				= "\$text = 'Fecha de devolución';";
$trans["checkoutCount"]				= "\$text = 'Cuentas de préstamos';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["reportDateMonth01"]			= "\$text = 'Enero';";
$trans["reportDateMonth02"]			= "\$text = 'Febrero';";
$trans["reportDateMonth03"] 			= "\$text = 'Marzo';";
$trans["reportDateMonth04"]			= "\$text = 'Abril';";
$trans["reportDateMonth05"]			= "\$text = 'Mayo';";
$trans["reportDateMonth06"]			= "\$text = 'Junio';";
$trans["reportDateMonth07"]			= "\$text = 'Julio';";
$trans["reportDateMonth08"]			= "\$text = 'Agosto';";
$trans["reportDateMonth09"]			= "\$text = 'Septiembre';";
$trans["reportDateMonth10"]			= "\$text = 'Octubre';";
$trans["reportDateMonth11"]			= "\$text = 'Noviembre';";
$trans["reportDateMonth12"]			= "\$text = 'Diciembre';";
$trans["Barcode"]				= "\$text = 'Código de barras';";
$trans["Barcode Starts With"]			= "\$text = 'Código de barras comienza con';";
$trans["List of Barcodes (spaced)"]		= "\$text = 'Lista de códigos de barras (espacio)';";
$trans["Title"]					= "\$text = 'Título';";
$trans["# Checkouts, Author, Title"]		= "\$text = '# Prestamos, Autor, Título';";
$trans["Most Checkouts, Author, Title"]		= "\$text = 'Los más prestados, Autor, Título';";
$trans["Newer than (Date or today)"]		= "\$text = 'Mas nuevo que (Fecha o Hoy)';";
$trans["Sort By"]				= "\$text = 'Ordenado por';";
$trans["Format"]				= "\$text = 'Formato';";
$trans["Minimum balance"]			= "\$text = 'Balance mínimo';";
$trans["Call Number"]				= "\$text = 'Llame al número de';";
$trans["Placed before"]				= "\$text = 'Puesto delante';";
$trans["Placed since"]				= "\$text = 'desde ';";
$trans["As of"]					= "\$text = 'Como de';";
$trans["Due before"]				= "\$text = 'Antes de';";
$trans["Out since"]				= "\$text = 'Fuera desde';";
$trans["Before"]				= "\$text = 'Antes de';";
$trans["After (Date or yesterday)"]		= "\$text = 'Despues de (Fecha)';";

$trans["reportsReverse"]			= "\$text = '(Reverso)';";
$trans["Member Name"]				= "\$text = 'Mombre del usuario';";
$trans["Balance Due"]				= "\$text = 'Balance';";
$trans["bulkReportBibID"]			= "\$text = 'Biblio ID';";
$trans["bulkReportBibName"]			= "\$text = 'Biblio Nombre';";
$trans["bulkReportNoItem"]			= "\$text = 'Sin resultados de Elementos aún.';"; //lara revisar
$trans["bulkReportAllCovered"]			= "\$text = 'Todos los Elementos tienen su portada del libro.';";
$trans["bulkReportConfirmPurge"]		= "\$text = '¿Seguro para purgar el listado ISBN?';";
$trans["bulkReportPurgeDone"]			= "\$text = 'Todos los artículos se ha purgado de la lista no.';";
$trans["bulkReportConfirmRemoveISBN"]		= "\$text = '¿Estás seguro de eliminar el ISBN: %isbn%?';";
$trans["bulkReportISBNRemoved"]			= "\$text = 'ISBN %isbn% se ha eliminado de la lista fallado.';";
$trans["bulkReportZeroHits"]			= "\$text = 'Encontrados %zero_hits% elementos ocultos (copia de nada), <a href=\"bulk_report.php?type=manual&act=cleartemp\">Limpiar ahora.</a>';";
$trans["bulkReportZeroHitsClear"]		= "\$text = 'Los elementos ocultos (no copia) se ha eliminado de la lista.(Hidden items (no copy) has been removed from failed list.)';";
$trans["function"]				= "\$text = 'Función';";
$trans["add"]					= "\$text = 'Añadir';";
$trans["edit"]					= "\$text = 'Editar';";
$trans["remove"]				= "\$text = 'Quitar';";
$trans["Hits"]					= "\$text = 'Visitas';";
$trans["Created"]				= "\$text = 'Fecha de Creación';";
$trans["Export to file"]			= "\$text = 'Exportar al archivo';";
$trans["Purge all items"]			= "\$text = 'Purgar todos los elementos';";
$trans["Submit"]				= "\$text = 'Enviar';";
$trans["Call Num."]				= "\$text = 'Llamado Num.';";
$trans["Author"]				= "\$text = 'Autor';";
$trans["collection"]				= "\$text = 'Colección';";
$trans["Checkout Date"]				= "\$text = 'Fecha de solicitud';";
$trans["Due Date"]				= "\$text = 'Fecha de vencimiento';";
$trans["Hold Date"]				= "\$text = 'Vigencia';";
$trans["Member Barcode"]			= "\$text = 'Código de barras del usuario';";
$trans['rptFormattedDate']			= "\$text = date('j M Y', strtotime('%date%'));";
$trans['rptFormattedShortDate']			= "\$text = date('j F Y', strtotime('%date%'));";
$trans['rptLetterDear']				= "\$text = 'Estimado %lastName% %firstName%:';";
$trans['rptLetterDetails']			= "\$text = 'Nuestros registros indican que los elementos de la biblioteca se verifica lo siguiente en el marco de su nombre y son vencidos. Por favor, devuelva a la mayor brevedad posible y pago de las tasas debidas finales.';";
$trans['rptLetterFooter']			= "\$text = 'Atentamente, <br />Bibliotecario ' . OBIB_LIBRARY_NAME;";

$trans["Bibliography"]				= "\$text = 'Bibliografía';";
$trans["Bibliography Copy"]				= "\$text = 'Bibliografía Copia';";
