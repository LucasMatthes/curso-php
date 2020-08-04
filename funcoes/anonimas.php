<div class="titulo">Anonimas</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 3) . '<br>';

echo '<br>';

function executar($c, $d, $op, $funcao) {
    $resultado = $funcao($c, $d);
    return "$c $op $d = $resultado<br>";
}

echo executar(2, 3, '+', $soma);

echo '<br>';

$subtracao = function ($a, $b) {
    return $a - $b;
};

echo executar(9, 3, '-', $subtracao);

echo '<br>';

$multplicacao = function ($a, $b) {
    return $a * $b;
};

echo executar(2, 3, '*', $multplicacao);

echo '<br>';

function divisao($a, $b) {
    return $a / $b;
}

echo executar(9, 3, '/', divisao);