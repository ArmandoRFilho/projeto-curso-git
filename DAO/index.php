<?php

require_once("config.php");
//Carrega um usuário
/*$root = new Usuario();
$root->loadById(0);
echo $root;*/

//Carrega uma lista de usuários
$lista = Usuario::getList();

echo json_encode($lista);

/**$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

$root = new Usuario();

$root->loadById(6);

echo $root;*/

?>