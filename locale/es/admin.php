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
$trans["adminSubmit"]		= "\$text = 'Enviar';";
$trans["adminCancel"]		= "\$text = 'Cancelar';";
$trans["adminDelete"]		= "\$text = 'Eliminar';";
$trans["adminUpdate"]		= "\$text = 'Actualizar';";
$trans["adminFootnote"]		= "\$text = 'Los campos marcados con %symbol% son requeridos.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Administración';";
$trans["indexDesc"]                = "\$text = 'Utiliza las funciones de la zona de la izquierda para administrar los bibliotecarios y los datos administrativos.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = 'Volver a la lista de colecciones';";
$trans["adminCollections_delStart"]                 = "\$text = 'Colecciones, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = ', ha sido borrado.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = '¿Estás seguro de que quieres borrar esta colección?, ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = ', ha sido actualizada.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]	= "\$text = 'Editar colección:';";
$trans["adminCollections_edit_formDescription"]		= "\$text = 'Descripción:';";
$trans["adminCollections_edit_formDaysdueback"]		= "\$text = 'Días para la devolución:';";
$trans["adminCollections_edit_formDailyLateFee"]	= "\$text = 'Multa diaria por retraso:';";
$trans["adminCollections_edit_formNote"]		= "\$text = '*Notas:';";
$trans["adminCollections_edit_formNoteText"]		= "\$text = 'Si pones los días de devolución en 0, ningún libro de esta colección se podrá prestar.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]		= "\$text = 'Añadir nueva colección';";
$trans["adminCollections_listCollections"]		= "\$text = 'Colecciones:';";
$trans["adminCollections_listFunction"]			= "\$text = 'Función';";
$trans["adminCollections_listDescription"]		= "\$text = 'Descripción';";
$trans["adminCollections_listDaysdueback"]		= "\$text = 'Días<br>préstamo';";
$trans["adminCollections_listDailylatefee"]		= "\$text = 'Diariamente<br>Multa por retraso';";
$trans["adminCollections_listBibliographycount"]	= "\$text = 'Número<br>libros';";
$trans["adminCollections_listEdit"]			= "\$text = 'Editar';";
$trans["adminCollections_listDel"]			= "\$text = 'eliminar';";
$trans["adminCollections_ListNote"]			= "\$text = '*Nota:';";
$trans["adminCollections_ListNoteText"]			= "\$text = 'La función de borrado sólo está disponible en colecciones que tengan una cuenta bibliográfica de cero.<br>Si deseas eliminar una colección con una cuenta bibliográfica mayor de cero primero tendrás que cambiar el tipo de material de esas bibliografías a otro tipo de material.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ', ha sido añadida.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]	= "\$text = 'Añadir nueva colección:';";
$trans["adminCollections_new_formDescription"]		= "\$text = 'Descripción:';";
$trans["adminCollections_new_formDaysdueback"]		= "\$text = 'Día en que debe ser devuelto:';";
$trans["adminCollections_new_formDailylatefee"]		= "\$text = 'Multa diaria por retraso:';";
$trans["adminCollections_new_formNote"]			= "\$text = '*Nota:';";
$trans["adminCollections_new_formNoteText"]		= "\$text = ' Si se pone a cero la fecha de devolución la colección entera queda indisponible para préstamo.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]	= "\$text = 'Tipo de material, ';";
$trans["admin_materials_delMaterialdeleted"]	= "\$text = ', ha sido borrado.';";
$trans["admin_materials_Return"]		= "\$text = 'volver a lista de materiales';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]		= "\$text = '¿Estás seguro de que quieres eliminar este tipo de material?, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]	= "\$text = 'Editar tipo de material:';";
$trans["admin_materials_delDescription"]	= "\$text = 'Descripción:';";
$trans["admin_materials_delunlimited"]	= "\$text = '(0 significa ilimitado)';";
$trans["admin_materials_delImagefile"]	= "\$text = 'Archivo de imagen:';";
$trans["admin_materials_delNote"]	= "\$text = '*Nota:';";
$trans["admin_materials_delNoteText"]	= "\$text = 'Los archivos de imagen deben estar en el directorio /images.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = ', ha sido actualizado.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]	= "\$text = 'Añadir nuevo tipo de material';";
$trans["admin_materials_listMaterialtypes"]	= "\$text = 'Tipos de material:';";
$trans["admin_materials_listFunction"]		= "\$text = 'Función';";
$trans["admin_materials_listDescription"]	= "\$text = 'Descripción';";
$trans["admin_materials_listLimits"]		= "\$text = 'Límites';";
$trans["admin_materials_listCheckoutlimit"]	= "\$text = 'Límite de préstamo';";
$trans["admin_materials_listRenewallimit"]	= "\$text = 'Renovación';";
$trans["admin_materials_listImageFile"]		= "\$text = 'Archivo<br>Imagen';";
$trans["admin_materials_listBibcount"]		= "\$text = 'Número<br>libros';";
$trans["admin_materials_listEdit"]		= "\$text = 'Editar';";
$trans["admin_materials_listDel"]		= "\$text = 'Eliminar';";
$trans["admin_materials_listNote"]		= "\$text = '*Nota:';";
$trans["admin_materials_listNoteText"]		= "\$text = 'La función de borrado sólo está disponible en colecciones que tienen una cuenta bibliográfica de cero <br> si deseas eliminar una colección con una cuenta bibliográfica mayor de cero primero tendrás que cambiar el tipo de material en esas bibliografías a otro tipo de material.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ', ha sido añadido.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]	= "\$text = 'los archivos de imagen deben localizarse en el directorio /images.';";

