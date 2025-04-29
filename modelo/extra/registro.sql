SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

   CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipoDocumento` varchar(50) NOT NULL,
  `documento` varchar(50) NOT NULL,
  `fechaNacimiento` varchar(100) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `contraseña` varchar(10) NOT NULL,
  `especialidad` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;






ALTER TABLE `registro` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

