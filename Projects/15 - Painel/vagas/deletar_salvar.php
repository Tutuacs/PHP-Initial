<?php session_start(); 
require('../sessao.php');
require('../banco_dados.php');

$id = $_GET['id'];

$sql = "DELETE from candidatos WHERE vaga_id='$id'";
mysqli_query($link,$sql);

$sql = "DELETE from vagas WHERE id='$id'";
mysqli_query($link,$sql);

$_SESSION['mensagem'] = "Registro ID: $id foi excluído";
header('location: /vagas/listar.php');

?>