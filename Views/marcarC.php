<?php
defined('CONTROL') or die("acesso negado");

$listaMedicos = PegarListaMedicosJson();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mensagem = MarcarConsulta();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marcar consulta</title>
</head>
<body>
     <header>
        <?php require_once 'navbar.php' ?>
    </header>
    <main>
        <form action="?rota=marcarConsulta" method="post">
            <label for="nomePaciente">Nome</label>
            <input type="text" name="nomePaciente" placeholder="nome paciente">

            <label for="dataNascimento">Data nascimento</label>
            <input type="date" name="dataNascimento" placeholder="data nascimento">

            <label for="dataConsulta">Data Consulta</label>
            <input type="date" name="dataConsulta" placeholder="data consulta">

            <h3>Medicos: </h3>
            <?php require_once 'checkboxMedicos.php' ?>
        <button type="submit">Marcar</button>
        </form>

        <p><?= $mensagem ?></p>
    </main>
</body>
</html>