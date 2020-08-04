<div class="titulo">Desafiio Switsh</div>

<form action="#" method="post">
    <input type="text" name='param'>
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Minha</option>
        <option value="milha-km">Minha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

if(isset($_POST['conversao']) && isset($_POST['param'])) {
    $c = $_POST['conversao'];
    $p = $_POST['param'];

    if($c == "km-milha" ) {
        $p = $p * 0.62137;
        echo "Conversão: $p<br> Parametro: $c";
    } elseif($c == "milha-km") {
        $p = $p / 0.62137;
        echo "Conversão: $p<br> Parametro: $c";
    } elseif($c == "metro-km") {
        $p = $p / 1000; 
        echo "Conversão: $p<br> Parametro: $c";
    } elseif($c == "km-metro") {
        $p = $p * 1000;
        echo "Conversão: $p<br> Parametro: $c";
    }
}



