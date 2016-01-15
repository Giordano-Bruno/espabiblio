<?php
/**
* Utility function to read the 'directories' under 'path'
* This function is used to read the modules or locales installed on the file system.
* @param string The path to read.
* @return array A named array of the directories (the key and value are identical).
*/
	function readDirs($path) {
		$dirs = array();
		$d = dir(OBIB_LOCALE_ROOT . $path);
		while (false !== ($name = $d->read())) {
			if ( $name !='.' && $name !='..' && $name !='sql' && $name !='help' && $name !='index.html' && $name != "?.php~" && $name != "?.bak" && $name !='template.php'  && $name !='metadata.php') {
				$dirs[$name] = $name;
			}
		}
		$d->close();
//		ksort($dirs);
		return $dirs;
	}

	function readFiles($klang1, $module1) {
	$core_filename = OBIB_LOCALE_ROOT.$klang1.'/'.$module1;
		if (!file_exists($core_filename)) {
			copy(OBIB_LOCALE_ROOT.OBI_LANG.'/'.$module1, OBIB_LOCALE_ROOT.$klang1.'/'.$module1);
		}
/*
					$filename = $core_filename;
					copy($core_filename, $core_filename . '.bak');
			} else {
					$mod_locale = OBIB_LOCALE_ROOT.$lang;
					if (is_dir($mod_locale)) {
						$filename = OBIB_LOCALE_ROOT.$lang.'/'.$module;
				}
		}
*/
		$module1 =  str_replace('.php', '', $module1);
		$LocKlang = new Localize($klang1,$module1);//Leemos el modulo 
		$thearray = get_object_vars( $LocKlang );//traemos los valores del objeto
		$Base1 =$thearray['_trans'];//leemos los valores que interesan
		return $Base1;
	}

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
