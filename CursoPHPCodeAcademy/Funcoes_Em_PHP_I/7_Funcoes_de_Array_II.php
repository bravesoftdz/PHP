<html>
    <p>
	<?php
	// Crie um array com v�rios elementos,
	// e ent�o ordene-o e imprima os elementos na tela
    $meu_array=array(1,9,8,3,55,897,21,0,26);
    sort($meu_array);
    print join (" , ",$meu_array);
	?>
	</p>
	<p>
	<?php
	// Fa�a a ordena��o inversa do array e imprima os elementos na tela
    $meu_array=array(1,9,8,3,55,897,21,0,26);
    rsort($meu_array);
    print join (" , ",$meu_array);
	?>
	</p>
</html>