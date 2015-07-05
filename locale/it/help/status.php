<h1>Comprendere i cambi di stato delle Bibliografie:</h1>
La seguente tabella mostra i possibili stati comuni della copia di una bibliografia, è possibile aggiungerne altri se necessario.<br><br>
<table class="primary">
  <tr><th>Stato</th><th>Descrizione</th></tr>
  <tr><td class="primary" valign="top">Disponibile</td><td class="primary">La Bibliografia è negli scaffali e disponibile per il prestito.</td></tr>
  <tr><td class="primary" valign="top">Fuori</td><td class="primary">La bibliografia è attualmente fuori, in uso da un lettore.</td></tr>
  <tr><td class="primary" valign="top">Prenotato</td><td class="primary">La bibliografia è stata prenotata da un lettore.</td></tr>
  <tr><td class="primary" valign="top">Nel carrello</td><td class="primary">La bibliografia è nel carrello, in attesa di essere rimessa negli scaffali o consegnata.</td></tr>
  <tr><td class="primary" valign="top">In riparazione</td><td class="primary">La bibliografia è danneggiata e quindi non disponibile.</td></tr>
  <tr><td class="primary" valign="top">In vetrina</td><td class="primary">La bibliografia è in vetrina e quindi non disponibile.</td></tr>
  <tr><td class="primary" valign="top">Perso</td><td class="primary">La bibliografia non è disponibile perché non si trova.</td></tr>
  <tr><td class="primary" valign="top">In prestito</td><td class="primary">La bibliografia è in prestito.</td></tr>
  <tr><td class="primary" valign="top">Ordinato</td><td class="primary">La bibliografia è stata ordinata ma non è ancora arrivata.</td></tr>
</table>
<br>
I cambiamenti di stato seguono le seguenti regole:<br><br>
<table class="primary">
  <tr><th>Pagina</th><th>Vecchio stato</th><th>Nuovo stato</th><th>Regole</th></tr>
  <tr>
    <td class="primary" valign="top" rowspan="3">Informazioni utente</td>
    <td class="primary" valign="top">Disponibile</td>
    <td class="primary" valign="top">Fuori</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">altro<sup>*</sup></td>
    <td class="primary" valign="top">Fuori</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">Prenotato</td>
    <td class="primary" valign="top">Fuori</td>
    <td class="primary" valign="top">Solo se l'utente è il primo nelle prenotazioni della copia o se non ci sono prenotazioni.</td>
  </tr>
  <tr>
    <td class="primary" valign="top" rowspan="5">restituzione</td>
    <td class="primary" valign="top">Fuori</td>
    <td class="primary" valign="top">nel carrello</td>
    <td class="primary" valign="top">Calcola eventuali multe per ritardo.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">Fuori</td>
    <td class="primary" valign="top">Prenotato</td>
    <td class="primary" valign="top">Calcola dopo le multe e mostra il messaggio per mettere il libro nei prenotati.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">altro<sup>*</sup></td>
    <td class="primary" valign="top">nel carrello</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">Prenotato</td>
    <td class="primary" valign="top">nel carrello</td>
    <td class="primary" valign="top">Solo se non ci sono prenotazioni per la copia.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">nel carrello</td>
    <td class="primary" valign="top">Disponibile</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top" rowspan="5">informazioni biblioteca</td>
    <td class="primary" valign="top">altro<sup>*</sup></td>
    <td class="primary" valign="top">Disponibile</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">altro<sup>*</sup></td>
    <td class="primary" valign="top">altro<sup>*</sup></td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">Disponibile</td>
    <td class="primary" valign="top">altro<sup>*</sup></td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">Prenotato</td>
    <td class="primary" valign="top">Disponibile</td>
    <td class="primary" valign="top">Solo se non ci sono prenotazioni per la copia.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">Prenotato</td>
    <td class="primary" valign="top">altro<sup>*</sup></td>
    <td class="primary" valign="top">Solo se non ci sono prenotazioni per la copia.</td>
  </tr>
</table>

<font class="small">* - note: altro include gli stati In riparazione, In vetrina, Perso, Ordinato e In prestito.</font>
