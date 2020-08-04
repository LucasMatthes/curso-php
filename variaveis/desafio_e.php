<div class="titulo">Desafio variável</div>

<?php

$a1 = (((3 + 2) * 6) * ((3 + 2) * 6)) / (3 * 2);

echo $a1;

echo '<br>';

$b1 = (((1 -5) * (2 - 7)) / 2) * (((1 -5) * (2 - 7)) / 2);

echo $b1;

echo '<br>';

$resp = (($a1 - $b1) * ($a1 - $b1) * ($a1 - $b1)) / (10 * 10 * 10);

echo "Resposta da equação: " . $resp;

