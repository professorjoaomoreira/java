<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>tabuada</title>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <h1>Aula 13 - Tabuada Automatica</h1>
      <div>
        <?php
        $n = isset($_GET["num"])?$_GET["num"]: 1;
        for ($c = 1; $c <=10; $c++) {
            $r = $n * $c;
            echo"$n x $c = $r <br/>";
        }
        ?>
    </body>
     </div>
    <br/><a href="javascript:history.go(-1)"<span class="foco1">Voltar</a>
</html>