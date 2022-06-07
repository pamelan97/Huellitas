CREATE TABLE `placasMascotas` (
  `placasMascotas_id` int(11) NOT NULL AUTO_INCREMENT,
  `registroMascota_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`placasMascotas_id`),
  KEY `placasMascotas_FK` (`registroMascota_id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;