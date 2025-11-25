<?php
    //varrer os diretorios e armazenar os arquivos nessa variavel (array)
    $controllers_file = scandir('Controllers');
    $controllers_file_medico = scandir('Controllers/medico');
    $controllers_file_consulta = scandir('Controllers/consulta');
    $controllers_file_login = scandir('Controllers/login');

    $models_file = scandir('Models');

    //percorrer o array e ignorar os arquivos . e ..
    foreach($controllers_file as $arquivo){
        if(str_contains($arquivo, '.php')){
            require_once "Controllers/$arquivo";
        }
        
    }

    foreach($controllers_file_medico as $arquivo){
        if($arquivo == '.' || $arquivo == '..'){
            continue;
        }
        require_once "Controllers/medico/$arquivo";
    }

     foreach($controllers_file_consulta as $arquivo){
        if($arquivo == '.' || $arquivo == '..'){
            continue;
        }
        require_once "Controllers/consulta/$arquivo";
    }

     foreach($controllers_file_login as $arquivo){
        if($arquivo == '.' || $arquivo == '..'){
            continue;
        }
        require_once "Controllers/login/$arquivo";
    }


    foreach($models_file as $file){
        if($file == '.' || $file == '..'){
            continue;
        }
        require_once "Models/$file";
    }


    