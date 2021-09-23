SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+03:00";


GRANT ALL PRIVILEGES ON *.* TO 'mysql'@'%' IDENTIFIED BY 'mysql' WITH GRANT OPTION;
FLUSH PRIVILEGES;


CREATE TABLE `Person` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `Person` (`id`, `name`) VALUES
(1, 'William'),
(2, 'Marc'),
(3, 'John');
