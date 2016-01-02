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
$trans["login"]                    = "\$text = 'Entrar';";
$trans["logout"]                   = "\$text = 'Salir';";
$trans["help"]                     = "\$text = 'Ayuda';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]		= "\$text = 'Inicio';";
$trans["homeLicenseLink"]	= "\$text = 'Licencia-Esp';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["homeLicenseLink1"]	= "\$text = 'Licencia-Original';";
$trans['homeRadmeLink']		= "\$text = 'Léame antes de instalar';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]		= "\$text = 'Administración';";
$trans["adminStaff"]		= "\$text = 'Administración de bibliotecarios';";
$trans["adminSettings"]		= "\$text = 'Configuración de la biblioteca';";
$trans["adminMaterialTypes"]	= "\$text = 'Tipos de material';";
$trans["adminCollections"]	= "\$text = 'Colecciones';";
$trans["adminThemes"]		= "\$text = 'Temas de diseño';";
$trans["adminTranslation"]	= "\$text = 'Idiomas';";
$trans["Yaz test"]		= "\$text = 'Probar YAZ';";


#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["Checkout Privs"]	= "\$text = 'Gestionar privilegios';";
$trans["adminCheckoutPriv"]	= "\$text = 'Gestionar privilegios';";
$trans["Cover Lookup Options"]	= "\$text = 'Búsqueda de portadas';";
$trans["adminImportExport"]	= "\$text = 'Importar/Exportar';";
$trans["adminMaterialStatus"]	= "\$text = 'Estado de Materiales';";
$trans["Member Types"]		= "\$text = 'Grupos de usuarios';";
$trans["Member Fields"]		= "\$text = 'asignación de Grados de usuario';";
$trans["Member Fields dm"]	= "\$text = 'Grados de usuario';";
$trans["Copy Fields"]		= "\$text = 'Personalización de Campos de datos para las copias';";// es esta traduccion ?? jalg


#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]		= "\$text = 'Resumen de Catalogación';";
$trans["catalogSearch1"]		= "\$text = 'Búsqueda de material';";
$trans["catalogSearch2"]		= "\$text = 'Búsqueda bibliográfica';";
$trans["catalogResults"]		= "\$text = 'Resultados de la búsqueda';";
$trans["catalogBibInfo"]		= "\$text = 'Información bibliográfica';";
$trans["catalogBibEdit"]		= "\$text = 'Edición básica';";
$trans["catalogBibEditMarc"]		= "\$text = 'Editar-MARC';";
$trans["catalogBibMarcNewFld"]		= "\$text = 'Nuevo campo MARC';";
$trans["catalogBibMarcNewFldShrt"]	= "\$text = 'Nuevo MARC';";
$trans["catalogBibMarcEditFld"]		= "\$text = 'Editar campo MARC';";
$trans["catalogCopyNew"]		= "\$text = 'Nueva copia';";
$trans["catalogCopyEdit"]		= "\$text = 'Editar Copia';";
$trans["catalogHolds"]			= "\$text = 'Reservas';";
$trans["catalogDelete"]			= "\$text = 'Borrar';";
$trans["catalogBibNewLike"]		= "\$text = '¿Usar datos para un nuevo registro?';";
$trans["catalogBibNew"]			= "\$text = 'Nuevo material';";
$trans["Upload Marc Data"]		= "\$text = 'Subir datos Marc';";
#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["catalogBibBulkDelete"]		= "\$text = 'Eliminar Bibliografías por lotes';";
$trans["CSVImport"]			= "\$text = 'Importar bibliografias desde un archivo CSV';";
$trans["adminTranslate"]		= "\$text = 'Administrador de traducciones';";
$trans["cdu"]				= "\$text = 'Tablas CDU';";
$trans["cdd"]				= "\$text = 'Tablas CDD';";
$trans["ibic"]				= "\$text = 'Tablas IBIC';";
$trans["Upload CSV Data"]		= "\$text = 'Cargar copias desde archivo CSV';";
$trans["marc_list"]			= "\$text = 'Listar campos MARC';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]	= "\$text = 'Informes';";
$trans["reportsReportListLink"]  = "\$text = 'Lista de informes';";
$trans["reportsLabelsLink"]      = "\$text = 'Imprimir etiquetas';";
$trans["reportsLettersLink"]     = "\$text = 'Imprimir cartas';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["reportsResult"]          = "\$text = 'Informe de resultados';";
$trans["reportsCriteria"]        = "\$text = 'Criterios del informe';";
$trans["reportsFailedImport"]	= "\$text = 'Importación fallida';";
$trans["reportsNoCover"]         = "\$text = 'Artículos sin portada';";
$trans["Overdue Letters"]         = "\$text = 'Cartas Notificación vencimientos';";


#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Buscar';";
$trans["catalogSearch2"]           = "\$text = 'Buscar material';";
$trans["catalogResults"]           = "\$text = 'Resultados de la búsqueda';";
$trans["catalogBibInfo"]           = "\$text = 'Información bibliográfica';";

#Added
#****************************************************************************
#*  Translation text for page Added
#****************************************************************************
$trans["memberInfo"]		= "\$text = 'Información de socios';";
$trans["memberSearch"]		= "\$text = 'Buscar socio';";
$trans["editInfo"]		= "\$text = 'Editar datos';";
$trans["checkoutHistory"]	= "\$text = 'Historial de préstamo';";
$trans["account"]		= "\$text = 'Cuenta';";
$trans["checkIn"]		= "\$text = 'Devolución';";
$trans["memberSearch"]		= "\$text = 'Buscar socio';";
$trans["newMember"]		= "\$text = 'Nuevo socio';";
$trans["Offline Circulation"]	= "\$text = 'Prestamos fuera de linea';";
$trans["account"]       	= "\$text = 'Cuenta';";
$trans["MemberCSVImport"]       = "\$text = 'Importar lectores desde archivo CSV';";


#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
#* Translation text for Library of Congress SRU module
#****************************************************************************
$trans["LOCsearch"]                 = "\$text = 'Consultar Biblioteca del Congreso USA';";

#****************************************************************************
#*  Translation text for page lookup.php for lookup2
#****************************************************************************
$trans["lookup"]        = "\$text = 'Búsqueda en línea Z39.50';";
$trans["lookup_opts"]	= "\$text = 'Opciones Z39.50';";
$trans["lookup_hosts"]  = "\$text = 'Servidores Z39.50';";
$trans["lookup_bulk"]   = "\$text = 'Búsqueda masiva de datos vía ISBN';";

/*
$trans["lookup"]                = "\$text = 'On-line Search v2';";
$trans["lookup_opts"]       		= "\$text = 'Lookup Options';";
$trans["lookup_hosts"]       		= "\$text = 'Lookup Hosts';";
*/

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]          = "\$text = 'Principal';";
$trans["homeLicenseLink"]       = "\$text = 'Licencia';";
$trans["homeCreditsLink"]       = "\$text = 'Créditos';";
$trans["homeReadmeLink"]        = "\$text = 'Leeme';";
$trans["homeChangLogLink"]      = "\$text = 'Historial de Cambios (ChangeLog)';";
$trans["homeUserStatusLink"]    = "\$text = 'Estado del Usario y apartado de materiales';";
$trans["homeUserOpac"]          = "\$text = 'Catálogo Público en Linea';";
