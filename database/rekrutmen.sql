-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 01:23 AM
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
-- Table structure for table `apply_job`
--

CREATE TABLE `apply_job` (
  `id_apply_job` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `hasil_test` int(11) DEFAULT NULL,
  `hasil_psikotes` int(11) DEFAULT NULL,
  `status_hasil` varchar(255) NOT NULL,
  `tgl_lamar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`id_apply_job`, `id_user`, `id_pelamar`, `id_lowongan`, `hasil_test`, `hasil_psikotes`, `status_hasil`, `tgl_lamar`) VALUES
(3, 2, 1, 6, 80, 100, 'Sedang Di Proses', '2022-06-23'),
(4, 2, 1, 5, 80, 79, 'Sedang Di Proses', '2022-07-11'),
(5, 3, 3, 7, 78, 77, 'Di Proses', '2022-09-23'),
(6, 4, 4, 8, 80, 79, 'Di Proses', '2024-06-12'),
(7, 2, 1, 6, 77, 76, 'Di Proses', '2024-06-12'),
(8, 6, 2, 7, 80, 89, 'Menunggu', '2024-06-12'),
(9, 2, 1, 8, 88, 78, 'Menunggu', '2024-06-12'),
(10, 5, 5, 9, 80, 90, 'Menunggu', '2024-06-12'),
(11, 5, 5, 5, 78, 98, 'Menunggu', '2024-06-12'),
(12, 3, 3, 6, 77, 78, 'Menunggu', '2024-06-12'),
(13, 3, 3, 8, 90, 76, 'Menunggu', '2024-06-12'),
(14, 6, 2, 5, 90, 90, 'Diterima', '2024-06-13'),
(15, 4, 4, 6, 80, 90, 'Diterima', '2024-06-12'),
(16, 5, 5, 5, 80, 70, 'Diterima', '2024-06-11'),
(17, 4, 4, 5, 80, 60, 'Diterima', '2024-06-12'),
(18, 3, 3, 10, 80, 80, 'Diterima', '2024-06-12'),
(19, 6, 2, 10, 80, 90, 'Lolos Seleksi', '2024-06-23'),
(20, 6, 5, 8, 80, 70, 'Lolos Seleksi', '2024-06-23'),
(21, 4, 4, 7, 80, 60, 'Lolos Seleksi', '2024-06-23'),
(22, 5, 5, 8, 80, 80, 'Menunggu', '2024-06-02'),
(23, 4, 4, 5, 80, 90, 'Menunggu', '2024-06-02'),
(24, 5, 5, 6, 80, 70, 'Di Proses', '2024-06-03'),
(25, 4, 4, 6, 80, 60, 'Tidak Diterima', '2024-02-23'),
(26, 2, 1, 9, 80, 80, 'Tidak Diterima', '2024-04-23'),
(27, 2, 1, 10, NULL, NULL, 'Lolos Seleksi', '2024-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `id_bahasa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa_asing` varchar(255) NOT NULL,
  `tingkat_keahlian_bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`id_bahasa`, `id_user`, `bahasa_asing`, `tingkat_keahlian_bahasa`) VALUES
(1, 2, 'Inggris', 'Baik'),
(2, 9, 'Inggris', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `id_departement` int(11) NOT NULL,
  `nama_departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`id_departement`, `nama_departement`) VALUES
(1, 'Non Staff'),
(2, 'Tenaga Kesehatan'),
(3, 'Staff'),
(4, 'Tenaga Pembantuan');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(3, 'Dokter Umum'),
(4, 'Dokter Spesialis'),
(5, 'Apoteker'),
(6, 'Therapis');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `id_keahlian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterampilan` varchar(255) NOT NULL,
  `tingkat_keahlian_keterampilan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`id_keahlian`, `id_user`, `keterampilan`, `tingkat_keahlian_keterampilan`) VALUES
(1, 2, 'Bahasa Pemrograman PHP', 'Sedang'),
(2, 2, 'LARAVELs', 'Sangat Baik'),
(3, 2, 'CODEIGNITER', 'Sangat Baik'),
(4, 2, 'JQUERY', 'Ahli'),
(5, 9, 'LARAVEL', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `nama_lowongan` varchar(255) NOT NULL,
  `id_departement` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `max_usia` int(11) NOT NULL,
  `min_pend` varchar(255) NOT NULL,
  `jurusan_pend` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `id_test` int(11) DEFAULT NULL,
  `id_psikotes` int(11) DEFAULT NULL,
  `tgl_close` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `nama_lowongan`, `id_departement`, `id_jabatan`, `max_usia`, `min_pend`, `jurusan_pend`, `salary`, `deskripsi`, `kriteria`, `id_test`, `id_psikotes`, `tgl_close`, `status`) VALUES
