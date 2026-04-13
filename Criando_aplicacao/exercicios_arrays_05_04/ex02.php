<?php

/*2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.*/

$notas = [7.5, 8.0, 6.0, 9.0, 5.5];
foreach ($notas as $index => $nota) {
    $status = $nota >= 6.0 ? "Aprovado" : "Reprovado";
    echo "Nota do aluno $index: $nota - $status\n";
}

//

