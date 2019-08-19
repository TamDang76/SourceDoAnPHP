-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 11, 2019 lúc 07:03 PM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `level` tinyint(4) DEFAULT '1',
  `avatar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `password`, `phone`, `status`, `level`, `avatar`, `created_at`, `update_at`) VALUES
(1, 'Hoàng Tâm', '19/3 Phan Văn Năm, phường Phú Thạnh, quận Tân Phú', 'tieumessi76@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0385214242', 1, 2, NULL, NULL, '2019-04-05 08:59:47'),
(2, 'Hoàng Sơn', 'huyện Đức Phổ tỉnh Quảng Ngãi', 'hoangson76@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0379173159', 1, 2, NULL, NULL, NULL),
(3, 'Hoàng Vũ', 'huyện Đức Phổ tỉnh Quảng Ngãi', 'hoangvu76@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0904642615', 1, 2, NULL, NULL, NULL),
(4, 'Văn Quý', 'huyện Đức Phổ tỉnh Quảng Ngãi', 'vanquy76@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0978584785', 1, 2, NULL, NULL, NULL),
(5, 'Thị Phúc', 'huyện Đức Phổ tỉnh Quảng Ngãi', 'thiphuc76@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0849104352', 1, 2, NULL, NULL, NULL),
(6, 'nguyen van a', '18 nguyen son', 'nguyenvana76@gmail.com', '12345678', '9998788767', 1, 1, NULL, NULL, NULL),
(7, 'Nguyen Thi Lan', '76 nguyen son', 'thilan76@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '0908904816', 1, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `home` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `images`, `banner`, `home`, `status`, `created_at`, `updated_at`) VALUES
(2, ' adidas ', 'adidas', NULL, NULL, 0, 1, '2019-03-09 15:35:06', '2019-04-11 16:25:28'),
(6, 'Puma ', 'puma', NULL, NULL, 0, 1, '2019-03-24 04:52:30', '2019-04-07 14:48:44'),
(7, 'Converse', 'converse', NULL, NULL, 1, 1, '2019-04-04 05:57:20', '2019-04-11 16:40:49'),
(8, 'Nike', 'nike', NULL, NULL, 1, 1, '2019-04-04 06:01:10', '2019-04-11 16:40:39'),
(9, 'Balenciaga', 'balenciaga', NULL, NULL, 1, 1, '2019-04-04 06:02:16', '2019-04-11 16:29:40'),
(10, 'Fila', 'fila', NULL, NULL, 0, 1, '2019-04-04 06:02:54', '2019-04-07 13:56:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` tinyint(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 4, 5, 1, 4500000, '2019-04-10 08:22:31', '2019-04-10 08:22:31'),
(2, 5, 6, 2, 3400000, '2019-04-10 09:18:21', '2019-04-10 09:18:21'),
(3, 5, 11, 1, 3000000, '2019-04-10 09:18:22', '2019-04-10 09:18:22'),
(4, 5, 4, 2, 2850000, '2019-04-10 09:18:22', '2019-04-10 09:18:22'),
(5, 6, 4, 1, 2850000, '2019-04-10 09:19:36', '2019-04-10 09:19:36'),
(6, 7, 4, 2, 2850000, '2019-04-10 09:20:18', '2019-04-10 09:20:18'),
(7, 8, 18, 2, 3000000, '2019-04-11 06:33:13', '2019-04-11 06:33:13'),
(8, 8, 17, 3, 2000000, '2019-04-11 06:33:13', '2019-04-11 06:33:13'),
(9, 9, 1, 1, 4500000, '2019-04-11 14:55:44', '2019-04-11 14:55:44'),
(10, 10, 6, 3, 3400000, '2019-04-11 15:50:31', '2019-04-11 15:50:31'),
(11, 10, 4, 3, 2850000, '2019-04-11 15:50:31', '2019-04-11 15:50:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` tinyint(4) DEFAULT '0',
  `thunbar` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `mota` text,
  `number` int(11) NOT NULL DEFAULT '0',
  `head` int(11) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  `hot` int(11) DEFAULT '0',
  `pay` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `sale`, `thunbar`, `category_id`, `mota`, `number`, `head`, `view`, `hot`, `pay`, `created_at`, `update_at`) VALUES
