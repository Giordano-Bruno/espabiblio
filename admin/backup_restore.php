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
  // prepare for autintification фаеку file uploaded
  if (isset($_SESSION['sql_dump_file'])){
	if (is_file($_SESSION['sql_dump_file'][server]))
		unlink($_SESSION['sql_dump_file'][server]);
  }
  unset($_SESSION['sql_dump_file']);
  
  require_once("../shared/header.php");
?>

<form name="backupform" enctype="multipart/form-data" method="POST" action="../admin/backup_upload.php">
	<p> <?php echo $loc->getText('backup_upload_warn_aughtung'); ?> </p>
	<div>
		<input type="file" name="sql_dump_file">
	</div>
	<div>
		<input type="submit" name="LoadBackup" value="<?php echo $loc->getText('Upload'); ?>" class="button">
	</div>
</form>

<?php 
	include("../shared/footer.php"); 