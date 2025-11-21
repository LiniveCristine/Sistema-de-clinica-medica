<?php

function cadastrarMedico(){
    $nome = strip_tags($_POST['nome']) ?? 'oi';
    $especialidade = strip_tags($_POST['especialidade']) ?? 'null';

    if(empty($nome) || empty($especialidade)){
        return "Preencha os campos";
        die();
    }

    $novoMedico = [
        $nome => $especialidade
    ];

    //pegando o retorno da leitura do json
    $listaMedicos = PegarListaMedicosJson();
    $listaMedicos[] = $novoMedico;

    //Criando texto json
    $textojson = json_encode($listaMedicos, JSON_PRETTY_PRINT);

    //armazenando a lista atualizada no arquivo json
    file_put_contents('BD/listaMedicos.json', $textojson);

    return "Médico cadastrado";

}