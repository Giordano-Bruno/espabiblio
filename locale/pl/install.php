<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
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
 *     $trans["homeWelcome"]  = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"] = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"] = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */
#****************************************************************************
#*  Common translation Form install
#****************************************************************************
$trans["form_Database_connection_good"]	= "\$text = 'Połączenie z bazą danych jest dobra';";
$trans["form_Bad_date.timezone"]	= "\$text = 'Nie jest zdefiniowany w php.ini strefy czasowej i czasu \"date.timezone \" :';";
$trans["form_Licence"]			= "\$text = ' GNU General Public License (wersja 2, czerwiec 1991) ';";
$trans["form_Copring"]			= "\$text = ' Prawa autorskie i własność ';";//Derechos de autor o propiedad
$trans["form_credits"]			= "\$text = 'kredyty';";//Créditos
$trans["form_Changelog"]		= "\$text = ' Zmiany zmian lub ';";//Historial de cambios o Changelog
$trans["form_phpinfo"]			= "\$text = ' Rzuć informacje o konfiguracji serwera PHPINFO';";//Desplegar la información de configuración del servidor
$trans["form_instructions"]		= "\$text = ' Instrukcja instalacji';";//Instrucciones de instalación
$trans["form_WARNING_1"]		= "\$text = ' UWAGA - pamiętaj bezpieczeństwa Usuń folder / zainstalować i cała jego zawartość zakończeniu instalacji serwera bazy danych.. ';";//PRECAUCIÓN - Recuerde por seguridad Eliminar la carpeta /install y todo su contenido del servidor terminada de instalar la base de datos.
$trans["form_WARNING_3"]		= "\$text = 'Dla Państwa bezpieczeństwa Usuń folder / zainstalować i cała jego zawartość zakończeniu instalacji serwera bazy danych.';";//Por su seguridad Eliminar la carpeta /install y todo su contenido del servidor terminada de instalar la base de datos.
$trans["form_New_Install"]		= "\$text = ' Nowa instalacja ';";//Instalación Nueva
$trans["form_Language"]			= "\$text = ' program języka i baza danych ';";//Idioma del programa y de la base de datos
$trans["form_Test_data"]		= "\$text = ' Instalacja przykładowych danych ';";//Instalar datos de ejemplo
$trans["form_CDU"]			= "\$text = ' lub UDC Symbole Klasyfikacja ';";//Clasificación Decimal Universal o CDU
$trans["form_CDD"]			= "\$text = ' lub CDD Dewey Decimal Klasyfikacja ';";//Clasificación Decimal Dewey o CDD
$trans["form_IBIC"]			= "\$text = 'kategorie międzynarodowy przemysł książki (IBIC) \" International Industry Book Kategorie \"';";//Categorías de la industria internacional del libro (IBIC) \"International Book Industry Categories
$trans["form_CUTTER"]			= "\$text = ' Kodowanie Cutter Sanborn ';";//Codificación Cutter Sanborn
$trans["form_Mismatch_DATE"]		= "\$text = ' data i czas rozbieżności ustawienia.';";// Mismatch in date and time configuration.//Discrepancia fecha y hora en la configuración.
$trans["form_Warring_DATE"]		= "\$text = ' Zalecenie to skorygować przed kontynuowaniem instalacji, w przeciwnym razie serwer może tymczasowo nie <br> czas teraz. ';";//Recommended: correct before proceeding, else Check Out and Check In might fail temporarily.<br>    Current date and time //Recomendación: corrija esto antes de proceder la instalación, de lo contrario el servidor puede fallar temporalmente <br> Fecha y hora actual.
$trans["form_Note_1"]			= "\$text = ' do użytku wewnętrznego Espabiblio. ';";//Para uso interno del Espabiblio.
$trans["form_Suggestion"]		= "\$text = ' Porada ';";//Sugerencia
$trans["form_GNU"]			= "\$text = ' Programy informacyjne z liciencia GNU \"lub \" open source !';";//Información sobre los programas con liciencia GNU o \"Codigo Libre\"
$trans["form_GB"]			= "\$text = 'ten program i jego twórcy \"Giordano Bruno \"! ';";//Suggestion//Sobre este programa y sus desarrolladores \"Giordano Bruno\"!
$trans["form_Database_connection_bad"]	= "\$text = ' Połączenie z bazą danych nie powiodło się z powodu następującego błędu. ';";//The connection to the database failed with the following error.//La conexión con la base de datos ha fallado con el siguiente error.
$trans["form_data_Note_1"]		= "\$text = ' mogą być modyfikowane w pliku php.ini zmiennej: ';";//Quizás debe modificar en el PHP.INI la variable: 
$trans["form_data_Note_2"]		= "\$text = 'w przypadku wystąpienia błędu podczas instalacji za przekroczenie czasu załadunku lub scrip lub bazy została wygenerowana w części, należy usunąć wszystkie tabele i powtórki proces, ponieważ obecna wartość to: ';";//si se presenta error durante la instalación por exceder el tiempo o se carga del scrip ó la base de datos se genero de manera parcial, usted debe de borrar todas las tablas y repetir el proceso, ya que el valor actual es de:  
$trans["form_data_Bad_Note_1"]		= "\$text = ' Upewnij się, że następujące zostało wykonane przed uruchomieniem skryptu instalacji (To jest tylko przewodnikiem, można to zrobić w inny sposób)). ';";//Please make sure the following has been done before running this install script.//Asegúrese de que lo siguiente que se ha hecho antes de ejecutar este script de instalación (Esta es solo una guía, usted puede hacerlo de otra manera).).
$trans["form_data_Bad_Note_2"]		= "\$text = 'Tworzenie dedykowanej bazy danych dla Espabiblio ';"; //create OpenBiblio database//Crear una base de datos exclusiva para Espabiblio 
$trans["form_data_Bad_Note_3"]		= "\$text = 'Naciśnij \" związek \"w celu uzyskania instrukcji.';";//of the install instructions//presione el \"link\" para ver las instrucciones.
$trans["form_data_Bad_Note_4"]		= "\$text = ' Tworzenie użytkownika z odpowiednimi uprawnieniami do bazy danych Espabiblio. ';";//create OpenBiblio database user //Crear el usuario, con permisos adecuados para la Base de datos de Espabiblio.
$trans["form_data_Bad_Note_5"]		= "\$text = ' instrukcja montażu ';";//of the install instructions//de las instrucciones de instalación
$trans["form_data_Bad_Note_6"]		= "\$text = ' Modyfikuj constans.php i zapisać plik w folderze głównym Espabiblio, ze dane wykorzystane do: bazy danych, nazwę serwera MySQL, nazwę użytkownika i hasło. należy użyć edytora zwykłego tekstu. ';";//update openbiblio/database_constants.php with your new database username and password//Modifique y guarde el archivo constants.php en la carpeta raíz de su Espabiblio, con los datos que uso para: Base de datos, nombre del servidor Mysql, usuario y password., use editor de texto plano.
$trans["form_data_Bad_Note_7"]		= "\$text = ' Sprawdź ';";//see//Revise las 
$trans["form_data_Bad_Note_8"]		= "\$text = ' więcej szczegółów ';";//for more details.//para más detalles
$trans["form_data_Bad_Note_step"]	= "\$text = ' krok ';";// paso 
$trans["form_Update_1"]			= "\$text = 'Baza danych dla Espabiblio zostanie zaktualizowany i gotowe do użycia';";//Your OpenBiblio Installation is up to date//Su base de datos para el Espabiblio esta ahora actualizado y listo para usar
$trans["form_No_action_required"]	= "\$text = 'ta akcja nie jest wymagane';";//No action is required//No es requerida esta acción
$trans["form_start"]			= "\$text = ' Program Espabiblio start ';";//start using OpenBiblio//Iniciar el programa Espabiblio
$trans["form_Need_Update"]		= "\$text = ' Wydaje się, że trzeba zaktualizować wersję bazy danych ';";//Parece que tenemos que actualizar la versión de base de datos
$trans["to_version"]			= "\$text = 'a la versión';";//It looks like we need to update database version 
$trans["form_Install"]			= "\$text = 'Instalar';";
$trans["install_head"]			= "\$text = ' Instalacja Data \"Giordano Bruno \" na podstawie Openbiblio 7.1 i 3.4.1 Espabiblio ';";//OpenBiblio Installation 7.2://Instalacion de Datos \"Giordano Bruno\" basado en Openbiblio 7.1 y Espabiblio  3.4.1
$trans["form_media"]			= "\$text = ' Materiales Multimedia ';";
$trans["form_cover"]			= "\$text = ' Portadas ';";
$trans["form_tmp"]			= "\$text = ' Temporales ';";
$trans["form_foto"]			= "\$text = ' Fotos de usuarios ';";
$trans["form_autor"]			= "\$text = ' Fotos de autores ';";
$trans["form_digi"]			= "\$text = ' Materiales digitales ';";
$trans["form_timezone_1"]		= "\$text = ' Użyj ';";//Using // Usar 
$trans["form_timezone_2"]		= "\$text = ' Określa wartości ustawione w pliku php.ini ';";//determine the Loaded Configuration File//Determina los valores configurados en su php.ini
$trans["form_timezone_3"]		= "\$text = 'znaleźć ten plik, i używać edytor poziomów, aby zmienić wartość';";//Find this file, use an editor (Notepad etc.) to change //encontrar este archivo, y use un editor plano para cambiar el valor 
$trans["form_timezone_4"]		= "\$text = ' i zapisz plik ';";//and saveand save//y guarde el archivo
$trans["form_timezone_5"]		= "\$text = 'Reinicie el servidor apache e intente de nuevo la instalación';";//Restart webserver and check install again
$trans["form_Ver_1"]			= "\$text = 'Espabiblio ';";
$trans["form_Ver_2"]			= "\$text = ' Instalacja ';";//Installation
$trans["form_mkdir_create"]		= "\$text = ' został utworzony pomyślnie, folder ';";//Create book media directory successfully.//Se creo correctamente, La carpeta para 
$trans["form_mkdir_create_bad"]		= "\$text = ' Nie można utworzyć folder ';";//Could not create media directory! Please create new //No puedo crear la carpeta  en 
$trans["form_mkdir_Force"]		= "\$text = ' atrybuty zostały zmienione w celu odczytu / zapisu do folderu ';";//Book media directory is exists, force read/write access to exists one.//Fueron cambiados los atributos para lectura/escritura a la carpeta para 
$trans["form_mkdir_bad"]		= "\$text = ' Nie jest, ale nie mogę zmienić uprawnienia do folderu ';";//Could not change access to exist media directory! Please change. //Existe pero no puedo cambiar permisos en la carpeta para 
$trans["form_mkdir_bad_1"]		= "\$text = ' Proszę zrobić to ręcznie, udzielania pełne uprawnienia do odczytu i zapisu ';";// directory permission (chmod) to full access (777) manually.//  favor de hacerlo manualmente, otorgando permisos de lectura y escritura completos 
$trans["form_mkdir_Ok"]			= "\$text = 'Existe y trabaja correctamente la carpeta para ';";//Book media directory already exists & work properly.
$trans["form_mkdir_install_bad"]	= "\$text = ' Instalacja została przerwana, popraw błędy i spróbuj ponownie ';";//Installation has been interrupted, please fix issues above then try to //La instalación fue interrumpida, corrija los errores e inténtelo de nuevo 
$trans["form_mkdir_install_run"]	= "\$text = 'Para ejecutar la instalación nuevamente ';";// run installation again
$trans["install_wait"]			= "\$text = 'tablice budowlane i dane, proszę czekać ...';";//Are you sure you want to delete all library data and create new OpenBiblio tables?//Construyendo las tablas y datos, por favor espere...
$trans["Are_you_sure_you"]		= "\$text = ' Czy na pewno chcesz usunąć wszystkie dane z biblioteki i utworzyć nowy z tego? ?';";//Building OpenBiblio tables, please wait...//¿Seguro que quiere borrar todos los datos de la biblioteca y crear nuevas en limpio
$trans["install_Data_ok"]		= "\$text = ' Uruchamianie zarządzania biblioteką \"Giordano Bruno \"  folder istnieje i działa poprawnie ';";//OpenBiblio tables have been created successfully!//Las tablas y datos fueron creados de manera satisfactoria
$trans["form_Install"]			= "\$text = 'Zainstaluj';";//install/Instalar
$trans["install_Data_ok"]		= "\$text = 'tabele i dane zostały pomyślnie utworzony';";//start using OpenBiblioIniciar el programa de gestión de biblioteca \"Giordano Bruno\"
$trans["Update_successfully"]		= "\$text = ' Bazy danych zostały zaktualizowane pomyślnie ';";//OpenBiblio tables have been updated successfully!//Las bases de datos fueron actualizadas correctamente
$trans["Update_interrupted"]		= "\$text = ' Instalacja została przerwana, usuwanie tabel, popraw błąd i spróbuj ponownie ';";//Installation has been interrupted, please fix issues above then try to //La instalación fue interrumpida, borre las tablas, corrija los fallos e intente de nuevo
$trans["Update_wait"]			= "\$text = ' Aktualizacja baz danych, proszę czekać ... ';";// Updating OpenBiblio tables, please wait...//Actualizando las bases de datos, por favor espere...
$trans["Update_Failed"]			= "\$text = ' Aktualizacja porażką. ';";//Upgrade Failed//La actualización fallo.
$trans["update_start"]			= "\$text = ' Aktualizacja bazy danych. ';";//OpenBiblio Upgrade//Actualización de la base de datos.
$trans["footerDatabaseVersion"]		= "\$text = ' Wersja bazy danych ';";//Version de la base de datos
$trans["footerCodeVersion"]		= "\$text = ' wersja Kodeksu ';";//Version del Codigo
$trans["footerPoweredBy"]		= "\$text = ' Dzięki technologii Openbiblio 7.1 Zmiany EspaBiblio Giordano Bruno V 3.41 ';";//Con tecnologia de Openbiblio 7.1 Modificaciones EspaBiblio Giordano Bruno V 3.41 
$trans["footerCopyright"]		= "\$text = ' Copyright (Prawa autorskie) ';";//Derechos de Autor (Copyright)
$trans["footerUnderThe"]		= "\$text = ' Low ';";//Bajo 
$trans["footerGPL"]			= "\$text = ' General Public License (General Public License). ';";//Licencia publica General (General Public License).
$trans["footerfooter"]			= "\$text = ' Wsparcie techniczne i aktualizacje. ';";//Soporte Técnico y novedades.
