<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
  require_once("../classes/Localize.php");
  $headerLoc = new Localize(OBIB_LOCALE,"shared");

// code html tag with language attribute if specified.
echo "<html";
if (OBIB_HTML_LANG_ATTR != "") {
  echo " lang=\"".H(OBIB_HTML_LANG_ATTR)."\"";
}
echo ">\n";
echo "<head>\n";
/*
<!-- **************************************************************************************
     * Favicon, icono para la pestaña
     **************************************************************************************-->
*/
echo "<link href='../favicon.ico' rel='icon' type='image/x-icon'/>";

// code character set if specified
if (OBIB_CHARSET != "") { ?>
  <meta http-equiv="content-type" content="text/html; charset=<?php echo H(OBIB_CHARSET); ?>">
  <meta charset=<?php echo H(OBIB_CHARSET); ?>">

<?php } ?>
  <meta name="description" content="Sistema informático para la gestión de bibliotecas y biblioteca digital GIORDANO BRUNO, basado en Openbiblio">

<!-- **************************************************************************************
     * ajusta estilos con o sin boostrap
     **************************************************************************************-->
  <?php 
#FIX falta generar plantillas con uso de BOOTSTRAP
//true if bootstrap should be enabled
  require_once("../shared/global_constants.php");//para activar o no el BOOTSTRAP
    if(OBIB_BOOTSTRAP){
        echo '<link href="../css/bootstrap.min.css" rel="stylesheet">';
//        echo 'activa el boostrap';
    }
echo '<style type="text/css">';
echo '<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />';
   include("../css/style.php");
echo '</style>';
 //       echo 'NO activa el boostrap';
?>

<!-- **************************************************************************************
     * Control de ssessiones y temas
     **************************************************************************************-->
<?php    
  if (!isset($_SESSION["active_theme"])) {
    require_once("../shared/theme.php");
    $_SESSION["active_theme"] = get_active_theme();
  }
  if (strcmp($_SESSION["active_theme"], "") != 0) {
    echo '<link href="../themes/'. $_SESSION["active_theme"] .'/style.css" rel="stylesheet" type="text/css" media="screen" />';
  }
?>
<title><?php echo H(OBIB_LIBRARY_NAME);?></title>
<script language="JavaScript">
<!--
function popSecondary(url) {
    var SecondaryWin;
    SecondaryWin = window.open(url,"secondary","resizable=yes,scrollbars=yes,width=535,height=400");
    self.name="main";
}
function popSecondaryLarge(url) {
    var SecondaryWin;
    SecondaryWin = window.open(url,"secondary","toolbar=yes,resizable=yes,scrollbars=yes,width=700,height=500");
    self.name="main";
}
function backToMain(URL) {
    var mainWin;
    mainWin = window.open(URL,"main");
    mainWin.focus();
    this.close();
}
-->
</script>
<?php
	## ---------------------------------------------------------------------
	## --- added for Fred LaPlante's Lookup Function -----------------------
	## --- modificado jalg para que solo se use en funciones de lookup -----
	
	//echo $nav;
if ($nav=="lookupOpts" || $nav=="lookupHosts" || $nav=="lookup" ){
	if (file_exists('../lookup2/customHead.php')) {
		include ('../lookup2/customHead.php');
			echo "lara";
	}
}	
	## ---------------------------------------------------------------------
	?>

  <script type="text/javascript" src="../scripts/jquery.js"></script>
  <script type="text/javascript" src="../scripts/jquery.collapsible.js"></script>
  <?php
    if (file_exists('../scripts/locale/'. OBIB_LOCALE .'.js')) {
      $js_filename = OBIB_LOCALE .'.js'; 
    } else {
      $js_filename = 'en.js';
    }
  ?>
  <script type="text/javascript" src="../scripts/locale/<?php echo $js_filename; ?>"></script>
  <script type="text/javascript" src="../scripts/search.js"></script>

</head>
<body bgcolor="<?php echo H(OBIB_PRIMARY_BG);?>" topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" marginheight="0" marginwidth="0" <?php
  if (isset($focus_form_name) && ($focus_form_name != "")) {
    if (preg_match('/^[a-zA-Z0-9_]+$/', $focus_form_name)
        && preg_match('/^[a-zA-Z0-9_]+$/', $focus_form_field)) {
      echo 'onLoad="self.focus();document.'.$focus_form_name.".".$focus_form_field.'.focus()"';
    }
  } ?> >


<!-- **************************************************************************************
     * Google
     **************************************************************************************-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49367510-1', 'sourceforge.net');
  ga('send', 'pageview');

</script>

<!-- **************************************************************************************
     * Library Name and hours
     **************************************************************************************-->
