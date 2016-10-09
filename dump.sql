-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.50 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных proba
DROP DATABASE IF EXISTS `proba`;
CREATE DATABASE IF NOT EXISTS `proba` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `proba`;


-- Дамп структуры для таблица proba.comment
DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_id` int(10) unsigned NOT NULL DEFAULT '0',
  `txt` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы proba.comment: ~15 rows (приблизительно)
DELETE FROM `comment`;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` (`id`, `image_id`, `txt`) VALUES
	(1, 1, 'ыфвфывфывфы'),
	(2, 1, 'ываываываыв'),
	(3, 1, 'ываыва'),
	(4, 2, 'Hello'),
	(5, 2, 'Hello, John\r\nmy name is Neo'),
	(6, 2, '1.	Общие положения\r\n1.1.	Литературная премия имени Сергея Есенина «Русь моя» учреждена Российским союзом писателей в 2015 году, объявленном, в соответствии с Указом Президента Российской Федерации от 12 июня 2014 г. № 426, Годом литературы в Российской Федерации, а также в ознаменование 120-летнего юбилея выдающегося русского поэта.\r\n\r\n1.2.	Премия ставит своими целями укрепление национального самосознания, пропаганду чтения и поддержку просветительской деятельности, стимулирование читательского и общественного интереса к творчеству Сергея Есенина.\r\n\r\n1.3.	Задачи премии – поиск и поощрение новых талантливых авторов, продолжающих и развивающих основные темы, присутствующие в творчестве Сергея Есенина. На конкурс принимаются произведения, как посвященные Сергею Есенину, так и вдохновленные его творчеством, стилистически или по духу созвучные его поэзии.\r\n\r\n1.4.	Конкурсный отбор осуществляется на базе крупнейших российских литературных порталов Стихи.ру и Проза.ру, которые предоставляют всем желающим возможность свободной публикации литературных произведений. Приглашение авторов к участию в конкурсе премии осуществляется редакционной комиссией.\r\n\r\n1.5.	Определение лауреатов премии осуществляет экспертное жюри премии, состоящее из профессиональных литераторов и других деятелей культуры.\r\n\r\n1.6.	Состав редакционной комиссии и экспертного жюри утверждается Оргкомитетом премии. В целях получения объективной оценки выдвигаемых на конкурс произведений состав редакционной комиссии не разглашается. Состав экспертного жюри в обязательном порядке публикуется на сайте премии.'),
	(7, 3, 'asa'),
	(8, 4, 'asdasd'),
	(9, 4, 'asdasd'),
	(10, 4, 'asdasd'),
	(11, 3, 'Привет валет'),
	(13, 3, 'Привет валет2'),
	(14, 3, 'Привет валет22'),
	(15, 3, 'Привет валет3'),
	(16, 3, 'Привет валет4');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;


-- Дамп структуры для таблица proba.instagram
DROP TABLE IF EXISTS `instagram`;
CREATE TABLE IF NOT EXISTS `instagram` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '0',
  `msg` varchar(255) NOT NULL DEFAULT '0',
  `path` varchar(140) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы proba.instagram: ~4 rows (приблизительно)
DELETE FROM `instagram`;
/*!40000 ALTER TABLE `instagram` DISABLE KEYS */;
INSERT INTO `instagram` (`id`, `email`, `msg`, `path`) VALUES
	(1, 'front_mib@mail.ru', 'dsdfsdfsdfsdfsdf', 'instagram/57dd43bfda95b_Koala.jpg'),
	(2, 'front_mib@mail.ru', 'sdasdasdas', 'instagram/57dd463dd5d26_Hydrangeas.jpg'),
	(3, 'a@a.com', 'Hello', 'instagram/57de7bf8d4e28_Desert.jpg'),
	(4, 'asdasdasda', 'asdasdasdasd', 'instagram/57e7c73189ad5_Jellyfish.jpg');
/*!40000 ALTER TABLE `instagram` ENABLE KEYS */;


-- Дамп структуры для таблица proba.task
DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `complete` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы proba.task: ~6 rows (приблизительно)
DELETE FROM `task`;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` (`id`, `title`, `complete`) VALUES
	(1, 'Task name', 1),
	(2, 'Task name2', 1),
	(3, 'One', 0),
	(4, 'Two', 1),
	(5, 'three', 0),
	(6, 'test', 1),
	(7, 'asdas', 1);
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
