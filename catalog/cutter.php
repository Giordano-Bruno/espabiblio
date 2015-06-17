<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
   require_once("../shared/common.php");
  session_cache_limiter(null);

  $tab = "cataloging";
  $nav = "cutter";
  $helpPage = "cutter";
  $focus_form_name = "cutterdesearch";
  $focus_form_field = "searchText";
  require_once("../shared/logincheck.php");
  require_once("../shared/header.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
?>
<h1><img src="../images/circ.png" border="0" width="30" height="30" align="top"> <?php echo $loc->getText("cutterindexHeading"); ?></h1>
<form name="phrasesearch" method="POST" action="../catalog/cutter_search.php">
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left">
    <?php echo $loc->getText("cutterindexNameHdr"); ?>
    </td>
    </tr>
  <tr>
    <td nowrap="true" class="primary">
      <?php echo $loc->getText("cutterindexName"); ?>
      <input type="text" name="searchCutter" size="30" maxlength="80">
      <input type="submit" value="<?php echo $loc->getText("cutterindexSearch"); ?>" class="button">
    </td>
  </tr>
</table>
</form>
<?php
?>

<?php include("../shared/footer.php");
