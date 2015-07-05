<h1>Pagina di aiuto - Catalogazione:</h1>
<br><br>
Sottosezioni aiuto:
<ul>
  <li><a href="#sec1"><font class="error">Questo sistema di aiuto è ancora in costruzione.</font></a></li>
  <li><a href="#sec2"></a></li>

In centos 6.3 la soluzione del problema del Socket per far funzionare le ricerche alla biblioteca del congresso (SRU) e la Z39.50 (YAZ)
 è aggiungere al php.ini una riga contenente

–enable-sockets

ricordarsi di riavviare apache.

Warning: fsockopen() [function.fsockopen]: unable to connect to z3950.loc.gov:7090 (Connection timed out) in /espabiblio/catalog/locsru_search.php on line 98

Notice: Socket error Connection timed out (110) in /home/h9khaj5z/public_html/espabiblio/catalog/locsru_search.php on line 125
Non è stato trovato alcun risultato per ......
Forse qualche termine mancante ......


</ul>
<br><br>
