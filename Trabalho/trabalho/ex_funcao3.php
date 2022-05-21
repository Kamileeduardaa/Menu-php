<?php
$num1 =$_POST["num1"];
$num2 =$_POST["num2"];

//definição da função     
function multiplicar($num1,$num2)   {
    return $num1 * $num2;
 }       
 
 $resultado = multiplicar($num1,$num2);     

echo "O valor de Número 1 é: " . $num1;
echo "<br>O valor de Número 2 é: " . $num2;
echo "<br> A multiplicação dos Números é:  " . $resultado;

  
?>