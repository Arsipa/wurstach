-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: db
-- Время создания: Июн 30 2022 г., 10:15
-- Версия сервера: 8.0.29
-- Версия PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Мария Прусакова', '2022-06-28 09:26:09', '2022-06-28 09:26:09'),
(2, 'Андрей Прунин', '2022-06-28 09:26:29', '2022-06-28 09:26:29');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `faculty_id` bigint UNSIGNED NOT NULL,
  `author_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `sub_title`, `time`, `description`, `price`, `created_at`, `updated_at`, `faculty_id`, `author_id`) VALUES
(1, 'Курс \"Базы данных для начинающих\"', 'Теоретические и практические приемы проектирования баз данных для начинающих разработчиков', '5-7 минут', 'В курсе в простой форме рассказывается теория проектирования баз данных, а также даются практические инструменты на примере учебной базы данных автосалона.', 1200, '2022-06-28 09:37:40', '2022-06-28 09:37:40', 1, 1),
(2, 'Скрипты для начинающих', 'Научитесь писать скрипты быстро и легко', '15 минут', 'Мы научим вас писать нга javaScript', 200, '2022-06-28 09:37:40', '2022-06-28 09:37:40', 2, 2),
(3, '352345', 'wegewb', '324', 'aergbsdfbsefbsefb', 45000, '2022-06-28 11:19:38', '2022-06-28 11:19:38', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Базы данных', '2022-06-28 09:29:17', '2022-06-28 09:29:17'),
(2, 'Скрипты', '2022-06-28 09:29:17', '2022-06-28 09:29:17');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `video_src`, `created_at`, `updated_at`, `course_id`) VALUES
(1, 'Урок 1. Что такое базы данных', '111.mp3', '2022-06-28 09:41:02', '2022-06-28 11:05:07', 1),
(2, 'Урок 1. Что такое скрипт', 'tcef2DnpXB0yki0TaM0QK33PHhlLkmTiEAYFohhv.mp4', '2022-06-28 09:41:02', '2022-06-30 09:18:44', 2),
(3, 'asdgvasdbvasv', 'xWRI8lt79C3ElBiPKhktOhuilOiXltmvZX2tOjbz.mp4', '2022-06-28 11:10:24', '2022-06-28 12:50:55', 1);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_18_103213_init', 1),
(6, '2022_06_18_104035_fk', 1),
(7, '2022_06_28_093210_user_name', 2),
(8, '2022_06_28_112715_user_course_time', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`, `name`) VALUES
(3, 'name@gmail.com', '$2y$10$6Yrw1g2F/3vhdss78hpo9.Z1lcB0/SB/Y9jS7xtSjT8OZA2iBX5Vq', '2022-06-28 12:04:16', '2022-06-28 12:04:16', 'Arseny1 Suvorov'),
(5, 'name1@gmail.com', '$2y$10$/Qk2OyNDUuD4ZSzC1yim1u.rXRCgh.LUZdZPL5fq8kyDUnVxwcPES', '2022-06-28 12:05:25', '2022-06-28 12:05:25', 'Arseny Suvorov'),
(6, 'name2@gmail.com', '$2y$10$BCyeDi9PpEzqkBi0XI/wCOe5R7PC9mwVdG0vy4Gd53Jn/AOyNjuXC', '2022-06-28 12:13:54', '2022-06-28 12:13:54', 'Arseny Suvorov'),
(8, 'name3@gmail.com', '$2y$10$nKc3bn3k6Q1FhgtYokoM6uBTvayVSFxF0pFpfiMGgWvYjaKO1ihRy', '2022-06-28 12:15:07', '2022-06-28 12:15:07', 'Arseny Suvorov'),
(10, 'name5@gmail.com', '$2y$10$.JpmKAvsqLDonExOmw4i/OLpe.08OizdetEowMPXGdmCAqgsHBwum', '2022-06-28 12:15:33', '2022-06-28 12:15:33', 'Arseny Suvorov'),
(12, 'name10@gmail.com', '$2y$10$9NdqDRRuA7nbJG/CJSmG/.dk6dbIna22Uy9LdWoXmbfWD32MLz7.W', '2022-06-30 08:20:33', '2022-06-30 08:20:33', 'Шибалов Мария Николаевна');

-- --------------------------------------------------------

--
-- Структура таблицы `users_courses`
--

CREATE TABLE `users_courses` (
  `course_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_courses`
--

INSERT INTO `users_courses` (`course_id`, `user_id`, `created_at`) VALUES
(1, 1, '2022-06-28'),
(2, 2, '2022-06-28'),
(1, 2, '2022-06-28'),
(1, 2, '2022-06-01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_faculty_id_foreign` (`faculty_id`),
  ADD KEY `courses_author_id_foreign` (`author_id`);

--
-- Индексы таблицы `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_course_id_foreign` (`course_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `users_courses`
--
ALTER TABLE `users_courses`
  ADD KEY `users_courses_course_id_foreign` (`course_id`),
  ADD KEY `users_courses_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `courses_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`);

--
-- Ограничения внешнего ключа таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_courses`
--
ALTER TABLE `users_courses`
  ADD CONSTRAINT `users_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `users_courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
