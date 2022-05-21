<?php

$num = $_POST['num'];
$inicio = $_POST['inicio'];
$limite = $_POST['limite'];

for ($i=$inicio;$i<=$limite;$i++)
   
   {
   	
   	
   	
    echo $num . " x " . $i . " = " . ($num * $i) . "<br>" ;
   
   }
?>