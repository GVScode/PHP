<?php

$idade = 16;
$numeroDePessoas = 2;


echo "Aqui só pode entrar quem tem mais de 18 anos ou"; 
echo "a partir de 16 anos acompanhado" . PHP_EOL;



if ($idade >= 18)  {
    echo "Muito bem, você tem $idade anos," .PHP_EOL;
    echo"Pode entrar sozinho!";

    }else{
        if ($idade >= 16 && $$numeroDePessoas > 1)  {
            echo "Você tem $idadde anos está acompanhado(a), então pode entrar.";
        }else{
            echo "Voce só tem $idade anos e está desacompanhado, não pode entrar  ";
        }
 }

echo PHP_EOL;
echo "Adeus!";