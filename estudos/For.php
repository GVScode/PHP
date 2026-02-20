<?php
$maior = PHP_INT_MIN;  // Inicializa com o menor valor possível
$menor = PHP_INT_MAX;  // Inicializa com o maior valor possível
$posmaior = 0;
$posmenor = 0;
$vetor = array();      // Declara o array corretamente

// Lê 15 números e armazena no vetor
for ($i = 0; $i < 15; $i++) {
    $vetor[$i] = (float) readline("Digite o " . ($i + 1) . "º número: ");
}

// Encontra o maior número e sua posição
for ($i = 0; $i < 15; $i++) {
    if ($vetor[$i] > $maior) {
        $maior = $vetor[$i];
        $posmaior = $i + 1;  // Posição começa em 1
    }
}

// Encontra o menor número e sua posição
for ($i = 0; $i < 15; $i++) {
    if ($vetor[$i] < $menor) {
        $menor = $vetor[$i];
        $posmenor = $i + 1;  // Posição começa em 1
    }
}
echo "O maior número é: $maior e se encontra na posição $posmaior" . PHP_EOL;
echo "O menor número é: $menor e se encontra na posição $posmenor" . PHP_EOL;
?>
