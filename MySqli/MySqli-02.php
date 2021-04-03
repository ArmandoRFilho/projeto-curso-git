<?php

$con = new mysqli("localhost", "root", "", "dbphp7");
if ($con->connect_error) {
    echo "Error: " . $con->connect_errno;
}

$result = $con->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {
    # code...
    array_push($data, $row);
}

echo json_encode($data);
