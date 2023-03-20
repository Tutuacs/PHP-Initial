<?php session_start(); require('../sessao.php');

$id = $_GET['id'];
?>

<form action="deletar_salvar.php?id=<?=$id;?>" method="POST">

<p>Você confirma a exclusão de registro?<p>

<button type="submit">Confirmar</button>
<a href="/vagas/listar.php">CANCELAR!</a>
</form>
