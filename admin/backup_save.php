<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  $tab = "admin";
  $nav = "backup";

  require_once("../classes/Theme.php");
  require_once("../classes/ThemeQuery.php");
  require_once("../functions/errorFuncs.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  
  require_once("../shared/logincheck.php");

  if ( (count($_POST) == 0)  || (!is_have_admin_rights()) ) {
    header("Location: ../admin/backup_control.php");
    exit();
  }

  define("ISDEBUG", 0);
  
  require_once("../classes/Query.php");
  $q = new Query;
  $mysqldump = $q->GetExecPath('mysqldump');
  
	$DBHOST 	= OBIB_HOST;
	$DBUSER		= OBIB_USERNAME;
	$DBPASSWD	= OBIB_PWD;
	$DATABASE	= OBIB_DATABASE;
	$DBCHARSET	= DB_CHARSET;

	$filename = OBIB_DATABASE.'-backup-'.date("Y-m-d-H-i-s") . ".sql";
	$mime = "application/octet-stream";
	$cmd = "$mysqldump -h $DBHOST -u $DBUSER --password=$DBPASSWD --set-charset $DATABASE";   
	$result = 0;
	$tempdir = ini_get('upload_tmp_dir');
	if (empty($tempdir)) 
		$tempdir = sys_get_temp_dir();
	$target = tempnam($tempdir, 'sqldump');
	if ($target === FALSE){
	/*
		$pageErrors['mysqldump_cmd'] 	= $mysqldump;
		$pageErrors['mysqldump_result'] = 'target is '.$target;
		$_SESSION["postVars"] = $_POST;
		$_SESSION["pageErrors"] = $pageErrors;
		header("Location: ../admin/backup_control.php");
	*/
	  require_once("../shared/logincheck.php");
	  require_once("../shared/header.php");
		//echo "<p>cmd is: $cmd </p>\n";
		echo "<p>temp is: $target </p>\n";
		include("../shared/footer.php"); 
		exit();
	}
	$cmd .= " > $target";

	if (ISDEBUG == 0){
	  $out = array();
	  exec($cmd, $out, $result);
		//passthru( $cmd , $result);
	$pageErrors['mysqldump_cmd'] 	= $mysqldump;
	$pageErrors['mysqldump_result'] = $result;
	if ($result == 0){
		unset($pageErrors);
		//foreach($out as $line)
		//	echo $line;
		header( "Content-Type: " . $mime );
		header( 'Content-Disposition: attachment; filename="' . $filename . '"' );
		readfile($target);
		unlink($target);
		exit(0);
	}
	
    $_SESSION["postVars"] = $_POST;
    $_SESSION["pageErrors"] = $pageErrors;
    header("Location: ../admin/backup_control.php");
	}
	else{
	  require_once("../shared/logincheck.php");
	  require_once("../shared/header.php");
	  $out = array();
	  exec($cmd, $out, $result);
		echo "<p>cmd is: $cmd </p>\n";
		echo "<p>result is: $result </p>\n";
		foreach($out as $line)
			echo $line."</br>\n";
		include("../shared/footer.php"); 
	}