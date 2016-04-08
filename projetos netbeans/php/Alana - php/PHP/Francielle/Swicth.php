<?php
$d = getdate();
 
switch ($d['wday']){
case 5:
echo "Finalmente sexta";
break;

case 6:
echo "Super Sabado";
break;

case 0:
echo "Domingo Sonolento";
break;

default:
echo"Estou esperando pelo fim de semana";
} 
?>