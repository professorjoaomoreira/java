<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 07-Operacao</title>
    </head>
    <body>
        <?php
            $a = 3;
            $b = "3";
            $r = ($a ==$b)? "SIM":"NAO";
            $s = ($a ===$b)? "SIM":"NAO";
            
        echo "As variaveis A e B sao iguais? $r";//aqui vamos demostrar a diferenca entre igual e identicas
        echo "<br/><br/>As variaveis A e B sao identicas? $s";    
        ?>
    </body>
</html>
