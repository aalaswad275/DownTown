-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2026 at 09:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `downtowndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `icon` varchar(255) DEFAULT 'fa fa-folder',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `name`, `image`, `icon`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Historical Landmark', 'مَعْلَم تاريخي', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(2, 'Archaeological Site', 'مَعْلَم أثري', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(3, 'Old City', 'مدينة قديمة', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(4, 'Museum', 'متحف', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(5, 'Palace', 'قصر', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(6, 'Castle', 'قلعة', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(7, 'Mosque', 'مسجد', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(8, 'Mausoleum', 'ضريح', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(9, 'Religious Site', 'موقع ديني', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(10, 'Beach', 'شاطئ', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(11, 'Mountain', 'جبل', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(12, 'Oasis', 'واحة', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(13, 'Desert', 'صحراء', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(14, 'Nature Reserve', 'محمية طبيعية', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(15, 'Lake', 'بحيرة', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(16, 'Valley', 'وادي', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(17, 'Adventure', 'مغامرات', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(18, 'Shopping Center', 'مركز تسوق', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(19, 'Public Park', 'حديقة عامة', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(20, 'Resort', 'منتجع سياحي', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(21, 'Cultural Center', 'مركز ثقافي', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(22, 'Entertainment Center', 'مركز ترفيهي', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(23, 'Traditional Market', 'سوق شعبي', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(24, 'Theater', 'مسرح', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(25, 'Public Square', 'ساحة عامة', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(26, 'Convention Center', 'مركز مؤتمرات', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(27, 'Architectural Landmark', 'معلم معماري', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(28, 'Spring', 'ينبوع', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(29, 'Cave', 'كهف', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47'),
(30, 'Dam', 'سد', 'default.png', 'fa fa-folder', 1, '2025-11-26 11:12:47', '2025-11-26 11:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `state_ar` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name_en`, `name`, `state`, `state_ar`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Benghazi', 'بنغازي', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(2, 'Al-Kwayfiya', 'الكويفية', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(3, 'Garyounis', 'قاريونس', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(4, 'Al-Laithi', 'اللثامة', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(5, 'Bouatni', 'بوعطني', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(6, 'Al Marj', 'المرج', 'Marj District', 'بلدية المرج', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(7, 'Taknis', 'تكنس', 'Marj District', 'بلدية المرج', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(8, 'Suluq', 'سلوق', 'Marj District', 'بلدية المرج', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(9, 'Geminis', 'قمينس', 'Marj District', 'بلدية المرج', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(10, 'Al Bayda', 'البيضاء', 'Jabal Al Akhdar', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(11, 'Shahat', 'شحات', 'Jabal Al Akhdar', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(12, 'Al Qubbah', 'القبة', 'Jabal Al Akhdar', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(13, 'Al Wasita', 'الواسطة', 'Jabal Al Akhdar', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(14, 'Umm Ruwaba', 'أم الروابة', 'Jabal Al Akhdar', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(15, 'Derna', 'درنة', 'Derna District', 'بلدية درنة', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(16, 'Al Fataih', 'الفتائح', 'Derna District', 'بلدية درنة', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(17, 'Ras Al-Hilal', 'رأس الهلال', 'Derna District', 'بلدية درنة', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(18, 'Al Qalaa', 'القلعة', 'Derna District', 'بلدية درنة', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(19, 'Tobruk', 'طبرق', 'Butnan District', 'بلدية البطنان', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(20, 'Bardiyah', 'بردية', 'Butnan District', 'بلدية البطنان', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(21, 'Umm Saad', 'أم سعد', 'Butnan District', 'بلدية البطنان', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(22, 'Kambut', 'كمبوت', 'Butnan District', 'بلدية البطنان', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(23, 'Jaghbub', 'الجغبوب', 'Butnan District', 'بلدية البطنان', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(24, 'Ajdabiya', 'أجدابيا', 'Gulfs District', 'بلدية الواحات', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(25, 'Jalo', 'جالو', 'Gulfs District', 'بلدية الواحات', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(26, 'Awjila', 'أوجلة', 'Gulfs District', 'بلدية الواحات', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(27, 'Maradah', 'مرادة', 'Gulfs District', 'بلدية الواحات', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(28, 'Kufra', 'الكفرة', 'Kufra District', 'بلدية الكفرة', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(29, 'Rebiana', 'ربيانة', 'Kufra District', 'بلدية الكفرة', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(30, 'Tazerbo', 'تازربو', 'Kufra District', 'بلدية الكفرة', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(31, 'Shahhat', 'شحات', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(32, 'Al Haniya', 'الهانية', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(33, 'Susa', 'سوسة', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(34, 'Al Tamimi', 'التميمي', 'Derna District', 'بلدية درنة', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(35, 'Lamluda', 'لاملودة', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(36, 'Bir Al-Ghanam', 'بئر الغنم', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(37, 'Faidiyah', 'الفايدية', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(38, 'Al Bayyada', 'البيّاضة', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(39, 'Al Haniyah', 'الهانية', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(40, 'Wadi Jara', 'وادي جارة', 'Marj District', 'بلدية المرج', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(41, 'Abyar', 'الأبيار', 'Marj District', 'بلدية المرج', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(42, 'Qarnadah', 'قرنادة', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(43, 'Masah', 'مسّه', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(44, 'Martuba', 'مرتوبة', 'Derna District', 'بلدية درنة', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(45, 'Al Hazm', 'الحازم', 'Derna District', 'بلدية درنة', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(46, 'Sidi Khalifa', 'سيدي خليفة', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(47, 'Benina', 'بنينة', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(48, 'Hawari', 'الهواري', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(49, 'Qawarsha', 'القوارشة', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(50, 'Bu Atni', 'بوعطني', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(51, 'Tokra', 'توكرة', 'Marj District', 'بلدية المرج', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(52, 'Abyar', 'الأبيار', 'Marj District', 'بلدية المرج', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(53, 'Qminis', 'قمينس', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(54, 'Sidi Hussein', 'سيدي حسين', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(55, 'Al Abyar', 'الأبيار', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(56, 'Wadi Al Kuf', 'وادي الكوف', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(57, 'Farzougha', 'فرزوقة', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(58, 'Bu Mraigha', 'بو مريغة', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(59, 'Bir Al-Tuta', 'بئر التوتة', 'Jabal Al Akhdar', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(60, 'Al Marag', 'المَراغ', 'Jabal Al Akhdar', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(61, 'Susa East', 'سوسة الشرقية', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(62, 'Susa West', 'سوسة الغربية', 'Green Mountain', 'الجبل الأخضر', 23, '2025-11-26 11:14:24', '2025-11-26 11:14:24'),
(63, 'Tripoli', 'طرابلس', 'Tripoli District', 'بلدية طرابلس', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(64, 'Benghazi', 'بنغازي', 'Benghazi District', 'بلدية بنغازي', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(65, 'Misrata', 'مصراتة', 'Misrata District', 'بلدية مصراتة', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(66, 'Zawiya', 'الزاوية', 'Zawiya District', 'بلدية الزاوية', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(67, 'Sabha', 'سبها', 'Sabha District', 'بلدية سبها', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(68, 'Zliten', 'زليتن', 'Misrata District', 'بلدية مصراتة', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(69, 'Sabratha', 'صبراتة', 'Zawiya District', 'بلدية الزاوية', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(70, 'Surman', 'صرمان', 'Zawiya District', 'بلدية الزاوية', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(71, 'Zuwara', 'زوارة', 'Nalut District', 'بلدية نالوت', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(72, 'Nalut', 'نالوت', 'Nalut District', 'بلدية نالوت', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(73, 'Gharyan', 'غريان', 'Jabal al Gharbi', 'الجبل الغربي', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(74, 'Zintan', 'الزنتان', 'Jabal al Gharbi', 'الجبل الغربي', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(75, 'Yefren', 'يفرن', 'Jabal al Gharbi', 'الجبل الغربي', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(76, 'Ghadames', 'غدامس', 'Nalut District', 'بلدية نالوت', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(77, 'Khoms', 'الخمس', 'Murqub District', 'بلدية المرقب', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(78, 'Tobruk', 'طبرق', 'Butnan District', 'بلدية البطنان', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(79, 'Bayda', 'البيضاء', 'Jabal al Akhdar', 'الجبل الأخضر', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(80, 'Marj', 'المرج', 'Marj District', 'بلدية المرج', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(81, 'Derna', 'درنة', 'Derna District', 'بلدية درنة', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(82, 'Ajdabiya', 'اجدابيا', 'Gulf District', 'منطقة الخليج', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(83, 'Sirte', 'سرت', 'Sirte District', 'بلدية سرت', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(84, 'Waddan', 'ودان', 'Jufra District', 'بلدية الجفرة', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(85, 'Hun', 'هون', 'Jufra District', 'بلدية الجفرة', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(86, 'Sokna', 'سوكنة', 'Jufra District', 'بلدية الجفرة', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(87, 'Ghat', 'غات', 'Ghat District', 'بلدية غات', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(88, 'Ubari', 'أوباري', 'Wadi al Hayaa', 'وادي الحياة', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(89, 'Murzuq', 'مرزق', 'Murzuq District', 'بلدية مرزق', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(90, 'Qatroun', 'القطرون', 'Murzuq District', 'بلدية مرزق', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(91, 'Brak al-Shati', 'براك الشاطئ', 'Wadi al Shatii', 'وادي الشاطئ', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(92, 'Jalu', 'جالو', 'Gulf District', 'منطقة الخليج', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(93, 'Ojla', 'أوجلة', 'Gulf District', 'منطقة الخليج', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(94, 'Shahat', 'شحات', 'Jabal al Akhdar', 'الجبل الأخضر', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(95, 'Quba', 'القبة', 'Jabal al Akhdar', 'الجبل الأخضر', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(96, 'Tokra', 'توكرة', 'Marj District', 'بلدية المرج', 23, '2025-11-26 11:15:14', '2025-11-26 11:15:14'),
(97, 'Sebha', 'سبها', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(98, 'Al Haruj', 'الهروج', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(99, 'Murzuq', 'مرزق', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(100, 'Ubari', 'أوباري', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(101, 'Ghat', 'غات', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(102, 'Brak Al Shati', 'براك الشاطئ', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(103, 'Al Shati', 'الشاطئ', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(104, 'Al Qardah Al Shati', 'القرضة الشاطئ', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(105, 'Al Qaryat', 'القريات', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(106, 'Tamsa', 'تمسة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(107, 'Al Qeera', 'القيرة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(108, 'Zuwila', 'زويلة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(109, 'Taraghin', 'تراغن', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(110, 'Al Qatrun', 'القطرون', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(111, 'Amazur', 'أمزور', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(112, 'Al Barkat', 'البركت', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(113, 'Tendrah', 'تاندره', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(114, 'Tamenhint', 'تمنهنت', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(115, 'Samnu', 'سمنو', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(116, 'Al Mahrouqa', 'المحروقة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(117, 'Al Mujarrar', 'المجرار', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(118, 'Zella Fezzan', 'زلّة فزان', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(119, 'Al Wadi', 'الوادي', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(120, 'Wadi Al Shati', 'وادي الشاطئ', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(121, 'Al Ghurayfa', 'الغريفة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(122, 'Al Fujayj', 'الفجيج', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(123, 'Al Qutayfa', 'القطيفة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(124, 'Isin', 'إيسين', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(125, 'Tinzarft', 'تينزرفت', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(126, 'Tinikrah', 'تينيكره', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(127, 'Al Hufrah', 'الحفرة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(128, 'Hatah', 'حاتة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(129, 'Al Baytanah', 'البيطانة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(130, 'Al Kameen', 'الكمين', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(131, 'Al Rukubah', 'الركوبة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(132, 'Al Sweidia', 'السويدية', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(133, 'Wadi Al Bawanis', 'وادي البوانيس', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(134, 'Khums Al Shati', 'خُمس الشاطئ', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(135, 'Al Zighan', 'الزيغن', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(136, 'Al Fuqaha', 'الفقهاء', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(137, 'Marsita', 'مرسيطة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(138, 'Tahala', 'تهالا', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(139, 'Wan', 'وان', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(140, 'Al Duwemees', 'الدويميس', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(141, 'Al Tiyara', 'الطيارة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(142, 'Al Zighan', 'الزيغن', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(143, 'Jakhrah', 'جخرة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(144, 'Al Hasnawiya', 'الحسناوية', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(145, 'Umm Al Aranib', 'أم الأرانب', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(146, 'Al Wigha', 'الوغة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(147, 'Qeera Brak', 'قيرة براك', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(148, 'Tabreq', 'تبرق', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(149, 'Al Sayeh', 'السايح', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(150, 'Al Hajil', 'الحجيل', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(151, 'Al Jadeed Village', 'قرية الجديد', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(152, 'Al Hijra', 'الهجرة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(153, 'Al Awaynat', 'العوينات', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(154, 'Old Tahala', 'تهالا القديمة', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11'),
(155, 'South Harawa', 'هراوة الجنوبية', 'Fezzan', 'فزان', 23, '2025-11-26 11:22:11', '2025-11-26 11:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `landmark_id` int(11) DEFAULT 0,
  `store_id` int(11) DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `landmark_id`, `store_id`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'علي', 'جميلة', 9, 0, 1, 2, '2026-01-03 22:45:03', '2026-01-03 22:45:03'),
(2, 'اميرة', 'المكان جميل جدًا ويستحق الزيارة، الأجواء رائعة والمنظر خلاب.', 9, 0, 0, NULL, '2026-01-03 20:54:52', '2026-01-03 20:54:52'),
(3, 'محمد', 'المكان جميل جدًا ويستحق الزيارة، الأجواء رائعة والمنظر خلاب.', 9, 0, 0, NULL, '2026-01-03 20:56:56', '2026-01-03 20:56:56'),
(4, 'مسرة', 'المكان جميل جدًا ويستحق الزيارة، الأجواء رائعة والمنظر خلاب.', 9, 0, 0, NULL, '2026-01-03 21:00:23', '2026-01-03 21:00:23'),
(5, 'Adam ', 'very nice place', 9, 0, 0, NULL, '2026-01-04 13:03:58', '2026-01-04 13:03:58'),
(6, 'mike', 'very nice place', 9, 0, 0, NULL, '2026-01-04 13:05:02', '2026-01-04 13:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `landmark_id` int(11) DEFAULT NULL,
  `store_id` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landmarks`
--

CREATE TABLE `landmarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gallery` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`gallery`)),
  `address` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tags`)),
  `latitude` decimal(10,7) DEFAULT NULL,
  `longtude` decimal(10,7) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `opening_hours` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`opening_hours`)),
  `ratings` double(2,1) NOT NULL DEFAULT 0.0,
  `views` int(11) NOT NULL DEFAULT 0,
  `main` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landmarks`
--

INSERT INTO `landmarks` (`id`, `name`, `slug`, `description`, `image`, `gallery`, `address`, `location`, `city_id`, `category`, `tags`, `latitude`, `longtude`, `website`, `phone`, `active`, `opening_hours`, `ratings`, `views`, `main`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 'متحف السرايا الحمراء', 'mthf-alsraya-alhmraaa-694d587f0cfd0', 'متحف تاريخي يقع في قلب مدينة طرابلس، يضم مجموعات ثقافية وتاريخية وآثار تعكس حضارة ليبيا عبر العصور.', '1766676607-photo_2025-12-25_17-19-02.jpg', '[\"frontend\\/img\\/landmarks\\/gallery\\/1766676607_IMG_5437.JPG\",\"frontend\\/img\\/landmarks\\/gallery\\/1766676607_photo_2025-12-25_17-18-38.jpg\",\"frontend\\/img\\/landmarks\\/gallery\\/1766676607_photo_2025-12-25_17-19-08.jpg\"]', 'طرابلس – السرايا الحمراء', NULL, 63, '4', '\"[\\\"\\\\u0645\\\\u0639\\\\u0644\\\\u0645\\\\u0627\\\\u062b\\\\u0627\\\\u0631\\\\u064a\\\",\\\"\\\\u0627\\\\u0644\\\\u0645\\\\u062f\\\\u064a\\\\u0646\\\\u0629\\\\u0627\\\\u0644\\\\u0642\\\\u062f\\\\u064a\\\\u0645\\\\u0629\\\",\\\"\\\\u0645\\\\u062a\\\\u062d\\\\u0641\\\\u060c\\\\u062a\\\\u0627\\\\u0631\\\\u064a\\\\u062e\\\\u060c\\\\u0633\\\\u064a\\\\u0627\\\\u062d\\\\u0629\\\\u060c\\\\u062b\\\\u0642\\\\u0627\\\\u0641\\\\u0629\\\"]\"', 32.8958377, 13.1804977, 'http://www.redcastle.ly', NULL, 1, '\"{\\\"Mon\\\":\\\"09:00-18:00\\\",\\\"Tue\\\":\\\"09:00-18:00\\\",\\\"Wed\\\":\\\"09:00-18:00\\\",\\\"Thu\\\":\\\"09:00-18:00\\\",\\\"Fri\\\":\\\"Closed\\\",\\\"Sat\\\":\\\"09:00-18:00\\\",\\\"Sun\\\":\\\"09:00-18:00\\\"}\"', 4.7, 96, 1, 1, '2025-12-25 13:30:07', '2026-01-06 13:54:34'),
(10, 'آثار صبراتة', 'athar-sbrat-6954d955329ae', '<p>آثار صبراتة هي</p><p>مدينة أثرية ليبية رائعة تعود للعصرين الروماني والبيزنطي، وأهم معالمها المسرح الروماني الكبير، والمنتديات (الفوروم)، والمعابد، والميناء، والحمامات، وكاتدرائية، وهي موقع مُدرج على قائمة <a href=\"https://www.google.com/search?client=firefox-b-d&amp;q=%D8%A7%D9%84%D8%AA%D8%B1%D8%A7%D8%AB+%D8%A7%D9%84%D8%B9%D8%A7%D9%84%D9%85%D9%8A+%D9%84%D9%84%D9%8A%D9%88%D9%86%D8%B3%D9%83%D9%88&amp;mstk=AUtExfDOFoYTrmQh_16_THk-5cDIWw6QXbrCb9sh2SDnYtOo3aKaoC8LI8zpZJUo-HgqN2UILfIZe_7rcNQJQTQ8HHTtjRxa4x-G1nhybxHoafKyQJONwTdQEy07FI0pkT3bthzEhiuW5Jh7nERYVfWG8Mu3EiGlCBOR9PRBiw4fMrrnxqM&amp;csui=3&amp;ved=2ahUKEwismLa5reeRAxWyVaQEHc5ZLVEQgK4QegQIARAC\">التراث العالمي لليونسكو</a> (لكن مُهدد بالخطر)، وتضم كنوزاً من الفسيفساء والنصب التذكارية التي تم الكشف عنها جزئياً من خلال أعمال التنقيب الإيطالية والليبية، وتمثل شاهدًا على الحضارات التي تعاقبت عليها.&nbsp;</p><p>&nbsp;</p><p><strong>أهم معالمها:</strong></p><p>&nbsp;</p><ul><li><strong>المسرح الروماني:</strong> أحد أكبر وأشهر مسارح شمال أفريقيا، ويُستخدم حالياً لإقامة الحفلات والمهرجانات.</li><li><strong>الميناء الروماني والبيزنطي:</strong> بقايا أرصفة وميناء قديم يطل على البحر.</li><li><strong>المنتدى (الفوروم):</strong> ساحة المدينة الرئيسية التي كانت تضم المباني العامة.</li><li><a href=\"https://www.google.com/search?client=firefox-b-d&amp;q=%D8%A7%D9%84%D8%A8%D8%A7%D8%B2%D9%8A%D9%84%D9%8A%D9%83%D8%A7&amp;mstk=AUtExfDOFoYTrmQh_16_THk-5cDIWw6QXbrCb9sh2SDnYtOo3aKaoC8LI8zpZJUo-HgqN2UILfIZe_7rcNQJQTQ8HHTtjRxa4x-G1nhybxHoafKyQJONwTdQEy07FI0pkT3bthzEhiuW5Jh7nERYVfWG8Mu3EiGlCBOR9PRBiw4fMrrnxqM&amp;csui=3&amp;ved=2ahUKEwismLa5reeRAxWyVaQEHc5ZLVEQgK4QegQIAxAE\"><strong>البازيليكا</strong></a><strong>:</strong> دار العدالة والأسواق، وهي مبنى مستطيل الشكل مع حنية نصف دائرية للقضاء.</li><li><strong>المعابد:</strong> بقايا معابد متنوعة تعكس التأثيرات الرومانية والقرطاجية.</li><li><strong>الحمامات العامة:</strong> توجد بقايا حمامات رومانية شهيرة، مثل حمام \"أدريان\".</li><li><strong>المساكن:</strong> أحياء سكنية رومانية وبيزنطية تظهر نمط الحياة القديم.</li><li><strong>الأبراج والبوابات البيزنطية:</strong> أسوار وأبراج دفاعية شيدت لاحقاً.&nbsp;</li><li>&nbsp;</li></ul><p><strong>التاريخ والحماية:</strong></p><p>&nbsp;</p><ul><li>أسست كمدينة فينيقية ثم ازدهرت تحت الحكم الروماني والبيزنطي.</li><li>تعرضت لأضرار بسبب الزلازل (خاصة عام 365 م) والحروب.</li><li>تم التنقيب والحفر المكثف بين عامي 1923 و 1936، مما كشف عن معظم الآثار.</li><li>أدرجت كموقع تراث عالمي لليونسكو عام 1982، ولكن تم إضافتها لقائمة المواقع المهددة بالخطر عام 2016 بسبب الصراعات في ليبيا.&nbsp;</li><li>&nbsp;</li></ul><p><strong>زيارة الآثار:</strong></p><p>&nbsp;</p><ul><li>المدينة الأثرية هي متحف مفتوح يضم شوارع مرصوفة، وأعمدة، وأقواس، وتماثيل، وتُعتبر جوهرة الحضارات القديمة في شمال أفريقيا.</li></ul>', '1767168341-Slider1.jpg', '[\"frontend\\/img\\/landmarks\\/gallery\\/1767168341_Slider3.jpg\"]', 'مدخل صبراتة', NULL, 69, '2', '\"[]\"', 32.8036797, 12.4830412, 'https://www.archaeology.ly/gallaries/gallary/sabratha/index.html', NULL, 0, '\"{\\\"Mon\\\":\\\"00:00-12:00\\\",\\\"Tue\\\":\\\"Closed\\\",\\\"Wed\\\":\\\"Closed\\\",\\\"Thu\\\":\\\"Closed\\\",\\\"Fri\\\":\\\"Closed\\\",\\\"Sat\\\":\\\"Closed\\\",\\\"Sun\\\":\\\"Closed\\\"}\"', 0.0, 12, 1, 1, '2025-12-31 06:05:41', '2026-01-06 13:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_10_28_145129_create_sliders_table', 1),
(9, '2025_11_20_135341_create_landmarks_table', 2),
(10, '2025_11_25_152651_create_cities_table', 3),
(11, '2025_11_25_152730_create_categories_table', 3),
(12, '2025_11_30_134520_create_galleries_table', 4),
(13, '2025_11_30_150938_create_comments_table', 4),
(15, '2025_12_16_214755_create_stores_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `user_id`, `title`, `subtitle`, `description`, `image`, `link`, `order`, `active`, `created_at`, `updated_at`) VALUES
(8, 1, 'قوس ماركوس أوريليوس', 'Arch of Marcus Aurelius (Tripoli)', 'قوس ماركوس أوريليوس في مدينة طرابلس عاصمة ليبيا. هو قوس لتخليد ذكرى الإمبراطور الروماني ماركوس أوريليوس، والذي حكم في الفترة بين عامي (161 - 180).', '1766672882-Slider1.jpg', NULL, 0, 1, '2025-12-25 12:28:02', '2025-12-25 12:28:02'),
(9, 1, 'واحة صحراوية ذات كثبان رملية ذهبية', 'Desert Oasis with Golden Sand Dunes', 'صورة جوية خلابة من الأعلى تُظهر امتدادًا شاسعًا لصحراء ذهبية، حيث تمتد الكثبان الرملية الممتدة بلا نهاية تحت وهج غروب الشمس الدافئ. تتراقص ظلال طويلة ناعمة على الكثبان الرملية، مُبرزةً أنماطها الطبيعية. في قلب هذا المشهد القاحل، تُشكّل واحة صغيرة بلون الفيروز، تصطف على جانبيها أشجار النخيل الوارفة، تباينًا بصريًا لافتًا، مُستحضرةً السكينة وجمال الصحراء الخالد', '1766673209-Sldier2.jpg', NULL, 0, 1, '2025-12-25 12:33:29', '2025-12-25 12:33:29'),
(10, 1, 'مدينة شحات', 'شرق ليبيا', 'شحات أو قورينة (باليونانية: Κυρήνη – Kyrēnē)', '1767000108-Slider3.jpg', NULL, 0, 1, '2025-12-25 12:37:35', '2025-12-29 07:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `description`, `address`, `phone`, `email`, `image`, `longitude`, `latitude`, `type`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'c', 'v', 'v', '988', 'hh@gmail.com', '1767135205-Sldier2.jpg', NULL, NULL, NULL, 2, '2025-12-30 20:53:25', '2025-12-30 20:53:25'),
(2, 'c', 'v', 'v', '988', 'hh@gmail.com', '1767135428-Sldier2.jpg', NULL, NULL, NULL, 2, '2025-12-30 20:57:08', '2025-12-30 20:57:08'),
(3, 'الفندق الكبير', 'فندق', 'طرابلس', '09123456', 'info@mail.com', '1767540058-Slider1.jpg', NULL, NULL, NULL, 3, '2026-01-04 13:20:58', '2026-01-04 13:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'aa', 'a@admin.com', '2025-11-02 08:33:42', 'hfuiu90923587gubievjk', NULL, 0, '2025-11-02 08:33:42', '2025-11-02 08:33:42'),
(2, 'abd', 'aalaswad275@gmail.com', NULL, '$2y$12$c9kvbgAIv4moLqfq.HyOAuNUJhiWS1vz9q6Edwnb3ceFdrmmhXGnC', NULL, 1, '2025-12-30 13:20:56', '2025-12-30 13:20:56'),
(3, 'abdulrazag', 'abdulrazaalaswad@gmail.com', NULL, '$2y$12$O9/lRkrFW6xeSnQkQZJ4Z.iZvuWIsEv8LC5voiS9.AEis0oa2i37K', NULL, 0, '2026-01-04 13:20:12', '2026-01-04 13:20:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landmarks`
--
ALTER TABLE `landmarks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `landmarks_slug_unique` (`slug`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_user_id_foreign` (`user_id`),
  ADD KEY `sliders_order_index` (`order`),
  ADD KEY `sliders_active_index` (`active`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landmarks`
--
ALTER TABLE `landmarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
