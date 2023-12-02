-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2023 lúc 08:54 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_sp_name` varchar(255) NOT NULL,
  `bill_diachi` varchar(255) NOT NULL,
  `bill_tel` varchar(10) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1,
  `bill_ngaydat` varchar(50) NOT NULL,
  `bill_tongtien` int(10) NOT NULL,
  `bill_trangthai` int(11) NOT NULL DEFAULT 0 COMMENT '0-chờ xác nhận; 1-đã xác nhận; 2-đang giao; 3-giao thành công, 4-đã hủy',
  `tk_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`bill_id`, `bill_name`, `bill_sp_name`, `bill_diachi`, `bill_tel`, `bill_email`, `bill_pttt`, `bill_ngaydat`, `bill_tongtien`, `bill_trangthai`, `tk_id`, `cart_id`) VALUES
(122, 'abc', 'Áo phông 4D hình sói', 'HN-VN', '567890 ', 'bchdjkcf@gmail.com', 0, '03:01:40pm 29/11/2023', 208, 4, 34, 0),
(123, 'abc', 'Áo phông 4D hình sói', 'HN-VN', '567890 ', 'bchdjkcf@gmail.com', 0, '03:31:40pm 29/11/2023', 208, 4, 34, 0),
(124, 'abc', 'Áo phông 4D hình sói', 'HN-VN', '567890 ', 'bchdjkcf@gmail.com', 0, '03:34:35pm 29/11/2023', 208, 0, 34, 0),
(125, 'abc', 'Áo Thun nam ngắn tay ', 'HN-VN', '567890 ', 'bchdjkcf@gmail.com', 0, '03:35:32pm 29/11/2023', 200, 0, 34, 0),
(126, 'abc', 'Áo Thun nam ngắn tay ', 'HN-VN', '567890 ', 'bchdjkcf@gmail.com', 0, '05:15:54am 30/11/2023', 200, 0, 34, 0),
(128, 'MONO', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'mono@gmail.com', 0, '04:49:23am 01/12/2023', 208, 4, 1, 0),
(129, 'MONO', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'mono@gmail.com', 0, '05:04:11am 01/12/2023', 208, 4, 1, 0),
(130, 'MONO', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'mono@gmail.com', 0, '05:11:54am 01/12/2023', 208, 0, 1, 0),
(131, 'MONO', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'mono@gmail.com', 0, '09:39:05am 01/12/2023', 4576, 0, 1, 0),
(132, 'MONO', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'mono@gmail.com', 0, '09:39:17am 01/12/2023', 208, 0, 1, 0),
(133, 'MONO', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'mono@gmail.com', 0, '11:27:32am 01/12/2023', 606, 0, 1, 0),
(134, 'MONO', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'mono@gmail.com', 0, '11:32:22am 01/12/2023', 208, 0, 1, 0),
(137, 'MONO', 'Áo sơ mi quốc dân', 'Hà Nội', '0987654321', 'mono@gmail.com', 0, '11:34:57am 01/12/2023', 199, 0, 1, 0),
(140, 'admin', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'test@gmail.com', 0, '11:46:28am 01/12/2023', 208, 0, 2, 0),
(142, 'admin', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'test@gmail.com', 0, '12:02:52pm 01/12/2023', 208, 0, 2, 0),
(144, 'admin', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'test@gmail.com', 0, '12:04:03pm 01/12/2023', 208, 0, 2, 0),
(145, 'admin', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'test@gmail.com', 0, '12:05:26pm 01/12/2023', 208, 0, 2, 0),
(146, 'admin', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'test@gmail.com', 0, '12:05:58pm 01/12/2023', 208, 0, 2, 0),
(147, 'admin', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'test@gmail.com', 0, '12:06:38pm 01/12/2023', 208, 0, 2, 0),
(148, 'admin', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'test@gmail.com', 0, '12:27:59pm 01/12/2023', 208, 0, 2, 0),
(149, 'admin', 'Áo phông 4D hình sói', 'Hà Nội', '0987654321', 'test@gmail.com', 0, '12:37:56pm 01/12/2023', 624, 0, 2, 0),
(150, 'MONO', 'Quần Jean Nam Đen ', 'Hà Nội', '0987654321', 'mono@gmail.com', 0, '05:38:24pm 01/12/2023', 370, 0, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(17, 'hello', 1, 8, '09:30:56am 20/11/2023'),
(20, 'ok', 1, 8, '09:36:08am 20/11/2023'),
(22, 'Bạn ấy đẹp quá', 1, 13, '09:41:20am 20/11/2023'),
(41, 'hbjsmdjcd', 1, 11, '03:28:21am 27/11/2023'),
(42, 'fhjd', 1, 11, '03:33:11am 27/11/2023'),
(43, 'jhcch', 1, 11, '03:33:37am 27/11/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `tk_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `cart_img` varchar(255) NOT NULL,
  `cart_name` varchar(255) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_soluong` int(11) NOT NULL,
  `cart_thanhtien` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`cart_id`, `tk_id`, `sp_id`, `cart_img`, `cart_name`, `cart_price`, `cart_soluong`, `cart_thanhtien`, `bill_id`) VALUES
(69, 34, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 116),
(70, 34, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 116),
(71, 34, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 2, 416, 117),
(72, 34, 12, 'upload/ao-thun-marvel-craft-logo-graphic-xanh-la-1_43.webp', 'Áo Thun nam ngắn tay ', 200, 1, 200, 119),
(73, 34, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 119),
(74, 34, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 120),
(75, 34, 12, 'upload/ao-thun-marvel-craft-logo-graphic-xanh-la-1_43.webp', 'Áo Thun nam ngắn tay ', 200, 2, 400, 121),
(76, 34, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 122),
(77, 34, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 123),
(78, 34, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 124),
(79, 34, 12, 'upload/ao-thun-marvel-craft-logo-graphic-xanh-la-1_43.webp', 'Áo Thun nam ngắn tay ', 200, 1, 200, 125),
(80, 34, 12, 'upload/ao-thun-marvel-craft-logo-graphic-xanh-la-1_43.webp', 'Áo Thun nam ngắn tay ', 200, 1, 200, 126),
(81, 1, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 128),
(82, 1, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 129),
(83, 1, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 130),
(84, 1, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 22, 4576, 131),
(85, 1, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 132),
(86, 1, 19, 'upload/home-img-1.jpg', 'Áo sơ mi quốc dân', 199, 1, 199, 133),
(87, 1, 19, 'upload/home-img-1.jpg', 'Áo sơ mi quốc dân', 199, 1, 199, 133),
(88, 1, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 133),
(89, 1, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 134),
(90, 1, 19, 'upload/home-img-1.jpg', 'Áo sơ mi quốc dân', 199, 1, 199, 137),
(91, 2, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 140),
(92, 2, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 142),
(93, 2, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 144),
(94, 2, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 145),
(95, 2, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 146),
(96, 2, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 147),
(97, 2, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 148),
(98, 2, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 149),
(99, 2, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 149),
(100, 2, 11, 'upload/aosoi.jpg', 'Áo phông 4D hình sói', 208, 1, 208, 149),
(101, 1, 7, 'upload/quanjeanxin.jpg', 'Quần Jean Nam Đen ', 370, 1, 370, 150);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `dm_id` int(11) NOT NULL,
  `dm_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`dm_id`, `dm_name`) VALUES
(1, 'Áo Thun'),
(2, 'Quần jean baggy'),
(4, 'Áo Sơ Mi'),
(6, 'Áo Phông'),
(7, 'Quần Tây'),
(8, 'Quần Bò Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `sp_id` int(11) NOT NULL,
  `sp_name` varchar(255) NOT NULL,
  `sp_price` int(11) NOT NULL,
  `sp_quantity` int(10) NOT NULL DEFAULT 0,
  `sp_img` varchar(255) NOT NULL,
  `sp_gia_moi` int(11) NOT NULL,
  `sp_mota` text NOT NULL,
  `sp_luotxem` int(11) NOT NULL,
  `dm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`sp_id`, `sp_name`, `sp_price`, `sp_quantity`, `sp_img`, `sp_gia_moi`, `sp_mota`, `sp_luotxem`, `dm_id`) VALUES
(5, 'Quần Tây Aristino ATR00303', 330, 0, 'quantay.webp', 599, 'FORM DÁNG: Regular Fit\r\nTHIẾT KẾ:\r\n- Quần âu phom Regular fit suông nhẹ, phù hợp với nhiều dáng người\r\n- Màu sắc trung tính, dễ kết hợp trang phục khác, đường nét cắt may tinh tế, đơn giản nhưng vẫn đem lại diện mạo lịch lãm và nổi bật cho các quý ông.\r\nCHẤT LIỆU:\r\n- 100% Polyester giúp quần bền màu, sắc nét và độ trơn trượt, mỏng nhẹ', 11, 7),
(7, 'Quần Jean Nam Đen ', 370, 20, 'quanjeanxin.jpg', 699, 'Quần Jean Nam Kenta cơ bản với chất lượng cao cấp, đường may sắc nét từng chi tiết, form slimfit vừa vặn và thoải mái, nhẹ nhàng khi mặc. Dễ dàng phối với mọi trang phục, chiếc quần Jean Kenta sẽ tạo cho bạn cảm giác tự tin nhất khi mặc với mức giá cực kì hợp lý.\r\nChất liệu: denim co giãn thoải mái, mịn mát, bền màu.', 17, 2),
(8, 'Áo sơ mi nam bamboo ', 500, 0, 'home-img-2.jpg', 600, 'Áo được thiết kế theo form regular fit ôm dáng vừa phải giúp cho những hoạt động đều có thể diễn ra thoải mái, kể cả bạn có dáng người cân đối hay hơi to vòng hai một chút thì lúc lên dáng vẫn rất đẹp. Chiếc áo sẽ giúp body của bạn tôn lên một cách tối đa tạo cảm giác dáng người mặc cân đối và mạnh mẽ hơn rất nhiều.\r\nÁo sơ mi nam sử dụng nguyên liệu bamboo cao cấp tạo cảm giác thoáng mát - ít nhăn - thấm hút mồ hôi.\r\nNgoài ra, item này cũng không quá kén khi có thể phối được với nhiều item khác trong tủ đồ của bạn.', 55, 4),
(11, 'Áo phông 4D hình sói', 208, 30, 'aosoi.jpg', 350, 'Chất liệu vải: Áo phông chất lượng cao thường được làm từ vải cotton 100% hoặc hỗn hợp với các loại vải khác như polyester để cải thiện độ bền và khả năng chống nhăn.\r\nĐộ mềm mại và thoáng khí: Vải được chọn có thể tạo cảm giác thoải mái khi mặc và có khả năng thoát mồ hôi tốt.\r\nĐộ phân giải cao: Kỹ thuật in 4D đòi hỏi độ phân giải cao để tái tạo hình ảnh chất lượng và sắc nét.\r\nChất lượng mực in: Sử dụng mực in chất lượng cao để đảm bảo màu sắc sống động và không bị phai nát sau thời gian sử dụng.\r\nSắc nét và sống động: Màu sắc của hình sói in 4D cần phải rõ ràng, sống động, và không bị chệch màu.\r\nChất lượng hình in 4D: Hình in sói 4D nên có độ chi tiết cao và chất lượng ấn tượng để tạo ra ấn tượng mạnh mẽ.\r\nChính xác kích thước và vị trí in: Hình in cần phải được đặt ở vị trí chính xác trên áo và có kích thước hợp lý.', 76, 6),
(12, 'Áo Thun nam ngắn tay ', 200, 10, 'ao-thun-marvel-craft-logo-graphic-xanh-la-1_43.webp', 100, 'Áo thun được thiết kế có bo tròn ở tay và dùng các chất liệu co giãn tốt, độ thông thoáng cao. Sau sự lịch lãm của những chiếc áo sơ mi thì áo thun được đánh giá về sự chỉn chu, lịch sự nhưng vẫn thể hiện được phong cách năng động và trẻ trung.', 6, 1),
(13, 'Áo sơ mi nam cotton basic', 300, 0, 'home-img-3.jpg', 200, 'Văn học trong tất cả các hình thức của nó có thể được coi là hồ sơ bằng văn bản, cho dù bản thân văn học là thực tế hay hư cấu, vẫn hoàn toàn có thể giải mã các sự kiện thông qua những thứ như hành động và lời nói của nhân vật hoặc phong cách viết của tác giả và hàm ý đằng sau các từ ngữ.', 9, 4),
(14, 'Áo sơ mi nam bamboo ', 300, 0, 'somi.webp', 900, 'Áo được thiết kế theo form regular fit ôm dáng vừa phải giúp cho những hoạt động đều có thể diễn ra thoải mái, kể cả bạn có dáng người cân đối. Chiếc áo sẽ giúp body của bạn tôn lên một cách tối đa tạo cảm giác dáng người mặc cân đối và mạnh mẽ hơn rất nhiều.\r\nÁo sơ mi nam sử dụng nguyên liệu bamboo cao cấp tạo cảm giác thoáng mát - ít nhăn - thấm hút mồ hôi.', 0, 4),
(19, 'Áo sơ mi quốc dân', 199, 10, 'home-img-1.jpg', 200, 'Chất vải co giãn nhẹ, mềm mại, ít nhăn tạo sự thoải mái cho người sử dụng, không ra màu, giặt máy thoải mái con gà mái!!!\r\n\r\nÁo có co giãn nhẹ nên mặc cực kì thoải mái nhé.\r\n\r\nMàu sắc, họa tiết rõ nét 100% giống ảnh mẫu.', 0, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `tk_id` int(11) NOT NULL,
  `tk_name` varchar(255) NOT NULL,
  `tk_pass` varchar(50) NOT NULL,
  `tk_email` varchar(255) NOT NULL,
  `tk_tel` varchar(10) NOT NULL,
  `tk_address` varchar(255) NOT NULL,
  `tk_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`tk_id`, `tk_name`, `tk_pass`, `tk_email`, `tk_tel`, `tk_address`, `tk_role`) VALUES
(1, 'MONO', '123456', 'mono@gmail.com', '0987654321', 'Hà Nội', 0),
(2, 'admin', '123456', 'test@gmail.com', '0987654321', 'Hà Nội', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`dm_id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `lk_sanpham_danhmuc` (`dm_id`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`tk_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `tk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`dm_id`) REFERENCES `danh_muc` (`dm_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
