<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
//require_once("../shared/global_constants.php");
//require_once("../classes/Query.php");

class Localize {
  var $_trans = NULL;

  /****************************************************************************
   * @return boolean true if data is valid, otherwise false.
   * @access public
   ****************************************************************************
   */
  function Localize ($locale, $section) {//ene-2016 modificado para usar en scrip admin
	if ($locale == '' ){
		$locale = OBI_LANG;
	}else{
		if (is_null($_REQUEST['locale'] || $locale == '' )){
			$locale = "es";
		}
	}

    $localePath = OBIB_LOCALE_ROOT . $locale ."/".$section.".php";//modificado jalg 11/2013 para trabajo en win y linux

    include($localePath);
    ## ##################################
    ## adds suport for plugins - fl, 2009
    ## ##################################
    /* Move all plugin/*.tran to locale directory for generalize $trans.
		$list = getPlugIns($section.'.tran');
		for ($x=0; $x<count($list); $x++) {
			include($list[$x]);
		}
		*/
    ## ##################################
    $this->_trans = $trans;
    return true;
  }

  /****************************************************************************
   * @return string returns the translated text for the specified key
   *                If the key is not found in the translation table then the
   *                key will be returned instead of the translated value.
   * @param string $key key name for the translation table
   * @param array $vars associative array containing substitution variables
   * @access public
   ****************************************************************************
   */
  function getText ($key, $vars=NULL) {
    $text = $key;
    $transFunc = @$this->_trans[$key];
    if ($vars != NULL) {
      foreach($vars as $varKey => $value) {
        $search = "%".$varKey."%";
        if ($transFunc) {
          $transFunc = str_replace($search,addslashes(H($value)),$transFunc);
        } else {
          $text = str_replace($search,$value,$text);
        }
      }
    }
    @eval ($transFunc);
    if (OBIB_HIGHLIGHT_I18N_FLG) {
      $text = "<i>".$text."</i>";
    }
    return $text;
  }
}