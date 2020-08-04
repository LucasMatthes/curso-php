<div class="titulo">Recursividade</div>

<?php

function somaUmaAte($numero) {
    $soma = 0;
    for(; $numero >= 1; $numero--){
        $soma += $numero;
    }
    return $soma;
}

echo somaUmaAte(10);

echo '<br>';

function somaUmaAte1($numero) {
    $soma = 0;
    for($i=0; $i <= $numero; $i++){
        $soma += $i;
    }
    return $soma;
}

echo somaUmaAte1(10);

echo '<br>';

function somaRecursivaUmAte($numero) {
    //condição de parada
    if($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}


echo somaRecursivaUmAte(10);

echo '<br>';

function somaRecursivaUmAte1($numero) {
    return$numero === 1 ? 1 : $numero + somaRecursivaUmAte1($numero - 1);
}


echo somaRecursivaUmAte1(10);

echo '<br>';

echo 'Fatorial';

echo '<br>';

function somaRecursivaFatorial($numero) {
    //condição de parada
    if($numero === 1) {
        return 1;
    }
    return $numero * somaRecursivaFatorial($numero - 1);
}


echo somaRecursivaFatorial(10);
