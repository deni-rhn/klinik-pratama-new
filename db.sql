-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 07:52 
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `almubarok2`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya_dokter`
--

CREATE TABLE IF NOT EXISTS `biaya_dokter` (
`id` int(11) NOT NULL,
  `id_pasien` int(150) NOT NULL,
  `id_dokter` int(150) NOT NULL,
  `harga` varchar(10000) NOT NULL,
  `nama_dokter` varchar(225) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `biaya_dokter`
--

INSERT INTO `biaya_dokter` (`id`, `id_pasien`, `id_dokter`, `harga`, `nama_dokter`, `status`) VALUES
(11, 24, 2, 'Rp. 10.000', 'Sad', 2),
(12, 25, 3, 'Rp. 30.000', 'Haha', 2),
(13, 26, 1, 'Rp. 90.000', 'mbah ndul', 2),
(14, 27, 1, 'Rp. 100.000', 'mbah ndul', 2),
(15, 26, 3, 'Rp. 23.000', 'Haha', 2),
(16, 26, 1, 'Rp. 45.000', 'mbah ndul', 2),
(17, 26, 1, 'Rp. 21.000', 'mbah ndul', 2),
(18, 26, 4, 'Rp. 250.000', 'sinto', 2),
(19, 26, 1, 'Rp. 34.000', 'mbah ndul', 2);

-- --------------------------------------------------------

--
-- Table structure for table `biaya_obat`
--

CREATE TABLE IF NOT EXISTS `biaya_obat` (
`id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `kode_obat` varchar(10000) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `harga_total` varchar(10000) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `biaya_obat`
--

INSERT INTO `biaya_obat` (`id`, `id_pasien`, `kode_obat`, `jumlah`, `harga_total`, `status`) VALUES
(11, 24, 'ABOC003', 3, 'Rp. 3.000', 2),
(12, 25, 'ABC123', 6, 'Rp. 60.000', 2),
(13, 25, 'HOKA', 3, 'Rp. 30.000', 2),
(14, 26, 'ABOC001', 8, 'Rp. 960.000', 2),
(15, 26, 'ABOC001', 9, 'Rp. 1.080.000', 2),
(16, 27, 'ABOC001', 3, 'Rp. 360.000', 2),
(17, 26, 'ABOC003', 5, 'Rp. 5.000', 2),
(18, 26, 'ABOC001', 1, 'Rp. 120.000', 2),
(19, 26, 'HOKA', 3, 'Rp. 30.000', 2),
(20, 26, 'ABOC003', 23000, 'Rp. 23.000.000', 2),
(21, 26, 'ABOC003', 23, 'Rp. 23.000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE IF NOT EXISTS `data_pasien` (
`id` int(11) NOT NULL,
  `id_pasien` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL,
  `subyektif_objectif` varchar(500) NOT NULL,
  `assesment` varchar(150) NOT NULL,
  `Pemeriksaan_penunjang` varchar(500) NOT NULL,
  `planning` varchar(500) NOT NULL,
  `paraf` varchar(50) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`id`, `id_pasien`, `tanggal`, `subyektif_objectif`, `assesment`, `Pemeriksaan_penunjang`, `planning`, `paraf`, `status`) VALUES
