-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2016 at 03:57 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhsp`
--

CREATE TABLE `anhsp` (
  `id` int(10) UNSIGNED NOT NULL,
  `san_pham_id` int(10) UNSIGNED NOT NULL,
  `anh` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anhsp`
--

INSERT INTO `anhsp` (`id`, `san_pham_id`, `anh`, `created_at`, `updated_at`) VALUES
(6, 7, '14583542811.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 7, '14583542812.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 7, '14583542813.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 7, '14583542814.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 7, '1458354281201112311125424843_PPBS-119.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 8, '14583561081.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 8, '14583561082.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 8, '14583561083.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 8, '14583561084.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 8, '14583561085.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 9, '14583573301.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 9, '14583573302.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 9, '14583573303.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 9, '14583573304.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 9, '14583573305.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 10, '1458357469201307091643208514_oppo-find-5.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 10, '14583574691.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 10, '14583574692.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 10, '14583574693.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 10, '14583574694.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 11, '14583576441.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 11, '14583576442.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 11, '14583576443.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 11, '14583576444.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 11, '14583576445.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 13, '14583580231.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 13, '14583580242.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 13, '14583580243.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 13, '14583580244.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 13, '14583580245.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 14, '14583582311.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 14, '14583582312.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 14, '14583582313.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 14, '14583582314.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 14, '14583582315.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 15, '14583589291.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 15, '14583589292.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 15, '14583589293.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 15, '14583589294.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 15, '14583589295.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 17, '14583591281.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 17, '14583591282.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 17, '14583591283.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 17, '14583591284.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 17, '14583591285.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 19, '14583593921.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 19, '14583593922.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 19, '14583593923.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 19, '14583593924.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 19, '14583593925.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 20, '1458360721530201374038PM_635_iPhone_4.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 20, '1458360721Apple-iPhone-4-Verizon.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 20, '1458360722Apple-iPhone-5s-16GB-4G-LTE-(Unlocked)-Mobile-Phones-Space-Grey-Black-1-360x360.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 20, '1458360722Apple-iPhone-6-cam-AH.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 20, '1458360722images (3).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 21, '1458360833images (9).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 21, '1458360833Apple-iPhone-5s-16GB-4G-LTE-(Unlocked)-Mobile-Phones-Space-Grey-Black-1-360x360.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 21, '1458360833images (6).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 21, '1458360833images (9).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 21, '1458360833Apple-iPhone-4-Verizon.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 22, '14583620161.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 22, '14583620162.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 22, '14583620163.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 22, '14583620164.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 22, '14583620165.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ba_hd`
--

CREATE TABLE `ba_hd` (
  `id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ba_phieunhap`
--

CREATE TABLE `ba_phieunhap` (
  `id` int(11) NOT NULL,
  `mapn` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `mahd` int(10) UNSIGNED NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tensp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`mahd`, `masp`, `soluong`, `dongia`, `created_at`, `updated_at`, `tensp`) VALUES
(1, 21, 1, 4000000, '2016-03-22 12:15:20', '2016-03-22 12:15:20', ' Ipad mini 4'),
(1, 22, 1, 5000000, '2016-03-22 12:15:20', '2016-03-22 12:15:20', ' Iphone 4sa'),
(2, 7, 1, 1, '2016-02-29 17:00:00', '2016-02-29 17:00:00', ' Iphone 4s'),
(3, 7, 10, 122233, '2016-03-15 17:00:00', '2016-03-15 17:00:00', ' Iphone 4s'),
(4, 19, 1, 4000000, '2016-03-23 01:14:24', '2016-03-23 01:14:24', 'Nokia x3'),
(5, 7, 1, 4000000, '2016-03-23 02:20:46', '2016-03-23 02:20:46', ' Iphone 4s'),
(6, 22, 1, 5000000, '2016-03-23 02:22:48', '2016-03-23 02:22:48', ' Iphone 4sa'),
(7, 7, 1, 4000000, '2016-03-23 02:25:57', '2016-03-23 02:25:57', ' Iphone 4s'),
(8, 22, 1, 5000000, '2016-03-23 06:09:41', '2016-03-23 06:09:41', ' Iphone 4sa'),
(9, 7, 1, 4000000, '2016-03-23 07:05:07', '2016-03-23 07:05:07', ' Iphone 4s');

-- --------------------------------------------------------

--
-- Table structure for table `ct_phieunhap`
--

CREATE TABLE `ct_phieunhap` (
  `mapn` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(10) UNSIGNED NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `makh` int(10) UNSIGNED NOT NULL,
  `noidung` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `ngaylap` date NOT NULL,
  `manv` int(10) UNSIGNED NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(25) NOT NULL,
  `noinhan` varchar(255) NOT NULL,
  `tgnhan` date NOT NULL,
  `trangthai` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `ngaylap`, `manv`, `ten_kh`, `diachi`, `sdt`, `noinhan`, `tgnhan`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, '2016-03-22', 5, '1', '1', '01674626020', '1', '2016-03-11', 'Đặt hàng tại webstite', '2016-03-22 12:15:20', '2016-03-22 12:15:20'),
(2, '2016-03-01', 5, '1', '1', '1', '1', '2016-03-07', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '2016-03-09', 5, '1', '1', '1', '1', '2016-03-09', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '2016-03-23', 5, '1', '1', '0972722994', '1', '2016-03-25', 'Đặt hàng tại webstite', '2016-03-23 01:14:24', '2016-03-23 01:14:24'),
(5, '2016-03-23', 5, '1', '1', '01674626020', '1', '2016-03-11', 'Đặt hàng tại webstite', '2016-03-23 02:20:46', '2016-03-23 02:20:46'),
(6, '2016-03-23', 5, '1', '1', '01674626020', '1', '2016-03-20', 'Đặt hàng tại webstite', '2016-03-23 02:22:48', '2016-03-23 02:22:48'),
(7, '2016-03-23', 5, '1', '1', '01674626020', '1', '2016-03-25', 'Đặt hàng tại webstite', '2016-03-23 02:25:57', '2016-03-23 02:25:57'),
(8, '2016-03-23', 5, '1', '1', '01674626020', '1', '2016-03-24', 'Đặt hàng tại webstite', '2016-03-23 06:09:41', '2016-03-23 06:09:41'),
(9, '2016-03-23', 5, '1', '1', '01674626020', '1', '2016-03-27', 'Đặt hàng tại webstite', '2016-03-23 07:05:07', '2016-03-23 07:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `daichi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`id`, `name`, `thutu`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Nokia', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'SamSung', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'LG Electronic', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Sony', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'HTC', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Sky Pantech', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Oppo', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Philips', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tam94dk', '$2y$10$KDuen4XExclimRia2kbiw.2d9FpCFEzbyxhSkV33aPjhDgorSNPqa', 'tam94dk@gmail.com', 0, 'ldbZf5UqNmpKoQpy5jkMkjZDxJSVHGir6QOckrU1cUUtaeiRgzfFQKMyIgAD', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'tam9dk1', '$2y$10$.cCo9cObhInQoWp62R21u.Jg2QkiQUd1oXR7c0GlGbn8Nauj6plLm', 'tam94dk1@gmail.com', 1, 'Orj8eH5shlIqhWqqCnQ1jyXdA6Kgv3bl2Jv5L7rb', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'tam94dk2', '$2y$10$THtIoDQF.4X4YT86lwrw1e/Ub4wEnnItYeUHDezCjcRJD51ECGCPy', 'tam94dk2@gmail.com', 2, 'DiS8DpLVSVBElDDeiPBkGVXUnJcRcRJZwOkVQGcOYSXHOKwf0OM1rEei8ofT', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'ntamnx', '$2y$10$6yf7ufxqt86oRG1wjfXn4uUDdfsNed2eLlQDelWYstCgO1dckomNe', 'ntamnx@gmail.com', 2, '3JUrrfa9Omvdn77cDs9TLGc1hb4PtRw2504ZgmdO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'khachhang', '$2y$10$HcSl7EXC6DLKN.C2oqwwSONwvUNyUOsGDHmgG9i00b.awuzqqoZ5S', 'khachhang@gmail.com', 1, '1tFVYiAmeJk5lofOdkEYJl3zAmcm9qr3RKcatTqZ', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nhacc`
--

CREATE TABLE `nhacc` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `id` int(10) UNSIGNED NOT NULL,
  `ngaynhap` date NOT NULL,
  `mancc` int(10) UNSIGNED NOT NULL,
  `manv` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phukien`
--

CREATE TABLE `phukien` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenpk` varchar(255) NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `gia` int(11) NOT NULL,
  `bao_hanh` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT '0',
  `anh` varchar(255) NOT NULL,
  `mota` varchar(3000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sanxuat` varchar(255) NOT NULL,
  `baohanh` varchar(255) NOT NULL,
  `mau` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `maloai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `sanxuat`, `baohanh`, `mau`, `gia`, `soluong`, `anh`, `trang_thai`, `maloai`, `created_at`, `updated_at`) VALUES
(7, ' Iphone 4s', 'Châu âu', '12 tháng', 'xám', 4000000, -3, '1458354281201209130941192978_iphone5_hoanghamobile3.jpg', 'full box', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, ' Ipad mini 3', 'Châu âu', '12 tháng', 'xám', 5000000, 0, '1458356108201211261731532076_ipad_mini_white.png', 'full box', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, ' Ipad mini 3A', 'Châu âu', '12 tháng', 'Trắng', 5000000, 0, '1458357330201211051040239600_ipad4_1.png', 'full box', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Nokia x2', 'Trung quốc', '12 tháng', 'xám', 2000000, 0, '1458357469201307091643209450_find_clover.png', 'full box', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'sam sung galaxy s3', 'Hàn quốc', '12 tháng', 'xám', 5000000, 0, '1458357644201210031523066780_dien-thoai-di-dong-samsung-galaxy-noteii-n7100-hoanghamobile.com-9.jpg', 'full box', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'sam sung galaxy trend', 'Châu âu', '12 tháng', 'xám', 4000000, 0, '14583580233.png', 'full box', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, ' Iphone 6s', 'Châu âu', '12 tháng', 'Trắng', 4000000, 0, '1458358231201209130941192978_iphone5_hoanghamobile3.jpg', 'full box', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'sony a-z 370', 'Châu âu', '12 tháng', 'xám', 4000000, 0, '14583589295.png', 'full box', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'sam sung galaxy trend2', 'Châu âu', '12 tháng', 'xám', 4000000, 0, '1458359128201210031523066780_dien-thoai-di-dong-samsung-galaxy-noteii-n7100-hoanghamobile.com-9.jpg', 'full box', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Nokia x3', 'Châu âu', '12 tháng', 'Trắng', 4000000, -1, '1458359392201307091643208514_oppo-find-5.png', 'full box', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, ' Iphone 5sc', 'Châu âu', '12 tháng', 'xám', 4000000, 0, '1458360721124587766.jpg', 'full box', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, ' Ipad mini 4', 'Châu âu', '12 tháng', 'Trắng', 4000000, -1, '1458360833530201374038PM_635_iPhone_4.png', 'full box', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, ' Iphone 4sa', 'Châu âu', '12 tháng', 'xám', 5000000, -3, '1458362016images (6).jpg', 'full box', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `time_click`
--

CREATE TABLE `time_click` (
  `id` int(11) NOT NULL,
  `time_click` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time_click`
--

INSERT INTO `time_click` (`id`, `time_click`) VALUES
(1, '2016-03-23 06:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `tinhnang`
--

CREATE TABLE `tinhnang` (
  `id` int(10) UNSIGNED NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `kichthuoc_khoiluong` text NOT NULL,
  `manhinh_hienthi` text NOT NULL,
  `luutru_bonho` text NOT NULL,
  `dulieu_ketnoi` text NOT NULL,
  `ungdung_trochoi` text NOT NULL,
  `nguon` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tinhnang`
--

INSERT INTO `tinhnang` (`id`, `masp`, `kichthuoc_khoiluong`, `manhinh_hienthi`, `luutru_bonho`, `dulieu_ketnoi`, `ungdung_trochoi`, `nguon`, `created_at`, `update_at`) VALUES
(5, 7, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:#FF0000">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>: </em><span style="color:#FF0000">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>: <span style="color:#FF0000">6.5</span></em><span style="color:#FF0000">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:#FF0000">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:#FF0000">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:#FF0000">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:#FF0000">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ <em>:</em></strong><em> </em><span style="color:#FF0000">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:#FF0000">c&oacute;</span><strong><span style="color:#FF0000">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>: </em></strong><em><span style="color:#FF0000">16 GB</span></em><span style="color:#FF0000">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>: </em></strong><em><span style="color:#FF0000">64GB</span></em><span style="color:#FF0000">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:#FF0000">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:#FF0000">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:#FF0000">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:#FF0000">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:#FF0000">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:#FF0000">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:#FF0000">&nbsp;</span></strong><span style="color:#FF0000">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:#FF0000">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại: </strong><span style="color:#FF0000">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi: </strong><span style="color:#FF0000">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi: </strong><span style="color:#FF0000">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng: </strong><span style="color:#FF0000">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:#FF0000">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:#FF0000">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim: </strong><span style="color:#FF0000">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:#FF0000">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:#FF0000">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G: <span style="color:#FF0000">&nbsp;</span></strong><span style="color:#FF0000">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 8, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 9, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 10, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 11, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 13, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 14, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 15, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 17, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 19, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 20, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tinhnang` (`id`, `masp`, `kichthuoc_khoiluong`, `manhinh_hienthi`, `luutru_bonho`, `dulieu_ketnoi`, `ungdung_trochoi`, `nguon`, `created_at`, `update_at`) VALUES
(16, 21, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 22, '<ul>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">179.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều rộng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">99.4 (<em>mm</em>)</span></li>\r\n	<li><strong>Chiều cao</strong><em>:&nbsp;<span style="color:rgb(255, 0, 0)">6.5</span></em><span style="color:rgb(255, 0, 0)">&nbsp;(<em>mm)</em></span></li>\r\n	<li><strong>Chiều d&agrave;i</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">212(<em>g</em>)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Kiể m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Full HD 1080 x 1920 pixels.</span></li>\r\n	<li><strong>K&iacute;ch thước m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">6.4&quot;.</span></li>\r\n	<li><strong>Độ ph&acirc;n giải m&agrave;n h&igrave;nh</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">1080 x 1920 px.</span></li>\r\n	<li><strong>Cảm ứng</strong><em>:&nbsp;</em><span style="color:rgb(255, 0, 0)">Cảm ứng điện dung, đa điểm.</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Danh bạ lưu trữ&nbsp;<em>:</em></strong><em>&nbsp;</em><span style="color:rgb(255, 0, 0)">Kh&ocirc;ng giới hạn.</span></li>\r\n	<li><strong>Hỗ trợ sms:<em>&nbsp;</em></strong><span style="color:rgb(255, 0, 0)">c&oacute;</span><strong><span style="color:rgb(255, 0, 0)">.</span></strong></li>\r\n	<li><strong>Bộ nhớ trong<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">16 GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Dung lượng thẻ nhớ tối đa<em>:&nbsp;</em></strong><em><span style="color:rgb(255, 0, 0)">64GB</span></em><span style="color:rgb(255, 0, 0)">.</span></li>\r\n	<li><strong>Loại thẻ nhớ hỗ trợ:&nbsp;</strong><span style="color:rgb(255, 0, 0)">MicroSD (T-Flash)</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Dữ liệu &amp; Kết nối:&nbsp;</strong><span style="color:rgb(255, 0, 0)">107 kbps</span></li>\r\n	<li><strong>Mạng EDGE:&nbsp;</strong><span style="color:rgb(255, 0, 0)">296 Kbps</span></li>\r\n	<li><strong>Hỗ trợ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">HSUPA, 5.76 Mbps, DC-HSDPA, 42 Mbps,&nbsp;100 Mbps DL,&nbsp;LTE, 50 Mbps UL</span></li>\r\n	<li><strong>Tr&igrave;nh duyệt web:</strong><span style="color:rgb(255, 0, 0)">HTML5</span></li>\r\n	<li><strong>Hệ thống định vị GPS:</strong><span style="color:rgb(255, 0, 0)">A-GPS,&nbsp;GLONASS</span></li>\r\n	<li><strong>Bluetooth:<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">v4.0 with A2DP</span></li>\r\n	<li><strong>Wifi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Wi-Fi hotspot,&nbsp;Wi-Fi 802.11 b/g/n,&nbsp;DLNA,&nbsp;dual-band,&nbsp;Wi-Fi Direct</span></li>\r\n	<li><strong>Hồng ngoại:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Ghi &acirc;m cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Lưu trữ cuộc gọi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n	<li><strong>Phần mềm ứng dụng văn ph&ograve;ng:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Xem/ Chỉnh sửa văn bản</span></li>\r\n	<li><strong>Phần mềm ứng dụng kh&aacute;c:&nbsp;</strong><span style="color:rgb(255, 0, 0)">Mạng x&atilde; hội ảo, Google Search, Maps, Gmail, YouTube, Calendar, Google Talk.</span></li>\r\n	<li><strong>Tr&ograve; chơi:&nbsp;</strong><span style="color:rgb(255, 0, 0)">C&agrave;i đặt sẵn c&oacute; thể c&agrave;i th&ecirc;m</span></li>\r\n	<li><strong>Hỗ trợ nhiều sim:&nbsp;</strong><span style="color:rgb(255, 0, 0)">c&oacute;</span></li>\r\n</ul>\r\n', '<ul>\r\n	<li><strong>Loại pin sử dụng:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">Li-on</span></li>\r\n	<li><strong>Dung lượng pin:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(5000mAh)</span></li>\r\n	<li><strong>Thời gian chờ 2G:&nbsp;<span style="color:rgb(255, 0, 0)">&nbsp;</span></strong><span style="color:rgb(255, 0, 0)">(48&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian chờ 3G:</strong>&nbsp;<span style="color:rgb(255, 0, 0)">(36&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 2G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(24&nbsp;giờ)</span></li>\r\n	<li><strong>Thời gian đ&agrave;m thoại 3G:&nbsp;</strong><span style="color:rgb(255, 0, 0)">(18&nbsp;giờ)</span></li>\r\n</ul>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(500) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `anh`, `mota`, `noidung`, `luot_xem`, `created_at`, `updated_at`) VALUES
(1, 'Tablet với hai màn hình của Samsung giảm giá', '2016/3/26/1458966048anh.jpg', 'Mẫu laptop kiêm tablet với hai màn hình mà Samsung trưng bày tại triển lãm IFA 2012 có thiết kế gần giống ASUS Taichi. Điểm độc đáo của prototype (nguyên mẫu) này là tích hợp thêm một màn hình thứ hai năm trên nắp vỏ.', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\n\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\n\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.</span></p>\n', 6, '0000-00-00 00:00:00', '2016-03-26 05:52:58'),
(3, 'Iphone 6s với hai màn hình của Samsung giảm giá', '2016/3/26/1458969952dien-thoai-samsung-galaxy-grand-prime-g530-8gb.jpg', 'Mẫu laptop kiêm tablet với hai màn hình mà Samsung trưng bày tại triển lãm IFA 2012 có thiết kế gần giống ASUS Taichi. Điểm độc đáo của prototype (nguyên mẫu) này là tích hợp thêm một màn hình thứ hai năm trên nắp vỏ. ', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.</span></p>\r\n', 1, '2016-03-26 05:25:52', '2016-03-26 05:42:06'),
(4, 'Iphone 7s với hai màn hình của Samsung giảm giá', '2016/3/26/1458971333asus-zenfone-c-533-400x533.png', 'Mẫu laptop kiêm tablet với hai màn hình mà Samsung trưng bày tại triển lãm IFA 2012 có thiết kế gần giống ASUS Taichi. Điểm độc đáo của prototype (nguyên mẫu) này là tích hợp thêm một màn hình thứ hai năm trên nắp vỏ. ', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/5.png" style="height:445px; width:430px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.</span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px"><img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/2.png" style="height:420px; width:620px" /></span></p>\r\n', 0, '2016-03-26 05:48:53', '2016-03-26 05:48:53'),
(5, 'Galaxy s8 mới ra mắt gây sốt cộng đồng mạng', '2016/3/26/1458971452dien-thoai-samsung-galaxy-s3-mini-i8190-8gb_360.jpg', 'Mẫu laptop kiêm tablet với hai màn hình mà Samsung trưng bày tại triển lãm IFA 2012 có thiết kế gần giống ASUS Taichi. Điểm độc đáo của prototype (nguyên mẫu) này là tích hợp thêm một màn hình thứ hai năm trên nắp vỏ. ', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/5.png" style="height:445px; width:430px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.</span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px"><img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/2.png" style="height:420px; width:620px" /></span></p>\r\n', 1, '2016-03-26 05:50:52', '2016-03-27 01:35:22'),
(6, 'Iphone 8s với hai màn hình của Samsung giảm giá', '2016/3/26/1458971511article-0-0000BF3300000CB2-664_306x432.jpg', 'Mẫu laptop kiêm tablet với hai màn hình mà Samsung trưng bày tại triển lãm IFA 2012 có thiết kế gần giống ASUS Taichi. Điểm độc đáo của prototype (nguyên mẫu) này là tích hợp thêm một màn hình thứ hai năm trên nắp vỏ.  ', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/5.png" style="height:445px; width:430px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.</span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px"><img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/2.png" style="height:420px; width:620px" /></span></p>\r\n', 1, '2016-03-26 05:51:51', '2016-03-27 01:35:13'),
(7, 'Iphone 7s với hai màn hình của Samsung', '2016/3/26/1458971565images (1).jpg', 'Mẫu laptop kiêm tablet với hai màn hình mà Samsung trưng bày tại triển lãm IFA 2012 có thiết kế gần giống ASUS Taichi. Điểm độc đáo của prototype (nguyên mẫu) này là tích hợp thêm một màn hình thứ hai năm trên nắp vỏ.  ', '<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/1.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/3.png" style="height:420px; width:620px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.<img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/5.png" style="height:445px; width:430px" /></span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">Mẫu laptop ki&ecirc;m tablet với hai m&agrave;n h&igrave;nh m&agrave; Samsung trưng b&agrave;y tại triển l&atilde;m IFA 2012 c&oacute; thiết kế gần giống ASUS Taichi. Điểm độc đ&aacute;o của prototype (nguy&ecirc;n mẫu) n&agrave;y l&agrave; t&iacute;ch hợp th&ecirc;m một m&agrave;n h&igrave;nh thứ hai năm tr&ecirc;n nắp vỏ.</span></p>\r\n\r\n<p><span style="font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px"><img alt="" src="http://localhost:81/dacn/public/resources/upload/tintuc/images/2.png" style="height:420px; width:620px" /></span></p>\r\n', 0, '2016-03-26 05:52:45', '2016-03-26 05:52:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masp` (`san_pham_id`),
  ADD KEY `san_pham_id` (`san_pham_id`);

--
-- Indexes for table `ba_hd`
--
ALTER TABLE `ba_hd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ba_phieunhap`
--
ALTER TABLE `ba_phieunhap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`mahd`,`masp`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `ct_phieunhap`
--
ALTER TABLE `ct_phieunhap`
  ADD PRIMARY KEY (`mapn`,`id`),
  ADD KEY `san_pham_id` (`id`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masp` (`masp`),
  ADD KEY `makh` (`makh`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manv` (`manv`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tensp` (`name`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `nhacc`
--
ALTER TABLE `nhacc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manv` (`manv`),
  ADD KEY `mancc` (`mancc`);

--
-- Indexes for table `phukien`
--
ALTER TABLE `phukien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `maloai` (`maloai`);

--
-- Indexes for table `time_click`
--
ALTER TABLE `time_click`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinhnang`
--
ALTER TABLE `tinhnang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masp_2` (`masp`),
  ADD UNIQUE KEY `masp_3` (`masp`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhsp`
--
ALTER TABLE `anhsp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nhacc`
--
ALTER TABLE `nhacc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `phukien`
--
ALTER TABLE `phukien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `time_click`
--
ALTER TABLE `time_click`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tinhnang`
--
ALTER TABLE `tinhnang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD CONSTRAINT `anhsp_ibfk_1` FOREIGN KEY (`san_pham_id`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD CONSTRAINT `ct_hoadon_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `ct_hoadon_ibfk_3` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ct_phieunhap`
--
ALTER TABLE `ct_phieunhap`
  ADD CONSTRAINT `ct_phieunhap_ibfk_2` FOREIGN KEY (`id`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `ct_phieunhap_ibfk_3` FOREIGN KEY (`mapn`) REFERENCES `phieunhap` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`manv`) REFERENCES `nguoidung` (`id`);

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`mancc`) REFERENCES `nhacc` (`id`),
  ADD CONSTRAINT `phieunhap_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nguoidung` (`id`);

--
-- Constraints for table `phukien`
--
ALTER TABLE `phukien`
  ADD CONSTRAINT `phukien_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaisp` (`id`);

--
-- Constraints for table `tinhnang`
--
ALTER TABLE `tinhnang`
  ADD CONSTRAINT `tinhnang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
