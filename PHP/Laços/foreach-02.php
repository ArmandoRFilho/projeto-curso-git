<form>

    <input type="text" name= "nome">
    <input type="date" name= "Nascimento">
    <input type="submit" name="Ok">
 
</form>

<?php

if (isset($_GET)){

    foreach ($_GET as $Key => $value){

    echo "Nome do campo: ".$key;

    echo "Valor do campo: ".$value;

    echo "<hr>";
    }
}


?>