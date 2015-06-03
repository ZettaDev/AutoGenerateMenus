DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id_menuitem` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `text` varchar(50) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menuitem`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

insert  into `menu`(`id_menuitem`,`id_menu`,`parent`,`text`,`link`,`order`) values (1,1,0,'Inicio','home',1),(2,1,0,'Resultados','#',1),(3,1,2,'Baloncesto','#',1),(4,1,2,'Futbol','#',2),(5,1,3,'Primera Autonómica','#',1),(6,1,3,'Segunda Autonómica','#',2),(7,1,5,'Jornadas','jornada',1),(8,1,6,'Jornadas','jornada',2);
