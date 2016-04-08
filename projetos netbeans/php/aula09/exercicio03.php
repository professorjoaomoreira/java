<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio 03</title>
    </head>    <body
    <div>
        <h1>exercicio03</h1>
        
        <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "voce nasceu em $a e tera $i anos.<br>";
if ($i < 16){
            $tipoVoto = "nao vota";               
        }
            
elseif (($i >=16 && $i < 18)|| ($i > 65)){
         $tipoVoto = "Voto opcional";
     }
else {
     $tipoVoto = "voto obrigatorio"; 
     }                      

echo "Para essa idade $tipoVoto";
      
        ?>
        <a href="exercicio03.html"><br/><br/>Voltar</a>
    </div>
        
    </body>
</html>
