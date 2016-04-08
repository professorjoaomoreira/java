<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 10 - exercicio -1 </title>
    <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <?php
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($o) {
    case 1:
        $r= $n * 2;
        break;
    
    case 2:
        $r = pow($n, 3);
         
        
        break;
      
    case 3:
        $r = sqrt($n); //outras form de raiz -> $n ^(1/2)ou $n * 0.5
    }
    echo "o resultado da operacao solicitada eh <span class='foco'>$r</span>";
    ?>
       
    </body>
    <br/><br/><a href="exercicio01.html"class="foco1">Voltar</a>
</html>
