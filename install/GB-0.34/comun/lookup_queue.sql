CREATE TABLE IF NOT EXISTS `lookup_queue` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(10) NOT NULL,
  `status` enum('queue','manual','publish','copy','cover') NOT NULL DEFAULT 'queue',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tries` tinyint(4) NOT NULL DEFAULT '0',
  `amount` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;