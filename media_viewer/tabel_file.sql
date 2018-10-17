-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Juni 2014 jam 16:15
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(5) NOT NULL,
  `file` varchar(250) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id`, `file`, `nama`, `tanggal`) VALUES
(0, 'file/intro.jpg', 'intro', '15-06-2014'),
(1, 'file/aku liar.mp3', 'aku liar', '15-06-2014'),
(2, 'file/movie.mp4', 'movie', '15-06-2014'),
(3, 'file/Water lilies.jpg', 'Water lilies', '15-06-2014');
