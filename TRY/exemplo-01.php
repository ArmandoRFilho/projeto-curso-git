<?php

try {
    //code...
    throw new Exception("Houve um erro", 400);
    
} catch (Exception $th) {
    //throw $th;
    echo json_encode(array(
        "message"=>$th->getMessage(),
        "line"=>$th->getLine(),
        "file"=>$th->getFile(),
        "code"=>$th->getCode()

    ));

}

?>