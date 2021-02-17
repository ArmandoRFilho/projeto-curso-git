<?php

function spl_autoload_register($nomeClasse){
    var_dump($nomeClasse);
    require_once("Abstratas".$nomeClasse."php");

}

$carro = new DelRey();

$carro->acelerar(80);

?>