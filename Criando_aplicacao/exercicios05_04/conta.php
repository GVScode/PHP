<?php





$saldo = 1_000;
$titularConta = "Guilherme Varjão Santos";

echo "***************\n";
echo "Titular da conta: $titularConta\n";
echo "Saldo da conta: R$ $saldo\n";
echo "***************\n";


do{
echo "1. Consultar saldo\n";
echo "2. Depositar dinheiro\n";
echo "3. Sacar dinheiro\n";
echo "4. Sair\n"; 

$opcao = (int) fgets(STDIN);


switch ($opcao) {
    case 1:
        echo "***************\n";
        echo "Titular da conta: $titularConta\n";
        echo "Saldo da conta: R$ $saldo\n";
        echo "***************\n";
        break;
    case 2:
        echo "Digite o valor a ser depositado: \n";
        $valorDeposito = (float) fgets(STDIN);
        $saldo += $valorDeposito;
        echo "Depósito realizado. Novo saldo: R$ $saldo\n";
        break;
    case 3:
        echo "Digite o valor a ser sacado: \n";
        $valorSaque = (float) fgets(STDIN);
        if ($valorSaque > $saldo) {
            echo "Saldo insuficiente para realizar o saque.\n";
        } else {
            $saldo -= $valorSaque;
            echo "Saque realizado. Novo saldo: R$ $saldo\n";
        }
        break;
    case 4:
        echo "Saindo...\n";
        break;
    default:
        echo "Opção inválida. Por favor, escolha uma opção válida.\n";
}

}while ($opcao !== 4);