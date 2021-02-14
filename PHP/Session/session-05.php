<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

switch (session_status()){
    case PHP_SESSION_DISABLED:
    echo "as sessões estiveram desabilitadas";
    break;
    
    case PHP_SESSION_NOME:
    echo "as sessões estiveram habilitadas, mas nehuma existir";
    break;

    case PHP_SESSION_ACTIVE:
    echo "as sessões estiveram habilitadas, e uma existir";
    break;


}
?>