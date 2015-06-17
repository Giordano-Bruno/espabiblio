<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

require_once("../shared/common.php");
$tab = "cataloging";
$nav = "";
$helpPage = "CsvImport";
require_once("../classes/Biblio.php");
require_once("../classes/BiblioField.php");
require_once("../classes/BiblioQuery.php");
require_once("../classes/BiblioCopyQuery.php");

require_once("../functions/fileIOFuncs.php");
require_once("../shared/logincheck.php");
require_once("../classes/Localize.php");

require_once("../classes/UsmarcTagDm.php");
require_once("../classes/UsmarcTagDmQuery.php");
require_once("../classes/UsmarcSubfieldDm.php");
require_once("../classes/UsmarcSubfieldDmQuery.php");
require_once("../functions/marcFuncs.php");
require_once("../classes/BiblioCopy.php");
require_once("../classes/DmQuery.php");

$loc = new Localize(OBIB_LOCALE, $tab);

if (count($_FILES) == 0) {
  header("Location: upload_csv_form.php");
  exit();
}

include("../shared/header.php");

$recordterminator="\n";
$fieldterminator="\t";

/* 1. read the header lines.
 *    Check if the neccessary fields are listed and
 *    if all others are known.
 * 2. Read the biblio entries by line and show / import the data.
 */

$records = explode($recordterminator,
    fileGetContents($_FILES["csv_data"]["tmp_name"]));

//check the last record if there is content after the delimiter
$record = array_pop($records);
if (trim($record) != "") {
  array_push($records, $record);
}

// get the targets as encoded in the header
$record = array_shift($records);
$targets = explode($fieldterminator, $record);

?>

<form name="Display" action="">
<p>
  <input type="text" size="6" name="Records" value="0" readonly>
  <?php echo $loc->getText("CSVRecordsRead", array('total' => count($records))); ?>.
</p>
</form>

<p><?php echo $loc->getText("CSVHeadings"); ?>:</p>
<table>
  <tr>
    <th><?php echo $loc->getText("CSVTargets"); ?></th>
    <th><?php echo $loc->getText("CSVComments"); ?></th>
  </tr>
  
<?php
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

//JALG 3-2015 añadido para opción de estado de materiales
  $domainTable="biblio_status_dm";
  $dmQ = new DmQuery();
  $dmQ->connect();
  $dms = $dmQ->get($domainTable);
  $dmQ->close();
  $status_dm = array();
  $status_dmCodes = array();
  $defaultstatus_dm = "";

  foreach ($dms as $dm) {
    if (($defaultstatus_dm == "") || ($dm->getCode() == $_POST["statusCd"])) {
      $defaultstatus_dm = $dm->getCode();
    }
    $status_dm[$dm->getDescription()] = $dm->getCode();
    $status_dmCodes[$dm->getCode()] = $dm->getDescription();
  }
//JALG 3-2015 añadido para opción de estado de materiales

  $domainTable="material_type_dm";
  $dmQ = new DmQuery();
  $dmQ->connect();
  $dms = $dmQ->get($domainTable);
  $dmQ->close();
  $materialTypes = array();
  $materialTypeCodes = array();
  $defaultMaterial = "";
  foreach ($dms as $dm) {
    if (($defaultMaterial == "") || ($dm->getCode() == $_POST["materialCd"])) {
      $defaultMaterial = $dm->getCode();
    }
    $materialTypes[$dm->getDescription()] = $dm->getCode();
    $materialTypeCodes[$dm->getCode()] = $dm->getDescription();
  }

  $domainTable="collection_dm";
  $dmQ = new DmQuery();
  $dmQ->connect();
  $dms = $dmQ->get($domainTable);
  $dmQ->close();
  $collections = array();
  $collectionCodes = array();
  $defaultCollection = "";
  foreach ($dms as $dm) {
    if (($defaultCollection == "") || ($dm->getCode() == $_POST["collectionCd"])) {
      $defaultCollection = $dm->getCode();
    }
    $collections[$dm->getDescription()] = $dm->getCode();
    $collectionCodes[$dm->getCode()] = $dm->getDescription();
  }

