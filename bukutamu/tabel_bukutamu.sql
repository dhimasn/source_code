-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Juni 2014 jam 16:13
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
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `komentar` varchar(225) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `email`, `website`, `komentar`, `gender`) VALUES
(1, 'Ari Nugroho', 'photato91@gmail.com', 'www.nekoni.net', 'cek cek cek 123', 'Laki-laki'),
(2, 'Vita Utami', 'vitautami95@gmail.com', 'www.vita95.com', 'undefined', 'Laki-laki'),
(3, 'Vita Utami', 'vitautami95@gmail.com', 'www.vita95.com', 'cek komentar aja', 'Laki-laki'),
(4, 'lklkl', 'castello_mboyz@yahoo.co.id', 'castello.yahoo.co.id', 'lkl', 'Laki-laki'),
(5, 'Vita Utami', 'vitautami95@gmail.com', 'www.vita95.com', 'kllklkl', 'Laki-laki');
