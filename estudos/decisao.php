<?php

$idade = 18;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou";
echo "a partir de 16 anos acompanhado";

if ($idade >=18){
    echo "você tem $idade anos, pode entrar sozinho!";
}else{
    echo "você tem $idade anos, não pode entrar sozinho. ";
}
echo PHP_EOL;
echo "Adeus!";