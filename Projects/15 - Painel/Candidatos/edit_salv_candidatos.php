<?php 
//print_r($_POST);


session_start();
require('../sessao.php');
require('../banco_dados.php');

$nome=($_POST['nome']);
$sobrenome = ($_POST['sobre_nome']);
$vaga_id = ($_POST['vaga_id']);
$id = ($_GET['id']);

$sql = "UPDATE candidatos SET 
nome = '$nome',
sobre_nome = '$sobrenome',
vaga_id = '$vaga_id'
WHERE id='$id'
";

mysqli_query($link,$sql);

$_SESSION['mensagem'] = "VAGA ALTERADA";
header('location: /candidatos.php');
?>