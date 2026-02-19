<?php

$idade = 16;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou";
echo " a partir de 16 anos acompanhado(a)" . PHP_EOL;

if ($idade >=18){
    echo "você tem $idade anos, pode entrar sozinho!";
}elseif ($idade >= 16 && $numeroDePessoas > 1){
    echo "você tem $idade anos, e está acompanhado(a), pode entrar. ";
}else{
    echo "você só tem $idade anos, e está sozinho, sai quente!";
     echo PHP_EOL . "É uma pena";
}
echo PHP_EOL;
echo "Adeus!";