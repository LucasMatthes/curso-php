<div class="titulo">Palindromo</div>

<?php

function palindromo($palavra) {
    $ultimoTermo = strlen($palavra) - 1;
    for($i = 0; $i < $ultimoTermo; $i++) {
        if($palavra[$i] !== $palavra[$ultimoTermo - $i]) {
            return 'Não!';
        }
    }
    return 'Sim!';
}

echo palindromo('arara') . ' ';
echo palindromo('ana') . ' ';
echo palindromo('bola') . ' ';

echo '<br>';

function palindromoFacil($palavra) {
    return $palavra === strrev($palavra)? 'Sim!' : 'Não!';
}

echo palindromo('arara') . ' ';
echo palindromo('ana') . ' ';
echo palindromo('bola') . ' ';
