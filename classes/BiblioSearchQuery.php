<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
require_once("../shared/common.php");
require_once("../shared/global_constants.php");
require_once("../classes/Query.php");
require_once("../classes/BiblioSearch.php");//jalg
require_once("../classes/BiblioField.php");
require_once("../classes/Localize.php");

/******************************************************************************
 * BiblioQuery data access component for library bibliographies
 *
 * @author David Stevens <dave@stevens.name>;
 * @version 1.0
 * @access public
 ******************************************************************************
 */
class BiblioSearchQuery extends Query {
  var $_itemsPerPage = 1;
  var $_rowNmbr = 0;
  var $_currentRowNmbr = 0;
  var $_currentPageNmbr = 0;
  var $_rowCount = 0;
  var $_pageCount = 0;
  var $_loc;

  function BiblioSearchQuery() {
    $this->Query();
    $this->_loc = new Localize(OBIB_LOCALE,"classes");
  }
  function setItemsPerPage($value) {
    $this->_itemsPerPage = $value;
  }
  function getLineNmbr() {
    return $this->_rowNmbr;
  }
  function getCurrentRowNmbr() {
    return $this->_currentRowNmbr;
  }
  function getRowCount() {
    return $this->_rowCount;
  }
  function getPageCount() {
    return $this->_pageCount;
  }

