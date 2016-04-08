<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 07-Operacao</title>
    </head>
    <body>
        <?php
            $ano = $_GET["an"];
            $idade = 2015 - $ano;
 echo "Quem nasceu em ano $ano tem idade de $idade anos.";
 $tipo = ($idade>=18 && $idade<65)?"EH OBRIGATORIO":"NAO EH OBRIGATORIO";
            echo "<br/><br/>E dessa forma seu voto: $tipo";        
               
            ?>
    </body>
</html>
