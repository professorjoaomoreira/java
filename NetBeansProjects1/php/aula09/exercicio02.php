<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio 02</title>
    </head>
    <body
    <div>
        <h1>exercicio02</h1>
        
        <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "voce nasceu em $a e tera $i anos.<br>";
        if ($i >= 16){
            $tipoVoto = "nao vota";               
        }
            
 else {
     if ($i >=16 && $i <18){
         $tipoVoto = "Voto opcional";
     }
 else {
     $tipoVoto = "voto obrigatorio"; 
     }          
                
}
echo "Para essa idade $tipoVoto";
      
        ?>
        <a href="exercicio02.html"><br/><br/>Voltar</a>
    </div>
        
    </body>
</html>
