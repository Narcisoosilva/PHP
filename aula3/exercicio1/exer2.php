<?php


echo ("========= (Menu) ========= ");
echo ("Escolha uma das opções abaixo:");
echo ("1 - Cadastrar Aluno.");
echo ("2 - Alterar Aluno.");
echo ("3 - Excluir Aluno.");
echo ("4 - Mostrar todos os Alunos.");
echo ("5 - Sair");
 
$resultado = fgets(STDIN);

switch ($resultado) {
    case 1:
        echo  "Aluno Cadastrado";
        break;
    case 2:
        echo  "Alterar Aluno";
        break;
    case 3:
        echo  "Excluir Aluno";
        break;    
    case 4:
        echo  "Mostrar todos os Alunos";
        break;
    default:
    echo  "Saindo, ate logo";
}