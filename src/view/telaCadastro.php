<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro KATOOH</title>
    <style>
        body {
            background-color: #610B5E;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: arial
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #610B5E;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Cadastro KATOOH</h2>
        <form action="#">
            <input type="text" id="usuario" name="usuario" placeholder="Usuário" autofocus required><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="email" id="confirmar_email" name="confirmar_email" placeholder="Confirmar Email" required><br>
            <input type="password" id="senha" name="senha" placeholder="Senha" required><br>
            <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirmar Senha" required><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>

