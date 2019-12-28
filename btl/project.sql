-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 28, 2019 lúc 02:05 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `mamon` varchar(10) NOT NULL,
  `tenmon` varchar(50) NOT NULL,
  `sotc` int(11) NOT NULL,
  `lanhoc` int(11) NOT NULL,
  `lanthi` int(11) NOT NULL,
  `namhoc` int(11) NOT NULL,
  `hocky` int(11) NOT NULL,
  `giaidoan` int(11) NOT NULL,
  `danhgia` varchar(10) NOT NULL,
  `masv` varchar(10) NOT NULL,
  `diemqt` float NOT NULL,
  `diemthi` float NOT NULL,
  `tkhp` float NOT NULL,
  `diemchu` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` varchar(10) NOT NULL,
  `hoten` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `makhoa` varchar(10) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(10) NOT NULL,
  `tenkhoa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `malop` varchar(10) NOT NULL,
  `tenlop` varchar(20) NOT NULL,
  `makhoa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophocphan`
--

CREATE TABLE `lophocphan` (
  `malophocphan` varchar(10) NOT NULL,
  `magv` varchar(10) NOT NULL,
  `mamon` varchar(10) NOT NULL,
  `namhoc` int(11) DEFAULT NULL,
  `hocky` int(11) DEFAULT NULL,
  `giaidoan` int(11) DEFAULT NULL,
  `sosvtoithieu` int(11) DEFAULT 10 CHECK (`sosvtoithieu` > 10),
  `sosvtoida` int(11) DEFAULT 70,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamon` varchar(10) NOT NULL,
  `tenmon` varchar(50) DEFAULT NULL,
  `sotc` int(11) DEFAULT NULL,
  `sotietlt` int(11) DEFAULT 0 CHECK (`sotietlt` >= 0),
  `sotietth` int(11) DEFAULT 0 CHECK (`sotietth` >= 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` varchar(10) NOT NULL,
  `hoten` varchar(40) NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `khoa` varchar(50) DEFAULT NULL,
  `nganh` varchar(50) NOT NULL,
  `lop` varchar(10) NOT NULL,
  `iduser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhviendangky`
--

CREATE TABLE `sinhviendangky` (
  `stt` int(11) NOT NULL,
  `masv` varchar(10) NOT NULL,
  `hoten` varchar(40) NOT NULL,
  `malophocphan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD KEY `masv` (`masv`),
  ADD KEY `mamon` (`mamon`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`),
  ADD KEY `makhoa` (`makhoa`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD PRIMARY KEY (`malophocphan`),
  ADD KEY `magv` (`magv`),
  ADD KEY `mamon` (`mamon`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamon`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `sinhviendangky`
--
ALTER TABLE `sinhviendangky`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `malophocphan` (`malophocphan`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`mamon`) REFERENCES `monhoc` (`mamon`);

--
-- Các ràng buộc cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`),
  ADD CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Các ràng buộc cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD CONSTRAINT `lophocphan_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`),
  ADD CONSTRAINT `lophocphan_ibfk_2` FOREIGN KEY (`mamon`) REFERENCES `monhoc` (`mamon`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`iduser`);

--
-- Các ràng buộc cho bảng `sinhviendangky`
--
ALTER TABLE `sinhviendangky`
  ADD CONSTRAINT `sinhviendangky_ibfk_1` FOREIGN KEY (`malophocphan`) REFERENCES `lophocphan` (`malophocphan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
