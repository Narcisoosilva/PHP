/* Conversor de Temperatura :

//Peça ao usuário para inserir uma temperatura em Celsius.
//Converta essa temperatura para Fahrenheit.
//Exibe a temperatura original em Celsius e a convertida em Fahrenheit.
Fórmula de conversão : ( F = C \times \frac{9}{5} + 32 )
*/

<?php

echo "Digite uma temperatura em Celsius: \n";
$celsius = fgets(STDIN);

$fahrenheit = ($celsius * 1.8) + 32;

echo "A temperatura em Celsius foi {$celsius}, e temperatura em Fahrenheit foi {$fahrenheit}.";
