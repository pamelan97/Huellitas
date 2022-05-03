-- bitnami_myapp.usuarios definition

CREATE TABLE `segundoDueño` (
  `segundo_dueño_id` int(11) NOT NULL AUTO_INCREMENT,
  `segundo_dueño_correo` varchar(100) NOT NULL,
  `segundo dueño_telefono1` varchar(300) NOT NULL,
  `segundo dueño_telefono2` varchar(300) NOT NULL,
  PRIMARY KEY (`segundo_dueño_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

