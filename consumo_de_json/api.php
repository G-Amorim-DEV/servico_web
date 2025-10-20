<?php

/* Estruturando uma API */

// Cabeçalho da API
header("Content-Type: application/json; charset= UTF-8");
header("Access-Control-Allow-Origin: *");

// Sistema do Serviço Web

// Leitura do arquivo JSON (comida.json) e armazenando e transformando em Array na variável
$dados_comidas = json_decode(file_get_contents("comida.json"), true);

// Variável para guardar o que tem na posição enviada pelo link
$comida_especifica = $_GET['comida'] ?? null; 

// Saída da API
switch($comida_especifica){
    // Casos de comidas salgadas
    case "Parmegiana de Frango":
        $comida = $dados_comidas['comidas']['Parmegiana de Frango'];
        echo json_encode($comida);
        break;

    case "Pizza Marguerita":
        $comida = $dados_comidas['comidas']['Pizza Marguerita'];
        echo json_encode($comida);
        break;
    
    case "Feijoada":
        $comida = $dados_comidas['comidas']['Feijoada'];
        echo json_encode($comida);
        break;

    case "Lasanha":
        $comida = $dados_comidas['comidas']['Lasanha'];
        echo json_encode($comida);
        break;

    case "Sushi":
        $comida = $dados_comidas['comidas']['Sushi'];
        echo json_encode($comida);
        break;
        
    case "Tacos":
        $comida = $dados_comidas['comidas']['Tacos'];
        echo json_encode($comida);
        break;
        

    // Caso padrão: se nenhum nome de comida específico foi passado ou se o nome não existe
    default:
        echo json_encode($dados_comidas);
        break;
}


// Função cadastra nova comida
function cadastrar_comida($nome, $tipo, $origem, $nutrientes){
    global $dados_comidas; 

    $dados_comidas['comidas'][$nome]['Nome'] = $nome;
    $dados_comidas['comidas'][$nome]['Tipo'] = $tipo;
    $dados_comidas['comidas'][$nome]['Origem'] = $origem;
    $dados_comidas['comidas'][$nome]['Nutricao'] = $nutrientes; 

    if(false){
        salvar_dados($dados_comidas);
    }
}

function salvar_dados($variavel){
// Salvar dados no arquivo JSON
    file_put_contents('comida.json', json_encode($variavel, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

?>