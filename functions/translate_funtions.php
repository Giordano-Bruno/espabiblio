<?php
/**
* Utility function to read the 'directories' under 'path'
* This function is used to read the modules or locales installed on the file system.
* @param string The path to read.
* @return array A named array of the directories (the key and value are identical).
*/

	function readDirs($path) {
		$dirs = array();
		$d = dir(OBI_DIR . $path);
		while (false !== ($name = $d->read())) {
			if ( $name !='.' && $name !='..' && $name !='sql' && $name !='help' && $name !='index.html' && $name !='*.php~' && $name !='*.bak' && $name !='template.php'  && $name !='metadata.php') {
				$dirs[$name] = $name;
			}
		}
		$d->close();
		ksort($dirs);
		return $dirs;
	}

/*
function arrayMerge($a1, $a2) {
	foreach ($a2 as $k => $v) {
		$a1[$k] = $v;
	}
	return $a1;
}
*/
	
function limpia_textos($texto){
		$texto = trim ($texto);
		$texto = str_replace("=", " = ", $texto);
		$texto = str_replace("   ", " ", $texto);
		$texto = str_replace("  ", " ", $texto);
		$texto = str_replace("\"", "\\\" ", $texto);
		$texto = substr($texto, 8);
		$texto = substr($texto, 0, -2);
		$texto = trim ($texto);

		$pos = strpos($texto, '\'');
		if ($pos == 0){ 
			$texto = substr($texto, 1);
		}
/*
		$texto = ucfirst(strtolower($texto));
		$texto = htmlspecialchars($texto);
		$texto = ctype_graph($texto);
		$texto = htmlspecialchars($texto);
		$texto = strtr($texto,'_','-');
		$texto = str_replace(" = ", "=", $texto);
*/
return($texto);
		}  //     function limpia_textos
