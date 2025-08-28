<?php
$num = $_POST['num'];
function parOUimpar($num){
    if($num % 2 == 0){
        return "Par";
    }else{
        return "Ímpar";
    }
}
echo parOUimpar($num);
?>