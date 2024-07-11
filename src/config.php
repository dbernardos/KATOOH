<?php

$USER = "root";
$SENHA = "";
$DSN = "mysql:dbname=mydb;host=localhost";
$SERVIDOR = "localhost:8081";
$BANCO = "mydb";

try{
    $pdo = new PDO($DSN, $USER, $SENHA);
    echo "Sucesso na conexão";
} catch(PDOException $e){
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
    die();
}