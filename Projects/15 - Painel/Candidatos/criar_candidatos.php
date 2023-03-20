<?php session_start(); 
require('../sessao.php');
require('../banco_dados.php');
require('../menu.php');


$lista_vagas = [];
$sql = "SELECT * FROM vagas";
$resultado = mysqli_query($link,$sql);

while($linha = mysqli_fetch_assoc($resultado) )
{
    $lista_vagas[$linha['id']] = $linha['titulo'];
};


?>

<form action="/Candidatos/cri_sal_candidatos.php" method="post">
    <div>
        <label>Nome</label>
        <input type="text" name="nome" value=""/>
    </div>
    <div>
        <label>Sobrenome</label>
        <input type="text" name="sobrenome" value=""/>
    </div>
    <div>
        <select name="vaga_id">
            <option>Nenhuma</option>
                <?php foreach($lista_vagas as $id => $titulo){
                    ?><option value="<?=$id?>"><?=$titulo?></option>
                <?php }  ?>
        </select>
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>