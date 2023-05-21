SET NAMES 'utf8' COLLATE 'utf8_general_ci';
SET FOREIGN_KEY_CHECKS=0;

--
-- Table structure for table `annotation`
--
DROP DATABASE IF EXISTS vazarch;
CREATE DATABASE vazarch;
DROP USER if exists 'vazarch'@'localhost';
CREATE USER 'vazarch'@'localhost' IDENTIFIED BY 'password';
GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO 'vazarch'@'localhost';
DROP TABLE IF EXISTS `randonnee`;
CREATE TABLE `randonnee`
(
    `id`          int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `nom`         varchar(25),
    `adresse`     varchar(25),
    `code_postal` int(5) unsigned ,
    `ville`       varchar(10),
    `description` varchar(250),
    `auteur`      varchar(10),
    `score`       int(4),
    `photo`       blob
);
