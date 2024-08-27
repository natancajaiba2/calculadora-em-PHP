<?php
$num1 = $_POST["n1"];
$num2 = $_POST["n2"];
$op = $_POST["operacao"];
$resultadao;


switch($op){
    case '+':
        $resultado = $num1 + $num2;
        echo "o resultado da soma é ".$resultado;
        break;

    case '-':
        $resultado = $num1 - $num2;
        echo "o resultado da subtração é ".$resultado;
        break;
    
    case '*':
        $resultado = $num1 * $num2;
        echo "o resultado da multipicação é ".$resultado;
        break;
    
    case '/':
        $resultado = $num1 / $num2;
        echo "o resultado da divisão é  ".$resultado;
        break;
    default: 
        echo "operação invalida";    
}   




?>