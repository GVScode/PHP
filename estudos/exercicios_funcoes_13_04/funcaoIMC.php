<?php

$alturaEmMetros = 1.80;
$pesoEmQuilos = 95.00;

function calculaImc(float $alturaEmMetros, float $pesoEmQuilos): float
{
    return $pesoEmQuilos / $alturaEmMetros ** 2;
}
echo calculaImc ($alturaEmMetros, $pesoEmQuilos);
?>
