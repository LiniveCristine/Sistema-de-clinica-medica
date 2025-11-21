<?php
defined('CONTROL') or die("acesso negado");
?>

<nav>
    <p>Usuario: <?=  $_SESSION['usuario'] ?></p>
    <a href="index.php?rota=home">Home</a>
    <a href="index.php?rota=cadastrarMedico">Cadastrar Medico</a>
    <a href="index.php?rota=listarMedicos">Listar Medicos</a>
    <a href="index.php?rota=marcarConsulta">Marcar consulta</a>
    <a href="index.php?rota=listarConsultas">Listar Consultas</a>

</nav>