CREATE TABLE `registroMascota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registroMascota_id` int(11) NOT NULL,
  `usuario_telefono1` varchar(300) NOT NULL,
  `usuario_telefono2` varchar(300) NOT NULL,
  `usuario_nombre_mascota` varchar(300) NOT NULL,
  `usuario_nacimiento_mascota` varchar(300) NOT NULL,
  `usuario_raza_mascota` int(11) NOT NULL,
  `usuario_tamano_mascota` int(11) NOT NULL,
  `usuario_genero_mascota` int(11) NOT NULL,
  `estadoMascotas` int(11) NOT NULL DEFAULT 2,
  `mensaje` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `registroMascota_FK` (`usuario_genero_mascota`),
  KEY `registroMascota_FK_1` (`usuario_raza_mascota`),
  KEY `registroMascota_FK_2` (`usuario_tamano_mascota`),
  KEY `registroMascota_FK_3` (`estadoMascotas`),
  CONSTRAINT `registroMascota_FK` FOREIGN KEY (`usuario_genero_mascota`) REFERENCES `genero_mascota` (`genero_id`),
  CONSTRAINT `registroMascota_FK_1` FOREIGN KEY (`usuario_raza_mascota`) REFERENCES `raza_mascota` (`raza_id`),
  CONSTRAINT `registroMascota_FK_2` FOREIGN KEY (`usuario_tamano_mascota`) REFERENCES `tamano_mascota` (`tamano_id`),
  CONSTRAINT `registroMascota_FK_3` FOREIGN KEY (`estadoMascotas`) REFERENCES `estadoMascotas` (`estadoMascotas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;