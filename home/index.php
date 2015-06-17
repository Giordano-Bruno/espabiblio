<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  $tab = "home";
  $nav = "home";

  require_once("../shared/header.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
?>
<h1><?php echo $loc->getText("indexHeading"); ?></h1>

<?php
// echo $loc->getText("searchResults",array("items"=>0))."<br>";
?>

<?php echo $loc->getText("indexIntro"); ?>

<br><br>
<table class="primary">
  <tr>
    <th><?php echo $loc->getText("indexTab"); ?></th><th align="left"><?php echo $loc->getText("indexDesc"); ?></th>
  </tr>
  <tr>
    <td align="center" valign="top" class="primary"><?php echo $loc->getText("indexCirc"); ?><br><br>
      <img src="../images/circ.png" border="0" width="30" height="30"></td>
    <td class="primary"><?php echo $loc->getText("indexCircDesc1"); ?>
      <ul>
        <li><?php echo $loc->getText("indexCircDesc2"); ?></li>
        <li><?php echo $loc->getText("indexCircDesc3"); ?></li>
        <li><?php echo $loc->getText("indexCircDesc4"); ?></li>
        <li><?php echo $loc->getText("indexCircDesc5"); ?></li>
        <li><?php echo $loc->getText("indexCircDesc6"); ?></li>
        <li><?php echo $loc->getText("indexCircDesc7"); ?></li>

      </ul>
    </td>
  </tr>
  <tr>
    <td align="center"  valign="top" class="primary"><?php echo $loc->getText("indexCat"); ?><br><br>
      <img src="../images/catalog.png" border="0" width="30" height="30"><br><br></td>
    <td valign="top" class="primary"><?php echo $loc->getText("indexCatDesc1"); ?>
     <ul>
        <li><?php echo $loc->getText("indexCatDesc2"); ?></li>
        <li><?php echo $loc->getText("indexCatDesc3"); ?></li>
        <li><?php echo $loc->getText("indexCatDesc4"); ?></li>
        <li><?php echo $loc->getText("indexCatDesc5"); ?></li>
        <li><?php echo $loc->getText("indexCatDesc6"); ?></li>
        <li><?php echo $loc->getText("indexCatDesc7"); ?></li>
        <li><?php echo $loc->getText("indexCatDesc8"); ?></li>
        <li><?php echo $loc->getText("indexCatDesc9"); ?></li>
        <li><?php echo $loc->getText("indexCatDesc10"); ?></li>
        <li><?php echo $loc->getText("indexCatDesc11"); ?></li>
        <li><?php echo $loc->getText("indexCatDesc12"); ?></li>
       </ul>
    </td>
  </tr>
  <tr>
    <td align="center"  valign="top" class="primary"><?php echo $loc->getText("indexAdmin"); ?><br><br>
      <img src="../images/admin.png" border="0" width="30" height="30"></td>
    <td class="primary"><?php echo $loc->getText("indexAdminDesc1"); ?>

      <ul>
        <li><?php echo $loc->getText("indexAdminDesc2"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc3"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc4"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc5"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc6"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc7"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc8"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc9"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc10"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc11"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc12"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc13"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc14"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc15"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc16"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc17"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc18"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc19"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc20"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc21"); ?></li>
        <li><?php echo $loc->getText("indexAdminDesc22"); ?></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td align="center"  valign="top" class="primary"><?php echo $loc->getText("indexReports"); ?><br><br>
      <img src="../images/reports.png" border="0" width="30" height="30"><br><br></td>
    <td class="primary" valign="top"><?php echo $loc->getText("indexReportsDesc1"); ?>

      <ul>
        <li><?php echo $loc->getText("indexReportsDesc2"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc3"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc4"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc5"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc6"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc7"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc8"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc9"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc10"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc11"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc12"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc13"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc14"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc15"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc16"); ?></li>
        <li><?php echo $loc->getText("indexReportsDesc17"); ?></li>
      </ul>
    </td>
  </tr>

  <tr>
    <td align="center"  valign="top" class="primary"><?php echo $loc->getText("indexGen"); ?><br><br>
      <img src="../images/linux.gif" border="0" width="30" height="30"><br><br></td>
    <td class="primary" valign="top"><?php echo $loc->getText("indexGenDesc1"); ?>

      <ul>
        <li><?php echo $loc->getText("indexGenDesc2"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc3"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc4"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc5"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc6"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc7"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc8"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc9"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc10"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc11"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc13"); ?></li>
        <li><?php echo $loc->getText("indexGenDesc12"); ?></li>
      </ul>
    </td>
  </tr>
</table>

<?php include("../shared/footer.php");
