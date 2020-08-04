<div class="titulo">Valor vs Referncia</div>

<?php   
$variavel = 'valor inicial';
echo $variavel;
echo '<br>';
// Atribuição por valor
echo '<br>';
echo '"Atribuição por valor"';
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";
echo '<br>';

// Atribuição por referencia
echo '<br>';
echo '"Atribuição por referencia"';
echo "<br>$variavel";
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";