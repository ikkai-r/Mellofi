-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 30, 2023 at 05:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mellofi`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `message_id` int(11) NOT NULL,
  `stream_id` int(255) NOT NULL,
  `username` varchar(455) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`message_id`, `stream_id`, `username`, `message`, `status`) VALUES
(264, 15, 'zen', 'thank u for the live!!!', 'normal'),
(265, 15, 'zen', 'acoustic version inevitable when?', 'spotlight'),
(266, 15, 'roanne', 'salamat sa liveeeeee huhu', 'normal'),
(267, 15, 'roanne', 'i was rlly feeling down', 'normal'),
(268, 15, 'roanne', 'thank u', 'normal'),
(269, 15, 'tiger', 'iba talaga pag ben&ben huhu', 'normal'),
(270, 13, 'new', 'ang astig niyo lods', 'spotlight'),
(271, 13, 'new', 'cutie pie', 'normal'),
(272, 13, 'new', 'nice', 'normal'),
(273, 13, 'new', 'isa pa daw', 'spotlight'),
(274, 15, 'roanne', 'thank you for this!', 'spotlight'),
(275, 13, 'gawr', 'teka', 'normal'),
(276, 13, 'gawr', 'tamo nagana naman eh', 'normal'),
(277, 13, 'gawr', 'sAUCE!!', 'normal'),
(278, 14, 'gawr', 'di ka sayanggg', 'normal'),
(279, 18, 'gawr', 'guds to mga par', 'normal'),
(286, 13, 'roanne', 'nice mga pare!!', 'normal'),
(321, 17, 'mollie', 'mabibibgat', 'spotlight'),
(322, 17, 'mollie', 'na pasanin', 'normal'),
(392, 13, 'roanne', 'baka naman', 'normal'),
(393, 13, 'roanne', 'sa susunod na habang buhay!', 'normal'),
(426, 14, 'roanne', 'sdsd', 'normal'),
(427, 16, 'roanne', 'niceeee', 'normal'),
(428, 19, 'roanne', 'yoooo', 'normal'),
(429, 13, 'gawr', 'ghghgh', 'normal'),
(430, 13, 'gawr', 'ghgh', 'spotlight'),
(431, 13, 'gawr', 'dfdfdf', 'spotlight'),
(432, 17, 'gawr', 'nice', 'normal'),
(433, 17, 'gawr', 'UAYYYYYY', 'normal'),
(434, 17, 'gawr', 'YAYYYYYYYY', 'normal'),
(435, 17, 'gawr', 'yo', 'spotlight'),
(436, 15, 'gawr', 'hehe', 'normal'),
(437, 14, 'zen', 'hi', 'normal'),
(438, 14, 'zen', 'UPPPPPP', 'normal'),
(439, 14, 'zen', 'YES', 'spotlight'),
(440, 14, 'zen', 'YUP', 'spotlight'),
(441, 14, 'zen', 'badge yes', 'normal'),
(442, 17, 'zen', 'kamusta', 'normal'),
(443, 17, 'zen', 'BIGAT', 'normal'),
(451, 14, 'lolo', 'dfdfdf', 'spotlight'),
(452, 17, 'lolo', 'AAAAAAA', 'normal'),
(453, 17, 'lolo', 'AAAAAAAAAAA', 'spotlight'),
(454, 17, 'lolo', 'BOOM', 'spotlight'),
(455, 14, 'lolo', 'BOOOOOOOOOOOOM', 'spotlight'),
(456, 15, 'roanne', 'nice!!', 'normal'),
(457, 13, 'new', 'hello', 'normal'),
(458, 13, 'new', 'acoustic pls', 'spotlight'),
(459, 17, 'new', 'hello', 'normal'),
(460, 17, 'new', 'hi', 'normal'),
(461, 13, 'Syd Hartha', 'omg', 'normal'),
(462, 18, 'roanne', 'nice', 'normal'),
(464, 17, 'roanne', 'dfdfdf', 'normal'),
(465, 17, 'roanne', 'hjhj', 'normal'),
(466, 13, 'Ben&Ben', 'sdsd', 'normal'),
(467, 13, 'Ben&Ben', 'gano kayha kabahab etong magagawa ko ano ba ano na ahansnd', 'normal'),
(468, 14, 'roanne', 'hello!', 'spotlight'),
(469, 13, 'Ben&Ben', 'dsfsd', 'normal'),
(470, 13, 'Munimuni', 'baka naman', 'normal'),
(471, 14, 'roanne', 'hiii', 'spotlight'),
(472, 13, 'Ben&Ben', 'hello!!!', 'normal'),
(473, 13, 'roanne', 'hi!!', 'normal'),
(474, 13, 'Ben&Ben', 'yallo', 'normal'),
(475, 13, 'roanne', 'tenchu!', 'normal'),
(476, 13, 'Ben&Ben', 'tenchu den!', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `username` varchar(455) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `video_id`, `username`, `message`) VALUES
(37, 8, 'user123', 'thanks for posting this!'),
(38, 8, 'user123', 'i really appreciate it <33'),
(39, 8, 'zen', 'woah nice'),
(40, 8, 'zen', 'tamang tama lang'),
(41, 8, 'luffy', 'di ka sayangggg'),
(42, 8, 'luffy', 'di kailangang manghinayanggg'),
(43, 8, 'roanne', 'wow'),
(44, 8, 'meow', 'meow'),
(45, 8, 'ascof', 'wow'),
(46, 8, 'roanne', 'ikaw pa rin'),
(47, 8, 'roanne', 'ang pipiliin'),
(48, 8, 'roanne', 'kong mahaliiiiin'),
(49, 8, 'roanne', 'sa susunod'),
(50, 10, 'roanne', 'woahhhh'),
(51, 10, 'roanne', 'i love this so much ;-;'),
(52, 9, 'roanne', 'thank u so much for this <3333'),
(53, 9, 'roanne', 'huhuhu'),
(54, 0, 'roanne', 'sdsdsd'),
(55, 0, 'roanne', 'sdsdsd'),
(56, 0, 'roanne', 'sd'),
(57, 0, 'roanne', 'sd'),
(58, 0, 'roanne', 'sd'),
(59, 0, 'roanne', 'sdsdsd'),
(60, 0, 'roanne', 'gumana na'),
(61, 0, 'roanne', 'YAYYY'),
(62, 0, 'roanne', 'dfdfdfd'),
(63, 0, 'roanne', 'asdasd'),
(64, 0, 'roanne', 'asdasdasd'),
(65, 0, 'roanne', 'asdasdsad'),
(66, 0, 'roanne', 'adasdsad'),
(67, 0, 'roanne', 'asdsad'),
(68, 0, 'roanne', 'asd'),
(69, 0, 'roanne', 'asd'),
(70, 0, 'roanne', 'ads'),
(71, 0, 'roanne', 'asd'),
(72, 0, 'roanne', 'sdsdsd'),
(73, 0, 'roanne', 'asdsad'),
(74, 0, 'roanne', 'asdasd'),
(75, 0, 'roanne', 'asdasd'),
(76, 0, 'roanne', 'asxasx'),
(77, 0, 'roanne', 'asdasd'),
(78, 0, 'roanne', 'asdasd'),
(79, 0, 'roanne', 'asdasd'),
(80, 0, 'roanne', 'sdsd'),
(81, 0, 'Ben&Ben', 'yo'),
(82, 8, 'Ben&Ben', 'hello, salamat sa pagtangkilik!');

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `file_src` varchar(455) NOT NULL,
  `title` varchar(155) NOT NULL,
  `price` varchar(155) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `musician_id` int(255) DEFAULT NULL,
  `concert_id` int(11) NOT NULL,
  `date` varchar(300) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`file_src`, `title`, `price`, `status`, `musician_id`, `concert_id`, `date`, `time`) VALUES
('ben_and_ben_online_concert_2021.jpg', 'Limasawa Street Tour 12', 'PREMIUM', 'upcoming', 111, 28, '2021.05.26', '7PM'),
('1601386111-Ben_Ben-2020-E.jpg', 'Puhon 2: Balik Eskuwela!', 'PREMIUM', 'upcoming', 111, 30, '2021.06.01', '1PM'),
('EQv5-GtUEAE-Zyk.jpg', 'ELEMENTS 2021', 'PREMIUM', 'upcoming', 113, 31, '2021.05.19', '8PM'),
('EQ0MQ5xU0AAkMqQ.jpg', 'rak with ran-ran', 'FREE', 'upcoming', 113, 32, '2021.05.19', '6PM'),
('lola-amour-karpos-live-march-15-2021-bandwagon.jpg', 'Karpos Live', 'FREE', 'upcoming', 113, 33, '2021.06.15', '6PM'),
('munimuni-kulayan-natin-concert-credit-jeremy_caisip-2019.jpg', 'kulayan natin', 'FREE', 'upcoming', 118, 34, '2021.06.03', '7PM'),
('900_675_2__20190914121450.png', 'cutie', 'PREMIUM', 'upcoming', 130, 40, '2021.05.27', '7PM'),
('maxresdefault.jpg', 'Isang Tinig', 'PREMIUM', 'upcoming', 134, 42, '2021.06.01', '9PM'),
('maxresdefault.jpg', 'Isang Tinig', 'PREMIUM', 'upcoming', 135, 43, '2021.06.02', '8PM'),
('Puhon_Poster.png', 'Puhon!', 'PREMIUM', 'upcoming', 111, 44, '2021.06.08', '8PM');

-- --------------------------------------------------------

--
-- Table structure for table `donate_accounts`
--

CREATE TABLE `donate_accounts` (
  `acc_id` int(11) NOT NULL,
  `type` varchar(355) NOT NULL,
  `source` varchar(455) NOT NULL,
  `musician_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate_accounts`
--

INSERT INTO `donate_accounts` (`acc_id`, `type`, `source`, `musician_id`) VALUES
(69, 'GCash', '09284723967', 111);

-- --------------------------------------------------------

--
-- Table structure for table `featured_imgs`
--

CREATE TABLE `featured_imgs` (
  `slider_id` int(11) NOT NULL,
  `img_title` varchar(100) NOT NULL,
  `img_src` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured_imgs`
