<h1><font class="li"><font class="title"><B>Ayuda para modulos de Administración:</B></h1>
<br><br>
Subsecciones:
<ul>
  <li><a href="#Administración" title="Este modulo le permite configurar y administras varias instancias del gestor de bibliotecas.">
<font class="li">Administración.</font></a></li>
  <li><a href="#Administración de bibliotecarios"><font class="li">Administración de bibliotecarios.</font></a></li>
  <li><a href="#Configuración de la biblioteca"><font class="li">Configuración de la biblioteca.</font></a></li>

  <li><a href="#Grupos de usuarios"><font class="li">Grupos de usuarios.</font></a></li>
  <li><a href="#Grados de usuario"><font class="li">Grados de usuario.</font></a></li>
  <li><a href="#Personalización de Campos de datos para las copias"><font class="li">Personalización de Campos de datos para las copias.</font></a></li>
  <li><a href="#Tipos de material"><font class="li">Tipos de material.</font></a></li>
  <li><a href="#Estado de Materiales"><font class="li">Estado de Materiales.</font></a></li>
  <li><a href="#Colecciones"><font class="li">Colecciones.</font></a></li>
  <li><a href="#Gestionar privilegios"><font class="li">Gestionar privilegios.</font></a></li>
  <li><a href="#Búsqueda de portadas"><font class="li">Búsqueda de portadas.</font></a></li>
  <li><a href="#Opciones Z39.50"><font class="li">Opciones Z39.50.</font></a></li>
  <li><a href="#Servidores Z39.50"><font class="li">Servidores Z39.50.</font></a></li>
  <li><a href="#Búsqueda masiva de datos vía ISBN"><font class="li">Búsqueda masiva de datos vía ISBN.</font></a></li>
  <li><a href="#Temas de diseño"><font class="li">Temas de diseño.</font></a></li>
  <li><a href="#Importar/Exportar"><font class="li">Importar/Exportar.</font></a></li>
  <li><a href="#phpinfo.php"><font class="li">phpinfo.php.</font></a></li>
</ul>

<a name="Administración"><B>Administración</B></a></br>

   <link TITLE="" HREF=""> 

<h1>
<P>
Este modulo le permite configurar y administras varias instancias del gestor de bibliotecas.
</P>
</h1>

Use el menu de la izquieda para seleccionar.

<BLOCKQUOTE>
<div CLASS="CHAPTER">
<HR>

<A NAME="Administración de bibliotecarios"><B>Administración de bibliotecarios</B></a></br>


<a href="../admin/staff_new_form.php?reset=Y">Añadir nuevo bibliotecario</a><br><br>
<h1>Listado de bibliotecarios:</h1>
<table class="primary">
  <tr>
    <th colspan="3" rowspan="2" valign="top">
      Funciones    </th>
    <th rowspan="2" valign="top" nowrap="yes">
      Apellido:    </th>
    <th rowspan="2" valign="top" nowrap="yes">
      Nombre:    </th>
    <th rowspan="2" valign="top">
      Usuario:    </th>
    <th colspan="5">
      Permisos:    </th>
    <th rowspan="2" valign="top">
      Suspendido:    </th>
  </tr>
  <tr>
    <th>
      Prestamos o Circulación    </th>
    <th>
      Actualizar usuario    </th>
    <th>
      Catalogar    </th>
    <th>
      Administración    </th>
    <th>
      Reportes    </th>
  </tr>
    <tr>
    <td valign="top" class="primary">
      <a href="../admin/staff_edit_form.php?UID=1" class="primary">editar</a>
    </td>
    <td valign="top" class="primary">
      <a href="../admin/staff_pwd_reset_form.php?UID=1" class="primary">contraseña</a>
    </td>
    <td valign="top" class="primary">
      <a href="../admin/staff_del_confirm.php?UID=1&amp;LAST=Root+Administrator&amp;FIRST=" class="primary">eliminar</a>
    </td>
    <td valign="top" class="primary">
      Root Administrator    </td>
    <td valign="top" class="primary">
          </td>
    <td valign="top" class="primary">
      admin    </td>
    <td valign="top" class="primary">
      Sí    </td>
    <td valign="top" class="primary">
      Sí    </td>
    <td valign="top" class="primary">
      Sí    </td>
    <td valign="top" class="primary">
      Sí    </td>
    <td valign="top" class="primary">
      Sí    </td>
    <td valign="top" class="primary">
      No    </td>
  </tr>
  </table>








<A NAME="Configuración de la biblioteca"><B>Configuración de la biblioteca</B></a></br>



