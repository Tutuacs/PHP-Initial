<?php session_start();
//unset($_SESSION);
//unset($_SESSION['autenticado']);
session_destroy();
session_start();

$_SESSION['mensagem'] = 'Você SAIU';
header('location: index.php');
