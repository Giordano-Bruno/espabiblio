<?php 
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 * jalg joanlaga@hotmasil.com, permite la modificacion de las traducciones desde el front-end o usuario, enero 2013
 * funcion nueva. No Existe en Horti ni en openbiblio 

echo '<pre>';print_r($modules);echo '</pre>';
echo '<pre>';print_r($Translate);echo '</pre>';
*/

require_once("../shared/common.php");
$tab = "admin";
$nav = "adminTranslate";
$helpPage = "translate";

require_once("../functions/errorFuncs.php");
require_once("../shared/logincheck.php");

require_once("../classes/Localize.php");
$loc = new Localize(OBIB_LOCALE,$tab);

require_once("../shared/header.php");


/* joal integrar  Leee directorios y archivos de locale aso como su descripcion es el estandart
                  $stng0 = new Settings();
                  $arr_lang0 = $stng0->getLocales();
                  foreach ($arr_lang0 as $langCode0 => $langDesc0) {
                    echo "<option value=\"".H($langCode0)."\"";
                    echo ">".H($langDesc0)."\n";
                  }
*/


//define('OBI_DIR','../locale/',true);
//echo OBI_DIR;
include('../functions/translate_funtions.php');

$local = readDirs(null);
$modules = readDirs('en');
$Translate= readDirs('es');

?>

	<h1><?php  echo $loc->getText("admin-Translate"); ?></h1>
	<pre><?php  echo $loc->getText("admin-transAdver"); ?></pre>
	<pre><?php  echo '<pre>' . $loc->getText("admin-transPrev"). '</pre>'; ?></pre>
	
		<form action="translate.php" method="post" name="modlang" Module > 
			<select name="lang" size="1" class="text" '   ' >
					<option value="   "> <?php echo '   ';?> </option>
			<?php 		foreach ($local as $s ) {	?>
					<option value="<?php echo $local[$s];?>"> <?php echo $local[$s];?> </option>
				<?php 	}	?>
			</select>

			<select name="module" size="1" class="text" onchange="javascript:document.modlang.submit();">
					<option value="   "> <?php echo '   ';?> </option>
			<?php 		foreach ($modules as $k ) {	?>
						<option value="<?php echo $modules[$k];?>"> <?php echo $modules[$k];?> </option>
				<?php 	}	?>
			</select>
		</form>
<?php 
	if($_POST["module"]==null){ // Preconfigura la pagina para valores iniciales.
		$module='opac.php';
	  }else{
		$module = $_POST["module"];    
	}
	if($_POST["lang"]==null){
		$lang ='es';
	}else{
		$lang = $_POST["lang"];
	}				

$trans = array();
$klang= 'en'; //jalg Lee el modulo selecionado en ingles
include(OBI_DIR. $klang . '/' . $module);
$en = array();

	ob_start();
		if (file_exists(OBI_DIR. $klang . '/' . $module)) {
				@readfile(OBI_DIR. $klang . '/' . $module);
			} else {
				@readfile(OBI_DIR. $lang . '/' . $module);
			}
				eval("\$en=array(".ob_get_contents()."\n'0');");
	ob_end_clean();
			foreach ($en as $k => $v) {
				if ($v != '0') {
					$trans[ (is_int($k) ? $v : $k) ] = array('en' => $v );
				}
		}
ksort($trans); //jalg el texto en ingles indice trans
		foreach ($trans as $k => $v) {
			if ($v != '0') {
					$lara[ (is_int($k) ? $v : $k) ] = array('en' => $v );
			}
		}
		
ksort($lara); //jalg el texto en ingles indice trans
$locale = array();
$klang='es'; //jalg Lee el modulo selecionado en español
	include(OBI_DIR. $klang . '/' . $module);
ob_start();
		// read language files from module's locale directory preferrably
			if (file_exists(OBI_DIR. $klang . '/' . $module)) {
				@readfile(OBI_DIR. $klang . '/' . $module);
			} else {
				@readfile(OBI_DIR. $klang . '/' . $module);
			}
			eval("\$locale=array(".ob_get_contents()."\n'0');");
