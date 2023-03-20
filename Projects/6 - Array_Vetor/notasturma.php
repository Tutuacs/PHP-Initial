<?php

$carro;

$erro=1;
$cont = 0;
$i=0;

while($erro==1){
	$carro[$i]['nome'] = readline("Digite o nome: ");
	$carro[$i]['marca'] = readline("Digite a marca: ");
	$carro[$i]['valor'] = readline("Digite o valor: ");

	$i++;
	$cont++;
	$erro = readline("Para continuar a execução digite: '1'\nPara Parar a execução aperte ENTER!!!");

}

for($i=0;$i<$cont;$i++){

	echo "\n".$carro[$i]['nome'];
	echo "\n".$carro[$i]['marca'];
	echo "\n".$carro[$i]['valor'];
}

?>

