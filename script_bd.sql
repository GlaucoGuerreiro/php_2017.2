/* 
 * Função: Arquivo com a estrutura do banco de dados
 * Author: Glauco Guerreiro
 * Created: 20/03/2018
 */
/* DDLs */
# Comando para criar a base(schema) do banco de dados
create database aula06;
# Comando para selecionar a base
use aula06;

# Comando para criar a tabela no banco de dados
Create table produto(
    id int primary key auto_increment,
    codigo varchar (50) not null,
    nome varchar (150) not null,
    modelo varchar (50) not null,
    ano int not null,
    fabricante varchar (255) not null,
    preco varchar (50) not null,
    quantidade int not null    
);

## DMLs
# Inserir os dados no banco
insert (id, codigo, nome, modelo, ano, fabricante, preco, quantidade) into produto values(null, 'codigo123', 'Caneta', 'xyz123', 2018, 'Senac', 10.0, 1);
