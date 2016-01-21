<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
//global  $locale, $locales;
 
  $tab = "install";//jalg para uso de multi-idioma
  $locale = $_POST['locale'];//jalg para uso de multi-idioma
  
  if (isset($_POST['locale'])) {
	if (!preg_match('/^[-_a-zA-Z0-9]+$/', $_POST['locale'])) {
	  Fatal::internalError("Bad locale name.");
    }
    $locale = $_POST['locale'];
  }

  $doing_install = true;
  require_once("../shared/common.php");
  require_once("../shared/global_constants.php");
  require_once("../classes/Localize.php");//jalg para uso de multi-idioma
  $loc = new Localize($locale,$tab);//jalg para uso de multi-idioma
  
  if (count($_POST) == 0) {
    header("Location: ../install/index.php");
    exit();
  }

  require_once("../classes/InstallQuery.php");

  $installTestData = false;

  if (isset($_POST['installTestData'])) {
	$installTestData = ($_POST["installTestData"] == "yes");
  }
  if (isset($_POST['CDU'])) {//jalg para uso discrimitavo catalogo en base de datos
      $CDU  = ($_POST["CDU"] == "yes");
  }
  if (isset($_POST['CDD'])) {//jalg para uso discrimitavo catalogo en base de datos
      $CDD  = ($_POST["CDD"] == "yes");
  }
  if (isset($_POST['IBIC'])) {//jalg para uso discrimitavo catalogo en base de datos
      $IBIC  = ($_POST["IBIC"] == "yes");
  } 
  if (isset($_POST['CUTTER'])) {//jalg para uso discrimitavo catalogo en base de datos
      $CUTTER  = ($_POST["CUTTER"] == "yes");
  }
include("../install/header.php");

echo '<br>';
echo $loc->getText("install_head");
echo '<br>';

require_once("../install/create_dir.php");

  # testing connection and current version
  $installQ = new InstallQuery();
  $err = $installQ->connect_e();
  if ($err) {
    Fatal::dbError($e->sql, $e->msg, $e->dberror);
   }
  $version = $installQ->getCurrentDatabaseVersion();
  echo "<br/>" .  $loc->getText("form_Database_connection_good") . ":  " .  $version . "<br>\n";

  #************************************************************************************
  #* show warning message if database exists.
  #************************************************************************************
  if ($version) {
    if (!isset($_POST["confirm"]) or ($_POST["confirm"] != "yes")){
      ?>
        <form method="POST" action="../install/install.php">
      <?php    echo "<br/>" .   $loc->getText("install_wait") . "<br>\n"; ?>      
        OpenBiblio (
      <?php    echo "<br/>" .   $loc->getText("install_wait") . "<br>\n"; ?>
        version 
        <?php echo H($version);?>
        )
      <?php    echo "<br/>" .   $loc->getText("install_wait") . "<br>\n"; ?>        
         is already installed.
      <?php    echo "<br/>" .   $loc->getText("install_wait") . "<br>\n"; ?>
      <?php    echo "<br/>" .   $loc->getText("Are_you_sure_you") . "<br>\n"; ?>               
        
        <input type="hidden" name="confirm"		value="yes">
        <input type="hidden" name="locale"		value="<?php echo H($locale); ?>">
        <input type="hidden" name="installTestData"	value="<?php if (isset($_POST["installTestData"]))	echo "yes"; ?>">
        <input type="hidden" name="CDU"			value="<?php if (isset($_POST["CDU"]))			echo "yes"; ?>">
        <input type="hidden" name="CDD"			value="<?php if (isset($_POST["CDD"]))			echo "yes"; ?>">
        <input type="hidden" name="IBIC"		value="<?php if (isset($_POST["IBIC"]))			echo "yes"; ?>">
        <input type="hidden" name="CUTTER"		value="<?php if (isset($_POST["CUTTER"]))		echo "yes"; ?>">
        <input type="submit" 									value="Continue">
        <input type="button" onClick="self.location='../install/cancel_msg.php'" value="Cancel">
        </form>
      <?php
      $setQ->close();
      include("../install/footer.php");
      exit();
    }
  }
  echo "<br/>" . $loc->getText("install_wait") . "<br>\n";

  $installQ->freshInstall($locale,  $parament = "installTestData", $installTestData);
  $installQ->freshInstall($locale,  $parament = "CDU", $CDU);
  $installQ->freshInstall($locale,  $parament = "CDD", $CDD);
  $installQ->freshInstall($locale,  $parament = "IBIC", $IBIC);
  $installQ->freshInstall($locale,  $parament = "CUTTER", $CUTTER);
  $installQ->close();

echo "<br>" . $loc->getText("install_Data_ok") . "<br>\n" ;
?>
<a href="../home/index.php"> <?php echo $loc->getText("form_start"); ?></a>
<?php include("../install/footer.php");
