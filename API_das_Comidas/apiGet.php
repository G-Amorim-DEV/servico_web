<?php

/* Estruturando uma API */

// Cabeçalho da API
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {

    case "GET":
        metodoGET();
        break;

    case "POST":
        // futuramente aqui chamaremos metodoPOST() se quiser cadastrar
        break;

    default:
        echo json_encode(["erro" => "Método usado não foi identificado"], JSON_UNESCAPED_UNICODE);
        break;
}


// Sistema do Serviço Web
function metodoGET() {
    // Leitura do arquivo JSON (comida.json) e armazenando e transformando em Array na variável
    $dados_comidas = json_decode(file_get_contents("comida.json"), true);

    $comida_especifica = $_GET['comida'] ?? null;
    $info_solicitada = $_GET['info'] ?? null;

    // Saída da API
    if ($comida_especifica && isset($dados_comidas['comidas'][$comida_especifica])) {

        $comida = $dados_comidas['comidas'][$comida_especifica];

        switch ($info_solicitada) {
            case "nome":
                if (isset($comida['Nome'])) {
                    echo json_encode(['Nome' => $comida['Nome']], JSON_UNESCAPED_UNICODE);
                } else {
                    echo json_encode([
                        'erro' => "Campo 'Nome' não encontrado para {$comida_especifica}.",
                        'dados' => $comida
                    ], JSON_UNESCAPED_UNICODE);
                }
                break;

            case "tipo":
                if (isset($comida['Tipo'])) {
                    echo json_encode(['Tipo' => $comida['Tipo']], JSON_UNESCAPED_UNICODE);
                } else {
                    echo json_encode([
                        'erro' => "Campo 'Tipo' não encontrado para {$comida_especifica}.",
                        'dados' => $comida
                    ], JSON_UNESCAPED_UNICODE);
                }
                break;

            case "ingredientes":
                if (isset($comida['Ingredientes'])) {
                    echo json_encode(['Ingredientes' => $comida['Ingredientes']], JSON_UNESCAPED_UNICODE);
                } else {
                    echo json_encode([
                        'erro' => "Campo 'Ingredientes' não encontrado para {$comida_especifica}.",
                        'dados' => $comida
                    ], JSON_UNESCAPED_UNICODE);
                }
                break;

            case "origem":
                $resposta_origem = [
                    'Origem' => $comida['Origem'] ?? 'Não especificado',
                ];
                echo json_encode($resposta_origem, JSON_UNESCAPED_UNICODE);
                break;

            case "nutricao":
                if (isset($comida['Nutricao'])) {
                    echo json_encode(['Nutricao' => $comida['Nutricao']], JSON_UNESCAPED_UNICODE);
                } else {
                    echo json_encode([
                        'erro' => "Campo 'Nutricao' não encontrado para {$comida_especifica}.",
                        'dados' => $comida
                    ], JSON_UNESCAPED_UNICODE);
                }
                break;

            case "tudo":
            default:
                echo json_encode($comida, JSON_UNESCAPED_UNICODE);
                break;
        }

    } else {
        // Caso a comida não exista, exibe a lista completa
        if ($comida_especifica) {
            echo json_encode([
                'erro' => "Comida '{$comida_especifica}' não encontrada. Exibindo lista completa:",
                'todas_comidas' => $dados_comidas['comidas']
            ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        } else {
            echo json_encode($dados_comidas, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }
    }
}


// Função para cadastrar uma nova comida (ainda não usada)
function cadastrar_comida($nome, $tipo, $ingredientes, $origem, $nutrientes) {
    // Carrega dados atuais, adiciona a nova comida e salva
    $dados_comidas = json_decode(file_get_contents("comida.json"), true);
    $dados_comidas['comidas'][$nome]['Nome'] = $nome;
    $dados_comidas['comidas'][$nome]['Tipo'] = $tipo;
    $dados_comidas['comidas'][$nome]['Ingredientes'] = $ingredientes;
    $dados_comidas['comidas'][$nome]['Origem'] = $origem;
    $dados_comidas['comidas'][$nome]['Nutricao'] = $nutrientes;

    if (false) { // mudar para true quando quiser testar o salvamento
        salvar_dados($dados_comidas);
    }
}


// Função auxiliar para salvar o arquivo JSON
function salvar_dados($variavel) {
    file_put_contents('comida.json', json_encode($variavel, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

?>