
<?php

$nome;
$produto;
$valor_produto;
$quantidade;
$resultado;
$pagamento;


echo("digite seu nome\n" ); 
$nome = fgets(STDIN);

echo("digite seu nome do produto\n" ); 
$produto = fgets(STDIN);

echo("digite valor do {$produto}\n" ); 
$valor_produto = fgets(STDIN);

echo("digite quantidade do {$produto}\n" ); 
$quantidade = fgets(STDIN);

$resultado = $valor_produto * $quantidade;

echo("{$nome} valor da sua compra foi: ". $resultado ."\n");

echo("{$nome} digite o valor a pagar. ");
$pagamento = fgets(STDIN);

if ($pagamento >= $resultado ) {
    echo("Obrigado, pelo seu pagamento,". "\n  Seu troco é ".($pagamento - $resultado) );
} else {
    echo("Desculpe , mais falta o valor de ".($pagamento - $resultado) );
}
