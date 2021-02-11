<?php

echo "<select>"; # essa é uma tag html que ira permitir o susário criar uma combo do tipo select com o parametro do laço for 

for ($i=date("Y"); $i >= date("Y")-100; $i--) { 
    # testando o laço para regredir os anos
    echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>"

?>