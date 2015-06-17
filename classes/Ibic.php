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
  var $_ibic_Bid = 0;
  var $_ibic_Numero = "";
  var $_ibic_Descripcion = "";
  var $_ibic_Clave = "";
  var $_ibic_Table = 0;

 function getIbic_Bid() {
    return $this->_ibic_Bid;
  }
 function getIbic_Numero() {
    return $this->_ibic_Numero;
  }
 function getIbic_Descripcion() {
    return $this->_ibic_Descripcion;
  }
 function getIbic_Clave() {
    return $this->_ibic_Clave;
  }
 function getIbic_Table() {
    return $this->_ibic_Table;
  }

  /****************************************************************************
   * Setter methods for all fields
   * @param string $value new value to set
   * @return void
   * @access public
   ****************************************************************************
   */

 function setIbic_Bid($value) {
    $this->_ibic_Bid = trim($value);
  }
 function setIbic_Numero($value) {
    $this->_ibic_Numero = trim($value);
  }
 function setIbic_Descripcion($value) {
    $this->_ibic_Descripcion = trim($value);
  }
 function setIbic_Clave($value) {
    $this->_ibic_Clave = trim($value);
  }
 function setIbic_Table($value) {
    $this->_ibic_Table = trim($value);
  }
}
