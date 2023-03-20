<?php session_start(); 
require('../sessao.php');
require('../menu.php');?>

<?php

require('../banco_dados.php');

$vaga_id = $_GET['id'];

$sql = "SELECT * FROM vagas WHERE id=$vaga_id";

$resultado = mysqli_query($link, $sql);
$detalhes = mysqli_fetch_assoc($resultado);

?>
<h1><?=$detalhes['titulo'];?></h1>
<p><?=$detalhes['descricao'];?></p>

<form action="/vagas/editar-salvar.php?id=<?=$vaga_id;?>" method="post">
    <div>
        <label>Título</label>
        <input type="text" name="titulo" value="<?=$detalhes['titulo'];?>"/>
    </div>
    <div>
        <label>Descrição</label>
        <input type="text" name="descricao" value="<?=$detalhes['descricao'];?>"/>
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>


</form>