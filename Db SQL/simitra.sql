-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 05:25 AM
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
-- Database: `simitra`
--

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `parent_id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
('97329c68-e8f8-4c68-aa43-a4acfbba7938', NULL, 'survei', 'Survei', '2022-09-05 20:51:22', '2022-09-05 20:51:22'),
('97329c7b-13a8-4866-9c8f-8ba94a3b7f5a', NULL, 'rekrutmen', 'Rekrutmen', '2022-09-05 20:51:34', '2022-09-05 20:51:34'),
('97329c8f-cc83-4e75-aedd-5703723baf78', NULL, 'rilis-statistik', 'Rilis Statistik', '2022-09-05 20:51:48', '2022-09-05 20:51:48');

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `user_id`, `post_type`, `code`, `title`, `slug`, `status`, `publish_date`, `excerpt`, `body`, `featured_image`, `featured_image_caption`, `metas`, `created_at`, `updated_at`, `deleted_at`) VALUES
('97329c51-ecf7-4435-ae3f-24e462151a46', '97325d04-2507-4863-851f-04c06098552a', 'post', 'n2mIdseQvWqs', 'Pengumuman Penerimaan Petugas Lapangan SP2020LF', 'pengumuman-penerimaan-petugas-lapangan-sp2020lf', 1, '2022-09-06 03:47:00', '<h5 class=\"judulberita\" style=\"font-family: &quot;Open Sans&quot;, sans-serif; line-height: 1.1; color: rgb(36, 36, 36); margin-top: 10px; margin-bottom: 5px; font-size: 14px;\"><a href=\"https://malangkota.bps.go.id/backend/fileMenu/Pengumuman-Penerimaan-Petugas-Lapangan-SP2020-Long-Form.pdf\" target=\"_blank\">https://malangkota.bps.go.id/backend/fileMenu/Pengumuman-Penerimaan-Petugas-Lapangan-SP2020-Long-Form.pdf</a>&nbsp;<br></h5>', '<p><span style=\"color: rgb(51, 51, 51); font-family: arial;\">Berdasarkan hasil seleksi Penerimaan Petugas Lapangan SP2020&nbsp;Long Form&nbsp;di BPS Kota Malang, daftar nama petugas pada tautan BPS Kota Malang.&nbsp;&nbsp;</span><span style=\"font-family: arial; font-size: 13.3333px; color: rgb(51, 51, 51);\">Demikian pengumuman ini dibuat.</span></p><div style=\"color: rgb(51, 51, 51); font-family: &quot;Segoe UI&quot;;\"><div align=\"justify\"><div><span style=\"font-family: Arial, Verdana; font-size: 13.3333px;\"><br></span></div></div></div>', 'http://localhost/storage/97329c51-fa67-432b-95a4-619708d1275b/bps.jpg', 'bps', '{\"keywords\":[\"Survei\"],\"description\":\"BPS Kota Malang\"}', '2022-09-05 20:51:07', '2022-09-05 20:51:07', NULL),
('97329d32-e379-4ebe-b4d9-d6742cd94e00', '97325d04-2507-4863-851f-04c06098552a', 'page', 'PCQhMsI8sMIE', 'Berita Rilis Statistik', 'berita-rilis-statistik', 1, '2022-09-06 03:52:00', NULL, '<p>Survei Harga Konsumen Bulan September</p>', NULL, NULL, NULL, '2022-09-05 20:53:35', '2022-09-05 20:53:35', NULL);

--
-- Dumping data for table `blog_posts_tags`
--

INSERT INTO `blog_posts_tags` (`post_id`, `tag_id`) VALUES
('97329c51-ecf7-4435-ae3f-24e462151a46', '97329c52-0d91-4e87-ab7d-5b9987b7842a');

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
('97329c52-0d91-4e87-ab7d-5b9987b7842a', 'survei', 'Survei', '2022-09-05 20:51:07', '2022-09-05 20:51:07');

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
('97328e25-74af-401c-8609-c84f22e65a6c', 'App\\Models\\Setting', '97325cea-f302-4bd2-97d7-6382acaad8e3', '63e3276e-b26e-4889-b953-eb65621fbbcb', 'images', 'simitra', 'simitra.png', 'image/png', 'public', 'public', 30475, '[]', '[]', '[]', '[]', 1, '2022-09-05 20:11:29', '2022-09-05 20:11:29'),
('97329c51-fa67-432b-95a4-619708d1275b', 'Modules\\Blog\\Entities\\Post', '97329c51-ecf7-4435-ae3f-24e462151a46', 'b1073773-54e8-4393-9b44-dc3b7a11006e', 'images', 'bps', 'bps.jpg', 'image/jpeg', 'public', 'public', 73758, '[]', '[]', '[]', '[]', 1, '2022-09-05 20:51:07', '2022-09-05 20:51:07');

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_11_07_031318_create_permission_tables', 1),
(14, '2021_02_12_083443_create_blog_tables', 1),
(15, '2021_02_16_174209_create_media_table', 1),
(16, '2021_11_03_161418_create_settings_table', 1);

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
('97325d04-089d-4546-a95c-27b83dee7b61', 'App\\Models\\User', '97325d04-2507-4863-851f-04c06098552a'),
('9732801d-a565-4286-bf64-428361a9a73d', 'App\\Models\\User', '97325d75-a6c7-4394-a821-f72e07359c87');

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
('97325cea-f8f9-4c3f-9f44-f95794e0a96e', 'view_users', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325cea-fa47-4761-b9fc-695bf63076c3', 'add_users', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325cea-fb4f-4fc9-a67f-7141113f2454', 'edit_users', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325ceb-0218-4c77-9a61-db3906afea61', 'delete_users', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325ceb-0310-47b7-97a1-979d49bd7385', 'view_roles', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325ceb-03cc-41bb-910f-0322a2f07219', 'add_roles', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325ceb-047f-44b1-977f-d95868fa3ad0', 'edit_roles', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325ceb-053c-4c18-9ed5-2f9d799b0a15', 'delete_roles', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325ceb-0664-4274-a45e-322b4a644722', 'view_settings', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325ceb-07a3-4f9d-af4c-d18f11d2fe00', 'add_settings', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325ceb-0883-40ef-b716-f274f90c6358', 'edit_settings', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97325ceb-0957-4cf2-8afd-e70dae804b9e', 'delete_settings', 'web', '2022-09-05 17:53:50', '2022-09-05 17:53:50'),
('97327ff1-ae14-409e-877b-5c6e37130856', 'view_blog-posts', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-b6be-43bd-b3bc-53cd06b3d9ff', 'add_blog-posts', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-b878-42b3-8181-43f646a7099f', 'edit_blog-posts', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-ba0a-4fcc-bc4b-05e8f9c12fe5', 'delete_blog-posts', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-c8c5-46d1-99db-7be7a51b502e', 'view_blog-categories', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-cae3-4f88-86cc-938a7ea9b84f', 'add_blog-categories', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-cc79-4d91-af26-a5412c038b04', 'edit_blog-categories', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-ce01-41b5-bc8d-197825505f2c', 'delete_blog-categories', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-d65d-4679-b734-87d64bdfdc36', 'view_blog-pages', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-d853-460a-b972-446977869823', 'add_blog-pages', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-d9de-4607-b517-76a324541c68', 'edit_blog-pages', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47'),
('97327ff1-dbdc-491a-9910-0409dd4a9dcc', 'delete_blog-pages', 'web', '2022-09-05 19:31:47', '2022-09-05 19:31:47');

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
('97325d04-089d-4546-a95c-27b83dee7b61', 'Admin', 'web', '2022-09-05 17:54:07', '2022-09-05 17:54:07'),
('9732801d-a565-4286-bf64-428361a9a73d', 'Mitra', 'web', '2022-09-05 19:32:15', '2022-09-05 19:32:15'),
('97328041-457b-46f4-bb75-1daf7aad863f', 'Tata Usaha (TU)', 'web', '2022-09-05 19:32:39', '2022-09-05 19:32:49'),
('9732808c-094e-4759-ae05-d0328a611588', 'Ketua Tim', 'web', '2022-09-05 19:33:28', '2022-09-05 19:33:28'),
('973280c4-2634-48ab-8bd7-7e4381d1c143', 'Pencacah', 'web', '2022-09-05 19:34:04', '2022-09-05 19:34:04'),
('973280d7-856d-4e85-952c-223559638475', 'Pengawas', 'web', '2022-09-05 19:34:17', '2022-09-05 19:34:17'),
('973280ec-1183-44ff-ba5f-d7f18e4faf4d', 'Koordinator Wilayah', 'web', '2022-09-05 19:34:31', '2022-09-05 19:34:31'),
('973280ff-8323-4053-b968-df7846af9311', 'Subject Matter', 'web', '2022-09-05 19:34:43', '2022-09-05 19:34:43');

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
('97325cea-f8f9-4c3f-9f44-f95794e0a96e', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325cea-f8f9-4c3f-9f44-f95794e0a96e', '9732808c-094e-4759-ae05-d0328a611588'),
('97325cea-fa47-4761-b9fc-695bf63076c3', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325cea-fa47-4761-b9fc-695bf63076c3', '9732808c-094e-4759-ae05-d0328a611588'),
('97325cea-fb4f-4fc9-a67f-7141113f2454', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325cea-fb4f-4fc9-a67f-7141113f2454', '9732808c-094e-4759-ae05-d0328a611588'),
('97325ceb-0218-4c77-9a61-db3906afea61', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325ceb-0218-4c77-9a61-db3906afea61', '9732808c-094e-4759-ae05-d0328a611588'),
('97325ceb-0310-47b7-97a1-979d49bd7385', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325ceb-03cc-41bb-910f-0322a2f07219', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325ceb-047f-44b1-977f-d95868fa3ad0', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325ceb-053c-4c18-9ed5-2f9d799b0a15', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325ceb-0664-4274-a45e-322b4a644722', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325ceb-07a3-4f9d-af4c-d18f11d2fe00', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325ceb-0883-40ef-b716-f274f90c6358', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97325ceb-0957-4cf2-8afd-e70dae804b9e', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-ae14-409e-877b-5c6e37130856', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-ae14-409e-877b-5c6e37130856', '9732801d-a565-4286-bf64-428361a9a73d'),
('97327ff1-ae14-409e-877b-5c6e37130856', '97328041-457b-46f4-bb75-1daf7aad863f'),
('97327ff1-ae14-409e-877b-5c6e37130856', '973280c4-2634-48ab-8bd7-7e4381d1c143'),
('97327ff1-ae14-409e-877b-5c6e37130856', '973280d7-856d-4e85-952c-223559638475'),
('97327ff1-ae14-409e-877b-5c6e37130856', '973280ec-1183-44ff-ba5f-d7f18e4faf4d'),
('97327ff1-ae14-409e-877b-5c6e37130856', '973280ff-8323-4053-b968-df7846af9311'),
('97327ff1-b6be-43bd-b3bc-53cd06b3d9ff', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-b6be-43bd-b3bc-53cd06b3d9ff', '97328041-457b-46f4-bb75-1daf7aad863f'),
('97327ff1-b878-42b3-8181-43f646a7099f', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-b878-42b3-8181-43f646a7099f', '97328041-457b-46f4-bb75-1daf7aad863f'),
('97327ff1-ba0a-4fcc-bc4b-05e8f9c12fe5', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-ba0a-4fcc-bc4b-05e8f9c12fe5', '97328041-457b-46f4-bb75-1daf7aad863f'),
('97327ff1-c8c5-46d1-99db-7be7a51b502e', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-cae3-4f88-86cc-938a7ea9b84f', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-cc79-4d91-af26-a5412c038b04', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-ce01-41b5-bc8d-197825505f2c', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-d65d-4679-b734-87d64bdfdc36', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-d853-460a-b972-446977869823', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-d9de-4607-b517-76a324541c68', '97325d04-089d-4546-a95c-27b83dee7b61'),
('97327ff1-dbdc-491a-9910-0409dd4a9dcc', '97325d04-089d-4546-a95c-27b83dee7b61');

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `category`, `setting_type`, `setting_key`, `name`, `string_value`, `file_value`, `text_value`, `boolean_value`, `integer_value`, `decimal_value`, `validation_rules`, `created_at`, `updated_at`) VALUES
('97325cea-eb57-4f41-ad6a-d9c83dc5189c', 'general', 'string', 'general_app_name', 'Application Name', 'Manajemen Mitra', NULL, NULL, NULL, NULL, NULL, 'required', '2022-09-05 17:53:50', '2022-09-05 20:10:47'),
('97325cea-f128-4852-9db9-3ee022d21582', 'general', 'string', 'general_app_description', 'App Description', 'SIMITRA (Sistem Aplikasi Manajemen Mitra & Survei)', NULL, NULL, NULL, NULL, NULL, '', '2022-09-05 17:53:50', '2022-09-05 20:10:47'),
('97325cea-f302-4bd2-97d7-6382acaad8e3', 'general', 'file', 'general_app_logo', 'App Logo', NULL, 'http://localhost/storage/97328e25-74af-401c-8609-c84f22e65a6c/simitra.png', NULL, NULL, NULL, NULL, 'image|mimes:jpeg,png,jpg,gif|max:4096', '2022-09-05 17:53:50', '2022-09-05 20:11:29'),
('97325cea-f44b-4bb2-a549-9ffe32edb137', 'general', 'string', 'general_email_contact', 'Email Contact', 'bps3573@bps.go.id', NULL, NULL, NULL, NULL, NULL, 'required|email', '2022-09-05 17:53:50', '2022-09-05 20:10:47'),
('97325cea-f559-40fb-9612-980f067dd723', 'general', 'string', 'general_phone', 'Phone', '(0341) 801164', NULL, NULL, NULL, NULL, NULL, 'required', '2022-09-05 17:53:50', '2022-09-05 20:10:47');

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
('97325d04-2507-4863-851f-04c06098552a', 'Lae Saragih', 'nyah56@example.com', '2022-09-05 17:54:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'gJJWrx6FnegG1g4SexnQIejGLiLI9vtsZ0DrgoR88uAKxJufLbAItuPc8VOW', '2022-09-05 17:54:07', '2022-09-05 17:54:07'),
('97325d75-a6c7-4394-a821-f72e07359c87', 'Darman Saputra Saragih', 'darmansaragih087@gmail.com', NULL, '$2y$10$s45iMgDtzvjXOZskiAPgK.gqiD2EoxDlEG7LGNFQJpJbfuI.2ETSe', NULL, NULL, NULL, '2022-09-05 17:55:21', '2022-09-05 17:55:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
