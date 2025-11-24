<?php 

function PegarListaJson($arquivo){
    //peguei o conteudo do json codigicado
    $listaJSON = file_get_contents($arquivo);
    
    //decodifiquei e joguei na variavel
    $lista = json_decode($listaJSON, true);
    
    if (empty($lista)) {
        $lista = [];
    }

    return $lista;
}



