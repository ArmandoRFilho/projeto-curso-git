<?php

class Pessoa {

    public $nome; //Atributo

    //Método
    public function falar(){

        return "O meu nome é " .$this->nome; 

    }
    //Fim do método

}   

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>