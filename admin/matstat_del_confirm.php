<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

  require_once("../shared/common.php");
  $tab = "admin";
  $nav = "MaterialStatus";
  require_once("../shared/logincheck.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

  #****************************************************************************
  #*  Checking for query string.  Go back to material type list if none found.
  #****************************************************************************
  if (!isset($_GET["code"])){
    header("Location: ../admin/matstat_list.php");
    exit();
  }
  $code = $_GET["code"];
  $description = $_GET["desc"];

  require_once("../classes/Dm.php");
  require_once("../classes/DmQuery.php");
 
 #****************************************************************************
  #*  Checking for post vars.  Go back to form if none found.
  #****************************************************************************

  $dmQ = new DmQuery();
  $dmQ->connect();
  $biblioStatusDm = $dmQ->getAssoc("biblio_status_dm");
  $dmQ->close();

  $_POST["description"] = "";
  foreach ($biblioStatusDm as $pos => $wert) {
	//print "pos:".$pos." wert:".$wert;
	if ($code == $pos)
		$_POST["description"] = $wert;
  }

  #**************************************************************************
  #*  Show confirm page
  #**************************************************************************
  require_once("../shared/header.php");
?>
<center>
<form name="delstaffform" method="POST" action="../admin/matstat_del.php?code=<?php echo HURL($code);?>&amp;desc=<?php echo HURL($description);?>">
<?php echo $loc->getText("admin_matstat_delAreyousure"); ?><?php echo "''".$_POST["description"]."''";?> ?<br><br>
      <input type="submit" value="  <?php echo $loc->getText("adminDelete"); ?>  " class="button">
      <input type="button" onClick="self.location='../admin/matstat_list.php'" value="  <?php echo $loc->getText("adminCancel"); ?>  " class="button">
</form>
</center>
<?php include("../shared/footer.php");
