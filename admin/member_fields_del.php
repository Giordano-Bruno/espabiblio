<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  $tab = "admin";
  $nav = "member_fields";
  $restrictInDemo = true;
  require_once("../shared/logincheck.php");
  require_once("../classes/MfQuery.php");
  require_once("../functions/errorFuncs.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  #****************************************************************************
  #*  Checking for query string.  Go back to list if none found.
  #****************************************************************************
  if (!isset($_GET["code"])){
    header("Location: ../admin/member_fields_list.php");
    exit();
  }
  $code = $_GET["code"];
  $data = $_GET["data"];



  #**************************************************************************
  #*  Delete row
  #**************************************************************************
  $mfQ = new MfQuery();
  $mfQ->connect();
  $mfQ->delete("member_fields",$code);
  $mfQ->close();

  #**************************************************************************
  #*  Show success page
  #**************************************************************************
  require_once("../shared/header.php");
?>
<?php echo $loc->getText("Member field, %data%, has been deleted.", array('data'=>$data));?><br><br>
<a href="../admin/member_fields_list.php"><?php echo $loc->getText("return to member field list"); ?></a>

<?php require_once("../shared/footer.php");
