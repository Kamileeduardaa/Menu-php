<?php

$num1 = $_POST ['num1'];
$num2 = $_POST ['num2'];

if ($num1 > $num2 ) 
{
    echo "O número $num1 é maior que o $num2";
}
elseif ($num2 > $num1){
    echo "O número $num2 é maior que o $num1";
}
elseif($num1 = $num2) {
    echo "Os números digitados são iguais ";
}
else{
    echo "erro";
}
?>