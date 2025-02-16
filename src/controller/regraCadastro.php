<?php
require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['usuario'];
    $email = $_POST['cadEmail'];
    $senha = $_POST['cadSenha'];
    $confirmar_senha = $_POST['confSenha'];

    // Validação do email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Erro: Formato de email inválido.");
    }

    // Validação da senha
    if (strlen($senha) < 8 || !preg_match("#[0-9]+#", $senha) || !preg_match("#[A-Z]+#", $senha) || !preg_match("#[a-z]+#", $senha)) {
        die("Erro: A senha deve ter pelo menos 8 caracteres, incluindo números, letras maiúsculas e minúsculas.");
    }

    // Verificação de confirmação de senha
    if ($senha != $confirmar_senha) {
        die("Erro: As senhas não coincidem.");
    }

    //Criptografa a senha   
    $senha_hash = password_hash($senha, PASSWORD_BCRYPT, ['cost' => 12]);
    //$senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    // Verificação se o usuário já existe
    /* $host = 'localhost';
    $dbname = 'mydb'; 
    $username = 'root';
    $password = ''; */

    try {
        /* $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); */
                                                                                                 
        // Verificar se o usuário ou email já existem
        $sql = "SELECT COUNT(*) FROM usuario WHERE nome = :nome OR email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->fetchColumn() > 0) {
            die("Erro: O usuário ou email já está em uso.");
        }

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha_hash);
        $stmt->execute();

        echo "Cadastro realizado com sucesso!";
    } catch (PDOException $e) {
        die("Erro ao cadastrar usuário: " . $e->getMessage());
    }
}
?>


