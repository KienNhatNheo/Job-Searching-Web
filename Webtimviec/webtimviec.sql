-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2021 lúc 08:00 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webtimviec`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cong_viec`
--

CREATE TABLE `cong_viec` (
  `job_id` int(11) NOT NULL,
  `job_own` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_quantity` int(11) DEFAULT NULL,
  `job_salary` int(20) DEFAULT NULL,
  `job_language` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_experiment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_environment` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_profit` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_hotline` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_start` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_end` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cong_viec`
--

INSERT INTO `cong_viec` (`job_id`, `job_own`, `job_name`, `job_quantity`, `job_salary`, `job_language`, `job_experiment`, `job_environment`, `job_profit`, `job_address`, `job_hotline`, `job_email`, `job_start`, `job_end`, `job_img`) VALUES
(3, 'Công ty TNHH KienNhatNheo', 'Lập trình viên', 30, 15, 'C/C++,Java', '1 năm', 'Thân thiện, hòa đồng, vui vẻ, thú zị', 'Du lịch hàng quý, Thưởng khi hoàn thành vượt chỉ tiêu', 'Số 12, đường Tố Hữu, Yên Nghĩa, Hà Đông, Hà Nội', '0123456789', 'kiennhatnheo@gmail.com', '10/10/2021', '20/10/2021', 'https://noithatduonggia.vn/wp-content/uploads/2019/09/hinh-anh-van-phong-cong-ty-dep.jpg'),
(4, 'Công ty TNHH KienNhatNheo', 'Tester', 20, 10, 'Không', '6 tháng', 'Hòa đồng, thú zị', 'Du lịch 4 tháng 1 lần', 'Số 15, đường Tố Hữu, Yên Nghĩa, Hà Đông, Hà Nội', '02345678933', 'kiennhatnheo', '10/10/2021', '20/10/2021', 'https://thietkehomexinh.com/wp-content/uploads/2016/09/van-phong-cong-ty-hanoivip.jpg'),
(26, 'Công ty TNHH KienHoiNhat', 'Lập trình viên Front-end', 10, 13, 'HTML,Javascript', '6 tháng', 'Nghiêm túc, lành mạnh', 'Khám sức khỏe định kì ', 'Số 14, đường Tố Hữu, Yên Nghĩa, Hà Đông, Hà Nội', '0838444949', 'kienhoinhat@gmail.com', '13/10/2021', '30/10/2021', 'https://thietkehomexinh.com/wp-content/uploads/2016/09/van-phong-cong-ty-hanoivip-5-768x576.jpg'),
(30, 'fewf', 'Lập trình viên', 10, 15, 'C/C++,Java', 'dưed', 'ưed', '1', 'Số 13, đường Tố Hữu, Yên Nghĩa, Hà Đông, Hà Nội', '1', '1', '11', '1', 'https://thietkehomexinh.com/wp-content/uploads/2016/09/van-phong-cong-ty-hanoivip-6-768x494.jpg'),
(31, 'ucw', 'Lập trình viên', 12, 10, 'Java,HTML', 'Không', 'ểcqr', 'cqec', 'Khu 3, phường Vạn Hưng, quận Đồ Sơn, Hải Phòng.', 'ecqe', 'qec', 'qưe', '3r', 'https://xaydungnhandat.com.vn/wp-content/uploads/2020/10/1-3-1024x717.jpg'),
(34, '1', 'Trí tuệ nhân tạo ', 1, 1, 'Python', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_fullname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_birthday` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_gender` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`user_id`, `username`, `user_password`, `user_email`, `user_fullname`, `user_birthday`, `user_gender`) VALUES
(1, 'kiennhatnheo', 'ef4d475b11063cb637094367991390', 'kien1902@gmail.com', 'Nguyễn Trung Kiên', '19/02/2001', 'Nam'),
(2, 'minh123', 'ddc83bf88c241349a4211172137545', 'minh@gmail.com', 'Trần Ngọc Minh', '04/09/2003', 'Nam'),
(3, 'kien123', '5d2297b2f56654636090aaad75d057', 'kien190201@gmail.com', 'Nguyễn Trung Kiên', '19/02/2001', 'Nam'),
(4, 'kiennhatnheo1', '5d2297b2f56654636090aaad75d0578f', 'kien1902@gmail.com', 'Nguyễn Trung Kiên', '19/02/2001', 'Nam'),
(5, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@gmail.com', 'Nguyễn Văn A', '15/04/2000', 'Nữ'),
(6, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@gmail.com', 'Nguyễn Văn A', '15/04/2000', 'Nữ'),
(7, 'demo123', '62cc2d8b4bf2d8728120d052163a77df', 'bnguyen@gmail.com', 'Nguyễn Thị B', '04/09/2003', 'Nữ'),
(21, '123123', '4297f44b13955235245b2497399d7a93', 'c@gmail.com', 'Trần Thị C', '15/04/2000', 'Nữ'),
(22, 'userdemo', 'c4ca4238a0b923820dcc509a6f75849b', 'vuong123@gmail.com', 'Đỗ Minh Vượng', '20/11/2001', 'Nữ'),
(23, 'userdemo1', 'c4ca4238a0b923820dcc509a6f75849b', 'linh123@gmail.com', 'Phan Việt Linh', '16/02/2001', 'Nữ'),
(24, 'userdemo2', 'c4ca4238a0b923820dcc509a6f75849b', 'caovu123@gmail.com', 'Cao Đức Vũ', '01/01/2001', 'Nữ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cong_viec`
--
ALTER TABLE `cong_viec`
  ADD PRIMARY KEY (`job_id`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cong_viec`
--
ALTER TABLE `cong_viec`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
