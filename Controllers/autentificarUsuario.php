<?php

    function autentificarUsuario(){
    $usuario = $_POST['usuario'] ?? 'oi';
    $senha = $_POST['senha'] ?? 'null';
    $erro = null;

    if(empty($usuario) || empty($senha)){
        return "Preencha os campos";
    }

    if(empty($erro)){
        $usuarios = require_once 'BD/usuarios.php';

        foreach($usuarios as $usuarioBD){
            if($usuario == $usuarioBD['usuario'] && password_verify($senha, $usuarioBD['senha'])){
                $_SESSION['usuario'] = $usuario;
                header('location: index.php/?rota=home');
            }

            return "Usuario ou senha INVALIDOS";
        }
    }
}
