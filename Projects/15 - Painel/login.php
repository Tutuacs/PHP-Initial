<?php
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == 'arthur' and $senha == '123456')
{
    $_SESSION['autenticado'] = true;
    header('location: painel.php');
    echo "Acesso concedido";
}
else
{
    $_SESSION['autenticado'] = false;
    $_SESSION['mensagem'] = 'Usuário ou Senha inválidos';
    header('location: index.php');

}

?>