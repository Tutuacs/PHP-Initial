<?php 
//print_r($_POST);


session_start();
require('../sessao.php');
require('../banco_dados.php');

$titulo=($_POST['titulo']);
$descricao = ($_POST['descricao']);

$sql = "INSERT INTO vagas (titulo,descricao)

VALUES ('$titulo','$descricao')

";

mysqli_query($link,$sql);

$id = mysqli_insert_id($link);


$_SESSION['mensagem'] = "VAGA ALTERADA";
header('location: /vagas/listar.php');
?>