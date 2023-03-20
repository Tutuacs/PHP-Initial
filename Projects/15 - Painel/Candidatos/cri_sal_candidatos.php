<?php 
//print_r($_POST);


session_start();
require('../sessao.php');
require('../banco_dados.php');

$nome=($_POST['nome']);
$sobrenome = ($_POST['sobrenome']);
$vaga_id = ($_POST['vaga_id']);

$sql = "INSERT INTO candidatos (nome,sobre_nome,vaga_id)

VALUES ('$nome','$sobrenome','$vaga_id');";

mysqli_query($link,$sql);

$id = mysqli_insert_id($link);


$_SESSION['mensagem'] = "VAGA ALTERADA";
header('location: /candidatos.php');
?>