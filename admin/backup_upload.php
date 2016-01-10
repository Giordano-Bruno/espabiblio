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

  // prepare for autintification фаеку file uploaded
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
*/
  if (!isset($_SESSION['sql_dump_file']) ){
	  $ok = (count($_FILES) > 0) && is_have_admin_rights();
	  if (!isset($_FILES["sql_dump_file"])){
		$pageErrors['mysql_upload_fail'] 	= true;
		$ok = false;
	  } else {
		  $file_info = & $_FILES["sql_dump_file"];
			$dump_name = $file_info["tmp_name"];
		  $sql_src_name = $file_info["name"];
			echo '<p>host file <b>' .$dump_name.'</b></p>';
			echo '<p>user file <b>' .$file_info["name"].'</b></p>';
			if (!is_uploaded_file($dump_name)) {
				echo "Failed to upload dump file $sql_src_name with error $file_info[error], try again\n";
				include("../shared/footer.php"); 
				exit();
			}
		}
	  if ( !ok ) {
		header("Location: ../admin/backup_control.php");
		exit();
	  }
	  $savename = dirname($dump_name).'/'.basename($sql_src_name).'-'.basename($dump_name);
	  move_uploaded_file($dump_name, $savename);
	  //now require autintification
	  require_once('../shared/login_tools.php');
	  pend_onlogin_vars('hasAdminAuth', array('sql_dump_file' => array( 'server' => $savename, 'host' => $sql_src_name)) );
	  go_login_to('../admin/backup_upload.php');
  }
  
  $dump_name = $_SESSION['sql_dump_file'][server];
  $sql_src_name = $_SESSION['sql_dump_file'][host];
  unset($_SESSION['sql_dump_file']);

	$ok = (is_file($dump_name)) && is_have_admin_rights();
  if ( !ok ) {
    header("Location: ../admin/backup_control.php");
    exit();
  }
	require_once("../shared/header.php");

  require_once("../classes/Query.php");
  $q = new Query;
  $mysql = $q->GetExecPath('mysql');
  
	$DBHOST 	= OBIB_HOST;
	$DBUSER		= OBIB_USERNAME;
	$DBPASSWD	= OBIB_PWD;
	$DATABASE	= OBIB_DATABASE;
	$DBCHARSET	= DB_CHARSET;

	$cmd = "$mysql -h $DBHOST -u $DBUSER --password=$DBPASSWD $DATABASE < $dump_name";   

	exec($cmd,$output=array(),$worked);
	
	switch($worked){
		case 0:
			echo 'Dump file <b>' .$sql_src_name .'</b> successfully imported to database <b>' .$DATABASE.'</b>';
			break;
		default :
?>
			There was an error <?php echo H($worked); ?> during import. <br/>
			<br/>
			<table>
				<tr><td>MySQL Database Name:</td><td><b><?php echo H($DATABASE); ?></b></td></tr>
				<tr><td>MySQL User Name:</td><td><b><?php echo H($DBUSER); ?></b></td></tr>
				<tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr>
				<tr><td>MySQL Host Name:</td><td><b><?php echo H($DBHOST); ?></b></td></tr>
				<tr><td>MySQL Import Filename:</td><td><b><?php echo H($sql_src_name); ?></b></td></tr>
			</table>
<?php
			break;
	}
	
	unset($pageErrors);
	if (is_file($dump_name))
		unlink($dump_name);
	else
		echo 'Dump file are missed!\n';

	include("../shared/footer.php");