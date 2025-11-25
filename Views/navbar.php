<?php
defined('CONTROL') or die("acesso negado");
?>

<nav class="nav" >

    <p>Usuario: <?=  $_SESSION['usuario'] ?></p>
    <a href="?rota=home">Home</a>
    <a href="?rota=cadastrarMedico">Cadastrar Médico</a>
    <a href="?rota=listarMedicos">Listar Médicos</a>
    <a href="?rota=marcarConsulta">Marcar consulta</a>
    <a href="?rota=listarConsultas">Listar Consultas</a>

</nav>