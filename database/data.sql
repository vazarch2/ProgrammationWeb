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
    `description` text,
    `auteur`      varchar(10),
    `score`       int(4),
    `photo`       varchar(255) #blob
);
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('Belle balade', '15 avenue des moineaux', 38000, 'Grenoble', 'Cette balade est Ã  fuir.', 'Vassili', 0, '../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('A','A',38000,'Grenoble','Quelle belle ballade','V',8,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('A','B',38000,'Grenoble','Quelle belle ballade','Va',2,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('B','B',38000,'Grenoble','Quelle belle ballade','Vas',3,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('B','C',38000,'Grenoble','Quelle belle ballade','Vass',4,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('C','C',38000,'Grenoble','Quelle belle ballade','Vassi',5,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('C','D',38000,'Grenoble','Quelle belle ballade','Vassil',6,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('E','E',38000,'Grenoble','Quelle belle ballade','Vassili',7,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('E','F',38000,'Grenoble','Quelle belle ballade','V',8,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('F','F',38000,'Grenoble','Quelle belle ballade','A',9,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('F','G',38000,'Grenoble','Quelle belle ballade','S',10,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('G','G',38000,'Grenoble','Quelle belle ballade','S',1,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('G','H',38000,'Grenoble','Quelle belle ballade','I',0,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('H','H',38000,'Grenoble','Quelle belle ballade','L',6,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('H','I',38000,'Grenoble','Quelle belle ballade','I',7,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('I','I',38000,'Grenoble','Quelle belle ballade','Ili',9,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('I','K',38000,'Grenoble','Quelle belle ballade','Vass',5,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('K','K',38000,'Grenoble','Quelle belle ballade','Vassil',4,'../database/img/Grenoble.webp');
INSERT INTO randonnee(nom,adresse,code_postal,ville,description,auteur,score,photo) VALUES('K','L',38000,'Grenoble','Quelle belle ballade','Vassili',3, '../database/img/Grenoble.webp');