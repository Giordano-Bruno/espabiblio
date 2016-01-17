<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
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
$trans["catalogSubmit"]            = "\$text = 'Submit';";
$trans["catalogCancel"]            = "\$text = 'Cancel';";
$trans["catalogRefresh"]           = "\$text = 'Refresh';";
$trans["catalogDelete"]            = "\$text = 'Delete';";
$trans["catalogFootnote"]          = "\$text = 'Fields marked with %symbol% are required.';";
$trans["AnswerYes"]                = "\$text = 'Yes';";
$trans["AnswerNo"]                 = "\$text = 'No';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Cataloging';";
$trans["indexBarcodeHdr"]          = "\$text = 'Search Bibliography by Barcode Number';";
$trans["indexBarcodeField"]        = "\$text = 'Barcode Number';";
$trans["indexSearchHdr"]           = "\$text = 'Search Bibliography by Search Phrase';";
$trans["indexKeyword"]             = "\$text = 'Keyword';";
$trans["indexTitle"]               = "\$text = 'Title';";
$trans["indexAuthor"]              = "\$text = 'Author';";
$trans["indexSubject"]             = "\$text = 'Subject';";
$trans["indexButton"]              = "\$text = 'Search';";
$trans["indexISBN"]                = "\$text = 'ISBN';";


#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = 'Bibliography';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'Type of Material';";
$trans["biblioFieldsStatus"]			= "\$text='Status  Material';";
$trans["biblioFieldsCollection"]   = "\$text = 'Collection';";
$trans["biblioFieldsCallNmbr"]     = "\$text = 'Call Number';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'USMarc Fields';";
$trans["biblioFieldsNote6"]			= "\$text='No change is automatic.';";
$trans["biblioFieldsNote5"]			= "\$text='The archives of digital materials will be stored in the folder';";
$trans["biblioFieldsNote4"]			= "\$text='To work mode LOCALHOST not move here to put CLOUD link address (link) including server mode.';";
$trans["biblioFieldsNote3"]			= "\$text='The image file of the Home (cover) can appear without defining beforehand, this is being sought on external server by ISBN (in which case it is recommended to download and save the picture) they can also be sought in AMAZONE but requires registration, the downloaded images are stored in the address specified in cloud mode or folder';";
$trans["biblioFieldsNote2"]			= "\$text='The file of the author's image is saved in the folder ./media/autores/';";
$trans["biblioFieldsNote1"]			= "\$text='If the image file of the author, has the same name as the database or (Last, First) and base this format is respected, other books image to be deployed author.';";
$trans["biblioFieldsPictureDigiUp"]			= "\$text='Fields Picture Digi Up';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["biblioFieldFile"]		= "\$text = '
Los archivos de imágenes y materiales digitales pueden ser ubicados de dos formas localhos o nube (sirve para jalar archivos de otras bibliotecas):</br>
<li>modo: localhost es en el mismo servidor que el de los archivos php. Y deben de estar localizadas en la carpeta /media y basta seleccionar </br>
con el botón el archivo y este se subirá los archivos ahí </li>
<li>modo: nube es otro servidor diferente al que contiene los php. en tal caso escribir la ruta completa servidor y nombre del archivo para generar el link. Ejemplo:</li>
       www.servidor.com/descargas/milibro.jpg </li>
      Ya que en este caso no se puede subir los desde el espabiblio.</li>
<li>      Solo se acepta para imágenes de autores y portadas los formatos .jpg, .png, .gif </li>
<li>      Para el caso de material digital podran ser en cualquier formato</br></li>
<li>      Usted puede quitar los indices de los campos MARC comentado las lineas 81 y 88 en el archivo  /catalog/inputFuncs.php</li>
<li>      Usted puede modicar esta pagina, agregando o quitando campos de uso frecuente, en el archivo /catalog/biblio_fields.php</li>
para determinar que campos se quitan o se agregan es necesario conocer los indices de los descritores MARC</br> 
 usted puede revisar para esto los archivos contenidos en:</br> 
/var/www/html/espa33/locale/es/sql/GB-0.33/MARC (en español, para otro idioma use otra carpeta dentro de locale).
<li>Para campos MARC menos frecuentes usted puede usar el menu de Editar-MARC el solo aparece en el uso de edicion Basica de esta pagina. </li>
<li>Pero si son muchos recomendamos el uso del menu Subir datos Marc.</br>
';";
$trans["biblioFieldsNote1"]		= "\$text = 'Si el archivo de la imagen del autor, tiene el nombre igual al de la base de datos o (apellido, nombre) y en la base se respeta este formato, se desplegara la imagen para otros libros mismo autor.';";
$trans["biblioFieldsNote2"]					= "\$text = 'El archivo de la imagen del autor se guardara en la carpeta ./media/autores/ ';";
$trans["biblioFieldsNote3"]			= "\$text = '
El archivo de la imagen de la Portada (cover) puede aparecer sin que se definiera de manera previa, esto es por que es buscada en servidor externo mediante ISBN (en tal caso se recomienda descargar la imagen y guardarla ),</br>
 también pueden ser buscadas en AMAZONE pero requiere registro, las imágenes descargadas son guardadas en la dirección especificada en modo nube o en la carpeta ';";
