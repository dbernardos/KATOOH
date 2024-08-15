<?php
$mysqli = new mysqli("localhost", "root", "", "mydb");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        // Processa o pedido de redefinição
        $email = $mysqli->real_escape_string($_POST['email']);

        // Verifica se o email esta registrados
        $result = $mysqli->query("SELECT * FROM Usuario WHERE email='$email'");
        if ($result->num_rows > 0) {
            $token = bin2hex(random_bytes(50));
            $mysqli->query("INSERT INTO NovaSenha (email, token) VALUES ('$email', '$token')");

            $resetLink = "http://dominio.com/telaRecuperarSenha.php?token=" . $token;
            $subject = "Solicitação de Redefinição de Senha";
            $message = "Clique no link a seguir para redefinir sua senha: $resetLink";
            $headers = "Para: noreply@localhost.com";

            mail($email, $subject, $message, $headers);
            echo "Um link de redefinição foi enviado para o seu endereço de e-mail.";
        } else {
            echo "Endereço de e-mail não encontrado.";
        }
    } elseif (isset($_POST['token']) && isset($_POST['senha'])) {
        // Processa a redefinição
        $token = $mysqli->real_escape_string($_POST['token']);
        $new_password = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $result = $mysqli->query("SELECT * FROM NovaSenha WHERE token='$token'");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $email = $row['email'];

            $mysqli->query("UPDATE Usuario SET password='$new_password' WHERE email='$email'");
            $mysqli->query("DELETE FROM NovaSenha WHERE token='$token'");

            echo "Sua senha foi redefinida com sucesso.";
        } else {
            echo "Alteração inválida ou expirada.";
        }
    }
} else {
    if (isset($_GET['token'])) {  ////Arrumar parte HTML ////
        // Mostra formulário de redefinição
        $token = $_GET['token'];
        echo '<form action="combined_reset.php" method="post">
                <input type="hidden" name="token" value="' . htmlspecialchars($token) . '">
                <label for="password">Digite sua nova senha:</label>
                <input type="password" id="novaSenha" name="novaSenha" required>
                <button type="submit">Reset Password</button>
              </form>';
    } else {
        // Mostra formulário de solicitação 
        echo '<form action="combined_reset.php" method="post">
                <label for="email">Digite seu endereço de e-mail:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Enviar Link de Redefinição</button>
              </form>';
    }
}
?>