<?php
defined('CONTROL') or die("acesso negado");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mensagem = cadastrarMedico();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>Cadastrar</title>
</head>
<body>
    <header>
        <?php require_once 'navbar.php' ?>
    </header>
    <main>
        <form action="?rota=cadastrarMedico" method="post" class="container">
            <h2>Cadastrar Médico</h2>
            <input type="text" name="nome" placeholder="nome">
            <input type="text" name="especialidade" placeholder="especialidade">
            <button type="submit">cadastrar</button>
             <?php if(!empty($mensagem)): ?>
                <p class="alerta"> <?= $mensagem ?> </p> 
            <?php endif; ?>
        </form>
       
    </main>
    
</body>
</html>