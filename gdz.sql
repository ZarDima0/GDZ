-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2022 г., 20:21
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gdz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` bigint UNSIGNED NOT NULL,
  `article_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` bigint UNSIGNED NOT NULL,
  `direction_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `article_name`, `teacher_id`, `direction_id`, `created_at`, `updated_at`, `slug`) VALUES
(27, 'Устойчивое развитие', 2, 1, NULL, NULL, 'ustoicivoe-razvitie'),
(28, 'Нормирование и снижение загрязнения окружающей среды', 2, 1, NULL, NULL, 'normirovanie-i-snizenie-zagryazneniya-okruzayushhei-sredy'),
(29, 'Эколого-географический анализ территории', 2, 1, NULL, NULL, 'ekologo-geograficeskii-analiz-territorii'),
(30, 'Землепользование и оценка земель', 2, 1, NULL, NULL, 'zemlepolzovanie-i-ocenka-zemel'),
(31, 'Медико-экологические основы устойчивого развития', 2, 1, NULL, NULL, 'mediko-ekologiceskie-osnovy-ustoicivogo-razvitiya'),
(32, 'Основы территориального планирования', 2, 1, NULL, NULL, 'osnovy-territorialnogo-planirovaniya'),
(33, 'Региональное и отраслевое природопользование', 2, 1, NULL, NULL, 'regionalnoe-i-otraslevoe-prirodopolzovanie'),
(34, 'Экологическая культура', 2, 1, NULL, NULL, 'ekologiceskaya-kultura'),
(35, 'Эколого-географическое прогнозирование', 2, 1, NULL, NULL, 'ekologo-geograficeskoe-prognozirovanie'),
(45, 'Новый предмет 3241234', 2, 1, '2022-05-08 04:54:56', '2022-05-08 04:54:56', 'novyi-predmet-3241234'),
(46, 'Новый предмет', 2, 19, '2022-05-08 04:58:05', '2022-05-08 04:58:05', 'novyi-predmet'),
(47, 'Новый предмет истории', 2, 26, '2022-05-08 05:01:01', '2022-05-08 05:01:01', 'novyi-predmet-istorii'),
(48, 'Новый предмет истории', 2, 26, '2022-05-08 05:01:53', '2022-05-08 05:01:53', 'novyi-predmet-istorii'),
(49, 'Новый тестовый предмет', 2, 1, '2022-05-08 05:05:13', '2022-05-08 05:05:13', 'novyi-testovyi-predmet'),
(50, 'Новый предмет не знаю какой', 2, 1, '2022-05-09 01:41:21', '2022-05-09 01:41:21', 'novyi-predmet-ne-znayu-kakoi'),
(51, 'fgfdsgsfgsfgsdgsdfg', 2, 1, '2022-05-09 05:50:20', '2022-05-09 05:50:20', 'fgfdsgsfgsfgsdgsdfg'),
(52, 'Новый предмет 3241234', 2, 1, '2022-05-21 04:19:20', '2022-05-21 04:19:20', 'novyi-predmet-3241234');

-- --------------------------------------------------------

--
-- Структура таблицы `direction`
--

