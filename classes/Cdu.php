<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
  // require_once("../functions/formatFuncs.php");
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
  var $_cdu_Bid = 0;
  var $_cdu_Numero = "";
  var $_cdu_Descripcion = "";
  var $_cdu_Clave = "";
  var $_cdu_Table = 0;

  /****************************************************************************
   * Getter methods for all fields
   * @return string
   * @access public
   ****************************************************************************
   */

 function getCdu_Bid() {
    return $this->_cdu_Bid;
  }
 function getCdu_Numero() {
    return $this->_cdu_Numero;
  }
 function getCdu_Descripcion() {
    return $this->_cdu_Descripcion;
  }
 function getCdu_Clave() {
    return $this->_cdu_Clave;
  }
 function getCdu_Table() {
    return $this->_cdu_Table;
  }

  /****************************************************************************
   * Setter methods for all fields
   * @param string $value new value to set
   * @return void
   * @access public
   ****************************************************************************
   */

 function setCdu_Bid($value) {
    $this->_cdu_Bid = trim($value);
  }
 function setCdu_Numero($value) {
    $this->_cdu_Numero = trim($value);
  }
 function setCdu_Descripcion($value) {
    $this->_cdu_Descripcion = trim($value);
  }
 function setCdu_Clave($value) {
    $this->_cdu_Clave = trim($value);
  }
 function setCdu_Table($value) {
    $this->_cdu_Table = trim($value);
  }
}
