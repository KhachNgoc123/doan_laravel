-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2025 lúc 04:43 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_noithat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `masp` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(10) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `masp` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `thoidiemmua` datetime NOT NULL,
  `trangthai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `madm` varchar(100) NOT NULL,
  `soluong` int(50) NOT NULL,
  `mota` varchar(100) NOT NULL,
  `dongia` int(11) NOT NULL,
  `trangthai` varchar(50) NOT NULL,
  `tag` varchar(30) NOT NULL,
  `hinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `madm`, `soluong`, `mota`, `dongia`, `trangthai`, `tag`, `hinh`) VALUES
(1, 'Bàn gỗ sồi cao cấp', '1', 0, 'Bàn gỗ sồi tự nhiên bền đẹp', 2500000, '', '', 'ban1.jpg'),
(2, 'Ghế sofa da nâu', '1', 0, 'Sofa da cao cấp nhập khẩu', 4500000, '', '', 'ghe1.jpg'),
(3, 'Bàn ăn 6 ghế', '1', 0, 'Bàn ăn gỗ sồi 6 ghế sang trọng', 5200000, '', '', 'ban2.jpg'),
(4, 'Ghế đôn mini', '1', 0, 'Ghế nhỏ tiện dụng cho mọi không gian', 400000, '', '', 'ghe2.jpg'),
(5, 'Bàn cafe tròn', '1', 0, 'Bàn gỗ nhỏ phong cách Bắc Âu', 850000, '', '', 'ban3.jpg'),
(6, 'Ghế xoay văn phòng', '1', 0, 'Ghế xoay tiện dụng, êm ái', 1200000, '', '', 'ghe3.jpg'),
(7, 'Bàn làm việc chân sắt', '1', 0, 'Bàn gỗ công nghiệp chân sắt', 1350000, '', '', 'ban4.jpg'),
(8, 'Ghế thư giãn cao cấp', '1', 0, 'Ghế ngồi đọc sách thoải mái', 2800000, '', '', 'ghe4.jpg'),
(9, 'Bộ bàn ghế ăn gỗ lim', '1', 0, 'Bộ bàn ghế 6 món gỗ lim tự nhiên', 7500000, '', '', 'ban5.jpg'),
(10, 'Ghế đẩu cao quầy bar', '1', 0, 'Ghế quầy bar cao, hiện đại', 600000, '', '', 'ghe5.jpg'),
(11, 'Tủ quần áo 3 cánh', '2', 0, 'Tủ quần áo gỗ sồi, 3 cánh tiện dụng', 4200000, '', '', 'tu1.jpg'),
(12, 'Tủ giày 2 tầng', '2', 0, 'Tủ nhỏ đựng giày gọn gàng', 950000, '', '', 'tu2.jpg'),
(13, 'Kệ tivi gỗ công nghiệp', '2', 0, 'Kệ tivi đơn giản hiện đại', 1800000, '', '', 'ke1.jpg'),
(14, 'Tủ sách 4 tầng', '2', 0, 'Tủ sách gỗ MDF cao 1m8', 1250000, '', '', 'tu3.jpg'),
(15, 'Kệ trang trí treo tường', '2', 0, 'Kệ nhỏ để đồ trang trí', 550000, '', '', 'ke2.jpg'),
(16, 'Tủ đầu giường', '2', 0, 'Tủ nhỏ đặt cạnh giường ngủ', 650000, '', '', 'tu4.jpg'),
(17, 'Tủ chén bát bếp', '2', 0, 'Tủ gỗ chứa đồ bếp', 3200000, '', '', 'tu5.jpg'),
(18, 'Kệ đựng hồ sơ văn phòng', '2', 0, 'Kệ sắt sơn tĩnh điện', 2100000, '', '', 'ke3.jpg'),
(19, 'Tủ lạnh mini decor', '2', 0, 'Tủ giả decor đẹp mắt', 1800000, '', '', 'tu6.jpg'),
(20, 'Kệ để rượu gỗ cao cấp', '2', 0, 'Kệ trang trí để rượu vang', 2700000, '', '', 'ke4.jpg'),
(21, 'Đèn ngủ để bàn', '3', 0, 'Đèn ngủ nhỏ gọn, ánh sáng dịu nhẹ', 450000, '', '', 'den1.jpg'),
(22, 'Đèn chùm pha lê', '3', 0, 'Đèn chùm sang trọng cho phòng khách', 5200000, '', '', 'den2.jpg'),
(23, 'Đèn treo trần phong cách Nhật', '3', 0, 'Đèn treo trần ánh sáng vàng', 1800000, '', '', 'den3.jpg'),
(24, 'Đèn cây đọc sách', '3', 0, 'Đèn đứng cao 1m6', 850000, '', '', 'den4.jpg'),
(25, 'Đèn bàn học LED', '3', 0, 'Đèn LED tiết kiệm điện', 350000, '', '', 'den5.jpg'),
(26, 'Đèn tường hiện đại', '3', 0, 'Đèn treo tường ánh sáng ấm', 600000, '', '', 'den6.jpg'),
(27, 'Đèn sàn công nghiệp', '3', 0, 'Đèn cao phong cách vintage', 950000, '', '', 'den7.jpg'),
(28, 'Đèn ốp trần tròn', '3', 0, 'Đèn ốp trần nhựa cao cấp', 700000, '', '', 'den8.jpg'),
(29, 'Đèn dây LED trang trí', '3', 0, 'Dây LED dài 5m', 250000, '', '', 'den9.jpg'),
(30, 'Đèn bàn cảm ứng', '3', 0, 'Bật tắt cảm ứng hiện đại', 500000, '', '', 'den10.jpg'),
(31, 'Ghế gỗ đơn giản', '1', 0, 'Ghế gỗ tự nhiên cho quán cafe', 400000, '', '', 'ghe6.jpg'),
(32, 'Bàn tròn mini', '1', 0, 'Bàn nhỏ cho ban công', 300000, '', '', 'ban6.jpg'),
(33, 'Kệ giày 3 tầng', '2', 0, 'Kệ đựng giày gọn gàng', 700000, '', '', 'ke5.jpg'),
(34, 'Tủ gỗ treo tường nhỏ', '2', 0, 'Tủ gỗ treo tường cho phòng ngủ', 900000, '', '', 'tu7.jpg'),
(35, 'Đèn treo quán cafe', '3', 0, 'Đèn thả trần decor đẹp', 480000, '', '', 'den11.jpg'),
(36, 'Ghế tựa lưng cao', '1', 0, 'Ghế văn phòng bọc nệm', 1100000, '', '', 'ghe7.jpg'),
(37, 'Bàn học sinh nhỏ gọn', '1', 0, 'Bàn học sinh gỗ công nghiệp', 650000, '', '', 'ban7.jpg'),
(38, 'Kệ góc xoay', '2', 0, 'Kệ xoay 3 tầng hiện đại', 850000, '', '', 'ke6.jpg'),
(39, 'Đèn treo chùm vintage', '3', 0, 'Đèn chùm sắt sơn đen decor', 1500000, '', '', 'den12.jpg'),
(40, 'Bàn gấp đa năng', '1', 0, 'Bàn gấp gọn tiện lợi', 750000, '', '', 'ban8.jpg'),
(41, 'Ghế nhựa chân gỗ', '1', 0, 'Ghế nhựa hiện đại nhiều màu', 550000, '', '', 'ghe8.jpg'),
(42, 'Tủ trưng bày kính', '2', 0, 'Tủ kính cao cấp cho cửa hàng', 2600000, '', '', 'tu8.jpg'),
(43, 'Kệ trang trí hình tổ ong', '2', 0, 'Kệ treo tường độc đáo', 450000, '', '', 'ke7.jpg'),
(44, 'Đèn LED 3 màu', '3', 0, 'Đèn thay đổi ánh sáng 3 chế độ', 380000, '', '', 'den13.jpg'),
(45, 'Ghế băng dài', '1', 0, 'Ghế dài phòng khách', 1200000, '', '', 'ghe9.jpg'),
(46, 'Bàn console gỗ', '1', 0, 'Bàn trang trí phòng khách', 1800000, '', '', 'ban9.jpg'),
(47, 'Tủ để đồ 2 ngăn', '2', 0, 'Tủ nhỏ tiện dụng', 1300000, '', '', 'tu9.jpg'),
(48, 'Đèn trần pha lê mini', '3', 0, 'Đèn trần nhỏ gọn sang trọng', 1700000, '', '', 'den14.jpg'),
(49, 'Ghế dài ngoài trời', '1', 0, 'Ghế ngoài trời chống thấm', 2200000, '', '', 'ghe10.jpg'),
(50, 'Bàn góc sofa', '1', 0, 'Bàn góc nhỏ cho sofa', 950000, '', '', 'ban10.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ma_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `gioitinh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ma_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ma_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
