-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 23, 2020 lúc 06:01 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan_laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `idsp` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `idsp`, `iduser`, `created_at`, `updated_at`) VALUES
(1, '<p>dsaf</p>', 9, 12, '2020-06-21 02:57:14', '2020-06-21 02:57:14'),
(2, '<p>sản phẩm tốt</p>', 9, 12, '2020-06-21 03:08:59', '2020-06-21 03:08:59'),
(3, '<p>&aacute;d</p>', 18, 12, '2020-06-21 04:11:47', '2020-06-21 04:11:47'),
(4, '<p>ok</p>', 9, 13, '2020-06-21 04:14:39', '2020-06-21 04:14:39'),
(6, '<p>B&aacute;nh ngon</p>', 17, 12, '2020-06-22 15:09:48', '2020-06-22 15:09:48'),
(7, '<p>&aacute;dasd</p>', 18, 12, '2020-06-22 15:21:46', '2020-06-22 15:21:46'),
(8, '<p>123132</p>', 18, 12, '2020-06-22 15:22:02', '2020-06-22 15:22:02'),
(9, '<p>b&aacute;nh ngon</p>', 25, 12, '2020-06-23 09:39:20', '2020-06-23 09:39:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` int(11) NOT NULL,
  `tendm` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id`, `tendm`, `created_at`, `updated_at`) VALUES
(8, 'Bánh ngọt', '2020-06-05 02:03:25', '2020-06-06 16:27:51'),
(9, 'Bánh bông mai', '2020-06-05 02:14:58', '2020-06-06 16:27:51'),
(19, 'Bánh mặn', '2020-06-11 08:15:28', '2020-06-11 08:15:28'),
(21, 'Bánh 4 mùa', '2020-06-17 03:42:26', '2020-06-17 03:42:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuctintuc`
--

CREATE TABLE `danhmuctintuc` (
  `id` int(11) NOT NULL,
  `tendm` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuctintuc`
--

INSERT INTO `danhmuctintuc` (`id`, `tendm`, `created_at`, `updated_at`) VALUES
(1, 'Bánh', '2020-06-13 16:03:53', '2020-06-13 16:03:53'),
(6, 'Kinh tế', '2020-06-15 01:27:50', '2020-06-15 01:27:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `thoigian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `daubep`
--

CREATE TABLE `daubep` (
  `id` int(11) NOT NULL,
  `hoten` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gioithieu` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `daubep`
--

INSERT INTO `daubep` (`id`, `hoten`, `email`, `images`, `sdt`, `diachi`, `chucvu`, `gioithieu`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Bá Thành', 'bathanh@gmail.com', 'upload/anh_daubep\\chef-2.jpg', '0984836670', 'Hà Nội', 'Bếp trưởng', '<p>L&agrave; một người h&ograve;a đồng, vui t&iacute;nh, th&acirc;n thiện, th&iacute;ch học hỏi th&ecirc;m nhiều thứ mới lạ</p>', '2020-06-19 14:51:50', '2020-06-19 14:51:50'),
(2, 'Trần Văn Vũ', 'vankien@gmail.com', 'upload/anh_daubep\\chef-3.jpg', '0981956635', 'Hà Tây', 'Bếp trưởng', '<p>chưa c&oacute;</p>', '2020-06-19 15:19:22', '2020-06-19 15:19:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `hoten` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `email`, `tieude`, `noidung`, `created_at`, `updated_at`) VALUES
(1, 'Bá Thành', 'thanhnbph07628@fpt.edu.vn', 'Bánh sinh nhật', 'fghjkl;', '2020-06-19 08:54:20', '2020-06-19 08:54:20'),
(3, 'Bá Thành', 'thanhnbph07628@fpt.edu.vn', '123123', 'dfghjkl', '2020-06-22 01:30:20', '2020-06-22 01:30:20'),
(4, 'chu tiến', 'thanhnbph07628@fpt.edu.vn', 'Hướng dẫn làm món bánh socola đơn giản nhất', 'ádasdad', '2020-06-22 01:31:23', '2020-06-22 01:31:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `iddm` int(11) NOT NULL,
  `images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` int(11) NOT NULL,
  `giakm` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `soluongban` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `chitietsp` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `iddm`, `images`, `tensp`, `giasp`, `giakm`, `soluong`, `soluongban`, `views`, `mota`, `chitietsp`, `created_at`, `updated_at`) VALUES
(9, 9, 'upload/anh_sp\\product-details-1.jpg', 'Bánh socola', 340000, 210000, 40, 10, 19, '<p>chưa c&oacute;</p>', '<p>Đơn gi&aacute;: 130.000 VNĐ / g&oacute;i 130g</p>\r\n\r\n<p>M&atilde; sản phẩm:&nbsp;CK22</p>', '2020-06-07 02:41:04', '2020-06-07 02:41:04'),
(15, 8, 'upload/anh_sp\\c-feature-1.jpg', 'Bánh kem dâu', 320000, 150000, 40, 0, 20, '<p>chưa c&oacute;</p>', '<p>chưa c&oacute;</p>', '2020-06-11 05:30:42', '2020-06-11 05:30:42'),
(17, 21, 'upload/anh_sp\\portfolio-5.jpg', 'Bánh gối', 210000, 190000, 40, 0, 5, '<p>chưa c&oacute;</p>', '<p>sản phẩm l&agrave; thương hiệu ch&iacute;nh của cửa h&agrave;ng</p>', '2020-06-11 06:41:45', '2020-06-11 06:41:45'),
(18, 19, 'upload/anh_sp\\portfolio-7.jpg', 'Bánh mì muối', 130000, 10000, 70, 0, 9, '<p>chưa c&oacute;</p>', '<p>chưa c&oacute;</p>', '2020-06-11 08:17:34', '2020-06-11 08:17:34'),
(21, 21, 'upload/anh_sp\\portfolio-3.jpg', 'Bánh hạ', 120000, 10000, 40, 0, 2, '<p>chưa c&oacute;</p>', '<p>chưa c&oacute;</p>', '2020-06-23 08:53:37', '2020-06-23 08:53:37'),
(22, 21, 'upload/anh_sp\\bakery-3.jpg', 'Bánh mùa đông', 130000, 115000, 90, 0, 2, '<p>chưa c&oacute;</p>', '<p>chưa c&oacute;</p>', '2020-06-23 09:03:55', '2020-06-23 09:03:55'),
(23, 8, 'upload/anh_sp\\bakery-1.jpg', 'Bánh nhân kem', 80000, 70000, 56, 0, 1, '<p>chưa c&oacute;</p>', '<p>chưa c&oacute;</p>', '2020-06-23 09:14:56', '2020-06-23 09:14:56'),
(25, 19, 'upload/anh_sp\\portfolio-9.jpg', 'Bánh portfolio', 130000, 10000, 60, 0, 2, '<p>chưa c&oacute;</p>', '<p>chưa c&oacute;</p>', '2020-06-23 09:18:59', '2020-06-23 09:18:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `tieude` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `tieude`, `images`, `mota`, `trangthai`, `created_at`, `updated_at`) VALUES
(3, 'Bánh hoàng gia', 'upload/anh_sp\\slider-1.jpg', '<p>B&aacute;nh ho&agrave;ng gia</p>', 1, '2020-06-13 08:05:59', '2020-06-13 08:05:59'),
(4, 'Bánh cacao', 'upload/anh_sp\\slider-8.jpg', '<p>chưa c&oacute;</p>', 1, '2020-06-15 01:26:47', '2020-06-15 01:26:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` int(11) NOT NULL,
  `tenthuonghieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `tenthuonghieu`, `images`, `sdt`, `email`, `diachi`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Cake', 'upload/anh_th\\logo-2.png', '0353222581', 'thanhnbph07628@fpt.edu.vn', 'Hà Nội', 1, '2020-06-15 14:04:47', '2020-06-15 14:04:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `iddm` int(11) NOT NULL,
  `tieude` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `chitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `iddm`, `tieude`, `images`, `mota`, `chitiet`, `views`, `iduser`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bánh sinh nhật', 'upload/anh_tt\\blog-c-2.jpg', '<p>Bạn đang t&igrave;m một chiếc&nbsp;<strong>b&aacute;nh sinh nhật</strong>&nbsp;để tặng bạn b&egrave; nh&acirc;n dịp đặc biệt hay ng&agrave;y sinh nhật? Bạn đăng băn khoăn kh&ocirc;ng biết thế n&agrave;o l&agrave; một chiếc&nbsp;<strong>b&aacute;nh sinh nhật đẹp</strong>.&nbsp;H&atilde;y c&ugrave;ng ch&uacute;ng t&ocirc;i<strong>&nbsp;</strong>điểm qua những mẫu b&aacute;nh kem sinh nhật đẹp v&agrave; hot nhất hiện nay nh&eacute;!</p>', '<p><strong>Những mẫu b&aacute;nh sinh nhật đẹp nhất</strong>&nbsp;thường được tạo h&igrave;nh phong ph&uacute; v&agrave; hấp dẫn, với những ph&aacute;c họa v&ocirc; c&ugrave;ng độc đ&aacute;o,&nbsp;tinh tế từ&nbsp;<strong>hoa v&agrave; b&aacute;nh sinh nhật đẹp</strong>&nbsp;kết hợp với nhau.</p>\r\n\r\n<p>Ngo&agrave;i những chiếc b&aacute;nh kem sinh nhật truyền thống, c&aacute;c nghệ nh&acirc;n l&agrave;m b&aacute;nh đ&atilde; s&aacute;ng tạo ra nhiều mẫu b&aacute;nh sinh nhật ngộ nghĩnh v&agrave; dễ thương nhưng kh&ocirc;ng k&eacute;m phần độc đ&aacute;o v&agrave; hấp dẫn. Như b&aacute;nh sinh nhật 3 tầng, 2 tầng, 1 tầng, b&aacute;nh kem 3 tầng,&nbsp;<strong>b&aacute;nh gato</strong>&nbsp;sinh nhật dễ thương&hellip;</p>\r\n\r\n<p><strong>Banhngot.vn</strong>&nbsp;l&agrave; thương hiệu&nbsp;<strong>b&aacute;nh ngọt sinh nhật</strong>&nbsp;đi đầu trong việc tạo h&igrave;nh c&aacute;c mẫu&nbsp;<strong>b&aacute;nh kem&nbsp;</strong>mới lạ, ch&uacute;ng t&ocirc;i sẽ mang đến cho bạn những chiếc b&aacute;nh kem ngon&nbsp; v&agrave; đẹp với những&nbsp;<strong>mẫu b&aacute;nh kem sinh nhật</strong>&nbsp;dễ thương, ngộ nghĩnh v&agrave; v&ocirc; c&ugrave;ng độc đ&aacute;o sẽ l&agrave; m&oacute;n qu&agrave; bất ngờ v&agrave; th&uacute; vị d&agrave;nh cho những người m&agrave; bạn thương y&ecirc;u.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/100/333/744/files/banh-xuong-7-e4db762c-2286-491d-a137-d1f955812195.jpg?v=1564037651760\" /></p>\r\n\r\n<p><em><strong>H&igrave;nh ảnh b&aacute;nh sinh nhật đẹp</strong></em></p>\r\n\r\n<h3><strong>H&igrave;nh ảnh b&aacute;nh&nbsp;sinh nhật đẹp nhất thế giới</strong></h3>\r\n\r\n<p>Ngo&agrave;i những tạo h&igrave;nh mới lạ v&agrave; độc đ&aacute;o, những chiếc&nbsp;<strong>b&aacute;nh sinh nhật đẹp nhất 2019</strong>&nbsp;c&ograve;n mang lại niềm vui v&agrave; th&ocirc;ng điệp cho những người bạn y&ecirc;u thương, n&ecirc;n bạn h&atilde;y chọn những chiếc&nbsp;<strong>b&aacute;nh kem dễ thương</strong>&nbsp;nhất để ng&agrave;y vui th&ecirc;m trọn vẹn v&agrave; ho&agrave;n hảo nh&eacute;.</p>\r\n\r\n<p>Những chiếc b&aacute;nh sinh nhật &yacute; nghĩa thường mang những th&ocirc;ng điệp y&ecirc;u thương ngọt ng&agrave;o m&agrave; bạn muốn gửi đến cho 1 ai đ&oacute;. C&oacute; thể l&agrave; ba mẹ l&agrave; anh, chị, em trong nh&agrave; hay một nữa y&ecirc;u thương của ch&iacute;nh bạn.</p>\r\n\r\n<p><strong>C&aacute;c mẫu b&aacute;nh sinh nhật đẹp</strong>&nbsp;thường được đầu tư kỹ lưỡng v&agrave; c&ocirc;ng phu từ kh&acirc;u l&ecirc;n &yacute; tưởng tạo h&igrave;nh đến chọn lựa nguy&ecirc;n liệu v&agrave; l&agrave;m b&aacute;nh. Những&nbsp;<strong>h&igrave;nh ảnh&nbsp;b&aacute;nh kem đẹp nhất thế giới</strong>&nbsp;thường mang m&agrave;u sắc trang nh&atilde;, sang trọng thường l&agrave; b&aacute;nh cưới hoặc những d&ograve;ng b&aacute;nh kem sự kiện.</p>\r\n\r\n<hr />\r\n<p><em><strong>Mẫu b&aacute;nh sinh nhật đẹp</strong></em></p>\r\n\r\n<h3><strong>Giới thiệu mẫu b&aacute;nh sinh nhật đẹp v&agrave; &yacute; nghĩa</strong></h3>\r\n\r\n<p><strong>Những chiếc b&aacute;nh sinh nhật ngộ nghĩnh</strong>&nbsp;độc đ&aacute;o nhất thế giới được tạo h&igrave;nh độc đ&aacute;o v&agrave; ấn tượng bởi đ&ocirc;i b&agrave;n tay t&agrave;i hoa v&agrave; kh&eacute;o l&eacute;o của những người thợ l&agrave;m b&aacute;nh.</p>\r\n\r\n<p><strong>H&igrave;nh ảnh b&aacute;nh sinh nhật đẹp v&agrave; &yacute; nghĩa</strong>&nbsp;thường l&agrave; những chiếc b&aacute;nh kem sinh nhật dễ thương, được tạo h&igrave;nh ngộ nghĩnh đ&aacute;ng y&ecirc;u, hay l&agrave; những chiếc b&aacute;nh kem được vẽ h&igrave;nh chibi nh&iacute; nhảnh; những chiếc&nbsp;<a href=\"https://banhngot.vn/banh-sinh-nhat\"><strong>b&aacute;nh sinh nhật</strong></a>&nbsp;tạo h&igrave;nh từ lớp kem mềm mịn như: b&aacute;nh sinh nhật h&igrave;nh gia đ&igrave;nh, b&aacute;nh kem sinh nhật tạo h&igrave;nh ba mẹ, b&aacute;nh kem h&igrave;nh anh, chị, em trong nh&agrave;&hellip;rất độc đ&aacute;o v&agrave; &yacute; nghĩa.</p>\r\n\r\n<p>Banhngot.vn l&agrave; hệ thống&nbsp;<strong><a href=\"https://banhngot.vn/banh-kem-quan-10\">tiệm b&aacute;nh kem</a></strong>&nbsp;đi đầu trong việc tạo ra những chiếc&nbsp;<strong>b&aacute;nh kem sinh nhật đẹp nhất</strong>, với những chiếc&nbsp;<strong>b&aacute;nh ch&uacute;c mừng sinh nhật</strong>&nbsp;độc đ&aacute;o mới lạ v&agrave; s&aacute;ng tạo. C&ugrave;ng những&nbsp;<strong>h&igrave;nh b&aacute;nh sinh nhật đẹp v&agrave; độc</strong>&nbsp;tạo h&igrave;nh b&aacute;nh kem ngộ nghĩnh, d&iacute; dỏm v&agrave; đ&aacute;ng y&ecirc;u, chiếc b&aacute;nh kem sẽ l&agrave; m&oacute;n qu&agrave; v&ocirc; c&ugrave;ng &yacute; nghĩa để d&agrave;nh tặng cho người th&acirc;n của bạn, để buổi tiệc vui được trọn vẹn ho&agrave;n hảo v&agrave; đong đầy nhiều cảm x&uacute;c.</p>\r\n\r\n<p>Hệ thống b&aacute;nh kem Hương vị Việt&nbsp;&nbsp;Banhngot.vn với tiện &iacute;ch đặt b&aacute;nh giao tận nh&agrave; hẹn giờ tiết kiệm tối đa chi ph&iacute; v&agrave; thời gian cho kh&aacute;ch h&agrave;ng tại c&aacute;c Quận, huyện của&nbsp;Hồ Ch&iacute; Minh với c&aacute;c chi nh&aacute;nh:</p>\r\n\r\n<p>- Quận 3: 2/48 Cao Thắng, Phường 5 quận 3, Hồ Ch&iacute; Minh: Điểm đặt hoa tươi + b&aacute;nh sinh nhật, xem ngay th&ocirc;ng tin:&nbsp;<a href=\"https://banhngot.vn/banh-kem-quan-3\">B&aacute;nh sinh nhật quận 3</a></p>\r\n\r\n<p>- Quận 9: 29 L&ecirc; Văn Việt Phường Hiệp Ph&uacute; Quận 9&nbsp; TPHCM ( Ngay ng&atilde; 4 Thủ Đức) Xem th&ocirc;ng tin chi nh&aacute;nh quận 9:&nbsp;<strong><a href=\"https://banhngot.vn/banh-kem-quan-9\">Tiệm b&aacute;nh kem quận 9</a></strong></p>\r\n\r\n<p><strong>-&nbsp;</strong>Quận 10: 69/4 Hồ Thị Kỷ Phường 1, Quận 10, TPHCM, Đặt b&aacute;nh sinh nhật Quận 10 tại:&nbsp;<a href=\"https://banhngot.vn/banh-kem-quan-10\">Tiệm b&aacute;nh kem bắp quận 10</a></p>\r\n\r\n<p>Ngo&agrave;i ra để hỗ trợ tốt nhất cho c&aacute;c c&aacute; nh&acirc;n, doanh nghiệp c&oacute; nhu cầu đặt b&aacute;nh tặng kh&aacute;ch h&agrave;ng, hệ thống chi nh&aacute;nh doanh nghiệp tr&ecirc;n to&agrave;n quốc B&aacute;nh kem Hương vị Việt c&ograve;n li&ecirc;n kết hợp t&aacute;c hệ thống cửa tr&ecirc;n 63 tỉnh th&agrave;nh từ H&agrave; Nội, Đ&agrave; Nẵng, Vũng T&agrave;u, L&acirc;m Đồng, H&ograve;a B&igrave;nh, Hải Ph&ograve;ng,... (v&agrave; tỉnh kh&aacute;c).&nbsp;</p>\r\n\r\n<p>+ Chuy&ecirc;n B&aacute;nh kem &amp; Hoa tươi</p>\r\n\r\n<p>+ Đặc biệt, sau m&otilde;i lần đặt b&aacute;nh kh&aacute;ch h&agrave;ng sẽ được t&iacute;ch lũy 15.000đ để tiết kiệm cho lần đặt b&aacute;nh tiếp theo, ngo&agrave;i ra, ch&uacute;ng tối c&ograve;n:</p>\r\n\r\n<p>&gt;&gt;&gt; Hỗ Trợ 100% ph&iacute; giao</p>\r\n\r\n<p>&gt;&gt;&gt; Miễn ph&iacute;: Muỗng, đĩa, dao cắt, nến số.</p>', 3, 13, '2020-06-15 01:46:19', '2020-06-15 01:46:19'),
(3, 1, 'Hướng dẫn làm món bánh socola đơn giản nhất', 'upload/anh_tt\\blog-c-4.jpg', '<p>B&aacute;nh socola l&agrave; một m&oacute;n b&aacute;nh hấp dẫn v&agrave; c&oacute; sức h&uacute;t cực lớn kh&ocirc;ng chỉ đối với c&aacute;c em nhỏ m&agrave; ngay cả người lớn cũng rất y&ecirc;u th&iacute;ch. Tuy nhi&ecirc;n,việc mua b&aacute;nh ngo&agrave;i cửa h&agrave;ng cũng chưa chắc đảm bảo về chất lượng cũng như sự an to&agrave;n về vệ sinh thực phẩm.</p>', '<p><strong><em>B&aacute;nh socola l&agrave; một m&oacute;n b&aacute;nh hấp dẫn v&agrave; c&oacute; sức h&uacute;t cực lớn kh&ocirc;ng chỉ đối với c&aacute;c em nhỏ m&agrave; ngay cả người lớn cũng rất y&ecirc;u th&iacute;ch. Tuy nhi&ecirc;n,việc mua b&aacute;nh ngo&agrave;i cửa h&agrave;ng cũng chưa chắc đảm bảo về chất lượng cũng như sự an to&agrave;n về vệ sinh thực phẩm. B&ecirc;n cạnh đ&oacute;, nhiều bạn muốn tự tay l&agrave;m b&aacute;nh nhưng lại kh&ocirc;ng biết r&otilde; c&aacute;ch l&agrave;m hoặc c&oacute; nhiều c&aacute;ch nhưng lại kh&aacute; kh&oacute; khăn. Vậy th&igrave; c&ocirc;ng thức l&agrave;m m&oacute;n b&aacute;nh socola đơn giản nhất m&agrave; m&igrave;nh giới thiệu đến c&aacute;c bạn h&ocirc;m nay ch&iacute;nh l&agrave; những g&igrave; m&agrave; c&aacute;c bạn đang t&igrave;m kiếm. Chỉ với 3-4 bước đơn giản v&agrave; nguy&ecirc;n liệu dễ t&igrave;m l&agrave; c&aacute;c bạn đ&atilde; c&oacute; ngay một đĩa b&aacute;nh socola ngon tuyệt hảo rồi. Nhanh tay v&agrave;o bếp đ&ecirc;&nbsp;toinayangi.vn hướng dẫn l&agrave;m m&oacute;n b&aacute;nh socola đơn gian nhất cho c&aacute;c bạn nh&eacute; !</em></strong></p>\r\n\r\n<h3><a href=\"https://toinayangi.vn/cach-nau-canh-thit-bo-cu-cai-cay-cuc-thom-ngon/\">C&aacute;ch nấu canh thịt b&ograve; củ cải cay cực thơm ngon</a></h3>\r\n\r\n<h3><a href=\"https://toinayangi.vn/cach-lam-banh-nuong-hanh-tay-sieu-hap-dan/\">C&aacute;ch l&agrave;m b&aacute;nh nướng h&agrave;nh t&acirc;y si&ecirc;u hấp dẫn</a></h3>\r\n\r\n<h3><a href=\"https://toinayangi.vn/cach-lam-kim-chi-chien-voi-dau-phu-dam-da-ngon-com/\">C&aacute;ch l&agrave;m kim chi chi&ecirc;n với đậu phụ đậm đ&agrave; ngon cơm</a></h3>\r\n\r\n<p><a href=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-5.jpg\"><img alt=\"bánh socola đơn giản nhất\" src=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-5.jpg\" style=\"height:387px; width:550px\" /></a></p>\r\n\r\n<h2>Nguy&ecirc;n liệu l&agrave;m m&oacute;n b&aacute;nh socola cho 4-5 người ăn:</h2>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 muỗng canh bột cacao</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 quả trứng</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 110g bột tự nở</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 200g đường c&aacute;t trắng</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 60g bơ</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 125g sữa tươi</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kem tươi, 1 x&iacute;u bột cacao.</p>\r\n\r\n<h2>C&aacute;ch l&agrave;m m&oacute;n b&aacute;nh socola cho 4-5 người ăn:</h2>\r\n\r\n<h3>Bước 1: Sơ chế nguy&ecirc;n liệu l&agrave;m m&oacute;n b&aacute;nh socola.</h3>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trứng g&agrave; c&aacute;c bạn đập ra b&aacute;t để ri&ecirc;ng</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bơ c&aacute;c bạn cho v&agrave;o một c&aacute;i b&aacute;t rồi đặt v&agrave;o l&ograve; vi s&oacute;ng l&agrave;m n&oacute;ng cho đến khi bơ tan chảy ho&agrave;n to&agrave;n.</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c bạn cho một ch&uacute;t x&iacute;u bột cacao v&agrave;o kem tươi rồi khuấy đều l&ecirc;n nh&eacute;, đồng thời cho kem v&agrave;o ngăn m&aacute;t tủ lạnh.</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; L&agrave;m n&oacute;ng sẵn l&ograve; nướng ở nhiệt độ l&agrave; 160 độ C.</p>\r\n\r\n<h3>Bước 2: C&aacute;c bước thực hiện m&oacute;n b&aacute;nh socola.</h3>\r\n\r\n<p><a href=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-1.jpg\"><img alt=\"cho các nguyên liệu vào thố trộn bột\" src=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-1.jpg\" style=\"height:398px; width:550px\" /></a></p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đầu ti&ecirc;n, c&aacute;c bạn chuẩn bị một c&aacute;i thố trộn bột v&agrave; cho v&agrave;o tất cả c&aacute;c nguy&ecirc;n liệu gồm: bột m&igrave; tự nở, đường c&aacute;t trắng, bơ, sữa, trứng v&agrave; bột cacao.</p>\r\n\r\n<p><a href=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-2.jpg\"><img alt=\"trộn đều các nguyên liệu\" src=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-2.jpg\" style=\"height:397px; width:550px\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sau đ&oacute;,c&aacute;c bạn d&ugrave;ng m&aacute;y trộn bột, trộn thật đều c&aacute;c nguy&ecirc;n liệu l&ecirc;n sao cho hỗn hợp bột ch&uacute;ng ta thu được thật mềm, mịn v&agrave; bột kh&ocirc;ng bị v&oacute;n cục.</p>\r\n\r\n<p><a href=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-3.jpg\"><img alt=\"cho bột bánh vào khuôn\" src=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-3.jpg\" style=\"height:396px; width:550px\" /></a></p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tiếp đến, c&aacute;c bạn cho bột b&aacute;nh v&agrave;o khu&ocirc;n nướng b&aacute;nh h&igrave;nh tr&ograve;n đ&atilde; được phủ sẵn một lớp dầu ăn hoặc bơ mỏng để chống d&iacute;nh.</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rồi cho khu&ocirc;n b&aacute;nh v&agrave;o l&ograve; nướng đ&atilde; được l&agrave;m n&oacute;ng sẵn, ch&uacute;ng ta sẽ nướng b&aacute;nh khoảng 40 ph&uacute;t.</p>\r\n\r\n<p><a href=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-4.jpg\"><img alt=\"phết kem lên bánh socola\" src=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-4.jpg\" style=\"height:397px; width:550px\" /></a></p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; B&aacute;nh ch&iacute;n c&aacute;c bạn lấy b&aacute;nh ra ngo&agrave;i cho nguội ho&agrave;n to&agrave;n rồi d&ugrave;ng dao phết lớp kem cacao l&ecirc;n khắp mặt b&aacute;nh.</p>\r\n\r\n<p><a href=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-5.jpg\"><img alt=\"bánh socola thơm ngon\" src=\"https://toinayangi.vn/wp-content/uploads/2015/10/huong-dan-lam-mon-banh-socola-don-gian-nhat-5.jpg\" style=\"height:387px; width:550px\" /></a></p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cắt b&aacute;nh th&agrave;nh những h&igrave;nh tam gi&aacute;c rồi thưởng thức.</p>\r\n\r\n<h2>Lưu &yacute; khi l&agrave;m m&oacute;n b&aacute;nh socola:</h2>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;c bạn c&oacute; thể trang tr&iacute; th&ecirc;m một &iacute;t tr&aacute;i c&acirc;y l&ecirc;n b&aacute;nh để gi&uacute;p b&aacute;nh trở n&ecirc;n hấp dẫn hơn v&agrave; khi ăn b&aacute;nh cũng đỡ bị ngấy hơn nữa.</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Khi b&aacute;nh ch&iacute;n, c&aacute;c bạn kh&ocirc;ng lấy b&aacute;nh ra ngo&agrave;i ngay m&agrave; c&aacute;c bạn chỉ n&ecirc;n tắt l&ograve; nướng đi, rồi để b&aacute;nh trong l&ograve; khoảng v&agrave;i ph&uacute;t sau đ&oacute; mới lấy b&aacute;nh ra ngo&agrave;i l&agrave;m m&aacute;t để tr&aacute;nh l&agrave;m b&aacute;nh bị sốc nhiệt. Hơn nữa l&uacute;c n&agrave;y b&aacute;nh đang nở lớn nếu như gặp kh&ocirc;ng kh&iacute; lạnh đột ngột l&agrave; b&aacute;nh sẽ bị xẹp xuống ngay.</p>\r\n\r\n<p>&ndash;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nhiệt độ của l&ograve; nướng kh&ocirc;ng phải giống nhau ho&agrave;n to&agrave;n n&ecirc;n c&aacute;c bạn cần ch&uacute; &yacute; điều chỉnh cho ph&ugrave; hợp với l&ograve; nướng của gia đ&igrave;nh.</p>\r\n\r\n<p>C&aacute;ch l&agrave;m m&oacute;n<em><strong>&nbsp;b&aacute;nh socola</strong></em>&nbsp;m&agrave; m&igrave;nh đưa ra cho c&aacute;c bạn tr&ecirc;n đ&acirc;y kh&ocirc;ng phải l&agrave; một c&ocirc;ng thức l&agrave;m b&aacute;nh qu&aacute; ho&agrave;n hảo hay hương vị của b&aacute;nh cũng kh&ocirc;ng phải l&agrave; qu&aacute; xuất sắc. Nhưng b&aacute;nh socola đủ ngon để bạn c&oacute; thể thấy h&agrave;i l&ograve;ng, hơn nữa c&ocirc;ng thức l&agrave;m b&aacute;nh lại rất đơn giản, ph&ugrave; hợp cho cả những ai mới thực tập l&agrave;m b&aacute;nh.</p>\r\n\r\n<p>Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ăn ngon miệng với m&oacute;n&nbsp;<strong>b&aacute;nh socola</strong>&nbsp;nh&eacute;!</p>', 4, 14, '2020-06-15 02:05:52', '2020-06-15 02:05:52'),
(6, 1, 'Bánh kem Socola', 'upload/anh_tt\\portfolio-8.jpg', '<p>Vị ngọt ấm, mềm xốp của b&aacute;nh socola c&ugrave;ng vị m&aacute;t lạnh của&nbsp;<a href=\"http://banhngon.org/tag/banh-kem\">kem</a>&nbsp;cho cảm gi&aacute;c thưởng&nbsp;<a href=\"http://banhngon.org/tag/banh-kem\">b&aacute;nh kem</a>&nbsp;Socola v&ocirc; c&ugrave;ng hấp dẫn. Tiếp theo ch&uacute;ng t&ocirc;i sẽ hướng dẫn c&aacute;c bạn l&agrave;m ra 1 chiếc b&aacute;nh kem socola&nbsp;thật ngon.</p>', '<p><strong>Vị ngọt ấm, mềm xốp của b&aacute;nh socola c&ugrave;ng vị m&aacute;t lạnh của&nbsp;<a href=\"http://banhngon.org/tag/banh-kem\">kem</a>&nbsp;cho cảm gi&aacute;c thưởng&nbsp;<a href=\"http://banhngon.org/tag/banh-kem\">b&aacute;nh kem</a>&nbsp;Socola v&ocirc; c&ugrave;ng hấp dẫn.</strong></p>\r\n\r\n<p><a href=\"http://127.0.0.1:8000/chitiettintuc.html/6\"><img alt=\"\" src=\"http://127.0.0.1:8000/upload/anh_tt/portfolio-8.jpg\" style=\"height:360px; width:570px\" /></a></p>\r\n\r\n<h2>Nguy&ecirc;n liệu l&agrave;m b&aacute;nh kem socola</h2>\r\n\r\n<p>3 quả trứng&nbsp;<a href=\"http://banhngon.org/tag/mon-ga\">g&agrave;</a></p>\r\n\r\n<p>3/4 cup&nbsp;bơ</p>\r\n\r\n<p>4 muỗng c&agrave; ph&ecirc; ca cao</p>\r\n\r\n<p>1 cup đường</p>\r\n\r\n<p>2/3 cup bột m&igrave;</p>\r\n\r\n<p>1 cup đậu phộng rang đ&atilde; d&atilde; nhỏ.</p>\r\n\r\n<p>1 muỗng c&agrave; ph&ecirc; vani</p>\r\n\r\n<p>1 thanh S&ocirc;cola</p>\r\n\r\n<p>Kem socola</p>\r\n\r\n<h2>C&aacute;ch l&agrave;m b&aacute;nh kem Socola</h2>\r\n\r\n<p>Đun chảy Socola rồi lấy ra một &iacute;t, phần c&ograve;n lại trộn với bơ.</p>\r\n\r\n<p><img alt=\"Socola nóng chảy\" src=\"http://banhngon.org/wp-content/uploads/2015/11/Cach-lam-banh-kem-socola-banhngon-org-2.jpg\" style=\"height:422px; width:563px\" /></p>\r\n\r\n<p>Đập lấy l&ograve;ng đỏ cả 3 quả trứng g&agrave; cho v&agrave;o&nbsp;thố, đ&aacute;nh tan&nbsp;với đường, bột ca cao, v&agrave; một ch&uacute;t muối.&nbsp;Sau đ&oacute; đổ hộn hợp bơ v&agrave; socola, bột m&igrave; v&agrave;o v&agrave; đ&aacute;nh nhuyễn.</p>\r\n\r\n<p><img alt=\"Hộn hợp bánh kem socola\" src=\"http://banhngon.org/wp-content/uploads/2015/11/Cach-lam-banh-kem-socola-banhngon-org-3.jpg\" style=\"height:422px; width:563px\" /></p>\r\n\r\n<p>Đổ b&aacute;nh v&agrave;o khu&ocirc;n, đem&nbsp;nướng ở nhiệt độ 160 độ C trong 30 ph&uacute;t hoặc tới khi thấy ph&iacute;a dưới b&aacute;nh ngả m&agrave;u v&agrave;ng n&acirc;u l&agrave; được.</p>\r\n\r\n<p><img alt=\"Bánh kem socola cắt đôi\" src=\"http://banhngon.org/wp-content/uploads/2015/11/Cach-lam-banh-kem-socola-banhngon-org-4.jpg\" style=\"height:422px; width:563px\" /></p>\r\n\r\n<p>Lấy b&aacute;nh ra khỏi l&ograve;, đề nguội, cắt ngang b&aacute;nh th&agrave;nh 2 hoặc 3 phần.</p>\r\n\r\n<p>Đặt từng phần b&aacute;nh l&ecirc;n dĩa, giữa c&aacute;c phần phết một lớp kem. Mặt tr&ecirc;n c&ugrave;ng, sau khi phết kem th&igrave; đặt một vi&ecirc;n kem l&ecirc;n, tiếp đ&oacute; rắt th&ecirc;m đậu phộng, cuối c&ugrave;ng l&agrave; quết th&ecirc;m v&agrave;i đường Socola đ&atilde; đun chảy.</p>\r\n\r\n<p><a href=\"http://127.0.0.1:8000/chitiettintuc.html/6\"><img alt=\"\" src=\"http://127.0.0.1:8000/upload/anh_tt/portfolio-8.jpg\" style=\"height:360px; width:570px\" /></a></p>\r\n\r\n<p>Vậy l&agrave; ch&uacute;ng ta đ&atilde; ho&agrave;n th&agrave;nh xong m&oacute;n b&aacute;nh socola vừa thơm ngọt, ấm ấm của b&aacute;nh socola, vừa m&aacute;t lạnh của kem đầy hấp dẫn rồi. Ch&uacute;c bạn c&ugrave;ng người th&acirc;n thưởng thức m&oacute;n b&aacute;nh chocolate ngon miệng, đừng qu&ecirc;n&nbsp;chia sẻ b&agrave;i viết n&agrave;y nh&eacute;!</p>', 3, 12, '2020-06-20 02:54:34', '2020-06-20 02:54:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `vaitro` int(11) NOT NULL DEFAULT 0,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verify_code` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `vaitro`, `hoten`, `images`, `diachi`, `email`, `sdt`, `created_at`, `updated_at`, `verify_code`) VALUES
(12, 'bathanh', '$2y$10$KLygcCZLuEITIIXNQ6AmKuQ8ge4sr5n3ZAHaR6Gfk6osS8jd7KrMW', 1, 'Bá Thành', 'upload/user\\avatar.jpg', 'Hà Nội', 'thanhnbph07628@fpt.edu.vn', '353222581', '2020-06-13 15:16:58', '2020-06-13 15:16:58', '$2y$10$yR1EREALFAhHA1WKniObDOdybVKhhXvBbkRj86Lnj5sARBjlhm6ae'),
(13, 'thanh123', '$2y$10$KcApBuZ3jkZVwlA6OOvvNuhFnounJE39v7AP2URKunW4VVcxI4C5y', 0, 'Thanh Thanh', 'upload/user\\img-0191-1500372920465.jpg', 'Sài Gòn', 'thanhthanh@gmail.com', '353222588', '2020-06-15 01:12:15', '2020-06-15 01:12:15', NULL),
(14, 'ribisanchi', '$2y$10$WIcHIUXhGAuZVGApX7h5YOwv2fKXLV4optzvsDeg.FfiuDcWuJ0g6', 0, 'Thảo Mai', 'upload/user\\th.jpg', 'Bắc Giang', 'thaomai@gmail.com', '353222589', '2020-06-15 01:15:42', '2020-06-15 01:15:42', NULL),
(16, 'bathanh123', '$2y$10$2wnsHRMC6vp.Wl8/vENfLOZVERelV1LRlo5I1uJSs9UZHjCWhNVzC', 1, 'chu tiến', 'upload/user\\th.jpg', 'Hà Nội', '13gddg@gmail.com', '353222583', '2020-06-15 01:21:13', '2020-06-15 01:21:13', NULL),
(17, 'thidien123', '$2y$10$G3Ld56jlu3J01BP4ZOUwveAtq9jaa2aBnRgc5j3a/y3PHj33eKcfS', 1, 'Lê thi', 'upload/user\\comming-bg.jpg', 'Hà Tây', 'lethi@gmail.com', '353223581', '2020-06-17 01:50:02', '2020-06-17 01:50:02', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuctintuc`
--
ALTER TABLE `danhmuctintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `daubep`
--
ALTER TABLE `daubep`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `danhmuctintuc`
--
ALTER TABLE `danhmuctintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `daubep`
--
ALTER TABLE `daubep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmucsanpham` (`id`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tintuc_ibfk_2` FOREIGN KEY (`iddm`) REFERENCES `danhmuctintuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
