<?php

/* Estruturando uma API */

//Cabeçalho da API
header("Content-Type: application/json; charset= UTF-8");
header("Access-Control-Allow-Origin: *");

// Sistema do Serviço Web

//Leitura do arquivo JSON e armazenando e transformando em Array na variável
$pacocas = json_decode(file_get_contents("pacoca.json"), true);

//Variável para guardar o que tem na posição enviada pelo link
$pacoca_especifica = $_GET['pacoca'];


//Saída da API
switch($pacoca_especifica){
    case "coco":
        $pacoca_coco = $pacocas['paçocas']['Paçoca de Coco'];
        echo json_encode($pacoca_coco);
        break;

    default:
        echo json_encode($pacocas);
        break;
}


function cadastrar_pacoca($nome, $tipo, $origem, $nutrientes){

    $pacocas['paçocas'][$nome]['Nome'] = $nome;
    $pacocas['paçocas'][$nome]['Tipo'] = $tipo;
    $pacocas['paçocas'][$nome]['Origem'] = $origem;
    $pacocas['paçocas'][$nome]['Nutrientes'] = $nutrientes;

    if(false){
        salvar_dados($pacocas);
    }
}

//echo $pacocas['paçocas']['Paçoca de Coco']['Nome']; 
//echo $pacocas['paçocas']['Paçoca de Mel']['Nome'];

function salvar_dados($variavel){
//Salvar dados no arquivo JSOM
    file_put_contents('pacoca.json', json_encode($variavel, JSON_PRETTY_PRINT));
}

//Saida da API 

//echo Json_encode($pacocas);