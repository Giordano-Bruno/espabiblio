<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/******************************************************************************
 * Dm represents a domain table row.
 *
 * @author David Stevens <dave@stevens.name>;
 * @version 1.0
 * @access public
 ******************************************************************************
 */
class Mf {
  var $_mbrid = "";
  var $_code = "";
  var $_codeError = "";
  var $_data = "";
  /****************************************************************************
   * @return boolean true if data is valid, otherwise false.
   * @access public
   *
   * TODO: Error responses need to be internationalised
   ****************************************************************************
   */
  function validateData() {
    $valid = true;
    if ($this->_data == "") {
      $valid = false;
      $this->_dataError = "Data is required.";
    }
 /*   $this->_validateFieldNumericAndPositiveOrZero($valid,
                $this->_daysDueBack,
                $this->_daysDueBackError,
                "Days due back must be numeric.",
                "Days due back can not be less than zero.");
    $this->_validateFieldNumericAndPositiveOrZero($valid,
                $this->_dailyLateFee,
                $this->_dailyLateFeeError,
                "Daily late fee must be numeric.",
                "Daily late fee can not be less than zero.");*/
    return $valid;
  }

  /****************************************************************************
   * Validation Function. Ensures the specified field is numeric and a positive
   * number (zero is ok).
   *
   * @param boolean $valid                 Set to false if the specified field is not validate
   * @param string  $fieldToValidate       Specified field to validate
   * @param string  $errorResponse         Populated with the appropriate error message if validation fails
   * @param string  $mustBeNumericErrorMsg Error Message to use on a numeric validation failure
   * @param string  $mustBePositiveOrZeroErrorMsg Error Message to use on a positive or zero validation failure
   *
   * @return void
   * @access private
   ****************************************************************************
   */
  function _validateFieldNumericAndPositiveOrZero(&$valid, &$fieldToValidate, &$errorResponse, $mustBeNumericErrorMsg, $mustBePositiveOrZeroErrorMsg) {
  /*  if (!is_numeric($fieldToValidate)) {
      $valid = false;
      $errorResponse = $mustBeNumericErrorMsg;
    } elseif ($fieldToValidate < 0) {
      $valid = false;
      $errorResponse = $mustBeGtErrorMsg;
    }
    */
  }

  /****************************************************************************
   * Getter methods for all fields
   * @return string
   * @access public
   ***************************************************************************
 */   
  function getMbrid() {
    return $this->_mbrid;
  }
  function getCode() {
    return $this->_code;
  }
  function getCodeError() {
    return $this->_codeError;
  }
  function getData() {
    return $this->_data;
  }

  /****************************************************************************
   * Generic setter method for numeric fields. Ensures the value set is trimmed,
   * and defaulting to 0 if an empty field is passed.
   *
   * @param string $valueToSet New value to set
   * @param string $destinationField The destination field
   *
   * @return void
   * @access private
   ****************************************************************************
   */
  function _setNumeric(&$valueToSet, &$destinationField) {
    if (trim($valueToSet) == "") {
      $destinationField = "0";
    } else {
      $destinationField = trim($valueToSet);
    }
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
  function setCode($value) {
    $this->_code = trim($value);
  }
  function setCodeError($value) {
    $this->_codeError = trim($value);
  }
  function setData($value) {
    $this->_data = trim($value);
  }
}