<br><br>



<form name="editsettingsform" method="POST" action="../admin/settings_edit.php">
<input type="hidden" name="code" value="">
<table class="primary">
  <tr>
    <th colspan="2" nowrap="yes" align="left">
      Editar las propiedades de la biblioteca:    </th>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Nombre de la biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryName" name="libraryName" value="Biblioteca, Giordano Bruno" size="40" maxlength="128" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      URL del logotipo de la biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryImageUrl" name="libraryImageUrl" value="../images/sampleLogo.png" size="40" maxlength="300" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Mostrar sólo el logotipo en el encabezado:    </td>
    <td valign="top" class="primary">
      <input type="checkbox" name="isUseImageSet" value="CHECKED"
         >
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Horario de la biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryHours" name="libraryHours" value="M-F 8am-9pm, Sa noon-5pm, Su 1-5pm" size="40" maxlength="128" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Dirección de la biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryAders" name="libraryAders" value="Calle 5, No 23, Col Sol, México, D. F." size="40" maxlength="40" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Teléfono de la biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryPhone" name="libraryPhone" value="111-222-3333" size="40" maxlength="40" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      URL de la biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryUrl" name="libraryUrl" size="40" maxlength="300" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      URL del OPAC:    </td>
    <td valign="top" class="primary">
      <input type="text" id="opacUrl" name="opacUrl" value="../opac/index.php" size="40" maxlength="300" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
     Duración de la sesión:    </td>
    <td valign="top" class="primary">
      <input type="text" id="sessionTimeout" name="sessionTimeout" value="20" size="3" maxlength="3" style="visibility: visible" onChange="modified=true" /> minutos    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Resultados de la búsqueda:    </td>
    <td valign="top" class="primary">
      <input type="text" id="itemsPerPage" name="itemsPerPage" value="10" size="2" maxlength="2" style="visibility: visible" onChange="modified=true" />artículos por página    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      Limpiar el historial de la bibliografía:    </td>
    <td valign="top" class="primary">
      <input type="text" id="purgeHistoryAfterMonths" name="purgeHistoryAfterMonths" value="6" size="2" maxlength="2" style="visibility: visible" onChange="modified=true" />meses    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Bloquear préstamos cuando haya pendiente una multa:    </td>
    <td valign="top" class="primary">
      <input type="checkbox" name="isBlockCheckoutsWhenFinesDue" value="CHECKED"
        CHECKED >
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      Máxima longitud a mantener:    </td>
    <td valign="top" class="primary">
      <input type="text" id="holdMaxDays" name="holdMaxDays" value="14" size="2" maxlength="2" style="visibility: visible" onChange="modified=true" />días    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      Idioma:    </td>
    <td valign="top" class="primary">
      <select name="locale">
        <option value="es" selected>Castellano</option>
<option value="en">English</option>
      </select>
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Juego de caracteres HTML:    </td>
    <td valign="top" class="primary">
      <input type="text" id="charset" name="charset" value="UTF-8" size="20" maxlength="20" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Atributos de etiquetas de lenguaje HTML:    </td>
    <td valign="top" class="primary">
      <input type="text" id="htmlLangAttr" name="htmlLangAttr" size="8" maxlength="8" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Auto-actualizar usuarios inactivos en:    </td>
    <td valign="top" class="primary">
      <input type="text" id="inactiveMemberAfterDays" name="inactiveMemberAfterDays" value="90" size="2" maxlength="2" style="visibility: visible" onChange="modified=true" />días    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Tipo de fuente:    </td>
    <td valign="top" class="primary">
      <select name="fontNormal"><option value="Code39JK" >Code39JK</option>
<option value="Courier" >Courier</option>
<option value="Courier-Bold" >Courier-Bold</option>
<option value="Courier-BoldOblique" >Courier-BoldOblique</option>
<option value="Courier-Oblique" >Courier-Oblique</option>
<option value="Helvetica" >Helvetica</option>
<option value="Helvetica-Bold" >Helvetica-Bold</option>
<option value="Helvetica-BoldOblique" >Helvetica-BoldOblique</option>
<option value="Helvetica-Oblique" >Helvetica-Oblique</option>
<option value="Symbol" >Symbol</option>
<option value="Times-Bold" >Times-Bold</option>
<option value="Times-BoldItalic" >Times-BoldItalic</option>
<option value="Times-Italic" >Times-Italic</option>
<option value="Times-Roman" >Times-Roman</option>
<option value="ZapfDingbats" >ZapfDingbats</option>
<option value="free3of9x" >free3of9x</option>
<option value="freesans" >freesans</option>
<option value="garuda" >garuda</option>
<option value="helvetica" >helvetica</option>
<option value="th-sarabun" selected="selected">th-sarabun</option>
<option value="ubuntu" >ubuntu</option>
</select>
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Tamaño de la fuente:    </td>
    <td valign="top" class="primary">
      <input type="text" id="fontSize" name="fontSize" value="14" size="2" maxlength="2" style="visibility: visible" onChange="modified=true" /> pt    </td>
  </tr>
  <tr>
    <td align="center" colspan="2" class="primary">
      <input type="submit" value="  Actualizar  " class="button">
    </td>
  </tr>

