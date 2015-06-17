<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  require_once("../functions/fileIOFuncs.php");
  
  #****************************************************************************
  #*  Checking for get vars.  Go back to form if none found.
  #****************************************************************************
  if (count($_GET) == 0) {
    header("Location: ../catalog/index.php");
    exit();
  }

  #****************************************************************************
  #*  Checking for tab name to show OPAC look and feel if searching from OPAC
  #****************************************************************************
  if (isset($_GET["tab"])) {
    $tab = $_GET["tab"];
  } else {
    $tab = "cataloging";
  }
  
  $isOpac = $tab == "opac";

  $nav = "view";
  if (!$isOpac) {
    require_once("../shared/logincheck.php");
  }
  require_once("../classes/Biblio.php");
  require_once("../classes/BiblioQuery.php");
  require_once("../classes/BiblioCopy.php");
  require_once("../classes/BiblioCopyQuery.php");
  require_once("../classes/DmQuery.php");
  require_once("../classes/UsmarcTagDm.php");
  require_once("../classes/UsmarcTagDmQuery.php");
  require_once("../classes/UsmarcSubfieldDm.php");
  require_once("../classes/UsmarcSubfieldDmQuery.php");
  require_once("../functions/marcFuncs.php");
  require_once("../functions/cleanString.php"); //Añadida por Bruj0 para limpiar cadenas con caracteres extraños
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,"shared");

  #****************************************************************************
  #*  Retrieving get var
  #****************************************************************************
  $bibid = $_GET["bibid"];
  if (isset($_GET["msg"])) {
    $msg = "<font class=\"error\">".H($_GET["msg"])."</font><br><br>";
  } else {
    $msg = "";
  }

  #****************************************************************************
  #*  Loading a few domain tables into associative arrays
  #****************************************************************************
  $dmQ = new DmQuery();
  $dmQ->connect();
  $collectionDm = $dmQ->getAssoc("collection_dm");
  $materialTypeDm = $dmQ->getAssoc("material_type_dm");
  $biblioStatusDm = $dmQ->getAssoc("biblio_status_dm");
  $dmQ->close();

  $marcTagDmQ = new UsmarcTagDmQuery();
  $marcTagDmQ->connect();
  if ($marcTagDmQ->errorOccurred()) {
    $marcTagDmQ->close();
    displayErrorPage($marcTagDmQ);
  }
  $marcTagDmQ->execSelect();
  if ($marcTagDmQ->errorOccurred()) {
    $marcTagDmQ->close();
    displayErrorPage($marcTagDmQ);
  }
  $marcTags = $marcTagDmQ->fetchRows();
  $marcTagDmQ->close();

  $marcSubfldDmQ = new UsmarcSubfieldDmQuery();
  $marcSubfldDmQ->connect();
  if ($marcSubfldDmQ->errorOccurred()) {
    $marcSubfldDmQ->close();
    displayErrorPage($marcSubfldDmQ);
  }
  $marcSubfldDmQ->execSelect();
  if ($marcSubfldDmQ->errorOccurred()) {
    $marcSubfldDmQ->close();
    displayErrorPage($marcSubfldDmQ);
  }
  $marcSubflds = $marcSubfldDmQ->fetchRows();
  $marcSubfldDmQ->close();

  #****************************************************************************
  #*  Search database
  #****************************************************************************
  $biblioQ = new BiblioQuery();
  $biblioQ->connect();
  if ($biblioQ->errorOccurred()) {
    $biblioQ->close();
    displayErrorPage($biblioQ);
  }
  if (!$biblio = $biblioQ->doQuery($bibid)) {
    $biblioQ->close();
    displayErrorPage($biblioQ);
  }
  $biblioFlds = $biblio->getBiblioFields();

  #**************************************************************************
  #*  Show bibliography info.
  #**************************************************************************
  if ($tab == "opac") {
    require_once("../opac/header_opac.php");
  } else {
    require_once("../shared/header.php");
  }
?>

<?php echo $msg ?>

<?php
	$doc_title = '';
	$doc_author = '';
	$doc_publisher = '';
	$doc_pubplace = '';
	$doc_pubyear = '';
	$doc_isbn = '';

