<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 
*********************************************************************************
     * Footer, Modificado 02/2015 JALG para usar footer general
     ********************************************************************************** 
 */

//  $tab = "shared";
//  $nav = "shared";
  require_once("../shared/common.php");
 
  require_once("../classes/Localize.php");
  $headerLoc = new Localize(OBIB_LOCALE,"shared");  
  
//     require_once("../shared/header.php");
  include("../shared/help_header.php");
  
  if (isset($_GET["page"])) {
    $page = $_GET["page"];
  } else {
    $page = "contents";
  }
  if (preg_match('/^[a-zA-Z0-9_]+$/', $page)) {
    include("../locale/".OBIB_LOCALE."/help/".$page.".php");
  }
  //  include("../shared/help_footer.php");
?>

<!-- **************************************************************************************
     * Footer, Modificado 02/2015 JALG para usar footer general.
     **************************************************************************************-->


<?php require_once("../shared/footer.php");
