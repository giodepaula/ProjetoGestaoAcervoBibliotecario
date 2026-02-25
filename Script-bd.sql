CREATE DATABASE IF NOT EXISTS livro_db_v2
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE livro_db_v2;

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    email VARCHAR(200) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    UNIQUE KEY uq_usuarios_email (email)
) ENGINE=InnoDB;

----------------

create database livro_db_v2;
use livro_db_v2;
create table Usuarios
(
id_usuario INT primary key auto_increment,
nome varchar(100) NOT NULL,
sobrenome varchar(100) NOT NULL,
email varchar (200) NOT NULL UNIQUE,
senha varchar (255) NOT NULL
);
--

create table Livros

(
id_livro INT primary key auto_increment,
nome varchar(100) NOT NULL,
titulo varchar(100) NOT NULL,
descricao varchar (100) NOT NULL,
autor varchar (100) NOT NULL
);

create table Estoque

(
id_estoque INT primary key auto_increment,
id_livro varchar(100) NOT NULL,
localizacao varchar(100) NOT NULL
);

create table Log_movimentacao_estoque

(
id_movimentacao varchar (100) NOT NULL,
data_movimentacao varchar (100) NOT NULL,
id_usuario varchar (100) NOT NULL,
id_livro varchar (100) NOT NULL
);