#* No estan en Openbiblio 7.1 adecuacion por jalg
$trans["Checkout Privileges"]			= "\$text = 'Privilegios de préstamo';";
$trans["function"]				= "\$text = 'Función';";
$trans["Material Type"]				= "\$text = 'Tipo de material';";
$trans["Member Classification"]			= "\$text = 'Clasificación de miembros';";
$trans["Checkout Limit"]			= "\$text = 'Límite de préstamo';";
$trans["Renewal Limit"]				= "\$text = 'Límite de renovación';";
$trans["Edit cover lookup options (Amazon AWS)"]= "\$text = 'Editar opciones de búsqueda de carátulas (Amazon AWS)';";
$trans["Add new z39.50 server"]			= "\$text = 'Añadir nuevo servidor z39.50';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]		= "\$text = 'No estás autorizado a utilizar el Funciones de Administración, Consulte con el Encargado del sistema.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]			= "\$text = 'los datos han sido actualizados.';";
$trans["admin_settingsEditsettings"]		= "\$text = 'Editar las propiedades de la biblioteca:';";
$trans["admin_settingsLibName"]			= "\$text = 'Nombre de la biblioteca:';";
$trans["admin_settingsLibimageurl"]		= "\$text = 'URL del logotipo de la biblioteca:';";
$trans["admin_settingsOnlyshowimginheader"]	= "\$text = 'Mostrar sólo el logotipo en el encabezado:';";
$trans["admin_settingsLibaders"]		= "\$text = 'Dirección de la biblioteca:';";
$trans["admin_settingsLibphone"]		= "\$text = 'Teléfono de la biblioteca:';";
$trans["admin_settingsLibhours"]		= "\$text = 'Horario de la biblioteca:';";
$trans["admin_settingsLibURL"]			= "\$text = 'URL de la biblioteca:';";
$trans["admin_settingsOPACURL"]			= "\$text = 'URL del OPAC:';";
$trans["admin_settingsSessionTimeout"]		= "\$text = 'Duración de la sesión:';";
$trans["admin_settingsMinutes"]			= "\$text = 'minutos';";
$trans["admin_settingsSearchResults"]		= "\$text = 'Resultados de la búsqueda:';";
$trans["admin_settingsItemsperpage"]		= "\$text = 'artículos por página';";
$trans["admin_settingsPurgebibhistory"]		= "\$text = 'Limpiar el historial de la bibliografía:';";
$trans["admin_settingsmonths"]			= "\$text = 'meses';";
$trans["admin_settingsBlockCheckouts"]		= "\$text = 'Bloquear préstamos cuando haya pendiente una multa:';";
$trans["admin_settingsLocale"]			= "\$text = 'Idioma:';";
$trans["admin_settingsHTMLChar"]		= "\$text = 'Juego de caracteres HTML:';";
$trans["admin_settingsHTMLTagLangAttr"]		= "\$text = 'Atributos de etiquetas de lenguaje HTML:';";

