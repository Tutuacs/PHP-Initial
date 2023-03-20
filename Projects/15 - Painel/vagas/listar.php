<?php session_start(); require('../sessao.php');?>
<?php require('../menu.php');?>
<h1>Lista de Vagas</h1>

<?php
require('../banco_dados.php');

$sql = "SELECT * FROM `vagas`";
?>
<div>
    <?php if(isset($_SESSION['mensagem']) ){ ?>
        <p><?=$_SESSION['mensagem'];?></p>
        <?php unset($_SESSION['mensagem']); ?>
    <?php } ?>
</div>
<table>
    <tr>
        <td>Títulos</td>
        <td>Ações</td>   
    </tr>
<?php
$resultado = mysqli_query($link, $sql);
while($linha = mysqli_fetch_assoc($resultado) )
{
    ?>
    <table>
        <tr>
            <td><?=$linha['titulo'];?></td>
            <td>
                <a href="editar.php?id=<?=$linha['id'];?>">
                Editar
                </a>
                &nbsp 
                <a href="deletar.php?id=<?=$linha['id'];?>">
                Apagar
                </a>
            </td>   
        </tr>
    <?php
}
?>
</table>
<br>
<a href="/vagas/criar.php">
    CRIAR
</a>