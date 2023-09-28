<?php
/*
Encontrar Fatorial

Calcule o fatorial de um número N.
O fatorial de um número é o produto de todos os inteiros positivos menores ou iguais a N. 
Por exemplo, fatorial de 5 (denotado como 5!) é 5x4x3x2x1 = 120.
*/

echo "================================\n";
echo "==      Número Fatorial      :==\n";
echo "================================\n";
/*
echo "Digite um número para verificar: \n";
$valor = floatval(trim(fgets(STDIN)));
$fatorial = 1;
$interacao = $valor;

for ($i= 0; $i <= $interacao ;  $interacao++) { 
    $fatorial *= $valor;
}

echo $fatorial;*/
echo "Digite um número para verificar: \n";
$valor = floatval(trim(fgets(STDIN)));
$fatorial = 1;

// Correção: O loop deve começar em 1 e não em 0, e a condição deve ser $i <= $valor
for ($i = 1; $i <= $valor; $i++) {
    $fatorial *= $i;
}

echo "O fatorial de $valor é $fatorial\n";