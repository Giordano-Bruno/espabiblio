<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  session_cache_limiter(null);

  $tab = "cataloging";
  $nav = "cutter";
  $helpPage = "cutter";
  
  require_once("../shared/logincheck.php");
  require_once("../functions/searchFuncs.php");
  require_once("../lookup2/lookupCutterLoc.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  
  #****************************************************************************
  #*  Checking for post vars.  Go back to form if none found.
  #****************************************************************************
  if (count($_POST) == 0) {
    header("Location: ../catalog/index.php");
    exit();
  }
$Cutter = getCutter ($_POST['searchCutter']);
  require_once("../shared/header.php");
?>

<!--**************************************************************************
    *  Printing result table
    ************************************************************************** -->
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left" colspan="10">      <?php echo $loc->getText("cutterBidSearchResults");?>    </th>
  </tr>
  <tr>
    <td nowrap="true" class="primary" valign="top" colspan="10"><?php echo $Cutter;?></th>
  </tr>
  </table><br>

 <a href="../catalog/cutter.php" class="alt1"><?php echo $loc->getText("cutterOtra");?></a><br>
 <?php require_once("../shared/footer.php");
