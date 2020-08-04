<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = [
    "Elza",
    "Rapunzel",
    "Branca de Neve",
    "Cinderela"
];

$indice = array_rand($nomes);
echo "<h1><center>$nomes[$indice]</center></h1>";