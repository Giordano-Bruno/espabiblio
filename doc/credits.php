<?php

  $tab = "home";
  $nav = "credits";
  require_once("../shared/common.php");
  include("../shared/header.php");

  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
?>

<h1><?php echo $loc->getText("creditsHeading"); ?></h1>

<br><br>
<pre>
-------El equipo de desarrollo versión openbiblio BaseDatos 7.2. o Espabiblio 3.0 (2012)

OpenBiblio versión 0.6.1 database versión 0.6.0 Tim Dave Stevens  (Copry © 2002-2005 )

----------Algunas funciones Extras
* (http://opendream.co.th)

  <li>
	<p>&nbsp;</p>
<p>año 2011</p>
<p>Algunas funciones Extras y traducción de la versión 7.1 del openbiblio José Antonio Lara Galindo
<p>Traducción al español de esta versión José Antonio Lara Galindo, joanlaga@hotmail.com</p>
Traducciones menores:
Ajuste para instalación en español.
Corrección de las ayudas y traducción de gran parte de ellas.

<p>año 2005</p>
<p>Traducción de la versión 6.0 de openbiblio&nbsp; y adecuación para Latino América, Jorge Lara C. ( espabiblio Ver. 2.0 ). ---</p>
<p>&nbsp;</p>

Fonts: 
* Free 3 of 9 Fonts by Matthew Welch (1997)

Frameworks:
* CloudFusion - http://getcloudfusion.com
* License: Simplified BSD License - http://opensource.org/licenses/bsd-license.php

OpenURL features:
* function from Zotero > OpenURL COinS support
* http://www.zotero.org/support/dev/making_coins

Sorceforge.net quien nos permite la difusion gratuita de este programa en link 
https://sourceforge.net/projects/espabiblio/

---En respeto a los términos de la GNU General Public License.
Nota:
Algunas omisiones fueron accidentales al no encontrar los desarrollos originales o al no mirar en detalla los códigos fuentes adjuntos, este es su caso favor de contactarme para integrar dicha información.

ซอฟต์แวร์นี้พัฒนาต่อจากโปรแกรม OpenBiblio version 0.6.1 database version 0.6.0 โดย Dave Stevens  (สงวนลิขสิทธิ์ © 2002-2005 ) ซึ่งอยู่ภายใต้ลิขสิทธิ์ GNU General Public License 
ทีมพัฒนาประกอบด้วย:
* การพัฒนาโปรแกรมเพิ่มเติม โดย โอเพ่นดรีม (http://opendream.co.th)
* การพัฒนาภาษาไทย โดย คุณประสิทธิ์ชัย เลิศรัตนเคหกาล
* การกำหนดความต้องการของโปรแกรมและแนะนำการใช้งาน โดย ฝ่ายบริการความรู้ทางวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (STKS) สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช.) 

--------Algunas direcciones de uso de este programa:
http://unaweb.una.ac.cr/openbiblio

</pre>
<?php include("../shared/footer.php");
