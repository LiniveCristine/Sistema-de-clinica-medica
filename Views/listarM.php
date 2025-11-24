<?php
defined('CONTROL') or die("acesso negado");

$listaMedicos = PegarListaJson('BD\listaMedicos.json');

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)){

    //pegando a primeira key do array  POST (nome do médico), retirando o _ e atribuindo o vlor para variavel
    $nomeMedico = str_replace("_", " ", key($_POST)) ;
    deletarMedico($nomeMedico, $listaMedicos);  
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>Listar Médicos</title>
</head>
<body>
    <header>
        <?php require_once 'navbar.php' ?>
    </header>
    <main>
        <h2><?= empty($listaMedicos)? 'Não há medicos cadastrados' : ' '?></h2>
        <form action="?rota=listarMedicos" method="post">
            <?php foreach($listaMedicos as $medico):?>
            <?php foreach($medico as $nome => $especialidade):?>
                <div>
                    <p><?= "Nome: $nome - Especialidade: $especialidade"?></p>
                    <input type="checkbox" name="<?=$nome?>">   
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <?php if (!empty($listaMedicos)): ?>
            <button type="submit"><i class="fa-regular fa-trash-can"></i></button>
        <?php endif ?>
        </form>
    </main>
    
</body>
</html>