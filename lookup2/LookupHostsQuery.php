<?PHP
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

// FIXME - fl, is this needed?
//require_once(REL(__FILE__, "../shared/global_constants.php"));
require_once(REL(__FILE__, "../classes/Query.php"));
require_once(REL(__FILE__,'LookupHosts.php'));

class lookupHostQuery extends Query {

	function execSelect() {
		$sql = "select * from `lookup_hosts` WHERE `active`='y' ORDER BY seq";
	  return $this->_query($sql, "Error accessing the host table.");
	}
	function execSelectAll() {
		$sql = "select * from `lookup_hosts` ORDER BY seq";
	  return $this->_query($sql, "Error accessing the host table.");
	}

  function fetchRow() {
    global $postVars;
    $array = $this->_conn->fetchRow();
    if ($array == false) {
      return false;
    }
		//echo "from fetch:<br />";print_r($array);echo "<br />";
    $set = new LookupHosts();
    $set->setId($array["id"]);
    $set->setactive($array["active"]);
    $set->setSeq($array["seq"]);
    $set->setHost($array["host"]);
    $set->setName($array["name"]);
    $set->setDb($array["db"]);
    $set->setUser($array["user"]);
    $set->setPw($array["pw"]);
    $set->setCntxt($array["context"]);
    $set->setSchma($array["schema"]);

    return $set;
	}

  function insert($set) {
    $sql = $this->mkSQL("insert into `lookup_hosts` set "
                        . "`seq`=%Q, `active`=%Q,"
                        . "`host`=%Q, `name`=%Q, `db`=%Q, "
                        . "`user`=%Q, `pw`=%Q, "
                        . "`context`=%Q, `schema`=%Q ",
                        $set->getSeq(), $set->getActive()?"y":"n",
                        $set->getHost(), $set->getName(), $set->getDb(),
                        $set->getUser(), $set->getPw(),
                        $set->getCntxt(), $set->getSchma()
                        );
		//echo "sql=$sql <br />";
    return $this->_query($sql, "Error inserting host information");
	}

  function update($set) {
		//echo"set=";print_r($set);
    $sql = $this->mkSQL("update `lookup_hosts` set "
                        . "`seq`=%Q, `active`=%Q,"
                        . "`host`=%Q, `name`=%Q, `db`=%Q, "
                        . "`user`=%Q, `pw`=%Q, "
                        . "`context`=%Q, `schema`=%Q "
                        . "where `id`=%N ",
                        $set->getSeq(), $set->getActive()?"y":"n",
                        $set->getHost(), $set->getName(), $set->getDb(),
                        $set->getUser(), $set->getPw(), 
                        $set->getCntxt(), $set->getSchma(),
                        $set->getId()
                        );
		//echo "sql=$sql <br />";
    return $this->_query($sql, "Error updating host information");
	}

  function delete($set) {
    $sql = $this->mkSQL("delete from `lookup_hosts`  "
                        . "where `id`=%N ",
                        $set->getId()
                        );
			//echo "sql=$sql <br />";
    return $this->_query($sql, "Error deleting host information");
  }
  
	function createTable() {
		$sql = 
			"CREATE TABLE IF NOT EXISTS `lookup_hosts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seq` tinyint(4) NOT NULL,
  `active` enum('y','n') NOT NULL DEFAULT 'n',
  `host` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `db` varchar(20) NOT NULL,
  `user` varchar(20) DEFAULT NULL,
  `pw` varchar(20) DEFAULT NULL,
  `context` varchar(20) DEFAULT 'dc',
  `schema` varchar(20) DEFAULT 'marcxml',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;
		";
		//echo "sql=$sql <br />";
    $this->_query($sql, "Error creating lookup settings information");

		$sql = 
			"INSERT INTO `lookup_hosts` (`id`, `seq`, `active`, `host`, `name`, `db`, `user`, `pw`, `context`, `schema`) VALUES
(0, 1, 'y', 'z3950.loc.gov:7090', 'U.S. Library of Congress', 'voyager', '', '', 'bath', 'marcxml'),
(2, 2, 'n', 'z3950.copac.ac.uk:3000', 'COPAC', 'copac', '', '', 'dc', 'marcxml'),
(3, 3, 'n', 'catalogue.nla.gov.au:7090', 'National Library of Australia', 'voyager', '', '', 'dc', 'marcxml'),
(4, 4, 'n', 'gso.gbv.de/sru/:80', 'German Library Group', '2.1', '', '', '', ''),
(5, 5, 'n', 'groar.bne.es:2210', 'Biblioteca Nacional', 'bimo', '', '', 'dc', 'marcxml'),
(6, 6, 'n', 'z3950.bcl.jcyl.es:2109', 'Biblioteca de Castilla y Leon', 'AbsysBCL', NULL, NULL, 'dc', 'marcxml'),
(7, 7, 'n', 'bcr1.larioja.org:210', 'Biblioteca de La Rioja (ESP)', 'AbsysE', '', '', 'dc', 'marcxml'),
(8, 8, 'n', 'zed.natlib.govt.nz', 'National Library of New Zealand', 'pinz', '', '', 'dc', 'marcxml'),
(9, 9, 'n', 'pino.csic.es:9909', 'Red de bibliotecas del CSIC', 'MAD01', NULL, NULL, 'dc', 'marcxml'),
(13, 12, 'n', '193.6.201.205:1616', 'Hungarian National Library', 'xxx', '', '', 'dc', 'marcxml'),
(12, 10, 'n', 'opac.sbn.it:3950', 'SBN - Sistema Bibliotecario Nazi', 'nopac', '', '', 'dc', 'marcxml'),
(14, 11, 'n', 'z3950.dbf.ddb.de:210', 'Deutsche National Bibliothek', 'iltis', 'gast', 'gast', 'dc', 'marcxml');
			";
		//echo "sql=$sql <br />";
    return $this->_query($sql, "Error creating lookup settings information");
	}
  
}

