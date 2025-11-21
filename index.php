<?php
//importando o autoload que contem os arquivos controllers e models
require_once 'autoload.php';

//definindo uma variavel de controle
define('CONTROL', true);

session_start();

//verificando se existe usuario na sessão
$usuarioLogado = $_SESSION['usuario'] ?? null; 

if(empty($usuarioLogado)){ 
    $rota = 'login';
} else{
    $rota = $_GET['rota'] ?? 'home'; //se não existir a variavel 'rota' na querry string, vai ser home
}

if(!empty($usuarioLogado) && $rota == 'login'){
    $rota = 'home';
}

//array de rotas
$rotas = [
    'login' => 'Views\login.php',
    'home' => 'Views\home.php',
    'cadastrarMedico' => 'Views\cadastrarM.php',
    'marcarConsulta' => 'Views\marcarC.php',
    'listarMedicos' => 'Views\listarM.php',
    'listarConsultas' => 'Views\listarC.php'
];

if(!key_exists($rota, $rotas)){ //verificando se a rota existe no array de rotas
    die("Rota não existe");
}

//importando o arquivo da rota para o index
require_once $rotas[$rota];