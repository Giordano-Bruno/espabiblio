<?php /* 
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 * jalg joanlaga@hotmasil.com, permite la modificacion de las traducciones desde el front-end o usuario, enero 2013
 * funcion nueva. No Existe en Horti ni en openbiblio 
SYSTEM $Id: translate_save.php 
// save to core locales if a translation exists there, otherwise save
// into the module's local locale area if it exists.  If not then
// the core table is updated.
//echo '<pre>';print_r($trans);echo '</pre>';
//echo '<pre>';print_r($_POST);echo '</pre>';
 */

$trans=$_POST;
$lang=$trans['lang'];
	$core_filename = '../locale/'.$lang.'/'.$module=$trans[module];
		if (file_exists($core_filename)) {
					$filename = $core_filename;
					copy($core_filename, $core_filename . '.bak');
			} else {
					$mod_locale = '../locale/'.$lang;
					if (is_dir($mod_locale)) {
						$filename = '../locale/'.$lang.'/'.$module;
				} else {
						$filename = $core_filename;
				}
		}

$txt1 = "
<?php\n
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
##
## DO NOT MODIFY THIS FILE BY HAND!\n
##
#* MODIFICADO POR JOSE ANTONIO LARA joanlaga@hotmail.com (2013)
*/
";

$txt2 = "##\n## end\n##\n?>";
				//			stripslashes($langs['english']) addslashes(stripslashes($langs['lang']));
		foreach ($trans[trans] as $langs) {
				if (empty($langs['del']) && $langs['key'] != "??") {
				           		$txt .= '$trans["' . $langs['key'] . '"]			= "\\$text=\'' . $langs[$lang] . '\';";' . "\n";
				}
		}	
$txt=$txt1.$txt.$txt2;
$fp = fopen ($filename, 'wt');
	fwrite($fp, $txt);
fclose($fp);
?>
<script language="javascript">
		window.location="translate.php";
</script>
