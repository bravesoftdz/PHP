<?php

/* 
Iterando no Laço
Um laço é uma estrutura que diz a um computador para executar um conjunto de instruções 
 * várias vezes. Se você tem um processo que você quer que seja repetido centenas de 
 * vezes, é interessante colocá-lo dentro de um laço, assim você não precisa escrever
 *  centenas de linhas de código.
Se você está fazendo os cursos em ordem, você já viu como um laço for permite 
 * um determinado número de iterações. Mas e no caso de uma situação na qual
 *  (devido à aleatoriedade, talvez) você não sabe quantas vezes o laço deve 
 * se repetir? Nesse caso, você pode usar um laço while.

Um laço while vai ser executado enquanto uma certa condição for verdadeira. 
 * Por exemplo, o laço no editor vai simular lançamentos de moedas enquanto 
 * o número de caras obtidas de forma consecutiva for menor que 3.

 */
?>
<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>Jogando Moedas</title>
	</head>
	<body>
	<p>Vamos jogar uma moeda até obtermos três caras em sequência!</p>
	<?php
	$headCount = 0;
	$flipCount = 0;
	while ($headCount < 3) {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			$headCount ++;
			echo "<div class=\"coin\">H</div>";
		}
		else {
			$headCount = 0;
			echo "<div class=\"coin\">T</div>";
		}
	}
	echo "<p>Precisamos de {$flipCount} jogadas!</p>";
	?>
    </body>
</html>























