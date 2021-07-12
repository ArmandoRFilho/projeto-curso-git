<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//print_r($usuarios);

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    # code...
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row) {
    # code...
    $data = array();

    foreach ($row as $key => $value) {
        # code...
        array_push($data, $value);
    }//Ende foreach de coluna

    fwrite($file, implode(",", $data) . "\r\n");
}//End foreach de linha 

fclose($file);

?>