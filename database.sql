-- phpMyAdmin SQL Dump
-- version 3.2.2.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2010 at 02:18 PM
-- Server version: 5.1.37
-- PHP Version: 5.2.10-2ubuntu6.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `contacts`
--
CREATE DATABASE `contacts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `contacts`;


CREATE TABLE IF NOT EXISTS `phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `passwd` varchzr(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
   `pass` varchar(100) NOT NULL,
  `valid` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 


-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

