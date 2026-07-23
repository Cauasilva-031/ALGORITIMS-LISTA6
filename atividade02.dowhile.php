<?php
/*Atividade 02 – Partidas
Um jogador joga videogame. E ele joga pelo menos uma vez.
● Gere a pontuação com rand(0,100).
● Gere $continuar = rand(0,1).
● Conte as partidas.
● Some a pontuação.
● Mostre a média ao final.
*/

$qtdPartidas = 0;
$mediaFinal = 0;

do {


    //Gere a pontuação com rand(0,100).
    $pontuacao = rand(0,100);
    echo("Pontuação: R$" . number_format($pontuacao, 2, ",", "."). "<br>" ); 

    $qtdPartidas++;
    $mediaFinal += $pontuacao;

    $continuar = rand(0,1);

    









}while($continuar == 1);

echo("Quantidade de partidas:  $qtdPartidas <br>"); 
echo("Media final: R$" . number_format($mediaFinal, 2, ",", ".")); 









?>