<?php

function deletarMedico($nome, $listaMedicos){
    $medicoExcluir = array_key_first($nome);
    
    foreach($listaMedicos as $key => $medico){
        if($medicoExcluir == key($medico)){
            unset($listaMedicos[$key]);
        }
    }

    $textojson = json_encode($listaMedicos, JSON_PRETTY_PRINT);
    file_put_contents('BD/listaMedicos.json', $textojson);

    header("Refresh: 0");
}

