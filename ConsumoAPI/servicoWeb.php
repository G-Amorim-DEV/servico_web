<?php

   // URL da API

   $url = "";

   // Faz a requisição e guarda resposta
   $resposta = file_get_contents($url);

   //Converte o JSON em array associativo
   $dados = json_decode($resposta, true);

   // Pega o valor do array

   $valor = $dados[""];

   // Mostra no navegador

   echo $valor;
   
?>