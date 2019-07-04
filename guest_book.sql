-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 04 2019 г., 12:17
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
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `userName`, `email`, `text`, `homePage`, `date`, `meta`) VALUES
(36, 'Tatyana', 'myemail@gmail.com', 'Очень рада,что нашла Ваш сайт! Спасибо за выставленные материалы! Помощь бесценная! Благодарю за бескорыстие и подвижничество! Здоровья,творческих успехов!', 'https://www.google.com/', '2019-06-23 00:00:00', ''),
(37, 'Kseniya', 'ooo19920710@mail.ru', 'Уважаемая Елена Алексеевна, спасибо за Ваш труд!', 'https://yandex.ru/', '2019-06-23 00:00:00', ''),
(38, 'Dahlia', 'myemail@gmail.com', 'Да ваш сайт очень полезный! Молодцы)', 'https://www.google.com/', '2019-06-23 00:00:00', ''),
(43, 'Nikolay', 'ooo19920710@mail.ru', 'Hi!!!', 'http://aaa.ru', '2019-07-01 22:06:47', 'dsgds'),
(39, 'el.nikolaeva', 'hfkkbjk@mail.ru', 'Спасибо большое за тесты! Очень помогают готовиться к контрольным.', 'https://yandex.ru/', '2019-06-23 00:00:00', '');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` tinyint(3) unsigned NOT NULL,
  `metaKey` varchar(255) NOT NULL,
  `metaDes` varchar(255) NOT NULL,
  `iconImg` varchar(255) NOT NULL DEFAULT 'notImg.png',
  `imgPage` varchar(255) NOT NULL DEFAULT 'no img',
  `titleSite` varchar(255) NOT NULL,
  `textSite` text NOT NULL,
  `namePage` varchar(255) NOT NULL DEFAULT 'no name'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `metaKey`, `metaDes`, `iconImg`, `imgPage`, `titleSite`, `textSite`, `namePage`) VALUES
(1, 'Homepage', 'Homepage', 'makeup_22.png', 'images.png', 'Homepage', 'Fusce Eleifend Posuere Nibsor\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend posuere nibh, ut tincidunt est pretium vitae. Suspendisse dapibus arcu in tortor scelerisque volutpat. In imperdiet, lectus eu gravida vestibulum, orci bamte nibehre ustiyep malesuada nunc, lobortis commodo lorem ipsum a quam...Continue Reading', 'no name'),
(2, 'Journal', 'Journal', 'makeup_25.png', '641522534013585731.jpg', 'Journal', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 'no name'),
(3, 'Portfolio', 'Portfolio', 'makeup_14.png', 'maxresdefault.jpg', 'Portfolio', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 'no name'),
(4, 'About Me', 'About Me', 'makeup_28.png', '5d1444672b-aboutus-main.jpg', 'Jour About', 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', 'no name'),
(5, 'Guest book ', 'Guest book ', 'makeup_31.png', 'no img', 'Guest book ', 'Гостевая книга. Поля со звездочкой <span class=''red''>*</span> обязательны для заполнения!\n\n', 'guest_book');

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
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` tinyint(12) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
