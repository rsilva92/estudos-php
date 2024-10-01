<?php
/**
aula de operadores aritiméticos
**/

$numero01 = 100;
$numero02 = 100;


//somar
$somar = $numero01 + $numero02;
echo '</br>';
echo $somar;

//subtrair
$subtrair = $numero01 - $numero02;
echo '</br>';
echo $subtrair;

//multiplicar
$multiplicar = $numero01 * $numero02;
echo '</br>';
echo $multiplicar;

//divisão
$divisao = $numero01 / $numero02;                 
echo '</br>';
echo $divisao;

//resto
$resto = $numero01 % $numero02;
echo '</br>';
echo $resto;


//precedência de operadores

$precedencia = $numero01 + $numero02 * 5;
echo '</br>';
echo 'precedência: '.$precedencia;

//segundo exemplo de precedência de operadores
$precedencia2 = ($numero01 + $numero02) * 5;
echo '</br>';
echo 'segundo exemplo de precedencia de operadores ' .$precedencia2;

?>