</table>
      </form>

UTF-8 y otro es el ISO-8859-1, que son adecuados por contener los caracteres típicos de español.
<br><br>






<A NAME="Grupos de usuarios"><B>Grupos de usuarios</B></a></br>


<a title="Logo de la web" alt="Texto alternativo"  href="../admin/mbr_classify_new_form.php?reset=Y">Añadir nuevo grupo de usuarios</a><br>
<h1>Grupos de usuarios:</h1>
<table class="primary">
  <tr>
    <th colspan="2" valign="top">Función      <font class="small">*</font>
    </th>
    <th valign="top">
      Descripción    </th>
    <th valign="top">
      Máximo de multas    </th>
    <th valign="top">
      Usuarios    </th>
  </tr>
    <tr>
    <td valign="top" class="primary">
      <a href="../admin/mbr_classify_edit_form.php?code=1" class="primary">Editar</a>
    </td>
    <td valign="top" class="primary">
      eliminar    </td>
    <td valign="top" class="primary">
      adultos    </td>
    <td valign="top" class="primary">
      0.00    </td>
    <td valign="top" align="center"  class="primary">
      2    </td>
  </tr>
    <tr>
    <td valign="top" class="alt1">
      <a href="../admin/mbr_classify_edit_form.php?code=2" class="alt1">Editar</a>
    </td>
    <td valign="top" class="alt1">
      eliminar    </td>
    <td valign="top" class="alt1">
      juveniles    </td>
    <td valign="top" class="alt1">
      0.00    </td>
    <td valign="top" align="center"  class="alt1">
      1    </td>
  </tr>
  </table>
<br>
<table class="primary"><tr><td valign="top" class="noborder"><font class="small">*Nota:</font></td>
<td class="noborder"><font class="small">La función de eliminación sólo está disponible en las clasificaciones que tienen un recuento de los miembros de cero. Si desea eliminar una clasificación con un número de miembros superior a cero por primera vez tendrá que cambiar a los miembros de otra clasificación.<br></font>
</td></tr></table>








<A NAME="Grados de usuario"><B>Grados de usuario</B></a></br>
<A NAME="Personalización de Campos de datos para las copias"><B>Personalización de Campos de datos para las copias</B></a></br>
<A NAME="Búsqueda masiva de datos vía ISBN"><B>Búsqueda masiva de datos vía ISBN</B></a></br>
<A NAME="Tipos de material"><B>Tipos de material</B></a></br>
<A NAME="Estado de Materiales"><B>Estado de Materiales</B></a></br>
<A NAME="Colecciones"><B>Colecciones</B></a></br>
<A NAME="Gestionar privilegios"><B>Gestionar privilegios</B></a></br>
<A NAME="Búsqueda de portadas"><B>Búsqueda de portadas</B></a></br>
<A NAME="Colecciones"><B>Colecciones</B></a></br>
<A NAME="Opciones Z39.50"><B>Opciones Z39.50</B></a></br>
<A NAME="Servidores Z39.50"><B>Servidores Z39.50</B></a></br>
<A NAME="Búsqueda masiva de datos vía ISBN"><B>Búsqueda masiva de datos vía ISBN</B></a></br>
<A NAME="Temas de diseño"><B>Temas de diseño</B></a></br>
<A NAME="Importar/Exportar"><B>Importar/Exportar</B></a></br>
<A NAME="phpinfo.php"><B>phpinfo.php</B></a></br>
<A NAME="Ayuda"><B>Ayuda</B></a></br>


<p>Los autores de esta sección:
<ul>
	<li><a href="mailto:joanaga@hotmail.com">José Antonio Lara Galindo</a>
	
</ul>
   Licencia P&uacute;blica GNU
   <link TITLE="Proyecto GNU" HREF="http://www.gnu.org"><A NAME="Búsqueda masiva de datos vía ISBN">
