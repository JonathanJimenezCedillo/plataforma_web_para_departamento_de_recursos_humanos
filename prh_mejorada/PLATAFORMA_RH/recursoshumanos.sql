-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2020 a las 22:00:02
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recursoshumanos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscaBajas` (IN `valor` VARCHAR(50))  BEGIN
	SELECT * FROM baja_empleado WHERE baja_empleado.idempleado LIKE CONCAT(valor,'%') OR baja_empleado.fechabaja LIKE CONCAT(valor,'%');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscaCargos` (IN `valor` VARCHAR(20))  BEGIN
	SELECT * FROM empleados_cargos WHERE idcargo LIKE CONCAT('%',valor) OR iddepartamento LIKE CONCAT(valor,'%');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscaDiscapacidad` (IN `valor` VARCHAR(100))  BEGIN

	SELECT ec.idempleado As ID, em.nombre AS NOMBRE, ed.iddiscapacidad AS TIPO_DISCAPACIDAD, ed.nombres AS NOMBRE_ENFERMENDAD, ec.idcargo AS CARGO, ec.fechainicio AS FECHA_INICIO FROM empleados_cargos AS ec INNER JOIN empleados_discapacidades AS ed ON ec.idempleado=ed.idempleado INNER JOIN empleados AS em ON em.idnumeroempleados=ed.idempleado WHERE ed.nombres LIKE CONCAT(valor,'%');

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarEmpleados` (IN `valor` VARCHAR(100))  BEGIN
       SELECT * FROM empleados WHERE empleados.idnumeroempleados LIKE CONCAT(valor,'%') OR nombre LIKE CONCAT ('%',valor,'%') OR idcategoria LIKE CONCAT (valor,'%');
     END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `calcularTiempoTrabajado` (IN `idem` INT)  BEGIN

   DECLARE anioPasado INT;
 	DECLARE tiempo DATE;
 	SET anioPasado = (SELECT YEAR(fechainicio) FROM empleados_cargos WHERE idempleado=idem);

SET tiempo=(select DATE_SUB(NOW(),INTERVAL anioPasado YEAR));

SELECT YEAR(tiempo) AS Tiempo_Trabaja;
   END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultaDepartamentos` (IN `departamento` VARCHAR(100))  BEGIN
SELECT em.nombre, ec.iddepartamento, ec.idcargo,ec.salario from EMPLEADOS_CARGOS AS ec INNER JOIN empleados AS em ON em.idnumeroempleados = ec.idempleado WHERE iddepartamento=departamento;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultaDiscapacidades` (IN `discapacidad` VARCHAR(100))  BEGIN
SELECT ed.idempleado, em.nombre, ec.idcargo, cd.iddepartamento FROM empleados_discapacidades AS ed RIGHT JOIN empleados AS em ON ed.idempleado=idnumeroempleados RIGHT JOIN  EMPLEADOS_CARGOS AS ec ON em.idnumeroempleados = ec.idempleado INNER JOIN CARGOS_DEPARTAMENTOS AS cd ON ec.idcargo=cd.idcargo WHERE ed.nombres LIKE CONCAT('%', discapacidad , '%') GROUP BY em.nombre;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultaDiscapacidadesLimite` (IN `inicio` INT, IN `final` INT)  BEGIN
SELECT ec.idempleado As ID, em.nombre AS NOMBRE, ed.iddiscapacidad AS TIPO_DISCAPACIDAD, ed.nombres AS NOMBRE_ENFERMENDAD, ec.idcargo AS CARGO, ec.fechainicio AS FECHA_INICIO FROM empleados_cargos AS ec INNER JOIN empleados_discapacidades AS ed ON ec.idempleado=ed.idempleado INNER JOIN empleados AS em ON em.idnumeroempleados=ed.idempleado LIMIT inicio, final;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultaTrabajo_con_Discapacidades` ()  BEGIN

    SELECT EC.idempleado,EC.idcargo,E.nombre, ED.iddiscapacidad,ED.nombres,EC.fechainicio  FROM empleados_cargos AS EC INNER JOIN empleados_discapacidades AS ED ON ED.idempleado=EC.idempleado INNER JOIN empleados AS E ON E.idnumeroempleados=ED.idempleado
