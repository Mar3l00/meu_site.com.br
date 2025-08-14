<?php
    $frutas = [" Maçã ", " Banana ", "Laranja", "Pera", "Morango", "Limão"];
    echo $frutas[0]; 
    for($i = 0; $i < count ($frutas); $i++){
        echo "Frutas:  $frutas[$i]<br>";
    }
?>