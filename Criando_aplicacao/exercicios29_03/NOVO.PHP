<?php
$notas = [5.0, 7.5, 8.0, 4.0, 9.0];
$pontosExtras = 0.5;

echo "Notas originais: " . implode(", ", $notas) . "\n";

// Laço for para percorrer e incrementar cada nota
for ($i = 0; $i < count($notas); $i++) {
    $notas[$i] += $pontosExtras; // Adiciona 0.5 a cada nota
}

echo "Notas com incremento: " . implode(", ", $notas);
?>
