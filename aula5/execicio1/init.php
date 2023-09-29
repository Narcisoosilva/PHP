<?php
$pessoas_array = array();

echo ("===================================\n");
echo ("====(Cadastro de Profissionais)====\n");
echo ("===================================\n");
echo ("Quantos Profissionais voce quer cadastrar\n");

 
$qtd = fgets(STDIN);

 
for ($i=0; $i < $qtd; $i++) {

   

    echo  "Cadastrar Profissional\n";
    echo "=========================";
    echo  "Digite o Nome: \n";
    $array = $nome = trim(fgets(STDIN));

    echo  "Digite o seu Cargo: \n";
    $array = $cargo = trim(fgets(STDIN));

    echo  "Digite o seu Valor: \n";
    $array = $valor = trim(fgets(STDIN));

    echo  "Cadastro concluido\n";
    $array = array(
        "nome" => $nome,
        "cargo" => $cargo,
        "valor" => $valor
    );
    $pessoas_array[] = $array;
    
}

foreach ($pessoas_array as $pessoa) {
    echo "================================= \n";
    echo "=================================\n";
    echo " nome  ,    cargo,       valor\n";
    echo "=================================\n";
    echo "Nome: {$pessoa["nome"]}";
    echo "Idade: {$pessoa["cargo"]}";
    echo "Cidade: {$pessoa["valor"]}";
}






