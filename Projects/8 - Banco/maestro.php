<?php


$hostname = 'localhost';
$username = 'root';
$password = '123456';
$database = 'estudo';
$port     = '3306';




$link = mysqli_connect(

	$hostname,
	$username,
	$password,
	$database,
	$port,

	);
if (!$link){

	echo 'Não conectou';
	die("\nmysqli_connect_error()");
};

echo "\nConectou\n\n";

$str_sql = 'select * from turmas';


$encontrou_dados = mysqli_query ( $link,$str_sql );

if (!$encontrou_dados){
	echo 'Falhou';
	die('Fechando');
}

echo "Dados encontrados\n\n";

while($linha = mysqli_fetch_assoc($encontrou_dados)){

	echo "Titulo: ".$linha['titulo']."\n\n";
	echo "Descrição: \n\n".$linha['descricao']."\n\n";
	

	$str_professor_sql = 'select * 
				   from professor 
				   where id = ' . $linha['id_professor'];

	$retorno_professor = mysqli_query(
							$link,
							$str_professor_sql);

	$linha_professor = mysqli_fetch_assoc($retorno_professor);

	echo "Professor: ".$linha_professor['nome']."\n\n";

}


?>