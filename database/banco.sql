DROP DATABASE forHouse;    
CREATE DATABASE forHouse;

CREATE TABLE users(
    idUser serial PRIMARY KEY NOT NULL, 
    nome varchar(100) NOT NULL,
    dataNasc DATE NOT NULL,
    sexo varchar(9) NOT NULL,
    email varchar(100) NOT NULL,
    senha varchar(100) NOT NULL,
    dataCriacaoConta DATETIME
);