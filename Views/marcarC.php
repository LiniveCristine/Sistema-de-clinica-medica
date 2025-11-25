<?php
defined('CONTROL') or die("acesso negado");

$listaMedicos = PegarListaJson('BD\listaConsultas.json');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mensagem = MarcarConsulta();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>marcar consulta</title>
</head>
<body>
     <header>
        <?php require_once 'navbar.php' ?>
    </header>
    <main>
        <form action="?rota=marcarConsulta" method="post" class="container consulta" >
            <label for="nomePaciente">Nome:</label>
            <input type="text" name="nomePaciente" placeholder="nome paciente">

            <label for="dataNascimento">Data nascimento:</label>
            <input type="date" name="dataNascimento" placeholder="data nascimento">

            <label for="dataConsulta">Data Consulta:</label>
            <input type="date" name="dataConsulta" placeholder="data consulta">

            <p>Medicos: </p>
            <?php require_once 'checkboxMedicos.php' ?>

            <button type="submit">Marcar</button>
            <p class="alerta"><?= $mensagem?? null ?></p>
        </form>

        
    </main>
</body>
</html>