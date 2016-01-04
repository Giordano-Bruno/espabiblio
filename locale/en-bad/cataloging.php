<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.


* jalg 2012  se agregaron variables para corregir traducción en la ficha de administración de biblioteca. días 
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
$trans["catalogSubmit"]		= "\$text = 'Enviar';";
$trans["catalogCancel"]		= "\$text = 'Cancelar';";
$trans["catalogRefresh"]	= "\$text = 'Actualizar';";
$trans["catalogDelete"]		= "\$text = 'Borrar';";
$trans["catalogFootnote"]	= "\$text = 'Los campos marcados con %symbol% son requeridos.';";
$trans["AnswerYes"]		= "\$text = 'Si';";
$trans["AnswerNo"]		= "\$text = 'No';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]		= "\$text = 'Catalogación';";
$trans["indexBarcodeHdr"]	= "\$text = 'Buscar bibliografía por código de barras';";
$trans["indexBarcodeField"]	= "\$text = 'Código de barras';";
$trans["indexSearchHdr"]	= "\$text = 'Buscar bibliografía por frase de búsqueda';";
$trans["indexKeyword"]		= "\$text = 'Palabra clave';";
$trans["indexTitle"]		= "\$text = 'Título';";
$trans["indexAuthor"]		= "\$text = 'Autor';";
$trans["indexSubject"]		= "\$text = 'Resumen';";
$trans["indexButton"]		= "\$text = 'Buscar';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["indexISBN"]		= "\$text = 'ISBN';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]		= "\$text = 'Bibliografía';";
$trans["biblioFieldsMaterialTyp"]	= "\$text = 'Tipo de material';";
$trans["biblioFieldsCollection"]	= "\$text = 'Colección';";
$trans["biblioFieldsCallNmbr"]		= "\$text = 'Número de entrada';";
$trans["biblioFieldsUsmarcFields"]	= "\$text = 'Campos USMarc';";
$trans["biblioFieldsOpacFlg"]		= "\$text = 'Mostrar en OPAC';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["pictureDescription"]		= "\$text = 'Las imagenes deben de estar localizadas en la carpeta /media.';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]	= "\$text = 'Añadir nuevo';";
$trans["biblioNewSuccess"]		= "\$text = 'La siguiente nueva bibliografía ha sido creada. Para añadir una copia, seleccione \"Nueva copia\" a la izquierda o \"añadir nueva copia\" en la información de mas abajo.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]	= "\$text = 'Registros de Datos de libro actualizados correctamente.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]	= "\$text = 'Añadir nueva copia';";
$trans["biblioCopyNewBarcode"]		= "\$text = 'Código de barras';";
$trans["biblioCopyNewDesc"]		= "\$text = 'Descripción';";
$trans["biblioCopyNewAuto"]		= "\$text = 'Auto generar';";
$trans["biblioCopyNewValidBarco"]	= "\$text = 'Validación para impresión';";
$trans["biblioCopyEditFormLabel"]	= "\$text = 'Editar copia';";
$trans["biblioCopyEditFormStatus"]	= "\$text = 'Estado';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["PictDesc"]					= "\$text = 'La imagen de la portada precisa estar localizada en la carpeta ./media/cover/';";
$trans["PictDescContra"]			= "\$text = 'La imagen de la Contraportada precisa estar localizada en la carpeta ./media/contraportadas/.';";
$trans["FileDescDigi"]				= "\$text = 'Los materiales digitales deben estar en la carpeta, libros  ./media/digitales/.';";
$trans["FileDescAutor"]				= "\$text = 'Los materiales digitales deben estar en la carpeta, libros  ./media/autor/.';";
$trans["FileDescDigiNota"]			= "\$text = 'No modificar, es automático.';";
$trans["FileDescNota"]				= "\$text = 'Si el archivo de autor tiene es (apellido, nombre.jpg) y en la base se respeta este formato se despliegan solo';";
$trans["FileDescNota2"]				= "\$text = 'Solo acepta para imágenes jpg, tif, png';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]		= "\$text = 'Copia creada correctamente.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"] = "\$text = 'Copia actualizada correctamente.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"]	= "\$text = 'No se pudo borrar la copia. La copia debe estar registrada antes de que pueda ser borrada.';";
$trans["biblioCopyDelConfirmMsg"]	= "\$text = 'Estás seguro de que quieres borrar la copia con el código de barras %barcodeNmbr%? Esto también borrará todos los cambios en el estado del historial de esta copia.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]		= "\$text = 'Copia con código de barras %barcode% borrada correctamente.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"]		= "\$text = 'Añadir nuevo campo MARC';";
$trans["biblioMarcListHdr"]				= "\$text = 'Información del campo MARC';";
$trans["biblioMarcListTbleCol1"]		= "\$text = 'Función';";
$trans["biblioMarcListTbleCol2"]		= "\$text = 'Etiqueta';";
$trans["biblioMarcListTbleCol3"]		= "\$text = 'Descripción de la etiqueta';";
$trans["biblioMarcListTbleCol4"]		= "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]		= "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]		= "\$text = 'Subcampo';";
$trans["biblioMarcListTbleCol7"]		= "\$text = 'Descripción del subcampo';";
$trans["biblioMarcListTbleCol8"]		= "\$text = 'Datos del campo';";
$trans["biblioMarcListNoRows"]			= "\$text = 'No se encontraron campos MARC.';";
$trans["biblioMarcListEdit"]			= "\$text = 'editar';";
$trans["biblioMarcListDel"]				= "\$text = 'Eliminar';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]		= "\$text = 'Selector de campos MARC';";
$trans["usmarcSelectInst"]		= "\$text = 'Seleccione un tipo de campo';";
$trans["usmarcSelectNoTags"]	= "\$text = 'No se encontraron etiquetas.';";
$trans["usmarcSelectUse"]		= "\$text = 'uso';";
$trans["usmarcCloseWindow"]		= "\$text = 'Cerrar Ventana';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]		= "\$text = 'Añadir nuevo campo MARC';";
$trans["biblioMarcNewFormTag"]		= "\$text = 'Etiqueta';";
$trans["biblioMarcNewFormSubfld"]	= "\$text = 'Subcampo';";
$trans["biblioMarcNewFormData"]		= "\$text = 'Datos del campo';";
$trans["biblioMarcNewFormInd1"]		= "\$text = 'Indicador 1';";
$trans["biblioMarcNewFormInd2"]		= "\$text = 'Indicador 2';";
$trans["biblioMarcNewFormSelect"]	= "\$text = 'Seleccionar';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"] = "\$text = 'Campo MARC añadido correctamente.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"] = "\$text = 'Editar campo MARC';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"] = "\$text = 'Campo MARC actualizado correctamente.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"] = "\$text = 'Estás seguro de que quieres borrar el campo con etiqueta %tag% y el subcampo %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"] = "\$text = 'Campo MARC borrado correctamente.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]		= "\$text = 'Esta bibliografía tiene copia(s) %copyCount% y solicitudes de préstamo %holdCount%. Por favor borre estas copias y/o peticiones de uso antes de borrar esta bibliografía.';";
$trans["biblioDelConfirmReturn"]	= "\$text = 'volver a la información bibliográfica';";
$trans["biblioDelConfirmMsg"]		= "\$text = 'Estás seguro de que quieres borrar la bibliografía titulada %title%?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]		= "\$text = 'La bibliografía (Copia), %title%, ha sido borrada.';";
$trans["biblioDelReturn"]	= "\$text = 'volver a la búsqueda bibliográfica';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]		= "\$text = 'Solicitudes de préstamos de la bibliografía:';";
$trans["biblioHoldListNoHolds"]		= "\$text = 'Actualmente no hay copias del registro en uso.';";
$trans["biblioHoldListHdr1"]		= "\$text = 'Función';";
$trans["biblioHoldListHdr2"]		= "\$text = 'Copia';";
$trans["biblioHoldListHdr3"]		= "\$text = 'Prestado';";
$trans["biblioHoldListHdr4"]		= "\$text = 'Socio';";
$trans["biblioHoldListHdr5"]		= "\$text = 'Estado';";
$trans["biblioHoldListHdr6"]		= "\$text = 'Fecha de devolución';";
$trans["biblioHoldListdel"]			= "\$text = 'Eliminar';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"] = "\$text = 'No tienes permiso de catalogación';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]				= "\$text = 'Prueba de importación';";
$trans["MarcUploadTestTrue"]			= "\$text = 'Verdadero';";
$trans["MarcUploadTestFalse"]			= "\$text = 'Falso';";
$trans["MarcUploadTestFileUpload"]		= "\$text = 'Entrada de archivo USMarc';";
$trans["MarcUploadRecordsUploaded"]		= "\$text = 'Registros transferidos';";
$trans["MarcUploadMarcRecord"]			= "\$text = 'Registros MARC';";
$trans["MarcUploadTag"]					= "\$text = 'Etiqueta';";
$trans["MarcUploadSubfield"]			= "\$text = 'Sub';";
$trans["MarcUploadData"]				= "\$text = 'Datos';";
$trans["MarcUploadRawData"]				= "\$text = 'Datos en bruto:';";
$trans["UploadFile"]					= "\$text = 'Cargar Archivo Almacenado';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["MarcSizeLimitNotes"]			= "\$text = '<strong>Nota:</strong> Recomendamos el tamaño del archivo menor de 10 MB. Archivos mas grandes de registros MARC puede provocar errores al analizar los datos .';";
$trans["MarcUploadEncoding"]			= "\$text = 'codificación de caracteres';";
$trans["MarcUploadNoRows"]				= "\$text = 'No hay filas para agregar';";
$trans["MarcUploadNoRowsDesc"]			= "\$text = 'Pruebe con otra codificación de caracteres cuando carga registros MARC. <a href=\"./upload_usmarc_form.php\">Intentar de nuevo</a>.';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]		= "\$text = 'EspaBiblio, OpenBiblio 7.1';";
$trans["Copyright"]			= "\$text = 'Copyright &copy; 2005';";
$trans["underthe"]			= "\$text = 'bajo';";
$trans["GNU"]				= "\$text = 'Licencia Publica General (GNU)';";
$trans["catalogResults"]	= "\$text = 'Resultados de búsqueda';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
 #* Translation text for Library of Congress SRU module
 #****************************************************************************
 $trans['locsru_Instructions']		= "\$text = 'Consulte datos ingresando Titulo, Autor o ISBN';";
 $trans['locsru_detalle']			= "\$text = 'Permite al usuario recuperar la información de la Biblioteca del Congreso utilizando SRU (Search Retrival URL), que devuelve un formulario XML.';";
 $trans['locsru_Search']			= "\$text = 'Buscar en la Biblioteca del Congreso de los USA';";
 $trans['locsru_Title']				= "\$text = 'Titulo';";
 $trans['locsru_Author']			= "\$text = 'Autor';";
 $trans['locsru_ISBN']				= "\$text = 'ISBN';";
 $trans['locsru_Publication']		= "\$text = 'Publicación';";
 $trans['locsru_Publisher']			= "\$text = 'Editorial';";
 $trans['locsru_PublicationDate']	= "\$text = 'Fecha de Publicación';";
 $trans['locsru_UseThis']			= "\$text = 'Utilizar';";
 $trans['Search']					= "\$text = 'Buscar';";

