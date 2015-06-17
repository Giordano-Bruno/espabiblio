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
<?php if ($nav == "searchform") { ?>
 <li class="active">
   <?php echo $navLoc->getText("catalogSearch1");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/index.php" class="alt1"><?php echo $navLoc->getText("catalogSearch2");?></a>
 </li>
<?php } ?>

<?php if ($nav == "search") { ?>
 <li class="active">
   <?php echo $navLoc->getText("catalogResults");?>
 </li>
<?php } ?>

<?php if ($nav == "view") { ?>
 <li class="active">
   <?php echo $navLoc->getText("catalogBibInfo");?>
 </li>
 <li>
   <a href="../catalog/biblio_edit.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEdit");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_marc_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEditMarc");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_history.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("History");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_copy_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y" class="alt1"><?php echo $navLoc->getText("catalogCopyNew");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_hold_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogHolds");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_del_confirm.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogDelete");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_new_like.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibNewLike");?></a>
 </li>
<?php } ?>

<?php if ($nav == "newcopy") { ?>
 <li>
   <a href="../shared/biblio_view.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibInfo");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_edit.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEdit");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_marc_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEditMarc");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_history.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("History");?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("catalogCopyNew");?>
 </li>
 <li>
   <a href="../catalog/biblio_hold_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogHolds");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_del_confirm.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogDelete");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_new_like.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibNewLike");?></a>
 </li>
<?php } ?>

<?php if ($nav == "editcopy") { ?>
 <li>
   <a href="../shared/biblio_view.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibInfo");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_edit.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEdit");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_marc_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEditMarc");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_history.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("History");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_copy_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y" class="alt1"><?php echo $navLoc->getText("catalogCopyNew");?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("catalogCopyEdit");?>
 </li>
 <li>
   <a href="../catalog/biblio_hold_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogHolds");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_del_confirm.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogDelete");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_new_like.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibNewLike");?></a>
 </li>
<?php } ?>

<?php if ($nav == "edit") { ?>
 <li>
   <a href="../shared/biblio_view.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibInfo");?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("catalogBibEdit");?>
 </li>
 <li>
   <a href="../catalog/biblio_marc_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEditMarc");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_history.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("History");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_copy_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y" class="alt1"><?php echo $navLoc->getText("catalogCopyNew");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_hold_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogHolds");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_del_confirm.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogDelete");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_new_like.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibNewLike");?></a>
 </li>
<?php } ?>

<?php if ($nav == "editmarc") { ?>
 <li>
   <a href="../shared/biblio_view.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibInfo");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_edit.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEdit");?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("catalogBibEditMarc");?>
 </li>
 <li>
   <a href="../catalog/biblio_marc_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y')"><?php echo $navLoc->getText("catalogBibMarcNewFld");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_history.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("History");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_copy_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y" class="alt1"><?php echo $navLoc->getText("catalogCopyNew");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_hold_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogHolds");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_del_confirm.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogDelete");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_new_like.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibNewLike");?></a>
 </li>
<?php } ?>

<?php if ($nav == "newmarc") { ?>
 <li>
   <a href="../shared/biblio_view.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibInfo");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_edit.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEdit");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_marc_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEditMarc");?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("catalogBibMarcNewFldShrt");?>
 </li>
 <li>
   <a href="../catalog/biblio_history.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("History");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_copy_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y" class="alt1"><?php echo $navLoc->getText("catalogCopyNew");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_hold_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogHolds");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_del_confirm.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogDelete");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_new_like.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibNewLike");?></a>
 </li>
<?php } ?>

<?php if ($nav == "editmarcfield") { ?>
 <li>
   <a href="../shared/biblio_view.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibInfo");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_edit.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEdit");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_marc_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEditMarc");?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("catalogBibMarcEditFld");?>
 </li>
 <li>
   <a href="../catalog/biblio_history.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("History");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_copy_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y" class="alt1"><?php echo $navLoc->getText("catalogCopyNew");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_hold_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogHolds");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_del_confirm.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogDelete");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_new_like.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibNewLike");?></a>
 </li>
<?php } ?>

<?php if ($nav == "history") { ?>
 <li>
   <a href="../shared/biblio_view.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibInfo");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_edit.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEdit");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_marc_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEditMarc");?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("History");?>
 </li>
 <li>
   <a href="../catalog/biblio_copy_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y" class="alt1"><?php echo $navLoc->getText("catalogCopyNew");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_hold_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogHolds");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_del_confirm.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogDelete");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_new_like.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibNewLike");?></a>
 </li>
<?php } ?>

<?php if ($nav == "holds") { ?>
 <li>
   <a href="../shared/biblio_view.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibInfo");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_edit.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEdit");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_marc_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEditMarc");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_history.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("History");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_copy_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y" class="alt1"><?php echo $navLoc->getText("catalogCopyNew");?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("catalogHolds");?>
 </li>
 <li>
   <a href="../catalog/biblio_del_confirm.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogDelete");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_new_like.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibNewLike");?></a>
 </li>
