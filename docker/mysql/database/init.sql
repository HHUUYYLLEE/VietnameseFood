CREATE DATABASE IF NOT EXISTS `food` /*!40100 COLLATE 'utf8_general_ci' */;

CREATE USER 'food'@'localhost' IDENTIFIED BY '123456';
CREATE USER 'food'@'%' IDENTIFIED BY '123456';

GRANT ALL ON *.* TO 'food'@'localhost';
GRANT ALL ON *.* TO 'food'@'%';

FLUSH PRIVILEGES;
