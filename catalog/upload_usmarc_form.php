<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
  require_once("../shared/common.php");
  $tab = "cataloging";
  $nav = "upload_usmarc";
  $helpPage = "MarcUpload";

  include("../shared/logincheck.php");
  include("../shared/header.php");
  require_once("../classes/UsmarcTagDm.php");
  require_once("../classes/UsmarcTagDmQuery.php");
  require_once("../classes/UsmarcSubfieldDm.php");
  require_once("../classes/UsmarcSubfieldDmQuery.php");
  require_once("../functions/errorFuncs.php");
  require_once("../catalog/inputFuncs.php");
  require_once("../functions/inputFuncs.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  
  // Encoding selection.
  $encoding = array("ASCII", "CP1256", "ISO-8859-1", "ISO-8859-6", "ISO-8859-15", "TIS-620", "UTF-8", "Windows-1252");
  $enc_selection = '<select name="encoding">';
  foreach ($encoding as $i => $label) {
    if ($label === 'UTF-8') {
      $default = 'selected="selected"';
    }
    else {
      $default = '';
    }
    $enc_selection .= '<option value="' . $i . '" ' . $default . '>' . $label . '</option>';
  }
  $enc_selection .= '</select>';

echo "<p>";
echo $loc->getText('MarcNotes');
echo "</p>";
echo "<p>";
echo $loc->getText('MarcSizeLimitNotes');
echo "</p>";
echo "<p>";
echo $loc->getText('MarcFormatNotes');
echo "</p>";
echo "<p>";
echo $loc->getText('MarcUpdateSample');
echo "</p>";

?>
</p>
<form enctype="multipart/form-data" action="../catalog/upload_usmarc.php" method="post">
<strong><?php echo $loc->getText("MarcUploadTest"); ?>:</strong></br>
<?php echo $loc->getText("MarcUploadTestTrue"); ?>
<input type="radio" value="true" name="test" checked>  
<?php echo $loc->getText("MarcUploadTestFalse"); ?>
<input type="radio" value="false" name="test"></br></br>
<?php echo $loc->getText("MarcUploadTestFileUpload"); ?>: </br>
<input type="file" name="usmarc_data"><br />
<?php echo $loc->getText("MarcUploadEncoding"); ?>: <?php echo $enc_selection ?>
</br>

<b></br><?php echo $loc->getText('Defaults:'); ?></b></br>
<table border=0>
<tr><td><?php echo $loc->getText("biblioFieldsCollection"); ?>:</td><td><?php printSelect("collectionCd","collection_dm",$postVars); ?></td></tr>
<tr><td></br><?php echo $loc->getText("biblioFieldsMaterialTyp"); ?>:</td><td><?php printSelect("materialCd","material_type_dm",$postVars); ?></td></tr>
<tr><td></br><?php echo $loc->getText("biblioFieldsOpacFlg"); ?>:</td><td><SELECT name=opac id=opac><option value=Y><?php echo $loc->getText("AnswerYes"); ?></option><option value=N SELECTED><?php echo $loc->getText("AnswerNo"); ?></option></select></td></tr></
<tr><td colspan=2><input type=hidden name=userid id=userid value="<?php echo H($_SESSION["userid"])?>"></td></tr></br>
</table>
</br>
  <input type="submit" value="<?php echo $loc->getText("UploadFile"); ?>" class="button">
</form>

<?php include("../shared/footer.php");
