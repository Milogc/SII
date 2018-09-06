-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-09-2018 a las 22:51:03
-- Versión del servidor: 5.7.22-0ubuntu18.04.1
-- Versión de PHP: 7.1.16-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ittg_sii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `financiado` tinyint(1) DEFAULT '0',
  `nombre_ies` varchar(120) DEFAULT NULL,
  `pe` int(11) NOT NULL,
  `area` varchar(100) DEFAULT NULL,
  `linea` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fecha_inicio` varchar(45) DEFAULT NULL,
  `fecha_fin` varchar(45) DEFAULT NULL,
  `duracion` varchar(45) DEFAULT NULL,
  `convocatoria_id` int(11) NOT NULL,
  `responsable` int(10) UNSIGNED NOT NULL,
  `tipo_investigacion` varchar(45) DEFAULT NULL,
  `sometido` date DEFAULT NULL,
  `dictamen` tinyint(1) DEFAULT NULL,
  `resumen` text,
  `introduccion` text,
  `antecedentes` text,
  `hipotesis` text,
  `marco_teorico` text,
  `metas` text,
  `objetivo_general` text,
  `objetivos_especificos` text,
  `impacto_beneficio` text,
  `metodologia` text,
  `vinculacion` varchar(20) DEFAULT NULL,
  `referencias` text,
  `lugar` text,
  `infraestructura` text,
  `tvinculacion` text,
  `aval` varchar(20) DEFAULT NULL,
  `ci01` varchar(20) DEFAULT NULL,
  `ci02` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `titulo`, `financiado`, `nombre_ies`, `pe`, `area`, `linea`, `created_at`, `updated_at`, `fecha_inicio`, `fecha_fin`, `duracion`, `convocatoria_id`, `responsable`, `tipo_investigacion`, `sometido`, `dictamen`, `resumen`, `introduccion`, `antecedentes`, `hipotesis`, `marco_teorico`, `metas`, `objetivo_general`, `objetivos_especificos`, `impacto_beneficio`, `metodologia`, `vinculacion`, `referencias`, `lugar`, `infraestructura`, `tvinculacion`, `aval`, `ci01`, `ci02`) VALUES
(1, 'Restauración de computadoras por medio de red.', 1, 'Instituto Tecnológico de Tuxtla Gutiérrez', 1, 'Ciencias de la Computación', 'Desarrollo de Software e Infraestructura de Red', '2018-09-04 12:13:22', '2018-09-06 15:03:16', '2018-01-01', '2018-12-31', NULL, 6, 1, 'Desarrollo Tecnológico', NULL, NULL, 'En el laboratorio de computo de Ingeniería en Sistemas Computacionales se realiza la restauración de las PC’s al menos una vez al semestre, pero aun cuando ya se cuenta con un método por medio de IMÁGENES con el cual se ha logrado disminuir el tiempo pero se requiere el uso de herramientas (en ocasiones un desarmador y al menos un disco duro externo y una memoria USB), por lo que se buscara que la restauración envié las IMÁGENES por medio de la red.', 'Las redes de computadoras se pueden clasificar de acuerdo a su relación en redes de IGUAL – IGUAL y redes de CLIENTE – SERVIDOR, en el ámbito de Windows esto se llama redes de GRUPO DE TRABAJO y redes de DOMINIO, estas segundas son las redes corporativas y redes que se tienen en empresas, permiten que el SERVIDOR de directivas a los clientes para normar el uso. Es muchísimo más difícil la administración de una red en la que todos los nodos se encuentran en una relación de igual a igual que cuando se tiene un servidor dedicado  (Cisco, 2000).\r\n\r\nEl laboratorio de Ingeniería en Sistemas Computacionales actualmente cuenta con cerca de cien computadoras para el uso de estudiantes de diferentes carreras (principalmente Sistemas Computacionales), cuenta a su vez con un servidor Instalado con Windows 2008, un servidor web con Linux, pero lo difícil es poder controlar esta cantidad de computadoras, usuarios, acceso a recursos, el software que se permitirá usar en estas computadoras, por esto en su momento (en 2005) se instaló el servidor con Windows, se instaló en todas las computadoras una distribución de Linux y se montó un dominio Linux de forma que todos los usuarios podían usar con una misma cuenta las computadoras en cualquiera de estos sistemas operativos, también se llegó a contar con un servidor de base de datos y un servidor web con soporte para PHP y JSP, se contaba con un procedimiento de instalación de las computadoras (se manejaban imágenes que permitían la reinstalación de cerca de 80 computadoras en 4 días), pero esto se perdió con el paso del tiempo, debido a que no se encontraban estos procedimientos documentados no fue posible repetir su uso.\r\n\r\nDebido a que actualmente se encuentra automatizada la instalación de las computadoras pero no es posible que se de mantenimiento en corto tiempo a la totalidad de los equipos del laboratorio, cuando un docente pide que se instale cierto software entonces se trabaja en cada una de las computadoras a usar, esto es una gran cantidad de tiempo que se invierte y se podría invertir este innovar.', 'Se han realizado estudios para la administración de los servicios de TI, como resultado se han propuesto muchos modelos, estándares, metodologicas, etc., ejemplo de esto son: ITIL (IT Infrastructure Library), NGOSS (Next Generation Operating Support System), compañías como Microsoft ofrecen una certificación MCSA (Microsoft Certified Systems Administrator) para profesionales que administran y dan soporte a sistemas de red basados en Windows, y así existen otras más; También existen herramientas computacionales que pueden apoyar en la automatización de procesos en el laboratorio de computo, existe herramientas que permiten la automatización de procesos, por ejemplo, para la instalación de software en computadoras con el sistema operativo Windwos se pueden realizar a través de GPO’s con un servidor Windows que tenga instalado el Active Directory, para la clonación y automatización de la instalación existen herramientas  también, la instalación del sistema operativo Linux debe tener forma de automatizarse, así como que este pueda formar parte de un dominio Windows o de otro tipo. Existe software que permite clonar discos duros, pero para el uso de algunos es necesario el contar con licencias.', 'Con la realización de un sistema se podrá implementar ....', 'Servidor: Equipo que brinda servicios a los clientes. Los servidores son el punto central en las redes modelo cliente/servidor.\r\n\r\nCliente: un cliente es un sistema de computadora que accede remotamente a un servicio en otra computadora al acceder a la red.\r\n\r\nActive Directory: Es una base de datos que permite administrar de manera centralizada credenciales y permisos de acceso a recursos de una red Windows.\r\n\r\nSistema Operativo: Software que permite administrar el uso del hardware de una computadora, para facilidad del usuario.\r\n\r\nITIL: es un conjunto de buenas prácticas en cuanto a la gestión de servicios de TI.\r\n\r\nDHCP: Dynamic Host Configuration Protocol, servicio por medio del cual se asignan parámetros de red a una computadora de forma automática permitiendo a esta computadora interactuar en la red.\r\n\r\nBOOTP: Bootsrap Protocol, Protocolo similar al DHCP, que trabaja en UDP para permitir a las computadoras obtener sus parámetros e iniciar en la red.\r\n\r\nCargadores por Red\r\nEs posible también arrancar un equipo informático a través de la red. En este\r\nCaso, el sistema operativo se encuentra almacenado en otro computador, que actúa deservidor, y se transfieren los ficheros por protocolos ligeros, por ejemplo, TFTP. Es necesario disponer de una configuración especial en el servidor y que la tarjeta de red y el BIOS del cliente tengan soporte para el proceso.\r\n\r\nWoL\r\nWake On Lan (WoL) es una tecnología que permite arrancar o despertar ordenadores de una misma red de forma remota. La maquina (despertador) envía un mensaje especial a la Local Área Network (LAN), destinado a la dirección Médium Access Control (MAC) de la maquina que se pretende despertar. De hecho, el mensaje consiste en 6 Bytes de (unos) seguidos de la dirección MAC destino repetida 16 veces. Si la BIOS y la tarjeta de red del nodo destino lo soportan, el ordenador destino iniciara el arranque.\r\n\r\nPXE\r\nLa utilidad Preboot eXecution Environment (PXE) [Int99] brinda la oportunidad\r\nDe poder arrancar un ordenador por red, independientemente de los medios de almacenamiento disponibles o de los sistemas operativos instalados en _el.\r\nUn ordenador configurado para arrancar con PXE enviara una petición de arranque por red antes de intentar arrancar desde su disco duro (en caso de tenerlo). Esta petición no es más que un paquete DHCP especial, que será recibido por el servidor de DHCP. El servidor, que también es un servidor PXE, le envía por la red los ficheros necesarios para el arranque. Para ello, el servidor debe tener también un servidor de ficheros instalado y configurado,  como por ejemplo, TFTP. El sistema operativo que se ejecuta en el cliente se encuentra almacenado en un directorio que se exporta por Network File System (NFS). Cuando el cliente necesita ejecutar algo, accede a los ficheros a través\r\nDe la red.\r\n\r\nClonezilla  es una herramienta de clonado de particiones (o discos enteros). Puede trabajar con diferentes sistemas de ficheros, lo que permite usarlo con varios sistemas operativos.\r\n\r\nEstá basado en Diskless Remote Boot in Linux (DRBL), Partition Image, NTFS Clone y UDPCast; por lo que sus ventajas e inconvenientes son los que ya se han comentado en esas herramientas.', NULL, 'Disminuir los tiempos de restauración de las computadoras del laboratorio de computo, sin el uso de', 'Asegurar la conectividad de la red\r\nInstalación de un servidor para la difusión de las imágenes\r\nAsegurar el arranque de red\r\nInvestigar y probar soluciones', 'Con la automatización del proceso de restauración de las computaras en el laboratorio de I.S.C. ya se ha logró reducir los tiempos, ya que la instalación de todas las computadoras del laboratorio solía llevar semanas y cuando una de estas  falla y su solución es con la reinstalación del sistema operativo y/o software pasan más de tres días antes de restaurarla, ahora se realiza en menos de una semana,  pero  se tienen dificultades ya que se requiere en ocasiones el uso de desarmadores y siempre dispositivos de almacenamiento y de arranque. \r\n\r\nCon la realización de este proyecto se verá beneficiada la población estudiantil del Instituto Tecnológico de Tuxtla Gutiérrez (cerca de 4 mil estudiantes), el impacto social que este tendrá es que se podrá dar servicio a los alumnos sin problemas ya que actualmente se tienen pérdida de tiempo que se busca disminuir.\r\n\r\nEl laboratorio de la carrera es un punto importante para mantener la acreditación que CONAIC dio el 17 de diciembre de 2012, con estos procedimientos se busca aumentar la calidad de este.', 'Para el desarrollo de este proyecto se prevé: Con el Manual de restauración producto del proyecto TGZ - ISC - 2013 – 581 se piensa capacitar a los estudiantes en el dominio del procedimiento de instalar el software a las computadoras del laboratorio (pero será necesario que tengan conocimientos de la instalación de un servidor de dominio con Windows, Agregar una computadora al domino, agregar políticas de grupo que permitan desde el servidor indicar como se deben comportar las computadoras clientes, instalación de software desde el servidor, etc…) y en este momento investigar cómo se puede realizar esto desde la red, antes ya se tiene documentado el proceso de instalar una computadora a través de imágenes pero con el software GOSTH (que es propiedad de Norton, por lo que se debe pagar licencias por su uso) y se busca realizar esto con software libre, por lo que se instalaran computadoras y se realizaran sus imágenes pero con software libre (esto será un proceso de prueba de varias soluciones), luego se investigara la forma de realizar una imagen y que esta permita ser instalada en una computadora que tenga características diferentes a la PC origen (al parecer el sistema operativo Windows provee un procedimiento SYSREP, se deben des instalar algunos controladores antes de proceder a la duplicación), una vez que se tengan imágenes de PC independientes del hardware que posea la máquina, el siguiente paso es realizar la restauración de varias computadoras por medio de la red.', '1_vinculacion.pdf', 'I.	Cisco NetWorking Academy. Semestre 1: cisco.netacad.net\r\nII.	Real Academia de la Lengua Española., R. A.  http://www.rae.es/rae.html\r\nIII.	Microsoft. (2003). Planning. Implementing, and Maintaning a Micrsosoft Windows Server 2004 Active Directory Infraestructure. Microsoft Press.\r\nIV.	Tanenbaum, A., & Wetherall, D. J. (2012). Redes de computaodras. Mexico: Pearson Education.\r\n\r\nOtras fuentes consultadas no mencionadas:\r\n•	Stallings , William. (2004). Comunicaciones Y Redes De Computadores. Madrid: Pearson Educación.\r\n•	(2003). Maintaining a Microsoft Windows Server 2003 Enviroment. USA: Microsoft Press.', 'Instituto Tecnológico de Tuxtla Gutiérrez con dirección en Carretera Panamericana Km. 1080 sin número;\r\nDepartamento de Ingeniería en Sistemas Computacionales, Edificio D1, cubículo 4.', 'Equipo de computo.', 'Usuarios potenciales: Personal encargado de la administración del laboratorio (Jefe, auxiliares y estudiantes de servicio social), no solo en el Instituto Tecnológico de Tuxtla Gutiérrez, sino en cualquier lugar en el que se tenga un laboratorio con varias máquinas.', '1_aval.pdf', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`,`pe`,`convocatoria_id`,`responsable`),
  ADD KEY `fk_proyecto_convocatoria_idx` (`convocatoria_id`),
  ADD KEY `fk_proyecto_users1_idx` (`responsable`),
  ADD KEY `fk_proyecto_catalogo_pe1_idx` (`pe`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_proyecto_catalogo_pe1` FOREIGN KEY (`pe`) REFERENCES `catalogo_pe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyecto_convocatoria` FOREIGN KEY (`convocatoria_id`) REFERENCES `convocatoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyecto_users1` FOREIGN KEY (`responsable`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