$trans["biblioFieldsNote4"]				= "\$text = ' Para trabajar en modo LOCALHOST no mover aquí, para modo NUBE poner dirección del enlace (link) incluido servidor.';";
$trans["biblioFieldsNote5"]				= "\$text = 'Los archivos de materiales digitales se guardaran  en la carpeta ';";
$trans["biblioFieldsNote6"]			= "\$text = 'No modificar, es automático.';";
$trans["biblioFieldsPictureAutorUp"]			= "\$text='Fields Picture Autor Up';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'Show in OPAC';";
$trans["PictDesc"]                 = "\$text = 'Image files must be located in the openbiblio/pictures directory.';";
$trans["pictureDescription"]       = "\$text = 'Image files must be located in the openbiblio/pictures directory.';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = 'Add New';";
$trans["biblioNewSuccess"]         = "\$text = 'The following new bibliography has been created.  To add a copy, select \"New Copy\" from the left hand navigation or \"Add New Copy\" from the copy information below.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = 'Bibliography successfully updated.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = 'Add New Copy';";
$trans["biblioCopyNewBarcode"]     = "\$text = 'Barcode Number';";
$trans["biblioCopyNewDesc"]        = "\$text = 'Description';";
$trans["biblioCopyNewAuto"]        = "\$text = 'Autogenerate';";
$trans["biblioCopyNewValidBarco"]  = "\$text = 'Validate for printing';";
$trans["biblioCopyEditFormLabel"]  = "\$text = 'Edit Copy';";
$trans["biblioCopyEditFormStatus"] = "\$text = 'Status';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = 'Copy successfully created.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = 'Copy successfully updated.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'Could not delete copy.  A copy must be checked in before it can be deleted.';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Are you sure you want to delete the copy with barcode %barcodeNmbr%?  This will also delete all status change history for this copy.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = 'Copy with barcode %barcode% was successfully deleted.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'Add New MARC Field';";
$trans["biblioMarcListHdr"]        = "\$text = 'MARC Field Information';";
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Function';";
$trans["biblioMarcListTbleCol2"]   = "\$text = 'Tag';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Tag Description';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Subfld';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Subfield Description';";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Field Data';";
$trans["biblioMarcListNoRows"]     = "\$text = 'No MARC fields found.';";
$trans["biblioMarcListEdit"]       = "\$text = 'edit';";
$trans["biblioMarcListDel"]        = "\$text = 'del';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'MARC Field Selector';";
$trans["usmarcSelectInst"]         = "\$text = 'Select a field type';";
$trans["usmarcSelectNoTags"]       = "\$text = 'No tags found.';";
$trans["usmarcSelectUse"]          = "\$text = 'use';";
$trans["usmarcCloseWindow"]        = "\$text = 'Close Window';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'Add New Marc Field';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'Tag';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Subfield';";
$trans["biblioMarcNewFormData"]    = "\$text = 'Field Data';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Indicator 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Indicator 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'Select';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Marc field successfully added.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Edit Marc Field';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Marc field successfully updated.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Are you sure you want to delete the field with tag %tag% and subfield %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Marc field successfully deleted.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = 'This bibliography has %copyCount% copy(ies) and %holdCount% hold request(s).  Please delete these copies and/or hold requests before deleting this bibliography.';";
$trans["biblioDelConfirmReturn"]   = "\$text = 'return to bibliography information';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'Are you sure you want to delete the bibliography with title %title%?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = 'Bibliography, %title%, has been deleted.';";
$trans["biblioDelReturn"]          = "\$text = 'return to bibliography search';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = 'Bibliography Hold Requests:';";
$trans["biblioHoldListNoHolds"]    = "\$text = 'No bibliography copies are currently on hold.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Function';";
$trans["biblioHoldListHdr2"]       = "\$text = 'Copy';";
$trans["biblioHoldListHdr3"]       = "\$text = 'Placed On Hold';";
$trans["biblioHoldListHdr4"]       = "\$text = 'Member';";
$trans["biblioHoldListHdr5"]       = "\$text = 'Status';";
$trans["biblioHoldListHdr6"]       = "\$text = 'Due Back';";
$trans["biblioHoldListdel"]        = "\$text = 'Del';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'You are not authorized to use the Cataloging tab';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'Test Load';";
$trans["MarcUploadTestTrue"]        = "\$text = 'True';";
$trans["MarcUploadTestFalse"]       = "\$text = 'False';";
$trans["MarcSizeLimitNotes"]        = "\$text = '<strong>Note:</strong> Recommend file size below 10MB. Large marc record file can cause errors when parsing data.';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'USMarc Input File';";
$trans["MarcUploadEncoding"]      = "\$text = 'Character encoding';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Records Uploaded';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'MARC Record';";
$trans["MarcUploadNoRows"]    = "\$text = 'No rows are parsed';";
$trans["MarcUpdateSample"]			= "\$text='Select the MARC file (See template file, see Help for more information):';";
$trans["MarcUploadNoRowsDesc"] = "\$text = 'Try another character encoding when upload MARC records. <a href=\"./upload_usmarc_form.php\">Try again</a>.';";
$trans["MarcUploadTag"]             = "\$text = 'Tag';";
$trans["MarcUploadSubfield"]        = "\$text = 'Sub';";
$trans["MarcUploadData"]            = "\$text = 'Data';";
$trans["MarcUploadRawData"]         = "\$text = 'Raw Data:';";
$trans["UploadFile"]                = "\$text = 'Upload File';";
$trans["MarcUploadCheckHoldings"]	= "Create copyes if holding tags present";
$trans["MarcUploadHoldingsAutoBarode"]= "New copyes auto generate bar-code if one not present";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["MarcSizeLimitNotes"]			= "\$text = '<strong>Notas:</strong> <li> Recomendamos el tamaño del archivo menor de 10 MB. Archivos grandes de registros MARC puede provocar errores. </li><li> En caso de errores revise si sus números MARC están en la base de datos Mysql, en caso de no estar añadalos manualmente o cambie los números en su archivo por números validos</li><li>Se recomienda una revisa posterior a la incorporación de datos</li>';";
$trans["MarcUploadEncoding"]			= "\$text = 'codificación de caracteres';";
$trans["MarcUploadNoRows"]				= "\$text = 'No hay filas para agregar';";
$trans["MarcUploadNoRowsDesc"]			= "\$text = 'Pruebe con otra codificación de caracteres cuando carga registros MARC. <a href=\"./upload_usmarc_form.php\">Intentar de nuevo</a>.';";
$trans["MarcUpdateSample"]	= "\$text =  ' Seleccionar el archivo MARC (Vea <a href=\"sample_MARC.mrc\">archivo de plantilla</a>, Para más información ver <a href=\"javascript:popSecondary(\'../shared/help.php?page=MarcUpload\')\">Ayuda</a>):';";

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
 $trans['locsru_Maxlimit']					= "\$text = 'Máximo de registros a traer';"; 
 
