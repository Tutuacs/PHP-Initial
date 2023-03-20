<?php

function le_arquivo(){

    $ponteiro = fopen('Cursos.txt', 'r');

    $linhas;
    while(!feof($ponteiro)){
        $linhas[] = fgets($ponteiro);
    }
    return $linhas;

}

function salvar_arquivo($curso){

	$ponteiro = fopen('Cursos.txt','a');
	$linha = implode(';',$curso);
	$linha = "\n".$linha;
	fwrite($ponteiro,$linha);
	fclose($ponteiro);

}

function exibe_registro(){

$linhas = le_arquivo();

foreach($linhas as $chave => $valor){

    $linha = explode(';',$valor);

    echo "\nDisciplina: $linha[0] \n";
    echo "Descrição: $linha[1] \n";
    echo "Professor: $linha[2] \n";

}

	echo "\n";

}

function escreve_arquivo(){

		$curso = [];
		$curso['disciplina'] = readline("Disciplina: ");
		$curso['descricao'] = readline("Descrição: ");
		$curso['professor'] = readline("Professor: ");

		salvar_arquivo($curso);
}

function inicializa(){
do{

		echo ("\n BEM VINDO AO GESTOR DE CURSOS\n");
		echo ("\n [1]: Escreve Nova Linha\n");
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

echo "\n";


inicializa();



?>