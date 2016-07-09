-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2016 at 09:42 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CAds-CS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Ads`
--

CREATE TABLE IF NOT EXISTS `Ads` (
  `ad_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `ad_header` char(255) DEFAULT NULL,
  `ad_price` int(255) DEFAULT NULL,
  `ad_description` char(255) DEFAULT NULL,
  `ad_image` char(255) DEFAULT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Ads`
--

INSERT INTO `Ads` (`ad_id`, `user_id`, `cat_id`, `ad_header`, `ad_price`, `ad_description`, `ad_image`) VALUES
(1, 3, 1, 'Car In a Brand New Condition Available for Sale', 23000, '2013 Honda Accord LXE 4 Door, WHite w/ tan leather interior, Cruise Control, Dual Airbag, Air Conditioner, Power Steering, Power Mirrors and WIndows, FM/CD, Alarm System.', 'images/hondaaccordwhite.jpg'),
(2, 3, 1, '2012 Harley Davidson V-Rod', 15000, '12,600 mi. driven, Seat Height 780mm, Dry Mass Weight 130kg, Fuel Capacity 12ltrs plus Reserve, Electric Start and Brake disc.', 'images/harleydavidson.jpg'),
(3, 2, 7, 'Moving Out Furniture Sale', 0, 'Selling Wall-to-Wall Furniture, TV, Appliances, Queen Pillow-Top Mattress in Plastic. All furniture is in great condition. Pick up required. I QUALITY GUARANTEED!', 'images/movingout01.jpg'),
(4, 2, 8, 'Selling a Two Year Old Macbook', 700, 'Resolution: 1280 x 800, Installed memory:4 GB RAM, Battery life:7 hour, Screen size: 13.3 inch, excellent, easy to carry and great product at a great price.', 'images/mackbook2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE IF NOT EXISTS `Categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` char(255) DEFAULT NULL,
  `cat_pic` char(255) DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`cat_id`, `cat_name`, `cat_pic`) VALUES
(1, 'Vehicles', 'images/hondawhite.png'),
(2, 'Housing', 'images/house01.jpg'),
(3, 'Goods', 'images/goods02.jpg'),
(4, 'Tickets', 'images/tickets01.jpg'),
(5, 'Wanted', 'images/want01.jpg'),
(6, 'Services', 'images/services01.jpg'),
(7, 'Appliances', 'images/App01.jpg'),
(8, 'Electronics', 'images/elec02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Locations`
--

CREATE TABLE IF NOT EXISTS `Locations` (
  `location_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `location_name` char(255) DEFAULT NULL,
  PRIMARY KEY (`location_id`),
  UNIQUE KEY `location_id` (`location_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Locations`
--

INSERT INTO `Locations` (`location_id`, `region_id`, `location_name`) VALUES
(1, 2, 'New York'),
(2, 2, 'Raleigh'),
(3, 2, 'Princeton'),
(4, 1, 'Singapore'),
(5, 1, 'Hong Kong'),
(6, 1, 'Tokyo'),
(7, 3, 'London'),
(8, 3, 'Zurich');

-- --------------------------------------------------------

--
-- Table structure for table `Regions`
--

CREATE TABLE IF NOT EXISTS `Regions` (
  `region_id` int(11) NOT NULL,
  `region_shortname` char(4) DEFAULT NULL,
  `region_fullname` char(255) DEFAULT NULL,
  PRIMARY KEY (`region_id`),
  UNIQUE KEY `region_id` (`region_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Regions`
--

INSERT INTO `Regions` (`region_id`, `region_shortname`, `region_fullname`) VALUES
(1, 'APAC', 'Asia Pacific'),
(2, 'AMER', 'Americas'),
(3, 'EMEA', 'Europe, Middle East, & Africa');

-- --------------------------------------------------------

--
-- Table structure for table `Subscriptions`
--

CREATE TABLE IF NOT EXISTS `Subscriptions` (
  `subscription_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`subscription_id`),
  UNIQUE KEY `subscription_id` (`subscription_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Subscriptions`
--

INSERT INTO `Subscriptions` (`subscription_id`, `user_id`, `cat_id`) VALUES
(1, 1, 1),
(2, 1, 7),
(3, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` char(255) DEFAULT NULL,
  `last_name` char(255) DEFAULT NULL,
  `phone_number` char(255) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `password` char(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `email`, `first_name`, `last_name`, `phone_number`, `region_id`, `location_id`, `admin`, `password`) VALUES
(1, 'brandon.long@credit-suisse.com', 'Brandon', 'Long', '4044060515', 2, 1, 1, '12345'),
(2, 'dominique.buckner@credit-suisse.com', 'Dominique', 'Buckner', '1234567890', 2, 2, 1, '12345'),
(3, 'rashika.agrawal@credit-suisse.com', 'Rashika', 'Agrawal', '2223334444', 2, 3, 0, '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