#****************************************************************************
#* Translation text for page csv_import.php, csv_export.php
#****************************************************************************
$trans["CSVImportHeader"]		= "\$text = 'Importar bibliografía desde de un archivo CSV.';";
$trans["CSVImport"]			= "\$text = 'Importar Bibliografías desde Archivo CSV';";
$trans["CSVImportSuccess"]		= "\$text = 'Todos los artículos que se han procesado!';";
$trans["CSVImportStatus"]		= "\$text = 'hecho: %done%, Copia: %copy%, fallos: %failed%';";
$trans["CSVImportContinue"]		= "\$text = 'continuar las importaciones';";
$trans["CSVImportSizeLimitNotes"]	= "\$text = '<strong>Note:</strong> Recommend file size below 10MB. For larger size file please split them to multiple file before upload.
<strong>Notas:</strong>
<li> Tamaño de los Archivos recomendado debe ser inferior a 10 MB. Para el archivo de gran tamaño puede dividirse en varios archivos antes de subirlos.</li>
<li> Los campos siguientes son los unicos permitidos por este modulo, se dan los nombres mostrados por espabiblio y del campo y sus respectivos marc.</li>
<li>    isbn, autor, titulo, resto del titulo, mención de responsabilidad, Número de entrada 1, Número de entrada 2, Lugar de publicación,Casa editora, Fecha de publicación </li>
<li>    isbn, author, title, title_remainder, responsibility_stmt, call_nmbr1, call_nmbr2, publication_place, publisher_name, publication_date </li>
<li>    020a,   100a,   245a, 245b,             245c,               050a,       050b,              260a,          260b,              260c </li>
<li>    Los campos de ISBN, Autor y Titulo son imprescindibles. </li>
<li>    Los archivos CSV se recomiendan que estén codificados en UTF-8  </li>  
<li>    Deben sere separados por tabulador,  delimitados con ( doblecomilla )  </li>';";
$trans["CSVLabel"]			= "\$text = 'Seleccionar el archivo CSV (use <a href=\"csv_template.csv\">archivo de plantilla</a>, Para más información ver <a href=\"javascript:popSecondary(\'../shared/help.php?page=CsvImport\')\">Ayuda</a>):';";

