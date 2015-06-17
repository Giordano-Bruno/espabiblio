<?php
  require_once("../shared/common.php");
  $tab = "home";
  $nav = "changelog";

  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

  include("../shared/header.php");
?>

<h1><?php echo $loc->getText("homeChangeLogLink"); ?></h1>

<?php
  $lines = file("../doc/ChangeLog");
  foreach ($lines as $line_num => $line) {
    print $line . "<br />\n";
  }
?>

<?php
include("../shared/footer.php");
