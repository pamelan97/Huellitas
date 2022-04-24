-- bitnami_myapp.usuarios definition

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_correo` varchar(100) NOT NULL,
  `usuario_clave` varchar(300) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;


CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_correo` varchar(100) NOT NULL,
  `usuario_clave` varchar(300) NOT NULL,
  `usuario_telefono1` varchar(300) NOT NULL,
  `usuario_telefono2` varchar(300) NOT NULL,
  `usuario_nombre_mascota` varchar(300) NOT NULL,
  `usuario_nacimiento_mascota` varchar(300) NOT NULL,
  `usuario_raza_mascota` varchar(300) NOT NULL,
  
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;