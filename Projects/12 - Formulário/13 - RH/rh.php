<?php

    $matricula = ($_POST['matricula']);
    $nome = ($_POST['nome']);
    $Snome = ($_POST['Snome']);
    $cpf = ($_POST['cpf']);
    $cargo = ($_POST['cargo']);
    $curriculo = ($_FILES['curriculo']);


    $link = mysqli_connect('localhost','root','123456','flexxo_cadastro');

    $sql = "
        INSERT INTO funcionarios
        (matricula,nome,sobrenome,cpf,cargo)

        values
        ('$matricula','$nome','$Snome',' $cpf','$cargo')    
    ";

    mysqli_query($link,$sql);

    $id = mysqli_insert_id($link);
    
    echo "O funcionario foi cadastrado sob o numero $id";

?>