<table class="primary" width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr bgcolor="<?php echo H(OBIB_TITLE_BG);?>">
    <td width="100%" class="title" valign="top">
       <?php
         if (OBIB_LIBRARY_IMAGE_URL != "") {
           echo "<img align=\"middle\" src=\"".H(OBIB_LIBRARY_IMAGE_URL)."\" border=\"0\">";
         }
         if (!OBIB_LIBRARY_USE_IMAGE_ONLY) {
           echo ' <a href="'. DOCUMENT_ROOT .'" class="library-name">'. H(OBIB_LIBRARY_NAME) .'</a>';
         }
       ?>
    </td>
    <td valign="top">
      <table class="primary library-info" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="title" nowrap="yes"><font class="small"><?php echo $headerLoc->getText("headerTodaysDate"); ?></font></td>
          <td class="title" nowrap="yes"><font class="small"><?php echo H(date($headerLoc->getText("headerDateFormat")));?></font></td>
        </tr>
        <tr>
          <td class="title" nowrap="yes"><font class="small"><?php if (OBIB_LIBRARY_HOURS != "") echo $headerLoc->getText("headerLibraryHours");?></font></td>
          <td class="title" nowrap="yes"><font class="small"><?php if (OBIB_LIBRARY_HOURS != "") echo H(OBIB_LIBRARY_HOURS);?></font></td>
        </tr>
        <tr>
          <td class="title" nowrap="yes"><font class="small"><?php if (OBIB_LIBRARY_ADERS != "") echo $headerLoc->getText("headerLibraryAders");?></font></td>
          <td class="title" nowrap="yes"><font class="small"><?php if (OBIB_LIBRARY_ADERS != "") echo H(OBIB_LIBRARY_ADERS);?></font></td>
        </tr>
        <tr>
          <td class="title" nowrap="yes"><font class="small"><?php if (OBIB_LIBRARY_PHONE != "") echo $headerLoc->getText("headerLibraryPhone");?></font></td>
          <td class="title" nowrap="yes"><font class="small"><?php if (OBIB_LIBRARY_PHONE != "") echo H(OBIB_LIBRARY_PHONE);?></font></td>
        </tr>
      </table>
    </td>
  </tr>
</table>

<!-- **************************************************************************************
     * Tabs
     **************************************************************************************-->
<table class="primary" width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>" colspan="3"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>" colspan="3"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>" colspan="3"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>" colspan="3"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>" colspan="3"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>" colspan="3"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>" colspan="3"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>" colspan="3"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>" colspan="3"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

  </tr>
  <tr bgcolor="<?php echo H(OBIB_TITLE_BG);?>">
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <?php if ($tab == "home") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>

    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <?php if ($tab == "circulation") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>

    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <?php if ($tab == "cataloging") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>

    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <?php if ($tab == "admin") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>

    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <?php if ($tab == "reports") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>

    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
     <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

<?php //inventory ?>
    <?php if ($tab == "inventory") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td  bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
<?php //inventory ?>
    <?php if ($tab == "opac") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>

    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td  bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
  </tr>

  <tr bgcolor="<?php echo H(OBIB_TITLE_BG);?>">
    <?php if ($tab == "home") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab1" nowrap="yes"> <?php echo $headerLoc->getText("headerHome"); ?></td>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab2" nowrap="yes"> <a href="../home/index.php" class="tab"><?php echo $headerLoc->getText("headerHome"); ?></a> </td>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>

    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <?php if ($tab == "circulation") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab1" nowrap="yes"> <?php echo $headerLoc->getText("headerCirculation"); ?></td>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab2" nowrap="yes"> <a href="../circ/index.php" class="tab"><?php echo $headerLoc->getText("headerCirculation"); ?></a> </td>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>

    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <?php if ($tab == "cataloging") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab1" nowrap="yes"> <?php echo $headerLoc->getText("headerCataloging"); ?></td>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab2" nowrap="yes"> <a href="../catalog/index.php" class="tab"><?php echo $headerLoc->getText("headerCataloging"); ?></a> </td>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>

    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <?php if ($tab == "admin") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab1" nowrap="yes"> <?php echo $headerLoc->getText("headerAdmin"); ?></td>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab2" nowrap="yes"> <a href="../admin/index.php" class="tab"><?php echo $headerLoc->getText("headerAdmin"); ?></a> </td>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>

    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <?php if ($tab == "reports") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab1" nowrap="yes"> <?php echo $headerLoc->getText("headerReports"); ?></td>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab2" nowrap="yes"> <a href="../reports/index.php" class="tab"><?php echo $headerLoc->getText("headerReports"); ?></a> </td>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>
<?php // inventory ?>
    <?php if ($tab == "inventory") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab1" nowrap="yes"> <?php echo $headerLoc->getText("headerInventory"); ?></td>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab2" nowrap="yes"> <a href="../inventory/index.php" class="tab"><?php echo $headerLoc->getText("headerInventory"); ?></a> </td>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>
<?php // inventory ?>
    <?php if ($tab == "opac") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab1" nowrap="yes"> <?php echo $headerLoc->getText("headerOpac"); ?></td>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab2" nowrap="yes"> <a href="../opac/index.php" class="tab"><?php echo $headerLoc->getText("headerOpac"); ?></a> </td>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
<?php // inventory ?>
    <td width="2000" bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
<?php // inventory ?>
  </tr>
  <tr bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>">
    <td colspan="3" <?php if ($tab == "home") { echo " bgcolor='".H(OBIB_ALT1_BG)."'"; } ?>><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td colspan="3" <?php if ($tab == "circulation") { echo " bgcolor='".H(OBIB_ALT1_BG)."'"; } ?>><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td colspan="3" <?php if ($tab == "cataloging") { echo " bgcolor='".H(OBIB_ALT1_BG)."'"; } ?>><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td colspan="3" <?php if ($tab == "admin") { echo " bgcolor='".H(OBIB_ALT1_BG)."'"; } ?>><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td colspan="3" <?php if ($tab == "reports") { echo " bgcolor='".H(OBIB_ALT1_BG)."'"; } ?>><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td><img src="../images/shim.gif" width="1" height="1" border="0"></td>
<?php // inventory ?>
    <td colspan="3" <?php if ($tab == "inventory") { echo " bgcolor='".H(OBIB_ALT1_BG)."'"; } ?>><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td><img src="../images/shim.gif" width="1" height="1" border="0"></td>
<?php // inventory ?>
   <td colspan="3" <?php if ($tab == "opac") { echo " bgcolor='".H(OBIB_ALT1_BG)."'"; } ?>><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td><img src="../images/shim.gif" width="1" height="1" border="0"></td>
  </tr>
</table>
