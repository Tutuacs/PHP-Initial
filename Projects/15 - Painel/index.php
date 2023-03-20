<?php session_start();?>

<form method="post" action="login.php">
    <div>
        <?php if(isset($_SESSION['mensagem']) ){ ?>
            <p><?=$_SESSION['mensagem'];?></p>
            <?php unset($_SESSION['mensagem']); ?>
        <?php } ?>
    </div>
    <div>
        <label>Usuário</label>
        <input type="text" name="usuario">
    </div>
    <div>
        <label>Senha</label>
        <input type="password" name="senha">
    </div>
    <button type="submit">Entrar</button>
</form>