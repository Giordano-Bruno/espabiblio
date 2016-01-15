<?php
/**
 * Author: Szymon Goralczyk <sg@apgsoft.pl>
 * https://bitbucket.org/abix-pl/openbiblio/branches/compare/Cena_egzemplarza%0dmaster#chg-inventory/copy_del.php
 */

require_once("../shared/common.php");

#****************************************************************************
#*  Checking for get vars.  Go back to form if none found.
#****************************************************************************
if (count($_GET) == 0) {
    header("Location: ../inventory/index.php");
    exit();
}

#****************************************************************************
#*  Checking for tab name to show OPAC look and feel if searching from OPAC
#****************************************************************************
if (isset($_GET["tab"])) {
    $tab = $_GET["tab"];
} else {
    $tab = "inventory";
}

$nav = "view";

//Wymagamy zalogowania
require_once("../shared/logincheck.php");

require_once("../classes/Biblio.php");
require_once("../classes/BiblioQuery.php");
require_once("../classes/BiblioCopy.php");
require_once("../classes/BiblioCopyQuery.php");
require_once("../classes/DmQuery.php");
require_once("../classes/UsmarcTagDm.php");
require_once("../classes/UsmarcTagDmQuery.php");
require_once("../classes/UsmarcSubfieldDm.php");
require_once("../classes/UsmarcSubfieldDmQuery.php");
require_once("../functions/marcFuncs.php");
require_once("../classes/Localize.php");
$loc = new Localize(OBIB_LOCALE, "shared");

#****************************************************************************
#*  Retrieving get var
#****************************************************************************
$bibid = $_GET["bibid"];

//Nowa formatka do błędów
if (isset($_GET["msg"])) {
    $msg = "<div class=\"alert alert-danger\" role=\"alert\">
  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
  <span class=\"sr-only\">Error:</span> "
        . H($_GET["msg"]) .
        "</div>";
} else {
    $msg = "";
}

#****************************************************************************
#*  Loading a few domain tables into associative arrays
#****************************************************************************
$dmQ = new DmQuery();
$dmQ->connect();
$collectionDm = $dmQ->getAssoc("collection_dm");
$materialTypeDm = $dmQ->getAssoc("material_type_dm");
$biblioStatusDm = $dmQ->getAssoc("biblio_status_dm");
$dmQ->close();

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

#****************************************************************************
#*  Search database
#****************************************************************************
$biblioQ = new BiblioQuery();
$biblioQ->connect();
if ($biblioQ->errorOccurred()) {
    $biblioQ->close();
    displayErrorPage($biblioQ);
}
if (!$biblio = $biblioQ->doQuery($bibid, $tab)) {
    $biblioQ->close();
    displayErrorPage($biblioQ);
}
$biblioFlds = $biblio->getBiblioFields();

#**************************************************************************
#*  Show bibliography info.
#**************************************************************************
require_once("../shared/header.php");

?>

<?php echo $msg ?>
<div class="container">
    <table class="table table-bordered table-striped">
        <thead >
        <td colspan="2"><?php echo $loc->getText("biblioViewTble1Hdr"); ?>:</td>
        </thead>
        <tbody>
        <tr>
            <td>
                <?php echo $loc->getText("biblioViewMaterialType"); ?>:
            </td>
            <td>
                <?php echo H($materialTypeDm[$biblio->getMaterialCd()]); ?>
            </td>
        </tr>
        <tr>
            <td >
                <?php echo $loc->getText("biblioViewCollection"); ?>:
            </td>
            <td>
                <?php echo H($collectionDm[$biblio->getCollectionCd()]); ?>
            </td>
        </tr>
        <tr>
            <td >
                <?php echo $loc->getText("biblioViewCallNmbr"); ?>:
            </td>
            <td >
                <?php echo H($biblio->getCallNmbr1()); ?>
                <?php echo H($biblio->getCallNmbr2()); ?>
                <?php echo H($biblio->getCallNmbr3()); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php printUsmarcText($tab,245,"a",$marcTags, $marcSubflds, FALSE, $isOpac);?>:
            </td>
            <td>
                <?php if (isset($biblioFlds["245a"])) echo H($biblioFlds["245a"]->getFieldData()); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php printUsmarcText($tab,245,"b",$marcTags, $marcSubflds, FALSE, $isOpac);?>:
            </td>
            <td>
                <?php if (isset($biblioFlds["245b"])) echo H($biblioFlds["245b"]->getFieldData()); ?>
            </td>
        </tr>
        <tr>
            <td >
                <?php printUsmarcText($tab,100,"a",$marcTags, $marcSubflds, FALSE, $isOpac);?>:
            </td>
            <td>
                <?php if (isset($biblioFlds["100a"])) echo H($biblioFlds["100a"]->getFieldData()); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php printUsmarcText($tab,245,"c",$marcTags, $marcSubflds, FALSE, $isOpac);?>:
            </td>
            <td>
                <?php if (isset($biblioFlds["245c"])) echo H($biblioFlds["245c"]->getFieldData()); ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $loc->getText("biblioViewOpacFlg"); ?>:
            </td>
            <td>
                <?php if ($biblio->showInOpac()) {
                    echo $loc->getText("biblioViewYes");
                } else {
                    echo $loc->getText("biblioViewNo");
                }?>
            </td>
        </tr>
        </tbody>
    </table>
    <br/>

