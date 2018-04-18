create schema if not exists cms_php;

use cms_php;

/* tabela responsável pelo registro de login */
create table cms_php.login(
id int primary key auto_increment, 
nome varchar(255),
login varchar(255) unique,
senha varchar(255)
);

insert into cms_php.login values (null, 'Luis', 'lpjunior', md5('senac@123'));

/* tabela responsável pelas opções do menubar */
create table cms_php.menu (
    id int primary key auto_increment,
    menu_name varchar(255) unique,
    menu_url text
);

/* tabela responsável pelo conteúdo(textos) das sessões do site */
create table content (
    id int primary key auto_increment,
    content_name varchar(150) unique,
    content_text text  
);

/* tabela responsável pelas imagens do site */
create table image (
    id int primary key auto_increment,
    image_name varchar(255) unique,
    image_url text
);

/* tabela responsável por armazenar os contatos feitos pelo site */
create table contact (
    id int primary key auto_increment,
    contact_name varchar(255) not null,
    contact_email varchar(255) not null,
    contact_message text not null
);

create table link (
    id int primary key auto_increment,
    link_name varchar(255) unique,
    link_url text  
);