<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11 - exercicio-2 </title>
    <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <h1>Aula 11 - exercicio-2</h1>
        <div>
            <form method="get"action="exercicio02.php">
                
                  <?php
                  $c=1;
                  while ($c <= 5){
echo "valor $c: <input type='number' name='v $c'value=''0 max='100'min='0'/><br/>";
                  $c++;
                  }
                  ?>
                
                
                
                <input type="submit"value="enviar"class="foco"/>

            </form>
            
            
      
        </div>
    </body>
</html>
