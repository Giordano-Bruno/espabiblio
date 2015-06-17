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
$trans["biblioError1"]            = "\$text = 'Número de llamada requerido.';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = 'Campo requerido.';";
$trans["biblioFieldError2"]       = "\$text = 'La etiqueta debe ser numérica.';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["biblioFieldErrorPictureType"]             = "\$text = 'Este tipo de archivo no es la imagen (formatos si soportados jpeg, gif, png).';";
$trans["biblioFieldErrorPictureLoadFailed"]   = "\$text = 'No se pudo cargar información de la imagen.';";
$trans["biblioFieldErrorCoverLookupFailed"] = "\$text = 'Error al conectar con el servicio en linea de búsqueda de la cubierta.';";
$trans["biblioFieldErrorDuplicatedISBN"]       = "\$text = 'Esta ISBN ya está en uso,';";
$trans["biblioFieldViewExistingISBN"]            = "\$text = 'Ver elemento existente.';";
$trans["biblioFieldErrorDuplicatedTitle"]       = "\$text = 'Este título ya está en uso,';";
$trans["biblioFieldViewExistingTitle"]            = "\$text = 'Ver elemento existente o especificar ISBN.';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = 'Error al acceder a la información bibliográfica.';";
$trans["biblioQueryQueryErr2"]    = "\$text = 'Error al acceder al campo de información bibliográfica.';";
$trans["biblioQueryInsertErr1"]   = "\$text = 'Error al insertar nueva información bibliográfica.';";
$trans["biblioQueryInsertErr2"]   = "\$text = 'Error al insertar nuevo campo de información bibliográfica.';";
$trans["biblioQueryUpdateErr1"]   = "\$text = 'Error al actualizar la información bibliográfica.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = 'Error al limpiar el campo de información bibliográfica para actualizarlo.';";
$trans["biblioQueryDeleteErr"]    = "\$text = 'Error al borrar la información bibliográfica.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = 'Error al contar los resultados de búsqueda bibliográfica.';";
$trans["biblioSearchQueryErr2"]   = "\$text = 'Error al buscar información bibliográfica.';";
$trans["biblioSearchQueryErr3"]   = "\$text = 'Error al leer la información bibliográfica.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = 'Código  requerido.';";
$trans["biblioCopyError2"]        = "\$text = 'El código debe ser totalmente alfabético y/o numérico.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = 'Error al comprobar el código de barras.';";
$trans["biblioCopyQueryErr2"]     = "\$text = 'El código de barras %barcodeNmbr% ya está en uso.';";
$trans["biblioCopyQueryErr3"]     = "\$text = 'Error al insertar nueva copia de la información bibliográfica.';";
$trans["biblioCopyQueryErr4"]     = "\$text = 'Error al acceder a la copia de la información bibliográfica.';";
$trans["biblioCopyQueryErr5"]     = "\$text = 'Error al actualizar la copia de información bibliográfica.';";
$trans["biblioCopyQueryErr6"]     = "\$text = 'Error al borrar la información bibliográfica.';";
$trans["biblioCopyQueryErr7"]     = "\$text = 'Error al acceder a la información bibliográfica para obtener el código de la colección.';";
$trans["biblioCopyQueryErr8"]     = "\$text = 'Error al acceder a la información de la colección para comprobar la fecha de devolución.';";
$trans["biblioCopyQueryErr9"]     = "\$text = 'Ocurrió un error al registrar las copias';";
$trans["biblioCopyQueryErr10"]    = "\$text = 'Ocurrió un error al comprobar los límites de préstamo';";
$trans["biblioCopyQueryErr11"]    = "\$text = 'Error de obtención en la identificación de la Copia.';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = 'Error al leer de un campo de la bibliografía.';";
$trans["biblioFieldQueryErr2"]    = "\$text = 'Error de lectura de los campos de bibliografía.';";
$trans["biblioFieldQueryInsertErr"] = "\$text = 'Error al insertar campo de nueva bibliografía.';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = 'Error al actualizar el campo de la bibliografía.';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = 'Error eliminar la bibliografía de campo.';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = 'Error al acceder a los datos del bloque marc.';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = 'Error al acceder a la etiqueta de datos marc.';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = 'Error al acceder al subcampo de datos marc.';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = 'Error al acceder a los datos de préstamo por parte de la identificación bibliográfica.';";
$trans["biblioHoldQueryErr2"]     = "\$text = 'Error al acceder a los datos de préstamo por parte de el socio.';";
$trans["biblioHoldQueryErr3"]     = "\$text = 'Error al obtener identificación bibliográfica e identificación de copia para realizar una solicitud de préstamo.';";
$trans["biblioHoldQueryErr4"]     = "\$text = 'Error al insertar los datos de préstamo.';";
$trans["biblioHoldQueryErr5"]     = "\$text = 'Error al borrar los datos de préstamo.';";
$trans["biblioHoldQueryErr6"]     = "\$text = 'Error al obtener el socio que ha realizado la reserva para hacer una copia.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = 'Error al llevar a cabo el informe.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = 'Un valor no numérico no es válido en una columna numérica.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = 'Formato de fecha y hora no válido.';";
$trans["reportCriteriaDateErr"]   = "\$text = 'Formato de fecha no válido.';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = 'Tipo de fuente no válido  xml.  Los tipos de fuente válidos son Courier, Helvetica, y Times-Roman.';";
$trans["labelFormatFontSizeErr"]  = "\$text = 'Tamaño de fuente no válido  xml.  El tamaño de la fuente debe ser numérico.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Tamaño de fuente no válido  xml.  El tamaño de la fuente debe ser mayor de cero.';";
$trans["labelFormatLMarginErr"]   = "\$text = 'Margen izquierdo no válido  xml.  El margen izquierdo debe ser numérico.';";
$trans["labelFormatLMarginErr2"]  = "\$text = 'Margen izquierdo no válido  xml.  El margen izquierdo debe ser mayor de cero.';";
$trans["labelFormatRMarginErr"]   = "\$text = 'Margen derecho no válido  xml.  El margen derecho debe ser numérico.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Margen derecho no válido  xml.  El margen derecho debe ser mayor de cero.';";
$trans["labelFormatTMarginErr"]   = "\$text = 'Margen superior no válido  xml.  El margen superior debe ser numérico.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Margen superior no válido  xml.  El margen superior debe ser mayor de cero.';";
$trans["labelFormatBMarginErr"]   = "\$text = 'Margen inferior no válido  xml.  El margen inferior debe ser numérico.';";
$trans["labelFormatBMarginErr2"]  = "\$text = 'Margen inferior no válido  xml.  El margen inferior debe ser mayor de cero.';";
$trans["labelFormatColErr"]       = "\$text = 'Columnas no válidas xml.  Las columnas deben ser numéricas.';";
$trans["labelFormatColErr2"]      = "\$text = 'Columnas no válidas xml.  Las columnas deben ser mayores de cero.';";
$trans["labelFormatWidthErr"]     = "\$text = 'Ancho de página no válido xml.  El ancho de página debe ser numérico.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Ancho de página no válido xml.  El ancho de página debe ser mayor de cero.';";
$trans["labelFormatHeightErr"]    = "\$text = 'Altura de página no válida xml.  La altura de página debe ser numérica.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Altura de página no válida xml.  La altura de página debe ser mayor de cero.';";
$trans["labelFormatNoLabelsErr"]  = "\$text = 'Líneas no válidas xml.';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = 'Error al obtener el estado del historial bibliográfico.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Error al obtener el estado del historial bibliográfico por parte del socio';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Error al insertar el estado del historial bibliográfico';";
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Error al borrar el estado del historial';";
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Error al borrar el estado del historial bibliográfico por parte de un socio';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = 'Cantidad requerida.';";
$trans["memberAccountTransError2"]  = "\$text = 'La cantidad debe ser numérica.';";
$trans["memberAccountTransError3"]  = "\$text = 'La descripción es requerida.';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = 'Error al acceder a la información de la cuenta del socio.';";
$trans["memberAccountQueryErr2"]    = "\$text = 'Error al insertar la información de la cuenta del socio.';";
$trans["memberAccountQueryErr3"]    = "\$text = 'Error al borrar la información de la cuenta del socio.';";



#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
#*  Translation text for class CSV error
#****************************************************************************
$trans["CSVErrorInvalidFile"]                   = "\$text = 'inválido para subir archivos.';";
$trans["CSVErrorInvalidFileFormat"]       = "\$text = 'formato de archivo no válido.';";
$trans["CSVErrorOversized"]                   = "\$text = 'límite de tamaño máximo.';";
$trans["CSVErrorReadFile"]                      = "\$text = 'no puede abrir los archivos subidos.';";
$trans["CSVErrorMissingHeader"]           = "\$text = 'Falta de encabezados (primer fila)';";
$trans["CSVErrorIncorrectHeader"]           = "\$text = 'encabezado incorrecto';";
$trans["CSVErrorInvalidData"]           = "\$text = 'No válido iniciar el formato CSV con la línea %line%';";
$trans["CSVErrorMissingRequireField"] = "\$text = 'Se omitieron los campos requeridos (ISBN, Autor, título.) En la linea %line%';";