#****************************************************************************
#* Translation text for page Cover o portadas
#****************************************************************************
$trans["Defaults:"]					= "\$text = 'Por defecto:';";
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
$trans["cduindexnum"]			= "\$text = 'Buscar por numero dentro del campo de Números CDU';";
$trans["cduindexclv"]			= "\$text = 'Buscar por Clave dentro del campo de Clave CDU';";
$trans["CduNum"]						= "\$text = 'Numero CDU';";
$trans["CduClv"]						= "\$text = 'Clave CDU';";
$trans["cdusearchFoundResults"]	= "\$text = ' Registros encontrados';";
$trans["cdusearchprev"]				= "\$text = ' Pagina Previa';";
$trans["cdusearchnext"]				= "\$text = ' pagina Siguiente';";
$trans["Cdu_Numero"]					= "\$text = 'Numero';";
$trans["Cdu_Descripcion"]			= "\$text = 'Descripción';";
$trans["Cdu_Clave"]					= "\$text = 'Clave';";
$trans["Cdu_Table"]					= "\$text = 'Sumario';";
$trans["cduBidSearchResults"]		= "\$text = 'Registro';";

#****************************************************************************
#* Translation text for cdd.php
#****************************************************************************
$trans["cdditemSearchResults"]	= "\$text = 'Registro';";
$trans["cduOtra"]						= "\$text = 'Nueva Búsqueda CDU';";
$trans["cddindexHeading"]			= "\$text = 'Buscador de claves Clasificación Decimal Dewey o CDD (Ver 1.0).';";
$trans["cddindexName"]				= "\$text = 'Buscar por palabra dentro del campo de la descripción';";
$trans["cddindexNameHdr"]			= "\$text = 'Clasificación Decimal Dewey';";

$trans["cddindexSearch"]			= "\$text = 'Buscar';";
$trans["cddindexClave"]			= "\$text = 'Buscar por clave (primer sumario) dentro del CDD';";
$trans["CddClave"]						= "\$text = 'Clave CDD';";
$trans["cddindexNum"]			= "\$text = 'Buscar por Número dentro del CDD';";
$trans["CddNum"]						= "\$text = 'Número CDD';";
$trans["cddsearchFoundResults"]	= "\$text = ' Registros encontrados';";
$trans["cddsearchprev"]				= "\$text = ' Pagina Previa';";
$trans["cddsearchnext"]				= "\$text = ' Pagina Siguiente';";
$trans["Cdd_Numero"]					= "\$text = 'Numero';";
$trans["Cdd_Descripcion"]			= "\$text = 'Descripción';";
$trans["Cdd_Clave"]					= "\$text = 'Clave';";
$trans["Cdd_Table"]					= "\$text = 'Sumario';";
$trans["cddBidSearchResults"]		= "\$text = 'Registro';";
$trans["cddOtra"]						= "\$text = 'Nueva Búsqueda CDD';";

#****************************************************************************
#* Translation text for ibic.php
#****************************************************************************
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

#****************************************************************************
#* Translation text for cutter
#****************************************************************************
$trans["cutterBidSearchResults"]	= "\$text = 'Registro';";
$trans["cutterindexHeading"]		= "\$text = 'Generar libistica Cutter-Sanborn 3 cifras (Ver 1.0)';";
$trans["cutterindexNameHdr"]		= "\$text = 'Generar libistica cutter';";
$trans["cutterindexName"]			= "\$text = 'Cutter-Sanborn 3 cifras';";
$trans["cutterindexSearch"]		= "\$text = 'Generar';";
$trans["cutterOtra"]					= "\$text = 'Nueva Búsqueda Cutter-Sanborn';";

