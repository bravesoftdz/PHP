<?php

$info = array('Caf�', 'marrom', 'cafe�na');

// Listando todas as vari�veis
list($bebida, $cor, $substancia) = $info;
echo "$bebida � $cor e $substancia o faz especial.\n";

// Listando apenas alguns deles
list($bebida, , $substancia) = $info;
echo "$bebida tem $substancia.\n";

// Ou ignoramos os primeiros valores para conseguir apenas o �ltimo 
list( , , $substancia) = $info;
echo "I need $substancia!\n";

// list() n�o funciona com strings
list($bar) = "abcde";
var_dump($bar); // NULL
?>
