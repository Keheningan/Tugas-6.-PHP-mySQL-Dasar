-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Apr 2022 pada 05.04
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `21_d4_it_a`
--

CREATE TABLE `21_d4_it_a` (
  `NRP` bigint(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gmail` varchar(50) NOT NULL,
  `No_Telp` varchar(13) NOT NULL,
  `Mail_PENS` varchar(50) NOT NULL,
  `Name_GitHub` varchar(30) NOT NULL,
  `Name_Trello` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `21_d4_it_a`
--

INSERT INTO `21_d4_it_a` (`NRP`, `Name`, `Gmail`, `No_Telp`, `Mail_PENS`, `Name_GitHub`, `Name_Trello`) VALUES
(3121600003, 'Ahmad Musafir Khoirul Fattah', 'ahmusafir.khoirul@gmail.com', '0895339326020', 'ahmusafir@it.student.pens.ac.id', 'khoirulfa', 'contractkiller_'),
(3121600005, 'Dimas Fahrul Putra Arismanto', 'dfahrul07@gmail.com', '089612569863', 'dima5@it.student.pens.ac.id', 'dima5fahrul', 'Dimas Fahrul');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `21_d4_it_a`
--
ALTER TABLE `21_d4_it_a`
  ADD PRIMARY KEY (`NRP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
