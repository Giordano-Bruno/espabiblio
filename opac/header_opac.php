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

// code character set if specified
if (OBIB_CHARSET != "") { ?>
  <meta http-equiv="content-type" content="text/html; charset=<?php echo H(OBIB_CHARSET); ?>">
  <meta charset=<?php echo H(OBIB_CHARSET); ?>">
<?php } ?>

<!-- **************************************************************************************
     * Control dle icono de pestaña FAVICON
     **************************************************************************************-->
<link href='../favicon.ico' rel='icon' type='image/x-icon'/>

<meta name="description" content="Espabiblio Sistema para la gestión de bibliotecas y Biblioteca Digital, basado en Openbiblio ">

<!-- **************************************************************************************
     * ajusta estilos con o sin boostrap
     **************************************************************************************-->
  <?php 
#FIX falta generar plantillas con uso de BOOTSTRAP
//true if bootstrap should be enabled
  require_once("../shared/global_constants.php");//para activar o no el BOOTSTRAP
    if(OBIB_BOOTSTRAP){
        echo '<link href="../css/bootstrap.min.css" rel="stylesheet">';
    }
echo '<style type="text/css">';
echo '<link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" />';
   include("../css/style.php");
echo '</style>';
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
<!-- **************************************************************************************
     * Control de 
     **************************************************************************************-->
<!-- 
<script language="JavaScript">
 -->
   <script type="text/javascript" 
<!--
function popSecondary(url) {
    var SecondaryWin;
    SecondaryWin = window.open(url,"secondary","resizable=yes,scrollbars=yes,width=535,height=400");
}
function returnLookup(formName,fieldName,val) {
    window.opener.document.forms[formName].elements[fieldName].value=val;
    window.opener.focus();
    this.close();
}
-->
</script>
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
  <title><?php echo H(OBIB_LIBRARY_NAME);?></title>
 
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
           echo ' <a href="/" class="library-name">'. H(OBIB_LIBRARY_NAME) .'</a>';
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
  </tr>


    <?php if ($tab == "user") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else {  ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php if ($tab == "opac") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td width="2000" bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
  </tr>

    <?php if ($tab == "user") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab1" nowrap="yes"> <?php echo $headerLoc->getText("headerCirculation"); ?></td>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab2" nowrap="yes"> <a href="../user/index.php" class="tab"><?php echo $headerLoc->getText("headerCirculation"); ?></a> </td>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>

    <?php if ($tab == "opac") { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab1" nowrap="yes"> <?php echo $headerLoc->getText("headerOpac"); ?></td>
      <td  bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } else { ?>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
      <td class="tab2" nowrap="yes"> <a href="../opac/index.php" class="tab"><?php echo $headerLoc->getText("headerOpac"); ?></a> </td>
      <td  bgcolor="<?php echo H(OBIB_ALT2_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <?php } ?>
    <td width="50000" bgcolor="<?php echo H(OBIB_TITLE_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
  </tr>

  <tr bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>">
    <td colspan="3" <?php if ($tab == "user") { echo " bgcolor='".H(OBIB_ALT1_BG)."'"; } ?>><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td><img src="../images/shim.gif" width="1" height="1" border="0"></td>
   <td colspan="3" <?php if ($tab == "opac") { echo " bgcolor='".H(OBIB_ALT1_BG)."'"; } ?>><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td><img src="../images/shim.gif" width="1" height="1" border="0"></td>
  </tr>
</table>

<!-- **************************************************************************************
     * Left nav
     **************************************************************************************-->
<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
  <tr bgcolor="<?php echo H(OBIB_ALT1_BG);?>">
    <td colspan="6"><img src="../images/shim.gif" width="1" height="15" border="0"></td>
  </tr>
  <tr>
    <td bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="10" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="140" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="10" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="10" height="1" border="0"></td>
  </tr>
  <tr>
    <td bgcolor="<?php echo H(OBIB_ALT1_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td valign="top" bgcolor="<?php echo H(OBIB_ALT1_BG);?>" class="nav">
      <font  class="alt1">
      <?php include("../navbars/opac.php"); ?>
      </font>
    <br><br><br><br>
    </td>
    <td bgcolor="<?php echo H(OBIB_BORDER_COLOR);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td bgcolor="<?php echo H(OBIB_PRIMARY_BG);?>"><img src="../images/shim.gif" width="1" height="1" border="0"></td>
    <td height="100%" width="100%" valign="top">
      <font class="primary">
      <br>
<!-- **************************************************************************************
     * beginning of main body
     **************************************************************************************-->
