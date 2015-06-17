<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
  require_once("../functions/formatFuncs.php");

/******************************************************************************
 * Member represents a library member.  Contains business rules for
 * member data validation.
 *
 * @author David Stevens <dave@stevens.name>;
 * @version 1.0
 * @access public
 ******************************************************************************
 */
class Member {
  var $_mbrid = 0;
  var $_barcodeNmbr = 0;
  var $_barcodeNmbrError = "";
  var $_createDt = "";
  var $_lastChangeDt = "";
  var $_lastChangeUserid = "";
  var $_lastChangeUsername = "";
  var $_classification = "";
  var $_lastName = "";
  var $_lastNameError = "";
  var $_firstName = "";
  var $_firstNameError = "";
  var $_address = "";
  var $_homePhone = "";
  var $_workPhone = "";
  var $_cel = "";
  var $_email = "";
  var $_foto = "";
  var $_passUser = "";
  var $_passUserError = "";
  var $_passUser2 = "";
  var $_bornDt = "0000-00-00";
  var $_other = "";
  var $_status = "Y";
  var $_statusError = "";
  var $_custom = array();
  var $_lastActivityDate = "0000-00-00 00:00:00";

  /****************************************************************************
   * @return boolean true if data is valid, otherwise false.
   * @access public
   ****************************************************************************
   */
  function validateData() {
    global $loc;
    
    $valid = true;
    if ($this->_barcodeNmbr == "") {
      $valid = false;
      $this->_barcodeNmbrError = $loc->getText("Card number is required.");
    } else if (!ctypeAlnum($this->_barcodeNmbr)) {
      $valid = FALSE;
      $this->_barcodeNmbrError = $loc->getText("Card number must be all alphabetic and numeric characters.");
    }
    if ($this->_lastName == "") {
      $valid = false;
      $this->_lastNameError = $loc->getText("Last name is required.");
    }
    if ($this->_firstName == "") {
      $valid = false;
      $this->_firstNameError = $loc->getText("First name is required.");
    }
    if (strcmp($this->_status, "y") != 0 && strcmp($this->_status, "n") != 0) {
      $valid = false;
      $this->_statusError = $loc->getText("Status options is incorrect.");
    }

    return $valid;
  }




  function validateDataUser() {
    global $loc;
    
    $valid = true;
  /*  if ($this->_barcodeNmbr == "") {
      $valid = false;
      $this->_barcodeNmbrError = $loc->getText("Card number is required.");
    } else if (!ctypeAlnum($this->_barcodeNmbr)) {
      $valid = FALSE;
      $this->_barcodeNmbrError = $loc->getText("Card number must be all alphabetic and numeric characters.");
    }*/
    if ($this->_lastName == "") {
      $valid = false;
      $this->_lastNameError = $loc->getText("Last name is required.");
    }
    if ($this->_firstName == "") {
      $valid = false;
      $this->_firstNameError = $loc->getText("First name is required.");
    }
 /*   if (strcmp($this->_status, "y") != 0 && strcmp($this->_status, "n") != 0) {
      $valid = false;
      $this->_statusError = $loc->getText("Status options is incorrect.");
    }
*/
    return $valid;
  }
  
  function getCustom($field) {
    if (isset($this->_custom[$field])) {
      return $this->_custom[$field];
    }
    return "";
  }
  function setCustom($field, $value) {
    $this->_custom[$field] = $value;
  }

  /****************************************************************************
   * @return boolean true if data is valid, otherwise false.
   * @access public
   ****************************************************************************
   */
  function validatePassUser() {
    $valid = true;
    if (strlen($this->_passUser) < 4) {
      $valid = false;
      $this->_passUserError = "Password must be at least 4 characters.";
    } elseif (substr_count($this->_passUser, " ") > 0) {
      $valid = false;
      $this->_pwdError = "Password must not contain any spaces.";
    } elseif ($this->_passUser != $this->_passUser) {
      $valid = false;
      $this->_passUserError = "Passwords do not match.";
    }
    return $valid;
  }

