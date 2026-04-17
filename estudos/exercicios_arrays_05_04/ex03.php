<?php
/* 3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
*/
$contaBancaria = [
    "titular" => "João Silva",
    "saldo" => 1500.75
];
echo "Titular da conta: " . $contaBancaria["titular"] . "\n";
echo "Saldo da conta: R$ " . number_format($contaBancaria["saldo"], 2, ',', '.') . "\n";
