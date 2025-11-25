<?php
    $listaConsultas =  PegarListaJson('BD\listaConsultas.json');

    if($_SERVER['REQUEST_METHOD'] == 'POST' && count($_POST) >= 2){

        $consultaSelecionada = key($_POST);
    
        if(array_key_last($_POST) == 'deletar' ){
            DeletarConsulta($consultaSelecionada, $listaConsultas);
        } else{
            ConfirmarConsulta($consultaSelecionada, $listaConsultas);
        }
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="Views/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>listar consulta</title>
</head>
<body>
    <header>
        <?php require_once 'navbar.php' ?>
    </header>
    <main>
        <form action="?rota=listarConsultas" method="post" class="container consulta">
            <h2><?= empty($listaConsultas)? 'Não há consultas marcadas' : ' '?></h2>
            <?php foreach($listaConsultas as $key => $consulta):?>
                <div class="container menor">
                        <input type="checkbox" name=<?= $key ?>>  
                        <?php foreach($consulta as $key => $value):?>
                            <?php if($key == 'Confirmada' && $value == false || $key == 'Data nascimento'): ?>
                                <?php continue ?>
                            <?php endif; ?>
                            <p><?= "$key - $value"?></p> 
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            <?php if (!empty($listaConsultas)): ?>
                <button type="submit" name="editar"><i class="fa-regular fa-circle-check"></i></button>
                <button type="submit" name= "deletar" class="lixo"><i class="fa-regular fa-trash-can" ></i></button>
            <?php endif ?>
        </form>
        
    </main>
</body>
</html>