<?php
require_once("../config.php");
//verificando se é uma requisição post para efetuar o login
if (filter_input(INPUT_SERVER, "REQUEST_METHOD") === "POST") {
    try {
        $erros = [];
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

        $sql = "select * from usuario where email = ?";

        $conexao = new PDO("mysql:host=" . $SERVIDOR . ";dbname=" . $BANCO, $USER, $SENHA);
        //$DSN = "mysql:dbname=mydb;host=localhost";

        $pre = $conexao->prepare($sql);
        $pre->execute(array(
            $email
        ));

        $resultado = $pre->fetch();
        
        if (!$resultado) {
            throw new Exception("Login inválido!");
        } else {
            //$senha = password_hash($senha, PASSWORD_BCRYPT, ['cost' => 12]);
            error_log("\n senha: '$senha''", 3, "../file.log");
            if (password_verify($senha, $resultado["senha"]) === false) {
                throw new Exception("Senha inválida!");
            } else {
                $_SESSION["usuario_id"] = $resultado["id"];
                $_SESSION["usuario"] = $resultado["nome"];
                $_SESSION["usuario"] = $resultado["email"];
            }
        }

        header("Location: ../view/telaPrincipal.php");
    } catch (Exception $e) {
        $erros[] = $e->getMessage();
        $_SESSION["erros"] = $erros;
    } finally {
        $conexao = null;
    }
}

if (isset($_SESSION["erros"])) {
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
    echo "<button type='button' class='btn-close btn-sm' data-bs-dismiss='alert'
        aria-label='Close'></button>";
    foreach ($_SESSION["erros"] as $chave => $valor) {
        echo $valor . "<br>";
    }
    echo "</div>";
}
//unset($_SESSION["erros"]);
?>