  /****************************************************************************
   * @param string $pwd Password of staff member
   * @return void
   * @access public
   ****************************************************************************
   */
  function setPassUser($_passUser) {
    $this->_passUser = strtolower(trim($_passUser));
  }
  function getPassUser() {
    return $this->_passUser;
  }
  function getPassUserError() {
    return $this->_passUserError;
  }
  function setPassUser2($_passUser) {
    $this->_passUser2 = strtolower(trim($_passUser));
  }
  function getPassUser2() {
    return $this->_passUser2;
  }

  /****************************************************************************
   * Getter methods for all fields
   * @return string
   * @access public
   ****************************************************************************
   */
  function getMbrid() {
    return $this->_mbrid;
  }
  function getBarcodeNmbr() {
    return $this->_barcodeNmbr;
  }
  function getBarcodeNmbrError() {
    return $this->_barcodeNmbrError;
  }
  function getCreateDt() {
    return $this->_createDt;
  }
  function getLastChangeDt() {
    return $this->_lastChangeDt;
  }
  function getLastChangeUserid() {
    return $this->_lastChangeUserid;
  }
  function getLastChangeUsername() {
    return $this->_lastChangeUsername;
  }
  function getLastName() {
    return $this->_lastName;
  }
  function getLastNameError() {
    return $this->_lastNameError;
  }
  function getFirstName() {
    return $this->_firstName;
  }
  function getFirstNameError() {
    return $this->_firstNameError;
  }
  function getFirstLastName() {
    return $this->_firstName." ".$this->_lastName;
  }
  function getLastFirstName() {
    return $this->_lastName.",".$this->_firstName;
  }
  function getAddress() {
    return $this->_address;
  }
  function getHomePhone() {
    return $this->_homePhone;
  }
  function getWorkPhone() {
    return $this->_workPhone;
  }
  function getCel() {
    return $this->_cel;
  }
  function getEmail() {
    return $this->_email;
  }
  function getFoto() {
    return $this->_foto; //jalg foto member
  }
  function getBornDt() {
    return $this->_bornDt; 
  }
  function getOther() {
    return $this->_other;
  }
  function getClassification() {
    return $this->_classification;
  }
  function getStatus() {
    return $this->_status;
  }
  function getStatusError() {
    return $this->_statusError;
  }
  function getLastActDate() {
    return $this->_lastActivityDate;
  }

  /****************************************************************************
   * Setter methods for all fields
   * @param string $value new value to set
   * @return void
   * @access public
   ****************************************************************************
   */
  function setMbrid($value) {
    $this->_mbrid = trim($value);
  }
  function setBarcodeNmbr($value) {
    $this->_barcodeNmbr = trim($value);
  }
  function setCreateDt($value) {
    $this->_createDt = trim($value);
  }
  function setLastChangeDt($value) {
    $this->_lastChangeDt = trim($value);
  }
  function setLastChangeUserid($value) {
    $this->_lastChangeUserid = trim($value);
  }
  function setLastChangeUsername($value) {
    $this->_lastChangeUsername = trim($value);
  }
  function setLastName($value) {
    $this->_lastName = trim($value);
  }
  function setLastNameError($value) {
    $this->_lastNameError = trim($value);
  }
  function setFirstName($value) {
    $this->_firstName = trim($value);
  }
  function setFirstNameError($value) {
    $this->_firstNameError = trim($value);
  }
  function setAddress($value) {
    $this->_address = trim($value);
  }
  function setHomePhone($value) {
    $this->_homePhone = trim($value);
  }
  function setWorkPhone($value) {
    $this->_workPhone = trim($value);
  }
  function setCel($value) {
    $this->_cel = trim($value);
  }
  function setEmail($value) {
    $this->_email = trim($value);
  }
  function setFoto($value) {
    $this->_foto = trim($value);
  }
  function setBornDt($value) {
    $this->_bornDt = trim($value);
  //  $this->_born_Dt = date('Y-m-d', strtotime($value));
  }
  function setOther($value) {
    $this->_other = trim($value);
  }
  function setClassification($value) {
    $this->_classification = trim($value);
  }
  function setStatus($value) {
    $this->_status = trim($value);
  }
  function setStatusError($value) {
    $this->_statusError = trim($value);
  }
  function setLastActDate($value) {
    $this->_lastActivityDate = date('Y-m-d H:i:s', strtotime($value));
  }
}
