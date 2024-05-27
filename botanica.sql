-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2024 г., 14:51
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `botanica`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Лиственные и цветущие'),
(3, 'Экзотические'),
(6, 'плодовые и цветущие'),
(13, 'мвввввввв');

-- --------------------------------------------------------

--
-- Структура таблицы `question`
--

CREATE TABLE `question` (
  `id` int(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `number` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `question`
--

INSERT INTO `question` (`id`, `name`, `text`, `number`) VALUES
(4, 'йййййййй', '22222222222222222222222222222', '87656544334'),
(6, 'цццццццццццццццццццццееееееееееееецц', 'цццццццццццццццццццц', '87656544334');

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `artikul` int(250) DEFAULT NULL,
  `price` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `genus` varchar(250) DEFAULT NULL,
  `sort` varchar(250) DEFAULT NULL,
  `height` varchar(250) DEFAULT NULL,
  `width` varchar(250) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `sovet` text DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `category` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `artikul`, `price`, `type`, `genus`, `sort`, `height`, `width`, `opis`, `sovet`, `photo`, `category`) VALUES
(2, 'Ананас Микс', 10201031, '3000', 'цитрусовые', 'род ананас', 'сорт яркий', '40', '30', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo co', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo co', NULL, 3),
(3, 'фиалка', 211111111, '322232', 'цветущие', 'эвкалиптовые', 'сорт2', '80', '32', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo co', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo co', NULL, 3),
(4, 'кактус', 2222222, '3434', 'колючие', 'род3', 'сорт3', '34', '34', 't, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo co', NULL, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `adress` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `role` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `fullname`, `adress`, `email`, `password`, `photo`, `role`) VALUES
(3, '4', '4', 'eeeee', '16@mail.ru', '$2y$10$T8HAsCqFuINj8mTpuf4AweU.XfxpvNtOs1dIltAzsMrOzfcb19LY6', NULL, 2),
(4, 'азалия', 'админ', 'цццццццц', '9@mail.ru', '$2y$10$Ykm/PaHEJJrIQfcrILWtUOOl2fsfIZdZo/1GmHyB0KXF.35aSXKzW', NULL, 2),
(5, 'ee1111', 'ee', 'eee', 'e@mail.ru', '$2y$10$wouBlBEwGf69wpW.s3g4mOr/.Ml0JMt3sreaNXDXCYq2YELRn3f4q', NULL, 1),
(7, 'йййййй', 'ййййййййй', 'йййййййййййй', '34@mail.ru', '$2y$10$togZ5yKu7H79b8Cf/VNZauZhpsLUQRB77akLwz2O5JQAzWU9RfPUm', NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
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
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `question`
--
ALTER TABLE `question`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
