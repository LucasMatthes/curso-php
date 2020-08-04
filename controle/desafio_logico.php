<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php

echo "<p class='divisao'>Status...</p><hr>";

if(isset($_POST['t1']) && isset($_POST['t2'])) {

    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];

    if($t1 == 1 && $t2 == 1) {
        echo "TV 50' mais sorvete";
    } 
    elseif($t1 == 1 && $t2 == 0 || $t1 == 0 && $t2 == 1) {
        echo "TV 32' mais sorverte";
    } else {
        echo "Fica em casa é mais salvavel";
    }
}

