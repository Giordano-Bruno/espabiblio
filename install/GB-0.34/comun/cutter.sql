-- phpMyAdmin SQL Dump
-- version 3.2.4-rc1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2010 at 03:31 PM
-- Server version: 5.1.37
-- PHP Version: 5.2.10-2ubuntu6.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Table structure for table `cutter`
--

CREATE TABLE IF NOT EXISTS `cutter` (
  `theName` varchar(32) NOT NULL DEFAULT '',
  `theNmbr` mediumint(9) NOT NULL DEFAULT '0',
  PRIMARY KEY (`theName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;