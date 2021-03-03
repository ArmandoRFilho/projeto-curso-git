<?php

$con = new mysqli("localhost", "root", "", "dbphp7" );
if ($con->connect_error){
    echo "Error: " . $con->connect_errno;
}

$stmt = $con->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();
?>