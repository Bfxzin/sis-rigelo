create database rigelo;

use rigelo;

create table cadastro (
    idc int NOT NULL PRIMARY KEY,
    nome varchar(70) NOT NULL,
    sobrenome varchar(120) NOT NULL,
    email varchar(200) NOT NULL
) engine = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;