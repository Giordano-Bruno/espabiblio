<?php
  require_once("../shared/common.php");
  $tab = "home";
  $nav = "license";

  include("../shared/header.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
?>
<h1><?php echo $loc->getText("licenseHeading"); ?></h1>

<br>

<pre>
<a href="#en">Versión oficial en ingles</a>
<a href="#espa">Versión no oficial en español</a></br></br>

</br><a name="en">Versión oficial en ingles</a></br>
GNU GENERAL PUBLIC LICENSE
		       Version 2, June 1991

 Copyright (C) 1989, 1991 Free Software Foundation, Inc.
                       59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 Everyone is permitted to copy and distribute verbatim copies
 of this license document, but changing it is not allowed.

			    Preamble

  The licenses for most software are designed to take away your
freedom to share and change it.  By contrast, the GNU General Public
License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users.  This
General Public License applies to most of the Free Software
Foundation's software and to any other program whose authors commit to
using it.  (Some other Free Software Foundation software is covered by
the GNU Library General Public License instead.)  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
this service if you wish), that you receive source code or can get it
if you want it, that you can change the software or use pieces of it
in new free programs; and that you know you can do these things.

  To protect your rights, we need to make restrictions that forbid
anyone to deny you these rights or to ask you to surrender the rights.
These restrictions translate to certain responsibilities for you if you
distribute copies of the software, or if you modify it.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must give the recipients all the rights that
you have.  You must make sure that they, too, receive or can get the
source code.  And you must show them these terms so they know their
rights.

  We protect your rights with two steps: (1) copyright the software, and
(2) offer you this license which gives you legal permission to copy,
distribute and/or modify the software.

  Also, for each author's protection and ours, we want to make certain
that everyone understands that there is no warranty for this free
software.  If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so
that any problems introduced by others will not reflect on the original
authors' reputations.

  Finally, any free program is threatened constantly by software
patents.  We wish to avoid the danger that redistributors of a free
program will individually obtain patent licenses, in effect making the
program proprietary.  To prevent this, we have made it clear that any
patent must be licensed for everyone's free use or not licensed at all.

  The precise terms and conditions for copying, distribution and
modification follow.

		    GNU GENERAL PUBLIC LICENSE
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

  0. This License applies to any program or other work which contains
a notice placed by the copyright holder saying it may be distributed
under the terms of this General Public License.  The "Program", below,
refers to any such program or work, and a "work based on the Program"
means either the Program or any derivative work under copyright law:
that is to say, a work containing the Program or a portion of it,
either verbatim or with modifications and/or translated into another
language.  (Hereinafter, translation is included without limitation in
the term "modification".)  Each licensee is addressed as "you".

Activities other than copying, distribution and modification are not
covered by this License; they are outside its scope.  The act of
running the Program is not restricted, and the output from the Program
is covered only if its contents constitute a work based on the
Program (independent of having been made by running the Program).
Whether that is true depends on what the Program does.

  1. You may copy and distribute verbatim copies of the Program's
source code as you receive it, in any medium, provided that you
conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the
notices that refer to this License and to the absence of any warranty;
and give any other recipients of the Program a copy of this License
along with the Program.

You may charge a fee for the physical act of transferring a copy, and
you may at your option offer warranty protection in exchange for a fee.

  2. You may modify your copy or copies of the Program or any portion
of it, thus forming a work based on the Program, and copy and
distribute such modifications or work under the terms of Section 1
above, provided that you also meet all of these conditions:

    a) You must cause the modified files to carry prominent notices
    stating that you changed the files and the date of any change.

    b) You must cause any work that you distribute or publish, that in
    whole or in part contains or is derived from the Program or any
    part thereof, to be licensed as a whole at no charge to all third
    parties under the terms of this License.

    c) If the modified program normally reads commands interactively
    when run, you must cause it, when started running for such
    interactive use in the most ordinary way, to print or display an
    announcement including an appropriate copyright notice and a
    notice that there is no warranty (or else, saying that you provide
    a warranty) and that users may redistribute the program under
    these conditions, and telling the user how to view a copy of this
    License.  (Exception: if the Program itself is interactive but
    does not normally print such an announcement, your work based on
    the Program is not required to print an announcement.)

These requirements apply to the modified work as a whole.  If
identifiable sections of that work are not derived from the Program,
and can be reasonably considered independent and separate works in
themselves, then this License, and its terms, do not apply to those
sections when you distribute them as separate works.  But when you
distribute the same sections as part of a whole which is a work based
on the Program, the distribution of the whole must be on the terms of
this License, whose permissions for other licensees extend to the
entire whole, and thus to each and every part regardless of who wrote it.

Thus, it is not the intent of this section to claim rights or contest
your rights to work written entirely by you; rather, the intent is to
exercise the right to control the distribution of derivative or
collective works based on the Program.

