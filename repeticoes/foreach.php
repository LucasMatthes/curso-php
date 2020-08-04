<div class="titulo">Foreach</div>

<?php

$array = [ 1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

foreach ($array as $semana) {
    echo "$semana <br>";
}


foreach ($array as $indice => $semana) {
    echo "$indice => $semana <br>";
}

echo "<hr>";

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $conteudo) {
    foreach ($conteudo as $letras) {
        echo "$letras ";
    }
    echo "<br>";
}

echo "<hr>";

$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as &$valor) {
    $valor *= 2;
    echo "$valor <br>";
}

print_r($numeros);