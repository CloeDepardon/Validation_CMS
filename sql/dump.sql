SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `my_cms` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `my_cms`;

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` longtext NOT NULL,
  `hidden` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pages` (`id`, `title`, `content`, `hidden`)
VALUES
(1, 'home', '<h1>Ceci est ma maison !</h1>',    0);
(2, 'about', '<h1>Toutes les pages</h1>',    0);
(3, 'exemple', '<h1>Je suis une page</h1>',    0);
(4, 'edit', '<h1>Modifier la page</h1>',    0);
