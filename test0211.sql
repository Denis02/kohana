-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: db2.ho.ua
-- Время создания: Окт 05 2017 г., 22:51
-- Версия сервера: 5.6.37-log
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test0211`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categoryphotos`
--

CREATE TABLE `categoryphotos` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `folder` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categoryphotos`
--

INSERT INTO `categoryphotos` (`id`, `name`, `folder`, `photo`) VALUES
(14, 'Love Story', 'lovestory', '117.jpg'),
(16, 'Дети', 'children', '322.jpg'),
(17, 'Животные', 'animals', '420.jpg'),
(18, 'Пейзажи', 'landscape', '503.jpg'),
(19, 'Портреты', 'portraits', '611.jpg'),
(20, 'До, после', 'before_after', '701.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `myinfo`
--

CREATE TABLE `myinfo` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `myinfo`
--

INSERT INTO `myinfo` (`id`, `email`, `phone`, `address`, `text`) VALUES
(1, 'ttaa@mail.ru', '+3 8(063) 286-90-00', 'Винница, Украина', '																																																																																																																																																																																																																																																																																		Приветствую Вас на своем сайте!\n<br /><br />Зовут меня Татьяна. Я фотограф-любитель. Вот уже 2 года как вплотную увлекаюсь фотографией и фотографированием.\n<br /><br />Если Вам мои работы пришлись по вкусу, то могу предложить свои услуги по фотосъемке или ретуши.\n<br /><br />Если у Вас возникнут вопросы по поводу моих услуг - звоните или пишите, буду рада ответить на все ваши вопросы.\n<br /><br />Приятного просмотра!																																																																																																																																																																																																																																							');

-- --------------------------------------------------------

--
-- Структура таблицы `networks`
--

CREATE TABLE `networks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `networks`
--

INSERT INTO `networks` (`id`, `name`, `address`, `img`) VALUES
(1, 'Вконтакте', 'https://vk.com/t_an_y', 'vk.png'),
(2, 'Instagram', 'https://instagram.com/tanyakhmelevska', 'instagram.png'),
(3, 'DBurn.ru', 'http://dburn.ru/users/Tatiana184764', 'db2.png'),
(10, 'Ask.fm', 'http://ask.fm/id8455508', 'ask.fm.png');

-- --------------------------------------------------------

--
-- Структура таблицы `presentphotos`
--

CREATE TABLE `presentphotos` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `presentphotos`
--

INSERT INTO `presentphotos` (`id`, `name`) VALUES
(1, 'animals/425.jpg'),
(2, 'landscape/513.jpg'),
(3, 'animals/421.jpg'),
(4, 'children/307.jpg'),
(5, 'portraits/617.jpg'),
(6, 'portraits/630.jpg'),
(18, 'children/325.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categoryphotos`
--
ALTER TABLE `categoryphotos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `myinfo`
--
ALTER TABLE `myinfo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `presentphotos`
--
ALTER TABLE `presentphotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categoryphotos`
--
ALTER TABLE `categoryphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `myinfo`
--
ALTER TABLE `myinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `networks`
--
ALTER TABLE `networks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `presentphotos`
--
ALTER TABLE `presentphotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
