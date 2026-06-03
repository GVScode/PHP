<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Notas</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 40px auto; padding: 20px; background-color: #f4f4f9; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #218838; }
        .resultado { margin-top: 20px; padding: 15px; background-color: #e9ecef; border-radius: 4px; border-left: 5px solid #007bff; }
        .erro { color: red; margin-top: 10px; font-weight: bold; }
        .lista-notas { margin-top: 10px; font-size: 0.9em; color: #555; }
    </style>
</head>
<body>

    <h2>Informe 5 Notas</h2>

    <form method="POST" action="">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="form-group">
                <label for="nota<?php echo $i; ?>">Nota <?php echo $i; ?>:</label>
                <input type="number" step="0.1" name="notas[]" id="nota<?php echo $i; ?>" required placeholder="Ex: 8.5">
            </div>
        <?php endfor; ?>
        
        <button type="submit">Analisar Notas</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pega o array de notas enviado pelo formulário
        $notas = $_POST['notas'] ?? [];

        // Validação: garante que temos exatamente 5 elementos
        if (count($notas) === 5) {
            $notasValidas = [];
            $todasValidas = true;

            // Converte as entradas para números (float) e valida
            foreach ($notas as $index => $nota) {
                if ($nota === '' || !is_numeric($nota)) {
                    $todasValidas = false;
                    break;
                }
                $notasValidas[] = (float)$nota;
            }

            if ($todasValidas) {
                // Encontra a maior e a menor nota
                $maiorNota = max($notasValidas);
                $menorNota = min($notasValidas);

                // array_search retorna o índice do array (que começa em 0).
                // Somamos 1 para exibir a posição de forma humana (1ª, 2ª, 3ª...).
                // Obs: Se houver notas repetidas, ele retorna a posição da primeira ocorrência.
                $posicaoMaior = array_search($maiorNota, $notasValidas) + 1;
                $posicaoMenor = array_search($menorNota, $notasValidas) + 1;

                // Exibe o resultado
                echo "<div class='resultado'>";
                echo "<h3>Resultado da Análise:</h3>";
                
                // Exibe as notas digitadas para conferência
                echo "<div class='lista-notas'>";
                echo "Notas informadas: " . implode(", ", $notasValidas);
                echo "</div><br>";

                echo "<p><strong>Maior nota:</strong> " . number_format($maiorNota, 1, ',', '.') . " (na " . $posicaoMaior . "ª posição)</p>";
                echo "<p><strong>Menor nota:</strong> " . number_format($menorNota, 1, ',', '.') . " (na " . $posicaoMenor . "ª posição)</p>";
                echo "</div>";
            } else {
                echo "<p class='erro'>Erro: Por favor, preencha todos os campos com valores numéricos válidos.</p>";
            }
        } else {
            echo "<p class='erro'>Erro: É necessário enviar exatamente 5 notas.</p>";
        }
    }
    ?>

</body>
</html>