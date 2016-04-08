<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>calculo da raiz</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor eh igual a  " .number_format($rq,2);
        ?>
        <br/><br/>
        <a href="form.php">Voltar</a>
    </body>
</html>
