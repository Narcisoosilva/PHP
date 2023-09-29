<?php
//Cada tarefa deve ter um título, uma descrição e um dado de vencimento. 

$tarefas = [];

while (true) {
    // Menu principal
    echo "1. Cadastrar Tarefas\n";
    echo "2. Listar Tarefas\n";
    echo "3. Sair\n";
    echo "Digite sua opção: ";
    
    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case 1:
            echo "Digite o titulo da tarefa.";
            $titulo = trim(fgets(STDIN));

            echo "Digite a descrição da tarefa.";
            $desc = trim(fgets(STDIN));

            echo "Digite data da tarefa (Exemplo: 01-01-23).";
            $data = trim(fgets(STDIN));

            $tarefas[] = [
                "titulo" => $titulo,
                "descricao" => $desc,
                "due_date" => new DateTime($data),
            ];
            echo "Tarefa cadastrada com sucesso!\n";
            break;
        case 2:
            // Listar Tarefas
            echo str_repeat("=", 40) . "\n";
            echo str_pad("titulo", 10) . str_pad("descricao", 15) . "vencimento\n";
            echo str_repeat("=", 40) . "\n";

            foreach ($tarefas as $tarefa) {
                echo str_pad($tarefa['titulo'], 10) . 
                     str_pad($tarefa['descricao'], 15) . 
                     $tarefa['due_date']->format("d/m/Y"). "\n";
            }

            echo str_repeat("=", 40) . "\n";
            break;
        case 3:
            exit("Obrigado por usar o programa!\n");
        
        default:
        echo "Opção inválida.\n";
            break;
    }
}