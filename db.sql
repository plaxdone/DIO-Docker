CREATE DATABASE contato;
USE contato;

CREATE TABLE form (
id INT primary key auto_increment,
nome varchar (70),
email varchar (70),
celular varchar(15) NOT NULL,
mensagem text NOT NULL
);