;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `datosEmpleados` ()  BEGIN
SELECT * FROM EMPLEADOS LIMIT 20;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editarDatosEmpleados` (IN `id` INT, IN `nombre` VARCHAR(50), IN `app` VARCHAR(50), IN `fecha` DATE, IN `sexo` VARCHAR(10), IN `edoC` VARCHAR(50), IN `curp` VARCHAR(100), IN `calle` VARCHAR(50), IN `colonia` VARCHAR(50), IN `municipio` VARCHAR(50), IN `cp` INT, IN `categoria` INT, IN `idcargo` INT, IN `iddepa` VARCHAR(50), IN `fechaIn` DATE, IN `salario` INT)  BEGIN
	UPDATE empleados SET empleados.nombre=nombre, empleados.apellidopaterno=app, empleados.fechanacimiento=fecha, empleados.sexo=sexo, empleados.estadocivil=edoC, empleados.curp=curp, empleados.calle=calle, empleados.colonia=colonia, empleados.municipio=municipio, empleados.codigopostal=cp, empleados.idcategoria=categoria WHERE empleados.idnumeroempleados=id;
	UPDATE empleados_cargos SET empleados_cargos.idcargo=idcargo, empleados_cargos.iddepartamento=iddepa, empleados_cargos.fechainicio=fechaIn, empleados_cargos.salario=salario WHERE empleados_cargos.idempleado=id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarBajas` (IN `id` INT)  BEGIN
	DELETE FROM baja_empleado WHERE baja_empleado.idempleado=id;
    DELETE FROM empleados_documentos WHERE empleados_documentos.idempleado=id;
    DELETE FROM documentaciones WHERE documentaciones.iddocumentaciones=id;
    
  
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarEmpleados` (IN `id` INT)  BEGIN

    DELETE FROM empleados WHERE empleados.idnumeroempleados=id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ingresarDocumentaciones` (IN `doc` INT, IN `actaD` VARCHAR(255), IN `curpD` VARCHAR(255), IN `cvD` VARCHAR(255), IN `ineD` VARCHAR(255), IN `compD` VARCHAR(255), IN `croqD` VARCHAR(255), IN `refeD` VARCHAR(255), IN `fotoD` VARCHAR(255))  BEGIN
	INSERT INTO documentaciones VALUES(doc, actaD, curpD, cvD, ineD, compD, croqD, refeD, fotoD);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ingresarEmpleadoDiscapaciado` (IN `id` INT, IN `tipo` VARCHAR(100), IN `nombreDis` VARCHAR(100))  BEGIN
	INSERT INTO empleados_discapacidades VALUES(id, tipo, nombreDis);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ingresarEmpleados` (IN `id` INT, IN `nombre` VARCHAR(50), IN `app` VARCHAR(50), IN `fecha` DATE, IN `sexo` VARCHAR(10), IN `edoC` VARCHAR(50), IN `curp` VARCHAR(100), IN `calle` VARCHAR(50), IN `colonia` VARCHAR(50), IN `municipio` VARCHAR(50), IN `cp` INT, IN `categoria` INT, IN `idcargo` INT, IN `iddepa` VARCHAR(50), IN `fechaIn` DATE, IN `salario` INT, IN `doc` INT)  BEGIN
  INSERT INTO empleados VALUES(id, nombre, app, fecha, sexo, edoC, curp, calle, colonia, municipio, cp, categoria);

	INSERT INTO empleados_cargos VALUES(id, idcargo, iddepa, fechaIn, salario);

  INSERT INTO empleados_documentos VALUES(id, doc);


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificarEmpleados` (IN `id` INT)  BEGIN


  	SELECT C.idcategorias,C.nombre AS categoria,D.iddepartamentos,D.nombre AS departamento,CA.idcargos,CA.nombre AS cargo, EC.salario AS salario,
        EC.fechainicio AS fecha, E.idnumeroempleados, E.nombre, E.apellidopaterno, E.fechanacimiento, E.sexo, E.estadocivil, E.curp, E.calle, E.calle, E.colonia, E.municipio, E.codigopostal FROM empleados AS E INNER JOIN categorias AS C ON E.idcategoria=C.idcategorias INNER JOIN empleados_cargos AS EC ON E.idnumeroempleados=EC.idempleado INNER JOIN departamentos AS D ON EC.iddepartamento=D.iddepartamentos
        INNER JOIN cargos AS CA ON EC.idcargo=CA.idcargos WHERE EC.idempleado=id;


END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baja_empleado`
--

