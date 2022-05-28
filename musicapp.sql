-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 12:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user1songs`
--

CREATE TABLE `user1songs` (
  `SongNum` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Artist` varchar(30) NOT NULL,
  `Genre` varchar(30) NOT NULL,
  `Language` varchar(30) NOT NULL,
  `audiopath` varchar(80) NOT NULL DEFAULT 'songs/1.mp3',
  `imgpath` varchar(80) NOT NULL DEFAULT 'img/1.jpg',
  `Liked` int(11) NOT NULL DEFAULT 0,
  `Priority` int(11) NOT NULL DEFAULT 0,
  `listenpriority` int(11) NOT NULL DEFAULT 0,
  `Last_Listened` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1songs`
--

INSERT INTO `user1songs` (`SongNum`, `Title`, `Artist`, `Genre`, `Language`, `audiopath`, `imgpath`, `Liked`, `Priority`, `listenpriority`, `Last_Listened`) VALUES
(1, 'Shape Of You', 'Ed Sheeran', 'Pop', 'English', 'songs/1.mp3', 'img/1.jpg', 0, 12, 13, 1653689732),
(2, 'Galway Girl', 'Ed Sheeran', 'Rap', 'English', 'songs/2.mp3', 'img/2.jpg', 0, -25, 7, 1653683638),
(3, 'Lego House', 'Ed Sheeran', 'Pop', 'English', 'songs/3.mp3', 'img/3.jpg', 0, -8, 13, 1653689430),
(4, 'Perfect', 'Ed Sheeran', 'Pop', 'English', 'songs/4.mp3', 'img/4.jpg', 0, 12, 13, 1653689733),
(5, 'Photograph', 'Ed Sheeran', 'Pop', 'English', 'songs/5.mp3', 'img/5.jpg', 1, 12, 13, 1653688931),
(6, 'Thinking Out Loud', 'Ed Sheeran', 'Pop', 'English', 'songs/6.mp3', 'img/6.jpg', 1, 12, 13, 1653683535),
(7, 'Castle On The Hill', 'Ed Sheeran', 'Pop', 'English', 'songs/7.mp3', 'img/7.jpg', 0, 7, 13, 1653689214),
(8, 'Best Song Ever', 'One Direction', 'Pop', 'English', 'songs/8.mp3', 'img/8.jpg', 0, 6, 1, 0),
(9, 'Infinity', 'One Direction', 'Pop', 'English', 'songs/9.mp3', 'img/9.jpg', 0, -17, 1, 1653689227),
(10, 'One Thing', 'One Direction', 'Pop', 'English', 'songs/10.mp3', 'img/10.jpg', 1, -13, 1, 1653665027),
(11, 'Perfect', 'One Direction', 'Pop', 'English', 'songs/11.mp3', 'img/11.jpg', 0, 2, 1, 0),
(12, 'Ready To Run', 'One Direction', 'Pop', 'English', 'songs/12.mp3', 'img/12.jpg', 0, 6, 1, 0),
(13, 'Steal My Girl', 'One Direction', 'Pop', 'English', 'songs/13.mp3', 'img/13.jpg', 0, 6, 1, 0),
(14, 'You And I', 'One Direction', 'Pop', 'English', 'songs/14.mp3', 'img/14.jpg', 0, 6, 1, 0),
(15, 'Bad Blood', 'Taylor Swift', 'Rap', 'English', 'songs/15.mp3', 'img/15.jpg', 0, -25, 0, 1653690215),
(16, 'Blank Space', 'Taylor Swift', 'Pop', 'English', 'songs/16.mp3', 'img/16.jpg', 0, -5, 6, 1653690247),
(17, 'Shake It Off', 'Taylor Swift', 'Pop', 'English', 'songs/17.mp3', 'img/17.jpg', 0, -9, 6, 1653689843),
(18, 'Style', 'Taylor Swift', 'Pop', 'English', 'songs/18.mp3', 'img/18.jpg', 0, -10, 6, 1653690159),
(19, 'Wildest Dreams', 'Taylor Swift', 'Pop', 'English', 'songs/19.mp3', 'img/19.jpg', 0, -18, 6, 1653689815),
(20, 'You Belong With Me', 'Taylor Swift', 'Country', 'English', 'songs/20.mp3', 'img/20.jpg', 0, -25, -9, 1653690088),
(21, 'Mean', 'Taylor Swift', 'Country', 'English', 'songs/21.mp3', 'img/21.jpg', 0, -25, -9, 1653690023),
(22, 'Old Town Road', 'Lil Nas X', 'Country', 'English', 'songs/22.mp3', 'img/22.jpg', 0, -25, -15, 1653684203),
(23, 'The Box', 'Roddy Ricch', 'Rap', 'English', 'songs/23.mp3', 'img/23.jpg', 0, -25, -7, 1653690018),
(24, 'Sicko Mode', 'Travis Scott', 'Rap', 'English', 'songs/24.mp3', 'img/24.jpg', 0, -25, -7, 0),
(25, 'The Plan', 'Travis Scott', 'Rap', 'English', 'songs/25.mp3', 'img/25.jpg', 0, -25, -7, 0),
(26, 'Faded', 'Alan Walker', 'Electronic', 'English', 'songs/26.mp3', 'img/26.jpg', 0, -25, -19, 0),
(27, 'The Spectre', 'Alan Walker', 'Electronic', 'English', 'songs/27.mp3', 'img/27.jpg', 0, -25, -19, 0),
(28, 'On My Way', 'Alan Walker', 'Electronic', 'English', 'songs/28.mp3', 'img/28.jpg', 0, -25, -19, 0),
(29, 'Alone', 'Marshmellow', 'Electronic', 'English', 'songs/29.mp3', 'img/29.jpg', 0, -25, -19, 0),
(30, 'Stars', 'Marshmellow', 'Electronic', 'English', 'songs/30.mp3', 'img/30.jpg', 0, -25, -19, 0),
(31, 'Arabic Kuthu', 'Anirudh', 'Kollywood', 'Tamil', 'songs/31.mp3', 'img/31.jpg', 1, 7, -19, 0),
(32, 'Jalabula Jungu', 'Anirudh', 'Kollywood', 'Tamil', 'songs/32.mp3', 'img/32.jpg', 1, 7, -19, 0),
(33, 'Jolly O Gymkhana', 'Anirudh', 'Kollywood', 'Tamil', 'songs/33.mp3', 'img/33.jpg', 1, 7, -19, 0),
(34, 'Senjitaley', 'Anirudh', 'Kollywood', 'Tamil', 'songs/34.mp3', 'img/34.jpg', 1, 7, -19, 0),
(35, 'Kadhaippoma', 'Sid Sriram', 'Kollywood', 'Tamil', 'songs/35.mp3', 'img/35.jpg', 0, -10, -19, 0),
(36, 'Kannana Kanney', 'Sid Sriram', 'Kollywood', 'Tamil', 'songs/36.mp3', 'img/36.jpg', 0, -10, -19, 0),
(37, 'Mudhal Nee Mudivum Nee', 'Sid Sriram', 'Kollywood', 'Tamil', 'songs/37.mp3', 'img/37.jpg', 0, -10, -19, 0),
(38, 'Mental Manadhil', 'A R Rahman', 'Kollywood', 'Tamil', 'songs/38.mp3', 'img/38.jpg', 0, -10, -19, 0),
(39, 'Nenjae Yezhu', 'A R Rahman', 'Kollywood', 'Tamil', 'songs/39.mp3', 'img/39.jpg', 0, -10, -19, 0),
(40, 'Singapenney', 'A R Rahman', 'Kollywood', 'Tamil', 'songs/40.mp3', 'img/40.jpg', 0, -10, -19, 0),
(41, 'Agar Tum Saath Ho', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/41.mp3', 'img/41.jpg', 0, -25, 15, 1653688861),
(42, 'Tum Hi Ho', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/42.mp3', 'img/42.jpg', 0, -25, 15, 1653714821),
(43, 'Hawayein', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/43.mp3', 'img/43.jpg', 0, -25, 15, 1653714715),
(44, 'Sooraj Dooba Hain', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/44.mp3', 'img/44.jpg', 0, -25, 15, 1653714840),
(45, 'Ghoomar', 'Shreya Ghoshal', 'Bollywood', 'Hindi', 'songs/45.mp3', 'img/45.jpg', 0, -25, 11, 0),
(46, 'Nagada Sang Dhol', 'Shreya Ghoshal', 'Bollywood', 'Hindi', 'songs/46.mp3', 'img/46.jpg', 0, -25, 11, 1653665776),
(47, 'Sun Raha Hai Na Tu', 'Shreya Ghoshal', 'Bollywood', 'Hindi', 'songs/47.mp3', 'img/47.jpg', 0, -25, 11, 0),
(48, 'Leja Re', 'Dhvani Bhanushali', 'Bollywood', 'Hindi', 'songs/48.mp3', 'img/48.jpg', 0, -25, 11, 1653684285),
(49, 'Vaaste', 'Dhvani Bhanushali', 'Bollywood', 'Hindi', 'songs/49.mp3', 'img/49.jpg', 0, -25, 11, 0),
(50, 'Nayan', 'Dhvani Bhanushali', 'Bollywood', 'Hindi', 'songs/50.mp3', 'img/50.jpg', 0, -25, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user2songs`
--

