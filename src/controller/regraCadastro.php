<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT, ['cost' => 12]);
    $confirmar_senha = $_POST['confirmar_senha'];

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

    // Verificação se o usuário já existe
    $host = 'localhost';0
    $dbname = 'mydb'; 
    $username = 'usuario';
    $password = 'senha';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                                                 
        // Verificar se o usuário ou email já existem
        $sql = "SELECT COUNT(*) FROM usuario WHERE nome = :nome OR email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->fetchColumn() > 0) {
            die("Erro: O usuário ou email já está em uso.");
        }

        //$dataCriacao = date('Y-m-d H:i:s');
        //$hashed_password = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        echo "Cadastro realizado com sucesso!";
    } catch (PDOException $e) {
        die("Erro ao cadastrar usuário: " . $e->getMessage());
    }
}
?>


