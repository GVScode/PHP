<?php

echo "Digite um número para ver a tabuada: ";
$numero = (int) fgets(STDIN);

for ($i = 1; $i <= 10; $i ++) {
$resultado = $numero * $i;
echo "$numero x $i = $resultado" . PHP_EOL; 
}

