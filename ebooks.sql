-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2016 at 11:00 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ebooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_author`
--

CREATE TABLE IF NOT EXISTS `add_author` (
`id` int(11) NOT NULL,
  `a_nam` varchar(250) NOT NULL,
  `a_pnam` varchar(250) NOT NULL,
  `a_dob` varchar(250) NOT NULL,
  `a_gender` varchar(250) NOT NULL,
  `a_award` varchar(250) NOT NULL,
  `a_book1` varchar(250) NOT NULL,
  `a_book2` varchar(250) NOT NULL,
  `a_book3` varchar(250) NOT NULL,
  `a_img` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_author`
--

INSERT INTO `add_author` (`id`, `a_nam`, `a_pnam`, `a_dob`, `a_gender`, `a_award`, `a_book1`, `a_book2`, `a_book3`, `a_img`) VALUES
(5, 'sahkesphere', 'sahkesphere', '2-2-1850', 'male', 'nill', 'Merchant of vencie', 'othello', 'Merchant of vencie', '1.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `add_book`
--

CREATE TABLE IF NOT EXISTS `add_book` (
`id` int(11) NOT NULL,
  `a_bname` varchar(250) NOT NULL,
  `a_author` varchar(250) NOT NULL,
  `a_cate` varchar(250) NOT NULL,
  `a_pub` varchar(250) NOT NULL,
  `a_book` varchar(250) NOT NULL,
  `book_img` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_book`
--

INSERT INTO `add_book` (`id`, `a_bname`, `a_author`, `a_cate`, `a_pub`, `a_book`, `book_img`) VALUES
(6, 'othello', 'sahkesphere', 'novel', 'nill', 'androidsy.docx', '9242236.jpg'),
(7, 'Macbeth', 'William Shakespeare', 'Drama', 'Nill', 'Macbeth.pdf', 'shakespeetext982ws3410-thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_freebook`
--

CREATE TABLE IF NOT EXISTS `add_freebook` (
`id` int(30) NOT NULL,
  `b_name` varchar(250) NOT NULL,
  `b_aname` varchar(250) NOT NULL,
  `b_cate` varchar(250) NOT NULL,
  `b_publi` varchar(250) NOT NULL,
  `a_book` varchar(250) NOT NULL,
  `book_img` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_freebook`
--

INSERT INTO `add_freebook` (`id`, `b_name`, `b_aname`, `b_cate`, `b_publi`, `a_book`, `book_img`) VALUES
(3, 'aaa', 'bbbb', 'cccc', 'dddd', '', ''),
(4, 'aaa', 'bbb', 'ccdf', 'ffggff', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `add_lat_book`
--

CREATE TABLE IF NOT EXISTS `add_lat_book` (
`id` int(11) NOT NULL,
  `a_bname` varchar(250) NOT NULL,
  `a_author` varchar(250) NOT NULL,
  `a_cate` varchar(250) NOT NULL,
  `a_pub` varchar(250) NOT NULL,
  `a_book` varchar(250) NOT NULL,
  `b_img` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_lat_book`
--

INSERT INTO `add_lat_book` (`id`, `a_bname`, `a_author`, `a_cate`, `a_pub`, `a_book`, `b_img`) VALUES
(3, 'half girl friend', 'chethan bagath', 'novel', 'www', 'androidsy (3).docx', '6.jpg'),
(4, 'Romeo&Juliet', 'WilliamShakespeare', 'Romantic', 'Unkown', 'FileClient.txt', 'dog-glasses-2.jpg'),
(5, 'Fighting-For-Freedom-Fighting-Series-book-1', 'Cindy Diaz', 'Romantic', 'Amazon', 'Fighting-For-Freedom-Fighting-Series-book-1.pdf', 'freedom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latest_payment`
--

CREATE TABLE IF NOT EXISTS `latest_payment` (
`id` int(11) NOT NULL,
  `book_nam` varchar(250) NOT NULL,
  `pay_typ` varchar(250) NOT NULL,
  `card_no` varchar(250) NOT NULL,
  `bank_nam` varchar(250) NOT NULL,
  `amount` int(250) NOT NULL,
  `unam` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_payment`
--

INSERT INTO `latest_payment` (`id`, `book_nam`, `pay_typ`, `card_no`, `bank_nam`, `amount`, `unam`) VALUES
(1, 'half girl friend', '', '12345678', 'sbt', 150, 'sijin'),
(2, 'Fighting-For-Freedom-Fighting-Series-book-1', '', '123456', 'sbt', 150, 'sijin'),
(3, 'Fighting-For-Freedom-Fighting-Series-book-1', 'credit card', '123456', 'sff', 150, 'sijin'),
(4, 'Fighting-For-Freedom-Fighting-Series-book-1', 'credit card', '123456', 'sbt', 150, 'sijin'),
(5, 'Fighting-For-Freedom-Fighting-Series-book-1', 'credit card', '123456', 'sbt', 150, 'sijin'),
(6, 'Fighting-For-Freedom-Fighting-Series-book-1', 'credit card', '123456', 'sbt', 150, 'sijin');

-- --------------------------------------------------------

--
-- Table structure for table `latest_review`
--

CREATE TABLE IF NOT EXISTS `latest_review` (
  `id` int(11) NOT NULL,
  `bnam` varchar(250) NOT NULL,
  `b_revie` varchar(250) NOT NULL,
  `unam` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latest_review`
--

INSERT INTO `latest_review` (`id`, `bnam`, `b_revie`, `unam`) VALUES
(0, 'half girl friend', 'fdsgdfgh', 'sijin');

-- --------------------------------------------------------

--
-- Table structure for table `lates_rate`
--

CREATE TABLE IF NOT EXISTS `lates_rate` (
`id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `b_name` varchar(250) NOT NULL,
  `b_rate` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lates_rate`
--

INSERT INTO `lates_rate` (`id`, `b_id`, `b_name`, `b_rate`) VALUES
(1, 5, 'Fighting-For-Freedom-Fighting-Series-book-1', 5),
(2, 5, 'Fighting-For-Freedom-Fighting-Series-book-1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`id` int(11) NOT NULL,
  `book_nam` varchar(250) NOT NULL,
  `pay_typ` varchar(250) NOT NULL,
  `card_no` varchar(250) NOT NULL,
  `bank_nam` varchar(250) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `unam` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `book_nam`, `pay_typ`, `card_no`, `bank_nam`, `amount`, `unam`) VALUES
(15, 'othello', 'credit card', '123456', 'sbt', '150', 'sijin'),
(16, 'Macbeth', '', '123456', 'sbt', '150', 'sijin'),
(17, 'Macbeth', 'credit card', '123456', 'sbt', '150', 'sijin');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
`id` int(11) NOT NULL,
  `b_id` varchar(250) NOT NULL,
  `b_name` varchar(250) NOT NULL,
  `b_rate` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `b_id`, `b_name`, `b_rate`) VALUES
(2, '6', 'othello', 4.5),
(3, '6', 'othello', 4.5),
(4, '7', 'Macbeth', 1.5),
(5, '7', 'Macbeth', 4),
(6, '7', 'Macbeth', 4.5);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
`id` int(11) NOT NULL,
  `bnam` varchar(250) NOT NULL,
  `b_revie` varchar(250) NOT NULL,
  `unam` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `bnam`, `b_revie`, `unam`) VALUES
(7, 'othello', 'kjfghjkluyhdfjkbk', 'sijin'),
(8, 'othello', 'fgvfghfjhgjh', 'sijin'),
(9, 'othello', 'super book ', 'Remiza'),
(10, 'Macbeth', 'good ', 'sijin'),
(11, 'Macbeth', 'very', 'sijin');

-- --------------------------------------------------------

--
-- Table structure for table `studentdeatil`
--

CREATE TABLE IF NOT EXISTS `studentdeatil` (
  `id` int(30) DEFAULT NULL,
  `studfname` varchar(250) NOT NULL,
  `studlname` varchar(250) NOT NULL,
  `aadhar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdeatil`
--

INSERT INTO `studentdeatil` (`id`, `studfname`, `studlname`, `aadhar`) VALUES
(NULL, 'Gokul', 'ks', '1234-5678-5200');

-- --------------------------------------------------------

--
-- Table structure for table `user_add_book`
--

CREATE TABLE IF NOT EXISTS `user_add_book` (
`id` int(11) NOT NULL,
  `a_bname` varchar(250) NOT NULL,
  `a_author` varchar(250) NOT NULL,
  `a_cate` varchar(250) NOT NULL,
  `a_pub` varchar(250) NOT NULL,
  `a_book` varchar(250) NOT NULL,
  `b_img` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_add_book`
--

INSERT INTO `user_add_book` (`id`, `a_bname`, `a_author`, `a_cate`, `a_pub`, `a_book`, `b_img`) VALUES
(6, 'Mylifesjourney', 'sijin', 'autobiography', 'h&c', 'androidsy (2).docx', 'hthh.jpg'),
(9, 'life of sijin', 'sijin jose', 'autobiography', 'Greenbooks', 'androidsy (2) (1).docx', '408947.jpg'),
(10, 'aaa', 'ddd', 'ffff', 'fff', '', ''),
(11, 'my story', 'sijin', 'autobiography', 'green', 'androidsy (1).docx', '480576.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
`id` int(11) NOT NULL,
  `u_fname` varchar(250) NOT NULL,
  `u_lname` varchar(250) NOT NULL,
  `u_mail` varchar(250) NOT NULL,
  `u_dob` varchar(250) NOT NULL,
  `u_gender` varchar(250) NOT NULL,
  `u_uname` varchar(250) NOT NULL,
  `u_password` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `u_fname`, `u_lname`, `u_mail`, `u_dob`, `u_gender`, `u_uname`, `u_password`) VALUES
(2, 'sijin', 'jose', '8589893445', '05/01/1995', 'on', 'sijin', 'sijin'),
(3, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_author`
--
ALTER TABLE `add_author`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_book`
--
ALTER TABLE `add_book`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_freebook`
--
ALTER TABLE `add_freebook`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_lat_book`
--
ALTER TABLE `add_lat_book`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_payment`
--
ALTER TABLE `latest_payment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lates_rate`
--
ALTER TABLE `lates_rate`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_add_book`
--
ALTER TABLE `user_add_book`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_author`
--
ALTER TABLE `add_author`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `add_book`
--
ALTER TABLE `add_book`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `add_freebook`
--
ALTER TABLE `add_freebook`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `add_lat_book`
--
ALTER TABLE `add_lat_book`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `latest_payment`
--
ALTER TABLE `latest_payment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lates_rate`
--
ALTER TABLE `lates_rate`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_add_book`
--
ALTER TABLE `user_add_book`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
