<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  $tab = "admin";
  $nav = "member_fields";
  $restrictInDemo = true;
  require_once("../shared/logincheck.php");

  require_once("../classes/Mf.php");
  require_once("../classes/MfQuery.php");
  require_once("../functions/errorFuncs.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  #****************************************************************************
  #*  Checking for post vars.  Go back to form if none found.
  #****************************************************************************

  if (count($_POST) == 0) {
    header("Location: ../admin/member_fields_new_form.php");
    exit();
  }

  #****************************************************************************
  #*  Validate data
  #****************************************************************************
  $pageErrors = array();
  if (!isset($_POST['code']) or !$_POST['code']) {
    $pageErrors['code'] = 'This is a required field.';
  }
  if (!isset($_POST['data']) or !$_POST['data']) {
    $pageErrors['data'] = 'This is a required field.';
  }
  if (!empty($pageErrors)) {
    $_SESSION["postVars"] = $_POST;
    $_SESSION["pageErrors"] = $pageErrors;
    header("Location: ../admin/member_fields_new_form.php");
    exit();
  }

  #**************************************************************************
  #*  Insert new domain table row
  #**************************************************************************
  $mf = new Mf();
  $mf->setCode($_POST["code"]);
  $mf->setData($_POST["data"]);
  $mfQ = new MfQuery();
  $mfQ->connect();
  $mfQ->insert("member_fields",$mf);
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
<?php echo $loc->getText("Member field, %data%, has been added.", array('data'=>$mf->getData()));?><br><br>
<a href="../admin/member_fields_list.php"><?php echo $loc->getText("return to member fields list"); ?></a>

<?php require_once("../shared/footer.php");
