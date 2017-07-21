-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2017 at 09:47 AM
-- Server version: 5.5.48-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `womenvoi_umande`
--

-- --------------------------------------------------------

--
-- Table structure for table `barinfo`
--

CREATE TABLE IF NOT EXISTS `barinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` text NOT NULL,
  `des` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `barinfo`
--

INSERT INTO `barinfo` (`id`, `head`, `des`, `page`) VALUES
(1, 'Description lists', 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.\r\nDonec id elit non mi porta gravida at eget metus.', 'makina'),
(2, 'Description lists', 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.\r\nDonec id elit non mi porta gravida at eget metus.', 'sara'),
(3, 'Description lists', 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.\r\nDonec id elit non mi porta gravida at eget metus.', 'saba'),
(4, 'Description lists', 'Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.\r\nDonec id elit non mi porta gravida at eget metus.', 'lindi');

-- --------------------------------------------------------

--
-- Table structure for table `budget_lindi`
--

CREATE TABLE IF NOT EXISTS `budget_lindi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost` text NOT NULL,
  `allocated` text NOT NULL,
  `used` text NOT NULL,
  `variance` text NOT NULL,
  `head` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `budget_lindi`
--

INSERT INTO `budget_lindi` (`id`, `cost`, `allocated`, `used`, `variance`, `head`) VALUES
(1, '200 million', '150 mmillion', '100 millionn', '50 million', 'water'),
(2, '200 million', '150 mmillion', '100 millionn', '50 million', 'health'),
(3, '200 million', '150 mmillion', '100 millionn', '50 million', 'edu'),
(4, '200 million', '150 mmillion', '100 millionn', '50 million', 'san'),
(5, '200 million', '150 mmillion', '100 millionn', '50 million', 'solid'),
(6, '200 million', '150 mmillion', '100 millionn', '50 million', 'drain'),
(7, '200 million', '150 mmillion', '100 millionn', '50 million', 'energy'),
(8, '200 million', '150 mmillion', '100 millionn', '50 million', 'road');

-- --------------------------------------------------------

--
-- Table structure for table `budget_makina`
--

CREATE TABLE IF NOT EXISTS `budget_makina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost` text NOT NULL,
  `allocated` text NOT NULL,
  `used` text NOT NULL,
  `variance` text NOT NULL,
  `head` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `budget_makina`
--

INSERT INTO `budget_makina` (`id`, `cost`, `allocated`, `used`, `variance`, `head`) VALUES
(1, '120 million', '115 million', '110 million', '123 million', 'water'),
(2, '210 million', '210 mmillion', '210 million', '250 million', 'health'),
(3, '320 million', '315 million', '3100 million', '345 million', 'edu'),
(4, '420 million', '450 mmillion', '400 millionn', '450 million', 'san'),
(5, '520 million', '515 mmillion', '510 millionn', '55 million', 'solid'),
(6, '600 million', '650 mmillion', '60 millionn', '650 million', 'drain'),
(7, '720 million', '715 mmillion', '710 millionn', '75 million', 'energy'),
(8, '800 million', '850 mmillion', '80 millionn', '80 million', 'road');

-- --------------------------------------------------------

--
-- Table structure for table `budget_saba`
--

CREATE TABLE IF NOT EXISTS `budget_saba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost` text NOT NULL,
  `allocated` text NOT NULL,
  `used` text NOT NULL,
  `variance` text NOT NULL,
  `head` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `budget_saba`
--

INSERT INTO `budget_saba` (`id`, `cost`, `allocated`, `used`, `variance`, `head`) VALUES
(1, '2000 million', '1500 mmillion', '1000 millionn', '500 million', 'water'),
(2, '200 million', '150 mmillion', '100 millionn', '50 million', 'health'),
(3, '200 million', '150 mmillion', '100 millionn', '50 million', 'edu'),
(4, '200 million', '150 mmillion', '100 millionn', '50 million', 'san'),
(5, '200 million', '150 mmillion', '100 millionn', '50 million', 'solid'),
(6, '200 million', '150 mmillion', '100 millionn', '50 million', 'drain'),
(7, '200 million', '150 mmillion', '100 millionn', '50 million', 'energy'),
(8, '200 million', '150 mmillion', '100 millionn', '50 million', 'road');

-- --------------------------------------------------------

--
-- Table structure for table `budget_sara`
--

CREATE TABLE IF NOT EXISTS `budget_sara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost` text NOT NULL,
  `allocated` text NOT NULL,
  `used` text NOT NULL,
  `variance` text NOT NULL,
  `head` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `budget_sara`
--

INSERT INTO `budget_sara` (`id`, `cost`, `allocated`, `used`, `variance`, `head`) VALUES
(1, '200 million', '150 mmillion', '100 millionn', '50 million', 'water'),
(2, '200 million', '150 mmillion', '100 millionn', '50 million', 'health'),
(3, '200 million', '150 mmillion', '100 millionn', '50 million', 'edu'),
(4, '200 million', '150 mmillion', '100 millionn', '50 million', 'san'),
(5, '200 million', '150 mmillion', '100 millionn', '50 million', 'solid'),
(6, '200 million', '150 mmillion', '100 millionn', '50 million', 'drain'),
(7, '200 million', '150 mmillion', '100 millionn', '50 million', 'energy'),
(8, '2 million', '150 mmillion', '100 million', '50 million', 'road');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pob` text NOT NULL,
  `loc` text NOT NULL,
  `phone` text NOT NULL,
  `mail` text NOT NULL,
  `hours` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `pob`, `loc`, `phone`, `mail`, `hours`, `url`) VALUES
(1, ' Umande Trust<br> P.O. BOX 43691-00100,<br> Nairobi, Kenya.', 'Kibra Ground,Off Kibera Drive', '0772092343', 'info@umande.org', ' 8a.m - 5 p.m', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.781210672407!2d36.786886314754035!3d-1.3064199990471481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMTgnMjMuMSJTIDM2wrA0NycyMC43IkU!5e0!3m2!1sen!2s!4v1491825853835');

-- --------------------------------------------------------

--
-- Table structure for table `demo_data`
--

CREATE TABLE IF NOT EXISTS `demo_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `makina` text NOT NULL,
  `sara` text NOT NULL,
  `lindi` text NOT NULL,
  `laini` text NOT NULL,
  `head` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `demo_data`
--

INSERT INTO `demo_data` (`id`, `makina`, `sara`, `lindi`, `laini`, `head`) VALUES
(1, '0.70', '1.00', '0.50', '0.40', 'area'),
(2, '1000', '2000', '3000', '4000', 'density'),
(3, '25,242', '54,347', '35,158', '28,182', 'population'),
(4, '650', '590', '600', '890', 'male'),
(5, '500', '780', '850', '450', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `dev_lindi`
--

CREATE TABLE IF NOT EXISTS `dev_lindi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planned` text NOT NULL,
  `ongoing` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dev_lindi`
--

INSERT INTO `dev_lindi` (`id`, `planned`, `ongoing`) VALUES
(1, 'Water pump installations', 'Borehole drillings'),
(2, 'Parafin pump installation', 'church painting'),
(3, 'Electricity installation lindi', 'road construction lindi');

-- --------------------------------------------------------

--
-- Table structure for table `dev_makina`
--

CREATE TABLE IF NOT EXISTS `dev_makina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planned` text NOT NULL,
  `ongoing` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dev_makina`
--

INSERT INTO `dev_makina` (`id`, `planned`, `ongoing`) VALUES
(1, 'Water pump installation', 'Borehole drilling'),
(2, 'Parafin pump installation', 'church painting'),
(3, 'Electricity installation', 'road construction'),
(6, 'Parafin pump installation makina', 'Parafin pump installation');

-- --------------------------------------------------------

--
-- Table structure for table `dev_saba`
--

CREATE TABLE IF NOT EXISTS `dev_saba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planned` text NOT NULL,
  `ongoing` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dev_saba`
--

INSERT INTO `dev_saba` (`id`, `planned`, `ongoing`) VALUES
(1, 'Water pump installations', 'Borehole drillings'),
(2, 'Parafin pump installation', 'church painting'),
(3, 'Electricity installation', 'road construction saba');

-- --------------------------------------------------------

--
-- Table structure for table `dev_sara`
--

CREATE TABLE IF NOT EXISTS `dev_sara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `planned` text NOT NULL,
  `ongoing` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dev_sara`
--

INSERT INTO `dev_sara` (`id`, `planned`, `ongoing`) VALUES
(1, 'Water pump installation', 'Borehole drilling'),
(2, 'Parafin pump installation', 'church painting'),
(3, 'Electricity installation sara', 'road construction sara');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `named` text NOT NULL,
  `sub` text NOT NULL,
  `des` text NOT NULL,
  `link` text NOT NULL,
  `date` datetime NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `named`, `sub`, `des`, `link`, `date`, `page`) VALUES
(1, 'Newsletters', 'Download our March newsletters', 'Today Umande held the first of many meetings for the Women''s Voices project champions. The 20 women champions met with some of the Umande staff at the Harlequins Suites Hotel', 'http://localhost/umande/downloads/Safaricom_Blaze_TestCases.xlsx', '2017-03-22 16:02:45', 'makina'),
(2, 'Article about bio gas', 'Download this article and share', 'This article was written by .....', '#', '2017-03-22 16:02:45', 'makina'),
(3, 'Newsletter', 'Download our March newsletter', 'This is our first newsletter..............', '#', '2017-03-22 16:02:45', 'saba'),
(4, 'Article about bio gas', 'Download this article and share', 'This article was written by .....', '#', '2017-03-22 16:02:45', 'sara');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namew` text NOT NULL,
  `venue` text NOT NULL,
  `datew` text NOT NULL,
  `timew` text NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `namew`, `venue`, `datew`, `timew`, `description`, `status`, `page`) VALUES
(3, 'Facebook Live', 'Facebook', '02/03/2017', '12:45 pm', 'Facebook Event will be officiated by His excellency the ...............', 'Cancelled', 'sara'),
(4, 'Facebook Live', 'Facebook', '02/03/2017', '12:45 pm', 'Facebook Event will be officiated by His excellency the ...............', 'Cancelled', 'saba'),
(5, 'Facebook Live', 'Facebook', '02/03/2017', '12:45 pm', 'Facebook Event will be officiated by His excellency the ...............', 'Cancelled', 'lindi'),
(9, 'Public Forum on Good Governance', 'Labor Hall Makina', '06/14/2017', '10:00 AM', 'The women champions have decided to hold a session on good governance and engage Makina residents on the topic so that people make informed decisions', 'Upcoming', 'makina');

-- --------------------------------------------------------

--
-- Table structure for table `hevents`
--

CREATE TABLE IF NOT EXISTS `hevents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(200) NOT NULL,
  `venue` text NOT NULL,
  `title` text NOT NULL,
  `sdate` varchar(200) NOT NULL,
  `edate` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `tarehes` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `hevents`
--

INSERT INTO `hevents` (`id`, `event`, `venue`, `title`, `sdate`, `edate`, `status`, `tarehes`) VALUES
(11, 'Social dialogue capacity building session', 'Kidyot Bio-centre Sarang''ombe Ward', '', '02/03/2017', '02/03/2017', 'Upcoming', '2017-02-01 13:06:00'),
(12, 'Radio talk show', 'Pamoja FM studio', '', '02/07/2017', '02/07/2017', 'Upcoming', '2017-02-01 13:07:02'),
(13, 'Radio talk show', 'Pamoja FM studio', '', '02/14/2017', '02/14/2017', 'Upcoming', '2017-02-01 13:07:40'),
(14, 'Radio talk show', 'Pamoja FM studio', '', '02/21/2017', '02/21/2017', 'Upcoming', '2017-02-01 13:08:04'),
(15, 'Electing Competent Leaders', 'Mashimoni Hall Laini Saba (2 - 4 pm)', '', '06/17/2017', '06/17/2017', 'Upcoming', '2017-06-13 06:51:05'),
(16, 'Electing Competent Leaders', 'Bethel School Sarangombe (10-12noon)', '', '06/20/2017', '06/20/2017', 'Upcoming', '2017-06-13 06:51:40'),
(17, 'Good Governance', 'Labor Hall Makina (10-12 noon)', '', '06/14/2017', '06/14/2017', 'Upcoming', '2017-06-13 06:53:21'),
(18, 'Peace Campaign', 'Lindi Usafi Bio centre (10 -12 noon)', '', '06/14/2017', '06/14/2017', 'Upcoming', '2017-06-13 06:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `hgallery`
--

CREATE TABLE IF NOT EXISTS `hgallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `maintitle` text NOT NULL,
  `title` text NOT NULL,
  `descp` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `hgallery`
--

INSERT INTO `hgallery` (`id`, `maintitle`, `title`, `descp`, `image`, `date`) VALUES
(1, 'Gallery', 'HTML to PDF', 'How to Convert HTML to PDF in PHP with fpdf', '1.jpg', '2014-01-23 02:53:13'),
(8, '', 'Leadership and Governance Capacity Building Session ', 'Training of women champions', 'DSCN0113.JPG', '2017-02-01 11:56:30'),
(3, '', 'Facebook Style Scroll Bar', 'How to create Facebook style scroll bar with jQuery and CSS.', '3.jpeg', '2014-01-23 02:54:40'),
(4, '', 'Instagram OAuth', 'How to login with Instagram OAuth using PHP', '4.JPG', '2014-01-23 02:54:40'),
(9, '', 'Leadership and Governance Capacity Building Session ', 'Group work ', 'DSCN0017.JPG', '2017-02-01 12:00:18'),
(10, '', 'Leadership and Governance Capacity Building Session ', 'Group work', 'DSCN0022.JPG', '2017-02-01 12:13:24'),
(11, '', 'Radio talk show at Pamoja FM', 'Awareness creation on women engagement', '20170131_080318.jpg', '2017-02-01 13:01:52'),
(14, '', 'Sarangombe Voice Centre', 'Information and meeting centre', 'TOSHA 1 Bio Centre.JPG', '2017-06-13 07:10:32'),
(15, '', 'Lindi voice centre', 'Lindi Usafi Bio Centre', 'Lindi Usafi Bio Centre.JPG', '2017-06-13 07:23:20'),
(17, '', 'Makina Voice Centre', 'Information and meeting centre', 'Stara Women Bio Centre.JPG', '2017-06-13 07:33:52'),
(18, '', 'Laini Saba Voice Centre', 'Information and meeting centre', 'Soweto Highrise Bio Centre.jpg', '2017-06-13 07:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `hlocation`
--

CREATE TABLE IF NOT EXISTS `hlocation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `linfo` text NOT NULL,
  `description` text NOT NULL,
  `cord` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hlocation`
--

INSERT INTO `hlocation` (`id`, `name`, `linfo`, `description`, `cord`) VALUES
(1, 'Sarangombe Voice Centre', 'TOSHA I', 'Gatwekera', '1&deg;18''31.22"S, 36&deg;47''23.44"E'),
(2, 'Makina Voice Centre', 'Stara bio centre', 'Kajiado', '1&deg;18''31.22"S, 36&deg;47''23.44"E'),
(3, 'Laini Saba Voice centres', ' Soweto Highrise Bio centre', 'Laini saba', '1&deg;18''46.41"S, 36&deg;47''52.92"E'),
(4, 'Lindi  Voice centre', 'Lindi Usafi', 'Lindi Usafi', '1&deg;18''50.28"S, 36&deg;47''35.71"E');

-- --------------------------------------------------------

--
-- Table structure for table `hmap`
--

CREATE TABLE IF NOT EXISTS `hmap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(500) NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hmap`
--

INSERT INTO `hmap` (`id`, `url`, `title`) VALUES
(1, 'https://www.google.com/maps/d/embed?mid=1BNz5FR1aFawBJTCdvcqP56gROCw', 'Umande Map');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE IF NOT EXISTS `hobbies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hobby` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(3000) NOT NULL,
  `title` text NOT NULL,
  `info` varchar(20000) NOT NULL,
  `remo` varchar(20000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `logo`, `title`, `info`, `remo`) VALUES
(1, 'uploads/main.jpeg', 'Project Introduction.', 'There is a gap in gender representation among the people of Kibera in regards to having the womenâ€™s voices heard on issues involving their community and the society they live in. This project, Womenâ€™s Voices, seeks to capture womenâ€™s views and ideas about county development, and make sure, these ideas are shared with the relevant authorities. It looks to address four main themes of governance, transparency, accountability, and anti-corruption. ""', ' To do this, we plan to train women in the community to be representatives of the rest of the community, called women voices champions. These women will be in charge of collection and analyzing data from and about the community as well as other administrative work. The women will also be in charge of updating a dashboard that connects the project to the community and the rest of the world through social media, and updating the dashboard with real time information about what is happening in the community. The information they work to collect and present will be shared with the relevant county officials, so they can put the communityâ€™s thoughts into action. The womenâ€™s voices champions will help to give voice to other female members of the community whose ideas and opinions may not have been able to be shared without this project. Womenâ€™s Voices will be run through four of Kiberaâ€™s bio-sanitation facilities since they are already a focal point for men and women in the community.');

-- --------------------------------------------------------

--
-- Table structure for table `hquotes`
--

CREATE TABLE IF NOT EXISTS `hquotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `inspiretitle` text NOT NULL,
  `inspire` varchar(2000) NOT NULL,
  `populartitle` text NOT NULL,
  `it` varchar(5000) NOT NULL,
  `popular` varchar(2000) NOT NULL,
  `pt` varchar(5000) NOT NULL,
  `motivate` varchar(2000) NOT NULL,
  `motivatetitle` text NOT NULL,
  `mt` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hquotes`
--

INSERT INTO `hquotes` (`id`, `title`, `inspiretitle`, `inspire`, `populartitle`, `it`, `popular`, `pt`, `motivate`, `motivatetitle`, `mt`) VALUES
(1, 'Quotes of the day', 'Inspirational Quotes', 'If you don''t know the guy on the other side of the world, love him anyway because he''s just like you. He has the same dreams, the same hopes and fears. It''s one world, pal. We''re all neighbors.', 'Popular Quotes', 'Frank Sinatra', 'Two things are infinite: the universe and human stupidity; and I''m not sure about the universe.', 'Albert Einstein', 'The will to win, the desire to succeed, the urge to reach your full potential... these are the keys that will unlock the door to personal excellence', 'Motivational Quotes', 'Confucius');

-- --------------------------------------------------------

--
-- Table structure for table `hstrip`
--

CREATE TABLE IF NOT EXISTS `hstrip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(1100) NOT NULL,
  `info` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hstrip`
--

INSERT INTO `hstrip` (`id`, `number`, `info`) VALUES
(1, '5,210', 'AUDIENCE'),
(2, '10,390', 'DAYS'),
(3, 'Ksh.24,813,153', 'BUDGET'),
(4, '1200 Kms', 'AREA COVERED');

-- --------------------------------------------------------

--
-- Table structure for table `lagallery`
--

CREATE TABLE IF NOT EXISTS `lagallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `dsc` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `lagallery`
--

INSERT INTO `lagallery` (`id`, `title`, `dsc`, `image`, `date`) VALUES
(1, 'HTML to PDF', 'How to Convert HTML to PDF in PHP with fpdf', '1.jpg', '2014-01-23 02:53:13'),
(2, 'Bootstrap Contact Form', 'How to create Contact Form using Bootstrap', '2.jpg', '2014-01-23 02:53:13'),
(3, 'Facebook Style Scroll Bar', 'How to create Facebook style scroll bar with jQuery and CSS.', '3.jpeg', '2014-01-23 02:54:40'),
(4, 'Instagram OAuth', 'How to login with Instagram OAuth using PHP', '4.JPG', '2014-01-23 02:54:40'),
(5, 'PDO database connection in PHP', 'How to use PDO database connection in PHP', '5.JPG', '2014-01-23 02:56:49'),
(6, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '6.jpg', '2014-01-23 02:56:49'),
(7, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '7.png', '2014-01-23 02:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `laproimg`
--

CREATE TABLE IF NOT EXISTS `laproimg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `laproimg`
--

INSERT INTO `laproimg` (`id`, `title`, `desc`, `image`, `date`) VALUES
(1, 'HTML to PDF', 'How to Convert HTML to PDF in PHP with fpdf', '1.jpg', '2014-01-23 02:53:13'),
(2, 'Bootstrap Contact Form', 'How to create Contact Form using Bootstrap', '2.jpg', '2014-01-23 02:53:13'),
(3, 'Facebook Style Scroll Bar', 'How to create Facebook style scroll bar with jQuery and CSS.', '3.jpeg', '2014-01-23 02:54:40'),
(4, 'Instagram OAuth', 'How to login with Instagram OAuth using PHP', '4.JPG', '2014-01-23 02:54:40'),
(5, 'PDO database connection in PHP', 'How to use PDO database connection in PHP', '5.JPG', '2014-01-23 02:56:49'),
(6, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '6.jpg', '2014-01-23 02:56:49'),
(7, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '7.png', '2014-01-23 02:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `ligallery`
--

CREATE TABLE IF NOT EXISTS `ligallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `dsc` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ligallery`
--

INSERT INTO `ligallery` (`id`, `title`, `dsc`, `image`, `date`) VALUES
(1, 'HTML to PDF', 'How to Convert HTML to PDF in PHP with fpdf', '1.jpg', '2014-01-23 02:53:13'),
(2, 'Bootstrap Contact Form', 'How to create Contact Form using Bootstrap', '2.jpg', '2014-01-23 02:53:13'),
(3, 'Facebook Style Scroll Bar', 'How to create Facebook style scroll bar with jQuery and CSS.', '3.jpeg', '2014-01-23 02:54:40'),
(4, 'Instagram OAuth', 'How to login with Instagram OAuth using PHP', '4.JPG', '2014-01-23 02:54:40'),
(5, 'PDO database connection in PHP', 'How to use PDO database connection in PHP', '5.JPG', '2014-01-23 02:56:49'),
(6, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '6.jpg', '2014-01-23 02:56:49'),
(7, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '7.png', '2014-01-23 02:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `lindicurrent`
--

CREATE TABLE IF NOT EXISTS `lindicurrent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `complete` text NOT NULL,
  `des` text NOT NULL,
  `per` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lindicurrent`
--

INSERT INTO `lindicurrent` (`id`, `name`, `complete`, `des`, `per`, `type`) VALUES
(1, 'Tembea Kenya', '60% Complete', 'The project was allocated a budget of Ksh. 10m', '60%', 'county'),
(2, 'Gawa Umeme', '70% Complete', 'The project was allocated a budget of Ksh. 10m', '70%', 'ngo'),
(3, 'Bio yetu', '40% Complete', 'The project was allocated a budget of Ksh. 10m', '40%', 'cbo'),
(4, 'Cow ', '30% Complete', 'The project was allocated a budget of Ksh. 10m', '30%', 'county'),
(5, 'Gawa Umeme', '70% Complete', 'The project was allocated a budget of Ksh. 10m', '70%', 'ngo'),
(6, 'Gawa Umeme', '90% Complete', 'The project was allocated a budget of Ksh. 10m', '90%', 'cbo');

-- --------------------------------------------------------

--
-- Table structure for table `lindi_cproject`
--

CREATE TABLE IF NOT EXISTS `lindi_cproject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `sdate` text NOT NULL,
  `edate` text NOT NULL,
  `status` text NOT NULL,
  `org` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lindi_cproject`
--

INSERT INTO `lindi_cproject` (`id`, `name`, `sdate`, `edate`, `status`, `org`) VALUES
(1, 'Project 1', '1/11/2015', '10/12/2016', 'complete', 'county'),
(2, 'Project 3', '1/11/2015', '10/12/2016', 'complete', 'ngo'),
(3, 'Project 5', '1/11/2015', '10/12/2016', 'complete', 'cbo'),
(4, 'Project 2', '1/11/2015', '10/12/2016', 'complete', 'county'),
(5, 'Project 4', '1/11/2015', '10/12/2016', 'complete', 'ngo'),
(6, 'Project 6', '1/11/2015', '10/12/2016', 'complete', 'cbo');

-- --------------------------------------------------------

--
-- Table structure for table `liproimg`
--

CREATE TABLE IF NOT EXISTS `liproimg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `liproimg`
--

INSERT INTO `liproimg` (`id`, `title`, `desc`, `image`, `date`) VALUES
(1, 'HTML to PDF', 'How to Convert HTML to PDF in PHP with fpdf', '1.jpg', '2014-01-23 02:53:13'),
(2, 'Bootstrap Contact Form', 'How to create Contact Form using Bootstrap', '2.jpg', '2014-01-23 02:53:13'),
(3, 'Facebook Style Scroll Bar', 'How to create Facebook style scroll bar with jQuery and CSS.', '3.jpeg', '2014-01-23 02:54:40'),
(4, 'Instagram OAuth', 'How to login with Instagram OAuth using PHP', '4.JPG', '2014-01-23 02:54:40'),
(5, 'PDO database connection in PHP', 'How to use PDO database connection in PHP', '5.JPG', '2014-01-23 02:56:49'),
(6, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '6.jpg', '2014-01-23 02:56:49'),
(7, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '7.png', '2014-01-23 02:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `magallery`
--

CREATE TABLE IF NOT EXISTS `magallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `dsc` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `magallery`
--

INSERT INTO `magallery` (`id`, `title`, `dsc`, `image`, `date`) VALUES
(2, 'Clean up', 'Makina area clean organised by the area Ward Administrator', '20170302_114410.jpg', '2014-01-23 02:53:13'),
(9, 'Makina Voice centre', 'Stara Bio-centre, an avenue for citizens to connect  ', 'Stara Women Bio Centre.JPG', '2017-06-12 10:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `sname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `makinacurrent`
--

CREATE TABLE IF NOT EXISTS `makinacurrent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `complete` text NOT NULL,
  `des` text NOT NULL,
  `per` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `makinacurrent`
--

INSERT INTO `makinacurrent` (`id`, `name`, `complete`, `des`, `per`, `type`) VALUES
(1, 'Tembea Kenya', '60% Complete', 'The project was allocated a budget of Ksh. 10m', '60%', 'county'),
(2, 'Gawa Umeme', '70% Complete', 'The project was allocated a budget of Ksh. 10m', '70%', 'ngo'),
(3, 'Bio yetu', '40% Complete', 'The project was allocated a budget of Ksh. 10m', '40%', 'cbo'),
(4, 'Cow ', '30% Complete', 'The project was allocated a budget of Ksh. 10m', '30%', 'county'),
(5, 'Gawa Umeme', '70% Complete', 'The project was allocated a budget of Ksh. 10m', '70%', 'ngo'),
(6, 'Gawa Umeme', '90% Complete', 'The project was allocated a budget of Ksh. 10m', '90%', 'cbo'),
(7, 'project 2', '', 'sdsdsdsdsd', '12%', 'county');

-- --------------------------------------------------------

--
-- Table structure for table `makina_cproject`
--

CREATE TABLE IF NOT EXISTS `makina_cproject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `sdate` text NOT NULL,
  `edate` text NOT NULL,
  `status` text NOT NULL,
  `org` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `makina_cproject`
--

INSERT INTO `makina_cproject` (`id`, `name`, `sdate`, `edate`, `status`, `org`) VALUES
(1, 'Project 1', '1/11/2015', '10/12/2016', 'complete', 'county'),
(2, 'Project 3', '1/11/2015', '10/12/2016', 'complete', 'ngo'),
(3, 'Project 5', '1/11/2015', '10/12/2016', 'complete', 'cbo'),
(4, 'Project 2', '1/11/2015', '10/12/2016', 'complete', 'county'),
(5, 'Project 4', '1/11/2015', '10/12/2016', 'complete', 'ngo'),
(6, 'Project 6', '1/11/2015', '10/12/2016', 'complete', 'cbo'),
(7, 'project 3', '05/01/2017', '05/08/2017', 'complete', 'county');

-- --------------------------------------------------------

--
-- Table structure for table `maproimg`
--

CREATE TABLE IF NOT EXISTS `maproimg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `maproimg`
--

INSERT INTO `maproimg` (`id`, `title`, `desc`, `image`, `date`) VALUES
(1, 'HTML to PDF', 'How to Convert HTML to PDF in PHP with fpdf', '1.jpg', '2014-01-23 02:53:13'),
(2, 'Bootstrap Contact Form', 'How to create Contact Form using Bootstrap', '2.jpg', '2014-01-23 02:53:13'),
(3, 'Facebook Style Scroll Bar', 'How to create Facebook style scroll bar with jQuery and CSS.', '3.jpeg', '2014-01-23 02:54:40'),
(4, 'Instagram OAuth', 'How to login with Instagram OAuth using PHP', '4.JPG', '2014-01-23 02:54:40'),
(5, 'PDO database connection in PHP', 'How to use PDO database connection in PHP', '5.JPG', '2014-01-23 02:56:49'),
(6, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '6.jpg', '2014-01-23 02:56:49'),
(7, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '7.png', '2014-01-23 02:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `mediaimg`
--

CREATE TABLE IF NOT EXISTS `mediaimg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `maintitle` text NOT NULL,
  `title` text NOT NULL,
  `descp` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `mediaimg`
--

INSERT INTO `mediaimg` (`id`, `maintitle`, `title`, `descp`, `image`, `date`) VALUES
(1, 'Media Gallery', 'HTML to PDF', 'How to Convert HTML to PDF in PHP with fpdf', '1.jpg', '2014-01-23 02:53:13'),
(3, '', 'Facebook Style Scroll Bar', 'How to create Facebook style scroll bar with jQuery and CSS.', '3.jpeg', '2014-01-23 02:54:40'),
(4, '', 'Instagram OAuth', 'How to login with Instagram OAuth using PHP', '4.JPG', '2014-01-23 02:54:40'),
(5, '', 'PDO database connection in PHP', 'How to use PDO database connection in PHP', '5.JPG', '2014-01-23 02:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`) VALUES
(1, '11.PNG'),
(2, '2.PNG'),
(3, '3.PNG'),
(4, '4.PNG'),
(5, '5.PNG'),
(6, '6.PNG'),
(7, '7.PNG'),
(8, '8.PNG'),
(9, '9.PNG'),
(10, '10.PNG'),
(11, '12.PNG'),
(12, '13.PNG'),
(13, '14.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `pdes`
--

CREATE TABLE IF NOT EXISTS `pdes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` text NOT NULL,
  `des` text NOT NULL,
  `page` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pdes`
--

INSERT INTO `pdes` (`id`, `head`, `des`, `page`) VALUES
(1, 'Sub Heading', 'There is a gap in gender representation among the people of Kibera in regards to having the women''s voices heard on issues involving their community and the society they live in. This project, Women''s Voices, seeks to capture women''s views and ideas about county development, and make sure, these ideas are shared with the relevant authorities. It looks to address four main themes of governance, transparency, accountability, and anti-corruption. To do this, we plan to train women in the community to be representatives of the rest of the community, called women voices champions.', 'makina'),
(2, 'Sub Heading', 'There is a gap in gender representation among the people of Kibera in regards to having the women''s voices heard on issues involving their community and the society they live in. This project, Women''s Voices, seeks to capture women''s views and ideas about county development, and make sure, these ideas are shared with the relevant authorities. It looks to address four main themes of governance, transparency, accountability, and anti-corruption. To do this, we plan to train women in the community to be representatives of the rest of the community, called women voices champions.', 'sara'),
(3, 'Sub Heading', 'There is a gap in gender representation among the people of Kibera in regards to having the women''s voices heard on issues involving their community and the society they live in. This project, Women''s Voices, seeks to capture women''s views and ideas about county development, and make sure, these ideas are shared with the relevant authorities. It looks to address four main themes of governance, transparency, accountability, and anti-corruption. To do this, we plan to train women in the community to be representatives of the rest of the community, called women voices champions.', 'saba'),
(4, 'Sub Heading', 'There is a gap in gender representation among the people of Kibera in regards to having the women''s voices heard on issues involving their community and the society they live in. This project, Women''s Voices, seeks to capture women''s views and ideas about county development, and make sure, these ideas are shared with the relevant authorities. It looks to address four main themes of governance, transparency, accountability, and anti-corruption. To do this, we plan to train women in the community to be representatives of the rest of the community, called women voices champions.', 'lindi');

-- --------------------------------------------------------

--
-- Table structure for table `pieinfo`
--

CREATE TABLE IF NOT EXISTS `pieinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `des` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pieinfo`
--

INSERT INTO `pieinfo` (`id`, `des`, `page`) VALUES
(1, 'Umande brings together teams of resource persons who share a passion and commitment to learn from, share and achieve lasting change with people. This team comprises community organizers, academics, geo-informatics, urban planning, human rights, civil engineering, social scientists, environmental, gender, youth and enterprise development resource persons Team members have several years of experience from diverse research, civil society and public sector agencies .', 'makina'),
(2, 'Umande brings together teams of resource persons who share a passion and commitment to learn from, share and achieve lasting change with people. This team comprises community organizers, academics, geo-informatics, urban planning, human rights, civil engineering, social scientists, environmental, gender, youth and enterprise development resource persons Team members have several years of experience from diverse research, civil society and public sector agencies .', 'sara'),
(3, 'Umande brings together teams of resource persons who share a passion and commitment to learn from, share and achieve lasting change with people. This team comprises community organizers, academics, geo-informatics, urban planning, human rights, civil engineering, social scientists, environmental, gender, youth and enterprise development resource persons Team members have several years of experience from diverse research, civil society and public sector agencies .', 'saba'),
(4, 'Umande brings together teams of resource persons who share a passion and commitment to learn from, share and achieve lasting change with people. This team comprises community organizers, academics, geo-informatics, urban planning, human rights, civil engineering, social scientists, environmental, gender, youth and enterprise development resource persons Team members have several years of experience from diverse research, civil society and public sector agencies .', 'lindi');

-- --------------------------------------------------------

--
-- Table structure for table `planned`
--

CREATE TABLE IF NOT EXISTS `planned` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `des` text NOT NULL,
  `page` text NOT NULL,
  `budget` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `planned`
--

INSERT INTO `planned` (`id`, `name`, `des`, `page`, `budget`) VALUES
(1, 'Project 1', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf ', 'makina', '10.6 M'),
(2, 'Project 2', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf ', 'makina', '60 m'),
(3, 'Project 3', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf ', 'makina', '60 m'),
(4, 'Project 1', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf ', 'sara', '10.6 M'),
(5, 'Project 2', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf ', 'sara', '60 m'),
(6, 'Project 2', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf ', 'lindi', '60 m'),
(7, 'Project 2', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf ', 'saba', '60 m');

-- --------------------------------------------------------

--
-- Table structure for table `plans_county`
--

CREATE TABLE IF NOT EXISTS `plans_county` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `types` text NOT NULL,
  `period` text NOT NULL,
  `location` text NOT NULL,
  `budget` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `plans_county`
--

INSERT INTO `plans_county` (`id`, `types`, `period`, `location`, `budget`, `page`) VALUES
(1, 'Construction of ssdsdsd', '2 months', 'Umande', '20,524,888', 'makina'),
(2, 'Construction of classroom', '2 months', 'Umande', '20,524,888', 'sara'),
(3, 'Construction of classroom', '2 months', 'Umande', '20,524,888', 'saba'),
(4, 'Construction of classroom', '2 months', 'Umande', '20,524,888', 'lindi');

-- --------------------------------------------------------

--
-- Table structure for table `plan_comm`
--

CREATE TABLE IF NOT EXISTS `plan_comm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prio` text NOT NULL,
  `description` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `plan_comm`
--

INSERT INTO `plan_comm` (`id`, `prio`, `description`, `page`) VALUES
(1, 'Bio gas', 'Provide bio gas to 233 households', 'makina'),
(2, 'Bio gas', 'Provide bio gas to 23345 households', 'saba'),
(3, 'Bio gas', 'Provide bio gas to 23345 households', 'sara'),
(4, 'Bio gas', 'Provide bio gas to 23345 households', 'lindi');

-- --------------------------------------------------------

--
-- Table structure for table `prioinfo`
--

CREATE TABLE IF NOT EXISTS `prioinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `des` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prioinfo`
--

INSERT INTO `prioinfo` (`id`, `des`, `page`) VALUES
(1, 'Umande brings together teams of resource persons who share a passion and commitment to learn from, share and achieve lasting change with people. This team comprises community organizers, academics, geo-informatics, urban planning, human rights, civil engineering, social scientists, environmental, gender, youth and enterprise development resource persons Team members have several years of experience from diverse research, civil society and public sector agencies .', 'makina');

-- --------------------------------------------------------

--
-- Table structure for table `prior_com`
--

CREATE TABLE IF NOT EXISTS `prior_com` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `makina` text NOT NULL,
  `sara` text NOT NULL,
  `laini` text NOT NULL,
  `lindi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prior_com`
--

INSERT INTO `prior_com` (`id`, `makina`, `sara`, `laini`, `lindi`) VALUES
(1, 'Buying this and that', 'Buying this and that', 'Buying this and that', 'Buying this and that'),
(3, 'makina', 'makina', 'makina', 'makina');

-- --------------------------------------------------------

--
-- Table structure for table `prior_county`
--

CREATE TABLE IF NOT EXISTS `prior_county` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `makina` text NOT NULL,
  `sara` text NOT NULL,
  `laini` text NOT NULL,
  `lindi` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `named` text NOT NULL,
  `education` text NOT NULL,
  `designation` text NOT NULL,
  `location` text NOT NULL,
  `bio` text NOT NULL,
  `hobby4` text NOT NULL,
  `hobby3` text NOT NULL,
  `hobby2` text NOT NULL,
  `hobby1` text NOT NULL,
  `skill4` text NOT NULL,
  `skill3` text NOT NULL,
  `skill2` text NOT NULL,
  `skill1` text NOT NULL,
  `age` text NOT NULL,
  `image` text NOT NULL,
  `page` text NOT NULL,
  `leader` tinyint(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `named`, `education`, `designation`, `location`, `bio`, `hobby4`, `hobby3`, `hobby2`, `hobby1`, `skill4`, `skill3`, `skill2`, `skill1`, `age`, `image`, `page`, `leader`, `date`) VALUES
(1, 'Grace Wambui', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla ', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', 'Swimming', 'Driving', 'Sky Diving', 'camping', '38', '../media/Grace1.jpg', 'makina', 1, '2014-01-23 02:53:13'),
(15, 'Peres Achieng', 'High School (Form 2)', 'Woman champion', 'Makina, Kibera', 'I am a community health volunteer with a passion in development work. I sensitive the community on health related issues and on women empowerment. ', '', '', ' and sports such as volleyball', 'Learning new ideas', ' health awareness campaigns', ' mobilization', ' facilitation', 'Networking', '46', '../media/Peris Achieng.jpg', 'makina', 2, '2014-01-23 02:53:13'),
(21, 'Swalha Abdallah', 'College', 'Woman champion', 'Makina, Kibera', 'I am a community health volunteer and a social worker in other wards in Kibra. This has enabled me to work and partner with other organisations reaching out to residents', '', '', '', 'Socializing  (interacting with people) and travelling', '', '', '', 'Counselling and Psychology', '31', '../media/20170302_124756.jpg', 'makina', 5, '2014-01-23 02:53:13'),
(22, 'Rehema Rajab', 'College', 'Woman champion', 'Makina, Kibera', 'I am a volunteer at Suluhisho ni wewe support group where I mentor and facilitate women and youth', '', '', ' socializing ', 'Reading inspirational books', '', '', ' Facilitation skills', 'Mentor-ship', '28', '../media/IMG-20170222-WA0117.jpg', 'makina', 6, '2014-01-23 02:53:13'),
(20, 'Zulaika Ahmed', 'Form 4', 'Woman champion', 'Makina, Kibera', 'I am a member of the Kibera Usalama disabled group where my role is to mobilize/collect information on  disability issues within the community', '', '', '', 'Reading the Quran ', '', '', '', 'Working with disabled groups or individuals', '54', '../media/Zulaika Ahmed.jpg', 'makina', 4, '2014-01-23 02:53:13'),
(19, 'Dushman Ramadhan', 'College', 'Woman champion', 'Makina, Kibera', 'I am a member and treasurer of the Bunkers youth group.  The group manages a sanitation facility in the area providing the community with sanitation facilities', '', '', '', 'Reading', '', '', '', 'Accounting', '28', '../media/Dushman Diamadhan.jpg', 'makina', 3, '2014-01-23 02:53:13'),
(23, 'Jane Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'lindi', 1, '2014-01-23 02:53:13'),
(24, 'John Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'lindi', 2, '2014-01-23 02:53:13'),
(25, 'John Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'lindi', 3, '2014-01-23 02:53:13'),
(26, 'John Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'lindi', 4, '2014-01-23 02:53:13'),
(27, 'John Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'lindi', 5, '2014-01-23 02:53:13'),
(28, 'John Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'lindi', 6, '2014-01-23 02:53:13'),
(29, 'Jane Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'sara', 1, '2014-01-23 02:53:13'),
(30, 'John Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'sara', 2, '2014-01-23 02:53:13'),
(31, 'John Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'sara', 3, '2014-01-23 02:53:13'),
(32, 'John Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'sara', 4, '2014-01-23 02:53:13'),
(33, 'John Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'sara', 5, '2014-01-23 02:53:13'),
(34, 'John Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'sara', 6, '2014-01-23 02:53:13'),
(35, 'Jane Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'saba', 1, '2014-01-23 02:53:13'),
(36, 'Jane Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'saba', 2, '2014-01-23 02:53:13'),
(37, 'Jane Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'saba', 3, '2014-01-23 02:53:13'),
(38, 'Jane Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'saba', 4, '2014-01-23 02:53:13'),
(39, 'Jane Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'saba', 5, '2014-01-23 02:53:13'),
(40, 'Jane Doe', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Ward Leader', 'Makina, Kibera', 'I am an outspoken bla bla bla', 'Swimming', 'Driving', 'Sky Diving', 'camping', 'programming', 'Cooking', 'Project management', 'Crowd sourcing', '27', '../media/pp.jpg', 'saba', 6, '2014-01-23 02:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `profile_tbl`
--

CREATE TABLE IF NOT EXISTS `profile_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` text NOT NULL,
  `population` text NOT NULL,
  `village` text NOT NULL,
  `fund` text NOT NULL,
  `mca` text NOT NULL,
  `admin` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `profile_tbl`
--

INSERT INTO `profile_tbl` (`id`, `area`, `population`, `village`, `fund`, `mca`, `admin`, `page`) VALUES
(1, '0.70 km2 ', '25242', '4', '19,000,000', 'Alhad Ahmed Adam', 'Grace Wambui', 'makina'),
(2, '2,236', '55,000', '7', '2,222,333', 'Benazir Omotto', 'Omotto Benazir ', 'lindi'),
(3, '2,236', '55,000', '7', '2,222,333', 'Benazir Omotto', 'Omotto Benazir ', 'sara'),
(4, '2,236', '55,000', '7', '2,222,333', 'Benazir Omotto', 'Omotto Benazir ', 'saba');

-- --------------------------------------------------------

--
-- Table structure for table `proj_status`
--

CREATE TABLE IF NOT EXISTS `proj_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `water` text NOT NULL,
  `health` text NOT NULL,
  `education` text NOT NULL,
  `sanitation` text NOT NULL,
  `waste` text NOT NULL,
  `drain` text NOT NULL,
  `energy` text NOT NULL,
  `road` text NOT NULL,
  `page` text NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `proj_status`
--

INSERT INTO `proj_status` (`id`, `water`, `health`, `education`, `sanitation`, `waste`, `drain`, `energy`, `road`, `page`, `body`) VALUES
(1, '50', '40', '20', '60', '20', '40', '50', '10', 'makina', 'cbo'),
(2, '50', '60', '70', '80', '20', '45', '55', '40', 'makina', 'county'),
(3, '50', '60', '70', '80', '20', '45', '55', '40', 'makina', 'ngo'),
(4, '50', '60', '70', '80', '20', '45', '55', '40', 'sara', 'cbo'),
(5, '50', '60', '70', '80', '20', '45', '55', '40', 'sara', 'county'),
(6, '50', '60', '70', '80', '20', '45', '55', '40', 'sara', 'ngo'),
(7, '50', '60', '70', '80', '20', '45', '55', '40', 'lindi', 'cbo'),
(8, '50', '60', '70', '80', '20', '45', '55', '40', 'lindi', 'county'),
(9, '50', '60', '70', '80', '20', '45', '55', '40', 'lindi', 'ngo'),
(10, '50', '60', '70', '80', '20', '45', '55', '40', 'laini', 'cbo'),
(11, '50', '60', '70', '80', '20', '45', '55', '40', 'laini', 'county'),
(12, '60', '50', '70', '90', '20', '20', '10', '60', 'laini', 'ngo');

-- --------------------------------------------------------

--
-- Table structure for table `ptop`
--

CREATE TABLE IF NOT EXISTS `ptop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lh` varchar(500) NOT NULL,
  `ln` varchar(500) NOT NULL,
  `mh` varchar(500) NOT NULL,
  `mn` varchar(500) NOT NULL,
  `rh` varchar(500) NOT NULL,
  `rn` varchar(500) NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ptop`
--

INSERT INTO `ptop` (`id`, `lh`, `ln`, `mh`, `mn`, `rh`, `rn`, `page`) VALUES
(1, 'C.B.O', '101', 'N.G.O', '500', 'ENVIRONMENTAL ORGS', '302', 'makina'),
(2, 'C.B.O', '101', 'N.G.O', '500', 'ENVIRONMENTAL ORGS', '302', 'lindi'),
(3, 'C.B.O', '101', 'N.G.O', '500', 'ENVIRONMENTAL ORGS', '302', 'sara'),
(4, 'C.B.O', '101', 'N.G.O', '500', 'ENVIRONMENTAL ORGS', '302', 'saba');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `cate` text NOT NULL,
  `neno` varchar(20000) NOT NULL,
  `who` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `title`, `cate`, `neno`, `who`) VALUES
(1, 'Quotes of the day', 'Inspirational Quote', 'â€œLeaders say \\"no\\" to corruption. Anyone playing a role in governance, and is not ready to do this is not a leader.â€ ', 'Israelmore Ayivor, Leaders\\'' Ladder'),
(2, 'Quotes of the day', 'Popular Quotes', 'Put your heart, mind, and soul into even your smallest acts. This is the secret of success', 'Albert Einstein'),
(3, 'Quotes of the day', 'Motivational Quotes', 'Put your heart, mind, and soul into even your smallest acts. This is the secret of success.', 'Confucius');

-- --------------------------------------------------------

--
-- Table structure for table `recover_password`
--

CREATE TABLE IF NOT EXISTS `recover_password` (
  `email` varchar(30) NOT NULL,
  `recovery_code` varchar(200) NOT NULL,
  `recovery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `sname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `registration_date` date NOT NULL,
  `is_account_banned` tinyint(1) NOT NULL,
  `is_ip_banned` tinyint(1) NOT NULL,
  `current_ip` varchar(39) NOT NULL,
  `account_ban_date` date NOT NULL,
  `account_unban_date` date NOT NULL,
  `confirmation_code` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `fname`, `sname`, `username`, `email`, `image`, `password`, `registration_date`, `is_account_banned`, `is_ip_banned`, `current_ip`, `account_ban_date`, `account_unban_date`, `confirmation_code`) VALUES
(29, 'Imran', 'Khamis', '', 'wangara88@gmail.com', 'avatar5.png', '5c62abadb37dc3372cee5e4a02d9ae95', '2017-02-04', 0, 0, '::1', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `resgraph`
--

CREATE TABLE IF NOT EXISTS `resgraph` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sara` text NOT NULL,
  `makina` text NOT NULL,
  `lindi` text NOT NULL,
  `saba` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `resgraph`
--

INSERT INTO `resgraph` (`id`, `sara`, `makina`, `lindi`, `saba`, `type`) VALUES
(1, '100', '120', '70', '90', 'p'),
(2, '90', '100', '90', '80', 'o');

-- --------------------------------------------------------

--
-- Table structure for table `resimg`
--

CREATE TABLE IF NOT EXISTS `resimg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `resimg`
--

INSERT INTO `resimg` (`id`, `img`, `page`) VALUES
(1, '../dist/img/img.png', 'makina'),
(2, '../dist/img/img.png', 'sara'),
(3, '../dist/img/img.png', 'lindi'),
(4, '../dist/img/img.png', 'laini');

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE IF NOT EXISTS `resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `water` text NOT NULL,
  `health` text NOT NULL,
  `edu` text NOT NULL,
  `san` text NOT NULL,
  `waste` text NOT NULL,
  `drain` text NOT NULL,
  `energy` text NOT NULL,
  `road` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id`, `water`, `health`, `edu`, `san`, `waste`, `drain`, `energy`, `road`, `page`) VALUES
(1, '50', '30', '60', '50', '44', '40', '20', '40', 'makina'),
(2, '30', '50', '40', '60', '80', '40', '20', '40', 'lindi'),
(3, '50', '20', '70', '20', '30', '10', '20', '30', 'sara'),
(4, '40', '60', '40', '70', '20', '10', '20', '60', 'laini');

-- --------------------------------------------------------

--
-- Table structure for table `sabacurrent`
--

CREATE TABLE IF NOT EXISTS `sabacurrent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `complete` text NOT NULL,
  `des` text NOT NULL,
  `per` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sabacurrent`
--

INSERT INTO `sabacurrent` (`id`, `name`, `complete`, `des`, `per`, `type`) VALUES
(1, 'Tembea Kenya', '60% Complete', 'The project was allocated a budget of Ksh. 10m', '60%', 'county'),
(2, 'Gawa Umeme', '70% Complete', 'The project was allocated a budget of Ksh. 10m', '70%', 'ngo'),
(3, 'Bio yetu', '40% Complete', 'The project was allocated a budget of Ksh. 10m', '40%', 'cbo'),
(4, 'Cow ', '30% Complete', 'The project was allocated a budget of Ksh. 10m', '30%', 'county'),
(5, 'Gawa Umeme', '70% Complete', 'The project was allocated a budget of Ksh. 10m', '70%', 'ngo'),
(6, 'Gawa Umeme', '90% Complete', 'The project was allocated a budget of Ksh. 10m', '90%', 'cbo');

-- --------------------------------------------------------

--
-- Table structure for table `saba_cproject`
--

CREATE TABLE IF NOT EXISTS `saba_cproject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `sdate` text NOT NULL,
  `edate` text NOT NULL,
  `status` text NOT NULL,
  `org` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `saba_cproject`
--

INSERT INTO `saba_cproject` (`id`, `name`, `sdate`, `edate`, `status`, `org`) VALUES
(1, 'Project 1', '1/11/2015', '10/12/2016', 'complete', 'county'),
(2, 'Project 3', '1/11/2015', '10/12/2016', 'complete', 'ngo'),
(3, 'Project 5', '1/11/2015', '10/12/2016', 'complete', 'cbo'),
(4, 'Project 2', '1/11/2015', '10/12/2016', 'complete', 'county'),
(5, 'Project 4', '1/11/2015', '10/12/2016', 'complete', 'ngo'),
(6, 'Project 6', '1/11/2015', '10/12/2016', 'complete', 'cbo');

-- --------------------------------------------------------

--
-- Table structure for table `sagallery`
--

CREATE TABLE IF NOT EXISTS `sagallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `dsc` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sagallery`
--

INSERT INTO `sagallery` (`id`, `title`, `dsc`, `image`, `date`) VALUES
(1, 'HTML to PDF', 'How to Convert HTML to PDF in PHP with fpdf', '1.jpg', '2014-01-23 02:53:13'),
(2, 'Bootstrap Contact Form', 'How to create Contact Form using Bootstrap', '2.jpg', '2014-01-23 02:53:13'),
(3, 'Facebook Style Scroll Bar', 'How to create Facebook style scroll bar with jQuery and CSS.', '3.jpeg', '2014-01-23 02:54:40'),
(4, 'Instagram OAuth', 'How to login with Instagram OAuth using PHP', '4.JPG', '2014-01-23 02:54:40'),
(5, 'PDO database connection in PHP', 'How to use PDO database connection in PHP', '5.JPG', '2014-01-23 02:56:49'),
(6, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '6.jpg', '2014-01-23 02:56:49'),
(7, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '7.png', '2014-01-23 02:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `saproimg`
--

CREATE TABLE IF NOT EXISTS `saproimg` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `saproimg`
--

INSERT INTO `saproimg` (`id`, `title`, `desc`, `image`, `date`) VALUES
(1, 'HTML to PDF', 'How to Convert HTML to PDF in PHP with fpdf', '1.jpg', '2014-01-23 02:53:13'),
(2, 'Bootstrap Contact Form', 'How to create Contact Form using Bootstrap', '2.jpg', '2014-01-23 02:53:13'),
(3, 'Facebook Style Scroll Bar', 'How to create Facebook style scroll bar with jQuery and CSS.', '3.jpeg', '2014-01-23 02:54:40'),
(4, 'Instagram OAuth', 'How to login with Instagram OAuth using PHP', '4.JPG', '2014-01-23 02:54:40'),
(5, 'PDO database connection in PHP', 'How to use PDO database connection in PHP', '5.JPG', '2014-01-23 02:56:49'),
(6, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '6.jpg', '2014-01-23 02:56:49'),
(7, 'Tweet on Twitter', 'How to post tweet on Twitter with PHP', '7.png', '2014-01-23 02:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `saracurrent`
--

CREATE TABLE IF NOT EXISTS `saracurrent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `complete` text NOT NULL,
  `des` text NOT NULL,
  `per` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `saracurrent`
--

INSERT INTO `saracurrent` (`id`, `name`, `complete`, `des`, `per`, `type`) VALUES
(1, 'Tembea Kenya', '60% Complete', 'The project was allocated a budget of Ksh. 10m', '60%', 'county'),
(2, 'Gawa Umeme', '70% Complete', 'The project was allocated a budget of Ksh. 10m', '70%', 'ngo'),
(3, 'Bio yetu', '40% Complete', 'The project was allocated a budget of Ksh. 10m', '40%', 'cbo'),
(4, 'Cow ', '30% Complete', 'The project was allocated a budget of Ksh. 10m', '30%', 'county'),
(5, 'Gawa Umeme', '70% Complete', 'The project was allocated a budget of Ksh. 10m', '70%', 'ngo'),
(6, 'Gawa Umeme', '90% Complete', 'The project was allocated a budget of Ksh. 10m', '90%', 'cbo');

-- --------------------------------------------------------

--
-- Table structure for table `sara_cproject`
--

CREATE TABLE IF NOT EXISTS `sara_cproject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `sdate` text NOT NULL,
  `edate` text NOT NULL,
  `status` text NOT NULL,
  `org` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sara_cproject`
--

INSERT INTO `sara_cproject` (`id`, `name`, `sdate`, `edate`, `status`, `org`) VALUES
(1, 'Project 1', '1/11/2015', '10/12/2016', 'complete', 'county'),
(2, 'Project 3', '1/11/2015', '10/12/2016', 'complete', 'ngo'),
(3, 'Project 5', '1/11/2015', '10/12/2016', 'complete', 'cbo'),
(4, 'Project 2', '1/11/2015', '10/12/2016', 'complete', 'county'),
(5, 'Project 4', '1/11/2015', '10/12/2016', 'complete', 'ngo'),
(6, 'Project 6', '1/11/2015', '10/12/2016', 'complete', 'cbo');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` text NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `account`, `link`) VALUES
(1, 'facebook', 'https://www.facebook.com/UmandeTrust/'),
(2, 'twitter', 'https://www.facebook.com/UmandeTrust/'),
(3, 'instagram', 'https://www.facebook.com/UmandeTrust/'),
(4, 'youtube', 'https://www.facebook.com/UmandeTrust/');

-- --------------------------------------------------------

--
-- Table structure for table `social_audit`
--

CREATE TABLE IF NOT EXISTS `social_audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `stage` text NOT NULL,
  `stake` text NOT NULL,
  `finding` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `social_audit`
--

INSERT INTO `social_audit` (`id`, `name`, `stage`, `stake`, `finding`, `page`) VALUES
(1, 'Bio Gas', 'Final stage', 'USAID', 'You tell me', 'makina'),
(4, 'Bio Gas', 'Final stage', 'USAID', 'You tell me', 'sara'),
(5, 'Bio Gas', 'Final stage', 'USAID', 'You tell me', 'lindi'),
(6, 'Bio Gas', 'Final stage', 'USAID', 'You tell me', 'saba'),
(7, 'ytyty', 'tytytyt', 'tytyty', 'tytytyty', ''),
(8, 'dfdfdf', 'dfdfdfdf', 'dfdfdfdf', 'dfdfdfd', ''),
(14, 'Makina', 'stage 6', 'UNEP', 'none', 'makina'),
(17, 'adding', 'assign', 'dfd', 'stop', 'makina');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE IF NOT EXISTS `stories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `head` text NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `img`, `head`, `description`, `link`, `date`) VALUES
(2, 'dist/img/photo1.png', 'Women''s Voices ICT Choices', 'Umande Trust is in the process of launching a new project that aims to increase the representation of Women''s voices when making decisions about their own communities, specifically within Kibera...', 'http://umandetrust.blogspot.co.ke/2016/11/womens-voices-ict-choices.html', '0000-00-00 00:00:00'),
(3, 'dist/img/photo1.png', 'Global Handwashing Day 2016', 'Yesterday, October 15th, schools and organizations in various countries around the world celebrated Global Handwashing Day...', 'http://umandetrust.blogspot.co.ke/2016/10/global-handwashing-day-2016.html', '0000-00-00 00:00:00'),
(13, 'dist/img/717693506.jpeg', 'Global Handwashing Day 2016', 'Yesterday, October 15th, schools and organizations in various countries around the world celebrated Global Handwashing Day...', 'http://umandetrust.blogspot.co.ke/2016/10/global-handwashing-day-2016.html', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE IF NOT EXISTS `testimony` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `message`, `name`, `date`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci, sed libero. Iste asperiores suscipit, consequatur debitis animi impedit numquam facilis iusto porro labore dolorem, maxime magni.', 'Alex McGee', '2017-01-12 08:58:33'),
(2, 'Totam at eius excepturi deleniti sed, error repellat itaque omnis maiores tempora ratione dolor velit minus porro aspernatur repudiandae labore quas adipisci esse, nulla tempore voluptatibus cupiditate.', 'Melissa Washington', '2017-01-12 08:58:33'),
(3, 'Possimus deserunt nisi perferendis, consequuntur odio et aperiam, est, dicta dolor itaque sunt laborum, magni qui optio illum dolore laudantium similique harum. Ab provident, porro atque.', 'Joseph Salazar', '2017-01-12 08:58:33'),
(4, 'Vel nam odio dolorem, voluptas sequi minus quo tempore, animi est quia earum maxime. Reiciendis quae repellat, modi non, veniam natus soluta at optio vitae in excepturi minima eveniet dolor.', 'Maria Douglas', '2017-01-12 08:58:33'),
(5, 'Accusantium at omnis vel, possimus fugiat explicabo necessitatibus facilis tempore voluptate, ea in, sunt magnam officia? Beatae reprehenderit non tempore, assumenda reiciendis.', 'Gary Benham', '2017-01-12 08:58:33'),
(7, 'Totam at eius excepturi deleniti sed, error repellat itaque omnis maiores tempora ratione dolor velit minus porro aspernatur repudiandae labore quas adipisci esse, nulla tempore voluptatibus cupiditate.  ', 'Imran khamis', '2017-01-12 09:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(13, 'teph', 'teph', 'Stephanie', 'villanueva'),
(14, 'jkev', 'jkev', 'john kevin', 'lorayna'),
(15, 'wangara88@gmail.com ', 'admin12345', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(6, 'teph', '2017-01-04 22:26:39', '2017-02-01 12:04:08', 13),
(7, 'teph', '2017-01-04 22:27:50', '2017-02-01 12:04:08', 13),
(8, 'teph', '2017-01-04 22:43:44', '2017-02-01 12:04:08', 13),
(9, 'teph', '2017-01-04 22:43:53', '2017-02-01 12:04:08', 13),
(10, 'teph', '2017-01-04 22:45:35', '2017-02-01 12:04:08', 13),
(11, 'teph', '2017-01-04 22:47:04', '2017-02-01 12:04:08', 13),
(12, 'teph', '2017-01-04 22:47:53', '2017-02-01 12:04:08', 13),
(13, 'teph', '2017-01-04 22:48:05', '2017-02-01 12:04:08', 13),
(14, 'teph', '2017-01-04 22:49:24', '2017-02-01 12:04:08', 13),
(15, 'teph', '2017-01-04 22:57:15', '2017-02-01 12:04:08', 13),
(16, 'teph', '2017-01-04 22:58:29', '2017-02-01 12:04:08', 13),
(17, 'teph', '2017-01-04 22:58:47', '2017-02-01 12:04:08', 13),
(18, 'teph', '2017-01-04 23:00:52', '2017-02-01 12:04:08', 13),
(19, 'teph', '2017-01-04 23:28:49', '2017-02-01 12:04:08', 13),
(20, 'teph', '2017-01-04 23:49:21', '2017-02-01 12:04:08', 13),
(21, 'teph', '2017-01-04 23:52:12', '2017-02-01 12:04:08', 13),
(22, 'teph', '2017-01-05 10:07:17', '2017-02-01 12:04:08', 13),
(23, 'teph', '2017-01-05 10:13:20', '2017-02-01 12:04:08', 13),
(24, 'teph', '2017-01-05 13:25:49', '2017-02-01 12:04:08', 13),
(25, 'teph', '2017-01-05 13:36:06', '2017-02-01 12:04:08', 13),
(26, 'teph', '2017-01-05 15:53:49', '2017-02-01 12:04:08', 13),
(27, 'teph', '2017-01-05 15:55:40', '2017-02-01 12:04:08', 13),
(28, 'teph', '2017-01-07 13:08:30', '2017-02-01 12:04:08', 13),
(29, 'teph', '2017-01-08 11:39:54', '2017-02-01 12:04:08', 13),
(30, 'teph', '2017-01-09 12:17:34', '2017-02-01 12:04:08', 13),
(31, 'teph', '2017-01-09 17:47:06', '2017-02-01 12:04:08', 13),
(32, 'teph', '2017-01-09 23:43:15', '2017-02-01 12:04:08', 13),
(33, 'teph', '2017-01-10 00:36:56', '2017-02-01 12:04:08', 13),
(34, 'teph', '2017-01-11 11:28:26', '2017-02-01 12:04:08', 13),
(35, 'teph', '2017-01-11 22:15:10', '2017-02-01 12:04:08', 13),
(36, 'teph', '2017-01-12 09:49:51', '2017-02-01 12:04:08', 13),
(37, 'teph', '2017-01-17 16:01:24', '2017-02-01 12:04:08', 13),
(38, 'teph', '2017-01-17 16:03:48', '2017-02-01 12:04:08', 13),
(39, 'teph', '2017-01-17 16:04:56', '2017-02-01 12:04:08', 13),
(40, 'teph', '2017-01-17 16:05:46', '2017-02-01 12:04:08', 13),
(41, 'teph', '2017-01-17 16:08:11', '2017-02-01 12:04:08', 13),
(42, 'teph', '2017-01-17 16:15:48', '2017-02-01 12:04:08', 13),
(43, 'teph', '2017-01-17 16:16:12', '2017-02-01 12:04:08', 13),
(44, 'teph', '2017-01-19 07:10:54', '2017-02-01 12:04:08', 13),
(45, 'teph', '2017-01-19 08:57:08', '2017-02-01 12:04:08', 13),
(46, 'teph', '2017-01-19 09:16:37', '2017-02-01 12:04:08', 13),
(47, 'teph', '2017-01-19 09:16:40', '2017-02-01 12:04:08', 13),
(48, 'teph', '2017-01-19 09:16:47', '2017-02-01 12:04:08', 13),
(49, 'teph', '2017-01-19 09:16:54', '2017-02-01 12:04:08', 13),
(50, 'teph', '2017-01-19 09:17:16', '2017-02-01 12:04:08', 13),
(51, 'teph', '2017-01-19 09:17:35', '2017-02-01 12:04:08', 13),
(52, 'teph', '2017-01-19 09:17:39', '2017-02-01 12:04:08', 13),
(53, 'teph', '2017-01-19 09:19:04', '2017-02-01 12:04:08', 13),
(54, 'teph', '2017-01-19 09:46:49', '2017-02-01 12:04:08', 13),
(55, 'teph', '2017-01-19 10:13:40', '2017-02-01 12:04:08', 13),
(56, 'teph', '2017-01-19 10:13:46', '2017-02-01 12:04:08', 13),
(57, 'teph', '2017-01-19 10:14:32', '2017-02-01 12:04:08', 13),
(58, 'teph', '2017-01-19 10:18:38', '2017-02-01 12:04:08', 13),
(59, 'teph', '2017-01-19 10:23:30', '2017-02-01 12:04:08', 13),
(60, 'teph', '2017-01-19 10:23:50', '2017-02-01 12:04:08', 13),
(61, 'teph', '2017-01-19 10:26:37', '2017-02-01 12:04:08', 13),
(62, 'teph', '2017-01-19 10:27:28', '2017-02-01 12:04:08', 13),
(63, 'teph', '2017-01-19 11:17:16', '2017-02-01 12:04:08', 13),
(64, 'teph', '2017-01-19 11:22:46', '2017-02-01 12:04:08', 13),
(65, 'teph', '2017-01-19 11:24:34', '2017-02-01 12:04:08', 13),
(66, 'teph', '2017-01-19 11:25:08', '2017-02-01 12:04:08', 13),
(67, 'teph', '2017-01-19 11:36:45', '2017-02-01 12:04:08', 13),
(68, 'teph', '2017-01-19 12:18:27', '2017-02-01 12:04:08', 13),
(69, 'teph', '2017-01-19 12:42:50', '2017-02-01 12:04:08', 13),
(70, 'omottobe@gmail.com', '2017-01-19 15:36:42', '', 15),
(71, 'omottobe@gmail.com', '2017-01-20 12:45:44', '', 15),
(72, 'teph', '2017-02-01 12:02:47', '2017-02-01 12:04:08', 13),
(73, 'teph', '2017-02-01 12:04:11', '', 13),
(74, 'omottobe@gmail.com', '2017-02-01 13:23:40', '', 15),
(75, 'omottobe@gmail.com ', '2017-02-01 13:36:22', '', 15),
(76, 'omottobe@gmail.com', '2017-02-01 15:02:35', '', 15),
(77, 'omottobe@gmail.com', '2017-02-02 08:40:04', '', 15),
(78, 'omottobe@gmail.com', '2017-02-02 08:44:50', '', 15),
(79, 'omottobe@gmail.com', '2017-02-02 08:56:52', '', 15),
(80, 'omottobe@gmail.com', '2017-02-03 14:44:21', '', 15),
(81, 'omottobe@gmail.com', '2017-02-09 14:53:44', '', 15),
(82, 'omottobe@gmail.com', '2017-02-10 08:37:36', '', 15);

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE IF NOT EXISTS `ward` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `brief` text NOT NULL,
  `info` text NOT NULL,
  `location` text NOT NULL,
  `funding` text NOT NULL,
  `obj1` text NOT NULL,
  `obj2` text NOT NULL,
  `obj3` text NOT NULL,
  `obj4` text NOT NULL,
  `act1` text NOT NULL,
  `act2` text NOT NULL,
  `act3` text NOT NULL,
  `act4` text NOT NULL,
  `ach1` text NOT NULL,
  `ach2` text NOT NULL,
  `ach3` text NOT NULL,
  `ach4` text NOT NULL,
  `map` text NOT NULL,
  `page` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`id`, `img`, `brief`, `info`, `location`, `funding`, `obj1`, `obj2`, `obj3`, `obj4`, `act1`, `act2`, `act3`, `act4`, `ach1`, `ach2`, `ach3`, `ach4`, `map`, `page`) VALUES
(1, '../media/5.JPG', 'There is a gap in gender representation among the people of Kibera in regards to having the women''s voices heard on issues involving their community and the society they live in. This project, Women''s Voices, seeks to capture women''s views and ideas about county development, and make sure, these ideas are shared with the relevant authorities. It looks to address four main themes of governance, transparency, accountability, and anti-corruption. To do this, we plan to train women in the community to be representatives of the rest of the community, called women voices champions. These women will be in charge of collection and analyzing data from and about the community as well as other administrative work. The women will also be in charge of updating a dashboard that connects the project to the community and the rest of the world through social media, and updating the dashboard with real time information about what is happening in the community. The information they work to collect and present will be shared with the relevant county officials, so they can put the community''s thoughts into action. The women''s voices champions will help to give voice to other female members of the community whose ideas and opinions may not have been able to be shared without this project. Women''s Voices will be run through four of Kibera''s bio-sanitation facilities since they are already a focal point for men and women in the community.', 'This centre was started in 2014 to cater for .', 'Makina ward, Starag', 'Unepg', 'Objective', '   Objective', '   Objective', '   Objectiveg', 'Activity', '   Activity', '   Activity', '   Activityg', 'Achievement', ' Achievement ', '  Achievement', '  Achievement', 'https://www.google.com/maps/d/embed?mid=1P16zI5wBQLpLOjeZ9lpFCWnUYHM', 'makina'),
(2, '../media/Star.JPG', 'There is a gap in gender representation among the people of Kibera in regards to having the women''s voices heard on issues involving their community and the society they live in. This project, Women''s Voices, seeks to capture women''s views and ideas about county development, and make sure, these ideas are shared with the relevant authorities. It looks to address four main themes of governance, transparency, accountability, and anti-corruption. To do this, we plan to train women in the community to be representatives of the rest of the community, called women voices champions. These women will be in charge of collection and analyzing data from and about the community as well as other administrative work. The women will also be in charge of updating a dashboard that connects the project to the community and the rest of the world through social media, and updating the dashboard with real time information about what is happening in the community. The information they work to collect and present will be shared with the relevant county officials, so they can put the community''s thoughts into action. The women''s voices champions will help to give voice to other female members of the community whose ideas and opinions may not have been able to be shared without this project. Women''s Voices will be run through four of Kibera''s bio-sanitation facilities since they are already a focal point for men and women in the community.', 'This centre was started in 2014 to cater for ...........', 'Makina ward, Stara', 'Unep', 'Objective', 'Objective', 'Objective', 'Objective', 'Activity', 'Activity', 'Activity', 'Activity', 'Achievement', 'Achievement', 'Achievement', 'Achievement', 'https://www.google.com/maps/d/embed?mid=11tSJRIxdg8XOv3BaFQ8eub2SNbI', 'sara'),
(3, '../media/Star.JPG', 'There is a gap in gender representation among the people of Kibera in regards to having the women''s voices heard on issues involving their community and the society they live in. This project, Women''s Voices, seeks to capture women''s views and ideas about county development, and make sure, these ideas are shared with the relevant authorities. It looks to address four main themes of governance, transparency, accountability, and anti-corruption. To do this, we plan to train women in the community to be representatives of the rest of the community, called women voices champions. These women will be in charge of collection and analyzing data from and about the community as well as other administrative work. The women will also be in charge of updating a dashboard that connects the project to the community and the rest of the world through social media, and updating the dashboard with real time information about what is happening in the community. The information they work to collect and present will be shared with the relevant county officials, so they can put the community''s thoughts into action. The women''s voices champions will help to give voice to other female members of the community whose ideas and opinions may not have been able to be shared without this project. Women''s Voices will be run through four of Kibera''s bio-sanitation facilities since they are already a focal point for men and women in the community.', 'This centre was started in 2014 to cater for ...........', 'Makina ward, Stara', 'Unep', 'Objective', 'Objective', 'Objective', 'Objective', 'Activity', 'Activity', 'Activity', 'Activity', 'Achievement', 'Achievement', 'Achievement', 'Achievement', 'https://www.google.com/maps/d/embed?mid=1NPC3_RfihYSdCoSFdwaI8MC163M', 'saba'),
(4, '../media/Star.JPG', 'There is a gap in gender representation among the people of Kibera in regards to having the women''s voices heard on issues involving their community and the society they live in. This project, Women''s Voices, seeks to capture women''s views and ideas about county development, and make sure, these ideas are shared with the relevant authorities. It looks to address four main themes of governance, transparency, accountability, and anti-corruption. To do this, we plan to train women in the community to be representatives of the rest of the community, called women voices champions. These women will be in charge of collection and analyzing data from and about the community as well as other administrative work. The women will also be in charge of updating a dashboard that connects the project to the community and the rest of the world through social media, and updating the dashboard with real time information about what is happening in the community. The information they work to collect and present will be shared with the relevant county officials, so they can put the community''s thoughts into action. The women''s voices champions will help to give voice to other female members of the community whose ideas and opinions may not have been able to be shared without this project. Women''s Voices will be run through four of Kibera''s bio-sanitation facilities since they are already a focal point for men and women in the community.', 'This centre was started in 2014 to cater for ...........', 'Makina ward, Stara', 'Unep', 'Objective', 'Objective', 'Objective', 'Objective', 'Activity', 'Activity', 'Activity', 'Activity', 'Achievement', 'Achievement', 'Achievement', 'Achievement', 'https://www.google.com/maps/d/embed?mid=1H_7qYSEhhj-AehBHo4sxDzCtzHU', 'lindi');

-- --------------------------------------------------------

--
-- Table structure for table `ward_rep`
--

CREATE TABLE IF NOT EXISTS `ward_rep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `des` text NOT NULL,
  `edu` text NOT NULL,
  `loc` text NOT NULL,
  `image` text NOT NULL,
  `ward` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
