/*Calculadora de Área do Triângulo :

Peça ao usuário para inserir a base e a altura de um triângulo.
Calcule a área do triângulo.
Exiba a base, altura e área do triângulo.
Fórmula da área : ( \text{Área} = \frac{\text{base} \times \text{altura}}{2} )
*/

<?php

echo "Digite a base do triangulo.";
$base = fgets(STDIN);

echo "Digite a altura do triangulo.";
$altura = fgets(STDIN);

$area = ($base * $altura)/2;

echo "Os valores do triangulo foram: Base = {$base}, altura = {$altura} e a area do triangulo = {$area}.";