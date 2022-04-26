CREATE TABLE `mascota` (
  `mascota_id` int(11) NOT NULL AUTO_INCREMENT,
  `mascota_nombre` varchar(100) NOT NULL,
  `mascota_nacimiento` varchar(100) NOT NULL,
  `mascota_raza` varchar(100) NOT NULL,
  PRIMARY KEY (`mascota_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;





CREATE TABLE `usuarioRegistro` (
`usuarioRegistro_id` int(11) NOT NULL AUTO_INCREMENT,
`usuario_telefono1` varchar(300) NOT NULL,
`usuario_telefono2` varchar(300) NOT NULL,
`usuario_nombre_mascota` varchar(300) NOT NULL,
`usuario_nacimiento_mascota` varchar(300) NOT NULL,
`usuario_raza_mascota` varchar(300) NOT NULL,
PRIMARY KEY (`usuarioRegistro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;