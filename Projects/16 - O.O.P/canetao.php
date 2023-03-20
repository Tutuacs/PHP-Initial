<?php

//Define a classe
class Canetao{

    //Define as caracteristicas/propriedades
    var $tinta;
    var $marca;
    var $id;

    //Costrutor de objetos da classe, Modifica Propriedades e é capaz de executar comandos
    function __construct($t='',$m=''){//   $t = '',(" T " opcional) // $t,(" T " OBRIGATÓRIO) //
        //Modifica propriedades
        $this -> id = uniqid();
        $this -> tinta = $t;
        $this -> marca = $m;
        //Executa comandos
        $this -> buscaMarca();
        //echo $this -> id;
    }

    //Define as funções/metodos
    function riscar(){

        echo '. . . . . . . . . ';


    }

    //Usando o " $this " para referenciar o próprio objeto
    function buscaMarca(){
        $this -> riscar();
        echo $this -> marca;
        $this -> riscar();
        echo "\n";
    }

    //Executada quando encerrado o uso do objeto
    function __destruct(){
        echo $this->id ." Até nunca mais\n";
    }

}