#****************************************************************************
#* Translation text for page lookup_form.php
#****************************************************************************
$trans["lookup_z3950Search"]		= "\$text = 'Búsquedas via Z39.50';";
$trans["lookup_isbn"]			= "\$text = 'ISBN';";
$trans["lookup_issn"]			= "\$text = 'ISSN';";
$trans["lookup_lccn"]			= "\$text = 'LCCN';";
$trans["lookup_title"]			= "\$text = 'Titulo';";
$trans["lookup_author"]			= "\$text = 'Autor';";
$trans["lookup_keyword"]		= "\$text = 'Cualesquiera palabras clave';";
$trans["lookup_publisher"]		= "\$text = 'nombre del Editor';";
$trans["lookup_pubLoc"]			= "\$text = 'Lugar de publicación';";
$trans["lookup_pubDate"]		= "\$text = 'Fecha de publicación';";
$trans["lookup_andOpt"]			= "\$text = 'y (opcional)';";
$trans["lookup_search"]			= "\$text = 'Buscar';";
$trans["lookup_repository"]		= "\$text = 'Repositorio';";
$trans["lookup_yazSetupFailed"]		= "\$text = 'Ajustes de YAZ fallaron para le Servidor Z39.50 : !';";
$trans["lookup_badQuery"]		= "\$text = 'Fallos de consulta';";
$trans["lookup_patience"]		= "\$text = 'Por favor sea paciente. esto puede tomar un tiempo.';";
$trans["lookup_resetInstr"]		= "\$text = 'después de 50 segundos. Presione F5, para intentar de nuevo o revise Prerequisitos YAZ en la sección de Léame en la pestaña inicio.';";
$trans["lookup_goBack"]			= "\$text = 'regresar';";
$trans["lookup_abandon"]		= "\$text = 'detener búsqueda';";
$trans["lookup_yazError"]		= "\$text = 'búsqueda YAZ Error: ';";
$trans["lookup_nothingFound"]		= "\$text = 'No se encontró nada para ';";
$trans["lookup_tooManyHits"]		= "\$text = 'Demasiados registros para mostrar, ';";
$trans["lookup_refineSearch"]		= "\$text = 'Por favor refine su búsqueda e inténtelo de nuevo.';";
$trans["lookup_noResponse"]		= "\$text = 'No se pudo obtener respuesta del servidor.';";
$trans["lookup_success"]		= "\$text = 'REALIZADO! Z39.50 la búsqueda de datos se muestra a continuación!';";
$trans["lookup_hits"]			= "\$text = ' Registros , Seleccione uno.';";
$trans["lookup_callNmbrType"]		= "\$text = 'Su (callNmbrType) es invalido!';";
$trans['lookup_useThis']		= "\$text = 'este es uno';";
$trans['lookup_searchError']		= "\$text = 'ERROR DE BÚSQUEDA: Envíe esto al administrador del sistema: ';";
$trans["lookup_EmptyKeyword"]		= "\$text = 'Por favor, especifique algunas palabras clave.';";
 
