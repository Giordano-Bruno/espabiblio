<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
  require_once("../shared/common.php");
  $tab = "admin";
  $nav = "";

  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

  include("../shared/header.php");

 echo $loc->getText("admin_noauth");

  include("../shared/footer.php");

/*
  require_once("../shared/common.php");
  $tab = "cataloging";
  $nav = "";

  include("../shared/header.php");
No estás autorizado a utilizar el Funciones de Administración, Consulte con el Encargado del sistema.
*/

include("../shared/footer.php");
