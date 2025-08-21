<?php

     $pessoa = ["nome" => "João", "idade" => 30];
     echo $pessoa ["nome"];

 ?>
<p> Olá aqui é um HTML</p>
 <?php
    $aluno=["nome" => "Luiz", "idade" => 16, "nota" => 100];
    echo " Olá " . $aluno["nome"] . " você tem " . $aluno["idade"] . " e sua nota é " . $aluno["nota"] . ".<br>" ;
    $ano_atual = date('Y');
    $ano = $ano_atual - $aluno["idade"];
    echo "<p> Você nasceu em $ano </p>";
    echo "Hoje é  " . date("d-m-y") . "<br>";
    echo "Hoje, " , date("d") . " é dia nacional da habitação. <br>";
    echo "Agora são " . date("H:i:s") . "horas. <br>";
?>