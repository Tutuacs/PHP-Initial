<?php

$i=0;
do
{

	echo "\nDigite o primeiro valor: ";
	$n1 = readline();
	echo "Digite a operação: ";
	$op = readline();
	echo "Digite o segundo valor: ";
	$n2 = readline();

	switch($op)
		{
		case '+': {echo "O valor total é: ".$n1+$n2."\n";break;}
		case '-': {echo "O valor total é: ".$n1-$n2."\n";break;}
		case '/': {echo "O valor total é: ".$n1/$n2."\n";break;}
		case '*': {echo "O valor total é: ".$n1*$n2."\n";break;}
		default: {echo "Operação inválida\n";}
		}
echo 'Para parar de rodar o programa, digite "1": ';
$i = readline();
}while($i != 1);

?>