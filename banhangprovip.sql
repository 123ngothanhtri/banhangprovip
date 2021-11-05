-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2021 at 07:35 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhangprovip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thần Thánh', 'admin@gmail.com', 'https://i.ibb.co/YX7wmQS/85633671-p0.jpg', '$2y$10$TgU3/z4UQAMANbP3Wiyij.gC5X/Ful.Es4zWJn3H.Yn1Ok7C4OqXi', NULL, NULL, '2021-09-14 10:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `parent_id`) VALUES
(10, 'Điện thoại', NULL),
(11, 'Máy tính', NULL),
(46, 'Samsung', 10),
(47, 'iPhone', 10),
(48, 'Xiaomi', 10),
(49, 'OPPO', 10),
(50, 'Nokia', 10),
(51, 'Vivo', 10),
(52, 'Vsmart', 10),
(53, 'Realme', 10),
(57, 'qeqe', 56);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `content_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `content_comment`) VALUES
(1, 'sdas asd asd as das'),
(2, 'rutrty tyrty rty rtyr');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `total_order` float NOT NULL DEFAULT '0',
  `status_order` tinyint(1) DEFAULT '0',
  `email_order` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_order` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_order` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_order` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `total_order`, `status_order`, `email_order`, `phone_order`, `address_order`, `name_order`, `created_at`, `updated_at`) VALUES
