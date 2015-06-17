CREATE TABLE IF NOT EXISTS `biblio_copy_fields` (
  `bibid` int(11) NOT NULL,
  `copyid` int(11) NOT NULL,
  `code` varchar(16) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`bibid`,`copyid`,`code`),
  KEY `code_index` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
