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
$trans["circCancel"]              = "\$text = 'Anuluj';";
$trans["circDelete"]              = "\$text = 'Usuń';";
$trans["circLogout"]              = "\$text = 'Wyloguj';";
$trans["circAdd"]                 = "\$text = 'Dodaj';";
$trans["mbrDupBarcode"]           = "\$text = 'Ten kod kreskowy, %barcode%, jest już używany.';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["circSuspend"]             = "\$text = 'Zawieszenie';";
$trans["circPermanentlyDelete"]   = "\$text = 'Usuń zupełnie';";
$trans["adminStaff_pass_user_reset_Passwordreset"]   = "\$text = 'Hasło zmieniono';";
$trans["adminStaff_Return"]   = "\$text = 'Regresar a administrados de usarlos';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='Obsługa czytelników';";
$trans["indexCardHdr"]            = "\$text='Logowanie czytelnika:';";
$trans["indexCard"]               = "\$text='Numer karty:';";
$trans["indexSearch"]             = "\$text='Szukaj';";
$trans["indexNameHdr"]            = "\$text='Szukaj czytelnika po nazwisku:';";
$trans["indexName"]               = "\$text='Nazwisko zawiera:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["MailingAddress:"] = "\$text='Adres:';";
$trans["mbrNewForm"]              = "\$text='Dodaj';";
$trans["mbrEditForm"]             = "\$text='Edytuj';";
$trans["mbrFldsHeader"]           = "\$text='Nazwa:';";
$trans["mbrFldsCardNmbr"]         = "\$text='Numer karty';";
$trans["mbrFldsLastName"]         = "\$text='Nazwisko:';";
$trans["mbrFldsFirstName"]        = "\$text='Imię:';";
$trans["mbrFldsAddr1"]            = "\$text='Adres:';";
$trans["mbrFldsAddr2"]            = "\$text='Adres cd:';";
$trans["mbrFldsCity"]             = "\$text='Miasto:';";
$trans["mbrFldsStateZip"]         = "\$text='Kod pocztowy:';";
$trans["mbrFldsHomePhone"]        = "\$text='Telefon domowy:';";
$trans["mbrFldsWorkPhone"]        = "\$text='Telefon do pracy:';";
$trans["mbrFldsCel"]              = "\$text='tel. komórkowy:';";
$trans["mbrFldsEmail"]            = "\$text='Email:';";
$trans["mbrFldsPassUser"]         = "\$text='Hasło:';";
$trans["mbrFldsBornDt"]           = "\$text='Data urodzenia </br> (año-mes-dia):';";
$trans["mbrFldsOther"]            = "\$text='Uwagi:';";
$trans["mbrFldsClassify"]         = "\$text='Klasyfikacja:';";
$trans["mbrFldsGrade"]            = "\$text='Curso:';";
$trans["mbrFldsTeacher"]          = "\$text='Tutor:';";
$trans["mbrFldsSubmit"]           = "\$text='OK';";
$trans["mbrFldsCancel"]           = "\$text='Anuluj';";
$trans["mbrsearchResult"]         = "\$text='Wyniki: ';";
$trans["mbrsearchprev"]           = "\$text='Wstecz';";
$trans["mbrsearchnext"]           = "\$text='Dalej';";
$trans["First"]                   = "\$text='Pierwszy';";
$trans["Last"]                    = "\$text='Ostani';";
$trans["mbrsearchNoResults"]      = "\$text='Brak elementów do wyświetlenia.';";
$trans["mbrsearchFoundResults"]   = "\$text=' Wyniki.';";
$trans["mbrsearchSearchResults"]  = "\$text='Wyniki wyszukiwania:';";
$trans["mbrsearchCardNumber"]     = "\$text='Numer karty:';";
$trans["mbrsearchClassification"] = "\$text='Klasyfikacja czytelnika:';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["mbrFldsStatus"]           = "\$text='Status:';";
$trans["mbrsearchStatus"]         = "\$text='Status:';";
$trans["mbrActive"]               = "\$text='aktywny';";
$trans["mbrInactive"]             = "\$text='nieaktywny';";
$trans["mbrAutoBarcode"]          = "\$text='Generuj kod automatycznie';";
$trans["mbrLatestBarcode"]        = "\$text='Ostatnio dodany kod.';";
$trans["mbrViewLastActDate"]      = "\$text='Ostatnia aktywność:';";
//$trans["mbrFormattedDate"]        = "\$text=date('D M A - H:m', strtotime('%date%'));";
$trans["mbrFormattedDate"]        = "\$text=date('d M Y - H:m', strtotime('%date%'));";
$trans["mbrFormattedDateOld"]     = "\$text=date('Y-M-d', strtotime('%date%'));";

