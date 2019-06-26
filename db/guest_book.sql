-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 23 2019 г., 21:29
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guest_book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` tinyint(12) unsigned NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `homePage` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `meta` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `userName`, `email`, `text`, `homePage`, `date`, `meta`) VALUES
(36, 'Tatyana', 'myemail@gmail.com', 'Очень рада,что нашла Ваш сайт! Спасибо за выставленные материалы! Помощь бесценная! Благодарю за бескорыстие и подвижничество! Здоровья,творческих успехов!', 'https://www.google.com/', '2019-06-23 00:00:00', ''),
(37, 'Kseniya', 'ooo19920710@mail.ru', 'Уважаемая Елена Алексеевна, спасибо за Ваш труд!', 'https://yandex.ru/', '2019-06-23 00:00:00', ''),
(38, 'Dahlia', 'myemail@gmail.com', 'Да ваш сайт очень полезный! Молодцы)', 'https://www.google.com/', '2019-06-23 00:00:00', ''),
(39, 'el.nikolaeva', 'hfkkbjk@mail.ru', 'Спасибо большое за тесты! Очень помогают готовиться к контрольным.', 'https://yandex.ru/', '2019-06-23 00:00:00', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `userName_2` (`userName`),
  ADD KEY `email_2` (`email`),
  ADD KEY `date` (`date`),
  ADD KEY `userName_3` (`userName`),
  ADD FULLTEXT KEY `userName` (`userName`);
ALTER TABLE `book`
  ADD FULLTEXT KEY `email` (`email`);
ALTER TABLE `book`
  ADD FULLTEXT KEY `text` (`text`);
ALTER TABLE `book`
  ADD FULLTEXT KEY `email_3` (`email`);
ALTER TABLE `book`
  ADD FULLTEXT KEY `text_2` (`text`);
ALTER TABLE `book`
  ADD FULLTEXT KEY `homePage` (`homePage`);
ALTER TABLE `book`
  ADD FULLTEXT KEY `email_4` (`email`);
ALTER TABLE `book`
  ADD FULLTEXT KEY `userName_4` (`userName`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` tinyint(12) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
