<?php 
    $servername='localhost';//porta que o banco está
    $database = 'cafedb';
    $username = 'root';// nume de usuário padrão
    $password='';//senha
    $conn = new mysqli ($servername,$database, $username,$password);
    if (mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS cafedb")){ //criação do banco caso não exista.
        echo 'Banco de dados criado';
    }else{
        echo "Erro criando o banco de dados";
    }
?>
