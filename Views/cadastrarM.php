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
    <title>Cadastrar</title>
</head>
<body>
    <header>
        <?php require_once 'navbar.php' ?>
    </header>
    <main>
        <form action="?rota=cadastrarMedico" method="post">
            <input type="text" name="nome" placeholder="nome">
            <input type="text" name="especialidade" placeholder="especialidade">
            <button type="submit">cadastrar</button>
        </form>
        <?php if(!empty($mensagem)): ?>
        <p> <?= $mensagem ?> </p> 
        <?php endif; ?>
    </main>
    
</body>
</html>