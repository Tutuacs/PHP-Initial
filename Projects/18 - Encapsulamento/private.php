<?php

# carrega a classe
    require ('funcionario.php');
// instancia novo Funcionário
    $pedro = new Funcionario;
// atribui novo salário
    $pedro->setSalario(876) ;
// obtém o Salário
    echo 'Salário : (R$) ' . $pedro->getSalarioEstagiario();

?>