  /****************************************************************************
   * Executes a query
   * @param string $type one of the global constants
   *               OBIB_SEARCH_BARCODE,
   *               OBIB_SEARCH_TITLE,
   *               OBIB_SEARCH_AUTHOR,
   *               or OBIB_SEARCH_SUBJECT
   * @param string @$words pointer to an array containing words to search for
   * @param integer $page What page should be returned if results are more than one page
   * @param string $sortBy column name to sort by.  Can be title or author
   * @return boolean returns false, if error occurs
   * @access public
   ****************************************************************************
   */
  function search($type, &$words, $page, $sortBy, $opacFlg=true) {

    # Reset stats
    $this->_rowNmbr = 0;
    $this->_currentRowNmbr = 0;
    $this->_currentPageNmbr = $page;
    $this->_rowCount = 0;
    $this->_pageCount = 0;

    # Setting SQL join clause
    $join = "FROM biblio ";
//    $join = "FROM biblio LEFT join biblio_copy ON biblio.bibid=biblio_copy.bibid ";

    # Setting SQL where clause
    $criteria = '';
//    $joins = " LEFT JOIN biblio_field ON ";
    $joins = '';
    $short = '';

    $words = array_unique(unserialize(strtolower(serialize($words))));

    if ((sizeof($words) == 0) || ($words[0] == "" && !is_array($words))) { //11-2015 para que no marque error cuando no se manda una cadena de busqueda
      if ($opacFlg) $criteria = "where opac_flg = 'Y' ";
        $join .= " LEFT join biblio_copy ON biblio_field.bibid=biblio.bibid ";
	$criteria .= $this->_getCriteria(array("biblio_field.field_data"), $words);
    } else {
      if ($type == OBIB_SEARCH_BARCODE) {
            $join .= "LEFT JOIN biblio_copy ON biblio.bibid=biblio_copy.bibid ";
            $criteria = $this->_getCriteria(array("biblio_copy.barcode_nmbr"), $words);
      } elseif ($type == OBIB_SEARCH_AUTHOR) {
            $join .= "LEFT JOIN biblio_field ON biblio_field.bibid=biblio.bibid "
                 . "AND biblio_field.tag='700' "
                 . "AND (biblio_field.subfield_cd='a' OR biblio_field.subfield_cd='b') ";
            $criteria = $this->_getCriteria(array("biblio.author",
                                              "biblio.responsibility_stmt",
                                              "biblio_field.field_data"), $words);
      } elseif ($type == OBIB_SEARCH_SUBJECT) {
                $criteria = $this->_getCriteria(array("biblio.topic1",
                                                        "biblio.topic2",
                                                        "biblio.topic3",
                                                        "biblio.topic4",
                                                        "biblio.topic5"), $words);
      } elseif ($type == OBIB_SEARCH_ISBN) {
        $join .= "LEFT JOIN biblio_field ON biblio_field.bibid=biblio.bibid "
                 . "AND biblio_field.tag='20' "
                 . "AND biblio_field.subfield_cd='a' ";
        $criteria = $this->_getCriteria(array("biblio_field.field_data"), $words);
 //nuvas busquedas jalg 02-2015
 /*
      } elseif ($type == OBIB_SEARCH_MATERIAL) {
      	$SearchTagsSelector[OBIB_SEARCH_MATERIAL] = '';
      	$SearchCriteriaSelector[OBIB_SEARCH_MATERIAL] = array("material"); 
        if (!$havematerial) {
            $fields = " biblio.*, material ";
             $join .= $this->mkSQL(
              " join (select * from (select code, %L as material from material_type_dm) as mtlist where (%i)) as mtinfo on biblio.material_cd=mtinfo.code "
			, "description"
			, $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_MATERIAL] ,$words)
			);
            $havematerial = true;
        } else {
			$criteria = $this->_getCriteria($SearchCriteriaSelector[OBIB_SEARCH_MATERIAL] ,$words); //
		}
*/
      } elseif ($type == OBIB_SEARCH_LANGUAGE) {
        $join .= "LEFT JOIN biblio_field ON biblio_field.bibid=biblio.bibid "
                 . "AND biblio_field.tag = '41' "
                 . "AND biblio_field.subfield_cd = 'a' ";
        $criteria = $this->_getCriteria(array("biblio_field.field_data"), $words);
//nuvas busquedas jalg 02-2015

//nuvas busquedas jalg 11-2015 busqueda por palabra clave
      } elseif ($type == OBIB_SEARCH_KEYWORD) {
        $drop=1;

        for ($i = 0; $i < count($words); $i++) {
          if (strlen($words[$i]) <= $drop) continue;
          if (strlen($words[$i]) <= $drop + 1) $short = $short + 1;
          $joins = $joins + 1;
          $join .= "LEFT JOIN biblio_field as bf".$i." on bf".$i.".bibid=biblio.bibid ";
          $join .= "and bf".$i.".tag in (";
          if (strlen($words[$i]) > 8) $join.= " '010', '020', '022', '024',";
          $join .= "
            '110', '130', '245', '250', '260',
            '300', '336', '337', '338', '340',
            '380', '381', '382', '384', '383', '384',
            '400', '410', '440', '490',
            '500', '501', '502', '505', '511', '520',
            '521', '526',
            '600', '610', '611', '630', '650', '651',
            '653', '654', '655', '656', '657', '658',
            '690', '691', '692', '693', '694', '695',
            '696', '697', '698', '699',
            '700', '710', '730',
            '800', '810', '830', '856'
          ) ";
          $join .= "and bf".$i.".field_data ";
          $join .= $this->mkSQL("like %Q ", "%".$words[$i]."%");
          if (strlen($words[$i]) < $drop + 3) {
            $join .= "and bf".$i.".field_data ";
            $join .= $this->mkSQL("rlike %Q ", "[[:<:]]".$words[$i]);
          }
          $join .= "and not (bf".$i.".tag = '260' and bf".$i.".subfield_cd in ('a', 'b', 'e', 'f', 'g')) ";
          if ($opacFlg) $join .= "and not (bf".$i.".tag in ('526', '856') and bf".$i.".subfield_cd = 'x') ";
	    $join .= "and not bf".$i.".subfield_cd regexp('[0-9]') ";
        }
        $criteria = $this->_getCriteria(array("biblio.author","biblio.responsibility_stmt",
                                                "biblio.title","biblio.title_remainder",
                                                "biblio.topic1","biblio.topic2","biblio.topic3",
                                                "biblio.topic4","biblio.topic5"),$words,$bField=true,$drop);
//nuvas busquedas jalg 11-2015 busqueda por palabra clave
      } elseif ($type == OBIB_ADVANCED_SEARCH) {
        $sql = $this->_getAdvancedSearchSQLStatement($words);
        $join .= $sql["join"];
        $criteria = $sql["criteria"];
      } else {
        $criteria = $this->_getCriteria(array("biblio.title"), $words);
      }
	      if (!strrpos($criteria, " GROUP BY ")) {
               if ($opacFlg) $criteria = $criteria ."AND opac_flg = 'Y' ";
	      } else {
		if ($opacFlg)  $criteria = str_replace ( " GROUP BY " , " AND opac_flg = 'Y' GROUP BY " ,  $criteria ) ;
         }
    }

