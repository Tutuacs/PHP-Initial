<?php

    require('banco_dados.php');

    $vaga_id = $_GET['vaga_id'];

    $nome = $_POST['nome'];
    $sobrenome = $_POST['Snome'];
    $curriculo = $_FILES['curriclo'];


    $sql = "INSERT INTO candidatos (vaga_id,nome,sobrenome)
    VALUES ($vaga_id,'$nome','$sobrenome')";

    mysqli_query($link,$sql);
    $candidato_id = mysqli_insert_id($link);

    header("location: mensagem.php?inscricao=$candidato_id")
?>
