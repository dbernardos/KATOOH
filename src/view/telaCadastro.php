<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="src/view/styles/styles.css" rel="stylesheet">
        <title>Cadastro KATOOH</title>
        <style>
            
        </style>
    </head>

    <header>
        <div class="row">
            <div class="colunaImagem">
                <img class="logo" src="../view/img/K.svg">
            </div>
        </div>
    </header>
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

    
</html>

