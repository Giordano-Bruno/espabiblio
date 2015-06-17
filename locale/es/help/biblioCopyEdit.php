<h1>Copiar y editar nuevas p&aacute;ginas :</h1>
<center>
  <font class="error">No editar copias en prestamo
(<a href="http://sourceforge.net/tracker/index.php?func=detail&aid=1162251&group_id=50071&atid=458474">
Bug 1162251</a>).</font>
</center>
<br><br>

Sub secciones de ayuda:
<ul>
  <li><a href="#desc">Descripci&ograve;n de Campos </a></li>
  <li><a href="#barc"></a> <a href="#barc">N&uacute;mero de c&oacute;digos de barras al ingresar una estructura externa de numeraci&oacute;n</a> </li>
  <li><a href="#auto">Autogenerar c&oacute;digos de barra </a></li>
  <li><a href="#seri"></a> <a href="#seri">Copiar n&uacute;meros de serie integrados en los n&uacute;meros de c&oacute;digo de barra</a>s</li>
</ul>
<br><br>

<a name="desc">E</a>l siguiente cuadro proporciona descripciones de los campos situados en  Copiar y editar p&aacute;ginas.
<br>
<br>

<table class="primary">
  <tr>
    <th>Campo</th>
    <th>Descripcci&oacute;n</th>
  </tr>
  <tr>
    <td class="primary" valign="top">Número de codigo de barras o codigo de copia</td>
    <td class="primary" valign="top">Código de identificación único de una copia (tambien conosido como numero de serie), deben ser todos caracteres alfabéticos y/o numéricos,
un máximo de 20 caracteres.<br>
Este campo es obligatorio, ya que identifica la copia en los formatos de circulación o prestamo<br>
(La hora de salida, hora de llegada, espera)

<br><br>Ver tambien: 
<a href="../shared/help.php?page=barcodes">Comprendiendo los codigos de Barras</a>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">Descripción</td>
    <td class="primary" valign="top">Texto breve enumerando caracteristicas unicas de la copia.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">estado</td>
    <td class="primary" valign="top"><b>Unicamente en edicion de copias</b>.
<br>See also: 
<a href="../shared/help.php?page=status">Comprendiendo los cambios de estado de las bibliografías</a>
    </td>
  </tr>
</table>
<br><br>

<a name="barc">Número de código de barras que entra por una estructura de numeración externa (uso de lectores o escanner)</a>:
<ul>
  <li>Ingresa el número de código de barras manualmente, o utilizar un escáner de código de barras si la copia ya está etiquetada,</li>
  <li>Enviar (Autogenerar sin revisar) .</li>
</ul>
<br>

<a name="auto">
Mediante la activación de la paloma de verificacion en nueva copia.  
<input name="autocodigo de barras" type="checkbox" checked> Autogenerate</a> 
  opción para el campo de código de barras marcada, OpenBiblio asignara un número de código de barras único
automáticamente, siguiendo las reglas de la estructura interna de numeración:
<ul>
  <li>La primera parte se calcula a partir de la <i>bibid</i> (numero inerno de control de la base de datos) 
por lo que la bibliografía es enviada internamente a OpenBiblio, con ceros a la izquierda. 
La longitud predeterminada es de 5 dígitos, esto se puede cambiar editando el valor de
--  $nzeros en archivo biblio_copy_new.php --.</li>
  <li>La ultima parte es igual que el que el valor interno de <i>copyid</i> de la copia.</li>
</ul>
<br><br>

<a name="seri">
el numero de serie de la copia es genrado de manera integra con el número de codigo de barras
</a> facilitar la introducción de información copia de un simple archivos de la tarjeta cuando el número único no fueron asignados, sólo los números de serie de varias copias de un título.
<br>
La página de búsqueda de código de barras contiene información sobre 
<a href="../shared/help.php?page=opacLookup#seri">Reconociendo el número de copias de serie en los números de código de barras autogenerados</a>.
<br>
Al agregar copias marcadas con la identificación de número de serie para una Bibliografía:
<ul>
  <li>Compruebe Autogenerar,</li>
  <li>mostrar nuevas copias hasta el número de copias en serie se corresponde con el número de código de barras generado automáticamente el último dígito(s),</li>
  <li>eliminar las copias hace que no este disponible, modificar el estado de las otras copias.</li>
</ul>
<br><br>
