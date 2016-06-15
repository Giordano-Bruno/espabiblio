<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
/****************************************************************************
 * result types:
 * OBIB_ASSOC - associative array result type
 * OBIB_NUM - numeric array result type
 * OBIB_BOTH - both assoc and numeric array result type
 **************************************************************************** */
define("OBIB_ASSOC","1");
define("OBIB_NUM","2");
define("OBIB_BOTH","3");

/****************************************************************************
 * search types:
 **************************************************************************** */
define("OBIB_SEARCH_BARCODE", "1");
define("OBIB_SEARCH_TITLE", "2");
define("OBIB_SEARCH_AUTHOR", "3");
define("OBIB_SEARCH_SUBJECT", "4");
define("OBIB_SEARCH_NAME", "5");
define("OBIB_SEARCH_ISBN", "6");
define("OBIB_SEARCH_KEYWORD", "7");
define("OBIB_SEARCH_CALLNO", "8");
define("OBIB_SEARCH_MATERIAL", "9");
define("OBIB_SEARCH_COLLECTION", "10");
define("OBIB_SEARCH_SERIES", "11");
define("OBIB_SEARCH_PUBLISHER", "12");
define("OBIB_SEARCH_LANGUAGE", "13");
define("OBIB_SEARCH_ID", "14");
define("OBIB_ADVANCED_SEARCH", "20");

/****************************************************************************
 * search types for catalog CDD, CDU, IBIC, CUTTER:
  **************************************************************************** */
define("OBIB_SEARCH_CDU_CLV", "31");
define("OBIB_SEARCH_CDU_NUM", "32");
define("OBIB_SEARCH_CDU_DES", "33");
define("OBIB_SEARCH_CDD_CLV", "35");
define("OBIB_SEARCH_CDD_NUM", "36");
define("OBIB_SEARCH_CDD_DES", "37");
define("OBIB_SEARCH_IBIC_CLV", "40");
define("OBIB_SEARCH_IBIC_NUM", "41");
define("OBIB_SEARCH_IBIC_DES", "42");
define("OBIB_SEARCH_CUTTER_CLV", "46");
define("OBIB_SEARCH_CUTTER_NUM", "47");
define("OBIB_SEARCH_CUTTER_DES", "48");

/****************************************************************************
 *  Misc. system constants
 **************************************************************************** */
date_default_timezone_set('America/Mexico_City');//jalg
define("OBIB_CODE_VERSION",		"GB BETA 34.11");//Cambio al añadir invet y mejorar translate #añadir comentarios a changelot
define("OBIB_LATEST_DB_VERSION",	"GB-0.34");//cambios por añadir el precio en las copias d elibro
define("OBIB_DEFAULT_STATUS",		"in");# Fix por que se repite el valor " IN "
define("OBIB_STATUS_IN",		"in");//Por revisar
define("OBIB_STATUS_OUT",		"out");//Revisado
define("OBIB_STATUS_ON_LOAN",		"ln");//En calidad de préstamo
define("OBIB_STATUS_ON_ORDER",		"ord");//Reservado
define("OBIB_STATUS_SHELVING_CART",	"crt");//Para Reponer
define("OBIB_STATUS_ON_HOLD",		"hld");//En Espera
define("OBIB_MBR_CLASSIFICATION_JUVENILE","j");
define("OBIB_DEMO_FLG",			FALSE);# fix revisar e integrar desde admin jalg 2-2015
define("OBIB_HIGHLIGHT_I18N_FLG",	FALSE);
define("OBIB_SEARCH_MAXPAGES",		20);
define("OBIB_MAX_FILE_SIZE",		500000000);
define("OBIB_MYSQL_DATETIME_TYPE",	"datetime");
define("OBIB_MYSQL_DATETIME_FORMAT",	"Y-m-d H:i:s");
define("OBIB_MYSQL_DATE_TYPE",		"date");
define("OBIB_MYSQL_DATE_FORMAT",	"Y-m-d");
define("DB_TABLENAME_PREFIX", 		"");// # Not fully implemented yet.
define('OBI_LANG',"es");//selecciona el idioma por default a usar cuando se install o cuando translate
//define('OBIB_CHARSET',"es");//selecciona la codificacion
define("OBIB_TITLE_LARGE", "375");// define el largo de caracteres a mostrar en titulos despues d elas busquedas biblio_view.php
define("OBIB_BOOTSTRAP", TRUE);// Permite usar el CSS BOOTSTRAP o no. TRUE O FALSE #Fix falta generar un CSS especifico e intregrar repsonsive o movile CSS

/****************************************************************************
 *  Path Directories
 **************************************************************************** */
# Change this if your document root isn't a '/', e.g., /library/
# Server for keeping portadas desde servidor externo jalg
define("DOCUMENT_ROOT", "/");
define("OBIB_LOCALE_ROOT","../locale/");
define("MEDIA_PATH", "media");
define("COVER_PATH", "/media/covers");
define("COVER_PATH_TMP", "/media/tmp");
define("FOTO_PATH", "/media/lectores");
define("AUTOR_PATH", "/media/autores");
define("DIGI_PATH", "/media/digitales");
define('OBI_PORTADAS',"http://covers.openlibrary.org/b/isbn/");