if (isset($biblioFlds["245a"])) 
  $doc_title = $biblioFlds["245a"]->getFieldData();
if (isset($biblioFlds["245b"])) 
  $doc_title .= ': ' . $biblioFlds["245b"]->getFieldData();

  $doc_title = trim($doc_title);

if (isset($biblioFlds["100a"])) 
  $doc_author = trim(str_replace('.', '', $biblioFlds["100a"]->getFieldData()));

if (isset($biblioFlds["260b"])) 
  $doc_publisher = trim(str_replace(array(':',',',';'), '', $biblioFlds["260b"]->getFieldData()));
if (isset($biblioFlds["260a"])) 
  $doc_pubplace = trim(str_replace(array(':',',',';'), '', $biblioFlds["260a"]->getFieldData()));
if (isset($biblioFlds["260c"])) 
  $doc_pubyear = trim(str_replace(array('c','.'), '', $biblioFlds["260c"]->getFieldData()));

if (isset($biblioFlds["020a"])) 
  $doc_isbn = trim($biblioFlds["020a"]->getFieldData());

// Edition
if (isset($biblioFlds["0822"])) 
  $doc_edition = trim($biblioFlds["0822"]->getFieldData());
  
// Short Title
if (isset($biblioFlds["247a"])) 
  $doc_stitle = trim($biblioFlds["247a"]->getFieldData());

if (strpos($doc_author, ',')) {
  $author_ex = explode(',', $doc_author);
  $doc_author_fname = trim($author_ex[1]);
  $doc_author_lname = trim($author_ex[0]);
}
else {
  $author_ex = explode(' ', $doc_author);
  $doc_author_fname = trim($author_ex[0]);
  $doc_author_lname = trim($author_ex[1]);
}

// OpenURL support. Movidos a archivo en zotero, es para compatibilidad con aplicación zotero.
// joanlaga 2014 sep
require_once("../zotero/zotero.php");

?>

<?php    // *  Insertado por Bruj0 para la carga del lightbox  ?>
   <link rel="stylesheet" type="text/css" href="../css/sample.css" media="screen,tv" title="default" />
   <link rel="stylesheet" type="text/css" href="../css/lightbox.css" media="screen,tv" />
   
   <script type="text/javascript" charset="UTF-8" src="../scripts/lightbox_plus.js"></script>
   
<?php    // *  Insertado por Bruj0 para la carga del lightbox fin  */ ?>

<table class="primary">
  <tr>
    <th align="left" colspan="2" nowrap="yes">
      <?php echo $loc->getText("biblioViewTble1Hdr"); ?>:
    </th>
  </tr>
  <tr>  
    <td nowrap="true" class="primary" valign="top">
      <?php echo $loc->getText("biblioViewMaterialType"); ?>:
    </td>
    <td valign="top" class="primary">
      <?php echo H($materialTypeDm[$biblio->getMaterialCd()]);?>
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary" valign="top">
      <?php echo $loc->getText("biblioViewCollection"); ?>:
    </td>
    <td valign="top" class="primary">
      <?php echo H($collectionDm[$biblio->getCollectionCd()]);?>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php echo $loc->getText("biblioViewCallNmbr"); ?>:
    </td>
    <td valign="top" class="primary">
      <?php echo H($biblio->getCallNmbr1()); ?>
      <?php echo H($biblio->getCallNmbr2()); ?>
      <?php echo H($biblio->getCallNmbr3()); ?>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php printUsmarcText($tab,245,"a",$marcTags, $marcSubflds, FALSE, $isOpac);?>:
    </td>
    <td valign="top" class="primary">
      <?php if (isset($biblioFlds["245a"])) echo H($biblioFlds["245a"]->getFieldData());?>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php printUsmarcText($tab,245,"b",$marcTags, $marcSubflds, FALSE, $isOpac);?>:
    </td>
    <td valign="top" class="primary">
      <?php if (isset($biblioFlds["245b"])) echo H($biblioFlds["245b"]->getFieldData());?>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      <?php printUsmarcText($tab,100,"a",$marcTags, $marcSubflds, FALSE, $isOpac);?>:
    </td>
    <td valign="top" class="primary">
      <?php 
      if (isset($biblioFlds["100a"])) {
        $val = H($biblioFlds["100a"]->getFieldData());
//jalg modificado para busquedas aisladas de autores entre administrador y opac 10/jul/2013
        echo '<a href="../shared/biblio_search.php?tag=100a&words=' . $val . '&amp;tab=' . HURL($tab) . '">' . $val . '</a>';
//jalg modificado para busquedas aisladas de autores entre administrador y opac 10/jul/2013
      }
      ?>
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary" valign="top">
      <?php printUsmarcText($tab,245,"c",$marcTags, $marcSubflds, FALSE, $isOpac);?>:
    </td>
    <td valign="top" class="primary">
      <?php if (isset($biblioFlds["245c"])) echo H($biblioFlds["245c"]->getFieldData());?>
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary" valign="top">
      <?php echo $loc->getText("biblioViewOpacFlg"); ?>:
    </td>
    <td valign="top" class="primary">
      <?php if ($biblio->showInOpac()) {
        echo $loc->getText("biblioViewYes");
      } else {
        echo $loc->getText("biblioViewNo");
      }?>
    </td>
  </tr>
