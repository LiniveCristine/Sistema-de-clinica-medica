<?php

//não podem acessar as paginas sem passar pelo index antes
defined('CONTROL') or die("acesso negado");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $erro = autentificarUsuario();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <header>
        <h1>Login</h1>
        <form action="index.php?rota=login" method="post">
            <input type="text" name="usuario" placeholder="usuario">
            <input type="password" name="senha" placeholder="senha">
            <button type="submit">entrar</button>
        </form>

        <?php if(!empty($erro)): ?>
        <p> <?= $erro ?> </p> 
        <?php endif; ?>
    </header>
</body>
</html>