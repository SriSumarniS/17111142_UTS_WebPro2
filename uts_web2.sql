-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2019 pada 01.46
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_web2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_matkul`
--

CREATE TABLE `jadwal_matkul` (
  `id` int(11) NOT NULL,
  `Hari` varchar(100) NOT NULL,
  `Nama_Matkul` varchar(100) NOT NULL,
  `Nama_Dosen` varchar(100) NOT NULL,
  `Ruangan` varchar(100) NOT NULL,
  `Kampus` varchar(100) NOT NULL,
  `Waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_matkul`
--

INSERT INTO `jadwal_matkul` (`id`, `Hari`, `Nama_Matkul`, `Nama_Dosen`, `Ruangan`, `Kampus`, `Waktu`) VALUES
(1, 'Senin', 'Web Programming 2', 'Andri Nugroho, S.Kom.', '2.3', '3', '08.00-10.15'),
(2, 'Selasa', 'SIE', 'Jack Febrian Rusdi, S.T., M.T.', '4.1', '1', '08.00-10.15'),
(5, 'Rabu', 'Enterpreneurship', 'Tarsinah Sumarni, M.Kom.', '4.5', '1', '11.00-12.30'),
(6, 'Kamis', 'OOP', 'Nova Agustina, S.T.', '2.6', '3', '08.00-10.15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal_matkul`
--
ALTER TABLE `jadwal_matkul`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal_matkul`
--
ALTER TABLE `jadwal_matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
