<div class="titulo">Argumento padrão</div>

<?php

function saudação($nome= 'Senhor(a)', $sobrenome= 'Cliente') {
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudação();
echo saudação('Lucas', 'Matthes');
echo saudação(NULL);
echo saudação(null, NULL);

function anotarPedido($comida, $bebida='Água') {
    return "Para comer: $comida<br> Para beber: $bebida<br>";
}

echo anotarPedido('Pizza', 'Refrigerante');
echo '<br>';
echo anotarPedido('Hamburguer');