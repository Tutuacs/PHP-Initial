<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '123456';
    $database = 'job';
    require('banco_dados.php');

    $vaga_id = $_GET['id'];

    $sql = "SELECT * FROM vagas WHERE id=$vaga_id";

    $resultado = mysqli_query($link,$sql);

    $detalhes = mysqli_fetch_assoc($resultado);
?>
<a href="vagas.php"><h1>Voltar</h1></a>

<h1><?=$detalhes['titulo'];?></h1>

<p><?= $detalhes['id'];?></p>

<a href="candidato.php?vaga_id=<?=$vaga_id?>"><h1>Inscreva-se</h1></a>
