<?php

/* 
Sintaxe do Laço 'For'
Legal, certo? Vamos passar pela sintaxe devagar, passo a passo. 
 * Eis um exemplo que apenas exibe, usando echo, os números de 0 a 9:

<?php
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
// exibe 0123456789
?>
Ele funciona assim:

Um laço for começa com a palavra reservada for. Isso informa ao PHP que ele deve se 
 * preparar para repetir!
A seguir vem um conjunto de parênteses (()). Dentro dos parênteses, informamos três
 *  coisas ao PHP, separadas por ponto e vírgula (;): onde começar o laço; onde terminar
 *  o laço; e o que fazer para ir para a próxima iteração do laço (por exemplo,
 *  incrementar o contador em um).
Depois da parte entre parênteses, a parte entre chaves ({}) informa ao PHP que 
 * código deve ser executado a cada iteração do laço.
Então, o exemplo acima diz: "Comece as iterações com $i igual a 0, e pare o
 *  laço antes que $i seja igual a 10, incremente o contador em 1 a cada iteração e,
 *  para cada uma delas, exiba, usando echo, o valor de $i."

($i++ é um forma simplificada para $i = $i + 1. Você vai ver muito disso!)

Instruções
Complete o laço for no editor substituindo ___ pela sintaxe correta do laço. 
 * Use o exemplo nas instruções como um guia!
 */

?>

<html>
  <head>
    <title>Laços For</title>
  </head>
  <body>
    <p>
      <?php
        // Imprime os cinco primeiros números pares
        for ($i = 2; $i < 11; $i = $i + 2){
          echo $i;
    }
      ?>
    </p>
  </body>
</html>

