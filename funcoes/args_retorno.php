<div class="titulo">Argumentos e Retorno</div>

<?php

function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

echo '<br>';

function retornaNome($nome) {
    return "Bem vindo(a) {$nome}!";
}

echo '<br>', retornaNome('Lucas');
echo '<br>', retornaNome('Lara');

echo '<br>';

function soma($a, $b) {
    $result = $a + $b;
    return "valor da soma {$result}";
}

$x = 2;
$y = 9;
echo '<br>', soma(3, 7);
echo '<br>', soma($x, $y);

echo '<br>';

function tenteTrocarValor($a, $novoValor) {
    return $a = $novoValor;
}

$variavel = 1;
tenteTrocarValor($variavel, 3);
echo '<br>', $variavel;

echo '<br>';

function TrocarValor(&$a, $novoValor) {
    return $a = $novoValor;
}

TrocarValor($variavel, 5);
echo '<br>', $variavel;
