<?php 
//print_r($_POST);


session_start();
require('../sessao.php');
require('../banco_dados.php');

$titulo=($_POST['titulo']);
$descricao = ($_POST['descricao']);
$id = ($_GET['id']);

$sql = "UPDATE vagas SET 
titulo = '$titulo',
descricao = '$descricao'
WHERE id='$id'
";

mysqli_query($link,$sql);

$_SESSION['mensagem'] = "VAGA ALTERADA";
header('location: /vagas/listar.php');
?>