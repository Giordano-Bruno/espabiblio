<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  session_cache_limiter(null);

  $tab = "cataloging";
  $nav = "cdu";
  $helpPage = "cdu";
  $focus_form_name = "barcodesearch";
  $focus_form_field = "searchText";

  require_once("../shared/logincheck.php");
  require_once("../shared/header.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
?>

<h1><img src="../images/circ.png" border="0" width="30" height="30" align="top"> <?php echo $loc->getText("cduindexHeading"); ?></h1>
<form name="cdu_des_search" method="POST" action="../catalog/cdu_search.php">
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left">
    <?php echo $loc->getText("cduindexNameHdr"); ?>
    </td>
    </tr>
  <tr>
    <td nowrap="true" class="primary">
      <?php echo $loc->getText("cduindexName"); ?>
      <input type="text" name="searchText" size="30" maxlength="80">
      <input type="hidden" name="searchType" value="cdudessearch">
      <input type="submit" value="<?php echo $loc->getText("cduindexSearch"); ?>" class="button">
    </td>
  </tr>
</table>
</form>

<form name="cdu_clv_search" method="POST" action="../catalog/cdu_search.php">
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("cduindexclv"); ?>
    </th>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      <?php echo $loc->getText("CduClv"); ?>
      <input type="text" name="searchText" size="20" maxlength="20">
      <input type="hidden" name="searchType" value="cduclvsearch">
      <input type="submit" value="<?php echo $loc->getText("cduindexSearch"); ?>" class="button">
    </td>
  </tr>
</table>
</form>

<form name="cdu_num_search" method="POST" action="../catalog/cdu_search.php">
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("cduindexnum"); ?>
    </th>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      <?php echo $loc->getText("CduNum"); ?>
      <input type="text" name="searchText" size="20" maxlength="20">
      <input type="hidden" name="searchType" value="cdunumsearch">
      <input type="submit" value="<?php echo $loc->getText("cduindexSearch"); ?>" class="button">
    </td>
  </tr>
</table>
</form>

<?php include("../shared/footer.php");
