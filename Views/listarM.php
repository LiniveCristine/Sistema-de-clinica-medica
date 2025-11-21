<?php
defined('CONTROL') or die("acesso negado");

$listaMedicos = PegarListaMedicosJson();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach($_POST as $key => $nomeMedico){
        if($key == 'deletar'){
            deletarMedico($nomeMedico, $listaMedicos);
        }elseif($key == 'editar'){
           editarMedico($nomeMedico, $listaMedicos);
        }
    }
 
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
        <form action="index.php?rota=listarMedicos" method="post">
            <?php foreach($listaMedicos as $medico):?>
            <?php foreach($medico as $nome => $especialidade):?>
                <div>
                    <p><?= "Nome: $nome - Especialidade: $especialidade"?></p>
                    <input type="checkbox" name="deletar[<?=$nome?>]"> 
                    <button type="submit"><i class="fa-regular fa-trash-can"></i></button>

                    <input type="checkbox" name="editar[<?=$nome?>]"> 
                    <button type="submit"><i class="fa-regular fa-pen-to-square"></i></button>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
        </form>
    </main>
    
</body>
</html>