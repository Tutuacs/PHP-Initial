<?php

$i;
$j=0;
for($i=1;$i<=2;$i++){

echo "\nDigite seu nome: ";
$nome = readline();

echo 'Digite sua idade: ';
$idade = readline();

echo 'Digite seu Sexo: ';
$sexo = readline();

echo 'Digite sua religião: ';
$religiao = readline();

echo "\nVocê, "; 
while($nome[$j]!=' '){echo $nome[$j]; $j++;}
echo ', possui '. $idade .' anos e pertence ao sexo ' .$sexo[0] . ".";

if($idade>21){
echo "\nSua religião é: " . $religiao . '.';
}

echo "\n\n";

}

?>