-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 03:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_puskesmasbaumata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'kepala', 'kepala', 'kepala');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(5) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nip`, `nama_dokter`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `jabatan`, `agama`, `alamat`, `no_telepon`, `id_poli`, `file`) VALUES
(23, '57677', 'albert', 'gfgdfhgkdghdjkg', '2023-05-15', 'gfdghgfhgh', 'fgf', 'hghfdggd', 'gfg', '787', '1', 'IMG-20230426-WA0004.jpg6476be20482c17.717171581685503520.jpg'),
(235, '1288475648', 'stenawati', 'kupang', '2023-05-28', 'wanita', 'dokter muda', 'kristen', 'pasir panjang', '0823276', '2', 'SAVE-20210317-233814-Original.jpg6480ab44330e00.667363171686154052.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `dosis_obat` varchar(100) NOT NULL,
  `cara_pakai` varchar(10) NOT NULL,
  `ketersediaan_obat` varchar(10) NOT NULL,
  `expired_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `dosis_obat`, `cara_pakai`, `ketersediaan_obat`, `expired_date`) VALUES
(1, 'paracetamol', '2 kali', 'minum', 'ada', '2023-05-31'),
(2, 'paratusin', '1 kali', 'minum', 'ada', '2023-05-31'),
(3, 'paramex', '3 kali', 'minum', 'ada', '2023-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(25) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nomor_telepon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `umur`, `nik`, `nomor_telepon`) VALUES
(12, 'asdsk', '2023-05-24', 'ffd', 'Perempuan', 'gfgfg', 'dsff', '18904278', 'sadadsddef');

-- --------------------------------------------------------

--
-- Table structure for table `perawat`
--

CREATE TABLE `perawat` (
  `id_perawat` int(20) NOT NULL,
  `nama_perawat` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perawat`
--

INSERT INTO `perawat` (`id_perawat`, `nama_perawat`, `nip`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_telepon`, `file`) VALUES
(11, 'dbjkdbv', '12378367867', 'layesss', '2023-05-17', 'efdfgf', 'ifhdf', 'gdgd', 'y089856', '1679302434150.jpg6476b87eb59239.382638331685502078.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(5) NOT NULL,
  `nama_poli` varchar(99) NOT NULL,
  `jenis_dokter` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`, `jenis_dokter`) VALUES
(1, 'Poli Gizi', 'Dokter Spesialis Anak'),
(2, 'poli sonde tau', 'spesialis apa sa');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `id_regis` int(11) NOT NULL,
  `no_regis` varchar(30) NOT NULL,
  `keterangan_pasien` varchar(150) NOT NULL,
  `tanggal_regis` date NOT NULL,
  `id_poli` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`id_regis`, `no_regis`, `keterangan_pasien`, `tanggal_regis`, `id_poli`, `id_perawat`, `id_pasien`) VALUES
(15, 'RG-001-08/06/23', 'kepala sakit', '2023-06-08', 2, 11, 12),
(19, 'RG-002-08/06/23', 'jgjghjbj', '2023-06-08', 1, 11, 12);

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `id_rekammedis` int(11) NOT NULL,
  `no_rekammedis` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_obat` varchar(20) NOT NULL,
  `tanggal_rekammedis` varchar(10) NOT NULL,
  `id_regis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekammedis`
--

INSERT INTO `rekammedis` (`id_rekammedis`, `no_rekammedis`, `keterangan`, `id_obat`, `tanggal_rekammedis`, `id_regis`) VALUES
(15, 'RM-001-29/05/23', 'GRG', '2', '2023-05-25', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `perawat`
--
ALTER TABLE `perawat`
  ADD PRIMARY KEY (`id_perawat`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`id_regis`);

--
-- Indexes for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD PRIMARY KEY (`id_rekammedis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `perawat`
--
ALTER TABLE `perawat`
  MODIFY `id_perawat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rekammedis`
--
ALTER TABLE `rekammedis`
  MODIFY `id_rekammedis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
