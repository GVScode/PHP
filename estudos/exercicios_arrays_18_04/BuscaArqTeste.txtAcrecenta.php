<?php

//Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.

$nomeArquivo = 'teste.txt';
$novaFrase = "\nPHP é incrível!";

 // Abre o arquivo para escrita no final
$arquivo = fopen($nomeArquivo, 'a');
 // Escreve no arquivo
fwrite($arquivo, $novaFrase);
 // Fecha o arquivo
fclose($arquivo);