//$trans["adminCollections_edit_formNote"]		= "\$text = 'Notas:';";//cambiar nombre jalg 
$trans["If the month value for purging history is higher than zero, values in statistics reports shift over time.<br>Data from statistics reports should be saved outside OpenBiblio for future reference."]		= "\$text = 'Si el valor de mes para purgar la historia es mayor que cero,<br> los valores en los informes de estadísticas cambian con el tiempo.';";




#* No estan en Openbiblio 7.1 adecuacion por jalg
$trans["days"]				= "\$text = 'días';";
$trans["admin_settingsInactiveDays"]	= "\$text = 'Auto-actualizar usuarios inactivos en:';";
$trans["admin_settingsFontNormal"]	= "\$text = 'Tipo de fuente:';";
$trans["admin_settingsFontSize"]	= "\$text = 'Tamaño de la fuente:';";
$trans["Max. hold length:"]		= "\$text = 'Máxima longitud a mantener:';";
$trans["Add new member classificaiton"]	= "\$text = 'Añadir nuevo grupo de usuarios';";
$trans["admin_settingsHoldMaxDays"]	= "\$text = 'Máximo de días de antigüedad:';"; //dudas en la traduccion jalg
$trans["admin_settingsViewlist"]	= "\$text = 'Mostrar listado general (ralentiza el servidor):';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]	= "\$text = 'Personal de la Biblioteca,';";
$trans["adminStaff_Return"]		= "\$text = 'volver al listado de bibliotecarios';";
$trans["adminStaff_Yes"]		= "\$text = 'Sí';";
$trans["adminStaff_No"]			= "\$text = 'No';";

#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', ha sido borrado.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = 'estás seguro de querer borrar a un miembro del personal, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = ', ha sido actualizado';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]		= "\$text = 'Editar información del bibliotecario:';";
$trans["adminStaff_edit_formLastname"]		= "\$text = 'Apellido:';";
$trans["adminStaff_edit_formFirstname"]		= "\$text = 'Nombre:';";
$trans["adminStaff_edit_formLogin"]		= "\$text = 'Usuario:';";
$trans["adminStaff_edit_formAuth"]		= "\$text = 'Permisos:';";
$trans["adminStaff_edit_formCirc"]		= "\$text = 'Prestamos o Circulación';";
$trans["adminStaff_edit_formUpdatemember"]	= "\$text = 'Actualizar usuario';";
$trans["adminStaff_edit_formCatalog"]		= "\$text = 'Catalogar';";
$trans["adminStaff_edit_formAdmin"]		= "\$text = 'Administración';";
$trans["adminStaff_edit_formReports"]		= "\$text = 'Reportes';";
$trans["adminStaff_edit_formSuspended"]		= "\$text = 'Suspendido:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]	= "\$text = 'Añadir nuevo bibliotecario';";
$trans["adminStaff_list_Columnheader"]	= "\$text = 'Listado de bibliotecarios:';";
$trans["adminStaff_list_Function"]	= "\$text = 'Funciones';";
$trans["adminStaff_list_Edit"]		= "\$text = 'editar';";
$trans["adminStaff_list_Pwd"]		= "\$text = 'contraseña';";
$trans["adminStaff_list_Del"]		= "\$text = 'eliminar';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ', ha sido añadido.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]		= "\$text = 'Añadir nuevo miembro al personal:';";
$trans["adminStaff_new_form_Password"]		= "\$text = 'Contraseña:';";
$trans["adminStaff_new_form_Reenterpassword"]	= "\$text = 'Introduzca de nuevo la contraseña:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]	= "\$text = 'La contraseña ha sido cambiada correctamente.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]	= "\$text = 'Cambiar contraseña de bibliotecario:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = 'volver a la lista de temas';";
$trans["adminTheme_Theme"]                 = "\$text = 'Tema, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ', ha sido borrado.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]	= "\$text = '¿Estás seguro de que quieres eliminar este tema?, ';";

