DROP DATABASE forHouse;    
CREATE DATABASE forhouse;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE users;
CREATE TABLE users(
    idUser int(11) NOT NULL, 
    nome varchar(100) NOT NULL,
    dataNasc DATE NOT NULL,
    sexo varchar(9) NOT NULL,
    telefone1 varchar(15) NOT NULL,
    telefone2 varchar(15),
    email varchar(100) NOT NULL,
    senha varchar(100) NOT NULL,
    dataCriacaoConta DATETIME, 
    ultimoAcesso DATETIME
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE users
  ADD PRIMARY KEY (idUser);

ALTER TABLE users
  MODIFY idUser int(11) NOT NULL AUTO_INCREMENT;

/*-------------------------------------------------------*/

DROP TABLE endereco;
CREATE TABLE endereco(
    idEndereco int(11) NOT NULL,
    endereco varchar(255) NOT NULL,
    numero varchar(7),
    cep varchar(50),
    bairro varchar(225),
    cidade varchar(225), 
    idUser int NOT NULL REFERENCES users(idUser)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE endereco
  ADD PRIMARY KEY (idEndereco);

ALTER TABLE endereco
  MODIFY idEndereco int(11) NOT NULL AUTO_INCREMENT;

/*-------------------------------------------------------*/

drop table servico;
CREATE TABLE servico(
    idServico int(11) NOT NULL,
    nomeServico varchar(225),
    urlServico varchar(100)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE servico
  ADD PRIMARY KEY (idServico);

ALTER TABLE servico
  MODIFY idServico int(11) NOT NULL AUTO_INCREMENT;

/*-------------------------------------------------------*/

drop table tecnico;
CREATE TABLE tecnico(
    idTecnico int(11) NOT NULL,
    nome varchar(100) NOT NULL 
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE tecnico
  ADD PRIMARY KEY (idTecnico);

ALTER TABLE tecnico
  MODIFY idTecnico int(11) NOT NULL AUTO_INCREMENT;


/*-------------------------------------------------------*/

DROP TABLE agendamento;
CREATE TABLE agendamento(
    idAgendamento int(11) NOT NULL,
    dataAgendamento DATE NOT NULL,
    horaAgendamento TIME NOT NULL,
    statusServico varchar(11),
    idUser int NOT NULL REFERENCES users(idUser),
    idEndereco int NOT NULL REFERENCES endereco(idEndereco),
    idTecnico int NOT NULL REFERENCES tecnico(idTecnico),
    idServico int NOT NULL REFERENCES servico(idServico)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE agendamento
  ADD PRIMARY KEY (idAgendamento);

ALTER TABLE agendamento
  MODIFY idAgendamento int(11) NOT NULL AUTO_INCREMENT;

/*-------------------------------------------------------*/

DROP TABLE atendente;
CREATE TABLE atendente(
  idAtendente int(11) NOT NULL,
  nome varchar(225),
  email varchar(100) NOT NULL,
  senha varchar(100) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE atendente
  ADD PRIMARY KEY (idAtendente);

ALTER TABLE atendente
  MODIFY idAtendente int(11) NOT NULL AUTO_INCREMENT;

/*-------------------------------------------------------*/

DROP TABLE administrador;
CREATE TABLE administrador(
  idAdministrador int(11) NOT NULL,
  nome varchar(225),
  email varchar(100) NOT NULL,
  senha varchar(100) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE administrador
  ADD PRIMARY KEY (idAdministrador);

ALTER TABLE administrador
  MODIFY idAdministrador int(11) NOT NULL AUTO_INCREMENT;

/*-------------------------------------------------------*/

INSERT INTO servico VALUES (DEFAULT, 'Portão Elétrico', 'portao-eletrico'),
(DEFAULT, 'Ambientação', 'ambientacao'),
(DEFAULT, 'Sensor de Proximidade', 'sensor-proximidade');