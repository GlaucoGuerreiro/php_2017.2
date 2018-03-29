/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  51115152017.2
 * Created: 22/03/2018
 */
    create database escola;
    
    use escola;

    create table alunos(
    id int primary key auto_increment,
    nome varchar(100),
    matricula int not null,
    telefone varchar(20)
);
    


