<h1>Online Public Access Catalog (OPAC) Help Page:</h1>
<br><br>
Help Sub Sections:
<ul>
  <li><a href="#sec1"><font class="error">Por respeto a la integridad del pensamiento de los autores de los cambios, se dan en su idioma original. <br>
                   (si usted puede traducir respetando esto favor envié la 
	traducción y con gusto la integro).</font></a></li>
  <li><a href="#sec2"></a></li>

<p>issues 
-----------------------------------------------------------------------<br />
- response to non-existant isbn is BAD. Needs improvement ASAP.<br />
- auto collection needs more categories.<br />
<br />
2009-09-08 v2.09 
-----------------------------------------------------------------<br />
- fixed several bugs reported by users - Thanks for the inputs.<br />
<br />
2009-08-07 v2.08 
-----------------------------------------------------------------<br />
- corrected name of jQuery library to jquery.js fon non-windows systems.<br />
<br />
2009-06-15 v2.07 
-----------------------------------------------------------------<br />
- fixed broken &#39;keepDashes&#39; function (would not remove if unset).<br />
<br />
2009-06-14 v2.06 
-----------------------------------------------------------------<br />
- removed annoying &#39;null&#39; from host list.<br />
- OPAC flag set as default is now working correctly.<br />
- now respects default collection set in DB, but how to set is undetermined!<br />
- added licensing object to customHead.php as &#39;lookup&#39; object available to all<br />
<br />
2009-06-13 v2.05 
-----------------------------------------------------------------<br />
- added provision for custom navigation items with out modifying openbiblio 
files.<br />
- added provision for custom Javascript &amp; CSS with out modifying openbiblio 
files.<br />
- fixed several bugs that got missed in prior releases.<br />
- caught up most the &#39;minor&#39; openBiblio coding standards for eventual 
incorporation<br />
like: use of REL for includes, copyright notices, coding consistencies.<br />
<br />
2009-06-11 v2.04 
-----------------------------------------------------------------<br />
- removed references in install instructions to older versions.<br />
- major re-write in many areas; display code now in HTML/CSS/JavaScript files.<br />
- added &#39;Lookup Settings&#39; screen to Admin tab for most configuration options.<br />
- added &#39;Lookup Hosts&#39; screen to Admin tab for host info maintenance.<br />
- moved all lookup files into own new directory &#39;.../openbiblio/lookup2&#39;<br />
- incorporated SRU protocall as an option to YAZ based on Dec2006 work of Ritteh.<br />
use of YAZ is now optional.<br />
- improved usability by making use of AJAX technology. JavaScript is now 
required.<br />
- changes to Author or Title by user will result in new Cutter if &#39;AutoDewey&#39; in 
effect.<br />
- now possible to backup from a choice on a multi-hit list without haveing to do<br />
a new search - all data is retained at the browser.<br />
<br />
2008-04-13 
-----------------------------------------------------------------------<br />
- patch from MAB to deal with cases of author in various combinations of 100a &amp; 
700a.<br />
<br />
2007-07-10 
-----------------------------------------------------------------------<br />
- added support for UDC in auto call-numbers as requested by Josep M Solé.<br />
- fixed bug in dash removal code<br />
- Failure now returns new search screen rather than in incorrectly filled form<br />
<br />
2007-05-16 
-----------------------------------------------------------------------<br />
- added conf file option to not remove dashes from entered ISBN<br />
<br />
2007-03-11 
-----------------------------------------------------------------------<br />
- modified to work with v0.6.0<br />
- minor change in installation sequence<br />
- update of YAZ references.<br />
<br />
2006-12-08 
-----------------------------------------------------------------------<br />
- modified ISBN handler to strip extraneous text at end of some Z3950 generated 
ISBNs<br />
- added a few patches to improve handling of the multi-host, multi-hit cases<br />
<br />
2006-10-31 
-----------------------------------------------------------------------<br />
- added type &#39;979&#39; to bar code test per info from Cristoph Lange<br />
- improved code for multiple libraries per suggestions from Hans van der Weij<br />
<br />
2006-10-10 
-----------------------------------------------------------------------<br />
- fixed bug in prior release that prevented it from displaying any search 
results<br />
- clarified installation notes for auto &#39;new copy&#39;<br />
<br />
2006-09-01 
-----------------------------------------------------------------------<br />
- bar-code reading fixed, including better diagnostic messages<br />
- multi-repository search now available via config file settings<br />
- name of repository library included in multi-hit responses<br />
<br />
2006-03-17 
-----------------------------------------------------------------------<br />
- now requires release v0.51-pre4 or later<br />
- now handles correctly multiple hits with user selection having multiple ISBN<br />
<br />
2005-07-11 
-----------------------------------------------------------------------<br />
- lookup-install now mentions the lookup.js file<br />
<br />
2005-07-05 
-----------------------------------------------------------------------<br />
- moved Lookup to own form shown in nav bar. <br />
- lookup now uses localization functions for all displayed text<br />
- added &quot;Z39.50 search&quot; to .../navbars/cataloging.php &amp; .../locale/en/navbars.php<br />
- added text for all displayed text to .../locale/en/cataloging.php<br />
- moved z3950 search code to new file .../catalog/lookup_z3950_search.php<br />
- increased number of Z3950 search criteria from 2 to 5<br />
- added Publication data as search criteria<br />
<br />
2005-06-26 
-----------------------------------------------------------------------<br />
- YAZ activtion instructions expanded in lookup_install.txt.<br />
<br />
2005-05-25 
-----------------------------------------------------------------------<br />
- ISBN now verified if input from a barcode scanner<br />
- fixed mis-handling of &quot;not found&quot; when 2 search criteria are specified<br />
- added missing &quot;{&quot; in installation instructions.<br />
- &quot;keyword anywhere&quot; choice added to 2nd search criteria<br />
<br />
2005-04-17 
-----------------------------------------------------------------------<br />
- new single-button selection of multiple hit choice<br />
<br />
2005-04-15 
-----------------------------------------------------------------------<br />
- support functions broken out into seperate file &#39;lookup_func.php&#39;<br />
- simple, crude, auto-collection mechanism, sets colection to &#39;Fiction&#39; based on 
LC codes<br />
- Cutter-Sanborn cutter mechanism modified to work with mySQL ver older than 4.1<br />
- short titles (e.g. &quot;The Source&quot;) now generate a correct cutter sufix (e.g. 
&quot;s&quot;)<br />
- auto-dewey function now considers LC classes &quot;PR..PZ&quot;, and dewey class &quot;[FIC]&quot; 
as fiction<br />
<br />
2005-04-08 
-----------------------------------------------------------------------<br />
- tested OK with PHP 4.1.10; does not work with 5.03, or 4.0.x<br />
- added Cutter-Sanborn 3-digit table option for auto-cutter (made it default 
choice)<br />
- user configuration section moved to &quot;lookup_conf.php&quot;<br />
- auto-dewey works from both &#39;PS&#39; &amp; &#39;PZ&#39; LoC call numbers<br />
- lookup-install file renamed to lookup_install<br />
- this file renamed from &quot;lookup-releaseNotes.txt&quot;<br />
- max Hits Displayed made a user choice<br />
- fixed bug in ISBN validity check introduced in prior release<br />
<br />
2005-03-24 
-----------------------------------------------------------------------<br />
- created a seperate installation file, but left old information in this file<br />
- sample copies of modified openbiblio files no longer provided in .zip file<br />
- fix cutter suffix bug when noise word occurs as first word of title<br />
- fix default dewey call number bug<br />
<br />
2005-03-23 
-----------------------------------------------------------------------<br />
- improve parsing of dewey call numbers to assure xxx/.xx/xx forms retain the 
first <br />
group of digits after the &#39;.&#39;, but loose the preceding &#39;/&#39;<br />
- show number of hits if more than one<br />
- allow user to specify which word of a title is to be used in cutter<br />
- cutter generation defaulted to off<br />
- call number generation defaulted to off<br />
<br />
2005-03-22 
-----------------------------------------------------------------------<br />
- tested to work with version 0.51, and Firefox 1.0<br />
- improved interface for multiple hits. Formatted output from which ISBN or LCCN<br />
can be copied and pasted directly into a new search. For Ivan&#39;s case below, you
<br />
will have to do the second search using the LCCN number.<br />
- added optional internal cutter generator for dewey call numbers (per LOC 
rules)<br />
- added optional user assigned default dewey call number for LOC &#39;PZ&#39; books
<br />
<br />
2005-03-03 
-----------------------------------------------------------------------<br />
- make provisions for a user specified id and password for the search server<br />
- query format changed to allow for multiple search criteria &quot;similar to US LOC&quot;<br />
- User may specify up to 2 criteria (such as Author &amp; title) (crude display)<br />
- crude display of multiple hits, user can then copy ISBN, LCCN, etc and back up 
to <br />
original query<br />
<br />
2005-02-13 
-----------------------------------------------------------------------<br />
- correct few syntax errors <br />
<br />
2004-12-25 
-----------------------------------------------------------------------<br />
- fix validator to allow ISSN and LCCN.<br />
- fix validator to allow bar code scanner input of ISBN.<br />
- modify &quot;nothing found! to display code searched for.<br />
<br />
2004-12-20 
-----------------------------------------------------------------------<br />
- add process to cleanup ISSN (&#39;-&#39; now allowed, but not required.)<br />
- validate ISBN on entry before sending form to MARC server. This prevents 
having a <br />
lookup failure due to a typing error appear as if no database entry exists.<br />
- as an interim solution to the multiple hit problem, all hits will be posted to 
all <br />
tag fields. This usually results in duplicates of most values, but at least 
nothing<br />
is lost or hidden. If you have a better display idea, please let me know. To see
<br />
the effect on a known case, try ISBN &quot;188-127-3156&quot;, which was provided by Ivan.<br />
<br />
2004-09-21 
-----------------------------------------------------------------------<br />
- fixed bug in lookup regarding hit counter.<br />
<br />
- To have focus in lookup so it appears in lookup value field as it did in ver 
0.4,<br />
You should modify biblio_new_form.php to the following:<br />
$tab = &quot;cataloging&quot;;<br />
$nav = &quot;new&quot;;<br />
$helpPage = &quot;biblioEdit&quot;;<br />
$cancelLocation = &quot;../catalog/index.php&quot;;<br />
<br />
if (!isset($HTTP_GET_VARS[&quot;lookupVal&quot;]) &amp;&amp; !isset($HTTP_GET_VARS[&quot;srchBy&quot;]))
<br />
$focus_form_name = &quot;lookupform&quot;;<br />
$focus_form_field = &quot;lookupVal&quot;;<br />
} else {<br />
$focus_form_name = &quot;newbiblioform&quot;;<br />
$focus_form_field = &quot;materialCd&quot;;<br />
}<br />
<br />
require_once(&quot;../shared/read_settings.php&quot;);<br />
require_once(&quot;../functions/inputFuncs.php&quot;);<br />
<br />
2004-07-11 
-----------------------------------------------------------------------<br />
- code modified to work with ver 0.5<br />
<br />
2004-04-04 
-----------------------------------------------------------------------<br />
- Use of &#39;-&#39; in ISBN or LCCN now allowed, but not required.<br />
- Removed leading &#39;; &#39; from 1st additional author.<br />
- Added note asking that lookup value be saved in the event of multiple hits. A 
test<br />
case is needed to write code to handle this frequent problem.<br />
- Major simplification of &quot;extract_marc_fields()&quot; function using generic code 
for all <br />
MARC fields except 538(Systems Details Note) &amp; 650(Topical Term). 538 is not<br />
normally handled by OpenBiblio at all, and 650 data is handled outside of MARC.<br />
<br />
- if you would like to have the &quot;new copy&quot; form automatically appear when 
finished<br />
adding new bibliographic data, change the end of &quot;biblio_new.php&quot; to read:<br />
<br />
#**************************************************************************<br />
#* Must select one of the following lines<br />
#**************************************************************************<br />
//following line requires manual access to new copy form (original function)<br />
//header(&quot;Location: ../shared/biblio_view.php?bibid=&quot;.$bibid.&quot;&amp;msg=&quot;.$msg);<br />
//following line auto transfers to new copy form (new function)<br />
header(&quot;Location: ../catalog/biblio_copy_new_form.php?bibid=&quot;.$bibid.&quot;&amp;msg=&quot;.$msg);<br />
exit();<br />
<br />
2003-08-11 
-----------------------------------------------------------------------<br />
- Added &#39;my_call_nmbr_type&#39; variable to top of lookup.php to allow user to 
select <br />
which of LoC, Dewey, or local call numbers are to be placed into the 
Call_Nmbr1,2,3 fields.<br />
Thanks to Richard June for the idea.<br />
- Corrected the Z3950 search_by attribute for LCCN to be &#39;9&#39;. Thanks to A.J. 
Gatlin.<br />
- Added handler for tag 538a at popular request. (Matt &amp; Richard)<br />
- Temporarily disabled for() loop for handling multiple records since it 
performed no<br />
useful function as written. Also commented out residual &lt;dl&gt;&lt;/dl&gt; pair<br />
<br />
2003-08-04 
-----------------------------------------------------------------------<br />
Code has been thoroughly tested with 0.40. I have added some 30 books using<br />
this version, perhaps 10 of those using a cuecat bar code reader to enter the
<br />
ISBN from the book jacket or inside cover.<br />
<br />
Be sure to follow the recommendations at the bottom of this document regarding<br />
session_data and implementing YAZ in your PHP.<br />
<br />
Fixed a problem when the remote server provides 2 or more LoC Call numbers for<br />
a single book. They are now seperated by &#39;; &#39;.<br />
<br />
Now supports &#39;Additional authors&#39; if you change biblio_fields.php as follows:<br />
&lt;?php printUsmarcInputText(100,&quot;a&quot;,TRUE,$fieldIds,$postVars,$pageErrors,$marcTags, 
$marcSubflds, FALSE,OBIB_TEXT_CNTRL);?&gt;<br />
<br />
&lt;?php // added for additional authors (fl) ?&gt;<br />
&lt;?php printUsmarcInputText(700,&quot;a&quot;,FALSE,$fieldIds,$postVars,$pageErrors,$marcTags, 
$marcSubflds, FALSE,OBIB_TEXT_CNTRL);?&gt;<br />
<br />
&lt;?php printUsmarcInputText(650,&quot;a&quot;,FALSE,$fieldIds,$postVars,$pageErrors,$marcTags, 
$marcSubflds, FALSE,OBIB_TEXT_CNTRL);?&gt;<br />
<br />
I found it convenient to change the content of the description column of the
<br />
usmarc_subfield_dm table for row 100a to be &quot;Personal name - Author&quot;. I also 
changed <br />
the description for row 700a to &quot;Personal name - additional author&quot;.<br />
<br />
Changed the &#39;extract_marc_fields()&#39; function to use a switch / case statement in 
place <br />
of the long set of if statements.<br />
<br />
All documntation comments use the &#39;#&#39; form. &#39;//&#39; is used only for disabling
<br />
development debug statements. All of these may be removed if you prefer.<br />
<br />
You should modify biblio_new_form.php to the following:<br />
$helpPage = &quot;biblioEdit&quot;;<br />
$cancelLocation = &quot;../catalog/index.php&quot;;<br />
<br />
if (empty($lookupVal) || empty($srchBy)) { ##&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt; <br />
$focus_form_name = &quot;lookupform&quot;;<br />
$focus_form_field = &quot;lookupVal&quot;;<br />
} else {<br />
$focus_form_name = &quot;newbiblioform&quot;;<br />
$focus_form_field = &quot;materialCd&quot;;<br />
}<br />
<br />
require_once(&quot;../shared/read_settings.php&quot;);<br />
require_once(&quot;../functions/inputFuncs.php&quot;);<br />
<br />
Made several other small changes I have forgotten.<br />
<br />
2003-07-06 
----------------------------------------------------------------------- <br />
The tested code is for version 0.30 of OpenBiblio.<br />
I have included a modified version of the php code for 0.4 prepared by Matt 
Boytim<br />
even though I have not tried it myself. Also included is an add-on he suggests 
to <br />
move the web page focus to the ISBN entry line.<br />
<br />
2002-9-18 
-----------------------------------------------------------------------<br />
1. $ removed from prices<br />
2. multiple entries now properly seperated by &#39;;&#39;<br />
3. &#39;00&#39; removed from isbn<br />
4. bar code now filled only with LC control number<br />
5. leading spaces removed from LC cntl number<br />
6. remove title choice from form, reformat and add notes<br />
7. remove some unused code<br />
<br />
Known Problems 9-18:<br />
none at this time<br />
<br />
===============================================================================<br />
All of the following refers to the 0.30 version.<br />
<br />
This is an addon to OpenBiblio that allows you to do a search of a Z3950 <br />
catalog with auto posting of the resulting MARC data to the &#39;new bibliography&#39;
<br />
page. It&#39;s admitidly crude, being my first php effort. This code is an 
embelishment<br />
of the examples shown at: www.indexdata.dk/phpyaz/. <br />
<br />
This module allows you to specify isbn, lccn or title for the search and the
<br />
value to search for. The input form (all 3 lines of it is placed just above
<br />
the current new_biblio form. Output is directly to the normal input fields <br />
to allow user verification and editing before submission. Provission is made
<br />
in the code (marked as #&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;)to display the actual MARC <br />
formatted lines, but that is currently disabled by &#39;//&#39; marks. <br />
<br />
In my experience, this search only works for books published since about<br />
1972. I would guess that US lib of Congress has decided not add isbn or LCCN
<br />
searches to the z3950 server for anything older than that. For older<br />
books I use &#39;title + author&#39; using the advanced search at<br />
www.loc.gov/z3950/.<br />
<br />
I&#39;ve added some 1000+ books to my catalog using this code and it definately 
works <br />
for me using the Lib of Congress voyager server. Another server could be<br />
easily substituted. Just search for the following and substitute the<br />
server of choice. <br />
<br />
$host = &#39;z3950.loc.gov:7090&#39;;<br />
$database = &#39;voyager&#39;;<br />
<br />
A list of servers can be found at www.loc.gov/z3950/<br />
<br />
The mod to openBiblio involves adding this single line to biblio_new_form.php
<br />
just above the existing &lt;form ... &gt; statement near the end of the file. <br />
<br />
&lt;?php include(&quot;../catalog/lookup.php&quot;);?&gt; <br />
<br />
Then of course you add the lookup.php file to the indicated directory. Thats it!
<br />
(Assuming you have YAZ installed in your php installation.)<br />
<br />
While, all may go perfectly for you the first time, I found it useful to make a 
few<br />
additions to biblio_new.php. Locate the &#39;!validData&#39; string as shown below, and 
insert<br />
the new lines beginning with &#39;echo&#39; as shown.<br />
<br />
$validData = $biblio-&gt;validateData();<br />
if (!$validData) {<br />
echo &#39;Validation failed!&#39; . &#39;&lt;br&gt;&#39;; #&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;<br />
echo &#39;one or more of the following has an invalid character:&#39; . &#39;&lt;br&gt;&#39;; #&lt;&lt;&lt;<br />
echo &#39; isbn = &#39; . $HTTP_POST_VARS[&quot;isbnNmbr&quot;] . &#39;&lt;br&gt;&#39;; #&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;<br />
echo &#39; bar Code = &#39; . $HTTP_POST_VARS[&quot;barcodeNmbr&quot;] . &#39;&lt;br&gt;&#39;; #&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;<br />
echo &#39; title = &#39; . $HTTP_POST_VARS[&quot;title&quot;] . &#39;&lt;br&gt;&#39;; #&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;<br />
echo &#39; call Nmbr = &#39; . $HTTP_POST_VARS[&quot;callNmbr&quot;] . &#39;&lt;br&gt;&#39;; #&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;<br />
echo &#39; price = &#39; . $HTTP_POST_VARS[&quot;price&quot;] . &#39;&lt;br&gt;&#39;; #&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;<br />
echo &#39;please correct the invalid entries and try again.&#39; . &#39;&lt;br&gt;&#39;; #&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;<br />
$pageErrors[&quot;barcodeNmbr&quot;] = $biblio-&gt;getBarcodeNmbrError();<br />
$pageErrors[&quot;title&quot;] = $biblio-&gt;getTitleError();<br />
$pageErrors[&quot;callNmbr&quot;] = $biblio-&gt;getCallNmbrError();<br />
$pageErrors[&quot;price&quot;] = $biblio-&gt;getPriceError();<br />
$HTTP_SESSION_VARS[&quot;postVars&quot;] = $HTTP_POST_VARS;<br />
$HTTP_SESSION_VARS[&quot;pageErrors&quot;] = $pageErrors;<br />
header(&quot;Location: ../catalog/biblio_new_form.php&quot;);<br />
exit();<br />
}<br />
<br />
Then when I do get some incorrect data into the data entry form, I can see what
<br />
caused the problem.<br />
<br />
<br />
Note: if you are using windows, check that your installation of php created a
<br />
&#39;.../php/sessionData&#39; dir. OpenBiblio will require it to run correctly.<br />
<br />
My installation of php (4.23 for Windows 2000) came with YAZ already<br />
installed. All I needed to do was to move the accompanying yaz.dll to<br />
my c:\winnt\system32 dir. The indexdata page can help with linux/unix<br />
systems.<br />
<br />
<br />
Fred LaPlante<br />
flaplante@flos-inc.com<br />
<br />
</p>
