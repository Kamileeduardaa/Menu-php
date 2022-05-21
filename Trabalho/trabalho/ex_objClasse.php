
<?php
include ("ex_classe.php");

$valotx = $_GET["txsaldo"];

$minhaconta = new Conta; 
$minhaconta -> credito(1000);
echo "O saldo possue um crédito de  ".$minhaconta -> saldo()."\n";   
$minhaconta -> credito($valotx); 
echo "<br> O crédito total com depósito  ".$minhaconta -> saldo();    

?>