#****************************************************************************
#*  Translation text for page upload_csv(_form).php
#****************************************************************************
$trans["CSVloadHeader"]            = "\$text = 'Importar copias bibliográficas desde archivo CSV';";
$trans["CSVloadTest"]            = "\$text = '¿Probar archivo?';";
$trans["CSVloadTestTrue"]        = "\$text = 'Si, solo prueba los datos.';";
$trans["CSVloadTestFalse"]       = "\$text = 'No, cargar datos bibliográficos ahora';";
$trans["CSVloadTestFileUpload"]  = "\$text = 'Archivo CSV';";
$trans["CSVloadRecordsUploaded"] = "\$text = 'Los registros cargados';";
$trans["CSVloadMarcRecord"]      = "\$text = 'Grabar CVS';";
$trans["CSVloadTag"]             = "\$text = 'Etiqueta (Tag)';";
$trans["CSVloadSubfield"]        = "\$text = 'Sub';";
$trans["CSVloadData"]            = "\$text = 'Datos';";
$trans["CSVRecordsRead"]         = "\$text = 'de %total% registros leidos';";
$trans["CSVHeadings"]            = "\$text = 'Rúbrica objetivos identificados';";
$trans["CSVTargets"]             = "\$text = 'Destino';";
$trans["CSVComments"]            = "\$text = 'Comentario';";
$trans["CSVunknownIgnored"]      = "\$text = 'Desconocido (ignorado)';";
$trans["CSVMaterialUnknown"]     = "\$text = 'Material &quot;%mType%&quot; desconocido, asumirá por defecto';";
$trans["CSVCollUnknown"]         = "\$text = 'Material &quot;%collType%&quot; desconocido, asumirá por defecto';";
$trans["CSVadded"]               = "\$text = 'Agregado';";
$trans["CSVerrorAtRecord"]       = "\$text = 'Falla de registro';";
$trans["CSVerrors"]              = "\$text = 'Errores';";
$trans["CSVerror"]               = "\$text = 'ERROR';";
$trans["CSVwarning"]             = "\$text = 'Precaución';";
$trans["UploadFile"]             = "\$text = 'Cargar Archivo';";
$trans["Defaults"]               = "\$text = 'Valores por defecto';";
$trans["CSVshowAllFiles"]        = "\$text = 'Mostrar todos los registros (deshabilitar en archivos de gran tamaño)';";
$trans["CSVcopyDescription"]     = "\$text = 'Texto para la descripción de copias de artículos';";
$trans["CSVinputDescr"]          = "\$text = '<strong>Notas:</strong><br />
<li>El archivo de entrada debe ser un archivo de texto separado por tabuladores <b>.CVS</b> y codificado en <b>UTF-8</b> </li>
<li>Sin indicación del texto &quot;&quot; (doblecomilla).</li>
<li>En caso que contenga campos con retorno de carro o salto de linea, favor de usar en su lugar use &lt;/br&gt;, ya estos son usados como separadores de registro por el sistema.</li>
<li>Después de importar los registros es posible que vean campos <b>marc</b> marcados de rojo, esto se debe a que no son campos validos, por lo que no están en base de datos MYSQL.</li>
<li>Esta función crea los registros bibliográficos al tiempo que sus respectivas copias. </li>
<li>Recomendamos revise el archivo plantilla.</li> ';";
$trans["CSVimportAdvise"]        = "\$text = 'Es <b><u> recomienda encarecidamente </u></b> para ejecutar en modo de prueba, en primer lugar y tener una copia de seguridad de base de datos disponibles antes de la importación !';";
$trans["CSVimportMoreMARC"]      = "\$text = 'Todos los demás datos MARC también se pueden importar mediante el uso de la etiqueta MARC (e.g. 020\$a para ISBN).';";
$trans["CSVcolumnHeading"]       = "\$text = 'Encabezado de columna';";
$trans["CSVcolumnDescription"]   = "\$text = 'Descripción';";
$trans["CSVcolumnComment"]       = "\$text = 'Comentario';";
$trans["CSVbarCoDescription"]    = "\$text = 'Opcional. Puede ser utilizado para una entrada inicial de copia en caso de la migración.';";
$trans["CSVCallNumber"]          = "\$text = 'Numero de entrada';";
$trans["CSVCallNrDescription"]   = "\$text = 'Obligatorio. CALL2 y CALL3 son opcionales.';";
$trans["CSVoptionalDefault"]     = "\$text = 'Opcional. Sobrescribe el valor por defecto que figura en el presente formulario.';";
$trans["CSVUpdateContinue"]	= "\$text =  ' Seleccionar el archivo CSV (use <a href=\"cvs_template_bib.csv\">archivo de plantilla</a>, Para más información ver <a href=\"javascript:popSecondary(\'../shared/help.php?page=CsvImport\')\">Ayuda</a>):';";
$trans["Mandatory"]              = "\$text = 'Obligatorio';";

#****************************************************************************
 #*  Translation text for page Bul_deelte.php
 #****************************************************************************
$trans["Marcar/Desmarcar Todos los visibles"]              = "\$text = 'Marcar/Desmarcar Todos checkbox los visibles';";
$trans["biblioSearchNoResults"]              = "\$text = ' No se encontraron registros ';";

