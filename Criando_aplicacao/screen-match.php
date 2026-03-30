<?php

echo "Bem vindo (a) ao Screen Match!\n";

$anoLancamento = $argv[1] ?? 2022 ."\n"; //O operador de coalescência nula (??), introduzido no PHP 7, é um atalho sintático para verificar se uma variável existe e não é null. Ele retorna o valor da variável se ela existir e não for null; caso contrário, retorna um valor padrão especificado após o operador. No exemplo, se $argv[1] estiver definido e não for null, seu valor será usado como o ano de lançamento. Caso contrário, o ano de lançamento será definido como 2022.

$nomeFilme = "Se beber não case";
$nomeFilme = "Thor - Hagnarok";
$nomeFilme = "Top Gun - Maverick";

$somanota = 9;
$somanota += 6;
$somanota += 8;
$somanota += 7.5;
$somanota += 5;

$notaFilme = $somanota / 5;
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

echo "O gênero do filme é: $genero";


