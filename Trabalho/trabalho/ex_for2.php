<?php

$num = $_POST['num'];
$limite = $_POST['limite'];

for ($a = $num; $a <=$limite; $a++){
    $cubo = $a * $a * $a;
    echo " o cubo de $a é $cubo<br/>";
}

?>