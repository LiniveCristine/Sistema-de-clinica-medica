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
    <link rel="stylesheet" href="Views/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Listar Médicos</title>
</head>
<body>
    <header>
        <?php require_once 'navbar.php' ?>
    </header>
    <main>
        
        <form action="?rota=listarMedicos" method="post" class="container">
            <h2><?= empty($listaMedicos)? 'Não há medicos cadastrados' : 'Médicos Cadastrados'?></h2>
            <?php foreach($listaMedicos as $medico):?>
            <?php foreach($medico as $nome => $especialidade):?>
                <div class="medico">
                    <p>  <input type="checkbox" name="<?=$nome?>" class="checkbox"> <?= "Nome: $nome - $especialidade"?></p>  
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <?php if (!empty($listaMedicos)): ?>
            <button type="submit" class="lixo" ><i class="fa-regular fa-trash-can" ></i></button>
        <?php endif ?>
        </form>
    </main>
    
</body>
</html>