</table>

<br />

<?php
  #****************************************************************************
  #*  Show copy information
  #****************************************************************************
  if ($tab == "cataloging") { ?>
    <a href="../catalog/biblio_copy_new_form.php?bibid=<?php echo HURL($bibid);?>&reset=Y">
      <?php echo $loc->getText("biblioViewNewCopy"); ?></a><br/>
    <?php
    $copyCols=7;
  } else {
    $copyCols=5;
  }

  $copyQ = new BiblioCopyQuery();
  $copyQ->connect();
  if ($copyQ->errorOccurred()) {
    $copyQ->close();
    displayErrorPage($copyQ);
  }
  if (!$copy = $copyQ->execSelect($bibid)) {
    $copyQ->close();
    displayErrorPage($copyQ);
  }
?>

<h1><?php echo $loc->getText("biblioViewTble2Hdr"); ?>:</h1>
<table class="primary">
  <tr>
    <?php if ($tab == "cataloging") { ?>
      <th colspan="2" nowrap="yes">
        <?php echo $loc->getText("biblioViewTble2ColFunc"); ?>
      </th>
    <?php } ?>
    <th align="left" nowrap="yes">
      <?php echo $loc->getText("biblioViewTble2Col1"); ?>
    </th>
    <th align="left" nowrap="yes">
      <?php echo $loc->getText("biblioViewTble2Col2"); ?>
    </th>
    <th align="left" nowrap="yes">
      <?php echo $loc->getText("biblioViewTble2Col3"); ?>
    </th>
    <th align="left" nowrap="yes">
      <?php echo $loc->getText("biblioViewTble2Col4"); ?>
    </th>
    <th align="left" nowrap="yes">
      <?php echo $loc->getText("biblioViewTble2Col5"); ?>
    </th>
  </tr>
  <?php
    if ($copyQ->getRowCount() == 0) { ?>
      <tr>
        <td valign="top" colspan="<?php echo H($copyCols); ?>" class="primary" colspan="2">
          <?php echo $loc->getText("biblioViewNoCopies"); ?>
        </td>
      </tr>      
    <?php } else {
      $row_class = "primary";
      while ($copy = $copyQ->fetchCopy()) {
  ?>
    <tr>
      <?php if ($tab == "cataloging") { ?>
        <td valign="top" class="<?php echo H($row_class);?>">
          <a href="../catalog/biblio_copy_edit_form.php?bibid=<?php echo HURL($copy->getBibid());?>&amp;copyid=<?php echo H($copy->getCopyid());?>" class="<?php echo H($row_class);?>"><?php echo $loc->getText("biblioViewTble2Coledit"); ?></a>
        </td>
        <td valign="top" class="<?php echo H($row_class);?>">
          <a href="../catalog/biblio_copy_del_confirm.php?bibid=<?php echo HURL($copy->getBibid());?>&amp;copyid=<?php echo HURL($copy->getCopyid());?>" class="<?php echo H($row_class);?>"><?php echo $loc->getText("biblioViewTble2Coldel"); ?></a>
        </td>
      <?php } ?>
      <td valign="top" class="<?php echo H($row_class);?>">
        <?php echo H($copy->getBarcodeNmbr()); ?>
      </td>
      <td valign="top" class="<?php echo H($row_class);?>">
        <?php echo H($copy->getCopyDesc()); ?>
      </td>
      <td valign="top" class="<?php echo H($row_class);?>">
        <?php echo H($biblioStatusDm[$copy->getStatusCd()]); ?>
      </td>
      <td valign="top" class="<?php echo H($row_class);?>">
        <?php echo H($copy->getStatusBeginDt()); ?>
      </td>
      <td valign="top" class="<?php echo H($row_class);?>">
        <?php echo H($copy->getDueBackDt()); ?>
      </td>
    </tr>      
  <?php
        # swap row color
        if ($row_class == "primary") {
          $row_class = "alt1";
        } else {
          $row_class = "primary";
        }
      }
      $copyQ->close();
    } ?>
