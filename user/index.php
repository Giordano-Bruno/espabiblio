<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
  require_once("../shared/common.php");
  $temp_return_page = "";
  if (isset($_GET["RET"]) && isset($_POST["RET"])){
    $_SESSION["returnPage"] = $_GET["RET"];
  }
  session_cache_limiter(null);
  $tab = "user";
  $nav = "view";
  $helpPage = "user";
  $focus_form_name = "loginform";
  $focus_form_field = "username";
 // require_once("../shared/get_form_vars.php");
//  $focus_form_name = "barcodesearch";
//  $focus_form_field = "searchText";
  // require_once("../shared/logincheck.php");
  require_once("../opac/header_opac.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
?>

<script type="text/javascript" ">
   function Validar(f) {
    if (f.searchText.value=='') {
      alert("Por favor Digite almenos Un digito del codigo / una letra del apellido ");
      f.searchText.focus();
      return (false);
    }
   }
</script>

<h1><img src="../images/circ.png" border="0" width="30" height="30" align="top"> <?php echo $loc->getText("indexHeadingUser"); ?></h1>
<br>
<center>
<form name="loginform" method="POST" action="../user/login.php" onsubmit="return Validar(this);">
<table class="primary">
  <tr>
    <th><?php echo $loc->getText("indexCardHdr"); ?></th>
  </tr>
  <tr>
    <td valign="top" class="primary" align="left">
<table class="primary">
  <tr>
    <td valign="top" class="noborder">
      <?php echo $loc->getText("indexCard"); ?></font>
    </td>
    <td valign="top" class="noborder">
      <input type="text" name="barcode_nmbr" size="20" maxlength="20" value="<?php if (isset($postVars["barcode_nmbr"])) echo H($postVars["barcode_nmbr"]); ?>" >
      <font class="error"><?php if (isset($pageErrors["barcode_nmbr"])) echo H($pageErrors["barcode_nmbr"]); ?></font>
    </td>
  </tr>

  <tr>
    <td valign="top" class="noborder">
      <?php echo $loc->getText("loginFormPassword"); ?>:</font>
    </td>
    <td valign="top" class="noborder">
      <input type="password" name="pass_user" size="20" maxlength="20" value="<?php if (isset($postVars["pass_user"])) echo H($postVars["pass_user"]); ?>" > 
      <font class="error">
      <?php if (isset($pageErrors["pass_user"])) echo H($pageErrors["pass_user"]); ?></font>
    </td>
  </tr>

  <tr>
    <td colspan="2" align="center" class="noborder">
      <input type="submit" value="<?php echo $loc->getText("loginFormLogin"); ?>" class="button">
    </td>
  </tr>
</table>
    </td>
  </tr>
</table>

</form>
</center>
<?php include("../shared/footer.php");
