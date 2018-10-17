-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Juni 2014 jam 16:14
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `message` mediumtext,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `username`, `message`, `date`) VALUES
(87, 'dedy', '', '2012-05-27'),
(88, 'dedy', 'dedy kurniadi', '2012-05-28'),
(86, 'kurniadi', 'lha opo??', '2012-05-27'),
(85, 'dedy', 'lha yo', '2012-05-27'),
(84, 'dedy', 'enak emg ok', '2012-05-27'),
(89, 'dedy', 'isi chat', '2012-05-28'),
(90, 'ari', 'klkl', '2014-06-11'),
(91, 'ari', 'lklkl', '2014-06-11'),
(92, 'ari', '', '2014-06-15'),
(93, 'ari', 'jkjk', '2014-06-15'),
(94, 'ari', 'kjk', '2014-06-15'),
(95, 'ari', 'jsaldkaskl', '2014-06-15'),
(96, 'ari', 'as;lA;SL;', '2014-06-15'),
(97, 'ari', 'lklskldfs', '2014-06-18'),
(98, 'ari', 'jzkjsk', '2014-06-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`, `foto`) VALUES
(4, 'kurniadi', '1234', 'off', ''),
(3, 'ari', '1234', 'on', ''),
(1, 'vita', '1234', 'off', '');
