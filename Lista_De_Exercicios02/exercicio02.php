<!-- 2- Crie um script em PHP que crie um vetor de 5 elementos inteiros com valores aleatórios,
entre 0 e 10. Encontre e mostre o menor elemento e sua posição no vetor. -->


<?php

$num =  array_fill(0, 5, null);
foreach ($num as $indice => $valor){
    $num[$indice] = mt_rand(0, 10);
}

$menorValor = min($num);
$posicao = array_search($menorValor,$num);

echo "o Menor valor e $menorValor e a sua posicao é $posicao";
 
echo'<pre>';
print_r($num);
echo'</pre>';

?>