    # Setting count query
    $sqlcount = "SELECT COUNT(DISTINCT(biblio.bibid)) AS rowcount ";
    $sqlcount = $sqlcount.$join;
    $sqlcount = $sqlcount.$criteria;

    # Setting query that will return all the data
    $sql = "SELECT biblio.* ";
    $sql .= $join;
    $sql .= $criteria;

    if (!strrpos($sql, "GROUP BY")) {
      $sql .= " GROUP BY biblio.bibid ";
    }
    $sql .= $this->mkSQL("ORDER BY %C ", $sortBy);

    # Setting limit so we can page through the results
    $offset = ($page - 1) * $this->_itemsPerPage;
    $limit = $this->_itemsPerPage;
    $sql .= $this->mkSQL("LIMIT %N, %N", $offset, $limit);

    # Running row count SQL statement
    if (!$this->_query($sqlcount, $this->_loc->getText("biblioSearchQueryErr1"))) {
      return false;
    }

    # Calculate stats based on row count
    $array = $this->_conn->fetchRow();
    $this->_rowCount = $array["rowcount"];
    $this->_pageCount = ceil($this->_rowCount / $this->_itemsPerPage);

    # Running search SQL statement
    return $this->_query($sql, $this->_loc->getText("biblioSearchQueryErr2"));
  }

  /****************************************************************************
   * Utility function to get the selection criteria for a given column and set of values
   * @param string searchTag
   * @param 
   * @return 
   * @access 
   ****************************************************************************
   */
  function searchTag($tag, $words, $page, $opacFlg=true) {
    # Reset stats
    $this->_rowNmbr = 0;
    $this->_currentRowNmbr = 0;
    $this->_currentPageNmbr = $page;
    $this->_rowCount = 0;
    $this->_pageCount = 0;
    
    $field = substr($tag, 0, 3);
    
    # Setting SQL join clause
    $join = "FROM biblio LEFT JOIN biblio_copy ON biblio.bibid=biblio_copy.bibid ";

    # Setting SQL where clause
    $criteria = "";
    
    $join .= $this->mkSQL("LEFT JOIN biblio_field ON biblio_field.bibid=biblio.bibid 
    AND biblio_field.tag=%Q", $field);

    if ($field == '650') {
      $sqlword = $this->mkSQL("%Q", $words);
      $criteria = " WHERE topic1=$sqlword OR topic2=$sqlword OR topic3=$sqlword OR topic4=$sqlword OR topic5=$sqlword ";
    }
    else if ($field == '100') {
      $criteria = $this->mkSQL(" WHERE author=%Q ", $words);
    }
    else {
      $criteria = $this->mkSQL(" WHERE biblio_field.field_data=%Q ", $words);
    }
    
    # Setting count query
    $sqlcount = "SELECT COUNT(*) AS rowcount ";
    $sqlcount = $sqlcount.$join;
    $sqlcount = $sqlcount.$criteria;
    
    # Setting query that will return all the data
    $sql = "SELECT biblio.*, ";
    $sql .= "biblio_copy.copyid, ";
    $sql .= "biblio_copy.barcode_nmbr, ";
    $sql .= "biblio_copy.status_cd, ";
    $sql .= "biblio_copy.due_back_dt, ";
    $sql .= "biblio_copy.mbrid ";
    $sql .= $join;
    $sql .= $criteria;
    $sql .= "ORDER BY title ";
    
    # Setting limit so we can page through the results
    $offset = ($page - 1) * $this->_itemsPerPage;
    $limit = $this->_itemsPerPage;
    $sql .= $this->mkSQL("LIMIT %N, %N", $offset, $limit);

    # Running row count SQL statement
    if (!$this->_query($sqlcount, $this->_loc->getText("biblioSearchQueryErr1"))) {
      return false;
    }

    # Calculate stats based on row count
    $array = $this->_conn->fetchRow();
    $this->_rowCount = $array["rowcount"];
    $this->_pageCount = ceil($this->_rowCount / $this->_itemsPerPage);

    # Running search SQL statement
    return $this->_query($sql, $this->_loc->getText("biblioSearchQueryErr2"));
  }

  /****************************************************************************
   * Utility function to get the selection criteria for a given column and set of values
   * @param string $col bibid of bibliography to select
   * @param array reference &$words array of words to search for
   * @return string returns SQL criteria syntax for the given column and set of values
   * @access private
   ****************************************************************************
   */
  function _getAdvancedSearchSQLStatement(&$words) {
    $join = "";
    $multiple_join = 0;
    $has_OR = false;
    $criteria = "WHERE ";
    foreach ($_POST as $k => $v) {
      $v = sanitize_input($v);
      if ($v == "") {
        continue; // Skip, if the input string is empty
      }
      // Get values from dynamic INPUT fields
      if (preg_match("/^keyword_type_(\d+)$/", $k, $matchs)) {
        $number = $matchs[1];
        $v_col = $v;
        $k_txt = "keyword_text_". $number;
        $v_txt = sanitize_input($_POST[$k_txt]);
        if ($v_txt == "") {
          continue; // Skip when the input string is empty
        }
        // Prepare an expression for the criteria
        // do nothing if an input is the first one
        $v_exp = "";
        if (strcmp($criteria, "WHERE ") > 0) {
          $k_exp = "expression_". $number;
          $v_exp = $_POST[$k_exp];
          // Special variable is used to apply 'HAVING' clause
          if (strcmp($v_exp, "or") == 0) {
            $has_OR = true;
          }
          // Insert 'NOT' into the query string in next steps.
          if (strcmp($v_exp, "not") == 0) {
            $v_exp = " AND ";
            $tmp_v_exp = "not";
          }
        } else { // The first one with an expression
          $k_exp = "expression_". $number;
          $v_exp = $_POST[$k_exp];
        }
        if (strcmp($v_exp, "") > 0) {
          $criteria .= strtoupper($v_exp) ." ";
        }
        // Make a query string.
        if (strcmp($v_col, "title") == 0) {
          if (strcmp($tmp_v_exp, "not") == 0) {
            $criteria .= "NOT biblio.title LIKE '%". $v_txt ."%' ";
          } else {
            $criteria .= "biblio.title LIKE '%". $v_txt ."%' ";
          }
        }
        elseif (strcmp($v_col, "author") == 0) {
          if (empty($join)) {
            $join .= "LEFT JOIN biblio_field ON biblio_field.bibid=biblio.bibid ";
          }
          if (strcmp($tmp_v_exp, "not") == 0) {
            $str = "NOT biblio.author LIKE '%". $v_txt ."%' OR ".
                   "NOT biblio.responsibility_stmt LIKE '%". $v_txt ."%' OR ".
                   "NOT ".
                   "  biblio_field.tag='700' AND ".
                   "    (biblio_field.subfield_cd='a' OR biblio_field.subfield_cd='b') AND ".
                   "    biblio_field.field_data LIKE '%". $v_txt ."%'";
          } else {
            $str = "biblio.author LIKE '%". $v_txt ."%' OR ".
                   "biblio.responsibility_stmt LIKE '%". $v_txt ."%' OR ".
                   "(biblio_field.tag='700' AND ".
                   "  (biblio_field.subfield_cd='a' OR biblio_field.subfield_cd='b') AND ".
                   "  biblio_field.field_data LIKE '%". $v_txt ."%')";
          }
          $criteria .= "(". $str .") ";
          // Special variable is used to apply 'HAVING' clause
          $multiple_join++;
        }
        elseif (strcmp($v_col, "subject") == 0) {
          if (strcmp($tmp_v_exp, "not") == 0) {
            $str = "NOT biblio.topic1 LIKE '%". $v_txt ."%' OR ".
                   "NOT biblio.topic2 LIKE '%". $v_txt ."%' OR ".
                   "NOT biblio.topic3 LIKE '%". $v_txt ."%' OR ".
                   "NOT biblio.topic4 LIKE '%". $v_txt ."%' OR ".
                   "NOT biblio.topic5 LIKE '%". $v_txt ."%'";
          } else {
            $str = "biblio.topic1 LIKE '%". $v_txt ."%' OR ".
                   "biblio.topic2 LIKE '%". $v_txt ."%' OR ".
                   "biblio.topic3 LIKE '%". $v_txt ."%' OR ".
                   "biblio.topic4 LIKE '%". $v_txt ."%' OR ".
                   "biblio.topic5 LIKE '%". $v_txt ."%'";
          }
          $criteria .= "(". $str .") ";
        }
        elseif (strcmp($v_col, "isbn") == 0) {
          if (empty($join)) {
            $join .= "LEFT JOIN biblio_field ON biblio_field.bibid=biblio.bibid ";
          }
          if (strcmp($tmp_v_exp, "not") == 0) {
            $str = "NOT ".
                   "  biblio_field.tag='20' AND ".
                   "  biblio_field.subfield_cd='a' AND ".
                   "  biblio_field.field_data LIKE '%". $v_txt ."%'";
          } else {
            $str = "biblio_field.tag='20' AND ".
                   "biblio_field.subfield_cd='a' AND ".
                   "biblio_field.field_data LIKE '%". $v_txt ."%'";
          }
          $criteria .= "(". $str .") ";
          // Special variable is used to apply 'HAVING' clause
          $multiple_join++;
//
        }
        elseif (strcmp($v_col, "language") == 0) { #fix aumetar para varios cmapos marc JALG 3-2015
          if (empty($join)) {
            $join .= "LEFT JOIN biblio_field ON biblio_field.bibid=biblio.bibid ";
          }
          if (strcmp($tmp_v_exp, "not") == 0) {
            $str = "NOT ".
                   "  biblio_field.tag='41' AND ".
                   "  biblio_field.subfield_cd='a' AND ".
                   "  biblio_field.field_data LIKE '%". $v_txt ."%'";
          } else {   #fix revisar si este if es necesario para el idioma
            $str = "biblio_field.tag='41' AND ".
                   "biblio_field.subfield_cd='a' AND ".
                   "biblio_field.field_data LIKE '%". $v_txt ."%'";
          }
          $criteria .= "(". $str .") ";
          // Special variable is used to apply 'HAVING' clause
          $multiple_join++;
        }
//
        elseif (strcmp($v_col, "call_nmbr") == 0) {
          if (strcmp($tmp_v_exp, "not") == 0) {
            $str = "NOT biblio.call_nmbr1 LIKE '%". $v_txt ."%' OR ".
                   "NOT biblio.call_nmbr2 LIKE '%". $v_txt ."%' OR ".
                   "NOT biblio.call_nmbr3 LIKE '%". $v_txt ."%'";
          } else {
            $str = "biblio.call_nmbr1 LIKE '%". $v_txt ."%' OR ".
                   "biblio.call_nmbr2 LIKE '%". $v_txt ."%' OR ".
                   "biblio.call_nmbr3 LIKE '%". $v_txt ."%'";
          }
          $criteria .= "(". $str .") ";
        }
      }
      // Other static fields (PublishedYear, Language, MaterialType, CollectionType)
      elseif (preg_match("/^language$/", $k)) {
        if (empty($join)) {
          $join .= "LEFT JOIN biblio_field ON biblio_field.bibid=biblio.bibid ";
        }
        if (strcmp($criteria, "WHERE ") > 0) {
          if ($multiple_join > 0) {
            $criteria .= "OR ";
            $has_OR = true;
          } else {
            $criteria .= "AND ";
          }
        }
        $criteria .= "(biblio_field.tag='041' ".
                     "AND biblio_field.subfield_cd='a' ".
                     "AND biblio_field.field_data='". $v ."') ";
        // Special variable is used to apply 'HAVING' clause
        $multiple_join++;
      }
      elseif (preg_match("/^publishedYear$/", $k)) {
        if (empty($join)) {
          $join .= "LEFT JOIN biblio_field ON biblio_field.bibid=biblio.bibid ";
        }
        if (strcmp($criteria, "WHERE ") > 0) {
          if ($multiple_join > 0) {
            $criteria .= "OR ";
            $has_OR = true;
          } else {
            $criteria .= "AND ";
          }
        }
        $criteria .= "(biblio_field.tag='260' ".
                     "AND biblio_field.subfield_cd='c' ".
                     "AND biblio_field.field_data='". $v ."') ";
        // Special variable is used to apply 'HAVING' clause
        $multiple_join++;
      }
      elseif (preg_match("/^materialCd$/", $k)) {
        if (strcmp($criteria, "WHERE ") > 0) {
          $criteria .= "AND ";
        }
        $criteria .= "biblio.material_cd='". $v ."' ";
      }
      elseif (preg_match("/^collectionCd$/", $k)) {
        if (strcmp($criteria, "WHERE ") > 0) {
          $criteria .= "AND ";
        }
        $criteria .= "biblio.collection_cd='". $v ."' ";
      }
    }
    // No criteria pass through
    if (strcmp($criteria, "WHERE ") == 0) {
      $criteria = "WHERE 1 ";
    }
    // Intersect the result
    if ($multiple_join > 1 && $has_OR) {
      $criteria .= " GROUP BY biblio.bibid HAVING COUNT(biblio.bibid) > 1 ";
    }
    // Remove redundant whitespace
    $criteria = preg_replace("/[[:space:]]+/i", " ", $criteria);
    return array("join" => $join, "criteria" => $criteria);
  }

  function _getCriteria($cols, &$words) {
    # Setting selection criteria SQL
    $prefix = "WHERE ";
    $criteria = "";
    for ($i = 0; $i < count($words); $i++) {
      $criteria .= $prefix . $this->_getLike($cols, $words[$i]);
      $prefix = " AND ";
    }
    return $criteria;
  }

  function _getLike(&$cols,$word) {
    $prefix = "";
    $suffix = "";
    if (count($cols) > 1) {
      $prefix = "(";
      $suffix = ")";
    }
    $like = "";
    for ($i = 0; $i < count($cols); $i++) {
      $like .= $prefix;
      $like .= $this->mkSQL("%C LIKE %Q", $cols[$i], "%".$word."%");
      $prefix = " OR ";
    }
    $like .= $suffix;
    return $like ." ";
  }

  /****************************************************************************
   * Executes a query to select ONLY ONE SUBFIELD
   * @param string $bibid bibid of bibliography copy to select
   * @param string $fieldid copyid of bibliography copy to select
   * @return BiblioField returns subfield or false, if error occurs
   * @access public
   ****************************************************************************
   */
  function doQuery($statusCd,$mbrid="") {

    $sql = "SELECT biblio.* ";
    $sql .= ",biblio_copy.copyid ";
    $sql .= ",biblio_copy.barcode_nmbr ";
    $sql .= ",biblio_copy.status_cd ";
    $sql .= ",biblio_copy.status_begin_dt ";
    $sql .= ",biblio_copy.due_back_dt ";
    $sql .= ",biblio_copy.mbrid ";
    $sql .= ",biblio_copy.renewal_count ";
    $sql .= ",greatest(0,to_days(sysdate()) - to_days(biblio_copy.due_back_dt)) days_late ";
    $sql .= "FROM biblio, biblio_copy ";
    $sql .= "WHERE biblio.bibid = biblio_copy.bibid ";
    if ($mbrid != "") {
        $sql .= $this->mkSQL("AND biblio_copy.mbrid = %N ", $mbrid);
    }
    $sql .= $this->mkSQL(" AND biblio_copy.status_cd=%Q ", $statusCd);
    $sql .= " ORDER BY biblio_copy.status_begin_dt desc";

    if (!$this->_query($sql, $this->_loc->getText("biblioSearchQueryErr3"))) {
      return false;
    }
    $this->_rowCount = $this->_conn->numRows();
    return true;
  }

  /****************************************************************************
   * Fetches a row from the query result and populates the BiblioSearch object.
   * @return BiblioSearch returns bibliography search record or false if no more bibliographies to fetch
   * @access public
   ****************************************************************************
   */
  function fetchRow() {
    $array = $this->_conn->fetchRow();
    if ($array == false) {
      return false;
    }

    # Increment rowNmbr
    $this->_rowNmbr = $this->_rowNmbr + 1;
    $this->_currentRowNmbr = $this->_rowNmbr + (($this->_currentPageNmbr - 1) * $this->_itemsPerPage);

    $bib = new BiblioSearch();
    $bib->setBibid($array["bibid"]);
    $bib->setCopyid($array["copyid"]);
    $bib->setCreateDt($array["create_dt"]);
    $bib->setLastChangeDt($array["last_change_dt"]);
    $bib->setLastChangeUserid($array["last_change_userid"]);
    $bib->setMaterialCd($array["material_cd"]);
    $bib->setCollectionCd($array["collection_cd"]);
    $bib->setCallNmbr1($array["call_nmbr1"]);
    $bib->setCallNmbr2($array["call_nmbr2"]);
    $bib->setCallNmbr3($array["call_nmbr3"]);
    $bib->setTitle($array["title"]);
    $bib->setTitleRemainder($array["title_remainder"]);
    $bib->setResponsibilityStmt($array["responsibility_stmt"]);
    $bib->setAuthor($array["author"]);
    $bib->setTopic1($array["topic1"]);
    $bib->setTopic2($array["topic2"]);
    $bib->setTopic3($array["topic3"]);
    $bib->setTopic4($array["topic4"]);
    $bib->setTopic5($array["topic5"]);
    if (isset($array["barcode_nmbr"])) {
      $bib->setBarcodeNmbr($array["barcode_nmbr"]);
    }
    if (isset($array["status_cd"])) {
      $bib->setStatusCd($array["status_cd"]);
    }
    if (isset($array["status_begin_dt"])) {
      $bib->setStatusBeginDt($array["status_begin_dt"]);
    }
    if (isset($array["status_mbrid"])) {
      $bib->setStatusMbrid($array["status_mbrid"]);
    }
    if (isset($array["due_back_dt"])) {
      $bib->setDueBackDt($array["due_back_dt"]);
    }
    if (isset($array["days_late"])) {
      $bib->setDaysLate($array["days_late"]);
    }
    if (isset($array["renewal_count"])) {
      $bib->setRenewalCount($array["renewal_count"]);
    }
    return $bib;
  }
}
