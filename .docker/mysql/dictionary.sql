-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 08, 2021 at 09:57 AM
-- Server version: 8.0.25
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dictionary`
--

-- --------------------------------------------------------

--
-- Table structure for table `baoche`
--

CREATE TABLE `baoche` (
  `MaBaoChe` int NOT NULL,
  `PPBC` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `baoche`
--

INSERT INTO `baoche` (`MaBaoChe`, `PPBC`, `updated_at`, `created_at`) VALUES
(1, 'Thuốc sắc', NULL, NULL),
(2, 'Trà thuốc', NULL, NULL),
(3, 'Viên hoàn', NULL, NULL),
(4, 'Thuốc tán', NULL, NULL),
(5, 'Cốm', NULL, NULL),
(6, 'Ngâm rượu', NULL, NULL),
(7, 'Cao thuốc', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `benhdanh`
--

CREATE TABLE `benhdanh` (
  `MaBD` int NOT NULL,
  `TenBD` varchar(255) NOT NULL,
  `NguyenNhan` text NOT NULL,
  `TheBenh` text NOT NULL,
  `Phap` text NOT NULL,
  `MaPT` int NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `benhdanh`
--

INSERT INTO `benhdanh` (`MaBD`, `TenBD`, `NguyenNhan`, `TheBenh`, `Phap`, `MaPT`, `updated_at`, `created_at`) VALUES
(1, 'Ác lộ', 'Sau khi sinh mà ác lộ ra không dứt, không nhiều như chứng băng lậu, là do lúc sinh kinh huyết bị tổn thương, hoặc huyết hư tổn bất túc hoặc ác huyết ra không hết, huyết tốt khó yên, cùng kéo nhau ra, lâu ngày không khỏi. Biện chứng luận trị: Khí Hư: Sau khi sinh, quá thời gian bình thường mà sản dịch vẫn còn lai rai không ngừng, mầu hồng nhạt, lượng nhiều, chất dẻo dính, không có mùi hôi, có cảm giác bụng dưới trệ xuống, tinh thần mỏi mệt, chất lưỡi hồng nhạt, rêu lưỡi bình thường, mạch Hoãn nhược', 'Khí hư, huyết nhiệt, huyết ứ', 'Dưỡng âm, thanh nhiệt, lương huyết, chỉ huyết', 2, NULL, NULL),
(2, 'Âm lãnh', 'Chứng này phát sinh do Thận dương suy yếu, hoặc do ngoại cảm hàn tà, hàn ngưng ở Can kinh gây nên bệnh. hoặc do Can kinh bị thấp nhiệt ngăn trở cơ quan sinh dục không được nuôi dưỡng gây nên chứng âm lãnh', 'Dương hư, Hàn trệ can mạch, Can kinh thấp nhiệt ngăn trở dương khí', 'Bổ ích Thận khí, ôn tán hàn tà', 5, NULL, NULL),
(3, 'Bạch sương, Ngân tiêu bệnh', 'Vùng tổn thương lõm như đồng tiền lớn, bên trong mầu hồng bên ngoài mầu trắng, châm kim vào không chảy ra máu, chảy ra nước mầu trắng như mầu bạc. Lúc đầu phát ra ở cơ thể rồi sau đó phát ở mặt', 'Phong nhiệt, Phong huyết táo, Phong hàn', 'Tư âm nhuận táo, thanh nhiệt, khu phong', 1, NULL, NULL),
(4, 'Chân tâm thống', 'Xúc động mạnh, chấn thương tinh thần, chấn thương do tai nạn hay phẫu thuật, sốc, máu đông nhanh, ăn no quá, dùng sức quá nhiều, thời tiết lạnh đột ngột... ', 'Khí hư huyết ứ, Khí âm lưỡng hư, Âm hư dương thịnh', 'Tư tâm, tiềm dương', 3, NULL, NULL),
(5, 'Đàm trệ', 'Do suy giảm thể chất ở người cao tuổi: Sau tuổi trung niên thận khí thường bị suy giảm. Hóa bất sinh thổ, tỳ mất kiện vận, làm cho tân dịch bị đình ngưng, dẫn đến thấp trọc nội sinh, dần hình thành đàm thấp mà dẫn tới chứng đàm trệ', 'Tiên thiên bất túc, Ẩm thực thái quá', 'Tư tâm, tiềm dương', 6, NULL, NULL),
(6, 'Tảo tiết', 'Do suy giảm thể chất ở người cao tuổi: Sau tuổi trung niên thận khí thường bị suy giảm. Hóa bất sinh thổ, tỳ mất kiện vận, làm cho tân dịch bị đình ngưng, dẫn đến thấp trọc nội sinh, dần hình thành đàm thấp mà dẫn tới chứng béo phì', 'Thận khí hư, Thận dương hư, Tâm thận bất giao, Âm hư', 'Tư âm giáng hỏa', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `MaDG` int NOT NULL,
  `ChatLuongTN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MucDoSD` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TocDoTT` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GiaoDien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ThoiGianVH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BoCucTB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`MaDG`, `ChatLuongTN`, `MucDoSD`, `TocDoTT`, `GiaoDien`, `ThoiGianVH`, `BoCucTB`, `updated_at`, `created_at`) VALUES
