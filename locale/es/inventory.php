<?php
/**
 * Author: Szymon Goralczyk <sg@apgsoft.pl>
 * https://bitbucket.org/abix-pl/openbiblio/branches/compare/Cena_egzemplarza%0dmaster#chg-inventory/copy_del.php
 * Lang file for inventory module.
 */

#****************************************************************************
#*  Translation text for class Biblio
#****************************************************************************
$trans["invName"]            = "\$text = 'Inventario';";// Inventory
$trans["invDesc"]            = "\$text = 'Módulo utilizado para inventarios.';";// Module used for inventory.
$trans["invDataTableNr"]            = "\$text = 'Nr.';";// Nr.
$trans["invDataTableAuthor"]            = "\$text = 'Autor';";// Author
$trans["invDataTableTitle"]            = "\$text = 'Titulo';";// Title
$trans["invDataTableAmount"]            = "\$text = 'Cantidad';";// Amount
$trans["invDataTableActions"]            = "\$text = 'Acciones';";// Actions
$trans["invDataTableActions_Show"]            = "\$text = 'Revisar';";// Show
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'No se pudo eliminar la copia. Debe revisar la copia antes de que se elimine.';";// Could not delete copy.  A copy must be checked in before it can be deleted.
$trans["biblioCopyDelConfirmMsg"]  = "\$text = '¿Seguro que quieres eliminar la copia con código de barras %barcodeNmbr%?  Esto también eliminará toda la historia de cambio de estado para esta copia.';";// Are you sure you want to delete the copy with barcode %barcodeNmbr%?  This will also delete all status change history for this copy.