(3, 'Web Developer', 1, 2, 24, 'D4/S1', 'Teknik Informatika', 6000000, 'test', 'Web Development', 3, 3, '2024-06-18', 1),
(4, 'IT Programmer', 1, 2, 23, 'D3', 'Teknik Informatika', 6000000, 'Test', 'test', 4, 4, '2024-06-19', 1),
(5, 'Dokter Spesialis Anastesi', 2, 4, 40, 'S2', 'Spesialis Anastesi', 6000000, 'RS Anna Pekayon membuka kesempatan karir untuk Dokter Spesialis Anastesi Fulltimer. Adapun kualifikasi dan persyaratan sebagai berikut:\r\n\r\n1. Berpendidikan Spesialis Anastesi\r\n2. Memiliki STR aktif\r\n3. Bersedia ditempatkan di RS Hermina Jatinegara sebagai fulltimer', '', 3, 4, '2026-06-16', 1),
(6, 'Dokter Spesialis Neurologi', 2, 4, 50, 'S2', 'Spesialis Neurologi', 6000000, 'RS Anna Pekayon membutuhkan Dokter Spesialis Neurologi dengan persyaratan sbb :\r\n\r\n', '1. Berpendidikan S2 Neurolog 2. Memiliki STR aktif 3. Bersedia menjadi Dokter Spesialis Fulltimer 4. Bersedia di tempatkan di RS Anna Pekayon', 4, 3, '2026-06-12', 1),
(7, 'Dokter Spesialis Patologi Anatomi', 2, 4, 50, 'S2', 'Spesialis Patologi Anatomi', 6000000, 'RS Anna membutuhkan Dokter Spesialis Patologi Anatomi dengan persyaratan sbb :\r\n\r\n1. Berpendidikan S2 Patologi Anatomi\r\n2. Memikili STR aktif\r\n3. Bersedia menjadi Dokter Fulltimer\r\n4. Bersedia di tempatkan di RS Anna Pekayon', '', 4, 3, '2026-07-12', 1),
(8, 'Spesialis Obstetri dan Ginekologi', 2, 4, 50, 'S2', 'Spesialis Obstetri dan Ginekologi', 6000000, 'RS Anna Pekayon membuka kesempatan bergabung bagi Dokter Spesialis Obstetri dan Ginekologi, adapun kualifikasi dan persyaratan adalah sbb :\r\n\r\n1. Berpendidikan Spesialis Obstetri dan Ginekologi\r\n2. Bersedia menjadi Dokter Speslialis Fulltimer Karyawan\r\n3. Memiliki STR yang aktif', '', 4, 3, '2026-06-12', 1),
(9, 'Dokter Umum', 2, 3, 50, 'D4/S1', 'S1 Profesi Kedokteran', 5000000, 'RS Anna Pekayon membuka lowongan bagi para Dokter Umum untuk bergabung dengan kami, adapun kualifikasi adalah sbb :\r\n\r\n1. Berpendidikan S1 Profesi Kedokteran\r\n2. Memiliki STR aktif\r\n3. Memiliki sertifikat ACLS ', '', 3, 4, '2026-03-25', 1),
(10, 'DOKTER SPESIALIS ANASTESI', 2, 4, 50, 'S2', 'Spesialis Anastesi', 5000000, '', '', 3, 4, '2026-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pelamar` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(255) NOT NULL,
  `status_kawin` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `no_npwp` varchar(255) NOT NULL,
  `sim` varchar(255) NOT NULL,
  `no_sim` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `alamat_domisili` varchar(255) NOT NULL,
  `status_tempat_tinggal` varchar(255) NOT NULL,
  `foto_pelamar` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`id_pelamar`, `id_user`, `nama_pelamar`, `no_ktp`, `email`, `hp`, `tempat_lahir`, `tgl_lahir`, `jk`, `status_kawin`, `kewarganegaraan`, `agama`, `no_npwp`, `sim`, `no_sim`, `alamat`, `alamat_domisili`, `status_tempat_tinggal`, `foto_pelamar`, `cv`) VALUES
