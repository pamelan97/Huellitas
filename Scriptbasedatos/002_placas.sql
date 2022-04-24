-- bitnami_myapp.placas definition

CREATE TABLE `placas` (
  `placa_id` int(11) NOT NULL AUTO_INCREMENT,
  `placa_nombre_mascota` varchar(100) NOT NULL,
  PRIMARY KEY (`placa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;