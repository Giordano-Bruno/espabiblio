<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  require_once("../classes/Date.php");
  require_once("../classes/Form.php");
  require_once("../classes/CircQuery.php");
  require_once("../classes/Localize.php");
  
  $tab = 'circulation';
  $nav = "offline";

  $focus_form_name = "offline_circ";
  $focus_form_field = "date";

  require_once("../shared/logincheck.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
  
  function run_batch($lines, $date){
    global $loc;
    $circQ = new CircQuery();
    $errors = array();
    while(count($lines)) {
      $command = trim(array_shift($lines));
      if($command == '')
        continue;
      if($command{0} != '%')
        return array($loc->getText("Bad upload file: Expected a command code, but didn't get one"));
      $args = array();
      while (isset($lines[0]) and $lines[0]{0} != '%')
        $args[] = trim(array_shift($lines));
      switch($command){
      case '%CHECKOUT%':
        if(!isset($args[0]))
          break;
        $mbcode = array_shift($args);
        foreach($args as $bcode){
          $err = $circQ->checkout_as_of_e($mbcode, $bcode, $date);
          if($err !== NULL)
            $errors[] = $loc->getText("Couldn't check out %item% to %member%: %error%",
                                      array('item'=>$bcode, 'member'=>$mbcode, 'error'=>$err->toStr()));
        }
        break;
      case '%CHECKIN%':
        foreach($args as $bcode){
          list($info, $err) = $circQ->shelving_cart_e($bcode, $date, true);
          if($err)
            $errors[] = $loc->getText("Couldn't check in %item%: %error%",
                                      array('item'=>$bcode, 'error'=>$err->toStr()));
        }
        break;
      default:
        $errors[] = $loc->getText("Unrecognized command code: %cmd%", array('cmd'=>H($command)));
        break;
      }
    }
    return $errors;
  }
  function layout_links() {
    global $loc;
    echo '<a href="../shared/layout.php?name=offline_commands">'.$loc->getText('Command Sheet').'</a>';
  }

  $form = array(
    'title'=>$loc->getText("Upload Offline Circulation"),
    'name'=>'offline_circ',
    'action'=>'../circ/offline.php',
    'enctype'=>'multipart/form-data',
    'submit'=>$loc->getText('Upload'),
    'fields'=>array(
      array('name'=>'date', 'title'=>$loc->getText('Date:'), 'type'=>'date', 'default'=>'today'),
      array('name'=>'command_file', 'title'=>$loc->getText('Command File:'), 'type'=>'file', 'required'=>1),
    ),
  );
  list($values, $errs) = Form::getCgi_el($form['fields']);
  if(!$values['_posted'] or $errs){
    include_once("../shared/header.php");
    if (isset($_REQUEST['msg'])) {
      echo '<font class="error">'.H($_REQUEST['msg']).'</font>';
    }
    $form['values'] = $values;
    $form['errors'] = $errs;
    Form::display($form);
    layout_links();
    include_once("../shared/footer.php");
    exit();
  }
  
  $lines = file($values['command_file']['tmp_name']);
  if($lines === false)
    $errors = array("Couldn't read file: ".$values['command_file']['tmp_name']);
  else
    $errors = run_batch($lines, $values['date']);
  if($errors) {
    include_once("../shared/header.php");
    echo '<font class="error">'.$loc->getText("Actions which did not produce an error have completed. Think carefully before uploading the same file again, or some circulations may be recorded twice.").'</font>';
    echo '<div class="errorbox">';
    echo '<span class="errorhdr">'.$loc->getText('Errors').'</span>';
    echo '<ul>';
    foreach ($errors as $e) {
      echo '<li>'.H($e).'</li>';
    }
    echo '</ul></div>';
    Form::display($form);
    layout_links();
    include_once("../shared/footer.php");
    exit();
  } else
    header("Location: ../circ/offline.php?msg=".U($loc->getText("Offline Upload Successful.")));