In addition, mere aggregation of another work not based on the Program
with the Program (or with a work based on the Program) on a volume of
a storage or distribution medium does not bring the other work under
the scope of this License.

  3. You may copy and distribute the Program (or a work based on it,
under Section 2) in object code or executable form under the terms of
Sections 1 and 2 above provided that you also do one of the following:

    a) Accompany it with the complete corresponding machine-readable
    source code, which must be distributed under the terms of Sections
    1 and 2 above on a medium customarily used for software interchange; or,

    b) Accompany it with a written offer, valid for at least three
    years, to give any third party, for a charge no more than your
    cost of physically performing source distribution, a complete
    machine-readable copy of the corresponding source code, to be
    distributed under the terms of Sections 1 and 2 above on a medium
    customarily used for software interchange; or,

    c) Accompany it with the information you received as to the offer
    to distribute corresponding source code.  (This alternative is
    allowed only for noncommercial distribution and only if you
    received the program in object code or executable form with such
    an offer, in accord with Subsection b above.)

The source code for a work means the preferred form of the work for
making modifications to it.  For an executable work, complete source
code means all the source code for all modules it contains, plus any
associated interface definition files, plus the scripts used to
control compilation and installation of the executable.  However, as a
special exception, the source code distributed need not include
anything that is normally distributed (in either source or binary
form) with the major components (compiler, kernel, and so on) of the
operating system on which the executable runs, unless that component
itself accompanies the executable.

If distribution of executable or object code is made by offering
access to copy from a designated place, then offering equivalent
access to copy the source code from the same place counts as
distribution of the source code, even though third parties are not
compelled to copy the source along with the object code.

  4. You may not copy, modify, sublicense, or distribute the Program
except as expressly provided under this License.  Any attempt
otherwise to copy, modify, sublicense or distribute the Program is
void, and will automatically terminate your rights under this License.
However, parties who have received copies, or rights, from you under
this License will not have their licenses terminated so long as such
parties remain in full compliance.

  5. You are not required to accept this License, since you have not
signed it.  However, nothing else grants you permission to modify or
distribute the Program or its derivative works.  These actions are
prohibited by law if you do not accept this License.  Therefore, by
modifying or distributing the Program (or any work based on the
Program), you indicate your acceptance of this License to do so, and
all its terms and conditions for copying, distributing or modifying
the Program or works based on it.

  6. Each time you redistribute the Program (or any work based on the
Program), the recipient automatically receives a license from the
original licensor to copy, distribute or modify the Program subject to
these terms and conditions.  You may not impose any further
restrictions on the recipients' exercise of the rights granted herein.
You are not responsible for enforcing compliance by third parties to
this License.

  7. If, as a consequence of a court judgment or allegation of patent
infringement or for any other reason (not limited to patent issues),
conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot
distribute so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you
may not distribute the Program at all.  For example, if a patent
license would not permit royalty-free redistribution of the Program by
all those who receive copies directly or indirectly through you, then
the only way you could satisfy both it and this License would be to
refrain entirely from distribution of the Program.

If any portion of this section is held invalid or unenforceable under
any particular circumstance, the balance of the section is intended to
apply and the section as a whole is intended to apply in other
circumstances.

It is not the purpose of this section to induce you to infringe any
patents or other property right claims or to contest validity of any
such claims; this section has the sole purpose of protecting the
integrity of the free software distribution system, which is
implemented by public license practices.  Many people have made
generous contributions to the wide range of software distributed
through that system in reliance on consistent application of that
system; it is up to the author/donor to decide if he or she is willing
to distribute software through any other system and a licensee cannot
impose that choice.

This section is intended to make thoroughly clear what is believed to
be a consequence of the rest of this License.

  8. If the distribution and/or use of the Program is restricted in
certain countries either by patents or by copyrighted interfaces, the
original copyright holder who places the Program under this License
may add an explicit geographical distribution limitation excluding
those countries, so that distribution is permitted only in or among
countries not thus excluded.  In such case, this License incorporates
the limitation as if written in the body of this License.

  9. The Free Software Foundation may publish revised and/or new versions
of the General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

Each version is given a distinguishing version number.  If the Program
specifies a version number of this License which applies to it and "any
later version", you have the option of following the terms and conditions
either of that version or of any later version published by the Free
Software Foundation.  If the Program does not specify a version number of
this License, you may choose any version ever published by the Free Software
Foundation.

  10. If you wish to incorporate parts of the Program into other free
programs whose distribution conditions are different, write to the author
to ask for permission.  For software which is copyrighted by the Free
Software Foundation, write to the Free Software Foundation; we sometimes
make exceptions for this.  Our decision will be guided by the two goals
of preserving the free status of all derivatives of our free software and
of promoting the sharing and reuse of software generally.

			    NO WARRANTY

  11. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY
