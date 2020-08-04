<div class="titulo">Argumentos Variaveis</div>

<?php

function soma($a, $b) {
    return $a + $b;
}

echo soma(4, 8) . '<br>';
echo soma(5, 6, 3) . '<br>';

function somaCompleta(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(3, 6, 8) . '<br>';
echo somaCompleta(4, 8, 5, 2) . '<br>';

$array = [9, 5, 8];
echo somaCompleta(...$array);

function membros($titular, ...$dependantes) {
    echo "Titular: $titular <br>";
    foreach($dependantes as $dep) {
        echo "Dependentes: $dep<br>";
    }
}

echo '<br>';
echo membros('Lucas', 'Andre', 'Carlos', 'Junior');

echo '<br>';
echo membros('Lucas');