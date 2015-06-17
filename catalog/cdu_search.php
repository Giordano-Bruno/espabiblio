<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  session_cache_limiter(null);

  $tab = "cataloging";
  $nav = "cdu";
  $helpPage = "cdu";
  
  require_once("../shared/logincheck.php");

  require_once("../classes/Cdu.php");
  require_once("../classes/CduQuery.php");
  require_once("../functions/searchFuncs.php");
  require_once("../classes/DmQuery.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  
//  print_r ($_POST);

  #****************************************************************************
  #*  Function declaration only used on this page.
  #****************************************************************************
  function printResultPages($currPage, $pageCount) {
    global $loc;
    $maxPg = 21;
    if ($currPage > 1) {
      echo "<a href=\"javascript:changePage(".H(addslashes($currPage-1)).")\">&laquo;".$loc->getText("cdusearchprev")."</a> ";
    }
    for ($i = 1; $i <= $pageCount; $i++) {
      if ($i < $maxPg) {
        if ($i == $currPage) {
          echo "<b>".H($i)."</b> ";
        } else {
          echo "<a href=\"javascript:changePage(".H(addslashes($i)).")\">".H($i)."</a> ";
        }
      } elseif ($i == $maxPg) {
        echo "... ";
      }
    }
    if ($currPage < $pageCount) {
      echo "<a href=\"javascript:changePage(".($currPage+1).")\">".$loc->getText("cdusearchnext")."&raquo;</a> ";
    }
  }

  #****************************************************************************
  #*  Checking for post vars.  Go back to form if none found.
  #****************************************************************************
  if (count($_POST) == 0) {
    header("Location: ../catalog/index.php");
    exit();
  }

  #****************************************************************************
  #*  Loading a few domain tables into associative arrays
  #****************************************************************************
/*
  $dmQ = new DmQuery();
  $dmQ->connect();
  $mbrClassifyDm = $dmQ->getAssoc("mbr_classify_dm");
  $dmQ->close();
*/
  #****************************************************************************
  #*  Retrieving post vars and scrubbing the data
  #****************************************************************************
  if (isset($_POST["page"])) {
    $currentPageNmbr = $_POST["page"];
  } else {
    $currentPageNmbr = 1;
  }
  $searchType = $_POST["searchType"];
  $searchText = trim($_POST["searchText"]);
  # remove redundant whitespace
  $searchText = preg_replace("/[[:space:]]+/", " ", $searchText);

//define el tipo de busqueda
switch ($searchType) {
    case "cduclvsearch":
    $sType = OBIB_SEARCH_CDU_CLV;
        break;
    case "cdunumsearch":
    $sType = OBIB_SEARCH_CDU_NUM;
        break;
    case 'cdudessearch':
    $sType = OBIB_SEARCH_CDU_DES;
        break;
}

  #****************************************************************************
  #*  Search database
  #****************************************************************************
  $mbrQ = new MemberQuery();
  $mbrQ->setItemsPerPage(OBIB_ITEMS_PER_PAGE);
  $mbrQ->connect();
  $mbrQ->execSearch($sType,$searchText,$currentPageNmbr);

  #**************************************************************************
  #*  Show member view screen if only one result from barcode query
  #**************************************************************************
  if (($sType == OBIB_SEARCH_BARCODE) && ($mbrQ->getRowCount() == 0)) {
    $mbr = $mbrQ->fetchMember();
    $mbrQ->close();
    header("Location: ../catalog/cdu_view.php?mbrid=".U($mbr->getMbrid())."&reset=Y");
    exit();
  }

  #**************************************************************************
  #*  Show search results
  #**************************************************************************

  require_once("../shared/header.php");

  # Display no results message if no results returned from search.
  if ($mbrQ->getRowCount() == 0) {
    $mbrQ->close();
    echo $loc->getText("mbrsearchNoResults");
    require_once("../shared/footer.php");
    exit();
  }
?>

<!--**************************************************************************
    *  Javascript to post back to this page
    ************************************************************************** -->
<script language="JavaScript" type="text/javascript">
<!--
function changePage(page)
{
  document.changePageForm.page.value = page;
  document.changePageForm.submit();
}
-->
</script>

<!--**************************************************************************
    *  Form used by javascript to post back to this page
    ************************************************************************** -->
<form name="changePageForm" method="POST" action="../catalog/cdu_search.php">
  <input type="hidden" name="searchType" value="<?php echo H($_POST["searchType"]);?>">
  <input type="hidden" name="searchText" value="<?php echo H($_POST["searchText"]);?>">
  <input type="hidden" name="page" value="1">
</form>

<!--**************************************************************************
    *  Printing result stats and page nav
    ************************************************************************** -->
<?php echo H($mbrQ->getRowCount()); echo $loc->getText("cdusearchFoundResults");?><br>
<?php printResultPages($currentPageNmbr, $mbrQ->getPageCount()); ?><br>
<br>

<!--**************************************************************************
    *  Printing result table
    ************************************************************************** -->
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left" colspan="10">      <?php echo $loc->getText("cduBidSearchResults");?>    </th>
    <th valign="top" nowrap="yes" align="left" colspan="60">      <?php echo $loc->getText("Cdu_Descripcion");?>    </th>
    <th valign="top" nowrap="yes" align="left" colspan="10">      <?php echo $loc->getText("Cdu_Numero");?>    </th>    
    <th valign="top" nowrap="yes" align="left" colspan="10">      <?php echo $loc->getText("Cdu_Clave");?>    </th>
    <th valign="top" nowrap="yes" align="left" colspan="10">      <?php echo $loc->getText("Cdu_Table");?>    </th>
  </tr>
  <?php
    while ($mbr = $mbrQ->fetchMember()) {
/*
echo "<pre>";
    	print_r ($mbr);
echo "</pre>";
  */  	
  ?>
  <tr>
    <td nowrap="true" class="primary" valign="top" colspan="10"><?php echo H($mbrQ->getCurrentRowNmbr());?></td>
    <td nowrap="true" class="primary" valign="top" colspan="60"><?php echo H($mbr->getCdu_Descripcion());?></th>
    <td nowrap="true" class="primary" valign="top" colspan="10"><?php echo H($mbr->getCdu_Numero());?></th>
    <td nowrap="true" class="primary" valign="top" colspan="10"><?php echo H($mbr->getCdu_Clave());?></th>
    <td nowrap="true" class="primary" valign="top" colspan="10"><?php echo H($mbr->getCdu_Table());?></th>
  </tr>

  <?php
    }
    $mbrQ->close();
  ?>
  </table><br>
<?php printResultPages($currentPageNmbr, $mbrQ->getPageCount()); ?><br><br>
   <a href="../catalog/cdu.php" class="alt1"><?php echo $loc->getText("cduOtra");?></a><br>
<?php require_once("../shared/footer.php");
