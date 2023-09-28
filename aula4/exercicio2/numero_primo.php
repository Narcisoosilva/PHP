<?php
/*
Verificar Número Primo

Verifique se um número é primo.
Um número primo é aquele que é divisível apenas por 1 e por ele mesmo. Se o número for primo, 
imprima "O número é primo", caso contrário, "O número não é primo"
*/

echo "================================\n";
echo "==Verificação de Número Primo:==\n";
echo "================================\n";

echo "Digite um número para verificar: \n";
$valor = intval(trim(fgets(STDIN)));

$isPrimo = true;

if ($valor <= 1) {
    $isPrimo = false;
} else {
    for ($i = 2; $i <= sqrt($valor); $i++) {
        if ($valor % $i === 0) {
            $isPrimo = false;
            break;
        }
    }
}

if ($isPrimo) {
    echo "O número $valor é primo.\n";
} else {
    echo "O número $valor não é primo.\n";
}
