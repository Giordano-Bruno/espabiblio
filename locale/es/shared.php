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
$trans["sharedCancel"]			= "\$text = 'Cancelar';";
$trans["sharedDelete"]			= "\$text = 'Borrar';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["sharedComfirmDelete"]		= "\$text = 'Si, eliminar todos los artículos seleccionados';";
$trans["sharedDeleteWarning"]		= "\$text = 'Esta acción no se puede deshacer. ¿Estás seguro?';";
$trans["sharedRecordIsDelete"]		= "\$text = 'registro está borrado.';";
$trans["sharedRecordsAreDeleted"]	= "\$text = 'registros están borrados.';";
$trans["sharedListOfDeletedItems"]	= "\$text = 'La lista de artículos será eliminada';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Información bibliográfica';";
$trans["biblioViewMaterialType"]   = "\$text = 'Tipo de material';";
$trans["biblioViewCollection"]     = "\$text = 'Colección';";
$trans["biblioViewCallNmbr"]       = "\$text = 'Número de entrada';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'Información de la copia bibliográfica';";
$trans["biblioViewTble2Col1"]      = "\$text = 'Código de barras #';";
$trans["biblioViewTble2Col2"]      = "\$text = 'Descripción';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Estado';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Estado Dt';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Fecha de devolución';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Función';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'Borrar';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'editar';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'Información bibliográfica adicional';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'No existe información bibliográfica adicional disponible.';";
$trans["biblioViewNoCopies"]       = "\$text = 'No se han creado copias.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Mostrar en OPAC';";
$trans["biblioViewNewCopy"]        = "\$text = 'Añadir nueva copia';";
$trans["biblioViewNeweCopy"]        = "\$text = 'Añadir nueva copia electrónica';";
$trans["biblioViewYes"]            = "\$text = 'Si';";
$trans["biblioViewNo"]             = "\$text = 'No';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["biblioViewPictureHeader"]		= "\$text = 'Imagen de la Portada';";
$trans["biblioViewPictureContra"]		= "\$text = 'Imagen de la Contra Portada';";
$trans["biblioViewDigitalHeader"]		= "\$text = 'Archivo digital';";
$trans["biblioViewPictureAutor"]		= "\$text = 'Imagen del Autor';";
$trans["biblioViewPictureAutorNote"]		= "\$text = '<br/>Para que se genere automática la imagen <br/>para todos los libros del mismo autor<br/> el archivo debe llamarse igual que el autor';";
$trans["biblioViewDigitalNote"]			= "\$text = 'Nota: Se guardan en la carpeta: de manera local local /media/digitales. ';";
$trans["Are you sure to remove this picture?"]  = "\$text = '¿Desea eliminar esta imagen?';";
$trans["Remove"]				= "\$text = 'Eliminar';";
$trans["biblioViewPictureHeaderIsbn"]				= "\$text = 'Imagen buscada por ISBN desde Servidor Externo';";
$trans["biblioViewNoAddInfoIsbn"]				= "\$text = 'Se requiere ISBN y es Buscada en servidor externo, se recomienda en caso de aparecer, descargar e incorporar archivo, es mas rapido así';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************

