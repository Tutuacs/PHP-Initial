
<?php

    require('banco_dados.php');

    $vaga = $_GET['vaga_id'];
?>

<a href="vagas.php"><h1>Voltar</h1></a>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <br>
    <div class="container">
        <div class="card bg-dark">
        <div class="card-head bg-secondary text-white">
            <h1 class="mx-5 px-5">Formulário de empregado</h1>
        </div>
        <hr>
        <div class="card-body bg-dark">
            <form action="salvar.php?vaga=<?=$vaga;?>" method="POST" enctype="multipart/form-data" class="mx-5 bg-gray px-3">

                <div class="mx-3 text-white"><label for="text" class="form-label" >Nome:</label>
                <input name="nome" type="text" class="form-control" placeholder="Nome"></div>

                <div class="mx-3 text-white"><label for="text" class="form-label" >Sobrenome:</label>
                <input name="Snome" type="text" class="form-control" placeholder="sobrenome"></div>

                <div class="mx-3 text-white"><label for="file" class="form-label" >Curriculo:</label>
                <input name="curriculo" type="file" class="form-control" placeholder="Curriculo"></div>
    
                <br>
                <input type="submit" class="btn btn-info text-dark mx-3">

            </form>
        </div>
    </div>
</div>

    </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>