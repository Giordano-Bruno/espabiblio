<?php
#fix el guardado de disco solo debe usarse una vez
	require_once("../shared/common.php");

	if (isset($_POST )){
		$module = $_REQUEST['module'];
		$lang = $_REQUEST['lang'];
		$klang = $_REQUEST['klang'];
		$user = $_REQUEST['user'];
		$trans = $_REQUEST['trans'];
	}

	$core_filename = OBIB_LOCALE_ROOT.$lang.'/'.$module;
	$filename = $core_filename;
	if (file_exists($core_filename)) {
		copy($core_filename, $core_filename . '-' . $user . '-' . date('m-d-y') . '.bak');
	} else {
		echo 'No exite archivo';
	}

	$file_contents =  file($filename);//leemos el archivo como array (para teenr separadores de linea y poder usar solo donde aparesca la la key
	$key2 =array() ;
	foreach ($file_contents as  $key1) {//Convertimos el array y lo convertimos en lineas con escapes
		$key2[] = preg_quote($key1)  ;
	}
	$i=0;
	$file_contents = $key2;
	$path = $filename;
	$key = array();
	foreach ($trans as  $key  ) {
		if ($key[$lang] !== $key['mv'] ){//Busca cuando hay cambios en los archivos o si noexiste la clave
			$keyStrin =  $key['ky'];
			$search =   $key[$lang];
			$replace =   $key['mv'];
			$Key_prev = false;
			if ($key[$lang]==''){
				$Key_prev = $trans[$i]['ky'];
			}
		$file_contents = search_and_replace($filename,$keyStrin, $Key_prev, $search, $replace, $file_contents);
		}
	$i++;
	}

function search_and_replace($path, $keyStrin, $Key_prev, $search, $replace, $file_contents) {
//echo '</br>';echo ' $replace '; echo '<pre>';var_dump ( $replace );echo '</pre>';echo '</br>';
	if ($Key_prev){
			$i=0;
			foreach ($file_contents as  $key5) {
				if (strrpos($key5 , 'trans\["'.$Key_prev.'"\]' )){
						$Change = '\$trans\["'. $keyStrin .'"\]			\= "\\\$text\=\'' . preg_quote($replace) . '\';";' . PHP_EOL;
						$file_contents= insertar($file_contents, $Change ,$i) ;
				}
			$i++;
			}
			}else{
			foreach ($file_contents as  $key1) {
				if (strrpos($key1 , 'trans\["'.$keyStrin.'"\]' )){
					$patern = '\''. preg_quote($search) . '\';";' ;
					$key1 = str_replace ( $patern , '\''. preg_quote($replace) . '\';";' , $key1  );
				}
			}
	}
	$file_contents1  =  implode($file_contents);#fix el guardado de disco solo debe usarse una vez
	$fp = fopen ($path, 'wt');
		fwrite($fp, stripslashes($file_contents1));//escribimos el archivo, sin ecapes
	fclose($fp); 
return $file_contents;
}

function insertar($array,$elemento,$pos) {
    if($pos < 0) {
        return $array;
    }

    ## si la posicion es mayor que el tamaño de la lista
    ## el nodo se inserta al final
    if($pos>=count($array) ) {
        array_push($array,$elemento);
        return $array;
    }

    $listaaux=array(); # array auxiliar
        ## buscamos la posicion en el array, para ello las posiciones anteriores
        ## las guardamos en el array auxiliar
    for($cont=0;$cont<$pos;$cont++) {
        $listaaux[] = array_shift($array);
    }

        ## ahora se inserta el elemento al principio del array original
    array_unshift($array,$elemento);

        ## ahora recorremos el array auxiliar desde el final y vamos insertando
        ## sus elementos al principio del array original
    if(count($listaaux)>0) {
        for($i=count($listaaux)-1;$i>=0;$i--) {
            array_unshift($array,$listaaux[$i]);
        }
    }
        return $array;
}

?>
<script type="text/javascript">
		window.location="translate.php?module=<?php echo $module;?>&klang=<?php echo $klang;?>&lang=<?php echo $lang;?>";
</script>