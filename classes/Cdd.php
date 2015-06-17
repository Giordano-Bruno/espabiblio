<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 //  require_once("../functions/formatFuncs.php");

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
  var $_cdd_Bid = 0;
  var $_cdd_Numero = "";
  var $_cdd_Descripcion = "";
  var $_cdd_Clave = "";
  var $_cdd_Table = 0;
 function getCdd_Bid() {
    return $this->_cdd_Bid;
  }
 function getCdd_Numero() {
    return $this->_cdd_Numero;
  }
 function getCdd_Descripcion() {
    return $this->_cdd_Descripcion;
  }
 function getCdd_Clave() {
    return $this->_cdd_Clave;
  }
 function getCdd_Table() {
    return $this->_cdd_Table;
  }

  /****************************************************************************
   * Setter methods for all fields
   * @param string $value new value to set
   * @return void
   * @access public
   ****************************************************************************
   */
 function setCdd_Bid($value) {
    $this->_cdd_Bid = trim($value);
  }
 function setCdd_Numero($value) {
    $this->_cdd_Numero = trim($value);
  }
 function setCdd_Descripcion($value) {
    $this->_cdd_Descripcion = trim($value);
  }
 function setCdd_Clave($value) {
    $this->_cdd_Clave = trim($value);
  }
 function setCdd_Table($value) {
    $this->_cdd_Table = trim($value);
  }
}
