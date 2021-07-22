-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2019 at 11:32 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `polybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `authors` varchar(110) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `dept` varchar(60) NOT NULL,
  `cover` varchar(110) NOT NULL,
  `quantity` int(15) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `name`, `authors`, `description`, `price`, `dept`, `cover`, `quantity`) VALUES
(1, 'Javascript Tutorial', 'Remedy Rays', 'Important globals\r\nBootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles. Let’s dive in.\r\n\r\nHTML5 doctype\r\nBootstrap requires the use of the HTML5 doctype. Without it, you’ll see some funky incomplete styling, but including it shouldn’t cause any considerable hiccups.', 350, 'Computer Science', 'javascript.jpg', 67),
(2, 'CSS Textbokk', 'John Ibukunoluwa', 'Important globals\r\nBootstrap employs a handful of important global styles and settings that youâ€™ll need to be aware of when using it, all of which are almost exclusively geared towards the normalization of cross browser styles. Letâ€™s dive in.\r\n\r\nHTML5 doctype\r\nBootstrap requires the use of the HTML5 doctype. Without it, youâ€™ll see some funky incomplete styling, but including it shouldnâ€™t cause any considerable hiccups.', 3000, 'Computer Science', 'web.jpg', 58);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `student` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `book_id`, `student`, `date`) VALUES
(8, 1, 'PN/CS/10/0488', '2005-09-19'),
(9, 0, 'PN/CS/10/0488', '0000-00-00'),
(10, 1, 'PN/CS/10/0488', '2005-09-19'),
(11, 2, 'PN/CS/10/0488', '2005-09-19'),
(12, 2, 'PN/CS/11/0488', '2005-09-19'),
(13, 1, 'PN/CS/11/0488', '2019-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `matric` varchar(30) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `fullname`, `email`, `password`, `matric`) VALUES
(1, 'John Emmanuel Fatai', 'thenewxpat@gmail.com', 'Tijani', 'PN/CS/10/0488'),
(2, 'Mr John', 'yungzeed@me.com', '12345', 'PN/CS/11/0488');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
