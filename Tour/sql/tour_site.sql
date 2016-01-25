-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2015 at 03:57 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tour_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` varchar(50) NOT NULL,
  `orderplaced_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL DEFAULT 'order placed',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `admin_id` varchar(20) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `product_id` varchar(15) NOT NULL,
  `amount` int(6) NOT NULL,
  `msg` varchar(500) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `orderplaced_at`, `status`, `start_date`, `end_date`, `admin_id`, `user_id`, `product_id`, `amount`, `msg`) VALUES
('TR20151006072416', '2015-10-06 13:54:16', 'order placed', '2015-10-27', '2015-10-31', '', 'user2', 'P003', 0, ''),
('TR20151006072949', '2015-10-06 13:59:49', 'order placed', '2015-10-19', '2015-10-29', '', 'user1', 'P005', 0, ''),
('TR20151006095957', '2015-10-06 16:29:57', 'In process', '2015-10-08', '2015-10-23', '', 'user1', 'P005', 0, 'Order placed'),
('TR20151006101027', '2015-10-06 16:40:27', 'order placed', '2015-10-07', '2015-10-16', '', 'user1', 'P003', 0, ''),
('TR20151006101058', '2015-10-06 16:40:58', 'Confirmed', '2015-10-28', '2015-10-29', '', 'user2', 'P003', 0, 'We will get back to you soon'),
('TR20151006101223', '2015-10-06 16:42:23', 'order placed', '2015-10-14', '2015-10-23', '', 'user2', 'P003', 0, ''),
('TR20151006102056', '2015-10-06 16:50:56', 'order placed', '2015-10-14', '2015-10-22', '', 'user5', 'P005', 0, ''),
('TR20151007025008', '2015-10-07 09:20:08', 'order placed', '2015-10-15', '2015-10-23', '', 'user1', 'P005', 0, ''),
('TR20151007032256', '2015-10-07 09:52:56', 'order placed', '2015-10-08', '2015-10-17', '', 'user1', 'P005', 0, ''),
('TR20151009064718', '2015-10-09 13:17:18', 'order placed', '2015-10-21', '2015-10-30', '', 'user1', 'P003', 0, ''),
('TR20151010105840', '2015-10-10 05:28:40', 'order placed', '2015-10-14', '2015-10-29', '', 'user1', 'P005', 0, ''),
('TR20151012061220', '2015-10-12 12:42:20', 'order placed', '2015-10-15', '2015-10-24', '', 'user6', 'P006', 0, ''),
('TR20151015031224', '2015-10-15 09:42:24', 'order placed', '2015-10-21', '2015-10-24', '', 'user1', 'P002', 3000, ''),
('TR20151015065302', '2015-10-15 13:23:02', 'order placed', '2015-10-17', '2015-10-20', '', 'user1', 'P002', 3000, ''),
('TR20151015110715', '2015-10-15 17:37:15', 'order placed', '2015-10-16', '2015-10-19', '', 'user1', 'P003', 6000, ''),
('TR20151019051240', '2015-10-19 11:42:40', 'order placed', '2015-10-21', '2015-10-24', '', 'user1', 'P002', 2250, ''),
('TR20151019070951', '2015-10-19 13:39:51', 'order placed', '2015-10-21', '2015-10-24', '', 'user1', 'P002', 2250, ''),
('TR20151019071037', '2015-10-19 13:40:37', 'order placed', '2015-10-21', '2015-10-30', '', 'user3', 'P003', 12000, ''),
('TR20151019072748', '2015-10-19 13:57:48', 'order placed', '2015-10-21', '2015-10-29', '', 'user2', 'P002', 6000, ''),
('TR20151020103050', '2015-10-20 17:00:50', 'order placed', '2015-10-22', '2015-10-24', '', 'user1', 'P005', 1600, ''),
('TR20151022020924', '2015-10-22 08:39:24', 'In process', '2015-10-23', '2015-10-27', '', 'user1', 'P002', 3000, 'Your order was in process.. we will call back to you'),
('TR20151023034859', '2015-10-23 10:18:59', 'order placed', '2015-10-27', '2015-10-30', '', 'user1', 'P003', 4000, ''),
('TR20151023105619', '2015-10-23 17:26:19', 'order placed', '2015-10-24', '2015-10-30', '', 'user1', 'P002', 4500, ''),
('TR20151024055310', '2015-10-24 12:23:10', 'order placed', '2015-10-31', '2015-11-04', '', 'user1', 'P002', 3000, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `product_img` varchar(1000) NOT NULL,
  `duration` int(2) NOT NULL,
  `added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `location`, `product_img`, `duration`, `added`) VALUES
('P001', 'Meenakshi Amman Temple', 3000, 'Madurai', 'images/tour1427013754tp1.png', 1, '2015-09-11 12:48:45'),
('P002', 'Meghamalai', 3000, 'Madurai', 'images/tour1088432809tour1495019411tp2.png', 4, '2015-09-11 12:55:00'),
('P003', 'Mahabalipuram', 4000, 'Chennai', 'images/tour1439550428tp3.png', 3, '2015-09-11 12:55:39'),
('P004', 'Kodaikanal', 2000, 'Madurai', 'images/tour628398508tour1907829421tp4.png', 3, '2015-09-11 12:56:12'),
('P005', 'Ooty', 4000, 'Ooty', 'images/tour1398823818tour1667613043tp5.png', 5, '2015-09-11 12:56:53'),
('P006', 'Pragadeeswara temple', 3000, 'Thanjur', 'images/tour387341484tp6.png', 2, '2015-09-11 12:57:41'),
('P007', 'Vaalparai', 4000, 'Kovai', 'images/tour1387591451tp7.png', 6, '2015-09-11 12:58:10'),
('P008', 'Yercaud1', 4000, 'Salem', 'images/tour1001997532tp8.png', 3, '2015-09-11 12:58:46'),
('P009', 'Kanniyakumari', 5000, 'Kanniyakumari', 'images/tour1455796668tp9.png', 5, '2015-09-11 12:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_no` int(1) NOT NULL,
  `roles` varchar(15) NOT NULL,
  PRIMARY KEY (`role_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_no`, `roles`) VALUES
(1, 'Normal user'),
(2, 'admin'),
(3, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `DOB` date DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(15) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `email_update` varchar(10) NOT NULL,
  `last_visited` datetime NOT NULL,
  `role_no` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active_state` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `DOB`, `gender`, `email`, `password`, `phone`, `address`, `city`, `state`, `country`, `email_update`, `last_visited`, `role_no`, `created_at`, `active_state`) VALUES
('muthu', 'Mutharasu', NULL, NULL, 'mutharasu.tsm@gmail.com', 'da7b5ec6aabbd9bf940844363b41cbb4', NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0),
('sivaram', 'sivaram ganesan', '2015-10-07', 'Male', 'ganesan.sivaram@gmail.com', '35c168d8e7743c4f0175a82cf85b6a34', 9524574726, '241 ss nagar', 'kovilpatti', 'Tamil Nadu', 'India', 'yes', '0000-00-00 00:00:00', 2, '2015-10-13 15:08:27', 1),
('user1', 'Mutharasu', '1992-04-23', 'Male', 'user1@gmail.com', '24c9e15e52afc47c225b757e7bee1f9d', 9025387560, '37 H/3 Prasad road', 'Madurai', 'Tamilnadu', 'INDIA', 'no', '2015-10-27 15:52:00', 3, '0000-00-00 00:00:00', 0),
('user2', 'User2', '1992-04-23', 'Male', 'user2@gmail.com', '7e58d63b60197ceb55a1c487989a3720', 4564654, 'asdfasfas v asdaf ', 'adgaszfda', 'adsfasdfa', 'asfasf', '', '2015-10-23 16:02:59', 1, '0000-00-00 00:00:00', 0),
('user3', 'User 3', '1992-04-23', 'Male', 'user3@gmail.com', '92877af70a45fd6a2ed7fe81e1236b78', 98343242489, '45, mm road,\r\n', 'Madurai', 'Tamilnadu', 'India', 'yes', '2015-10-27 15:40:33', 2, '0000-00-00 00:00:00', 0),
('user4', 'User4', '1992-04-23', 'Male', 'user4@gmail.com', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 9687645564353, '77 RR Road', 'Madurai', 'Tamilnadu', 'India', 'yes', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0),
('user5', 'user5', NULL, NULL, 'user5@gmail.com', '0a791842f52a0acfbb3a783378c066b8', NULL, NULL, NULL, NULL, NULL, 'yes', '2015-10-23 23:00:54', 1, '0000-00-00 00:00:00', 0),
('user6', 'Mutharas', '1992-04-23', 'Male', 'user6@gmail.com', 'affec3b64cf90492377a8114c86fc093', 567457457, '87 PP road,', 'Madurai', 'Tamilnadu', 'India', 'yes', '0000-00-00 00:00:00', 1, '2015-10-12 11:35:07', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
