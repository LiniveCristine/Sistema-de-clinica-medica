<?php
    $listaConsultas =  PegarListaJson('BD\listaConsultas.json');


?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <title>listar consulta</title>
</head>
<body>
    <head>
        <?php require_once 'navbar.php' ?>
    </head>
    <main>
        <h2><?= empty($listaConsultas)? 'Não há consultas marcadas' : ' '?></h2>
        <form action="?rota=listarConsultas" method="post">
            <?php foreach($listaConsultas as $consulta):?>
                <input type="checkbox" name="<?=$nome?>">  
            <?php foreach($consulta as $key => $value):?>
                <div>
                    <p><?= "$key - $value"?></p> 
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <?php if (!empty($listaConsultas)): ?>
            <button type="submit"><i class="fa-regular fa-trash-can"></i></button>
            <button type="submit">confirmar</button>
        <?php endif ?>
        </form>
        
    </main>
</body>
</html>