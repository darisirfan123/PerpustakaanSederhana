-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 12:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaanku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` varchar(15) NOT NULL,
  `db_namaanggota` varchar(50) NOT NULL,
  `db_passanggota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `db_namaanggota`, `db_passanggota`) VALUES
('20082010001', '123', '123'),
('20082010020', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` varchar(25) NOT NULL,
  `db_judulbuku` varchar(100) NOT NULL,
  `db_penulisbuku` varchar(200) NOT NULL,
  `db_jumlahbuku` int(3) NOT NULL,
  `db_penerbitbuku` varchar(100) NOT NULL,
  `db_tahunterbit` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `db_judulbuku`, `db_penulisbuku`, `db_jumlahbuku`, `db_penerbitbuku`, `db_tahunterbit`) VALUES
('B00100101', 'Laskar Pelangi', 'Andrea Hirata', 9, 'Bentang Pustaka', '2005'),
('B00100102', 'Filosofi Teras', 'Henry Manampiring', 5, 'Kompas', '2018'),
('B00100103', 'Sistem Informasi Manajemen Guna Mendukung Keputusan', 'Tundung Subali Patma, Mohammad Maskan, Alifiulahtin Utaminingsih', 5, 'POLITEKNIK NEGERI MALANG', '2018'),
('B00100104', 'Doraemon Petualangan Volume 1', 'Fujiko F.Fujio', 8, 'Elex Media Komputindo', '1998'),
('B00100105', 'Danau Toba', 'Dede Firmansyah', 6, 'Keira Publishing', '2017'),
('B00100106', 'Magic Hour', 'Tisa TS. & Stanley Meulen', 10, 'Loveable', '2015'),
('B00100107', 'Sistem Informasi Manajemen', 'Hadion Wijoyo, Aris Ariyanto, Agus Sudarsono, Kiki Dwi Wijayanti', 2, 'INSAN CENDEKIA MANDIRI', '2021'),
('B00100108', 'Sejarah Perkembangan Teknologi Informasi dan Komunikasi', 'Hery Nuryanto', 20, 'Balai Pustaka', '2012'),
('B00100109', 'Hujan', 'Tere Liye', 5, 'Gramedia', '2016'),
('B00100110', 'Analisis Proses Bisnis', 'Elly Rahayu, Wan Mariatul Kifti, Rohminatin Rohminatin, Santoso Santoso', 3, 'Yayasan Kita Menulis', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kembali`
--

CREATE TABLE `tb_kembali` (
  `id_kembali` int(11) NOT NULL,
  `db_tanggalkembali` date NOT NULL,
  `db_denda` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kembali`
--

INSERT INTO `tb_kembali` (`id_kembali`, `db_tanggalkembali`, `db_denda`, `id_peminjaman`) VALUES
(1, '2022-07-01', 0, 1),
(2, '2022-07-01', 0, 2),
(3, '2022-07-01', 0, 4),
(4, '2022-07-01', 4500, 3),
(5, '2022-07-01', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `id_anggotapinjam` varchar(15) NOT NULL,
  `id_bukupinjam` varchar(25) NOT NULL,
  `durasi` int(5) NOT NULL,
  `db_tanggalpinjam` date NOT NULL,
  `db_tanggaldurasi` date NOT NULL,
  `db_statuspinjam` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id_pinjam`, `id_anggotapinjam`, `id_bukupinjam`, `durasi`, `db_tanggalpinjam`, `db_tanggaldurasi`, `db_statuspinjam`) VALUES
(1, '20082010001', 'B00100101', 5, '2022-07-01', '2022-07-06', 1),
(2, '20082010001', 'B00100102', 1, '2022-07-01', '2022-07-02', 1),
(3, '20082010001', 'B00100101', 2, '2022-06-14', '2022-06-22', 1),
(4, '20082010001', 'B00100108', 2, '2022-07-01', '2022-07-03', 1),
(5, '20082010001', 'B00100101', 2, '2022-07-01', '2022-07-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`id`, `tgl`) VALUES
(1, '2022-06-07');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_kembali`
-- (See below for the actual view)
--
CREATE TABLE `vw_kembali` (
`id_kembali` int(11)
,`db_tanggalkembali` date
,`db_denda` int(11)
,`id_peminjaman` int(11)
,`id_pinjam` int(11)
,`id_anggotapinjam` varchar(15)
,`id_bukupinjam` varchar(25)
,`durasi` int(5)
,`db_tanggalpinjam` date
,`db_tanggaldurasi` date
,`db_statuspinjam` int(1)
,`db_judulbuku` varchar(100)
,`db_namaanggota` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_pinjam`
-- (See below for the actual view)
--
CREATE TABLE `vw_pinjam` (
`id_buku` varchar(25)
,`db_judulbuku` varchar(100)
,`db_penulisbuku` varchar(200)
,`db_jumlahbuku` int(3)
,`db_penerbitbuku` varchar(100)
,`db_tahunterbit` varchar(4)
,`id_pinjam` int(11)
,`id_anggotapinjam` varchar(15)
,`durasi` int(5)
,`db_tanggalpinjam` date
,`db_tanggaldurasi` date
,`db_statuspinjam` int(1)
,`db_namaanggota` varchar(50)
,`id_anggota` varchar(15)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_kembali`
--
DROP TABLE IF EXISTS `vw_kembali`;

CREATE ALGORITHM=UNDEFINED DEFINER=`usercpanel`@`localhost` SQL SECURITY DEFINER VIEW `vw_kembali`  AS SELECT `usercpanel_tb_kembali`.`id_kembali` AS `id_kembali`, `usercpanel_tb_kembali`.`db_tanggalkembali` AS `db_tanggalkembali`, `usercpanel_tb_kembali`.`db_denda` AS `db_denda`, `usercpanel_tb_kembali`.`id_peminjaman` AS `id_peminjaman`, `usercpanel_tb_pinjam`.`id_pinjam` AS `id_pinjam`, `usercpanel_tb_pinjam`.`id_anggotapinjam` AS `id_anggotapinjam`, `usercpanel_tb_pinjam`.`id_bukupinjam` AS `id_bukupinjam`, `usercpanel_tb_pinjam`.`durasi` AS `durasi`, `usercpanel_tb_pinjam`.`db_tanggalpinjam` AS `db_tanggalpinjam`, `usercpanel_tb_pinjam`.`db_tanggaldurasi` AS `db_tanggaldurasi`, `usercpanel_tb_pinjam`.`db_statuspinjam` AS `db_statuspinjam`, `usercpanel_tb_buku`.`db_judulbuku` AS `db_judulbuku`, `usercpanel_tb_anggota`.`db_namaanggota` AS `db_namaanggota` FROM (((`usercpanel_tb_pinjam` join `usercpanel_tb_anggota` on(`usercpanel_tb_anggota`.`id_anggota` = `usercpanel_tb_pinjam`.`id_anggotapinjam`)) join `usercpanel_tb_buku` on(`usercpanel_tb_buku`.`id_buku` = `usercpanel_tb_pinjam`.`id_bukupinjam`)) join `usercpanel_tb_kembali` on(`usercpanel_tb_kembali`.`id_peminjaman` = `usercpanel_tb_pinjam`.`id_pinjam`))  ;

-- --------------------------------------------------------

--
-- Structure for view `vw_pinjam`
--
DROP TABLE IF EXISTS `vw_pinjam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`usercpanel`@`localhost` SQL SECURITY DEFINER VIEW `vw_pinjam`  AS SELECT `usercpanel_tb_buku`.`id_buku` AS `id_buku`, `usercpanel_tb_buku`.`db_judulbuku` AS `db_judulbuku`, `usercpanel_tb_buku`.`db_penulisbuku` AS `db_penulisbuku`, `usercpanel_tb_buku`.`db_jumlahbuku` AS `db_jumlahbuku`, `usercpanel_tb_buku`.`db_penerbitbuku` AS `db_penerbitbuku`, `usercpanel_tb_buku`.`db_tahunterbit` AS `db_tahunterbit`, `usercpanel_tb_pinjam`.`id_pinjam` AS `id_pinjam`, `usercpanel_tb_pinjam`.`id_anggotapinjam` AS `id_anggotapinjam`, `usercpanel_tb_pinjam`.`durasi` AS `durasi`, `usercpanel_tb_pinjam`.`db_tanggalpinjam` AS `db_tanggalpinjam`, `usercpanel_tb_pinjam`.`db_tanggaldurasi` AS `db_tanggaldurasi`, `usercpanel_tb_pinjam`.`db_statuspinjam` AS `db_statuspinjam`, `usercpanel_tb_anggota`.`db_namaanggota` AS `db_namaanggota`, `usercpanel_tb_anggota`.`id_anggota` AS `id_anggota` FROM ((`usercpanel_tb_pinjam` join `usercpanel_tb_anggota` on(`usercpanel_tb_pinjam`.`id_anggotapinjam` = `usercpanel_tb_anggota`.`id_anggota`)) join `tb_buku` on(`usercpanel_tb_pinjam`.`id_bukupinjam` = `usercpanel_tb_buku`.`id_buku`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
