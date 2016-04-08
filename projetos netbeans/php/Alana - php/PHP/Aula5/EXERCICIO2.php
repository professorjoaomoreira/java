<?php
 $valorHora=15.00;
 $horasTrab=180;
 $sBruto=$valorHora*$horasTrab;
 $inss=$sBruto*0.11;
 $sLiquido=$sBruto-$inss;
 echo "O salário deste professor é de R$ $sLiquido";
 

?>