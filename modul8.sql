-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2018 pada 05.39
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul8`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `nama` varchar(25) NOT NULL,
  `nim` char(10) NOT NULL,
  `kelas` varchar(6) NOT NULL,
  `hobi` varchar(10) NOT NULL,
  `genre` enum('Horror','Anime','Action','Drama') NOT NULL,
  `wisata` enum('Bali','Tanjung Selor','Jakarta','Lombok') NOT NULL,
  `tgl` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`nama`, `nim`, `kelas`, `hobi`, `genre`, `wisata`, `tgl`, `username`, `email`, `password`) VALUES
(' ', '', ' ', ' ', '', '', '0000-00-00', 'devifildzania', 'devifildzania@gmail.com', 'devi1234567');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
