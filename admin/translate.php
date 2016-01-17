<?php 
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 * jalg joanlaga@hotmasil.com, permite la modificacion de las traducciones desde el front-end o usuario, enero 2013
 * funcion nueva. No Existe en Horti ni en openbiblio
//
echo '</br>';echo '$_REQUEST ';echo '<pre>';var_dump ($_REQUEST );echo '</pre>';echo '$_REQUEST ';echo '</br>';
*/

	require_once("../shared/common.php");
	$tab = "admin";
	$nav = "adminTranslate";
	$helpPage = "translate";
	require_once("../functions/errorFuncs.php");
	require_once("../shared/logincheck.php");
	require_once("../shared/header.php");
	require_once("../classes/Localize.php");
	$loc = new Localize(OBIB_LOCALE,$tab);
	include('../functions/translate_funtions.php');

	if($_REQUEST["module"] == null){ // Preconfigura la pagina para valores iniciales, selecciona modulo por default.
		$module ='opac.php';
	  }else{
		$module = $_REQUEST["module"];    
	}
	if($_REQUEST["klang"] == null){ // Preconfigura la pagina para valores iniciales, selecciona idoma base "spanish".
		$klang = OBI_LANG;
	}else{
		$klang = $_REQUEST["klang"];
	}
	if($_REQUEST["lang"] == null){ // Preconfigura la pagina para valores iniciales, selecciona idoma a ver "Inglish".
		$lang ='en';
	}else{
		$lang = $_REQUEST["lang"];
	}

	$local = readDirs(null);
	$modules = readDirs($klang);
	ksort($modules); //Ordena los modulos 
	$langs = array();
	$trans = array();//Item for view or change file
	$k = '';//count
	$v = '';//count
	$index = 0;//# fix quitar index

?>
	<h1><?php  echo $loc->getText("admin-Translate"); ?></h1>
	<pre><?php  echo $loc->getText("admin-transAdver"); ?></pre>
	<pre><?php  echo '<pre>' . $loc->getText("admin-transPrev"). '</pre>'; ?></pre>
	
		<form action="translate.php" method="post" name="modlang" Module > 
			<select name="klang" size="1" class="text" >
				<option value=""> <?php echo getText("Seleccione el Idioma Base");?> </option>
				<?php foreach ($local as $ks ) {	?>
					<option value="<?php echo $local[$ks];?>"> <?php echo $local[$ks];?> </option>
				<?php } ?>
			</select>

			<select name="lang" size="1" class="text" >
				<option value=""> <?php echo getText("Seleccione el Idioma a Modificar");?> </option>
					<?php foreach ($local as $s ) {	?>
				<option value="<?php echo $local[$s];?>"> <?php echo $local[$s];?> </option>
				<?php } ?>
			</select>

			<select name="module" size="1" class="text" onchange="javascript:document.modlang.submit();">
				<option value=""> <?php echo getText("Seleccione el Modulo a ver");?> </option>
				<?php foreach ($modules as $k ) { ?>
					<option value="<?php echo $modules[$k];?>"> <?php echo $modules[$k];?> </option>
				<?php } ?>
			</select>
		</form>
<?php 
	$Base = array(); 
	$Base = readFiles($klang, $module);//jalg Lee el texto base.

	foreach ($Base as $k => $v) {
		if ($v != '0') {
			$Key[ (is_int($k) ? $v : $k) ] = array($klang => $v );
		}
	}

//	ksort($Key); //oredena por la clave, pero se desordenan los cmapos en el archivo a guardar si no existe la key.
	if ($lang !== $klang || @!isset($lang) ){
		$locale = array();
		$locale = readFiles($lang , $module); //jalg Lee el texto a modificar.
		ksort($locale);// jalg lee la traduccion

		foreach ($locale as $k => $v) {
			if ($v != '0') {
				$Key[$k][$lang] = $v;
			}
		}
	}
	$trans= $Key;
?>

<form action="translate_save.php" method="post" name="editlang">
	<input type="hidden" name="module" value="<?php echo $modules[$module];?>" />
	<input type="hidden" name="lang" value="<?php echo $lang;?>" />
	<input type="hidden" name="klang" value="<?php echo $klang;?>" />
	<table width="100%" border="1" cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
		<tr>
			<th width="10%" nowrap><?php echo $loc->getText("Clave -getText-: ") ;?> </th>
			<th width="40%" nowrap><?php echo $loc->getText("Archivo Base: ") . OBIB_LOCALE_ROOT . $klang . '/' . $modules[$module] ;?> </th>
			<th width="40%" nowrap><?php echo $loc->getText("Archivo Modificar: ") . OBIB_LOCALE_ROOT. $lang . '/' . $module ;?> </th>
		</tr>
		<?php
			$index++;
			foreach ($trans as $k => $langs) {
		?>
				<tr>	
				<td>  
				<?php 
					echo $k;
				?> 
				</td>

				<td>
				<?php
					$langs[$klang] = limpia_textos($langs[$klang]);//despliega item del  file base
					echo $langs[$klang];
				?>
				</td>

				<td <?php //if ($trans[$index][$klang]=='') {echo 'BGCOLOR="#00FFFF"';} #fix debe de cambiar si el valor del key en el archivo a modificar no esta definido?> >
				<?php
					if ($lang !== $klang) {
					$langs[$lang] = limpia_textos($langs[$lang]);;//despliega item del  file a modificar
					}
					echo ('<input type="hidden" name="user" value="'. $_SESSION['username'] .'" size="40" class="text" />');
					echo ('<input type="hidden" name="trans['.$index.'][ky]" value="'. $k .'" size="40" class="text" />');
					echo ('<input type="hidden" name="trans['.$index.']['.$lang.']" value="'. $langs[$lang] .'" size="40" class="text" />');
						if (mb_strlen($langs[$lang]) < 50) {
							echo ('<input type="text" name="trans['.$index.'][mv] " value="'. $langs[$lang] .'" size="50" class="text" />' );
						} else {
							$rows = round(mb_strlen($langs[$lang] / 50)) +1 ;
							echo ('<textarea name="trans['.$index.'][mv]" cols="80" class="small" rows="' . $rows . '">' . $langs[$lang] . '</textarea>');
						}
				?>
				</td>
			<?php
				$index++;
			}
			?>
			</tr>

	</table>
	<input type="submit" value="<?php echo $loc->getText("admin-transSubmit");?>" class="button"  \n/>
	<button type="submit" class="btn btn-default"><?php echo $loc->getText("admin-transSubmit");?></button>
</form>
<?php include("../shared/footer.php");