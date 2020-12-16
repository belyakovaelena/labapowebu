-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 16 2020 г., 10:34
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register-bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(100) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`) VALUES
(2, 'nastya1205', 'eef4e5792692ac67c1b190a8111211b4', 'Анастасия'),
(3, 'lolka34', '256da60eed793c0414aa0489cfb20223', 'Алена'),
(4, 'volsu20', 'afa64c8a0181d78dee764aa78b637147', 'Степан'),
(5, 'papapa67', 'f2b17603265786b38eb715c918cb0ab3', 'Игорь'),
(6, 'erikpick45', 'f410a366c56c501f1cba9c1ab1d67359', 'Аня'),
(9, 'кузнецов2020', 'b48795b450ac9d21f67993a4f9684707', 'Влад'),
(10, 'лолка5050', 'c91cd1623874c049c0fb859fe2c6d70a', 'Леха'),
(11, '88005553535', 'ae5620fd0246247cfee5e83c5b31cf3f', 'Владислав'),
(15, 'lenochka2117', 'a0ca50613a75f62a065e3c166d06312b', 'Елена'),
(17, 'stepan1312', '71f80077017599258b5a802464175681', 'Степан');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
