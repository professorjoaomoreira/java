<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css">
        <meta charset="UTF-8">
        <title>Operadores</title>
    </head>
    <body>
        <h1>
           Operadores 
        </h1>
        <?php
            $preco = $_GET["p"];
            echo"O preco do produto eh R$" . number_format($preco, 2);
            $preco += ($preco*10/100); 
            echo"<br/><br/>E o novo preco com 10% de aumento sera R$" . number_format($preco, 2);
        ?>
    </body>
</html>
