-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 23. Juni 2014 jam 16:06
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--
CREATE TABLE IF NOT EXISTS `mahasiswa` (
'nama' varchar(200) NOT NULL,
'nama1' varchar(200) NOT NULL,
'nim' varchar(200) NOT NULL,
'email' varchar(200) NOT NULL,
'tgl_lahir' varchar(200) NOT NULL,
'no_telp'varchar(200) NOT NULL,
'alamat' text NOT NULL,
'alamat_asal' text NOT NULL,
'tokoh_idola' varchar(200) NOT NULL,
'Alasan_Mengidolakan' varchar(200) NOT NULL,
'Penyakit_kronis' varchar(200) NOT NULL,
'Alergi' varchar(200) NOT NULL,
'Golongan_darah' varchar(200) NOT NULL,
'Motto_Hidup' varchar(200) NOT NULL,
'Formal' text NOT NULL,
'Non_Formal' text NOT NULL,
'Riwayat_Organisasi' text NOT NULL,
'Riwayat_Pelatihan' text NOT NULL,
'Buku' text NOT NULL,
'keahlian' text NOT NULL,
'Planning_hidup' text NOT NULL,
'pertanyaan1' text NOT NULL,
'pertanyaan2' text NOT NULL,
'jk' varchar(10) NOT NULL,
'jurusan'varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--
