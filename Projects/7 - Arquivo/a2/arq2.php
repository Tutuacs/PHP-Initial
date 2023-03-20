<?php


	
	
	do{

		$curso = [];
		$curso['disciplina'] = readline("Disciplina: ");
		$curso['descricao'] = readline("Descrição: ");
		$curso['professor'] = readline("Professor: ");

		salvar_arquivo($curso);
		unset($curso);

		$continuar = readline('Continuar? [S/N]   ');

	}while($continuar == 's');

function salvar_arquivo($curso){

	$ponteiro = fopen('Cursos.txt','a');
	$linha = implode(';',$curso);
	$linha = $linha."\n";
	fwrite($ponteiro,$linha);
	fclose($ponteiro);
}

?>