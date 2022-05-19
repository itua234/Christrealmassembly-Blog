-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 13, 2020 at 10:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `email`, `password`) VALUES
(1, 'sivatech234@gmail.com', '$2y$10$YTE1YWZhNzYwZjMxMmZkO.biTwtQo09xKs8Bk4BUeW58Qhq3gXStC');

-- --------------------------------------------------------

--
-- Table structure for table `church`
--

DROP TABLE IF EXISTS `church`;
CREATE TABLE IF NOT EXISTS `church` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `photo` varchar(100) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `church`
--

INSERT INTO `church` (`id`, `title`, `content`, `created_at`, `updated_at`, `photo`, `time`) VALUES
(1, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '0c5fcf2b82b963526463ebc8531db9a7.webp', '19:45:43'),
(2, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '0d9b84ee19d692532d34eafef2de907c.webp', '19:46:28'),
(3, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '0d9c1dcc95c2e638ef9e90ad99d36ed6.webp', '19:46:46'),
(4, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '0e5e06f1a941fad10c790c5591a89329.webp', '19:46:58'),
(5, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '01cdc8f5984c9a5bac755f9365d0b46f.webp', '19:47:10'),
(6, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '02.jpg', '19:47:23'),
(7, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '2d61e4bda871197215e0cccff0de926a.webp', '19:47:33'),
(8, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '03b3e8ee-f0b9-4437-a91d-6b17a9b86d92-e1568141994483.jpg', '19:47:42'),
(9, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '07a0af0851651f34b6c025639b6ca000.webp', '19:47:52'),
(10, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '8d611f1122a20177580a6fb4c7568308.jpg', '19:48:12'),
(11, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '31c7d98f8a4b520313f5b6f107ee200b.png', '19:48:22'),
(12, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '114b8682cb33b7a646b5e2433c6673c6.webp', '19:48:36'),
(13, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '467a75aa6454cd1d793f39fd23564806.webp', '19:48:47'),
(14, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '629ec34b1c73a6252c718197f5159509.jpg', '19:48:56'),
(15, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '8360c28d1b7a47183cd70438f770b5b2.png', '19:49:05'),
(16, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '53582b785a97f35aa22b7edf2db83103.webp', '19:49:20'),
(17, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '56447a66d57bbb3ca0d512d267ad6b5a.webp', '19:49:28'),
(18, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '0855139fdb086142d30cadec657bbe0e.webp', '19:49:42'),
(19, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', 'a3e42eb317aee7f702814dff347ce028.jpg', '19:50:00'),
(20, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', 'a519c940d6c7cfe99e33cd3db8c2dd09.webp', '19:50:14'),
(21, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task.\r\nAs it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded.\r\nAs a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals.\r\nAlthough the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', 'bdf64ba0fdc61801694d39b6cdf359dd.jpg', '19:50:24'),
(22, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task. As it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded. As a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals. Although the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '0855139fdb086142d30cadec657bbe0e.webp', '21:12:33'),
(23, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task. As it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded. As a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals. Although the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '8d611f1122a20177580a6fb4c7568308.jpg', '21:12:45'),
(24, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task. As it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded. As a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals. Although the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '07a0af0851651f34b6c025639b6ca000.webp', '21:12:59'),
(25, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task. As it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded. As a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals. Although the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '0e5e06f1a941fad10c790c5591a89329.webp', '21:13:10'),
(26, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task. As it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded. As a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals. Although the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '0d9b84ee19d692532d34eafef2de907c.webp', '21:13:22'),
(27, 'Make Peace With Your Mind', 'A word came again in August 7th 2004 saying:n\" you were set up for the liberation of this generation from ignorance, from all self captivity and bondages I am sending you to take this task. As it became a custom to us as the Lord would instructed us to severally wait upon him, so we yielded. As a people whom the lords zeal has eaten up we began to run with the vision he gave in 2005.which metamorphosed into what is now called the harvesters world outreach and all we Basically did was to partner with churches to hold meetings and healing revivals. Although the sent man was preempted by the holy ghost that he would run and outreach ministry for 15 yrs after which the next instructions would Follow.', '2020-12-13', '2020-12-13', '56447a66d57bbb3ca0d512d267ad6b5a.webp', '21:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `passwordreset`
--

DROP TABLE IF EXISTS `passwordreset`;
CREATE TABLE IF NOT EXISTS `passwordreset` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `exp_time` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
