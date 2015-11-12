<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

// Business Card Letter 2x5 (Avery 5371, etc.)

require_once('../classes/Lay.php');

class Layout_mbr_cards_10up {
  var $p;
  function paramDefs() {
    return array(
      array('string', 'skip', array('title'=>'Skip Cards', 'default'=>'0')),
    );
  }
  function init($params) {
    $this->p = $params;
  }
  function render($rpt) {
    $lay = new Lay;
      $lay->container('Columns', array(
        'margin-top'=>'0.5in', 'margin-bottom'=>'0.5in',
        'margin-left'=>'0.75in', 'margin-right'=>'0.75in',
      ));
        $lay->container('Lines');
          $lay->container('Columns');
            list(, $skip) = $this->p->getFirst('skip');
            for ($i = 0; $i < $skip; $i++) {
              $lay->container('Column', array(
                'height'=>'2in', 'width'=>'3.5in',
              ));
              $lay->close();
            }
            while ($row = $rpt->each()) {
              $lay->container('Column', array(
                'height'=>'2in', 'width'=>'3.5in',
                'margin-top'=>'0.14in', 'margin-bottom'=>'0.14in',
                'margin-left'=>'0.14in', 'margin-right'=>'0.14in',
              ));
                $lay->container('Column', array(
                  'height'=>'1.22in',
                  'y-align'=>'top',
                ));
                  $lay->container('TextLine');
                    $lay->pushFont('Times-Bold', 10);
                      $lay->text(OBIB_LIBRARY_NAME);
                    $lay->popFont();
                  $lay->close();
                  $lay->container('Column', array(
                    'margin-left'=>'0.07in', 'width'=>'1.88in',
                    'y-align'=>'center',
                  ));
                    $lay->pushFont('Helvetica', 10);
                      $lay->container('TextLines');
                        $lay->text($row['name']);
                      $lay->close();
                      $lay->container('TextLines');
                        $lay->text($row['classification']." ".$row['school_grade']);
                      $lay->close();
                    $lay->popFont();
                  $lay->close();
                $lay->close();
                $lay->container('Column', array(
                  'height'=>'0.5in',
                  'y-align'=>'top',
                ));
                  $lay->container('TextLine', array('margin-left'=>'0.25in'));
                    $lay->pushFont('Courier', 10);
                      $lay->text(strtoupper($row['barcode_nmbr']));
                    $lay->popFont();
                  $lay->close();
                  // Do not decrease left margin for barcode, scanner needs quiet zone
                  $lay->container('TextLine', array('height'=>'0.33in', 'margin-left'=>'0.25in'));
                    $lay->pushFont('Code39JK', 36);
                      $lay->text('*'.strtoupper($row['barcode_nmbr']).'*');
                    $lay->popFont();
                  $lay->close();
                $lay->close();
              $lay->close();
            }
          $lay->close();
        $lay->close();
      $lay->close();
    $lay->close();
  }
}
