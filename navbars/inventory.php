<?php
/**
 * Author: Szymon Goralczyk <sg@apgsoft.pl>
 *
 * Navbar file for Inventory module
 */

require_once("../classes/Localize.php");
$navloc = new Localize(OBIB_LOCALE,"navbars");

?>
<input type="button" onClick="self.location='../shared/logout.php'" value="<?php echo $navloc->getText("logout"); ?>" class="navbutton"><br />
<br />

Menu
