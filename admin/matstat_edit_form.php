<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

  require_once("../shared/common.php");
  session_cache_limiter(null);

  $tab = "admin";
  $nav = "MaterialStatus";
  $focus_form_name = "editmaterialform";
  $focus_form_field = "description";

  require_once("../functions/inputFuncs.php");
  require_once("../shared/logincheck.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  require_once("../shared/header.php");

  #****************************************************************************
  #*  Checking for query string flag to read data from database.
  #****************************************************************************
  if (isset($_GET["code"])){
    unset($_SESSION["postVars"]);
    unset($_SESSION["pageErrors"]);

    $code = $_GET["code"];
    $postVars["code"] = $code;
    require_once("../classes/BiblioCopy.php");
    require_once("../classes/BiblioCopyQuery.php");
    include_once("../classes/Dm.php");
    include_once("../classes/DmQuery.php");
    include_once("../functions/errorFuncs.php");
    
  $dmQ = new DmQuery();
  $dmQ->connect();
  $dm = $dmQ->get1("biblio_status_dm",$code);
  $dmQ->close();
}
    $postVars["description"] = $dm->getDescription();
?>
<form name="editmatstateform" method="POST" action="../admin/matstate_edit.php">
<input type="hidden" name="code" value="<?php echo H($postVars["code"]);?>">
<table class="primary">
  <tr>
    <th colspan="2" nowrap="yes" align="left">
      <?php echo $loc->getText("admin_materials_delEditmaterialtype"); ?>
    </th>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      <?php echo $loc->getText("admin_materials_delDescription"); ?>
    </td>
    <td valign="top" class="primary">
      <?php printInputText("description",40,40,$postVars,$pageErrors); ?>
    </td>
  </tr>
  <tr>
    <td align="center" colspan="2" class="primary">
      <input type="submit" value="  <?php echo $loc->getText("adminSubmit"); ?>  " class="button">
      <input type="button" onClick="self.location='../admin/matstat_list.php'" value="  <?php echo $loc->getText("adminCancel"); ?>  " class="button">
    </td>
  </tr>

</table>
      </form>

<?php include("../shared/footer.php");
