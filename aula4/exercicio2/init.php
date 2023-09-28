<?php
$opcao = 0;


do {
    echo ("========= (Menu) ========= \n");
    echo ("Escolha uma das opções abaixo:\n");
    echo ("1 - Cadastrar Aluno.\n");
    echo ("2 - Alterar Aluno.\n");
    echo ("3 - Excluir Aluno.\n");
    echo ("4 - Mostrar todos os Alunos.\n");
    echo ("5 - Sair\n");
    
    $resultado = fgets(STDIN);

    switch ($resultado) {
        case 1:
            echo  "Aluno Cadastrado\n";
            break;
        case 2:
            echo  "Alterar Aluno\n";
            break;
        case 3:
            echo  "Excluir Aluno\n";
            break;    
        case 4:
            echo  "Mostrar todos os Alunos\n";
            break;
       
        default:
        echo  "escolha uma opção valida\n";
    }

    if($resultado == 5) break;
} while (true);

