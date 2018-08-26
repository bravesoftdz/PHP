<!DOCTYPE html>
<html>
    <head>
		<title>Mais do-while</title>
	</head>
	<body>
    <?php
		$loopCond = false;
		do {
			echo "<p>O laço foi executado mesmo com a condição sendo falsa.</p>";
	}	while ($loopCond);
		
		
		echo "<p>Agora o laço parou de ser executado.</p>";
    ?>
    </body>
</html>