(17, '20', '2019-07-01', 'detail', 'jantung', 'sakit', 'minum obat', 'hampir mati', 2),
(18, '23', '2019-07-06', 'haha', 'haha', 'haha', 'haha', '', 2),
(19, '25', '0000-00-00', 'halo', 'halo', 'halo', 'halo', 'halo', 2),
(20, '26', '0000-00-00', 'asd', 'asd', 'asd', 'asd', 'asd', 2),
(21, '27', '0000-00-00', 'haha', 'ahahh', 'hahah', 'ahahah', 'hahaha', 2),
(22, '28', '0000-00-00', 'test', 'test', 'test', 'test', 'test', 2),
(23, '26', '2019-07-11', 'haha', 'hahah', 'hahah', 'hahah', 'h', 2),
(24, '26', '2019-07-16', 'hahah', 'hahha', 'hahha', 'hahah', 'hahah', 2),
(25, '26', '2019-07-10', 'kakak', 'kakak', 'kakak', 'akak', 'kaka', 2),
(26, '26', '2019-07-12', 'kakakakakka', 'akaakakakka', 'kakakakakak', 'aakakakakak', 'aakaakakaka', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
`id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `sip` text NOT NULL,
  `created_by` text,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` text,
  `updated_date` timestamp NULL DEFAULT NULL,
  `spesialis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `sip`, `created_by`, `created_date`, `updated_by`, `updated_date`, `spesialis`) VALUES
(1, 'mbah ndul', '09284992', '10', '2019-07-06 16:40:17', NULL, NULL, 'usus'),
(2, 'Sad', '0482989192', '10', '2019-07-06 16:40:21', NULL, NULL, 'tulang'),
(3, 'Haha', '92384922', '10', '2019-07-06 16:40:27', NULL, NULL, 'telinga'),
(4, 'sinto', '0393382787382', '10', '2019-07-06 16:40:33', NULL, NULL, 'bohong'),
(5, 'sinta', '497287833', '10', '2019-07-06 16:40:36', NULL, NULL, 'jujur');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
`id` int(11) NOT NULL,
  `id_pasien` int(150) NOT NULL,
  `kode_obat` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `id_pasien`, `kode_obat`, `status`) VALUES
(20, 20, 'ABOC001', '1'),
(21, 21, 'ABOC003', '1'),
(22, 23, 'HOKA', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kode_obat`
--

CREATE TABLE IF NOT EXISTS `kode_obat` (
`id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama_obat` varchar(250) NOT NULL,
  `zat_aktif` varchar(250) NOT NULL,
  `harga` varchar(225) NOT NULL,
  `stok` varchar(100) DEFAULT NULL,
  `status_persediaan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kode_obat`
--

INSERT INTO `kode_obat` (`id`, `kode`, `nama_obat`, `zat_aktif`, `harga`, `stok`, `status_persediaan`) VALUES
(1, 'ABOC001', 'ABOCATH 18 G INFLO', 'asd', 'Rp. 120.000', '100', 'TERSEDIA'),
(2, 'ABC123', 'ini aku emon', '', 'Rp. 10.000', '100', 'TERSEDIA'),
(3, 'ABOC003', 'asd', 'ad', 'Rp. 1.000', '100', 'TERSEDIA'),
(4, 'HOKA', 'Vodka', '', 'Rp. 10.000', '100', 'TERSEDIA');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
`id` int(11) NOT NULL,
  `alergi` varchar(200) NOT NULL,
  `No_Rm` varchar(300) NOT NULL,
  `No_BPJS` varchar(300) NOT NULL,
  `no_KTP` varchar(100) DEFAULT NULL,
  `No_HP` int(25) NOT NULL,
  `prolanis` varchar(200) NOT NULL,
  `Nama_pasien` varchar(100) NOT NULL,
  `Jenis_kelamin` varchar(50) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `umur` varchar(200) NOT NULL,
  `Bin_binti` varchar(150) NOT NULL,
  `Pekerjaan` varchar(150) NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `Dusun` varchar(200) NOT NULL,
  `Rt` int(20) NOT NULL,
  `Rw` int(20) NOT NULL,
  `Desa` varchar(150) NOT NULL,
  `Kecamatan` varchar(150) NOT NULL,
  `Kabupaten` varchar(150) NOT NULL,
  `Provinsi` varchar(150) NOT NULL,
  `status_antrian` int(15) NOT NULL,
  `no_antrian` int(200) NOT NULL,
  `waktu_daftar` date NOT NULL,
  `pemeriksa` varchar(100) DEFAULT NULL,
  `pendidikan` varchar(100) DEFAULT NULL,
  `kawin` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `alergi`, `No_Rm`, `No_BPJS`, `no_KTP`, `No_HP`, `prolanis`, `Nama_pasien`, `Jenis_kelamin`, `Tanggal_lahir`, `umur`, `Bin_binti`, `Pekerjaan`, `Agama`, `Dusun`, `Rt`, `Rw`, `Desa`, `Kecamatan`, `Kabupaten`, `Provinsi`, `status_antrian`, `no_antrian`, `waktu_daftar`, `pemeriksa`, `pendidikan`, `kawin`) VALUES
(20, 'kulit', '2706-1', '111111', '0834898191', 2147483647, 'pro lans', 'herlin sutamvan', 'Laki-laki', '1999-02-02', '20 tahun', 'Kora', 'pengangguran', 'Islam', 'bedoyo', 4, 4, 'bedoyo', 'ponjong', 'gunungkidul', 'yogyakarta', 0, 5, '2019-07-10', 'aku', NULL, NULL),
(21, 'lidah', '2706-1', '111111', '0834898191', 1383887, 'pro lans', 'budi daya', 'Laki-laki', '1994-10-11', '24 tahun', 'Kora', 'pengangguran', 'Islam', 'bedoyo', 2, 3, 'bedoyo', 'ponjong', 'gunungkidul', 'yogyakarta', 1, 4, '2019-05-27', 'aku', NULL, NULL),
(23, '', '0607-1', 'oiodjk', 'kjksjdkj', 0, '', 'jkjkjk', 'Laki-laki', '2019-07-24', '0 bulan', '', 'klklk', 'Islam', 'kjkjk', 98, 98, 'kjkjk', 'kj', 'kjkjkjk', 'kjk', 0, 1, '2019-07-16', 'aku', NULL, NULL),
(24, '', '432085', '98989', '98989', 8999, '', '89989', 'Laki-laki', '2019-07-02', '0 bulan', '', 'lklk', 'Islam', 'lkkl', 0, 0, 'kl', 'lkl', 'lklk', 'lklk', 1, 2, '0000-00-00', 'ancok', NULL, NULL),
(25, '', '587329', '98989', '9989', 89899, '', 'khjhj', 'Laki-laki', '2019-07-01', '0 bulan', '', 'kjkj', 'Islam', 'kkjk', 9, 9, 'kjk', 'kjk', 'kk', 'kkj', 1, 2, '2019-07-06', 'sinto', NULL, NULL),
(26, '', '843527', '0929898392', '090239489298', 29392989, '', 'AM', 'Laki-laki', '1990-06-21', '29 tahun', '', 'PNS', 'Islam', 'JK', 8, 8, 'JK', 'JK', 'Bandung', 'Jawa Barat', 2, 5, '2019-07-16', 'Haha', NULL, NULL),
(27, '', '523740', '089839829898', '09087897988', 898989, '', 'VK', 'Laki-laki', '1969-06-10', '50 tahun', '', 'Pensiunan', 'Islam', 'Grogol', 8, 8, 'Grogol', 'Grogol', 'Jakarta Barat', 'DKI Jakarta', 2, 2, '2019-07-09', 'mbah ndul', NULL, NULL),
(28, '', '360745', '87998', NULL, 8989, '', 'Aja', 'Laki-laki', '1960-02-09', '59 tahun', '', 'Aja', 'Islam', 'aja', 9, 9, 'Aja', 'AJa', 'Aceh Barat', 'Nanggroe Aceh Darussalam (NAD)', 0, 3, '2019-07-10', 'mbah ndul', 'Sekolah Dasar (SD)', 'Kawin');

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE IF NOT EXISTS `pendapatan` (
`id` int(11) NOT NULL,
  `id_pasien` int(150) NOT NULL,
  `total` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`id`, `id_pasien`, `total`) VALUES
(23, 20, 'Rp 120.000'),
(24, 27, 'Rp 460.000'),
(25, 26, 'Rp 2.158.000'),
(26, 26, 'Rp 2.323.000'),
(27, 26, 'Rp 51.000'),
(28, 26, 'Rp 23.250.000'),
(29, 26, 'Rp 57.000');

-- --------------------------------------------------------

--
-- Table structure for table `resep_obat`
--

CREATE TABLE IF NOT EXISTS `resep_obat` (
`id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `pro` text,
  `id_obat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rujukan`
--

CREATE TABLE IF NOT EXISTS `rujukan` (
`id` int(11) NOT NULL,
  `yth` text,
  `tempat` varchar(100) NOT NULL,
  `nama` text,
  `jenis_kelamin` text,
  `umur` text,
  `alamat` text,
  `diagnosa` text,
  `tindakan` text,
  `permohonan` text,
  `tambahan` text,
  `catatan` text,
  `validasi` date NOT NULL,
  `dokter_pemeriksa` text,
  `sip_dokter` text,
  `created_by` text,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` text,
  `updated_date` timestamp NULL DEFAULT NULL,
  `nomorRujukan` varchar(100) DEFAULT NULL,
  `keteranganRujukan` varchar(255) DEFAULT NULL,
  `rsRujukan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rujukan`
--

INSERT INTO `rujukan` (`id`, `yth`, `tempat`, `nama`, `jenis_kelamin`, `umur`, `alamat`, `diagnosa`, `tindakan`, `permohonan`, `tambahan`, `catatan`, `validasi`, `dokter_pemeriksa`, `sip_dokter`, `created_by`, `created_date`, `updated_by`, `updated_date`, `nomorRujukan`, `keteranganRujukan`, `rsRujukan`) VALUES
(1, 'messi', 'argentina', 'messi', 'laki-laki', '80', 'argentina', 'sakit perut', 'pijat', 'Mohon konsultasi / penanganan lanjut / alih rawat', 'loro tenan', 'sek sehat bro', '2019-05-11', '', '294827482478', '10', '2019-05-11 09:53:47', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'kasir', 'eko@gmail.com', 'kasir', 3),
(2, 'dokter', 'adminku@gmail.com', 'dokter', 2),
(3, 'admin', 'admin@gmail.com', 'admin', 1),
(4, 'aha', 'aha@mailsac.com', 'aha', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya_dokter`
--
ALTER TABLE `biaya_dokter`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biaya_obat`
--
ALTER TABLE `biaya_obat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_obat`
--
ALTER TABLE `kode_obat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resep_obat`
--
ALTER TABLE `resep_obat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rujukan`
--
ALTER TABLE `rujukan`
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
-- AUTO_INCREMENT for table `biaya_dokter`
--
ALTER TABLE `biaya_dokter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `biaya_obat`
--
ALTER TABLE `biaya_obat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `kode_obat`
--
ALTER TABLE `kode_obat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `pendapatan`
--
ALTER TABLE `pendapatan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `resep_obat`
--
ALTER TABLE `resep_obat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rujukan`
--
ALTER TABLE `rujukan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