#****************************************************************************
#* Translation text for page csv_import.php, csv_export.php
#****************************************************************************
$trans["CSVImport"]			= "\$text = 'Importar Bibliografías desde Archivo CSV';";
$trans["CSVImportSuccess"]		= "\$text = 'Todos los artículos que se han procesado!';";
$trans["CSVImportStatus"]		= "\$text = 'hecho: %done%, Copia: %copy%, fallos: %failed%';";
$trans["CSVImportContinue"]		= "\$text = 'continuar las importaciones';";
$trans["CSVImportSizeLimitNotes"]	= "\$text = '<strong>Nota:</strong> Tamaño de los Archivos recomendado debe ser inferior a 10 MB. Para el archivo de gran tamaño puede dividirse en varios archivos antes de subirlos .';";
$trans["CSVLabel"]			= "\$text = 'Seleccionar el archivo CSV (use <a href=\"csv_template.csv\">archivo de plantilla</a>, Para más información ver <a href=\"javascript:popSecondary(\'../shared/help.php?page=CsvImport\')\">Ayuda</a>):';";
$trans["CSVImportHeader"]		= "\$text = 'Importar bibliografía desde de un archivo CSV.';";

#****************************************************************************
#* Translation text for page Cover o portadas
#****************************************************************************
$trans["Defaults:"]					= "\$text = 'por defecto:';";
$trans["Are you sure to remove this picture?"]		= "\$text = '¿Estás seguro de eliminar esta imagen?';";
$trans["Remove this picture"]				= "\$text = 'Quitar esta imagen';";
$trans["No bibliography picture?"]			= "\$text = 'No hay imagen de la bibliografía?';";
$trans["search for this one"]				= "\$text = 'búsqueda de para este';";
$trans["coverLookupWait"]				= "\$text = 'Buscando ahora, por favor espere..';";
$trans["coverLookupNotFound"]				= "\$text = 'Portada del libro no se encuentra!';";
$trans["coverLookupISBNInvalid"]			= "\$text = 'ISBN formato no es válido.';";
$trans["Found"]						= "\$text = 'Encontrado';";
$trans["Save"]						= "\$text = 'Guardar';";
$trans["Cancel"]					= "\$text = 'Cancelar';";
$trans["coverLookupSelect"]				= "\$text = ' Usar esta imagen (dejar sin revisar para cancelar).';";
$trans["This biblio's cover image has been removed."]	= "\$text = 'Esta portada se ha eliminado.';";

