<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  $doing_install = true;
  require_once("../shared/common.php");
  require_once("../classes/Settings.php");

  include("../install/header.php");
?>

<h1>Giordano Bruno <?php echo H(OBIB_CODE_VERSION); ?> Installation</h1>
</br>
      <h2>

<li>      Seleccione el idioma de la pantalla de instalacion, pude ser otro al del programa y base de datos.</li>
<li>      Select the language for the installation screen, I could be another to the program and database.</li>
<li>      Wählen Sie die Sprache für die Installation auswählen, konnte ich eine andere zum Programm und Datenbank sein.</li>
<li>      เลือกภาษาสำหรับการติดตั้งหน้าจอที่ฉันอาจจะเป็นอีกคนหนึ่งในการเขียนโปรแกรมและฐานข้อมูล</li>
<li>בחר את השפה עבור התקנת המסך, אני יכול להיות אחר לתכנית ומסד נתונים.		</li>
<li>    Выберите язык для установки экрана, я мог бы быть другой, чтобы программы и базы данных.</li>
<li>    Wybierz język ekranu w instalacji, mogłem być inny program i baza danych.</li>
</h2>

      <blockquote>
        <form  action="../install/form.php"  method="POST" name="installForm0">
          <table cellpadding=0 cellspacing=0 border=0>
            <tr>
              <td><font class="primary">Language:</font></td>
              <td>
 		  <select name="locale"  onchange="javascript:document.installForm0.submit();" >
                <?php
                  $stng0 = new Settings();
                  $arr_lang0 = $stng0->getLocales();
                    echo "<option value=\"SELEC\" >SELECT";
                  foreach ($arr_lang0 as $langCode0 => $langDesc0) {
                    echo "<option value=\"".H($langCode0)."\"";
                    echo ">".H($langDesc0)."\n";
                  }
                ?>
              </select></td>
            </tr>
          </table>
        </form>
      </blockquote>
<?php   // include("../install/footer.php");
