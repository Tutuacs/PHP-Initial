<?php

require ('calculadora.php');
$continuar = '';
$calc = new Calculadora;

do{

    if(!isset($calc -> num1)){
        $calc -> num1 = readline('Informe um numero: ');
    }

$calc-> operacao = readline('Iforme uma operação ( + , - , * , / ): ');
$calc -> num2 = readline('Informe o segundo numero: ');

$res = $calc -> resultado();

echo "\n-------------------------------------------------\n";
$calc->exibHistorico();
echo "-------------------------------------------------\n";
echo "RESULTADO: ".$res;
echo "\n-------------------------------------------------\n";

$calc -> num1 = $res;

$continuar = readline('Informe [ X ] para SAIR: ');

limpaTela();
}while( $continuar != 'x' and $continuar != 'X');

function limpaTela(){
    (DIRECTORY_SEPARATOR === '\\' )?
        popen('cls','w') : exec('clear');
}