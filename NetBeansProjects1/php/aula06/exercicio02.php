<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css">
        <meta charset="UTF-8">
        <title>Operadores exercicio02- incremento</title>
    </head>
    <body>
        <h1>
           Operadores  exercio02 - incremento
        </h1>
        <?php
            $atual = $_GET["aa"]; //essa linha vai pegar o ano na url
            echo "O ano atual e $atual e o ano anterior e ". --$atual; #essa eh outra maneira de fazer comentario inlinem
           /*ro de documentacao em phpou podemos proceder assim para que fazer um registro de documentacao em php*/
        ?>
    </body>
</html>
