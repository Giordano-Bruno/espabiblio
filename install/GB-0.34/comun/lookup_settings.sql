CREATE TABLE IF NOT EXISTS `lookup_settings` (
  `protocol` enum('YAZ','SRU') NOT NULL DEFAULT 'YAZ',
  `max_hits` tinyint(4) NOT NULL DEFAULT '25',
  `keep_dashes` enum('y','n') NOT NULL DEFAULT 'n',
  `callNmbr_type` enum('LoC','Dew','UDC','local') NOT NULL DEFAULT 'Dew',
  `auto_dewey` enum('y','n') NOT NULL DEFAULT 'y',
  `default_dewey` varchar(10) NOT NULL DEFAULT '813.52',
  `auto_cutter` enum('y','n') NOT NULL DEFAULT 'y',
  `cutter_type` enum('LoC','CS3') NOT NULL DEFAULT 'CS3',
  `cutter_word` tinyint(4) NOT NULL DEFAULT '1',
  `auto_collect` enum('y','n') NOT NULL DEFAULT 'y',
  `fiction_name` varchar(10) NOT NULL DEFAULT 'Fiction',
  `fiction_code` tinyint(4) NOT NULL DEFAULT '1',
  `fiction_loc` varchar(255) NOT NULL DEFAULT 'PQ PR PS PT PU PV PW PX PY PZ',
  `fiction_dewey` varchar(255) NOT NULL DEFAULT '813 823'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;