</table>

<br />
<table class="primary">
  <tr>
    <th align="left" colspan="2" nowrap="yes">
      <?php echo $loc->getText("biblioViewTble3Hdr"); ?>:
    </th>
  </tr>
  <?php
// 
 /*
echo "<pre>";
print_r($biblioFlds);  
  echo "</pre>";
  */
//  
    $displayCount = 0;
    foreach ($biblioFlds as $key => $field) {
      if (($field->getFieldData() != "") 
        && ($key != "245a")
        && ($key != "245b")
        && ($key != "245c")
        && ($key != "902c")
        && ($key != "100a")
) {
        $displayCount = $displayCount + 1;
  ?>
        <tr>
          <td valign="top" class="primary">
            <?php printUsmarcText($tab,$field->getTag(),$field->getSubfieldCd(),$marcTags, $marcSubflds, TRUE, $isOpac);?>:
          </td>
          <td valign="top" class="primary">
            <?php
            $val = H($field->getFieldData()); 
            if (in_array(substr($key, 0, 1), array('1', '4', '6', '7'))) {
              echo '<a href="../shared/biblio_search.php?tag=' . $key . '&words=' . $val . '&amp;tab=' . HURL($tab) . '">' . $val . '</a>' ;
            }
            else {
              echo $val;
            }
            ?>
          </td>
        </tr>      
  <?php
      }
    }
    if ($displayCount == 0) {
  ?>
        <tr>
          <td valign="top" class="primary" colspan="2">
            <?php echo $loc->getText("biblioViewNoAddInfo"); ?>
          </td>
        </tr>      
  <?php
    }
  ?>
</table>

<?php
#****************************************************************************
#* Agregado por jalg para mostrarimagenes autor si esta definida joanlaga@hotmail.com
#****************************************************************************
if ( isset($biblioFlds["902c"]) ) { ?>
 <br />
 <table class="primary">
   <tr>
     <th align="left" colspan="2" nowrap="yes">
       <?php echo $loc->getText("biblioViewPictureAutor") ; ?>:
     </th>
   </tr>
   <tr>   
     <td nowrap="true" class="primary" valign="top">
       <?php printUsmarcText($tab,902,"c",$marcTags, $marcSubflds, FALSE);
              echo  " : <br/><br/>" . $biblioFlds["100a"]->getFieldData() ; ?>
     </td>
     <td valign="top" class="primary">
       <img src="<?php 
       if (file_exists( "../" . AUTOR_PATH . "/" . $biblioFlds["902c"]->getFieldData())){
			       echo "../" . AUTOR_PATH . "/" . $biblioFlds["902c"]->getFieldData();
       }else {
			      echo   $biblioFlds["902c"]->getFieldData();
       }
       ?>" width="250">
     </td>
   </tr>
 </table>
 <br />
       <?php echo $loc->getText("biblioViewPictureAutorNote"); ?>:
<?php
      } else {
   if ( isset($biblioFlds["100a"]) ) { //JALG 2-2015 por si no hay autor no marque error      	 
	    $ruta_autor= "../" . AUTOR_PATH . "/" . H($biblioFlds["100a"]->getFieldData());
	    if (is_file($ruta_autor.".jpg") or is_file($ruta_autor.".gif") or is_file($ruta_autor.".png") ) {
?>
 <br/>
 <table class="primary">
   <tr>
     <th align="left" colspan="2" nowrap="yes">
       <?php echo $loc->getText("biblioViewPictureAutor"); ?>:
     </th>
   </tr>
   <tr>   
     <td nowrap="true" class="primary" valign="top">
       <?php echo "<br />" . $biblioFlds["100a"]->getFieldData() ; ?>:
     </td>
     <td valign="top" class="primary">
       <img src= " 
       <?php 
	      if (is_file($ruta_autor.".jpg")) {
   	                  echo $ruta_autor.".jpg";
	   	 }else{
	      	if (is_file($ruta_autor.".gif")) {
   	      	            echo $ruta_autor.".gif";
	      	     }else{
					      if (is_file($ruta_autor.".png")) {
      	      	         echo $ruta_autor.".png";
         	  		}
	         }
         }
        ?>" width="350" border="1" align="bottom"  >
     </td>
   </tr>
 </table>

<?php  } else { ?>



<?php  
}
}
}
 # fix falta concentrar un método para encontrar archivos sin definir autores cuando se trabaja desde la nube ?>


