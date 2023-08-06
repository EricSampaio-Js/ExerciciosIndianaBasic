<!-- 3- Crie um script em PHP crie dois vetores de 10 posições preenchidos com valores aleatórios.
Faça a soma dos elementos de mesmo índice, colocando o resultado em um terceiro vetor.
Imprima os três vetores, um após o outro. Obs: Utilize um fo -->

<?php

$preencherValorAleatorio = function($arr){
    for($indice=0; $indice < 10; $indice++){
        $arr[$indice] = rand(0, 10);
    }
    return $arr;
};

$somaVetores = function($num1,$num2) use ( &$resulSomaArrays) {
    for($indice=0; $indice < 10; $indice++)
        $resulSomaArrays[$indice] = $num1[$indice] +  $num2[$indice];
};


$num1 = [];
$num2 = [];
$resulSomaArrays = [];

$num1 = $preencherValorAleatorio($num1);
$num2 = $preencherValorAleatorio($num2);
$somaVetores($num1,$num2);



echo'<pre>';
print_r($num1);
echo'</pre>';

echo'<pre>';
print_r($num2);
echo'</pre>';

echo'<pre>';
print_r( $resulSomaArrays);
echo'</pre>';







?>