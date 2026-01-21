-- Cria o banco de dados caso não exista e garante que estamos usando ele
CREATE DATABASE IF NOT EXISTS php_curso;
USE php_curso;

-- Cria o usuário caso não exista e dá permissão sobre todas tabelas no banco de dados criados
CREATE USER IF NOT EXISTS 'PHPeSQL'@'localhost' IDENTIFIED BY "123321";
GRANT ALL PRIVILEGES ON php_curso.* TO 'PHPeSQL'@'localhost';

-- Aplica as mudanças
FLUSH PRIVILEGES;
 
 -- Cria a tabela Pessoa se não existir
 CREATE TABLE IF NOT EXISTS Pessoa (
	CPF VARCHAR(14) PRIMARY KEY,
    nome VARCHAR(255),
    idade INT
 );
 
 -- Insere 3 tuplas na tabela Pessoa
 INSERT INTO Pessoa (CPF, nome, idade) VALUES 
("111.222.333-44", "Ozimandias", 41), 
("123.456.789-00", "Galactus", 54),
("098.765.432-11", "Gal", 24);
