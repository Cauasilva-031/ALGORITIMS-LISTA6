<?php

/*
Criar 3 perguntas de verdadeiro ou falso e contar os acertos e pagar um valor por acerto
1- Melhor time do Brasil é o Cruzeiro (V)
2- Brasil saiu da copa pois não sabe jogar em time (V)
3- Melhor comida do mundo é jiló (F)
*/

//Inicializar variáveis
$contador = 0;
$somaAcumulada = 0;

//Repostas do usuário (simulando com rand)
$p1 = rand(0, 1);
$p2 = rand(0, 1);
$p3 = rand(0, 1);

if ($p1 == true) {
    $contador++; //incremento 
    $valorPagoAcerto = rand(100,1000); //sortear um valor nesse intervalo
    echo("Valor Pago: $valorPagoAcerto <br>");
    $somaAcumulada += $valorPagoAcerto;
       //0 + 500
}

if ($p2 == true) {
    $contador++; 
    $valorPagoAcerto = rand(100,1000); //sortear um valor nesse intervalo
    echo("Valor Pago: $valorPagoAcerto <br>");
    $somaAcumulada += $valorPagoAcerto;   
       //500 + 100

}

if ($p3 == false) {
    $contador++;
    $valorPagoAcerto = rand(100,1000); //sortear um valor nesse intervalo
    echo("Valor Pago: $valorPagoAcerto <br>");
    $somaAcumulada += $valorPagoAcerto;
      //600 + 200
}

//intepolação - só funciona entre aspas duplas
echo("Acertou $contador perguntas. <br>"); 
echo("Ganhou R$ $somaAcumulada neste joguinho. <br>"); 