#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ', ha sido actualizado.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]		= "\$text = 'Vista previa los cambios del diseño';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]	= "\$text = 'Cambiar el diseño actual:';";
$trans["adminTheme_Choosetheme"]	= "\$text = 'Elegir un nuevo diseño:';";
$trans["adminTheme_Addnew"]		= "\$text = 'Añadir nuevo diseño';";
$trans["adminTheme_themes"]		= "\$text = 'Diseños:';";
$trans["adminTheme_function"]		= "\$text = 'Función';";
$trans["adminTheme_Themename"]		= "\$text = 'Nombre del Diseño';";
$trans["adminTheme_Usage"]		= "\$text = 'Usar';";
$trans["adminTheme_Edit"]		= "\$text = 'editar';";
$trans["adminTheme_Copy"]		= "\$text = 'copiar';";
$trans["adminTheme_Del"]		= "\$text = 'eliminar';";
$trans["adminTheme_Inuse"]		= "\$text = 'en uso';";
$trans["adminTheme_Note"]		= "\$text = '*Nota:';";
$trans["adminTheme_Notetext"]		= "\$text = 'la función de borrado no está disponible porque el diseño seleccionado está en uso actualmente.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]		= "\$text = 'Diseño:';";
$trans["adminTheme_Tablebordercolor"]	= "\$text = 'Color para el borde de tabla:';";
$trans["adminTheme_Errorcolor"]		= "\$text = 'Color para los errores:';";
$trans["adminTheme_Tableborderwidth"]	= "\$text = 'Ancho del borde de tabla:';";
$trans["adminTheme_Tablecellpadding"]	= "\$text = 'Ancho de la celda:';";
$trans["adminTheme_Title"]		= "\$text = 'Título';";
$trans["adminTheme_Mainbody"]		= "\$text = 'Cuerpo principal';";
$trans["adminTheme_Navigation"]		= "\$text = 'Barra Navegación';";
$trans["adminTheme_Tabs"]		= "\$text = 'Pestañas';";
$trans["adminTheme_Backgroundcolor"]	= "\$text = 'Color de fondo:';";
$trans["adminTheme_Fontface"]		= "\$text = 'Fuente:';";
$trans["adminTheme_Fontsize"]		= "\$text = 'Tamaño de fuente:';";
$trans["adminTheme_Bold"]		= "\$text = 'negrita';";
$trans["adminTheme_Fontcolor"]		= "\$text = 'Color de fuente:';";
$trans["adminTheme_Linkcolor"]		= "\$text = 'Color de los enlaces (links):';";
$trans["adminTheme_Align"]		= "\$text = 'Alineación:';";
$trans["adminTheme_Right"]		= "\$text = 'Derecha';";
$trans["adminTheme_Left"]		= "\$text = 'Izquierda';";
$trans["adminTheme_Center"]		= "\$text = 'Centro';";
$trans["adminTheme_HeaderWording"]	= "\$text = 'Editar';";

#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = ', ha sido actualizada.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]	= "\$text = 'Vista previa del Diseño';";
$trans["adminTheme_preview_Librarytitle"]	= "\$text = 'Nombre de la biblioteca';";
$trans["adminTheme_preview_CloseWindow"]	= "\$text = 'Cerrar ventana';";
$trans["adminTheme_preview_Home"]		= "\$text = 'Página principal';";
$trans["adminTheme_preview_Circulation"]	= "\$text = 'Circulación';";
$trans["adminTheme_preview_Cataloging"]		= "\$text = 'Catalogación';";
$trans["adminTheme_preview_Admin"]		= "\$text = 'Administración';";
$trans["adminTheme_preview_Samplelink"]		= "\$text = 'Enlace de muestra';";
$trans["adminTheme_preview_Thisstart"]		= "\$text = 'Esta es una vista previa de ';";
$trans["adminTheme_preview_Thisend"]		= "\$text = 'Diseño.';";
$trans["adminTheme_preview_Samplelist"]		= "\$text = 'Lista de muestra:';";
$trans["adminTheme_preview_Tableheading"]	= "\$text = 'Encabezado de la tabla';";
$trans["adminTheme_preview_Sampledatarow1"]	= "\$text = 'Datos de muestra de la fila 1';";
$trans["adminTheme_preview_Sampledatarow2"]	= "\$text = 'Datos de muestra de la fila 2';";
$trans["adminTheme_preview_Sampledatarow3"]	= "\$text = 'Datos de muestra de la fila 3';";
$trans["adminTheme_preview_Samplelink"]		= "\$text = 'Enlace de muestra';";
$trans["adminTheme_preview_Sampleerror"]	= "\$text = 'Error de muestra';";
$trans["adminTheme_preview_Sampleinput"]	= "\$text = 'Entrada de muestra';";
$trans["adminTheme_preview_Samplebutton"]	= "\$text = 'Botón de muestra';";
$trans["adminTheme_preview_Poweredby"]		= "\$text = 'Basado en Openbiblio 7.1, ';";
$trans["adminTheme_preview_Copyright"]		= "\$text = 'Copyright &copy; 2002 Dave Stevens OpenBiblio - (EspaBiblio) Jorge Lara , traducción de la 7.1 y otras adecuaciones  José A. Lara joanlaga@hotmail.com (ver sección de créditos y changelog.txt para mas detalles';";
$trans["adminTheme_preview_underthe"]		= "\$text = 'bajo la';";
$trans["adminTheme_preview_GNU"]		= "\$text = 'Licencia Pública General de la GNU';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

