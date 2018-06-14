create schema if not exists escola;
use escola;
create table alunos(
	matricula int auto_increment,
	nome varchar(150) not null,
	rg varchar(20) not null unique,
	telefone varchar(20) not null,
	primary key(matricula)
);

