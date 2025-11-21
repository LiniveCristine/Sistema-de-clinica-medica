<?php

    $controllers_file = scandir('Controllers');
    $models_file = scandir('Models');

    foreach($controllers_file as $file){
        if($file == '.' || $file == '..'){
            continue;
        }
        require_once "Controllers/$file";
    }

    foreach($models_file as $file){
        if($file == '.' || $file == '..'){
            continue;
        }
        require_once "Models/$file";
    }


    