create schema if not exists bancoteste;
use bancoteste;

create table cliente(
	idcliente int auto_increment,
	nomecliente varchar(255),
	primary key(idcliente)
);

create table endereco(
	idendereco int auto_increment,
	logradouro varchar(255),
	idcliente int,
	primary key(idendereco),
	foreign key(idcliente) references cliente(idcliente)
);

create table contato(
	idcontato int auto_increment,
	telefone varchar(255),
	idcliente int,
	primary key(idcontato),
	foreign key(idcliente) references cliente(idcliente)
);

create table produto(
	idproduto int auto_increment,
	nomeproduto varchar(255),
	primary key(idproduto)
);

create table pedido(
	idpedido int auto_increment,
	datapedido varchar(255),
	idcliente int,
	iditem int,
	primary key(idpedido),
	foreign key(idcliente) references cliente(idcliente)
	
);

create table item(
	iditem int auto_increment,
	idpedido int,
	idproduto int,
	valor double,
	primary key(iditem),
	foreign key(idpedido) references pedido(idpedido),
	foreign key(idproduto) references produto(idproduto)
);