// usado para fotos de miembros.
$trans["mbrFldsFoto"]            = "\$text='Foto: </br> Si exite en ../media/lectores';";
$trans["Seleccione_Foto"]        = "\$text='Seleccione archivo de Foto: </br>*Sera copiado automatico a ../media/lector';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='Dodano.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Zmiany zapisano poprawnie.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='Informacje o czytelniku:';";
$trans["mbrViewName"]             = "\$text='Nazwisko:';";
$trans["mbrViewAddr"]             = "\$text='Adres:';";
$trans["mbrViewCardNmbr"]         = "\$text='Numer karty:';";
$trans["mbrViewClassify"]         = "\$text='Klasyfikacja:';";
$trans["mbrViewPhone"]            = "\$text='Telefon:';";
$trans["mbrViewPhoneHome"]        = "\$text='tel. domowy:';";
$trans["mbrViewPhoneWork"]        = "\$text='tel. do pracy:';";
$trans["mbrViewCel"]        = "\$text='tel. komórkowy:';";
$trans["mbrViewEmail"]            = "\$text='Email:';";
$trans["mbrViewPassUser"]            = "\$text='Hasło:';";
$trans["mbrViewBornDt"]            = "\$text='Data urodzenia:';";
$trans["mbrViewOther"]            = "\$text='Uwagi:';";
$trans["mbrViewGrade"]            = "\$text='Klasa:';";
$trans["mbrViewTeacher"]          = "\$text='Wychowawca:';";
$trans["mbrViewHead2"]            = "\$text='Historia wypożyczeń:';";
$trans["mbrViewStatColHdr1"]      = "\$text='Materiał';";
$trans["mbrViewStatColHdr2"]      = "\$text='Liczba';";
$trans["mbrViewStatColHdr3"]      = "\$text='Limit';";
$trans["mbrViewStatColHdr4"]      = "\$text='Liczba';";
$trans["mbrViewStatColHdr5"]      = "\$text='Limit';";
$trans["mbrViewHead3"]            = "\$text='Wypożyczeń:';";
$trans["mbrViewBarcode"]          = "\$text='Kod kreskowy:';";
$trans["mbrViewCheckOut"]         = "\$text='Wypożycz';";
$trans["mbrViewHead4"]            = "\$text='Pozycje aktualnie wypożyczone:';";
$trans["mbrViewOutHdr1"]          = "\$text='Wypożycz';";
$trans["mbrViewOutHdr2"]          = "\$text='Materiał';";
$trans["mbrViewOutHdr3"]          = "\$text='Kod kreskowy';";
$trans["mbrViewOutHdr4"]          = "\$text='Tytuł';";
$trans["mbrViewOutHdr5"]          = "\$text='Autor';";
$trans["mbrViewOutHdr6"]          = "\$text='Data zwrotu';";
$trans["mbrViewOutHdr7"]          = "\$text='Data skanowania';";
$trans["mbrViewOutHdr8"]          = "\$text='Przedłużenia';";
$trans["mbrViewOutHdr9"]          = "\$text='Czas';";
$trans["mbrViewOutHdr10"]         = "\$text='';";
$trans["To Shelving Cart"]        = "\$text='';";
$trans["mbrViewNoCheckouts"]      = "\$text='Brak wypożyczeń.';";
$trans["mbrViewHead5"]            = "\$text='Wyszukaj:';";
$trans["mbrViewHead6"]            = "\$text='Materiały zarezerwowane:';";
$trans["mbrViewPlaceHold"]        = "\$text='Zarezerwuj';";
$trans["mbrViewHoldHdr1"]         = "\$text='Funkcja';";
$trans["mbrViewHoldHdr2"]         = "\$text='Zarezerwowane';";
$trans["mbrViewHoldHdr3"]         = "\$text='Materiał';";
$trans["mbrViewHoldHdr4"]         = "\$text='Kod kreskowy';";
$trans["mbrViewHoldHdr5"]         = "\$text='Tytuł';";
$trans["mbrViewHoldHdr6"]         = "\$text='Autor';";
$trans["mbrViewHoldHdr7"]         = "\$text='Status';";
$trans["mbrViewHoldHdr8"]         = "\$text='Data zwrotu';";
$trans["mbrViewNoHolds"]          = "\$text='Brak elementów do wyświetlenia.';";
$trans["mbrViewBalMsg"]           = "\$text='Note: El usuario posee una cuenta pendiente %bal%.';";
$trans["mbrPrintCheckouts"]	    = "\$text='Drukuj stan konta';";
$trans["mbrViewDel"]              = "\$text='del';";

#* No estan en Openbiblio 7.1 adecuacion por jalg joanlga@hotmail.com
$trans["mbrPrintcarnet"]       = "\$text='Drukuj kartę';";
$trans["mbrViewBalMsg2"]          = "\$text = 'Nota: esta bibliografía ha %fee% [multado] con cargo por pago atrasado.';";
$trans["mbrViewStatColHdr4"]      = "\$text='Seleccionar';";
$trans["mbrViewStatColHdr5"]      = "\$text='Przedłuż';";
$trans["mbrViewStatus"]           = "\$text='Status:';";

#****** jalg,  Modificado para mostrar imagen de usuario
$trans["mbrViewHead8"]            = "\$text='Imagen del Lector:';";
$trans["mbrViewFotHdr1"]          = "\$text='Archivo de la Foto';";
$trans["mbrViewHead_foto"]            = "\$text='Imprimir Carnet:';";//debug
#****** jalg,  Modificado para mostrar imagen de usuario


$trans["mbrViewHead9"]            = "\$text='Zmień hasło:';";


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
$trans["mbrImportCompleted"]  = "\$text='Miembros hayan sido importados';";

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
$trans["mbrPrintCarnetTitle"]  = "\$text='Karta %mbrName%';";
  $trans["Renew All"]  = "\$text='Przedłuż wszystko';";

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

$trans["Reset pass"]				= "\$text = 'Zmiana hasła ';";
$trans["member_list_Pwd"]			= "\$text = 'Numer karty: ';";
$trans["loginFormPassword"]			= "\$text = 'Hasło';";
$trans["indexHeadingUser"]			= "\$text = 'Logowanie czytelnika';";
$trans["loginFormLogin"]			= "\$text = 'Zaloguj';";

#* user_pwd-reset 
$trans["adminStaff_pwd_reset_form_Resetheader"]			= "\$text = 'Zmień hasło';";
$trans["adminStaff_new_form_Reenterpassword"]			= "\$text = 'Wpisz ponownie';";
$trans["adminStaff_new_form_Password"]			= "\$text = 'hasło czytelnika';";
$trans["adminCancel"]			= "\$text = 'Anuluj';";
$trans["adminSubmit"]			= "\$text = 'OK';";
