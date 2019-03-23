create database usuarios;
use usuarios;

create table usuarios (
usuario_id INT NOT NULL AUTO_INCREMENT,
usuario VARCHAR (30),
senha VARCHAR(35),
email VARCHAR(35),
data_cadastro DATETIME NOT NULL,
PRIMARY KEY(usuario_id));

