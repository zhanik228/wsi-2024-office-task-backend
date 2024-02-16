-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 16 2024 г., 10:34
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wsi-2024-office-db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `chat_room_id` int NOT NULL,
  `user_id` int NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `chat_rooms`
--

CREATE TABLE `chat_rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limit` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `chat_rooms`
--

INSERT INTO `chat_rooms` (`id`, `name`, `limit`, `created_at`, `updated_at`) VALUES
(1, 'The Office', 4, NULL, NULL),
(2, 'Desk', 3, NULL, NULL),
(3, 'Open Office 1', 9, NULL, NULL),
(4, 'Kitchen', 5, NULL, NULL),
(5, 'Silent room 1', 1, NULL, NULL),
(6, 'Silent room 2', 1, NULL, NULL),
(7, 'Open Office 2', 4, NULL, NULL),
(8, 'Meeting room', 15, NULL, NULL),
(9, 'Breakroom', 5, NULL, NULL),
(10, 'Silent room 3', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_02_08_060400_create_chat_rooms_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_02_08_060541_create_chat_messages_table', 1),
(5, '2024_02_09_110402_create_slots_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `slots`
--

CREATE TABLE `slots` (
  `id` bigint UNSIGNED NOT NULL,
  `chat_room_id` bigint UNSIGNED NOT NULL,
  `position_x` int NOT NULL,
  `position_y` int NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slots`
--

INSERT INTO `slots` (`id`, `chat_room_id`, `position_x`, `position_y`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 278, 170, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(2, 1, 229, 240, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(3, 1, 254, 252, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(4, 1, 275, 252, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(5, 2, 165, 299, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(6, 2, 199, 349, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(7, 2, 165, 358, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(8, 8, 365, 212, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(9, 8, 383, 184, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(10, 8, 411, 184, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(11, 8, 438, 184, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(12, 8, 466, 184, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(13, 8, 487, 212, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(14, 8, 465, 234, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(15, 8, 439, 234, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(16, 8, 412, 234, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(17, 8, 384, 234, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(18, 8, 510, 168, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(19, 8, 510, 192, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(20, 8, 510, 212, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(21, 8, 510, 234, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(22, 8, 510, 255, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(23, 3, 305, 307, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(24, 3, 345, 376, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(25, 3, 379, 376, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(26, 3, 458, 376, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(27, 3, 388, 486, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(28, 3, 309, 486, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(29, 3, 205, 495, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(30, 3, 205, 418, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(31, 3, 268, 459, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(32, 5, 471, 501, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(33, 6, 606, 404, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(34, 10, 902, 466, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(35, 10, 902, 490, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(36, 4, 637, 379, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(37, 4, 662, 349, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(38, 4, 685, 364, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(39, 4, 703, 348, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(40, 4, 686, 329, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(41, 9, 837, 172, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(42, 9, 876, 172, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(43, 9, 882, 205, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(44, 9, 879, 236, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(45, 9, 828, 236, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(46, 7, 883, 322, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(47, 7, 881, 356, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(48, 7, 800, 366, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29'),
(49, 7, 892, 413, NULL, '2024-02-16 04:31:29', '2024-02-16 04:31:29');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `chat_room_id` bigint UNSIGNED DEFAULT NULL,
  `column_id` bigint UNSIGNED DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chat_rooms`
--
ALTER TABLE `chat_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `chat_rooms`
--
ALTER TABLE `chat_rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
