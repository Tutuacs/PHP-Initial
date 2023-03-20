<?php

$tam_palavra = 0;
$palavra = '';
$letra = '';
$lacuna="_";
$vida=5;
$x = 0;
$i = 0;
$pontos=0;



$palavra = readline("\n\nDigite a palavra secreta:\n\n");//recebe a palavra da forca


for($i=0;$i<strlen($palavra);$i++){// cria uma string 'vazia' com a mesma quantia de letras que a entrada
    $lacuna[$i]='-';
}

$tam_palavra=strlen($palavra);//variavel guarda o tamanho da palavra

while($vida>0)//enquanto o jogador nao errar 5x, ele pode continuar chutando
{


    $x=0;//flag para decidir acerto ou erro da letra
    echo "\n $lacuna \n";//escreve a 'quantidade de letra'
    $letra = readline("\n digite uma letra: ");//recebe uma letra do usuario

    for($i=0;$i<strlen($palavra);$i++)//laço de repetição com o numero de letras
    {
        if($letra[0]==$palavra[$i])//verifica se a letra está na palavra
        {
            $lacuna[$i]=$palavra[$i];//bota a letra na lacuna
            $pontos++;//aumenta em 1 os pontso
            $x++;//aumenta a flag
        }
    }

    if($x==0) {//somente se o usuario errar a letra
        $vida--;//tira uma vida

        if($vida==0) {//verifica se é a ultima vida do usuario
            echo "\n\n VOCE FOI ENFORCADO!";
            echo "\n A PALAVRA ERA: " . $palavra;
            break;//sai do laço de repetiçao, terminando o jogo
        }
        else{//se nao for a ultima vida, o jogo continua
            echo "\n VOCE ERROU! RESTAM $vida VIDA(S)";
        }
    }
    else{// se o usuario acertou
        if($pontos==$tam_palavra) {//verifica se a quantidade de pontos é a mesma da quantidade de letras da palavra
            echo "\n\n VOCE GANHOU!";
            echo "\n A PALAVRA E:" . $palavra;
            break;//termina o jogo
        }
        else {//se acertou um ponto e nao é o ultimo
            echo "\n VOCE ACERTOU A LETRA!";
        }
    }
} 

echo "\n\n";

?>