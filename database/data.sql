SET NAMES 'utf8' COLLATE 'utf8_general_ci';
SET FOREIGN_KEY_CHECKS=0;

--
-- Table structure for table `annotation`
--
DROP DATABASE IF EXISTS vazarch;
CREATE DATABASE vazarch;
CREATE USER 'vazarch'@'localhost' IDENTIFIED BY 'password';
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

INSERT INTO `randonnee`( `nom`, `adresse`, `code_postal`, `ville`) VALUES ('Grenoble','15 rue des moineaux','15','dav');