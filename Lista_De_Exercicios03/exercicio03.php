<!-- 3- Crie uma função em PHP que calcule e imprima o salário reajustado de um funcionário
de acordo com a seguinte regra:
• salários até R$ 3.000,00 , reajuste de 50%
• salários de R$ 3.000,00 ou mais, reajuste de 30% -->


<?php

$salario = 4000;

$reajusteSalario = function($salario){
   $salario += ($salario <= 3000) ? ($salario * 50) / 100 : ($salario * 30) / 100;
   echo $salario;
};

$reajusteSalario($salario);

?>