(1, 2, 'Imam at tirmidi', '3275012304971234', 'abibaskara211@gmail.com', '0822999151278', 'Bandung', '1999-09-17', 'Laki-Laki', '', '', 'Islam', '', '', '', '', 'Test', '', 'foto_imam_at_tirmidi1.jpg', 'Curriculum_Vitae.pdf'),
(2, 6, 'Vallent Perkasa', '21213123', 'vallent@gmail.com', '012837129321', 'Bandung', '1999-09-17', 'Laki-Laki', 'Menikah', 'WNI', 'Islam', '73128901293810', 'SIM C', '329847230717289', 'test', 'jalan raya pekayon', 'Milik Sendiri', 'Foto_Abi_Baskara_A.jpeg', 'Abi_baskara_atthallah_(1).pdf'),
(3, 3, 'Imam At Tirmidi', '3209201709990012', 'abibaskara211@gmail.com', '0822999151278', 'Bandung', '1999-09-17', 'Laki-Laki', 'Lajang', 'WNI', 'Islam', '73128901293810', 'SIM C', '329847230717289', 'Test', 'Test', 'Milik Orang Tua', 'foto_imam_at_tirmidi.jpg', 'Note_program_Rendy_Jereniko1.pdf'),
(4, 4, 'Nugi Nugroho', '21213123', 'Nugi230@gmail.com', '012837129321', 'Bandung', '1999-09-17', 'Laki-Laki', 'Menikah', 'WNI', 'Islam', '73128901293810', 'SIM C', '329847230717289', 'test', 'test', 'Milik Sendiri', 'Foto_Abi_Baskara_A.jpeg', 'Abi_baskara_atthallah_(1).pdf'),
(5, 5, 'M Zaelani', '3209201709990012', 'Zaelani230@gmail.com', '0822999151278', 'Bandung', '1999-09-17', 'Laki-Laki', 'Lajang', 'WNI', 'Islam', '73128901293810', 'SIM C', '329847230717289', 'Test', 'Test', 'Milik Orang Tua', 'indosat_baru1.png', 'Note_program_Rendy_Jereniko1.pdf'),
(6, 1, 'Baskara ', '35769021213123', 'vallent@gmail.com', '012837129321', 'Bandung', '1999-09-17', 'Laki-Laki', 'Menikah', 'WNI', 'Islam', '73128901293810', 'SIM C', '329847230717289', 'test', 'test', 'Milik Sendiri', 'Foto_Abi_Baskara_A.jpeg', 'Abi_baskara_atthallah_(1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `start_year` varchar(255) NOT NULL,
  `end_year` varchar(255) NOT NULL,
  `nilai_pend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `id_user`, `pendidikan_terakhir`, `nama_sekolah`, `kota`, `jurusan`, `start_year`, `end_year`, `nilai_pend`) VALUES
(1, 2, 'Strata Satu (S1)', 'Politeknik Negeri Jakarta', 'Depok', 'Teknik Informatika', '2022-06', '2022-06', '3'),
(2, 2, 'SMA/SMK Sederajat', 'SMA Pasundan 1 Bandung', 'Bandung', 'IPAs', '2021-01', '2022-06', '34.5'),
(3, 6, 'Strata Satu (S1)', 'Politeknik Negeri Jakarta', 'Kota Depok', 'Teknik Informatika', '2022-09', '2022-12', '3.46'),
(4, 3, 'Strata Satu (S1)', 'Politeknik Negeri Jakarta', 'Depok', 'Teknik Informatika', '2022-06', '2022-06', '3'),
(5, 3, 'SMA/SMK Sederajat', 'SMA Pasundan 1 Bandung', 'Bandung', 'IPAs', '2021-01', '2022-06', '34.5'),
(6, 4, 'Strata Satu (S1)', 'Politeknik Negeri Jakarta', 'Depok', 'Teknik Informatika', '2022-06', '2022-06', '3'),
(7, 4, 'SMA/SMK Sederajat', 'SMA Pasundan 1 Bandung', 'Bandung', 'IPAs', '2021-01', '2022-06', '34.5'),
(8, 5, 'Strata Satu (S1)', 'Politeknik Negeri Jakarta', 'Depok', 'Teknik Informatika', '2022-06', '2022-06', '3'),
(9, 5, 'SMA/SMK Sederajat', 'SMA Pasundan 1 Bandung', 'Bandung', 'IPAs', '2021-01', '2022-06', '34.5'),
(10, 1, 'Strata Satu (S1)', 'Politeknik Negeri Jakarta', 'Depok', 'Teknik Informatika', '2022-06', '2022-06', '3'),
(11, 1, 'SMA/SMK Sederajat', 'SMA Pasundan 1 Bandung', 'Bandung', 'IPAs', '2021-01', '2022-06', '34.5'),
(12, 6, '', 'SMKN Negeri 1 Padang', 'Kota Padang', 'Rekayasa Perangakat Lunak', '2019-05', '2022-05', '89');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `posisi_terakhir` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `jabatan_terakhir` varchar(255) NOT NULL,
  `mulai_bekerja` varchar(255) NOT NULL,
  `berakhir_bekerja` varchar(255) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `gaji_insentif` int(11) NOT NULL,
  `fasilitas_terakhir` text NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `id_user`, `posisi_terakhir`, `perusahaan`, `jabatan_terakhir`, `mulai_bekerja`, `berakhir_bekerja`, `gaji_pokok`, `gaji_insentif`, `fasilitas_terakhir`, `alasan`) VALUES
(1, 2, 'Web Development', 'PT Anugrah Inti Artha Mandiri', 'Web Development', '2022-06', '2022-06', 5000000, 5000000, 'test', 'test'),
(2, 2, 'IT Programmer', 'LINTASARTA', 'IT Programmer', '2022-01', '2022-06', 6000000, 6000000, 'test', 'test'),
(3, 2, 'IT Programmer12', 'LINTASARTA12', 'IT Programmer1', '2022-01', '2022-06', 1000000, 1000000, 'test2', 'test23'),
(4, 2, 'IT Programmer2', 'LINTASARTA2', 'IT Programmer2', '2022-01', '2022-12', 1200000, 1200000, 'test', 'test'),
(5, 9, 'Web Development', 'LINTASARTA', 'Web Development', '2022-08', '2022-12', 5400000, 1000000, 'test', 'test');

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
(2, 4, 'test pertanyaan 131', 'ini pilihan a13', 'ini pilihan b13', 'ini pilihan c31', 'ini pilihan d13', 'A');

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
(7, 3, 'Ini Contoh Pertanyaan 1', 'ayam', 'kucing', 'anjing', 'sapi', 'D'),
(8, 3, 'test pertanyaan 12', 'ini pilihan a2', 'ini pilihan b2', 'ini pilihan c2', 'ini pilihan d2', 'A'),
(9, 3, 'test pertanyaan 13', 'ini pilihan a3', 'ini pilihan b3', 'ini pilihan c3', 'ini pilihan d3', 'A'),
(10, 3, 'Test pertnyaan 14', 'ini pilihan a4', 'ini pilihan b4', 'ini pilihan c4', 'ini pilihan d4', 'C'),
(11, 3, 'test pertanyaan 15', 'ini pilihan a5', 'ini pilihan b5', 'ini pilihan c5', 'ini pilihan d5', 'B'),
(12, 4, 'test pertanyaan 1', 'ini pilihan a', 'ini pilihan b', 'ini pilihan c', 'ini pilihan d', 'A'),
(14, 5, 'Kisi-kisi =.... ', 'Alat menangkap ikan', ' Alat hitung ', 'Tabel', 'Terali', 'D'),
(15, 5, 'Mudun = .... ', 'Problema ', 'Beradab ', 'Referensi ', 'Setuju ', 'B'),
(16, 5, 'Boga =.... ', ' Pakaian kebesaran  ', 'Makanan kenikmatan  ', 'Dekorasi tataruang  ', 'Pakaianpengantin ', 'B'),
(17, 5, 'Anjung=....  ', 'Dayung  ', 'Panggung  ', 'Buyung  ', 'Puji ', 'B'),
(18, 5, 'Friksi =....  ', 'Perpecahan  ', 'Tidak berdaya  ', 'Frustasi  ', 'Sedih ', 'A'),
(19, 5, 'Surai >< .... ', 'Bubar  ', 'Usai  ', 'Purna  ', 'Berhimpun ', 'D'),
(20, 5, 'Rabun >< ....  ', 'Terang', 'Tajam  ', 'Jelas  ', 'Tepat ', 'C'),
(21, 5, 'Penerus >< ....  ', 'Pewaris   ', 'Kader  ', 'Perintis  ', 'Penerus', 'C'),
(22, 5, 'Hipokrit >< .... ', ' Jujur  ', 'Pembohong  ', 'Sabar  ', 'Kamuflase ', 'A'),
(23, 5, 'Otonomi : Mandiri = ….  ', 'Hardisk : VGA card  ', 'Sabun : Mandi  ', 'Cerdas : Banyak akal ', ' Bensin : Mesin ', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-20 20:44:12', 0),
(3, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ini adalah pesan ', '2017-06-20 20:45:57', 0),
(5, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-20 20:53:19', 0),
(7, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Hi, there!', '2017-07-01 00:28:08', 0),
(8, 'M Fikri', 'fikrifiver97@gmail.com', '084375684364', 'Hi There, Would you please help me about register?', '2018-08-06 06:51:07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT 0,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT 0,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(20, 'SEJUMLAH PESERTA DIDIK SMAN 78 MASUK PTN MELALUI JALUR PRESTASI', '<p>Tahun Pelajaran 2018/2019 Sejumlah Peserta didik SMAN 78 Jakarta di terima di perguruan Tinggi Negeri melalui Jalur prestasi, diantaranya masuk melalui jalur Seleksi Nasional Perguruan tinggi Negeri (SNMPTN) berjumlah 58 siswa.</p>\r\n\r\n<p>Mereka merupakan putra putri terbaik yang memiliki prestasi akademik 40% terbaik di sekolah dan terseleksi melalui jalur raport tanpa test. Kampus yang bakal mereka tempati seperti di UI, ITB, UGM, UNJ dan lain sebagainya.</p>\r\n\r\n<p>Selain melalui jalur SNMPTN ada juga sebanyak 34 siswa dari SMAN 78 Jakarta juga diterima di jalur prestasi dan pemerataan kesempatan Belajar Universitas Indonesia (PPKB Paralel UI) yaitu salah satu jalur penerimaan yang di selenggarakan oleh UI yang menggunakan nilai raport tanpa test untuk siswa-siswi yang berminat melanjutkan pendidikan tingginya di Universitas Indonesia.</p>\r\n\r\n<p>Sedangkan 1 siswa SMAN 78 atas nama Rachmadana Fajri Majid juga merupakan salah satu siswa yang diterima di UI melalui jalur Talent Scouting, yaitu satu jalauryang diselenggarakan oleh kampus UI melalui jalur raport tanpa test untuk program Kleas Internasional.</p>\r\n\r\n<p>Satu hal lagi yang juga patut kita syukuri adalah Beberapa siswa SMAN 78 juga telah diterima di perguruan tinggi luar Negeri seperti Jepang, Kanada, dan belanda, baik melalaui jalur tes maupun beasiswa yang diselenggarakan oleh Pihak Universitas di Luar Negeri.</p>\r\n\r\n<p>Proses seleksi yang harus mereka lewati tidak hanya melalui nilai prestasi akademik tetapi juga prestasi non akademik, Kemampuan bahasa asing yang dibuktikan dengan sertifikat, penulisan Essay dan juga wawancara. Siswa-siswi tidak hanya berkompetisi dengan siswa dari dalam negeri saja tetapi mereka juga harus bersaing dengan pelajar seluruh dunia. Semoga sukses.</p>\r\n', '2020-02-05 02:24:42', 1, 'Pendidikan', 28, '4add43a5d93fc3ba8a81869127e11f99.jpg', 1, 'Muris Studio', 0, 'sejumlah-peserta-didik-sman-78-masuk-ptn-melalui-jalur-prestasi'),
(22, 'UPACARA HARI LAHIR PANCASILA 1 JUNI DI SMAN 78 JAKARTA BERLANGSUNG KHIDMAD', '<p>Hari Sabtu, 1 Juni 2019 bertepatan dengan 27 Ramadhan 1440 H, SMA Negeri 78 Jakarta melaksanakan Upacara hari kelahiran Pancasila bertempat di lapangan sekolah.</p>\r\n\r\n<p>Ada yang menarik dari upacara kali ini karena pertama: bertepatan dengan bulan suci Ramadhan hari yang ke 27 dan beberapa guru maupun karyawan ada yang sudah pulang kampung halaman dalam menyambut hari raya Idul Fitri, kedua : Kepala sekolah meminta agar yang sudah pulang kampung ikut melaksanakan upacara di wilayah masing-masing dengan bergabung ke sekolah atau instansi terdekat.</p>\r\n\r\n<p>Mantap ternyata integritas tetap terjaga, anjuran dari Bapak Kepala Sekolah (Dr. Saryono, M.Si) dilaksanakan dengan penuh amanah terpantau beberapa guru dan karyawan SMAN 78 melaksanakan Upacara hari lahir pancasila di SMAN 6 Jogjakarta, SMAN 1 Gombong-jateng SMAN 2 PLG, SMAN 1 Leuwiliang Bogor, SMAN 1 Simo Boyolali, SMPN 1 Gombong, dan lain sebagainya. Laporan ini didapat dari bukti fisik berupa foto dan surat keterangan melaksanakan upacara yang ditandatangani oleh kepala sekolahnya.</p>\r\n\r\n<p>Mereka disambut dengan senang hati. Salah satu peserta upacara dari SMAN 78 Jakarta ( Ibu Yuliana Guru Kimia) yang upacara di SMAN 1 Simo Boyolali menuturkan &quot; Kami di sambut dengan sangat welcome, senang sekali rasanya&quot;. Di SMAN 78 Jakarta upacara juga berlangsung dengan khidmad, peserta upacara dari unsur pendidik, tenaga kependidikan dan peserta didik.</p>\r\n\r\n<p>Petugas pembina upacara Kepala Sekolah Dr. Saryono, Msi, petugas lainya dari unsur ekskul Paskib, Ekskul PKS dan Paduan Suara dengan menyanykan lagu Garuda pancasila dan Mars SMAN 78 Jakarta. Dalam sambutannya Kepala sekolah mengatakan &quot; Mari bersama-sama kita semua mengimplementasikan Pancasila dalam kehidupan sehari-hari sebagai wujud kecintaan kita pada NKRI dan Pancasila&quot;.</p>\r\n\r\n<p>&quot;Saya Indonesia&quot; peserta upacara menjawab&quot; Saya Pancasila &quot; kalimat penutup pembina upacara hari kelahiran Pancasila dan juga di akhiri dengan tepuk tangan seluruh peseta upacara. Sekian dan terima kasih.</p>\r\n', '2020-02-05 02:24:42', 3, 'Sains', 9, 'a49888c350ee1037ab856b95ac26aa03.jpg', 1, 'Muris Studio', 0, 'upacara-hari-lahir-pancasila-1-juni-di-sman-78-jakarta-berlangsung-khidmad'),
(23, 'PELEPASAN PESERTA DIDIK KELAS XII ANGKATAN KE- 42', '<p>Kegiatan Pelepasan Peserta didik Kelas XII anggkatan KE 42 di laksanakan di Hotel Pullman Jakarta tanggal 13 Mei 2019 dalam suasana Bulan Ramadhan 1440 H.</p>\r\n\r\n<p><br />\r\nMeskipun dilaksanakan pada bulan puasa acara tetap berlangsung kidmad dan lancar. Acara pelepasan ini di hadiri oleh Kepala Suku Dinas Pendidikan Wilayah Jakarta Barat 2 Ibu Urip Asih, M.Pd, Pengawas SMAN 78 Ibu Hj.Nurul Muftahidah,M.Pd, Komite sekolah, Perwakilan Ikatan Alumni Sekolah (IAS), guru purna bhakti, dan orang tua siswa yang sangat berbahagia melihat putra putrinya lulus dari jenjang SMA dengan prestasi yang membanggakan.</p>\r\n\r\n<p>Dalam Sambutannya Kepala SMAN 78 Jakarta Dr. Saryono, M.si Mengatakan bahwa &quot;stakesholder Sekolah harus mampu melayani sepenuh hati untuk mendulang prestasi dan menjaga Prestasi&quot;.</p>\r\n\r\n<p>Tahun ini (Tahun pelajaran 2018/2019) Kita patut bersyukur karena banyak prestasi yang bisa diraih oleh SMAN 78 diantaranya: 87 siswa mendapat nilai 100, rangking 5 besar UN tingkat DKI Jakarta untuk program Ilmu-ilmu Sosial. Acara Pelepasan kelas XII ini Juga dimeriahkan oleh penampilan Ekskul Paduan suara, Tari, Marawis dan solo vokal.</p>\r\n\r\n<p>Ada yang beda dari pelaksanaan pelepasan tahun ini yang biasanya diselenggarakan di lapangan sekolah kali ini dilaksanakan di luar sekolah, tentu kegiatan ini didukung oleh orang tua siswa, komite serta Ikatan Alumni Sekolah.</p>\r\n', '2020-02-05 02:24:42', 5, 'Penelitian', 6, '217410a33b775e40cbdc57e079ce2b4c.jpg', 1, 'Muris Studio', 0, 'pelepasan-peserta-didik-kelas-xii-angkatan-ke--42'),
(24, 'DUA SISWA SMA NEGERI 78 MENGIKUTI JAMBORE KEPANDUAN SEDUNIA KE- 24 DI VIRGINIA, AMERIKA SERIKAT', '<p>Raden Akbar Wira Dharma kelas XI MIPA E dan M. Raihan Adityaputra kelas XI MIPA C adalah dua siswa terbaik SMA Negeri 78 Jakarta mendapat kesempatan mengikuti kegiatan Jambore Kepanduan sedunia ke-24 tahun 2019. 24th World Scout Jamboree 2019 Kegiatan ini diikuti sekitar 50.000 peserta dari 170 negaradan teritori. Kegiatan jambore dunia ini di laksanakan dari tanggal 22 Juli sampai 2 Agustus 2019 bertempat di Summit Bechtel Reserve, West Virginia, Amerika Serikat.</p>\r\n\r\n<p>Kegiatan Kepanduan Jambore dunia ke- 24 ini mengangkat tema &#39;membuka kunci dunia&#39;. Semoga kegiatan ini memberikan pencerahan dalam dunia kepanduan dan masing-masing peserta memiliki kompetensi unggul dalam bidang kepramukaan sehingga punya kontribusi dalam memajukan kegiatan kepramukaan di sekolahnya. Kepal a SMA Negeri 78 Jakarta DR. Saryono, M.Si mengatakan&#39;Selamat untuk siswa dari 78 kalian tunas bangsa hebat bisa mengikuti Jambore dunia, raih pengalamn sebanyak-banyaknya dan bagikan kepada teman-teman yang lain , sehingga kegiatan kepramukaan di SMA Negeri 78 akan lebih baik&#39;.</p>\r\n', '2020-02-05 02:24:42', 6, 'Prestasi', 163, '9e67a59d62319ae27a5d7b87688faaf7.jpg', 1, 'Muris Studio', 0, 'dua-siswa-sma-negeri-78-mengikuti-jambore-kepanduan-sedunia-ke--24-di-virginia,-amerika-serikat'),
(25, 'Membangun Mutu Pendidikan Melalui Kemitraan Sekolah', '<p>Lima hari di Malinau memberikan pengalaman yg menorehkan warna dalam hidupku.<br />\r\nTugas yg diberikan Kemendikbud satu persatu aku tunaikan. Hari pertama kunjungan ke SMAN 1 mendapat sambutan yg hangat penuh persahabatan, didahului upacara bendara dan tarian khas 4 budaya: Tidung,Bugis,Dayak Lundayeh,dan Dayak Kenya. Anak2 yg gagah dan cantik, menyajikan hiburan penuh kegembiraan.</p>\r\n\r\n<p>Hari kedua ke SMAN 3 dan hari ketiga ke SMAN 8 hampir sama tetapi tanpa tarian khas etnis Tidung dan Bugis. Namun tidak mengurangi kesemaraan seremonial pagi itu.</p>\r\n\r\n<p>Segenap warga sekolah tumpah di lapangan merasakan kegembiraan. Supervisi thd 2 guru matematika di dua sekolah yg berbeda memberi informasi bahwa pemerintah tidak boleh merasa lelah untuk terus memberi penguatan tentang konsep pembelajaran abad 21 dg dimensi :4C,Literasi dan Character Building.</p>\r\n\r\n<p>Di hari terakhir supervisi guru matemtika barulah saya mendapakan seorang guru muda, energik,suara lantang, menguasai konsep dan melakukan pendekatan pembelajaran yg mencerdaskan, membangun konsep, dg alat bantu yg kreatif, suasana kelas hidup, dan anak2 bahagia mengikuti pelajaran. Panggilan singkat guru muda tsb Pak Tri (30 ) terlihat menerapkan metode 4C, mengajak anak browsing (literasi), dan mengajak siswa bersyukur atas anugrah yg diberikan Tuhan ( membangun karakter ).</p>\r\n\r\n<p>Pemerintah melalui berbagai program harus terus membangun kompetensi profesional guru. Fokus penguatan tetap metode pada metide pembelajaran abad 21. Kurikulum 2013 dg pendekatan pembelajaran abad 21 diharapkan dpt mencerdaskan anak2 Indonesia.</p>\r\n', '2020-02-05 02:24:42', 1, 'Pendidikan', 22, '67b03f7b75700396f6ca684c052c83a9.jpg', 1, 'Muris Studio', 0, 'membangun-mutu-pendidikan-melalui-kemitraan-sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id_training` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `training` varchar(255) NOT NULL,
  `sertifikasi` varchar(255) NOT NULL,
  `penyelenggara` varchar(255) NOT NULL,
  `tahun_pelatihan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id_training`, `id_user`, `training`, `sertifikasi`, `penyelenggara`, `tahun_pelatihan`) VALUES
