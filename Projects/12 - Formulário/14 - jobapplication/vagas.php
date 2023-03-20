<?php

    require('banco_dados.php');

    $sql = "SELECT * FROM vagas";
    $resultado = mysqli_query($link,$sql);
?>

<table>

    <tr>
        <td>TITULO</td>
        <td>DETALHES</td>
    </tr>

<?php
    while($linha = mysqli_fetch_assoc($resultado)){
        ?>


        <tr>
            <td><?= $linha['titulo'];?></td>
            <td>

            <a href="descricao.php?id=<?= $linha['id'];?>">Veja Mais!</a>
            
            </td>
        </tr>


        <?php
    };

?>
</table>