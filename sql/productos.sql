CREATE TABLE IF NOT EXISTS productos(
	id_producto int(11) NOT NULL AUTO_INCREMENT,
	nombre varchar(100) not null,
	descripcion varchar(200) not null,
	categoria varchar(100) not null,
	precio  float not null,
	primary key (id_producto)
);