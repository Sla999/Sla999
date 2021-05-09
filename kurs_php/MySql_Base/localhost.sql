-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 07 2011 г., 17:40
-- Версия сервера: 5.5.8
-- Версия PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mybase`
--
CREATE DATABASE `mybase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mybase`;

-- --------------------------------------------------------

--
-- Структура таблицы `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` char(200) DEFAULT NULL,
  `price` char(10) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `detail` char(200) DEFAULT NULL,
  `file_name` char(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Дамп данных таблицы `price`
--

INSERT INTO `price` (`id`, `name`, `price`, `quantity`, `detail`, `file_name`) VALUES
(13, 'Êîñòþì ï÷åëîâîäà', '680', 8, 'Êîñòþì ï÷åëîâîäà - óäîáíàÿ è íàäåæíàÿ çàùèòà âî âðåìÿ ðàáîòû îò óêóñîâ ï÷¸ë. Â êîìïëåêò âõîäÿò êóðòêà è áðþêè, êîñòþì êîìïëåêòóåòñÿ ëèöåâîé ñåòêîé.', 'image/image_price/kostum_pchelovoda.jpg'),
(14, 'Ïåð÷àòêè', '350', 12, 'Íåìåöêèå ïåð÷àòêè èçãîòîâëåíû èç ìÿãêîé îâå÷åé êîæè, óäëèííåíû äî ëîêòÿ, ñ ðåçèíêîé â âåðõíåé ÷àñòè. Ïðåêðàñíàÿ çàùèòà îò óæàëåíèé, â òî æå âðåìÿ ðóêà íå òåðÿåò ÷óâñòâèòåëüíîñòè.', 'image/image_price/perchatki.jpg'),
(15, 'Ñåòêà ëèöåâàÿ ìîäåëü 1', '78', 25, 'Ñåòêà ëèöåâàÿ ñëóæèò äëÿ çàùèòû ëèöà ï÷åëîâîäà îò óêóñîâ ï÷¸ë.', 'image/image_price/setka_licevaya_model_1.jpg'),
(16, 'Ñåòêà ëèöåâàÿ ìîäåëü 2', '80', 10, 'Ñåòêà ëèöåâàÿ ñëóæèò äëÿ çàùèòû ëèöà ï÷åëîâîäà îò óêóñîâ ï÷¸ë.', 'image/image_price/setka_licevaya_model_2.jpg'),
(18, 'Äèëàáèê', '40', 50, 'Ïðåïàðàò "Äèëàáèê" - äëÿ ïðîôèëàêòèêè è ëå÷åíèÿ âàððîàòîçà ï÷¸ë\r\n\r\nÑîñòàâ: Ñìåñü äâóõ ðàçíîâèäíîñòåé âûñîêîî÷èùåííîãî àìèòðàçà, íå äàþùàÿ ïðèâûêàíèÿ êëåùåé âàððîà ê äàííîìó ïðåïàðàòó. Ïðè îáðàáîòêå ïð', 'image/image_price/dilabik.jpg'),
(19, 'ÀíòèÂèð', '60', 40, 'Ôàðìàêîëîãè÷åñêîå äåéñòâèå: Â ñîñòàâ êîðìà "ÀíòèÂèð" âõîäÿò: àìèíîêèñëîòû, ìèêðîýëåìåíòû, ýêñòðàêò ÷åñíîêà, àñêîðáèíîâàÿ è íèêîòèíîâàÿ êèñëîòû, âèòàìèí À, âèòàìèíû ãðóïïû Â, áèîòèí è ñàõàðîçà. äëÿ ïðî', 'image/image_price/antivir.jpg'),
(20, 'Ñàíîêñ', '27', 50, '', 'image/image_price/sanoks.jpg'),
(21, 'Ñàíðîé', '55', 70, '', 'image/image_price/sanroi.jpg'),
(22, 'Äûìàðü äëÿ ï÷åë Profi 3', '350', 23, 'Èìååò 2 âïóñêíûõ êëàïàíà, äèàìåòð 10 ñì, íà îáðàòíîé ñòîðîíå ðó÷êà ñ äåðæàòåëåì äëÿ çàïèñåé.\r\n\r\nÂ ïðîäàæå èìåþòñÿ äîïîëíèòåëüíûå ìåõà äëÿ äûìàðÿ äàííîé ìîäåëè.', 'image/image_price/bee-smoker3.jpg'),
(23, 'Âèëêà äëÿ ðàñïå÷àòêè ñîòîâ', '34', 0, '', 'image/image_price/Pchelovodu_018.jpg'),
(24, 'Íîæ ïàñå÷íûé', '35', 50, 'Íîæ ïàñå÷íûé', 'image/image_price/Pchelovodu_027.jpg'),
(25, 'Âàëèê "¨æèê"', '120', 23, 'Âàëèê "¨æèê"', 'image/image_price/Pchelovodu_012.jpg'),
(26, 'Âîùèíà (5êã)', '350', 40, 'Âîùèíà (5êã)', 'image/image_price/voshina.jpg'),
(27, 'Ïðîâîëîêà (250 ã.)', '10', 50, 'Ïðîâîëîêà (250 ã.)', 'image/image_price/Pchelovodu_035.jpg'),
(28, 'Íàòÿæèòåëü ïðîâîëîêè', '40', 24, 'Íàòÿæèòåëü ïðîâîëîêè', 'image/image_price/natyajitel.jpg'),
(29, 'Ðåìåíü äëÿ ñòÿæêè óëüÿ', '10', 35, 'Ðåìåíü äëÿ ñòÿæêè óëüÿ', 'image/image_price/remen.jpg'),
(30, 'Êëèï äëÿ ëîâëè ìàòêè', '20', 35, 'Êëèï äëÿ ëîâëè ìàòêè', 'image/image_price/klipchina.jpg'),
(31, 'Ñèñòåìà íèêîò', '800', 5, 'Ñèñòåìà Nikot  (made in germany) äëÿ âûâîäà ìàòîê, âûïîëíåíà ïî ìåòîäó Äæåíòåðñêîãî ñîòà, ñ äîðàáîòêàìè. Â êîìïëåêò âõîäèò:\r\nîñíîâíàÿ ïëàòà (c 110 ÿ÷åéêàìè), ñ ðàçäåëèòåëüíîé ðåø¸òêîé è êëåòî÷êîé äëÿ', 'image/image_price/sistema_nicot.jpg'),
(32, 'Ìàðêåð äëÿ ìå÷åíèÿ ìàòîê', '25', 60, 'Ìàðêåð äëÿ ìåòêè ï÷åëèíûõ ìàòîê íà 2011, 2016 ãîä\r\n\r\nÖâåò: áåëûé', 'image/image_price/marker.jpg'),
(33, 'Êëèï äëÿ ëîâëè ìàòêè', '14', 45, 'Êëèï äëÿ ëîâëè ìàòêè èç ïëàñòìàññû, ïîéìàííûå ï÷¸ëû ñâîáîäíî âûõîäÿò ÷åðåç ïðîðåçè, ìàòêà îñòà¸òñÿ âíóòðè. Ë¸ãêàÿ ïðóæèíà è çàçîð ñïåðåäè èñêëþ÷àþò ïîâðåæäåíèå ìàòêè.', 'image/image_price/klip_plastmassoviy.jpg'),
(34, 'Ïîèëêà ïëàñòìàññîâàÿ', '5', 67, 'Ïîèëêà ïëàñòìàññîâàÿ', 'image/image_price/Pchelovodu_037_thm.jpg'),
(35, 'Ôèëüòð äëÿ ì¸äà', '120', 56, 'Ôèëüòð äëÿ ì¸äà', 'image/image_price/Pchelovodu_029.jpg'),
(36, 'Ýëåêòðî ïðèâîä äëÿ ìåäîãîíêè', '600', 7, 'Îòêà÷êà ðàìîê ïðîèñõîäèò â äâà öèêëà. Ñ íà÷àëî íà "ìàëûõ", à çàòåì íà "áîëüøèõ" îáîðîòàõ. Ðåãóëèðîâêà ñêîðîñòè áàðàáàíà ìåäîãîíêè ïðîèçâîäèòñÿ âðó÷íóþ.\r\n\r\nÏðåäåë ðåãóëèðîâêè ÷àñòîòû âðàùåíèÿ äâèãàòåëÿ', 'image/image_price/elektro_privod_dlya_medogonki_enlaq.jpg'),
(37, 'Ýëåêòðè÷åñêàÿ ìåäîãîíêà', '3200', 10, ' Ýëåêòðè÷åñêàÿ ìåäîãîíêà\r\n\r\nÒåõíè÷åñêàÿ õàðàêòåðèñòèêà:\r\nÅìêîñòü80 ëèòðîâ\r\n Êîëè÷åñòâî ðàìîê 6 øòóê\r\nÒèïõîðäèàëüíî-ðàäèàëüíàÿ\r\nÊàññåòûñàìîîáîðîòíûå\r\n×àñòîòà âðàùåíèÿ ðîòîðàðåãóëèðóåìàÿ, 0-200 îá/ìèí\r\n', 'image/image_price/673305.png'),
(38, 'Ìåäîãîíêà òðåõðàìíàÿ', '1800', 15, 'Ìåäîãîíêà òðåõðàìíàÿ, äåòàëè, ñîïðèêàñàþùèåìñÿ ñ ìåäîì, èçãîòîâëåíû èç ïèùåâîé íåðæàâåþùåé ñòàëè \r\n\r\nÄëÿ óäîáñòâà ýêñïëóàòàöèè áî÷êà ñíàáæåíà òðåìÿ ëàïàìè äëÿ çàêðåïëåíèÿ ìåäîãîíêè è äâóìÿ ðó÷êàìè äëÿ', 'image/image_price/394080.png');

-- --------------------------------------------------------

--
-- Структура таблицы `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `id` int(5) NOT NULL,
  `name` char(200) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `price` char(10) DEFAULT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `temp`
--

INSERT INTO `temp` (`id`, `name`, `quantity`, `price`) VALUES
(1, 'Ïåð÷àòêè', 1, '350'),
(2, 'Êîñòþì ï÷åëîâîäà', 1, '680'),
(3, 'Ïðîâîëîêà (250 ã.)', 1, '10'),
(4, 'Âîùèíà (5êã)', 1, '350'),
(5, 'Âîùèíà (5êã)', 1, '350');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login` char(10) DEFAULT NULL,
  `name` char(10) DEFAULT NULL,
  `family` char(20) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `password` char(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `family`, `email`, `password`) VALUES
(1, 'Sla999', 'Slava', 'Dovgan', 'sla_999@mail.ru', '1111'),
(2, 'Admin', 'admin', 'admin', 'admin@mail.ru', 'admin'),
(3, 'sla', 'sla', 'sla', 'sla@mail.ru', '2222');
