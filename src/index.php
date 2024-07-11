<?php
require "config.php";
require "model/bdCadastro.php";
require "model/bdLogin.php";

//$bdlogin = new Login($pdo);
//$bdcadastro = new Cadastro($pdo);

//rota padrão
$rota = "regraCadastro";
$rota = "regraLogin";

if(array_key_exists("rota", $_GET)){
    $rota = (string) $_GET['rota'];
}

if(is_file("controller/{$rota}.php")){
    require "controller/{$rota}.php";
}else{
    echo "Rota não encontrada";
}
?>