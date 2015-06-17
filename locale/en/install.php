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
$trans["form_Database_connection_good"]	= "\$text = 'La conexión con la base de datos es BUENA';";
$trans["form_Bad_date.timezone"]	= "\$text = 'No esta definido en el php.ini la zona horaria y el tiempo \"date.timezone\" :';";
$trans["form_Licence"]			= "\$text = 'GNU GENERAL PUBLIC LICENSE (Versión 2, June 1991)';";
$trans["form_Copring"]			= "\$text = 'Derechos de autor o propiedad';";
$trans["form_credits"]			= "\$text = 'Créditos';";
$trans["form_Changelog"]		= "\$text = 'Historial de cambios o Changelog';";
$trans["form_phpinfo"]			= "\$text = 'Desplegar la información de configuración del servidor';";
$trans["form_instructions"]		= "\$text = 'Instrucciones de instalación';";
$trans["form_WARNING_1"]		= "\$text = 'PRECAUCIÓN - Recuerde por seguridad Eliminar la carpeta /install y todo su contenido del servidor terminada de instalar la base de datos.';";
$trans["form_WARNING_2"]		= "\$text = '';";
$trans["form_WARNING_3"]		= "\$text = 'Por su seguridad Eliminar la carpeta /install y todo su contenido del servidor terminada de instalar la base de datos.';";
$trans["form_New_Install"]		= "\$text = 'Instalación Nueva';";
$trans["form_Language"]			= "\$text = 'Idioma del programa y de la base de datos';";
$trans["form_Test_data"]		= "\$text = 'Instalar datos de ejemplo';";
$trans["form_CDU"]			= "\$text = 'Clasificación Decimal Universal o CDU';";
$trans["form_CDD"]			= "\$text = 'Clasificación Decimal Dewey o CDD';";
$trans["form_IBIC"]			= "\$text = 'Categorías de la industria internacional del libro (IBIC) \"International Book Industry Categories\"';";
$trans["form_CUTTER"]			= "\$text = 'Codificación Cutter Sambor';";
$trans["form_Mismatch_DATE"]		= "\$text = 'Mismatch in date and time configuration..';";
$trans["form_Warring_DATE"]		= "\$text = 'Recommended: correct before proceeding, else Check Out and Check In might fail temporarily.<br>';";
$trans["form_Note_1"]			= "\$text = 'Para uso interno del Espabiblio.';";
$trans["form_Suggestion"]		= "\$text = 'Suggestion';";
$trans["form_GNU"]			= "\$text = 'Información sobre los programas con liciencia GNU o \"Codigo Libre\"!';";
$trans["form_GB"]			= "\$text = 'Sobre este programa y sus desarrolladores \"Giordano Bruno\"!';";
$trans["form_Database_connection_bad"]	= "\$text = 'The connection to the database failed with the following error.';";
$trans["form_data_Note_1"]		= "\$text = 'Quizás debe modificar en el PHP.INI la variable: ';";
$trans["form_data_Note_2"]		= "\$text = 'si se presenta error durante la instalación por exceder el tiempo o se carga del scrip ó la base de datos se genero de manera parcial, usted debe de borrar todas las tablas y repetir el proceso, ya que el valor actual es de:  ';";
$trans["form_data_Bad_Note_1"]		= "\$text = 'Please make sure the following has been done before running this install script.';";
$trans["form_data_Bad_Note_2"]		= "\$text = 'create OpenBiblio database ';";
$trans["form_data_Bad_Note_3"]		= "\$text = 'push the \"link\" of the install instructions';";
$trans["form_data_Bad_Note_4"]		= "\$text = 'create OpenBiblio database user ';";
$trans["form_data_Bad_Note_5"]		= "\$text = 'of the install instructions';";
$trans["form_data_Bad_Note_6"]		= "\$text = 'update openbiblio/database_constants.php with your new database username and password.';";
$trans["form_data_Bad_Note_7"]		= "\$text = 'see ';";
$trans["form_data_Bad_Note_8"]		= "\$text = 'for more details.';";
$trans["form_data_Bad_Note_step"]	= "\$text = ' paso ';";
$trans["form_Update_1"]			= "\$text = 'Your OpenBiblio Installation is up to date';";
$trans["form_No_action_required"]	= "\$text = 'No action is required';";
$trans["form_Start"]			= "\$text = 'start using OpenBiblio';";
$trans["form_Need_Update"]		= "\$text = 'It looks like we need to update database version ';";
$trans["form_Install"]			= "\$text = 'Instalar';";
$trans["install_head"]			= "\$text = 'Instalacion de Datos \"Giordano Bruno\" OpenBiblio Installation 7.1:';";
$trans["form_media"]			= "\$text = 'Materiales Multimedia';";
$trans["form_cover"]			= "\$text = 'Portadas';";
$trans["form_tmp"]			= "\$text = 'Temporales';";
$trans["form_foto"]			= "\$text = 'Fotos de usuarios';";
$trans["form_autor"]			= "\$text = 'Fotos de autores';";
$trans["form_digi"]			= "\$text = 'Materiales digitales';";
$trans["form_timezone_1"]		= "\$text = 'Using ';";
$trans["form_timezone_2"]		= "\$text = 'determine the Loaded Configuration File';";
$trans["form_timezone_3"]		= "\$text = 'Find this file, use an editor (Notepad etc.) to change  ';";
$trans["form_timezone_4"]		= "\$text = 'and saveand save ';";
$trans["form_timezone_5"]		= "\$text = 'Restart webserver and check install again';";
$trans["form_Ver_1"]			= "\$text = 'Espabiblio ';";
$trans["form_Ver_2"]			= "\$text = ' Installation ';";
$trans["form_mkdir_create"]		= "\$text = 'Create book media directory successfully. ';";
$trans["form_mkdir_create_bad"]		= "\$text = 'Could not create media directory! Please create new ';";
$trans["form_mkdir_Force"]		= "\$text = 'Book media directory is exists, force read/write access to exists one. ';";
$trans["form_mkdir_bad"]		= "\$text = 'Could not change access to exist media directory! Please change. ';";
$trans["form_mkdir_bad_1"]		= "\$text = 'directory permission (chmod) to full access (777) manually.';";
$trans["form_mkdir_Ok"]			= "\$text = 'Book media directory already exists & work properly. ';";
$trans["form_mkdir_install_bad"]	= "\$text = 'Installation has been interrupted, please fix issues above then try to  ';";
$trans["form_mkdir_install_run"]	= "\$text = 'run installation again ';";
$trans["install_wait"]			= "\$text = 'Building OpenBiblio tables, please wait...';";
$trans["install_Data_ok"]		= "\$text = 'The tables have been created successfully!';";
$trans["form_Install"]			= "\$text = 'Install';";
