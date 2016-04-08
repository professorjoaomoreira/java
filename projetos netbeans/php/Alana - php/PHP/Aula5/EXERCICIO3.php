<?php
$tempo = $_POST["txtTempo"];
$velocidade = $_POST ["txtVel"];
$d = $velocidade* $tempo;
$litros = $d/12;

echo "A distância é $d";
echo " A quantidade gasta foi $litros";


?>