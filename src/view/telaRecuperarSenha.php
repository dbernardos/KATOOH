<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar Senha</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

<?php
require_once("../config.php");

    if (isset($_GET['token'])) {  ////Arrumar parte HTML ////
        // Mostrar formulário de redefinição
        $token = $_GET['token'];
        echo '<form action="telaRecuperarSenha.php" method="post" onsubmit="return validatePassword()">
                <input type="hidden" name="token" value="' . htmlspecialchars($token) . '">
                <div class="mb-3">
                    <label for="novaSenha" class="form-label">Digite sua nova senha:</label>
                    <input type="password" id="novaSenha" name="novaSenha" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="confirmarSenha" class="form-label">Confirme sua nova senha:</label>
                    <input type="password" id="confirmarSenha" name="confirmarSenha" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Redefinir Senha</button>
              </form>';
    } else {
        // Mostrar formulário de solicitação de link de redefinição
        echo '<form action="telaRecuperarSenha.php" method="post">
                <label for="email">Digite seu endereço de e-mail:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit" class="btn btn-primary">Enviar Link de Redefinição</button>
              </form>';
    }
?>

<script>
function validatePassword() {
    const novaSenha = document.getElementById('novaSenha').value;
    const confirmarSenha = document.getElementById('confirmarSenha').value;

    if (novaSenha !== confirmarSenha) {
        alert('As senhas não coincidem. Por favor, tente novamente.');
        return false;
    }
    return true;
}
</script>

</body>
</html>