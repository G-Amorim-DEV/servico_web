<?php

    $url = "https://brasilapi.com.br/api/ddd/v1/11";

    $resposta = file_get_contents($url);

     $dados = json_decode($resposta, true);

     $estado = $dados['state'];

     $cidade = $dados['cities'][0];

     echo "<h3> Estado:: $estado </h3>";

     echo "<h4> Cidade:: $cidade </h4>" ;    

?>