<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  $tab = "admin";
  $nav = "MaterialStatus";
// Agregad jalg joanlaga@hotmail.com para poder modificar dm_materials_status  
  require_once("../classes/Biblio.php");
//  require_once("../classes/BiblioQuery.php");
//  require_once("../classes/BiblioCopy.php");
//  require_once("../classes/BiblioCopyQuery.php");

  require_once("../classes/DmQuery.php");
/*
  require_once("../classes/UsmarcTagDm.php");
  require_once("../classes/UsmarcTagDmQuery.php");
  require_once("../classes/UsmarcSubfieldDm.php");
  require_once("../classes/UsmarcSubfieldDmQuery.php");
  require_once("../functions/marcFuncs.php");
require_once("../classes/Localize.php");
  */
  
  require_once("../shared/logincheck.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  
//  require_once("../classes/Dm.php");
//  require_once("../classes/DmQuery.php");
//  require_once("../functions/errorFuncs.php");
//  require_once("../shared/logincheck.php");
//  require_once("../classes/Localize.php");
//  $loc = new Localize(OBIB_LOCALE,$tab);
// Agregad jalg joanlaga@hotmail.com para poder modificar dm_materials_status  

  require_once("../shared/header.php");
/*
  $dmQ = new DmQuery();
  $dmQ->connect();
  $dms = $dmQ->getWithStats("material_type_dm");
  $dmQ->close();
*/
?>

<?php // Agregado jalg joanlaga@hotmail.com para poder modificar dm_materials_status  ?>
<?php

  #****************************************************************************
  #*  Loading a few domain tables into associative arrays
  #****************************************************************************
  $dmQ = new DmQuery();
  $dmQ->connect();
  $biblioStatusDm = $dmQ->getAssoc("biblio_status_dm");
  $dmQ->close();

?>
<a href="../admin/matstat_new_form.php?reset=Y"><?php echo $loc->getText("admin_materials_listAddmaterialstate"); ?></a><br>
<h1><?php echo $loc->getText("Medienstatus"); ?>:</h1>
<table class="primary">
  <tr>
    <th align="center" colspan="2" nowrap="yes">
      <?php echo $loc->getText("admin_materials_listFunction"); ?>
    </th>
    <th align="left" nowrap="yes">
      <?php echo $loc->getText("admin_materials_listDescription"); ?>
    </th>
    <th align="left" nowrap="yes">
      <?php echo $loc->getText("admin_materials_Abrev"); ?>
    </th>
   </tr>
	
  <?php
      $row_class = "primary";
      foreach ($biblioStatusDm as $pos => $wert) {
                if ($pos == "in" || $pos == "out" || $pos == "hld" || $pos == "crt" ){
					?><tr><td valign="top" class="<?php print H($row_class); ?>"><?php echo "*";
                } else {
         		?><tr><td valign="top" class="<?php echo H($row_class);?>">
                <a href="../admin/matstat_edit_form.php?code=<?php echo $pos;?>" class="<?php echo H($row_class);?>">
                <?php } //Text für Edit-Link (on/off)
                if ($pos == "in" || $pos == "out" || $pos == "hld" || $pos == "crt" )
                ; else
    	            echo $loc->getText("admin_materials_listEdit");
                ?></a>
            </td>
            <td valign="top" class="<?php echo H($row_class);?>">
              <?php //if ($dm->getCount() == 0)
            if ($pos == "in" || $pos == "out" || $pos == "hld" || $pos == "crt" ){
				;//nix
            }
			else {
              ?>
                <a href="../admin/matstat_del_confirm.php?code=<?php echo $pos;?>" class="<?php echo H($row_class);?>"><?php }
                if ($pos == "in" || $pos == "out" || $pos == "hld" || $pos == "crt" )
                ; else
	                echo $loc->getText("admin_materials_listDel");
                ?>
                  </td>
                  <td valign="top" class="<?php echo H($row_class);?>">
                    <?php echo $wert; ?>
                  </td>

                  <td valign="center" class="<?php echo H($row_class);?>">
                    <?php echo $pos; ?>
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
      $dmQ->close();
     ?>
	 </table>
<?php echo $loc->getText("admin_materials_Comment_end");  ?>
<?php // Agregado jalg joanlaga@hotmail.com para poder modificar dm_materials_status  ?>

<?php include("../shared/footer.php");
