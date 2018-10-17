-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Juni 2014 jam 16:16
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `berita` varchar(500) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `berita`, `foto`, `tanggal`) VALUES
(1, 'Jersey Timnas Jepang', 'Ukuan: S/M/L<br/>Harga: Rp 50.000,-<br/>Stock: Terbatas<br/>', 'image/Detail+jersey+Terbaru+Timnas+Jepang+World+Cup+2014+4.jpg', '2014-06-18'),
(2, 'Jersey Timnas Portugal', 'Ukuran: S/M/L<br/>Harga: Rp 70.000,-<br/>Stock: Terbaas<br/>', 'image/images.jpeg', '2014-06-18');

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
  `gender` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `email`, `website`, `komentar`, `gender`) VALUES
(1, 'Vita Utami', 'vitautami95@gmail.com', 'www.vita95.com', 'haloo', 'Laki-laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Arie', 'photato91@gmail.com', '1234');
