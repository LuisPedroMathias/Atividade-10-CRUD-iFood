create database ifoof_lp;
use ifoof_lp;

create table clientes (
    id_cliente int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) unique not null,
    telefone varchar(15),
    endereco varchar(255)
);

create table restaurantes (
    id_restaurante int primary key auto_increment,
    nome varchar(100) not null,
    categoria varchar(100) not null,
    endereco varchar(255) not null,
    telefone varchar(20)
);

create table pedidos (
    id_pedido int primary key auto_increment,
    id_cliente int,
    data_pedido datetime not null,
    valor decimal(10, 2) not null,
    status_pedido varchar(20) not null,
    restaurante_id int,
    foreign key (id_cliente) references clientes(id_cliente),
    foreign key (restaurante_id) references restaurantes(id_restaurante)
);