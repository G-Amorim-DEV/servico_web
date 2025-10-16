<?php

$cartas = [
    'Exodia the Forbidden One',
    'Right Arm of the Forbidden One',
    'Left Arm of the Forbidden One',
    'Right Leg of the Forbidden One',
    'Left Leg of the Forbidden One'
];

$contador_cartas = 0; // Inicializa um contador para controlar o layout

foreach ($cartas as $nome) {

    // --- Lógica de Abertura de Linhas ---
    if ($contador_cartas === 0) {
        // Primeira carta (Exodia the Forbidden One): Abre a linha 1 (1 carta)
        echo '<div class="linha-cartas linha-1">';
    } elseif ($contador_cartas === 1) {
        // Segunda carta (Right Arm...): Fecha a linha 1 e abre a linha 2 (2 cartas)
        echo '</div>'; 
        echo '<div class="linha-cartas linha-2">';
    } elseif ($contador_cartas === 3) {
        // Quarta carta (Right Leg...): Fecha a linha 2 e abre a linha 3 (2 cartas)
        echo '</div>'; 
        echo '<div class="linha-cartas linha-2">';
    }
    // ------------------------------------


    $url = "https://db.ygoprodeck.com/api/v7/cardinfo.php?name=" . urlencode($nome);

    $resposta = @file_get_contents($url); 
    $dados = json_decode($resposta, true);

    // Verifica se os dados foram retornados corretamente
    if (isset($dados['data'][0])) {
        $card = $dados['data'][0]; 
        
        // Extrai os dados, usando htmlspecialchars e nl2br para formatação e segurança
        $nome_card = htmlspecialchars($card['name']); 
        $descricao = nl2br(htmlspecialchars($card['desc']));
        $imagem_url = htmlspecialchars($card['card_images'][0]['image_url']);
        
        
        echo "<div class='carta'>";
        echo " <h2 class='carta-nome'>" . $nome_card . "</h2>";
            
        echo "<div class='carta-imagem'>";
        echo " <img src='$imagem_url' alt='Imagem de $nome_card'>";
        echo " </div>";
            
        echo " <div class='carta-descricao'>";
        echo " <p>$descricao</p>"; 
        echo " </div>";
            
        echo "</div>"; 
    } else {
         // Tratar erro caso a API não retorne dados
         echo "<p>Erro ao carregar a carta: " . htmlspecialchars($nome) . "</p>";
    }

    $contador_cartas++; // Incrementa o contador
}

// --- Lógica de Fechamento da Última Linha ---
// Fecha a última div.linha-cartas (que foi aberta na iteração 3)
if ($contador_cartas === 5) {
    echo '</div>';
}
// ---------------------------------------------
?>