--

INSERT INTO `featured_imgs` (`slider_id`, `img_title`, `img_src`) VALUES
(1, 'NEVER STOP CREATING', 'ben_and_ben_online_concert_2021.jpg'),
(2, 'NEVER STOP LISTENING', 'ONE-OK-ROCK-Live.jpg'),
(3, 'NEVER STOP SUPPORTING', 'closeup-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `following`
--

CREATE TABLE `following` (
  `following_id` int(11) NOT NULL,
  `musician_id` int(11) NOT NULL,
  `username` varchar(455) NOT NULL,
  `music_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `following`
--

INSERT INTO `following` (`following_id`, `musician_id`, `username`, `music_id`, `video_id`, `stream_id`) VALUES
(3, 111, 'coco', 0, 8, 0),
(15, 113, 'zen', 0, 0, 0),
(19, 111, 'zen', 0, 0, 13),
(46, 120, 'bonak', 0, 0, 0),
(115, 111, 'luffy', 0, 0, 14),
(124, 111, 'wasap', 0, 0, 13),
(130, 118, 'roanne', 0, 0, 0),
(138, 111, 'gawr', 0, 0, 13),
(152, 111, 'meemo', 0, 0, 13),
(153, 118, 'meemo', 0, 0, 17),
(154, 118, 'mimo', 0, 0, 16),
(164, 111, 'mimo', 0, 0, 0),
(179, 111, 'roanne', 0, 0, 0),
(181, 113, 'roanne', 0, 0, 0),
(184, 111, 'ascof', 6, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `music_id` int(11) DEFAULT NULL,
  `stream_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `genre_id` int(11) NOT NULL,
  `genre` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`music_id`, `stream_id`, `video_id`, `genre_id`, `genre`) VALUES
(4, NULL, NULL, 3, 'Chill'),
(4, NULL, NULL, 4, 'Acoustic'),
(4, NULL, NULL, 5, 'Folk'),
(NULL, 14, NULL, 19, 'Folk'),
(NULL, 14, NULL, 20, 'Pop'),
(NULL, 14, NULL, 21, 'Chill'),
(NULL, 14, NULL, 22, 'Acoustic'),
(NULL, 15, NULL, 23, 'Pop'),
(NULL, 1, NULL, 24, 'Pop'),
(NULL, 1, NULL, 25, 'Rock'),
(10, NULL, NULL, 26, 'Pop'),
(10, NULL, NULL, 27, 'Rock'),
(11, NULL, NULL, 28, 'Rock'),
(11, NULL, NULL, 29, 'Pop'),
(13, NULL, NULL, 30, 'Chill'),
(13, NULL, NULL, 31, 'Acoustic'),
(15, NULL, NULL, 32, 'Folk'),
(15, NULL, NULL, 33, 'Chill'),
(NULL, 17, NULL, 34, 'Chill'),
(NULL, 17, NULL, 35, 'Folk'),
(NULL, 16, NULL, 36, 'Folk'),
(NULL, 16, NULL, 37, 'Chill'),
(NULL, 16, NULL, 38, 'Rock'),
(NULL, 15, NULL, 39, 'Folk'),
(NULL, 18, NULL, 40, 'Chill'),
(NULL, 18, NULL, 41, 'Pop'),
(NULL, NULL, 10, 44, 'Pop'),
(NULL, NULL, 10, 45, 'Acoustic'),
(NULL, NULL, 11, 46, 'Electronic'),
(NULL, NULL, 11, 47, 'Rock'),
(16, NULL, NULL, 48, 'Funk'),
(16, NULL, NULL, 49, 'Pop'),
(16, NULL, NULL, 50, 'Rock'),
(NULL, NULL, 9, 117, 'Acoustic'),
(NULL, NULL, 9, 118, 'Chill'),
(NULL, NULL, 9, 119, 'Electronic'),
(NULL, NULL, 8, 126, 'Acoustic'),
(NULL, NULL, 8, 127, 'Chill'),
(NULL, NULL, 8, 128, 'Folk'),
(6, NULL, NULL, 129, 'Chill'),
(6, NULL, NULL, 130, 'Pop'),
(6, NULL, NULL, 131, 'Soul'),
(7, NULL, NULL, 132, 'Acoustic'),
(7, NULL, NULL, 133, 'Chill'),
(7, NULL, NULL, 134, 'Pop'),
(8, NULL, NULL, 135, 'Acoustic'),
(8, NULL, NULL, 136, 'Folk'),
(9, NULL, NULL, 137, 'Acoustic'),
(9, NULL, NULL, 138, 'Pop'),
(9, NULL, NULL, 139, 'Soul'),
(26, NULL, NULL, 140, 'Acoustic'),
(26, NULL, NULL, 141, 'Chill'),
(26, NULL, NULL, 142, 'Electronic'),
(NULL, 13, NULL, 143, 'Acoustic'),
(NULL, 13, NULL, 144, 'Chill'),
(NULL, 13, NULL, 145, 'Folk'),
(NULL, 13, NULL, 146, 'Pop');

-- --------------------------------------------------------

--
-- Table structure for table `listener`
--

CREATE TABLE `listener` (
  `listener_id` int(11) NOT NULL,
  `username` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listener`
--

INSERT INTO `listener` (`listener_id`, `username`) VALUES
(1, 'lily'),
(2, 'luffy'),
(3, 'roanne'),
(4, 'tiger'),
(5, 'rica'),
(6, 'bang'),
(7, 'user123'),
(8, 'new'),
(9, 'zen'),
(10, 'home'),
(11, 'coco'),
(16, 'lagu'),
(17, 'meow'),
(18, 'taylor'),
(19, 'mail'),
(20, 'mimiyuh'),
(21, 'lolo'),
(24, 'ascof'),
(25, 'bonak'),
(26, 'lugaw'),
(27, 'molly'),
(28, 'mollie'),
(29, 'wasap'),
(30, 'meemo'),
(31, 'mimo');

-- --------------------------------------------------------

--
-- Table structure for table `livestreams`
--

CREATE TABLE `livestreams` (
  `stream_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(455) NOT NULL,
  `musician_id` int(11) NOT NULL,
  `viewer_cnt` varchar(255) NOT NULL,
  `stream_time` varchar(455) NOT NULL,
  `stream_src` varchar(355) DEFAULT NULL,
  `thumbnail` varchar(455) DEFAULT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestreams`
--

INSERT INTO `livestreams` (`stream_id`, `status`, `category`, `title`, `musician_id`, `viewer_cnt`, `stream_time`, `stream_src`, `thumbnail`, `price`) VALUES
(1, 'live', 'recent', '괜찮을까 Pwede Ba - Korean Version (Live at Home) | Lola Amour Live', 113, '150', '15 minutes', 'yt1s.com - Lola Amour  괜찮을까 Pwede Ba  Korean Version Live at Home  Lola Amour Live_v720P.mp4', 'maxresdefault (2).jpg', 'free'),
(13, 'live', 'recent', 'sa susunod na habang buhay - live performance', 111, '436', '35 minutes', 'yt1s.com - SA SUSUNOD NA HABANG BUHAY  live extended performance.mp4', 'EK3Rcp5UcAA7YK8.jpg', 'free'),
(14, 'live', 'popular', 'Di Ka Sayang (live debut) + Kathang Isip + Pagtingin | Live at the Lazada Super Show', 111, '245', '55 minutes', 'yt1s.com - kathang isip  pagtingin  di ka sayang new single  Live at the Lazada Super Show.mp4', 'maxresdefault (4).jpg', 'premium'),
(15, 'live', 'recent', 'Ben&Ben - Inevitable (live, extended version)\r\n\r\n', 111, '345', '3 hours', 'yt1s.com - BenBen  Inevitable live extended version.mp4', 'maxresdefault (5).jpg', 'premium'),
(16, 'live', 'recent', 'Munimuni - Sa\'yo | live at Jess & Pat\'s #TahananGig\r\n', 118, '214', '2 hours', 'yt1s.com - Munimuni  Sayo  live at Jess  Pats TahananGig.mp4', 'maxresdefault (3).jpg', 'free'),
(17, 'live', 'popular', 'Munimuni - Marilag | live at Jess & Pat\'s #TahananGig\r\n', 118, '908', '5 hours', 'yt1s.com - Munimuni  Marilag  live at Jess  Pats TahananGig.mp4', 'maxresdefault (7).jpg', 'free'),
(18, 'live', 'popular', 'Lola Amour: Home Concerts | Please Don\'t Leave (Live)\r\n', 113, '149', '4 hours', 'yt1s.com - Lola Amour Home Concerts  Please Dont Leave Live_v720P.mp4', 'maxresdefault (1).jpg', 'free'),
(20, 'live', 'popular', 'Ala-Ala - Sleep Alley (Live at The 70\'s Bistro) | Yellow Room Night Live', 133, '598', '2 hours', 'yt1s.com - AlaAla  Sleep Alley Live at The 70s Bistro  Yellow Room Night Live_v720P.mp4', 'maxresdefault (6).jpg', 'free'),
(21, 'live', 'popular', 'COKE STUDIO Season 3: “Panaginip” Cover by St. Wolf', 124, '877', '1 hour', 'yt1s.com - COKE STUDIO Season 3 Panaginip Cover by St Wolf_v720P.mp4', 'st-wolf.png', 'free');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `music_id` int(11) NOT NULL,
  `music_src` varchar(455) NOT NULL,
  `album_art` varchar(455) NOT NULL,
  `title` varchar(255) NOT NULL,
  `musician_id` int(255) DEFAULT NULL,
  `upload_time` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`music_id`, `music_src`, `album_art`, `title`, `musician_id`, `upload_time`) VALUES
(4, 'yt1s.com - BenBen  Lifetime  Official Lyric Video.mp3', '021c7afe37c32a66325f941ae373a425.1000x1000x1.jpg', 'Lifetime', 111, '1 month '),
(6, 'yt1s.com - BenBen  Pagtingin  Official Lyric Video.mp3', '81ZCWe8kC8L._SS500_.jpg', 'Pagtingin', 111, '17 days '),
(7, 'Ben&Ben - Maybe The Night [OFFICIAL LYRIC VIDEO] Exes Baggage OST.mp3', 'ddc7a3ca5019c091e29422631c6f82d9.640x640x1.jpg', 'Maybe The Night', 111, '10 days '),
(8, 'yt1s.com - BenBen  ArawAraw  Official Lyric Video.mp3', 'content_Araw_Araw_3kx3k_JPG.jpg', 'Araw-Araw', 111, '5 days '),
(9, 'yt1s.com - Kathang Isip.mp3', 'artworks-MyerhixsTamcrLqP-4kvFWQ-t500x500.jpg', 'Kathang Isip', 111, '4 days '),
(10, 'yt1s.com - Lola Amour  Pwede Ba Official Lyric Video.mp3', 'A1V+7ZlLx8L._SS500_.jpg', 'Pwede Ba', 113, '3 days '),
(11, 'Shake Yer Head.mp3', '500x500.jpg', 'Shake Yer Head', 113, '1 day '),
(12, 'Lola Amour - Please Don\'t Leave [Official Lyric Video].mp3', '84aa21dc79ff555e8bcc12ac47fe048c.1000x1000x1.jpg', 'Please Don\'t Leave', 113, '50 minutes'),
(13, 'Munimuni - Bawat Piyesa (Official Lyric Video).mp3', 'Munimuni_-_Kulayan_Natin.jpeg', 'Bawat Piyesa', 118, '42 minutes'),
(14, 'Munimuni - Sa\'yo (Lyric Video).mp3', 'a0302426501_10.jpg', 'Sayo', 118, '30 minutes'),
(15, 'Munimuni - Marilag (Lyric Video).mp3', 'artworks-000605015176-75crqh-t500x500.jpg', 'Marilag', 118, '2 minutes'),
(16, 'yt1s.com - Amateurish  Blue.mp3', 'a3789760948_10.jpg', 'Blue', 128, '3 days'),
(18, '167502216_471077824114991_2125892401173137231_n.jpg', 'aesthetic-anime-14.jpg', 'ASDSAD', NULL, ''),
(19, 'Lollipop 19-03-2020 09-03.mp3', '1y3vhai9orr51.png', 'NGETPA', NULL, ''),
(26, 'burattatata king.mp3', 'tumblr_68aeff08a2d4e8c6db04b0614ebc6970_ac085e67_1280.jpg', 'King', 111, '');

-- --------------------------------------------------------

--
-- Table structure for table `musician`
--

CREATE TABLE `musician` (
  `musician_id` int(11) NOT NULL,
  `username` varchar(455) NOT NULL,
  `about` text NOT NULL,
  `profile_pic` varchar(455) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `followers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musician`
--

INSERT INTO `musician` (`musician_id`, `username`, `about`, `profile_pic`, `type`, `followers`) VALUES
(111, 'Ben&Ben', 'Ben&Ben is a 9-piece band from Manila, Philippines, consisting of twin brothers Paolo Benjamin and Miguel Benjamin on acoustic guitars and vocals, Poch Barreto on electric guitar, Jam Villanueva on drums, Agnes Reoma on bass, Patricia Lasaten on keyboards, Toni Muñoz and Andrew de Pano on percussions, and Keifer Cabugao on violin. With their eclectic foray into folk and world music blending seamlessly with intricate pop sensibilities, the nine-piece act redefined the mainstream music lane with a blueprint that makes intimacy feel big.', 'RDiXnS_G_400x400.jpg', 'band', 10),
(113, 'Lola Amour', 'Lola Amour is a 7-piece band that dabbles in the genres of modern rock, funk, and pop. Their peculiar sound is a synthesis of disparate musical influences. The band began creeping its way slowly to the local Philippine music scene in 2016 and has since then been gaining traction with their music and whimsical personalities. Since then they have released their debut EP “Don’t Look Back” and their single “Pwede Ba”. The band is currently working on their first full-length album.', 'dMdc97j2_400x400.jpg', 'band', 2),
(115, 'Franco', '', '128589613_226857502136711_3394785022537134831_n.jpg', 'band', 0),
(116, 'Typecast', '', '155399553_279237063563157_7822649052136227976_n.jpg', 'band', 0),
(117, 'Rocksteddy', '', 'unnamed.jpg', 'band', 0),
(118, 'Munimuni', 'Munimuni is Adj Jiao, John Owen Castro, Red Calayan, Jolo Ferrer, and TJ de Ocampo. Makata Pop.', 'G9kbkin6_400x400.jpg', 'band', 4),
(119, 'Autotelic', '', 'autotelic_667-mobile1536498606.jpg', 'band', 0),
(124, 'St. Wolf', '', '70632535_2967782859918509_3393926115562094592_n.jpg', 'band', 0),
(128, 'Amateurish', '', '49210936_2100093296903961_5764497193914335232_n.jpg', 'band', 0),
(133, 'Sleep Alley', '', '5d193e1203671b8a527c3c830f8eb7f5.jpg', 'band', 0),
(135, 'Syd', '', '4bcc039b42a1d46f0e879e31e6e7dbb8.jpg', 'solo artist', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payout_accounts`
--

CREATE TABLE `payout_accounts` (
  `account_id` int(11) NOT NULL,
  `payout_method` varchar(455) NOT NULL,
  `musician_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payout_accounts`
--

INSERT INTO `payout_accounts` (`account_id`, `payout_method`, `musician_id`) VALUES
(6, 'BPI', 118),
(7, '7 Eleven', 111),
(9, 'GCash', 115);

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE `pins` (
  `musician_id` int(11) NOT NULL,
  `flair_pin_src` varchar(255) NOT NULL,
  `flair_pin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pins`
--

INSERT INTO `pins` (`musician_id`, `flair_pin_src`, `flair_pin_id`) VALUES
(118, '757-7574864_bola-pokemon-png.png', 21),
(118, '191125372_478666396724346_3185406203711147051_n.png', 23),
(118, '188690914_132637475516196_6369914816997941424_n.png', 25),
(118, '186486203_312818180251745_1662958283936916903_n.png', 26),
(113, '6182_Valorant_Rank_Valorant.png', 32),
(113, '1093_Platinium_Valorant.png', 33),
(111, '908f95127caf7f739877f9f555807361.png', 34),
(111, '61a2eb96e1ec37eba5969d6b463df2c1.png', 37),
(111, '6961ab1af799f02df28fa74278d78120.png', 40);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `social_media_id` int(11) NOT NULL,
  `musician_id` int(11) NOT NULL,
  `link` varchar(455) NOT NULL,
  `type` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`social_media_id`, `musician_id`, `link`, `type`) VALUES
(6, 111, 'https://open.spotify.com/artist/4DAcJXcjX0zlQAZAPAx4Zb', 'spotify'),
(8, 113, 'https://lolaamourmusic.com/', 'website'),
(9, 113, 'https://twitter.com/lolaamourmusic', 'twitter'),
(10, 113, 'https://www.youtube.com/channel/UC7YhcSdz6o3L_BJDiqisF-g', 'youtube'),
(11, 113, 'https://open.spotify.com/artist/29zSTMejPhY0m7kwNQ9SPI', 'spotify'),
(15, 111, 'https://www.instagram.com/benandbenmusic/', 'instagram'),
(38, 111, 'benandbenbookings@gmail.com', 'email'),
(68, 118, 'https://www.facebook.com/munitheband', 'facebook'),
(71, 118, 'https://www.munimunistudio.com/', 'website'),
(72, 118, 'https://www.instagram.com/munitheband/?hl=en', 'instagram'),
(73, 118, 'https://www.youtube.com/channel/UC8zGeq7BNLBWJLONwb5NPdg', 'youtube'),
(74, 130, 'sportify.com', 'spotify'),
(75, 130, 'sdsdsd.com', 'youtube'),
(86, 111, 'https://www.youtube.com/BenBenMusic1/', 'youtube');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(11) NOT NULL,
  `musician_id` int(11) NOT NULL,
  `username` varchar(455) NOT NULL,
  `spotlight_cnt` int(11) NOT NULL,
  `flair_pin_id` int(11) NOT NULL,
  `stream_id` int(11) NOT NULL,
  `music_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subscription_id`, `musician_id`, `username`, `spotlight_cnt`, `flair_pin_id`, `stream_id`, `music_id`, `video_id`) VALUES
(48, 111, 'roanne', 5, 34, 0, 0, 0),
(51, 111, 'gawr', 7, 37, 0, 0, 0),
(53, 111, 'zen', 8, 34, 0, 0, 0),
(60, 111, 'lolo', 8, 37, 0, 0, 0),
(61, 111, 'tiger', 10, 34, 0, 0, 0),
(64, 111, 'luffy', 10, 37, 0, 0, 0),
(66, 111, 'new', 9, 37, 0, 0, 0),
(68, 111, 'meemo', 10, 34, 0, 0, 0),
(77, 111, 'mimo', 10, 37, 0, 0, 0),
(78, 111, 'ascof', 10, 34, 0, 0, 0),
(79, 111, 'roanne', 5, 34, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(455) NOT NULL,
  `username` varchar(455) NOT NULL,
  `password` varchar(455) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`, `color`) VALUES
(4, 'lily@mail.com', 'lily', '89f288757f4d0693c99b007855fc075e', '2EFFFC'),
(5, 'luffy@mail.com', 'luffy', '48ce5595dfa835bb50f98372671a724c', 'FF902D'),
(6, 'roanne@mail.com', 'roanne', '37bd086afd081714c8672126edb7c651', 'FF902D'),
(7, 'tiger@mail.com', 'tiger', '43b90920409618f188bfc6923f16b9fa', 'FF2D2D'),
(8, 'rica@mail.com', 'rica', 'af539734a008c642ee93133553d74fd0', 'FFCC2D'),
(9, 'bang@mail.com', 'bang', '7b750d8eacfee224ab8f1a92759b4094', '2EADFF'),
(10, 'user123@mail.com', 'user123', 'ee11cbb19052e40b07aac0ca060c23ee', 'FFCC2D'),
(11, 'new@mail.com', 'new', '22af645d1859cb5ca6da0c484f1f37ea', '2EFFFC'),
(12, 'zenzen@mail.com', 'zen', '7e9aedd97b5ec4590edb8281ff12b168', '2EFFFC'),
(13, 'home@mail.com', 'home', '106a6c241b8797f52e1e77317b96a201', 'FF4C7A'),
(14, 'coco@mail.com', 'coco', 'ac0ddf9e65d57b6a56b2453386cd5db5', '2EFFFC'),
(17, 'ben&ben@mail.com', 'Ben&Ben', '43124095e47d90bba37842fdb6550b3f', 'FF2D2D'),
(19, 'lolaamour@mail.com', 'Lola Amour', 'ce729154f338440d08995a7dc66098c8', '2DFFCF'),
(21, 'franco@mail.com', 'Franco', '6dd1411a66159040b7fff30d0097dbe4', 'FF4C7A'),
(23, 'typecast@mail.com', 'Typecast', '2bd78ddcb7022dded3b5d2d496e808fa', '2DFFCF'),
(24, 'rocksteddy@mail.com', 'Rocksteddy', '5d0acb805e26770cfe15b499cfa60cd9', 'FF4CD1'),
(25, 'munimuni@mail.com', 'Munimuni', 'bec5857cbbbd310568a2e5b92312594b', '2EADFF'),
(26, 'autotelic@mail.com', 'Autotelic', '2a6e0d97a7954eb9c1b49fb99f2d2587', 'FF902D'),
(29, 'kuatrokantos@mail.com', 'Kuatro Kantos', 'd3eb37b83f7418e20abf5a67a4114571', '2EADFF'),
(30, 'fourplaymnl@mail.com', 'Fourplay MNL', '5e79ffaade4be618bf31335f51b5a694', '2EADFF'),
(31, 'stwolf@mail.com', 'St. Wolf', 'a04fef170a827ad02becbd8de6aacaa3', 'FF902D'),
(40, 'lagu@mail.com', 'lagu', '97f642beebd5804aa64bdc73e4960780', '2DFFCF'),
(41, 'meow@mail.com', 'meow', '4a4be40c96ac6314e91d93f38043a634', 'FF2D2D'),
(42, 'taylor@mail.com', 'taylor', '7d8bc5f1a8d3787d06ef11c97d4655df', '2EFFFC'),
(43, 'mail@mail.com', 'mail', 'b83a886a5c437ccd9ac15473fd6f1788', 'FF4C7A'),
(44, 'mimiyuh@mail.com', 'mimiyuh', '4342561c0a5b079d8c065cdb9855a27a', 'FF4C7A'),
(45, 'lolo@mail.com', 'lolo', 'd6581d542c7eaf801284f084478b5fcc', 'FF2D2D'),
(48, 'ascof@mail.com', 'ascof', 'be0ebb481d29e1f7b765e0e922746e5e', 'FF2D2D'),
(50, 'lugaw@mail.com', 'lugaw', '6ec4438677855a45552d0ebba61e8f78', '2E5AFF'),
(51, 'molly@mail.com', 'molly', 'ed6658e6f22583ed66fb5e5e735b9e63', 'FF2D2D'),
(52, 'mollie@mail.com', 'mollie', '470e03c04b764e290102c2ef16198110', '2DFFCF'),
(55, 'amateurish@mail.com', 'Amateurish', '605130cabea2fbd0a77c7d8a627a510b', 'B34CFF'),
(57, 'meemo@mail.com', 'meemo', 'f1c272e7f81493bc91433f3bf05300e0', 'B34CFF'),
(58, 'mimo@mail.com', 'mimo', 'f14cb5cf13c016653d8b6ab54def62bb', '2DFFCF'),
(62, 'sleepalley@mail.com', 'Sleep Alley', '1f03789ea448b79d9f770902d97e41bd', 'FF902D'),
(65, 'syd@mail.com', 'Syd', '25771897aed87e4fd1dc96d25081fd35', 'FFCC2D');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `musician_id` int(11) NOT NULL,
  `video_src` varchar(455) NOT NULL,
  `title` varchar(455) NOT NULL,
  `thumbnail` varchar(455) NOT NULL,
  `viewer_cnt` varchar(255) DEFAULT NULL,
  `stream_time` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `musician_id`, `video_src`, `title`, `thumbnail`, `viewer_cnt`, `stream_time`, `price`) VALUES
(8, 111, 'yt1s.com - BenBen  Di Ka Sayang  Official Video.mp4', 'Di Ka Sayang', 'maxresdefault (8).jpg', '680', '24 minutes', 'PREMIUM'),
(9, 111, 'yt1s.com - BenBen  Magpahinga  Official LYRIC Video.mp4', 'Ben&Ben - Magpahinga | Official LYRIC Video', 'maxresdefault (9).jpg', '236', '3 days', 'PREMIUM'),
(10, 111, 'yt1s.com - BenBen  Upuan  Official LYRIC Video.mp4', 'Ben&Ben - Upuan | Official LYRIC Video', 'maxresdefault (10).jpg', '346', '7 days', 'premium'),
(11, 124, 'yt1s.com - TLKDN  ST WOLF OFFICIAL LYRIC VIDEO _v720P.mp4', 'TLKDN - ST. WOLF【 OFFICIAL LYRIC VIDEO 】', 'maxresdefault (11).jpg', '953', '5 days', 'free');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`concert_id`);

--
-- Indexes for table `donate_accounts`
--
ALTER TABLE `donate_accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `featured_imgs`
--
ALTER TABLE `featured_imgs`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `following`
--
ALTER TABLE `following`
  ADD PRIMARY KEY (`following_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `listener`
--
ALTER TABLE `listener`
  ADD PRIMARY KEY (`listener_id`);

--
-- Indexes for table `livestreams`
--
ALTER TABLE `livestreams`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`);

--
-- Indexes for table `musician`
--
ALTER TABLE `musician`
  ADD PRIMARY KEY (`musician_id`);

--
-- Indexes for table `payout_accounts`
--
ALTER TABLE `payout_accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `pins`
--
ALTER TABLE `pins`
  ADD PRIMARY KEY (`flair_pin_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`social_media_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=477;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `concert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `donate_accounts`
--
ALTER TABLE `donate_accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `featured_imgs`
--
ALTER TABLE `featured_imgs`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `following`
--
ALTER TABLE `following`
  MODIFY `following_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `listener`
--
ALTER TABLE `listener`
  MODIFY `listener_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `livestreams`
--
ALTER TABLE `livestreams`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `musician`
--
ALTER TABLE `musician`
  MODIFY `musician_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `payout_accounts`
--
ALTER TABLE `payout_accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pins`
--
ALTER TABLE `pins`
  MODIFY `flair_pin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `social_media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subscription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
