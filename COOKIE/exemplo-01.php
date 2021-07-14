<?php

$data = array(
    "empresa"=> "Hcode TReinamentos"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time()+ 3600);

echo "o cookie foi criado"

?>