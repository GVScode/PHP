<?php

function exibeMensagemLancamento($ano) {
    if ($ano > 2022) {
    echo "Esse filme é um lançamento!\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
    echo "Esse filme ainda é novo!\n";
    }else{
    echo "Esse Não é um lançamento!\n";
    }
}

function incluidoPlano($planoPrime, $anoLancamento) {
    return $planoPrime || $anoLancamento < 2020;
}


echo "Bem vindo (a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento =  2022; 

$quantidadeDeNotas = $argc - 1 ;
$notas = [];

for ($contador = 1; $contador < $argc; $contador ++) {
    $notas[] = (float)$argv[$contador];
}

$somaDeNotas = 0;
foreach ($notas as $nota) {
    $somaDeNotas += $nota;
}


$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoPlano($planoPrime, $anoLancamento) ? "Sim" : "Não";

echo "nome do filme .....:$nomeFilme\n";
echo "Ano de lançamento .:$anoLancamento\n";
echo "Nota ..............:$notaFilme\n";
echo "Incluído no plano  ?$incluidoNoPlano\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor - Hagnarok" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: $genero\n";

$filme = [
"nome" =>  "THOR - HAGNAROK",
"ano" => 2021,
"nota" => 7.8,
"genero" => "Super-herói",
];

echo $filme["ano"];    

