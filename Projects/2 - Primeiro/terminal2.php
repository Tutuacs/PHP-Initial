<?php

$i = 2;
for($i=2;$i>0;$i--){

echo ' Digite seu nome: ';
$nome = readline();

echo 'Digite sua idade: ';
$idade = readline();


if($idade>=18){
  echo 'Você, ' . $nome . ", pode ter CNH\n";
}
else{
  echo 'Você, ' . $nome . ", não pode ter CNH\n";
}

}
?>