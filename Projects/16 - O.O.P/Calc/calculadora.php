<?php

class Calculadora{
    
    public $operacao;
    public $num1;
    public $num2;
    private $resultado = 0;
    private $historico = [];


function resultado(){
    switch ($this->operacao) {
        case '+':{
            $this->soma();
            break;
        }
        case '*':{
            $this->multi();
           break;
        }
        case '/':{
            $this->div();
            break;
        }
        case '-':{
            $this->sub();
            break;
        }                         
        default:{
            $this -> resultado = "Operação invalida";
            break;
        }
    }
    $this -> addHistorico();
    $this -> limparPropriedades ();
    return $this -> resultado;
}

private function addHistorico(){

    $this -> historico[] = [

    'num1' => $this->num1,
    'operacao' => $this -> operacao,
    'num2' => $this -> num2,
    'resultado' => $this->resultado

    ];
}

public function exibHistorico(){
    foreach($this -> historico as $c){
        echo " {$c['num1']} {$c['operacao']} {$c['num2']} = {$c['resultado']} \n";
    }
}

private function soma(){
    $this -> resultado = $this -> num1 + $this->num2;
}

private function sub(){
    $this -> resultado = $this -> num1 - $this->num2;
}

private function multi(){
    $this -> resultado = $this -> num1 * $this->num2;
}

private function div(){
    if($this->num2 == 0){
        $this -> resultado = 'Não divide por 0';
    }
    $this -> resultado = $this -> num1 / $this->num2;
}

private function limparPropriedades(){
    $this -> num1='';
    $this -> num2='';
    $this -> operacao='';
}
}