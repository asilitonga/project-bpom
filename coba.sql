-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 06:02 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coba`
--
CREATE DATABASE IF NOT EXISTS `coba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coba`;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `tgl_upload`, `file_name`, `file_size`, `file_type`) VALUES
(3, '2020-03-02', 'Aida_Fitri.rar', 11392190, 'rar');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nip` varchar(150) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tela` varchar(250) NOT NULL,
  `tala` varchar(150) NOT NULL,
  `usia` varchar(250) NOT NULL,
  `jenkel` varchar(250) NOT NULL,
  `tmtcpns` varchar(150) NOT NULL,
  `mkp` varchar(250) NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `tmtgol` varchar(150) NOT NULL,
  `mkg` varchar(250) NOT NULL,
  `eselon` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `bagian` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `dikstruk` varchar(250) NOT NULL,
  `tadi` varchar(250) NOT NULL,
  `propen` varchar(250) NOT NULL,
  `prodi` varchar(250) NOT NULL,
  `nase` varchar(250) NOT NULL,
  `talu` varchar(250) NOT NULL,
  `agama` varchar(250) NOT NULL,
  `file1` varchar(200) NOT NULL,
  `file2` varchar(200) NOT NULL,
  `file3` varchar(200) NOT NULL,
  `file4` varchar(200) NOT NULL,
  `file5` varchar(200) NOT NULL,
  `file6` varchar(200) NOT NULL,
  `file7` varchar(200) NOT NULL,
  `file8` varchar(200) NOT NULL,
  `file9` varchar(200) NOT NULL,
  `file10` varchar(200) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nip`, `nama`, `tela`, `tala`, `usia`, `jenkel`, `tmtcpns`, `mkp`, `golongan`, `tmtgol`, `mkg`, `eselon`, `jabatan`, `bagian`, `status`, `dikstruk`, `tadi`, `propen`, `prodi`, `nase`, `talu`, `agama`, `file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `file7`, `file8`, `file9`, `file10`) VALUES
('217510010', 'Andreas Silitonga', 'Medan', '2020-03-12', '21 Tahun', 'Laki-Laki', '2020-04-02', '21 Tahun', 'IV/d', '2020-02-26', '21 Tahun', 'II', 'IT', 'Bidang Infokom', 'PNS', 'SANGAT BAGUS', '2020', 'IT', 'TI', 'UI', '2020', 'KRISTEN PROTESTAN', 'Kartu Peserta Taspen.pdf', 'Penetapan Koordinator Dan Anggota Tata Laksana Di Sub Bagian Tata Usaha Di BPOM.pdf', 'Kenaikan Pangkat.pdf', 'SSurat Keputusan Pembentukan Komite Pembinaan.pdf', 'Kenaikan Pangkat2.pdf', 'Surat Izin Cuti Tahunan.pdf', 'Keterangan Perincian Pendapatan.pdf', 'Surat Tugas.pdf', 'Pembentukan Tim Seleksi Calon Tenaga Honorer.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Andreas Silitonga', 'admin', 'e024f9589c1e9d64b34cb1257d9c9dfc'),
(2, 'Master Junior', 'user', 'eb0a191797624dd3a48fa681d3061212');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
