<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 07-Operacao</title>
    </head>
    <body>
        <?php
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1+$nota2)/2;
                echo "A media entre $nota1 e $nota2 eh $m<br/>";    
                    $sit = ($m >= 7)?"APROVADO":"REPROVADO";
                echo "A situacao do aluno eh $sit";
               
            ?>
    </body>
</html>
