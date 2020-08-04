<div class="titulo">Multi</div>

<?php
$dados = [
    [
        "nome" => "Lucas",
        "idade" => 21,
        "naturalidade" => "São Pauloa"
    ],
    [
        "nome" => "Lara",
        "idade" => 21,
        "naturalidade" => "São Paulo"
    ]
];
print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Lincoln",
    "idade" => 22,
    "naturalidade" => "Minas Gerais"
];
echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "Rafael";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);
echo '<br>';
var_dump($dados[1]);