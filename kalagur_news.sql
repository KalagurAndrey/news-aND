-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 06 2018 г., 11:40
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
-- База данных: `kalagur_news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `article` varchar(1000) NOT NULL,
  `views` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `src` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `caption`, `article`, `views`, `date`, `src`) VALUES
(1, 'Главная статья', '', 368, '2018-07-03 13:15:45', 'src/.'),
(2, 'Article 2', '<p>text text text</p>', 40, '2018-02-06 13:16:30', 'src/seemetrix.jpg'),
(3, 'article 3', '<p>opijiojvoijoi joiv joivjdfoivjoi jioejeiojvioj ioj ioejv erioj ioj oierj oiej io jeiojerio j oijeiojoij eioj io</p>', 36, '2018-06-12 13:43:04', 'src/techno-cem-gidro_logo.jpg'),
(4, 'Thailand Cave Rescue: 12 Boys Found Alive After 10 Days. We Are Hungry.™', '<p>MAE SAI, Thailand The scrawny boys were huddled on the floor of the cave when the British divers emerged from the murky water. As his light flickered from one boy to another, one diver called out, How many of you? Thirteen, a boy answered. Brilliant, the diver said. After 10 days trapped in a flooded cave complex in northern Thailand, and after an enormous search effort that had transfixed Thailand, the missing 12 boys and their soccer coach had finally been found in Tham Luang Cave on Monday. In a brief video filmed by another diver, which was posted on the Thai Navy SEAL Facebook page, the boys and their coach seemed in surprisingly good condition. Some boys sat and some stood as they spoke with the rescuers. Food was foremost on their minds. Eat, eat, eat, one of the boys can be heard saying in English.</p>', 96, '2018-07-03 14:04:53', 'src/images.png'),
(80, 'Статья с картинкой 2', '<p>oijiojio yuiyiuy iugkjg iug g kg iu giu giug iu og uiogh wriu giu gwiug ige figu fuiwe giuwg iuwg iugfuigf iue guiweuisd suigsuig iugfuig vfuisgfiu gfiuwdg uiwfguiwerfg uiwdg iwudg uigtui weruig swiu iuweg wiufg wuigwui g</p>', 8, '2018-07-04 16:15:56', 'src/Без названия.png'),
(88, 'uioioiou', '<p>oiuiouio</p>', 6, '2018-07-05 13:32:03', 'src/.'),
(89, 'LKJK', '<p>IOJHNIUB&nbsp;</p>', 1, '2018-07-05 13:37:26', 'src/.'),
(90, 'iojoi', '<p>oijiojoi</p>', 2, '2018-07-05 13:37:49', 'src/.'),
(91, 'oijoi', '<p>BUIBB</p>', 1, '2018-07-05 13:38:55', 'src/.'),
(92, 'LIJL', '<p>LIJILJ</p>', 1, '2018-07-05 13:39:08', 'src/android-chrome-256x256.png'),
(93, 'KOP', '<p>OPKOPO</p>', 5, '2018-07-05 13:40:16', 'src/.'),
(94, '909', '<p>JJJ</p>', 1, '2018-07-05 13:41:38', 'src/images.jpeg'),
(95, 'kjlkjkljlk', '<p>ju8990u</p>', 16, '2018-07-05 14:53:01', 'src/techno-cem-gidro_logo.jpg'),
(96, 'опропоп', '<p>олпрорпорпорпо</p>', 12, '2018-07-05 15:09:53', 'src/.'),
(97, 'new new', '<p>iugtyuguguy</p>', 2, '2018-07-05 16:32:57', 'src/.'),
(98, 'jkhjkh', '', 3, '2018-07-05 16:37:42', 'src/android-chrome-256x256.png'),
(99, 'uihu', '', 4, '2018-07-05 16:39:49', 'src/images.jpeg'),
(100, '778687', '<p>876876876</p>', 4, '2018-07-05 16:40:58', 'src/seemetrix.jpg'),
(101, 'г90788907г', '<p>89нг9789789789</p>', 1, '2018-07-05 17:04:55', 'src/seemetrix.jpg'),
(102, 'гшнгшнг', '<p>орпропропорпорпорп</p>', 2, '2018-07-05 17:05:05', 'src/android-chrome-256x256.png'),
(103, '7777', '<p>777</p>', 1, '2018-07-06 10:25:06', 'src/seemetrix.jpg'),
(104, 'Проверка статьи', '<p>тест описаниящ щз&nbsp;</p>\r\n<p>гщшгщшг шщ&nbsp;</p>\r\n<p>908 г90г 90г890г</p>', 4, '2018-07-06 10:58:12', 'src/images.png'),
(105, 'Test', '<p>text text</p>', 1, '2018-07-06 16:14:26', 'src/android-chrome-256x256.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `signup_date` date NOT NULL,
  `role` int(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `password`, `signup_date`, `role`) VALUES
(2, 'admin@florentis.ru', 'admin', '321', '0000-00-00', 1),
(29, 'kalagur.a@yandex.ru', 'kalagur', 'kalagur90', '2018-07-05', 0),
(30, '123@123.ru', 'andrey', '11111', '2018-07-05', 0),
(32, 'admin@florenti.r', '12345', '12345', '2018-07-06', 0),
(33, 'admiin@florentis.ru', 'kalagur900', '90000', '2018-07-06', 0),
(34, 'dev@123.ru', 'dev', '90000', '2018-07-06', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