<?php
#****************************************************************************
#*  muestra las imágenes de la portada si esta definida
#* Agregado por jalg para mostrarimagenes de portadas joanlaga@hotmail.com
#****************************************************************************
 if (isset($biblioFlds["902a"])) { ?>
 <br />
 <br />
 <table class="primary">
   <tr>
     <th align="left" colspan="2" nowrap="yes">
       <?php echo $loc->getText("biblioViewPictureHeader"); ?>:
     </th>
   </tr>
   <tr>   
     <td nowrap="true" class="primary" valign="top">
       <?php printUsmarcText($tab,902,"a",$marcTags, $marcSubflds, FALSE);?>:
 </br>
     </td>
     <td valign="top" class="primary">
       <img src="<?php 
       
       if (file_exists("../" . COVER_PATH . "/" . $biblioFlds["902a"]->getFieldData())){
			echo "../" . COVER_PATH . "/" . $biblioFlds["902a"]->getFieldData();
       }else {
			echo $biblioFlds["902a"]->getFieldData();
       }
       ?>" width="250">
     </td>
   </tr>
 </table>
 </br>
<?php  } ?>
 </br>

<?php


#****************************************************************************
#*  muestra las imágenes de la portada si esta definida vía isbn desde servidor externo
#* Agregado por jalg para mostrar imágenes de portadas joanlaga@hotmail.com
#****************************************************************************
 if (isset($biblioFlds["020a"]) && substr(fileGetContents($isbn_Pic),0,6) !==  "GIF89a") { ?>
 <table class="primary">
   <tr>
     <th align="left" colspan="2" nowrap="yes">
       <?php echo $loc->getText("biblioViewPictureHeaderIsbn"); ?>:
     </th>

   </tr>
   <tr>   
     <td nowrap="true" class="primary" valign="center">
       <?php // printUsmarcText(902,"a",$marcTags, $marcSubflds, FALSE);?>:
     </td>
 </br>
<?php 
# Fix genrar condicionate para cuando no exite la imagen en el servidor externo.
$isbn_r =  cleanSpace($biblioFlds['020a']->getFieldData());
$isbn_Pic =  OBI_PORTADAS . $isbn_r . '-M.jpg';
//$file_Size =  filesize ($isbn_Pic);
//echo $isbn_Pic . "</br>"; 
//echo $file_Size;
?>
   <tr>
           <td rowspan="18" nowrap="true" class="primary" valign="top" > 
           <img src="<?php echo $isbn_Pic ; ?> " style= "margin-left:10px;padding:3px;border:solid 1px #000;border-radius:5px;" alt="<?php echo $isbn_Pic ; ?>" />
          </td>
          <td rowspan="18" nowrap="true" class="primary" valign="top" >
		          <?php echo $isbn_Pic . "</br>" . substr(fileGetContents($isbn_Pic),0,6) ; ?>
          </td>
   </tr>
 </table>
</br>
<?php   echo $loc->getText("biblioViewNoAddInfoIsbn");   } ?>
 </br>

