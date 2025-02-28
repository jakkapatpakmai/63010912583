-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 06:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` float(9,2) NOT NULL,
  `p_ext` varchar(50) NOT NULL,
  `c_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_ext`, `c_id`) VALUES
(1, 'น้ำส้ม', 'น้ำผลไม้ที่ได้จากการคั้นส้ม มีรสหวานอมเปรี้ยว อุดมไปด้วยวิตามินซี ช่วยเพิ่มความสดชื่นและเสริมภูมิคุ้มกัน', 35.00, 'jpg', 1),
(2, 'น้ำแอปเปิล', 'น้ำผลไม้ที่ได้จากการสกัดแอปเปิล มีรสชาติหวานหอม มีไฟเบอร์ วิตามินซี และสารต้านอนุมูลอิสระ', 35.00, 'jpg', 2),
(3, 'น้ำองุ่น', 'น้ำผลไม้ที่ได้จากองุ่น มีรสหวานและมักมีกลิ่นหอมเฉพาะตัว อุดมไปด้วยสารต้านอนุมูลอิสระ เช่น เรสเวอราทรอล', 35.00, 'jpg', 3),
(4, 'น้ำแตงโม', 'น้ำผลไม้ที่ได้จากการปั่นหรือคั้นแตงโม มีรสหวานและสดชื่น เหมาะสำหรับดับกระหายและเพิ่มความชุ่มชื้นให้ร่างกาย', 35.00, 'jpg', 4),
(5, 'น้ำสับปะรด', 'น้ำผลไม้ที่ได้จากการคั้นหรือปั่นสับปะรด มีรสเปรี้ยวอมหวาน ช่วยย่อยอาหารและมีเอนไซม์โบรมีเลนที่มีประโยชน์', 35.00, 'jpg', 5),
(6, 'น้ำมะม่วง', 'น้ำผลไม้ที่ทำจากมะม่วงสุก มีรสหวานกลมกล่อม อุดมไปด้วยวิตามินเอและสารต้านอนุมูลอิสระ', 35.00, 'jpg', 6),
(7, 'น้ำสตรอว์เบอร์รี', 'น้ำผลไม้ที่ได้จากการปั่นหรือคั้นสตรอว์เบอร์รี มีรสเปรี้ยวหวาน และอุดมไปด้วยวิตามินซี ช่วยบำรุงผิวพรรณ', 35.00, 'jpg', 7),
(8, 'น้ำเชอร์รี', 'น้ำผลไม้ที่ได้จากการสกัดเชอร์รี มีรสชาติเปรี้ยวอมหวาน มีสารเมลาโทนินช่วยในการนอนหลับ', 35.00, 'jpg', 8),
(9, 'น้ำกีวี', 'น้ำผลไม้ที่ได้จากกีวี มีรสเปรี้ยวหวาน อุดมไปด้วยวิตามินซี ไฟเบอร์ และสารต้านอนุมูลอิสระ', 35.00, 'jpg', 9),
(10, 'น้ำมะนาว', 'น้ำผลไม้ที่ได้จากการคั้นมะนาว มีรสเปรี้ยวมาก นิยมดื่มเพื่อดีท็อกซ์หรือผสมเป็นน้ำมะนาวน้ำผึ้ง', 35.00, 'jpg', 10),
(11, 'น้ำทับทิม', 'น้ำผลไม้ที่ได้จากการคั้นเมล็ดทับทิม มีรสเปรี้ยวอมหวาน มีสารต้านอนุมูลอิสระสูง ช่วยบำรุงหัวใจและหลอดเลือด', 40.00, 'jpg', 11),
(12, 'น้ำพีช', 'น้ำผลไม้ที่ทำจากลูกพีช มีรสชาติหวานหอม กลิ่นเฉพาะตัว มีวิตามินเอและซี', 35.00, 'jpg', 12),
(13, 'น้ำมะละกอ', 'น้ำผลไม้ที่ได้จากมะละกอสุก มีรสชาติหวาน อุดมไปด้วยเอนไซม์ปาเปน (Papain) ช่วยย่อยอาหาร', 35.00, 'jpg', 13),
(14, 'น้ำแครนเบอร์รี', 'น้ำผลไม้ที่ได้จากแครนเบอร์รี มีรสเปรี้ยวมาก ช่วยลดความเสี่ยงของการติดเชื้อทางเดินปัสสาวะ', 45.00, 'jpg', 14),
(15, 'น้ำบลูเบอร์รี', 'น้ำผลไม้ที่ทำจากบลูเบอร์รี มีรสเปรี้ยวหวาน มีกลิ่นหอมเฉพาะตัว อุดมด้วยสารต้านอนุมูลอิสระ เช่น แอนโทไซยานิน', 40.00, 'jpg', 15),
(19, 'p_name', 'p_detail', 0.00, 'p_ext', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
