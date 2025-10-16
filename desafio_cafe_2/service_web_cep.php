<?php

$url = 'https://brasilapi.com.br/api/cep/v1/03639000';

$resposta = file_get_contents($url);

$dados = json_decode($resposta, true);

$cep = $dados['cep'];
$state = $dados['state'];
$city = $dados['city'];
$neighborhood = $dados['neighborhood'];
$street = $dados['street'];
$service = $dados['service'];

echo " <h2> CEP:: $cep </h2> ";
echo " <h2> Estado:: $state</h2> ";
echo " <h2> Cidade:: $city</h2> ";
echo " <h2> Vizinhança:: $neighborhood</h2> ";
echo " <h2> Rua:: $street</h2> ";
echo " <h2> Serviço:: $service</h2> ";

?>

