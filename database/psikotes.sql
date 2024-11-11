-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 09:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekrutmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `psikotes`
--

CREATE TABLE `psikotes` (
  `id_psikotes` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `pertanyaan_psikotes` varchar(255) NOT NULL,
  `option_a_psikotes` varchar(255) NOT NULL,
  `option_b_psikotes` varchar(255) NOT NULL,
  `option_c_psikotes` varchar(255) NOT NULL,
  `option_d_psikotes` varchar(255) NOT NULL,
  `kunjaw_psikotes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `psikotes`
--

INSERT INTO `psikotes` (`id_psikotes`, `id_lowongan`, `pertanyaan_psikotes`, `option_a_psikotes`, `option_b_psikotes`, `option_c_psikotes`, `option_d_psikotes`, `kunjaw_psikotes`) VALUES
(1, 5, 'Kisi-kisi =.... ', 'Alat menangkap ikan', ' Alat hitung ', 'Tabel', 'Terali', 'D'),
(2, 5, 'Mudun = .... ', 'Problema ', 'Beradab ', 'Referensi ', 'Setuju ', 'B'),
(3, 5, 'Boga =.... ', ' Pakaian kebesaran  ', 'Makanan kenikmatan  ', 'Dekorasi tataruang  ', 'Pakaianpengantin ', 'B'),
(4, 5, 'Anjung=....  ', 'Dayung  ', 'Panggung  ', 'Buyung  ', 'Puji ', 'B'),
(5, 5, 'Friksi =....  ', 'Perpecahan  ', 'Tidak berdaya  ', 'Frustasi  ', 'Sedih ', 'A'),
(6, 5, 'Surai >< .... ', 'Bubar  ', 'Usai  ', 'Purna  ', 'Berhimpun ', 'D'),
(7, 5, 'Rabun >< ....  ', 'Terang', 'Tajam  ', 'Jelas  ', 'Tepat ', 'C'),
(8, 5, 'Penerus >< ....  ', 'Pewaris   ', 'Kader  ', 'Perintis  ', 'Penerus', 'C'),
(9, 5, 'Hipokrit >< .... ', ' Jujur  ', 'Pembohong  ', 'Sabar  ', 'Kamuflase ', 'A'),
(10, 5, 'Otonomi : Mandiri = ….  ', 'Hardisk : VGA card  ', 'Sabun : Mandi  ', 'Cerdas : Banyak akal ', ' Bensin : Mesin ', 'C'),
(11, 6, 'Kisi-kisi =.... ', 'Alat menangkap ikan', 'Alat hitung', 'Tabel', 'Terali', 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `psikotes`
--
ALTER TABLE `psikotes`
  ADD PRIMARY KEY (`id_psikotes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `psikotes`
--
ALTER TABLE `psikotes`
  MODIFY `id_psikotes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
