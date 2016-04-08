<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>03 exercicio</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
		<div>
		
        
        <form method="get" action="03color.php">
        
        <label for="itxt">Texto:</label>
        <input type="text" name="t"id="itxt"/><br/>
	    <label for="itam">Tamanho</label>
		<select name="itam" id="itam">
		<option value="8pt">8</option>
		<option value="10pt">10</option>
		<option value="14pt">14</option>
		<option value="20pt">20</option>
		<option value="40pt">40</option>
		</select><br/>
		
		<label for="icor">Cor: </label>
        <input type="color" name="cor"id="cor"/><br/>
		
		
        <input type="submit" value="Gerar"/>

		
        </form>
      </div>
    </body>
</html>
