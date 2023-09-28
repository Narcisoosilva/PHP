<?php
echo "Digite um número para verificação ser é 'Par ou Impar'. ";
$numero = floatval(trim(fgets(STDIN)));

if (($numero % 2) ==0 ) {
    echo "O número $numero é par.";
} else {
    echo "O número $numero é impar.";
}
