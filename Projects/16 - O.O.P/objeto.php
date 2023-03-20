<?php

require('canetao.php');

$objeto15 = new Canetao;


//Visualiza o ESTADO DO OBJETO
print_r($objeto15);

//  (  -> ) Operador usado para acessar um objeto
$objeto15 -> tinta = 'Vermelho';
$objeto15 -> marca = 'Pilote';

print_r($objeto15);

//Chamar uma função dentro de um objeto
$objeto15 -> riscar();
$objeto15 -> riscar();
$objeto15 -> riscar();
$objeto15 -> riscar();
$objeto15 -> riscar();

$objeto15 -> buscaMarca();




?>