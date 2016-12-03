
CREATE database if not EXISTS hackathon;

use hackathon;


CREATE TABLE if not EXISTS Pessoa(

    idCodigoPessoa INT AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    senha varchar(200) NOT NULL,
    sexo varchar(100) NOT NULL,
    peso DOUBLE(5,2),
    altura DOUBLE(5,2),
    idade INT NOT NULL,
    PRIMARY key(idCodigoPessoa)

);


CREATE TABLE if not EXISTS Historico_Perfil(

    idCodigoPerfil INT AUTO_INCREMENT,
    pontuacao int, 
    idCodigoPessoa int,
    TipoRisco varchar(200),
    dataEntrada date,
    PRIMARY key(idCodigoPerfil),  
    FOREIGN KEY(idCodigoPessoa) REFERENCES Pessoa(idCodigoPessoa)

);

CREATE TABLE if not EXISTS Tarefas(
	
    idCodigoeExercicio int AUTO_INCREMENT,
    desafio varchar(600) NOT NULL,    
    quantidade varchar(100) NOT NULL,
    tipoRisco varchar(100) NOT NULL,
	PRIMARY KEY (idCodigoeExercicio) 

);


