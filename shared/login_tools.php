<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  require_once("../classes/Staff.php");
  require_once("../classes/StaffQuery.php");
  require_once("../classes/SessionQuery.php");
  require_once("../functions/errorFuncs.php");

  /*
	after login this routine executes actions pended for autintification
	actions swaved at $_SESSION['on_login_action'] array that have structure:	[   <autintification_access> => actionlist]
	where : 
		autintification_access 	- is a comma-separated list of keys wich all together requres $_SESSION[  $autintification_key ]  ==true to execute actionlist
		  supposed to use hasAdminAuth, hasCircAuth, hasCircMbrAuth, hasCatalogAuth, hasReportsAuth keys to compose autintification_access
		actionlist			- is array (   action_type => action_data) 
			at present supports only 'replace_session_var' action that replaces in $_SESSION with action_data variables
  */
  function on_login_ok(){
	if (!isset($_SESSION['on_login_action']))
		return;
	$actions = &$_SESSION['on_login_action'];
	foreach($actions as $access => $AuthActions){
		$authes = explode(',', $access);
		$access_ok = true;
		foreach($authes as $auth){
			if (isset($_SESSION[$auth]))
			if ($_SESSION[$auth] == true)
				continue;
			$access_ok = false;
			break;
		}
		if (!$access_ok) {
			unset($actions[$access]);
			continue;
		}
		if (isset($AuthActions['replace_session_var'])){
			foreach($AuthActions['replace_session_var'] as $key => $value)
				$_SESSION[$key] = $value;
			unset($AuthActions['replace_session_var']);
		}
	}
	unset($_SESSION['on_login_action']);
  }

  /*
	this post an $vars to be placed into $_SESION after login with autintification_access rights
		access 	- is a comma-separated list of keys wich all together requres $_SESSION[  $autintification_key ]  ==true to execute actionlist
		  supposed to use hasAdminAuth, hasCircAuth, hasCircMbrAuth, hasCatalogAuth, hasReportsAuth keys to compose autintification_access
		  
  */
	function pend_onlogin_vars($access, $vars){
		$_SESSION['on_login_action'][$access];
		$actions = &$_SESSION['on_login_action'];
		if (!isset($actions[$access]))
			$actions[$access] = array();
		$on_access = &$actions[$access];
		if (!isset($on_access['replace_session_var']))
			$on_access['replace_session_var'] = array();
		$list = &$on_access['replace_session_var'];
		foreach($vars as $key => $value)
			$list[$key] = $value;
	}

	function go_login_to($on_login_page){
		global $returnPage;
	  $returnPage = $on_login_page;
	  $_SESSION[returnPage] = $returnPage;
		//header("Location: ../shared/loginform.php?RET=".U($returnPage));
		header("Location: ../shared/loginform.php");
		exit();
	}