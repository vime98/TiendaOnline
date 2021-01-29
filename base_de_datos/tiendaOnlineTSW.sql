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

/*Table structure for table `carrito` */

DROP TABLE IF EXISTS `carrito`;

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `opciones` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_2` (`user_id`),
  CONSTRAINT `user_id_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `carrito` */

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
(1,'Ajo','Allium sativum, el ajo, es una especie tradicionalmente clasificada dentro de la familia de las liliáceas pero que actualmente se ubica en la de las amarilidáceas, ​ aunque este extremo es muy discutido.','./img/plantas/ajo.jpg',30,1,17),
(4,'Puerro','Allium ampeloprasum var. porrum, el puerro, porro, ajo porro, ajoporro, poro o cebolla larga, es una de las variedades cultivadas de la especie Allium ampeloprasum. Como la cebolla y el ajo, esta planta pertenece a la familia de las Amaryllidaceae.','./img/plantas/puerro.jpg',15,1,5),
(5,'Acelgas','Beta vulgaris var. cicla, la acelga, es una subespecie de Beta vulgaris, al igual que las remolachas, betarragas y el betabel, aunque a diferencia de estas se cultiva para aprovechar sus hojas en lugar de sus raíces y sirve para el consumo en cualquier etapa de su período vegetativo.','./img/plantas/acelgas.jpg\r\n',20,1,85),
(6,'Alcachofa','Cynara scolymus, la alcachofera, alcachofa, alcacil o alcaucil, ​ entre otros numerosos nombres vernáculos, es una planta herbácea del género Cynara en la familia Asteraceae; es cultivada desde la antigüedad como alimento en climas templados.','./img/plantas/alcachofa.jpg\r\n',90,1,0),
(7,'Apio','Apium graveolens, llamado comúnmente apio, es una especie perteneciente a la familia de las apiáceas, de distribución cosmopolita.','./img/plantas/apio.jpg\r\n',80,1,2),
(8,'Batata','Ipomoea batatas, llamada comúnmente batata, ​ papa dulce, patata dulce, ​ camote​, moniato​ o boniato, ​ es una planta de la familia Convolvulaceae, cultivada en gran parte del mundo por su raíz tuberosa comestible.','./img/plantas/batata.jpg\r\n',19,1,5),
(9,'Berenjena','La berenjena es una planta de fruto comestible, generalmente anual, del género Solanum dentro de la familia de las solanáceas.','./img/plantas/berenjena.jpg\r\n',80,1,89),
(10,'Brocoli','Brassica oleracea var. italica, el brócoli, ​ brécol​ o bróquil​ del italiano broccoli, es una planta de la familia de las brasicáceas. Otras variedades de la misma especie son el repollo, la coliflor, el colinabo y la col de Bruselas. El llamado brócoli chino o kale es también una variedad de Brassica oleracea.','./img/plantas/brocoli.jpg\r\n',16,1,5),
(11,'Calabacin','Cucurbita pepo es el nombre científico de una especie de plantas cucurbitáceas originaria de Mesoamérica y sur de Estados Unidos, que junto con otras especies emparentadas (Cucurbita maxima, C. moschata, C. argyrosperma) forman un grupo de especies de calabazas cuyas variedades cultivadas, de las que se cosecha su fruto maduro o inmaduro, poseen usos culinarios indistinguibles (son los zapallos, calabacines, zapallitos, zapallo italiano, auyamas, ahuyamas, pipianes, ayotes, etc).','./img/plantas/calabacin.jpg\r\n',11,1,12),
(12,'Calabaza','La calabaza es una baya de cáscara dura. Es el fruto de las cucurbitáceas y es un fruto de tipo pepónide. Algunos autores también incluyen a los frutos del género Lagenaria, y a los frutos de las plantas de la familia de las bignoniáceas, como los \"árboles de calabazas\" Crescentia y Amphitecna.','./img/plantas/calabaza.jpg\r\n',13,1,15),
(13,'Cebolla','Allium cepa, comúnmente conocida como cebolla, es una planta herbácea bienal perteneciente a la familia de las amarilidáceas. Es la especie más cultivada del género Allium, el cual contiene varias especies que se denominan «cebollas» y que se cultivan como alimento.','./img/plantas/cebolla.jpg\r\n',17,1,19),
(14,'Col','Brassica oleracea var. capitata, repollo, col repollo​ o col cerrada, es una planta comestible de la familia de las Brasicáceas, y una herbácea bienal, cultivada como anual, cuyas hojas lisas forman un característico cogollo compacto.','./img/plantas/col.jpg\r\n',67,1,18),
(15,'Coliflor','La coliflor es una variedad de la especie Brassica oleracea, en el grupo de cultivares Botrytis de la familia Brassicaceae.','./img/plantas/brocoli.jpg\r\n',18,1,90),
(16,'Endivia','Las Endivias','./img/plantas/endivia.jpg\r\n',99,1,7),
(17,'Escarola','Las Escarolas','./img/plantas/escarola.jpg\r\n',90,1,10),
(18,'Espinacas','Las Espinacas','./img/plantas/espinacas.jpg\r\n',7,1,10),
(19,'Garbanzos','Los Garbanzos','./img/plantas/garbanzos.jpg\r\n',9,1,10),
(20,'Guisantes','Los Guisantes','./img/plantas/guisantes.jpg\r\n',11,1,10),
(21,'Habas','Las Habas','./img/plantas/habas.jpg\r\n',13,1,10),
(22,'Hinojo','Las Hinojos','./img/plantas/hinojo.jpg\r\n',89,1,10),
(23,'Lombarda','Las Lombardas','./img/plantas/lombarda.jpg\r\n',9,1,10),
(24,'Melon','Los Melones','./img/plantas/melon.jpg\r\n',10,1,10),
(25,'Patata','Los Patatas','./img/plantas/patata.jpg\r\n',15,1,9),
(26,'Pepino','Las Pepinos','./img/plantas/pepino.jpg\r\n',13,1,10),
(27,'Pimiento','Las Pimientos','./img/plantas/pimiento.jpg\r\n',23,1,10),
(28,'Rabano','Las Rabanos','./img/plantas/rabano.jpg\r\n',14,1,10),
(29,'Remolacha','Los Remolachas','./img/plantas/remolacha.jpg\r\n',15,1,10),
(30,'Repollo','Los Repollos','./img/plantas/repollo.jpg\r\n',18,1,10),
(31,'Tomate','Las Tomates','./img/plantas/tomate.jpg\r\n',2,1,10),
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

/*Table structure for table `detalle` */

DROP TABLE IF EXISTS `detalle`;

CREATE TABLE `detalle` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,2) DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL,
  `DESCARDADO` int(1) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_ventas` (`IDVENTA`),
  KEY `id_producto` (`IDPRODUCTO`),
  CONSTRAINT `id_producto` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `catalogo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_ventas` FOREIGN KEY (`IDVENTA`) REFERENCES `venta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detalle` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `direccion` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

/*Table structure for table `venta` */

DROP TABLE IF EXISTS `venta`;

CREATE TABLE `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `Cosas` text NOT NULL,
  `ClaveTransaccion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `venta` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
