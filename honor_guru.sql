-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2014 pada 05.38
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `honor_guru`
--
CREATE DATABASE IF NOT EXISTS `honor_guru` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `honor_guru`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nuptk` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `lama_mengajar` char(2) NOT NULL,
  `umur` char(2) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`nuptk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nuptk`, `nama`, `jenis_kelamin`, `lama_mengajar`, `umur`, `alamat`) VALUES
('3014569875123651', 'Maharwati', 'Perempuan', '3', '24', 'Tuban'),
('3125669875123651', 'Juki Marjuki', 'Laki-Laki', '5', '32', 'Tuban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `honor`
--

CREATE TABLE IF NOT EXISTS `honor` (
  `nuptk` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah_jam` varchar(2) NOT NULL,
  `jumlah_honor` varchar(10) NOT NULL,
  PRIMARY KEY (`nuptk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `honor`
--

INSERT INTO `honor` (`nuptk`, `nama`, `jumlah_jam`, `jumlah_honor`) VALUES
('3014569875123651', 'Maharwati', '24', '8000'),
('3125669875123651', 'Juki Marjuki', '24', '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan`
--

CREATE TABLE IF NOT EXISTS `keterangan` (
  `nuptk` varchar(16) NOT NULL,
  `honor` varchar(5) NOT NULL,
  PRIMARY KEY (`nuptk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keterangan`
--

INSERT INTO `keterangan` (`nuptk`, `honor`) VALUES
('3014569875123651', 'Sudah'),
('3125669875123651', 'Sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghonoran`
--

CREATE TABLE IF NOT EXISTS `penghonoran` (
  `id_honor` varchar(6) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` int(20) NOT NULL,
  `nuptk` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah_jam` varchar(2) NOT NULL,
  `jumlah_honor` varchar(10) NOT NULL,
  PRIMARY KEY (`id_honor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
