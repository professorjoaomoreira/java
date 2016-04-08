<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 13 - Tabuada Automatica</title>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <h1>Aula 13 - Tabuada Automatica</h1>
        <form method="get" action="tabuada.php">
        <select name="num">
        
       <?php
       for($c=1;$c<=10;$c++){
       echo"<option>$c</option>";}
        ?>
        </select>
            <input type="submit"value="Tabuada"/>
        </form>
    </body>
</html>