#* No estan en Openbiblio 7.1 adecuacion por jalg
#****************************************************************************
#* Translation text for page import_export.php
#****************************************************************************
$trans["adminImport"]			= "\$text = 'Importar';";
$trans["adminExport"]			= "\$text = 'Exportar';";
$trans["import_member_csv"]		= "\$text = 'Importar lista de usuarios desde un archivo CSV';";
$trans["import_bibliography_csv"]	= "\$text = 'Importar lista bibliográfica desde un archivo CSV';";
$trans["import_bibliography_marc"]	= "\$text = 'Importar lista bibliográfica desde un archivo MARC';";
$trans["export_library_data_csv"]	= "\$text = 'Exportar todos los datos de la biblioteca a un archivo CSV';";

#****************************************************************************
#* Translation text for page lookupOptsForm.php
#****************************************************************************
$trans["lookup_opts"] 			= "\$text = 'Opciones Z39.50.';";
$trans["lookup_optsUpdated"]		= "\$text = 'Las opciones de búsqueda han sido actualizadas.';";
$trans["lookup_optsSettings"]		= "\$text = 'Editar opciones de búsqueda:';";
$trans["lookup_optsProtocol"]		= "\$text = 'Protocolo:';";
$trans["lookup_optsMaxHits"]		= "\$text = 'Máximo número de hits:';";
$trans["lookup_optsKeepDashes"]		= "\$text = 'Mantener guiones:';";
$trans["lookup_optsCallNmbrType"]	= "\$text = 'Tipo de número de llamada:';";
$trans["lookup_optsAutoDewey"]		= "\$text = 'Usar Dewey por defecto:';";
$trans["lookup_optsDefaultDewey"]	= "\$text = 'Código Dewey por defecto:';";
$trans["lookup_optsAutoCutter"]		= "\$text = 'Generar Cutter-Sanborn si no hay:';";
$trans["lookup_optsCutterType"]		= "\$text = 'Tipo de Cutter-Sanborn para generar:';";
$trans["lookup_optsCutterWord"]		= "\$text = 'Numero de Palabras Dewey Cutter-Sanborn:';";
$trans["lookup_optsAutoCollection"]	= "\$text = 'Usar auto colecciona:';";
$trans["lookup_optsFictionName"]	= "\$text = 'Nombre de la colección Ficción:';";
$trans["lookup_optsFictionCode"]	= "\$text = 'Indice numero de Ficción de códigos de uso:';";
$trans["lookup_optsLocFictionCodes"]	= "\$text = 'LoC códigos de Ficción';";
$trans["lookup_optsDewFictionCodes"]	= "\$text = 'Dewey Ficticio códigos:';";
$trans["lookup_callNmbrType"]		= "\$text = 'Su numero de tipo de llamado no es valido!';";
$trans["lookup_optsUpdtBtn"]		= "\$text = 'Actualizar';";