<?php } ?>

<?php if ($nav == "delete") { ?>
 <li>
   <a href="../shared/biblio_view.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibInfo");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_edit.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEdit");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_marc_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibEditMarc");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_history.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("History");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_copy_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y" class="alt1"><?php echo $navLoc->getText("catalogCopyNew");?></a>
 </li>
 <li>
   <a href="../catalog/biblio_hold_list.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogHolds");?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("catalogDelete");?>
 </li>
 <li>
   <a href="../catalog/biblio_new_like.php?bibid=<?php echo HURL($bibid);?>" class="alt1"><?php echo $navLoc->getText("catalogBibNewLike");?></a>
 </li>
<?php } ?>

<?php if ($nav == "new") { ?>
 <li class="active">
   <?php echo $navLoc->getText("catalogBibNew");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/biblio_new.php" class="alt1"><?php echo $navLoc->getText("catalogBibNew");?></a>
 </li>
<?php } ?>
<?php if ($nav == "upload_csv") { ?>
 <li class="active">
   <?php echo $navLoc->getText("Upload CSV Data");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/upload_csv_form.php?reset=Y" class="alt1"><?php echo $navLoc->getText("Upload CSV Data");?></a>
 </li>
<?php } ?>

<?php if ($nav == 'csv_import') : ?>
 <li class="active">
   <?php echo $navLoc->getText("CSVImport");?>
 </li>
<?php else : ?>
 <li>
   <a href="../catalog/csv_import.php" class="alt1"><?php echo $navLoc->getText("CSVImport");?></a>
 </li>
<?php endif; ?>

<?php if ($nav == "upload_usmarc") { ?>
 <li class="active">
   <?php echo $navLoc->getText("Upload Marc Data");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/upload_usmarc_form.php" class="alt1"><?php echo $navLoc->getText("Upload Marc Data");?></a>
 </li>
<?php } ?>

<?php if ($nav == 'locsru') { ?>
 <li class="active">
   <?php echo $navLoc->getText("LOCsearch");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/locsru.php" class="alt1"><?php echo $navLoc->getText('LOCsearch');?></a>
 </li>
<?php } ?>
<?php if ($nav == "BulkLookup") { ?>
 <li class="active">
   <?php echo $navLoc->getText("lookup_bulk");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/BulkLookup.php?reset=Y" class="alt1"><?php echo $navLoc->getText("lookup_bulk");?></a>
 </li>
<?php } ?>

<?php 
/*
//revisar
	$list = getPlugIns('cataloging.nav');
	for ($x=0; $x<count($list); $x++) {
		include_once($list[$x]);
	Nav::node('cataloging/lookup', T("Online Search"), "../lookup2/lookup.php");
	}
	*/ 
?>


<?php if ($nav == "lookup") { ?>
 <li class="active">
 &raquo; <?php echo $navLoc->getText("lookup");?><br>
 </li>
<?php } else { ?>
 <li>
 <a href="../lookup2/lookup.php" class="alt1"><?php echo $navLoc->getText("lookup");?></a><br>
 </li>
<?php } ?>

<?php if ($nav == "cdu") { ?>
 <li class="active">
   <?php echo $navLoc->getText("cdu");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/cdu.php" class="alt1"><?php echo $navLoc->getText("cdu");?></a>
 </li>
<?php } ?>

<?php if ($nav == "cdd") { ?>
 <li class="active">
   <?php echo $navLoc->getText("cdd");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/cdd.php" class="alt1"><?php echo $navLoc->getText("cdd");?></a>
 </li>
<?php } ?>

<?php if ($nav == "ibic") { ?>
 <li class="active">
   <?php echo $navLoc->getText("ibic");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/ibic.php" class="alt1"><?php echo $navLoc->getText("ibic");?></a>
 </li>
<?php } ?>
<?php if ($nav == "cutter") { ?>
 <li class="active">
   <?php echo $navLoc->getText("cutter");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/cutter.php" class="alt1"><?php echo $navLoc->getText("cutter");?></a>
 </li>
<?php } ?>

<?php if ($nav == "marc") { ?>
 <li class="active">
   <?php echo $navLoc->getText("marc_list");?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/marc_list.php" class="alt1"><?php echo $navLoc->getText("marc_list");?></a>
 </li>
<?php } ?>

<?php if ($nav == "bulk_delete") { ?>
 <li class="active">
   <?php echo $navLoc->getText("catalogBibBulkDelete"); ?>
 </li>
<?php } else { ?>
 <li>
   <a href="../catalog/biblio_bulk_delete.php" class="alt1"><?php echo $navLoc->getText("catalogBibBulkDelete");?></a>
 </li>
<?php } ?>


 <li>
   <a href="javascript:popSecondary('../shared/help.php<?php if (isset($helpPage)) echo "?page=".H(addslashes(U($helpPage))); ?>')"><?php echo $navLoc->getText("help"); ?></a>
 </li>
</ul>
