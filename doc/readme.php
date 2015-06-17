<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  $tab = "home";
  $nav = "Readme";

  require_once("../shared/header.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
?>

<h1><?php echo $loc->getText("readmeHeading"); ?></h1>

<br><br>
<pre>
-----Notas Generales --------

----------------------
esta versión Espabiblio version 3.0 u OpenBiblio 7.2

Es una fusión de OpenBiblio 7.1, 7.0, 6.0 y 6.1
así como de algunas funciones de una Versión llamadas Hortri y Opendream.
Como de algunas contribuciones Varias.

----------De las Carpetas----------
De las carpetas para guardado de materiales dinámicos.
Portadas, temporales, materiales digitales

../media
../media/covers
../media/digitales
../media/tmp

deben tener permisos de lectura escritura para todos.

README
cd /media
en linux: chmod -R 777 *

------ Otras Características y herramientas integradas ----------
* Se integra un Gestor de contenidos (CMS) basado en WordPress
/Front

* Para control de Versiones
/tools

* Prueba rendimientos y errores pero solo funciona si el openbiblio esta en el directorio openbiblio
/tests

usar con cuidado ya que borra datos.

* Se agregan documentos de interés y manuales relacionados con openbiblio y bibliotecas así como se mueven de varias carpetas archivos relacionados.
/doc

-------Bug conocidos vercion espabiblio 3.0
Falla cuando no esta definodo el Timezone
se arregla definiedolo en php.ini (ver phpinfo)


----Funciones speciales
se activa link al PHPinfo al momento de instalar
se activa link al PHPinfo desde la tab de Adminstracion





--------- De la version Taiti------------------ en paréntesis en el idioma original.
Las necesidades básicas. (ความต้องการเบื้องต้น) 

- PHP Version (รุ่น) 5.1 Hasta (ขึ้นไป)
-- php5-mysql
-- php5-gd
-- php5-curl
- MySQL Version (รุ่น) 5 Hasta (ขึ้นไป)
-Para utilizar la búsqueda en línea / search. (ในกรณีที่ต้องการใช้งานการค้นหาออนไลน์/การค้นหา) ISBN Sería necesario. (จำเป็นจะต้องมี)
  * YAZ Version (รุ่น) 3.0.52 Más ayuda. (ขึ้นไ)
  * crontab - O su equivalente. (หรือโปรแกรมที่เทียบเท่า)
- Para utilizar las funciones de búsqueda portadas de libros. (ในกรณีที่ต้องการใช้งานการค้นหาปกห้องสือจาก) Amazon Es como debe ser. (จะเป็นจะต้องมี)
  * AWS Key
  * AWS Secret Key
  * AWS Account ID

La información puede ser obtenida en las tres partes. (ข้อมูลทั้งสามส่วนสามารถรับได้ที่) 
      Amazon Web Service http://aws.amazon.com 
Si usted tiene una cuenta. (หากมีบัญชีผู้ใช้) Amazon Veo estos valores en el archivo. แล้วสามารถเข้าไปดูค่าเหล่านี้ได้จากใน  'Personal Information'

Notas:
---Se conservo la informacion en Tahi por integridad y repeto a los desarroladores.
---Agradecemos a Google Traslate por su Valiosa aportación.
---en cuanto a amazon me informan que se requiere Targeta de credito para abrir cuenta.

----------------- De la Version 7.1 del Openbiblio
Prerequisite:
- PHP 5.1 and up. (PHP 5.3 is now supported)
-- php5-mysql
-- php5-gd
-- php5-curl
- MySQL 5 and up.
- For online search / ISBN lookup, they require: 
  * YAZ library 3.0.52 (setup instructions in [base_directory]/prerequisites/yaz-3.0.52/README)
    Hint: for more comfortable instructions, check 'Create a School Library Catalog For Cheap' article on e-frank.com, 
    http://www.e-frank.com/2008/03/16/create-a-school-library-catalog-for-cheap
  * crontab or same things for execute cron jobs. (crontab is available on unix-based operating system)

- For online book cover lookup, Amazon AWS account is required.
  * AWS Key
  * AWS Secret Key
  * AWS Account ID

For more information and create new account, please visit http://aws.amazon.com/
Hint: Check 'Personal Information' to get keys & account ID.

Setup Instructions:
- Create / setup database for openbiblio, specific collation to 'utf8_general_ci'.
- Extract & copy all hotri directory to public website directory.
- For unix-based operating system, set directories/files permission as below:
  * chmod 777 for [base_directory]/media
  * chmod 666 for [base_directory]/cron/cronrun.txt

- Edit 'database_constant.php' file to setup database connection.
- Open the web browser and go to hotri like http://yourdomain.com/hotri
- When this is your first setup, install page would be appeared, otherwise it should be show you homepage.
- For fresh install, select locale, optional install test data, then click install button (like original openbiblio).
- Done.

Note: 
- For import book/biblio data from CSV, use 'Cataloging > CSV Import' and follow instruction guidelines in this page and so on.
- For online search, you could configure servers for lookup on 'Admin > Z39.50 Servers'.
- For online book cover lookup, configure on 'Admin > Cover Lookup Options'.

Known issues:
- Book cover lookup service doesn't work on PHP4 because of class & object issues.

-------------------------z5390
Nota: jalg
        Estas Modificaciones estan integradas ahora, pero no me a sido posible probar.
        Estas Modificaciones estan integradas ahora, pero no me a sido posible probar, 
        Agrege una busqueda a la  Biblioteca del Congreso de los USA, ya que esta no requiere soporte YAZ.
	Agrege más servidores.
        Agrego una copia de la pagina donde se detalla plenamente estos asuntos:
        http://www.e-frank.com/2008/03/16/create-a-school-library-catalog-for-cheap
        Tambien de la misma copio un manual en PDF.        ../doc/lib-cat-instr.pdf
---

This version of Lookup allows the use of either YAZ or SRU.  And you can swap at
any time via Admin screen settings. But if you want to use YAZ, you will have to
add it to your PHP on the server; SRU does not require any such addition but has
perfrmance issues. (See step #5 below for YAZ installation info.) Be sure to
read through all the steps below. There have been many changes from previous
versions.

##############################################################################
## Open Biblio Modifications #################################################
##############################################################################
The following modifications must be made to your copy of OpenBiblio to support
Lookup and possible future add-ons/plug-ins. These may be only a one time
modification to OpenBiblio. Future versions of OpenBiblio may include them.
 
 .........
  a.  Using 'cut & Paste, add the following to the end of file
 .........
	'\openbiblio\shared\common.php'.
  ###################################################################
  ## plugin Support
  ###################################################################
  function getPlugIns($wanted) {
		clearstatcache();
		$lists = array();
  	if (is_dir('../plugins')) {
			//echo "Plugin Dir found: <br />";
  	  ## find all plugin directories
			if ($dirHndl = opendir('../plugins')) {
		    # look at all plugin dirs
		    while (false !== ($plug = readdir($dirHndl))) {
		      if (($plug == '.') || ($plug == '..')) continue;
  	      //echo "plugin => $plug<br />";
  	      $plugPath = "../plugins/$plug";
  	      if (is_dir($plugPath)) {
						if ($filHndl = opendir($plugPath)) {
		    			while (false !== ($file = readdir($filHndl))) {
		    			  if (($file == '.') || ($file == '..')) continue;
  	      			//echo "file => $file<br />";
  	      			if ($file == $wanted) $list[] = "../plugins/$plugPath/$file";
  	      		}
  	      		closedir($filHndl);
						}
					}
  		  }
  		  closedir($dirHndl);
			}
		}
		return $list;
	}

 .........
 b. Using 'cut & Paste, add the following to file '\openbiblio\navbars\admin.php', 
 at the end in a blank line just before the reference to 'help.php'
 .........
	<?php
  ## ##################################
  ## adds suport for plugins - fl, 2009
  ## ##################################
	$list = getPlugIns('admin.nav');
	for ($x=0; $x<count($list); $x++) {
		include_once ($list[$x]);
	}
	?>
	
 .........
 c. Using 'cut & Paste, add the following to file '\openbiblio\navbars\cataloging.php', 
 at the end in a blank line just before the reference to 'help.php'
 .........
	<?php
  ## ##################################
  ## adds suport for plugins - fl, 2009
  ## ##################################
	$list = getPlugIns('cataloging.nav');
	for ($x=0; $x<count($list); $x++) {
		include_once ($list[$x]);
	}
	?>

 .........
 d. Using 'cut & Paste, modify file "..\classes\Localize.php to read as:
 .........
  function Localize ($locale, $section) {
    $localePath = "../locale/".$locale."/".$section.".php";
    include($localePath);
    ## ##################################
    ## adds suport for plugins - fl, 2009
    ## ##################################
		$list = getPlugIns($section.'.tran');
		for ($x=0; $x<count($list); $x++) {
			include($list[$x]);
		}
    ## ##################################
    $this->_trans = $trans;
    return true;
  }

 .........
 e. Go to file ".../shared/header_top.php" and find the line for "</head>". Insert
	the following just above it as shown:
 .........
	</script>
	<?php
	## ---------------------------------------------------------------------
	## --- added for Fred LaPlante's Lookup Function -----------------------
	if (file_exists('customHead.php')) {
		include ('customHead.php');
	}
	## ---------------------------------------------------------------------
	?>
	</head>

 .........
 f. Go to file ".../shared/common.php" and find the line for
 '# Escaping shorthands', 
 Insert the following just above it as shown below:
 .........
	/* Work around PHP's braindead include_path stuff. */
	function REL($sf, $if) {
		return dirname($sf)."/".$if;
	}

  # Escaping shorthands

 .........
 g. Go to file ".../catalog/inputFuncs.php". find the lines containing
    "($cntrlType == OBIB_TEXTAREA_CNTRL)" and change the lines following  as shown
    here:
 .........
  if ($cntrlType == OBIB_TEXTAREA_CNTRL) {
    ## lookup mods F.LaPlante - June 2009
    //echo "<textarea name=\"values[".H($formIndex)."]\"";
    //echo " cols=\"".H($cols)."\" rows=\"".H($rows)."\">\n";
    //echo H($value)."</textarea>";
    $attrs= array('cols'=>H($cols),'rows'=>H($rows));
    echo inputField('textarea', "values[".H($formIndex)."]", H($value), $attrs);
  } else {
    ## lookup mods F.LaPlante - June 2009
    //echo "<input type=\"text\"";
    //echo " name=\"values[".H($formIndex)."]\"";
    //echo " size=\"".H($size)."\" maxlength=\"".H($maxLen)."\" ";
    //echo "value=\"".H($value)."\" >\n";
    $attrs= array('size'=>H($size),'maxlength'=>H($maxLen));
    echo inputField('text', "values[".H($formIndex)."]", H($value), $attrs);
  }

 .........
 h. Go to file ".../functions/inputFuncs.php". find the lines containing
		a long complex 'switch' structure.  In there you will find 3 or more
		references like --> name="'.H($name).'"
		Wherever you do, change it to read: id="'.H($name).'" name="'.H($name).'"
 .........

##############################################################################
## Lookup v2 installation ####################################################
##############################################################################

##############################################################################
## Step 1. ###################################################################
##############################################################################
 Extract the following database files from the sqlFiles folder within Lookup2 
 and move them to your openbiblio MySQL data directory:

	- 'cutter.MYD', 'cutter.frm', and 'cutter.MYI'
	- 'lookup_settings.MYD', 'lookup_settings.frm', and 'lookup_settings.MYI'
	- 'lookup_hosts.MYD', 'lookup_hosts.frm', and 'lookup_hosts.MYI'

	Or as an alternative:
	Included you can use phpMyAdmin or any other administrative tool of your 
	choice to import the file OpenBiblio.sql into the openbiblio database which 
	will accomplish the same thing. 
	
##############################################################################
## Step 2. ###################################################################
##############################################################################
 If it does not already exist, create a new 'lookup2' folder within openbiblio.

 .........
 a.Extract and move all *.php files, *.js and *.txt to the new
 	 '..\openbiblio\lookup2' directory.
 .........
 b. You may remove any of the old 'lookup' files in '..\openbiblio\catalog' from
   previous versions of Lookup, though they will be ignored if you leave them
	 there.
 .........

##############################################################################
## Step 3. ###################################################################
##############################################################################
 This step replaces previous Navigation and translation file changes. It has
 been tested with multiple plugins.

 .........
 a. If it does not already exist, create a new 'plugins' folder within openbiblio.
 .........
 b. If it does not already exist, create a new 'lookup2' folder within 'plugins'.
 .........
 c. Copy the *.nav and *.tran files to this 'lookup2' folder.

##############################################################################
## Step 4. ###################################################################
##############################################################################
 If you would like to have the "new copy" form automatically appear when
	 finished adding new bibliographic data:
 .........
	a. In file "..../catalog/biblio_new.php",
	locate the line containing "../shared/biblio_view.php" near line 36
	   .
 .........
	b. replace it with the following
  #**************************************************************************
  //------following line auto transfers to new copy form (new function)
  header("Location: ../catalog/biblio_copy_new_form.php?bibid=".$bibid."&msg=".$msg);
  exit();
  #**************************************************************************
 
##############################################################################
## Step 5. ###################################################################
##############################################################################
 YAZ instalation (not required if you only wish to use SRU):
	 The YAZ module provides the MARC Z39.50 protocol support which this
	 application requires to use the YAZ protocol. YAZ is provided with most
	 distributions of PHP, but activation varies.

	 For Windows, things have gotten complicated since PHP5 arrived.
	 The best process to follow is described at
	 http://blog.theburrowfamily.net/2008/09/27/php526-apache-22-and-php_yaz/
	 In effect the process amounts to copying a set of .dll files from a download
	 into your Apache directory.

	 For **NIX installations you will probably have to recompile PHP with
	 appropriate switches.

	 Additional details can be found at http://www.php.net/manual/en/ref.yaz.php
	 as well as at http://www.IndexData.com (the PHP-YAZ author). Also there have
	 been seveal threads on the matter at the OpneBiblio help forum.

	 After activating YAZ, be sure to stop and restart the Web Server (usually Apache).

	 Failure to activate YAZ, usually shows up as a blank screen after attempting
	 a search. To determine if YAZ has been properly activated, look at the
	 phpinfo.php page with your browser.  Bring up the page and search for YAZ.
	 If not found, YAZ is not active.

	 note: Some PHP distributions make finding the correct version of php.ini dificult,
	 but its location is shown in phpinfo.

##############################################################################
## Step 6. ##################################################################
##############################################################################
   Configuration is done through the Lookup Opts and Lookup Hosts selections on
	 the Admin Page. Go there and make appropriate changes and selections. I have
	 provided data for those hosts that are known to me. Feel free to modify or
	 add to the list as you wish.
	 (Thanks to Peter Zweck for the National Library of Australia link).
	 (Thanks to Christoph Lange of Germany for the GVK link).

##############################################################################
## Step 7. ##################################################################
##############################################################################
  Useage suggestions or comments:
- In the event of problems with first time use, be sure to check your
	directory names for correct case and spelling. Email me for help if needed.
- In the event of trouble installing YAZ, I suggest trying the newer SRU protocol
	if your Z39.50 server supports it.
- The LC cutter mechanism used may be too crude for all but the smallest libraries. 
  Cutter - Sanborn 3-digit table duplicates the standard published texts.
- Author names must be in the form of: surname, given name (i.e. LaPlante, Fred).
- Some title and author searches may result in many seemingly unrelated hits.  
  Using the author's full name, rather than last name only, may correct this.
- Remote servers may timeout with no visible information. As suggested on the
	'Patience' screen, use of the F5 button usually results in success.
	
Fred LaPlante
flaplante at flos-inc dot com


</pre>
<?php include("../shared/footer.php");
