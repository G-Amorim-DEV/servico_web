<?php

/* CONSUMO DE API - Utilização de um serviço web */

$url = "http://localhost/servico_web/api/salgado_api.php?name=coxinha&info=ingredientes";

// guardar um valor de resposta da API
$resposta = file_get_contents($url);

echo $resposta;

// convertendo JSON para um Array associativo
$valores = json_decode($resposta, true);



?>