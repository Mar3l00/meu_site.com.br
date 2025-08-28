<?php
    include"funcoes.php";
    $nome_db = "Mongo";
    $msg = banco_de_dados("$nome_db");
    echo $msg;
?>