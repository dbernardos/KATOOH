<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="src/view/styles/styles.css" rel="stylesheet">
    <title>Cadastro KATOOH</title>
    <!--<style>
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
    </style>-->
    <style>
        .custom-form {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        max-width: 25%; 
        margin: auto; 
        }
        body {
            background-color: #610B5E;
        }
        .col{
            text-align: center;
        }
    </style>
</head>


<div class="row">
            <div class="col">
                <br><br>
            </div>
        </div>
<div class="container">
    <form class="custom-form">
        <div class="row"> 
            <div class="col">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="usuario"  placeholder="Insira um nome de usuário" autofocus required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="cadEmail" placeholder="Insira um e-mail válido">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="cadSenha" placeholder="Insira uma senha válida">
        </div>
        <div class="mb-3">
            <label for="confSenha" class="form-label">Confirmar senha</label>
            <input type="password" class="form-control" id="confSenha" placeholder="Confirme a sua senha">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
        </div>
    </div>
    </form>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
    <div class="col">
      Column
    </div>
  </div>
</div>

<!--<body>
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
</body>-->
</html>

