<?php

/*Escreva uma função em PHP que receba dois numeros inteiros e uma string representando as operações 
matemáticas e retorne o resultado da operação*/

$numero1 = 250;
$numero2 = 200;
$operacao = "soma";

function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
 {
    return match($operacao){
    'soma' => $numero1 + $numero2,
    'subtração' => $numero1 - $numero2,
    'divisao' => $numero1 / $numero2,
    'multiplicação' => $numero1 * $numero2};
}

echo operacaoMatematica($numero1, $numero2, $operacao);
?>