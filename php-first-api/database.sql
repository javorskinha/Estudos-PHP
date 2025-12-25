-- Script SQL para criar a tabela de produtos
-- Execute este script no phpMyAdmin ou no MySQL

CREATE DATABASE IF NOT EXISTS cursophp;
USE cursophp;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT NULL,
    valor DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exemplo de inserção de dados de teste
INSERT INTO produtos (nome, descricao, valor) VALUES
('Produto 1', 'Descrição do produto 1', 99.90),
('Produto 2', 'Descrição do produto 2', 149.50),
('Produto 3', NULL, 79.99);

