<?php

echo "Digite uma temperatura em Fahrenheit: \n";

$fahrenheit = fgets(STDIN);

$celsius = ($fahrenheit - 32) / 1.8;

echo "A temperatura em Fahrenheit foi {$fahrenheit}, e temperatura em Celsius foi {$celsius}.";