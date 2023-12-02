create database rigelo;

use rigelo;

create table cadastro (
    idc int NOT NULL PRIMARY KEY,
    nome varchar(70) NOT NULL,
    sobrenome varchar(120) NOT NULL,
    email varchar(200) NOT NULL,
    senha varchar(30) NOT NULL,
    cpfcnpj varchar(30) NOT NULL,
    cep varchar(30) NOT NULL,
    numcasa int NOT NULL,
    telefone varchar(30) NOT NULL
) engine = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

create table produto(
    id int NOT NULL PRIMARY KEY,
    nome varchar(200) NOT NULL,
    foto_item varchar(200) NOT NULL,
    preco varchar(20) NOT NULL,
    descricao varchar(400) NOT NULL,
    quantidade int NOT NULL
) engine = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

create table contato (
    id int NOT NULL PRIMARY KEY,
    email varchar(100) NOT NULL,
    nome varchar(100) NOT NULL,
    telefone varchar(30) NOT NULL,
    texto varchar(500) NOT NULL
) engine = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

create table pedido (
    id int NOT NULL PRIMARY KEY,
    id_conta int NOT NULL,
    status_pedido int NOT NULL,
    foreign key(id_conta) references cadastro(idc)
) engine = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

create table item_pedido(
    id int NOT NULL PRIMARY KEY,
    id_produto int NOT NULL,
    id_pedido int NOT NULL,
    foreign key(id_produto) references produto(id),
    foreign key(id_pedido) references pedido(id)
) engine = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;