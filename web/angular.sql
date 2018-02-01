-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 11:51 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `angular`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(13) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `mobile`, `message`) VALUES
(1, '', '', 'AAAAAAA', 55555555, 'DSG DSF SDF SDF SDF'),
(2, '', '', 'AAAAAAA', 55555555, 'DSG DSF SDF SDF SDF'),
(3, '', '', 'AAAAAAA', 55555555, 'DSG DSF SDF SDF SDF'),
(4, '', '', 'AAAAAAA', 55555555, 'DSG DSF SDF SDF SDF'),
(5, '', '', 'fffff', 6666, '666666df gdfg dfg dfg dfg df'),
(6, '', '', 'sssssss', 888888, 'vfdg fdg dfg df'),
(7, '', '', 'Siyaram', 88888888, 'test msg'),
(8, '', '', 'dfgfdg', 45345435, 'sdfdsf sfdsf'),
(9, '', '', 'sdf sdf sd', 3453453, 'sdf sdf sdf sd'),
(10, 's@gmail.com', '123', 'Siyaram Ray', 999999, 'Testing Message');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
