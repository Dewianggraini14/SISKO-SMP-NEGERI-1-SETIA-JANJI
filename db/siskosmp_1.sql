-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 05:43 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siskosmp_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(15) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `guru_nama` varchar(30) NOT NULL,
  `guru_pass` varchar(40) NOT NULL,
  `guru_tempat` varchar(25) NOT NULL,
  `guru_tanggal` date NOT NULL,
  `guru_jk` varchar(15) NOT NULL,
  `guru_agama` varchar(15) NOT NULL,
  `guru_alamat` text NOT NULL,
  `guru_email` varchar(25) NOT NULL,
  `mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `guru_nama`, `guru_pass`, `guru_tempat`, `guru_tanggal`, `guru_jk`, `guru_agama`, `guru_alamat`, `guru_email`, `mapel`) VALUES
(1, '197508072006042012', 'Nurainun, S.Pd', 'ainun08', 'Kisaran', '1975-07-08', 'Perempuan', 'Islam', 'Jalan Pulau SImardan   ', 'nur_ainun072gmail.com   ', 'Bahasa Inggris'),
(2, '196604191988112001', 'Siti R. Simamora, Spd., M.Si', 'simamora', 'Tanjungbalai', '1966-04-19', 'Perempuan', 'Islam', 'Jalan Rawo', 'rukaiyah_mm@gmail.com', 'Matematika'),
(3, '199012122017112001', 'Simon Tambar Malem B, S.Pd', 'simon1234', 'Medan', '1990-12-12', 'Laki-laki', 'Islam', 'Jalan Pancakarsa ', 'simonku_talem@ymail.com ', 'Bahasa Indonesia'),
(4, 'NP001', 'Usman Pajaitan', 'usman123', 'Sei Rampah', '1990-11-03', 'Laki-laki', 'Islam', 'Desa Durian', 'usmancietampan@gmail.com', 'Penjas Orkes'),
(5, '196404022000032002', 'Helena Simamora, S.Th', 'helena123', 'Dolok Sanggul', '1964-04-02', 'Perempuan', 'Kristen Katolik', 'Jalan Kemuning', 'helenasimanja@yahoo.com', 'Agama Kristen'),
(6, '195907121986032004', 'Ernawati, S.pd', 'erna123', 'Tanjungbalai', '1959-07-12', 'Perempuan', 'Islam', 'Jalan Pancakarsa', 'ernawati123@yahoo.com', 'IPS'),
(7, '196303261987031006', 'Raya Marudut Naibaho, S.Pd', 'raya123', 'Batang Toru', '1963-03-26', 'Laki-laki', 'Kristen Protest', 'Jalan Baru', 'rayajagoan@gmail.com', 'IPA'),
(8, '196409021987032001', 'Magdalena Manalu, S.pd', 'magdalena123', 'Medan', '1963-09-20', 'Perempuan', 'Kristen Katolik', 'Jalan Anwar Idris', 'magdalena19@gmail.com', 'Pend. Kewarganegaraan'),
(9, '1970092411993012001', 'Erni Tiurma Linda N, S.Pd', 'erni123', 'Pematang Siantar', '1970-09-24', 'Perempuan', 'Kristen Katolik', 'Jalan Seroja ', 'ernitiuuur@gmail.com ', 'Seni Budaya & Keterampilan'),
(10, 'NP002', 'Syofiandi, S.Pd', 'Syof123', 'Sei Apung', '1993-06-26', 'Laki-laki', 'Islam', 'Jalan Baru', 'Soyfiandi@gmail.com', 'Prakarya'),
(11, 'NP003', 'Ika Mahardika, S.Pd', 'ika123', 'Tanjungbalai', '1989-03-27', 'Perempuan', 'Islam', 'Jalan Kemuning', 'mahardikaika12@gamail.com', 'Agama Islam');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(5) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `nmapel` varchar(30) NOT NULL,
  `jam` varchar(5) NOT NULL,
  `guru` varchar(30) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `kelas`, `nmapel`, `jam`, `guru`, `hari`, `waktu`) VALUES
(1, 'VII-1', 'Bahasa Indonesia', '2', 'Simon Tambar Malem B, S.Pd', 'Senin', '07.20 - 08.40'),
(2, 'VII-1', 'Bahasa Inggris', '2', 'Nurainun, S.Pd', 'Senin', '08.40 - 10.00'),
(3, 'VII-1', 'Matematika', '3', 'Siti R. Simamora, Spd., M.Si', 'Senin', '10:15 - 12.30'),
(4, 'VII-1', 'Seni Budaya & Keterampilan', '1', 'Erni Tiurma Linda N, S.Pd', 'Senin', '12.30 - 13.10'),
(5, 'VII-1', 'IPA', '2', 'Raya Marudut Naibaho, S.Pd', 'Selasa', '07.20 - 08.40'),
(6, 'VII-1', 'IPS', '2', 'Ernawati, S.pd', 'Selasa', '08.40 - 10.00'),
(7, 'VIII-1', 'Agama Islam', '2', 'Ika Mahardika, S.Pd', 'Senin', '07.20 - 08.40'),
(8, 'VIII-1', 'Pend. Kewarganegaraan', '2', 'Magdalena Manalu, S.pd', 'Senin', '08.40 - 10.00'),
(9, 'VII-1', 'Penjas Orkes', '2', 'Usman Pajaitan', 'Selasa', '10.15 - 11.35'),
(10, 'VII-1', 'Bahasa Inggris', '2', 'Nurainun, S.Pd', 'Selasa', '11.50 - 13.10'),
(11, 'VIII-1', 'Matematika', '3', 'Siti R. Simamora, Spd., M.Si', 'Senin', '10.15 - 12.30'),
(12, 'VIII-1', 'Prakarya', '1', 'Syofiandi, S.Pd', 'Senin', '12.30 - 13.10'),
(13, 'IX-1', 'Bahasa Inggris', '2', 'Nurainun, S.Pd', 'Senin', '07.20 - 08.40'),
(14, 'IX-1', 'IPS', '2', 'Ernawati, S.pd', 'Senin', '08.40 - 10.00'),
(15, 'IX-1', 'Pend. Kewarganegaraan', '2', 'Magdalena Manalu, S.pd', 'Senin', '10.15 - 11.35'),
(16, 'IX-1', 'Penjas Orkes', '2', 'Usman Pajaitan', 'Senin', '11.50 - 13.10');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(5) NOT NULL,
  `tingkat` int(5) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `wali_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `tingkat`, `kelas`, `nip`, `wali_nama`) VALUES
