<!DOCTYPE html>
<html>
    <head>
		<title>Mais do-while</title>
	</head>
	<body>
    <?php
		$loopCond = false;
		do {
			echo "<p>O la�o foi executado mesmo com a condi��o sendo falsa.</p>";
	}	while ($loopCond);
		
		
		echo "<p>Agora o la�o parou de ser executado.</p>";
    ?>
    </body>
</html>

