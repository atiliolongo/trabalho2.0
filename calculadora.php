<?php
include ("./calculadora.html");
    
$valor1 = $_POST["txt1"];
$valor2 = $_POST["txt2"];
$op = $_POST["operacao"];

echo $_POST["operacao"];

function validar ($valor1, $valor2){
    return is_numeric($valor1) && is_numeric($valor2);
}

function somar($valor1,$valor2){
    if(validar($valor1,$valor2))  return $valor1 + $valor2;
    else echo "valor Invalido";
}

function subtrair($valor1,$valor2){
    if(validar($valor1,$valor2))  return $valor1 - $valor2;
    else echo "valor Invalido";
}

function dividir($valor1,$valor2){
    if(validar($valor1,$valor2))  return $valor1 / $valor2;
    else echo "valor Invalido";
}
    
function multiplicar ($valor1,$valor2){
    if(validar($valor1,$valor2))  return $valor1 * $valor2;
    else echo "valor Invalido";
}

switch ($op){
    case 'soma ':
        echo somar($valor1, $valor2);
        break;
    case 'subtrair ':
        echo subtrair($valor1, $valor2);
        break;
    case 'multiplicar ':
        echo multiplicar($valor1, $valor2);
        break;
    case 'dividir ':
        echo dividir($valor1, $valor2);
        break;
}
?>