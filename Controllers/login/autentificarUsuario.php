<?php

    function autentificarUsuario(){
    $usuario = strip_tags($_POST['usuario']) ?? 'oi';
    $senha = strip_tags($_POST['senha']) ?? 'null';

    if(empty($usuario) || empty($senha)){
        return "Preencha os campos";
        die();
    }

    $usuarios = require_once 'BD/usuarios.php';

    foreach($usuarios as $usuarioBD){
        if($usuario == $usuarioBD['usuario'] && password_verify($senha, $usuarioBD['senha'])){
            $_SESSION['usuario'] = $usuario;
            header('location: index.php/?rota=home');
        }
    }
    return "Usuario ou senha INVALIDOS";
    die();
}
