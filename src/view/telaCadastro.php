<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="src/view/styles/cadStyles.css">
        <title>Cadastro KATOOH</title>
        
    </head>

    <style>
        .custom-form {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        max-width: 25%; 
        margin: auto; 
        }
        body {
            background-color: #9d0000;
        }
        .col{
            text-align: center;
        }
        .colunaImagem{
            width: 100%;
            height: 100%; /* Altura do contêiner ajustada para 100% do tamanho da imagem */
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            overflow: hidden; 
        }
        .logo{
            max-width: 10%; 
            height: auto; 
            display: block;
            text-align: center;
        }
        .oval-header{
            background-color: #9d0000; /* Cor de fundo do header */
            color: white; /* Cor do texto */
            padding: 20px; /* Espaçamento interno */
            text-align: center; /* Centralizar texto */
            position: relative; /* Posição relativa para permitir posicionamento absoluto do conteúdo */
            overflow: hidden; /* Esconde qualquer conteúdo que exceda as bordas arredondadas */
            height: 200px; /* Altura do header */
            clip-path: polygon(0 0, 100% 0, 100% 75%, 50% 100%, 0 75%);
        }

        .brutalist-container {
  position: relative;
  width: 250px;
  font-family: monospace;
}

.brutalist-input {
  width: 100%;
  padding: 15px;
  font-size: 18px;
  font-weight: bold;
  color: #000;
  background-color: #fff;
  border: 4px solid #000;
  position: relative;
  overflow: hidden;
  border-radius: 0;
  outline: none;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  box-shadow: 5px 5px 0 #000, 10px 10px 0 #4a90e2;
}

@keyframes glitch {
  0% {
    transform: translate(0);
  }
  20% {
    transform: translate(-2px, 2px);
  }
  40% {
    transform: translate(-2px, -2px);
  }
  60% {
    transform: translate(2px, 2px);
  }
  80% {
    transform: translate(2px, -2px);
  }
  100% {
    transform: translate(0);
  }
}

.brutalist-input:focus {
  animation: focus-pulse 4s cubic-bezier(0.25, 0.8, 0.25, 1) infinite,
    glitch 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) infinite;
}

.brutalist-input:focus::after {
  content: "";
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: white;
  z-index: -1;
}

.brutalist-input:focus::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: black;
  z-index: -2;
  clip-path: inset(0 100% 0 0);
  animation: glitch-slice 4s steps(2, end) infinite;
}

@keyframes glitch-slice {
  0% {
    clip-path: inset(0 100% 0 0);
  }
  10% {
    clip-path: inset(0 5% 0 0);
  }
  20% {
    clip-path: inset(0 80% 0 0);
  }
  30% {
    clip-path: inset(0 10% 0 0);
  }
  40% {
    clip-path: inset(0 50% 0 0);
  }
  50% {
    clip-path: inset(0 30% 0 0);
  }
  60% {
    clip-path: inset(0 70% 0 0);
  }
  70% {
    clip-path: inset(0 15% 0 0);
  }
  80% {
    clip-path: inset(0 90% 0 0);
  }
  90% {
    clip-path: inset(0 5% 0 0);
  }
  100% {
    clip-path: inset(0 100% 0 0);
  }
}

.brutalist-label {
  position: absolute;
  left: -3px;
  top: -35px;
  font-size: 14px;
  font-weight: bold;
  color: #fff;
  background-color: #000;
  padding: 5px 10px;
  transform: rotate(-1deg);
  z-index: 1;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.brutalist-input:focus + .brutalist-label {
  transform: rotate(0deg) scale(1.05);
  background-color: #4a90e2;
}

.smooth-type {
  position: relative;
  overflow: hidden;
}

.smooth-type::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: linear-gradient(90deg, #fff 0%, rgba(255, 255, 255, 0) 100%);
  z-index: 1;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.smooth-type:focus::before {
  opacity: 1;
  animation: type-gradient 2s linear infinite;
}

@keyframes type-gradient {
  0% {
    background-position: 300px 0;
  }
  100% {
    background-position: 0 0;
  }
}

.brutalist-input::placeholder {
  color: #888;
  transition: color 0.3s ease;
}

.brutalist-input:focus::placeholder {
  color: transparent;
}

.brutalist-input:focus {
  animation: focus-pulse 4s cubic-bezier(0.25, 0.8, 0.25, 1) infinite;
}

@keyframes focus-pulse {
  0%,
  100% {
    border-color: #000;
  }
  50% {
    border-color: #4a90e2;
  }
}

    </style>

    <header class="oval-header">
        <div class="oval-bottom"></div>
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
<!--Novo Menu-->

    <div class="container">
        <form class="custom-form">
            <div class="row"> 
                <div class="col">
            <div class="mb-3">
                <div class="brutalist-container">
                <input
                    placeholder="Insira Usuário"
                    class="brutalist-input smooth-type"
                    type="text"
                    id="usuario"
                />
                <label class="brutalist-label">Usuário</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="brutalist-container">
                    <input
                        placeholder="Insira E-Mail"
                        class="brutalist-input smooth-type"
                        type="email"
                        id="cadEmail"
                    />
                    <label class="brutalist-label">E-Mail</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="brutalist-container">
                    <input
                        placeholder="Insira Senha"
                        class="brutalist-input smooth-type"
                        type="password"
                        id="cadSenha"
                    />
                    <label class="brutalist-label">Senha</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="brutalist-container">
                    <input
                        placeholder="Confirme sua Senha"
                        class="brutalist-input smooth-type"
                        type="password"
                        id="confSenha"
                    />
                    <label class="brutalist-label">Confirmar Senha</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button>
                <span class="button_top"> Button
                </span>
            </button>
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

