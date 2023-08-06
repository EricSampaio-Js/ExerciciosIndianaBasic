<!-- 4- Seu salário atual é de R$5.000,00. O do seu colega é de R$2.500,00. Suponha que você
tenha 10% de aumento todo ano e seu colega 20%. Crie um script que calcula em quantos anos
seu colega irá passar a ganhar mais que você. -->
<?php
$sal1 = 5000;
$sal2 = 2500;
$anos = 0;

$calcSalarioAumento = fn($salario,$aumento) =>(
    $salario += ($salario * $aumento) / 100
);


while($sal2 < $sal1){
    $sal1 = $calcSalarioAumento($sal1,10);
    $sal2 = $calcSalarioAumento($sal2,20);
    
    // echo 'salario 1 '. $sal1 .'<br>';
    // echo 'salario 2 '. $sal2.'<br>';
    $anos++;
}

echo "Em $anos anos o seu Colega utrapassára o seu salario..kkkkkk " ;





?>