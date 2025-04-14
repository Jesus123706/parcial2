SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

   CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(11) NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipoDocumento` varchar(50) NOT NULL,
  `documento` varchar(50) NOT NULL,
  `fechaNacimiento` varchar(100) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `contraseña` varchar(10) NOT NULL,
  `especialidad` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `registro` (`nombre`,`tipoDocumento`, `documento`, `fechaNacimiento`, `correo`, `telefono`, `ciudad`, `usuario`, `contraseña`,`especialidad`) VALUES
('Juan','Cédula', '123456789', '1990-01-01', 'juan@example.com', '1234567890', 'Bogotá', 'juan123', '123','Desarrollo de');



ALTER TABLE `registro` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

