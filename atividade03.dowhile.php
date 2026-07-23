<?php
/*Atividade 03 – Depósitos
Uma pessoa faz depósitos. E, ele faz pelo menos 1 depósito.
● Valor: rand(50,200).
● Continue enquanto rand(0,1) retornar 1.
● Conte os depósitos.
● Some o dinheiro depositado.
● Exiba o total.
*/

$qtdDepositos = 0;
$totalDepositado = 0;



do{

    $dinheiroDepositado = rand(50,200);
    echo("Dinheiro despositado: R$" . number_format($dinheiroDepositado, 2, ",", "."). "<br>" );
    
    
    $qtdDepositos++;
    $totalDepositado += $dinheiroDepositado;

    $continuar = rand(0,1);














}while($continuar == 1);

echo("Quantidade de depositos:  $qtdDepositos <br>"); 
echo("Total depositado: R$" . number_format($totalDepositado, 2, ",", ".")); 














?>