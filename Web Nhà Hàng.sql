-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2022 lúc 05:47 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(2, 'Trung', 'trungtrandinh203@gmail.com', 'TrungAdmin', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(4, 'Hải sản'),
(5, 'Món Âu'),
(6, 'Món Á'),
(7, 'Đồ uống'),
(8, 'Thức uống có cồn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `productName` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `quantity`, `image`, `price`) VALUES
(21, 34, '06qgr0phcihq25jaglqcpgvbhv', 'Bào ngu nướng', 1, '68a96bea2d.jpg', 20000),
(23, 34, 'n5kc0pnfeqrrlc7rn2rtf8kiut', 'Bào ngu nướng', 1, '68a96bea2d.jpg', 20000),
(24, 36, 'n5kc0pnfeqrrlc7rn2rtf8kiut', 'Trung', 1, '901ae3582d.jpg', 2),
(25, 35, 'n5kc0pnfeqrrlc7rn2rtf8kiut', 'Cá chình', 1, 'aaa6bdf63e.jpg', 5000000),
(26, 37, 'n5kc0pnfeqrrlc7rn2rtf8kiut', 'bánh', 1, '300734e3e8.jpg', 205),
(29, 37, 'nqdu13snd479ht1keotd1lv3ar', 'bánh', 1, '300734e3e8.jpg', 205);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(13, 'Món Âu'),
(14, 'Hải sản'),
(15, 'Đồ uống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `zipcode`, `country`, `city`, `address`, `email`, `phone`, `password`) VALUES
(8, 'Trần Đình Trung', '0123', 'VietNam', '    bmt', 'daklak', 'trungtrandinh003@gmail.com', 353748447, '111'),
(9, 'Trần Đình Trung', '0123', 'VietNam', 'bmt', 'daklak', 'trung3@gmail.com', 353748447, '123'),
(10, 'Trần Đình Trung', '0123', 'VietNam', 'bmt', 'daklak', '3@gmail.com', 353748447, '125'),
(11, 'T', '0123', 'VietNam', 'bmt', '1b xã eamang ', 't@gmail.com', 789456123, '123'),
(12, 'Trần Đình Trung', '0123', 'VietNam', 'bmt', 'daklak', 'trungtrandi@gmail.com', 353748447, '456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `customer_id` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productName` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `customer_id`, `productName`, `quantity`, `price`, `image`, `date_order`, `status`) VALUES
(19, 34, '8', 'Bào ngu nướng', 1, 20000, '68a96bea2d.jpg', '2022-12-19 16:07:45', 2),
(20, 35, '8', 'Cá chình', 1, 5000000, 'aaa6bdf63e.jpg', '2022-12-19 02:58:10', 0),
(21, 34, '', 'Bào ngư nướng mỡ hành', 3, 60000, '1600510049.jpg', '2022-12-19 03:57:13', 0),
(22, 34, '', 'Bào ngư nướng mỡ hành', 1, 20000, '1600510049.jpg', '2022-12-19 03:58:47', 0),
(23, 34, '', 'Bào ngư nướng mỡ hành', 1, 20000, '1600510049.jpg', '2022-12-19 04:27:20', 1),
(24, 34, '8', 'Bào ngư nướng mỡ hành', 2, 40000, '1600510049.jpg', '2022-12-19 16:07:40', 2),
(25, 39, '8', 'Mỳ Ý sốt bò bằm', 4, 2000, '3ab0f96d48.jpg', '2022-12-19 16:07:44', 2),
(26, 34, '8', 'Bào ngư nướng mỡ hành', 1, 20000, '1600510049.jpg', '2022-12-19 04:11:54', 0),
(27, 38, '8', 'Rượu vang Pháp Chateau Carbonnieux Blanc 2020', 1, 3, '9ff33b7b3a.jpg', '2022-12-19 16:07:29', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` tinytext NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`) VALUES
(35, 'Cá Chình nấu gừng', 10, 6, '<p><span>&aacute; ch&igrave;nh</span><span>&nbsp;sống ngay tại hồ hải sản của nh&agrave; h&agrave;ng, thực kh&aacute;ch chọn hải sản xong phần c&ograve;n lại được Bếp lo. Bếp&nbsp;</span><span>nấu</span><span>&nbsp;theo khẩu vị.</span></p>', 1, '5000000 ', '367a5a4b98.jpg'),
(36, 'Bông điên điển xào tép đồng', 10, 6, '<p><span>T&eacute;p đồng</span><span>&nbsp;l&agrave; m&oacute;n ăn d&acirc;n d&atilde;, dễ thực hiện với hương vị thơm ngon đặc trưng v&agrave; m&oacute;n&nbsp;</span><span>x&agrave;o</span><span>&nbsp;với&nbsp;</span><span>t&eacute;p</span><span>&nbsp;th&igrave; lu&ocirc;n hấp dẫn trong c&aacute;c bữa cơm gia đ&igrave;nh.</span></p>', 1, '2 ', '50908271d4.jpg'),
(38, 'Rượu vang Pháp Chateau Carbonnieux Blanc 2020', 15, 8, '<p><span>Giống nho. Blend ; Loại vang.&nbsp;</span><span>Rượu Vang</span><span>&nbsp;Trắng ; Nh&agrave; sản xuất.&nbsp;</span><span>Chateau Carbonnieux</span><span>&nbsp;; Quốc gia. Vang&nbsp;</span><span>Ph&aacute;p</span><span>&nbsp;; Nồng độ. 13% ABV*.</span></p>', 0, '2.500 ', '9ff33b7b3a.jpg'),
(39, 'Mỳ Ý sốt bò bằm', 13, 5, '<p><span>M&igrave;&nbsp;</span><span>&Yacute; sốt b&ograve; băm</span><span>&nbsp;hay c&ograve;n gọi l&agrave; Spaghetti, l&agrave; m&oacute;n ăn ngon v&agrave; phổ biến, d&ugrave;ng k&egrave;m với hỗn hợp&nbsp;</span><span>sốt</span><span>&nbsp;c&agrave; chua v&agrave; thịt&nbsp;</span><span>b&ograve; bằm</span><span>&nbsp;c&oacute; nguồn gốc từ Italia</span></p>', 0, '500 ', '3ab0f96d48.jpg'),
(40, 'Súp cua', 10, 6, '<p><span>S&uacute;p cua</span><span>&nbsp;- một trong số c&aacute;c m&oacute;n ăn s&aacute;ng được nhiều người y&ecirc;u th&iacute;ch bởi hương vị thơm ngon c&ugrave;ng độ s&aacute;nh v&agrave; độ sệt hấp dẫn.</span></p>', 0, '300 ', 'bbc498d2fb.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
