<?php
//Operadores de comparação
// <,>,<=,>= ou !===,== ou === 

$maior = 50 > 50;

echo $maior;
var_dump($maior);
echo '</br>';

$menor = 50< 50;
var_dump($menor);
echo '</br>';

$menorIgual = 50 <= 50;
var_dump($menorIgual);
echo '</br>';

$maiorIgual = 50 >= 50;
var_dump($maiorIgual);
echo '</br>';

$diferente = 50 != 50;
var_dump($diferente);
echo '</br>';

//verifica se o valor é diferente ou se o tipo é diferente
$diferente2 = '50' !== 50;
var_dump($diferente2);
echo '</br>';

//verifica se o valor é igual
$igual = '50' == 50;
var_dump($igual);
echo '</br>';

//verifica se o valor é igual ou o tipo é igual
$igual2 = '50' === 50;
var_dump($igual2);
echo '</br>';


//teste isolado
echo '</br>';
echo '</br>';
echo '</br>';

$testeIsolado = 50 === 50;
var_dump($testeIsolado);
if($testeIsolado){
    echo 'O valor é verdadeiro';
}else{
    echo 'O valor não é verdadeiro';
}
echo '</br>';
?>
