<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css">
        <meta charset="UTF-8">
        <title>Referencia exercicio03- vinculo entre variaveis</title>
    </head>
    <body>
        <h1>Referencia  exercicio-03 - vinculo entre variaveis</h1>
        <?php
            
        $a = 3;
        $b = &$a;
        $b +=5;
        
        echo "A varialvel A vale $a";
        echo "<br/> A variavel B vale $b";
             
    #essa eh outra maneira de fazer comentario inlinem
    /*ro de documentacao em phpou podemos proceder assim para que fazer um registro de documentacao em php*/
        ?>
    </body>
</html>
