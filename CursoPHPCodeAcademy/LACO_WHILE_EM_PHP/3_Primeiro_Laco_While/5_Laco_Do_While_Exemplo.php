<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='estilo.css'/>
		<title>Vamos Jogar Mais Moedas!</title>
	</head>
	<body>
	<p>Vamos jogar uma moeda at� que o resultado seja cara!</p>
	<?php
	$flipCount = 0;
	do {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			echo "<div class=\"coin\">H</div>";
		}
		else {
			echo "<div class=\"coin\">T</div>";
		}
	} while ($flip);
	$verb = "foram";
	$last = "lan�amentos";
	if ($flipCount == 1) {
		$verb = "foi";
		$last = "lan�amento";
	}
	echo "<p>Para obtermos cara, {$verb} {$flipCount} {$last}!</p>";
	?>
    </body>
</html>
