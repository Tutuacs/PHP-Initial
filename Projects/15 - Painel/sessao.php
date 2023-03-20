<?php 

if( !isset($_SESSION['autenticado']) or !$_SESSION['autenticado'] == true)
    {
        $_SESSION['mensagem'] = 'Acesso Negado';
        header('location: /index.php');
    }

?>