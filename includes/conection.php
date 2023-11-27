<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";

// Criação da conexão
$conn = new mysqli($servername, $username, $password);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Script SQL para criar banco de dados e tabela
$sql = "
    CREATE DATABASE IF NOT EXISTS cafedb;
    USE cafedb;
    CREATE TABLE IF NOT EXISTS reviews (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50),
        comentario VARCHAR(255)
    );
    CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        senha VARCHAR(255) NOT NULL
    );
    
";
// Executa o script SQL
if ($conn->multi_query($sql) === TRUE) {
    echo "Banco de dados e tabela criados com sucesso.";
} else {
    echo "Erro na criação do banco de dados e tabela: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
