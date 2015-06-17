<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
  require_once("../shared/common.php");
  session_cache_limiter(null);

  $tab = "user";
  $restrictToMbrAuth = TRUE;
  $nav = "edit";
  $focus_form_name = "editMbrform";
  $focus_form_field = "barcodeNmbr";
  require_once("../functions/inputFuncs.php");
  require_once("../user/logincheck.php");
  require_once("../classes/Member.php");
  require_once("../classes/MemberQuery.php");

  if (isset($_GET["mbrid"])){
    $mbrid = $_GET["mbrid"];
  } else {
    require("../shared/get_form_vars.php");
    $mbrid = $postVars["mbrid"];
  }
  $mbrQ = new MemberQuery();
  $mbrQ->connect();
  $mbr = $mbrQ->get($mbrid);
  $mbrQ->close();
  require_once("../opac/header_opac.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  $headerWording = $loc->getText("mbrEditForm");

  $cancelLocation = "../user/user_view.php?mbrid=".$mbrid."&reset=Y";
?>

<form ENCTYPE="multipart/form-data" name="editMbrform" method="POST" action="../user/user_edit.php">
<input type="hidden" name="mbrid" value="<?php echo H($mbrid);?>">
<input type="hidden" name="MAX_FILE_SIZE" value=OBIB_MAX_FILE_SIZE>

<?php include("../user/user_fields.php"); ?>
<?php include("../shared/footer.php");