(1, '    Nike SB Portmore II    ', 'nike-sb-portmore-ii', 4500000, 0, 'nike_SB_Portmore_2.jpg', 8, 'giày nike', 0, 0, 0, 0, 0, NULL, '2019-04-07 15:53:36'),
(4, '   balenciaga triple    ', 'balenciaga-triple', 3000000, 5, 'balenciaga-triple-s-matt-martin-landscape-2-1.jpg', 9, 'ok', -2, 0, 0, 0, 3, NULL, '2019-04-10 09:20:24'),
(5, 'Converse70 Svintage', 'converse70-svintage', 4500000, 0, 'converse70svintage.jpg', 7, 'Giày Converse Svintage', 9, 0, 0, 0, 0, NULL, '2019-04-10 09:04:45'),
(6, 'Jordan5 Paris', 'jordan5-paris', 3400000, 0, 'jordan5paris.jpg', 8, 'Giày Nike ', 8, 0, 0, 0, 1, NULL, '2019-04-10 09:18:31'),
(7, ' Adidas Pharrell', 'adidas-pharrell', 5000000, 5, 'adidas-pharrell-williams.jpg', 2, 'Giày Adidas', 9, 0, 0, 0, 0, NULL, '2019-04-11 07:00:24'),
(8, ' Adidas Propwhere', 'adidas-propwhere', 2000000, 5, 'Adidas-prophere-1.jpg', 2, 'Giày Adidas', 3, 0, 0, 0, 0, NULL, '2019-04-11 07:01:02'),
(9, 'Adidas yeezy500', 'adidas-yeezy500', 5000000, 0, 'yeezy500.jpg', 2, 'Giày Adidas', 6, 0, 0, 0, 0, NULL, NULL),
(10, 'Converse Rubber', 'converse-rubber', 4000000, 0, 'converserubber.jpg', 7, 'Giày Converse', 5, 0, 0, 0, 0, NULL, NULL),
(11, 'Converse Seoffwhite', 'converse-seoffwhite', 3000000, 0, 'converseoffwhite.jpg', 7, 'Giày Converse', 11, 0, 0, 0, 1, NULL, '2019-04-10 09:18:31'),
(12, 'Balenciaga Black', 'balenciaga-black', 4000000, 0, 'balenciagablack.jpeg', 9, 'Giày Balenciaga', 4, 0, 0, 0, 0, NULL, NULL),
(13, 'Balenciaga White', 'balenciaga-white', 5000000, 0, 'balenciagawhites.jpeg', 9, 'Giày balenciaga', 4, 0, 0, 0, 0, NULL, NULL),
(14, 'Nike Jordan6', 'nike-jordan6', 3000000, 0, 'jordan6.jpg', 8, 'Giày Nike', 2, 0, 0, 0, 0, NULL, NULL),
(15, 'Nike Jordan7', 'nike-jordan7', 3000000, 0, 'jordan7.jpg', 8, 'Giay Nike', 2, 0, 0, 0, 0, NULL, NULL),
(16, 'Adidas Yeezy700', 'adidas-yeezy700', 3000000, 0, 'yeezy700.jpg', 2, 'Adidas', 3, 0, 0, 0, 0, NULL, NULL),
(17, 'converse 1970', 'converse-1970', 2000000, 0, 'converse1970s.jpg', 7, 'Converse', 10, 0, 0, 0, 0, NULL, NULL),
(18, 'baleciaga triple white', 'baleciaga-triple-white', 3000000, 0, 'banlenciagatripleswhite.jpg', 9, 'Balenciaga', 9, 0, 0, 0, 0, NULL, NULL),
(19, 'Adidas Alphabounce', 'adidas-alphabounce', 6000000, 0, 'adidas-alphabounce-instinct-trang-2018.jpg', 2, 'Giay Adidas', 9, 0, 0, 0, 0, NULL, NULL),
(20, ' Adidas  yeezy700', 'adidas-yeezy700', 9000000, 0, 'yeezy700inertia.jpg', 2, 'Giay Adidas', 10, 0, 0, 0, 0, NULL, '2019-04-11 07:14:22'),
(21, 'Adidas Runner', 'adidas-runner', 4000000, 0, 'adidas_NMD_runnerR1.jpg', 2, 'giay adidas', 10, 0, 0, 0, 0, NULL, NULL),
(22, 'Adidas Zapatillas', 'adidas-zapatillas', 4000000, 0, 'Zapatillas Baloncesto 1072_LRG.jpg', 2, 'Giay Adidas', 10, 0, 0, 0, 0, NULL, NULL),
(23, 'Adidas Ultra', 'adidas-ultra', 3000000, 0, 'adidasUltraTechVegeta.jpg', 2, 'Giay adidas', 10, 0, 0, 0, 0, NULL, NULL),
(24, 'Converse Cocacola', 'converse-cocacola', 4000000, 0, 'KithxCocaColaxConverse.jpg', 7, 'giày converse', 10, 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `note` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `amount`, `users_id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(1, 4725000, 5, 0, 'vu dang', '2019-04-10 08:15:38', '2019-04-10 08:15:38'),
(2, 4725000, 5, 0, '', '2019-04-10 08:20:44', '2019-04-10 08:20:44'),
(3, 4725000, 5, 1, 'freeship', '2019-04-10 09:08:14', '2019-04-10 09:08:14'),
(4, 4725000, 5, 1, 'ok', '2019-04-10 09:04:45', '2019-04-10 09:04:45'),
(5, 16275000, 6, 1, 'ook', '2019-04-10 09:18:31', '2019-04-10 09:18:31'),
(6, 2992500, 6, 1, 'ok', '2019-04-10 09:19:42', '2019-04-10 09:19:42'),
(7, 5985000, 6, 1, 'ok', '2019-04-10 09:20:24', '2019-04-10 09:20:24'),
(8, 12600000, 4, 0, 'freeship', '2019-04-11 06:33:13', '2019-04-11 06:33:13'),
(9, 4725000, 4, 0, 'ok', '2019-04-11 14:55:44', '2019-04-11 14:55:44'),
(10, 19687500, 6, 0, 'thuc an cuc', '2019-04-11 15:50:30', '2019-04-11 15:50:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `token` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `avatar`, `status`, `token`, `created_at`, `update_at`) VALUES
(2, 'Nguyễn văn a', 'vana@gmail.com', '0385214242', 'huyện Đức Phổ tỉnh Quảng Ngãi', '1f32aa4c9a1d2ea010adcf2348166a04', NULL, 1, NULL, NULL, NULL),
(3, 'Đặng Hoàng Sơn', 'hoangson76@gmail.com', '0379173159', 'huyện Đức Phổ tỉnh Quảng Ngãi', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1, NULL, NULL, NULL),
(4, 'Đặng Hoàng Vũ', 'hoangvu76@gmail.com', '0985585685', 'huyện Đức Phổ tỉnh Quảng Ngãi', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1, NULL, NULL, NULL),
(5, 'Đỗ Thị Phúc', 'thiphuc76@gmail.com', '0849104352', 'huyện Đức Phổ tỉnh Quảng Ngãi', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1, NULL, NULL, NULL),
(6, 'Đặng Văn Quý', 'vanquy76@gmail.com', '0978584785', 'huyện Đức Phổ tỉnh Quảng Ngãi', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
