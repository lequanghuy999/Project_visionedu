-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 10:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `images_admin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`, `images_admin`) VALUES
(2, 'Quách Thùy Dương', 'Huytakazy555@gmail.com', '123456', 'images/duong.JPG'),
(4, 'Lê Quang huy', 'khongthaydoi124@gmail.com', '123456', 'images/vit-avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `advise`
--

CREATE TABLE `advise` (
  `id` int(100) UNSIGNED NOT NULL,
  `name_st` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` decimal(50,0) NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `abroad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advise`
--

INSERT INTO `advise` (`id`, `name_st`, `phone`, `city`, `abroad`, `info`) VALUES
(6, 'Lê Quang Huy', '969608810', 'Hà Nội', 'Du học Hàn Quốc', 'Tư vấn cho em về du học Nhật bản'),
(7, 'Quách Thùy Dương', '969608810', 'Ninh Bình', 'Du học Trung Quốc', 'Tư vấn cho em về du học Trung Quốc'),
(11, 'Quách Thùy Dương', '969608810', 'Ninh Bình', 'Du học Trung Quốc', 'Tư vấn cho em về du học Trung Quốc');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `des`) VALUES
(22, 'Du học Nhật Bản', 'Thông tin về các khóa du học nhật bản và các trường đại học nhận học sinh du học.'),
(23, 'Du học Hàn Quốc', 'Thông tin các khóa học tại Hàn Quốc.'),
(24, 'Tin chính Du học Nhật Bản', 'Tin chính đầu trang Du học Nhật Bản'),
(25, 'Tin chính Du học Hàn Quốc', 'Tin chính Du học Hàn Quốc.'),
(26, 'Tin chính Du học CHLB Đức', 'Tin chính Du học CHLB Đức'),
(27, 'Ảnh quảng cáo Du học Nhật Bản', 'Ảnh quảng cáo Du học Nhật Bản'),
(28, 'Ảnh quảng cáo Du học Hàn Quốc', 'Ảnh quảng cáo Du học Hàn Quốc'),
(29, 'Du Học CHLB Đức ', 'Thông tin các khóa Du Học CHLB Đức '),
(30, 'Ảnh quảng cáo Du học CHLB Đức', 'Ảnh quảng cáo Du học CHLB Đức'),
(31, 'Tin chính Du học Trung Quốc', 'Tin chính Du học Trung Quốc'),
(32, 'Du học Trung Quốc', 'Du học Trung Quốc'),
(33, 'Ảnh quảng cáo Du học Trung Quốc', 'Ảnh quảng cáo Du học Trung Quốc'),
(34, 'Tin chính Du học Đài Loan', 'Tin chính Du học Đài Loan'),
(35, 'Du học Đài Loan', 'Du học Đài Loan'),
(36, 'Ảnh quảng cáo Du học Đài Loan', 'Ảnh quảng cáo Du học Đài Loan');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `category`, `thumbnail`, `email`) VALUES
(28, ' GIỚI THIỆU VỀ TRƯỜNG NGOẠI NGỮ HESED - TRƯỜNG NHẬT NGỮ.', 'Trường ngoại ngữ Hesed là trường Nhật ngữ được Bộ Tư Pháp Nhật Bản chứng nhận nhằm giúp sinh viên nước ngoài học tiếng Nhật', '2021-08-31', 'Du học Nhật Bản', 'jpstudy-2.jpg', ''),
(29, 'Vì sao Y học Nhật Bản được cả thế giới đánh giá cao!', 'Với tuổi thọ trung bình 83,7 tuổi - mức tuổi thọ cao nhất thế giới , Nhật Bản nổi tiếng là đất nước có nền y học và điều kiện', '2021-08-28', 'Du học Nhật Bản', 'jpstudy-3.jpg', ''),
(30, 'GIỚI THIỆU VỀ TRƯỜNG NGOẠI NGỮ HESED - TRƯỜNG NHẬT NGỮ.', 'Trường ngoại ngữ Hesed là trường Nhật ngữ được Bộ Tư Pháp Nhật Bản chứng nhận nhằm giúp sinh viên nước ngoài học tiếng Nhật', '2021-08-05', 'Du học Nhật bản', 'jpstudy-4.jpg', ''),
(31, 'TOP 30 TRƯỜNG ĐẠI HỌC HÀN QUỐC LỌT VÀO TẦM NGẮM CỦA DU HỌC', 'Nhắc đến Hàn Quốc, người Việt đã không còn xa lạ với: canh kim chi, rượu soju, áo hanbok... Nền giáo dục của đất nước này cũng', '2021-08-03', 'Du học Hàn Quốc', 'krstudy-2.jpg', ''),
(32, 'DU HỌC HÀN QUỐC NGÀNH ẨM THỰC - CƠ HỘI VIỆC LÀM VÀ ĐỊNH CƯ', 'Toàn bộ thủ tục, quá trình đăng kí du học bạn chỉ mất khoảng 150 đến 200 triệu đồng. Đây là một số khiêm tốn so với', '2021-08-18', 'Du học Hàn Quốc', 'krstudy-3.jpg', ''),
(33, 'NHỮNG ĐIỂM KHÁC BIỆT CỦA GIÁO DỤC HÀN QUỐC', 'Học sinh Hàn Quốc học 16 giờ một ngày, nghỉ một thứ bảy trong tháng, thường ăn tối ở trường cà vẫn phải chịu những hình phạt', '2021-08-09', 'Du học Hàn Quốc', 'krstudy-4.jpg', ''),
(34, 'CÁC LOẠI VISA DU HỌC CHLB ĐỨC', 'Để được du hohc tại Đức hay bất kỳ quốc gia nào khác bạn đều phải có visa mới được phép nhập cảnh và ở lại. Theo luật cư trú của Đức vì Visa là một thủ tục bắt buộc đối với các', '2021-08-10', 'Tin chính Du học CHLB Đức', 'gestudy-1.png', ''),
(35, 'THÔNG BÁO KHAI GIẢNG LỚP TIẾNG NHẬT SƠ CẤP 1', 'Sau thời gian tạm dừng do dịch bệnh, Du học Vision Edu tiếp tục tổ chức thêm lớp học tiếng Nhật tại Hà Nội giúp các bạn học sinh, sinh viên tiếp tục học tiếng và bổ sung các', '2021-08-10', 'Tin chính Du học Nhật Bản', 'jpstudy-1.jpg', ''),
(36, 'VISION GROUP TUYỂN SINH DU HỌC HÀN QUỐC KỲ THÁNG 6/2020 - PHÍ TRỌN GÓI CHỈ TỪ 6.000$', 'Tự hào là đại diện tuyển sinh uy tín của nhiều trường Đại học, Cao đẳng lớn của Hàn Quốc, Vision Group chính thức thông báo tuyển sinh du học Hàn Quốc kỳ tháng 6/2020 như sau:', '2021-08-10', 'Tin chính Du học Hàn Quốc', 'krstudy-1.jpg', ''),
(37, 'Ảnh chính Du học Nhật Bản.', 'Ảnh chính Du học Nhật Bản.', '2021-08-10', 'Ảnh quảng cáo Du học Nhật Bản', 'jpstudy-5.gif', ''),
(38, 'Ảnh quảng cáo Du học Hàn Quốc', 'Ảnh quảng cáo Du học Hàn Quốc', '2021-08-10', 'Ảnh quảng cáo Du học Hàn Quốc', 'krstudy-5.gif', ''),
(39, 'DU HỌC NGÀNH CƠ KHÍ ĐIỆN TỬ TẠI ĐỨC - BƯỚC CHÂN RA KHỎI TỤT HẬU', 'Du học nghề cơ khí điện tử tại Đức là cơ hội để bạn làm việc với các công ty sản xuất hàng đầu của chính phử Đức như Siemen,', '2021-08-03', 'Du Học CHLB Đức ', 'gestudy-2.jpg', ''),
(40, 'DU HỌC ĐỨC: CON ĐƯỜNG ĐẠI HỌC VÀ THẠC SĨ CỦA NHIỀU BẠN TRẺ', 'Theo thống kê, Đức đứng thứ 3 thế giới về số lượng học sinh, sinh viên quốc tế đến nhập học, chỉ sau Mỹ và Anh. Với chất lượng đào tạo', '2021-08-09', 'Du Học CHLB Đức ', 'gestudy-3.jpg', ''),
(41, 'DU HỌC ĐỨC VÀO TOP CÁC TRƯỜNG ĐẠI HỌC HOT NHẤT 2019', 'Trong năm 2018, CHLB ĐỨc có 26 trường đại học nằm trong bảng xếp hạng 250 trường tốt nhất thế giới của THE. và năm nay, con', '2021-08-17', 'Du Học CHLB Đức ', 'gestudy-4.jpg', ''),
(42, 'Ảnh quảng cáo Du học CHLB Đức', 'Ảnh quảng cáo Du học CHLB Đức', '2021-08-02', 'Ảnh quảng cáo Du học CHLB Đức', 'gestudy-5.gif', ''),
(44, 'KINH NGHIỆM DU HỌC TRUNG QUỐC MÀ DU HỌC SINH CẦN NẮM RÕ', 'Trung Quốc hiện là một trong những điểm đến hấp dẫn cho sinh viên nước ngoài, trong đó có Việt Nam. Nếu như nói ở các nước Phương Tây chi phí đi lại, tiêu dùng hàng ngày đắt', '2020-10-30', 'Tin chính Du học Trung Quốc', 'chinastudy-1.jpg', ''),
(45, ' MUỐN ĐI DU HỌC TRUNG QUỐC CẦN ĐÁP ỨNG ĐIỀU KIỆN NÀO?', 'Bạn có ý định và đang tìm hiểu về du học Trung Quốc nhưng chưa rõ về các điều kiện để có thể đi du học nước này. Hãy cùng Vision', '2020-10-29', 'Du học Trung Quốc', 'chinastudy-2.jpg', ''),
(46, '4/10 TRƯỜNG ĐẠI HỌC TỐT NHẤT CHÂN Á THUỘC VỀ TRUNG QUỐC', 'Không thể phủ nhận một thực tế: giáo dục Trung Quốc với nền tảng chắc chắn từ xưa, công thêm việc nhanh nhạy với thời đại đã', '2020-10-14', 'Du học Trung Quốc', 'chinastudy-3.jpg', ''),
(47, ' ĐIỂM DANH 24 TRƯỜNG ĐẠI HỌC LỚN NHẤT TRUNG QUỐC KHIẾN AI CŨNG', 'Nếu có dịp ghé thăm 24 trường đại học dưới đây của Trung Quốc, chắc chắn các bạn sẽ không khỏi ngỡ ngàng, choáng ngợp trước', '2020-10-22', 'Du học Trung Quốc', 'chinastudy-4.jpg', ''),
(48, 'Ảnh quảng cáo Du học Trung Quốc', 'Ảnh quảng cáo Du học Trung Quốc', '2020-10-28', 'Ảnh quảng cáo Du học Trung Quốc', 'chinastudy-5.gif', ''),
(49, 'DU HỌC ĐÀI LOAN TRỌN GÓI 55 TRIỆU TẠI VISION EDU', 'Đài Loan là một trong những nước có nền giáo dục tiên tiến cới nhiều trường thuộc hàng top trên thế giới. Dù vậy nhưng Đài Loan cũng là một trong những quốc gia có mức học phí', '2020-11-02', 'Tin chính Du học Đài Loan', 'dailoanstudy-1.jpg', ''),
(50, 'DU HỌC ĐÀI LOAN VÀ NHỮNG ĐIỀU CẦN BIẾT', 'Đài Loan là một hòn đảo xinh đẹp thuộc khu vực Đông Á, có khí hậu ôn hòa, nền ẩm thực phong phú và đa dạng cùng nhiều địa', '2020-10-16', 'Du học Đài Loan', 'dailoanstudy-2.png', ''),
(51, ' TUYỂN SINH DU HỌC ĐÀI LOAN NĂM 2020 CHO TẤT CẢ CÁC BẬC HỌC', 'Đài Loan cung cấp cho sinh viên quốc tế các chương trình học đa dạng từ chương trình Ngôn ngữ, Đại học, Thạc Sỹ cho đến Tiến sỹ.', '2019-10-10', 'Du học Đài Loan', 'dailoanstudy-3.jpg', ''),
(52, ' DU HỌC ĐÀI LOAN VÀ 3 ĐIỂM CỘNG KHÔNG THỂ BỎ QUA!', 'Hiện nay, du học Đài Loan hấp dẫn du học sinh không chỉ bởi học phí thấp, mà còn có khả năng xin được học bổng.', '2020-06-24', 'Du học Đài Loan', 'dailoanstudy-4.jpg', ''),
(53, 'Ảnh quảng cáo Du học Đài Loan', 'Ảnh quảng cáo Du học Đài Loan', '2020-10-13', 'Ảnh quảng cáo Du học Đài Loan', 'dailoanstudy-5.gif', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advise`
--
ALTER TABLE `advise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `advise`
--
ALTER TABLE `advise`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
