-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 08:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_noi_that`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `pty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `description`, `content`, `active`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Bàn', 0, '', '', 1, 2, '2022-07-05 11:13:52', '2022-07-22 08:45:18'),
(2, 'Ghế', 0, '', '', 0, 4, '2022-07-05 11:13:57', '2022-07-28 08:22:16'),
(3, 'Decor Phòng', 0, '', '', 1, 5, '2022-07-05 11:14:03', '2022-07-29 04:21:28'),
(4, 'PetHouse', 0, '', '', 0, 0, '2022-07-05 11:16:49', '2022-07-28 08:22:05'),
(5, 'Ghế gỗ', 2, '', '', 1, NULL, '2022-07-05 11:51:58', '2022-07-05 11:51:58'),
(8, 'Bàn văn phòng', 1, '', '', 1, NULL, '2022-07-05 11:52:51', '2022-07-05 11:54:07'),
(9, 'Phòng khách', 3, '', '', 1, NULL, '2022-07-05 11:53:20', '2022-07-05 11:53:20'),
(10, 'Phòng ngủ', 3, '', '', 1, NULL, '2022-07-05 11:53:28', '2022-07-05 11:53:28'),
(11, 'Thiết kế được yêu thích', 0, '', '', 1, 0, '2022-07-05 11:55:01', '2022-07-29 04:24:27'),
(12, 'Bàn trang điểm', 1, '', '', 1, NULL, '2022-07-05 11:59:19', '2022-07-05 11:59:19'),
(13, 'Ghế văn phòng', 2, '', '', 1, NULL, '2022-07-18 21:34:55', '2022-07-18 21:34:55'),
(14, 'Tủ', 0, '', '', 1, 3, '2022-07-19 09:44:19', '2022-07-22 08:45:08'),
(15, 'Kệ', 0, '', '', 1, 3, '2022-07-19 09:44:26', '2022-07-22 08:45:00'),
(16, 'Tủ quần áo', 14, '', '', 1, 0, '2022-07-20 03:40:10', '2022-07-29 03:35:57'),
(17, 'Tủ & bàn', 14, '', '', 1, 0, '2022-07-20 03:40:40', '2022-07-29 00:41:48'),
(18, 'Ghế văn phòng', 2, '', '', 1, 3, '2022-07-22 08:03:33', '2022-07-22 08:03:33'),
(19, 'Kệ giày', 15, '', '', 1, 0, '2022-07-28 08:40:08', '2022-07-28 08:40:08'),
(20, 'Kệ Tivi', 15, '', '', 1, 0, '2022-07-28 08:41:36', '2022-07-28 08:41:36'),
(21, 'Phòng bếp', 3, '', '', 1, 0, '2022-07-28 08:45:42', '2022-07-28 08:45:42'),
(22, 'Tủ bếp', 14, '', '', 1, 0, '2022-07-29 04:21:57', '2022-07-29 04:21:57'),
(23, 'Tủ giày', 14, '', '', 1, 0, '2022-07-29 04:22:18', '2022-07-29 04:22:18'),
(24, 'Bàn học', 1, '', '', 1, 0, '2022-07-29 04:23:53', '2022-07-29 04:23:53'),
(25, 'Kệ Trang trí', 15, '', '', 1, 0, '2022-07-30 01:36:15', '2022-07-30 01:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_05_26_121348_create_menus_table', 1),
(6, '2021_05_29_085033_create_products_table', 1),
(7, '2021_05_29_085458_update_table_product', 1),
(8, '2021_05_30_091352_create_sliders_table', 1),
(9, '2021_06_07_115343_create_customers_table', 1),
(10, '2021_06_07_115353_create_carts_table', 1),
(11, '2021_06_11_035047_create_jobs_table', 1),
(12, '2022_07_18_185554_create_products_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `id_sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `view` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `color`, `size`, `material`, `style`, `origin`, `warranty`, `content`, `menu_id`, `id_sp`, `price`, `price_sale`, `view`, `active`, `created_at`, `updated_at`, `thumb`) VALUES
(1, 'Tủ đồ hoa văn kính', 'Hoa văn', '1m x 0.5m x 1.2m', 'Gỗ', 'Lãng mạn phù hợp để phòng ngủ', NULL, '6 tháng', NULL, 16, 'TĐ0', 2312312, NULL, 10, 1, '2022-07-22 04:41:05', '2022-07-22 07:02:29', '/web_noi_that1/public/storage/uploads/0fd444554c5d8e03d74c.jpg'),
(2, 'Tủ đồ', 'Hoa văn', '1m x 0.5m x 1.2m', 'Gỗ', 'Lãng mạn phù hợp để phòng ngủ', NULL, '6 tháng', NULL, 16, 'TĐ1', 23123123, NULL, 19, 1, '2022-07-22 04:43:52', '2022-07-29 10:52:53', '/web_noi_that1/public/storage/uploads/1f9aab37a33f6161382e.jpg'),
(3, 'Tủ đồ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Lãng mạn phù hợp để phòng ngủ', NULL, '6 tháng', NULL, 16, 'TĐ2', 23123123, NULL, 3, 1, '2022-07-22 04:46:04', '2022-07-22 08:49:04', '/web_noi_that1/public/storage/uploads/2c7b8ac382cb409519da.jpg'),
(4, 'Tủ đồ', 'Hoa văn', '1m x 0.5m x 1.2m', 'Gỗ', 'Lãng mạn phù hợp để phòng ngủ', NULL, '6 tháng', NULL, 16, 'TĐ3', 2000000, NULL, 3, 1, '2022-07-22 07:19:51', '2022-07-29 02:41:12', '/web_noi_that1/public/storage/uploads/7dc1d265da6d1833417c.jpg'),
(5, 'Tủ đồ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Lãng mạn phù hợp để phòng ngủ', NULL, '6 tháng', NULL, 16, 'TĐ4', 2000000, NULL, 2, 1, '2022-07-22 07:20:57', '2022-07-29 07:15:24', '/web_noi_that1/public/storage/uploads/c66498d390db52850bca.jpg'),
(6, 'Tủ đồ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Tủ đồ', NULL, '6 tháng', '<p><a href=\"https://noithatdogoviet.com/tu-quan-ao\" target=\"_blank\" title=\"Mẫu tủ áo đẹp\"><strong>Mẫu tủ &aacute;o đẹp</strong></a>&nbsp;c&oacute; kệ trang tr&iacute; nổi bật nhờ thiết kế sang trọng hơn, đẹp hơn, vừa mang đến gi&aacute; trị sử dụng trong đời sống h&agrave;ng ng&agrave;y vừa mang lại t&iacute;nh thẩm mỹ v&agrave; trang tr&iacute; hấp dẫn cho người sử dụng. Với những ưu điểm nổi bật từ kiểu d&aacute;ng, thiết kế cho đến chất liệu v&agrave; cả gi&aacute; th&agrave;nh. Một lựa chọn được đ&aacute;nh gi&aacute; l&agrave; tối ưu hiệu quả v&agrave; cả gi&aacute; trị lợi &iacute;ch mang lại cho người ti&ecirc;u d&ugrave;ng chắc chắn sẽ l&agrave; một sản phẩm m&agrave; bạn n&ecirc;n c&acirc;n nhắc khi t&igrave;m kiếm v&agrave; đặt mua.</p>\r\n\r\n<ul>\r\n	<li>Kh&ocirc;ng giống như trước đ&acirc;y c&aacute;c mẫu tủ &aacute;o c&ocirc;ng nghiệp thường bị đ&aacute;nh gi&aacute; thấp về t&iacute;nh thẩm mỹ v&agrave; thiết kế so với c&aacute;c loại tủ gỗ tự nhi&ecirc;n. Hiện nay, c&aacute;c&nbsp;<a href=\"https://noithatdogoviet.com/tu-quan-ao-go-cong-nghiep\" target=\"_blank\" title=\"mẫu tủ gỗ công nghiệp \"><strong>mẫu tủ gỗ c&ocirc;ng nghiệp&nbsp;</strong></a>ng&agrave;y c&agrave;ng tỏ ra kh&ocirc;ng hề k&eacute;m cạnh từ chất lượng cho đến kiểu d&aacute;ng. Với sản phẩm n&agrave;y t&iacute;nh trang tr&iacute; được tăng l&ecirc;n một tầm cao mới với kiểu d&aacute;ng cửa mở cơ bản kết hợp c&ugrave;ng những chiếc kệ trang tr&iacute; tuyệt đẹp b&ecirc;n h&ocirc;ng tủ. Tăng th&ecirc;m khoảng kh&ocirc;ng gian sử dụng, t&iacute;nh đa dụng v&agrave; b&agrave;y tr&iacute; th&ecirc;m một v&agrave;i phụ kiện quan trọng với đời sống của mọi người.</li>\r\n	<li>C&aacute;c hộc tủ v&agrave; khay chứa đồ được t&iacute;nh to&aacute;n k&iacute;ch thước đồng đều với nhau để tạo n&ecirc;n sự c&acirc;n bằng v&agrave; h&agrave;i h&ograve;a trong tổng thiết kế của sản phẩm. Giống như c&aacute;c phần tr&ecirc;n tủ như c&aacute;nh tủ, mặt tr&ecirc;n, mặt dưới đều c&oacute; k&iacute;ch thước ch&iacute;nh x&aacute;c đến từng mm. Kết hợp th&ecirc;m việc chọn m&agrave;u sơn th&ocirc;ng minh gi&uacute;p sản phẩm trở l&ecirc;n nổi bật m&agrave; kh&ocirc;ng phải đục chạm c&aacute;c hoa văn hay họa tiết cầu kỳ như c&aacute;c loại đồ gỗ tự nhi&ecirc;n.</li>\r\n	<li>Tủ &aacute;o c&oacute; m&agrave;u kem kết hợp th&ecirc;m đường chạy chỉ m&agrave;u đen kh&aacute; lạ mắt. Thay v&igrave; để to&agrave;n bộ l&agrave; m&agrave;u kem ch&uacute;ng t&ocirc;i th&ecirc;m một lớp m&agrave;u sơn đen tăng th&ecirc;m điểm nhấn cho sản phẩm, lạ mắt hơn v&agrave; hấp dẫn hơn với người ti&ecirc;u d&ugrave;ng. Th&iacute;ch hợp với những người y&ecirc;u th&iacute;ch sự mới lạ, cuốn h&uacute;t v&agrave; kh&aacute;c biệt hơn so với c&aacute;c mẫu đại tr&agrave; tr&ecirc;n thị trường hiện nay.</li>\r\n	<li>B&ecirc;n trong tủ được chia th&agrave;nh 2 ngăn lớn gồm 1 buồng treo v&agrave; 1 buồng xếp. Buồng treo lớn gồm 1 ngăn treo rộng v&agrave; 1 ngăn k&eacute;o &acirc;m c&oacute; gắn th&ecirc;m hộc kh&oacute;a. Buồng xếp gồm c&aacute;c ngăn được chia đều nhau v&agrave; 2 hộc để đồ. Kết hợp th&ecirc;m với c&aacute;c hộc v&agrave; kệ để đồ b&ecirc;n h&ocirc;ng mang lại khoảng kh&ocirc;ng gian cực kỳ rộng r&atilde;i v&agrave; nhiều lựa chọn sử dụng d&agrave;nh cho kh&aacute;ch h&agrave;ng.</li>\r\n</ul>', 16, 'TĐ5', 2000000, NULL, 1, 1, '2022-07-22 07:23:42', '2022-07-22 07:24:09', '/web_noi_that1/public/storage/uploads/9f624a86428e80d0d99f.jpg'),
(7, 'Tủ đồ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Tủ đồ', NULL, '6 tháng', '<ul>\r\n	<li>Kh&ocirc;ng giống như trước đ&acirc;y c&aacute;c mẫu tủ &aacute;o c&ocirc;ng nghiệp thường bị đ&aacute;nh gi&aacute; thấp về t&iacute;nh thẩm mỹ v&agrave; thiết kế so với c&aacute;c loại tủ gỗ tự nhi&ecirc;n. Hiện nay, c&aacute;c&nbsp;<a href=\"https://noithatdogoviet.com/tu-quan-ao-go-cong-nghiep\" target=\"_blank\" title=\"mẫu tủ gỗ công nghiệp \"><strong>mẫu tủ gỗ c&ocirc;ng nghiệp&nbsp;</strong></a>ng&agrave;y c&agrave;ng tỏ ra kh&ocirc;ng hề k&eacute;m cạnh từ chất lượng cho đến kiểu d&aacute;ng. Với sản phẩm n&agrave;y t&iacute;nh trang tr&iacute; được tăng l&ecirc;n một tầm cao mới với kiểu d&aacute;ng cửa mở cơ bản kết hợp c&ugrave;ng những chiếc kệ trang tr&iacute; tuyệt đẹp b&ecirc;n h&ocirc;ng tủ. Tăng th&ecirc;m khoảng kh&ocirc;ng gian sử dụng, t&iacute;nh đa dụng v&agrave; b&agrave;y tr&iacute; th&ecirc;m một v&agrave;i phụ kiện quan trọng với đời sống của mọi người.</li>\r\n	<li>C&aacute;c hộc tủ v&agrave; khay chứa đồ được t&iacute;nh to&aacute;n k&iacute;ch thước đồng đều với nhau để tạo n&ecirc;n sự c&acirc;n bằng v&agrave; h&agrave;i h&ograve;a trong tổng thiết kế của sản phẩm. Giống như c&aacute;c phần tr&ecirc;n tủ như c&aacute;nh tủ, mặt tr&ecirc;n, mặt dưới đều c&oacute; k&iacute;ch thước ch&iacute;nh x&aacute;c đến từng mm. Kết hợp th&ecirc;m việc chọn m&agrave;u sơn th&ocirc;ng minh gi&uacute;p sản phẩm trở l&ecirc;n nổi bật m&agrave; kh&ocirc;ng phải đục chạm c&aacute;c hoa văn hay họa tiết cầu kỳ như c&aacute;c loại đồ gỗ tự nhi&ecirc;n.</li>\r\n	<li>Tủ &aacute;o c&oacute; m&agrave;u kem kết hợp th&ecirc;m đường chạy chỉ m&agrave;u đen kh&aacute; lạ mắt. Thay v&igrave; để to&agrave;n bộ l&agrave; m&agrave;u kem ch&uacute;ng t&ocirc;i th&ecirc;m một lớp m&agrave;u sơn đen tăng th&ecirc;m điểm nhấn cho sản phẩm, lạ mắt hơn v&agrave; hấp dẫn hơn với người ti&ecirc;u d&ugrave;ng. Th&iacute;ch hợp với những người y&ecirc;u th&iacute;ch sự mới lạ, cuốn h&uacute;t v&agrave; kh&aacute;c biệt hơn so với c&aacute;c mẫu đại tr&agrave; tr&ecirc;n thị trường hiện nay.</li>\r\n	<li>B&ecirc;n trong tủ được chia th&agrave;nh 2 ngăn lớn gồm 1 buồng treo v&agrave; 1 buồng xếp. Buồng treo lớn gồm 1 ngăn treo rộng v&agrave; 1 ngăn k&eacute;o &acirc;m c&oacute; gắn th&ecirc;m hộc kh&oacute;a. Buồng xếp gồm c&aacute;c ngăn được chia đều nhau v&agrave; 2 hộc để đồ. Kết hợp th&ecirc;m với c&aacute;c hộc v&agrave; kệ để đồ b&ecirc;n h&ocirc;ng mang lại khoảng kh&ocirc;ng gian cực kỳ rộng r&atilde;i v&agrave; nhiều lựa chọn sử dụng d&agrave;nh cho kh&aacute;ch h&agrave;ng.</li>\r\n</ul>', 16, 'TĐ6', 2000000, NULL, 1, 1, '2022-07-22 07:24:00', '2022-07-22 08:27:03', '/web_noi_that1/public/storage/uploads/29f544a94da18fffd6b0.jpg'),
(8, 'Tủ đồ và bàn làm việc', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', NULL, NULL, '6 tháng', '<ol>\r\n	<li><span style=\"font-size:14px\">Kh&ocirc;ng giống như trước đ&acirc;y c&aacute;c mẫu tủ &aacute;o c&ocirc;ng nghiệp thường bị đ&aacute;nh gi&aacute; thấp về t&iacute;nh thẩm mỹ v&agrave; thiết kế so với c&aacute;c loại tủ gỗ tự nhi&ecirc;n. Hiện nay, c&aacute;c&nbsp;<a href=\"https://noithatdogoviet.com/tu-quan-ao-go-cong-nghiep\" target=\"_blank\" title=\"mẫu tủ gỗ công nghiệp \"><strong>mẫu tủ gỗ c&ocirc;ng nghiệp&nbsp;</strong></a>ng&agrave;y c&agrave;ng tỏ ra kh&ocirc;ng hề k&eacute;m cạnh từ chất lượng cho đến kiểu d&aacute;ng. Với sản phẩm n&agrave;y t&iacute;nh trang tr&iacute; được tăng l&ecirc;n một tầm cao mới với kiểu d&aacute;ng cửa mở cơ bản kết hợp c&ugrave;ng những chiếc kệ trang tr&iacute; tuyệt đẹp b&ecirc;n h&ocirc;ng tủ. Tăng th&ecirc;m khoảng kh&ocirc;ng gian sử dụng, t&iacute;nh đa dụng v&agrave; b&agrave;y tr&iacute; th&ecirc;m một v&agrave;i phụ kiện quan trọng với đời sống của mọi người.</span></li>\r\n	<li><span style=\"font-size:14px\">C&aacute;c hộc tủ v&agrave; khay chứa đồ được t&iacute;nh to&aacute;n k&iacute;ch thước đồng đều với nhau để tạo n&ecirc;n sự c&acirc;n bằng v&agrave; h&agrave;i h&ograve;a trong tổng thiết kế của sản phẩm. Giống như c&aacute;c phần tr&ecirc;n tủ như c&aacute;nh tủ, mặt tr&ecirc;n, mặt dưới đều c&oacute; k&iacute;ch thước ch&iacute;nh x&aacute;c đến từng mm. Kết hợp th&ecirc;m việc chọn m&agrave;u sơn th&ocirc;ng minh gi&uacute;p sản phẩm trở l&ecirc;n nổi bật m&agrave; kh&ocirc;ng phải đục chạm c&aacute;c hoa văn hay họa tiết cầu kỳ như c&aacute;c loại đồ gỗ tự nhi&ecirc;n.</span></li>\r\n	<li><span style=\"font-size:14px\">Tủ &aacute;o c&oacute; m&agrave;u kem kết hợp th&ecirc;m đường chạy chỉ m&agrave;u đen kh&aacute; lạ mắt. Thay v&igrave; để to&agrave;n bộ l&agrave; m&agrave;u kem ch&uacute;ng t&ocirc;i th&ecirc;m một lớp m&agrave;u sơn đen tăng th&ecirc;m điểm nhấn cho sản phẩm, lạ mắt hơn v&agrave; hấp dẫn hơn với người ti&ecirc;u d&ugrave;ng. Th&iacute;ch hợp với những người y&ecirc;u th&iacute;ch sự mới lạ, cuốn h&uacute;t v&agrave; kh&aacute;c biệt hơn so với c&aacute;c mẫu đại tr&agrave; tr&ecirc;n thị trường hiện nay.</span></li>\r\n	<li><span style=\"font-size:14px\">B&ecirc;n trong tủ được chia th&agrave;nh 2 ngăn lớn gồm 1 buồng treo v&agrave; 1 buồng xếp. Buồng treo lớn gồm 1 ngăn treo rộng v&agrave; 1 ngăn k&eacute;o &acirc;m c&oacute; gắn th&ecirc;m hộc kh&oacute;a. Buồng xếp gồm c&aacute;c ngăn được chia đều nhau v&agrave; 2 hộc để đồ. Kết hợp th&ecirc;m với c&aacute;c hộc v&agrave; kệ để đồ b&ecirc;n h&ocirc;ng mang lại khoảng kh&ocirc;ng gian cực kỳ rộng r&atilde;i v&agrave; nhiều lựa chọn sử dụng d&agrave;nh cho kh&aacute;ch h&agrave;ng.</span></li>\r\n</ol>', 17, 'TKH7', 2000000, NULL, 0, 1, '2022-07-22 07:27:02', '2022-07-22 07:27:02', '/web_noi_that1/public/storage/uploads/c55a8fc687ce45901cdf.jpg'),
(9, 'Tủ đồ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Tủ đồ', NULL, '6 tháng', NULL, 16, 'TĐ8', 2000000, NULL, 0, 1, '2022-07-22 07:27:30', '2022-07-22 07:27:30', '/web_noi_that1/public/storage/uploads/91d316991f91ddcf8480.jpg'),
(10, 'Tủ đồ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Tủ đồ', NULL, '6 tháng', NULL, 16, 'TĐ9', 2000000, NULL, 0, 1, '2022-07-22 07:28:53', '2022-07-22 07:28:53', '/web_noi_that1/public/storage/uploads/adab8c5e845646081f47.jpg'),
(11, 'Tủ đồ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Tủ đồ', NULL, '6 tháng', NULL, 16, 'TĐ10', 2000000, NULL, 3, 1, '2022-07-22 07:29:02', '2022-07-29 02:34:53', '/web_noi_that1/public/storage/uploads/c66498d390db52850bca.jpg'),
(12, 'Tủ đồ hộc ngang', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Tủ đồ', NULL, '6 tháng', NULL, 16, 'TĐ11', 2000000, NULL, 1, 1, '2022-07-22 07:29:27', '2022-07-22 08:49:10', '/web_noi_that1/public/storage/uploads/cf0a00f008f8caa693e9.jpg'),
(13, 'Tủ đồ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Tủ đồ', NULL, '6 tháng', NULL, 16, 'TĐ12', 2000000, NULL, 2, 1, '2022-07-22 07:29:34', '2022-07-22 08:18:50', '/web_noi_that1/public/storage/uploads/eaebe5b8ecb02eee77a1.jpg'),
(14, 'Bàn làm việc', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Bàn văn phòng', NULL, '6 tháng', '<h2><strong>Khung Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Khung b&agrave;n ch&acirc;n sắt sơn tĩnh điện sang trọng chống han ghỉ v&agrave; bong tr&oacute;c. Khung b&agrave;n tạo n&ecirc;n cho b&agrave;n kiểu d&aacute;ng hiện đại, vững chắc.</p>\r\n\r\n<p>Dưới khung b&agrave;n c&oacute; đế ch&acirc;n nhựa chịu lực gi&uacute;p hạn chế tiếng ồn khi di chuyển v&agrave; tr&aacute;nh l&agrave;m trầy xước nền nh&agrave; đặc biệt l&agrave; s&agrave;n gỗ.C&oacute; thể tăng chỉnh chiều cao b&agrave;n tiện lợi cho người d&ugrave;ng.</p>\r\n\r\n<p>Sản phẩm ph&ugrave; hợp cho kh&ocirc;ng gian l&agrave;m việc 6 người.</p>\r\n\r\n<p>Lưu &yacute; gi&aacute; chưa bao gồm hộc di động v&agrave; ghế xoay.</p>\r\n\r\n<p>K&iacute;ch thước 3m6X1m2</p>\r\n\r\n<h2><strong>Mặt Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Cốt gỗ l&agrave; MFC cao cấp phủ Melamine H&agrave;n Quốc chống ẩm mốc cực tốt, dễ lau ch&ugrave;i vệ sinh h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Diện t&iacute;ch mặt b&agrave;n rộng, m&agrave;u v&acirc;n gỗ bắt mắt cho kh&aacute;ch h&agrave;ng dễ d&agrave;ng kết hợp với nhiều kh&ocirc;ng gian văn ph&ograve;ng kh&aacute;c nhau.</p>\r\n\r\n<p><strong><em>Mẫu m&atilde; đa dạng, kiểu d&aacute;ng hiện đại:</em></strong>&nbsp;sản phẩm noithatdangkhoa.com lu&ocirc;n hướng tới phong c&aacute;ch hiện đại, li&ecirc;n tục đổi mới mẫu m&atilde;, cam kết hướng tới v&igrave; sức khỏe người d&ugrave;ng. Đ&acirc;y cũng l&agrave; cơ sở để người ti&ecirc;u d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m tin tưởng sử dụng đồ d&ugrave;ng nội thất của noithatdangkhoa.com v&igrave; sự an to&agrave;n.</p>\r\n\r\n<p><strong><em>D&acirc;y chuyền m&aacute;y m&oacute;c c&ocirc;ng nghệ tối ưu bao gồm</em>:</strong>&nbsp;M&aacute;y cắt gi&agrave;n CNC, m&aacute;y d&aacute;n nẹp nhựa tự động ho&agrave;n to&agrave;n của Thổ Nhĩ Kỳ, m&aacute;y khoan gi&agrave;n tự động để cho ra một sản phẩm ho&agrave;n hảo đ&aacute;p ứng nhu cầu kh&aacute;ch h&agrave;ng.</p>', 8, 'BVP13', 5500000, 4500000, 1, 1, '2022-07-22 07:41:07', '2022-07-29 03:28:53', '/web_noi_that1/public/storage/uploads/5 Bàn chân sắt chữ K 1m2 BLV05 (6) copy.jpg'),
(15, 'Bàn làm việc', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Bàn văn phòng', NULL, '6 tháng', '<h2><strong>Khung Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Khung b&agrave;n ch&acirc;n sắt sơn tĩnh điện sang trọng chống han ghỉ v&agrave; bong tr&oacute;c. Khung b&agrave;n tạo n&ecirc;n cho b&agrave;n kiểu d&aacute;ng hiện đại, vững chắc.</p>\r\n\r\n<p>Dưới khung b&agrave;n c&oacute; đế ch&acirc;n nhựa chịu lực gi&uacute;p hạn chế tiếng ồn khi di chuyển v&agrave; tr&aacute;nh l&agrave;m trầy xước nền nh&agrave; đặc biệt l&agrave; s&agrave;n gỗ.C&oacute; thể tăng chỉnh chiều cao b&agrave;n tiện lợi cho người d&ugrave;ng.</p>\r\n\r\n<p>Sản phẩm ph&ugrave; hợp cho kh&ocirc;ng gian l&agrave;m việc 6 người.</p>\r\n\r\n<p>Lưu &yacute; gi&aacute; chưa bao gồm hộc di động v&agrave; ghế xoay.</p>\r\n\r\n<p>K&iacute;ch thước 3m6X1m2</p>\r\n\r\n<h2><strong>Mặt Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Cốt gỗ l&agrave; MFC cao cấp phủ Melamine H&agrave;n Quốc chống ẩm mốc cực tốt, dễ lau ch&ugrave;i vệ sinh h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Diện t&iacute;ch mặt b&agrave;n rộng, m&agrave;u v&acirc;n gỗ bắt mắt cho kh&aacute;ch h&agrave;ng dễ d&agrave;ng kết hợp với nhiều kh&ocirc;ng gian văn ph&ograve;ng kh&aacute;c nhau.</p>\r\n\r\n<p><strong><em>Mẫu m&atilde; đa dạng, kiểu d&aacute;ng hiện đại:</em></strong>&nbsp;sản phẩm noithatdangkhoa.com lu&ocirc;n hướng tới phong c&aacute;ch hiện đại, li&ecirc;n tục đổi mới mẫu m&atilde;, cam kết hướng tới v&igrave; sức khỏe người d&ugrave;ng. Đ&acirc;y cũng l&agrave; cơ sở để người ti&ecirc;u d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m tin tưởng sử dụng đồ d&ugrave;ng nội thất của noithatdangkhoa.com v&igrave; sự an to&agrave;n.</p>\r\n\r\n<p><strong><em>D&acirc;y chuyền m&aacute;y m&oacute;c c&ocirc;ng nghệ tối ưu bao gồm</em>:</strong>&nbsp;M&aacute;y cắt gi&agrave;n CNC, m&aacute;y d&aacute;n nẹp nhựa tự động ho&agrave;n to&agrave;n của Thổ Nhĩ Kỳ, m&aacute;y khoan gi&agrave;n tự động để cho ra một sản phẩm ho&agrave;n hảo đ&aacute;p ứng nhu cầu kh&aacute;ch h&agrave;ng.</p>', 8, 'BVP14', 5500000, 4500000, 1, 1, '2022-07-22 07:41:33', '2022-07-23 08:00:22', '/web_noi_that1/public/storage/uploads/9b82683d6035a26bfb24.jpg'),
(16, 'Bàn làm việc', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Bàn văn phòng', NULL, '6 tháng', '<h2><strong>Khung Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Khung b&agrave;n ch&acirc;n sắt sơn tĩnh điện sang trọng chống han ghỉ v&agrave; bong tr&oacute;c. Khung b&agrave;n tạo n&ecirc;n cho b&agrave;n kiểu d&aacute;ng hiện đại, vững chắc.</p>\r\n\r\n<p>Dưới khung b&agrave;n c&oacute; đế ch&acirc;n nhựa chịu lực gi&uacute;p hạn chế tiếng ồn khi di chuyển v&agrave; tr&aacute;nh l&agrave;m trầy xước nền nh&agrave; đặc biệt l&agrave; s&agrave;n gỗ.C&oacute; thể tăng chỉnh chiều cao b&agrave;n tiện lợi cho người d&ugrave;ng.</p>\r\n\r\n<p>Sản phẩm ph&ugrave; hợp cho kh&ocirc;ng gian l&agrave;m việc 6 người.</p>\r\n\r\n<p>Lưu &yacute; gi&aacute; chưa bao gồm hộc di động v&agrave; ghế xoay.</p>\r\n\r\n<p>K&iacute;ch thước 3m6X1m2</p>\r\n\r\n<h2><strong>Mặt Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Cốt gỗ l&agrave; MFC cao cấp phủ Melamine H&agrave;n Quốc chống ẩm mốc cực tốt, dễ lau ch&ugrave;i vệ sinh h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Diện t&iacute;ch mặt b&agrave;n rộng, m&agrave;u v&acirc;n gỗ bắt mắt cho kh&aacute;ch h&agrave;ng dễ d&agrave;ng kết hợp với nhiều kh&ocirc;ng gian văn ph&ograve;ng kh&aacute;c nhau.</p>\r\n\r\n<p><strong><em>Mẫu m&atilde; đa dạng, kiểu d&aacute;ng hiện đại:</em></strong>&nbsp;sản phẩm noithatdangkhoa.com lu&ocirc;n hướng tới phong c&aacute;ch hiện đại, li&ecirc;n tục đổi mới mẫu m&atilde;, cam kết hướng tới v&igrave; sức khỏe người d&ugrave;ng. Đ&acirc;y cũng l&agrave; cơ sở để người ti&ecirc;u d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m tin tưởng sử dụng đồ d&ugrave;ng nội thất của noithatdangkhoa.com v&igrave; sự an to&agrave;n.</p>\r\n\r\n<p><strong><em>D&acirc;y chuyền m&aacute;y m&oacute;c c&ocirc;ng nghệ tối ưu bao gồm</em>:</strong>&nbsp;M&aacute;y cắt gi&agrave;n CNC, m&aacute;y d&aacute;n nẹp nhựa tự động ho&agrave;n to&agrave;n của Thổ Nhĩ Kỳ, m&aacute;y khoan gi&agrave;n tự động để cho ra một sản phẩm ho&agrave;n hảo đ&aacute;p ứng nhu cầu kh&aacute;ch h&agrave;ng.</p>', 8, 'BVP15', 5500000, 4500000, 5, 1, '2022-07-22 07:41:57', '2022-07-23 08:00:30', '/web_noi_that1/public/storage/uploads/ban-chan-sat-chu-l.gif'),
(17, 'Bàn làm việc', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Bàn văn phòng', NULL, '6 tháng', '<h2><strong>Khung Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Khung b&agrave;n ch&acirc;n sắt sơn tĩnh điện sang trọng chống han ghỉ v&agrave; bong tr&oacute;c. Khung b&agrave;n tạo n&ecirc;n cho b&agrave;n kiểu d&aacute;ng hiện đại, vững chắc.</p>\r\n\r\n<p>Dưới khung b&agrave;n c&oacute; đế ch&acirc;n nhựa chịu lực gi&uacute;p hạn chế tiếng ồn khi di chuyển v&agrave; tr&aacute;nh l&agrave;m trầy xước nền nh&agrave; đặc biệt l&agrave; s&agrave;n gỗ.C&oacute; thể tăng chỉnh chiều cao b&agrave;n tiện lợi cho người d&ugrave;ng.</p>\r\n\r\n<p>Sản phẩm ph&ugrave; hợp cho kh&ocirc;ng gian l&agrave;m việc 6 người.</p>\r\n\r\n<p>Lưu &yacute; gi&aacute; chưa bao gồm hộc di động v&agrave; ghế xoay.</p>\r\n\r\n<p>K&iacute;ch thước 3m6X1m2</p>\r\n\r\n<h2><strong>Mặt Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Cốt gỗ l&agrave; MFC cao cấp phủ Melamine H&agrave;n Quốc chống ẩm mốc cực tốt, dễ lau ch&ugrave;i vệ sinh h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Diện t&iacute;ch mặt b&agrave;n rộng, m&agrave;u v&acirc;n gỗ bắt mắt cho kh&aacute;ch h&agrave;ng dễ d&agrave;ng kết hợp với nhiều kh&ocirc;ng gian văn ph&ograve;ng kh&aacute;c nhau.</p>\r\n\r\n<p><strong><em>Mẫu m&atilde; đa dạng, kiểu d&aacute;ng hiện đại:</em></strong>&nbsp;sản phẩm noithatdangkhoa.com lu&ocirc;n hướng tới phong c&aacute;ch hiện đại, li&ecirc;n tục đổi mới mẫu m&atilde;, cam kết hướng tới v&igrave; sức khỏe người d&ugrave;ng. Đ&acirc;y cũng l&agrave; cơ sở để người ti&ecirc;u d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m tin tưởng sử dụng đồ d&ugrave;ng nội thất của noithatdangkhoa.com v&igrave; sự an to&agrave;n.</p>\r\n\r\n<p><strong><em>D&acirc;y chuyền m&aacute;y m&oacute;c c&ocirc;ng nghệ tối ưu bao gồm</em>:</strong>&nbsp;M&aacute;y cắt gi&agrave;n CNC, m&aacute;y d&aacute;n nẹp nhựa tự động ho&agrave;n to&agrave;n của Thổ Nhĩ Kỳ, m&aacute;y khoan gi&agrave;n tự động để cho ra một sản phẩm ho&agrave;n hảo đ&aacute;p ứng nhu cầu kh&aacute;ch h&agrave;ng.</p>', 8, 'BVP16', 5500000, 4500000, 0, 1, '2022-07-22 07:42:16', '2022-07-22 07:42:16', '/web_noi_that1/public/storage/uploads/ban-lam-viec-co-hoc-1m2.jpg'),
(18, 'Bàn làm việc', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Bàn văn phòng', NULL, '6 tháng', '<h2><strong>Khung Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Khung b&agrave;n ch&acirc;n sắt sơn tĩnh điện sang trọng chống han ghỉ v&agrave; bong tr&oacute;c. Khung b&agrave;n tạo n&ecirc;n cho b&agrave;n kiểu d&aacute;ng hiện đại, vững chắc.</p>\r\n\r\n<p>Dưới khung b&agrave;n c&oacute; đế ch&acirc;n nhựa chịu lực gi&uacute;p hạn chế tiếng ồn khi di chuyển v&agrave; tr&aacute;nh l&agrave;m trầy xước nền nh&agrave; đặc biệt l&agrave; s&agrave;n gỗ.C&oacute; thể tăng chỉnh chiều cao b&agrave;n tiện lợi cho người d&ugrave;ng.</p>\r\n\r\n<p>Sản phẩm ph&ugrave; hợp cho kh&ocirc;ng gian l&agrave;m việc 6 người.</p>\r\n\r\n<p>Lưu &yacute; gi&aacute; chưa bao gồm hộc di động v&agrave; ghế xoay.</p>\r\n\r\n<p>K&iacute;ch thước 3m6X1m2</p>\r\n\r\n<h2><strong>Mặt Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Cốt gỗ l&agrave; MFC cao cấp phủ Melamine H&agrave;n Quốc chống ẩm mốc cực tốt, dễ lau ch&ugrave;i vệ sinh h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Diện t&iacute;ch mặt b&agrave;n rộng, m&agrave;u v&acirc;n gỗ bắt mắt cho kh&aacute;ch h&agrave;ng dễ d&agrave;ng kết hợp với nhiều kh&ocirc;ng gian văn ph&ograve;ng kh&aacute;c nhau.</p>\r\n\r\n<p><strong><em>Mẫu m&atilde; đa dạng, kiểu d&aacute;ng hiện đại:</em></strong>&nbsp;sản phẩm noithatdangkhoa.com lu&ocirc;n hướng tới phong c&aacute;ch hiện đại, li&ecirc;n tục đổi mới mẫu m&atilde;, cam kết hướng tới v&igrave; sức khỏe người d&ugrave;ng. Đ&acirc;y cũng l&agrave; cơ sở để người ti&ecirc;u d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m tin tưởng sử dụng đồ d&ugrave;ng nội thất của noithatdangkhoa.com v&igrave; sự an to&agrave;n.</p>\r\n\r\n<p><strong><em>D&acirc;y chuyền m&aacute;y m&oacute;c c&ocirc;ng nghệ tối ưu bao gồm</em>:</strong>&nbsp;M&aacute;y cắt gi&agrave;n CNC, m&aacute;y d&aacute;n nẹp nhựa tự động ho&agrave;n to&agrave;n của Thổ Nhĩ Kỳ, m&aacute;y khoan gi&agrave;n tự động để cho ra một sản phẩm ho&agrave;n hảo đ&aacute;p ứng nhu cầu kh&aacute;ch h&agrave;ng.</p>', 8, 'BVP17', 5500000, 4500000, 3, 1, '2022-07-22 07:42:33', '2022-07-29 03:46:39', '/web_noi_that1/public/storage/uploads/ban-lam-viec-MN11407_1492857644(5).png'),
(19, 'Bàn làm việc', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Bàn văn phòng', NULL, '6 tháng', '<h2><strong>Khung Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Khung b&agrave;n ch&acirc;n sắt sơn tĩnh điện sang trọng chống han ghỉ v&agrave; bong tr&oacute;c. Khung b&agrave;n tạo n&ecirc;n cho b&agrave;n kiểu d&aacute;ng hiện đại, vững chắc.</p>\r\n\r\n<p>Dưới khung b&agrave;n c&oacute; đế ch&acirc;n nhựa chịu lực gi&uacute;p hạn chế tiếng ồn khi di chuyển v&agrave; tr&aacute;nh l&agrave;m trầy xước nền nh&agrave; đặc biệt l&agrave; s&agrave;n gỗ.C&oacute; thể tăng chỉnh chiều cao b&agrave;n tiện lợi cho người d&ugrave;ng.</p>\r\n\r\n<p>Sản phẩm ph&ugrave; hợp cho kh&ocirc;ng gian l&agrave;m việc 6 người.</p>\r\n\r\n<p>Lưu &yacute; gi&aacute; chưa bao gồm hộc di động v&agrave; ghế xoay.</p>\r\n\r\n<p>K&iacute;ch thước 3m6X1m2</p>\r\n\r\n<h2><strong>Mặt Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Cốt gỗ l&agrave; MFC cao cấp phủ Melamine H&agrave;n Quốc chống ẩm mốc cực tốt, dễ lau ch&ugrave;i vệ sinh h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Diện t&iacute;ch mặt b&agrave;n rộng, m&agrave;u v&acirc;n gỗ bắt mắt cho kh&aacute;ch h&agrave;ng dễ d&agrave;ng kết hợp với nhiều kh&ocirc;ng gian văn ph&ograve;ng kh&aacute;c nhau.</p>\r\n\r\n<p><strong><em>Mẫu m&atilde; đa dạng, kiểu d&aacute;ng hiện đại:</em></strong>&nbsp;sản phẩm noithatdangkhoa.com lu&ocirc;n hướng tới phong c&aacute;ch hiện đại, li&ecirc;n tục đổi mới mẫu m&atilde;, cam kết hướng tới v&igrave; sức khỏe người d&ugrave;ng. Đ&acirc;y cũng l&agrave; cơ sở để người ti&ecirc;u d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m tin tưởng sử dụng đồ d&ugrave;ng nội thất của noithatdangkhoa.com v&igrave; sự an to&agrave;n.</p>\r\n\r\n<p><strong><em>D&acirc;y chuyền m&aacute;y m&oacute;c c&ocirc;ng nghệ tối ưu bao gồm</em>:</strong>&nbsp;M&aacute;y cắt gi&agrave;n CNC, m&aacute;y d&aacute;n nẹp nhựa tự động ho&agrave;n to&agrave;n của Thổ Nhĩ Kỳ, m&aacute;y khoan gi&agrave;n tự động để cho ra một sản phẩm ho&agrave;n hảo đ&aacute;p ứng nhu cầu kh&aacute;ch h&agrave;ng.</p>', 8, 'BVP18', 5500000, 4500000, 0, 1, '2022-07-22 07:42:50', '2022-07-22 07:42:50', '/web_noi_that1/public/storage/uploads/ban-nhan-vien.jpg'),
(20, 'Bàn làm việc', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Bàn văn phòng', NULL, '6 tháng', '<h2><strong>Khung Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Khung b&agrave;n ch&acirc;n sắt sơn tĩnh điện sang trọng chống han ghỉ v&agrave; bong tr&oacute;c. Khung b&agrave;n tạo n&ecirc;n cho b&agrave;n kiểu d&aacute;ng hiện đại, vững chắc.</p>\r\n\r\n<p>Dưới khung b&agrave;n c&oacute; đế ch&acirc;n nhựa chịu lực gi&uacute;p hạn chế tiếng ồn khi di chuyển v&agrave; tr&aacute;nh l&agrave;m trầy xước nền nh&agrave; đặc biệt l&agrave; s&agrave;n gỗ.C&oacute; thể tăng chỉnh chiều cao b&agrave;n tiện lợi cho người d&ugrave;ng.</p>\r\n\r\n<p>Sản phẩm ph&ugrave; hợp cho kh&ocirc;ng gian l&agrave;m việc 6 người.</p>\r\n\r\n<p>Lưu &yacute; gi&aacute; chưa bao gồm hộc di động v&agrave; ghế xoay.</p>\r\n\r\n<p>K&iacute;ch thước 3m6X1m2</p>\r\n\r\n<h2><strong>Mặt Module b&agrave;n v&aacute;ch ngăn 6 người 3m6 &ndash; BLVDK22</strong></h2>\r\n\r\n<p>Cốt gỗ l&agrave; MFC cao cấp phủ Melamine H&agrave;n Quốc chống ẩm mốc cực tốt, dễ lau ch&ugrave;i vệ sinh h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Diện t&iacute;ch mặt b&agrave;n rộng, m&agrave;u v&acirc;n gỗ bắt mắt cho kh&aacute;ch h&agrave;ng dễ d&agrave;ng kết hợp với nhiều kh&ocirc;ng gian văn ph&ograve;ng kh&aacute;c nhau.</p>\r\n\r\n<p><strong><em>Mẫu m&atilde; đa dạng, kiểu d&aacute;ng hiện đại:</em></strong>&nbsp;sản phẩm noithatdangkhoa.com lu&ocirc;n hướng tới phong c&aacute;ch hiện đại, li&ecirc;n tục đổi mới mẫu m&atilde;, cam kết hướng tới v&igrave; sức khỏe người d&ugrave;ng. Đ&acirc;y cũng l&agrave; cơ sở để người ti&ecirc;u d&ugrave;ng ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m tin tưởng sử dụng đồ d&ugrave;ng nội thất của noithatdangkhoa.com v&igrave; sự an to&agrave;n.</p>\r\n\r\n<p><strong><em>D&acirc;y chuyền m&aacute;y m&oacute;c c&ocirc;ng nghệ tối ưu bao gồm</em>:</strong>&nbsp;M&aacute;y cắt gi&agrave;n CNC, m&aacute;y d&aacute;n nẹp nhựa tự động ho&agrave;n to&agrave;n của Thổ Nhĩ Kỳ, m&aacute;y khoan gi&agrave;n tự động để cho ra một sản phẩm ho&agrave;n hảo đ&aacute;p ứng nhu cầu kh&aacute;ch h&agrave;ng.</p>', 8, 'BVP19', 5500000, 4500000, 1, 1, '2022-07-22 07:43:10', '2022-08-04 11:36:18', '/web_noi_that1/public/storage/uploads/ban-van-phong.png'),
(21, 'Bàn làm việc', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Bàn văn phòng', NULL, '6 tháng', NULL, 8, 'BVP20', 5500000, 4500000, 2, 1, '2022-07-22 07:43:22', '2022-07-30 03:47:23', '/web_noi_that1/public/storage/uploads/rs-ban-tai-nha-HOME2.jpg'),
(22, 'Phòng ngủ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>Giường ngủ gỗ c&ocirc;ng nghiệp bọc nỉ &ndash; GNDK09. Mẫu giường ngủ đơn giản, mang n&eacute;t đẹp tinh tế, sang trọng, ki&ecirc;u sa, cuốn h&uacute;t lu&ocirc;n l&agrave;m người ta phải say đắm.<br />\r\nGiường ngủ bọc nỉ hiện đại l&agrave; những mẫu giường ngủ mang tiếng n&oacute;i của sự năng động, mới mẻ v&agrave; sức trẻ. Giường bọc hiện đại tập trung v&agrave;o c&ocirc;ng năng sử dụng, đơn giản h&oacute;a c&aacute;c họa tiết hoa văn rườm r&agrave;. Mang lại những diện mạo mới cho kh&ocirc;ng gian nội thất ph&ograve;ng ngủ.<br />\r\nGiường được l&agrave;m bằng gỗ c&ocirc;ng nghiệp MDF chống ẩm cao cấp, bao quanh b&ecirc;n ngo&agrave;i l&agrave; lớp nỉ mềm mại.T&ocirc;ng m&agrave;u xanh tạo sức h&uacute;t hấp dẫn cho kh&ocirc;ng gian ph&ograve;ng ngủ.Ngo&agrave;i ra, Nội thất Đăng Khoa nhận đặt đ&oacute;ng c&aacute;c mẫu giường ngủ theo k&iacute;ch thước v&agrave; mẫu m&atilde; kh&aacute;ch h&agrave;ng y&ecirc;u cầu, ph&ugrave; hợp phong c&aacute;ch v&agrave; kh&ocirc;ng gian căn ph&ograve;ng.</p>', 10, 'PN21', 5500000, 4500000, 7, 1, '2022-07-22 07:46:07', '2022-07-29 03:17:09', '/web_noi_that1/public/storage/uploads/3-noi-that-phong-ngu-mau-hong-noi-that-manh-he.jpg'),
(23, 'Phòng ngủ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>Giường ngủ gỗ c&ocirc;ng nghiệp bọc nỉ &ndash; GNDK09. Mẫu giường ngủ đơn giản, mang n&eacute;t đẹp tinh tế, sang trọng, ki&ecirc;u sa, cuốn h&uacute;t lu&ocirc;n l&agrave;m người ta phải say đắm.<br />\r\nGiường ngủ bọc nỉ hiện đại l&agrave; những mẫu giường ngủ mang tiếng n&oacute;i của sự năng động, mới mẻ v&agrave; sức trẻ. Giường bọc hiện đại tập trung v&agrave;o c&ocirc;ng năng sử dụng, đơn giản h&oacute;a c&aacute;c họa tiết hoa văn rườm r&agrave;. Mang lại những diện mạo mới cho kh&ocirc;ng gian nội thất ph&ograve;ng ngủ.<br />\r\nGiường được l&agrave;m bằng gỗ c&ocirc;ng nghiệp MDF chống ẩm cao cấp, bao quanh b&ecirc;n ngo&agrave;i l&agrave; lớp nỉ mềm mại.T&ocirc;ng m&agrave;u xanh tạo sức h&uacute;t hấp dẫn cho kh&ocirc;ng gian ph&ograve;ng ngủ.Ngo&agrave;i ra, Nội thất Đăng Khoa nhận đặt đ&oacute;ng c&aacute;c mẫu giường ngủ theo k&iacute;ch thước v&agrave; mẫu m&atilde; kh&aacute;ch h&agrave;ng y&ecirc;u cầu, ph&ugrave; hợp phong c&aacute;ch v&agrave; kh&ocirc;ng gian căn ph&ograve;ng.</p>', 10, 'PN22', 5500000, 4500000, 1, 1, '2022-07-22 07:46:22', '2022-07-29 06:21:50', '/web_noi_that1/public/storage/uploads/16-Phong-ngu-hien-dai-mau-xam-1.webp'),
(24, 'Phòng ngủ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', NULL, 10, 'PN23', 5500000, 4500000, 0, 1, '2022-07-22 07:46:38', '2022-07-22 07:46:38', '/web_noi_that1/public/storage/uploads/dien-tich-phong-ngu-chuan.jpg'),
(25, 'Phòng ngủ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>Giường ngủ gỗ c&ocirc;ng nghiệp bọc nỉ &ndash; GNDK09. Mẫu giường ngủ đơn giản, mang n&eacute;t đẹp tinh tế, sang trọng, ki&ecirc;u sa, cuốn h&uacute;t lu&ocirc;n l&agrave;m người ta phải say đắm.<br />\r\nGiường ngủ bọc nỉ hiện đại l&agrave; những mẫu giường ngủ mang tiếng n&oacute;i của sự năng động, mới mẻ v&agrave; sức trẻ. Giường bọc hiện đại tập trung v&agrave;o c&ocirc;ng năng sử dụng, đơn giản h&oacute;a c&aacute;c họa tiết hoa văn rườm r&agrave;. Mang lại những diện mạo mới cho kh&ocirc;ng gian nội thất ph&ograve;ng ngủ.<br />\r\nGiường được l&agrave;m bằng gỗ c&ocirc;ng nghiệp MDF chống ẩm cao cấp, bao quanh b&ecirc;n ngo&agrave;i l&agrave; lớp nỉ mềm mại.T&ocirc;ng m&agrave;u xanh tạo sức h&uacute;t hấp dẫn cho kh&ocirc;ng gian ph&ograve;ng ngủ.Ngo&agrave;i ra, Nội thất Đăng Khoa nhận đặt đ&oacute;ng c&aacute;c mẫu giường ngủ theo k&iacute;ch thước v&agrave; mẫu m&atilde; kh&aacute;ch h&agrave;ng y&ecirc;u cầu, ph&ugrave; hợp phong c&aacute;ch v&agrave; kh&ocirc;ng gian căn ph&ograve;ng.</p>', 10, 'PN24', 5500000, 4500000, 0, 1, '2022-07-22 07:46:56', '2022-07-22 07:46:56', '/web_noi_that1/public/storage/uploads/noi-that-phong-ngu-gia-re-1_1.jpg'),
(26, 'Phòng ngủ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>Giường ngủ gỗ c&ocirc;ng nghiệp bọc nỉ &ndash; GNDK09. Mẫu giường ngủ đơn giản, mang n&eacute;t đẹp tinh tế, sang trọng, ki&ecirc;u sa, cuốn h&uacute;t lu&ocirc;n l&agrave;m người ta phải say đắm.<br />\r\nGiường ngủ bọc nỉ hiện đại l&agrave; những mẫu giường ngủ mang tiếng n&oacute;i của sự năng động, mới mẻ v&agrave; sức trẻ. Giường bọc hiện đại tập trung v&agrave;o c&ocirc;ng năng sử dụng, đơn giản h&oacute;a c&aacute;c họa tiết hoa văn rườm r&agrave;. Mang lại những diện mạo mới cho kh&ocirc;ng gian nội thất ph&ograve;ng ngủ.<br />\r\nGiường được l&agrave;m bằng gỗ c&ocirc;ng nghiệp MDF chống ẩm cao cấp, bao quanh b&ecirc;n ngo&agrave;i l&agrave; lớp nỉ mềm mại.T&ocirc;ng m&agrave;u xanh tạo sức h&uacute;t hấp dẫn cho kh&ocirc;ng gian ph&ograve;ng ngủ.Ngo&agrave;i ra, Nội thất Đăng Khoa nhận đặt đ&oacute;ng c&aacute;c mẫu giường ngủ theo k&iacute;ch thước v&agrave; mẫu m&atilde; kh&aacute;ch h&agrave;ng y&ecirc;u cầu, ph&ugrave; hợp phong c&aacute;ch v&agrave; kh&ocirc;ng gian căn ph&ograve;ng.</p>', 10, 'PN25', 5500000, 4500000, 1, 1, '2022-07-22 07:47:09', '2022-07-29 03:32:01', '/web_noi_that1/public/storage/uploads/thiet-ke-phong-ngu-15m2-1-640x426.jpg'),
(27, 'Phòng ngủ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>Giường ngủ gỗ c&ocirc;ng nghiệp bọc nỉ &ndash; GNDK09. Mẫu giường ngủ đơn giản, mang n&eacute;t đẹp tinh tế, sang trọng, ki&ecirc;u sa, cuốn h&uacute;t lu&ocirc;n l&agrave;m người ta phải say đắm.<br />\r\nGiường ngủ bọc nỉ hiện đại l&agrave; những mẫu giường ngủ mang tiếng n&oacute;i của sự năng động, mới mẻ v&agrave; sức trẻ. Giường bọc hiện đại tập trung v&agrave;o c&ocirc;ng năng sử dụng, đơn giản h&oacute;a c&aacute;c họa tiết hoa văn rườm r&agrave;. Mang lại những diện mạo mới cho kh&ocirc;ng gian nội thất ph&ograve;ng ngủ.<br />\r\nGiường được l&agrave;m bằng gỗ c&ocirc;ng nghiệp MDF chống ẩm cao cấp, bao quanh b&ecirc;n ngo&agrave;i l&agrave; lớp nỉ mềm mại.T&ocirc;ng m&agrave;u xanh tạo sức h&uacute;t hấp dẫn cho kh&ocirc;ng gian ph&ograve;ng ngủ.Ngo&agrave;i ra, Nội thất Đăng Khoa nhận đặt đ&oacute;ng c&aacute;c mẫu giường ngủ theo k&iacute;ch thước v&agrave; mẫu m&atilde; kh&aacute;ch h&agrave;ng y&ecirc;u cầu, ph&ugrave; hợp phong c&aacute;ch v&agrave; kh&ocirc;ng gian căn ph&ograve;ng.</p>', 10, 'PN26', 5500000, 4500000, 4, 1, '2022-07-22 07:47:24', '2022-07-30 04:21:22', '/web_noi_that1/public/storage/uploads/thiet-ke-phong-ngu-15m2-1-640x426.jpg'),
(28, 'Phòng ngủ', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', NULL, 10, 'PN27', 5500000, 4500000, 0, 1, '2022-07-22 07:47:37', '2022-07-22 07:47:37', '/web_noi_that1/public/storage/uploads/thiet-ke-phong-ngu-nho-7m2-09.jpg'),
(29, 'Bàn trang điểm', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', NULL, 12, 'BTĐ28', 4500000, 4000000, 3, 1, '2022-07-22 07:51:36', '2022-07-29 04:32:58', '/web_noi_that1/public/storage/uploads/15-ban-trang-diem-don-gian.jpg'),
(30, 'Bàn trang điểm', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>B&agrave;n trang điểm k&egrave;m ghế nhập khẩu &ndash; BTDDK06 &nbsp;gi&aacute; chỉ từ 4700k cho nguy&ecirc;n bộ bao gồm B&agrave;n, Gương tr&ograve;n, Ghế ho&agrave;ng tộc cực k&igrave; đẹp mắt v&agrave; sang trọng cho c&aacute;c qu&yacute; c&ocirc;.</p>\r\n\r\n<p><strong>Chất liệu:&nbsp;</strong>B&agrave;n mặt kiếng, Gỗ c&ocirc;ng nghiệp chuy&ecirc;n d&ugrave;ng cho nội thất, được phun sơn chống bong tr&oacute;c, c&oacute; khả năng chống ẩm v&agrave; mối mọt, đặc biệt kh&ocirc;ng bị ố v&agrave;ng trong qu&aacute; tr&igrave;nh sử dụng.</p>', 12, 'BTĐ29', 4500000, 4000000, 0, 1, '2022-07-22 07:51:51', '2022-07-22 07:51:51', '/web_noi_that1/public/storage/uploads/Ban-phan-trang-diem-53.webp'),
(31, 'Bàn trang điểm', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>B&agrave;n trang điểm k&egrave;m ghế nhập khẩu &ndash; BTDDK06 &nbsp;gi&aacute; chỉ từ 4700k cho nguy&ecirc;n bộ bao gồm B&agrave;n, Gương tr&ograve;n, Ghế ho&agrave;ng tộc cực k&igrave; đẹp mắt v&agrave; sang trọng cho c&aacute;c qu&yacute; c&ocirc;.</p>\r\n\r\n<p><strong>Chất liệu:&nbsp;</strong>B&agrave;n mặt kiếng, Gỗ c&ocirc;ng nghiệp chuy&ecirc;n d&ugrave;ng cho nội thất, được phun sơn chống bong tr&oacute;c, c&oacute; khả năng chống ẩm v&agrave; mối mọt, đặc biệt kh&ocirc;ng bị ố v&agrave;ng trong qu&aacute; tr&igrave;nh sử dụng.</p>', 12, 'BTĐ30', 4500000, 4000000, 0, 1, '2022-07-22 07:52:07', '2022-07-22 07:52:07', '/web_noi_that1/public/storage/uploads/ban-trang-diem-btddk01-3.jpg'),
(32, 'Bàn trang điểm', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>B&agrave;n trang điểm k&egrave;m ghế nhập khẩu &ndash; BTDDK06 &nbsp;gi&aacute; chỉ từ 4700k cho nguy&ecirc;n bộ bao gồm B&agrave;n, Gương tr&ograve;n, Ghế ho&agrave;ng tộc cực k&igrave; đẹp mắt v&agrave; sang trọng cho c&aacute;c qu&yacute; c&ocirc;.</p>\r\n\r\n<p><strong>Chất liệu:&nbsp;</strong>B&agrave;n mặt kiếng, Gỗ c&ocirc;ng nghiệp chuy&ecirc;n d&ugrave;ng cho nội thất, được phun sơn chống bong tr&oacute;c, c&oacute; khả năng chống ẩm v&agrave; mối mọt, đặc biệt kh&ocirc;ng bị ố v&agrave;ng trong qu&aacute; tr&igrave;nh sử dụng.</p>', 12, 'BTĐ31', 4500000, 4000000, 1, 1, '2022-07-22 07:52:21', '2022-07-30 04:09:16', '/web_noi_that1/public/storage/uploads/ban-trang-diem-go-cong-nghiep-210118-31.jpg'),
(33, 'Bàn trang điểm', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>B&agrave;n trang điểm k&egrave;m ghế nhập khẩu &ndash; BTDDK06 &nbsp;gi&aacute; chỉ từ 4700k cho nguy&ecirc;n bộ bao gồm B&agrave;n, Gương tr&ograve;n, Ghế ho&agrave;ng tộc cực k&igrave; đẹp mắt v&agrave; sang trọng cho c&aacute;c qu&yacute; c&ocirc;.</p>\r\n\r\n<p><strong>Chất liệu:&nbsp;</strong>B&agrave;n mặt kiếng, Gỗ c&ocirc;ng nghiệp chuy&ecirc;n d&ugrave;ng cho nội thất, được phun sơn chống bong tr&oacute;c, c&oacute; khả năng chống ẩm v&agrave; mối mọt, đặc biệt kh&ocirc;ng bị ố v&agrave;ng trong qu&aacute; tr&igrave;nh sử dụng.</p>', 12, 'BTĐ32', 4500000, 4000000, 23, 1, '2022-07-22 07:52:33', '2022-08-04 11:32:35', '/web_noi_that1/public/storage/uploads/c538add5a5dd67833ecc.jpg'),
(34, 'Bàn trang điểm', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>B&agrave;n trang điểm k&egrave;m ghế nhập khẩu &ndash; BTDDK06 &nbsp;gi&aacute; chỉ từ 4700k cho nguy&ecirc;n bộ bao gồm B&agrave;n, Gương tr&ograve;n, Ghế ho&agrave;ng tộc cực k&igrave; đẹp mắt v&agrave; sang trọng cho c&aacute;c qu&yacute; c&ocirc;.</p>\r\n\r\n<p><strong>Chất liệu:&nbsp;</strong>B&agrave;n mặt kiếng, Gỗ c&ocirc;ng nghiệp chuy&ecirc;n d&ugrave;ng cho nội thất, được phun sơn chống bong tr&oacute;c, c&oacute; khả năng chống ẩm v&agrave; mối mọt, đặc biệt kh&ocirc;ng bị ố v&agrave;ng trong qu&aacute; tr&igrave;nh sử dụng.</p>', 12, 'BTĐ33', 4500000, 4000000, 1, 1, '2022-07-22 07:52:52', '2022-08-04 11:32:39', '/web_noi_that1/public/storage/uploads/mau-ban-trang-diem-ket-hop-ban-lam-viec.jpg'),
(35, 'Bàn trang điểm', 'Trắng', '1m x 0.5m x 1.2m', 'Gỗ', 'Thiết kế của Nội Thất Phúc Thịnh', NULL, '6 tháng', '<p>B&agrave;n trang điểm k&egrave;m ghế nhập khẩu &ndash; BTDDK06 &nbsp;gi&aacute; chỉ từ 4700k cho nguy&ecirc;n bộ bao gồm B&agrave;n, Gương tr&ograve;n, Ghế ho&agrave;ng tộc cực k&igrave; đẹp mắt v&agrave; sang trọng cho c&aacute;c qu&yacute; c&ocirc;.</p>\r\n\r\n<p><strong>Chất liệu:&nbsp;</strong>B&agrave;n mặt kiếng, Gỗ c&ocirc;ng nghiệp chuy&ecirc;n d&ugrave;ng cho nội thất, được phun sơn chống bong tr&oacute;c, c&oacute; khả năng chống ẩm v&agrave; mối mọt, đặc biệt kh&ocirc;ng bị ố v&agrave;ng trong qu&aacute; tr&igrave;nh sử dụng.</p>', 12, 'BTĐ34', 4500000, 4000000, 6, 1, '2022-07-22 07:53:10', '2022-07-30 04:08:53', '/web_noi_that1/public/storage/uploads/z3582245659389_f748edd86a34dcb187fcd606a17dc1a1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products_details`
--

CREATE TABLE `products_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sp` int(11) NOT NULL,
  `thumb_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_by` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `url`, `thumb`, `sort_by`, `active`, `created_at`, `updated_at`) VALUES
(3, 'Bàn trang điểm', 'http://192.168.1.111/web_noi_that1/public/danh-muc/12-ban-trang-diem.html', '/web_noi_that1/public/storage/uploads/BANNER1.png', 4, 1, '2022-07-18 21:46:11', '2022-07-30 03:00:35'),
(4, 'Decor Phòng', 'http://192.168.1.111/web_noi_that1/public/danh-muc/3-decor-phong.html', '/web_noi_that1/public/storage/uploads/DECOR PHÒNG.jpg', 1, 1, '2022-07-18 21:47:02', '2022-07-30 01:59:45'),
(5, 'Phòng ngủ', 'http://192.168.1.111/web_noi_that1/public/danh-muc/10-phong-ngu.html', '/web_noi_that1/public/storage/uploads/Slide1.JPG', 2, 1, '2022-07-29 06:15:53', '2022-07-30 03:00:13'),
(6, 'Kệ trang trí', 'http://192.168.1.111/web_noi_that1/public/danh-muc/25-ke-trang-tri.html', '/web_noi_that1/public/storage/uploads/ke_banner.jpg', 3, 1, '2022-07-29 07:33:33', '2022-07-30 03:00:26'),
(7, 'banner website', 'http://192.168.1.111/web_noi_that1/public/', '/web_noi_that1/public/storage/uploads_slider/banner website.jpg', 0, 1, '2022-07-30 02:53:55', '2022-07-30 02:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$UxKN065oVC.VsSPMF3ippuQ6d2RZo5Dbf1MxqUMzwMqcjrRbRIuEi', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_details`
--
ALTER TABLE `products_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products_details`
--
ALTER TABLE `products_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
