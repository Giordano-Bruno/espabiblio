<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

  require_once("../shared/common.php");
  $tab = "cataloging";
  $nav = "upload_csv";
  $helpPage = "CsvImport";

  include("../shared/logincheck.php");
  include("../shared/header.php");
  require_once("../classes/UsmarcTagDm.php");
  require_once("../classes/UsmarcTagDmQuery.php");
  require_once("../classes/UsmarcSubfieldDm.php");
  require_once("../classes/UsmarcSubfieldDmQuery.php");
  require_once("../functions/errorFuncs.php");
  require_once("../functions/marcFuncs.php");
  require_once("../catalog/inputFuncs.php");
  require_once("../functions/inputFuncs.php");
  require_once("../classes/Localize.php");

  $loc = new Localize(OBIB_LOCALE,$tab);

  $marcTagDmQ = new UsmarcTagDmQuery();
  $marcTagDmQ->connect();
  if ($marcTagDmQ->errorOccurred()) {
    $marcTagDmQ->close();
    displayErrorPage($marcTagDmQ);
  }
  $marcTagDmQ->execSelect();
  if ($marcTagDmQ->errorOccurred()) {
    $marcTagDmQ->close();
    displayErrorPage($marcTagDmQ);
  }
  $marcTags = $marcTagDmQ->fetchRows();
  $marcTagDmQ->close();

  $marcSubfldDmQ = new UsmarcSubfieldDmQuery();
  $marcSubfldDmQ->connect();
  if ($marcSubfldDmQ->errorOccurred()) {
    $marcSubfldDmQ->close();
    displayErrorPage($marcSubfldDmQ);
  }
  $marcSubfldDmQ->execSelect();
  if ($marcSubfldDmQ->errorOccurred()) {
    $marcSubfldDmQ->close();
    displayErrorPage($marcSubfldDmQ);
  }
  $marcSubflds = $marcSubfldDmQ->fetchRows();
  $marcSubfldDmQ->close();
?>

<h1><?php echo $loc->getText('CSVloadHeader'); ?></h1>

<?php echo $loc->getText('CSVUpdateContinue'); ?></br>
</br>
<form enctype="multipart/form-data" action="../catalog/upload_csv.php" method="post">

<?php echo $loc->getText("CSVloadTest"); ?>:
</br>
 <?php echo $loc->getText("CSVloadTestTrue"); ?>
<input type="radio" value="true" name="test" checked>
</br>  <?php echo $loc->getText("CSVloadTestFalse"); ?>
<input type="radio" value="false" name="test"><br />
</br>

<?php echo $loc->getText("CSVloadTestFileUpload"); ?>: 
<input type="file" name="csv_data"><br><br>
<hr />
<b><?php echo $loc->getText("Defaults"); ?>:</b>
<table border=0>
  <tr>
    <td><?php echo $loc->getText("CSVshowAllFiles"); ?>:</td>
    <td>
      <SELECT name=showAll id=showAll>
        <option value=Y><?php echo $loc->getText("AnswerYes"); ?></option>
        <option value=N SELECTED><?php echo $loc->getText("AnswerNo"); ?></option>
      </select>
    </td>
  </tr>

  <tr>
    <td><?php echo $loc->getText("statusCd"); ?>:</td>
    <td><?php printSelect("statusCd","biblio_status_dm",$postVars); ?></td>
  </tr>

  <tr>
    <td><?php echo $loc->getText("biblioFieldsCollection"); ?>:</td>
    <td><?php printSelect("collectionCd","collection_dm",$postVars); ?></td>
  </tr>
  <tr>
    <td><?php echo $loc->getText("biblioFieldsMaterialTyp"); ?>:</td>
    <td><?php printSelect("materialCd","material_type_dm",$postVars); ?></td>
  </tr>
  <tr>
    <td><?php echo $loc->getText("biblioFieldsOpacFlg"); ?>:</td>
    <td>
      <SELECT name=opac id=opac>
        <option value=Y SELECTED><?php echo $loc->getText("AnswerYes"); ?></option>
        <option value=N><?php echo $loc->getText("AnswerNo"); ?></option>
      </select>
    </td>
  </tr>
  <tr>
    <td><?php echo $loc->getText("CSVcopyDescription"); ?>:</td>
    <td>
      <input type=text name=copyText id=copyText size=32 maxsize=256 value="CSV Import">
      <input type=hidden name=userid id=userid value="<?php echo H($_SESSION["userid"])?>">
    </td>
  </tr>
</table>

  <input type="submit" value="<?php echo $loc->getText("UploadFile"); ?>" class="button">
</form>
<hr>
<p><?php echo $loc->getText("CSVinputDescr"); ?></p>

<p><?php echo $loc->getText("CSVimportAdvise"); ?></p>

<table border=1>
  <tr>
    <th><?php echo $loc->getText("CSVcolumnHeading"); ?></th>
    <th><?php echo $loc->getText("CSVcolumnDescription"); ?></th>
    <th><?php echo $loc->getText("CSVcolumnComment"); ?></th>
  </tr>
  <tr>
    <td><pre>barCo</pre></td>
    <td><?php echo $loc->getText("biblioCopyNewBarcode"); ?></td>
    <td><?php echo $loc->getText("CSVbarCoDescription"); ?></td>
  </tr>
  <tr>
    <td><pre>Call1</pre></td>
    <td><?php echo $loc->getText("CSVCallNumber"); ?></td>
    <td><?php echo $loc->getText("CSVCallNrDescription"); ?></td>
  </tr>
  <tr>
    <td><pre>245$a</pre></td>
    <td>(MARC) <?php printUsmarcText($tab,"245", "a", $marcTags, $marcSubflds, FALSE); ?></td>
    <td><?php echo $loc->getText("Mandatory"); ?></td>
  </tr>
  <tr>
    <td><pre>100$a</pre></td>
    <td>(MARC) <?php printUsmarcText($tab,"100", "a", $marcTags, $marcSubflds, FALSE); ?></td>
    <td><?php echo $loc->getText("Mandatory"); ?></td>
  </tr>
  <tr>
    <td><pre>Status</pre></td>
    <td><?php echo $loc->getText("biblioFieldsStatus") ?></td>
    <td><?php echo $loc->getText("CSVoptionalDefault") ?></td>
  </tr>
  <tr>
    <td><pre>Coll</pre></td>
    <td><?php echo $loc->getText("biblioFieldsCollection") ?></td>
    <td><?php echo $loc->getText("CSVoptionalDefault") ?></td>
  </tr>
  <tr>
    <td><pre>mType</pre></td>
    <td><?php echo $loc->getText("biblioFieldsMaterialTyp") ?></td>
    <td><?php echo $loc->getText("CSVoptionalDefault") ?></td>
  </tr>
  <tr>
    <td><pre>showO</pre></td>
    <td>Show in OPAC</td>
    <td><?php echo $loc->getText("CSVoptionalDefault") ?></td>
  </tr>
</table>

<p><?php echo $loc->getText("CSVimportMoreMARC"); ?></p>

<?php include("../shared/footer.php");
