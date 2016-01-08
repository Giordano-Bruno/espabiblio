<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
  require_once("../shared/common.php");
  $tab = "admin";
  $nav = "member_fields";
  $restrictInDemo = true;
  require_once("../shared/logincheck.php");

  require_once("../classes/Mf.php");//
  require_once("../classes/MfQuery.php");//
  require_once("../functions/errorFuncs.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

print_r($_REQUEST);

  #****************************************************************************
  #*  Checking for post vars.  Go back to form if none found.
  #****************************************************************************
  if (count($_POST) == 0) {
    header("Location: ../admin/member_fields_list.php");
    exit();
  }

  #****************************************************************************
  #*  Validate data
  #****************************************************************************

  $mf = new Mf();
  $mf->setMbrid($_POST["mbrid"]);
  $_POST["mbrid"] = $mf->getMbrid();
  $mf->setCode($_POST["code"]);
  $_POST["code"] = $mf->getCode();
  $mf->setData($_POST["data"]);
  $_POST["data"] = $mf->getData();

print_r($mf);

  if (!$mf->validateData()) {
    $pageErrors["data"] = $mf->getDataError();
    $_SESSION["postVars"] = $_POST;
    $_SESSION["pageErrors"] = $pageErrors;
    header("Location: ../admin/member_fields_edit_form.php");
    exit();
  }

  #**************************************************************************
  #*  Update domain table row
  #**************************************************************************
print_r($mf);
  $mfQ = new MfQuery();
  $mfQ->connect();
  $mfQ->update("member_fields",$mf);
  $mfQ->close();

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
<?php echo $loc->getText("Member field, %data%, has been updated.", array('data'=>$mf->getData()));?><br><br>
<a href="../admin/member_fields_list.php"><?php echo $loc->getText("return to member field list"); ?></a>

<?php require_once("../shared/footer.php");
