CREATE TABLE `mascota` (
  `mascota_id` int(11) NOT NULL AUTO_INCREMENT,
  `mascota_nombre` varchar(100) NOT NULL,
  `mascota_nacimiento` varchar(100) NOT NULL,
  `mascota_raza` varchar(100) NOT NULL,
  PRIMARY KEY (`mascota_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;