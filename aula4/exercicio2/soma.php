<?php
//Soma dos Primeiros N Números
# Usando um loop, calcule e imprima a soma dos primeiros N números naturais, onde N é uma variável.

echo "Digite um número para realizar a soma:";
$valor = floatval(trim(fgets(STDIN)));
$soma = 0;

for ($i=1; $i <= $valor; $i++) { 
    $soma += $i;
    echo $i; 
}

echo  "\n" . "A soma de todos os números é: $soma.";