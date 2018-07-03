-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 03 2018 г., 08:23
-- Версия сервера: 10.1.33-MariaDB
-- Версия PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u348451412_hex`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `article` text NOT NULL,
  `views` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `src` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `caption`, `article`, `views`, `date`, `src`) VALUES
(1, 'Ð¡Ñ‚Ð°Ñ‚ÑŒÑ 1', 'Ñ‚ÐµÐºÑÑ‚ Ñ‚ÐµÐºÑÑ‚ Ñ‚ÐµÐºÑÑ‚', 0, '2018-07-03 13:15:45', ''),
(2, 'Article 2', 'text text text', 0, '2018-07-03 13:16:30', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(2, '123', '321'),
(3, 'oijkml', 'iojio'),
(4, 'andrey', 'kalagu'),
(5, 'fjk', 'jkjreuiur'),
(6, 'kalagura', '1234566'),
(7, 'nika', 'girojf409j'),
(19, 'kalagur', '123456'),
(18, 'kalagurbuy', 'huiuh09u0j'),
(17, 'kalagur999', '123456uiojoi'),
(20, 'kalagurAnd', '123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
