<?php

require_once("../shared/common.php");
?>
<h1>Formato CSV per importare in OpenBiblio:</h1>
<p>Il file di esempio CSV disponibile in OpenBiblio è nel formato di valore separato da tabulazione (TSV).</p>

<p>Per Microsoft Excel 2003/2007: scaricare il file, aggiungere le informazioni dei libri, salvare come CSV/TSV ed importare in openbiblio.</p>
<p>Per OpenOffice o altro software di etitazione CSV: controllare che il documento sia nel formato testo Unicode o UTF-16
e consentire il separatore "tab" per aprire il file CSV. In OpenOffice, assicurarsi di selezionare "Mantenere il formato attuale", al salvataggio.</p>
<h4>Come utilizzare il file di esempio CSV:</h4>
<ul>
  <li>Scaricare il file.</li>
  <li>Aprire il file CSV con un software di gestione testi tipo Microsoft Office, OpenOffice o Libreofice.</li>
  <li>aggiungere le informazioni dei libri, ad esempio ISBN<font color="red">*</font>, Autore<font color="red">*</font>, Titolo<font color="red">*</font>, etc. (Nota: le prime 3 colonne sono obbligatorie!)</li>

  <li>La colonna 'Nome del file della copertina del libro' richiede il percorso del file immagine nella cartella <?php echo COVER_PATH; ?>.</li>
  <li>Non cambiare, modificare l'ordine o omettere le colonne della prima fila nel file, altrimenti non verrà caricato.</li>
  <li>Salvare e andare alla pagina di importazione del CSV. (Catalogazione> Importare bibliografie da un archivio CSV)</li>
</ul>

<font class="small">Nota: il caricamento fallirà nei seguenti casi:
<ol>
  <li>Mancanza o modifiche dell'intestazione (prima riga del CSV).</li>
  <li>Omissione di campi o colonne obbligatorie (quelle marcate con "*").</li>
  <li>Formato sccorretto del file CSV (non è testo piano).</li>
  <li>Errore di collegamento con la base dati. (contattare un amministratore di sistema)</li>
  <li>File troppo grande. (ccontattare un amministratore di sistema, per conoscere il valore della variabile "maxziseupload")</li>
</ol>
</font>

<font class="normal">
  <li>Per problemi o informazioni:  joanlaga@hotmail.com</li>
  <li>Visita il nostro forum su sourceforge.</li>
</font>