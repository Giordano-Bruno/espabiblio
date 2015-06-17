<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../classes/Localize.php");
  $navLoc = new Localize(OBIB_LOCALE,"navbars");
 
?>
<input type="button" onClick="self.location='../shared/logout.php'" value="<?php echo $navLoc->getText("logout"); ?>" class="navbutton"><br />
<br />

<ul>
<?php if ($nav == "searchform") { ?>
 <li class="active">
   <?php echo $navLoc->getText("memberSearch"); ?>
 </li>
<?php } else { ?>
 <li>
   <a href="../user/index.php" class="alt1"><?php echo $navLoc->getText("memberSearch"); ?></a>
 </li>
<?php } ?>

<?php if ($nav == "search") { ?>
 <li class="active">
   <?php echo $navLoc->getText("catalogResults"); ?>
 </li>
<?php } ?>

<?php if ($nav == "view") { ?>
 <li class="active">
   <?php echo $navLoc->getText("memberInfo"); ?>
 </li>
 <li>
   <a href="../user/user_edit_form.php?mbrid=<?php echo HURL($mbrid);?>" class="alt1"><?php echo $navLoc->getText("editInfo"); ?></a>
 </li>
 <li>
   <a href="../user/user_account.php?mbrid=<?php echo HURL($mbrid);?>&amp;reset=Y" class="alt1"><?php echo $navLoc->getText("account"); ?></a>
 </li>
 <li>
   <a href="../user/user_history.php?mbrid=<?php echo HURL($mbrid);?>" class="alt1"><?php echo $navLoc->getText("checkoutHistory"); ?></a>
 </li>
<?php } ?>

<?php if ($nav == "edit") { ?>
 <li>
   <a href="../user/user_view.php?mbrid=<?php echo HURL($mbrid);?>" class="alt1"><?php echo $navLoc->getText("memberInfo"); ?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("editInfo"); ?>
 </li>
 <li>
   <a href="../user/user_account.php?mbrid=<?php echo HURL($mbrid);?>&amp;reset=Y" class="alt1"><?php echo $navLoc->getText("account"); ?></a>
 </li>
 <li>
   <a href="../user/user_history.php?mbrid=<?php echo HURL($mbrid);?>" class="alt1"><?php echo $navLoc->getText("checkoutHistory"); ?></a>
 </li>
<?php } ?>

<?php if ($nav == "hist") { ?>
 <li>
   <a href="../user/user_view.php?mbrid=<?php echo HURL($mbrid);?>" class="alt1"><?php echo $navLoc->getText("memberInfo"); ?></a>
 </li>
 <li>
   <a href="../user/user_edit_form.php?mbrid=<?php echo HURL($mbrid);?>" class="alt1"><?php echo $navLoc->getText("editInfo"); ?></a>
 </li>

 <li>
   <a href="../user/user_account.php?mbrid=<?php echo HURL($mbrid);?>&amp;reset=Y" class="alt1"><?php echo $navLoc->getText("account"); ?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("checkoutHistory"); ?>
 </li>
<?php } ?>

<?php if ($nav == "account") { ?>
 <li>
   <a href="../user/user_view.php?mbrid=<?php echo HURL($mbrid);?>" class="alt1"><?php echo $navLoc->getText("memberInfo"); ?></a>
 </li>
 <li>
   <a href="../user/user_edit_form.php?mbrid=<?php echo HURL($mbrid);?>" class="alt1"><?php echo $navLoc->getText("editInfo"); ?></a>
 </li>
 <li class="active">
   <?php echo $navLoc->getText("account"); ?>
 </li>
 <li>
   <a href="../user/user_history.php?mbrid=<?php echo HURL($mbrid);?>" class="alt1"><?php echo $navLoc->getText("checkoutHistory"); ?></a>
 </li>
<?php } ?>

 <li>
   <a href="javascript:popSecondary('../shared/help.php<?php if (isset($helpPage)) echo "?page=".H(addslashes(U($helpPage))); ?>')"><?php echo $navLoc->getText("help"); ?></a>
 </li>
</ul>
