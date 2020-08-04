<div class="titulo">Usando Tipos</div>

<?php

function soma1($a, $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma1(4, 5) . '<br>';
echo soma1(4.7, 5.7) . '<br>';
echo soma1(4, '5dois') . '<br>';

echo '<br>';

function soma2(int $a, int $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma2(4, 5) . '<br>';
echo soma2(4.7, 5.7) . '<br>';
echo soma2(4, '5dois') . '<br>';

echo '<br>';

function soma3($a, float $b): int {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo soma3(4, 5) . '<br>';
echo soma3(4.7, 5.7) . '<br>';
echo soma3(4, '5dois') . '<br>';