#****************************************************************************
#* Translation text for BulkLookup.php
#****************************************************************************
$trans["Import"]			= "\$text = 'Importar';";
$trans["lookup_bulkNotes"]		= "\$text = 'Seleccione el archivo que contiene la lista de ISBN (uno por línea, en formato plano o txt, UTF.8), (se requiere soporte YAZ, ver informacion de prerequisitos )';";
$trans["lookup_bulkQueue"]		= "\$text = 'Todos los artículos han sido añadidos!';";
$trans["lookup_bulkStatusHead"]		= "\$text = '<span>estado:</span> <span style=\"color:blue; padding: 3px 0\">Actualizar cada 10 segundos</span>';";
$trans["lookup_bulkProceed"]		= "\$text = 'Todos los artículos se han procesado!';";
$trans["lookup_bulkCont"]		= "\$text = 'continuar importación';";
$trans["lookup_bulkViewFailed"]		= "\$text = 'ver artículos con fallos';";
$trans["lookup_bulkStatusError"]	= "\$text = 'Ha ocurrido un error, pulsa F5 para refrescar la página.';";
$trans["lookup_bulkStatus"]		= "\$text = 'Última actualización: %updated% (%estimate%)<br />
estado del cronometro: %cron_status%<br />
Remanentes: %remain% (%trying% trying)<br />
Echo: %done% (%covered% covered), Copiado: %copied%<br />
Fallidos: %failed%';";

