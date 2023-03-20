<?php


require('veiculos.php');
require('moto.php');
require('carro.php');

$c = new Carro;
$m = new Moto;

$c-> rodas = 4;
$c -> marca = 'BMW';
$c -> capacidade = '5 Pessoas';
$c -> ano = 2023; 
$c -> cor = 'VERMELHO';
$c -> porta_malas = 'Grande';

$m-> rodas = 2;
$m -> marca = 'KAWASAKI';
$m -> capacidade = '2 Pessoas';
$m -> ano = 2021; 
$m -> cor = 'VERDE';
$m -> suporte_bau = 'Possui';

print_r($c);
echo "<br>";
print_r($m);


?>