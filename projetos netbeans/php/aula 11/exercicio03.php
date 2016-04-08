<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11 - exercicio-2 </title>
    <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <h1>Aula 11 - exercicio-3</h1>
        <div>
            <form method="get"action="exercicio03.php">
                
                  <?php
                  $i=1;
                  while ($i <= 5){
                  $v="num".$i;
                  $url='v'.$i;
                  $$v=  isset($_GET[$url])?$_GET[$url]:0;
                  $i++;
                  }
                  echo"$num1 $num2 $num3 $num4 $num5";
                  
                  /*$i=1;
                  while ($i <= 5){
                  $v="num".$i;
                  echo"valor $i:".$$v."<br/>";
                  $i++;
                  }*/
                  ?>
                
                
                
                <input type="submit"value="enviar"class="foco"/>

            </form>
            
            
      
        </div>
    </body>
</html>
