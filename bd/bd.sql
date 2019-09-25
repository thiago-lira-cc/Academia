CREATE SCHEMA `academia` DEFAULT CHARACTER SET utf8 ;

use academia;

CREATE TABLE treino(
    id_treino serial not null,
    login varchar(60) not null UNIQUE,
    senha varchar(90) not null,
    segunda VARCHAR(20) NULL,
	terca VARCHAR(20) NULL,
	quarta VARCHAR(20) NULL,
	quinta VARCHAR(20) NULL,
	sexta VARCHAR(45) NULL,
    primary key (id_treino)
);

INSERT INTO treino (login, senha) VALUES ('admin', md5('123'));

ALTER TABLE `academia`.`treino` 
DROP PRIMARY KEY,
ADD PRIMARY KEY (`id_treino`, `login`);