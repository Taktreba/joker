-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 26 2018 г., 06:59
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `artjoker`
--

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `region_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `name`, `region_id`) VALUES
(1, 'Харьков', 1),
(2, 'Купянск', 1),
(3, 'Изюм', 1),
(4, 'Киев', 2),
(5, 'Бровары', 2),
(6, 'Борисполь', 2),
(7, 'Одесса', 3),
(8, 'Измаил', 3),
(9, 'Черноморск', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `sity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `districts`
--

INSERT INTO `districts` (`id`, `name`, `sity_id`) VALUES
(1, 'Киевский район', 1),
(2, 'Слободской район', 1),
(3, 'Немышлянский район', 1),
(4, 'с. Котляровка', 2),
(5, 'с. Ивановка', 2),
(6, 'с. Курочкино', 2),
(7, 'с. Топольское', 3),
(8, 'с. Руднево', 3),
(9, 'с. Козютовка', 3),
(10, 'Святошинский р-н', 4),
(11, 'Соломенский р-н', 4),
(12, 'Дарницкий р-н', 4),
(13, 'с. Пуховка', 5),
(14, 'с. Плоское', 5),
(15, 'с. Требухов', 5),
(16, 'с. Лозовка', 6),
(17, 'с. Петровское', 6),
(18, 'с. Кийлов', 6),
(19, 'Малиновский район', 7),
(20, 'Приморский район', 7),
(21, 'Малиновский район', 7),
(22, 'с. Броска', 8),
(23, 'с. МУРАВЛЁВКА ', 8),
(24, 'с. САФЬЯНЫ ', 8),
(25, 'с. Кирово', 9),
(26, 'с. Петровка', 9),
(27, 'с. Фонтанка', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
(1, 'Харьковская область'),
(2, 'Киевская область'),
(3, 'Одесская область');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `region_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `region_id`, `city_id`, `district_id`) VALUES
(1, 'leo', 'leo@mail.ru', 1, 3, 9),
(2, 'qwe', 'qwe@das.asd', 1, 2, 5),
(3, 'qwe', 'qwe@das.asdw', 3, 7, 21),
(4, 'aha', 'Aha@Aha.ss', 1, 1, 1),
(5, '3', 'asd@asd.er', 1, 2, 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
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
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
