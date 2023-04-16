-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for course_db
CREATE DATABASE IF NOT EXISTS `course_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `course_db`;

-- Dumping structure for table course_db.bookmark
CREATE TABLE IF NOT EXISTS `bookmark` (
  `user_id` varchar(20) NOT NULL,
  `playlist_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table course_db.bookmark: ~0 rows (approximately)
DELETE FROM `bookmark`;
INSERT INTO `bookmark` (`user_id`, `playlist_id`) VALUES
	('HHuetGT5g3XwFNkXUmZw', 'l8vRLpi1otHr6nqwsxIG');

-- Dumping structure for table course_db.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` varchar(20) NOT NULL,
  `content_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table course_db.comments: ~0 rows (approximately)
DELETE FROM `comments`;
INSERT INTO `comments` (`id`, `content_id`, `user_id`, `tutor_id`, `comment`, `date`) VALUES
	('VeMwyL2zgCxccUNRpwQ3', 'hIuSdI04I7BxoGT1pqM7', 'uNnN4xG8BdQEYThNmfza', '7K2JwzHkWNHNa3q2t6TC', 'ini apaan?', '2023-03-28'),
	('lpVx5GzST6WC7cjGQGby', 'ilfvUT9S1to2Iuu6K6SM', 'HHuetGT5g3XwFNkXUmZw', 'LKvSJi0QNJXWJTuAYcDg', 'nice sound got me cum asf ', '2023-03-28');

-- Dumping structure for table course_db.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(15) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table course_db.contact: ~0 rows (approximately)
DELETE FROM `contact`;

-- Dumping structure for table course_db.content
CREATE TABLE IF NOT EXISTS `content` (
  `id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `playlist_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `video` varchar(100) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table course_db.content: ~0 rows (approximately)
DELETE FROM `content`;
INSERT INTO `content` (`id`, `tutor_id`, `playlist_id`, `title`, `description`, `video`, `thumb`, `date`, `status`) VALUES
	('hIuSdI04I7BxoGT1pqM7', '7K2JwzHkWNHNa3q2t6TC', 'YuobRNwSR3Ik9roxf13h', 'Bergas Mandi', 'Ini video bergas', 'XgyB59L5qRkH1vTEBk8l.mp4', 'HLhdVyqSnJDjCCzq64h9.jpg', '2023-03-28', 'active'),
	('ilfvUT9S1to2Iuu6K6SM', 'LKvSJi0QNJXWJTuAYcDg', 'l8vRLpi1otHr6nqwsxIG', 'UI/UX first video guys', 'video pertama dari pak abdul qosim', 'oE161Pk1oJ0V6aOHm0IZ.mp4', 'F2K9R2a9MgEAbOurlhbr.webp', '2023-03-28', 'active');

-- Dumping structure for table course_db.likes
CREATE TABLE IF NOT EXISTS `likes` (
  `user_id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `content_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table course_db.likes: ~1 rows (approximately)
DELETE FROM `likes`;
INSERT INTO `likes` (`user_id`, `tutor_id`, `content_id`) VALUES
	('HHuetGT5g3XwFNkXUmZw', 'LKvSJi0QNJXWJTuAYcDg', 'ilfvUT9S1to2Iuu6K6SM');

-- Dumping structure for table course_db.playlist
CREATE TABLE IF NOT EXISTS `playlist` (
  `id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table course_db.playlist: ~3 rows (approximately)
DELETE FROM `playlist`;
INSERT INTO `playlist` (`id`, `tutor_id`, `title`, `description`, `thumb`, `date`, `status`) VALUES
	('YuobRNwSR3Ik9roxf13h', '7K2JwzHkWNHNa3q2t6TC', 'Bergas Makan', 'Tempat Bergas Makan', '6zmsCabE6mab6MTkKskz.jpg', '2023-03-28', 'active'),
	('l8vRLpi1otHr6nqwsxIG', 'LKvSJi0QNJXWJTuAYcDg', 'UI/UX', 'mempelajari design di figma', 'rL4I366FLtcgfOVgn05z.png', '2023-03-28', 'active');

-- Dumping structure for table course_db.tutors
CREATE TABLE IF NOT EXISTS `tutors` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table course_db.tutors: ~0 rows (approximately)
DELETE FROM `tutors`;
INSERT INTO `tutors` (`id`, `name`, `profession`, `email`, `password`, `image`) VALUES
	('p8wqTbBpMQpxIqa47gcP', 'yunif putra pradeka', 'Front End', 'darrenarmani666@gmail.com', 'adeb3a7b6c57d2fbc2dd5965efe6547d2fe36109', 'IrRfVeI9JY8cDFlNaZlH.jpg'),
	('7K2JwzHkWNHNa3q2t6TC', 'bergas', 'Front End', 'bergas@gmail.com', '358952bc0087069bac52a1e8774ac8696e8981a2', 'Rn5oIgmEKHaxvTdoOEFJ.jpg'),
	('LKvSJi0QNJXWJTuAYcDg', 'Abdul Qosim Tukam', 'Data Analyst', 'ambatukam@gmail.com', '00deaac2074a25ce397c236443d084965ec63473', 'f3HuYfPQUDu3cGRRF3Ug.jpg');

-- Dumping structure for table course_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table course_db.users: ~0 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
	('uNnN4xG8BdQEYThNmfza', 'darren armani', 'yunifputrapradeka@gmail.com', 'adeb3a7b6c57d2fbc2dd5965efe6547d2fe36109', 'TAnvamWIrH6xpagIdA7E.jpg'),
	('AMOmj6R0qzZen7gbVt4M', 'yanti', 'yanti@gmail.com', '6d7ded18778d8f6854a418786d073050217e1502', 'vWmITzJ4leIzGbeD3hQI.jpg'),
	('KRNQHwXuZgBxJHLLwZh1', 'darren armani', 'darrenarmani666@gmail.com', '39afb6cb2f84a5645c2345b80cbfe0b45648600b', 'smY7s5jnj9BRWtqTjTv1.png'),
	('HHuetGT5g3XwFNkXUmZw', 'Rusdi Ngawi', 'rusdi@gmail.com', '7c8a0cf59a5fb07b145a6dce26d83b529ef538c2', 'gEOBqEATImLPwnsElr5K.jpg'),
	('ChtoLt85BuBCmrhNhxiA', 'asfan', 'asfan@gmail.com', '3e9586da0bb7893830c0f26929d66e062d7971be', 'HH1jyXFLObLSEXemqcJu.webp');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
