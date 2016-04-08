<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>03 color</title>
        <link rel="stylesheet" href="css/estilo.css">
        <?php
			$txt = isset ($_GET["t"])?$_GET["t"]: "Texto Generico";
			$tam = isset ($_GET["tam"])?$_GET["tam"]: "12pt";
			$cor = isset ($_GET["cor"])?$_GET["cor"]: "#000000";
		?>
		<style>
		span.texto
		font-size:<?php echo $tam;?>;
		color:<?php echo $cor;?>;
		
		
		</style>
    </head>
    <body>
		<div>
			<?php
			echo $txt;
			?>
			echo 
		<h1>03 color</h1>
        
        
      </div>
    </body>
</html>
