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
$trans["circCancel"]              = "\$text = 'Cancelar';";
$trans["circDelete"]              = "\$text = 'Borrar';";
$trans["circLogout"]              = "\$text = 'Salir';";
$trans["circAdd"]                 = "\$text = 'Añadir';";
$trans["mbrDupBarcode"]           = "\$text = 'Código de barras, %barcode%, ya está en uso.';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["circSuspend"]             = "\$text = 'suspensión';";
$trans["circPermanentlyDelete"]   = "\$text = 'Eliminar permanentemente';";
$trans["adminStaff_pass_user_reset_Passwordreset"]   = "\$text = 'PassWord Cambiado correctamente';";
$trans["adminStaff_Return"]   = "\$text = 'Regresar a administrados de usarlos';";



#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='Circulación';";
$trans["indexCardHdr"]            = "\$text='Buscar socio por número de Tarjeta:';";
$trans["indexCard"]               = "\$text='Número de Tarjeta:';";
$trans["indexSearch"]             = "\$text='Buscar';";
$trans["indexNameHdr"]            = "\$text='Buscar socio por apellido:';";
$trans["indexName"]               = "\$text='Apellido comienza por:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["MailingAddress:"] = "\$text='Dirección postal:';";
$trans["mbrNewForm"]              = "\$text='Añadir nuevo';";
$trans["mbrEditForm"]             = "\$text='Editar';";
$trans["mbrFldsHeader"]           = "\$text='Socio:';";
$trans["mbrFldsCardNmbr"]         = "\$text='Número de carnet:';";
$trans["mbrFldsLastName"]         = "\$text='Apellido:';";
$trans["mbrFldsFirstName"]        = "\$text='Nombre:';";
$trans["mbrFldsAddr1"]            = "\$text='Dirección:';";
$trans["mbrFldsAddr2"]            = "\$text='Dirección2:';";
$trans["mbrFldsCity"]             = "\$text='Ciudad:';";
$trans["mbrFldsStateZip"]         = "\$text='Provincia, Código postal:';";
$trans["mbrFldsHomePhone"]        = "\$text='Teléfono:';";
$trans["mbrFldsWorkPhone"]        = "\$text='Teléfono trabajo:';";
$trans["mbrFldsCel"]              = "\$text='Celular:';";
$trans["mbrFldsEmail"]            = "\$text='Email:';";
$trans["mbrFldsPassUser"]         = "\$text='Clave acceso:';";
$trans["mbrFldsBornDt"]           = "\$text='Fecha de nacimiento </br> (año-mes-dia):';";
$trans["mbrFldsOther"]            = "\$text='Observaciones:';";
$trans["mbrFldsClassify"]         = "\$text='Clasificación: (Grupos de usuarios)';";
$trans["mbrFldsGrade"]            = "\$text='Curso:';";
$trans["mbrFldsTeacher"]          = "\$text='Tutor:';";
$trans["mbrFldsSubmit"]           = "\$text='Enviar';";
$trans["mbrFldsCancel"]           = "\$text='Cancelar';";
$trans["mbrsearchResult"]         = "\$text='Páginas de Resultados: ';";
$trans["mbrsearchprev"]           = "\$text='Anterior';";
$trans["mbrsearchnext"]           = "\$text='Siguiente';";
$trans["First"]                   = "\$text='Primera';";
$trans["Last"]                    = "\$text='Final';";
$trans["mbrsearchNoResults"]      = "\$text='No se encontró un resultado.';";
$trans["mbrsearchFoundResults"]   = "\$text=' Resultados encontrados.';";
$trans["mbrsearchSearchResults"]  = "\$text='Resultados de la búsqueda:';";
$trans["mbrsearchCardNumber"]     = "\$text='Número de Tarjeta:';";
$trans["mbrsearchClassification"] = "\$text='Clasificación:';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["mbrFldsStatus"]           = "\$text='estado:';";
$trans["mbrsearchStatus"]         = "\$text='Estado:';";
$trans["mbrActive"]               = "\$text='vigente';";
$trans["mbrInactive"]             = "\$text='inactivo';";
$trans["mbrAutoBarcode"]          = "\$text='usar códigos de barras automáticos';";
$trans["mbrLatestBarcode"]        = "\$text='El último número de código de barras.';";
$trans["mbrViewLastActDate"]      = "\$text='la última actividad:';";
//$trans["mbrFormattedDate"]        = "\$text=date('D M A - H:m', strtotime('%date%'));";
$trans["mbrFormattedDate"]        = "\$text=date('d M Y - H:m', strtotime('%date%'));";
$trans["mbrFormattedDateOld"]     = "\$text=date('Y-M-d', strtotime('%date%'));";

