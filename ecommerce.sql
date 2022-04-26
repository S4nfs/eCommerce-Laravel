-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 04:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 1, 3, '2022-04-04 12:04:13', '2022-04-04 12:04:13'),
(29, 8, 1, '2022-04-09 10:35:15', '2022-04-09 10:35:15'),
(30, 1, 1, '2022-04-11 08:53:52', '2022-04-11 08:53:52');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_31_085208_create_cart_table', 4),
(7, '2022_04_03_140833_create_orders_table', 5),
(8, '2022_03_30_071256_create_products_table', 6),
(10, '2022_03_29_151937_create_users_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `country`, `zipcode`, `state`, `address`, `created_at`, `updated_at`) VALUES
(8, 1, 1, 'Ordered', 'us', 'ss', 'ss', 'ss', NULL, NULL),
(9, 1, 1, 'Ordered', 'us', 'ss', 'ss', 'ss', NULL, NULL),
(10, 1, 1, 'Ordered', 'us', 'ss', 'ss', 'ss', NULL, NULL),
(11, 1, 3, 'Ordered', 'aus', '209801', 'Uttrakhand', 'Blue Frost Villa', NULL, NULL),
(12, 4, 3, 'Ordered', 'aus', '209801', 'Uttrakhand', 'Blue Frost Villa', NULL, NULL),
(13, 5, 3, 'Ordered', 'aus', '209801', 'Uttrakhand', 'Blue Frost Villa', NULL, NULL),
(14, 1, 1, 'Ordered', 'us', '2055', 'ii', '8585', NULL, NULL),
(15, 3, 1, 'Ordered', 'us', '2055', 'ii', '8585', NULL, NULL);

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
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 'HAAGEN DAZS MANGO RASPBERRY', '780', 'Ice Creams & Desserts', 'The superb taste of a mango with a tinge of sharp raspberries that simply awakens your senses and refreshes you on a hot summer day', 'https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/dbffcc93-9bce-442f-837f-d5d5f073c0c0_425x425.jpg', NULL, NULL),
(2, 'FRESHCON SHREDDED COCONUT 100G - 1 Pc', '40', 'Frozen Veg & Non Veg Snacks', 'No Description', 'https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/d2f0e000-0d5f-4153-a8c7-caddb93bb9eb_425x425.jpg', NULL, NULL),
(3, 'YUMMIEZ JUICY CHCKN NUGGETS 500g - 1 Pc', '290', 'Frozen Veg & Non Veg Snacks', 'No Description', 'https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/54e219d9-47aa-4821-a360-378e3d716edf_425x425.jpg', NULL, NULL),
(4, 'FRATELLI SANGIOVESE 750ML - 1 Pc', '1050', 'Wine & Bear', 'Product of : INDIA.FRATELLI SANGIOVESE', 'https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/97f4b21c-951c-44b8-bd5a-682167eabb8f_425x425.jpg', NULL, NULL),
(5, 'SPRIG TOASTED SESAME OIL 125G - 1 Pc', '399', 'Vegetable & Seed Oils', 'SPRIG Toasted Sesame Oil is made in small batches, so as to ensure that all the flavor notes are captured beautifully.', 'https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/697e62e8-a61f-48f8-9d58-fb93b678fd8e_425x425.JPG', NULL, NULL),
(6, 'KW MAGNUM CHOCOTRFFLE STICK 80Ml - 1 Pc', '80', 'Ice Creams & Desserts', 'Product of : Thailand. Indulge in thick Belgian Chocolate Ice Cream with the Magnum Truffle Ice Cream. Made from finest ingredients, it is a treat for all chocolate lovers.', 'https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/97e020df-acc1-4b42-bc2c-40160bacf0c0_425x425.jpg', NULL, NULL),
(7, 'RAW PRESSERY PLAIN ALMOND MILK 1LTR - 1 Pc', '295', ' Breakfast, Dairy & Bakery', 'dairy-free almond milk (unsweetened). Perfect alternative to add to daily shakes, tea, coffee', 'https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/01aa2454-dea8-43e8-ab12-cec4e653cd10_425x425.jpg', NULL, NULL),
(8, 'Organic Green Cardamom Whole - Healthy Alternatives - 50 g', '575', 'Cooking Spices & Powders ', 'Cardamoms are an exotic spice from India. Warm, fragrant and mysterious it has a unique and pleasant fragrance. ', 'https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/11409aa8-48bc-437f-a574-ac2ff5534bb2_425x425.jpg', NULL, NULL),
(9, 'CONSCIOUS FOOD TURMERIC POWDER 100g - 1 Pc', '45', 'COOKING SPICES & POWDERS ', 'Add an Indian Touch to your favourite dishes with our finest and aromatic Turmeric Powder ', 'https://d1z88p83zuviay.cloudfront.net/ProductVariantThumbnailImages/1300428_1_425x425.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'sagar', 'sagar@gmail.com', '$2y$10$1m5uNUJi/JYvS9BQgiSRme6h1l73Z4UN7sm2JqfMdpZWXT2OE7y16', 'ben-parker-OhKElOkQ3RE-unsplash.jpg', '2022-04-15 08:56:37', '2022-04-19 13:19:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
