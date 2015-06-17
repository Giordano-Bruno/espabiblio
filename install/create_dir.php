<?php
/*

  $tab = "install";//jalg para uso de multi-idioma
//  $locales = "../locale/".$_POST['locale']."/";//jalg para uso de multi-idioma
  $locale = $_POST['locale'];//jalg para uso de multi-idioma
  
  if (isset($_POST['locale'])) {
	if (!preg_match('/^[-_a-zA-Z0-9]+$/', $_POST['locale'])) {
	  Fatal::internalError("Bad locale name.");
    }
    $locale = $_POST['locale'];
  }


//  $doing_install = true;
  require_once("../shared/common.php");
//  require_once("../classes/UpgradeQuery.php");
//  include("../install/header.php");

  require_once("../classes/Localize.php");//jalg para uso de multi-idioma
  $loc = new Localize($locale,$tab);//jalg para uso de multi-idioma
  
*/

  // Create directories for book cover / cover lookup
  $media_path = @mkdir("../" . MEDIA_PATH, 0777, TRUE); // Directories for keeping materials nultimedia jalg
  $cover_path = @mkdir("../" . COVER_PATH, 0777, TRUE); // Directories for keeping portadas jalg
  $tmp_path = @mkdir("../" . COVER_PATH_TMP, 0777, TRUE);  // Directories for keeping temporales jalg
  $foto_path = @mkdir("../" . FOTO_PATH, 0777, TRUE); //add jalg para fotos member
  $autor_path = @mkdir("../" . AUTOR_PATH, 0777, TRUE); //add jalg para fotos de autores
  $digi_path = @mkdir("../" . DIGI_PATH, 0777, TRUE); //add jalg para materiales digitales

  if ($media_path) {
    echo  $loc->getText("form_mkdir_create") . $loc->getText("form_media") . '<br/>';
  }
  else if (is_dir('../' . MEDIA_PATH)) {
    if (is_writable('../' . MEDIA_PATH)) {
      echo $loc->getText("form_mkdir_Ok") . $loc->getText("form_media") . '<br/>';
    }
    else {
      $force_chmod = @chmod('../' . MEDIA_PATH, 0777);
      if ($force_chmod) {
        echo $loc->getText("form_mkdir_Force") . $loc->getText("form_media") . '<br/>';
      }
      else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_media") . MEDIA_PATH . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
        $isFailedSomeDir = TRUE;
      }
    }
  }
  else {
    echo '<span style="color: red">' . $loc->getText("form_mkdir_create_bad") .MEDIA_PATH . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
    $isFailedSomeDir = TRUE;
  }
  
  if ($cover_path) {
    echo  $loc->getText("form_mkdir_create") .   $loc->getText("form_cover") . '<br/>';
  }
  else if (is_dir('../' . COVER_PATH)) {
    if (is_writable('../' . COVER_PATH)) {
      echo $loc->getText("form_mkdir_Ok") . $loc->getText("form_cover") . '<br/>';
    }
    else {
      $force_chmod = @chmod('../' . COVER_PATH, 0777);
      if ($force_chmod) {
        echo $loc->getText("form_mkdir_Force") . $loc->getText("form_cover") . '<br/>';
      }
      else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_cover") . COVER_PATH . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
        $isFailedSomeDir = TRUE;
      }
    }
  }
  else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_cover") . COVER_PATH . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
    $isFailedSomeDir = TRUE;
  }
  
  if ($tmp_path) {
    echo  $loc->getText("form_mkdir_create") .   $loc->getText("form_tmp") . '<br/>';
  }
  else if (is_dir('../' . COVER_PATH_TMP)) {
    if (is_writable('../' . COVER_PATH_TMP)) {
      echo $loc->getText("form_mkdir_Ok") . $loc->getText("form_tmp") . '<br/>';
    }
    else {
      $force_chmod = @chmod('../' . COVER_PATH_TMP, 0777);
      if ($force_chmod) {
        echo $loc->getText("form_mkdir_Force") . $loc->getText("form_tmp") . '<br/>';
      }
      else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_tmp") . COVER_PATH_TMP . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
        $isFailedSomeDir = TRUE;
      }
    }
  }
  else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_tmp") . COVER_PATH_TMP . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
    $isFailedSomeDir = TRUE;
  }

//add jalg para fotos member
  if ($foto_path) {
    echo  $loc->getText("form_mkdir_create") .   $loc->getText("form_foto") . '<br/>';
  }
  else if (is_dir('../' . FOTO_PATH)) {
    if (is_writable('../' . FOTO_PATH)) {
      echo $loc->getText("form_mkdir_Ok") . $loc->getText("form_foto") . '<br/>';
    }
    else {
      $force_chmod = @chmod('../' . FOTO_PATH, 0777);
      if ($force_chmod) {
        echo $loc->getText("form_mkdir_Force") . $loc->getText("form_foto") . '<br/>';
      }
      else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_foto") . FOTO_PATH . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
        $isFailedSomeDir = TRUE;
      }
    }
  }
  else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_foto") . FOTO_PATH . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
    $isFailedSomeDir = TRUE;
  }
