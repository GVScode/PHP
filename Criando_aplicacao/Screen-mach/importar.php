<?php

$caminhoDoArquivo = __DIR__ . "/filme.json";   
$conteudoDoArquivo = file_get_contents($caminhoDoArquivo);
$filme = json_decode($conteudoDoArquivo, true);
  
var_dump($filme);

