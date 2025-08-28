<?php
    $n1 = $_POST['n1']
    $n2 = $_POST['n2']
    $n3 = $_POST['n3']
    function media($n1, $n2, $n3){
        return ($n1 + $n2 + $n3) /3;
    }
    
     $resultado = media($n1, $n2, $n3);
    echo "A média é: $resultado";
?>