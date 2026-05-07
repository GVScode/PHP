<?php

declare(strict_types=1);

/**
 * Remove qualquer caractere que não seja número
 */
function apenasNumeros(string $valor): string {
    return preg_replace('/[^0-9]/', '', $valor);
}

/**
 * Validação matemática de CPF
 * @return bool
 */
function validarCPF(string $cpf): bool {
    $cpf = apenasNumeros($cpf);

    // CPF deve ter exatamente 11 dígitos
    if (strlen($cpf) !== 11) {
        return false;
    }

    // Rejeita CPFs com todos os dígitos iguais (ex: 111.111.111-11)
    if (preg_match('/^(\d)\1{10}$/', $cpf)) {
        return false;
    }

    // Cálculo do 1º dígito verificador
    $soma = 0;
    for ($i = 0; $i < 9; $i++) {
        $soma += (int)$cpf[$i] * (10 - $i);
    }
    $resto = $soma % 11;
    $digito1 = ($resto < 2) ? 0 : (11 - $resto);

    if ($digito1 !== (int)$cpf[9]) {
        return false;
    }

    // Cálculo do 2º dígito verificador
    $soma = 0;
    for ($i = 0; $i < 10; $i++) {
        $soma += (int)$cpf[$i] * (11 - $i);
    }
    $resto = $soma % 11;
    $digito2 = ($resto < 2) ? 0 : (11 - $resto);

    return $digito2 === (int)$cpf[10];
}

/**
 * Validação matemática de CNPJ
 * @return bool
 */
function validarCNPJ(string $cnpj): bool {
    $cnpj = apenasNumeros($cnpj);

    // CNPJ deve ter exatamente 14 dígitos
    if (strlen($cnpj) !== 14) {
        return false;
    }

    // Rejeita CNPJs com todos os dígitos iguais
    if (preg_match('/^(\d)\1{13}$/', $cnpj)) {
        return false;
    }

    // Pesos oficiais para o 1º dígito
    $pesos1 = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
    $soma = 0;
    for ($i = 0; $i < 12; $i++) {
        $soma += (int)$cnpj[$i] * $pesos1[$i];
    }
    $resto = $soma % 11;
    $digito1 = ($resto < 2) ? 0 : (11 - $resto);

    if ($digito1 !== (int)$cnpj[12]) {
        return false;
    }

    // Pesos oficiais para o 2º dígito
    $pesos2 = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
    $soma = 0;
    for ($i = 0; $i < 13; $i++) {
        $soma += (int)$cnpj[$i] * $pesos2[$i];
    }
    $resto = $soma % 11;
    $digito2 = ($resto < 2) ? 0 : (11 - $resto);

    return $digito2 === (int)$cnpj[13];
}

/**
 * Validação unificada: detecta automaticamente se é CPF ou CNPJ
 */
function validarDocumento(string $documento): bool {
    $doc = apenasNumeros($documento);
    $tamanho = strlen($doc);

    return match ($tamanho) {
        11 => validarCPF($doc),
        14 => validarCNPJ($doc),
        default => false,
    };
}

// ==========================
// EXEMPLO DE USO
// ==========================
$documentosTeste = [
    '529.982.247-25',     // ✅ CPF Válido
    '111.111.111-11',     // ❌ CPF Inválido (dígitos repetidos)
    '33683111000107',     // ✅ CNPJ Válido
    '00000000000191',     // ❌ CNPJ Inválido (dígitos repetidos)
    '123',                // ❌ Tamanho inválido
];

foreach ($documentosTeste as $doc) {
    $tipo = match (strlen(apenasNumeros($doc))) {
        11 => 'CPF',
        14 => 'CNPJ',
        default => 'Desconhecido'
    };
    
    $status = validarDocumento($doc) ? 'Válido' : 'Inválido';
    echo "[{$tipo}] {$doc} → {$status}" . PHP_EOL;
}