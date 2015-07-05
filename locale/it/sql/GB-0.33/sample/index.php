<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="es-mx" dir="ltr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>CSVI Analyzer</title>
</head>
<body>

<?php

echo "ini";
        echo "</br>";
$filename = "LDDE.txt";

$lara = executeSqlFile($filename);






/*
CREATE TABLE  `prd`.`LDDE` (
`id` INT( 100 ) NOT NULL ,
`CONSECUTIVO` INT( 100 ) NOT NULL ,
`CLV_ELECTO` VARCHAR( 25 ) NOT NULL ,
`PATERNO` VARCHAR( 50 ) NOT NULL ,
`MATERNO` VARCHAR( 50 ) NOT NULL ,
`NOMBRE` VARCHAR( 50 ) NOT NULL ,
`ESTADO` VARCHAR( 50 ) NOT NULL ,
`MUNICIPIO` VARCHAR( 50 ) NOT NULL ,
`SECC` VARCHAR( 6 ) NOT NULL ,
`FECHA_AFILIACION` VARCHAR( 10 ) NOT NULL ,
`DDF` VARCHAR( 3 ) NOT NULL ,
`DDL` VARCHAR( 3 ) NOT NULL ,
`CORRIENTE` VARCHAR( 50 ) NOT NULL ,
`DIRECCION` VARCHAR( 50 ) NOT NULL ,
`COL` VARCHAR( 50 ) NOT NULL ,
`OBSERV` VARCHAR( 50 ) NOT NULL
) ENGINE = INNODB

*/

  function executeSqlFile($filename, $tablePrfx = "prd") {
$ic = 0;
$ic_max = 250;  // stops after this number of rows

    $fp = fopen($filename, "r");
    $fpw = fopen("lara.txt", "w");

    if ($fp == false) {
        echo "</br>";
      echo "Error reading file: ";
              echo "</br>";
    } else {
        echo "</br>";
    	echo "puedo cargar fichero";
        echo "</br>";

//$handle = fopen("/tmp/myfilereversed.txt", "r");

	     while (!feof ($fp) && ++$ic<=$ic_max ) {
	        $char = fgets($fp,150);
//        echo   $char;
      if ( strlen($char) < 30  || $ic <  6 ) {
//echo  strlen($char).' - ';      	
//      	      echo "</br>";
        }else {
//echo  strlen($char).' - ';      	
   
$char= 'insert into prd values (null, \'' . trim(convert_chars_to_entities( $char )) .'\');';
            fwrite($fpw, $char);
        echo   $char;
        echo "</br>";
        
                }
/*
        if ($char == ";") {

          $sql = str_replace("%prfx%",$tablePrfx,$sqlStmt);
          $root_path = "http://" . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['SCRIPT_NAME']));
          if (substr($root_path, -1) == '/') {
            $root_path = substr($root_path, 0, -1);

  */   
        }
   


    fclose($fpw);
    fclose($fp);
 
    }
        echo "</br>";
echo "fin";
    }
    


function convert_chars_to_entities( $str ){ 
//    $str = str_replace( ' ', '~', $str ); 
    $str = str_replace( '	', '\',\'', $str );
    

    return $str; 
}



