<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio 01</title>
    </head>
    <body
    <div>
        <h1>exercicio01</h1>
        
        <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "voce nasceu em $a e tera $i anos.<br>";
        if ($i >= 18){
            $v = "ja pode votar";
            $d="ja pode dirigir";
                
        }
            
 else {
            $v = "nao pode votar";
            $d = "nao pode dirigir";    
                
      }
      echo "com essa idade voce $v e tambem $d";
        ?>
        <a href="exercicio01.html"><br/><br/>Voltar</a>
    </div>
    </body>
</html>