CREATE TABLE `user2songs` (
  `SongNum` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Artist` varchar(30) NOT NULL,
  `Genre` varchar(30) NOT NULL,
  `Language` varchar(30) NOT NULL,
  `audiopath` varchar(80) NOT NULL DEFAULT 'songs/1.mp3',
  `imgpath` varchar(80) NOT NULL DEFAULT 'img/1.jpg',
  `Liked` int(11) NOT NULL DEFAULT 0,
  `Priority` int(11) NOT NULL DEFAULT 0,
  `listenpriority` int(11) NOT NULL DEFAULT 0,
  `Last_Listened` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user2songs`
--

INSERT INTO `user2songs` (`SongNum`, `Title`, `Artist`, `Genre`, `Language`, `audiopath`, `imgpath`, `Liked`, `Priority`, `listenpriority`, `Last_Listened`) VALUES
(1, 'Shape Of You', 'Ed Sheeran', 'Pop', 'English', 'songs/1.mp3', 'img/1.jpg', 0, -5, 2, 1653668229),
(2, 'Galway Girl', 'Ed Sheeran', 'Rap', 'English', 'songs/2.mp3', 'img/2.jpg', 0, -5, 12, 0),
(3, 'Lego House', 'Ed Sheeran', 'Pop', 'English', 'songs/3.mp3', 'img/3.jpg', 0, -5, 2, 0),
(4, 'Perfect', 'Ed Sheeran', 'Pop', 'English', 'songs/4.mp3', 'img/4.jpg', 0, -5, 2, 1653667471),
(5, 'Photograph', 'Ed Sheeran', 'Pop', 'English', 'songs/5.mp3', 'img/5.jpg', 0, -5, 2, 0),
(6, 'Thinking Out Loud', 'Ed Sheeran', 'Pop', 'English', 'songs/6.mp3', 'img/6.jpg', 0, -5, 2, 0),
(7, 'Castle On The Hill', 'Ed Sheeran', 'Pop', 'English', 'songs/7.mp3', 'img/7.jpg', 0, -5, 2, 1653667587),
(8, 'Best Song Ever', 'One Direction', 'Pop', 'English', 'songs/8.mp3', 'img/8.jpg', 0, -5, -2, 0),
(9, 'Infinity', 'One Direction', 'Pop', 'English', 'songs/9.mp3', 'img/9.jpg', 0, -5, -2, 0),
(10, 'One Thing', 'One Direction', 'Pop', 'English', 'songs/10.mp3', 'img/10.jpg', 0, -5, -2, 0),
(11, 'Perfect', 'One Direction', 'Pop', 'English', 'songs/11.mp3', 'img/11.jpg', 0, -5, -2, 1653667597),
(12, 'Ready To Run', 'One Direction', 'Pop', 'English', 'songs/12.mp3', 'img/12.jpg', 0, -5, -2, 0),
(13, 'Steal My Girl', 'One Direction', 'Pop', 'English', 'songs/13.mp3', 'img/13.jpg', 0, -5, -2, 0),
(14, 'You And I', 'One Direction', 'Pop', 'English', 'songs/14.mp3', 'img/14.jpg', 0, -5, -2, 0),
(15, 'Bad Blood', 'Taylor Swift', 'Rap', 'English', 'songs/15.mp3', 'img/15.jpg', 0, -5, 6, 1653668160),
(16, 'Blank Space', 'Taylor Swift', 'Pop', 'English', 'songs/16.mp3', 'img/16.jpg', 0, -5, 2, 0),
(17, 'Shake It Off', 'Taylor Swift', 'Pop', 'English', 'songs/17.mp3', 'img/17.jpg', 0, -5, 2, 1653668492),
(18, 'Style', 'Taylor Swift', 'Pop', 'English', 'songs/18.mp3', 'img/18.jpg', 0, -5, 2, 0),
(19, 'Wildest Dreams', 'Taylor Swift', 'Pop', 'English', 'songs/19.mp3', 'img/19.jpg', 0, -5, 2, 0),
(20, 'You Belong With Me', 'Taylor Swift', 'Country', 'English', 'songs/20.mp3', 'img/20.jpg', 0, -5, -6, 0),
(21, 'Mean', 'Taylor Swift', 'Country', 'English', 'songs/21.mp3', 'img/21.jpg', 0, -5, -6, 0),
(22, 'Old Town Road', 'Lil Nas X', 'Country', 'English', 'songs/22.mp3', 'img/22.jpg', 0, -5, -10, 0),
(23, 'The Box', 'Roddy Ricch', 'Rap', 'English', 'songs/23.mp3', 'img/23.jpg', 0, -5, 6, 1653668586),
(24, 'Sicko Mode', 'Travis Scott', 'Rap', 'English', 'songs/24.mp3', 'img/24.jpg', 0, -5, 7, 1653668503),
(25, 'The Plan', 'Travis Scott', 'Rap', 'English', 'songs/25.mp3', 'img/25.jpg', 0, -5, 7, 1653668711),
(26, 'Faded', 'Alan Walker', 'Electronic', 'English', 'songs/26.mp3', 'img/26.jpg', 0, 1, -10, 0),
(27, 'The Spectre', 'Alan Walker', 'Electronic', 'English', 'songs/27.mp3', 'img/27.jpg', 0, -11, -10, 1653668757),
(28, 'On My Way', 'Alan Walker', 'Electronic', 'English', 'songs/28.mp3', 'img/28.jpg', 0, 1, -10, 1653668702),
(29, 'Alone', 'Marshmellow', 'Electronic', 'English', 'songs/29.mp3', 'img/29.jpg', 0, 1, -10, 0),
(30, 'Stars', 'Marshmellow', 'Electronic', 'English', 'songs/30.mp3', 'img/30.jpg', 0, 1, -10, 0),
(31, 'Arabic Kuthu', 'Anirudh', 'Kollywood', 'Tamil', 'songs/31.mp3', 'img/31.jpg', 0, -5, 10, 0),
(32, 'Jalabula Jungu', 'Anirudh', 'Kollywood', 'Tamil', 'songs/32.mp3', 'img/32.jpg', 0, -5, 10, 1653667615),
(33, 'Jolly O Gymkhana', 'Anirudh', 'Kollywood', 'Tamil', 'songs/33.mp3', 'img/33.jpg', 0, -5, 10, 1653668246),
(34, 'Senjitaley', 'Anirudh', 'Kollywood', 'Tamil', 'songs/34.mp3', 'img/34.jpg', 0, -5, 10, 1653668409),
(35, 'Kadhaippoma', 'Sid Sriram', 'Kollywood', 'Tamil', 'songs/35.mp3', 'img/35.jpg', 0, -5, 8, 1653668144),
(36, 'Kannana Kanney', 'Sid Sriram', 'Kollywood', 'Tamil', 'songs/36.mp3', 'img/36.jpg', 0, -5, 8, 0),
(37, 'Mudhal Nee Mudivum Nee', 'Sid Sriram', 'Kollywood', 'Tamil', 'songs/37.mp3', 'img/37.jpg', 0, -5, 8, 1653668008),
(38, 'Mental Manadhil', 'A R Rahman', 'Kollywood', 'Tamil', 'songs/38.mp3', 'img/38.jpg', 0, -5, 6, 0),
(39, 'Nenjae Yezhu', 'A R Rahman', 'Kollywood', 'Tamil', 'songs/39.mp3', 'img/39.jpg', 0, -5, 6, 0),
(40, 'Singapenney', 'A R Rahman', 'Kollywood', 'Tamil', 'songs/40.mp3', 'img/40.jpg', 0, -5, 6, 0),
(41, 'Agar Tum Saath Ho', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/41.mp3', 'img/41.jpg', 0, 13, -10, 0),
(42, 'Tum Hi Ho', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/42.mp3', 'img/42.jpg', 0, 13, -10, 0),
(43, 'Hawayein', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/43.mp3', 'img/43.jpg', 1, 14, -10, 0),
(44, 'Sooraj Dooba Hain', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/44.mp3', 'img/44.jpg', 1, 14, -10, 0),
(45, 'Ghoomar', 'Shreya Ghoshal', 'Bollywood', 'Hindi', 'songs/45.mp3', 'img/45.jpg', 0, 5, -10, 0),
(46, 'Nagada Sang Dhol', 'Shreya Ghoshal', 'Bollywood', 'Hindi', 'songs/46.mp3', 'img/46.jpg', 0, 5, -10, 0),
(47, 'Sun Raha Hai Na Tu', 'Shreya Ghoshal', 'Bollywood', 'Hindi', 'songs/47.mp3', 'img/47.jpg', 0, 5, -10, 0),
(48, 'Leja Re', 'Dhvani Bhanushali', 'Bollywood', 'Hindi', 'songs/48.mp3', 'img/48.jpg', 0, 5, -10, 0),
(49, 'Vaaste', 'Dhvani Bhanushali', 'Bollywood', 'Hindi', 'songs/49.mp3', 'img/49.jpg', 0, 5, -10, 0),
(50, 'Nayan', 'Dhvani Bhanushali', 'Bollywood', 'Hindi', 'songs/50.mp3', 'img/50.jpg', 0, 5, -10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user3songs`
--

CREATE TABLE `user3songs` (
  `SongNum` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Artist` varchar(30) NOT NULL,
  `Genre` varchar(30) NOT NULL,
  `Language` varchar(30) NOT NULL,
  `audiopath` varchar(80) NOT NULL DEFAULT 'songs/1.mp3',
  `imgpath` varchar(80) NOT NULL DEFAULT 'img/1.jpg',
  `Liked` int(11) NOT NULL DEFAULT 0,
  `Priority` int(11) NOT NULL DEFAULT 0,
  `listenpriority` int(11) NOT NULL DEFAULT 0,
  `Last_Listened` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user3songs`
--

INSERT INTO `user3songs` (`SongNum`, `Title`, `Artist`, `Genre`, `Language`, `audiopath`, `imgpath`, `Liked`, `Priority`, `listenpriority`, `Last_Listened`) VALUES
(1, 'Shape Of You', 'Ed Sheeran', 'Pop', 'English', 'songs/1.mp3', 'img/1.jpg', 0, 0, 0, 0),
(2, 'Galway Girl', 'Ed Sheeran', 'Rap', 'English', 'songs/2.mp3', 'img/2.jpg', 0, 0, 0, 0),
(3, 'Lego House', 'Ed Sheeran', 'Pop', 'English', 'songs/3.mp3', 'img/3.jpg', 0, 0, 0, 0),
(4, 'Perfect', 'Ed Sheeran', 'Pop', 'English', 'songs/4.mp3', 'img/4.jpg', 0, 0, 0, 0),
(5, 'Photograph', 'Ed Sheeran', 'Pop', 'English', 'songs/5.mp3', 'img/5.jpg', 0, 0, 0, 0),
(6, 'Thinking Out Loud', 'Ed Sheeran', 'Pop', 'English', 'songs/6.mp3', 'img/6.jpg', 0, 0, 0, 0),
(7, 'Castle On The Hill', 'Ed Sheeran', 'Pop', 'English', 'songs/7.mp3', 'img/7.jpg', 0, 0, 0, 0),
(8, 'Best Song Ever', 'One Direction', 'Pop', 'English', 'songs/8.mp3', 'img/8.jpg', 0, 0, 0, 0),
(9, 'Infinity', 'One Direction', 'Pop', 'English', 'songs/9.mp3', 'img/9.jpg', 0, 0, 0, 0),
(10, 'One Thing', 'One Direction', 'Pop', 'English', 'songs/10.mp3', 'img/10.jpg', 0, 0, 0, 0),
(11, 'Perfect', 'One Direction', 'Pop', 'English', 'songs/11.mp3', 'img/11.jpg', 0, 0, 0, 0),
(12, 'Ready To Run', 'One Direction', 'Pop', 'English', 'songs/12.mp3', 'img/12.jpg', 0, 0, 0, 0),
(13, 'Steal My Girl', 'One Direction', 'Pop', 'English', 'songs/13.mp3', 'img/13.jpg', 0, 0, 0, 0),
(14, 'You And I', 'One Direction', 'Pop', 'English', 'songs/14.mp3', 'img/14.jpg', 0, 0, 0, 0),
(15, 'Bad Blood', 'Taylor Swift', 'Rap', 'English', 'songs/15.mp3', 'img/15.jpg', 0, 0, 0, 0),
(16, 'Blank Space', 'Taylor Swift', 'Pop', 'English', 'songs/16.mp3', 'img/16.jpg', 0, 0, 0, 0),
(17, 'Shake It Off', 'Taylor Swift', 'Pop', 'English', 'songs/17.mp3', 'img/17.jpg', 0, 0, 0, 0),
(18, 'Style', 'Taylor Swift', 'Pop', 'English', 'songs/18.mp3', 'img/18.jpg', 0, 0, 0, 0),
(19, 'Wildest Dreams', 'Taylor Swift', 'Pop', 'English', 'songs/19.mp3', 'img/19.jpg', 0, 0, 0, 0),
(20, 'You Belong With Me', 'Taylor Swift', 'Country', 'English', 'songs/20.mp3', 'img/20.jpg', 0, 0, 0, 0),
(21, 'Mean', 'Taylor Swift', 'Country', 'English', 'songs/21.mp3', 'img/21.jpg', 0, 0, 0, 0),
(22, 'Old Town Road', 'Lil Nas X', 'Country', 'English', 'songs/22.mp3', 'img/22.jpg', 0, 0, 0, 0),
(23, 'The Box', 'Roddy Ricch', 'Rap', 'English', 'songs/23.mp3', 'img/23.jpg', 0, 0, 0, 0),
(24, 'Sicko Mode', 'Travis Scott', 'Rap', 'English', 'songs/24.mp3', 'img/24.jpg', 0, 0, 0, 0),
(25, 'The Plan', 'Travis Scott', 'Rap', 'English', 'songs/25.mp3', 'img/25.jpg', 0, 0, 0, 0),
(26, 'Faded', 'Alan Walker', 'Electronic', 'English', 'songs/26.mp3', 'img/26.jpg', 0, 0, 0, 0),
(27, 'The Spectre', 'Alan Walker', 'Electronic', 'English', 'songs/27.mp3', 'img/27.jpg', 0, 0, 0, 0),
(28, 'On My Way', 'Alan Walker', 'Electronic', 'English', 'songs/28.mp3', 'img/28.jpg', 0, 0, 0, 0),
(29, 'Alone', 'Marshmellow', 'Electronic', 'English', 'songs/29.mp3', 'img/29.jpg', 0, 0, 0, 0),
(30, 'Stars', 'Marshmellow', 'Electronic', 'English', 'songs/30.mp3', 'img/30.jpg', 0, 0, 0, 0),
(31, 'Arabic Kuthu', 'Anirudh', 'Kollywood', 'Tamil', 'songs/31.mp3', 'img/31.jpg', 0, 0, 0, 0),
(32, 'Jalabula Jungu', 'Anirudh', 'Kollywood', 'Tamil', 'songs/32.mp3', 'img/32.jpg', 0, 0, 0, 0),
(33, 'Jolly O Gymkhana', 'Anirudh', 'Kollywood', 'Tamil', 'songs/33.mp3', 'img/33.jpg', 0, 0, 0, 0),
(34, 'Senjitaley', 'Anirudh', 'Kollywood', 'Tamil', 'songs/34.mp3', 'img/34.jpg', 0, 0, 0, 0),
(35, 'Kadhaippoma', 'Sid Sriram', 'Kollywood', 'Tamil', 'songs/35.mp3', 'img/35.jpg', 0, 0, 0, 0),
(36, 'Kannana Kanney', 'Sid Sriram', 'Kollywood', 'Tamil', 'songs/36.mp3', 'img/36.jpg', 0, 0, 0, 0),
(37, 'Mudhal Nee Mudivum Nee', 'Sid Sriram', 'Kollywood', 'Tamil', 'songs/37.mp3', 'img/37.jpg', 0, 0, 0, 0),
(38, 'Mental Manadhil', 'A R Rahman', 'Kollywood', 'Tamil', 'songs/38.mp3', 'img/38.jpg', 0, 0, 0, 0),
(39, 'Nenjae Yezhu', 'A R Rahman', 'Kollywood', 'Tamil', 'songs/39.mp3', 'img/39.jpg', 0, 0, 0, 0),
(40, 'Singapenney', 'A R Rahman', 'Kollywood', 'Tamil', 'songs/40.mp3', 'img/40.jpg', 0, 0, 0, 0),
(41, 'Agar Tum Saath Ho', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/41.mp3', 'img/41.jpg', 0, 0, 0, 0),
(42, 'Tum Hi Ho', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/42.mp3', 'img/42.jpg', 0, 0, 0, 0),
(43, 'Hawayein', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/43.mp3', 'img/43.jpg', 0, 0, 0, 0),
(44, 'Sooraj Dooba Hain', 'Arijit Singh', 'Bollywood', 'Hindi', 'songs/44.mp3', 'img/44.jpg', 0, 0, 0, 0),
(45, 'Ghoomar', 'Shreya Ghoshal', 'Bollywood', 'Hindi', 'songs/45.mp3', 'img/45.jpg', 0, 0, 0, 0),
(46, 'Nagada Sang Dhol', 'Shreya Ghoshal', 'Bollywood', 'Hindi', 'songs/46.mp3', 'img/46.jpg', 0, 0, 0, 0),
(47, 'Sun Raha Hai Na Tu', 'Shreya Ghoshal', 'Bollywood', 'Hindi', 'songs/47.mp3', 'img/47.jpg', 0, 0, 0, 0),
(48, 'Leja Re', 'Dhvani Bhanushali', 'Bollywood', 'Hindi', 'songs/48.mp3', 'img/48.jpg', 0, 0, 0, 0),
(49, 'Vaaste', 'Dhvani Bhanushali', 'Bollywood', 'Hindi', 'songs/49.mp3', 'img/49.jpg', 0, 0, 0, 0),
(50, 'Nayan', 'Dhvani Bhanushali', 'Bollywood', 'Hindi', 'songs/50.mp3', 'img/50.jpg', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`username`, `password`) VALUES
('user1', 'pass1'),
('user2', 'pass2'),
('user3', 'pass3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
