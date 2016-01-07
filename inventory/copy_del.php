<?php
/**
 * Author: Szymon Goralczyk <sg@apgsoft.pl>
 * https://bitbucket.org/abix-pl/openbiblio/branches/compare/Cena_egzemplarza%0dmaster#chg-inventory/copy_del.php
 */


  require_once("../shared/common.php");
  $tab = "cataloging";
  $nav = "view";
  $restrictInDemo = true;
  require_once("../shared/logincheck.php");
  require_once("../classes/BiblioCopyQuery.php");
  require_once("../classes/BiblioStatusHistQuery.php");
  require_once("../functions/errorFuncs.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

  $bibid = $_GET["bibid"];
  $copyid = $_GET["copyid"];
  $barcode = $_GET["barcode"];

  #**************************************************************************
  #*  Delete Bibliography Copy
  #**************************************************************************
  $copyQ = new BiblioCopyQuery();
  $copyQ->connect();
  if ($copyQ->errorOccurred()) {
      $copyQ->close();
      displayErrorPage($copyQ);
  }
  if (!$copyQ->delete($bibid,$copyid)) {
      $copyQ->close();
      displayErrorPage($copyQ);
  }
  $copyQ->close();

  #**************************************************************************
  #*  Delete Copy History
  #**************************************************************************
  $histQ = new BiblioStatusHistQuery();
  $histQ->connect();
  if ($histQ->errorOccurred()) {
      $histQ->close();
      displayErrorPage($histQ);
  }
  if (!$histQ->deleteByBibid($bibid,$copyid)) {
      $histQ->close();
      displayErrorPage($histQ);
  }
  $histQ->close();

  #**************************************************************************
  #*  Show success message
  #**************************************************************************
  $msg = $loc->getText("biblioCopyDelSuccess",array("barcode"=>$barcode));
  header("Location: ../inventory/list_view.php?bibid=".U($bibid)."&msg=".U($msg));
  exit();