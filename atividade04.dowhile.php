<?php
/*Atividade 04 – Avaliações
Clientes dão notas de 1 a 5. Não se sabe quantas vezes e precisa informar ao
menos 1.
● Nota: rand(1,5).
● Continue conforme rand(0,1).
● Conte as avaliações.
● Some as notas.
● Calcule a média.
*/

$qtdAvaliacoes = 0;
$soma = 0;


do{

    $nota = rand(1,5);
    echo("Nota: R$" . number_format($nota, 2, ",", "."). "<br>" );


    $qtdAvaliacoes++;
    $soma += $nota;
    $media = $soma / $nota;

    $continuar = rand(0,1);










}while($continuar == 1);

echo("Quantidade de avaliações:  $qtdAvaliacoes <br>"); 
echo("Soma: R$" . number_format($soma, 2, ",", "."). "<br>"); 
echo("Media: R$" . number_format($media, 2, ",", ".")); 








?>