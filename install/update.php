<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

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
  require_once("../classes/UpgradeQuery.php");
//    require_once("../css/style.css");
  include("../install/header.php");

  require_once("../classes/Localize.php");//jalg para uso de multi-idioma
  $loc = new Localize($locale,$tab);//jalg para uso de multi-idioma

?>
<br>
<h3><?php  echo $loc->getText("update_start"); ?>:</h3>

<?php
  # testing connection and current version

  $upgradeQ = new UpgradeQuery();

  echo $loc->getText("Update_wait")  . "<br>\n";
  list($notices, $error) = $upgradeQ->performUpgrade_e();
  if ($error) {
    echo "<h3>" . $loc->getText("Update_Failed") . "</h3>";
    echo $error->toStr();
    echo '<span style="color: red; font-weight: bold;">' . $loc->getText("Update_interrupted") . '<a href="./index.php">run update again</a>';
    include("../install/footer.php");
    exit();
  }
  $upgradeQ->close();

  require_once("../install/create_dir.php");
?>
<br><?php echo $loc->getText("Update_successfully"); ?><br>
<?php

if (!empty($notices)) {  
  echo '<h3>NOTICE:</h3>';
  echo '<ul>';
  foreach ($notices as $n) {
    echo '<li>'.H($n).'</li>';
  }
  echo '</ul>';
}

?>
<a href="../home/index.php"><?php echo $loc->getText("install_Data_ok"); ?></a>
<?php include("../install/footer.php");
