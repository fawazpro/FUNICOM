-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 11:59 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funicom`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `body` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) NOT NULL,
  `question` text NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

UPDATE `faqs` SET `id` = 2,`question` = 'I have forgotten my password, what do I do?',`answer` = 'If you have forgotten your password, you can send a message to the forum admin using the information on the contact page.' WHERE `faqs`.`id` = 2;
UPDATE `faqs` SET `id` = 3,`question` = 'Why can''t I comment and create threads?',`answer` = 'If you have not signed up, then do so. If you have signed up already, confirm your login status.' WHERE `faqs`.`id` = 3;
UPDATE `faqs` SET `id` = 4,`question` = 'I am being trolled/bullied, what do I do?',`answer` = 'All online bullying and troll reports should be sent to the forum admin via the information on the contact page. We do not encourage any form of bullying and bullying carries a penalty of account forfeiture or a lengthy ban from the forum depending on the gravity of the offence.' WHERE `faqs`.`id` = 4;
UPDATE `faqs` SET `id` = 5,`question` = 'Are my details safe? Will I be persecuted for saying something the University might not agree with?',`answer` = 'As much as <strong>we will not encourage you to be disrespectful</strong>, Funicom provides the avenue for you to discuss about issues affecting you as a student. <strong>Funicom is not a property of the Federal University Of Agriculture Abeokuta</strong>, and holds no allegiance in whatsoever form. Funicom will protect your interests, identity and data.' WHERE `faqs`.`id` = 5;
UPDATE `faqs` SET `id` = 6,`question` = 'Will lecturers and staff of Funaab use Funicom?',`answer` = 'Only students can register on Funicom. <strong>Non-students may be able to view threads, but they wont be able to view your profile, create threads or post comments on your thread' WHERE `faqs`.`id` = 6;
UPDATE `faqs` SET `id` = 7,`question` = 'I met someone on Funicom claiming to be a member of Staff, requesting for some sort of payment,What do I do?',`answer` = 'Do not make any payments to anybody you meet on this forum. Funicom is entirely free and at no time will Funicom request for payment. Anybody requesting for money on Funicom is a fraud and should be reported to the admin of the forum. <strong>Funicom is not liable for loss of cash, life and property that may result from the use of this forum</strong>. Discretion is advised when conducting any form of business on Funicom.' WHERE `faqs`.`id` = 7;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` longtext NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `creator` varchar(10) NOT NULL,
  `category` int(11) NOT NULL,
  `tags` text NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

UPDATE `thread` SET `id` = 1,`title` = 'LOVE',`body` = 'I am in love',`dt` = '2017-06-18 21:38:25',`creator` = 'fawazpro',`category` = 1,`tags` = 'love money me',`avatar` = '4.jpg' WHERE `thread`.`id` = 1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `matric` int(8) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `username` varchar(20) NOT NULL,
  `matric` int(8) NOT NULL,
  `password` varchar(16) NOT NULL,
  `college` text NOT NULL,
  `level` text NOT NULL,
  `phone` int(11) NOT NULL,
  `skills` text NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

UPDATE `userprofile` SET `username` = 'fawazpro',`matric` = 20141602,`password` = 'habibi',`college` = 'COLPHYS',`level` = '300L',`phone` = 2147483647,`skills` = 'Comp guru',`avatar` = '4.jpg' WHERE `userprofile`.`username` = 'fawazpro';
UPDATE `userprofile` SET `username` = 'Fawazpro27',`matric` = 20141602,`password` = 'habibi',`college` = '1',`level` = '3',`phone` = 2147483647,`skills` = 'computer guru, graphics, money',`avatar` = '' WHERE `userprofile`.`username` = 'Fawazpro27';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
