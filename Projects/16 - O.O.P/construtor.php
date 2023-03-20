<?php

require('canetao.php');

$obj = new Canetao('AZUL','MASTER');

$obj1 = new Canetao('','PILOT');
$obj2 = new Canetao('AZUL','VERMELHO');
$obj3 = new Canetao('AZUL','Master');


print_r($obj);
print_r($obj1);
print_r($obj2);
print_r($obj3);


?>