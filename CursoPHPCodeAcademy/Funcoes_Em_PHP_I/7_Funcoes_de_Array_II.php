<html>
    <p>
	<?php
	// Crie um array com vários elementos,
	// e então ordene-o e imprima os elementos na tela
    $meu_array=array(1,9,8,3,55,897,21,0,26);
    sort($meu_array);
    print join (" , ",$meu_array);
	?>
	</p>
	<p>
	<?php
	// Faça a ordenação inversa do array e imprima os elementos na tela
    $meu_array=array(1,9,8,3,55,897,21,0,26);
    rsort($meu_array);
    print join (" , ",$meu_array);
	?>
	</p>
</html>