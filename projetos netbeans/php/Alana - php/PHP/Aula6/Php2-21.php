<?php
$a=$_POST['Val1'];
$b=$_POST['Val2'];

$Valor=$a+$b;

if($Valor >= 10){
$Valor=+5;
echo "Seu valor eh $Valor";
}

else{
if($Valor <=10){
$Valor=-7;

echo "Seu valor eh $Valor maior ou igual a 10";
 
 }
 }




?>