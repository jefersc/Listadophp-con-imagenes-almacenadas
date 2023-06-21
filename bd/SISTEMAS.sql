--
-- Base de datos: `SISTEMAS`
--
drop database if exists estudiantes;
create database estudiantes;
use estudiantes;
--
-- Estructura de tabla para la tabla `persona`
--
create table PERSONA(
ID_PERSONA INT primary KEY auto_increment,
NOMBRE varchar(30),
APELLIDO varchar(30),
EDAD INT NOT NULL,
sexo char(1) NOT NULL,
sueldo numeric (7,2)NOT NULL,
foto varchar(20) NOT NULL
)

select* from PERSONA;
--
-- Volcado de datos para la tabla `persona`
--
INSERT INTO `persona` (`id_persona`, `nombre`, `apellido`, `edad`) VALUES
(2, 'billy', 'obregon', 18, 'M', '2500.00', 'foto2.jpg'),
(3, 'jesus', 'chavez', 18, 'M', '2500.00', 'foto3.jpg'),
(4, 'pepe', 'quispe', 21, 'M', '2500.00', 'foto4.jpg'),
(5, 'carlos', 'mayna', 50, 'M', '2500.00', 'foto4.jpg'),
(6, 'jose', 'ramirez', 18, 'M', '2500.00', 'foto5.jpg'),
(7, 'mariana', 'benites', 19, 'F', '2500.00', 'foto6.jpg'),
(8, 'luis', 'julca', 20, 'M', '2500.00', 'foto7.jpg');
