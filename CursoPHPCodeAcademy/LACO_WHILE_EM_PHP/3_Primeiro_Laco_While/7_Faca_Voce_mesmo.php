<!DOCTYPE html>
<html>
    <head>
		<title>Seu próprio laço do-while</title>
        <link type='text/css' rel='stylesheet' href='Estilo.css'/>
	</head>
	<body>
    <?php
        //Escreva seu laço do-while abaixo
        $Condicao=false;
        do{
            echo "<p>Executando o laço mesmo sendo falso.</p>";
        }while ($Condicao);
        echo "<p>Agora o laço parou.</p>";
    ?>
    </body>
</html>