<?php
#****************************************************************************
#*  muestra ruta del archivo digital si esta definido
#* Agregado por jalg para capacidad de archivos digitales joanlaga@hotmail.com
#****************************************************************************
 if (isset($biblioFlds["903a"])) { ?>
  <br />
 <table class="primary">
   <tr>
     <th align="left" colspan="3" nowrap="yes">
       <?php echo $loc->getText("biblioViewDigitalHeader"); ?>:
     </th>
   </tr>

   <tr>   
     <td nowrap="true" class="primary" valign="top">
       <?php printUsmarcText($tab,903,"a",$marcTags, $marcSubflds, FALSE);?>:
     </td>
     <td valign="top" class="primary">
       <a href="<?php
                      $filisb = "../" . DIGI_PATH . "/" .  $biblioFlds["903a"]->getFieldData();
              if (file_exists($filisb)){
										echo $filisb;
					  } else {
					  	 echo   $biblioFlds["903a"]->getFieldData(); //nube
 			  	} ?>" target="_blank" >
                <?php echo $biblioFlds["903a"]->getFieldData();?></a>
     </td>
   <tr>
   <td valign="top" class="primary">
       <?php echo $loc->getText("biblioViewDigitalNote"); ?> 
     </td>
   </tr>
 </table>
 <?php  } ?>

<?php require_once("../shared/footer.php"); ?>

<?php   

#### revisar par aintegrar


 // *  Insertado por Bruj0 para ver autor  ?>
<!--**************************************************************************
<table>
  <tr>
    <td valign="top">
    <table class="primary">
      <tr>
        <th align="left" nowrap="nowrap"> <strong><?php echo $loc->getText("biblioViewPictureAutor"); ?>:</strong> </th>
      </tr>
      <tr>
        <td align="center" valign="top" nowrap="nowrap">
        <br />
        <?php //Modificado por Bruj0 para mostrar imagen del Autor
		if(empty($val)){
			$val = ""; 
		}
		  $autor="../" . AUTOR_PATH . "/" . cleanString($val).".jpg";
		  if (file_exists($autor)){
		  	if ($thumbURL = make_thumbnail($autor, array('height' => 200))){ 
		  ?>
			  <a href="<?php echo $autor ?>" title="<?php echo $val ?>" rel="lightbox1" class="vertical"><img src="../phpthumb/phpThumb.php?src=<?php echo $thumbURL;?>&amp;h=200&amp;q=95&amp;fltr[]=over|../images/curlborder.png|0&amp;hash= <?php echo hash($thumbURL);?> border="0" alt="<?php echo $val ?>" style="padding: 3px;border: none;" 	 /></a><?php
			}
		  }
		  else{ ?>
			  <img src="<?php echo "../" . AUTOR_PATH . "/" . "No_foto.png" ?>" border="0" alt="<?php "Ninguna imagen" ?>" style="padding: 3px;" /></a><?php
		  }
          ?>
        </td>
      </tr>
    </table>
    </td>
    <td>
    <table class="primary">
      <tr>
        <th align="left" nowrap="nowrap"> <strong><?php echo $loc->getText("biblioViewPictureHeader"); ?>:</strong> </th>
        <?php
  if ($tab != "opac") {
?>
        <td align="right"><a href="../catalog/biblio_cover_del.php?bibid=<?php echo HURL($bibid);?>" onclick="javascript: return confirm('<?php echo htmlspecialchars($loc->getText('Are you sure to remove this picture?'), ENT_QUOTES); ?>');"><?php echo $loc->getText('Remove') ?></a></td>
        <?php
  }
?>
      </tr>
      <tr>
        <td align="center" valign="top" <?php echo $tab != "opac" ? 'colspan="2"' : ''; ?> ><br />

    ************************************************************************** -->
<?php    // *  Insertado por Bruj0 para ver autor fin ?>