// usado para fotos de miembros.
$trans["mbrFldsFoto"]            = "\$text='Foto: </br> Si exite en ../media/lectores';";
$trans["Seleccione_Foto"]        = "\$text='Seleccione archivo de Foto: </br>*Sera copiado automatico a ../media/lector';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='Socio añadido a la base de datos correctamente.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Datos de socio actualizados correctamente.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='Información de socios:';";
$trans["mbrViewName"]             = "\$text='Nombre:';";
$trans["mbrViewAddr"]             = "\$text='Dirección:';";
$trans["mbrViewCardNmbr"]         = "\$text='Número de Tarjeta:';";
$trans["mbrViewClassify"]         = "\$text='Clasificación:';";
$trans["mbrViewPhone"]            = "\$text='Teléfono:';";
$trans["mbrViewPhoneHome"]        = "\$text='Casa:';";
$trans["mbrViewPhoneWork"]        = "\$text='Trabajo:';";
$trans["mbrViewCel"]        = "\$text='Celular:';";
$trans["mbrViewEmail"]            = "\$text='Email:';";
$trans["mbrViewPassUser"]            = "\$text='Clave acceso:';";
$trans["mbrViewBornDt"]            = "\$text='Fecha de nacimiento:';";
$trans["mbrViewOther"]            = "\$text='Observaciones:';";
$trans["mbrViewGrade"]            = "\$text='Curso:';";
$trans["mbrViewTeacher"]          = "\$text='Tutor:';";
$trans["mbrViewHead2"]            = "\$text='Historial Préstamos:';";
$trans["mbrViewStatColHdr1"]      = "\$text='Material';";
$trans["mbrViewStatColHdr2"]      = "\$text='Cantidad';";
$trans["mbrViewStatColHdr3"]      = "\$text='Límite';";
$trans["mbrViewStatColHdr4"]      = "\$text='Cantidad';";
$trans["mbrViewStatColHdr5"]      = "\$text='Límite';";
$trans["mbrViewHead3"]            = "\$text='Préstamo:';";
$trans["mbrViewBarcode"]          = "\$text='Código de barras:';";
$trans["mbrViewCheckOut"]         = "\$text='Prestar';";
$trans["mbrViewHead4"]            = "\$text='Material actualmente prestado:';";
$trans["mbrViewOutHdr1"]          = "\$text='Prestado';";
$trans["mbrViewOutHdr2"]          = "\$text='Material';";
$trans["mbrViewOutHdr3"]          = "\$text='Código de barras';";
$trans["mbrViewOutHdr4"]          = "\$text='Título';";
$trans["mbrViewOutHdr5"]          = "\$text='Autor';";
$trans["mbrViewOutHdr6"]          = "\$text='Fecha de devolución';";
$trans["mbrViewOutHdr7"]          = "\$text='Días de retraso';";
$trans["mbrViewOutHdr8"]          = "\$text='Renovar';";
$trans["mbrViewOutHdr9"]          = "\$text='Hora/s';";
$trans["mbrViewOutHdr10"]         = "\$text='Registrarse';";
$trans["To Shelving Cart"]        = "\$text='Cesta Para Estanterías';";
$trans["mbrViewNoCheckouts"]      = "\$text='No tiene material prestado.';";
$trans["mbrViewHead5"]            = "\$text='Consulta:';";
$trans["mbrViewHead6"]            = "\$text='Material actualmente en reserva:';";
$trans["mbrViewPlaceHold"]        = "\$text='Reservar';";
$trans["mbrViewHoldHdr1"]         = "\$text='Función';";
$trans["mbrViewHoldHdr2"]         = "\$text='En reserva';";
$trans["mbrViewHoldHdr3"]         = "\$text='Material';";
$trans["mbrViewHoldHdr4"]         = "\$text='Código de barras';";
$trans["mbrViewHoldHdr5"]         = "\$text='Título';";
$trans["mbrViewHoldHdr6"]         = "\$text='Autor';";
$trans["mbrViewHoldHdr7"]         = "\$text='Estado';";
$trans["mbrViewHoldHdr8"]         = "\$text='Fecha de devolución';";
$trans["mbrViewNoHolds"]          = "\$text='No hay bibliografías actualmente en espera.';";
$trans["mbrViewBalMsg"]           = "\$text='Note: El usuario posee una cuenta pendiente %bal%.';";
$trans["mbrPrintCheckouts"]	    = "\$text='Imprimir salidas';";
$trans["mbrViewDel"]              = "\$text='del';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["mbrPrintcarnet"]       = "\$text='Imprimir carnet';";
$trans["mbrViewBalMsg2"]          = "\$text = 'Nota: esta bibliografía ha %fee% [multado] con cargo por pago atrasado.';";
$trans["mbrViewStatColHdr4"]      = "\$text='Seleccionar';";
$trans["mbrViewStatColHdr5"]      = "\$text='Renovar';";
$trans["mbrViewStatus"]           = "\$text='Status:';";

