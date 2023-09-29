<?php

/*
  Catálogo de Livros:
  Desenvolva um programa de console onde o usuário possa registrar livros em uma biblioteca pessoal. Cada livro deve ter um título, autor, ano de publicação e um indicador se ele já foi lido ou não. O programa deve permitir ao usuário listar todos os livros, listar apenas os livros não lidos e marcar um livro como lido.
 */

 
$biblioteca_pessoal = [];

while (true) {
    // Menu principal
    echo "1. Cadastrar livros\n";
    echo "2. Listar todos os livros\n";
    echo "3. listar apenas os livros não lidos\n";
    echo "4. Sair\n";
    echo "Digite sua opção: ";
    
    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case 1:
            echo "Digite o titulo do livro.";
            $titulo = trim(fgets(STDIN));

            echo "Digite o nome autor.";
            $autor = trim(fgets(STDIN));

            echo "Digite data de publicação (Exemplo: 01-01-23).";
            $data = trim(fgets(STDIN));

            echo "Voce já leu este livro (Exemplo: sim ou nao).";
            $lido = trim(fgets(STDIN));

            $biblioteca_pessoal[] = [
                "titulo" => $titulo,
                "autor" => $autor,
                "publicação" => $data,
                "lido" => $lido,
            ];
            echo "Tarefa cadastrada com sucesso!\n";
            break;
        case 2:
            // Listar Livros
            echo str_repeat("=", 40) . "\n";
            echo str_pad("titulo", 10) . str_pad("autor", 15) . "ano de publicação  " . "     voce ja leu \n";
            echo str_repeat("=", 40) . "\n";

            foreach ($biblioteca_pessoal as $livro) {
                echo str_pad($livro['titulo'], 10) . 
                     str_pad($livro['autor'], 15) . 
                     $livro['publicação'] . 
                     $livro['lido'] ."\n";
            }

            echo str_repeat("=", 40) . "\n";
            break;
        case 3:
            // Listar Livros não lidos
            echo str_repeat("=", 40) . "\n";
            echo str_pad("titulo", 10) . str_pad("autor", 15) . "ano de publicação" . "voce ja leu \n";
            echo str_repeat("=", 40) . "\n";

            foreach ($biblioteca_pessoal as $livro) {
                $valor = $livro['lido'];
                if($valor == "nao"){
                    echo str_pad($livro['titulo'], 10) . 
                    str_pad($livro['autor'], 15) . 
                    $livro['publicação'] .
                    $livro['lido'] ."\n";
                }
            
            }

            echo str_repeat("=", 40) . "\n";
            break;
        case 4:
            exit("Obrigado por usar o programa!\n");
        
        default:
        echo "Opção inválida.\n";
            break;
    }
}