-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2018 at 03:22 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(25, 'HTML'),
(2, 'Javascript'),
(6, 'Java2'),
(5, 'PHP7'),
(26, 'css3'),
(29, 'php5'),
(31, 'hello'),
(32, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(3) NOT NULL AUTO_INCREMENT,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(256) NOT NULL,
  `comment_email` varchar(256) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(256) NOT NULL,
  `comment_date` date NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(26, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(27, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(28, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(29, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(30, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(25, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(24, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(18, 7, 'dfdf', 'fddf@fdfddf', 'fddf', 'unapproved', '2018-05-06'),
(17, 1, 'dfdsa', 'dzunja@gmail.com', 'fgsgdgfsdfgsgsd', 'unapproved', '2018-02-03'),
(7, 1, 'Ivana', 'dzunja@gmail.com', 'Start Bootstrap August 25, 2014 at 9:30 PM\r\nCras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus', 'approve', '2018-02-02'),
(8, 1, 'Ivana', 'dzunja@gmail.com', 'Start Bootstrap August 25, 2014 at 9:30 PM\r\nCras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus', 'approve', '2018-02-02'),
(9, 3, 'Sandra', 'dzunja@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.\r\n', 'approve', '2018-02-02'),
(31, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(32, 24, 'Ivana', 'dzunja@gmail.com', 'hello comment!!!!!!!!!!!!!!!!!!', 'unapproved', '2018-05-06'),
(33, 24, 'Ivana', 'dzunja@gmail.com', 'hello comment!!!!!!!!!!!!!!!!!!', 'unapproved', '2018-05-06'),
(19, 7, '', '', '', 'unapproved', '2018-05-06'),
(20, 24, 'dffddf', 'fdfdfd@fddffd', 'fdfddf', 'unapproved', '2018-05-06'),
(21, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(22, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(23, 24, 'ivana', 'dz@gmail.com', 'jfdlkajlkadjslkfasjlkfdfsa', 'unapproved', '2018-05-06'),
(34, 24, 'dfdfdf', 'dfdf@tggf', 'ddfdf', 'unapproved', '2018-05-06'),
(35, 24, 'dfdfdf', 'dfdf@tggf', 'ddfdf', 'unapproved', '2018-05-06'),
(36, 24, 'dfdfdf', 'dfdf@tggf', 'ddfdf', 'unapproved', '2018-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(3) NOT NULL AUTO_INCREMENT,
  `post_category_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(25, 2, 'dfddf', 'dffddf', '2018-05-06', 'Egon Sile -  autoportret.jpg', 'dffdfdfddf', 'fddffd', 4, 'published'),
(26, 6, 'title5', 'Miki', '2018-05-06', 'Egon Sile -  autoportret.jpg', 'hat it has a more-or-less normal distribution of letters, as opposed to usinghat it has a more-or-less normal distribution of letters, as opposed to usinghat it has a more-or-less normal distribution of letters, as opposed to using         ', 'html', 6, 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2a$07$usesomestringforsalt$',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(1, 'Mirjana', 'blabic', 'Mirka', 'Vasiljevic', 'mira@gmail.com', '', 'admin', ''),
(3, 'Urke', '789aaajdee', 'Uros', 'Laicki', 'urke@gmail.com', 'aaa', 'subscriber', '123456'),
(4, 'miki', '123456', 'Marko', 'Miljevic', 'miki@gmail.com', 'aaa', 'admin', '123456'),
(5, 'ivana', 'postarka91', 'ivana', 'dzunja', 'ika@gmail.com', 'aaa', 'subscriber', '123456'),
(6, 'root', '12345', '', '', '', 'aaa', 'subscriber', '123456'),
(7, 'ika', 'ika', 'ika', 'ika', 'ika@gmail.com', '', 'subscriber', 'ika'),
(9, '123', '123', 'maja', 'majra', '123@gmail.com', 'aaa', 'subscriber', '123456'),
(10, 'root', '12345', '', '', '', 'aaa', 'subscriber', '123456'),
(11, 'root', '12345', '', '', '', 'aaa', 'subscriber', '123456'),
(12, 'root', 'dffddffdfddf', 'fddf', 'ddffd', 'dfdfdf@fdddf', 'aaa', 'subscriber', '123456'),
(13, 'dffddfdf', '12345fddfdfdf', 'dfdfdf', 'fddfdf', 'fddfdfd@fddfdf', 'aaa', 'subscriber', '$2a$07$usesomestringforsalt$'),
(14, 'dffddfdf', '12345fddfdfdf', 'dfdfdf', 'fddfdf', 'fddfdfd@fddfdf', 'aaa', 'subscriber', '$2a$07$usesomestringforsalt$');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