FOR THE PROGRAM, TO THE EXTENT PERMITTED BY APPLICABLE LAW.  EXCEPT WHEN
OTHERWISE STATED IN WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES
PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESSED
OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.  THE ENTIRE RISK AS
TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU.  SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING,
REPAIR OR CORRECTION.

  12. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR
REDISTRIBUTE THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES,
INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING
OUT OF THE USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED
TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY
YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER
PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE
POSSIBILITY OF SUCH DAMAGES.

		     END OF TERMS AND CONDITIONS

	    How to Apply These Terms to Your New Programs

  If you develop a new program, and you want it to be of the greatest
possible use to the public, the best way to achieve this is to make it
free software which everyone can redistribute and change under these terms.

  To do so, attach the following notices to the program.  It is safest
to attach them to the start of each source file to most effectively
convey the exclusion of warranty; and each file should have at least
the "copyright" line and a pointer to where the full notice is found.

    <one line to give the program's name and a brief idea of what it does.>
    Copyright (C) <year>  <name of author>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA


Also add information on how to contact you by electronic and paper mail.

If the program is interactive, make it output a short notice like this
when it starts in an interactive mode:

    Gnomovision version 69, Copyright (C) year name of author
    Gnomovision comes with ABSOLUTELY NO WARRANTY; for details type `show w'.
    This is free software, and you are welcome to redistribute it
    under certain conditions; type `show c' for details.

The hypothetical commands `show w' and `show c' should show the appropriate
parts of the General Public License.  Of course, the commands you use may
be called something other than `show w' and `show c'; they could even be
mouse-clicks or menu items--whatever suits your program.

