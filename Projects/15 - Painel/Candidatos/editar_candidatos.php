<?php session_start(); 
require('../sessao.php');
require('../menu.php');?>

<?php

require('../banco_dados.php');

$id = $_GET['id'];

$sql = "SELECT * FROM candidatos WHERE id=$id";

$resultado = mysqli_query($link, $sql);
$detalhes = mysqli_fetch_assoc($resultado);


$lista_vagas = [];
$sql = "SELECT * FROM vagas";
$resultado = mysqli_query($link,$sql);

while($linha = mysqli_fetch_assoc($resultado) )
{
    $lista_vagas[$linha['id']] = $linha['titulo'];
};

?>



<h1><?=$detalhes['nome'],$detalhes['sobre_nome'];?></h1>
<p>Candidato:</p>

<form action="/Candidatos/edit_salv_candidatos.php?id=<?=$id;?>" method="post">
    <div>
        <label>Nome</label>
        <input type="text" name="nome" value="<?=$detalhes['nome'];?>"/>
    </div>
    <div>
        <label>Sobre Nome</label>
        <input type="text" name="sobre_nome" value="<?=$detalhes['sobre_nome'];?>"/>
    </div>
    <br>
    <div>
        <select name="vaga_id">
            <option>Nenhuma</option>
            <?php foreach($lista_vagas as $id => $titulo){
                
                $select = '';
                if($id == $detalhes['vaga_id']){
                    $select = 'selected';
                }
                    ?><option value="<?=$id?>" <?=$select;?>><?=$titulo?></option>
            <?php }  ?>
        </select>
    </div>
    <br>
    <div>
        <button type="submit">Salvar</button>
    </div>


</form>