CREATE TABLE `usuarioRegistro1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuarioRegistro_id` int(11) NOT NULL,
  `usuario_telefono1` varchar(300) NOT NULL,
  `usuario_telefono2` varchar(300) NOT NULL,
  `usuario_nombre_mascota` varchar(300) NOT NULL,
  `usuario_nacimiento_mascota` varchar(300) NOT NULL,
  `usuario_raza_mascota` varchar(300) NOT NULL,
  `usuario_tamano_mascota` varchar(100) NOT NULL,
  `usuario_genero_mascota` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;