<!--**************************************************************************
<?php
  #***************************************************************************
  #*  Show picture
  #***************************************************************************

  if (isset($biblioFlds["902a"])):
      //muetra pic a partir de isbn joanlga
    $filepath = "../" . COVER_PATH . "/" . $biblioFlds["902a"]->getFieldData();
    $title = H($biblioFlds["245a"]->getFieldData());
    //$info = _image_resize($filepath, 200);
    //if (is_array($info)): 
    if ($thumbpath = make_thumbnail($filepath, array('height' => 500))): ?>
      <a href="<?php echo $filepath ?>" title="<?php echo $title ?>" rel="lightbox1" class="vertical">
       <img src="<?php echo "../" . COVER_PATH . "/" . "lateral_cover.png" ?>"
              width="23" height="215" border="0" alt="<?php echo $val ?>"
                  style="border: none;" />
         <img src="../phpthumb/phpThumb.php?src=<?php echo $thumbpath;?>
            &amp;h=215&amp;q=95&amp;fltr[]=over|../images/coverborder.png|0&amp;hash= <?php echo hash($thumbpath);?>
               alt="<?php echo $val ?>" width="142" height="215" style="border: none;" /></a>
     <?php
       endif;
        else:
	?>
          <img src="<?php echo "../" . COVER_PATH . "/" . "No_foto.png" ?>"
                  width="165" height="215" border="0" 
            title="Ninguna carátula disponible para este libro" alt="Ninguna carátula disponible para este libro" />
          <?php 
	endif;
	?>
        </td>
      </tr>
    </table>
    </td>
  </tr>
     </table>
    ************************************************************************** -->

<!--**************************************************************************

<?php
  #***************************************************************************
  #*  Show picture  
  #***************************************************************************
  if (isset($biblioFlds["902a"])):
    $filepath = "../" . COVER_PATH . "/". $biblioFlds["902a"]->getFieldData();
    $title = H($biblioFlds["245a"]->getFieldData());
    //$info = _image_resize($filepath, 200);     //if (is_array($info)): 
    if ($thumbpath = make_thumbnail($filepath, array('height' => 160))): ?>
<table class="primary">
  <tr>
    <th align="left" nowrap="yes">
      <strong><?php echo $loc->getText("biblioViewPictureHeader"); ?></strong>
    </td>
<?php
  if ($tab != "opac") {
?>
    <td align="right">
      <a href="../catalog/biblio_cover_del.php?bibid=<?php echo HURL($bibid);?>" onclick="javascript: return confirm('<?php echo htmlspecialchars($loc->getText('Are you sure to remove this picture?'), ENT_QUOTES); ?>');"><?php echo $loc->getText('Remove') ?></a>
    </td>
<?php
  }
?>
  </tr>
  <tr>
    <td valign="top" <?php echo $tab != "opac" ? 'colspan="2"' : ''; ?> class="primary">
      <a href="<?php echo $filepath ?>" title="<?php echo $title ?>" target="_blank"><img src="<?php echo $thumbpath ?>" border="0" title="<?php echo $title ?>" alt="<?php echo $title ?>" /></a>
    </td>
  </tr>
</table>
<?php
    endif;
  endif;
?>
    ************************************************************************** -->



<!--**************************************************************************
<?php
#****************************************************************************
#*  muestra las imagenes de la contraportada si esta definida
#* Agregado por jalg para mostrarimagenes de portadas joanlaga@hotmail.com
#****************************************************************************
 if (isset($biblioFlds["902b"])) { ?>
 <br />
 <br />
 <table class="primary">
   <tr>
     <th align="left" colspan="2" nowrap="yes">
       <?php echo $loc->getText("biblioViewPictureContra"); ?>:
     </th>
   </tr>
   <tr>   
     <td nowrap="true" class="primary" valign="top">
       <?php printUsmarcText($tab,902,"b",$marcTags, $marcSubflds, FALSE);?>:
     </td>
     <td valign="top" class="primary">
       <img src="../fotos/contraportadas/<?php echo $biblioFlds["902b"]->getFieldData();?>" width="250">
     </td>
   </tr>
 </table>
 <br />
<?php  } ?>
    ************************************************************************** -->
