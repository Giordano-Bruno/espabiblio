<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

  require_once("../shared/common.php");
  $tab = "admin";
  $nav = "MaterialStatus";
  $restrictInDemo = true;
  require_once("../shared/logincheck.php");

  require_once("../classes/Dm.php");
  require_once("../classes/DmQuery.php");
  require_once("../functions/errorFuncs.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  #****************************************************************************
  #*  Checking for post vars.  Go back to form if none found.
  #****************************************************************************

  if (count($_POST) == 0) {
    header("Location: ../admin/matstat_list.php");
    exit();
  }

 $dmQ = new DmQuery();
  $dmQ->connect();
  $biblioStatusDm = $dmQ->getAssoc("biblio_status_dm");
  $dmQ->close();

  $anz = 0;
  foreach ($biblioStatusDm as $pos => $wert) {
  	$codeadd[] = $pos;
  	$anz++;
  }

  //print "<br>vorher: ".$anz;
  while (in_array($anz, $codeadd)) {
    //print "<br>".$anz." ist bereits enthalten";
    $anz++;
  }
  //print "<br>nachher: wird gesetzt: ".$anz;
  
  if ($_POST["code"]=="")
	  $_POST["code"] = $anz;

#****************************************************************************
  #*  Validate data
  #****************************************************************************
  $dm = new Dm();
  $dm->setCode($_POST["code"]);
  $_POST["code"] = $dm->getCode();
  $dm->setDescription($_POST["description"]);
  $_POST["description"] = $dm->getDescription();

  if (!$dm->validateData()) {
    $pageErrors["description"] = $dm->getDescriptionError();
    $_SESSION["postVars"] = $_POST;
    $_SESSION["pageErrors"] = $pageErrors;
    header("Location: ../admin/materials_edit_form.php");
    exit();
  }

  #**************************************************************************
  #*  Update domain table row
  #**************************************************************************
  $dmQ = new DmQuery();
  $dmQ->connect();
  $dmQ->update("biblio_status_dm",$dm);
  $dmQ->close();

  #**************************************************************************
  #*  Destroy form values and errors
  #**************************************************************************
  unset($_SESSION["postVars"]);
  unset($_SESSION["pageErrors"]);

  #**************************************************************************
  #*  Show success page
  #**************************************************************************
  require_once("../shared/header.php");
?>
<?php echo $loc->getText("admin_materials_listMaterialstate"); ?><?php echo H($dm->getDescription());?><?php echo $loc->getText("admin_materials_editEnd"); ?><br><br>
<a href="../admin/matstat_list.php"><?php echo $loc->getText("admin_materials_Return"); ?></a>

<?php require_once("../shared/footer.php");
