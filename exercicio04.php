<!-- - Termine o script abaixo, verificando se a variável $numero é par ou ímpar e exiba na tela a
mensagem “número par” ou “numero impar”. -->
<?php

$numero = 7;
$verifiqueImparPar = $numero % 7;
 
$impaPar =  ($verifiqueImparPar == 0) ? "número par" : "número impar";

echo "Esse número é: $impaPar";

?>