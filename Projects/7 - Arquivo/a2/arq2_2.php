<?php

function le_arquivo(){

    $ponteiro = fopen('Cursos.txt', 'r');

    $linhas;
    while(!feof($ponteiro)){
        $linhas[] = fgets($ponteiro);
    }
    return $linhas;

}

$linhas = le_arquivo();

foreach($linhas as $chave => $valor){

    $linha = explode(';',$valor);

    echo "\nDisciplina: $linha[0] \n";
    echo "Descrição: $linha[1] \n";
    echo "Professor: $linha[2] \n";

}
echo "\n";

?>