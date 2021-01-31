-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2020 at 10:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giziburuk_nb`
--

-- --------------------------------------------------------

--
-- Table structure for table `basis_aturan`
--

CREATE TABLE `basis_aturan` (
  `id_gejala` varchar(10) DEFAULT NULL,
  `pertanyaan` varchar(300) DEFAULT NULL,
  `fakta_ya` varchar(150) DEFAULT NULL,
  `fakta_tidak` varchar(150) DEFAULT NULL,
  `kwarshiorkor` double NOT NULL,
  `marasmik-kwarshiorkor` double NOT NULL,
  `marasmus` double NOT NULL,
  `rute` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `id_penyakit` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basis_aturan`
--

INSERT INTO `basis_aturan` (`id_gejala`, `pertanyaan`, `fakta_ya`, `fakta_tidak`, `kwarshiorkor`, `marasmik-kwarshiorkor`, `marasmus`, `rute`, `status`, `id_penyakit`) VALUES
('g1', 'Apakah perut anak anda terlihat mencekung?', 'iya perut terlihat mencekung dan otot mengecil', 'Perut terlihat normal', 0.3, 0.9, 0.3, 'g2', '', 0),
('g2', 'Apakah rambut anak anda tipis dan mudah dicabut?', 'Iya rambut tipis dan mudah dicabut', 'rambut normal', 0.6, 0.3, 0.6, 'g3', '', 0),
('g3', 'Apakah wajah anak anda membulat dan sembab?', 'Iya wajah terlihat membulat dan sembab', 'Wajah normal', 0.9, 0.3, 0.3, 'g4', '', 0),
('g4', 'Apakah berat badan anak anda mengalami penurunan?', 'Iya berat badan mengalami penurunan', 'Berat badan normal', 0.3, 0.3, 0.9, 'g5', '', 0),
('g5', 'Apakah anak anda susah makan?', 'Iya susah Makan', 'Tidak susah makan', 0.9, 0.3, 0.3, 'g6', '', 0),
('g6', 'Apakah otot anak anda terlihat mengecil?', 'Iya terlihat mengecil', 'Otot normal', 0.6, 0.3, 0.6, 'g7', '', 0),
('g7', 'Apakah kulit anak anda terdapat kelainan?', 'Iya terdapat kelainan kulit', 'Kulit normal', 0.9, 0.3, 0.3, 'g8', '', 0),
('g8', 'Apakah mata anak anda terlihat sayu?', 'Iya mata terlihat sayu', 'Mata normal', 0.9, 0.3, 0.3, 'g9', '', 0),
('g9', 'Apakah anak anda mengalami anemia?', 'Iya mengalami anemia', 'Tidak anemia', 0.9, 0.3, 0.3, 'g10', '', 0),
('g10', 'Apakah anak anda mudah terjangkit penyakit?', 'Iya mudah jatuh sakit', 'Tidak mudah jatuh sakit', 0.3, 0.3, 0.9, 'g11', '', 0),
('g11', 'Apakah anak anda terlihat sangat kurus?', 'Iya sangat kurus', 'Tidak terlihat kurus', 0.3, 0.3, 0.9, 'g12', '', 0),
('g12', 'Apakah tubuh anak anda membengkak?', 'Iya terlihat membengkak', 'Tubuh normal', 0.9, 0.3, 0.3, 'g13', '', 0),
('g13', 'Apakah anak anda rewel?', 'iya rewel ', 'Tidak rewel', 0.6, 0.3, 0.6, 'g14', '', 0),
('g14', 'Apakah anak anda mengalami pengurangan lemak bawah kulit?', 'Iya mengalami pengurangan lemak', 'Lemak terlihat normal', 0.3, 0.9, 0.3, 'g15', '', 0),
('g15', 'Apakah anak anda susah buang air besar?', 'Iya susah BAB', 'Bab lancar', 0.3, 0.3, 0.9, 'g16', '', 0),
('g16', 'Apakah usus anak anda terlihat membulat?', 'Iya usus membulat', 'Usus normal', 0.3, 0.9, 0.3, 'g17', '', 0),
('g17', 'Apakah bentuk fisik anak anda mengalami perubahan?', 'Iya mengalami perubahan fisik', 'Fisik normal', 0.3, 0.3, 0.9, 'g18', '', 0),
('g18', 'Apakah anak anda terlihat sangat kurus dan wajah membulat?', 'Iya terlihat sangat kurus dan wajah membulat', 'Terlihat normal', 0.3, 0.9, 0.3, 'g19', '', 0),
('g19', 'Apakah wajah anak anda terlihat tua?', 'Iya terlihat tua', 'Wajah normal', 0.3, 0.3, 0.9, 'g20', '', 0),
('g20', 'Apakah perut anak anda terlihat mencekung?', 'Iya terlihat mencekung', 'Perut terlihat normal', 0.3, 0.3, 0.9, 'g21', '', 0),
('g21', 'Apakah kulit anda terlihat kering?', 'Iya kulit kering', 'Kulit normal', 0.3, 0.3, 0.9, 'g22', '', 0),
('g22', 'Apakah kulit anak anda keriput dan terjadi kelainan kulit?', 'Iya kulit terlihat keriput', 'Kulit normal', 0.3, 0.9, 0.3, 'g23', '', 0),
('g23', 'Apakah Bagian bokong anak anda terlihat mengecil dan memakai celana terlihat longgar?', 'Iya okong terlihat mengecil dan memakai celana terlihat longgar', 'Tidak mengecil', 0.3, 0.3, 0.9, 'g24', '', 0),
('g24', 'APAKAH TERLIHAT PEMBESARAN PADA HATI ANAK ANDA?', 'Iya hati terlihat membesar', 'Hati terlihat normal', 0.9, 0.3, 0.3, 'final', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_gejala`
--

CREATE TABLE `daftar_gejala` (
  `id_gejala` varchar(10) DEFAULT NULL,
  `gejala` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `daftar_gejala`
--

INSERT INTO `daftar_gejala` (`id_gejala`, `gejala`) VALUES
('g1', 'perut mencekung dan otot mengecil'),
('g2', 'rambut tipis dan mudah dicabut'),
('g3', 'Wajah membulat dan sembab'),
('g4', 'Berat badan hanya sekitar 60% dari seharusnya'),
('g5', 'Susah makan'),
('g6', 'Otot mengecil'),
('g7', 'Kelainan pada kulit'),
('g8', 'Mata sayu'),
('g9', 'Anemia'),
('g10', 'Mudah terjangkit penyakit'),
('g11', 'Sangat kurus'),
('g12', 'Bengkak seluruh tubuh(Terutama kaki)'),
('g13', 'Cengeng dan mudah rewel'),
('g14', 'Pengurangan lemak bawah kulit seperti marasmus'),
('g15', 'susah buang air besar'),
('g16', 'Usus membulat'),
('g17', 'Bentuk fisik berubah'),
('g18', 'Sangat kurus dan wajah membulat'),
('g19', 'Wajah terlihat tua'),
('g20', 'Perut cekung'),
('g21', 'Kulit kering'),
('g22', 'Kulit keriput terjadi kelainan kulit'),
('g23', 'Bagian daerah pantat tampak seperti memakai celana longgar'),
('g24', 'Pembesaran pada hati');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_penyakit`
--

CREATE TABLE `daftar_penyakit` (
  `id_penyakit` varchar(10) DEFAULT NULL,
  `nama_penyakit` varchar(50) DEFAULT NULL,
  `npenyakit` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_penyakit`
--

INSERT INTO `daftar_penyakit` (`id_penyakit`, `nama_penyakit`, `npenyakit`) VALUES
('p1', 'Kwarshiorkor', 0.3333333),
('p2', 'Marasmik-Kwarshiorkor', 0.3333333),
('p3', 'Marasmus', 0.3333333);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_solusi`
--

CREATE TABLE `daftar_solusi` (
  `id_solusi` varchar(10) DEFAULT NULL,
  `solusi` varchar(300) DEFAULT NULL,
  `id_penyakit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_solusi`
--

INSERT INTO `daftar_solusi` (`id_solusi`, `solusi`, `id_penyakit`) VALUES
('s1', 'Berikan asi eksklusif', 'p1'),
('s2', 'Perbanyak asupan kalori', 'p2'),
('s3', 'Fortifikasi makanan', 'p3');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Rifki Nur Apriyono', 'rifki', 'rifki', 'admin'),
(2, 'rifkip', 'rifkip', 'rifkip', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
