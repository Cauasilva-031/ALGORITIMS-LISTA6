<?php

/*
Atividade 01 – Compras
Um cliente faz compras. Não se sabe quantas e ele compra pelo menos um produto.
● Gere o valor do produto com rand(10,50).
● Gere $continuar = rand(0,1).
● Conte quantos produtos foram comprados.
● Some o valor total da compra.
● Mostre:
○ valor de cada produto;
○ quantidade de produtos;
○ total da compra
    

*/

$qtdCompras = 0; //contador
$somaTotalDosProdutos = 0; //

do {

    //Gere o valor do produto com rand(10,50).
    $valorProduto = rand(10, 50);
    echo ("ValorProduto: R$ " . number_format($valorProduto, 2, ",", ".") . "<br>");

    $qtdCompras++; // +1 depois +1 depois +1
    $somaTotalDosProdutos += $valorProduto; //variável para guarda soma + novo valor

    //Gere $continuar = rand(0,1). 0-Sair 1-Continuar
    $continuar = rand(0, 1);
} while ($continuar == 1);

//intepolação - só funciona entre aspas duplas
echo("Quantidade de compras:  $qtdCompras <br>"); 
echo("Total: R$" . number_format($somaTotalDosProdutos, 2, ",", ".")); 