CREATE TABLE `baja_empleado` (
  `idbaja` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `idscargos` int(11) NOT NULL,
  `fechabaja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `idcargos` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`idcargos`, `nombre`) VALUES
(1, 'AUXILIAR'),
(2, 'JEFE DE DEPARTEMENTO'),
(3, 'SECRETARIA'),
(4, 'CAPTURISTA'),
(5, 'INTENDENCIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategorias` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategorias`, `nombre`) VALUES
(1, 'CONFIANZA'),
(2, 'POLICIAS'),
(3, 'SINDICALIZADO'),
(4, 'LISTA DE RAYA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `iddepartamentos` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `iddependencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`iddepartamentos`, `nombre`, `iddependencia`) VALUES
('DRH0001', 'DIRECCION OPERATIVA', 1),
('DRH0002', 'PLAZA IDENTIDAD', 2),
('DRH0003', 'PARQUE Y JARDINES', 2),
('DRH0004', 'IMAGEN URBANA', 2),
('DRH0005', 'VIA PUBLICA', 3),
('DRH0006', 'TIANGUIS', 3),
('DRH0007', 'INFORMATICA', 3),
('DRH0008', 'FOMENTO AL COMERCIO', 4),
('DRH0009', 'INDUSTRIA', 4),
('DRH0010', 'LIMPIEZA', 5),
('DRH0011', 'COORDINACION BIBLIOTECAS', 6),
('DRH0012', 'CONTRALURIA INTERNA', 6),
('DRH0013', 'MUSEO CHIMALTONALLI', 7),
('DRH0014', 'ELECTRIFICACION', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `iddependencias` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`iddependencias`, `nombre`) VALUES
(1, 'DIRECCION GENERAL DE SEGURIDAD CIUDADANA Y TRANSITO'),
(2, 'H.AYUNTAMIENTO'),
(3, 'TESORERIA'),
(4, 'DESARROLLO ECONOMICO'),
(5, 'DIRECCION GENERAL DE SERVIVIO PUBLICO'),
(6, 'PRESIDENCIA MUNICIPAL'),
(7, 'CASA DE CULTURA'),
(8, 'DIRECCION DE ELECTRIFICACION Y ALUMBRADO PUBLICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidades`
--

CREATE TABLE `discapacidades` (
  `iddiscapacidades` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `discapacidades`
--

INSERT INTO `discapacidades` (`iddiscapacidades`, `tipo`) VALUES
('PcD01', 'VISUAL'),
('PcD02', 'AUDITIVA'),
('PcD03', 'MOTRIX'),
('PcD04', 'APRENDIZAJE'),
('PcD05', 'CRONICA'),
('PcD06', 'MULTIPLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentaciones`
--

CREATE TABLE `documentaciones` (
  `iddocumentaciones` int(100) NOT NULL,
  `acta` text DEFAULT NULL,
  `curp` text DEFAULT NULL,
  `cv` text DEFAULT NULL,
  `ine` text DEFAULT NULL,
  `comprobante` text DEFAULT NULL,
  `croquis` text DEFAULT NULL,
  `referencias` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idnumeroempleados` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidopaterno` varchar(50) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `estadocivil` varchar(25) NOT NULL,
  `curp` varchar(100) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `codigopostal` int(10) NOT NULL,
  `idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `empleados`
--
DELIMITER $$
CREATE TRIGGER `eliminarEmpleados_BD` BEFORE DELETE ON `empleados` FOR EACH ROW BEGIN
 DECLARE bajacargo INT;

 SET bajacargo = (SELECT idcargo FROM empleados_cargos  WHERE idempleado = OLD.idnumeroempleados);

INSERT INTO baja_empleado VALUES(NULL, OLD.idnumeroempleados,bajacargo,CURDATE());

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados_cargos`
--

CREATE TABLE `empleados_cargos` (
  `idempleado` int(11) NOT NULL,
  `idcargo` int(11) NOT NULL,
  `iddepartamento` varchar(100) NOT NULL,
  `fechainicio` date NOT NULL,
  `salario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados_discapacidades`
--

CREATE TABLE `empleados_discapacidades` (
  `idempleado` int(11) NOT NULL,
  `iddiscapacidad` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados_documentos`
--

CREATE TABLE `empleados_documentos` (
  `idempleado` int(11) NOT NULL,
  `iddocumento` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(30) NOT NULL,
  `clave` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `clave`) VALUES
('administrador', 'administrador'),
('usuario', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `baja_empleado`
--
ALTER TABLE `baja_empleado`
  ADD PRIMARY KEY (`idbaja`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`idcargos`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategorias`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`iddepartamentos`),
  ADD KEY `iddependencia` (`iddependencia`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`iddependencias`);

--
-- Indices de la tabla `discapacidades`
--
ALTER TABLE `discapacidades`
  ADD PRIMARY KEY (`iddiscapacidades`);

--
-- Indices de la tabla `documentaciones`
--
ALTER TABLE `documentaciones`
  ADD PRIMARY KEY (`iddocumentaciones`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idnumeroempleados`),
  ADD KEY `idcategoria` (`idcategoria`) USING BTREE;

--
-- Indices de la tabla `empleados_cargos`
--
ALTER TABLE `empleados_cargos`
  ADD KEY `idcargo` (`idcargo`),
  ADD KEY `idempleado` (`idempleado`) USING BTREE,
  ADD KEY `iddepartamento` (`iddepartamento`);

--
-- Indices de la tabla `empleados_discapacidades`
--
ALTER TABLE `empleados_discapacidades`
  ADD KEY `idempleado` (`idempleado`),
  ADD KEY `iddiscapacidad` (`iddiscapacidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `baja_empleado`
--
ALTER TABLE `baja_empleado`
  MODIFY `idbaja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `idcargos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `iddependencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `departamentos_ibfk_1` FOREIGN KEY (`iddependencia`) REFERENCES `dependencias` (`iddependencias`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategorias`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleados_cargos`
--
ALTER TABLE `empleados_cargos`
  ADD CONSTRAINT `empleados_cargos_ibfk_1` FOREIGN KEY (`idempleado`) REFERENCES `empleados` (`idnumeroempleados`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empleados_cargos_ibfk_2` FOREIGN KEY (`idcargo`) REFERENCES `cargos` (`idcargos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empleados_cargos_ibfk_3` FOREIGN KEY (`iddepartamento`) REFERENCES `departamentos` (`iddepartamentos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleados_discapacidades`
--
ALTER TABLE `empleados_discapacidades`
  ADD CONSTRAINT `empleados_discapacidades_ibfk_1` FOREIGN KEY (`idempleado`) REFERENCES `empleados` (`idnumeroempleados`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `empleados_discapacidades_ibfk_2` FOREIGN KEY (`iddiscapacidad`) REFERENCES `discapacidades` (`iddiscapacidades`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
