<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

// Card A4 2x4 Avery L7418

require_once('../classes/Lay.php');

class Layout_cards_a4_2x4 {
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
    $lay = new Lay('A4');
      $lay->container('Columns', array(
        'margin-top'=>'38.5mm', 'margin-bottom'=>'38.4mm',
        'margin-left'=>'19mm', 'margin-right'=>'18.5mm',
      ));
        $lay->container('Lines');
          $lay->container('Columns');
            list(, $skip) = $this->p->getFirst('skip');
            for ($i = 0; $i < $skip; $i++) {
              $lay->container('Column', array(
                'height'=>'55mm', 'width'=>'86mm',
              ));
              $lay->close();
            }
            while ($row = $rpt->each()) {
              $lay->container('Column', array(
                'height'=>'55mm', 'width'=>'86mm',
                'margin-top'=>'3mm', 'margin-bottom'=>'3mm',
                'margin-left'=>'3mm', 'margin-right'=>'3mm',
              ));
                $lay->container('Column', array(
                  'height'=>'34mm',
                  'y-align'=>'top',
                ));
                  $lay->container('TextLine');
                    $lay->pushFont('Times-Bold', 10);
                      $lay->text(OBIB_LIBRARY_NAME);
                    $lay->popFont();
                  $lay->close();
                  $lay->container('Column', array(
                    'margin-left'=>'1.5mm', 'width'=>'47.5mm',
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
                  'height'=>'15mm',
                  'y-align'=>'top',
                ));
                  $lay->container('TextLine', array('margin-left'=>'6mm'));
                    $lay->pushFont('Courier', 10);
                      $lay->text(strtoupper($row['member_bcode']));
                    $lay->popFont();
                  $lay->close();
                  $lay->container('TextLine', array('height'=>'9mm', 'margin-left'=>'6mm'));
                    $lay->pushFont('Code39JK', 36);
                      $lay->text('*'.strtoupper($row['member_bcode']).'*');
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

?>
