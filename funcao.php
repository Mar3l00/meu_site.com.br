<?php

//esta é uma função
//inicio da função
    function saudacao($nome){
        return "Olá, $nome!";
    }
//fima da função saudação
    echo saudacao("Maria");
//exemplo função
    function nomedafuncao($parametro1, $parametro2) {
//Código que sera executado
    $resultado = $parametro1 + $parametro2;
    return $resultado; //retorna um valor
    }
//Chamando função
    $soma = nomedafuncao(5, 10);
    echo " O resultado é: " . $soma;

?>