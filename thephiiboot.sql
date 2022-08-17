-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2021 lúc 05:59 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thephiiboot`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_sanpham`
--

CREATE TABLE `ct_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `hinhdaidien1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinhdaidien2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kytu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tensanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giasanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `loai_sanpham` int(11) NOT NULL,
  `tragop` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_mausanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mausanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size_39` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size_40` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size_41` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size_42` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size_43` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size_44` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluongtonkho` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_sanpham`
--

INSERT INTO `ct_sanpham` (`id_sanpham`, `hinhdaidien1`, `hinhdaidien2`, `hinh_1`, `hinh_2`, `hinh_3`, `hinh_4`, `hinh_5`, `kytu`, `tensanpham`, `giasanpham`, `loai_sanpham`, `tragop`, `ten_mausanpham`, `mausanpham`, `size_39`, `size_40`, `size_41`, `size_42`, `size_43`, `size_44`, `soluongtonkho`) VALUES
(1, 'img-content-01.webp', 'img-content-02.jpg', 'img-detail-001.webp', 'img-detail-02.webp', 'img-detail-03.webp', 'img-detail-04.webp', 'img-detail-05.webp', 'SKU: 62CMDL-1', 'THE CLASSIC CHELSEA BOOT - BLACK', '1800000', 1, 'hoặc 600,000₫ x 3 kỳ với Fundiin', 'BLACK', 'black', '39 EU', '40 EU', '41 EU', '42 EU', '43 EU', '44 EU', 100),
(2, 'img-content-03.webp', 'img-content-04.webp', 'img-detail-002.webp', 'img-detail-02.webp', 'img-detail-03.webp', 'img-detail-04.webp', 'img-detail-05.webp', 'SKU: 62CMDL-2', 'THE BASIC WOLF CHELSEA BOOT - TAN', '1600000', 1, 'hoặc 600,000₫ x 3 kỳ với Fundiin', 'TAN', '#E3B382 ', '39 EU', '40 EU', '41 EU', '42 EU', '43 EU', '44 EU', 100),
(3, 'img-content-05.webp', 'img-content-06.webp', 'img-detail-003.webp', 'img-detail-02.webp', 'img-detail-03.webp', 'img-detail-04.webp', 'img-detail-05.webp', 'SKU: 62CMDL-3', 'THE CLASSIC CHELSEA BOOT - BLACK\r\n', '1800000', 1, 'hoặc 600,000₫ x 3 kỳ với Fundiin', 'BLACK', 'black', '39 EU', '40 EU', '41 EU', '42 EU', '43 EU', '44 EU', 100),
(4, 'img-content-07.webp', 'img-content-08.webp', 'img-detail-004.webp', 'img-detail-02.webp', 'img-detail-03.webp', 'img-detail-04.webp', 'img-detail-05.webp', 'SKU: 62CMDL-4', 'THE SHEWOLF MODERN CHELSEA BOOT - BLACK', '1500000', 2, 'hoặc 600,000₫ x 3 kỳ với Fundiin', 'BLACK', 'black', '39 EU', '40 EU', '41 EU', '42 EU', '43 EU', '44 EU', 100),
(5, 'img-content-09.webp', 'img-content-10.webp', 'img-detail-005.webp', 'img-detail-02.webp', 'img-detail-03.webp', 'img-detail-04.webp', 'img-detail-05.webp', 'SKU: 62CMDL-5', 'THE GHOST ZIP BOOT – TOBACCO', '2300000', 2, 'hoặc 600,000₫ x 3 kỳ với Fundiin', 'TOBACCO', '#b77543', '39 EU', '40 EU', '41 EU', '42 EU', '43 EU', '44 EU', 100),
(6, 'img-content-11.webp', 'img-content-12.webp', 'img-detail-006.webp', 'img-detail-02.webp', 'img-detail-03.webp', 'img-detail-04.webp', 'img-detail-05.webp', 'SKU: 62CMDL-6', 'THE COMBAT BOOT - BLACK GRAIN\r\n', '2000000', 2, 'hoặc 600,000₫ x 3 kỳ với Fundiin', 'BLACK', 'black', '39 EU', '40 EU', '41 EU', '42 EU', '43 EU', '44 EU', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `tenkh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_khachhang`, `tenkh`, `taikhoan`, `password`, `email`, `diachi`) VALUES
(11, 'Nguyễn Võ Hoàng Phi', 'admin', '123', 'nvhoangphi0905@gmail.com', '118 Trần Văn Quang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sanpham`
--

CREATE TABLE `loai_sanpham` (
  `id_loai` int(11) NOT NULL,
  `tenloai` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sanpham`
--

INSERT INTO `loai_sanpham` (`id_loai`, `tenloai`) VALUES
(1, 'Giày Nam'),
(2, 'Giày Nữ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_sanpham`
--
ALTER TABLE `ct_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `loai_sanpham`
--
ALTER TABLE `loai_sanpham`
  ADD PRIMARY KEY (`id_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ct_sanpham`
--
ALTER TABLE `ct_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `loai_sanpham`
--
ALTER TABLE `loai_sanpham`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
