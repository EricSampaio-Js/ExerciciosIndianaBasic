<!-- 3- Termine o script abaixo. A variável $preco contém o valor da venda. Acrescente 12% ao
preço do produto, divida em 10 parcelas e mostre na tela o valor de cada parcela e o valor total
da compra. -->

<?php
$preco = 320;
$aumento = 12;
$valorParcelas = 0;

$preco += ($preco * $aumento) / 100;
$valorParcelas = $preco / 10 ;

echo "Valor das Parcelas em 10x: <br>";

for ($numeroDeParcelas = 1; $numeroDeParcelas < 11; $numeroDeParcelas++){
    echo "$numeroDeParcelas  parcela de R$ $valorParcelas sem juros <br>";
}

echo  "<br>  Valor Total da compra: R$ $preco " ;

?>