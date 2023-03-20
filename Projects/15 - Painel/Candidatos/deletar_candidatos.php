<?php session_start(); require('../sessao.php');

$id = $_GET['id'];
?>

<form action="del_sal_candidatos.php?id=<?=$id;?>" method="POST">

<p>Você confirma a exclusão de candidato?<p>

<button type="submit">Confirmar</button>
<a href="/candidatos.php">CANCELAR!</a>
</form>