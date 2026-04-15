<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
    echo "Esse filme é um lançamento!\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
    echo "Esse filme ainda é novo!\n";
    }else{
    echo "Esse Não é um lançamento!\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool {
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

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento) ? "Sim" : "Não";

echo "nome do filme .....:$nomeFilme\n";
echo "Nota do filme......:$notaFilme\n";
echo "Ano de lançamento .:$anoLancamento\n";
echo "Incluído no plano..?$incluidoNoPlano\n";

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

incluidoNoPlano("teste", "1998");

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
var_dump($menorNota);


var_dump ($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ":");
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));