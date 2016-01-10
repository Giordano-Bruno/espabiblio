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
  require_once("../shared/header.php");

  if ( !is_have_admin_rights() )
  {
	echo '<p>'.$loc->getText('need administrator right for this page').'</p>\n';
	exit();
  }
	if (isset($pageErrors["mysqldump_cmd"]))
		echo '<p>'.$loc->getText('last dump uses cmd:').$pageErrors['mysqldump_cmd'].'</p>\n';
	if (isset($pageErrors["mysqldump_result"]))
		echo '<p>'.$loc->getText('last dump resulted:').$pageErrors['mysqldump_result'].'</p>\n';
?>
<form name="backupform" method="POST" action="../admin/backup_save.php">
<div>
	<p> <?php echo $loc->getText('Download database backup dump'); ?> </p>
    <input type="submit" name="SaveBackup" value="<?php echo $loc->getText('Save'); ?>" class="button">
</div>
</form>

<form name="restoreform" method="POST" action="../admin/backup_restore.php">
<div>
	<p> <?php echo $loc->getText('Upload database from backup dump'); ?> </p>
    <input type="submit" name="LoadBackup" value="<?php echo $loc->getText('Load'); ?>" class="button">
</div>
</form>

<?php 
	include("../shared/footer.php"); 