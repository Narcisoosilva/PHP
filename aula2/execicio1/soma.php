<?php

echo("digite seu nome\n" ); 
$nome = fgets(STDIN);

echo("digite seu nome do produto\n" ); 
$produto = fgets(STDIN);

echo("digite seu valor do {$produto}\n" ); 
$valor = fgets(STDIN);

echo("digite quantidade \n" ); 
$quantidade = fgets(STDIN);

$compra = $valor * $quantidade;

echo("{$nome} valor da sua compra foi:\n" ) . $compra;