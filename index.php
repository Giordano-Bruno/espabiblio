<?php
/**
 * Default settings would redirect to home/index.php page,
 * to enable integrated frontpage (powered by WordPress)
 * please change route to front/index.php instead.
 * Sample:
 * header("Location: front/index.php");
 * Default:
 * header("Location: home/index.php");
*/
header("Location: home/index.php");// para inicer el espa desde admin
//header("Location: front/index.php");// para iniciar con el wordpress integrado en el
//header("Location: opac/index.php");// para iniciar es espa con pantalla opac
