-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 04:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be19_cr5_animal_adoption_abdullah`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `size` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `vaccinated` varchar(290) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `status` enum('Adopted','Available') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `photo`, `location`, `description`, `size`, `age`, `vaccinated`, `breed`, `status`) VALUES
(3, 'cow', 'https://media.istockphoto.com/id/1440057213/de/foto/drei-k%C3%BChe-schwarz-und-wei%C3%9F-gruppieren-sich-auf-einem-feld-gl%C3%BCcklich-und-fr%C3%B6hlich-und-ein.webp?b=1&s=612x612&w=0&k=20&c=wjA_4JI_qoou6ftNSg71Oj8h5efc-xMUMvJKalEMImw=', 'at the barns ', 'big cow', 'big', 8, 'y', 'European cow', 'Available'),
(5, 'cowea', 'https://media.istockphoto.com/id/1470677566/de/foto/neugierige-kuh-schaut-auf-rinderfarm-in-die-kamera.webp?b=1&s=612x612&w=0&k=20&c=zRMW3AsSXZg226Qnr-7M9c_c2PBKqMuK0uuD3NJTEgs=', 'asshw88ws', 'small cow', 'small', 19, '1', 'unknown', 'Available'),
(6, 'cat', 'https://media.istockphoto.com/id/1408674250/de/foto/tierbesitzer-der-seine-hungrige-katze-f%C3%BCttert.webp?b=1&s=612x612&w=0&k=20&c=BwhyKsfTRcJ8tbozzmk0LumpGLiYsNmKdzOmIB_cVgs=', 'vt4t4', 'green', 'small', 11, '0', 'qq', 'Available'),
(7, 'cat', 'https://cdn.pixabay.com/photo/2018/11/29/23/34/cat-3846780_1280.jpg', 'dwqcwcq', 'red', 'large', 8, '1', 'zero ', 'Available'),
(8, 'lion ', 'https://media.istockphoto.com/id/1333977253/de/foto/m%C3%A4nnlicher-l%C3%B6we-ruht-auf-einem-felsen.webp?b=1&s=612x612&w=0&k=20&c=l-Y3x1m38VjpXClci0RWXwrh-2oM455_p3EALekGGFE=', 'wejoejo', 'bkid', 'large', 6, 'y', 'unknown', 'Available'),
(9, 'bird', 'https://media.istockphoto.com/id/1131580101/de/foto/portr%C3%A4t-eines-hausspatzens-auf-einem-posten.webp?b=1&s=612x612&w=0&k=20&c=8j5eyL32dA0ThHpkbJlG8iySFa32hQ-K3RrR5EtRYDs=', 'ieiei', 'smaller  bird', 'small', 1, 'y', 'unknown', 'Adopted'),
(10, 'bird', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCAE6AbUDASIAAhEB', 'fjfjff8', 'very small bird', 'medium', 7, 'y', 'mexico', 'Available'),
(11, 'lion s', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCAE6AbUDASIAAhEB', 'wdjj', 'smsszs', 'large', 11, 'n', 'unknown', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
