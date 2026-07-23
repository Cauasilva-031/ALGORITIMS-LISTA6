<?php
/*Atividade 05 – Abastecimento
Um carro recebe combustível. Pelo menos uma vez é realizado o abastecimento
● Litros: rand(5,15).
● Continue conforme rand(0,1).
● Conte os abastecimentos.
● Some os litros abastecidos.
*/


$qtdAbastecimentos = 0;
$somaTotalDosLitros = 0;

do{

    $litros = rand(5,15);
    echo("litros: " . number_format($litros) . "<br>" );


    $qtdAbastecimentos ++;
    $somaTotalDosLitros += $litros;

    $continuar = rand(0,1);












}while($continuar == 1);
echo("Quantidade de abastecimentos:  $qtdAbastecimentos <br>"); 
echo("Soma total dos litros: " . number_format($somaTotalDosLitros). "<br>"); 






?>