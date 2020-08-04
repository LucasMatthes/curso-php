<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Lucas",
    "idade" => 21
];

$dados2 = [
    "naturalidade" => "São Paulo"
];

$dados2["endereco"] = "Rua A"; // adicionar diretamente uma informação no array

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // is_array serve para ver se é um array ou não, se for ele retorna 1
echo '<br>' . count($dadosCompletos); // count mostra quantos elementos tem no array, nesse caso são 3

echo '<br>'; 
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]"; // array_rand é para mostrar dados aleatorios contidos no array

echo '<br>';
echo "{$dadosCompletos['nome']}";
echo '<br>';
echo "${dadosCompletos['idade']}";

unset($dadosCompletos["nome"]); // unset serve para excluir alguma informação do array
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos); // quando utiliza no array todo ele fica vazio 
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
echo '<br>';
$decimais = $pares + $impares; // quando é somado assim ele sempre vai mostrar o primeiro array a ser somado 
print_r($decimais);

$decimais = array_merge($pares, $impares); // array-merge une os dois arrays mas não ordena ele
echo '<br>';
print_r($decimais);

sort($decimais); //a função sort ordena um array
echo '<br>';
print_r($decimais);