ob_end_clean();

ksort($locale);
			foreach ($locale as $k1 => $v) {
				if ($v != '0') {
				$trans= $v;
			}
		}

ksort($trans);// jalg lee la traduccion
		foreach ($trans as $k1 => $v) {
			if ($v != '0') {
					$lara[$k1]['lang'] = $v;
					
			}
		}
 
$trans= $lara;
ksort($trans); // lee la clave de la traduccion
?>

<form action="translate_save.php" method="post" name="editlang">
<input type="hidden" name="module" value="<?php echo $modules[$module];?>" />
<input type="hidden" name="lang" value="<?php echo $lang;?>" />

<table width="100%" border="1" cellpadding="1" cellspacing="1" class="primary">
<tr>
	<th width="10%" nowrap><?php echo 'Clave' ;?> </th>
	<th width="40%" nowrap><?php echo 'English: ' . OBI_DIR . 'en/' . $modules[$module] ;?> </th>
	<th width="40%" nowrap><?php echo 'lang: ' . OBI_DIR. $lang . '/' . $module ;?> </th>
	<th width="10%" nowrap><?php echo $loc->getText("admin-transDel") ;?> </th>
</tr>

	<?php
		$index = 0;
	echo "<tr>\n";
		echo ('<td><input type="text" name="trans['.$index.'][key]" value="??" size="10" class="text" /></td>' . "\n");
		if ($lang == 'en') {
				echo ('<td><input type="text" name="trans['.$index.'][en]" value="??" size="40" class="text" /></td>' . "\n");
				echo ('<td><input type="hidden" name="trans['.$index.'][' . $lang . ']" value="??" size="40" class="text" /></td>' . "\n");
			} else {
				echo ('<td><input type="hidden" name="trans['.$index.'][en]" value="??" size="40" class="text" /></td>' . "\n");
				echo ('<td><input type="text" name="trans['.$index.'][' . $lang . ']" value="??" size="40" class="text" /></td>' . "\n");
		}
		echo '<td colspan="2"  class="text" >' . $loc->getText("admin-transNewEntry"). "</td>\n";
	echo "</tr>\n";

		$index++;
		foreach ($trans as $k => $langs) {
	?>

<tr>	
	<td>  
		<?php 
			echo $k;
			echo ('<input type="hidden" name="trans['.$index.'][key]" value="' . $k . '" size="40" class="text" />'); 	
		?> 
	</td>

	<td>
	<?php
			$langs['en'] = limpia_textos($langs['en']);
				if ($lang == 'en') {
							echo ('<input type="text" name="trans['.$index.'][en]" value="'. $langs['en'].'" size="40" class="text" />');
					} else {
						echo $langs['en'];
//						echo ('<input type="hidden" name="trans['.$index.'][en]" value="'. $langs['en'] .'" size="40" class="text" />');
					}
		?>
	</td>

	<td>
		<?php
			$langs['lang'] = limpia_textos($langs['lang']);
				if ($lang != 'en') {
					if (mb_strlen($langs['lang']) < 40) {
							echo ('<input type="text" name="trans['.$index.']['. $lang. ']"value="'. $langs['lang'].'" size="40" class="text" />');
						} else {
							$rows = round(mb_strlen($langs['lang'] / 35)) +1 ;
							echo ('<textarea name="trans[' . $index . ']['. $lang. ']" cols="40" class="small" rows="' . $rows . '">' . $langs['lang'] . '</textarea>');
						}
					} else {
						echo $langs['lang'];
//						echo ('<input type="hidden" name="trans['.$index.'][es]" value="'. $langs['es'] .'" size="40" class="text" />');
				}
			?>

		</td>
	<td align="center"><input type="checkbox" name="trans[<?php echo $index; ?>][del]" /></td>

			<?php		$index++;	}	?>

	</tr>
</table>
		<input type="submit" value="<?php echo $loc->getText("admin-transSubmit");?>" class="button"  \n/>
	</form>
  <?php include("../shared/footer.php");
