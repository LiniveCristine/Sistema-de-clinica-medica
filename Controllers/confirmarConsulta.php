<?php

function ConfirmarConsulta($indiceConsultaConfirmar, $listaConsultas){
  
    $listaConsultas[$indiceConsultaConfirmar]['Confirmada'] = 'ok';

    $textojson = json_encode($listaConsultas, JSON_PRETTY_PRINT);
    file_put_contents('BD/listacONSULTAS.json', $textojson);

    header("Refresh: 0");

}