<div class="titulo">Operadores Logicos</div>

<?php
echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // NOT
echo "<p class='divisao'>Tabela verdade '&&' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

echo "<p class='divisao'>Tabela verdade 'AND' (E)</p><hr>";
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p class='divisao'>Tabela verdade '||' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo "<p class='divisao'>Tabela verdade 'OR' (OU)</p><hr>";
var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Tabela verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

echo "<p>Tabela verdade '!=' (OU Exclusivo)</p><hr>";
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo:</p><hr>";
$idade = 60;
$sexo = 'F';

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se Aposentar -> $sexo";
} elseif($ideda >= 65 && $sexo === 'M') {
    echo "Pode se Aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar mais um pouco...";
}

echo "<p class='divisao'>Exemplo 2:</p><hr>";
$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode aposentar -> $podeAposentar<br>";

?>
