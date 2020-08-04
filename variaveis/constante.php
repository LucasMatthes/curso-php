<div class="titulo">Constante</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS; // não mostra como variavel usando o "$"
// TAXA_DE_JUROS = 2.5; não consegue atribuir novos valores 


const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
define('NOVISSEMA_TAXA', $valorVariavel); //usando "define" consegue atribuir valor de variavel 
//const NOVISSIMA_TAXA = $valorVariavel; não funciona atribuindo variavel com "const" so com "define" como feito acima
//const NOVA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSEMA_TAXA;
