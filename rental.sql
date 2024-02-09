-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 02:09 PM
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
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` double(8,2) NOT NULL,
  `luggages` tinyint(4) NOT NULL,
  `doors` tinyint(4) NOT NULL,
  `passengers` tinyint(4) NOT NULL,
  `content` longtext NOT NULL,
  `active` tinyint(1) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `title`, `price`, `luggages`, `doors`, `passengers`, `content`, `active`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'nesciunt', 536002.26, 8, 2, 9, 'Fugit voluptas perferendis qui et voluptatem et laboriosam. Beatae suscipit occaecati ut delectus quas aspernatur. Quis ut accusamus sed et porro nobis. Et dolorem voluptas laborum aspernatur.', 1, '4b15fabb683b3013277a9f1c1f76dac4.jpg', 3, '2024-02-09 00:43:50', '2024-02-09 00:43:50'),
(2, 'nemo', 704944.56, 4, 5, 7, 'Ullam iste saepe ipsum ex veritatis. Tempore et impedit distinctio doloremque odit. Est consequatur sunt tempora velit. Blanditiis eveniet natus dolore consectetur.', 1, '54caed6075e9429a23641c833d00b730.jpg', 2, '2024-02-09 00:43:50', '2024-02-09 00:43:50'),
(3, 'delectus', 898601.51, 5, 2, 8, 'Et possimus sequi dolorem minima suscipit. Ea necessitatibus odio et. Dicta consequuntur vel laboriosam molestias quam aut blanditiis. Vel assumenda iusto dolorem architecto.', 1, '76c8f32160805bc000da3bcc5f4e515c.jpg', 1, '2024-02-09 00:43:50', '2024-02-09 00:43:50'),
(4, 'ut', 336166.87, 8, 8, 2, 'Vero et asperiores minus quis aliquam sunt molestias voluptate. Vel laboriosam explicabo non dolor. Voluptatem quas et debitis et.', 1, 'c101877c250ba8763efb1695ab6c9b6a.jpg', 2, '2024-02-09 00:43:50', '2024-02-09 00:43:50'),
(5, 'non', 945014.30, 11, 5, 6, 'Et non rem tempora corrupti nemo. Aut et corrupti voluptatem nisi cupiditate optio sunt. Cumque doloremque eaque doloremque vel. Qui minima repudiandae quos rem. Aut eveniet sed facere id rem.', 1, 'ea0ef9af61b90c70ea7c0862a75ed23e.jpg', 3, '2024-02-09 00:43:51', '2024-02-09 00:43:51'),
(6, 'itaque', 580824.40, 3, 2, 16, 'Qui cupiditate fugiat in et fugiat ut. Quis placeat molestias fugit natus corporis. Ipsum dolores reiciendis est vel aut doloremque iusto.', 1, '0957ad0955ea1ecfd61608ebccfd3578.jpg', 2, '2024-02-09 00:43:51', '2024-02-09 00:43:51'),
(7, 'aut', 337983.35, 5, 2, 9, 'Dolores non ut qui ipsa mollitia. Rerum labore nihil magnam voluptas rerum reiciendis.', 1, '28c9d97ca8a29d162387a896ef4317c5.jpg', 3, '2024-02-09 00:43:51', '2024-02-09 00:43:51'),
(8, 'officia', 977893.42, 9, 3, 20, 'Nesciunt tempore eligendi quaerat tempora dolorum tenetur incidunt delectus. Provident tempore qui repellat dolores. Cumque qui voluptate et. Fugit eligendi optio architecto et aut non et.', 1, '596406e44579132bca231b85231c0044.jpg', 3, '2024-02-09 00:43:51', '2024-02-09 00:43:51'),
(9, 'perferendis', 992898.05, 11, 2, 7, 'Veritatis quis provident sapiente aut aliquam aspernatur exercitationem quia. Laboriosam qui eius cupiditate eligendi. Ut amet sunt praesentium fuga.', 1, '377d395140516d82c092a11a0cc87f25.jpg', 3, '2024-02-09 00:43:51', '2024-02-09 00:43:51'),
(10, 'provident', 326252.64, 3, 7, 2, 'Quae dolore aspernatur laborum enim. Voluptas distinctio facilis est voluptas expedita. Rerum aut nihil aperiam neque. Sed facilis voluptate totam qui.', 1, '05beaba1ec69235aed9f64ec62b77ee1.jpg', 3, '2024-02-09 00:43:51', '2024-02-09 00:43:51'),
(11, 'voluptas', 746924.79, 4, 3, 6, 'Ut aut ipsum ut tempora commodi laborum. Omnis nisi sint quam beatae ducimus qui. Saepe non adipisci autem perferendis.', 1, '7a51c1125080fcfef0022c4a1102baa3.jpg', 1, '2024-02-09 00:43:51', '2024-02-09 00:43:51'),
(12, 'porro', 722231.46, 11, 3, 6, 'Officiis culpa nisi dignissimos et eos praesentium sit. Repudiandae iusto iste voluptas voluptatem iure. Natus ullam omnis blanditiis qui beatae similique unde.', 1, '908699a9205643bb322c9dd7696e8ba1.jpg', 1, '2024-02-09 00:43:51', '2024-02-09 00:43:51'),
(13, 'minima', 453018.72, 6, 4, 19, 'Saepe ut natus voluptatibus soluta doloribus earum repellendus velit. Qui voluptatem voluptatem harum nam. Aut ut ducimus veritatis hic officiis aliquam.', 1, 'bc27f9b6b4da14a9c13425a02a563abf.jpg', 2, '2024-02-09 00:43:51', '2024-02-09 00:43:51'),
(14, 'eum', 316460.37, 8, 2, 5, 'Sit voluptas iusto nostrum aut et. Dolore quia expedita nisi. Sit assumenda quod aperiam nulla rerum.', 1, '9dd26c24701093331fcacb8039f1f7ce.jpg', 2, '2024-02-09 00:43:51', '2024-02-09 00:43:51'),
(15, 'beatae', 514953.07, 11, 7, 11, 'Suscipit velit aut delectus iure rerum dolorem laborum esse. Rem dolorem veritatis et qui saepe. Eos dolorum quasi sequi eum nihil consequuntur velit autem.', 1, '53eb2af465a6bef842f0e78d4654c1af.jpg', 2, '2024-02-09 00:43:51', '2024-02-09 00:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'aperiam', '2024-02-09 00:43:26', '2024-02-09 00:43:26'),
(2, 'dolores', '2024-02-09 00:43:26', '2024-02-09 00:43:26'),
(3, 'distinctio', '2024-02-09 00:43:27', '2024-02-09 00:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `isRead` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `firstName`, `lastName`, `email`, `content`, `isRead`, `created_at`, `updated_at`) VALUES
(1, 'Alexanne', 'O\'Conner', 'Alexanne_O\'Conner@gmail.com', 'Omnis aperiam aut nobis non ad. Accusamus ut voluptas ipsam vel repellat eveniet provident. Sed quia dolor rerum ipsum consequuntur.', 1, '2024-02-09 00:44:08', '2024-02-09 00:44:08'),
(2, 'Candelario', 'Gibson', 'Candelario_Gibson@gmail.com', 'Sed ut velit pariatur eaque consectetur. Saepe architecto dicta debitis deserunt accusantium asperiores voluptas. Autem unde eius aut rerum sequi. Sit cum inventore vitae ratione a incidunt.', 0, '2024-02-09 00:44:08', '2024-02-09 00:44:08'),
(3, 'Elbert', 'Hickle', 'Elbert_Hickle@gmail.com', 'Aut aut architecto cupiditate voluptate. Dicta quasi unde labore officia velit fuga. Quia possimus porro distinctio voluptatem facere. Maiores inventore mollitia quaerat reiciendis tempore eos nemo.', 1, '2024-02-09 00:44:08', '2024-02-09 00:44:08'),
(4, 'Nada', 'Emad', 'nada@gmail.com', 'Over the years, the web and the world have changed. Google Search has evolved and improved, but our approach remains the same.\r\nRead about our approach\r\nWe continuously map the web and other sources to connect you to the most relevant, helpful information.\r\nLearn more about how Search works\r\nWe present results in a variety of ways, based on what\'s most helpful for the type of information you\'re looking for.\r\nLearn more about Search features\r\nAll while keeping your personal information private and secure.\r\nLearn more at the Google Safety Center\r\nWatch our (home) movie:\r\nTrillions of Questions, No Easy Answers\r\nContent being organized\r\nWatch the video\r\n58:10\r\n\r\nRead the latest news about Google Search\r\nThe role of location in Search\r\nThe role of location in Search\r\nRead the article\r\nHow Google autocomplete predictions are generated\r\nHow Google autocomplete predictions are generated\r\nRead the article\r\nHow Google delivers reliable information in Search\r\nHow Google delivers reliable information in Search\r\nRead the article\r\nHow insights from people around the world make Google Search better\r\nHow insights from people around the world make Google Search better\r\nRead the article\r\nJUN 02\r\nHow Google updates Search to improve our results\r\nDEC 03\r\nHow Google organizes information to find what you’re looking for\r\nDEC 03\r\nOrganizing the world’s information: where does it all come from?\r\nSEP 29\r\nWhy is the sky orange? How Google gave people the right info\r\nRead more on The Keyword\r\nGoogle\r\nPrivacy\r\nTerms\r\nAbout Google\r\nGoogle products\r\nHelp', 1, '2024-02-09 00:51:57', '2024-02-09 01:02:41');

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
(6, '2024_01_30_195808_create_categories_table', 1),
(7, '2024_01_30_195810_create_cars_table', 1),
(8, '2024_02_02_030903_create_testimonials_table', 1),
(9, '2024_02_02_151845_create_messages_table', 1),
(10, '2024_02_07_092428_create_teams_table', 1);

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `published` tinyint(1) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `content`, `published`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Rylee Weimann', 'Founder', 'Praesentium necessitatibus sequi in vero hic ut. Nemo autem nisi voluptas laudantium aliquam optio reiciendis. Odio qui consequatur sit molestiae id.', 1, '05bfcc81dbaf54242afdb99779faa59d.jpg', '2024-02-09 00:44:07', '2024-02-09 00:44:07'),
(2, 'Enrique Hamill', 'Founder', 'Vel dolore esse quis. Impedit sequi aut quae id. Quidem laudantium dolores a soluta voluptatem corporis. Reiciendis blanditiis qui nobis ut.', 1, 'f7da45a30db55084912172f2476c70a8.jpg', '2024-02-09 00:44:07', '2024-02-09 00:44:07'),
(3, 'Jacinto Will', 'Founder', 'Perferendis voluptas nobis nulla. Fugit blanditiis asperiores quis maxime expedita. Labore ut hic enim perspiciatis perferendis officia.', 1, '2e418540e73ed09dd434fd742b41d2d4.jpg', '2024-02-09 00:44:07', '2024-02-09 00:44:07'),
(4, 'Sophie Ward', 'Founder', 'Aut omnis sapiente sed rerum laboriosam ad. Et qui doloremque possimus nulla et. Nihil id tempora perspiciatis quas blanditiis dolores quis.', 1, 'f8c1147d97789ab17cca4fdb84db8442.jpg', '2024-02-09 00:44:07', '2024-02-09 00:44:07'),
(5, 'Stephen Wintheiser', 'Founder', 'Consectetur necessitatibus atque dolore ut numquam. Sed veritatis aut quibusdam iste. Numquam eaque libero incidunt ut minima. Est qui sit nesciunt ea molestiae recusandae.', 1, 'cbb62f31a04051161d4e45938db8237f.jpg', '2024-02-09 00:44:07', '2024-02-09 00:44:07'),
(6, 'Aniya Wolf', 'Founder', 'Magnam eius sunt rerum nostrum sint sed aut. Dolorem aut dicta aut aut dolore sit in. Quo excepturi quam exercitationem a.', 1, 'c4d638ecbe79a90caf80e25d47f4ab93.jpg', '2024-02-09 00:44:08', '2024-02-09 00:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `published` tinyint(1) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `content`, `published`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jamir Gibson', 'corrupti', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.', 1, '0a3cb7fbdc364875945c1329c73b58e4.jpg', '2024-02-09 00:43:59', '2024-02-09 00:43:59'),
(2, 'Onie Marquardt', 'et', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.', 1, '42e96d1fc10a31bf2180863188aedb98.jpg', '2024-02-09 00:43:59', '2024-02-09 00:43:59'),
(3, 'Onie Predovic', 'id', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.', 1, 'cfa5c45bc5507cc0c1770338b8eb8dd8.jpg', '2024-02-09 00:43:59', '2024-02-09 00:43:59'),
(4, 'Gladys Ledner', 'quia', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.', 1, '951da7c84b0cb6632a981f86c0fb464a.jpg', '2024-02-09 00:44:00', '2024-02-09 00:44:00'),
(5, 'Tony Kuhic', 'eligendi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.', 1, 'e2d38c39e25c469d15cd54b05e8bcc84.jpg', '2024-02-09 00:44:00', '2024-02-09 00:44:00'),
(6, 'Hassie Schoen', 'qui', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.', 1, '5de0c09a6587c55b7caa1fad7e9d5cd2.jpg', '2024-02-09 00:44:00', '2024-02-09 00:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userName`, `email`, `email_verified_at`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alison_O\'Hara', 'Alison_O\'Hara20', 'Alison_O\'Hara@gmail.com', '2024-02-09 00:43:25', '$2y$12$yWKYjFDAnqOR3PWRdQ9iGOQPy0BIUAzRblXccZer1OzqeDsE96By6', 1, 'RMMU7O9Nud', '2024-02-09 00:43:26', '2024-02-09 00:43:26'),
(2, 'Sarai_Conn', 'Sarai_Conn25', 'Sarai_Conn@gmail.com', '2024-02-09 00:43:26', '$2y$12$LGNVt6rHDb3Xecz8gs.EvOB3mSTJmQ3GkfXkeaW4URE7X4i6rjlky', 1, 'mg6PFIEOpR', '2024-02-09 00:43:26', '2024-02-09 00:43:26'),
(3, 'Nada Emad', 'nadaemad93', 'nada@gmail.com', '2024-02-09 00:59:34', '$2y$12$ijCn8i0q7HrYXMl3pp1HW.AKHALACV4sm2QkttDeJOWLFbRrB6IMK', 1, NULL, '2024-02-09 00:59:19', '2024-02-09 00:59:34'),
(4, 'mm', 'mm', 'remy@gmail.com', '2024-02-09 12:05:07', '$2y$12$80b1wZ1Ll.jXk0gZvHqcvuSAxi7j.O/k/okZy1f.0NLj9XHWwbZOG', 1, NULL, '2024-02-09 12:03:48', '2024-02-09 12:05:07'),
(5, 'Omar Emad', 'omaremad2000', 'omar@gmail.com', NULL, '$2y$12$1VI5Wq1RC8k0TgpUrnu6beZwSO6kIqYQZR/G3KDvxm25cT5.mO9sO', 1, NULL, '2024-02-09 12:05:47', '2024-02-09 12:05:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cars_title_unique` (`title`),
  ADD KEY `cars_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`userName`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
