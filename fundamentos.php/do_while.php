<?php

$qtdnumero = 1;
$nome = readline("Digite seu nome: ");
echo "boa tarde $nome, seja muito bem vindo ao meu sistema:" . PHP_EOL;

do {
echo "O numero da vez é: $qtdnumero" . PHP_EOL;

$qtdnumero ++;
}while($qtdnumero <= 15);
