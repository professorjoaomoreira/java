<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio_02</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
		<div>
		<h1>Exercicio_02</h1>
        
        <form method="get" action="02idade.php">
        
        Nome: <input type="text" name="nome"/><br/>
        Ano de nascimento: <input type="number" name="ano"/><br/>
        <fieldset><legend>sexo</legend>
        <input type="radio" name="sexo" id="masc" value="Homem" checked/>
        <label for="masc">Masculino</label><br/>
        <input type="radio" name="sexo" id="fem"value="Mulher"/>
        <label for="fem">Feminino</label>    
        </fieldset>
        <input type="submit" value="Enviar"/>
        </form>
      </div>
    </body>
</html>