foreach($targets as $target) {
  $target = trim($target);
  echo "<tr>\n";
  echo "  <td>".$target."</td>\n";
  switch ($target) {
  case "barCo":
    echo "  <td>".$loc->getText("biblioCopyNewBarcode")."</td>\n";
    break;
//JALG 3-2015 añadido para opción de estado de materiales
  case "Status":
    echo "  <td>".$loc->getText("biblioFieldsStatus")."</td>\n";
    break;
//JALG 3-2015 añadido para opción de estado de materiales
  case "Coll":
    echo "  <td>".$loc->getText("biblioFieldsCollection")."</td>\n";
    break;
  case "mType":
    echo "  <td>".$loc->getText("biblioFieldsMaterialTyp")."</td>\n";
    break;
  case "showO":
    echo "  <td>".$loc->getText("biblioFieldsOpacFlg")."</td>\n";
    break;
  case "Call1":
  case "Call2":
  case "Call3":
    echo "  <td>".$loc->getText("biblioFieldsCallNmbr")." (".substr($target, 4, 1).")</td>\n";
    break;
  default:
    if (preg_match('/^[0-9][0-9]*\$[a-z]$/', $target)) {
      $tag = explode('$', $target);
      echo "  <td>(MARC) ";
      printUsmarcText($tab,$tag[0], $tag[1], $marcTags, $marcSubflds, FALSE);
      echo "</td>\n";
    } else {
      echo "  <td>".$loc->getText("CSVunknownIgnored")."!</td>\n";
    }
    break;
  }
  echo "</tr>\n";
}
?>
</table>

