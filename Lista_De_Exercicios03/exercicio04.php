<!-- 4- Crie uma função em PHP que receba a altura e o peso de uma pessoa, calcule seu IMC de acordo com a
fórmula abaixo:
IMC = Peso dividido pela altura ao quadrado ( peso ÷ (altura²)).
A função deve retornar uma string (magreza, normal. sobrepeso ou obesidade) de acordo com a tabela abaixo: -->

<?php

function testando ($altura,$peso){
  $calcImc = $peso / ($altura**2);

    switch ($calcImc) {
        case ($calcImc < 18.5): return 'Magreza';break;
        case ($calcImc >= 18.5 && $calcImc < 24.9): return 'Normal';break;
        case ($calcImc >=24.9 && $calcImc < 30): return 'Sobrepeso'; break;        
        default: return 'Obesidade'; break;
    }
    
}

$altura = 1.85;
$peso = 120;
$imc = testando($altura,$peso);

echo "O estado do seu IMC é:  $imc" ;




?>