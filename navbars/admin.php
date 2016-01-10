<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../classes/Localize.php");
  $navLoc = new Localize(OBIB_LOCALE,"navbars");

?>
<input type="button" onClick="self.location='../shared/logout.php'" value="<?php echo $navLoc->getText("logout");?>" class="navbutton"><br />
<br />

<ul>
<?php if ($nav == "summary") { ?>
 <li class="active">
   <?php echo $navLoc->getText("adminSummary");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/index.php" class="alt1"><?php echo $navLoc->getText("adminSummary");?></a>
 </li>
<?php } ?>

<?php if ($nav == "staff") { ?>
 <li class="active">
   <?php echo $navLoc->getText("adminStaff");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/staff_list.php" class="alt1"><?php echo $navLoc->getText("adminStaff");?></a>
 </li>
<?php } ?>

<?php if ($nav == "settings") { ?>
 <li class="active">
   <?php echo $navLoc->getText("adminSettings");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/settings_edit_form.php?reset=Y" class="alt1"><?php echo $navLoc->getText("adminSettings");?></a>
 </li>
<?php } ?>

<?php if ($nav == "classifications") { ?>
 <li class="active">
   <?php echo $navLoc->getText("Member Types");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/mbr_classify_list.php" class="alt1"><?php echo $navLoc->getText("Member Types");?></a>
 </li>
<?php } ?>
<?php if ($nav == "member_fields_dm") { ?>
 <li class="active">
   <?php echo $navLoc->getText("Member Fields dm");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/member_fields_dm_list.php" class="alt1"><?php echo $navLoc->getText("Member Fields dm");?></a>
 </li>
<?php } ?>
<!----------
<?php if ($nav == "member_fields") { ?>
 <li class="active">
   <?php echo $navLoc->getText("Member Fields");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/member_fields_list.php" class="alt1"><?php echo $navLoc->getText("Member Fields");?></a>
 </li>
<?php } ?>
------->

<?php if ($nav == "copy fields") { ?>
 <li class="active">
   <?php echo $navLoc->getText("Copy Fields");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/copy_fields_list.php" class="alt1"><?php echo $navLoc->getText("Copy Fields");?></a>
 </li>
<?php } ?>

<?php if ($nav == "materials") { ?>
 <li class="active">
   <?php echo $navLoc->getText("adminMaterialTypes");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/materials_list.php" class="alt1"><?php echo $navLoc->getText("adminMaterialTypes");?></a>
 </li>
<?php } ?>

<?php if ($nav == "MaterialStatus") { ?>
 <li class="active">
   <?php echo $navLoc->getText("adminMaterialStatus");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/matstat_list.php" class="alt1"><?php echo $navLoc->getText("adminMaterialStatus");?></a>
 </li>
<?php } ?>
<?php if ($nav == "collections") { ?>
 <li class="active">
   <?php echo $navLoc->getText("adminCollections");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/collections_list.php" class="alt1"><?php echo $navLoc->getText("adminCollections");?></a>
 </li>
<?php } ?>
<?php if ($nav == "checkout_privs") { ?>
 <li class="active">
   <?php echo $navLoc->getText("adminCheckoutPriv");?>
 </li>
<?php } else { ?>
 <li> 
   <a href="../admin/checkout_privs_list.php" class="alt1"><?php echo $navLoc->getText("adminCheckoutPriv");?></a>
 </li>
<?php } ?>
<?php //jalg integra una pequeña funcion para probar el YAZ ?>
<?php if ($nav == 'yaz-test') { ?>
 <li class="active">
   <?php echo $navLoc->getText("Yaz test");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../lookup2/yazTest.php" class="alt1"><?php echo $navLoc->getText("Yaz test");?></a>
 </li>
<?php } ?>
<?php if ($nav == 'cover_opts') { ?>
 <li class="active">
   <?php echo $navLoc->getText("Cover Lookup Options");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/cover_opts.php" class="alt1"><?php echo $navLoc->getText("Cover Lookup Options");?></a>
 </li>
<?php } ?>
<?php if ($nav == "lookupOpts") { ?>
 <li class="active">
 &raquo; <?php echo $navLoc->getText("lookup_opts");?><br>
 </li>
<?php } else { ?>
 <li>

 <a href="../lookup2/lookupOptsForm.php?reset=Y" class="alt1"><?php echo $navLoc->getText("lookup_opts");?></a><br>
<?php } ?>
<?php if ($nav == "lookupHosts") { ?>
 <li class="active">
 &raquo; <?php echo $navLoc->getText("lookup_hosts");?><br>
<?php } else { ?>
 <li>
 <a href="../lookup2/lookupHostsForm.php?reset=Y" class="alt1"><?php echo $navLoc->getText("lookup_hosts");?></a><br>
 </li>

<?php } ?>
<?php if ($nav == "themes") { ?>
 <li class="active">
   <?php echo $navLoc->getText("adminThemes");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/theme_list.php" class="alt1"><?php echo $navLoc->getText("adminThemes");?></a>
 </li>
<?php } ?>

<?php if ($nav == "import_export") { ?>
 <li class="active">
   <?php echo $navLoc->getText("adminImportExport");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/import_export.php" class="alt1"><?php echo $navLoc->getText("adminImportExport");?></a>
 </li>
<?php } ?>

<?php if ($nav == 'backup') { ?>
 <li class="active">
 &raquo; <?php echo $navLoc->getText('Backup control');?><br>
</li>
<?php } else { ?>
<li>
 <a href="../admin/backup_control.php" class="alt1"><?php echo $navLoc->getText('Backup control');?></a><br>
</li>
<?php } ?>

<?php if ($nav == "adminTranslate") { ?>
 <li class="active">
   <?php echo $navLoc->getText("adminTranslate");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../admin/translate.php" class="alt1"><?php echo $navLoc->getText("adminTranslate");?></a>
 </li>
<?php } ?>

<?php if ($nav == "phpinfo") { ?>
 <li class="active">
   <?php echo $navLoc->getText("phpinfo");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../doc/phpinfo.php" class="alt1"><?php echo $navLoc->getText("phpinfo");?></a>
 </li>
<?php } ?>
 <li>
   <a href="javascript:popSecondary('../shared/help.php<?php if (isset($helpPage)) echo "?page=".H(addslashes(U($helpPage))); ?>')"><?php echo $navLoc->getText("help");?></a>
 </li>
</ul>
