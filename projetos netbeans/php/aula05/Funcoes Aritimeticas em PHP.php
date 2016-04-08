<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>Aula05 - Funcoes Aritimeticas em PHP</title>
        <style>
            h2{
                font:15pt Arial;
                color: cornflowerblue;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div>
        <h1>Aula05, Funcoes Aritimeticas em PHP</h1> 
        <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];

        echo "<h2> Valores recebidos: $v1 e $v2</h2>";
        
        $m = ($v1+$v2) /2;
         
        echo "<br/><br/>A media entre $v1 e $v2 eh = $m ";
        echo "<h2>Valores recebidos: $v1 e $v2)</h2>";
        echo "<br/>O valor absoluto de $v2 eh ". abs ($v2);
        echo "<br/><br/>O valor de $v1<sup>$v2</sup> eh   " .pow ($v1, $v2);
        echo "<br/><br/>A raiz de $v1 e " .sqrt ($v1);
        echo "<br/><br/>O valor de $v2 arredondamento e " .round ($v2);
        echo "<br/><br/>A parte inteira de $v2 e " .intval ($v2);
        echo "<br/><br/>O valor de $v1 em moeda e " .number_format($v1,2,",",".");
     
        ?>
        </div>
    </body>
        
</html>
