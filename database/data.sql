SET NAMES 'utf8' COLLATE 'utf8_general_ci';
SET FOREIGN_KEY_CHECKS=0;

--
-- Table structure for table `annotation`
--

DROP TABLE IF EXISTS `randonnee`;
CREATE TABLE `randonnee`
(
    `id`          int(10) unsigned NOT NULL AUTO_INCREMENT,
    `nom`         int(10) unsigned DEFAULT NULL,
    `adresse`     int(10) unsigned NOT NULL,
    `code_postal` int(10) unsigned DEFAULT NULL,
    `ville`       int(10) unsigned DEFAULT NULL
);