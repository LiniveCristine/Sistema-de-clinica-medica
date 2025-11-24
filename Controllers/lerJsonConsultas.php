<?php

    function PegarListaConsultas(){
        $listaJson = file_get_contents('BD/listaConsultas.json');
        $listaConsultas = json_decode($listaJson, true);

        if(empty($listaConsultas)){
            $listaConsultas = [];
        }

        return $listaConsultas;
    }