(113, 85870000, 0, '123pachirisu@gmail.com', '0123654789', 'VinhLong', 'Thần Thánh', '2021-09-06 11:00:20', '2021-09-06 11:00:20'),
(114, 43980000, 1, '123ngothanhtri@gmail.com', '01236412587', 'qwq', 'Audi', '2021-09-07 07:11:56', '2021-09-11 11:42:37'),
(115, 205620000, 0, '123ngothanhtri@gmail.com', '2112', '2121', 'Audi', '2021-09-07 07:59:05', '2021-09-07 07:59:05'),
(116, 879780000, 1, '123pachirisu@gmail.com', '1232123212', 'qweqw', 'Thần Thánh', '2021-09-07 09:25:31', '2021-09-07 11:05:18'),
(117, 93970000, 1, '23pachirisu@gmail.com', '2', '2', 'Audi', '2021-09-07 19:28:09', '2021-09-08 07:27:25'),
(118, 14990000, 0, '123pachirisu@gmail.com', '31231231', 'qweqwew', 'Thần Thánh', '2021-09-08 08:37:13', '2021-09-08 08:37:13'),
(122, 646910000, 0, 'wqwe@wew', '12', '1212', 'Thần Thánh', '2021-09-08 12:48:04', '2021-09-08 12:48:04'),
(123, 39990000, 0, 'admin@gmail.com', '1', '1', 'Audi', '2021-09-08 18:40:38', '2021-09-08 18:40:38'),
(124, 45480000, 0, 'admin@gmail.com', '212', '12', 'Audi', '2021-09-08 18:41:38', '2021-09-08 18:41:38'),
(125, 26990000, 0, 'admin@gmail.com', '232', '32', 'Audi', '2021-09-08 18:49:37', '2021-09-08 18:49:37'),
(126, 39990000, 1, 'admin@gmail.com', '121', '121', 'Thần Thánh', '2021-09-08 18:59:14', '2021-09-12 03:11:04'),
(127, 16990000, 1, '123pachirisu@gmail.com', '21', '2121', 'Thần Thánh', '2021-09-09 06:27:10', '2021-09-09 06:43:04'),
(128, 50000000, 0, '123ngothanhtri@gmail.com', '4', '1212', 'Thần Thánh', '2021-09-09 18:11:20', '2021-09-09 18:11:20'),
(129, 26480000, 1, '123ngothanhtri@gmail.com', '212', '121', 'Audi', '2021-09-11 10:00:58', '2021-09-12 03:10:35'),
(130, 39990000, 1, '123ngothanhtri@gmail.com', '2312', '213', 'Thần Thánh', '2021-09-11 11:37:56', '2021-09-12 03:10:30'),
(133, 16990000, 0, '123ngothanhtri@gmail.com', '21212121', 'qweqweqweq', '1ngothanhtri', '2021-09-18 16:09:14', '2021-09-18 16:09:14'),
(134, 25950000, 0, '123pachirisu@gmail.com', '21212121', 'sdas asd asd', 'Thần Thánh', '2021-10-04 11:53:38', '2021-10-04 11:53:38'),
(135, 32980000, 0, '123ngothanhtri@gmail.com', '123654789', '5', 'Thần thánh', '2021-10-13 16:25:07', '2021-10-13 16:25:07'),
(136, 39990000, 0, '123ngothanhtri@gmail.com', '123654789', 'w', 'Thần thánh', '2021-10-13 16:26:59', '2021-10-13 16:26:59'),
(137, 26990000, 0, '123ngothanhtri@gmail.com', '123654789', 'e', 'Thần thánh', '2021-10-13 16:56:36', '2021-10-13 16:56:36'),
(138, 39990000, 0, '123ngothanhtri@gmail.com', '123654789', 'we', 'Thần thánh', '2021-10-13 16:59:58', '2021-10-13 16:59:58'),
(139, 26990000, 0, '123ngothanhtri@gmail.com', '123654789', 'e', 'Thần thánh', '2021-10-13 17:03:49', '2021-10-13 17:03:49'),
(140, 26990000, 0, '123ngothanhtri@gmail.com', '123654789', 'a', 'Thần thánh', '2021-10-13 19:17:27', '2021-10-13 19:17:27'),
(141, 39990000, 0, '123ngothanhtri@gmail.com', '123654789', 's', 'Thần thánh', '2021-10-13 19:18:14', '2021-10-13 19:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_detail` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id_order_detail`, `id_order`, `id_product`, `quantity`) VALUES
(60, 113, 129, 2),
(61, 113, 133, 1),
(62, 114, 130, 1),
(63, 114, 131, 1),
(64, 115, 130, 1),
(65, 115, 132, 7),
(66, 115, 128, 3),
(67, 116, 129, 22),
(68, 117, 130, 2),
(69, 117, 129, 1),
(70, 118, 137, 1),
(93, 123, 129, 1),
(94, 124, 129, 1),
(95, 124, 139, 1),
(96, 125, 130, 1),
(97, 126, 129, 1),
(98, 127, 131, 1),
(99, 128, 128, 1),
(100, 129, 141, 1),
(101, 129, 138, 1),
(102, 130, 129, 1),
(107, 133, 131, 1),
(108, 134, 138, 2),
(109, 134, 139, 2),
(110, 134, 140, 1),
(111, 135, 138, 1),
(112, 135, 130, 1),
(113, 136, 129, 1),
(114, 137, 130, 1),
(115, 138, 129, 1),
(116, 139, 130, 1),
(117, 140, 130, 1),
(118, 141, 129, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_product` text COLLATE utf8_unicode_ci,
  `price_product` int(11) NOT NULL DEFAULT '0',
  `image_product` varchar(9999) COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `description_product`, `price_product`, `image_product`, `id_category`) VALUES
(128, 'Điện thoại Samsung Galaxy Z Fold2 5G Đặc Biệt', 'Thuộc dòng smartphone cao cấp, Samsung Galaxy Z Fold2 5G được Samsung trau chuốt không chỉ vẻ ngoài sang trọng, tinh tế mà lẫn cả “nội thất” bên trong đầy mạnh mẽ khiến chiếc smartphone này hoàn toàn xứng đáng để được sở hữu.', 50000000, 'https://cdn.tgdd.vn/Products/Images/42/232668/samsung-galaxy-z-fold-2-den-600x600-600x600.jpg', 46),
(129, 'iPhone 12 Pro Max 512GB', 'iPhone 12 Pro Max 512GB - đẳng cấp từ tên gọi đến từng chi tiết. Ngay từ khi chỉ là tin đồn thì chiếc smartphone này đã làm đứng ngồi không yên bao “fan cứng” nhà Apple, với những nâng cấp vô cùng nổi bật hứa hẹn sẽ mang đến những trải nghiệm tốt nhất về mọi mặt mà chưa một chiếc iPhone tiền nhiệm nào có được.iPhone 12 Pro Max 512GB - đẳng cấp từ tên gọi đến từng chi tiết. Ngay từ khi chỉ là tin đồn thì chiếc smartphone này đã làm đứng ngồi không yên bao “fan cứng” nhà Apple, với những nâng cấp vô cùng nổi bật hứa hẹn sẽ mang đến những trải nghiệm tốt nhất về mọi mặt mà chưa một chiếc iPhone tiền nhiệm nào có được.', 39990000, 'https://cdn.tgdd.vn/Products/Images/42/213033/iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg', 47),
(130, 'OPPO Find X3 Pro 5G', '<p>OPPO đ&atilde; l&agrave;m khuynh đảo thị trường smartphone khi cho ra đời chiếc điện thoại OPPO Find X3 Pro 5G. Đ&acirc;y l&agrave; một sản phẩm c&oacute; thiết kế độc đ&aacute;o, sở hữu cụm camera khủng, cấu h&igrave;nh thuộc top đầu trong thế giới Android.</p>', 26990000, 'https://cdn.tgdd.vn/Products/Images/42/232190/oppo-find-x3-pro-black-001-1-600x600.jpg', 49),
(131, 'Xiaomi Mi 11 5G', 'Xiaomi Mi 11 một siêu phẩm đến từ Xiaomi, máy cho trải nghiệm hiệu năng hàng đầu với vi xử lý Qualcomm Snapdragon 888, cùng loạt công nghệ đỉnh cao, khiến bất kỳ ai cũng sẽ choáng ngợp về smartphone này.', 16990000, 'https://cdn.tgdd.vn/Products/Images/42/226264/xiaomi-mi-11-xanhduong-600x600-600x600.jpg', 48),
(132, 'Xiaomi Redmi 9T (6GB/128GB)', 'Xiaomi tiếp tục “phá đảo” phân khúc giá rẻ tầm trung với Redmi 9T 6GB/128GB. Nổi bật với thiết kế trẻ trung, màn hình siêu lớn, bộ 4 camera AI, pin cực khủng, mẫu smartphone này sẽ thỏa mãn mọi nhu cầu giải trí, niềm đam mê sáng tạo và khám phá không ngừng của giới trẻ.', 4090000, 'https://cdn.tgdd.vn/Products/Images/42/233130/xiaomi-redmi-9t-6gb-110621-080650-600x600.jpg', 48),
(133, 'Samsung Galaxy A51 (6GB/128GB)', 'Theo Strategy Analytics, Galaxy A51 là Smartphone Android Bán Chạy Nhất Thế Giới Quý 1/2020, máy sở hữu cụm 4 camera, bao gồm camera macro chụp cận cảnh lần đầu xuất hiện trên smartphone Samsung, màn hình tràn viền vô cực cùng mặt lưng họa tiết kim cương nổi bật.', 5890000, 'https://cdn.tgdd.vn/Products/Images/42/211570/samsung-galaxy-a51-silver-600x600.jpg', 46),
(135, 'Vivo Y53s', 'Vivo mang đến niềm vui cho mọi người tin dùng khi hãng chính thức tung ra chiếc điện thoại Vivo Y53s với những tính năng tiên tiến đi cùng hiệu năng mạnh mẽ. Đặc biệt, smartphone lại còn sở hữu mức giá hấp dẫn trong phân khúc tầm trung đầy hứa hẹn.', 6990000, 'https://cdn.tgdd.vn/Products/Images/42/240286/vivo-y53s-xanh-600x600.jpg', 51),
(136, 'Realme C25s', 'Nối tiếp thành công của Realme C25, Realme đã cho ra mắt mẫu smartphone mang tên Realme C25s với nhiều tính năng vượt trội về camera, dung lượng pin, con chip mạnh mẽ và hơn hết là được bán ra với mức giá giá vô cùng tốt.', 4990000, 'https://cdn.tgdd.vn/Products/Images/42/238483/realme-c25s-grey-7-600x600.jpg', 53),
(137, 'Samsung Galaxy Note 20', 'Tháng 8/2020, Galaxy Note 20 chính thức được lên kệ, với thiết kế camera trước nốt ruồi quen thuộc, cụm camera hình chữ nhật mới lạ cùng với vi xử lý Exynos 990 cao cấp của chính Samsung chắc hẳn sẽ mang lại một trải nghiệm thú vị cùng hiệu năng mạnh mẽ.', 14990000, 'https://cdn.tgdd.vn/Products/Images/42/218355/samsung-galaxy-note-20-062220-122200-fix-600x600.jpg', 46),
(138, 'Xiaomi Redmi Note 10 5G 8GB', 'Redmi Note 10 5G một trong những mẫu điện thoại thuộc series Redmi Note 10 của Xiaomi, không chỉ sở hữu hiệu năng mạnh mẽ đáp ứng tốt nhu cầu chơi game, đây còn là chiếc điện thoại có hỗ trợ mạng 5G cho tốc độ kết nối nhanh chóng.', 5990000, 'https://cdn.tgdd.vn/Products/Images/42/235971/xiaomi-redmi-note-10-5g-xanh-bong-dem-1-600x600.jpg', 48),
(139, 'Vsmart Aris Pro', 'Thương hiệu smartphone Việt - Vsmart chính thức trình làng Vsmart Aris Pro. Mẫu điện thoại này đánh dấu một bước ngoặc lớn trong làng smartphone với công nghệ camera ẩn trong màn hình, mức giá hợp lý giúp người Việt có cơ hội tiếp cận những công nghệ mới nhất.', 5490000, 'https://cdn.tgdd.vn/Products/Images/42/228531/vsmart-aris-pro-green-600jpg-600x600.jpg', 52),
(140, 'Nokia C30', 'Nokia C30 là dòng smartphone giá rẻ được Nokia chăm chút và đầu tư kỹ lưỡng với những nâng cấp đáng kể về hiệu năng camera cùng viên pin cực khủng so với Nokia C20 đem lại trải nghiệm tuyệt vời hơn thế hệ tiền nhiệm của mình.', 2990000, 'https://cdn.tgdd.vn/Products/Images/42/239748/nokia-c30-xam-1-600x600.jpg', 50),
(141, 'iPhone 12', '<p>Trong những th&aacute;ng cuối năm 2020, Apple đ&atilde; ch&iacute;nh thức giới thiệu đến người d&ugrave;ng cũng như iFan thế hệ iPhone 12 series mới với h&agrave;ng loạt t&iacute;nh năng bứt ph&aacute;, thiết kế được lột x&aacute;c ho&agrave;n to&agrave;n, hiệu năng đầy mạnh mẽ v&agrave; một trong số đ&oacute; ch&iacute;nh l&agrave; iPhone 12 64GB.</p>', 20490000, 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-xanh-duong-600x600.jpg', 47);

-- --------------------------------------------------------

--
-- Table structure for table `setting_admin`
--

CREATE TABLE `setting_admin` (
  `id` int(11) NOT NULL,
  `theme` int(11) NOT NULL,
  `background_login_admin` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `effect` tinyint(1) NOT NULL DEFAULT '0',
  `elemental` tinyint(1) DEFAULT '0',
  `avatar_admin` tinyint(1) NOT NULL DEFAULT '0',
  `sidebar` tinyint(1) NOT NULL,
  `font` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `button_setting` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting_admin`
--

INSERT INTO `setting_admin` (`id`, `theme`, `background_login_admin`, `effect`, `elemental`, `avatar_admin`, `sidebar`, `font`, `button_setting`) VALUES
(1, 2, 'https://i.ibb.co/fkT0N3h/z2833903782514-51b5f6dda4339aeda576e879e0d0247e.jpg', 0, 1, 1, 0, 'Exo 2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting_home`
--

CREATE TABLE `setting_home` (
  `id` int(11) NOT NULL,
  `slider` tinyint(1) NOT NULL DEFAULT '0',
  `carousel_product` tinyint(1) NOT NULL DEFAULT '0',
  `logo` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer1` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting_home`
--

INSERT INTO `setting_home` (`id`, `slider`, `carousel_product`, `logo`, `footer1`, `footer2`) VALUES
(1, 1, 1, 'https://i.ibb.co/HNt9VgZ/genshin-logo.png', '© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020. Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email: cskh@thegioididong.com.', 'Copyright © 2021 - Bán sản phẩm siêu cấp');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `name_slider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_slider` varchar(9999) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `name_slider`, `image_slider`) VALUES
(37, 'qwe', 'https://i.ibb.co/ZGJ753M/800-200-800x200-88.png'),
(38, 'as', 'https://i.ibb.co/Pc1yJ7v/Oppo-A74-800-200-800x200.png'),
(39, 'sa', 'https://i.ibb.co/bKgMChq/redmi-9t-800-200-800x200-4.png'),
(40, 'aqw', 'https://i.ibb.co/JK0QB1m/800-200-800x200-156.png'),
(41, 'bnvbn', 'https://i.ibb.co/VQHWGWQ/800-200-800x200-231.png'),
(42, 'gdfgd', 'https://i.ibb.co/hDxJb8t/800-200-800x200-91.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_detail`),
  ADD KEY `id_donhang` (`id_order`),
  ADD KEY `id_sanpham` (`id_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_loaisanpham` (`id_category`);

--
-- Indexes for table `setting_admin`
--
ALTER TABLE `setting_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_home`
--
ALTER TABLE `setting_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `setting_admin`
--
ALTER TABLE `setting_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_home`
--
ALTER TABLE `setting_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