#****** jalg,  Modificado para mostrar imagen de usuario
$trans["mbrViewHead8"]            = "\$text='Imagen del Lector:';";
$trans["mbrViewFotHdr1"]          = "\$text='Archivo de la Foto';";
$trans["mbrViewHead_foto"]            = "\$text='Imprimir Carnet:';";//debug
#****** jalg,  Modificado para mostrar imagen de usuario

$trans["mbrViewHead9"]            = "\$text='Cambio de Contraseña:';";


#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='Los socios deben pagar el saldo pendiente en su cuenta antes de solicitar un libro.';";
$trans["checkoutErr1"]            = "\$text='el número del código de barras debe ser completamente alfanumérico.';";
$trans["checkoutErr2"]            = "\$text='No se encontró bibliografía con ese código de barras.';";
$trans["checkoutErr3"]            = "\$text='La bibliografía con el código de barras %barcode% ya ha sido prestada.';";
$trans["checkoutErr4"]            = "\$text='La bibliografía con código de barras número %barcode% no está disponible para el préstamo.';";
$trans["checkoutErr5"]            = "\$text='La bibliografía con código de barras número %barcode% está actualmente siendo utilizada por otro socio.';";
$trans["checkoutErr6"]            = "\$text='El socio ha alcanzado el tiempo límite de préstamo en el tipo de material bibliográfico especificado.';";
$trans["checkoutErr7"]            = "\$text='El registro con código %barcode% ha alcanzo el limite para su renovación.';";
$trans["checkoutErr8"]            = "\$text='Es demasiado tarde para renovar el registro con código %barcode%.';";
#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****** jalg,  Modificado para mostrar imagen de usuario
$trans["checkoutErr9"]            = "\$text='Este miembro ese inactivo, no se puede ver, renovar o mantener ninguna copia.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='El número del código de barras debe ser completamente alfanumérico.';";
$trans["shelvingCartErr2"]        = "\$text='No se encontró ninguna bibliografía con ese número de código de barras.';";
$trans["shelvingCartTrans"]       = "\$text='Multa por retraso en la devolución (barcode=%barcode%)';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****** jalg,  Modificado para mostrar imagen de usuario
$trans["shelvingCartErr3"]        = "\$text='Esta copia no está activada todavía.';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='Devolución:';";
$trans["checkinFormBarcode"]      = "\$text='Código de barras:';";
$trans["checkinFormShelveButton"] = "\$text='Añadir al carrito de reposición en las estanterías';";
$trans["checkinFormCheckinLink1"] = "\$text='Devolver el material seleccionado';";
$trans["checkinFormCheckinLink2"] = "\$text='Devolver todo';";
$trans["checkinFormHdr2"]         = "\$text='Lista actual del carrito de reposición en las estanterías:';";
$trans["checkinFormColHdr1"]      = "\$text='Fecha de escaneado';";
$trans["checkinFormColHdr2"]      = "\$text='Código de barras';";
$trans["checkinFormColHdr3"]      = "\$text='Título';";
$trans["checkinFormColHdr4"]      = "\$text='Autor';";
$trans["checkinFormEmptyCart"]    = "\$text='En la actualidad no hay items en meson para reponerlos en las estanterías.';";
#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****** jalg,  Modificado para mostrar imagen de usuario
$trans["checkinDone1"]                  = "\$text='Registrado en [Checked in] %barcode% de %fname% %lname%.';";
$trans["checkinDone2"]                  = "\$text='Registrado en [Checked in] %barcode%.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='No se ha seleccionado ningún artículo.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='La bibliografía está prestada!';";
$trans["holdMessageMsg1"]         = "\$text='La bibliografía con número de código de barras %barcode% que estás intentando conseguir tiene una o más peticiones de reserva.  <b>Por favor, retorna el item en las estanterías .</b>  El código de estado de esta bibliografía ha quedado libre para su uso.';";
$trans["holdMessageMsg2"]         = "\$text='Volver a la devolución del Items.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='El código de barras debe ser numérico.';";
$trans["placeHoldErr2"]           = "\$text='Código no existe.';";
$trans["placeHoldErr3"]           = "\$text='El socio cancelo la reserva el item -- Por lo que noesta reservado.';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["placeHoldErrNotChkOut"]       = "\$text='Este elemento no está desprotegido [This item is not checked out].';";
$trans["placeHoldErrDup"]       = "\$text='Este miembro ya se ha solicitado llevar a cabo esta copia. [This member already requested to hold this copy].';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'El socio, %name%, tiene %checkoutCount% préstamos y %holdCount% peticiones de uso.  Todos los materiales prestados deben ser devueltos y todas las peticiones de uso borradas antes de eliminar a este socio.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'Volver a la información del socio';";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Estás seguro de que quieres borrar al socio, %name%?  Esto también borrará todo el historial de préstamos de este socio.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='Socio, %name%, borrado.';";
$trans["mbrDelReturn"]            = "\$text='Volver a Buscar socio';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["mbrSuspendSuccess"]       = "\$text='Socio, %name%, ha sido suspendido.';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='Historial de préstamos del socio:';";
$trans["mbrHistoryNoHist"]        = "\$text='No se encontró ningún historial.';";
$trans["mbrHistoryHdr1"]          = "\$text='Código de barras';";
$trans["mbrHistoryHdr2"]          = "\$text='Título';";
$trans["mbrHistoryHdr3"]          = "\$text='Autor';";
$trans["mbrHistoryHdr4"]          = "\$text='Nuevo estado';";
$trans["mbrHistoryHdr5"]          = "\$text='Fecha de cambio de estado';";
$trans["mbrHistoryHdr6"]          = "\$text='Fecha de devolución';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='Agregar una transacción:';";
$trans["mbrAccountTransTyp"]      = "\$text='Tipo de transacción:';";
$trans["mbrAccountAmount"]        = "\$text='monto:';";
$trans["mbrAccountDesc"]          = "\$text='Descripción:';";
$trans["mbrAccountHead1"]         = "\$text='Transacciones del socio con Cuenta:';";
$trans["mbrAccountNoTrans"]       = "\$text='No existen transacciones .';";
$trans["mbrAccountOpenBal"]       = "\$text='Saldo inicial';";
$trans["mbrAccountDel"]           = "\$text='Borrar';";
$trans["mbrAccountHdr1"]          = "\$text='Función';";
$trans["mbrAccountHdr2"]          = "\$text='Fecha';";
$trans["mbrAccountHdr3"]          = "\$text='Tipo de transacción';";
$trans["mbrAccountHdr4"]          = "\$text='Descripción';";
$trans["mbrAccountHdr5"]          = "\$text='monto';";
$trans["mbrAccountHdr6"]          = "\$text='Balance';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='Transacción realizada correctamente.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Estás seguro de que quieres eliminar esta transacción?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Transacción eliminada correctamente.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Préstamos de %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Fecha:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Socio:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Número de carnet:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Clasificación:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Cerrar ventana';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
#****************************************************************************
#*  Translation text for page csv_import.php
#****************************************************************************
$trans["CSVImportHeader"]     = "\$text='Importar lista de miembros de un archivo CSV.';";
$trans["mbrCannotOpenFile"]   = "\$text='No se puede abrir el archivo';";
$trans["mbrCannotUploadFile"] = "\$text='No se puede cargar el archivo';";
$trans["mbrImportCompleted"]  = "\$text='Miembros han sido importados';";

