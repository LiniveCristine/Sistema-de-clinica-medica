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
     <link rel="stylesheet" href="Views/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>login</title>
</head>
<body>
    <main>

        <form action="index.php?rota=login" method="post" class="container">
            <h1>Login</h1>
            <input type="text" name="usuario" placeholder="usuario">
            <input type="password" name="senha" placeholder="senha">
            <button type="submit">entrar</button>
            <?php if(!empty($erro)): ?>
                <p class="alerta"> <?= $erro ?> </p> 
            <?php endif; ?>
        </form>

        
    </main>
</body>
</html>