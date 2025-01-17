DROP TABLE IF EXISTS persona;
CREATE TABLE persona (
	id INT AUTO_INCREMENT,
	loginId INT NOT NULL,
	nombre VARCHAR(250) NOT NULL,
	apellido VARCHAR(250) NOT NULL,
	fechaNacimiento DATE NOT NULL,
	telefono VARCHAR(250) NOT NULL,
	celular VARCHAR(250) NOT NULL,
	direccion VARCHAR(250) NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE persona CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS perro;
CREATE TABLE perro (
	id INT AUTO_INCREMENT,
	loginId INT NOT NULL,
	nombre VARCHAR(250) NOT NULL,
	edad DATE NOT NULL,
	raza VARCHAR(250) NOT NULL,
	genero VARCHAR(250) NOT NULL,
	alimentacion VARCHAR(250) NOT NULL,
	horarioAlimentacion VARCHAR(250) NOT NULL,
	vacunacion VARCHAR(250) NOT NULL,
	miedos VARCHAR(250) NOT NULL,
	esterilizacion VARCHAR(250) NOT NULL,
	medicamentos VARCHAR(250) NOT NULL,
	energia VARCHAR(250) NOT NULL,
	informacion VARCHAR(250) NOT NULL,
	formulario VARCHAR(250) NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE perro CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS cita;
CREATE TABLE cita (
	id INT AUTO_INCREMENT,
	loginId INT NOT NULL,
	nombre VARCHAR(250) NOT NULL,
	fecha DATE NOT NULL,
	entrada VARCHAR(250) NOT NULL,
	salida VARCHAR(250) NOT NULL,
	centroComercial VARCHAR(250) NOT NULL,
	servicio VARCHAR(250) NOT NULL,
	telefono VARCHAR(250) NOT NULL,
	estatus VARCHAR(250) NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE cita CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;