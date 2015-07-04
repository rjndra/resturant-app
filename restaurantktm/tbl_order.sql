-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 06:05 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hitech_resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(3) NOT NULL AUTO_INCREMENT,
  `order_table_id` int(3) NOT NULL,
  `order_item_id` int(3) NOT NULL,
  `order_item_qty` int(3) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_table_id`, `order_item_id`, `order_item_qty`) VALUES
(1, 2, 1, 3),
(2, 6, 2, 3),
(3, 1, 4, 3),
(4, 2, 1, 3),
(6, 5, 5, 1),
(7, 3, 1, 2),
(8, 3, 6, 2),
(9, 3, 2, 5),
(12, 1, 4, 3),
(13, 6, 1, 3),
(14, 2, 3, 2),
(15, 2, 5, 1),
(16, 5, 1, 2),
(17, 5, 6, 2),
(18, 6, 2, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
