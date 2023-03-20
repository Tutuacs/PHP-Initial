<?php

require('canetao.php');

$objeto1 = new Canetao;
$objeto1 -> marca = 'PILOT';
$objeto1 ->buscaMarca();

print_r($objeto1);


$objeto2 = new Canetao;
$objeto2 -> tinta = 'VERMELHA';
$objeto2 ->buscaMarca();

print_r($objeto2);


$objeto3 = new Canetao;
$objeto3 -> marca = 'PILOT';
$objeto3 -> tinta = 'VERMELHA';
$objeto3 ->buscaMarca();

print_r($objeto3);

?>