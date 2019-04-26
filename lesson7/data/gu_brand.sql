-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 26 2019 г., 11:44
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gu_brand`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id_product` int(11) NOT NULL,
  `img` varchar(256) NOT NULL DEFAULT 'img/goods/01.jpg',
  `image_alt` varchar(256) NOT NULL DEFAULT 'picture ',
  `product_name` varchar(1024) NOT NULL,
  `product_desc` text,
  `price` decimal(10,2) NOT NULL,
  `storage` int(11) NOT NULL DEFAULT '10',
  `color` varchar(256) NOT NULL DEFAULT 'Red',
  `size` varchar(256) NOT NULL DEFAULT 'X',
  `rating` int(11) NOT NULL DEFAULT '5',
  `discount` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id_product`, `img`, `image_alt`, `product_name`, `product_desc`, `price`, `storage`, `color`, `size`, `rating`, `discount`) VALUES
(1001, 'img/goods/01.jpg', 'good image', 'Mango t-shot', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', '52.00', 10, 'red', 'XXL', 5, 0),
(1002, 'img/goods/02.jpg', 'good img', 'Orange t-shot', 'Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.', '53.00', 7, 'Green', 'XL', 4, 0),
(1003, 'img/goods/03.jpg', 'img', 'Green t-shot', 'описание', '54.00', 7, 'red', 'X', 5, 1),
(1004, 'img/goods/04.jpg', 'img', 'Blue t-shot', 'описание', '55.00', 7, 'red', 'X', 5, 1),
(1005, 'img/goods/05.jpg', 'picture ', 'Black t-shot', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem maxime atque tempora. Optio, commodi consequuntur. Accusamus vero fugit ducimus consectetur.', '57.00', 10, 'Red', 'X', 5, 0),
(1006, 'img/goods/06.jpg', 'picture ', 'Red t-shot', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem maxime atque tempora. Optio, commodi consequuntur. Accusamus vero fugit ducimus consectetur.', '103.50', 10, 'Red', 'X', 5, 1),
(1007, 'img/goods/07.jpg', 'picture ', 'Yellow t-shot', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem maxime atque tempora. Optio, commodi consequuntur. Accusamus vero fugit ducimus consectetur.', '35.00', 10, 'Red', 'X', 5, 0),
(1008, 'img/goods/08.jpg', 'picture ', 'Mango t-shot', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem maxime atque tempora. Optio, commodi consequuntur. Accusamus vero fugit ducimus consectetur.', '120.10', 10, 'Red', 'X', 5, 0),
(1009, 'img/goods/09.jpg', 'picture ', 'Mango n-shot', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem maxime atque tempora. Optio, commodi consequuntur. Accusamus vero fugit ducimus consectetur.', '33.70', 10, 'Red', 'X', 5, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `date` datetime NOT NULL,
  `products` text NOT NULL,
  `status` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `date`, `products`, `status`) VALUES
(2, 'Илья Петров', '9212160840', '2019-04-26 11:21:12', '1001', 1),
(3, 'Илья Петров', '9212160840', '2019-04-26 11:25:14', '1001', 1),
(4, 'Ильк', '+700000000', '2019-04-26 11:26:06', '1001', 1),
(5, 'Ававакс', '+7000888000', '2019-04-26 11:27:07', '1001/1003/1003', 1),
(6, 'Покупатель', '+8-921-000000', '2019-04-26 11:43:54', '1006', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
