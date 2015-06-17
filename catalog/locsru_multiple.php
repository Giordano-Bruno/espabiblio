<?php
function display_records($marc)
{
  global $text;

  echo "<table>\n";
  echo "  <th colspan='2'>Resultados</th>\n";

  foreach($marc AS $key => $hit)
  {
    if(isset($hit['245a']))  // Book must have a title
    {
      echo "  <tr>\n";
      echo "    <td class='primary'>\n";
      echo "      <b>" . $text->getText('locsru_Title') .": </b>" . $hit[MARC_TITLE] . "<br />\n";
      if(isset($hit[MARC_AUTHOR]))
      {
        echo "      <b>" . $text->getText('locsru_Author') .": </b>" . $hit[MARC_AUTHOR] . "<br />\n";
      }
      if(isset($hit['020a']))
      {
        echo "      <b>" . $text->getText('locsru_ISBN') . ": </b>" . $hit[MARC_ISBN] . "<br />\n";
      }
      if(isset($hit[MARC_PUBLICATION_PLACE]) && isset($hit[MARC_PUBLISHER]))
      {
        echo '      <b>' . $text->getText('locsru_Publication') . ': </b>' . $hit[MARC_PUBLICATION_PLACE] . ': ' .$hit[MARC_PUBLISHER] . "<br />\n";
      }
      else if(isset($hit[MARC_PUBLISHER]))
      {
        echo '      <b>' . $text->getText('locsru_Publisher') . ': </b>' . $hit[MARC_PUBLISHER] . "<br />\n";
      }
      if(isset($hit[MARC_PUBLICATION_DATE]))
      {
        echo '      <b>' . $text->getText('locsru_PublicationDate') . ': </b>' . $hit[MARC_PUBLICATION_DATE] . "<br />\n";
      }
      echo "    </td>\n";
      echo "    <td valign='top'>\n";
      echo '      <form name="form"' . $key .' action="' . $_SERVER['PHP_SELF'] ."\" method=\"POST\">\n";
      echo "        <input type='submit' name='submit' value='" . $text->getText('locsru_UseThis') . "' class='button' />\n";
      echo "        <input type='hidden' name='action' value='Edit' />\n";
      foreach($hit AS $k => $v)
      {
        echo "        <input type='hidden' name='" . $k ."' value='". htmlentities($v, ENT_QUOTES) ."' />\n";
      }
      echo "      </form>\n";
      echo "    </td>\n";
      echo "  </tr>\n";
    }
  }
  echo "</table>";
}

display_records($marc);
