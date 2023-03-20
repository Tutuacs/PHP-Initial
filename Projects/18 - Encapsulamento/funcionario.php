<?php
class Funcionario
{
    private $codigo;
    public $nome;
    private $nascimento;
    protected $salario;
    /***
    * método setSalario
    * atribui o parâmetro $salario à propriedade $salario
    */
    function setSalario($salario)
    {
    // verifica se é numérico e positivo
    if (is_numeric($salario) and ($salario > 0))
    {
    $this->salario = $salario;
    }
    }
    /***
    * método getSalario
    * retorna o valor da propriedade $salario
    */
    function getSalarioEstagiario()
    {
    return $this-> salario;
    }

    /**
     * Get the value of nascimento
     */ 
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * Set the value of nascimento
     *
     * @return  self
     */ 
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;

        return $this;
    }
}
