-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 05:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_hitung`
--

-- --------------------------------------------------------

--
-- Table structure for table `belajar`
--

CREATE TABLE `upload_file` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `materi_id` INT(11) NOT NULL,
  `nama_file` VARCHAR(255) NOT NULL,
  `path_file` VARCHAR(255) NOT NULL,
  `tipe_file` VARCHAR(100) DEFAULT NULL,
  `ukuran_file` INT DEFAULT NULL,
  `uploaded_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_upload_materi`
    FOREIGN KEY (`materi_id`) REFERENCES `materi`(`id`)
    ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `belajar`
--

INSERT INTO `upload_file` (`materi_id`, `nama_file`, `path_file`, `tipe_file`, `ukuran_file`)
VALUES
(1, 'materi1.pdf', 'uploads/materi1.pdf', 'application/pdf', 205000),
(1, 'gambar1.jpg', 'uploads/gambar1.jpg', 'image/jpeg', 125000),
(2, 'materi2.pdf', 'uploads/materi2.pdf', 'application/pdf', 199000);


-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `whatsapp` varchar(16) NOT NULL,
  `specialist` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `username`, `whatsapp`, `specialist`) VALUES
(1, 'hiamalif', '6289671052050', 'aljabar');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jurusan`) VALUES
(1, 2010120024, 'Muhammad Nur Alif', 'Sistem Informasi'),
(2, 2010120023, 'Muhammad Didin Saadduddin', 'Sistem Informasi'),
(5, 2010120012, 'Alwi Ibnul Daratista', 'Sistem Information');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `soal` varchar(500) NOT NULL,
  `jawaban` varchar(500) NOT NULL,
  `topik_id` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `jenis` varchar(225) NOT NULL,
  `topik` varchar(225) NOT NULL,
  `soal` varchar(500) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `jenis`, `topik`, `soal`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'pg', 'perkalian', '2 x 4 adalah', '8', '2022-01-05 06:51:52', '2022-01-05 06:58:33'),
(2, 'essay', 'perkalian', '12732 x 0 + 7123 x 0 +12 x 1 x 3 =', '15', '2022-01-05 06:59:17', '2022-01-05 06:59:17'),
(4, 'pg', 'pembagian', '8 / 2 =', '4', '2022-01-05 07:01:05', '2022-01-05 07:01:05'),
(5, 'pg', 'pembagian', '6123 x 0 + 25 / 2 =', '17,5', '2022-01-05 07:01:44', '2022-01-05 07:01:44'),
(6, 'essay', 'pembagian', '20 x 100 : 20 + 20 + 100 : 100 =', '122', '2022-01-05 07:02:58', '2022-01-05 07:02:58'),
(7, 'pg', 'perkalian', '72 x 10 : 72 : 2 x 20 =', '100', '2022-01-05 07:04:04', '2022-01-05 07:04:04');

-- --------------------------------------------------------