/*



//       include "Snoopy.class.php";
//global $fin;
//	echo "Inicio";
//	echo "</br>\n";	

//$url = 'http://localhost/Snoopy/desc/1_files/articulo(58).html';
//$url = 'http://localhost/Snoopy/DESC_all.html';
//$url = 'http://localhost/tools/DESC_all.txt';
//$url = 'http://localhost/tools/example_homepage.html';

//$path = '/var/www/html/Snoopy/desc';
//$Dires[] = file_get_contents($path);
 //$Dires = file($path,"r");
//fclose($Dires);
/*
        $snoopy = new Snoopy;
        $snoopy->agent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.0.5) Gecko/2008120122 Firefox/3.0.5 FirePHP/0.2.1";
        $snoopy->referer = "http://www.google.com/";

$Diresk =array(
			"1_files", 
			"2_files", 
			"3_files", 
			"4_files", 
			"5_files", 
			"6_files", 
			"7_files", 
			"8_files", 
			"9_files", 
			"10_files",
			"11_files", 
			"12_files", 
			"13_files", 
			"14_files", 
			"tools_files"
 );


$text_arr = array(
'http://www.grupocva.com/detalle_articulo/articulo.php?fProdId=',					 " --&gt;&lt;", "Producto item: ", 6000 ,
"uot;&gt;&lt;title&gt;me articulo:",'&lt;/title&gt;&lt;style type=&quot;text' , "Clave articulo: ", 60,
"lass=&quot;deta&quot;&gt;", '&lt;/span&gt;&lt;/td&gt;&lt;/t', "MARCA: ", 60, 
"class=&quot;deta&quot;&gt;", '&lt;/span', "CODIGO FABRICANTE: ", 60,
"&lt;td&gt;&lt;span class=&quot;deta&quot;&gt;", "&lt;/span",  "GARANTIA: ", 60,
"td&gt;&lt;span class=&quot;deta&quot;&gt;", "&lt;/span",  "STATUS: ", 60,
"lass=&quot;deta&quot;&gt;", "&lt;/span",  "GRUPO: ", 60,
"CLAVE", "&lt;/p&gt;&lt;/td&gt;",  "CLAVE: ", 60,
"class=&quot;style80&quot;&gt;", "&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;/span",  "Nombre Producto: ", 1000,
"&lt;img src=&quot;imagen", ".php",  "imagen articulo:  ", 60,
"Informacion Tecnica:&lt;/strong&gt;", "&lt;strong&gt;Informacion Comercial" , "Informacion Tecnica: ", 25000,
"Informacion Comercial:&lt;/strong&gt;" ,"&lt;/span", "Informacion Comercial: ", 25000,
"Productos Compatibles&lt;/span&gt;&lt;br&gt;&lt;br&gt;&lt;span class=&quot;style91&quot;&gt;&lt;a href=&quot;javascript:void(window.open('articulo.php?fProdId=", "','_blank'", "Productos Compatibless item 1: ", 200,
"style91&quot;&gt;", "&lt;/a&gt;&lt;br&gt;&lt;/span", "Productos Compatibles 1 clave: ", 30,
"articulo.php?fProdId=", "','_blank", "Productos Compatibless item 2: ", 30,
"style91&quot;&gt;", "&lt;/a&gt;&lt;br&gt;&lt;/span", "Productos Compatibles 2 clave: ", 30,
"articulo.php?fProdId=", "&lt;/a&gt;&lt;br&gt;&lt;/span&gt;br />&lt;br&gt;&lt;br&gt;&lt;span class=&quot;style89&quot;&gt;Productos Similares", "Productos Compatibless item 3: ", 500,
"style91&quot;&gt;", "&lt;/a&gt;&lt;br&gt;&lt;/span", "Productos Compatibles 3 clave: ", 35,
"articulo.php?fProdId=", "','_blank", "Productos Similares item 1: ", 150,
"class=&quot;style91&quot;&gt;", "&lt;/a&gt;&lt;br&gt;&lt;/span", "Productos Similares clave 1: ", 50,
"articulo.php?fProdId=", "','_blank", "Similares item 2: ", 35,
"class=&quot;style91&quot;&gt;", "&lt;/a&gt;&lt;br&gt;&lt;/span", "Productos Similares clave 2: ", 50,
"articulo.php?fProdId=", "','_blank", "Similares item 3: ", 35,
"class=&quot;style91&quot;&gt;", "&lt;/a&gt;&lt;br&gt;&lt;/span", "Productos Similares clave 3: ", 50,

"sustitutos.php", "blank", "Sustitutos1: ", 35,
"sustitutos.php", "blank", "Sustitutos2: ", 35,


 "lara-fin");
$lara = fopen("lara.txt","w");
fclose($lara);

$lara = fopen("lara.txt","a");


$kis = 0;
while ( $kis < 16){
$dire =	"/var/www/html/Snoopy/desc/" . $Diresk[$kis]; 
//	      echo $kis;
//	       echo "</br>\n";
$directorio = opendir($dire); //ruta actual
while ($archivo = readdir($directorio)){ //obtenemos un archivo y luego otro sucesivamente
    if (is_dir($archivo) )//verificamos si es o no un directorio
    {
  //      $Dires[] = "[".$archivo . "]"; //de ser un directorio lo envolvemos entre corchetes
    }    else    {
    	$pos1 = strpos($archivo , ".", 1 );//busca las cadenas
   	$files= substr($archivo, $pos1 );
   		
    if ($files !== '.php' && $files !== '.gif' ){ //quitamos . y ..
$archivo =  "http://localhost/Snoopy/desc/" . $Diresk[$kis] . "/" .  $archivo;
//       echo $archivo;
  //     echo "</br>\n";

//echo $url ;
//echo "</br>\n";

$url = $archivo;
//echo $url;
//echo "</br>\n";

        $snoopy->submit($url, $data);

//$max = 2500000;// el maximo de chr a leer 

//$textinicio = file_get_contents($url);

$max = strlen(nl2br(htmlspecialchars($snoopy->results)))+100;
$inicio = 1 ; // desde que caracter inicial

$textinicio = nl2br(substr(htmlspecialchars($snoopy->results), $inicio, $max ));

$gene = $textinicio;

$buscar = array(  
'&lt;br /&lt;','  ', '\t' , '  ', ' <', ' >', '< ', '> ', '	', "\\r\\n",'\\r\\n',"\r\n","\n","\\r", '<br>','<br>', '<br />', '<br />',
'</br>', );
$remplazar = array("¬");
$text = str_replace($buscar, $remplazar, $textinicio );

//$text = $textinicio ;
$gene = $text; 
$textinicio = $text;

//$textinicio = htmlspecialchars($snoopy->results); 
//$textinicio = substr(htmlspecialchars($snoopy->results), 1);
  
$priner = "http://www.grupocva.com/detalle_articulo/articulo.php?fProdId";
$total  = substr_count($textinicio,$priner) ; //total de iteracciones


	echo "</br>\n   total  ";
	echo  $total;
	echo "</br>\n     ";

	echo "</br>\n   max  ";
	echo  $max;
	echo "</br>\n     ";

$i = 0; //con quy elelemto de la matriz de ocnceptos inicia inicial desde el comienza aller la info
$j=0;

while ($i < $total) {//numero de articulo
	echo "<br /> AAAAA ^   " . $i . "    ";	//columnas de articulo
  fputs($lara,"\n");
//fputs($lara, $i . '\n');	
	while ($j <= 92) {
			$text = $text_arr[$j];
			$text_fin = $text_arr[$j+1];
			$pos1 = strpos($textinicio , $text, 1 );//busca las cadenas
			$pos2 = strpos($textinicio , $text_fin, 1  );
			$pos_fin = $pos2 - $pos1 ;

				if ($pos_fin < $text_arr[$j+3] & $pos_fin > 1 ){
								$salida =  "^" . $text_arr[$j+2] . "^" .  substr($textinicio, $pos1 + strlen($text) , $pos_fin - strlen($text)) ; 
					}else {
								$salida =  "^" . $text_arr[$j+2] . "^"  ;
								$pos2 = 3 ;
					}
								$salidas[] = Limpia_texto($salida);
//	echo "</br>\n     ";
//   echo $pos_fin .  "----" . $salida;	
 fputs($lara, $salida);
 //echo "^" . $text_arr[$j+2] . "^" .   strip_tags(substr($textinicio, $pos1 + strlen($text) , $pos_fin - strlen($text) ) );
//cortamos el texto
			$textinicio = substr($textinicio, $pos2 );

    	$j= $j+4;
		}
      	$j =0 ;   
   	  $i++;            
	}

echo "</br>\n  gene";
print "$gene" ;

//echo "</br>\n  textinicio";
//print "$textinicio" ;

    }}
}
$kis++;
}

fclose($lara);

/*
   		echo "</br>\n";

$directorio = "/var/www/html/Snoopy/desc/" . $Dires[i]

$directorio = opendir("/var/www/html/Snoopy/desc/"); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo) )//verificamos si es o no un directorio
    {
  //      $Dires[] = "[".$archivo . "]"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
    	$pos1 = strpos($archivo , ".", 1 );//busca las cadenas
   	$files= substr($archivo, $pos1 );
//   	echo 	$files;
  // 		echo "</br>\n";
    if ($files !== '.html' && $files !== '.bat' ) //quitamos . y ..
       $Dires[] = $archivo . "<br />";
    }
}

sort($Dires);
print_r($Dires);


function Limpia_texto($text){
//$text = nl2br($text);

$buscar = array(  
'<br />','  ', '\t' , '  ', ' <', ' >', '< ', '> ', '	', "\\r\\n",'\\r\\n',"\r\n","\n","\\r",
'<br>', );
$remplazar = array("¬");
$text = str_replace($buscar, $remplazar, $text ); 

$buscar = array(  
'<td><span class=',
'span class',
'-->¬<',
'img src=',
'', );
$remplazar = array("¬");
$text = str_replace($buscar, $remplazar, $text ); 


$count = substr_count ( $text , "-" );
    while ($count > 0){
        $text = str_replace("--", "-", $text, $count);
  $count++;
 }

   return $text;
}

function fopen_recursive($path){ 
  preg_match('`^(.+)/([a-zA-Z0-9]+\.[a-z]+)$`i', $path, $matches); 
  $directory = $matches[1]; 
  $file = $matches[2]; 

  if (!is_dir($directory)){ 
echo $directory;
  } 
 return fopen ($path); 
} 


public static function convert_chars_to_entities( $str ){ 
    $str = str_replace( 'À', '&#192;', $str ); 
    $str = str_replace( 'Á', '&#193;', $str ); 
    $str = str_replace( 'Â', '&#194;', $str ); 
    $str = str_replace( 'Ã', '&#195;', $str ); 
    $str = str_replace( 'Ä', '&#196;', $str ); 
    $str = str_replace( 'Å', '&#197;', $str ); 
    $str = str_replace( 'Æ', '&#198;', $str ); 
    $str = str_replace( 'Ç', '&#199;', $str ); 
    $str = str_replace( 'È', '&#200;', $str ); 
    $str = str_replace( 'É', '&#201;', $str ); 
    $str = str_replace( 'Ê', '&#202;', $str ); 
    $str = str_replace( 'Ë', '&#203;', $str ); 
    $str = str_replace( 'Ì', '&#204;', $str ); 
    $str = str_replace( 'Í', '&#205;', $str ); 
    $str = str_replace( 'Î', '&#206;', $str ); 
    $str = str_replace( 'Ï', '&#207;', $str ); 
    $str = str_replace( 'Ð', '&#208;', $str ); 
    $str = str_replace( 'Ñ', '&#209;', $str ); 
    $str = str_replace( 'Ò', '&#210;', $str ); 
    $str = str_replace( 'Ó', '&#211;', $str ); 
    $str = str_replace( 'Ô', '&#212;', $str ); 
    $str = str_replace( 'Õ', '&#213;', $str ); 
    $str = str_replace( 'Ö', '&#214;', $str ); 
//    $str = str_replace( '×', '&#215;', $str );  // Yeah, I know.  But otherwise the gap is confusing.  --Kris 
    $str = str_replace( 'Ø', '&#216;', $str ); 
    $str = str_replace( 'Ù', '&#217;', $str ); 
    $str = str_replace( 'Ú', '&#218;', $str ); 
    $str = str_replace( 'Û', '&#219;', $str ); 
    $str = str_replace( 'Ü', '&#220;', $str ); 
    $str = str_replace( 'Ý', '&#221;', $str ); 
    $str = str_replace( 'Þ', '&#222;', $str ); 
    $str = str_replace( 'ß', '&#223;', $str ); 
    $str = str_replace( 'à', '&#224;', $str ); 
    $str = str_replace( 'á', '&#225;', $str ); 
    $str = str_replace( 'â', '&#226;', $str ); 
    $str = str_replace( 'ã', '&#227;', $str ); 
    $str = str_replace( 'ä', '&#228;', $str ); 
    $str = str_replace( 'å', '&#229;', $str ); 
    $str = str_replace( 'æ', '&#230;', $str ); 
    $str = str_replace( 'ç', '&#231;', $str ); 
    $str = str_replace( 'è', '&#232;', $str ); 
    $str = str_replace( 'é', '&#233;', $str ); 
    $str = str_replace( 'ê', '&#234;', $str ); 
    $str = str_replace( 'ë', '&#235;', $str ); 
    $str = str_replace( 'ì', '&#236;', $str ); 
    $str = str_replace( 'í', '&#237;', $str ); 
    $str = str_replace( 'î', '&#238;', $str ); 
    $str = str_replace( 'ï', '&#239;', $str ); 
    $str = str_replace( 'ð', '&#240;', $str ); 
    $str = str_replace( 'ñ', '&#241;', $str ); 
    $str = str_replace( 'ò', '&#242;', $str ); 
    $str = str_replace( 'ó', '&#243;', $str ); 
    $str = str_replace( 'ô', '&#244;', $str ); 
    $str = str_replace( 'õ', '&#245;', $str ); 
    $str = str_replace( 'ö', '&#246;', $str ); 
 //   $str = str_replace( '÷', '&#247;', $str );  // Yeah, I know.  But otherwise the gap is confusing.  --Kris 
    $str = str_replace( 'ø', '&#248;', $str ); 
    $str = str_replace( 'ù', '&#249;', $str ); 
    $str = str_replace( 'ú', '&#250;', $str ); 
    $str = str_replace( 'û', '&#251;', $str ); 
    $str = str_replace( 'ü', '&#252;', $str ); 
    $str = str_replace( 'ý', '&#253;', $str ); 
    $str = str_replace( 'þ', '&#254;', $str ); 
    $str = str_replace( 'ÿ', '&#255;', $str ); 
   
    return $str; 
}



if($j == 0) {//para ahorrar tiempo cuando el tamaño es conocido
$pos_fin = 10;
}else {
$pos_fin = $pos2 + $pos1 ;
}
function Busca_texto($text, $text_fin ,$textinicio, $inicio ){ 

}   return

$posi =   
	echo "</br>\n";
echo $posi ;
	echo "</br>\n";
	
//	echo "</PRE>\n";


	echo "<PRE>\n";
print "response code: ".$snoopy->response_code."\n";
	echo "</PRE>\n";


//        echo $snoopy->results;
//		echo "<PRE>" . preg_quote(htmlspecialchars($snoopy->results)) . "</PRE>\n";



//	echo "<PRE>\n";


//        $data["search"] = "title";
//        $data["language"] = "en";
 //       $data["go"] = "submit";

	//	$H_inicial	=	 htmlspecialchars($snoopy->results) ;





// response code:
//print "response code: ".$snoopy->response_code."\n";
/* print the headers:
print "<b>Headers:</b>";
while(list($key,$val) = each($snoopy->headers)){
print $key.": ".$val."\n";
}

print "\n";

// print the texts of the website:
//print "<pre>".htmlspecialchars($snoopy->results)."</pre>\n";

}
else {
print "Snoopy: error while fetching document: ".$snoopy->error."\n";
}


	include "Snoopy.class.php";
	$snoopy = new Snoopy;
	
	$snoopy->user = "joe";
	$snoopy->pass = "bloe";
	
	if($snoopy->fetch("http://www.slashdot.org/"))
	{
		echo "response code: ".$snoopy->response_code."<br>\n";
		while(list($key,$val) = each($snoopy->headers))
			echo $key.": ".$val."<br>\n";
		echo "<p>\n";
		
		echo "<PRE>".htmlspecialchars($snoopy->results)."</PRE>\n";
	}
	else
		echo "error fetching document: ".$snoopy->error."\n";

	Example:	submit a form and print out the result headers
				and html-escaped page:

	include "Snoopy.class.php";
	$snoopy = new Snoopy;
	
	$submit_url = "http://lnk.ispi.net/texis/scripts/msearch/netsearch.html";
	
	$submit_vars["q"] = "amiga";
	$submit_vars["submit"] = "Search!";
	$submit_vars["searchhost"] = "Altavista";

		
	if($snoopy->submit($submit_url,$submit_vars))
	{
		while(list($key,$val) = each($snoopy->headers))
			echo $key.": ".$val."<br>\n";
		echo "<p>\n";
		
		echo "<PRE>".htmlspecialchars($snoopy->results)."</PRE>\n";
	}
	else
		echo "error fetching document: ".$snoopy->error."\n";

	Example:	showing functionality of all the variables:

	include "Snoopy.class.php";
	$snoopy = new Snoopy;

	$snoopy->proxy_host = "my.proxy.host";
	$snoopy->proxy_port = "8080";
	
	$snoopy->agent = "(compatible; MSIE 4.01; MSN 2.5; AOL 4.0; Windows 98)";
	$snoopy->referer = "http://www.microsnot.com/";
	
	$snoopy->cookies["SessionID"] = 238472834723489l;
	$snoopy->cookies["favoriteColor"] = "RED";
	
	$snoopy->rawheaders["Pragma"] = "no-cache";
	
	$snoopy->maxredirs = 2;
	$snoopy->offsiteok = false;
	$snoopy->expandlinks = false;
	
	$snoopy->user = "joe";
	$snoopy->pass = "bloe";
	
	if($snoopy->fetchtext("http://www.phpbuilder.com"))
	{
		while(list($key,$val) = each($snoopy->headers))
			echo $key.": ".$val."<br>\n";
		echo "<p>\n";
		
		echo "<PRE>".htmlspecialchars($snoopy->results)."</PRE>\n";
	}
	else
		echo "error fetching document: ".$snoopy->error."\n";

	Example: 	fetched framed content and display the results
	include "Snoopy.class.php";
	$snoopy = new Snoopy;
	
	$snoopy->maxframes = 5;
	
	if($snoopy->fetch("http://www.ispi.net/"))
	{
		echo "<PRE>".htmlspecialchars($snoopy->results[0])."</PRE>\n";
		echo "<PRE>".htmlspecialchars($snoopy->results[1])."</PRE>\n";
		echo "<PRE>".htmlspecialchars($snoopy->results[2])."</PRE>\n";
	}
	else
		echo "error fetching document: ".$snoopy->error."\n";
-----



$cadena_de_texto = 'Esta es la frase donde haremos la búsqueda';
$cadena_buscada   = 'la';
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
 
//se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
if ($posicion_coincidencia === false) {
    echo "NO se ha encontrado la palabra deseada!!!!";
    } else {
            echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia;
            }
 
$posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada, 20);
if ($posicion_coincidencia === false) {
    echo "NO se ha encontrado la palabra deseada!!!!";
    } else {
            echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia;
            }
*/
?>
</body>