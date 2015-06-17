<?php
/* Este archivo es parte de un trabajo protegido por derechos de autor, Se distribuye SIN GARANTIA.
 * Vea el archivo COPYRIGHT.html para más detalles.
 * EspaBiblio Versión 2.0 Basado en OpenBiblio 0.6.0<br />
 * Jorge Lara Cravero, Chile
* joanlaga@hotmail.com Permite imprimir un carnet, falta depurar y dar formato a otros tamaños.
 */
   require_once("../shared/common.php");
  $tab = "circulation";
  $nav = "view";
  $focus_form_name = "barcodesearch";
  $focus_form_field = "barcodeNmbr";

  require_once("../functions/inputFuncs.php");
  require_once("../shared/logincheck.php");
  require_once("../classes/Member.php");
  require_once("../classes/MemberQuery.php");
  require_once("../classes/BiblioSearch.php");
  require_once("../classes/BiblioSearchQuery.php");
  require_once("../classes/DmQuery.php");
  require_once("../shared/get_form_vars.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

  #****************************************************************************
  #*  Retrieving get var
  #****************************************************************************
  $mbrid = $_GET["mbrid"];
  if (isset($_GET["msg"])) {
    $msg = "<font class=\"error\">".H($_GET["msg"])."</font><br><br>";
  } else {
    $msg = "";
  }

  #****************************************************************************
  #*  Loading a few domain tables into associative arrays
  #****************************************************************************
  $dmQ = new DmQuery();
  $dmQ->connect();
  $mbrClassifyDm = $dmQ->getAssoc("mbr_classify_dm");
  $materialTypeDm = $dmQ->getAssoc("material_type_dm");
  $materialImageFiles = $dmQ->getAssoc("material_type_dm", "image_file");
  $dmQ->close();

  #****************************************************************************
  #*  Search database for member
  #****************************************************************************
  $mbrQ = new MemberQuery();
  $mbrQ->connect();
  $mbr = $mbrQ->get($mbrid);
  $mbrQ->close();

  #**************************************************************************
  #*  Show member checkouts
  #**************************************************************************
?>
<html>
<head>
<style type="text/css">
  <?php include("../css/style.php");?>
</style>
<meta name="description" content="EspaBiblio Gestion de Bibliotecas">
<title>Carnet de <?php echo H($mbr->getFirstLastName());?></title>
<?php // jalg,  Modificado para mostrar imagen de usuario ?>

</head>
<body bgcolor="<?php echo H(OBIB_PRIMARY_BG);?>" topmargin="5" bottommargin="5" leftmargin="5" rightmargin="5" marginheight="5" marginwidth="5" onLoad="self.focus();self.print();">

<font class="primary">
<table class="primary" width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td width="100%" class="noborder" valign="top">
      <h1><?php echo $loc->getText("mbrPrintCarnetTitle",array("mbrName"=>$mbr->getFirstLastName())); ?></h1>
    </td>
    <td class="noborder" valign="top" nowrap="yes"><font class="small"><a href="javascript:window.close()"><?php echo $loc->getText("mbrPrintCloseWindow"); ?></font></a>&nbsp;&nbsp;</font></td>
  </tr>

</table>
<br>
<table class="primary" width="100%" cellpadding="0" cellspacing="0" border="1">
  <tr>
    <td class="primary" valign="top"><?php echo $loc->getText("mbrPrintCheckoutsHdr1");?></td>
    <td width="100%" class="primary" valign="top"><?php echo H(date("F j, Y, g:i a"));?></td>
  </tr>
  <tr>
    <td class="primary" valign="top" nowrap><?php echo $loc->getText("mbrPrintCheckoutsHdr2");?></td>
    <td class="primary" valign="top"><?php echo H($mbr->getFirstLastName());?></td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php echo $loc->getText("mbrViewAddr"); ?>
    </td>
    <td valign="top" class="primary">
      <?php
        echo str_replace("\n", "<br />", H($mbr->getAddress()));
      ?>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top" nowrap><?php echo $loc->getText("mbrPrintCheckoutsHdr3");?></td>
    <td class="primary" valign="top"><?php echo H($mbr->getBarcodeNmbr());?></td>
  </tr>
  <tr>
    <td class="primary" valign="top" nowrap><?php echo $loc->getText("mbrPrintCheckoutsHdr4");?></td>
    <td class="primary" valign="top"><?php echo H($mbrClassifyDm[$mbr->getClassification()]);?></td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php echo $loc->getText("mbrViewPhone"); ?>
    </td>
    <td valign="top" class="primary">
      <?php
        if ($mbr->getHomePhone() != "") {
          echo $loc->getText("mbrViewPhoneHome").$mbr->getHomePhone()."</br> ";
        }
        if ($mbr->getWorkPhone() != "") {
          echo $loc->getText("mbrViewPhoneWork").$mbr->getWorkPhone()."</br> ";
        }
        if ($mbr->getCel() != "") {
          echo $loc->getText("mbrViewCel").$mbr->getCel();
        }

      ?>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php echo $loc->getText("mbrViewEmail"); ?>
    </td>
    <td valign="top" class="primary">
      <?php echo H($mbr->getEmail());?>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php echo $loc->getText("mbrViewPassUser"); ?>
    </td>
    <td valign="top" class="primary">
      <?php echo H($mbr->getPassUser());?>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php echo $loc->getText("mbrViewBornDt"); ?>
    </td>
    <td valign="top" class="primary">
      <?php echo H($mbr->getBornDt());?>
     <?php // echo "</br>" . print_r (array('date' => $mbr->getBornDt()));?>
      <?php // echo $loc->getText("mbrFormattedDateOld", array('date' => $mbr->getBornDt()));?>
  </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php echo $loc->getText("mbrViewOther"); ?>
    </td>
    <td valign="top" class="primary">
      <?php echo H($mbr->getOther());?>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php echo $loc->getText("mbrViewLastActDate"); ?>
    </td>
    <td valign="top" class="primary">
      <?php echo $loc->getText("mbrFormattedDate", array('date' => $mbr->getLastActDate()));?>
     <?php echo "</br>" . H($mbr->getLastActDate());?>
    </td>
  </tr>
   <tr>
    <td class="primary" valign="top">
      <?php echo $loc->getText("mbrViewFotHdr1"); ?>
    </td>
    <td valign="top" class="primary">
      <?php echo H($mbr->getFoto());?>
    </td>
  </tr>
  <tr>   
     <td valign="top" class="primary">
       <img src="<?php echo  "../" . FOTO_PATH ."/" . H($mbr->getFoto());?>" width="250">
     </td>
   </tr>

</table>
<br>
<table class="primary">
  <tr>
    <td class="primary" valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("mbrViewOutHdr1"); ?>
    </th>
    <td class="primary" valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("mbrViewOutHdr2"); ?>
    </th>
    <td class="primary" valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("mbrViewOutHdr4"); ?>
    </th>
    <td class="primary" valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("mbrViewOutHdr5"); ?>
    </th>
    <td class="primary" valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("mbrViewOutHdr6"); ?>
    </th>
    <td class="primary" valign="top" align="left">
      <?php echo $loc->getText("mbrViewOutHdr7"); ?>
    </th>
  </tr>

<?php 
  #****************************************************************************
  #*  Search database for BiblioStatus data
  #****************************************************************************
  $biblioQ = new BiblioSearchQuery();
  $biblioQ->connect();
  if ($biblioQ->errorOccurred()) {
    $biblioQ->close();
    displayErrorPage($biblioQ);
  }
  if (!$biblioQ->doQuery(OBIB_STATUS_OUT,$mbrid)) {
    $biblioQ->close();
    displayErrorPage($biblioQ);
  }
  if ($biblioQ->getRowCount() == 0) {
  ?>
  <tr>
    <td class="primary" align="center" colspan="6">
      <?php echo $loc->getText("mbrViewNoCheckouts"); ?>
    </td>
  </tr>
<?php
  } else {
    while ($biblio = $biblioQ->fetchRow()) {
?>
  <tr>
    <td class="primary" valign="top" nowrap>
      <?php echo H($biblio->getStatusBeginDt());?>
    </td>
    <td class="primary" valign="top" nowrap>
      <img src="../images/<?php echo HURL($materialImageFiles[$biblio->getMaterialCd()]);?>" width="20" height="20" border="0" align="middle" alt="<?php echo H($materialTypeDm[$biblio->getMaterialCd()]);?>">
      <?php echo H($materialTypeDm[$biblio->getMaterialCd()]);?>
    </td>
    <td class="primary" valign="top" >
      <?php echo H($biblio->getTitle());?>
    </td>
    <td class="primary" valign="top" >
      <?php echo H($biblio->getAuthor());?>
    </td>
    <td class="primary" valign="top" nowrap="yes">
      <?php echo H($biblio->getDueBackDt());?>
    </td>
    <td class="primary" valign="top" >
      <?php echo H($biblio->getDaysLate());?>
    </td>
  </tr>
<?php
    }
  }
  $biblioQ->close();
?>
</table>