(1, 2, 'CISCO', 'CISCO', 'KSP', '2022-06'),
(2, 2, 'Junior Web Programmers', 'KSPTIK', 'KSPTIK', '2022-06'),
(3, 9, 'CISCO', 'CISCO', 'KSP', '2022-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `role` enum('Admin','HRD','Kaur','Pelamar','User','Direktur') NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT 'default.png',
  `password` varchar(255) NOT NULL,
  `is_active` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `role`, `email`, `no_telp`, `foto`, `password`, `is_active`) VALUES
(1, 'Baskara', 'User', 'baskara@gmail.com', '0822999151127', 'default.png', '$2y$10$Bo/6E6a6OQh6Gj2LeI0O0.fOGvUk4sVfC.m5hGdixvnBXDyNXOLS.', '1'),
(2, 'User', 'Pelamar', 'user@gmail.com', '0812345678', 'i.jpg', '$2y$10$6aFVvy2Ruld237BQPe1TCe/AazzIzkAIkUq2Frq8zZYJaYDwa../6', '1'),
(3, 'Imam At Tirmidi', 'Pelamar', 'midisyah@gmail.com', '082299915127', 'Foto_-_Imam_At_Tirmidi_.PNG', '$2y$10$1bLDRcJ0qISuNRT7.PYry.8iu3e0M9YJnLoG1MrzDYzjvfynI/eUi', '1'),
(4, 'Nugi Nugroho', 'User', 'Nugi230@gmail.com', '0812345678', 'work.png', '$2y$10$6aFVvy2Ruld237BQPe1TCe/AazzIzkAIkUq2Frq8zZYJaYDwa../6', '1'),
(5, 'M Zaelani', 'Pelamar', 'Zaelani230@gmail.com', '082299915127', 'default.png', '$2y$10$NoeLzPUkP.AJ8v47jOiqIe799AngxH63pXPZ0vMfOyJV.qRvxTmIW', '1'),
(6, 'Puji Astuti', 'Pelamar', 'Pujiastuti@gmail.com', '082299915127', 'default.png', '$2y$10$KrM9X9lOYdw86DecvER.DuJH68RvR7G.w5O0rPBLFtHavwPDxHQ9G', '1'),
(7, 'Kepala Urusan', 'Kaur', 'kaur@gmail.com', '082299915127', 'graduate.png', '$2y$10$U7uvTmNpXQfOunub1ciVdO8FnwEuqXJz59gEO4OkyAETTbkm2m8BG', '1'),
(8, 'Abi Baskara Atthallah', 'Direktur', 'direktur@gmail.com', '082299915127', 'f.jpg', '$2y$10$1bLDRcJ0qISuNRT7.PYry.8iu3e0M9YJnLoG1MrzDYzjvfynI/eUi', '1'),
(10, 'HRD Abi Baskara A', 'HRD', 'hrd@gmail.com', '082299915127', 'default.png', '$2y$10$NoeLzPUkP.AJ8v47jOiqIe799AngxH63pXPZ0vMfOyJV.qRvxTmIW', '1'),
(12, 'Jufri Nichol', 'User', 'jufri@gmail.com', '0876282338391', 'default.png', '$2y$10$YHsaceimJ8rN7cImRN6l9e3d9dllbpJiEFOuspId0UwXDix3wny8C', '1'),
(13, 'Nurul Khofifah', 'User', 'nurul@email.com', '081234893178', 'default.png', '$2y$10$Yfe/o7zdJ3InZeiDv4n4VukEVk8.3q.AwnRlGqZkiTufHxyJqAWcG', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`id_apply_job`);

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_departement`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `psikotes`
--
ALTER TABLE `psikotes`
  ADD PRIMARY KEY (`id_psikotes`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_training`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `id_apply_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id_departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `psikotes`
--
ALTER TABLE `psikotes`
  MODIFY `id_psikotes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
