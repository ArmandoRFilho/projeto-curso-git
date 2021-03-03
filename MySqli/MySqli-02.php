<?php

$con = new mysqli("localhost", "root", "", "dbphp7" );
if ($con->connect_error){
    echo "Error: " . $con->connect_errno;
}

$result = $con->query("SELECT * FROM tb_usuario ORDER BY deslogin");

while ($row = $result->fetch_array()) {
    # code...
    var_dump($row);
}
?>