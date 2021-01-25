/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - tienda_online_plg
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tienda_online_plg` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tienda_online_plg`;

/*Table structure for table `catalogo` */

DROP TABLE IF EXISTS `catalogo`;

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `foto` text NOT NULL,
  `precio` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`),
  CONSTRAINT `categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `catalogo` */

insert  into `catalogo`(`id`,`nombre`,`descripcion`,`foto`,`precio`,`categoria_id`,`stock`) values 
(1,'Ajo','El ajo es bueno para el cuerpo','./img/plantas/ajo.jpg',30,1,20),
(4,'Puerro','El Purro','./img/plantas/puerro.jpg',15,1,10),
(5,'Acelgas','Las Acelgas','./img/plantas/acelgas.jpg\r\n',20,1,90),
(6,'Alcachofa','Las Alcachofas','./img/plantas/alcachofa.jpg\r\n',90,1,2),
(7,'Apio','Los Apios','./img/plantas/apio.jpg\r\n',80,1,1),
(8,'Batata','Las Batatas','./img/plantas/batata.jpg\r\n',19,1,5),
(9,'Berenjena','Las Berenjenas','./img/plantas/berenjena.jpg\r\n',80,1,90),
(10,'Brocoli','Los Brocolis','./img/plantas/brocoli.jpg\r\n',16,1,6),
(11,'Calabacin','Las Calabacin','./img/plantas/calabacin.jpg\r\n',11,1,12),
(12,'Calabaza','Las Calabazas','./img/plantas/calabaza.jpg\r\n',13,1,15),
(13,'Cebolla','Las Cebollas','./img/plantas/cebolla.jpg\r\n',17,1,19),
(14,'Col','Las Coles','./img/plantas/col.jpg\r\n',67,1,18),
(15,'Coliflor','Los Brocolis','./img/plantas/brocoli.jpg\r\n',18,1,90),
(16,'Endivia','Las Endivias','./img/plantas/endivia.jpg\r\n',99,1,7),
(17,'Escarola','Las Escarolas','./img/plantas/escarola.jpg\r\n',15,1,10),
(18,'Espinacas','Las Espinacas','./img/plantas/espinacas.jpg\r\n',15,1,10),
(19,'Garbanzos','Los Garbanzos','./img/plantas/garbanzos.jpg\r\n',15,1,10),
(20,'Guisantes','Los Guisantes','./img/plantas/guisantes.jpg\r\n',15,1,10),
(21,'Habas','Las Habas','./img/plantas/habas.jpg\r\n',15,1,10),
(22,'Hinojo','Las Hinojos','./img/plantas/hinojo.jpg\r\n',15,1,10),
(23,'Lombarda','Las Lombardas','./img/plantas/lombarda.jpg\r\n',15,1,10),
(24,'Melon','Los Melones','./img/plantas/melon.jpg\r\n',15,1,10),
(25,'Patata','Los Patatas','./img/plantas/patata.jpg\r\n',15,1,10),
(26,'Pepino','Las Pepinos','./img/plantas/pepino.jpg\r\n',15,1,10),
(27,'Pimiento','Las Pimientos','./img/plantas/pimiento.jpg\r\n',15,1,10),
(28,'Rabano','Las Rabanos','./img/plantas/rabano.jpg\r\n',15,1,10),
(29,'Remolacha','Los Remolachas','./img/plantas/remolacha.jpg\r\n',15,1,10),
(30,'Repollo','Los Repollos','./img/plantas/repollo.jpg\r\n',15,1,10),
(31,'Tomate','Las Tomates','./img/plantas/tomate.jpg\r\n',15,1,10),
(32,'Zanahoria','Las Zanahorias','./img/plantas/zanahoria.jpg\r\n',15,1,10);

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `categoria` */

insert  into `categoria`(`id`,`nombre`) values 
(1,'Liliacelas');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
