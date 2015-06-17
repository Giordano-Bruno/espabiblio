<?php

require_once("../shared/common.php");
$tab = "admin";
$nav = "phpinfo";
$helpPage = "phpinfo";

//require_once("../classes/Localize.php");
//$loc = new Localize(OBIB_LOCALE,$tab);

require_once("../shared/logincheck.php");
require_once("../shared/header.php");


phpinfo();


include("../shared/footer.php");