//No hosts found, import always be in the failed list. agregar a locle en
$trans["lookup_HostFail"]		= "\$text = 'No hay servidores seleccionados, por lo que fallara la importación de la lista';";

#****************************************************************************
#* Translation text for cdu.php
#****************************************************************************
$trans["cduitemSearchResults"]	= "\$text = 'Registro';";
$trans["cduindexHeading"]			= "\$text = 'Buscador de claves Clasificación Decimal Universal o CDU (Ver 1.0) basado en AENOR/ESPAÑA.';";
$trans["cduindexName"]				= "\$text = 'Buscar por palabra dentro del campo de la descripción';";
$trans["cduindexNameHdr"]			= "\$text = 'Clasificación Decimal Universal';";
$trans["cduindexSearch"]			= "\$text = 'Buscar';";
$trans["cduindexCardHdr"]			= "\$text = 'Buscar por numero dentro del campo de Números CDU';";
$trans["CduNum"]						= "\$text = 'Numero CDU';";
$trans["cdusearchFoundResults"]	= "\$text = ' Registros encontrados';";
$trans["cdusearchprev"]				= "\$text = ' Pagina Previa';";
$trans["cdusearchnext"]				= "\$text = ' pagina Siguiente';";
$trans["Cdu_Numero"]					= "\$text = 'Numero';";
$trans["Cdu_Descripcion"]			= "\$text = 'Descripción';";
$trans["Cdu_Clave"]					= "\$text = 'Clave';";
$trans["Cdu_Table"]					= "\$text = 'Sumario';";
$trans["cduBidSearchResults"]		= "\$text = 'Registro';";
$trans["cdditemSearchResults"]	= "\$text = 'Registro';";
$trans["cduOtra"]						= "\$text = 'Nueva Búsqueda CDU';";
$trans["cddindexHeading"]			= "\$text = 'Buscador de claves Clasificación Decimal Dewey o CDD (Ver 1.0).';";
$trans["cddindexName"]				= "\$text = 'Buscar por palabra dentro del campo de la descripción';";
$trans["cddindexNameHdr"]			= "\$text = 'Clasificación Decimal Dewey';";
$trans["cddindexSearch"]			= "\$text = 'Buscar';";
$trans["cddindexCardHdr"]			= "\$text = 'Buscar por numero dentro del campo de Números CDD';";
$trans["CddNum"]						= "\$text = 'Numero CDD';";
$trans["cddsearchFoundResults"]	= "\$text = ' Registros encontrados';";
$trans["cddsearchprev"]				= "\$text = ' Pagina Previa';";
$trans["cddsearchnext"]				= "\$text = ' pagina Siguiente';";
$trans["Cdd_Numero"]					= "\$text = 'Numero';";
$trans["Cdd_Descripcion"]			= "\$text = 'Descripción';";
$trans["Cdd_Clave"]					= "\$text = 'Clave';";
$trans["Cdd_Table"]					= "\$text = 'Sumario';";
$trans["cddBidSearchResults"]		= "\$text = 'Registro';";
$trans["cddOtra"]						= "\$text = 'Nueva Búsqueda CDD';";
$trans["ibicitemSearchResults"]	= "\$text = 'Registro';";
$trans["ibicindexHeading"]			= "\$text = 'Buscador de claves Clasificación IBIC [International Book Industry Categories] (Ver 1.0).';";
$trans["ibicindexName"]				= "\$text = 'Buscar por palabra dentro del campo de la descripción';";
$trans["ibicindexNameHdr"]			= "\$text = 'IBIC [International Book Industry Categories]';";
$trans["ibicindexSearch"]			= "\$text = 'Buscar';";
$trans["ibicindexCardHdr"]			= "\$text = 'Buscar por numero dentro del campo de Números IBIC';";
$trans["IbicNum"]						= "\$text = 'Numero IBIC';";
$trans["ibicsearchFoundResults"]	= "\$text = ' Registros encontrados';";
$trans["ibicsearchprev"]			= "\$text = ' Pagina Previa';";
$trans["ibicsearchnext"]			= "\$text = ' pagina Siguiente';";
$trans["Ibic_Numero"]				= "\$text = 'Numero';";
$trans["Ibic_Descripcion"]			= "\$text = 'Descripción';";
$trans["Ibic_Clave"]					= "\$text = 'Clave';";
$trans["Ibic_Table"]					= "\$text = 'Sumario';";
$trans["ibicBidSearchResults"]	= "\$text = 'Registro';";
$trans["ibicOtra"]					= "\$text = 'Nueva Búsqueda IBIC';";
