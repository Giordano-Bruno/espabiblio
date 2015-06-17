<?php
/* Este archivo es parte de un trabajo protegido por derechos de autor, Se distribuye SIN GARANTIA.
 * Vea el archivo COPYRIGHT.html para más detalles.
 * EspaBiblio Versión 2.0 Basado en OpenBiblio 0.6.0<br />
 * Jorge Lara Cravero, Chile
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
$trans["mbrDupBarcode"]           = "\$text = 'Código de inventario, %barcode%, ya está en uso.';";
#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='Circulación';";
$trans["indexCardHdr"]            = "\$text='Buscar usuario por número de identificación:';";
$trans["indexCard"]               = "\$text='Número de Tarjeta:';";
$trans["indexSearch"]             = "\$text='Buscar';";
$trans["indexNameHdr"]            = "\$text='Buscar usuario por apellido:';";
$trans["indexName"]               = "\$text='Apellido comienza por:';";
#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='Dirección postal:';";
$trans["mbrNewForm"]              = "\$text='Adicionar nuevo';";
$trans["mbrEditForm"]             = "\$text='Editar';";
$trans["mbrFldsHeader"]           = "\$text='usuario:';";
$trans["mbrFldsCardNmbr"]         = "\$text='Número de identificación:';";
$trans["mbrFldsLastName"]         = "\$text='Apellido:';";
$trans["mbrFldsFirstName"]        = "\$text='Nombre:';";
$trans["mbrFldsAddr1"]            = "\$text='Dirección:';";
$trans["mbrFldsAddr2"]            = "\$text='Dirección2:';";
$trans["mbrFldsCity"]             = "\$text='Ciudad:';";
$trans["mbrFldsStateZip"]         = "\$text='Provincia, Código postal:';";
$trans["mbrFldsHomePhone"]        = "\$text='Teléfono:';";
$trans["mbrFldsWorkPhone"]        = "\$text='Teléfono trabajo:';";
$trans["mbrFldsEmail"]            = "\$text='Email:';";
$trans["mbrFldsClassify"]         = "\$text='Clasificación:';";
$trans["mbrFldsGrade"]            = "\$text='Curso:';";
$trans["mbrFldsTeacher"]          = "\$text='Tutor:';";
$trans["mbrFldsSubmit"]           = "\$text='Enviar';";
$trans["mbrFldsCancel"]           = "\$text='Cancelar';";
$trans["mbrsearchResult"]         = "\$text='Páginas de Resultados: ';";
$trans["mbrsearchprev"]           = "\$text='Anterior';";
$trans["mbrsearchnext"]           = "\$text='Siguiente';";
$trans["mbrsearchNoResults"]      = "\$text='No se encontro un resultado.';";
$trans["mbrsearchFoundResults"]   = "\$text='resultados encontrados.';";
$trans["mbrsearchSearchResults"]  = "\$text='Resultados de la búsqueda:';";
$trans["mbrsearchCardNumber"]     = "\$text='Número de Tarjeta:';";
$trans["mbrsearchClassification"] = "\$text='Clasificación:';";
#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='usuario añadido a la base de datos correctamente.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Datos de usuario actualizados correctamente.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='Información de usuarios:';";
$trans["mbrViewName"]             = "\$text='Nombre:';";
$trans["mbrViewAddr"]             = "\$text='Dirección:';";
$trans["mbrViewCardNmbr"]         = "\$text='Número de Tarjeta:';";
$trans["mbrViewClassify"]         = "\$text='Clasificación:';";
$trans["mbrViewPhone"]            = "\$text='Teléfono:';";
$trans["mbrViewPhoneHome"]        = "\$text='Casa:';";
$trans["mbrViewPhoneWork"]        = "\$text='Trabajo:';";
$trans["mbrViewEmail"]            = "\$text='Email:';";
$trans["mbrViewGrade"]            = "\$text='Curso:';";
$trans["mbrViewTeacher"]          = "\$text='Tutor:';";
$trans["mbrViewHead2"]            = "\$text='Historial Préstamos:';";
$trans["mbrViewStatColHdr1"]      = "\$text='Material';";
$trans["mbrViewStatColHdr2"]      = "\$text='Cantidad';";
$trans["mbrViewStatColHdr3"]      = "\$text='Límite';";
$trans["mbrViewStatColHdr4"]      = "\$text='Cantidad';";
$trans["mbrViewStatColHdr5"]      = "\$text='Límite';";
$trans["mbrViewHead3"]            = "\$text='Préstamo:';";
$trans["mbrViewBarcode"]          = "\$text='Código de inventario:';";
$trans["mbrViewCheckOut"]         = "\$text='Prestar';";
$trans["mbrViewHead4"]            = "\$text='Material actualmente prestado:';";
$trans["mbrViewOutHdr1"]          = "\$text='Prestado';";
$trans["mbrViewOutHdr2"]          = "\$text='Material';";
$trans["mbrViewOutHdr3"]          = "\$text='Código de inventario';";
$trans["mbrViewOutHdr4"]          = "\$text='Título';";
$trans["mbrViewOutHdr5"]          = "\$text='Autor';";
$trans["mbrViewOutHdr6"]          = "\$text='Fecha de devolución';";
$trans["mbrViewOutHdr7"]          = "\$text='Días de retraso';";
$trans["mbrViewOutHdr8"]          = "\$text='Renovar';";
$trans["mbrViewOutHdr9"]          = "\$text='Hora/s';";
$trans["mbrViewNoCheckouts"]      = "\$text='No tiene material prestado.';";
$trans["mbrViewHead5"]            = "\$text='Consulta:';";
$trans["mbrViewHead6"]            = "\$text='Material actualmente en reserva:';";
$trans["mbrViewPlaceHold"]        = "\$text='Reservar';";
$trans["mbrViewHoldHdr1"]         = "\$text='Función';";
$trans["mbrViewHoldHdr2"]         = "\$text='En reserva';";
$trans["mbrViewHoldHdr3"]         = "\$text='Material';";
$trans["mbrViewHoldHdr4"]         = "\$text='Código de inventario';";
$trans["mbrViewHoldHdr5"]         = "\$text='Título';";
$trans["mbrViewHoldHdr6"]         = "\$text='Autor';";
$trans["mbrViewHoldHdr7"]         = "\$text='Estado';";
$trans["mbrViewHoldHdr8"]         = "\$text='Fecha de devolución';";
$trans["mbrViewNoHolds"]          = "\$text='No posee material en reserva.';";
$trans["mbrViewBalMsg"]           = "\$text='Nota: el usuario tiene un saldo pendiente en su cuenta de %bal%.';";
$trans["mbrPrintCheckouts"]	  = "\$text='Imprimir Comprobante de Prestamos';";
$trans["mbrViewDel"]              = "\$text='borrar';";

#$trans["mbrViewStatColHdr4"]      = "\$text='Seleccionar';";
#$trans["mbrViewStatColHdr5"]      = "\$text='Renovar';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='Los usuarios deben pagar el saldo pendiente en su cuenta antes de solicitar un libro.';";
$trans["checkoutErr1"]            = "\$text='el número del código de inventario debe ser completamente alfanumérico.';";
$trans["checkoutErr2"]            = "\$text='No se encontró bibliografía con ese código de inventario.';";
$trans["checkoutErr3"]            = "\$text='La bibliografía con el código de inventario %barcode% ya ha sido prestada.';";
$trans["checkoutErr4"]            = "\$text='La bibliografía con código de inventario número %barcode% no está disponible para el préstamo.';";
$trans["checkoutErr5"]            = "\$text='La bibliografía con código de inventario número %barcode% está actualmente siendo utilizada por otro usuario.';";
$trans["checkoutErr6"]            = "\$text='El usuario ha alcanzado el tiempo límite de préstamo en el tipo de material bibliográfico especificado.';";
$trans["checkoutErr7"]            = "\$text='El item con codigo %barcode% ha alcanzo el limite para su renovación.';";
$trans["checkoutErr8"]            = "\$text='Es demasiado tarde para renovar el item codigo %barcode%.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='El número del código de inventario debe ser completamente alfanumérico.';";
$trans["shelvingCartErr2"]        = "\$text='No se encontró ninguna bibliografía con ese número de código de inventario.';";
$trans["shelvingCartTrans"]       = "\$text='Multa por retraso en la devolución (barcode=%barcode%)';";
#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='Devolución:';";
$trans["checkinFormBarcode"]      = "\$text='Código de inventario:';";
$trans["checkinFormShelveButton"] = "\$text='Añadir al carrito de reposición en las estanterías';";
$trans["checkinFormCheckinLink1"] = "\$text='Devolver el material seleccionado';";
$trans["checkinFormCheckinLink2"] = "\$text='Devolver todo';";
$trans["checkinFormHdr2"]         = "\$text='Lista actual del carrito de reposición en las estanterías:';";
$trans["checkinFormColHdr1"]      = "\$text='Fecha de escaneado';";
$trans["checkinFormColHdr2"]      = "\$text='Código de inventario';";
$trans["checkinFormColHdr3"]      = "\$text='Título';";
$trans["checkinFormColHdr4"]      = "\$text='Autor';";
$trans["checkinFormEmptyCart"]    = "\$text='En la actualidad no hay items en meson para reponerlos en las estanterías.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='No se ha seleccionado ningún artículo.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='Bibliography Has Been Placed On Hold!';";
$trans["holdMessageMsg1"]         = "\$text='The bibliography with barcode number %barcode% that you are attempting to check in has one or more hold requests placed on it.  <b>Please file this bibliography with your held items instead of placing it on your shelving cart.</b>  The status code for this bibliography has been set to hold.';";
$trans["holdMessageMsg2"]         = "\$text='Return to bibliography check in.';";

$trans["holdMessageHdr"]          = "\$text='La bibliografía está prestada!';";
$trans["holdMessageMsg1"]         = "\$text='La bibliografía con número de código de inventario %barcode% que estás intentando conseguir tiene una o más peticiones de reserva.  <b>Por favor, retorna el item en las estanterías .</b>  El código de estado de esta bibliografía ha quedado libre para su uso.';";
$trans["holdMessageMsg2"]         = "\$text='Volver a la devolución del Items.';";
#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='El código de inventario debe ser numérico.';";
$trans["placeHoldErr2"]           = "\$text='Coódigo no existe.';";
$trans["placeHoldErr3"]           = "\$text='El usuario cancelo la reserva el item -- not placing hold.';";
$trans["placeHoldErr4"]           = "\$text='Solo se puede reservar Recursos que no esten disponibles.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'El usuario, %name%, tiene %checkoutCount% préstamos y %holdCount% peticiones de uso.  Todos los materiales prestados deben ser devueltos y todas las peticiones de uso borradas antes de eliminar a este usuario.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'Volver a la información del usuario';";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Estás seguro de que quieres borrar al usuario, %name%?  Esto también borrará todo el historial de préstamos de este usuario.';";


#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='usuario, %name%, borrado.';";
$trans["mbrDelReturn"]            = "\$text='Volver a Buscar usuario';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='Historial de préstamos del usuario:';";
$trans["mbrHistoryNoHist"]        = "\$text='No se encontró ningún historial.';";
$trans["mbrHistoryHdr1"]          = "\$text='Código de inventario';";
$trans["mbrHistoryHdr2"]          = "\$text='Título';";
$trans["mbrHistoryHdr3"]          = "\$text='Autor';";
$trans["mbrHistoryHdr4"]          = "\$text='Nuevo estado';";
$trans["mbrHistoryHdr5"]          = "\$text='Fecha de cambio de estado';";
$trans["mbrHistoryHdr6"]          = "\$text='Fecha de devolución';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='Añadir una transacción:';";
$trans["mbrAccountTransTyp"]      = "\$text='Tipo de transacción:';";
$trans["mbrAccountAmount"]        = "\$text='Cantidad:';";
$trans["mbrAccountDesc"]          = "\$text='Descripción:';";
$trans["mbrAccountHead1"]         = "\$text='Multas:';";
$trans["mbrAccountNoTrans"]       = "\$text='No se encontraron transacciones.';";
$trans["mbrAccountOpenBal"]       = "\$text='Balance de apertura';";
$trans["mbrAccountDel"]           = "\$text='borrar';";
$trans["mbrAccountHdr1"]          = "\$text='Función';";
$trans["mbrAccountHdr2"]          = "\$text='Fecha';";
$trans["mbrAccountHdr3"]          = "\$text='Tipo de transacción';";
$trans["mbrAccountHdr4"]          = "\$text='Descripción';";
$trans["mbrAccountHdr5"]          = "\$text='Cantidad';";
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
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='usuario:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Número de identificación:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Clasificación:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Cerrar ventana';";
