<?php
/*
Tabuada

Escreva um programa que mostre a tabuada de multiplicação de um número.
Por exemplo, se a variável for 5, o programa deve imprimir a tabuada de multiplicação de 5 até 10x5.
*/
#system("clear");
#sleep(3);
echo "=============================\n";
echo "==Vamos calcular a Tabuada:==\n";
echo "=============================\n";

echo "Digite um número para calcular: \n";
$valor = floatval(trim(fgets(STDIN)));

for ($i=1; $i <= 10 ; $i++) { 
    $resultado = $valor* $i;
    echo "$valor X $i = $resultado \n";
}
