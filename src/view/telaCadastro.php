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
            padding-top: 40px;
        }
        body {
            background-color: #7e0909;
            
        }
        .container{
            padding-top: 25px;
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
        width: 95%;
        font-family: monospace;
        padding:5px;
        padding-bottom: 25px;
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
        box-shadow: 5px 5px 0 #000, 10px 10px 0 #d84848;
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
        top: -25px;
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
        background-color: #ff5252;
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
            border-color: #ff5252;
        }
        }

        .comic-button {
        display: inline-block;
        padding: 2px 20px;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        color: #fff;
        background-color: #ff5252;
        border: 2px solid #000;
        border-radius: 10px;
        box-shadow: 5px 5px 0px #000;
        transition: all 0.3s ease;
        cursor: pointer;
        }

        .comic-button:hover {
        background-color: #fff;
        color: #ff5252;
        border: 2px solid #ff5252;
        box-shadow: 5px 5px 0px #ff5252;
        }

        .comic-button:active {
        background-color: #fcf414;
        box-shadow: none;
        transform: translateY(4px);
        }

        /* add this to your :root variables */
        .checkbox {
        --light: rgba(207, 205, 205, 0.425);
        --primary-color: #8c00ff;
        --duration: 0.3s;
        --ease: ease-in-out;
        }

        /* hide checkbox */
        .checkbox input[type="checkbox"] {
        display: none;
        }

        .checkbox label {
        align-items: center;
        cursor: pointer;
        display: flex;
        }

        .checkbox label span {
        margin-left: 8px;
        }

        .checkbox svg {
        height: 30px;
        width: 30px;
        }

        /* svg rectangle property */
        .checkbox svg > rect {
        fill: var(--light);
        stroke: #8c00ff;
        /* responsive values */
        stroke-dasharray: 400%;
        stroke-dashoffset: 400%;
        transition: var(--duration) stroke-dashoffset var(--ease);
        }

        /* svg check property */
        .checkbox svg path {
        stroke: var(--primary-color);
        /* responsive values */
        stroke-dasharray: 100%;
        stroke-dashoffset: 100%;
        transition: var(--duration) stroke-dashoffset var(--ease);
        }

        .checkbox input[type="checkbox"]:checked + label svg > rect,
        .checkbox input[type="checkbox"]:checked + label svg path {
        stroke-dashoffset: 0;
        }

    </style>

    <header class="oval-header">
        <div class="row">
            <div class="colunaImagem">
                <img class="logo" src="../view/img/K.svg">
            </div>
        </div>
    </header>
    
<!--Novo Menu-->

    <div class="container">
        <form class="custom-form" action="../controller/regraCadastro.php" method="POST">>
            <div class="row"> 
                <div class="col">
                    <div class="mb-3">
                        <div class="brutalist-container">
                            <input
                                placeholder="Insira Usuário"
                                class="brutalist-input smooth-type"
                                type="text"
                                id="usuario"
                                name="usuario"
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
                                name="cadEmail"
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
                                name="cadSenha"
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
                                name="confSenha"
                            />
                            <label class="brutalist-label">Confirmar Senha</label>
                        </div>
                    </div>
                    <button type="submit" class="comic-button">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</html>