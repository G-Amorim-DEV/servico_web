<?php

$url = "../desafio_cafe_1/cliente.json";

$resposta = file_get_contents($url);

$dados = json_decode($resposta, true);


echo "<h1>Dados dos Clientes</h1>";

foreach ($dados as $cliente) {
    
    echo "<div>"; 
    echo "<h3>Cliente: " . htmlspecialchars($cliente['nome']) . "</h3>";
    
    echo "<ul>";
    
    foreach ($cliente as $chave => $valor) {
        echo "<li><strong>" . ucfirst($chave) . ":</strong> " . htmlspecialchars($valor) . "</li>";
    }
    
    echo "</ul>";
    echo "</div>";
    echo "<hr>";
}

?>