#****************************************************************************
 #*  Translation text for page usmarc_select.php
 #****************************************************************************
 $trans["PoweredByOB"]                 = "\$text = 'Powered by OpenBiblio & Espabiblio';";
  
#****************************************************************************
#* Translation text for page marc_list.php ,  marc_select.php, marc_add_form.php marc_add.php 
#****************************************************************************
$trans["usmarcSelectInst"]	= "\$text = 'Listado de campos marc';";

#****************************************************************************
#*  Translation text for page upload_csv(_form).php
#****************************************************************************
$trans["CSVloadTest"]            = "\$text = 'Test Load';";
$trans["CSVloadTestTrue"]        = "\$text = 'True';";
$trans["CSVloadTestFalse"]       = "\$text = 'False';";
$trans["CSVloadTestFileUpload"]  = "\$text = 'CSV Input File';";
$trans["CSVloadRecordsUploaded"] = "\$text = 'Records Uploaded';";
$trans["CSVloadMarcRecord"]      = "\$text = 'CSV Record';";
$trans["CSVloadTag"]             = "\$text = 'Tag';";
$trans["CSVloadSubfield"]        = "\$text = 'Sub';";
$trans["CSVloadData"]            = "\$text = 'Data';";
$trans["CSVRecordsRead"]         = "\$text = 'of %total% records read';";
$trans["CSVHeadings"]            = "\$text = 'Heading targets identified';";
$trans["CSVTargets"]             = "\$text = 'Target';";
$trans["CSVComments"]            = "\$text = 'Comment';";
$trans["CSVunknownIgnored"]      = "\$text = 'UNKNOWN (ignored)';";
$trans["CSVMaterialUnknown"]     = "\$text = 'Material &quot;%mType%&quot; unknown, will assume default';";
$trans["CSVCollUnknown"]         = "\$text = 'Material &quot;%collType%&quot; unknown, will assume default';";
$trans["CSVadded"]               = "\$text = 'Added';";
$trans["CSVerrorAtRecord"]       = "\$text = 'Error at record';";
$trans["CSVerrors"]              = "\$text = 'errors';";
$trans["CSVerror"]               = "\$text = 'ERROR';";
$trans["CSVwarning"]             = "\$text = 'Warning';";
$trans["UploadFile"]             = "\$text = 'Upload File';";
$trans["Defaults"]               = "\$text = 'Defaults';";
$trans["CSVshowAllFiles"]        = "\$text = 'Show all records (disable on large files)';";
$trans["CSVcopyDescription"]     = "\$text = 'Text for descriptions of item copies';";
$trans["CSVimportAdvise"]        = "\$text = 'It is <b><u>STRONGLY RECOMMENDED</u></b> to run in test mode, first and have a database backup available before import!';";
$trans["CSVimportMoreMARC"]      = "\$text = 'All other MARC data can also be imported by use of the MARC tag (e.g. 020\$a for ISBN).';";
$trans["CSVcolumnHeading"]       = "\$text = 'Column Heading';";
$trans["CSVcolumnDescription"]   = "\$text = 'Description';";
$trans["CSVcolumnComment"]       = "\$text = 'Comment';";
$trans["CSVbarCoDescription"]    = "\$text = 'Optional. Can be used for an initial copy entry in case of migration.';";
$trans["CSVCallNumber"]          = "\$text = 'Call Number';";
$trans["CSVCallNrDescription"]   = "\$text = 'Mandatory. Call2 and Call3 are optional.';";
$trans["biblioSearchNoResults"]			= "\$text='Search No Results';";
$trans["Marcar/Desmarcar Todos los visibles"]			= "\$text='Flag / Clear All checkbox visible';";
$trans["Mandatory"]              = "\$text = 'Mandatory';";
$trans["CSVUpdateContinue"]			= "\$text='Select the CSV file (use template file, for more information see Help):';";
$trans["CSVoptionalDefault"]     = "\$text = 'Optional. Overwrites default value as given in submit form.';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = 'Powered by OpenBiblio';";
$trans["Copyright"]                   = "\$text = 'Copyright &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = 'under the';";
$trans["GNU"]                 = "\$text = 'GNU General Public License';";
$trans["locsru_Search"]			= "\$text='Search the Library of Congress of the US';";
$trans["locsru_detalle"]			= "\$text='It allows the user to retrieve information from the Library of Congress using SRU (Search Retrival URL), which returns an XML form.';";
$trans["locsru_Instructions"]			= "\$text='See data entering title, author or ISBN';";
$trans["catalogResults"]                 = "\$text = 'Search Results';";


