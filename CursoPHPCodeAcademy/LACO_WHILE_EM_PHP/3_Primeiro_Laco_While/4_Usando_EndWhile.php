<!DOCTYPE html>
<html>
    <head>
		<title>Seu pr�prio la�o</title>
        <link type='text/css' rel='stylesheet' href='estilo.css'/>
	</head>
	<body>
    <?php
	//Adicione um la�o while abaixo
	$Condicao=true;
    while($Condicao==true):
        echo '<p>O laco com endwhile esta em execucao.</p>';
    	echo "<div class=\"coin\">H</div>";
        $Condicao=false;
    endwhile;
    echo '<p>O laco com endwhile esta parado.</p>';
    ?>
    </body>
</html>