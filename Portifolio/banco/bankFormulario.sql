create database portfolio;
use portfolio;

create table formulario(
id int(11) auto_increment primary key,
nome varchar(120) not null,
email varchar(200) not null,
celular char(11) not null,
mensagem varchar(300) not null
);

select * from formulario;

delete from formulario;