<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css">
        <meta charset="UTF-8">
        <title>Referencia exercicio04- Variavel variaveis</title>
    </head>
    <body>
        <h1>Referencia  exercicio-04 - Variavel variaveis</h1>
        <?php
            
        $x = "abc";
        $$x = "def";//aqui cria-se a variavel da variavel com o $$b
                
        echo "O conteudo da varialvel X e $x ";
        echo "A variavel criada recebeu o valor $abc ";
             
    #essa eh outra maneira de fazer comentario inlinem
    /*ro de documentacao em phpou podemos proceder assim para que fazer um registro de documentacao em php*/
        ?>
    </body>
</html>
