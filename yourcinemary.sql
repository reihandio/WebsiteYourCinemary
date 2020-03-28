-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 10:13 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yourcinemary`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `kd_booking` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `book_date` varchar(128) NOT NULL,
  `packet` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`kd_booking`, `name`, `email`, `book_date`, `packet`, `date_created`) VALUES
(1, 'Dimas', 'dimas@gmail.com', '26051998', 'Poor', 1562248262),
(2, 'Dimas', 'dimas@gmail.com', 'Jul 09, 2019', 'Lite', 1562248321),
(3, 'Elhanif', 'elhanif@gmail.com', 'Jul 17, 2019', 'Middle', 1562249207),
(4, 'Elhanif', 'elhanif@gmail.com', 'Jul 22, 2019', 'Lite', 1562249287),
(5, 'Elhanif', 'elhanif@gmail.com', 'Sep 18, 2019', 'Lite', 1562293445),
(6, 'ali', 'aamutezar@gmail.com', 'Jul 06, 2019', 'Middle', 1562297991),
(7, 'Rei', 'reihandio@yahoo.com', 'Aug 13, 2019', 'Middle', 1562301219),
(8, 'Reihandio', 'reihandio@gmail.com', 'Jul 27, 2019', 'Middle', 1562309737),
(9, 'Elhanif', 'elhanif@gmail.com', 'Jul 20, 2019', 'Rich', 1562380505),
(10, 'Reihandio', 'reihandio@gmail.com', 'Jul 26, 2019', 'Rich', 1562387463),
(11, 'Reihandio', 'reihandio@gmail.com', 'Aug 14, 2019', 'Middle', 1566878168),
(12, 'Reihandio', 'reihandio@gmail.com', 'Dec 11, 2019', 'Middle', 1576137560);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_question` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `question` varchar(300) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_question`, `name`, `email`, `phone`, `question`, `date`) VALUES
(1, 'Karen', 'karen@gmail.com', '2147483647', 'Hai apa kabar?', 1562250602),
(2, 'Borokokok', 'borokokok@gmail.com', '0856912312345', 'Hai hoho?', 1562250688),
(3, 'Mantab Jiwa', 'mantab@gmail.com', '08569885258', 'Pokokolokok?', 1562250796);

-- --------------------------------------------------------

--
-- Table structure for table `presets`
--

CREATE TABLE `presets` (
  `kd_presets` int(5) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `presetoption` varchar(128) NOT NULL,
  `preset_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presets`
--

INSERT INTO `presets` (`kd_presets`, `name`, `email`, `presetoption`, `preset_date`) VALUES
(1, 'Cynthia', 'cynthia@gmail.com', 'Folkgreen 1', 1562241442),
(2, 'Cynthia', 'cynthia@gmail.com', 'Preset 1', 1562241590),
(3, 'Cynthia', 'cynthia@gmail.com', 'Folkgreen 3', 1562241821),
(4, 'Elhanif', 'elhanif@gmail.com', 'Orange Grey', 1562249732),
(5, 'Bagas', 'bagas@yahoo.com', 'Greenlight Grey', 1562281816),
(6, 'Adi', 'adi@gmail.com', 'Dark Red Grey', 1562290528),
(7, 'Elhanif', 'elhanif@gmail.com', 'Orange Grey', 1562293267),
(8, 'Rei', 'reihandio@yahoo.com', 'Greenlight Grey', 1562301195),
(9, 'Elhanif', 'elhanif@gmail.com', 'Greenlight Grey', 1562380562),
(10, 'Reihandio', 'reihandio@gmail.com', 'Dark Red Grey', 1562383453),
(11, 'Panca', 'panca@gmail.com', 'Greenlight Grey', 1565344269),
(12, 'Reihandio', 'reihandio@gmail.com', 'Folkgreen', 1568886584),
(13, 'Reihandio', 'reihandio@gmail.com', 'Folkgreen', 1585297173);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nicknamedb` varchar(12) NOT NULL,
  `fullnamedb` varchar(128) NOT NULL,
  `emaildb` varchar(128) NOT NULL,
  `passworddb` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `user_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nicknamedb`, `fullnamedb`, `emaildb`, `passworddb`, `role_id`, `user_created`) VALUES
