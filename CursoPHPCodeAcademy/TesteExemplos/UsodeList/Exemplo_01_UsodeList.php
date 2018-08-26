<?php

$info = array('Café', 'marrom', 'cafeína');

// Listando todas as variáveis
list($bebida, $cor, $substancia) = $info;
echo "$bebida é $cor e $substancia o faz especial.\n";

// Listando apenas alguns deles
list($bebida, , $substancia) = $info;
echo "$bebida tem $substancia.\n";

// Ou ignoramos os primeiros valores para conseguir apenas o último 
list( , , $substancia) = $info;
echo "I need $substancia!\n";

// list() não funciona com strings
list($bar) = "abcde";
var_dump($bar); // NULL
?>
