<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 07-Operacao</title>
    </head>
    <body>
        <?php
            $n1 = $_GET["a"];
            $n2= $_GET["b"];
            $tipo = $_GET["op"];
        echo "os valores passados foram $n1 e $n2<br/>";
        $r = ($tipo =="s")?$n1+$n2:$n1*$n2;
        echo "O resultado sera $r";
        ?>
    </body>
</html>