You should also get your employer (if you work as a programmer) or your
school, if any, to sign a "copyright disclaimer" for the program, if
necessary.  Here is a sample; alter the names:

  Yoyodyne, Inc., hereby disclaims all copyright interest in the program
  `Gnomovision' (which makes passes at compilers) written by James Hacker.

  <signature of Ty Coon>, 1 April 1989
  Ty Coon, President of Vice

This General Public License does not permit incorporating your program into
proprietary programs.  If your program is a subroutine library, you may
consider it more useful to permit linking proprietary applications with the
library.  If this is what you want to do, use the GNU Library General
Public License instead of this License.
</pre>

-------------------------------------- END ---------------------------

</br><a name="espa">Traducción no oficial</a></br>
   <title>Licencia P&uacute;blica GNU</title>
   <link TITLE="Free Software Foundation" HREF="http://www.fsf.org"> 
   <link TITLE="Proyecto GNU" HREF="http://www.gnu.org">
   <link TITLE="LuCAS: biblioteca de GNU/Linux en español" HREF="http://lucas.hispalinux.es">
<div CLASS="CHAPTER">
<h1>
<a NAME="CH-GPLES"></a>Licencia P&uacute;blica GNU</h1>
Esta es la conocida GNU Public License (GPL), versi&oacute;n 2 (de junio
de 1.991), que cubre la mayor parte del software de la Free Software Foundation,
y muchos m&aacute;s programas.

<p>Los autores de esta traducción son:
<ul><li><a href="mailto:jgb@computer.org">Jesús González Barahona</a>
<li><a href="mailto:pheras@acm.org">Pedro de las Heras Quirós</a>
</ul>

<BLOCKQUOTE>
<HR>
<B>NOTA IMPORTANTE:</B>
<P>
Esta es una traducción no oficial al español de la GNU General Public
License. No ha sido publicada por la Free Software Foundation, y no
establece legalmente las condiciones de distribución para el software
que usa la GNU GPL. Estas condiciones se establecen solamente por
el texto original, en inglés, de la GNU GPL. Sin embargo, esperamos
que esta traducción ayude a los hispanohablantes a entender mejor la
GNU GPL.
<P>

<B>IMPORTANT NOTICE:</B>
<P>
This is an unofficial translation of the GNU General Public License
into Spanish. It was not published by the Free Software
Foundation, and does not legally state the distribution terms for
software that uses the GNU GPL--only the original English text of
the GNU GPL does that. However, we hope that this translation will
help Spanish speakers understand the GNU GPL better.
<P>
<HR>
</BLOCKQUOTE>

<p>Copyright (C) 1989, 1991 Free Software Foundation, Inc.
<p>675 Mass Ave, Cambridge, MA 02139, EEUU
<p>Se permite la copia y distribuci&oacute;n de copias literales de este
documento, pero no se permite su modificaci&oacute;n.

<div CLASS="SECT1">
<h1 CLASS="SECT1">
<a NAME="S1-GPLES-PREAMBLE"></a>Pre&aacute;mbulo</h1>
Las licencias que cubren la mayor parte del software est&aacute;n dise&ntilde;adas
para quitarle a usted la libertad de compartirlo y modificarlo. Por el
contrario, la Licencia P&uacute;blica General de GNU pretende garantizarle
la libertad de compartir y modificar software libre, para asegurar que
el software es libre para todos sus usuarios. Esta Licencia P&uacute;blica
General se aplica a la mayor parte del software del la Free Software Foundation
y a cualquier otro programa si sus autores se comprometen a utilizarla.
(Existe otro software de la Free Software Foundation que est&aacute; cubierto
por la Licencia P&uacute;blica General de GNU para Bibliotecas). Si quiere,
tambi&eacute;n puede aplicarla a sus propios programas.
<p>Cuando hablamos de software libre, estamos refiri&eacute;ndonos a libertad,
no a precio. Nuestras Licencias P&uacute;blicas Generales est&aacute;n
dise&ntilde;adas para asegurarnos de que tenga la libertad de distribuir
copias de software libre (y cobrar por ese servicio si quiere), de que
reciba el c&oacute;digo fuente o que pueda conseguirlo si lo quiere, de
que pueda modificar el software o usar fragmentos de &eacute;l en nuevos
programas libres, y de que sepa que puede hacer todas estas cosas.
<p>Para proteger sus derechos necesitamos algunas restricciones que prohiban
a cualquiera negarle a usted estos derechos o pedirle que renuncie a ellos.
Estas restricciones se traducen en ciertas obligaciones que le afectan
si distribuye copias del software, o si lo modifica.
<p>Por ejemplo, si distribuye copias de uno de estos programas, sea gratuitamente,
o a cambio de una contraprestaci&oacute;n, debe dar a los receptores todos
los derechos que tiene. Debe asegurarse de que ellos tambi&eacute;n reciben,
o pueden conseguir, el c&oacute;digo fuente. Y debe mostrarles estas condiciones
de forma que conozcan sus derechos.
<p>Protegemos sus derechos con la combinaci&oacute;n de dos medidas:
<ol TYPE="1">
<li>Ponemos el software bajo copyright y
<li>le ofrecemos esta licencia, que le da permiso legal para copiar, distribuir
y/o modificar el software.</ol>
Tambi&eacute;n, para la protecci&oacute;n de cada autor y la nuestra propia,
queremos asegurarnos de que todo el mundo comprende que no se proporciona
ninguna garant&iacute;a para este software libre. Si el software se modifica
por cualquiera y &eacute;ste a su vez lo distribuye, queremos que sus receptores
sepan que lo que tienen no es el original, de forma que cualquier problema
introducido por otros no afecte a la reputaci&oacute;n de los autores originales.
<p>Por &uacute;ltimo, cualquier programa libre est&aacute; constantemente
amenazado por patentes sobre el software. Queremos evitar el peligro de
que los redistribuidores de un programa libre obtengan patentes por su
cuenta, convirtiendo de facto el programa en propietario. Para evitar esto,
hemos dejado claro que cualquier patente debe ser pedida para el uso libre
de cualquiera, o no ser pedida.
<p>Los t&eacute;rminos exactos y las condiciones para la copia, distribuci&oacute;n
y modificaci&oacute;n se exponen a continuaci&oacute;n.</div>
</div>

<div  CLASS="SECT1">

<h1 CLASS="SECT1">
<a NAME="S1-GPLES-TERMS"></a>T&eacute;rminos y condiciones para la copia,
distribuci&oacute;n y modificaci&oacute;n</h1>

<ol TYPE="1">
<li>Esta Licencia se aplica a cualquier programa u otro tipo
de trabajo que contenga una nota colocada por el tenedor del copyright
diciendo que puede ser distribuido bajo los t&eacute;rminos de esta Licencia
P&uacute;blica General. En adelante, &laquo;Programa&raquo; se referir&aacute;
a cualquier programa o trabajo que cumpla esa condici&oacute;n y &laquo;trabajo
basado en el Programa&raquo; se referir&aacute; bien al Programa o a cualquier
trabajo derivado de &eacute;l seg&uacute;n la ley de copyright. Esto es,
un trabajo que contenga el programa o una proci&oacute;n de &eacute;l,
bien en forma literal o con modificaciones y/o traducido en otro lenguaje.
Por lo tanto, la traducci&oacute;n est&aacute; incluida sin limitaciones
en el t&eacute;rmino &laquo;modificaci&oacute;n&raquo;. Cada concesionario
(licenciatario) ser&aacute; denominado &laquo;usted&raquo;.
<p>Cualquier otra actividad que no sea la copia, distribuci&oacute;n o
modificaci&oacute;n no est&aacute; cubierta por esta Licencia, est&aacute;
fuera de su &aacute;mbito. El acto de ejecutar el Programa no est&aacute;
restringido, y los resultados del Programa est&aacute;n cubiertos &uacute;nicamente
si sus contenidos constituyen un trabajo basado en el Programa, independientemente
de haberlo producido mediante la ejecuci&oacute;n del programa. El que
esto se cumpla, depende de lo que haga el programa.
<li>Usted puede copiar y distribuir copias literales del c&oacute;digo fuente
del Programa, seg&uacute;n lo has recibido, en cualquier medio, supuesto
que de forma adecuada y bien visible publique en cada copia un anuncio
de copyright adecuado y un repudio de garant&iacute;a, mantenga intactos
todos los anuncios que se refieran a esta Licencia y a la ausencia de garant&iacute;a,
y proporcione a cualquier otro receptor del programa una copia de esta
Licencia junto con el Programa.
<p>Puede cobrar un precio por el acto f&iacute;sico de transferir una copia,
y puede, seg&uacute;n su libre albedr&iacute;o, ofrecer garant&iacute;a
a cambio de unos honorarios.
<li>Puede modificar su copia o copias del Programa o de cualquier porci&oacute;n
de &eacute;l, formando de esta manera un trabajo basado en el Programa,
y copiar y distribuir esa modificaci&oacute;n o trabajo bajo los t&eacute;rminos
del apartado 1, antedicho, supuesto que adem&aacute;s cumpla las siguientes
condiciones:
<ol TYPE="a" ><li>Debe hacer que los ficheros modificados lleven anuncios
prominentes indicando que los ha cambiado y la fecha de cualquier cambio.
<li>Debe hacer que cualquier trabajo que distribuya o publique y que en
todo o en parte contenga o sea derivado del Programa o de cualquier parte
de &eacute;l sea licenciada como un todo, sin carga alguna, a todas las
terceras partes y bajo los t&eacute;rminos de esta Licencia.
<li>Si el programa modificado lee normalmente &oacute;rdenes interactivamente
cuando es ejecutado, debe hacer que, cuando comience su ejecuci&oacute;n
para ese uso interactivo de la forma m&aacute;s habitual, muestre o escriba
un mensaje que incluya un anuncio de copyright y un anuncio de que no se
ofrece ninguna garant&iacute;a (o por el contrario que s&iacute; se ofrece
garant&iacute;a) y que los usuarios pueden redistribuir el programa bajo
estas condiciones, e indicando al usuario c&oacute;mo ver una copia de
esta licencia. (Excepci&oacute;n: si el propio programa es interactivo
pero normalmente no muestra ese anuncio, no se requiere que su trabajo
basado en el Programa muestre ning&uacute;n anuncio).</ol>
Estos requisitos se aplican al trabajo modificado como un todo. Si partes
identificables de ese trabajo no son derivadas del Programa, y pueden,
razonablemente, ser consideradas trabajos independientes y separados por
ellos mismos, entonces esta Licencia y sus t&eacute;rminos no se aplican
a esas partes cuando sean distribuidas como trabajos separados. Pero cuando
distribuya esas mismas secciones como partes de un todo que es un trabajo
basado en el Programa, la distribuci&oacute;n del todo debe ser seg&uacute;n
los t&eacute;rminos de esta licencia, cuyos permisos para otros licenciatarios
se extienden al todo completo, y por lo tanto a todas y cada una de sus
partes, con independencia de qui&eacute;n la escribi&oacute;.
<p>Por lo tanto, no es la intenci&oacute;n de este apartado reclamar derechos
o desafiar sus derechos sobre trabajos escritos totalmente por usted mismo.
El intento es ejercer el derecho a controlar la distribuci&oacute;n de
trabajos derivados o colectivos basados en el Programa.
<p>Adem&aacute;s, el simple hecho de reunir un trabajo no basado en el
Programa con el Programa (o con un trabajo basado en el Programa) en un
volumen de almacenamiento o en un medio de distribuci&oacute;n no hace
que dicho trabajo entre dentro del &aacute;mbito cubierto por esta Licencia.
<li>Puede copiar y distribuir el Programa (o un trabajo basado en &eacute;l,
seg&uacute;n se especifica en el apartado 2, como c&oacute;digo objeto
o en formato ejecutable seg&uacute;n los t&eacute;rminos de los apartados
1 y 2, supuesto que adem&aacute;s cumpla una de las siguientes condiciones:
<ol TYPE="a" ><li>Acompa&ntilde;arlo con el c&oacute;digo fuente completo
correspondiente, en formato electr&oacute;nico, que debe ser distribuido
seg&uacute;n se especifica en los apartados 1 y 2 de esta Licencia en un
medio habitualmente utilizado para el intercambio de programas, o
<li>Acompa&ntilde;arlo con una oferta por escrito, v&aacute;lida durante
al menos tres a&ntilde;os, de proporcionar a cualquier tercera parte una
copia completa en formato electr&oacute;nico del c&oacute;digo fuente correspondiente,
a un coste no mayor que el de realizar f&iacute;sicamente la distribuci&oacute;n
del fuente, que ser&aacute; distribuido bajo las condiciones descritas
en los apartados 1 y 2 anteriores, en un medio habitualmente utilizado
para el intercambio de programas, o
<li>Acompa&ntilde;arlo con la informaci&oacute;n que recibiste ofreciendo
distribuir el c&oacute;digo fuente correspondiente. (Esta opci&oacute;n
se permite s&oacute;lo para distribuci&oacute;n no comercial y s&oacute;lo
si usted recibi&oacute; el programa como c&oacute;digo objeto o en formato
ejecutable con tal oferta, de acuerdo con el apartado b anterior).</ol>
Por c&oacute;digo fuente de un trabajo se entiende la forma preferida del
trabajo cuando se le hacen modificaciones. Para un trabajo ejecutable,
se entiende por c&oacute;digo fuente completo todo el c&oacute;digo fuente
para todos los m&oacute;dulos que contiene, m&aacute;s cualquier fichero
asociado de definici&oacute;n de interfaces, m&aacute;s los guiones utilizados
para controlar la compilaci&oacute;n e instalaci&oacute;n del ejecutable.
Como excepci&oacute;n especial el c&oacute;digo fuente distribuido no necesita
incluir nada que sea distribuido normalmente (bien como fuente, bien en
forma binaria) con los componentes principales (compilador, kernel y similares)
del sistema operativo en el cual funciona el ejecutable, a no ser que el
propio componente acompa&ntilde;e al ejecutable.
<p>Si la distribuci&oacute;n del ejecutable o del c&oacute;digo objeto
se hace mediante la oferta acceso para copiarlo de un cierto lugar, entonces
se considera la oferta de acceso para copiar el c&oacute;digo fuente del
mismo lugar como distribuci&oacute;n del c&oacute;digo fuente, incluso
aunque terceras partes no est&eacute;n forzadas a copiar el fuente junto
con el c&oacute;digo objeto.
<li>No puede copiar, modificar, sublicenciar o distribuir el Programa excepto
como prev&eacute; expresamente esta Licencia. Cualquier intento de copiar,
modificar sublicenciar o distribuir el Programa de otra forma es inv&aacute;lida,
y har&aacute; que cesen autom&aacute;ticamente los derechos que te proporciona
esta Licencia. En cualquier caso, las partes que hayan recibido copias
o derechos de usted bajo esta Licencia no cesar&aacute;n en sus derechos
mientras esas partes contin&uacute;en cumpli&eacute;ndola.
<li>No est&aacute; obligado a aceptar esta licencia, ya que no la ha firmado.
Sin embargo, no hay hada m&aacute;s que le proporcione permiso para modificar
o distribuir el Programa o sus trabajos derivados. Estas acciones est&aacute;n
prohibidas por la ley si no acepta esta Licencia. Por lo tanto, si modifica
o distribuye el Programa (o cualquier trabajo basado en el Programa), est&aacute;
indicando que acepta esta Licencia para poder hacerlo, y todos sus t&eacute;rminos
y condiciones para copiar, distribuir o modificar el Programa o trabajos
basados en &eacute;l.
<li>Cada vez que redistribuya el Programa (o cualquier trabajo basado en
el Programa), el receptor recibe autom&aacute;ticamente una licencia del
licenciatario original para copiar, distribuir o modificar el Programa,
de forma sujeta a estos t&eacute;rminos y condiciones. No puede imponer
al receptor ninguna restricci&oacute;n m&aacute;s sobre el ejercicio de
los derechos aqu&iacute; garantizados. No es usted responsable de hacer
cumplir esta licencia por terceras partes.
<li>Si como consecuencia de una resoluci&oacute;n judicial o de una alegaci&oacute;n
de infracci&oacute;n de patente o por cualquier otra raz&oacute;n (no limitada
a asuntos relacionados con patentes) se le imponen condiciones (ya sea
por mandato judicial, por acuerdo o por cualquier otra causa) que contradigan
las condiciones de esta Licencia, ello no le exime de cumplir las condiciones
de esta Licencia. Si no puede realizar distribuciones de forma que se satisfagan
simult&aacute;neamente sus obligaciones bajo esta licencia y cualquier
otra obligaci&oacute;n pertinente entonces, como consecuencia, no puede
distribuir el Programa de ninguna forma. Por ejemplo, si una patente no
permite la redistribuci&oacute;n libre de derechos de autor del Programa
por parte de todos aquellos que reciban copias directa o indirectamente
a trav&eacute;s de usted, entonces la &uacute;nica forma en que podr&iacute;a
satisfacer tanto esa condici&oacute;n como esta Licencia ser&iacute;a evitar
completamente la distribuci&oacute;n del Programa.
<p>Si cualquier porci&oacute;n de este apartado se considera inv&aacute;lida
o imposible de cumplir bajo cualquier circunstancia particular ha de cumplirse
el resto y la secci&oacute;n por entero ha de cumplirse en cualquier otra
circunstancia.
<p>No es el prop&oacute;sito de este apartado inducirle a infringir ninguna
reivindicaci&oacute;n de patente ni de ning&uacute;n otro derecho de propiedad
o impugnar la validez de ninguna de dichas reivindicaciones. Este apartado
tiene el &uacute;nico prop&oacute;sito de proteger la integridad del sistema
de distribuci&oacute;n de software libre, que se realiza mediante pr&aacute;cticas
de licencia p&uacute;blica. Mucha gente ha hecho contribuciones generosas
a la gran variedad de software distribuido mediante ese sistema con la
confianza de que el sistema se aplicar&aacute; consistentemente. Ser&aacute;
el autor/donante quien decida si quiere distribuir software mediante cualquier
otro sistema y una licencia no puede imponer esa elecci&oacute;n.
<p>Este apartado pretende dejar completamente claro lo que se cree que
es una consecuencia del resto de esta Licencia.
<li>Si la distribuci&oacute;n y/o uso de el Programa est&aacute; restringida
en ciertos pa&iacute;ses, bien por patentes o por interfaces bajo copyright,
el tenedor del copyright que coloca este Programa bajo esta Licencia puede
a&ntilde;adir una limitaci&oacute;n expl&iacute;cita de distribuci&oacute;n
geogr&aacute;fica excluyendo esos pa&iacute;ses, de forma que la distribuci&oacute;n
se permita s&oacute;lo en o entre los pa&iacute;ses no excluidos de esta
manera. En ese caso, esta Licencia incorporar&aacute; la limitaci&oacute;n
como si estuviese escrita en el cuerpo de esta Licencia.
<li>La Free Software Foundation puede publicar versiones revisadas y/o nuevas
de la Licencia P&uacute;blica General de tiempo en tiempo. Dichas nuevas
versiones ser&aacute;n similares en esp&iacute;ritu a la presente versi&oacute;n,
pero pueden ser diferentes en detalles para considerar nuevos problemas
o situaciones.
<p>Cada versi&oacute;n recibe un n&uacute;mero de versi&oacute;n que la
distingue de otras. Si el Programa especifica un n&uacute;mero de versi&oacute;n
de esta Licencia que se refiere a ella y a &laquo;cualquier versi&oacute;n
posterior&raquo;, tienes la opci&oacute;n de seguir los t&eacute;rminos
y condiciones, bien de esa versi&oacute;n, bien de cualquier versi&oacute;n
posterior publicada por la Free Software Foundation. Si el Programa no
especifica un n&uacute;mero de versi&oacute;n de esta Licencia, puedes
escoger cualquier versi&oacute;n publicada por la Free Software Foundation.
<li>Si quiere incorporar partes del Programa en otros programas libres cuyas
condiciones de distribuci&oacute;n son diferentes, escribe al autor para
pedirle permiso. Si el software tiene copyright de la Free Software Foundation,
escribe a la Free Software Foundation: algunas veces hacemos excepciones
en estos casos. Nuestra decisi&oacute;n estar&aacute; guiada por el doble
objetivo de de preservar la libertad de todos los derivados de nuestro
software libre y promover el que se comparta y reutilice el software en
general.</ol>
</div>

<div 
CLASS="SECT1"
>

<h1 CLASS="SECT1">
<a NAME="S1-GPLES-NOWARRANTY"></a>AUSENCIA DE GARANT&Iacute;A</h1>

<ol START="12" TYPE="1" >
<li>Como el programa se licencia libre de cargas,
no se ofrece ninguna garant&iacute;a sobre el programa, en todas la extensi&oacute;n
permitida por la legislaci&oacute;n aplicable. Excepto cuando se indique
de otra forma por escrito, los tenedores del copyright y/u otras partes
proporcionan el programa &laquo;tal cual&raquo;, sin garant&iacute;a de
ninguna clase, bien expresa o impl&iacute;cita, con inclusi&oacute;n, pero
sin limitaci&oacute;n a las garant&iacute;as mercantiles impl&iacute;citas
o a la conveniencia para un prop&oacute;sito particular. Cualquier riesgo
referente a la calidad y prestaciones del programa es asumido por usted.
Si se probase que el Programa es defectuoso, asume el coste de cualquier
servicio, reparaci&oacute;n o correcci&oacute;n.
<li>En ning&uacute;n caso, salvo que lo requiera la legislaci&oacute;n aplicable
o haya sido acordado por escrito, ning&uacute;n tenedor del copyright ni
ninguna otra parte que modifique y/o redistribuya el Programa seg&uacute;n
se permite en esta Licencia ser&aacute; responsable ante usted por da&ntilde;os,
incluyendo cualquier da&ntilde;o general, especial, incidental o resultante
producido por el uso o la imposibilidad de uso del Programa (con inclusi&oacute;n,
pero sin limitaci&oacute;n a la p&eacute;rdida de datos o a la generaci&oacute;n
incorrecta de datos o a p&eacute;rdidas sufridas por usted o por terceras
partes o a un fallo del Programa al funcionar en combinaci&oacute;n con
cualquier otro programa), incluso si dicho tenedor u otra parte ha sido
advertido de la posibilidad de dichos da&ntilde;os.</ol>
FIN DE T&Eacute;RMINOS Y CONDICIONES</div>

<div 
CLASS="SECT1"
>

<h1 CLASS="SECT1">
<a NAME="S1-GPLES-APPENDIX"></a>Ap&eacute;ndice: C&oacute;mo aplicar estos
t&eacute;rminos a sus nuevos programas.</h1>
Si usted desarrolla un nuevo Programa, y quiere que sea del mayor uso posible
para el p&uacute;blico en general, la mejor forma de conseguirlo es convirti&eacute;ndolo
en software libre que cualquiera pueda redistribuir y cambiar bajo estos
t&eacute;rminos.
<p>Para hacerlo, a&ntilde;ada los siguientes anuncios al programa. Lo m&aacute;s
seguro es a&ntilde;adirlos al principio de cada fichero fuente para transmitir
lo m&aacute;s efectivamente posible la ausencia de garant&iacute;a. Adem&aacute;s
cada fichero deber&iacute;a tener al menos la l&iacute;nea de &laquo;copyright&raquo;
y un indicador a d&oacute;nde puede encontrarse el anuncio completo.
<div 
CLASS="INFORMALEXAMPLE"
>&lt;una l&iacute;nea para indicar el nombre
del programa y una r&aacute;pida idea de qu&eacute; hace.>
<p>Copyright (C) 19aa &lt;nombre del autor>
<p>Este programa es software libre. Puede redistribuirlo y/o modificarlo
bajo los t&eacute;rminos de la Licencia P&uacute;blica General de GNU seg&uacute;n
es publicada por la Free Software Foundation, bien de la versi&oacute;n
2 de dicha Licencia o bien (seg&uacute;n su elecci&oacute;n) de cualquier
versi&oacute;n posterior.
<p>Este programa se distribuye con la esperanza de que sea &uacute;til,
pero SIN NINGUNA GARANT&Iacute;A, incluso sin la garant&iacute;a MERCANTIL
impl&iacute;cita o sin garantizar la CONVENIENCIA PARA UN PROP&Oacute;SITO
PARTICULAR. V&eacute;ase la Licencia P&uacute;blica General de GNU para
m&aacute;s detalles.
<p>Deber&iacute;a haber recibido una copia de la Licencia P&uacute;blica
General junto con este programa. Si no ha sido as&iacute;, escriba a la
Free Software Foundation, Inc., en 675 Mass Ave, Cambridge, MA 02139, EEUU.</div>
A&ntilde;ada tambi&eacute;n informaci&oacute;n sobre c&oacute;mo contactar
con usted mediante correo electr&oacute;nico y postal.
<p>Si el programa es interactivo, haga que muestre un peque&ntilde;o anuncio
como el siguiente, cuando comienza a funcionar en modo interactivo:
<div 
CLASS="INFORMALEXAMPLE"
>Gnomovision versi&oacute;n 69, Copyright
(C) 19aa nombre del autor
<p>Gnomovision no ofrece ABSOLUTAMENTE NINGUNA GARANT&Iacute;A. Para m&aacute;s
detalles escriba &laquo;show w&raquo;.</div>
Los comandos hipot&eacute;ticos &laquo;show w&raquo; y &laquo;show c&raquo;
deber&iacute;an mostrar las partes adecuadas de la Licencia P&uacute;blica
General. Por supuesto, los comandos que use pueden llamarse de cualquier
otra manera. Podr&iacute;an incluso ser pulsaciones del rat&oacute;n o
elementos de un men&uacute; (lo que sea apropiado para su programa).
<p>Tambi&eacute;n deber&iacute;as conseguir que su empleador (si trabaja
como programador) o tu Universidad (si es el caso) firme un &laquo;renuncia
de copyright&raquo; para el programa, si es necesario. A continuaci&oacute;n
se ofrece un ejemplo, altere los nombres seg&uacute;n sea conveniente:
<div CLASS="INFORMALEXAMPLE"><ol>
Yoyodyne, Inc. mediante este documento renuncia
a cualquier inter&eacute;s de derechos de copyright con respecto al programa
Gnomovision (que hace pasadas a compiladores) escrito por Pepe Programador.
<p>&lt;firma de Pepito Grillo>, 20 de diciembre de 1996
<p>Pepito Grillo, Presidente de Asuntillos Varios.</ol></div>
<p>
Esta Licencia P&uacute;blica General no permite que incluya sus programas
en programas propietarios. Si su programa es una biblioteca de subrutinas,
puede considerar m&aacute;s &uacute;til el permitir el enlazado de aplicaciones
propietarias con la biblioteca. Si este es el caso, use la Licencia P&uacute;blica
General de GNU para Bibliotecas en lugar de esta Licencia.</div>

</pre>
<?php include("../shared/footer.php");
