CREATE TABLE `mensajeMascota` (
  `mensaje_id` int(11) NOT NULL AUTO_INCREMENT,
  `mascota_id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  PRIMARY KEY (`mensaje_id`),
  KEY `mensajeMascota_FK_1` (`mascota_id`),
  CONSTRAINT `mensajeMascota_FK_1` FOREIGN KEY (`mascota_id`) REFERENCES `registroMascota` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;