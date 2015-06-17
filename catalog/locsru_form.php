<?php
/**
 * Display INPUT form
 */

require_once '../functions/inputFuncs.php';
?>

<form name="locForm" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="hidden" name="reset" value="Y" />
  <input style="display:none" type="text" name="d" value="1" />    <?php // Dummy input to prevent IE bug ?>
<?php echo $text->getText('locsru_detalle'); ?>:<br /><br />
  <strong><?php echo $text->getText('locsru_Instructions'); ?>:<br /><br /></strong>
  <table class="primary">
    <tr>
      <th colspan="1">
        <?php echo $text->getText('locsru_Search'); ?>
      </th>
    </tr>
    <tr>
      <td class="primary">
        <input type="text" size="30" name="locVal" value="" />
      </td>
    </tr>

    <tr>
      <th colspan="1">
        <?php echo $text->getText('locsru_Maxlimit'); ?>
      </th>
    </tr>


    <tr>
      <td class="primary">
        <input type="text" size="30" name="locMaxlimit" value="" />
      </td>
    </tr>
    <tr>
      <td class="primary" align="center">
        <input type="submit" name="action" value="<?php echo $text->getText('Search'); ?>" class="button" />
      </td>
    </tr>
  </table>
</form>
