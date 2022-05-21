
<?php
$convert = $_POST['convert'];
$sigla = $_POST['sigla'];
$sigla= strtoupper($sigla);

if($sigla == 'G')
{
  echo "Conversão em Gramas: "  .convert_kg($convert);
}
elseif ($sigla == 'KG'){
    echo "Conversão em Quilograma: " .convert_g($convert);
}

function convert_kg($medida)
{
    return $medida*1000;
}

function convert_g ($medida){
    return $medida/1000;

}
?>