(5, 'Reihandio', 'Reihandio Budi Rachmadi', 'reihandio@gmail.com', '$2y$10$oBONBlLuOeRUsBod2h4an.Y2/syfx2a7VBO6i5f3q4LNIao.t8Tau', 2, 1562205525),
(6, 'Cynthia', 'Cynthia Isti Indriany', 'cynthia@gmail.com', '$2y$10$vdnauTRYH50TX3bXgLRovOzlRLVajtY2caot59Mzdx.jTniG8ByqW', 2, 1562221987),
(7, 'Dimas', 'Dimas Fajar R', 'dimas@gmail.com', '$2y$10$GGv9V9g8UGYq45W1ReupteC5qW0igaOxXZSxpOuCwybqZoAYs85mi', 2, 1562239669),
(8, 'Elhanif', 'M Fitrah Elhanif', 'elhanif@gmail.com', '$2y$10$FaGntoFxNZxyhkaRHtzsaOWuGfuFRBbvRsYq1MHDXO91qH7TCsB6C', 2, 1562248786),
(9, 'Bagas', 'Bagas Rafienanda', 'bagas@yahoo.com', '$2y$10$IxkVq/cn7OFlRuVKMauMRuWtqTrakpgznIbKTwgLMu2KbgUg16mby', 2, 1562281796),
(10, 'Adi', 'Adi Gumilang', 'adi@gmail.com', '$2y$10$EHuR/1ZQhpPdwscsdnks3Ok4IdjQBgItYQnAlbdCwIMgIq525E2t2', 2, 1562290419),
(11, 'miqulabz', 'MUhlis Iqbal Utomo', 'miqulabz@gmail.com', '$2y$10$3/gAvS4ybqdEKTus3ZYn6ucm.0sbhYJu5iMWLlKDlABevSDZ9RSji', 2, 1562294104),
(12, 'monociuye', 'ademono', 'monoitdev@gmail.com', '$2y$10$OA3MZj.oj7xV3LOL0TCsAOM3ZLD0okBFrIGdPL.Ct4va3dMMCmIcm', 2, 1562295219),
(13, 'ali', 'ahmad ali', 'aamutezar@gmail.com', '$2y$10$YS2WL.W5iEY2ZRz5rSduQev46QPG8ENFlNqWaEOQT8oPlQ77LSpe6', 2, 1562297869),
(14, 'Rei', 'Reihandio', 'reihandio@yahoo.com', '$2y$10$NyaP9N0JoZB.F3a/KOK4X.C2d0VM1WPaGkxZQ5TQoP8N.aD4Jt/3u', 2, 1562301160),
(15, 'asf', 'asdqwe', 'asd@gmail.com', '$2y$10$NtWAUDiG2TV8XxLtLQFygOeZQ4G/bd3FDKOrGQxiskiJKlQJKjLt6', 2, 1562316762),
(16, 'denka', 'amalia', 'leotangerang11@gmail.com', '$2y$10$vMhn17He6Dfgli95ohf0fO0pEPStcZjQNC2p4j6GfHO1AEATxPNUS', 2, 1562385052),
(17, 'abifh', 'abi f', 'abif@gmail.com', '$2y$10$2.Wj7Y.IC8yKPycEFg720.qtty7DlbFrFYnNI2SltSfhaWPSprk5C', 2, 1562388700),
(18, 'Nadya', 'Nadya Afida Silvassa', 'nadyasilvassa05@gmail.com', '$2y$10$FNQvx31fqoyIpmlePWJC1u1dA1SyLIh6kUgSty5Zn.onC4Zz79Ihq', 2, 1562396019),
(19, 'Panca', 'Panca Ananda', 'panca@gmail.com', '$2y$10$7GPLVA7VHNeya7TI6eoSduFHU8hVFKx/TScBiJf8b7FvmustYWzBq', 2, 1565344228);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`kd_booking`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `presets`
--
ALTER TABLE `presets`
  ADD PRIMARY KEY (`kd_presets`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `kd_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `presets`
--
ALTER TABLE `presets`
  MODIFY `kd_presets` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