function deleteHost ($array) {
  $set = new LookupHosts();
  $set->setId($array["id"]);

	$hostQ = new LookupHostQuery();
 	$hostQ->connect();
  if ($hostQ->errorOccurred()) {
    $hostQ->close();
    displayErrorPage($hostQ);
  }

	$hostQ = new LookupHostQuery();
 	$hostQ->connect();
  if ($hostQ->errorOccurred()) {
    $hostQ->close();
    displayErrorPage($hostQ);
  }

	return $hostQ->delete($set);
}

function createHostTbl () {
	$hostQ = new LookupHostQuery();
 	$hostQ->connect();
  if ($hostQ->errorOccurred()) {
    $hostQ->close();
    displayErrorPage($hostQ);
  }

	return $hostQ->createTable();
}
function makeHostDataSet($array) {
  $set = new LookupHosts();
  $set->setSeq($array["seq"]);
  $set->setActive($array["active"]);
  $set->setId($array["id"]);
  $set->setHost($array["host"]);
  $set->setName($array["name"]);
  $set->setDb($array["db"]);
  $set->setUser($array["user"]);
  $set->setPw($array["pw"]);
  $set->setCntxt($array["context"]);
  $set->setSchma($array["schema"]);

  return $set;
}

function updateHost ($array) {
	$hostQ = new LookupHostQuery();
 	$hostQ->connect();
  if ($hostQ->errorOccurred()) {
    $hostQ->close();
    displayErrorPage($hostQ);
  }

	$set = makeHostDataSet($array);
	return $hostQ->update($set);
}

function insertHost ($array) {
	$hostQ = new LookupHostQuery();
 	$hostQ->connect();
  if ($hostQ->errorOccurred()) {
    $hostQ->close();
    displayErrorPage($hostQ);
  }

	$set = makeHostDataSet($array);
	return $hostQ->insert($set);
}

function getHosts ($mode) {
  global $postVars;
  
	$hostQ = new LookupHostQuery();
 	$hostQ->connect();
  if ($hostQ->errorOccurred()) {
    $hostQ->close();
    displayErrorPage($hostQ);
  }
	if ($mode == 'all') {
  	$hostQ->execSelectAll();
	}
	else {
  	$hostQ->execSelect();
  }
  if ($hostQ->errorOccurred()) {
    $hostQ->close();
    displayErrorPage($hostQ);
  }
	$n = 0;
	$hosts = array();
	while ($row = $hostQ->fetchRow()) {
		$hosts[$n]['id']=$row->getId();
		$hosts[$n]['seq']=$row->getSeq();
		$hosts[$n]['active']=$row->getActive();
		$hosts[$n]['host']=$row->getHost();
		$hosts[$n]['name']=$row->getName();
		$hosts[$n]['db']=$row->getDb();
		$hosts[$n]['user']=$row->getUser();
		$hosts[$n]['pw']=$row->getPw();
		$hosts[$n]['context']=$row->getCntxt();
		$hosts[$n]['schema']=$row->getSchma();
		$n++;
	}
	$postVars['hosts'] = $hosts;
	$postVars['numHosts'] = $n;

	$hostQ->close();
}