<?php
#****************************************************************************
#*  Show copy information
#****************************************************************************

$copyCols = 5;

$copyQ = new BiblioCopyQuery();
$copyQ->connect();
if ($copyQ->errorOccurred()) {
    $copyQ->close();
    displayErrorPage($copyQ);
}
if (!$copy = $copyQ->execSelect($bibid)) {
    $copyQ->close();
    displayErrorPage($copyQ);
}
?>

<h3><?php echo $loc->getText("biblioViewTble2Hdr"); ?>:</h3>
<table class="table table-bordered table-striped">
    <tr>
        <?php if ($tab == "inventory") { ?>
            <th colspan="1" nowrap="yes">
                <?php echo $loc->getText("biblioViewTble2ColFunc"); ?>
            </th>
        <?php } ?>
        <th align="left" nowrap="yes">
            <?php echo $loc->getText("biblioViewTble2Col1"); ?>
        </th>
        <th align="left" nowrap="yes">
            <?php echo $loc->getText("biblioViewTble2Col2"); ?>
        </th>
        <th align="left" nowrap="yes">
            <?php echo $loc->getText("biblioViewTble2Col3"); ?>
        </th>
        <th align="left" nowrap="yes">
            <?php echo $loc->getText("biblioViewTble2Col4"); ?>
        </th>
        <th align="left" nowrap="yes">
            <?php echo $loc->getText("biblioCopyNewPrice"); ?>
        </th>
        <th align="left" nowrap="yes">
            <?php echo $loc->getText("biblioViewTble2Col5"); ?>
        </th>
    </tr>
    <tbody>
    <?php
    if ($copyQ->getRowCount() == 0) {
        ?>
        <tr>
            <td valign="top" colspan="<?php echo H($copyCols); ?>" class="primary" colspan="2">
                <?php echo $loc->getText("biblioViewNoCopies"); ?>
            </td>
        </tr>
    <?php
    } else {
        $row_class = "primary";
        while ($copy = $copyQ->fetchCopy()) {
            ?>
            <tr>
                <?php if ($tab == "inventory") { ?>
                    <td>
                        <a href="../inventory/copy_del_conf.php?bibid=<?php echo HURL($copy->getBibid()); ?>&amp;copyid=<?php echo HURL($copy->getCopyid()); ?>"
                           class="<?php echo H($row_class); ?>"><?php echo $loc->getText("biblioViewTble2Coldel"); ?></a>
                    </td>
                <?php } ?>
                <td>
                    <?php echo H($copy->getBarcodeNmbr()); ?>
                </td>
                <td>
                    <?php echo H($copy->getCopyDesc()); ?>
                </td>
                <td>
                    <?php echo H($biblioStatusDm[$copy->getStatusCd()]); ?>
                </td>
                <td>
                    <?php echo H($copy->getStatusBeginDt()); ?>
                </td>
                <td>
                    <?php echo H($copy->getPrice()); ?>
                </td>
                <td>
                    <?php echo H($copy->getDueBackDt()); ?>
                </td>
            </tr>
            <?php
        }
        $copyQ->close();
    } ?>
    </tbody>
</table>

<br/>
<table class="table table-bordered">
    <tr>
        <th align="left" colspan="2" nowrap="yes">
            <?php echo $loc->getText("biblioViewTble3Hdr"); ?>:
        </th>
    </tr>
    <?php
    $displayCount = 0;
    foreach ($biblioFlds as $key => $field) {
        if (($field->getFieldData() != "")
            && ($key != "245a")
            && ($key != "245b")
            && ($key != "245c")
            && ($key != "100a")
        ) {
            $displayCount = $displayCount + 1;
            ?>
            <tr>
                <td valign="top" class="primary">
                    <?php printUsmarcText($tab,$field->getTag(), $field->getSubfieldCd(), $marcTags, $marcSubflds, FALSE, $isOpac); ?>
                    :
                </td>
                <td valign="top" class="primary"><?php echo H($field->getFieldData()); ?></td>
            </tr>
        <?php
        }
    }
    if ($displayCount == 0) {
        ?>
        <tr>
            <td valign="top" class="primary" colspan="2">
                <?php echo $loc->getText("biblioViewNoAddInfo"); ?>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

</div>
<!-- End of container ;) -->
<?php require_once("../shared/footer.php"); ?>