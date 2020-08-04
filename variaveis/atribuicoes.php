<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuição';

echo $title;
echo '<br>';
$numero = 10;
echo $numero;
echo '<br>';

$numero = $numero - 3;
echo $numero;
echo '<br>';

$numero = $numero + 1.5;
echo $numero;
echo '<br>';

$numero--;
--$numero;

echo $numero;

echo '<br>';

$numero++;
++$numero;

echo $numero;

echo '<br>';

$numero -= 5;

echo $numero;

echo '<br>';

$texto = 'Esse é um texto';
echo $texto;
echo '<br>';
$texto = $texto . ' qualquer';
echo $texto;
echo '<br>';
$texto .= ' de verdade !';
echo $texto;

$variavel_inexistente = 'valor existente';
echo $variavel_inexistente;
echo '<br>';
$valor = $variavel_inexistente ?? 'valor default';
echo $valor;