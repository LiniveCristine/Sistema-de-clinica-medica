<?php
defined('CONTROL') or die("acesso negado");
?>

<nav>
    <p>Usuario: <?=  $_SESSION['usuario'] ?></p>
    <a href="?rota=home">Home</a>
    <a href="?rota=cadastrarMedico">Cadastrar Medico</a>
    <a href="?rota=listarMedicos">Listar Medicos</a>
    <a href="?rota=marcarConsulta">Marcar consulta</a>
    <a href="?rota=listarConsultas">Listar Consultas</a>

</nav>