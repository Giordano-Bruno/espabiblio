<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

  require_once("../functions/inputFuncs.php");
 require_once('../classes/DmQuery.php');
  $dmQ = new DmQuery();
  $dmQ->connect();
  $mbrClassifyDm = $dmQ->getAssoc('mbr_classify_dm');
  $mbrStatusDm = array("y" => $loc->getText("mbrActive"), "n" => $loc->getText("mbrInactive"));
  $customFields = $dmQ->getAssoc('member_fields_dm');
  $dmQ->close();

  // Get & show the latest BarcodeNumber.
  require_once("../shared/common.php");
  require_once("../classes/Query.php");
/*
  $barcode = "0";
  $sql = "SELECT MAX(barcode_nmbr) AS bn FROM member"; 
  $q = new Query(); 
  $q->connect();
  $rows = $q->exec($sql);
  if (count($rows) > 0) {
    $barcode = $rows[0]["bn"];
  }
  $q->close();
  $barcode_help = $loc->getText("mbrLatestBarcode") .": ". $barcode ." <br />";
  $barcode_help .= '<input type="checkbox" id="chk_auto_barcode" name="chk_auto_barcode" value="1" /> '.
  $loc->getText("mbrAutoBarcode");
*/
  $fields = array(
//function printInputText($fieldName,$size,$max,&$postVars,&$pageErrors,$visibility = "visible") {
//function inputField($type, $name, $value="", $attrs=NULL, $data=NULL, $help_text=NULL) {
    "mbrFldsClassify"  => inputField('hidden',   "classification", $mbr->getClassification(), NULL, $mbrClassifyDm),
    "mbrFldsStatus"    => inputField('hidden',   "status",         $mbr->getStatus(), NULL, $mbrStatusDm),
    "mbrFldsCardNmbr"  => inputField('hidden',     "barcodeNmbr"   , $mbr->getBarcodeNmbr(), NULL, NULL, $barcode_help),  
   //                       printInputText("holdBarcodeNmbr",18,18,$postVars,$pageErrors); 
 //  "mbrFldsCardNmbr"  => printInputText("BarcodeNmbr",18,18, $mbr->getBarcodeNmbr(), $pageErrors),     
   "mbrFldsLastName"  => inputField('text',     "lastName",       $mbr->getLastName()),
    "mbrFldsFirstName" => inputField('text',     "firstName",      $mbr->getFirstName()),
    "mbrFldsHomePhone" => inputField('text',     "homePhone",      $mbr->getHomePhone()),
    "mbrFldsWorkPhone" => inputField('text',     "workPhone",      $mbr->getWorkPhone()),
    "mbrFldsCel"       => inputField('text',     "cel",            $mbr->getCel()),
    "mbrFldsEmail"     => inputField('text',     "email",          $mbr->getEmail()),
    "mbrFldsFoto"      => inputField('hidden',     "foto",           $mbr->getFoto()),
    "MailingAddress:"  => inputField('textarea', "address",        $mbr->getAddress()),
    "mbrFldsPassUser"  => inputField('hidden',     "passUser",       $mbr->getPassUser()),
 //   "mbrFldsBornDt"    => inputField('date',     "bornDt",         $mbr->getBornDt()), problemas con el calendario solo da años despues de 1995
    "mbrFldsBornDt"    => inputField('text',     "bornDt",         $mbr->getBornDt()),
    "mbrFldsOther"     => inputField('hidden', "other",          $mbr->getOther()),
  );
 foreach ($customFields as $name => $title) {
   $fields[$title.':'] = inputField('hidden', 'custom_'.$name, $mbr->getCustom($name));
  }
?>

<table class="primary">
  <tr>
    <th colspan="2" valign="top" nowrap="yes" align="left">
      <?php echo H($headerWording);?> <?php echo $loc->getText("mbrFldsHeader"); ?>
    </td>
  </tr>
<?php
  foreach ($fields as $title => $html) {
?>
  <tr>
    <td nowrap="true" class="primary" valign="top">
      <?php echo $loc->getText($title); ?>
    </td>
    <td valign="top" class="primary">
      <?php echo $html; ?>
    </td>
  </tr>
<?php
  }
?>

  <tr>
    <td nowrap="true" class="primary" valign="top">
      <?php echo $loc->getText("Seleccione_Foto"); ?>
    </td>
    <td valign="top" class="primary">
	<input type="file" name="foto" >
    </td>
  </tr>
  <tr>
    <td align="center" colspan="2" class="primary">
      <input type="submit" value="<?php echo $loc->getText("mbrFldsSubmit"); ?>" class="button">
      <input type="button" onClick="self.location='<?php echo H(addslashes($cancelLocation));?>'" value="<?php echo $loc->getText("mbrFldsCancel"); ?>" class="button">
    </td>
  </tr>
</table>
