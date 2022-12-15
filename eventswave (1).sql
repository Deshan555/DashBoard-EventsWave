-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2022 at 12:23 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventswave`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `POST_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `COMMENT` text NOT NULL,
  `DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`COMMENT_ID`),
  KEY `POST_ID` (`POST_ID`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`COMMENT_ID`, `POST_ID`, `USER_ID`, `COMMENT`, `DATE`) VALUES
(1, 13, 16, 'awsome', '2022-12-02 18:22:46'),
(2, 13, 16, 'awsome', '2022-12-02 18:23:54'),
(3, 18, 16, 'woow awsome desk setup keep it up', '2022-12-03 03:09:13'),
(4, 18, 16, 'woow awsome desk setup keep it up', '2022-12-03 03:43:07'),
(5, 18, 16, 'woow awsome desk setup keep it up', '2022-12-03 03:44:57'),
(6, 18, 16, 'Perfect!!!', '2022-12-03 03:49:18'),
(7, 18, 16, 'Perfect Solution', '2022-12-03 03:49:50'),
(8, 18, 16, 'this is testing', '2022-12-03 03:56:25'),
(9, 18, 16, 'testing comment', '2022-12-03 03:56:47'),
(10, 18, 16, 'testing comment', '2022-12-03 03:57:57'),
(11, 18, 16, 'testing comment', '2022-12-03 04:16:43'),
(12, 11, 16, 'perfection', '2022-12-03 05:48:36'),
(13, 11, 16, 'testing comment', '2022-12-03 06:02:35'),
(14, 7, 16, 'hey', '2022-12-03 07:03:52'),
(32, 1, 16, 'You\"re like a habit That I can\"t break My favorite line in a bad song You feel just right when it\"s all wrong', '2022-12-08 04:28:21'),
(17, 13, 16, 'Oh Perry, we love you more than ice cream cakes We love you more than bugs and snakes ', '2022-12-03 13:33:14'),
(18, 13, 16, 'i like this tv show', '2022-12-03 14:45:42'),
(19, 13, 16, 'wow', '2022-12-04 13:44:46'),
(20, 14, 16, 'ewww', '2022-12-04 13:50:46'),
(21, 14, 16, 'eww', '2022-12-04 14:32:33'),
(22, 6, 16, 'hello perry', '2022-12-04 14:38:15'),
(23, 22, 16, 'I Love this Anime', '2022-12-07 07:25:40'),
(24, 22, 16, 'There is no way we could meet. But one thing is certain. If we see each other, we will know. That you were the one who was inside me. That I was the one who was inside you.', '2022-12-07 07:57:22'),
(25, 22, 16, 'You\"re like a habit That I can\"t break My favorite line in a bad song You feel just right when it\"s all wrong Hands on my body We don\"t need nobody You give me everything I ask for Hands tied and I\"m not even scared, no, hmm, hmm', '2022-12-07 08:00:39'),
(26, 1, 16, 'You\"re like a habit That I can\"t break My favorite line in a bad song You feel just right when it\"s all wrong <br>\r\n<b>-Jayashanka Deshan</b>', '2022-12-07 10:34:09'),
(31, 1, 16, 'You\"re like a habit That I can\"t break My favorite line in a bad song You feel just right when it\"s all wrong', '2022-12-08 04:24:55'),
(33, 1, 16, 'You\"re like a habit That I can\"t break My favorite line in a bad song You feel just right when it\"s all wrong', '2022-12-08 04:28:26'),
(34, 1, 16, 'You\"re like a habit That I can\"t break My favorite line in a bad song You feel just right when it\"s all wrong\r\n\r\nTest Editing', '2022-12-08 04:28:30'),
(35, 11, 27, 'example', '2022-12-13 15:15:15'),
(36, 11, 16, 'like it', '2022-12-13 15:18:28'),
(37, 11, 27, 'hello friday', '2022-12-13 15:22:32'),
(38, 11, 27, 'testing comment 123', '2022-12-13 15:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `comments_events`
--

DROP TABLE IF EXISTS `comments_events`;
CREATE TABLE IF NOT EXISTS `comments_events` (
  `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Event_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `COMMENT` text NOT NULL,
  `DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`COMMENT_ID`),
  KEY `Event_ID` (`Event_ID`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_events`
