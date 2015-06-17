<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  session_cache_limiter(null);

  $tab = "cataloging";
  $nav = "cdd";
  $helpPage = "cdd";
  $focus_form_name = "barcodesearch";
  $focus_form_field = "searchText";

  require_once("../shared/logincheck.php");
  require_once("../shared/header.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

?>

<h1><img src="../images/circ.png" border="0" width="30" height="30" align="top"> <?php echo $loc->getText("cddindexHeading"); ?></h1>

<form name="cddphrasesearch" method="POST" action="../catalog/cdd_search.php">
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left">
    <?php echo $loc->getText("cddindexNameHdr"); ?>
    </td>
    </tr>
  <tr>
    <td nowrap="true" class="primary">
      <?php echo $loc->getText("cddindexName"); ?>
      <input type="text" name="searchText" size="30" maxlength="80">
      <input type="hidden" name="searchType" value="cddphrasesearch">
      <input type="submit" value="<?php echo $loc->getText("cddindexSearch"); ?>" class="button">
    </td>
  </tr>
</table>
</form>

<form name="cddclvsearch" method="POST" action="../catalog/cdd_search.php">
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("cddindexClave"); ?>
    </th>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      <?php echo $loc->getText("CddClave"); ?>
      <input type="text" name="searchText" size="20" maxlength="20">
      <input type="hidden" name="searchType" value="cddclvsearch">
      <input type="submit" value="<?php echo $loc->getText("cddindexSearch"); ?>" class="button">
    </td>
  </tr>
</table>
</form>

<form name="cddnumsearch" method="POST" action="../catalog/cdd_search.php">
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("cddindexNum"); ?>
    </th>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      <?php echo $loc->getText("CddNum"); ?>
      <input type="text" name="searchText" size="20" maxlength="20">
      <input type="hidden" name="searchType" value="cddnumsearch">
      <input type="submit" value="<?php echo $loc->getText("cddindexSearch"); ?>" class="button">
    </td>
  </tr>
</table>
</form>

<?php include("../shared/footer.php");
