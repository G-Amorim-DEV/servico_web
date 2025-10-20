<?php

/* Estruturando uma API */

//Cabeçalho da API
//header("Content-Type: aplication/json; charset=UTF-8");
//header("Access-Control-Allow-Origin: *");

// Sistema do Serviço Web

//Leitura do arquivo JSON e armazenando e transformando em Array na variável
$pacocas = json_decode(file_get_contents("pacoca.json"), true);

$pacocas['paçocas']['Paçoca de Mel']['Nome'] = 'Paçoca de Mel';
$pacocas['paçocas']['Paçoca de Mel']['Tipo'] = 'Doce';
$pacocas['paçocas']['Paçoca de Mel']['Origem'] = 'Irlanda';
$pacocas['paçocas']['Paçoca de Mel']['Nutrientes'] = 'Nenhum';

$pacocas['paçocas']['Paçoca de Coco']['Nome'] = 'Paçoca de Coco';
$pacocas['paçocas']['Paçoca de Coco']['Tipo'] = 'Doce';
$pacocas['paçocas']['Paçoca de Coco']['Origem'] = 'Hawai';
$pacocas['paçocas']['Paçoca de Coco']['Nutrientes'] = 'Cocoativos';

//echo $pacocas['paçocas']['Paçoca de Coco']['Nome']; 
//echo $pacocas['paçocas']['Paçoca de Mel']['Nome'];

//Salvar dados no arquivo JSOM
file_put_contents('pacoca.json', json_encode($pacocas, JSON_PRETTY_PRINT));


//Saida da API 

//echo Json_encode($alunos)