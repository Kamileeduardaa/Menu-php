<?php

$num = $_POST ['num'];

$j=0;
$i=0;

function caracter_decrescente()
{
    for($i=20;$i>0;$i--) 

    {

        for($j=0;$j<$i;$j++) 

       {

          echo"*";

       }

      echo"<br>";
    }
}

function caracter_crescente()
{
    for($i=0;$i<20;$i++) 

    {

        for ($j=0;$j<$i;$j++)

       {

          echo"*";

       }

       echo"<br>";
    }
 
}

if ($num == '1')
{
    caracter_decrescente();
}
elseif ($num == '2')
{
    caracter_crescente();
}
else {
    echo "erro";
}










?>