create schema if not exists db_aula09;
use db_aula09;

create table produto(
	id int primary key auto_increment,
	nome varchar(150) not null,
	quantidade int not null
);