//add jalg para fotos member

//add jalg para fotos autores
  if ($autor_path) {
    echo  $loc->getText("form_mkdir_create") .   $loc->getText("form_autor") . '<br/>';
  }
  else if (is_dir('../' . AUTOR_PATH)) {
    if (is_writable('../' . AUTOR_PATH)) {
      echo $loc->getText("form_mkdir_Ok") . $loc->getText("form_autor") . '<br/>';
    }
    else {
      $force_chmod = @chmod('../' . AUTOR_PATH, 0777);
      if ($force_chmod) {
        echo $loc->getText("form_mkdir_Force") . $loc->getText("form_autor") . '<br/>';
      }
      else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_autor") . AUTOR_PATH . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
        $isFailedSomeDir = TRUE;
      }
    }
  }
  else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_autor") . AUTOR_PATH . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
    $isFailedSomeDir = TRUE;
  }
//add jalg para fotos autores

 //add jalg para materiales digitales
  
  if ($digi_path) {
    echo  $loc->getText("form_mkdir_create") .   $loc->getText("form_digi") . '<br/>';
  }
  else if (is_dir('../' . DIGI_PATH)) {
    if (is_writable('../' . DIGI_PATH)) {
      echo $loc->getText("form_mkdir_Ok") . $loc->getText("form_digi") . '<br/>';
    }
    else {
      $force_chmod = @chmod('../' . DIGI_PATH, 0777);
      if ($force_chmod) {
        echo $loc->getText("form_mkdir_Force") . $loc->getText("form_digi") . '<br/>';
      }
      else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_digi") . DIGI_PATH . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
        $isFailedSomeDir = TRUE;
      }
    }
  }
  else {
        echo '<span style="color: red">' . $loc->getText("form_mkdir_bad") . $loc->getText("form_digi") . DIGI_PATH . $loc->getText("form_mkdir_bad_1") . '</span><br/>';
    $isFailedSomeDir = TRUE;
  }
 //add jalg para materiales digitales
  if ($isFailedSomeDir) {
    echo '<hr /> <span style="color: red; font-weight: bold;">' .  $loc->getText("form_mkdir_install_bad")  . '<a href="./index.php">' . $loc->getText("form_mkdir_install_run") . '</a> </span>';
    include("../install/footer.php");
    exit();
  }


/* de update
    $cover_path = @mkdir("../" . COVER_PATH, 0777, TRUE);
    $tmp_path = @mkdir("../" . COVER_PATH_TMP, 0777, TRUE);
    $notices = array();
    $error = '';
    if ($cover_path) {
      $notices[] = 'Create book cover directory successfully.';
    }
    else if (is_dir('../' . COVER_PATH)) {
      if (is_writable('../' . COVER_PATH)) {
        $notices[] = 'Book cover directory already exists & work properly.';
      }
      else {
        $force_chmod = @chmod('../' . COVER_PATH, 0777);
        if ($force_chmod) {
          $notices[] = 'Book cover directory is exists, force read/write access to exists one.';
        }
        else {
          $error .= 'Could not change access to exist cover directory! Please change ' . COVER_PATH . ' directory permission (chmod) to full access (777) manually.<br />';
        }
      }
    }
    else {
      $error .= 'Could not create book cover directory! Please create new ' . COVER_PATH . ' directory & change permission (chmod) to full access (777) manually.<br />';
    }
    
    if ($tmp_path) {
      $notices[] = 'Create temporary cover lookup directory successfully.';
    }
    else if (is_dir('../' . COVER_PATH_TMP)) {
      if (is_writable('../' . COVER_PATH_TMP)) {
        $notices[] = 'Temporay cover lookup directory already exists & work properly.';
      }
      else {
        $force_chmod = @chmod('../' . COVER_PATH_TMP, 0777);
        if ($force_chmod) {
          $notices[] = 'Temporary cover lookup directory is exists, force read/write access to exists one.';
        }
        else {
          $error .= 'Could not change access to exist temporary cover lookup directory! Please change ' . COVER_PATH_TMP . ' directory permission (chmod) to full access (777) manually.<br />';
        }
      }
    }
    else {
      $error .= 'Could not create temporary cover lookup directory! Please create new ' . COVER_PATH_TMP . ' directory & change permission (chmod) to full access (777) manually.<br />';
    }
    
    if (!empty($error)) {
      return array(NULL, new Error($error));
    }
*/
