<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false
echo '<br>';
var_dump(111 == '111'); // true
var_dump(111 === '111'); // false
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo "<p class='divisao'>Relacionais do If/Else</p><hr>";
$idade = 60;
if($idade < 18) {
    echo "Menor de idade = $idade anos!<br>";
} elseif($idade < 60) {
    echo "Maior de idade = $idade anos!<br>";
} else {
    echo "Terceira idade = $idade anos!<br>";
}

echo "<p class='divisao'>Spaceship</p><hr>";
var_dump(5 <=> 3); // retorna 1
var_dump(5 <=> 5); // retorna 0
var_dump(3 <=> 5); // retorna -1

echo "<p class='divisao'>Valores podem se V ou F</p><hr>";
var_dump(!!5); // true  
var_dump(!!0); // false
var_dump(!!""); // false
var_dump(!!" "); // true

