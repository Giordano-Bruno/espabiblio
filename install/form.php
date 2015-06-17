<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 // global $locale;

  $tab = "install";//jalg para uso de multi-idioma
  $locale = $_POST['locale'];//jalg para uso de multi-idioma

  $doing_install = true;
  require_once("../shared/common.php");
  require_once("../shared/global_constants.php");
  require_once("../classes/InstallQuery.php");
  require_once("../classes/Settings.php");

  require_once("../classes/Localize.php");//jalg para uso de multi-idioma
  $loc = new Localize($locale,$tab);//jalg para uso de multi-idioma

  $installQ = new InstallQuery();
  $version = NULL;
  $error = $installQ->connect_e();
 
  if (!$error) {
    $version = $installQ->getCurrentDatabaseVersion();
    $installQ->close();
  }
  include("../install/header.php");
?>

<?php
  // 0.7: CircQuery uses PHP to determine current time, other scripts use MySQL
  $mysql_date = implode(mysql_fetch_row(mysql_query('select sysdate();')));
  $php_date = date('Y-m-d H:i:s');
  if ($php_date != $mysql_date) {
?>
    <font class="error"><?php echo $loc->getText("form_Mismatch_DATE"); ?></font><br>
<?php    echo $loc->getText("form_Warring_DATE"); ?> (YYYY-MM-DD HH:MM:SS):<br>
    <pre>
      MySQL : <?php echo $mysql_date; ?></br>
      PHP   : <?php echo $php_date." | date.timezone = ".ini_get('date.timezone'); ?></br>
      /sared/global_constants.php: date_default_timezone_set('America/Mexico_City'), [<?php echo $loc->getText("form_Note_1"); ?>]</br>
    </pre>
<?php
    if (ini_get('date.timezone') == get_cfg_var('date.timezone')) {
      echo "<b>"      . $loc->getText("form_Suggestion") . ":</b>";
      echo "<ul><li>" . $loc->getText("form_timezone_1") . "<a href = \"../install/phpinfo.php\">phpinfo</a>," . $loc->getText("form_timezone_2") . "</li>";
      echo "<li>"     . $loc->getText("form_timezone_3") . "<i>date.timezone</i>" . $loc->getText("form_timezone_4") . "</li>";
      echo "<li>"     . $loc->getText("form_timezone_5") . "</li></ul><br>";
    }
  }
?>

<h3><?php echo  $loc->getText("form_Ver_1") . H(OBIB_CODE_VERSION) . $loc->getText("form_Ver_2") ; ?></h3>
<li>      <a href="../doc/credits.php"  target="_blank">  <?php echo $loc->getText("form_credits"); ?></a> </li>
<li>      <a href="../doc/COPYRIGHT.html"  target="_blank">  <?php echo $loc->getText("form_Copring"); ?></a> </li>
<li>      <a href="../doc/copying.html"  target="_blank">  <?php    echo $loc->getText("form_Licence"); ?></a> </li>
<li>      <a href="../doc/GNU.html"  target="_blank">  <?php    echo $loc->getText("form_GNU"); ?></a> </li>
<li>      <a href="../doc/ChangeLog"  target="_blank">  <?php echo $loc->getText("form_Changelog"); ?></a> </li>
<li>      <a href="../doc/GB.html"  target="_blank">  <?php echo $loc->getText("form_GB"); ?></a> </li>
<li>      <a href="../install/phpinfo.php" target="_blank">  <?php echo $loc->getText("form_phpinfo"); ?></a> </li>
<li>      <a href="../doc/install_instructions_GB.html"  target="_blank">  <?php echo $loc->getText("form_instructions"); ?></a> </li></br>
<li>        <font class="error">   <?php echo $loc->getText("form_WARNING_1"); ?></font> </li>
</br>
</br> 
<?php echo $loc->getText("form_data_Note_1"); ?>  max_execution_time = 300 
<?php echo $loc->getText("form_data_Note_2"); ?>      
<?php echo  ini_get('max_execution_time') ;
/*
get_cfg_var() //- Obtiene el valor de una opción de configuración de PHP
ini_get_all() //- Obtiene todas las opciones de configuración
ini_restore() //- Restablece el valor de una opción de configuración
ini_set() //- Establece el valor de una directiva de configuración
*/
?>
</a>
</br>

