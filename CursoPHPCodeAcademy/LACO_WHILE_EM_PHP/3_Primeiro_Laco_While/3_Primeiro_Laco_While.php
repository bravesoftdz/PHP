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
    while($Condicao==true){
        echo '<p>O laco esta em execucao.</p>';
        $Condicao=false;
    }
    echo '<p>O laco esta parado.</p>';
    ?>
    </body>
</html>