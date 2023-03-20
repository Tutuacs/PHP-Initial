<?php

require('conta_bancaria.php');
require('corrente.php');
require('poupanca.php');
require('deposito.php');

$p = new Poupanca;
$c = new Corrente;
$d = new Deposito;


print_r($p);
print_r($c);
print_r($d);


?>