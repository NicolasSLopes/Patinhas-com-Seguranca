CREATE DATABASE Patinhas_com_Seguranca;

USE Patinhas_com_Seguranca;

CREATE TABLE cliente (
    id_cliente int AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100) NOT NULL,
    email_cliente VARCHAR(100) NOT NULL,
    telefone_cliente VARCHAR(15) NOT NULL
);

CREATE TABLE animal (
    id_animal int AUTO_INCREMENT PRIMARY KEY,
    nome_animal VARCHAR(100) NOT NULL,
    raca_animal VARCHAR(100),
    idade_animal int,
    id_cliente int NOT NULL,
    CONSTRAINT fk_cliente
    FOREIGN KEY (id_cliente)
    REFERENCES cliente(id_cliente)
);

INSERT INTO cliente (nome_cliente, email_cliente, telefone_cliente) VALUES ('João da Silva', 'joao.silva@email.com', '11999999999');

INSERT INTO animal (nome_animal, id_cliente) VALUES ('Rex', 1);



