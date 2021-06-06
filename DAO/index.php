<?php
require_once("config.php");
//Carrega um usuário
/*$root = new Usuario();
$root->loadById(0);
echo $root;*/

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscanso pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha 
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//echo $usuário;

/**$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

$root = new Usuario();

$root->loadById(6);

echo $root;*/
/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;*/

$usuario =  new Usuario();

$usuario->loadById(2);

$usuario->update("Professor", "842540");

echo $usuario;


?>