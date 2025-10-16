<?php

$pokemons = ['pikachu', 'bulbasaur', 'charmander', 'squirtle'];

foreach ($pokemons as $nome) {

    $url = "https://pokeapi.co/api/v2/pokemon/" . $nome;
    
 
    $resposta = file_get_contents($url); 
     

    $dados = json_decode($resposta, true);

  
    $pokemon_name = $dados['name'] ?? 'Nome não encontrado';
    $pokemon_type = $dados['types'][0]['type']['name'] ?? 'tipo-desconhecido';
    $front_default_sprite = $dados['sprites']['front_default'] ?? null;
    
    
    $pokemon_type_class = strtolower($pokemon_type);
    
   
    echo "<div class=\"pokemon-card $pokemon_type_class\">"; 
    

    echo "<p><strong>Nome:</strong> " . ucfirst($pokemon_name) . "</p>";
    echo "<p><strong>Tipo Principal:</strong> " . ucfirst($pokemon_type) . "</p>";
    
    

    echo "<img src=\"$front_default_sprite\" alt=\"Sprite do Pokémon " . ucfirst($pokemon_name) . "\">";
  

    echo "</div>";
    
    echo "<hr>";
}

?>