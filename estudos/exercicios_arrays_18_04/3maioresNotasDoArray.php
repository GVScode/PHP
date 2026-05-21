<?php

//Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.


$arrayNotas = [5.5, 7.8, 9.0, 6.3, 8.2, 4.0, 10.0];
rsort($arrayNotas);

echo "As 3 maiores notas são: " . $arrayNotas[0] . ", " . $arrayNotas[1] . ", " . $arrayNotas[2] . ".";

var_dump($arrayNotas);