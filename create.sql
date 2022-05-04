CREATE DATABASE `mintyphp-todomvc` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
CREATE USER 'mintyphp-todomvc'@'localhost' IDENTIFIED BY 'mintyphp-todomvc';
GRANT ALL PRIVILEGES ON `mintyphp-todomvc`.* TO 'mintyphp-todomvc'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

---

DROP TABLE IF EXISTS `todo`;
CREATE TABLE `todo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_checked` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

