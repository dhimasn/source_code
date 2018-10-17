-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Juni 2014 jam 16:07
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
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `nip` varchar(18) NOT NULL DEFAULT '',
  `nama` varchar(30) NOT NULL DEFAULT '',
  `tgllahir` date NOT NULL DEFAULT '0000-00-00',
  `jenkel` enum('0','1') NOT NULL DEFAULT '0',
  `alamat` text NOT NULL,
  `namafoto` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`nip`),
  UNIQUE KEY `nim` (`nip`),
  KEY `nim_2` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `tgllahir`, `jenkel`, `alamat`, `namafoto`) VALUES
('4141', 'Pita Utaminingsih', '1995-07-24', '1', 'Wonogiri, Jawa Tengah', 'Bat.gif'),
('4142', 'Arjo', '1986-09-06', '0', 'dwdd', 'kcg.gif'),
('4143', 'Ari Nugroho', '1991-02-14', '0', 'Wonogiri, Jawa Tengah', 'jhjh.jpg');
