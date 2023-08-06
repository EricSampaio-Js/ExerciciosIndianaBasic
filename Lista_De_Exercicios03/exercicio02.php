<!-- 2- Crie uma função que receba 2 notas ($n1 e $n2) de um aluno. Essa função deve
retornar um booleano indicando se o aluno foi aprovado. Para ser aprovado, a soma das
notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7. -->

<?php

$verificAprovacao = function($n1,$n2){
    $calcMediaNotas = ($n1 + $n2);
    $verificResultNotas = $calcMediaNotas >= 19 && $n1 > 7 && $n2 >7;

    return ($verificResultNotas) ? true : false; 
};

$n1= 10;
$n2= 9;

echo ($verificAprovacao($n1,$n2)) ? "APROVADO" : "REPROVADO";



?>