-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 04, 2020 lúc 03:31 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: dbsinhvien
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng ketqua
--

CREATE TABLE ketqua (
  MaKQ varchar(50) NOT NULL,
  MaMH varchar(50) NOT NULL,
  MaSV varchar(50) NOT NULL,
  Diem int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng ketqua
--

INSERT INTO ketqua (MaKQ, MaMH, MaSV, Diem) VALUES
('KQ01', 'LTCB', 'Sv01', 8),
('KQ02', 'LTNC', 'Sv01', 5),
('KQ03', 'LTCB', 'SV02', 5),
('KQ04', 'LTNC', 'SV09', 10);
('KQ05', 'LTNC', 'SV05', 10);

('KQ06', 'LTNC', 'SV03', 6;

('KQ07', 'LTNC', 'SV04', 7);

('KQ08', 'LTNC', 'SV06', 6);

('KQ09', 'LTNC', 'SV07', 9);
('KQ10', 'LTNC', 'SV08', 10);


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng khoa
--

CREATE TABLE khoa (
  MaKhoa varchar(50) NOT NULL,
  TenKhoa varchar(50) NOT NULL,
  NamThanhLap date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng khoa
--

INSERT INTO khoa (MaKhoa, TenKhoa, NamThanhLap) VALUES
('CNTT', 'Công nghệ thông tin', '1985-07-07');

('SPT', 'Sư Phạm tin', '1987-02-05');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng lop
--

CREATE TABLE lop (
  MaLop varchar(50) NOT NULL,
  TenLop varchar(50) NOT NULL,
  MaKhoa varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng lop
--

INSERT INTO lop (MaLop, TenLop, MaKhoa) VALUES
('CNTTA', 'lớp công nghệ thông tin A', 'CNTT'),
('CNTTB', 'lớp công nghệ thông tin B', 'CNTT');
('CNTTC', 'lớp công nghệ thông tin C', 'CNTT');
('CNTTD', 'lớp công nghệ thông tin D', 'CNTT');
('SPT', 'lớp sư phạm tin', 'SPT');



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng monhoc
--

CREATE TABLE monhoc (
  MaMH varchar(50) NOT NULL,
  TenMon varchar(50) NOT NULL,
  SoTC int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng monhoc
--

INSERT INTO monhoc (MaMH, TenMon, SoTC) VALUES
('LTCB', 'lập trình cơ bản', 3),
('LTNC', 'lập trình nâng cao', 3);
('OOP', 'lập trình hướng đối tượng', 3);
('HDH', 'Hệ Điều Hành', 3);
('MMT', 'mạng máy tính', 3);
('TKGT', 'thiết kế giải thuật', 3);
('XXTK', 'xác xuất thống kê', 3);
('TRR', 'toán rời rạc', 3);
('GT1', 'Giải tích 1', 3);
('GT2', 'Giải tích 2', 3);










-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng sinhvien
--

CREATE TABLE sinhvien (
  MaSV varchar(50) NOT NULL,
  HoTen varchar(50) NOT NULL,
  NgaySinh date NOT NULL,
  Email varchar(50) NOT NULL,
  MaLop varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng sinhvien
--

INSERT INTO sinhvien (MaSV, HoTen, NgaySinh, Email, MaLop) VALUES
('Sv01', 'Nguyễn Văn B', '2000-01-010', 'nvB@gmail.com', 'CNTTB'),
('SV02', 'Nguyễn Văn A', '2000-02-09', 'NvA@gmail.com', 'CNTTA');
('SV03', 'Nguyễn Văn C', '2000-03-08', 'NvA@gmail.com', 'CNTTC');
('SV04', 'Nguyễn Văn D', '2000-04-07', 'NvA@gmail.com', 'CNTTD');
('SV05', 'Nguyễn Văn E', '2000-05-06', 'NvA@gmail.com', 'CNTTA');
('SV06', 'Nguyễn Văn F', '2000-06-05', 'NvA@gmail.com', 'CNTTB');
('SV07', 'Nguyễn Văn G', '2000-07-04', 'NvA@gmail.com', 'CNTTC');
('SV08', 'Nguyễn Văn H', '2000-08-03', 'NvA@gmail.com', 'CNTTD');
('SV09', 'Nguyễn Văn I', '2000-09-02', 'NvA@gmail.com', 'SPT');
('SV010', 'Nguyễn Văn J', '2000-010-01', 'NvA@gmail.com', 'SPT');



--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng ketqua
--
ALTER TABLE ketqua
  ADD PRIMARY KEY (MaKQ),
  ADD KEY fk_maSV (MaSV),
  ADD KEY fk_mMH (MaMH);

--
-- Chỉ mục cho bảng khoa
--
ALTER TABLE khoa
  ADD PRIMARY KEY (MaKhoa);

--
-- Chỉ mục cho bảng lop
--
ALTER TABLE lop
  ADD PRIMARY KEY (MaLop),
  ADD KEY fk_mk (MaKhoa);

--
-- Chỉ mục cho bảng monhoc
--
ALTER TABLE monhoc
  ADD PRIMARY KEY (MaMH);

--
-- Chỉ mục cho bảng sinhvien
--
ALTER TABLE sinhvien
  ADD PRIMARY KEY (MaSV),
  ADD KEY fk_maLop (MaLop);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng ketqua
--
ALTER TABLE ketqua
  ADD CONSTRAINT fk_mMH FOREIGN KEY (MaMH) REFERENCES monhoc (MaMH),
  ADD CONSTRAINT fk_maSV FOREIGN KEY (MaSV) REFERENCES sinhvien (MaSV);

--
-- Các ràng buộc cho bảng lop
--
ALTER TABLE lop
  ADD CONSTRAINT fk_mk FOREIGN KEY (MaKhoa) REFERENCES khoa (MaKhoa);

--
-- Các ràng buộc cho bảng sinhvien
--
ALTER TABLE sinhvien
  ADD CONSTRAINT fk_maLop FOREIGN KEY (MaLop) REFERENCES lop (MaLop);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
