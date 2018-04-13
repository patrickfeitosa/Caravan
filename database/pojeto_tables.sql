create database caravan;
use caravan;

create table Usuario(
    IDUsuario int primary key,
    Nome varchar(255),
    CPF varchar(9),
    Email varchar(255),
    Senha varchar(20),
    Endereco varchar(255),
    Cidade varchar(255),
    Estado varchar(2),
    CEP varchar(14),
    flg_admin boolean
);

create table Locais(
    IDLocal int primary key,
    nomePais varchar(255),
    nomeCity varchar(255),
    precoLocal int
);

create table pedidos(
    IDPedido int primary key,
    IDUsuario integer,
    IDLocal integer,
    precoViagem integer,
    datCompra date
);

create table imagem(
    IDImagem int primary key,
    linkImagem varchar(255),
    IDLocal int
);

