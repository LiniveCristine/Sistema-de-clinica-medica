<?php 

function PegarListaMedicosJson(){
    //peguei o conteudo do json codigicado
    $listaJSON = file_get_contents('BD/listaMedicos.json');
    
    //decodifiquei e joguei na variavel
    $listaMedicos = json_decode($listaJSON, true);
    
    if (empty($listaMedicos)) {
        $listaMedicos = [];
    }

    return $listaMedicos;
}



