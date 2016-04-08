<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>Aula05 - Operações Aritmeticas</title>
    </head>
    <body>
        <div>
        <h1>Aula05, Operações Aritmeticas</h1> 
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        
        
        $m = ($n1+$n2) /2;
        
        echo "A Soma vale = ". ($n1+$n2);
        echo "<br/>A subtracao vale =  ". ($n1-$n2);
        echo "<br/>A multiplicacao vale = ". ($n1*$n2);
        echo "<br/>A divisao vale = ". ($n1/$n2);
        echo "<br/>O modulo vale = ". ($n1%$n2);
        
        echo "<br/><br/>A media entre n1 e n2 eh = ". ($m);
        
        ?>
        </div>
    </body>
        
</html>
