<div class="titulo">Funções e Escopo</div>

<?php

function imprimirValor() {
    echo "Olá!<br>";
    echo "Ate a proxima!<br>";
}

imprimirValor();
echo '<br>';
imprimirValor();
echo '<br>';

$variavel = 1;

function tentarMudarValor() {
    $variavel = 2;
    echo "Valor dentro da função tentarMudarValor: $variavel<br> ";
}

echo "Valor antes da função tentarMudarValor: $variavel<br>";
tentarMudarValor();
echo "Valor depois da função tentarMudarValor: $variavel<br>";

echo '<br>';

function MudarValor() {
    global $variavel;
    $variavel = 3;
    echo "Valor dentro da função MudarValor: $variavel<br> ";
}

echo "Valor antes da função MudarValor: $variavel<br>";
MudarValor();
echo "Valor depois da função MudarValor: $variavel<br>";


