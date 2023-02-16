CREATE SCHEMA crudpessoa;

use crudpessoa;

CREATE TABLE usuario(
	idUsuario int PRIMARY KEY AUTO_INCREMENT,
    nomeUsuario varchar(45) not null,
    usuario varchar(45) not null UNIQUE,
    perfilAcesso varchar(45) not null,
	senha varchar(256) not null
    );