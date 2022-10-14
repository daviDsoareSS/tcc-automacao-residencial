DROP DATABASE forHouse;    
CREATE DATABASE forhouse;

DROP TABLE users;
CREATE TABLE users(
    idUser serial PRIMARY KEY NOT NULL, 
    nome varchar(100) NOT NULL,
    dataNasc DATE NOT NULL,
    sexo varchar(9) NOT NULL,
    email varchar(100) NOT NULL,
    senha varchar(100) NOT NULL,
    dataCriacaoConta DATETIME, 
    ultimoAcesso DATETIME
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE endereco;
CREATE TABLE endereco(
    idEndereco serial PRIMARY KEY NOT NULL,
    endereco varchar(255) NOT NULL,
    numero varchar(7),
    cep varchar(50),
    bairro varchar(225),
    cidade varchar(225), 
    idUser int NOT NULL REFERENCES users(idUser)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;