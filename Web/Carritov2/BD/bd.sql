SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


CREATE TABLE `categorias` (
  `id_cat` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `contiene` int(6) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


INSERT INTO `categorias` VALUES(1, 'programacion', 10);
INSERT INTO `categorias` VALUES(2, 'redes', 10);
INSERT INTO `categorias` VALUES(3, 'idiomas', 10);



CREATE TABLE `compra` (
  `idcompra` int(4) NOT NULL AUTO_INCREMENT,
  `id_producto` int(6) NOT NULL,
  `idusuario` int(3) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcompra`),
  KEY `id_producto` (`id_producto`),
  KEY `idusuario` (`idusuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE `productos` (
  `id_producto` int(6) NOT NULL AUTO_INCREMENT,
  `id_cat` int(6) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `fabricante` varchar(32) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `categoria` (`id_cat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;



INSERT INTO `productos` VALUES(1, 1, 'PHP al límite', 'Luisa Gomez', 53.00, 'default.jpg', 'Aquí la descripción');
INSERT INTO `productos` VALUES(2, 1, 'PHP desde Cero', 'Juan Mena', 100.00, 'default.jpg', 'Aquí la descripción');
INSERT INTO `productos` VALUES(3, 2, 'CCNA 1', 'Carlos Quinto', 109.00, 'default.jpg', 'Aquí la descripción');
INSERT INTO `productos` VALUES(4, 2, 'CCNA 2', 'Covid Andres Juarez', 74.50, 'default.jpg', 'Aquí la descripción');
INSERT INTO `productos` VALUES(5, 3, 'Inglés 1', 'Karla Mendoza', 115.00, 'default.jpg', 'Aquí la descripción');
INSERT INTO `productos` VALUES(6, 3, 'Frances 1', 'Luisa Gomez', 110.00, 'default.jpg', 'Aquí la descripción');

-- --------------------------------------------------------


CREATE TABLE `usuario` (
  `idusuario` int(3) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `fechaingreso` varchar(40) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;


INSERT INTO `usuario` VALUES(1, 'usuario1', 'Juan', 'Gamboa', 'Costa Rica', 'Puntarenas', 'hola', '11 de Abril de 2020');

