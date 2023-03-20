<?php

for($i=0;$i<5;$i++)
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
}

?>