#****************************************************************************
#* Translation text for page lookupHostsForm.php
#****************************************************************************
$trans["Add New Host"] 			= "\$text = 'Agregar nuevo Servidor Z39.50';";
$trans["lookup_hosts"] 			= "\$text = 'Servidores de Búsqueda Z39.50 .';";
$trans["lookup_rqdNote"] 		= "\$text = ' - Campos Obligatorios.';";
$trans["lookup_hostsUpdated"]		= "\$text = 'Configuración de búsqueda ha sido actualizada.';";
$trans["lookup_hostsConfirmDelete"]	= "\$text = '¿Está seguro que desea eliminar este Servidor Z39.50 ?';";
$trans["lookup_hostsListFunction"] 	= "\$text = 'Función:';";
$trans["lookup_hostsListHeader"]	= "\$text = 'Lista de servidores para búsquedas Z39.50 :';";
$trans["lookup_hostsEditHeader"]	= "\$text = 'Editar propiedades del servidor Z39.50 :';";
$trans["lookup_hostsNewHeader"]		= "\$text = 'Configurar propiedades del nuevo servidor Z39.50 :';";
$trans["lookup_hostsSeqNo"]		= "\$text = 'Orden:';";
$trans["lookup_hostsActive"]		= "\$text = 'Usar:';";
$trans["lookup_hostsHost"]		= "\$text = 'URL:puerto';";
$trans["lookup_hostsName"]		= "\$text = 'Nombre:';";
$trans["lookup_hostsDb"]		= "\$text = 'Base de Datos:';";
$trans["lookup_hostsContext"]		= "\$text = 'contexto:';";
$trans["lookup_hostsSchema"]		= "\$text = 'Esquema:';";
$trans["lookup_hostsUser"]		= "\$text = 'Numero de Usuario:';";
$trans["lookup_hostsPw"]		= "\$text = 'Contraseña';";
$trans["lookup_hostsUpdtBtn"]		= "\$text = 'Actualizar';";
$trans["lookup_hostsFunc"]		= "\$text = 'Funcion';";
$trans["lookup_hostsCharset"]		= "\$text = 'codificacion de caracteres';";
$trans["lookup_DefaultCharset"]		= "\$text = 'por defecto: dejar en blanco';";

#****************************************************************************
#* Translation text for page lookupHostsForm.php
#****************************************************************************
$trans["Function"]			= "\$text = 'Función';";
$trans["edit"]				= "\$text = 'Editar';";
$trans["del"]				= "\$text = 'eliminar';";
$trans["Description"]			= "\$text = 'Descripción';";
$trans["Member Classifications List"]	= "\$text = 'Grupos de usuarios:';";
$trans["Members"]			= "\$text = 'Usuarios';";
$trans["Max. Fines"]			= "\$text = 'Máximo de multas';";
$trans["Custom Member Fields"]		= "\$text = 'Grados de usuario:';";
$trans["Add new custom field"]		= "\$text = 'Añadir nuevo grado de usuario';";
$trans["Character set"]			= "\$text = 'Juego de caracteres';";
$trans["adminFormNote"]			= "\$text = '*Nota:';";
$trans["adminAWSNote"]			= "\$text = 'Puedes crear tu cuenta AWS desde <a href=\"http://aws.amazon.com/\">Amazon</a> en \'Crear cuenta AWS\' menú.<br />
When registration done, you can find all options that is required in %cover_opt_menu% in Account > Security Credentials page';";
$trans["adminZ3950Note"]		= "\$text = '\'%fiction_code%\' opción siempre se utiliza en \'%lookup_bulk%\' página, como predeterminado para elementos nuevos.';";
$trans["adminMbrListNote"]		= "\$text = 'La función de eliminación sólo está disponible en las clasificaciones que tienen un recuento de los miembros de cero. Si desea eliminar una clasificación con un número de miembros superior a cero por primera vez tendrá que cambiar a los miembros de otra clasificación.';";
$trans["Import"]			= "\$text = 'Importar';";
$trans["Add new classification type"]	= "\$text = 'Agregar nuevo tipo de clasificación';";
$trans["Edit Classification Type"]	= "\$text = 'Editar tipo de clasificación';";
$trans["Description:"]			= "\$text = 'Descripción:';";
$trans["Max. Fines:"]			= "\$text = 'Max. multas:';";
$trans["Add custom member field"]	= "\$text = 'Añadir campo de miembro personalizados';";
$trans["Edit Member Field"]		= "\$text = 'Editar campo de miembro';";
$trans["Code"]				= "\$text = 'código';";
$trans["Code:"]				= "\$text ='Código:';";
$trans["memberFieldDelConfirm"]		= "\$text = '¿Está seguro que desea eliminar el campo \'%desc%\'?';";
$trans["MARC Fields"]			= "\$text = 'Campos MARC';";
$trans["materialAddCustomMarc"]		= "\$text = 'Agregar un campo MARC para este tipo de materiales';";
$trans["Field"]				= "\$text = 'Campo';";
$trans["Value"]				= "\$text = 'Valor';";
$trans["Tag"]				= "\$text = 'etiqueta [Tag]';";
$trans["Select"]			= "\$text = 'Seleccionar';";
$trans["Subfield Code"]			= "\$text = 'Código de subcampo';";
$trans["Required?"]			= "\$text = 'Requerido?';";
$trans["cntrltype"]			= "\$text = 'Tipo de control';";
$trans["TRUE"]				= "\$text = 'Verdadero';";
$trans["FALSE"]				= "\$text = 'FALSO';";
$trans["Text Field"]			= "\$text = 'Campo de texto';";
$trans["Text Area"]			= "\$text = 'Área de texto';";
$trans["New Field Added Successfully"]	= "\$text = 'Nuevo campo agregado con éxito';";
$trans["Field Successfully Deleted"]	= "\$text = 'Campo se ha eliminado correctamente';";
$trans["Edit Checkout Privileges"]	= "\$text = 'Campo sí ha eliminado correctamente';";
$trans["Material Type:"]		= "\$text = 'Tipo de material:';";
$trans["Member Classification:"]	= "\$text = 'Clasificación de miembro:';";

