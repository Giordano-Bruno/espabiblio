<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
			//$updateDir = '../install/GB-0.33/update';//#FIX integrar cambios de precio y otros.revisar si es necesario en la instalacio jalg

require_once("../shared/global_constants.php");
require_once("../classes/Query.php");

class InstallQuery extends Query {
  /* Override constructor so the installer can test the database connection */
  function InstallQuery() {
    ;
  }
  function dropTable($tableName) {
    $sql = $this->mkSQL("drop table if exists %I ", $tableName);
    $this->exec($sql);
  }
  
  function renameTables($fromTablePrfx, $toTablePrfx = DB_TABLENAME_PREFIX) {
    $fromTableNames = $this->getTableNames($fromTablePrfx.'%');
    foreach($fromTableNames as $fromTableName) {
      $toTableName = str_replace($fromTablePrfx, $toTablePrfx, $fromTableName);
      $this->renameTable($fromTableName, $toTableName);
    }
  }
  
  function renameTable($fromTableName, $toTableName) {
      $this->dropTable($toTableName);
      $sql = "rename table ".$fromTableName." to ".$toTableName;
      $this->exec($sql);
  }

  function getTableNames($pattern = "") {
    if($pattern == "") {
      $pattern = DB_TABLENAME_PREFIX.'%';
    }
    $sql = "show tables like '".$pattern."'";
    $rows = $this->exec($sql, OBIB_NUM);

    $tablenames = array();
    foreach ($rows as $row) {
      $tablenames[] = $row[0];
    }
    return $tablenames;
  }
  
  function _getSettings($tablePrfx) {
    $sql = $this->mkSQL('SHOW TABLES LIKE %Q ', $tablePrfx.'settings');
    $row = $this->select01($sql);
    if (!$row) {
      return false;
    }
    $sql = $this->mkSQL('SELECT * FROM %I ', $tablePrfx.'settings');
    return $this->select1($sql);
  }
  
  function getCurrentLocale($tablePrfx = DB_TABLENAME_PREFIX) {
    $array = $this->_getSettings($tablePrfx);
    if($array == false || !isset($array["locale"])) {
      return 'es'; //Earlier versions of Openbiblio only supported español
    }    else {
      return $array["locale"];  
    }
  }

  function getCurrentDatabaseVersion($tablePrfx = DB_TABLENAME_PREFIX) {
    $array = $this->_getSettings($tablePrfx);
    if($array == false) {
      return false;
    }
    else {
      return $array["version"];
    }
  }

  function freshInstall($locale, $parament,  //jalg para descrimitarios 
	$sampleDataRequired =	false,
	$CDU		=	false,
	$CDD		=	false,
	$IBIC		=	false,
	$CUTTER		=	false,
	$version	=	OBIB_LATEST_DB_VERSION,
	$tablePrfx	=	DB_TABLENAME_PREFIX) {
  			$rootDir   = '../install/' . $version . '/sql';
			$ComunDir =  '../install/GB-0.34/comun';
			$localeDir = '../locale/' . $locale . '/sql/' . $version;
			$updateDir = '../install/GB-0.33/update';//#FIX integrar cambios de precio y otros.revisar si es necesario en la instalacio jalg

		if( !($parament == 'CDU' || $parament == 'CDD' || $parament == 'IBIC' || $parament == 'CUTTER')) {//jal jul-2013 para discrimitavos
			    $this->executeSqlFilesInDir($ComunDir , $tablePrfx);
			    $this->executeSqlFilesInDir($rootDir , $tablePrfx);
			    $this->executeSqlFilesInDir($localeDir . '/domain/'	,  $tablePrfx);
			    $this->executeSqlFilesInDir($localeDir . '/MARC/'	,  $tablePrfx);
			    $this->executeSqlFilesInDir($localeDir . '/lookup2/'	,  $tablePrfx);
			    $this->executeSqlFilesInDir($localeDir . '/theme/'	,  $tablePrfx);
				if($sampleDataRequired) {
						$this->executeSqlFilesInDir($localeDir . '/sample/',  $tablePrfx);
				}
			  	$this->executeSqlFilesInDir($updateDir, $tablePrfx);
		 }

		switch ($parament) {

			case  'CDU' :
				if($sampleDataRequired) {
		     		 $this->executeSqlFilesInDir($localeDir . '/CDU/',  $tablePrfx);
			    }
				break;
			case   'CDD':
				if($sampleDataRequired) {
		     		 $this->executeSqlFilesInDir($localeDir . '/CDD/',  $tablePrfx);
			    }
 				break;
			case  'IBIC':
				if($sampleDataRequired) {
		     		 $this->executeSqlFilesInDir($localeDir . '/IBIC/', $tablePrfx);
			    }
				break;
			case  'CUTTER':
				if($sampleDataRequired) {
		     		 $this->executeSqlFilesInDir($localeDir . '/CUTTER/', $tablePrfx);
			    }
 			break;
	 	}//case
	}//funtion

  function executeSqlFilesInDir($dir, $tablePrfx = "") {
    if (is_dir($dir)) {
      if ($dh = opendir($dir)) {
        while (($filename = readdir($dh)) !== false) {
                  if(is_dir($dir . '/' . $filename) && !($filename == '.' || $filename == '..')) {
            $this->executeSqlFilesInDir($dir . '/' . $filename, $tablePrfx);
          }
          else if(preg_match('/\\.sql$/', $filename)) {
            $this->executeSqlFile($dir.'/'.$filename, $tablePrfx);
echo '</br>$filename;  ';
echo $filename;
echo "</br>";
echo '</br>$dir;  ';
echo $dir;
          }
        }
        closedir($dh);
      }
    }
  }

  /**********************************************************************************
   * Function to read through an sql file executing SQL only when ";" is encountered
   **********************************************************************************/
  function executeSqlFile($filename, $tablePrfx = DB_TABLENAME_PREFIX) {
    $fp = fopen($filename, "r");
    # show error if file could not be opened
    if ($fp == false) {
      Fatal::error("Error reading file: ".H($filename));
    } else {
      $sqlStmt = "";
      while (!feof ($fp)) {
        $char = fgetc($fp);
        if ($char == ";") {
          //replace table prefix, we're doing it here as the install script may
          //want to override the required prefix (eg. during upgrade / conversion 
          //process)
          $sql = str_replace("%prfx%",$tablePrfx,$sqlStmt);
          $root_path = "http://" . $_SERVER['HTTP_HOST'] . dirname(dirname($_SERVER['SCRIPT_NAME']));
          if (substr($root_path, -1) == '/') {
            $root_path = substr($root_path, 0, -1);
          }
          $sql = str_replace('%domain%', $root_path . "/cron/lookup.php", $sql);
          $this->exec($sql);
          $sqlStmt = "";
        } else {
          $sqlStmt .= $char;
        }
      }
      fclose($fp);
    }
  }
}
