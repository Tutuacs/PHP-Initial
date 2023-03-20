<?php
class Estagiario extends Funcionario
{
/***
* método getSalario sobreescrito
* retorna o $salário com 12% de bônus.
*/
    function getSalario()
    {
        return $this-> salario * 1.12;
    }
}
?>