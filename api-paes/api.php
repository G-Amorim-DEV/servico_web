<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$paes = json_decode(file_get_contents("pao.json"), true);

$pao_especifico = $_GET['paes'];

switch($pao_especifico){

    // Frances
    case "frances":

        $pao = $paes['pães']['Pão frances'];
        echo json_encode($pao);
        break;

    case "frances-nome":

        $pao = $paes['pães']['Pão frances']['nome'];
        echo json_encode($pao);
        break;

    case "frances-tipo":

        $pao = $paes['pães']['Pão frances']['Tipo'];
        echo json_encode($pao);
        break;

    case "frances-origem":

        $pao = $paes['pães']['Pão frances']['Origem'];
        echo json_encode($pao);
        break;

    case "frances-nutri":

        $pao = $paes['pães']['Pão frances']['Nutrientes'];
        echo json_encode($pao);
        break;
    
    // Forma
    case "forma":

        $pao = $paes['pães']['Pão forma'];
        echo json_encode($pao);
        break;

    case "forma-nome":

        $pao = $paes['pães']['Pão forma']['nome'];
        echo json_encode($pao);
        break;

    case "forma-tipo":

        $pao = $paes['pães']['Pão forma']['Tipo'];
        echo json_encode($pao);
        break;

    case "forma-origem":

        $pao = $paes['pães']['Pão forma']['Origem'];
        echo json_encode($pao);
        break;

    case "forma-nutri":

        $pao = $paes['pães']['Pão forma']['Nutrientes'];
        echo json_encode($pao);
        break;
    
    // Centeio
    case "centeio":

        $pao = $paes['pães']['Pão centeio'];
        echo json_encode($pao);
        break;

    case "centeio-nome":

        $pao = $paes['pães']['Pão centeio']['nome'];
        echo json_encode($pao);
        break;

    case "centeio-tipo":

        $pao = $paes['pães']['Pão centeio']['Tipo'];
        echo json_encode($pao);
        break;

    case "centeio-origem":

        $pao = $paes['pães']['Pão centeio']['Origem'];
        echo json_encode($pao);
        break;

    case "centeio-nutri":

        $pao = $paes['pães']['Pão centeio']['Nutrientes'];
        echo json_encode($pao);
        break;    

    // doce
    case "doce":

        $pao = $paes['pães']['Pão doce'];
        echo json_encode($pao);
        break;

    case "doce-nome":

        $pao = $paes['pães']['Pão doce']['nome'];
        echo json_encode($pao);
        break;

    case "doce-tipo":

        $pao = $paes['pães']['Pão doce']['Tipo'];
        echo json_encode($pao);
        break;

    case "doce-origem":

        $pao = $paes['pães']['Pão doce']['Origem'];
        echo json_encode($pao);
        break;

    case "doce-nutri":

        $pao = $paes['pães']['Pão doce']['Nutrientes'];
        echo json_encode($pao);
        break;  
    

    default:

        echo json_encode($paes);
        break;

}

function cadastrar_pao($nome, $tipo, $origem, $nutrientes){

    $pacocas['pães']['$nome']['nome'] = "$nome";
    $pacocas['pães']['$nome']['Tipo'] = "$tipo";
    $pacocas['pães']['$nome']['Origem'] = "$origem";
    $pacocas['pães']['$nome']['Nutrientes'] = "$nutrientes";

    if(false){
        salvar_dados($paes);
    }

}

function salvar_dados($variavel){

    //file_put Salvar arquivo   e   json_encode converte
    file_put_contents('pao.json', json_encode($variavel, JSON_PRETTY_PRINT));

}

?>