<?php
$errorList = array();
$recCount = 0;
$newBarcodes = array();
// TODO: For import of multiple copies, introduce copies array?
foreach($records as $record) {
  $recCount++;
  $mandatoryCols = array(
    "Call1" => false,
    '245$a' => false,
    '100$a' => false);
  $localErrors = array();
  $localWarnings = array();
  $barcode = "";
  $record = trim($record);
  if ($record == "") {
    continue;
  }
  $colCount = 0;
  $biblio = new Biblio();
  $biblio->setLastChangeUserid($_POST["userid"]);
  $biblio->setMaterialCd($defaultMaterial);
  $biblio->setCollectionCd($defaultCollection);
  $biblio->setOpacFlg($_POST["opac"] == 'Y');

  $copy = new BiblioCopy();
  $copy->setBibid("!auto!");
  $copy->setCopyDesc($_POST["copyText"]);
  $copy->setStatusCd($defaultstatus_dm);//JALG 3-2015 añadido para opción de estado de materiales

  $entries = explode($fieldterminator, $record);
  for($colCount = 0; $colCount < count($targets); $colCount ++) {
    if (isset($entries[$colCount])) {
      $entry = trim($entries[$colCount]);
      if ($entry == "") {
        continue;
      }
    } else {
      continue;
    }
    $target = trim($targets[$colCount]);
    $mandatoryCols[$target] = true;
    switch ($target) {
    case "barCo":
      $barcode = $entry;
      $copy->setBarcodeNmbr($barcode);
      break;
//JALG 3-2015 añadido para opción de estado de materiales
    case "Status":
      if (isset($status_dm[$entry])) {
        $copy->setStatusCd($status_dmCodes[$entry]);
      } else {
        array_push($localWarnings,
          $loc->getText("CSVStatusUnknown", array("statusType" => $entry)).": '".
          $status_dmCodes[$defaultStatus]."'.");
      }
      break;
//JALG 3-2015 añadido para opción de estado de materiales
    case "mType":
      if (isset($materialTypes[$entry])) {
        $biblio->setMaterialCd($materialTypes[$entry]);
      } else {
        array_push($localWarnings,
          $loc->getText("CSVMaterialUnknown", array("mType" => $entry)).": '".
          $materialTypeCodes[$defaultMaterial]."'.");
      }
      break;
    case "Coll":
      if (isset($collections[$entry])) {
        $biblio->setCollectionCd($collections[$entry]);
      } else {
        array_push($localWarnings,
          $loc->getText("CSVCollUnknown", array("collType" => $entry)).": '".
          $collectionCodes[$defaultCollection]."'.");
      }
      break;
    case "showO":
      if (preg_match('/^[yYtT]/', $entry)) {
        $biblio->setOpacFlg(true);
      } else {
        $biblio->setOpacFlg(false);
      }
      break;
    case "Call1":
      $biblio->setCallNmbr1($entry);
      break;
    case "Call2":
      $biblio->setCallNmbr2($entry);
      break;
    case "Call3":
      $biblio->setCallNmbr3($entry);
      break;
    default:
      if (preg_match('/^[0-9][0-9]*\$[a-z]$/', $target)) {
        $tag = explode('$', $target);
        $f = new BiblioField();
        $f->setTag($tag[0]);
        $f->setSubfieldCd($tag[1]);
        $f->setFieldData($entry);
        $biblio->addBiblioField($tag[0].$tag[1], $f);
      }
      break;
    }
  }

  // Display the biblio. Don't keep it in a array due to memory reasons.
  $validate = $biblio->validateData();
  // Check for uniqueness with existing barcodes and new entries read.
  if ($barcode != "") {
    if (in_array($barcode, $newBarcodes)) {
      array_push($localErrors, $copy->_loc->getText("biblioCopyQueryErr1"));
      $validate = false;
    }
    // push new barcode into validation array after validation to each the check.
    array_push($newBarcodes, $barcode);
    if (!$copy->validateData()) {
      $validate = false;
    }
  }
  // Check for mandatory entries
  foreach($mandatoryCols as $col => $seen) {
    if (! $seen) {
      array_push($localErrors, "Missing column entry: '".$col."'");
      $validate = false;
    }
  }
  if (count($localErrors)) {
    $validate = false;
  }
  if ($validate != true) {
    array_push($errorList, $recCount);
  }
  if (($validate != true) || (($_POST["test"]=="true") && ($_POST["showAll"]=="Y"))) {
    echo "<a name=\"".$recCount."\">\n";
    echo "<table>\n";
    echo "  <tr>\n";
    echo "    <th>".$loc->getText("Data Tag")."</th>\n";
    echo "    <th>".$loc->getText("Date Subfield")."</th>\n";
    echo "    <th>".$loc->getText("Data")."</th>\n";
    echo "  </tr>\n";
    if (($validate != true) || (count($localWarnings))) {
      echo "  <tr>\n";
      echo "    <td>&nbsp;</td>\n";
      echo "    <td>&nbsp;</td>\n";
      echo "    <td>";
	  if (count($localWarnings)) {
        echo "<font color=orange><b>".$loc->getText("CSVwarning")."</b>:\n";
        echo "<ul>\n";
        foreach($localWarnings as $error) {
          if ($error != "") {
            echo "<li>".$error."</li>\n";
          }
        }
        echo "</ul>\n";
        echo "</font>\n";
	  }
      if ($validate != true) {
        echo "<font color=red><b>".$loc->getText("CSVerror")."</b>:\n";
        echo "<ul>\n";
        $error = $biblio->getCallNmbrError();
        if ($error != "") {
          echo "<li>".$error."</li>\n";
        }
        foreach($localErrors as $error) {
          if ($error != "") {
            echo "<li>".$error."</li>\n";
          }
        }
        $error = $copy->getBarcodeNmbrError();
        if ($error != "") {
          echo "<li>".$error."</li>\n";
        }
        foreach($biblio->getBiblioFields() as $index => $field) {
          $error = $field->getFieldDataError();
          if ($error != "") {
            echo "<li>".$error."</li>\n";
          }
        }
        echo "</ul>\n";
        echo "</font>\n";
	  }
      echo "</td>\n";
      echo "  </tr>\n";
    }

    $entry = $barcode;
    if ((isset($entry)) && ($entry != "")) {
      echo "  <tr>\n";
      echo "    <td>barCo</td>\n";
      echo "    <td>&nbsp;</td>\n";
      echo "    <td>".$entry."</td>\n";
      echo "  </tr>\n";
    }
//JALG 3-2015 añadido para opción de estado de materiales
    $entry = $biblio->getStatus_dmCodes();
    if ((isset($entry)) && ($entry != "")) {
      echo "  <tr>\n";
      echo "    <td>Status</td>\n";
      echo "    <td>&nbsp;</td>\n";
      echo "    <td>".$status_dmCodes[$entry]."</td>\n";
      echo "  </tr>\n";
    }
//JALG 3-2015 añadido para opción de estado de materiales

    $entry = $biblio->getCollectionCd();
    if ((isset($entry)) && ($entry != "")) {
      echo "  <tr>\n";
      echo "    <td>Coll</td>\n";
      echo "    <td>&nbsp;</td>\n";
      echo "    <td>".$collectionCodes[$entry]."</td>\n";
      echo "  </tr>\n";
    }

    $entry = $biblio->getMaterialCd();
    if ((isset($entry)) && ($entry != "")) {
      echo "  <tr>\n";
      echo "    <td>mType</td>\n";
      echo "    <td>&nbsp;</td>\n";
      echo "    <td>".$materialTypeCodes[$entry]."</td>\n";
      echo "  </tr>\n";
    }
    $entry = $biblio->showInOpac();
    if ((isset($entry)) && ($entry != "")) {
      echo "  <tr>\n";
      echo "    <td>showO</td>\n";
      echo "    <td>&nbsp;</td>\n";
      if ($entry == true) {
        echo "    <td>true</td>\n";
      } else {
        echo "    <td>true</td>\n";
      }
      echo "  </tr>\n";
    }
    $entry = $biblio->getCallNmbr1();
    if ((isset($entry)) && ($entry != "")) {
      echo "  <tr>\n";
      echo "    <td>CallX</td>\n";
      echo "    <td>&nbsp;</td>\n";
      echo "    <td>".$entry;
      $entry = $biblio->getCallNmbr2();
      if ((isset($entry)) && ($entry != "")) {
        echo " ".$entry;
        $entry = $biblio->getCallNmbr3();
        if ((isset($entry)) && ($entry != "")) {
          echo " ".$entry;
        }
      }
      echo "</td>\n";
      echo "  </tr>\n";
    }

    foreach ($biblio->getBiblioFields() as $field) {
      echo "  <tr>\n";
      echo "    <td>".H($field->getTag())."</td>\n";
      echo "    <td>".H($field->getSubfieldCd())."</td>\n";
      echo "    <td>".H($field->getFieldData())."</td>\n";
      echo "  </tr>\n";
    }
    echo "</table>";
  } else {
    // THE import. Re-check - just in case someone changed above code...
    if ($_POST["test"]!="true") {
      $bq = new BiblioQuery();
      $bq->connect();
      if ($bq->errorOccurred()) {
        $bq->close();
        displayErrorPage($bq);
      }
      $bibId = $bq->insert($biblio);
      if (!$bibId) {
        $bq->close();
        displayErrorPage($bq);
      }
      $bq->close();

      if ($barcode != "") {
        $copy->setBibid($bibId);
        $copyQ = new BiblioCopyQuery();
        $copyQ->connect();
        if ($copyQ->errorOccurred()) {
          $copyQ->close();
          displayErrorPage($copyQ);
        }
        if (!$copyQ->insert($copy)) {
          $copyQ->close();
          if ($copyQ->getDbErrno() == "") {
            echo "<font color=red>".$loc->getText("CSVerror").": ".$copyQ->getError()."</font>\n";
            exit();
          } else {
            displayErrorPage($copyQ);
          }
        }
        $copyQ->close();
      }

      $biblioFlds = $biblio->getBiblioFields();
      if ($_POST["showAll"]=="Y") {
        echo "<a href=\"../shared/biblio_view.php?bibid=".U($bibId)."\">";
        echo $loc->getText("CSVadded").": <i>".
          H($biblioFlds["245a"]->getFieldData())."</i></a><br>";
      }
    }
  }
  // At the end, update the counter display.
  if ($recCount % 10 == 0) {
    echo "<script type=\"text/javascript\">\n";
    echo "  window.document.Display.Records.value = ".$recCount.";\n";
    echo "</script>\n";
  }
}

echo "<script type=\"text/javascript\">\n";
echo "  window.document.Display.Records.value = ".$recCount.";\n";
echo "</script>\n";

if (count($errorList)){
  echo "<ul>\n";
  foreach($errorList as $error) {
    echo "<li><a href=\"#".$error."\">".
      $loc->getText("CSVerrorAtRecord")." ".$error."</a></li>\n";
  }
  echo "</ul>\n";
}

echo "<p>".count($errorList)." ".$loc->getText("CSVerrors").".</p>\n";

include("../shared/footer.php");
