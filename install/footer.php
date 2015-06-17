<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 //   require_once("../shared/global_constants.php");
?>
<!-- **************************************************************************************
     * Footer
     **************************************************************************************-->
<br><br><br>
</font>
<font face="Arial, Helvetica, sans-serif" size="1">
<center>
     <?php echo $loc->getText("footerDatabaseVersion"); ?> <?php echo H(OBIB_LATEST_DB_VERSION);?><br>
     <?php echo $loc->getText("footerCodeVersion"); ?> <?php echo H(OBIB_CODE_VERSION);?><br>
     <?php echo $loc->getText("footerPoweredBy"); ?> <br>
      <?php echo $loc->getText("footerCopyright"); ?> &copy; 2002-2005 Dave Stevens<br>
      <?php echo $loc->getText("footerUnderThe"); ?>
      <a href="../doc/copying.html"><?php echo $loc->getText("footerGPL"); ?></a><br><br>
       <a href="http://espabiblio.sourceforge.net/front/"><?php  echo $loc->getText("footerfooter"); ?></a>
</center>
<br>
</font>
    </td>
  </tr>
</table>
</body>
</html>
