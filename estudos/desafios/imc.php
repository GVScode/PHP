<?php

$peso = readline ("Digite seu peso: ");
$altura = readline("Digite sua altura: ");
$imc = $peso / ($altura ** 2);

echo "O IMC é: $imc" . PHP_EOL;

if ($imc < 18.5) {
   echo "Abaixo do peso" . PHP_EOL;
   
} elseif
 ($imc >= 18.5 && $imc < 25){  
    echo "Peso normal" . PHP_EOL;

} elseif
 ($imc >= 25 && $imc < 30) {                
    echo "Sobrepeso" . PHP_EOL;

} elseif
 ($imc >= 30 && $imc < 35) {
    echo "Obesidade grau 1" . PHP_EOL;
    
} elseif 
  ($imc >= 35 && $imc < 40) {
    echo "Obesidade grau 2" . PHP_EOL;

} else {
    echo "Obesidade grau 3" . PHP_EOL;
}


