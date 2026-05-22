<?php

//Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha

$caminho = 'teste.txt'; // ajuste conforme aonde o arquivo está

// Verifica se o arquivo existe
if (!file_exists($caminho)) {
    die("Arquivo não encontrado: $caminho");
}

// Tenta abrir o arquivo
$arquivo = fopen($caminho, 'r');
if ($arquivo === false) {
    die("Não foi possível abrir o arquivo: $caminho");
}

// Lê a primeira linha
$primeiraLinha = fgets($arquivo);

// Fecha o arquivo
fclose($arquivo);

// Mostra a linha lida (opcional)
echo "Primeira linha: $primeiraLinha\n";