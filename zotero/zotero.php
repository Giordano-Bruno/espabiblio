<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
//  $Document = new ();
// print_r ($bibid );

// marca un warning en php 5.5 --- Warning: Creating default object from empty value in
// soluciones posible de http://nomikos.org/2012/10/php5-solucion-a-warning-creating-default-object-from-empty-value-in-y-mensajes-e_strict/

//Warning: session_start(): Cannot send session cache limiter - headers already sent (output started at /home4/biblica/public_html/biblioteca/shared/biblio_view.php:1) in /home4/biblica/public_html/biblioteca/shared/common.php on line 119
/*
  $set = new LookupOpts();
  $set->setProtocol($_POST["protocol"]);
  $_POST["protocol"] = $set->getProtocol();
*/
  $Document = new stdClass;
  
//function __construct()
  $Document->fields = array(
      'Id' => md5($bibid . $doc_title),
      'DocType' => 2, // Book, other types read in openUrl.php
      'DocTitle' => $doc_title,
      'JournalTitle' => false,
      'BookTitle' => $doc_title,
      'BookPublisher' => $doc_publisher,
      'PubPlace' => $doc_pubplace,
      'ISBN' => $doc_isbn,
      'StartPage' => false,
      'EndPage' => false,
      'DocYear' => $doc_pubyear,
      'DocEdition' => $doc_edition,
      'ShortTitle' => $doc_stitle,
   );

  $People= new stdClass;
  $People->fields = array(
      'DocRelationship' => 0,
      'FirstName' => $doc_author_fname,
      'LastName' => $doc_author_lname,
      );

/*
$People[]->fields = array(
  'DocRelationship' => 0,
  'FirstName' => $doc_author_fname,
  'LastName' => $doc_author_lname,
);
*/

require_once("../zotero/openUrl-funtion.php");

?>


<span class="Z3988" title="<?php print OpenURL($Document, $People) ?>">OpenURL</span>