#****************************************************************************
#*  Translation text for page lookup_form.php
#****************************************************************************
$trans["lookup_z3950Search"]     = "\$text = 'Online search';";
$trans["lookup_isbn"]            = "\$text = 'ISBN';";
$trans["lookup_issn"]            = "\$text = 'ISSN';";
$trans["lookup_lccn"]            = "\$text = 'LCCN';";
$trans["lookup_title"]           = "\$text = 'Title';";
$trans["lookup_author"]          = "\$text = 'Author';";
$trans["lookup_keyword"]         = "\$text = 'Keyword anywhere';";
$trans["lookup_publisher"]       = "\$text = 'Name of Publisher';";
$trans["lookup_pubLoc"]          = "\$text = 'Place of Publication';";
$trans["lookup_pubDate"]         = "\$text = 'Date of Publication';";
$trans["lookup_andOpt"]          = "\$text = 'AND (optional)';";
$trans["lookup_search"]          = "\$text = 'Search';";
$trans["lookup_repository"]      = "\$text = 'Repository';";
$trans["lookup_yazSetupFailed"]  = "\$text = 'YAZ setup failed for host: !';";
$trans["lookup_badQuery"]        = "\$text = 'Bad Query';";
$trans["lookup_patience"]        = "\$text = 'Please be patient. this may take a while.';";
$trans["lookup_resetInstr"]      = "\$text = 'After 30 secs. Press F5 to try again.';";
$trans["lookup_goBack"]          = "\$text = 'Go Back';";
$trans["lookup_abandon"]         = "\$text = 'Stop Search';";
$trans["lookup_yazError"]        = "\$text = 'Lookup YAZ Error: ';";
$trans["lookup_nothingFound"]    = "\$text = 'Nothing found for ';";
$trans["lookup_tooManyHits"]     = "\$text = 'Too many hits to display, ';";
$trans["lookup_refineSearch"]    = "\$text = 'Please refine the search and try again.';";
$trans["lookup_noResponse"]   = "\$text = 'Failed to get server response.';";
$trans["lookup_success"]         = "\$text = 'Success! Z39.50 search data is shown below!';";
$trans["lookup_hits"]            = "\$text = ' hits, please select one.';";
$trans["lookup_callNmbrType"]    = "\$text = 'Your my_callNmbrType is invalid!';";
$trans['lookup_useThis']         = "\$text = 'This One';";
$trans['lookup_searchError']     = "\$text = 'SEARCH ERROR:Send this to system administrator:';";
$trans["cddindexNum"]			= "\$text='Search within the CDD Number';";
$trans["CddClave"]			= "\$text='key CD';";
$trans["cddindexClave"]			= "\$text='Buscar por clave (primer sumario) dentro del CDD';";
$trans["cddindexSearch"]			= "\$text='Search';";
$trans["cddindexNameHdr"]			= "\$text='Dewey Decimal Classification';";
$trans["cddindexName"]			= "\$text='Search word in the description field';";
$trans["cddindexHeading"]			= "\$text='Key finder or CDD Dewey Decimal Classification (Ver 1.0).';";
$trans["cduOtra"]			= "\$text='New search CDU';";
$trans["cdditemSearchResults"]			= "\$text='Registration';";
$trans["cduBidSearchResults"]			= "\$text='Registration';";
$trans["Cdu_Table"]			= "\$text='Summary';";
$trans["Cdu_Clave"]			= "\$text='key CDU';";
$trans["Cdu_Descripcion"]			= "\$text='Description';";
$trans["Cdu_Numero"]			= "\$text='Number';";
$trans["cdusearchnext"]			= "\$text='Next page';";
$trans["cdusearchprev"]			= "\$text='Previous page';";
$trans["cdusearchFoundResults"]			= "\$text='Found Results';";
$trans["CduClv"]			= "\$text='key CDU';";
$trans["CduNum"]			= "\$text='number CDU';";
$trans["cduindexclv"]			= "\$text='Search within the field Key Key CDU';";
$trans["cduindexnum"]			= "\$text='Search number within the range of numbers CDU';";
$trans["cduindexSearch"]			= "\$text='Search';";
$trans["cduindexNameHdr"]			= "\$text='Universal Decimal Classification';";
$trans["cduindexName"]			= "\$text='Search word in the description field';";
$trans["cduindexHeading"]			= "\$text='Key finder or UDC Universal Decimal Classification (Ver 1.0) based on AENOR / SPAIN.';";
$trans["cduitemSearchResults"]			= "\$text='Search Results';";
$trans["lookup_HostFail"]			= "\$text='No selected servers, so it fails import list';";
$trans["lookup_bulkStatus"]			= "\$text='Last updated: update%% (% Estimated%) timer status: cron% status% Remnants: REMAIN%% (% trying trying%) Echo:% done% (% covered% covered), Copying:% copied% Failed:% failed%';";
$trans["lookup_bulkStatusError"]			= "\$text='An error has occurred, press F5 to refresh the page.';";
$trans["lookup_bulkViewFailed"]			= "\$text='see items with faults';";
$trans["lookup_bulkCont"]			= "\$text='imports continue';";
$trans["lookup_bulkProceed"]			= "\$text='All items have been processed!';";
$trans["lookup_bulkStatusHead"]			= "\$text='Status: Updating every 10 seconds';";
$trans["lookup_bulkQueue"]			= "\$text='All items have been added!';";
$trans["lookup_bulkNotes"]			= "\$text='Select the file containing the list of ISBN (one per line, flat or txt format, UTF.8) (YAZ support is required, see information prerequisites)';";
$trans["Import"]			= "\$text='Import';";
$trans["lookup_EmptyKeyword"]   = "\$text = 'Please specify some keywords.';";