<?php
  if ($error) {
?>
 <?php echo $loc->getText("form_Database_connection_bad"); ?>
    <pre>
      <?php echo H($error->toStr()); ?>
    </pre>
 <?php echo $loc->getText("form_data_Bad_Note_1"); ?>
    <ol>
      <li>	  <?php echo $loc->getText("form_data_Bad_Note_2"); ?>
        (<a  href="../doc/form_instructions_GB.html#step4"><?php echo $loc->getText("form_data_Bad_Note_step"); ?> 4</a> 
	      <?php echo $loc->getText("form_data_Bad_Note_3"); ?>	)</li>
      <li>	      <?php echo $loc->getText("form_data_Bad_Note_4"); ?>
        (<a 
	    href="../doc/form_instructions_GB.html#step5"><?php echo $loc->getText("form_data_Bad_Note_step"); ?> 5</a> 
	      <?php echo $loc->getText("form_data_Bad_Note_5"); ?>	)</li>
      <li>  <?php echo $loc->getText("form_data_Bad_Note_6"); ?>    
		(<a   href="../doc/form_instructions_GB.html#step8"><?php echo $loc->getText("form_data_Bad_Note_step"); ?> 8</a>
	      <?php echo $loc->getText("form_data_Bad_Note_5"); ?>	)</li>
    </ol>
     	      <?php echo $loc->getText("form_data_Bad_Note_7"); ?>
	    <a href="../doc/form_instructions_GB.html"  target="_blank" >  <?php echo $loc->getText("form_instructions"); ?></a>
 	      <?php echo $loc->getText("form_data_Bad_Note_8"); ?>
<?php
  } else {
    echo "</br>";
    echo $loc->getText("form_Database_connection_good");
    echo "</br>";

    if ($version == OBIB_LATEST_DB_VERSION) {
?>
      <blockquote>
        <h2><?php echo $loc->getText("form_Update_1"); ?></h2>
        <font class="error"><?php echo $loc->getText("form_No_action_required"); ?></font></br></br>
        <font class="error"><a href="../home/index.php"><?php echo $loc->getText("form_start"); ?></a></font>
      </blockquote>
<?php
    } elseif ($version == NULL) {
?>
      <h2> <?php echo $loc->getText("form_New_Install"); ?> :</h2>
      <blockquote>
        <form name="installForm" method="POST" action="../install/install.php">
          <table cellpadding=0 cellspacing=0 border=0>
            <tr>
              <td><font class="primary"><?php echo $loc->getText("form_Language"); ?> :   </font></td>
              <td><select name="locale">
                <?php
                  $stng = new Settings();
                  $arr_lang = $stng->getLocales();
                  foreach ($arr_lang as $langCode => $langDesc) {
                    echo "<option value=\"".H($langCode)."\"";
                    echo ">".H($langDesc)."\n";
                  }
                ?>
              </select></td>
            </tr>

            <tr>
              <td rowspan="0" valign="top" valign="left"><font class="primary"><?php echo $loc->getText("form_Test_data");?> : </font></td>
              <td><input type="checkbox" name="installTestData" value="yes"></td>
            </tr>
            <tr>
              <td rowspan="0" valign="top" valign="left"><font class="primary"><?php echo $loc->getText("form_CDU");//jalg para uso discrimitavo catalogo en base de datos?>: </font></td>
              <td><input type="checkbox" name="CDU" value="yes"></td>
            </tr>
            <tr>
              <td rowspan="0" valign="top" valign="left"><font class="primary"><?php echo $loc->getText("form_CDD");//jalg para uso discrimitavo catalogo en base de datos?>: </font></td>
              <td><input type="checkbox" name="CDD" value="yes"></td>
            </tr>
            <tr>
              <td rowspan="0" valign="top" valign="left"><font class="primary"><?php echo $loc->getText("form_IBIC");//jalg para uso discrimitavo catalogo en base de datos?>: </font></td>
              <td><input type="checkbox" name="IBIC" value="yes"></td>
            </tr>
            <tr>
              <td rowspan="0" valign="top" valign="left"><font class="primary"><?php echo $loc->getText("form_CUTTER");//jalg para uso discrimitavo catalogo en base de datos?>: </font></td>
              <td><input type="checkbox" name="CUTTER" value="yes"></td>
            </tr>
            <tr>
              <td><input type="submit" value=<?php echo $loc->getText("form_Install");?>></td>
            </tr>
          </table>
        </form>
      </blockquote>
<?php
    } else {
?>
      </br><?php echo $loc->getText("form_Need_Update") . " " . H($version) . " " . $loc->getText("to_version") . " " . H(OBIB_LATEST_DB_VERSION); ?>:</br>
      <blockquote>
        <font class="error">  <?php echo $loc->getText("form_WARNING_1");  ?></font>
        <form name="updateForm" method="POST" action="../install/update.php">
          <input type="submit" value=<?php echo $loc->getText("Update");?>>
        </form>
      </blockquote>
<?php
    }
  }
  include("../install/footer.php");
