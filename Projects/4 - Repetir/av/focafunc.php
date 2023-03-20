<?php

$tam_palavra = 0;
$palavra = '';
$letra = '';
$lacuna="_";
$vida=5;
$x = 0;
$i = 0;
$pontos=0;



$palavra = recebe_palavra();

function recebe_palavra(){
$a = readline("\n\nDigite a palavra secreta:\n\n");
return($a);
}

$lacuna = cria_lacuna($palavra);

function cria_lacuna($palavra){
for($i=0;$i<strlen($palavra);$i++){
    $lacuna[$i]='-';
}
return($lacuna);
}

echo $lacuna;

$tam_palavra=strlen($palavra);

echo $tam_palavra;

function verifica_acerto($tam_palavra,$letra,$x,$lacuna){
    for($i=0;$i<$tam_palavra;$i++)
    {
        if($letra[0]==$palavra[$i])
        {
            $lacuna[$i]=$palavra[$i];
            $pontos++;
            $x++;
        }
    }
}

while($vida>0)
{


    $x=0;
    echo "\n $lacuna \n";
    $letra = readline("\n digite uma letra: ");

verifica_acerto($tam_palavra,$letra,$x,$lacuna);


    if($x==0) {
        $vida=$vida-1;

        if($vida==0) {
            echo "\n\n VOCE FOI ENFORCADO!";
            echo "\n A PALAVRA ERA: " . $palavra;
            break;
        }
        else{
            echo "\n VOCE ERROU! RESTAM $vida VIDA(S)"; 
        }
    } 
    else{
        if($pontos==$tam_palavra) {
            echo "\n\n VOCE GANHOU!";
            echo "\n A PALAVRA E:" . $palavra;
            break;
        }
        else {
            echo "\n VOCE ACERTOU A LETRA!";
        }
    }
} 

echo "\n\n";