$trans["locsru_Title"]                    = "\$text = 'Title';";
$trans["locsru_Author"]                = "\$text = 'Author';";
$trans["locsru_ISBN"]                   = "\$text = 'ISBN';";
$trans["locsru_Publication"]         = "\$text = 'Publication';";
$trans["locsru_Publisher"]            = "\$text = 'Publisher';";
$trans["locsru_Maxlimit"]			= "\$text='Maximum Records to bring';";
$trans["Search"]			= "\$text='Search';";
$trans["locsru_UseThis"]			= "\$text='UseThis';";
$trans["locsru_PublicationDate"]  = "\$text = 'PublicationDate';";

#****************************************************************************
#*  Translation text for page csv_import.php, csv_export.php
#****************************************************************************
$trans["CSVImport"]                   = "\$text = 'Import from CSV';";
$trans["CSVImportSuccess"]            = "\$text = 'All items has been process!';";
$trans["CSVImportStatus"]             = "\$text = 'Done: %done%, copy: %copy%, failed: %failed%';";
$trans["CSVImportContinue"]           = "\$text = 'continue import';";
$trans["CSVLabel"]                    = "\$text='Choose CSV file (use <a href=\"csv_template.csv\">this template</a>, more information see <a href=\"javascript:popSecondary(\'../shared/help.php?page=CsvImport\')\">this help</a>):';";
$trans["CSVImportHeader"]             = "\$text = 'Import member list from CSV file';";

#****************************************************************************

$trans["Defaults:"]                 = "\$text = 'Defaults:';";
$trans["Are you sure to remove this picture?"]  = "\$text = 'Are you sure to remove this picture?';";
$trans["Remove this picture"]  = "\$text = 'Remove this picture';";
$trans["No bibliography picture?"]  = "\$text = 'No bibliography picture?';";
$trans["search for this one"]            = "\$text = 'search for this one';";
$trans["coverLookupWait"]              = "\$text = 'Now searching, please wait..';";
$trans["coverLookupNotFound"]     = "\$text = 'Book cover not found!';";
$trans["coverLookupISBNInvalid"]   = "\$text = 'ISBN format not valid.';";
$trans["Found"]                                  = "\$text = 'Found';";
$trans["Save"]                                     = "\$text = 'Save';";
$trans["Cancel"]                                  = "\$text = 'Cancel';";
$trans["coverLookupSelect"]            = "\$text = 'Use this image (leave unchecked to cancel).';";
$trans["This biblio's cover image has been removed."] = "\$text = 'This biblio\'s cover image has been removed.';";


$trans["locsru_Search"]			= "\$text='Search the Library of Congress of the US';";
#****************************************************************************
$trans["locsru_detalle"]			= "\$text='It allows the user to retrieve information from the Library of Congress using SRU (Search Retrival URL), which returns an XML form.';";
#*  Translation text for page biblio_search.php
$trans["locsru_Instructions"]			= "\$text='See data entering title, author or ISBN';";
#****************************************************************************
$trans["catalogResults"]                 = "\$text = 'Search Results';";
$trans["phraseSearchHelp"]				 = "Use symbol '%' to denote an any substring, if no such symbol in search phrase, it decorates by % (like %phrase%) by default";

#****************************************************************************
#*  Translation text for page biblio_history.php
#****************************************************************************
$trans["Bibliography Checkout History:"]     = "\$text = 'Bibliography Checkout History:';";
$trans["Date"]                               = "\$text = 'Date';";
$trans["Barcode"]                            = "\$text = 'Barcode';";
$trans["New Status"]                         = "\$text = 'New Status';";
$trans["Member"]                             = "\$text = 'Member';";
$trans["Due Date"]                           = "\$text = 'Due Date';";
$trans["No history was found."]              = "\$text = 'No history was found.';";