--

INSERT INTO `comments_events` (`COMMENT_ID`, `Event_ID`, `USER_ID`, `COMMENT`, `DATE`) VALUES
(2, 3, 16, 'That M ,he stamps everywhere... It is not for Marcel... it is for Mikaelson.', '2022-12-10 13:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `comments_vid`
--

DROP TABLE IF EXISTS `comments_vid`;
CREATE TABLE IF NOT EXISTS `comments_vid` (
  `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `VIDEO_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `COMMENT` text NOT NULL,
  `DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`COMMENT_ID`),
  KEY `VIDEO_ID` (`VIDEO_ID`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_vid`
--

INSERT INTO `comments_vid` (`COMMENT_ID`, `VIDEO_ID`, `USER_ID`, `COMMENT`, `DATE`) VALUES
(2, 3, 16, 'That M ,he stamps everywhere... It is not for Marcel... it is for Mikaelson.', '2022-12-10 11:18:43'),
(3, 5, 27, 'fsfsfsfs', '2022-12-12 08:55:29'),
(4, 4, 27, 'gfddgf', '2022-12-12 08:59:11'),
(5, 4, 27, 'sfafasfa', '2022-12-12 09:24:18'),
(6, 4, 27, 'sfs', '2022-12-12 09:24:25'),
(7, 4, 16, 'dsdsd', '2022-12-12 09:24:57'),
(8, 4, 27, 'kk', '2022-12-12 09:28:16'),
(9, 3, 27, 'dgd', '2022-12-12 09:29:23'),
(10, 1, 16, ' xssccs', '2022-12-12 09:31:55'),
(11, 5, 16, 'x', '2022-12-12 09:32:11'),
(12, 3, 16, 'xvxvx', '2022-12-12 09:32:42'),
(13, 4, 16, 'l', '2022-12-12 09:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `Event_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Likes` int(11) NOT NULL,
  `Event_Poster` text NOT NULL,
  `Caption` varchar(250) NOT NULL,
  `Event_Time` time NOT NULL,
  `Event_Date` datetime NOT NULL,
  `Invite_Link` text NOT NULL,
  `HashTags` varchar(250) NOT NULL,
  `Date_Upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Event_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Event_ID`, `User_ID`, `Likes`, `Event_Poster`, `Caption`, `Event_Time`, `Event_Date`, `Invite_Link`, `HashTags`, `Date_Upload`) VALUES
(2, 16, 1, 'File_20221210680023.jpeg', 'Prom Night Oh We Got To Turn Up The Crazy, Living Like A Washed-Up Celebrity, Shooting Fireworks Like It Is The Fourth Of July Until We Feel All Right.\r\nâ€” Panic! At The Disco Victorious', '17:33:00', '2022-12-15 00:00:00', 'http://localhost/project/madara_uchiha/Event-Upload.php', '#come-back-perry', '2022-12-10 12:02:05'),
(3, 16, 1, 'File_202212107064952.jpeg', '<b>Prom Night</b>\r\nOh we got to turn up the crazy, living like a washed-up celebrity, shooting fireworks like it is the fourth of July until we feel all right. <br>\r\n<i><b>â€” Panic! at the Disco Victorious</b></i>', '18:00:00', '2022-12-14 00:00:00', 'http://localhost/project/madara_uchiha/Event-Upload.php', '#2023 #sltc', '2022-12-10 12:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `fallowing`
--

DROP TABLE IF EXISTS `fallowing`;
CREATE TABLE IF NOT EXISTS `fallowing` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Id` int(11) NOT NULL,
  `Other_user_id` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fallowing`
--

INSERT INTO `fallowing` (`ID`, `User_Id`, `Other_user_id`) VALUES
(17, 16, 21),
(15, 21, 17),
(14, 21, 18),
(13, 21, 20),
(12, 21, 16),
(7, 16, 20),
(16, 16, 17),
(18, 27, 16),
(19, 16, 27);

-- --------------------------------------------------------

--
-- Table structure for table `image_upload`
--

DROP TABLE IF EXISTS `image_upload`;
CREATE TABLE IF NOT EXISTS `image_upload` (
  `Id` int(11) DEFAULT NULL,
  `Filename` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `Like_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Post_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`Like_ID`),
  KEY `Post_ID` (`Post_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`Like_ID`, `Post_ID`, `User_ID`) VALUES
(18, 11, 16),
(13, 2, 16),
(7, 1, 16),
(17, 7, 16),
(14, 2, 16),
(11, 1, 21),
(19, 11, 27);

-- --------------------------------------------------------

--
-- Table structure for table `likes_events`
--

DROP TABLE IF EXISTS `likes_events`;
CREATE TABLE IF NOT EXISTS `likes_events` (
  `Like_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Event_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`Like_ID`),
  KEY `Event_ID` (`Event_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes_events`
--

INSERT INTO `likes_events` (`Like_ID`, `Event_ID`, `User_ID`) VALUES
(2, 3, 16),
(4, 2, 16);

-- --------------------------------------------------------

--
-- Table structure for table `likes_vid`
--

DROP TABLE IF EXISTS `likes_vid`;
CREATE TABLE IF NOT EXISTS `likes_vid` (
  `Like_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Video_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`Like_ID`),
  KEY `Video_ID` (`Video_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes_vid`
--

INSERT INTO `likes_vid` (`Like_ID`, `Video_ID`, `User_ID`) VALUES
(16, 3, 16),
(17, 1, 16),
(18, 5, 16);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `Post_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Likes` int(11) NOT NULL,
  `Img_Path` text NOT NULL,
  `Caption` varchar(700) NOT NULL,
  `HashTags` varchar(250) NOT NULL,
  `Date_Upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Post_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_ID`, `User_ID`, `Likes`, `Img_Path`, `Caption`, `HashTags`, `Date_Upload`) VALUES
(1, 16, 2, 'File_202212077778955.png', 'We are all like fireworks: We climb, we shine and always go our separate ways and become further apart. ', '#Anime #your-name', '2022-12-07 08:21:59'),
(7, 16, 1, 'File_202212098108299.webp', 'If you are re in a relationship, you have a kind of duty not to make the other feel lonely.', '#neverthless', '2022-12-09 16:29:44'),
(6, 21, 1, 'File_20221207818345.jpg', 'Slow it down, not a race\r\nTake your time and I will rush home\r\nI got my hand on your waist while I am driving\r\nNever mind slow no', '#songs', '2022-12-07 14:11:17'),
(9, 16, 0, 'File_202212107432816.jpg', 'GitHub, Inc. is an Internet hosting service for software development and version control using Git. It provides the distributed version control of Git plus access control, bug tracking, software feature requests, task management, continuous integration, and wikis for every project. ', '#desk-setup', '2022-12-10 11:01:52'),
(10, 16, 0, 'File_202212105691335.png', 'à¨¹à©‹à¨‡à¨† à¨¤à©‡à¨°à©‡ à¨¨à¨¾à¨² à¨ªà¨¿à¨†à¨° à¨œà¨¦à©‹à¨‚ à¨¦à¨¾, à¨¸à©‹à¨¹à¨£à¨¿à¨†\r\nà¨¹à©‹à¨‡à¨† à¨¤à©‡à¨°à©‡ à¨¨à¨¾à¨² à¨ªà¨¿à¨†à¨° à¨œà¨¦à©‹à¨‚ à¨¦à¨¾, à¨¸à©‹à¨¹à¨£à¨¿à¨†\r\nà¨œà¨¾à¨—à¨¾à¨‚ à¨®à©ˆà¨‚ à¨¸à¨¾à¨°à©€ à¨°à¨¾à¨¤, à¨¨à©€à¨‚à¨¦à¨°à©€ à¨¨à¨¾ à¨†à¨‚à¨¦à©€ à¨\r\nà¨¹à©‹-à¨¹à©‹, à¨“à¨¹à©‹, à¨¹à©‹\r\nà¨¹à©‹à¨‡à¨† à¨¤à©‡à¨°à©‡ à¨¨à¨¾à¨² à¨ªà¨¿à¨†à¨° à¨œà¨¦à©‹à¨‚ à¨¦à¨¾, à¨¸à©‹à¨¹à¨£à¨¿à¨†\r\nà¨¹à©‹à¨‡à¨† à¨¤à©‡à¨°à©‡ à¨¨à¨¾à¨² à¨ªà¨¿à¨†à¨° à¨œà¨¦à©‹à¨‚ à¨¦à¨¾, à¨¸à©‹à¨¹à¨£à¨¿à¨†\r\nà¨œà¨¾à¨—à¨¾à¨‚ à¨®à©ˆà¨‚ à¨¸à¨¾à¨°à©€ à¨°à¨¾à¨¤, à¨¨à©€à¨‚à¨¦à¨°à©€ à¨¨à¨¾ à¨†à¨‚à¨¦à©€ à¨\r\nà¨¹à©‹-à¨¹à©‹, à¨“à¨¹à©‹, à¨¹à©‹', '#anime', '2022-12-10 11:56:21'),
(11, 16, 2, 'File_202212101877902.png', 'à¨¹à©‹à¨‡à¨† à¨¤à©‡à¨°à©‡ à¨¨à¨¾à¨² à¨ªà¨¿à¨†à¨° à¨œà¨¦à©‹à¨‚ à¨¦à¨¾, à¨¸à©‹à¨¹à¨£à¨¿à¨†\r\nà¨¹à©‹à¨‡à¨† à¨¤à©‡à¨°à©‡ à¨¨à¨¾à¨² à¨ªà¨¿à¨†à¨° à¨œà¨¦à©‹à¨‚ à¨¦à¨¾, à¨¸à©‹à¨¹à¨£à¨¿à¨†\r\nà¨œà¨¾à¨—à¨¾à¨‚ à¨®à©ˆà¨‚ à¨¸à¨¾à¨°à©€ à¨°à¨¾à¨¤, à¨¨à©€à¨‚à¨¦à¨°à©€ à¨¨à¨¾ à¨†à¨‚à¨¦à©€ à¨\r\nà¨¹à©‹-à¨¹à©‹, à¨“à¨¹à©‹, à¨¹à©‹\r\nà¨¹à©‹à¨‡à¨† à¨¤à©‡à¨°à©‡ à¨¨à¨¾à¨² à¨ªà¨¿à¨†à¨° à¨œà¨¦à©‹à¨‚ à¨¦à¨¾, à¨¸à©‹à¨¹à¨£à¨¿à¨†\r\nà¨¹à©‹à¨‡à¨† à¨¤à©‡à¨°à©‡ à¨¨à¨¾à¨² à¨ªà¨¿à¨†à¨° à¨œà¨¦à©‹à¨‚ à¨¦à¨¾, à¨¸à©‹à¨¹à¨£à¨¿à¨†\r\nà¨œà¨¾à¨—à¨¾à¨‚ à¨®à©ˆà¨‚ à¨¸à¨¾à¨°à©€ à¨°à¨¾à¨¤, à¨¨à©€à¨‚à¨¦à¨°à©€ à¨¨à¨¾ à¨†à¨‚à¨¦à©€ à¨\r\nà¨¹à©‹-à¨¹à©‹, à¨“à¨¹à©‹, à¨¹à©‹', '#anime ', '2022-12-10 11:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FULL_NAME` varchar(100) NOT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `USER_TYPE` varchar(2) NOT NULL,
  `PASSWORD_S` varchar(50) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `IMAGE` varchar(200) DEFAULT 'assets/images/profile_pics/default.png',
  `FACEBOOK` varchar(200) DEFAULT 'www.facebook.com',
  `WHATSAPP` varchar(200) DEFAULT 'www.webwhatsapp.com',
  `BIO` varchar(500) DEFAULT 'bio here',
  `FALLOWERS` int(11) DEFAULT '0',
  `FALLOWING` int(11) DEFAULT '0',
  `POSTS` int(11) DEFAULT '0',
  PRIMARY KEY (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `FULL_NAME`, `USER_NAME`, `USER_TYPE`, `PASSWORD_S`, `EMAIL`, `IMAGE`, `FACEBOOK`, `WHATSAPP`, `BIO`, `FALLOWERS`, `FALLOWING`, `POSTS`) VALUES
(20, 'example_2', '1324443518', '1', '225e96dc5cc293fa65b41d444a7a974b', 'example_2@sltc.ac.lk', 'default.png', 'www.facebook.com', 'www.webwhatsapp.com', 'tell use more about you', 2, 0, 0),
(19, 'exampleaccount3', '1845174169', '1', '562fe97f1a96fcc2faaae038741a2253', 'exampleaccount3@sltc.ac.lk', 'default.png', 'www.facebook.com', 'www.webwhatsapp.com', 'tell use more about you', 1, 0, 0),
(18, 'exampleaccount2', '174461135', '1', '45637a56ae0a32c1b0b846b1edf0bed3', 'exampleaccount2@sltc.ac.lk', 'default.png', 'www.facebook.com', 'www.webwhatsapp.com', 'tell use more about you', 3, 0, 0),
(16, 'Jayashanka Deshan', 'Jayashanka555', '1', '25d55ad283aa400af464c76d713c07ad', 'deshanja@sltc.ac.lk', 'Profile_202212094203912.png', 'www.facebook.com', '0717178457', 'You get busy or get busy or get busy<br>\r\nGet lost, get lost', 2, 4, 5),
(17, 'exampleaccount', '293953663', '1', '47e599120ff1211c2250710373f3788e', 'exampleaccount@sltc.ac.lk', 'default.png', 'www.facebook.com', 'www.webwhatsapp.com', 'Testing Bio', 2, 0, 0),
(21, 'deshanja', '1788129959', '1', '5a82d30a237aad84f607553bad8e9178', 'deshanjass@sltc.ac.lk', 'default.png', 'www.facebook.com', 'www.webwhatsapp.com', 'tell use more about you', 1, 4, 1),
(27, 'deshanja', 'deshan555', '1', 'b207c3c1c76c949b5b201721bd56c46e', 'deshanja@sltc.ac.lk', 'Profile_202212124267870.jpg', 'www.facebook.com', 'www.webwhatsapp.com', 'tell use more about you', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `Video_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` int(11) NOT NULL,
  `Likes` int(11) NOT NULL,
  `Video_Path` text NOT NULL,
  `Caption` varchar(700) NOT NULL,
  `HashTags` varchar(250) NOT NULL,
  `Date_Upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Video_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Video_ID`, `User_ID`, `Likes`, `Video_Path`, `Caption`, `HashTags`, `Date_Upload`) VALUES
(1, 16, 1, 'Vid_202212096613556.mp4', 'Scooby-Doo and his gang travel to the distant Moonscar island. But the heavenly paradise has a dark secret, which reveals itself in the form of vicious zombie pirates.', '#scooby-doo #animation', '2022-12-09 00:00:00'),
(3, 16, 1, 'Vid_202212108196439.mp4', 'I am dreaming on, I swear<br>\r\nMy wings are clipped, I dont care<br>\r\nI will carry on with your pictures on my mind<br>\r\nI will find a way to make you stay<br>', '#KSHMR  #Animation', '2022-12-10 00:00:00'),
(4, 16, 0, 'Vid_202212119292798.mp4', 'Been two years, our memories are blurred<br>\r\nHadn it heard your voice, no, not a word<br>\r\nBut still they, they talk about the things we were<br>\r\nThey talk about us<br>\r\nBut I do not know the things that you have heard<br>', '#ClaraMae #animation', '2022-12-11 00:00:00'),
(5, 16, 1, 'Vid_202212114941815.mp4', 'Been two years, our memories are blurred\r\nHadn it heard your voice, no, not a word\r\nBut still they, they talk about the things we were\r\nThey talk about us\r\nBut I do not know the things that you have heard', '#animation', '2022-12-11 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