$trans["CSVImportStatus"]		= "\$text = 'hecho: %done%, Copia: %copy%, fallos: %failed%';";
$trans["CSVImportContinue"]		= "\$text = 'continuar las importaciones';";
$trans["CSVImportSizeLimitNotes"]	= "\$text = '<strong>Nota:</strong>  El Tamaño de los Archivos debe ser inferior a (Para el archivo de gran tamaño puede dividirse en varios archivos antes de subirlos) ';";
$trans["CSVLabel"]			= "\$text = 'Seleccionar el archivo CSV (use <a href=\"csv_template_member.csv\">archivo de plantilla</a>, Para más información ver <a href=\"javascript:popSecondary(\'../shared/help.php?page=CsvImport\')\">Ayuda</a>):';";
$trans["UploadFile"]  = "\$text='Cargar';";


#****************************************************************************
#*  Translation text for Error message
#****************************************************************************
$trans["Card number is required."]  = "\$text = 'El número de tarjeta es necesario.';";
$trans["Card number must be all alphabetic and numeric characters."] = "\$text = 'Número de la tarjeta debe ser todos los caracteres alfabéticos y numéricos.';";
$trans["Last name is required."]       = "\$text = 'El Apellido es requerido.';";
$trans["First name is required."]       = "\$text = 'Nombre es requerido.';";
$trans["Status options is incorrect."] = "\$text = 'Opciones de estado no es correcto.';";

#****************************************************************************
#*  Translation text for page mbr_print_Carnet.php
#****************************************************************************
$trans["mbrPrintCarnetTitle"]  = "\$text='Carnet de %mbrName%';";
$trans["Renew All"]  = "\$text='Renovar todo';";

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

$trans["Override Due Date"]			= "\$text = 'Invalidar Fecha de vencimiento';";
$trans["Reset pass"]				= "\$text = 'Cambiar contraseña ';";
$trans["member_list_Pwd"]			= "\$text = 'No. de tarjeta: ';";

#* user_pwd-reset 
$trans["adminStaff_pwd_reset_form_Resetheader"]			= "\$text = 'Cambiar la clave de acceso';";
$trans["adminStaff_new_form_Reenterpassword"]			= "\$text = 'Confirmar clave de acceso';";
$trans["adminStaff_new_form_Password"]			= "\$text = 'Nueva clave de acceso';";
$trans["adminCancel"]			= "\$text = 'Cancelar';";
$trans["adminSubmit"]			= "\$text = 'Aceptar';";
