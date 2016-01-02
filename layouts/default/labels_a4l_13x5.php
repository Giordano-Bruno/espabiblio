<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

// Spine A4 landscape 13x5 Avery L7651

require_once('../classes/Lay.php');

class Layout_labels_a4l_13x5 {
  var $p;
  function paramDefs() {
    return array(
      array('string', 'skip', array('title'=>'Skip Labels', 'default'=>'0')),
    );
  }
  function init($params) {
    $this->p = $params;
  }
  function render($rpt) {
    $lay = new Lay('A4', 'landscape');
    $lay->pushFont('Helvetica-Bold', 11);
      $lay->container('Columns', array(
        'margin-top'=>'3.5mm', 'margin-bottom'=>'3.4mm',
        'margin-left'=>'10.7mm', 'margin-right'=>'10.6mm',
      ));
        $lay->container('Lines');
          $lay->container('Columns');
            list(, $skip) = $this->p->getFirst('skip');
            for ($i = 0; $i < $skip; $i++) {
              $lay->container('Column', array(
                'height'=>'40.6mm', 'width'=>'21.2mm',
              ));
              $lay->close();
            }
            while ($row = $rpt->each()) {
              $lay->container('Column', array(
                'height'=>'40.6mm', 'width'=>'21.2mm',
                'margin-top'=>'1.5mm', 'margin-bottom'=>'5mm',
                'margin-left'=>'1.5mm', 'margin-right'=>'1.5mm',
                'y-align'=>'bottom', 'y-spacing'=>'3mm',
                'x-align'=>'center',
              ));
                if (substr($row['callno'], 1, 1) == " " or substr($row['callno'], 1, 1) == "-") {
                  $lay->pushFont('Helvetica-Bold', 30);
                    $lay->text(substr($row['callno'], 0, 1));
                    $row['callno'] = substr($row['callno'], 2);
                  $lay->popFont();
                }
                $lay->text($row['callno']);
              $lay->close();
            }
          $lay->close();
        $lay->close();
      $lay->close();
    $lay->popFont();
    $lay->close();
  }
}

?>
