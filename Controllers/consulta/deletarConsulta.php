<?php

function DeletarConsulta($indiceConsultaDeletar, $listaConsultas){
    unset($listaConsultas[$indiceConsultaDeletar]);

    $textojson = json_encode($listaConsultas, JSON_PRETTY_PRINT);
    file_put_contents('BD/listaConsultas.json', $textojson);

    header("Refresh: 0");

}