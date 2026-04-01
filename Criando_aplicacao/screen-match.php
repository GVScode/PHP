<?php

echo "Bem vindo (a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento =  2022; 

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador ++) {
    $somaDeNotas += $argv[$contador];
}

$contador = 1;
while ($argc [$contador] != 0) {
    $somaDeNotas += $argv[$contador];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "nome do filme .....:$nomeFilme\n";
echo "Ano de lançamento .:$anoLancamento\n";
echo "Nota ..............:$notaFilme\n";
echo "Incluído no plano  ?$incluidoNoPlano\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento!\n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo!\n";
}
else{
    echo "Esse Não é um lançamento!\n";
}

// Abaixo a função match no PHP 8+ é uma expressão de controle que compara um valor (sujeito) contra múltiplos casos usando verificação estrita (===). Ela retorna o valor do primeiro caso correspondente, não precisa de break, e suporta um caso default. É mais concisa, segura e legível que o switch.

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor - Hagnarok" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: $genero\n";

echo $argc -1; //O $argc é uma variável global em PHP que contém o número de argumentos passados para o script, incluindo o nome do script. Ele é útil para verificar quantos argumentos foram fornecidos ao executar um script a partir da linha de comando.
