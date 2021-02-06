<?php

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100; $i--) { 
    # testando o laço para regredir os anos
    echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>"

?>