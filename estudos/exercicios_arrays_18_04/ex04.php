<?php

//Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha

$arquivo = fopen('teste.txt', 'r');
$primeiraLinha = fgets($arquivo);
fclose($arquivo);