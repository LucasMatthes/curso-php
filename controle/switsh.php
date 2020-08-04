<div class="titulo">Switsh</div>

<?php
echo "<p class='divisao'>IF ELSE:</p><hr>";
$categoria = 'Luxo';
$carro = '';
$preco = 0.0;

if($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} elseif ($categoria ==='suv') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobie';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: $precoFormatado</p><hr>";

echo "<p class='divisao'>Switsh:</p><hr>";
$categoria = 'luxo';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'suv':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobie';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: $precoFormatado</p><hr>";