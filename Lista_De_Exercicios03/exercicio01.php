<!-- 1- Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma.
Se o valor da soma for negativo a função deverá o valor 0. -->

<?php

$valor1=15;
$valor2=32;
$resultSoma=0;

$somaValores = function( $valor1,  $valor2){
    $soma = $valor1 + $valor2;
    return ($soma < 0) ? 0 : $soma;
};

$resultSoma = $somaValores($valor1,$valor2);

echo $resultSoma;





?>