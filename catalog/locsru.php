<?php
/**
 * LocSRU - Library of Congress Lookup mod for OpenBiblio 0.5.2
 *
 * Current functionality:
 *
 *  * Lookup data from library of congress
 *  * Automatically fill bibliography information
 *
 * @package	OpenBiblio 0.5.2 - LocSRU
 * @version	0.0.2
 * @author	Ritteh
 * @date	3rd December, 2006
 * @license     http://www.gnu.org/licenses/lgpl.txt Lesser GNU Public License
 *
 * @copyright Copyright &copy; 2006 All Rights Reserved.
 * @filesource
 *
 * -----------------------------------------------------------------------
 *
 *   This library is free software; you can redistribute it and/or
 *   modify it under the terms of the GNU Lesser General Public
 *   License as published by the Free Software Foundation; either
 *   version 2.1 of the License, or any later version.
 *
 *   This library is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 *   Lesser General Public License for more details.
 *
 *   You should have received a copy of the GNU Lesser General Public
 *   License along with this library; if not, write to
 *
 *   The Free Software Foundation, Inc.,
 *   51 Franklin Street,
 *   Fifth Floor,
 *   Boston,
 *   MA  02110-1301  USA
 *
 *    "Ritteh" <ritteh@theyak.net>
 *
 */

$tab = 'cataloging';
$nav = 'locsru';
$focus_form_name = "locForm";
$focus_form_field = "locVal";

require_once '../shared/common.php';
require_once '../classes/Localize.php';
require_once '../shared/logincheck.php';
require_once '../shared/header.php';
require_once 'locsru.inc.php';

$text = new Localize(OBIB_LOCALE, $tab);
$action = get_param('action');

switch($action)
{
case 'Buscar':   // Search Library of Congress
  require_once 'locsru_search.php';
  require_once 'locsru_process.php';
  break;
case 'Multiple':
  break;
case 'Edit':
  break;
default:   // Display input form
  require_once 'locsru_form.php';
  break;
}
if($action == 'Multiple')
{
  require_once 'locsru_multiple.php';
}
if($action == 'Edit')
{
  if(!isset($postVars['values']))
  {
    $postVars['values'] = $_POST;
  }
  $loc = $text;
  $focus_form_name = "newbiblioform";
  $focus_form_field = "materialCd";
  $headerWording=$text->getText("biblioNewFormLabel");

  /*****************************************************
   *  Set form defaults
   *****************************************************/
  if (isset($_GET["reset"])) {
    $postVars["opacFlg"] = "CHECKED";
  }
  print '<form name="newbiblioform" method="POST" action="../catalog/biblio_new.php" >';
  include("../catalog/biblio_fields.php");
  exit;
}
include("../shared/footer.php");
