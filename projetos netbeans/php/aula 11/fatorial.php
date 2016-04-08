<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11 - Fatorial </title>
    <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <div>
        <?php
        $v =  isset($_GET["val"])?$_GET["val"]:1;
         echo "<h1>Calculando o fatorial de $v</h1>";
         $c = $v;
         $fat =1;
         do{
             $fat = $fat * $c;
             $c--;
         }while ($c >= 1);
         
         echo"<h2>$v != $fat</h2>";
    ?>
        </div>
        <p><a href="fatorial.html"class="foco1">Voltar</a>
    </body>
</html>
