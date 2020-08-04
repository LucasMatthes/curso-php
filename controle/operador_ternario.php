<div class="titulo">Operador Ternario</div>

<?php
$idade = 21;
$status;

if($idade >= 18) {
    $status = "Maior de idade -> $idade anos";
} else {
    $status = "Menor de idade -> $idade anos";
}

echo "$status<br>";

$idade = 17;

$status = $idade >= 18 ? "Maior de idade -> $idade anos" : "Menor de idade -> $idade anos";

echo "$status";