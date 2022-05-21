<?php
$estado = $_POST['estado'];
$estado= strtoupper($estado);
 
if ($estado == 'S')
 {
     echo "você é solteiro, então não tem ninguém";
 }
elseif ($estado == 'C'){
    echo "você é casado,então tem alguém";
}
elseif ($estado == 'D'){
    echo "você já esteve casado,mas não está mais";
}
elseif ($estado == 'V'){
    echo "Seu cônjuge já faleceu, e você não casou de novo";
}
else{
    echo "erro";
}


?>