<?php

function MarcarConsulta(){
    $nomepaciente = strip_tags($_POST['nomePaciente']) ?? null;
    $dataNascimento = strip_tags($_POST['dataNascimento']) ?? null;
    $dataConsulta = strip_tags($_POST['dataConsulta']) ?? null;
    $medico = str_replace("_", " ", array_key_last($_POST)) ?? null ;

    if(empty($nomepaciente) || empty($dataNascimento) || empty($dataConsulta) || empty($medico) || count($_POST) < 4 ){
        return "Preencha os campos";
        die ();
    }

    $novaConsulta = [
        'Nome paciente' => $nomepaciente,
        'Data nascimento' => $dataNascimento,
        'Data consulta' => $dataConsulta,
        'Nome medico' => $medico,
        'Confirmada' => false
    ];

    $listaConsultas =  PegarListaJson('BD\listaConsultas.json');
    $listaConsultas[] = $novaConsulta;

    $textoJson = json_encode($listaConsultas, JSON_PRETTY_PRINT);

    file_put_contents('BD/listaConsultas.json', $textoJson);
    return "Consulta marcada";
}