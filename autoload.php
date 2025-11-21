<?php
    //varrer os diretorios e armazenar os arquivos nessa variavel (array)
    $controllers_file = scandir('Controllers');
    $models_file = scandir('Models');

    //percorrer o array e ignorar os arquivos . e ..
    foreach($controllers_file as $file){
        if($file == '.' || $file == '..'){
            continue;
        }
        require_once "Controllers/$file"; //importar os arquivos 
    }

    foreach($models_file as $file){
        if($file == '.' || $file == '..'){
            continue;
        }
        require_once "Models/$file";
    }


    