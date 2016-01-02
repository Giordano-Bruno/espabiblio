<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

// A4 3x7 Avery L7160

require_once('../classes/Lay.php');

class Layout_labels_a4_3x7 {
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
    $lay = new Lay('A4');
      $lay->container('Columns', array(
        'margin-top'=>'15.15mm', 'margin-bottom'=>'15.10mm',
        'margin-left'=>'6mm', 'margin-right'=>'5mm',
      ));
        $lay->container('Lines');
          $lay->container('Columns');
            list(, $skip) = $this->p->getFirst('skip');
            for ($i = 0; $i < $skip; $i++) {
              $lay->container('Column', array(
                'height'=>'38.1mm', 'width'=>'66mm',
              ));
              $lay->close();
            }
            while ($row = $rpt->each()) {
              $lay->container('Column', array(
                'height'=>'38.1mm', 'width'=>'66mm',
                'margin-top'=>'3mm', 'margin-bottom'=>'3mm',
                'margin-left'=>'3mm', 'margin-right'=>'5.25mm',
              ));
                $lay->container('TextLine', array('x-align'=>'center', 'height'=>'8.5mm'));
                  $lay->pushFont('Code39JK', 36);
                    $lay->text('*'.strtoupper($row['barcode_nmbr']).'*');
                  $lay->popFont();
                $lay->close();
                $lay->container('TextLine', array('x-align'=>'center'));
                  $lay->pushFont('Courier', 10);
                    $lay->text(strtoupper($row['barcode_nmbr']));
                  $lay->popFont();
                $lay->close();
                $lay->pushFont('Helvetica', 9);
                $lay->container('TextLine');
                  if (strlen($row['title']) > 40) {
                    $row['title'] = substr($row['title'], 0, 40)."...";
                  }
                  $lay->text($row['title']);
                $lay->close();
                for ($i = 0 ; $i < count($row['marcfields']) ; $i++) {
                  // Accompanying material (NR)
                  // 0.6.x probably can't do competely accurate Physical Descriptions, but
                  // this works OK for unrepeated tag 300, accompanying stuff in subfield e
                  // and AACR 2 records formulated according to ISBD principles.
                  // http://www.loc.gov/marc/bibliographic/bd300.html
                  if ($row['marcfields'][$i]["tag"] == '300' && $row['marcfields'][$i]["subfield_cd"] == 'e') {
                    $lay->container('TextLine');
                      $lay->pushFont('Helvetica-Bold', 9);
                        $lay->text("+ ".$row['marcfields'][$i]["field_data"]);
                      $lay->popFont();
                    $lay->close();
                  }
                  // Target audience note (R)
                  elseif ($row['marcfields'][$i]["tag"] == '521' && $row['marcfields'][$i]["subfield_cd"] == 'a') {
                    $subfield[] = $row['marcfields'][$i]["field_data"];
                  }
                }
                if (is_array($subfield)) {
                  $lay->container('TextLines');
                    // Add (repeated) subfield to container, assume punctuation in subfield
                    $lay->text(implode(" ", $subfield));
                  $lay->close();
                  unset($subfield);
                }
                $lay->popFont();
              $lay->close();
            }
          $lay->close();
        $lay->close();
      $lay->close();
    $lay->close();
  }
}

?>
