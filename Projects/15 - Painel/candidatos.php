<?php session_start(); require('sessao.php');?>
<?php require('menu.php');?>
<h1>Lista de Candidatos</h1>

<?php
require('banco_dados.php');

$sql = "SELECT * FROM `candidatos`";
?>

<a href="/Candidatos/criar_candidatos.php">
    CRIAR CANDIDATO
</a>
<br>

<table>
    <tr>
        <br>
        <td>Nome</td>
        <td>Sobrenome</td> 
        <td>Ações</td>  
    </tr>
<?php
$resultado = mysqli_query($link, $sql);
while($linha = mysqli_fetch_assoc($resultado) )
{
    ?>
        <tr>
            <td><?=$linha['nome'];?></td>
            <td><?=$linha['sobre_nome'];?></td>
            <td>
                <a href="/Candidatos/editar_candidatos.php?id=<?=$linha['id'];?>">
                Editar
                </a>
                &nbsp
                <a href="/Candidatos/deletar_candidatos.php?id=<?=$linha['id'];?>">
                Apagar
                </a>
            </td>   
        </tr>
    <?php
}
?>
</table>