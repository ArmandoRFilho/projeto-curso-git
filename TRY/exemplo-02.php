<?php

function trataNome($name){

    if (!$name){

        throw new Exception("Nenhum nome foi encontrado.". 1);
    }

    echo ucfirst($name)."<br>";
}
try {
    //code...
   trataNome("Joao", 400);
   trataNome("");
    
} catch (Exception $th) {
    //throw $th;
    echo $th->getMessage();

}finally{
    echo "Executou o Try!"; 
}

?>