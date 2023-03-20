<?php

echo "\nDigite seu nome: ";
$nome = readline();

echo 'Digite sua idade: ';
$idade = readline();

echo 'Digite seu Sexo: ';
$sexo = readline();

echo 'Digite sua religião: ';
$religiao = readline();

echo "\nVocê, " . $nome . ', possui '. $idade .' anos e pertence ao sexo ' .$sexo . ".\nSua religião é: " . $religiao . ".\n\n";

?>