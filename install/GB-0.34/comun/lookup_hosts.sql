CREATE TABLE IF NOT EXISTS `lookup_hosts` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45;