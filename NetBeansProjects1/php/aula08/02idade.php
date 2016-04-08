<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <h1>idade<br/></h1>
        <div>
            
        </div>
        <?php
        $nome = isset ($_GET["nome"])?$_GET["nome"]:"[nao informado]";
        $ano = isset ($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset ($_GET["sexo"])? $_GET["sexo"]:"[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome eh $sexo e tem $idade anos. ";
        ?>
        <a href="02exercicio.php"><br/><br/>Voltar</a>
    </body>
</html>
