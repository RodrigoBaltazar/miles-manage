CREATE DATABASE miles;


CREATE TABLE cliente (
id INT(6) NOT NULL PRIMARY KEY,
nome VARCHAR(200) NOT NULL,
data_nascimento FLOAT(10) NOT NULL,
cpf VARCHAR(14) NOT NULL,
endereco VARCHAR(128),
complemento VARCHAR(128),
bairro VARCHAR(64),
cep VARCHAR(9),
cidade VARCHAR(64),
telefone VARCHAR(64),
celular VARCHAR(64),
saldo INT(10) NOT NULL DEFAULT 0,
email VARCHAR(64)
);


CREATE TABLE historico
(
id int(6) NOT NULL,
id_cliente int(6) NOT NULL,
saldo INT(10) NOT NULL DEFAULT 0,
data DATETIME NOT NULL,
tipo VARCHAR(10) NOT NULL,
pontos INT(10) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_cliente) REFERENCES cliente(id)
);
