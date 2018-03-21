/* 
 * Função: Arquivo com a estrutura do banco de dados
 * Author: Glauco Guerreiro
 * Created: 20/03/2018
 */

# Comando para criar a base(schema) do banco de dados
create database aula06;

# Comando para criar a tabela no banco de dados
Create database produto(
    id int primary key auto_increment
    codigo varchar (50) not null,
    nome varchar (150) not null,
    modelo varchar (50) not null,
    ano int not null,
    fabricante varchar (255) not null,
    preco varchar (50) not null,
    quantidade int not null    
);

