<?php

function le_arquivo(){

	$ponteiro = fopen('Pessoa.txt','r');

	$linha = [];
	while(!feof($ponteiro)){
		$linha[] = fgets($ponteiro);
	}
	return $linha;
}

function salva_arquivo($pessoa){
	
	$ponteiro = fopen('Pessoa.txt','a');
	$linha = implode(';',$pessoa);
	$linha = "\n".$linha;
	fwrite($ponteiro,$linha);
	fclose($ponteiro);

}

function exibe_registro(){
	
	$linha = le_arquivo();

foreach($linha as $conteudo){

	$linha = explode(';',$conteudo);

	echo "\nNome: $linha[0]\n";
	echo "Sobrenome: $linha[1]\n";
	echo "Idade: $linha[2]\n";
	echo "Sexo: $linha[3]\n";
	echo "CPF: $linha[4]\n";
}

	echo "\n";

}

function escreve_arquivo(){

		$pessoa = [];
		$pessoa['nome'] = readline("Nome: ");
		$pessoa['sobrenome'] = readline("Sobrenome: ");
		$pessoa['idade'] = readline("Idade: ");
		$pessoa['sexo'] = readline("Sexo: ");
		$pessoa['cpf'] = readline("CPF: ");

		salva_arquivo($pessoa);
}

inicializa();

function inicializa(){

do{

		echo ("\n BEM VINDO AO GESTOR DE PESSOAS\n");
		echo ("\n [1]: Escreve Novo registro\n");
		echo (" [2]: Imprime os registros existentes\n");

		$acao = readline("\n informe o que deseja fazer:");

		switch($acao){

		case '1' :{escreve_arquivo();break;}
		case '2' :{exibe_registro();break;}
		default : {echo "\n Ação INEXISTENTE\n";}

		}

		$continuar = readline('Continuar? [S/N]   ');

	}while($continuar == 's');

}

/*
NOME
SOBRENOME
IDADE
SEXO CPF

*/

?>