#****************************************************************************
#* Validation errors
#****************************************************************************
$trans["Session timeout must be numeric."]		= "\$text = 'Tiempo de espera de sesión debe ser numérico [timeout].';";
$trans["Session timeout must be greater than 0."]	= "\$text = 'Tiempo de espera de sesión debe ser mayor que 0.';";
$trans["Items per page must be numeric."]		= "\$text = 'Artículos por página debe ser numérico.';";
$trans["Items per page must be greater than 0."]	= "\$text = 'Artículos por página debe ser mayor que 0.';";
$trans["Months must be numeric."]			= "\$text = 'Meses debe ser numérico.';";
$trans["Days must be numeric."]				= "\$text = 'Días debe ser numérico.';";

#****************************************************************************
#* Translation text for page staff_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialstate"]	= "\$text = 'Agregar un Estado de Materiales';";
$trans["Medienstatus"]				= "\$text = 'Estados de los Materiales';";
$trans["admin_materials_Comment_end"]		= "\$text = 'Los marcados con * no son modificables';";
$trans["admin_materials_listFunction"]		= "\$text = 'Función';";
$trans["admin_materials_listDescription"]	= "\$text = 'Descripción';";
$trans["admin_materials_Abrev"]			= "\$text = 'Abrev.';";
$trans["admin_materials_listMaterialstate"]	= "\$text = 'Estado de Materiales';";
$trans["Note-1-admin"]				= "\$text = '
Si el valor del mes de la historia de la purga es mayor que cero, los valores en las estadísticas de informes de cambio en el tiempo.
Los datos de los informes de las estadísticas deben ser guardados fuera de Espabiblio para referencia futura.';";

#****************************************************************************
#* Translation text for page staff_list.php
#****************************************************************************
$trans["admin-Translate"]	= "\$text = 'Administrador de Traducciones';";
$trans["admin-transAdver"]	= "\$text = 'Respalde sus archivos de la carpeta locale';";
$trans["admin-transPrev"]	= "\$text = 'Función de prueba observaciones o fallos favor de comunicar a joanlanga@hotmail';";
$trans["Clave"]			= "\$text = 'Clave';";
$trans["English"]		= "\$text = 'Ingles';";
$trans["lang"]			= "\$text = 'Español';";
$trans["admin-transDel"]	= "\$text = 'Eliminar';";
$trans["admin-transNewEntry"]	= "\$text = 'Agregar nueva entrada';";
$trans["admin-transSubmit"]	= "\$text = 'Enviar';";


#****************************************************************************
#* Translation text for page copy_fields_list.php Custom Copy Fields
#****************************************************************************
$trans["Custom Copy Fields"]	= "\$text = 'Personalizacion de campos de copias';";
$trans["Copy field, %desc%, has been added."]	= "\$text = 'El campo de para copia, %desc%, fue agregado.';";
$trans["return to copy fields list"]	= "\$text = 'Regresar a Personalización de Campos de datos para las copias.';";
$trans["Add new custom field list"]	= "\$text = 'Agregar nueva Personalización de Campos de datos para las copias.';";
$trans["Add custom copy field"]	= "\$text = 'Agregar nueva Personalización de Campos de datos para las copias.';";
$trans["Are you sure you want to delete field %desc% ?"]	= "\$text = 'Borrar Personalización de Campos de datos para las copias  %desc% ?.';";