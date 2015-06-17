<?php

require_once("../shared/common.php");
?>
<h1>Formatos de CSV para su importación a OpenBiblio:</h1>
<p>La plantilla CSV  que se dispone en OpenBiblio es el formato de valores separado por tabuladores (TSV).</p>

<p>Para Microsoft Excel 2003/2007: descargar la plantilla, añadir con informaciones de libros, guardarla como CSV/TSV y cargar la misma en el openbiblio.</p>
<p>Para OpenOffice u otro software de edición de CSV: asegúrese de que el documento, tenga seleccionado el conjunto carácteres en Unicode o UTF-16
y permitir separadores "tab" para abrir la plantilla CSV. En OpenOffice, asegúrese de seleccionar "Mantener formato actual", al guardarlo.</p>
<h4>Cómo utilizar la plantilla CSV:</h4>
<ul>
  <li>Descargar archivo de plantilla.</li>
  <li>Abrir archivo de CSV con software de edición por ejemplo. Microsoft Office, OpenOffice o Libreofice.</li>
  <li>añadir información de los libros, por ejemplo. ISBN<font color="red">*</font>, Autores<font color="red">*</font>, Titulo<font color="red">*</font>, etc. (Nota: Primeras las 3 columnas son requeridas)</li>

  <li>La columna 'Nombre de archivo de la portada del libro' requieren enlace del archivo para cubrir la imagen en <?php echo COVER_PATH; ?> Directorio.</li>
  <li>No cambie, modifique el orden u omita las columnas de la primera fila en el archivo de plantilla, se rechaza al subir.</li>
  <li>Guardar y luego subir en la página de importación de CSV. (Catálogo> Importar CSV)</li>
</ul>

<font class="small">Nota: Subir sería fallído en las siguientes condiciones:
<ol>
  <li>Falta o cualquier cambio con la cabecera (primera fila en formato CSV).</li>
  <li>Omitir Campos o culumnas requeridas (los marcados con "*" en la plantilla de llenado en catalogo/nuevo).</li>
  <li>Formato incorecto del Archivo CSV (no es texto plano).</li>
  <li>Error al guardar una nueva base de datos bibliográfica. (consultar con el administrador del sistema)</li>
  <li>Archivo demasiado grande. (consultar con el administrador del sistema, para conocer la veriable de "maxziseupload")</li>
</ol>
</font>

<font class="normal">
  <li>Cualquier otro problema o duda favor informe:  joanlaga@hotmail.com</li>
  <li>Visite nuestro foro sorceforge.</li>
</font>
