<?php

namespace Cliente;

class Cadastro extends \Cadastro {

    public function registrarVenda(){

        echo "Foi registrada uma ven para o cliente ". $this->getNome();
    }
}

?>