<?php

$USERBD = "root";
$SENHABD = "";
$DSN = "mysql:dbname=banco_katooh;host=localhost";

try{
    $pdo = new PDO($DSN, $USERBD, $SENHABD);
} catch(PDOException $e){
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
    die();
}