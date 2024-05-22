-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 04:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwinny`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` varchar(50) NOT NULL,
  `verify_token` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `status`, `verify_token`, `created_at`) VALUES
(0, '123', '123, 123 123', '$2y$10$19LQqVfXE1TmHvDvvYQGp.Da9y6brnSgji65kZtyePZtW4ezJy4VG', 'user', 'f10915d9c9c292740e8e613aebfad82d', '2024-04-24 10:15:29'),
(0, 'luck@gmail.com', 'lucj, lasj dw', '$2y$10$uoNJgfSFcg4G2A7rmbmmbOjGSpocpe9xv0bPc2CEtfzLciMDHXWjK', 'user', 'd3c7ac103c59cf3c597750665aa677d6', '2024-04-24 10:18:46'),
(0, 'arnelmontera@ymail.com', 'ded, lee baldemro', '$2y$10$qR7MQrq5set2k7PT/KB9EOGNmqVtIdh.QB5sMS6R.CLJwpc7NUcDC', 'user', 'ff346bb10a22a279e1d325e331267d3b', '2024-04-24 10:19:26'),
(0, 'itsmmbblgum@gmail.com', 'edwin, l baldemor', '$2y$10$j0xaiVt0HZEgiuaZ5ySc7uPv0vNqry4X6uyxOWsPugTPqBGqBfiCe', 'user', '10f07a1e5ac57aae2c8aca0986cf340c', '2024-04-24 10:28:12'),
(0, 'thedwnn@gmail.com', 'Edwin, L Andes', '$2y$10$3YFnv17LVk1gi/ggVlt...Mcvhmt9bqxZ8SXZY3HHuB0y4iosGoRa', 'user', 'e2b4a1fd420cd5d06abab568f299458a', '2024-04-24 10:35:18'),
(0, 'stanblazkowickz@gmail.com', 'w, wq qq', '$2y$10$zd2eMlzVfaCKaTK/sKehGezqPs/TABAqUrICX0kUzBS69.7lS9Evi', 'user', 'e9345c0f03860ab6cd3bd6d4a22413b9', '2024-04-24 10:46:32'),
(0, 'qdd', 'Edwinq, dqd qdqqd', '$2y$10$VPRt5lmxFgwKSSE3iXm5Dek1HKSKDofHesoTf6/TChKr6UO1tlDkC', 'user', 'c70065d1bdc41ad33844cbf47805aa22', '2024-04-24 10:52:57'),
(0, 'fww', 'w, ewe wf', '$2y$10$aR4Vn1mpLy1svvWkfb1nce2kvI3lMT2JWdt/OldDYRZqlQ4crvWfi', 'user', '4fbee4aa5633d2c5a948aa5c112fb9f6', '2024-04-24 10:53:07'),
(0, 'qweqwe', 'arnel, dkasd ewfsdf', '$2y$10$dn.w0OUIjQQsU07hO7bopu.iaKsOoa5TCXRjke2LllhKkdX9gliEu', 'user', 'de8434a45f6d005e730b002e8c1ec2a7', '2024-04-25 06:40:28'),
(0, 'itndsnf', 'edwin, l baldemor', '$2y$10$r0weSXdx8GcKuIg5sypGXeP6GpBHgQ6n5KQ65mTRY7kWiBXp6/sGm', 'user', '7c7cbb906ab0fe1cb65b064c40fc116c', '2024-04-25 08:41:40'),
(0, 'TUDHH', 'Edwin, l HFHW', '$2y$10$2KJlidkEWu5wiYUiXaDNEeLfaM.TlAXv1enLXfJm0Dr9gxaYSDOoq', 'user', 'beadef5c54c77069d01f0494b1237369', '2024-04-25 08:43:25'),
(0, 'hfh', 'Edfwin, dnn ffh', '$2y$10$D2dRkoP1dphADekRHWPPNu8KwksTZl8lSz17RxHFnTasBhCIpC8u6', 'user', '2efded035385fc5f6d828ca8628d5cce', '2024-04-25 08:49:14'),
(0, 'itsmm', 'Edwin, l Baldemor', '$2y$10$qZ2kdXMfadb29PGU2jaDbuBsT6zcJnNNlE43o8cHq/tIo0ixwOye6', 'user', '1a8256192d74c41f80c1e71a95247e6d', '2024-04-25 08:50:31'),
(0, 'DHDD', 'Edwin, Hjs HDHD', '$2y$10$cU7FBSCHxvmyComfD4Yqbu6OKeySNugO7DvMj4LBwJAa7MFrAtciq', 'user', '86c691c491a52895233e3abd4ab05e55', '2024-04-25 08:52:12'),
(0, 'jfnfk', 'Edwin, Bal wawf', '$2y$10$pAVXNim2CESI2sW5Cb5s7.DJABPYYDEqhjccm0vewM3Zzg.jbRfdi', 'user', 'd9df3738ebf1df7f04e276922d01fd3e', '2024-04-25 08:53:57'),
(0, 'FD', 'FDF, FD FD', '$2y$10$ByZKycaTa7acGPgi74ZSde9ZGei6RT0alxObJVQ9HT6RRCRCeucsm', 'user', '13961a523c793530a8703fb086477b66', '2024-04-25 09:21:34'),
(0, 'iloveyoumyhooman@gmail.com', 'Edwin, Andes Andes', '$2y$10$3hN4EVaSK2rrgMlvEUCp/OG4xnHMum00wrQYmc8F9lnrcAcWNx06q', 'user', 'acf2e543fddc7d92b2241a9e100fe4de', '2024-04-25 11:18:51'),
(0, 'thedwnn', 'thedwnn, thedwnn thedwnn', '$2y$10$GUuhcTFIBZkc1ezacUiOK.t3Mfl9W1BxQBcyvnmcxrpIN8vCmAEeG', 'user', 'c521c9f4fba26cf3f5be87b540391f66', '2024-04-25 12:38:26'),
(0, 'kkk', 'edwin, edwin edwin', '$2y$10$y2Eji6y2I6KJtgBsxLGA0OVFE44SpCJ/7gyjGiL3.kR2xjbs.v72W', 'user', '6385af0292be4fa992fc24865aa7cedc', '2024-04-25 12:38:40'),
(0, 'bl@gmail.com', 'dwin, dwin dwin', '$2y$10$6Rne2qEz6SGQVLrCTX3EQuh/I3hIp8w.4yj4NszKjb/6WDggYny0G', 'user', 'c951132ff3ae7bebeb9b9b4d8eba30e2', '2024-05-06 07:25:53'),
(0, '12', '12, 12 12', '$2y$10$9bmNk11zbL0AR.cxAXV8W.F2f.VqYVLtE6A3g8Sd2sj1mH8lUW5E.', 'user', '576b9a6d9c948db1efeff1a1dc501d46', '2024-05-06 09:18:00'),
(0, 'pol', 'pol, pol pol', '$2y$10$QHSeGtm2.pjDE4F20sRfZOLv5/uZX1HUm2eRY6LEYjtHaDP7bJ4B2', 'user', '8537b8eda03e1c629f7fb21b33db6bee', '2024-05-22 00:38:39'),
(0, 'eee', 'eee, eee eee', '$2y$10$5hLr/bzMg8vyi1IkqsRM9uMEBYu.n19d7mKBQ0bTklQCS5dKd9ibq', 'user', 'ee63b259047517c38485a2ccc95c17ee', '2024-05-22 02:20:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