CREATE TABLE `direction` (
  `id` bigint UNSIGNED NOT NULL,
  `nameDirection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `direction`
--

INSERT INTO `direction` (`id`, `nameDirection`, `institute_id`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Экология и природопользование', 1, NULL, NULL, 'ecologi-i-prirodopolzovanie'),
(19, 'Рекреационной географии', 1, NULL, NULL, 'rekreacionnoi-geografii'),
(20, 'Физической географии и ГИС', 1, NULL, NULL, 'fiziceskoi-geografii-i-gis'),
(21, 'Экономической географии и картографии', 1, NULL, NULL, 'ekonomiceskoi-geografii-i-kartografii'),
(22, 'Археологии, этнографии и музеологии', 12, NULL, NULL, 'arxeologii-etnografii-i-muzeologii'),
(23, 'Востоковедения', 12, NULL, NULL, 'vostokovedeniya'),
(24, 'Всеобщей истории и международных отношений', 12, NULL, NULL, 'vseobshhei-istorii-i-mezdunarodnyx-otnosenii'),
(25, 'Иностранных языков', 12, NULL, NULL, 'inostrannyx-yazykov'),
(26, 'Отечественной истории', 12, NULL, NULL, 'otecestvennoi-istorii'),
(27, 'Ботаники', 13, NULL, NULL, 'botaniki'),
(28, 'Зоологии и физиологии', 13, NULL, NULL, 'zoologii-i-fiziologii'),
(29, 'Физико-химической биологии и биотехнологии', 13, NULL, NULL, 'fiziko-ximiceskoi-biologii-i-biotexnologii'),
(30, 'Экологии,биохимии,биотехнологии', 13, NULL, NULL, 'ekologiibioximiibiotexnologii'),
(31, 'Экологии,биохимии,биотехнологии', 13, NULL, NULL, 'ekologiibioximiibiotexnologii');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `file`
--

CREATE TABLE `file` (
  `id` bigint UNSIGNED NOT NULL,
  `nameFile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_teacher` bigint UNSIGNED DEFAULT NULL,
  `id_direction` bigint UNSIGNED NOT NULL,
  `path_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `article_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `file`
--

INSERT INTO `file` (`id`, `nameFile`, `id_teacher`, `id_direction`, `path_file`, `created_at`, `updated_at`, `article_id`, `user_id`) VALUES
(20, 'Практика 4.5', 2, 1, 'public/folder/3-4.docx', '2022-05-10 12:04:27', '2022-05-10 12:04:27', 27, 3),
(22, 'Лох лох', 2, 1, 'public/folder/1-2.docx', '2022-05-12 07:55:26', '2022-05-12 07:55:26', 27, 4),
(35, 'Первая практика', 2, 1, 'public/folder/Perechen_voprosov_k_gosudarstvennomu_ekzamenu_05_03_06_2022 (1).docx', '2022-05-21 10:07:19', '2022-05-21 10:07:19', 27, 2),
(36, 'Fufugtuhry', 2, 1, 'public/folder/3_ Состав земель лесного фонда и иных категорий.xls', '2022-05-21 10:11:53', '2022-05-21 10:11:53', 27, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `institute`
--

CREATE TABLE `institute` (
  `id` bigint UNSIGNED NOT NULL,
  `nameInstitute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `institute`
--

INSERT INTO `institute` (`id`, `nameInstitute`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Институт географии (ИНГЕО)', NULL, NULL, 'institut-geografii-ingeo'),
(12, 'Исторический (ИИМО)', NULL, NULL, 'istoriceskii-iimo'),
(13, 'Биологии и биотехнологии (ИББ)', NULL, NULL, 'biologii-i-biotexnologii-ibb'),
(14, 'Инс.гуманитарных наук (ИГН.)', NULL, NULL, 'insgumanitarnyx-nauk-ign'),
(15, 'Исторический (ИИМО)', NULL, NULL, 'istoriceskii-iimo'),
(16, 'ИХиХФТ (ИХХФТ)', NULL, NULL, 'ixixft-ixxft'),
(17, 'ИЦТЭФ (ИЦТЭФ)', NULL, NULL, 'ictef-ictef'),
(18, 'Математики и инф.технологий (ИМИИТ)', NULL, NULL, 'matematiki-i-inftexnologii-imiit'),
(19, 'МИЭМИС (ЭФ)', NULL, NULL, 'miemis-ef');

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
(27, '2014_10_12_100000_create_password_resets_table', 1),
(28, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2022_03_21_202956_create_institute_table', 2),
(30, '2022_04_04_182358_create_direction_table', 2),
(31, '2022_04_05_182204_create_teachers_table', 2),
(32, '2022_04_06_181752_create_article_table', 2),
(33, '2022_04_06_184443_create_file_table', 2),
(34, '2022_04_22_052642_add_slug_institute', 3),
(35, '2022_04_23_071618_add_slug_article', 4),
(36, '2022_04_23_071812_add_slug_direction', 5),
(37, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(38, '2014_10_12_000000_create_users_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint UNSIGNED NOT NULL,
  `nameTeacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_direction` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `nameTeacher`, `id_direction`, `created_at`, `updated_at`) VALUES
(1, 'Швецова Ларина Валерьевна', 1, NULL, NULL),
(2, 'Неизвестно', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DMITRY FIBUKH', 'dfibikhalex@gmail.com', NULL, '$2y$10$et7/SGQ2O5As6wtiR99ade2fxKzl5Wm9hUcEBHo7WzFP6l0J5tS6W', NULL, '2022-04-26 09:55:51', '2022-04-26 09:55:51'),
(2, 'Дмитрий', 'dima.fibikh@mail.ru', NULL, '$2y$10$K0LgMa7EGDDyRDQAzSeAMuHDGW7Vh5Ryl5GOm7NjKexykqqKsAyyu', NULL, '2022-04-26 10:00:32', '2022-05-21 09:09:45'),
(3, 'Марлен', 'marlen@mail.ru', NULL, '$2y$10$SyR2LJ9VD.1uIJiASV0l5.LhB3ZTjT/K7Hzjda7ixzAc36Oxz/5C6', NULL, '2022-05-10 08:47:15', '2022-05-10 08:47:15'),
(4, 'Татьяна2', 'tanya.tanya.yudina.2002@gmail.com', NULL, '$2y$10$wDe5GAGMQMKS3Xna9IVdG.LeJMW0iNJ.z2teI6Jh1VGDI26EwCpia', NULL, '2022-05-12 07:51:09', '2022-05-12 07:52:53');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id_teacher_foreign` (`teacher_id`),
  ADD KEY `article_id_direction_foreign` (`direction_id`);

--
-- Индексы таблицы `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direction_id_institute_foreign` (`institute_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file_id_teacher_foreign` (`id_teacher`),
  ADD KEY `file_id_direction_foreign` (`id_direction`),
  ADD KEY `file_article_id_foreign` (`article_id`),
  ADD KEY `file_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_id_direction_foreign` (`id_direction`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `direction`
--
ALTER TABLE `direction`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `file`
--
ALTER TABLE `file`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `institute`
--
ALTER TABLE `institute`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_id_direction_foreign` FOREIGN KEY (`direction_id`) REFERENCES `direction` (`id`),
  ADD CONSTRAINT `article_id_teacher_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Ограничения внешнего ключа таблицы `direction`
--
ALTER TABLE `direction`
  ADD CONSTRAINT `direction_id_institute_foreign` FOREIGN KEY (`institute_id`) REFERENCES `institute` (`id`);

--
-- Ограничения внешнего ключа таблицы `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `file_id_direction_foreign` FOREIGN KEY (`id_direction`) REFERENCES `direction` (`id`),
  ADD CONSTRAINT `file_id_teacher_foreign` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `file_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_id_direction_foreign` FOREIGN KEY (`id_direction`) REFERENCES `direction` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
