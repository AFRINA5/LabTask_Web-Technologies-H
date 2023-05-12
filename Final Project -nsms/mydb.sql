-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 05:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `approval_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `client_name`, `event_name`, `price`, `approval_status`) VALUES
(1, 'Nirjona', 'Registrar', '10000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `email` varchar(50) NOT NULL,
  `birth_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `email`, `birth_date`) VALUES
(1, 'jannat', '$2y$10$yrEHMciRVsit45isT6V9XefEPRK8gYXVQwJlI.Z9OhEeVJAD.Ewka', '2022-04-16 01:53:16', '', ''),
(2, 'jannaat', '$2y$10$S9MgAKsA3b.ExJQJEZP8.eboTfabbl3A7eMwrY7bgnHWqCcmPboOq', '2022-04-16 02:01:14', '', ''),
(3, 'hira', '$2y$10$SH6Fhpw4I3kzMoLLotssjelt2i5RBDZVMEExOTCMaVBNtSI6zlC5.', '2022-04-16 19:41:54', '', ''),
(4, 'hiraaa', '$2y$10$aBL/k4sUcBKlfNrTzaQzY.24IXhNH91AYbhAEQamMSzLwmCzx1zHu', '2022-04-16 19:52:38', '', ''),
(5, 'jiii', '$2y$10$IPkCnaDL5F4tJs3E7YpgqO4CT.f7qok3o4vAeHNtDI9GZy0qa1xFa', '2022-04-17 00:33:14', '', ''),
(6, 'oysharja', '$2y$10$qdlbx2N.k86dsi2y8pGlNuZQgQ5rf5ZRQClvXFYXGGNC7ZcuKIq9m', '2022-04-17 10:00:15', '', ''),
(7, 'Tanjika', '$2y$10$o/2gd/ooEc6kpvGHHMCY0e7NqIgK.hiRYEX3lGyCj3jeoV5cFVrku', '2022-04-17 10:08:14', '', ''),
(8, 'akhi', '$2y$10$WJo7ZKnkB9O4ow2.i9kWKuCjomAbhsZJD5/znFmHJ4tc/gJz.QueO', '2022-04-17 10:14:53', '', ''),
(9, 'mifta', '$2y$10$iW9l6sxl1UuIrJDx3X8TGOqCwPCoQLWWzwD80lGzs7QdfYTI20pDa', '2022-04-18 11:44:45', '', ''),
(10, 'muna', '$2y$10$SyY9fPTYzrc2u1.LWrOPZu.kJpWLRZV0iT0dM.hdYQ4XtJ84QEcSC', '2022-04-18 22:56:19', '', ''),
(11, 'miunna', '$2y$10$4PTbfI.VphLyoaBrpdDsfesJaSzdK0dwakjFkUqOCUo7zOE5MP3Gi', '2022-04-18 23:19:26', '', ''),
(12, 'munni', '$2y$10$2aslmCFqpZB2mPsuStcCseh.bhtn.VZsoHD3IaU70GV/9psGsk5d6', '2022-04-18 23:23:30', '', ''),
(13, 'raju', '$2y$10$fss6k9OjKNcE8gqpZGV2VeIjoEOhKadMOefEeAoV1yw6G50Jp.zAK', '2022-04-19 10:46:10', '', ''),
(14, 'rina', '$2y$10$lTmjFYRztIgqnfBWn1agS.qpEPZx7zsyv6h3/lmPwc8.w./Yw6/I.', '2022-04-19 11:29:20', '', ''),
(15, 'shayoni', '$2y$10$MKwK0uE1TrRDQxYg9ddBROklxETVVQTKxXQ5yLD9urYdhju.Qzaaq', '2022-04-30 13:15:54', '', ''),
(16, 'Nahil', '$2y$10$Bjn8qnSlrtkArQCSIswKl.yeRacX76nWGsD6acLRyWYUj1RhfAl6i', '2022-04-30 14:22:15', '', ''),
(17, 'taison', '$2y$10$hi7xERkSoumza5nnGV3Si.73iH/Illp2PoQJsHfFrXkUcGTbJ6jF6', '2022-07-28 20:45:07', '', ''),
(18, 'mahmud_vai', '$2y$10$V65iY3YRAXb169M1aLqxfepn7eyDd2ZcS/SkXkGeJT6we/Uphfv2a', '2022-07-28 21:02:56', '', ''),
(0, 'Fatima', '$2y$10$QmK0GsgC8RQ9ndIEn21BFOaPhVe08IeoJ/TW1nFXAGlKAqg85WRMu', '2023-03-27 22:25:28', '', ''),
(0, 'FatimaZ', '$2y$10$kCBvQPPO1CpJ.BVj0G9vruKIb4Vaod1AOmrPzEIkWnL8z5GYhATMG', '2023-03-27 22:51:17', '', ''),
(0, 'Zohra', '$2y$10$zU5zhqbt4BpOjgsMDMJMXOnTqnJUJ3vVqBCn8KnyJqSGQMHOe6/nK', '2023-03-28 04:53:54', '', ''),
(0, 'Islam', '$2y$10$EBIMDxyTdtSX0kzGoODoQu6DzB0XYHM1Hanm52S0ev6R1P7yVyypa', '2023-03-28 04:57:27', '', ''),
(0, 'm', '$2y$10$DhD8lRqtKPnBnwgmTRgQUOtfL4jghbz7UUgxzH97dRvwRndfyzJn.', '2023-03-28 05:23:47', '', ''),
(0, 'Islam1', '$2y$10$5O1orbOVnLMQNQMfvj3E4ORo/lBnbLjmJe2i1LDXeLb1gCxWBRXDe', '2023-03-28 06:08:28', '', ''),
(0, 'nia', '$2y$10$9J7mf2e3hzCC6QarFeuPdOwgFz/.4HsMHFGJ6epQ0s5zh72PvVxbe', '2023-04-29 22:13:19', '', ''),
(0, 'NN', '$2y$10$T6OHxI8gtJTyD12GmeAknesSvOFye941DB94qkv7JnlcbZhjzylj.', '2023-05-02 04:40:22', '', ''),
(0, 'TT', '$2y$10$Zqt3cu5gWE3y1SqGLiQFheGFcO4eQAFTFRvdxomSbQ2hhqJqgw7Jq', '2023-05-02 04:49:02', '', ''),
(0, 'FZA', '$2y$10$aOkO.rZMpCG2SxRimbm1V.pnfNHG6Z27FFvJkGwzvyjBtBQyfsuY2', '2023-05-06 12:26:23', '', ''),
(0, 'Joya', '$2y$10$ipx00yr5saAn4wPcDrmeZOjWAtRUSxzYv25XUmAi4rp1.nVlAoqVC', '2023-05-06 14:10:10', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_name` (`client_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
