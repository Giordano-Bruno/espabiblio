<?php
/**
 * Author: Szymon Goralczyk <sg@apgsoft.pl>
 * https://bitbucket.org/abix-pl/openbiblio/branches/compare/Cena_egzemplarza%0dmaster#chg-inventory/copy_del.php
 */
require_once('../classes/BiblioSearchQuery.php' );

class InventorySearchQuery extends BiblioSearchQuery
{

    function search($type, &$words, $page, $sortBy, $opacFlg=true, $cnt = false) {
        # reset stats
        $this->_rowNmbr = 0;
        $this->_currentRowNmbr = 0;
        $this->_currentPageNmbr = $page;
        $this->_rowCount = 0;
        $this->_pageCount = 0;

        # setting sql join clause
        $join = "from biblio left join biblio_copy on biblio.bibid=biblio_copy.bibid ";

        # setting sql where clause
        $bField = false;
        $criteria = "";
        $joins = "";
        $short = "";
        $words = array_unique(unserialize(strtolower(serialize($words))));
        if ((sizeof($words) == 0) || ($words[0] == "")) {
            if ($opacFlg) $criteria = "where opac_flg = 'Y' ";
        } else {
            if ($type == OBIB_SEARCH_BARCODE) {
                $criteria = $this->_getCriteria($type,array("biblio_copy.barcode_nmbr"),$words);
            } elseif ($type == OBIB_SEARCH_AUTHOR) {
                $drop=1;
                for ($i = 0; $i < count($words); $i++) {
                    if (strlen($words[$i]) <= $drop) continue;
                    $joins = $joins + 1;
                    $join .= "left join biblio_field as bf".$i." on bf".$i.".bibid=biblio.bibid ";
                    $join .= "and bf".$i.".tag in ('110', '700', '710') ";
                    $join .= "and bf".$i.".field_data ";
                    $join .= $this->mkSQL("like %Q ", "%".$words[$i]."%");
                    # word boundaries for short words: prevent excessive wildcard matching in WHERE
                    if (strlen($words[$i]) < $drop + 3) {
                        $wordsQ = preg_quote($words[$i]);
                        $join .= "and bf".$i.".field_data ";
                        $join .= $this->mkSQL("rlike %Q ", "[[:<:]]".$wordsQ);
                    }
                    $join .= "and not bf".$i.".subfield_cd regexp('[0-9]') ";
                }
                $criteria = $this->_getCriteria($type,array("biblio.author","biblio.responsibility_stmt"),$words,$bField=true,$drop);
            } elseif ($type == OBIB_SEARCH_SUBJECT) {
                $drop=1;
                for ($i = 0; $i < count($words); $i++) {
                    if (strlen($words[$i]) <= $drop) continue;
                    if (strlen($words[$i]) <= $drop + 1) $short = $short + 1;
                    $joins = $joins + 1;
                    $join .= "left join biblio_field as bf".$i." on bf".$i.".bibid=biblio.bibid ";
                    # Tags equal to Locum connector class for III - http://thesocialopac.net/
                    $join .= "and bf".$i.".tag in (
            '600', '610', '611', '630', '650', '651',
            '653', '654', '655', '656', '657', '658',
            '690', '691', '692', '693', '694', '695',
            '696', '697', '698', '699'
          ) ";
                    $join .= "and bf".$i.".field_data ";
                    $join .= $this->mkSQL("like %Q ", "%".$words[$i]."%");
                    if (strlen($words[$i]) < $drop + 3) {
                        $wordsQ = preg_quote($words[$i]);
                        $join .= "and bf".$i.".field_data ";
                        $join .= $this->mkSQL("rlike %Q ", "[[:<:]]".$wordsQ);
                    }
                    $join .= "and not bf".$i.".subfield_cd regexp('[0-9]') ";
                }
                $criteria = $this->_getCriteria($type,array("biblio.topic1","biblio.topic2","biblio.topic3","biblio.topic4","biblio.topic5"),$words,$bField=true,$drop);
            } elseif ($type == OBIB_SEARCH_CALLNO) {
                $criteria = $this->_getCriteria($type,array("biblio.call_nmbr1","biblio.call_nmbr2","biblio.call_nmbr3"),$words);
            } elseif ($type == OBIB_SEARCH_KEYWORD) {
                $drop=1;
                for ($i = 0; $i < count($words); $i++) {
                    if (strlen($words[$i]) <= $drop) continue;
                    if (strlen($words[$i]) <= $drop + 1) $short = $short + 1;
                    $joins = $joins + 1;
                    $join .= "left join biblio_field as bf".$i." on bf".$i.".bibid=biblio.bibid ";
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
                        $wordsQ = preg_quote($words[$i]);
                        $join .= "and bf".$i.".field_data ";
                        $join .= $this->mkSQL("rlike %Q ", "[[:<:]]".$wordsQ);
                    }
                    $join .= "and not (bf".$i.".tag = '260' and bf".$i.".subfield_cd in ('a', 'b', 'e', 'f', 'g')) ";
                    if ($opacFlg) $join .= "and not (bf".$i.".tag in ('526', '856') and bf".$i.".subfield_cd = 'x') ";
                    $join .= "and not bf".$i.".subfield_cd regexp('[0-9]') ";
                }
                $criteria = $this->_getCriteria($type,array("biblio.author","biblio.responsibility_stmt","biblio.title","biblio.title_remainder","biblio.topic1","biblio.topic2","biblio.topic3","biblio.topic4","biblio.topic5"),$words,$bField=true,$drop);
            } else {
                $criteria = $this->_getCriteria($type,array("biblio.title","biblio.title_remainder"),$words);
            }
            if ($opacFlg) $criteria = $criteria."and opac_flg = 'Y' ";
        }

        # limit number of joins and short words
        if ($joins > 29 or $short > 3) {
            $msg = "Enclose adjacent \"words to be found\" with quotation marks.";
            if ($opacFlg) header("Location: ../opac/index.php?msg=".U($msg));
            else header("Location: ../catalog/index.php?msg=".U($msg));
            exit();
        }

        # setting query that will return all the data
        # sql_calc_found_rows is efficient for counting rows on unefficient queries...
        if($cnt){
            $sql = "select count(*) as amount, ";
        }
        else {

            $sql = "select sql_calc_found_rows ";
        }

        if ($bField) $sql .= "distinct ";
        $sql .= "biblio.* ";
        $sql .= ",biblio_copy.copyid ";
        $sql .= ",biblio_copy.barcode_nmbr ";
        $sql .= ",biblio_copy.status_cd ";
        $sql .= ",biblio_copy.due_back_dt ";
        $sql .= ",biblio_copy.mbrid ";
        $sql .= $join;
        $sql .= $criteria;

        if(!$cnt) {
            $sql .= $this->mkSQL(" order by %C ", $sortBy);
        } else {
            $sql .= $this->mkSQL(" group by bibid ");
        }
        # setting limit so we can page through the results
        if ($page != 'all') {
            $offset = ($page - 1) * $this->_itemsPerPage;
            $limit = $this->_itemsPerPage;
            $sql .= $this->mkSQL(" limit %N, %N", $offset, $limit);
        }

        //exit("sql=[".$sql."]<br>\n");

        # Running search sql statement
        if (!$this->_query($sql, $this->_loc->getText("biblioSearchQueryErr2"))) {
            return false;
        }

        # Calculate stats based on row count
        $this->_rowCount = implode(mysql_fetch_row(mysql_query('select found_rows();')));
        $this->_pageCount = ceil($this->_rowCount / $this->_itemsPerPage);
        return true;
    }

    function fetchRow() {
        $array = $this->_conn->fetchRow();
        if ($array == false) {
            return false;
        }

        # increment rowNmbr
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
        if(isset($array["amount"])) {
            $bib->setAmount($array['amount']);
        }
        return $bib;
    }
}