(1, 7, 'VII-1', '197508072006042012', 'Nurainun, S.Pd'),
(2, 8, 'VIII-1', '196404022000032002', 'Helena Simamora, S.Th'),
(3, 9, 'IX-1', 'NP003', 'Ika Mahardika, S.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(3) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `mapel_nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `kd_mapel`, `mapel_nama`) VALUES
(1, 'BI', 'Bahasa Indonesia'),
(2, 'BING', 'Bahasa Inggris'),
(3, 'MTK', 'Matematika'),
(4, 'IPA', 'IPA'),
(5, 'IPS', 'IPS'),
(6, 'SBK', 'Seni Budaya & Keterampilan'),
(7, 'PJOK', 'Penjas Orkes'),
(8, 'Pr', 'Prakarya'),
(9, 'AI', 'Agama Islam'),
(10, 'AK', 'Agama Kristen'),
(11, 'PKn', 'Pend. Kewarganegaraan');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `siswa_nama` varchar(30) NOT NULL,
  `siswa_kelas` varchar(10) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `guru_mapel` varchar(30) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `predikat` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nis`, `siswa_nama`, `siswa_kelas`, `mapel`, `nip`, `guru_mapel`, `nilai`, `predikat`) VALUES
(4, 16001, 'Ariana Maysila', 'VII-1', 'Matematika', '196604191988112001', 'Siti R. Simamora, Spd., M.Si', '87', 'A'),
(5, 16002, 'Ramadhani Syahputra', 'VII-1', 'Bahasa Inggris', '197508072006042012', 'Nurainun, S.Pd', '90', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(3) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `pegawai_nama` varchar(25) NOT NULL,
  `peg_pass` varchar(40) NOT NULL,
  `pegawai_tempat` varchar(25) NOT NULL,
  `pegawai_tanggal` date NOT NULL,
  `pegawai_jk` varchar(20) NOT NULL,
  `pegawai_agama` varchar(20) NOT NULL,
  `pegawai_alamat` text NOT NULL,
  `peg_email` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `pegawai_nama`, `peg_pass`, `pegawai_tempat`, `pegawai_tanggal`, `pegawai_jk`, `pegawai_agama`, `pegawai_alamat`, `peg_email`, `jabatan`) VALUES
(2, '197206052014041001', 'Siska Yanti Harahap', 'susiderara', 'Tanjungbalai', '1972-06-05', 'Perempuan', 'Islam', 'Jalan Nusa Indah     ', 'siskayanti_hrp@gmail.com    ', 'Administrasi Kesiswaan'),
(5, 'NP004', 'Linda Sari', 'linda123', 'Kisaran', '1996-09-10', 'Perempuan', 'Islam', 'Buntu Pane', 'linda_sari@ymail.com', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `siswa_nama` varchar(30) NOT NULL,
  `siswa_pass` varchar(30) NOT NULL,
  `siswa_tempat` varchar(25) NOT NULL,
  `siswa_tanggal` date NOT NULL,
  `siswa_jk` varchar(15) NOT NULL,
  `siswa_agama` varchar(20) NOT NULL,
  `siswa_alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `siswa_ayah` varchar(25) NOT NULL,
  `siswa_ibu` varchar(25) NOT NULL,
  `ortu_alamat` text NOT NULL,
  `ortu_kerja` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `siswa_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `siswa_nama`, `siswa_pass`, `siswa_tempat`, `siswa_tanggal`, `siswa_jk`, `siswa_agama`, `siswa_alamat`, `email`, `siswa_ayah`, `siswa_ibu`, `ortu_alamat`, `ortu_kerja`, `no_hp`, `siswa_kelas`) VALUES
(3, 16001, 'Ariana Maysila', 'yayana0987', 'Tanjungbalai', '2005-12-12', 'Perempuan', 'Islam', 'Jalan Imam Bonjol', 'yayana0987@gmail.com', 'Riswanto', 'Jumiati', 'Jalan Imam Bonjol', 'TNI', '081392817233', 'VII-1'),
(4, 16002, 'Ramadhani Syahputra', 'rama01', 'Tangerang', '2006-09-12', 'Laki-laki', 'Islam', 'Jalan Tiung', 'rama_putra765@gmail.com', 'Sumarno', 'Siska Yanti Hrp', 'Jalan Tiung', 'PNS', '087716255167', 'VII-1'),
(5, 15841, 'Ade Aprillia', 'ade123', 'Mandage', '2005-04-23', 'Perempuan', 'Islam', 'Bp. Mandoge', 'adecieimoet59@gmail.com', 'Sumantri', 'Susiani', 'Bp. Mandoge', 'Karyawan', '081234521212', 'VIII-1'),
(6, 15851, 'Yessica Iskandar Purba', 'yessica123', 'Sabang', '2005-03-24', 'Perempuan', 'Kristen Katolik', 'Sei Renggas', 'yessicapurba@gmail.com', 'Ricad E. Purba', 'Erica Simbolon', 'Sei Renggas', 'TNI AU', '081231111551', 'IX-1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `user_nama` varchar(25) NOT NULL,
  `level` int(5) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `email`, `user_nama`, `level`, `ket`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@yahoo.com', 'Admin', 1, 'Admin Sistem'),
(2, '197508072006042012', '174d8733b5d44f6bcd4ba79ea1e4f334', 'nur_ainun072gmail.com', 'Nurainun, S.Pd', 2, 'Guru'),
(9, '196604191988112001', 'd1ffc8f7e2fc5e371b56395e43427522', 'rukaiyah_mm@gmail.com', 'Siti R. Simamora, Spd., M', 2, 'Guru'),
(10, '199012122017112001', 'd3251b3f007e75fdcbd9b60e8b20142e', 'simonku_talem@ymail.com', 'Simon Tambar Malem B, S.P', 2, 'Guru'),
(12, '16001', 'a548b732cbb8f0eaef2cf91d52c278bb', 'yayana0987@gmail.com', 'Ariana Maysila', 4, 'Siswa'),
(13, '197206052014041001', '8b1c64de6029b335ea70f4fdc8d57a04', 'siskayanti_hrp@gmail.com', 'Siska Yanti Harahap', 3, 'Pegawai'),
(15, '16002', '7450b886c546870e5f545934a988bd66', 'rama_putra765@gmail.com', 'Ramadhani Syahputra', 4, 'Siswa'),
(16, 'NP001', '4e88a91dd1fc01410d1bbbb96815d6cf', 'usmancietampan@gmail.com', 'Usman Pajaitan', 2, 'Guru'),
(17, '196404022000032002', '0c53049255ff4f529a795aeffebca3d8', 'helenasimanja@yahoo.com', 'Helena Simamora, S.Th', 2, 'Guru'),
(18, '195907121986032004', 'aa07dff04a75680120be2d407111d52e', 'ernawati123@yahoo.com', 'Ernawati, S.pd', 2, 'Guru'),
(19, '196303261987031006', '8723b9e8caa891ff1db2645944044e5c', 'rayajagoan@gmail.com', 'Raya Marudut Naibaho, S.P', 2, 'Guru'),
(20, '196409021987032001', 'e56b223f4b571a50cffccaba9c3d8ffd', 'magdalena19@gmail.com', 'Magdalena Manalu, S.pd', 2, 'Guru'),
(21, '1970092411993012001', 'a33d67f85182666baa930df1c3752bd8', 'ernitiuuur@gmail.com', 'Erni Tiurma Linda N, S.Pd', 2, 'Guru'),
(22, 'NP002', '074a682095632a2adc93227b2496a419', 'Soyfiandi@gmail.com', 'Syofiandi, S.Pd', 2, 'Guru'),
(23, 'NP003', 'f76523aea736f0d986763b43fbc686e1', 'mahardikaika12@gamail.com', 'Ika Mahardika, S.Pd', 2, 'Guru'),
(24, '15841', 'fa6a6bd136dec26a1dd5e326b7e43254', 'adecieimoet59@gmail.com', 'Ade Aprillia', 4, 'Siswa'),
(25, '15851', '95307671fbc175098eb51b822f2bfeec', 'yessicapurba@gmail.com', 'Yessica Iskandar Purba', 4, 'Siswa'),
(26, 'NP004', '7d95d1d22485f5ac341d06bbfea91e9e', 'linda_sari@ymail.com', 'Linda Sari', 3, 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
