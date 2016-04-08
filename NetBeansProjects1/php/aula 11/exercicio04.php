<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 11 - exercicio-4 </title>
    <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <h1>Aula 11 - exercicio-4</h1>
        <div>
            <form method="get"action="exercicio04.php">
                
                  <?php
                  $c=1;
                  do{
                      echo"$c";
                      $c++;
                  }
                  while ($c <= 10);
                  ?>
            </form>
            
            
      
        </div>
    </body>
</html>
