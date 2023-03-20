<?php

echo "\n\n          ===================\n          ==  Calculadora  ==\n          ===================\n\n\n";

echo "Digite o primeiro valor: \n";
$n1 = readline();

$i;
for($i=0;$i<6;$i++){
echo "Digite a operação: \n";
$op = readline();

echo "Digite o segundo valor\n";
$n2 = readline();

echo "\nTotal: ";
/*==============================================
if($op=='+')
echo ($n1+$n2);

elseif($op=='-')
echo ($n1-$n2);

elseif($op=='*')
echo ($n1*$n2);

elseif($op=='/')
echo ($n1/$n2);

elseif($op=='%')
echo ($n1%$n2);

elseif($op=='**')
echo ($n1**$n2);

else
echo ('Operação'.' inexistente!');
==============================================*/

switch($op){

case '+':{
echo ($n1+$n2);break;}

case '-':{
echo ($n1-$n2);break;}

case '*':{
echo ($n1*$n2);break;}

case '/':{
echo ($n1/$n2);break;}

case '**':{
echo ($n1**$n2);break;}

case '%':{
echo ($n1%$n2);break;}

default:{
echo ('Operação'.' inexistente');break;}

}

echo ".\n\n";

}

?>