(1, 'Chưa hài lòng', 'Hài lòng', NULL, 'Tốt', 'Tốt', 'Tốt', '2021-06-06 20:25:17', '2021-06-06 20:25:17'),
(2, 'Chưa hài lòng', 'Hài lòng', NULL, 'Tốt', 'Tốt', 'Tốt', '2021-06-06 20:25:49', '2021-06-06 20:25:49'),
(3, 'Chưa hài lòng', 'Hài lòng', '', 'Tốt', 'Tốt', 'Tốt', '2021-06-06 20:26:05', '2021-06-06 20:26:05'),
(4, 'Hài lòng', 'Hài lòng', 'Tốt', 'Tốt', 'Rất hài lòng', 'Tốt', '2021-06-07 18:23:17', '2021-06-07 18:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `gopy`
--

CREATE TABLE `gopy` (
  `MaGY` int NOT NULL,
  `MaTN` int NOT NULL,
  `TenTN` varchar(255) NOT NULL,
  `LoaiTN` varchar(50) NOT NULL,
  `DoiTuongGY` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `NoiDungGY` text NOT NULL,
  `TrangThai` int NOT NULL DEFAULT '0',
  `MaQTV` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gopy`
--

INSERT INTO `gopy` (`MaGY`, `MaTN`, `TenTN`, `LoaiTN`, `DoiTuongGY`, `NoiDungGY`, `TrangThai`, `MaQTV`, `updated_at`, `created_at`) VALUES
(5, 1, 'Dưỡng huyết nhuận phu ẩm gia giảm', 'Phương Thang', 'test knh', 'test knh', 0, NULL, '2021-06-07 18:33:27', '2021-06-07 18:25:47'),
(6, 1, 'Dưỡng huyết nhuận phu ẩm gia giảm', 'Phương Thang', 'dam tre', 'dam tre', 1, NULL, '2021-06-07 18:33:24', '2021-06-07 18:29:32'),
(7, 5, 'Trịnh thanh', 'Thuật Ngữ Khác', 'trinh thanh', 'trinh thanh', 1, NULL, '2021-06-07 18:33:21', '2021-06-07 18:32:48'),
(8, 3, 'Hải mã', 'Vị Thuốc', 'hai ma', 'hai ma', 0, NULL, '2021-06-07 18:33:10', '2021-06-07 18:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `phuongthang`
--

CREATE TABLE `phuongthang` (
  `MaPT` int NOT NULL,
  `TenPT` varchar(255) NOT NULL,
  `MaBaoChe` int NOT NULL,
  `TacDung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `LieuLuong` varchar(255) NOT NULL,
  `KiengKi` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phuongthang`
--

INSERT INTO `phuongthang` (`MaPT`, `TenPT`, `MaBaoChe`, `TacDung`, `LieuLuong`, `KiengKi`, `updated_at`, `created_at`) VALUES
(1, 'Dưỡng huyết nhuận phu ẩm gia giảm', 1, 'Phương thuốc này thích hợp với những người tuổi già hoặc những người thể chất hơi yếu mà da dẻ khô táo, ngứa ngáy, ban đêm ngứa nhiều hơn, vết cào gãi rải rác, da dẻ sần sùi mập dầy; đồng thời kèm hiện tượng sắc mặt không tươi sáng, dễ mệt mỏi, thường hay hồi hộp, trong lòng phiền muộn, giấc ngủ không ngon, chất lưỡi nhạt, rêu lưỡi mỏng trắng. Phương này chủ yếu lấy loại dược vật tư dưỡng âm huyết làm chủ.', 'Ba lần một ngày', 'Có thai dùng thận trọng', NULL, NULL),
(2, 'Hạnh nhân long đởm thảo bào tán', 4, 'Thanh nhiệt, giải độc. Trị phong công lên mắt, làm cho mắt sưng đỏ (không ngứa)', 'Chia 2 lần uống.', 'Xích thược phản nhau với vị Lê lô, nên bài này không được gia vị Lê lô, gặp nhau sẽ sinh phản ứng nguy hiểm', NULL, NULL),
(3, 'Hàn Suyễn Hoàn', 3, 'Ôn Phế, hóa ẩm, bình suyễn, trị hen hàn, ho đờm nhiều màu xanh loãng', 'Trước khi đi ngủ, nuốt thuốc với nước sôi. Ngày 2–4g', 'Không', NULL, NULL),
(4, 'Thiên Ma Câu Đằng Ẩm gia giảm', 1, 'Chủ trị can dương Thượng xung gây ra can phong nội động, huyễn vựng, đau đầu, đầu lắc, giật mình, mất ngủ', 'Ngày 1 thang sắc nước chia 2 lần uống', 'Không', NULL, NULL),
(5, 'Hữu Quy Hoàn gia vị', 1, 'Ôn bổ thận dương, bổ sung tinh huyết', 'Ngày dùng 4-8 gam, có thể thay đổi liều lượng làm thuốc thang, đun sắc chia 2 lần uống.', 'Không', NULL, NULL),
(6, 'Nhị trần thang', 1, 'Táo thấp hóa đàm, lý khí hòa trun', 'Trước khi đi ngủ, nuốt thuốc với nước sôi. Ngày 1 thang', 'Không', NULL, NULL),
(7, 'Hóa tinh xung tễ', 3, 'Tư âm giáng gỏa, choáng đầu, ù tai, mồ hôi trộm, khô miệng, tiểu tiện vàng', 'Trước khi đi ngủ, nuốt thuốc với nước sôi, ngày 1 viên 9g', 'Không', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quantrivien`
--

CREATE TABLE `quantrivien` (
  `MaQTV` int NOT NULL,
  `TenQTV` varchar(100) NOT NULL,
  `Quyen` char(1) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `NgaySinh` varchar(10) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DiaChi` text NOT NULL,
  `GhiChu` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quantrivien`
--

INSERT INTO `quantrivien` (`MaQTV`, `TenQTV`, `Quyen`, `username`, `password`, `NgaySinh`, `SDT`, `Email`, `DiaChi`, `GhiChu`, `updated_at`, `created_at`) VALUES
(1, 'kaito123', '0', 'kaito', 'e140bafee350bd3ea81f5f909ee7b5f3', '02/03/2000', '0909259713', 'kaito@gmail.com', '123123', '<p>àdasfd</p>', '2021-06-08 07:20:16', '2021-06-03 20:15:37'),
(2, 'admin', '1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '06/23/2021', '0909259713', 'admin@gmail.com', 'admin', '<p>admin</p>', '2021-06-08 07:19:48', '2021-06-08 07:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `quykinh`
--

CREATE TABLE `quykinh` (
  `MaQK` int NOT NULL,
  `TenQK` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quykinh`
--

INSERT INTO `quykinh` (`MaQK`, `TenQK`, `updated_at`, `created_at`) VALUES
(1, 'Can', NULL, NULL),
(2, 'Phế', NULL, NULL),
(3, 'Tâm', NULL, NULL),
(4, 'Thận', NULL, NULL),
(5, 'Tỳ', NULL, NULL),
(6, 'Vị', NULL, NULL),
(7, 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thanhphan`
--

CREATE TABLE `thanhphan` (
  `MaTP` int NOT NULL,
  `TenTP` varchar(255) NOT NULL,
  `TyLe` varchar(255) NOT NULL,
  `MaPT` int NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `thanhphan`
--

INSERT INTO `thanhphan` (`MaTP`, `TenTP`, `TyLe`, `MaPT`, `updated_at`, `created_at`) VALUES
(1, 'Xích thược', '10g', 1, NULL, NULL),
(2, 'Bắc đậu căn', '12g', 1, NULL, NULL),
(3, 'Tật lê', '15g', 1, NULL, NULL),
(4, 'Qui đầu', '12g', 1, NULL, NULL),
(5, 'Hà thủ ô', '10g', 1, NULL, NULL),
(6, 'Thiên môn', '12g', 1, NULL, NULL),
(7, 'Đan sâm', '12g', 1, NULL, NULL),
(8, 'Sinh địa', '10g', 1, NULL, NULL),
(9, 'Thảo hà xa', '15g', 1, NULL, NULL),
(10, 'Đan bì', '12g', 1, NULL, NULL),
(11, 'Thục địa', '12g', 1, NULL, NULL),
(12, 'Bạch tiễn bì', '15g', 1, NULL, NULL),
(13, 'Đương quy', '4g', 2, NULL, NULL),
(14, 'Hạnh nhân', '4g', 2, NULL, NULL),
(15, 'Hoàng liên', '4g', 2, NULL, NULL),
(16, 'Hoạt thạch', '4g', 2, NULL, NULL),
(17, 'Long đởm thảo', '4g', 2, NULL, NULL),
(18, 'Xích thước', '4g', 2, NULL, NULL),
(19, 'Đậu sị', '10g', 3, NULL, NULL),
(20, 'Nguyên phế thạch', '10g', 3, NULL, NULL),
(21, 'Thiên ma', '10g', 4, NULL, NULL),
(22, 'Thạch quyết minh', '18g', 4, NULL, NULL),
(23, 'Hoàng cầm', '10g', 4, NULL, NULL),
(24, 'Đỗ trọng', '10g', 4, NULL, NULL),
(25, 'Tang ký sinh', '10g', 4, NULL, NULL),
(26, 'Phục thần', '10g', 4, NULL, NULL),
(27, 'Câu đằng', '10g', 4, NULL, NULL),
(28, 'Sơn chi', '12g', 4, NULL, NULL),
(29, 'Xuyên ngưu tất', '10g', 4, NULL, NULL),
(30, 'Ích mẫu', '12g', 4, NULL, NULL),
(31, 'Dạ giao đằng', '10g', 4, NULL, NULL),
(32, 'Thục địa', '8g', 5, NULL, NULL),
(33, 'Sơn dược', '4g', 5, NULL, NULL),
(34, 'Sơn thù', '3g', 5, NULL, NULL),
(35, 'Câu kỷ tử', '4g', 5, NULL, NULL),
(36, 'Đỗ trọng', '4g', 5, NULL, NULL),
(37, 'Thỏ ti tử', '4g', 5, NULL, NULL),
(38, 'Chế phụ tử', '2-6g', 5, NULL, NULL),
(39, 'Nhục quế', '2-4g', 5, NULL, NULL),
(40, 'Đương quy', '3g', 5, NULL, NULL),
(41, 'Cao sừng hươu', '4g', 5, NULL, NULL),
(42, 'Bán hạ', '8-12g', 6, NULL, NULL),
(43, 'Trần bì', '8-12g', 6, NULL, NULL),
(44, 'Phục linh', '12g', 6, NULL, NULL),
(45, 'Cam thảo', '4g', 6, NULL, NULL),
(46, 'Tri mẫu', '12g', 7, NULL, NULL),
(47, 'Đan bì', '12g', 7, NULL, NULL),
(48, 'Sinh địa', '10g', 7, NULL, NULL),
(49, 'Mạch môn', '15g', 7, NULL, NULL),
(50, 'Trạch tả', '12g', 7, NULL, NULL),
(51, 'Xích thược', '20g', 7, NULL, NULL),
(52, 'Cửu kỷ tử', '15g', 7, NULL, NULL),
(53, 'Hoàng bá', '10g', 7, NULL, NULL),
(54, 'Phục linh', '15g', 7, NULL, NULL),
(55, 'Thục địa', '30g', 7, NULL, NULL),
(56, 'Ngũ vị', '9g', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thuatngu`
--

CREATE TABLE `thuatngu` (
  `MaTN` int NOT NULL,
  `TenTN` varchar(255) NOT NULL,
  `NoiDung` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `thuatngu`
--

INSERT INTO `thuatngu` (`MaTN`, `TenTN`, `NoiDung`, `updated_at`, `created_at`) VALUES
(1, 'Ác huyết', 'Huyết xấu', NULL, NULL),
(2, 'Giải sách mạch', '1 mạch trong 7 quái mạch, biểu hiện mạch khi thưa khi nhặt, nhịp đập rối loạn, báo hiệu bệnh nguy hiểm', NULL, NULL),
(3, 'Giáng nghịch hạ khí', 'Phương pháp chữa khí của phế vị nghịch lên', NULL, NULL),
(4, 'Nội phiền', 'Nóng ở trong ngực, làm cho trong lồng ngực bồn chồn khó chịu', NULL, NULL),
(5, 'Trịnh thanh', 'Hiện tượng nói mê, nhưng chỉ nói lẩm bẩm nhỏ tiếng và lặp đi lặp lại một chuyện', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tinhvi`
--

CREATE TABLE `tinhvi` (
  `MaTV` int NOT NULL,
  `TenTV` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tinhvi`
--

INSERT INTO `tinhvi` (`MaTV`, `TenTV`, `updated_at`, `created_at`) VALUES
(1, 'chua', NULL, NULL),
(2, 'cay', NULL, NULL),
(3, 'đắng', NULL, NULL),
(4, 'mặn', NULL, NULL),
(5, 'ngọt', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vithuoc`
--

CREATE TABLE `vithuoc` (
  `MaVT` int NOT NULL,
  `TenVT` varchar(255) NOT NULL,
  `TinhVi` int NOT NULL,
  `QuyKinh` int NOT NULL,
  `TacDung` text NOT NULL,
  `UngDung` text NOT NULL,
  `LieuLuong` varchar(255) NOT NULL,
  `KiengKi` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vithuoc`
--

INSERT INTO `vithuoc` (`MaVT`, `TenVT`, `TinhVi`, `QuyKinh`, `TacDung`, `UngDung`, `LieuLuong`, `KiengKi`, `updated_at`, `created_at`) VALUES
(1, 'Đậu quyển', 5, 6, 'Thanh nhiệt giải thử', 'dùng với chứng ôn thử hoặc thấp thử hoặc cảm mạo... biểu hiện bệnh sốt cao. Có thể phối hợp với hoắc hương, uất kim, ý dĩ, hạnh nhân, bán hạ, trúc diệp, hoạt thạch', '10-20g', 'Nếu không thấp nhiệt thì không dùng', NULL, NULL),
(2, 'Dưa hấu', 5, 4, 'Thanh nhiệt lợi niệu', 'Dùng trong bệnh thấp nhiệt, hoàng đản, bụng trướng. Tiểu tiện nhiệt không thông dùng Tây qua tán. Dùng khi thướng thử, ra nhiều mồ hôi, tâm phiền, miệng khát', '40-100g', 'Không dùng cho thể tỳ vị hư hàn và bệnh hàn thấp', NULL, NULL),
(3, 'Hải mã', 5, 2, 'Ôn thận tráng dương', 'Dùng cho nam, nữ thận dương suy kém dẫn đến liệt dương hoặc vô sinh ở nữ. Lấy một đôi cá ngựa (một đực, một cái), sấy khô vàng, tán bột, ngày uống 3 lần, mỗi lần 1g', '4-12g', 'Không', NULL, NULL),
(4, 'Kim ngân hoa', 3, 2, 'Lương huyết chỉ huyết, thanh thấp nhiệt, thanh giải biểu nhiệt', 'Kim ngân hoa sao vàng sém cạnh chữa tiểu tiện ra máu. Có thể dùng trong các trường hợp ngoại cảm phong nhiệt, ôn nhiệt sơ khởi, thướng phối với liên kiều, bạc hà, kinh giới', '12-20g', 'Những người thể hư hàn, hoặc những trường hợp mụn nhọt đã có mủ vỡ loét không nên dùng', NULL, NULL),
(5, 'Tiền hồ', 5, 6, 'Thanh phế chỉ khái, nhiều đàm vàng, đau ngực', 'Có thể phối hợp với tang bạch bì, bối mẫu, mạch môn đông, hạnh nhân, cam thảo, sinh khương (Tiền hồ tán) để chữa ho do phế nhiệt, đàm dính', '8-12g', 'Không dùng cho thể âm hư dẫn đến ho khan, hặc ho đàm hàn, loãng', NULL, NULL),
(6, 'Vân mẫu thạch', 5, 1, 'Bổ thận, thu liễm cầm huyết', 'Dùng khi mệt nhọc hư tổn, chóng mặt hồi hộp, động kinh, chứng hàn sốt rét lâu ngày, ung nhọt sưng đau, chảy máu do vết thương dao', '10-20g', 'Dùng ngoài không kể liều lượng, nghiền bột đắp chỗ đau', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baoche`
--
ALTER TABLE `baoche`
  ADD PRIMARY KEY (`MaBaoChe`);

--
-- Indexes for table `benhdanh`
--
ALTER TABLE `benhdanh`
  ADD PRIMARY KEY (`MaBD`),
  ADD KEY `fk_benhdanh_MaPT` (`MaPT`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`MaDG`);

--
-- Indexes for table `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`MaGY`),
  ADD KEY `fk_gopy_MaQTV` (`MaQTV`);

--
-- Indexes for table `phuongthang`
--
ALTER TABLE `phuongthang`
  ADD PRIMARY KEY (`MaPT`),
  ADD KEY `fk_phuongthang_MaBaoChe` (`MaBaoChe`);

--
-- Indexes for table `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD PRIMARY KEY (`MaQTV`);

--
-- Indexes for table `quykinh`
--
ALTER TABLE `quykinh`
  ADD PRIMARY KEY (`MaQK`);

--
-- Indexes for table `thanhphan`
--
ALTER TABLE `thanhphan`
  ADD PRIMARY KEY (`MaTP`),
  ADD KEY `fk_thanhphan_MaPT` (`MaPT`);

--
-- Indexes for table `thuatngu`
--
ALTER TABLE `thuatngu`
  ADD PRIMARY KEY (`MaTN`);

--
-- Indexes for table `tinhvi`
--
ALTER TABLE `tinhvi`
  ADD PRIMARY KEY (`MaTV`);

--
-- Indexes for table `vithuoc`
--
ALTER TABLE `vithuoc`
  ADD PRIMARY KEY (`MaVT`),
  ADD KEY `fk_vithuoc_QuyKinh` (`QuyKinh`),
  ADD KEY `fk_vithuoc_TinhVi` (`TinhVi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baoche`
--
ALTER TABLE `baoche`
  MODIFY `MaBaoChe` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `benhdanh`
--
ALTER TABLE `benhdanh`
  MODIFY `MaBD` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `MaDG` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gopy`
--
ALTER TABLE `gopy`
  MODIFY `MaGY` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `phuongthang`
--
ALTER TABLE `phuongthang`
  MODIFY `MaPT` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quantrivien`
--
ALTER TABLE `quantrivien`
  MODIFY `MaQTV` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quykinh`
--
ALTER TABLE `quykinh`
  MODIFY `MaQK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `thanhphan`
--
ALTER TABLE `thanhphan`
  MODIFY `MaTP` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `thuatngu`
--
ALTER TABLE `thuatngu`
  MODIFY `MaTN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tinhvi`
--
ALTER TABLE `tinhvi`
  MODIFY `MaTV` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vithuoc`
--
ALTER TABLE `vithuoc`
  MODIFY `MaVT` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `benhdanh`
--
ALTER TABLE `benhdanh`
  ADD CONSTRAINT `fk_benhdanh_MaPT` FOREIGN KEY (`MaPT`) REFERENCES `phuongthang` (`MaPT`) ON DELETE CASCADE;

--
-- Constraints for table `gopy`
--
ALTER TABLE `gopy`
  ADD CONSTRAINT `fk_gopy_MaQTV` FOREIGN KEY (`MaQTV`) REFERENCES `quantrivien` (`MaQTV`) ON DELETE CASCADE;

--
-- Constraints for table `phuongthang`
--
ALTER TABLE `phuongthang`
  ADD CONSTRAINT `fk_phuongthang_MaBaoChe` FOREIGN KEY (`MaBaoChe`) REFERENCES `baoche` (`MaBaoChe`) ON DELETE CASCADE;

--
-- Constraints for table `thanhphan`
--
ALTER TABLE `thanhphan`
  ADD CONSTRAINT `fk_thanhphan_MaPT` FOREIGN KEY (`MaPT`) REFERENCES `phuongthang` (`MaPT`) ON DELETE CASCADE;

--
-- Constraints for table `vithuoc`
--
ALTER TABLE `vithuoc`
  ADD CONSTRAINT `fk_vithuoc_QuyKinh` FOREIGN KEY (`QuyKinh`) REFERENCES `quykinh` (`MaQK`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_vithuoc_TinhVi` FOREIGN KEY (`TinhVi`) REFERENCES `tinhvi` (`MaTV`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
