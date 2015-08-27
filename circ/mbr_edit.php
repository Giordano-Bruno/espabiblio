<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
  require_once("../shared/common.php");
  $tab = "circulation";
  $restrictToMbrAuth = TRUE;
  $nav = "edit";
  $restrictInDemo = true;
  require_once("../shared/logincheck.php");
  require_once("../classes/Member.php");
  require_once("../classes/MemberQuery.php");
  require_once("../classes/DmQuery.php");
  require_once("../functions/errorFuncs.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

// echo "</br>";
// echo FOTO_PATH;

  #****************************************************************************
  #*  Jose Antonio Lara Galindo joanlaga@hotmail.com, modificado para mover el archivo foto del lector.
  #****************************************************************************
	if ($_FILES['foto']['name'] != "" && $_FILES['foto']['size'] != 0){
// Modificar segun ruta en win o linux o imtegrar a base de datos , // ruta para windows modificar segunse requiera. joanlaga@hotmail.com
	if (! move_uploaded_file ($_FILES['foto']['tmp_name'], "../" . FOTO_PATH ."/" . $_FILES['foto']['name'])) {

		}
		$_POST["foto"] =$_FILES['foto']['name']; 
	}

//  #*  Jose Antonio Lara Galindo joanlaga@hotmail.com, modificado para mover el archivo foto del lector.
  

  #****************************************************************************
  #*  Checking for post vars.  Go back to form if none found.
  #****************************************************************************

  if (count($_POST) == 0) {
    header("Location: ../circ/index.php");
    exit();
  }

  #****************************************************************************
  #*  Validate data
  #****************************************************************************
  $mbrid = $_POST["mbrid"];

  $mbr = new Member();
  $mbr->setMbrid($_POST["mbrid"]);

  $mbr->setBarcodeNmbr($_POST["barcodeNmbr"]);
  $_POST["barcodeNmbr"] = $mbr->getBarcodeNmbr();

  $mbr->setLastChangeUserid($_SESSION["userid"]);

  $mbr->setLastName($_POST["lastName"]);
  $_POST["lastName"] = $mbr->getLastName();

  $mbr->setFirstName($_POST["firstName"]);
  $_POST["firstName"] = $mbr->getFirstName();

  $mbr->setAddress($_POST["address"]);
  $_POST["address"] = $mbr->getAddress();

  $mbr->setHomePhone($_POST["homePhone"]);
  $_POST["homePhone"] = $mbr->getHomePhone();

  $mbr->setWorkPhone($_POST["workPhone"]);
  $_POST["workPhone"] = $mbr->getWorkPhone();

  $mbr->setCel($_POST["cel"]);
  $_POST["cel"] = $mbr->getCel();

  $mbr->setEmail($_POST["email"]);
  $_POST["email"] = $mbr->getEmail();

  $mbr->setFoto($_POST["foto"]);
  $_POST["foto"] = $mbr->getFoto();

  $mbr->setPassUser($_POST["passUser"]);
  $_POST["passUser"] = $mbr->getPassUser();

  $mbr->setBornDt($_POST["bornDt"]);
  $_POST["bornDt"] = $mbr->getBornDt();

  $mbr->setOther($_POST["other"]);
  $_POST["other"] = $mbr->getOther();

  $mbr->setClassification($_POST["classification"]);
  $mbr->setStatus($_POST["status"]);
  
  $dmQ = new DmQuery();
  $dmQ->connect();
  $customFields = $dmQ->getAssoc('member_fields_dm');
  $dmQ->close();
  foreach ($customFields as $name => $title) {
    if (isset($_REQUEST['custom_'.$name])) {
      $mbr->setCustom($name, $_REQUEST['custom_'.$name]);
    }
  }
  
  $validData = $mbr->validateData();
  if (!$validData) {
    $pageErrors["barcodeNmbr"] = $mbr->getBarcodeNmbrError();
    $pageErrors["lastName"] = $mbr->getLastNameError();
    $pageErrors["firstName"] = $mbr->getFirstNameError();
    $pageErrors["status"] = $mbr->getStatusError();
    $_SESSION["postVars"] = $_POST;
    $_SESSION["pageErrors"] = $pageErrors;
    header("Location: ../circ/mbr_edit_form.php");
    exit();
  }

  #**************************************************************************
  #*  Check for duplicate barcode number
  #**************************************************************************
  $mbrQ = new MemberQuery();
  $mbrQ->connect();
  $dupBarcode = $mbrQ->DupBarcode($mbr->getBarcodeNmbr(),$mbr->getMbrid());
  if ($dupBarcode) {
    $pageErrors["barcodeNmbr"] = $loc->getText("mbrDupBarcode",array("barcode"=>$mbr->getBarcodeNmbr()));
    $_SESSION["postVars"] = $_POST;
    $_SESSION["pageErrors"] = $pageErrors;
    header("Location: ../circ/mbr_edit_form.php");
    exit();
  }

  #**************************************************************************
  #*  Update library member
  #**************************************************************************
  $mbrQ->update($mbr);
  $mbrQ->updateActivity($mbrid);
  $mbrQ->close();

  #**************************************************************************
  #*  Destroy form values and errors
  #**************************************************************************
  unset($_SESSION["postVars"]);
  unset($_SESSION["pageErrors"]);

  $msg = $loc->getText("mbrEditSuccess");
  header("Location: ../circ/mbr_view.php?mbrid=".U($mbr->getMbrid())."&reset=Y&msg=".U($msg));
  exit();
