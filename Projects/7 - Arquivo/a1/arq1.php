<?php


	$ponteiro = fopen('archive.dat', 'a');

	if(!$ponteiro){
		echo 'Arquivo não encontrado';
		die();
	}

	echo "Tenho arquivo";

	fwrite($ponteiro, "MAIS UMA LINHA\n");
	fclose($ponteiro);


	$ponteiro = fopen('archive.dat', 'r+');
	
	while(!feof($ponteiro)){
		$linhas[] = fgets($ponteiro,1024);
	}

	print_r($linhas);

?>