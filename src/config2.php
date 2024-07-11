<?php
// Configurações do banco de dados
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mydb';

// Conexão com o banco de dados
$conn = new mysqli($host, $username, $password);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Lê o conteúdo do arquivo SQL
$sql = file_get_contents('model/script-banco-katooh.sql');

if ($sql === false) {
    die("Erro ao ler o arquivo SQL.");
}

// Divide as instruções SQL em um array
$sqlCommands = explode(';', $sql);

// Executa cada comando SQL
foreach ($sqlCommands as $command) {
    $command = trim($command);
    if (!empty($command)) {
        if ($conn->query($command) === false) {
            echo "Erro ao executar comando: " . $conn->error . "<br>";
        } else {
            echo "Comando executado com sucesso: $command<br>";
        }
    }
}

// Fecha a conexão
$conn->close();

echo "Instalação concluída.";
?>