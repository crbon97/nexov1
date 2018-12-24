-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 22, 2018 lúc 03:11 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nexo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Txtkey` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coin`
--

CREATE TABLE `coin` (
  `ID` int(50) NOT NULL,
  `Media` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Percent` int(3) NOT NULL,
  `Date_create` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `coin`
--

INSERT INTO `coin` (`ID`, `Media`, `Address`, `Name`, `Percent`, `Date_create`) VALUES
(2, '', '1NiIsImtpZCI6IjZlZjE3ZmY5MGZhYjk', 'eth', 70, 1535562474),
(3, '', '1NiIsImtpZCI6IjZlZjE3ZmY5MGZhYjk', 'bch', 70, 1535562474),
(20, 'backblue.gif', '1NiIsImtpZCI6IjZlZjE3ZmY5MGZhYjk', 'etc', 70, 1545211983),
(21, 'backblue.gif', '1NiIsImtpZCI6IjZlZjE3ZmY5MGZhYjk', 'xrp', 70, 1545212010),
(22, '0', '1NiIsImtpZCI6IjZlZjE3ZmY5MGZhYjk', 'ltc', 70, 1545212057),
(24, '0', '1NiIsImtpZCI6IjZlZjE3ZmY5MGZhYjk', 'btc', 70, 1545292318),
(27, '0', 'sdfsddfhdfgds234234xcv2342', 'dash', 70, 1545299590),
(28, '0', '1NiIsImtpZCI6IjZlZjE3ZmY5MGZhYjk', 'zec', 70, 1545299690),
(29, '0', '1NiIsImtpZCI6IjZlZjE3ZmY5MGZhYjk', 'ht', 70, 1545299779);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `deposit`
--

CREATE TABLE `deposit` (
  `ID` int(50) NOT NULL,
  `Coin_ID` int(50) NOT NULL,
  `User_ID` int(50) NOT NULL,
  `Total_coin` double NOT NULL,
  `Date_create` int(50) NOT NULL,
  `Date_update` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Total_usd` double NOT NULL,
  `Status` int(2) NOT NULL,
  `Types` int(2) NOT NULL,
  `Price_usd` float NOT NULL,
  `Loan_limit` int(11) NOT NULL,
  `Percent` int(3) NOT NULL,
  `Term` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `deposit`
--

INSERT INTO `deposit` (`ID`, `Coin_ID`, `User_ID`, `Total_coin`, `Date_create`, `Date_update`, `Content`, `Total_usd`, `Status`, `Types`, `Price_usd`, `Loan_limit`, `Percent`, `Term`) VALUES
(1, 24, 2, 10, 1545292318, 0, 'tôi chuyển từ  ví này 0x9e483bebbbc68321f4dc771d6b0b2eefa4b4b428 dến ví này 0x06c68ed6f0b5ca25b50d8e7560a4117e97b89804', 18640, 2, 1, 3728.89, 13048, 70, 7),
(2, 22, 2, 1000, 1545296318, 0, 'tôi chuyển từ  ví này 0x9e483bebbbc68321f4dc771d6b0b2eefa4b4b428 dến ví này 0x06c68ed6f0b5ca25b50d8e7560a4117e97b89804', 39800, 2, 2, 31.31, 27860, 70, 30),
(3, 22, 2, 1000, 1545296318, 0, 'tôi chuyển từ  ví này 0x9e483bebbbc68321f4dc771d6b0b2eefa4b4b428 dến ví này 0x06c68ed6f0b5ca25b50d8e7560a4117e97b89804', 39800, 1, 1, 31.31, 27860, 70, 30),
(4, 22, 2, 1000, 1545296318, 0, 'tôi chuyển từ  ví này 0x9e483bebbbc68321f4dc771d6b0b2eefa4b4b428 dến ví này 0x06c68ed6f0b5ca25b50d8e7560a4117e97b89804', 39800, 3, 2, 31.31, 27860, 70, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `ID` int(3) NOT NULL,
  `Media` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Switch` tinyint(1) NOT NULL,
  `Percent` int(3) NOT NULL,
  `Rate_usd` float NOT NULL,
  `Min` double NOT NULL,
  `Max` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`ID`, `Media`, `Switch`, `Percent`, `Rate_usd`, `Min`, `Max`) VALUES
(1, '', 1, 3, 22.75, 200000000, 200000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(50) NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date_create` int(50) NOT NULL,
  `Role` int(1) NOT NULL,
  `Date_update` int(50) NOT NULL,
  `Myebc_ID` int(50) NOT NULL,
  `Phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Rep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `Email`, `Password`, `Date_create`, `Role`, `Date_update`, `Myebc_ID`, `Phone`, `Rep_id`) VALUES
(1, 'admin', '40689d3350ea8930b692def7df07df8f', 1545281337, 1, 1545281337, 1545281337, '094567893', 0),
(2, 'user2@gmail.com', '40689d3350ea8930b692def7df07df8f', 1545281337, 2, 1545281337, 1545281337, '094567867', 0),
(3, 'user3@gmail.com', '40689d3350ea8930b692def7df07df8f', 1545281337, 2, 1545281337, 1545281337, '092537477', 0),
(4, 'user4@gmail.com', '40689d3350ea8930b692def7df07df8f', 1545281337, 2, 1545281337, 1545281337, '094894047', 0),
(5, 'user5@gmail.com', '40689d3350ea8930b692def7df07df8f', 1545281337, 2, 1545281337, 1545281337, '098936783', 0),
(6, 'user55@gmail.com', '40689d3350ea8930b692def7df07df8f', 1545281337, 2, 1545281337, 1545281337, '094578035', 0),
(7, 'user65@gmail.com', '40689d3350ea8930b692def7df07df8f', 1545281337, 2, 1545281337, 1545281337, '098936783', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `withdraw`
--

CREATE TABLE `withdraw` (
  `ID` int(50) NOT NULL,
  `Coin_ID` int(50) NOT NULL,
  `User_ID` int(50) NOT NULL,
  `Total_coin` double NOT NULL,
  `Date_create` int(50) NOT NULL,
  `Date_update` int(11) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `Total_usd` double NOT NULL,
  `Status` int(2) NOT NULL,
  `Types` int(2) NOT NULL,
  `Price_usd` float NOT NULL,
  `Loan_limit` int(11) NOT NULL,
  `Percent` int(3) NOT NULL,
  `Term` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `coin`
--
ALTER TABLE `coin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `coin`
--
ALTER TABLE `coin`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `deposit`
--
ALTER TABLE `deposit`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
