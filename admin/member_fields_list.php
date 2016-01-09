<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
  require_once("../shared/common.php");
  $tab = "admin";
  $nav = "member_fields";//

  require_once("../shared/logincheck.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

  require_once("../shared/header.php");

  require_once("../classes/Mf.php");//
  require_once("../classes/MfQuery.php");//
  require_once("../functions/errorFuncs.php");//

  $mfQ = new MfQuery();
  $mfQ->connect();
  $mfs = $mfQ->get("member_fields");
  $mfQ->close();

?>
<a href="../admin/member_fields_new_form.php?reset=Y"><?php echo $loc->getText("Add new custom field"); ?></a><br>
<h1> <?php echo $loc->getText("Custom Member Fields"); ?></h1>
<table class="primary">
  <tr>
    <th colspan="2" valign="top">
      <font class="small">*</font><?php echo $loc->getText("Function"); ?>
    </th>
    <th valign="top" nowrap="yes">
      <?php echo $loc->getText("mbrid"); ?>
    </th>
    <th valign="top" nowrap="yes">
      <?php echo $loc->getText("Code"); ?>
    </th>
    <th valign="top" nowrap="yes">
      <?php echo $loc->getText("Description data"); ?>
    </th>
  </tr>
  <?php

//print_r($mfs);

    $row_class = "primary";
    foreach ($mfs as $mf) {
  ?>

  <tr>
    <td valign="top" class="<?php echo H($row_class);?>">
      <a href="../admin/member_fields_edit_form.php? code=<?php echo HURL($mf->getCode());?>&amp; mbrid=<?php echo HURL($mf->getmbrid());?>      " 
      class="<?php echo H($row_class);?>"><?php echo $loc->getText("edit"); ?>
    </td>
    <td valign="top" class="<?php echo H($row_class);?>">
      <a href="../admin/member_fields_del_confirm.php?code=<?php echo HURL($mf->getCode());?>&amp;data=<?php echo HURL($mf->getData());?>" class="<?php echo H($row_class);?>"><?php echo $loc->getText("del"); ?></a>
    </td>
    <td valign="top" class="<?php echo H($row_class);?>">
      <?php echo H($mf->getMbrid());?>
    </td>
    <td valign="top" class="<?php echo H($row_class);?>">
      <?php echo H($mf->getCode());?>
    </td>
    <td valign="top" class="<?php echo H($row_class);?>">
      <?php echo H($mf->getData());?>
    </td>
  </tr>
  <?php
      # swap row color
      if ($row_class == "primary") {
        $row_class = "alt1";
      } else {
        $row_class = "primary";
      }
    }
  ?>
</table>
<?php include("../shared/footer.php");
