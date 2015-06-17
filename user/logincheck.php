<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
#*********************************************************************************
#*  checklogin.php
#*  Description: Used to verify signon token on every secured page.
#*               Redirects to the login page if token not valid.
#*********************************************************************************

  require_once("../classes/SessionUserQuery.php");
  require_once("../functions/errorFuncs.php");

  #****************************************************************************
  #*  Temporarily disabling security for demo since sourceforge.net
  #*  seems to be using mirrored servers that do not share session info.
  #****************************************************************************
  if (!OBIB_DEMO_FLG) {
    $pages = array(
//      'opac'=>'../opac/index.php',
   //   'home'=>'../home/index.php',
      'user'=>'../user/index.php',
  //    'cataloging'=>'../catalog/index.php',
  //    'admin'=>'../admin/index.php',
  //    'reports'=>'../reports/index.php',
    );
  $returnPage = $pages[$tab];
  $_SESSION["returnPage"] = $returnPage;

  #****************************************************************************
  #*  Checking to see if session variables exist
  #****************************************************************************
  if (!isset($_SESSION["mbrid"]) or ($_SESSION["mbrid"] == "")) {
    header("Location: ../user/index.php");
    exit();
  }
  if (!isset($_SESSION["token"]) or ($_SESSION["token"] == "")) {
    header("Location: ../user/index.php");
    exit();
  }

  #****************************************************************************
  #*  Checking session table to see if session_id has timed out
  #****************************************************************************
  $sessQ = new SessionQuery();
  $sessQ->connect();
  if ($sessQ->errorOccurred()) {
    displayErrorPage($sessQ);
  }
  if (!$sessQ->validToken($_SESSION["mbrid"], $_SESSION["token"])) {
    if ($sessQ->errorOccurred()) {
      displayErrorPage($sessQ);
    }
    $sessQ->close();
    $_SESSION = array();
    session_destroy();
    header("Location: ../user/index.php?RET=".U($returnPage));
    exit();
  }
  $sessQ->close();

  #****************************************************************************
  #*  Checking authorization for this tab
  #*  The session authorization flags were set at login in login.php
  #****************************************************************************
  if ($tab == "user"){
    if (!$_SESSION["hasCircAuth"]) {
      header("Location: ../user/noauth.php");
      exit();
    } elseif (isset($restrictToMbrAuth) and !$_SESSION["hasCircMbrAuth"]) {
      header("Location: ../user/noauth.php");
      exit();
    }
  }
/*
 elseif ($tab == "cataloging") {
    if (!$_SESSION["hasCatalogAuth"]) {
      header("Location: ../catalog/noauth.php");
      exit();
    }
  } elseif ($tab == "admin") {
    if (!$_SESSION["hasAdminAuth"]) {
      header("Location: ../admin/noauth.php");
      exit();
    }
  } elseif ($tab == "reports") {
    if (!$_SESSION["hasReportsAuth"]) {
      header("Location: ../reports/noauth.php");
      exit();
    }
  } elseif ($tab == "opac") {//modifcado jalg nov/2013
    if (!$_SESSION["hasReportsAuth"]) {
      header("Location: ../opac/index.php");
      exit();
    }
  }
*/
  }

  #****************************************************************************
  #*  Checking to see if we are in demo mode and if we should not execute this
  #*  page.
  #****************************************************************************
  if (isset($restrictInDemo) && $restrictInDemo && OBIB_DEMO_FLG) {
    include("../shared/demo_msg.php");
  }
