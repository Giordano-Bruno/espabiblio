<?php
/**
 * Author: Szymon Goralczyk <sg@apgsoft.pl>
 * https://bitbucket.org/abix-pl/openbiblio/branches/compare/Cena_egzemplarza%0dmaster#chg-inventory/copy_del.php
 */

require_once("../shared/common.php");
$tab = "inventory";
$nav = "searchform";

include("../shared/logincheck.php");
include("../shared/header.php");
require_once("../classes/Localize.php");
$loc = new Localize(OBIB_LOCALE, $tab);

require_once("../classes/BiblioSearch.php");
require_once("../classes/BiblioSearchQuery.php");
require_once("../classes/InventorySearchQuery.php");

//Search Config

$words[] = '';
$currentPageNmbr = 'all';
$sortBy = 'author';
$opacFlg = true;
$number = 1;

//Pobieramy inventaryzacje
$biblioQ = new InventorySearchQuery();
$biblioQ->setItemsPerPage(OBIB_ITEMS_PER_PAGE);
$biblioQ->connect();
if ($biblioQ->errorOccurred()) {
    $biblioQ->close();
    displayErrorPage($biblioQ);
}


if (!$biblioQ->search('',$words,$currentPageNmbr,$sortBy,$opacFlg,true)) {
    $biblioQ->close();
    displayErrorPage($biblioQ);
}
?>

<h3><img src="../images/book.gif" border="0" width="30" height="30"
         align="top"> <?php echo $loc->getText("invName"); ?></h3>
<?php echo $loc->getText("invDesc"); ?>
<br><br><br><br><br>
<table class="table table-bordered table-striped">
    <thead>
    <td class="info"><?php echo $loc->getText("invDataTableNr"); ?></td>
    <td class="info"><?php echo $loc->getText("invDataTableAuthor"); ?></td>
    <td class="info"><?php echo $loc->getText("invDataTableTitle"); ?></td>
    <td class="info"><?php echo $loc->getText("invDataTableAmount"); ?></td>
    <td class="info"><?php echo $loc->getText("invDataTableActions"); ?></td>
    </thead>
    <tbody>
    
    <?php  while ($bibItem = $biblioQ->fetchRow()) : ?>
    <tr>
        <td><?php echo $number++ ?></td>
        <td><?php echo $bibItem->getAuthor(); ?></td>
        <td><?php echo $bibItem->getTitle(); ?></td>
        <td><?php echo $bibItem->getAmount(); ?></td>
        <td><a href="../inventory/list_view.php?bibid=<?php echo $bibItem->getBibid() ?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> <?php echo $loc->getText("invDataTableActions_Show"); ?> </a></td>
    </tr>
    <?php

    endwhile;
    ?>

    </tbody>
</table>

<?php include("../shared/footer.php"); ?>