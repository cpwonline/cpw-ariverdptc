
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario_nombre` varchar(20) NOT NULL,
  `usuario_clave` varchar(20) NOT NULL,
  `usuario_email` varchar(200) NOT NULL,
  `usuario_datos_nombre` varchar(30) NOT NULL,
  `usuario_datos_apellido` varchar(30) NOT NULL,
  `usuario_datos_cedula` varchar(20) NOT NULL,
  `usuario_datos_tel` varchar(30) NOT NULL,
  `usuario_datos_direccion` varchar(100) NOT NULL,
  `usuario_datos_telefono` varchar(30) NOT NULL,
  `usuario_datos_fnac` date NOT NULL,
  `usuario_admin` varchar(30) NOT NULL DEFAULT'none',
  `usuario_control` varchar(30) NOT NULL DEFAULT'none',
  `usuario_freg` date NOT NULL,
  PRIMARY KEY(usuario_id)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
