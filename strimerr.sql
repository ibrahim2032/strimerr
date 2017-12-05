-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 06:18 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `strimerr`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `account_date` varchar(30) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `channel_id`, `bank_name`, `account_name`, `account_number`, `account_date`) VALUES
(1, 1, 'Guaranty Trust Bank', 'Ibrahim Oshinubi', '0159310039', '1511969677');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `album_id` int(10) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `album` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `album_date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`album_id`),
  UNIQUE KEY `albums_name_artist_id_unique` (`album`,`album_date`),
  KEY `albums_release_date_index` (`release_date`),
  KEY `albums_artist_id_index` (`album_date`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album_id`, `channel_id`, `album`, `release_date`, `image`, `album_date`) VALUES
(1, 1, 'Macanaci', '10-10-2017', 'macanaci.jpg', '1511456349'),
(2, 1, 'Olele', '10-10-2017', 'macanaci.jpg', '1511456349'),
(3, 2, 'emeka', '10-09-2017', 'no-image.jpg', '1511456349');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
  `award_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `award` varchar(255) NOT NULL,
  `nomination` text NOT NULL,
  `win` varchar(30) NOT NULL DEFAULT 'In Progress',
  `year` varchar(10) NOT NULL,
  `award_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`award_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE IF NOT EXISTS `channels` (
  `channel_id` int(11) NOT NULL AUTO_INCREMENT,
  `channel` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `privacy` int(11) NOT NULL DEFAULT '0',
  `channel_date` varchar(30) NOT NULL,
  PRIMARY KEY (`channel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`channel_id`, `channel`, `name`, `user_id`, `picture`, `privacy`, `channel_date`) VALUES
(1, 'ioshinubi', 'Ibrahim Oshinubi', 1, NULL, 1, '1511456198'),
(2, 'Kali', 'Kali Mandate', 2, NULL, 0, '1511456349');

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE IF NOT EXISTS `follows` (
  `follow_id` int(11) NOT NULL AUTO_INCREMENT,
  `follower_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  `follow_date` varchar(30) NOT NULL,
  PRIMARY KEY (`follow_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`follow_id`, `follower_id`, `followed_id`, `follow_date`) VALUES
(7, 1, 1, '1512191283'),
(8, 1, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `genre_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `genre_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`genre_id`),
  UNIQUE KEY `genres_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

CREATE TABLE IF NOT EXISTS `musics` (
  `music_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hit` int(11) NOT NULL DEFAULT '0',
  `duration` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `artists` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `album_id` int(11) NOT NULL,
  `genre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `music` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `music_date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`music_id`),
  UNIQUE KEY `name_album_unique` (`name`(60),`hit`),
  KEY `tracks_album_id_index` (`album_id`),
  KEY `tracks_artists` (`artists`(60))
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `musics`
--

INSERT INTO `musics` (`music_id`, `user_id`, `channel_id`, `name`, `hit`, `duration`, `artists`, `album_id`, `genre`, `music`, `price`, `music_date`) VALUES
(1, 1, 1, 'fargin', 34, '2:44', 'Teni entertainer .ft Mystro', 1, 'Afro Pop', 'TENI_FARGIN.mp3', 50, '1511457349'),
(2, 1, 1, 'Olamide', 450, '3:53', 'Olamide', 1, 'juju', 'olamide.mp3', 200, '1511457549'),
(3, 1, 1, 'song1', 20, '5:57', 'maleke', 1, 'jazz', 'olamide (1).mp3', 58, '1511457549'),
(4, 1, 1, 'Kilode', 4568, '2:35', 'Kewena', 2, 'apala', 'olamide (2).mp3', 62, '1511456349');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE IF NOT EXISTS `playlists` (
  `playlist_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `playlist_date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`playlist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `playlists`
--

INSERT INTO `playlists` (`playlist_id`, `user_id`, `name`, `playlist_date`) VALUES
(1, 1, 'Hip-Hop', '0000-00-00 00:00:00'),
(2, 1, 'Jazz', '0000-00-00 00:00:00'),
(3, 1, 'Afro', '1512149172'),
(4, 1, 'Gospel', '1512149206'),
(5, 1, 'Anthem', '1512149220');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_musics`
--

CREATE TABLE IF NOT EXISTS `playlist_musics` (
  `playlist_music_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `playlist_id` int(10) unsigned NOT NULL,
  `music_id` int(10) unsigned NOT NULL,
  `date` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`playlist_music_id`),
  UNIQUE KEY `playlist_track_track_id_playlist_id_unique` (`music_id`,`playlist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `playlist_musics`
--

INSERT INTO `playlist_musics` (`playlist_music_id`, `playlist_id`, `music_id`, `date`) VALUES
(1, 1, 1, '0000-00-00 00:00:00'),
(2, 1, 3, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE IF NOT EXISTS `promotions` (
  `promotion_id` int(11) NOT NULL AUTO_INCREMENT,
  `song_id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `start_promotion` varchar(30) NOT NULL,
  `end_promotion` varchar(30) NOT NULL,
  `promotion_date` varchar(30) NOT NULL,
  PRIMARY KEY (`promotion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stage_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `origin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instrument` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active_time` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `career` text COLLATE utf8_unicode_ci,
  `confirmed` int(1) NOT NULL DEFAULT '1',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_date` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `stage_name`, `user_image`, `gender`, `birthday`, `permission`, `email`, `city`, `country`, `password`, `origin`, `genre`, `occupation`, `instrument`, `active_time`, `company`, `career`, `confirmed`, `confirmation_code`, `user_date`) VALUES
(1, 'ioshinubi', 'Ibrahim Oshinubi', NULL, NULL, NULL, NULL, '2', 'ibrahim.oshinubi@gmail.com', NULL, NULL, 'password', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'ecb9e15490cf7cc64dd358ebd24334a9', '1511456198'),
(2, 'Kali', 'Kali Mandate', NULL, NULL, NULL, NULL, '2', 'kali@gmail.com', NULL, NULL, 'password', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'edc7851ded1d180d6eeff9e4a6a9db84', '1511456349');

-- --------------------------------------------------------

--
-- Table structure for table `users_oauth`
--

CREATE TABLE IF NOT EXISTS `users_oauth` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_oauth_user_id_service_unique` (`user_id`,`service`),
  UNIQUE KEY `users_oauth_token_unique` (`token`),
  KEY `users_oauth_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