$trans["biblioSearchNoResults"]    = "\$text = 'No se han encontrado registros.';";
$trans["biblioSearchResults"]      = "\$text = 'Resultados de la búsqueda';";
$trans["biblioSearchResultPages"]  = "\$text = 'Páginas de resultados';";
$trans["biblioSearchPrev"]         = "\$text = ' Anterior ';";
$trans["biblioSearchNext"]         = "\$text = ' Siguiente ';";
$trans["First"]         = "\$text = ' Primera ';";
$trans["Last"]         = "\$text = ' Final ';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) { \$text = '%items% resultado encontrado.'; } else { \$text = '%items% resultados encontrados.'; }";
$trans["biblioSearchAuthor"]       = "\$text = 'Autor';";
$trans["biblioSearchTitle"]        = "\$text = 'Título';";
$trans["biblioSearchTitleRemainder"] = "\$text = 'Subtitulo';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'ordenados por autor';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'ordenados por título';";
$trans["biblioSearchMaterial"]     = "\$text = 'Material';";
$trans["biblioSearchCollection"]   = "\$text = 'Colección';";
$trans["biblioSearchCall"]         = "\$text = 'Número de entrada';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Código de copia';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Estado';";
$trans["biblioSearchNoCopies"]     = "\$text = 'Ninguna copia disponible.';";
$trans["biblioSearchHold"]         = "\$text = 'mantener';";
$trans["biblioSearchOutIn"]        = "\$text = 'Revisar salidas/entradas';";
$trans["biblioSearchDetail"]       = "\$text = 'Mostrar información detallada de la Bibliografía';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Código de barras para comprobar o verificar en form';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Código de barras for hold form';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["PictDesc"]                 = "\$text = 'La imagen de la portada precisa estar localizada en la carpeta ..media/fotos/portadas.';";
$trans["biblioSearchFirst"]        = "\$text = 'primera';";
$trans["biblioSearchLast"]         = "\$text = 'última';";
$trans["biblioSearchDigitales"]       = "\$text = 'Descargar Archivo';";//jalg para descarga de matrials digitals

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Entrada para administradores';";
$trans["loginFormUsername"]        = "\$text = 'Nombre del usuario';";
$trans["loginFormPassword"]        = "\$text = 'Contraseña';";
$trans["loginFormLogin"]           = "\$text = 'Entrar';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Estás seguro de querer borrar esta solicitud de préstamo?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='La solicitud de préstamo se eliminó correctamente.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Ayuda de ESPABIBLIO 3.3';";
$trans["helpHeaderCloseWin"]       = "\$text='Cerrar ventana';";
$trans["helpHeaderContents"]       = "\$text='Contenidos';";
$trans["helpHeaderPrint"]          = "\$text='Imprimir';";
$trans["catalogResults"]           = "\$text='Resultados de búsqueda';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='Fecha actual:';";
$trans["headerDateFormat"]         = "\$text='M d, Y';";
$trans["headerLibraryHours"]       = "\$text='Horario de servicio:';";
$trans["headerLibraryAders"]       = "\$text='Dirección de la Biblioteca:';";//add jalg
$trans["headerLibraryPhone"]       = "\$text='Teléfono de la Biblioteca:';";
$trans["headerHome"]               = "\$text='Inicio';";
$trans["headerCirculation"]        = "\$text='Prestamos';";
$trans["headerCataloging"]         = "\$text='Catalogación';";
$trans["headerAdmin"]              = "\$text='Administración';";
$trans["headerReports"]            = "\$text='Reportes y estadísticas';";
$trans["headerOpac"]            = "\$text='Catálogo Público en Linea';";
$trans["headerInventory"]            = "\$text='Inventario';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
//agregado jalg joanlaga@hotmail.com
$trans["headerEstat"]              = "\$text=' Estadísticas ';";
$trans["headerList"]              = "\$text=' Listado General ';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]		= "\$text='Biblioteca Inicio';";
$trans["footerOPAC"]			= "\$text='Catálogo Público en Linea (OPAC)';";
$trans["footerHelp"]			= "\$text='Ayuda';";
$trans["Support"]			= "\$text='Soporte Técnico y novedades';";
$trans["footerPoweredBy"]		= "\$text='Con tecnologia de Openbiblio 7.1 y EspaBiblio \"Giordano Bruno\" V 3.41';";
$trans["footerDatabaseVersion"]		= "\$text='Versión de base de datos';";
$trans["footerCodeVersion"]		= "\$text='Versión del Código ';";
$trans["footerCopyright"]		= "\$text='Copyright';";
$trans["footerUnderThe"]		= "\$text='bajo';";
$trans["footerGPL"]			= "\$text='GNU General Public License';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
#*  Translation text for page advanced_search.php
#****************************************************************************
$trans["advsAdvancedSearch"]	= "\$text = 'Búsqueda avanzada';";
$trans["advsMaterialType"]	= "\$text = 'Tipo de material';"; 
$trans["advsCollectionType"]	= "\$text = 'Temática';";
$trans["advsSearch"]		= "\$text = 'Buscar';";
$trans["advsClear"]		= "\$text = 'Limpiar';";
$trans["advsPublishedYear"]	= "\$text = 'Año de publicación';";
$trans["advsLanguage"]		= "\$text = 'Idioma';";
$trans["optThai"]		= "\$text = 'Thailandés';";
$trans["optEnglish"]		= "\$text = 'Inglés';";
$trans["optFrench"]		= "\$text = 'Francés';";
$trans["optEspa"]		= "\$text = 'Español';";
$trans["cancel"]		= "\$text = 'Cancelar';";
$trans["or"]			= "\$text = 'o';";
$trans["any"]			= "\$text = 'Cualquiera';";
