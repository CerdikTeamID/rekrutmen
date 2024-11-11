-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 09:39 AM
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
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `kunjaw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_lowongan`, `pertanyaan`, `option_a`, `option_b`, `option_c`, `option_d`, `kunjaw`) VALUES
(24, 5, 'Nilai (0,8 + 0,9)2 adalah ...', '4.89', '3.69', '3.49', '2.89', 'D'),
(25, 5, 'Nilai 9 merupakan 45% dari bilangan ... \'18\', \'20\', \'36\', \'42\', \'B\'', '18', '20', '36', '42', 'B'),
(26, 5, 'Diketahui bilangan a dan b dengan a > b . Kedua bilangan memenuhi a + b = 42 dan ab = 3 . Nilai a - b adalah .... ', '20', '26', '36', '40', 'C'),
(27, 5, 'Dua buah benda A dan B masing-masing berada pada 2R dan 3R dari permukaan bumi dengan R adalah jari-jari bumi. Jika percepatan gravitasi bumi yang dialami A dan B masing-masing sebesar X dan Y, maka X : Y adalah ....  ', '4 : 9', ' 3 : 4 ', '1 ; 2 ', '9 : 4 ', 'D'),
(28, 5, 'Glukosa direabsorpsi habis dari filtrat ketika berada di ... ', 'kapsula Bowman’s.', 'awal masuk loop Henle.  ', 'ujung akhir tubulus distal.', 'ujung akhir tubulus proksimal.  ', 'D'),
(29, 5, 'Hubungan momen gaya (t) terhadap momen inersia (I) pada sebuah benda yang melakukan gerak rotasi dengan percepatan sudut tetap dinyatakan dengan t berbanding .... ', 'terbalik terhadap I ', ' lurus terhadap I  ', 'terbalik terhadap I  ', 'lurus terhadap I2 ', 'B'),
(30, 5, 'Proses yang paling erat kaitannya dengan kekurangan asam amino adalah terhalangnya ... ', ' replikasi DNA.  ', 'transpor nutrisi. ', ' translasi mRNA.  ', 'absorpsi glukosa.  ', 'C'),
(31, 5, 'Apabila kortek adrenal memproduksi kortisol dalam jumlah besar, kondisi yang terjadi adalah ...  ', 'produksi CRH menurun', 'produksi ACTH meningkat', 'aktivitas hipotalamus meningkat', 'aktivitas kelenjar pituitari anterior akan meningkat ', 'b'),
(32, 5, 'Pernyataan yang benar tentang organ dan fungsinya pada invertebrata adalah ..  ', 'laba-laba bernapas dengan trakea.     ', 'planaria bernapas dengan cara difusi.', 'coelenterata bernapas dengan mesoglea. ', 'tentakel ubur-ubur berfungsi untuk mencerna makanan.  ', 'B'),
(33, 5, 'Komposisi basa sitosin pada E. coli diketahui 20%. Berapa persen komposisi basa adenin?  ', '80% ', '60% ', '40%', '20% ', 'D'),
(34, 6, 'Nilai (0,8 + 0,9)2 adalah ... ', ' 4.89 ', '3.69 ', '3.69 ', '2.89', 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
